// import VueRecaptcha from "vue-recaptcha";
//
// require('./bootstrap');
//
// window.Vue = require('vue');
//
// import FlashMessage from "@smartweb/vue-flash-message";
//
// Vue.use(FlashMessage, {name: "flashMessage", tag: "flashmessage"});
//
// var Lang = require('lang.js');
//
// // get the data source
// import translations from '../assets/js/vue-translations.js';
// import axios from 'axios'
// import VueAxios from 'vue-axios'
// import VueMask from 'v-mask'
//
// import ru from 'vee-validate/dist/locale/ru';
// import VeeValidate, { Validator } from 'vee-validate';
// // import Vue from "vue/types/vue";
//
// // Install the Plugin.
// Vue.use(VeeValidate);
// Vue.use(VueMask);
// Vue.use(VueAxios, axios);
// Vue.use(Dropdown)
// import Dropdown from 'bp-vuejs-dropdown';
// // this is why we used the --no-lib in our commandline
// var lang = new Lang();
// lang.setLocale('ru');
// Validator.localize('ru', ru);
//
// // 'en' is the default, but if you need this for other languages
// // there are fallbacks in Lang.js you can use, as well
// // if (lang.getLocale() === 'undefined'){
// //     lang.setLocale('en');
// // }
//
// // Lang.js works off a top-level key called "messages"; this line
// // just hydrates the object with 'vue-translations.js'
// lang.setMessages(translations);
//
// // This is our normal Vue filter. '...args' allows us to use any
// // number of parameters in our strings
// Vue.filter('trans', (...args) => {
//     return lang.get(...args);
// });
//
//
// Vue.component('send-report', require('./components/report/Report.vue').default);
//
// const login = new Vue({
//     el: '#report',
//     data: {
//         customStyle: {
//             flashMessageStyle: {
//                 background: "linear-gradient(#e66465, #9198e5)"
//             },
//         },
//         isReissue: false,
//         isPreview: false,
//         data: {
//             date_beg: "",
//             date_end: "",
//         },
//     },
//     methods: {
//         nextBtnClicked(){
//             this.step++;
//             if (this.step > this.statusStep) this.statusStep++
//         },
//
//         buyBtnClicked (){
//             alert('to buy');
//         },
//
//         notify (status, title, text) {
//             this.flashMessage.show(
//                 {
//                     status: status,
//                     title: title,
//                     message: text,
//                     flashMessageStyle: this.customStyle.flashMessageStyle,
//                 }
//             );
//         },
//         renewPage(){
//             this.isReissue = true;
//         },
//         getLocal(){
//             return lang.locale
//         },
//         previewPage(){
//             this.isPreview = true;
//         },
//         closPreviewPage(){
//             this.isPreview = false;
//         }
//
//     },
//     computed: {
//     }
// });
