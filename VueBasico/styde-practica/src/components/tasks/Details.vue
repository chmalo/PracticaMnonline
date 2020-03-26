<template>
  <div v-if="task">
    <h2>{{ task.title }}</h2>

    <p> {{ task.description }}</p>
  </div>
</template>

<script>
import store from './../../router/index.js'

export default {
    props: [ 'id' ],
    data() {
      return {
        task: null
      }
    },
    created() {
      this.findTask();
    },
    watch: {
      id: 'findTask'
    },
    methods: {
      findTask() {
        this.task = store.findTask(this.id);

        not_fount_unless(this.task);
      }

    },
}
</script>
