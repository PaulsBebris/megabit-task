<template>
  <div class="wrapper">
    <div class="list-wrapper">
      <div class="list-header">
        <h3>Newsletter emails</h3>
        <div class="sort-wrapper">
          <div class="sort-title">Filter by:</div>
          <div class="sort-filter-iterm" @click="sortList('email')">Email</div>
          <div class="sort-filter-iterm" @click="sortList('provider')">Provider</div>
          <div class="sort-filter-iterm" @click="sortList('registerdate')">Date</div>
        </div>
      </div>
      <div class="list-body">
        <table class="email-list">
          <tr>
            <th>Email</th>
            <th>Provider</th>
            <th>Reg. date</th>
          </tr>
          <tr class="email-list-item" v-for="(email, i) in emails" :key="i">
            <td class="item-email">{{email.email}}</td>
            <td class="item-provider">{{email.provider}}</td>
            <td class="item-date">{{email.registerdate}}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import store from '../../store/index'

export default {
  name: 'EmailList',
  data () {
    return {
      order: 'registerdate',
      sort: 'ASC'
    }
  },
  computed: {
    emails () {
      return store.state.emails
    }
  },
  methods: {
    sortList ($groupBy = 'registerdate', $sortType = 'ASC') {
      axios({
        method: 'post',
        url: 'http://localhost:8082/get-emails',
        headers: {
          'Content-Type': 'application/json',
          'Access-Control-Allow-origin': '*'
        },
        data: {
          order: $groupBy,
          sort: $sortType
        }
      })
        .then(emails => {
          store.commit('setEmails', emails.data)
        })
        .catch(e => console.log(e))
    }
  },
  beforeMount () {
    const _this = this
    axios({
      method: 'post',
      url: 'http://localhost:8082/get-emails',
      headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-origin': '*'
      },
      data: {
        order: _this.order,
        sort: _this.sort
      }
    })
      .then(emails => {
        store.commit('setEmails', emails.data)
      })
      .catch(e => console.log(e))
  }
}
</script>

<style>
.wrapper {
  display: flex;
  width: 100vw;
  justify-content: center;
}
.item-wrapper {
  display: flex;
}
.sort-wrapper {
  display: flex;
}
.sort-title {
  font-weight: bold;
  margin: 15px 0;
}
.sort-filter-iterm {
  color: #BB3333;
  margin-left: 10px;
  margin-top: 15px;;
}
.email-list {
  min-width: 250px;
}
.item-email {}
</style>
