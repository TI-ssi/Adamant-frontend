import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

//css import
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'




// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)



var app = new Vue({
    el: '#vApp',
    data: {
        bilingual: true
    }
})

require('./bootstrap')
