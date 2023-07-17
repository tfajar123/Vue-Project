<template>
    <v-app-bar dark color="primary">

        <!-- <v-app-bar-nav-icon @click="setSideBar(!sideBar)"></v-app-bar-nav-icon>-->
        <v-app-bar-nav-icon v-if="isHome" @click="setSideBar(!sideBar)"></v-app-bar-nav-icon>
        <v-btn v-if="!isHome" icon @click="$router.go(-1)">
            <v-icon>arrow_back</v-icon>
        </v-btn>

        <v-toolbar-title class="white--text">Bookstore</v-toolbar-title>

        <v-spacer></v-spacer>

<<<<<<< HEAD
<<<<<<< HEAD
        <v-btn icon @click = "cart()">
            <v-badge left overlap color="orange">
                <span slot="badge" v-if="countCart > 0">{{ countCart }}</span>
                <span slot="badge" v-else>0</span>
=======
        <v-btn icon>
            <v-badge left overlap color="orange">
                <span slot="badge">1</span>
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
        <v-btn icon>
            <v-badge left overlap color="orange">
                <span slot="badge">1</span>
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
                <v-icon>shopping_cart</v-icon>
            </v-badge>
        </v-btn>

<<<<<<< HEAD
<<<<<<< HEAD
        <v-text-field v-if="isHome" @click="search()" slot="extension" hide-details append-icon="mic" text label="Search" prepend-inner-icon="search" solo-inverted></v-text-field>
=======
        <v-text-field v-if="isHome" slot="extension" hide-details append-icon="mic" text label="Search" prepend-inner-icon="search" solo-inverted></v-text-field>
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
        <v-text-field v-if="isHome" slot="extension" hide-details append-icon="mic" text label="Search" prepend-inner-icon="search" solo-inverted></v-text-field>
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
    </v-app-bar>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex'
    export default {
        name: 'c-header',
        methods: {
            ...mapActions({
                setSideBar : 'setSideBar',
<<<<<<< HEAD
<<<<<<< HEAD
                setStatusDialog : 'dialog/setStatus',
                setComponent : 'dialog/setComponent'
            }),
            search(){
                this.setStatusDialog(true)
                this.setComponent('search')
                this.setSideBar(false)
            },
            cart(){
                this.setStatusDialog(true)
                this.setComponent('cart')
                this.setSideBar(false)
            }
=======
            }),
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
            }),
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
        },
        computed: {
            ...mapGetters({
                sideBar : 'sideBar',
<<<<<<< HEAD
<<<<<<< HEAD
                countCart : 'cart/count',
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
            }),
            isHome () {
                return (this.$route.path==='/')
            },
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
</script>
=======
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
</script>

<style lang="scss" scoped>

<<<<<<< HEAD
</style>
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
</style>
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
