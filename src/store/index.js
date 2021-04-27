import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    emails: []
  },
  mutations: {
    setEmails (state, $emails) {
      state.emails = $emails
    }
  },
  actions: {
  },
  modules: {
  }
})
