import Vue from 'vue'
import App from './App.vue'
import { router } from './routes.js'
import { store } from './store.js'

Vue.config.productionTip = false

Vue.component('runningTile', require('./components/runningTile.vue'));

new Vue({
  store,
  router,
  render: h => h(App),
}).$mount('#app')
