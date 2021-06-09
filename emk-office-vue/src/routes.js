import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter)

import startseite from './components/startseite.vue'
import vpn from './components/vpn.vue'
import downloads from './components/downloads.vue'
import jk2021 from './components/jk2021.vue'
//import { component } from 'vue/types/umd'
import jkStartseite from './components/jkStartseite.vue'
import jkAnmeldung from './components/jkAnmeldung.vue'
import jkAnleitung from './components/jkAnleitung.vue'
import jkProgramm from './components/jkProgramm.vue'
import jkAnleitungWahl from './components/jkAnleitungWahl.vue'


const urlprefix = ''

const routes = [
    {
        path: urlprefix + '/',
        component: startseite,
        children: []
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
        children: [
            {
                path: '/',
                component: jkStartseite,
            },
            {
                path: 'anmeldung',
                component: jkAnmeldung,
            },
            {
                path: 'anleitung',
                component: jkAnleitung,
            },
            {
                path: 'anleitungWahl',
                component: jkAnleitungWahl,
            },
            {
                path: 'programm',
                component: jkProgramm,
            }
        ]
    }
]

export const router = new VueRouter({
    mode: 'history',
    routes
})