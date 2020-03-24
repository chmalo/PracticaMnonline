<template>
  <ul class="list-group tasks-list">
     <app-task v-for="(task, index) in tasks" :key="task.id"
          :tasks="tasks" :task="task" :index="index" @remove="deleteTask"></app-task>
  </ul>

</template>


<script>
import Task from './Task.vue';

export default {
  props: ['tasks'],

  methods: {
    deleteTask(index) {
      this.tasks.splice(index, 1);
    }

  },
  components: {
      'app-task': Task
    },

}
</script>

<style>
 .tasks-list {
    margin-bottom: 40px;
  }
</style>
