<template>
  <v-app>
    <c-header />

    <c-side-bar />
    
    <v-content>
      <v-slide-y-transition mode="out-in">
        <router-view></router-view>
      </v-slide-y-transition>
    </v-content>

    <c-footer />
<<<<<<< HEAD
<<<<<<< HEAD

    <c-alert />
    <!--<v-dialog v-model="dialog" fullscreen hide-overlay transition="dialogbottom-transition">
      <search />
    </v-dialog>-->

    <keep-alive>
      <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialogbottom-transition">
        <component :is="currentComponent"></component>
      </v-dialog>
    </keep-alive>
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
  </v-app>
</template>

<script>
  /* eslint-disable */
  import CHeader from '@/components/CHeader.vue'
  import CFooter from '@/components/CFooter.vue'
  import CSideBar from '@/components/CSideBar.vue'
<<<<<<< HEAD
<<<<<<< HEAD
  import CAlert from '@/components/CAlert.vue'
  import Search from '@/views/Search.vue'
  import Login from '@/views/Login.vue'
  import Register from '@/views/Register.vue'
  import Cart from '@/views/Cart.vue'
  import { mapActions, mapGetters } from 'vuex'
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c

  export default {
    name: 'App',
    components: {
      CHeader,
      CFooter,
      CSideBar,
<<<<<<< HEAD
<<<<<<< HEAD
      CAlert,
      Search,
      Login,
      Register,
      Cart,
    },
    methods: {
      ...mapActions({
        setStatusDialog : 'dialog/setStatus',
      }),
    },
    computed: {
      ...mapGetters({
          statusDialog : 'dialog/status',
          currentComponent : 'dialog/component'
      }),
      dialog: {
        get() {
          return this.statusDialog
        },
        set(value) {
          this.setStatusDialog(value)
        }
      },
    },
=======
    }
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
    }
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
  }


</script>

<style type="text/css">
  .v-toolbar {
    flex: 0 !important;
  }
  .v-application .py-3 {
    text-align: center !important;
  }
  .v-card__text {
    text-align: center !important;
  }
</style>