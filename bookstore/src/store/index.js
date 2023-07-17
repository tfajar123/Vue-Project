import Vue from 'vue'
import Vuex from 'vuex'
<<<<<<< HEAD
<<<<<<< HEAD
import cart from '../store/cart'
import alert from '../store/alert'
import dialog from '../store/dialog'
import auth from '../store/auth'
import region from '../store/region'
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    sideBar: false,
<<<<<<< HEAD
<<<<<<< HEAD
    prevUrl: '',
  },
  getters: {
    sideBar: state => state.sideBar,
    prevUrl: state => state.prevUrl,
=======
  },
  getters: {
    sideBar: state => state.sideBar,
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
  },
  getters: {
    sideBar: state => state.sideBar,
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
  },
  mutations: {
    setSideBar: (state, value) => {
      state.sideBar = value
    },
<<<<<<< HEAD
<<<<<<< HEAD
    setPrevUrl: (state, value) => {
      state.prevUrl = value;
    },
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
  },
  actions: {
    setSideBar: ({commit}, value) => {
      commit('setSideBar', value)
    },
<<<<<<< HEAD
<<<<<<< HEAD
    setPrevUrl: ({ commit }, value) => {
      commit('setPrevUrl', value)
    },
  },
  modules: {
    cart,
    alert,
    dialog,
    auth,
    region,
=======
  },
  modules: {
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
  },
  modules: {
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
  }
})
