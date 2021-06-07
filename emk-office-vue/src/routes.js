import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter)

import startseite from './components/startseite.vue'
import vpn from './components/vpn.vue'
import downloads from './components/downloads.vue'
import jk2021 from './components/jk2021.vue'

const urlprefix = ''

const routes = [
    {
        path: urlprefix + '/',
        component: startseite, 
    },
    {
        path: urlprefix + '/vpn',
        component: vpn, 
    },
    {
        path: urlprefix + '/downloads',
        component: downloads, 
    },
    {
        path:  urlprefix + '/jk2021',
        component: jk2021, 
    }
]

export const router = new VueRouter({
    mode: 'history',
    routes
})