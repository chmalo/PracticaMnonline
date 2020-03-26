import Vue from 'vue'
import EventBus from './event-bus.js'
import router from './router'
import App from './components/App.vue'


window.EventBus = EventBus

window.not_fount = function () {
  console.log('NOT FOUNT:' + router.currentRoute.fullPath);

  router.replace('/404');
};

window.not_fount_unless = function (condition) {
    if (! condition) {
      not_fount();
    }
}

var vm = new Vue({
  el: '#app',
  router,
  render: h => h(App)
})
