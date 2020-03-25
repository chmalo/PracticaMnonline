import Vue from 'vue'
import Router from 'vue-router'
import Tasks from './../components/tasks/Tasks.vue'
import TaskDetails from './../components/tasks/Details.vue'
import Dashboard from './../components/Dashboard.vue'


Vue.use(Router)

var router = new Router({
  routes: [{
      path: '/',
      component: Dashboard
    },
    {
      path: '/tasks',
      component: Tasks
    },
    {
      path: '/tasks/:id',
      component: TaskDetails,
      props: true
    }
  ]
});

export default router
