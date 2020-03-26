<template>
    <div>
        <h2>Tareas</h2>

        <task-list :tasks="tasks"></task-list>

        <p><a @click="deleteCompleted">Eliminar tareas completadas</a></p>

        <h4>Crear:</h4>

        <task-form @created="createTask"></task-form>

        <h4>Imprimir:</h4>

        <task-form @created="alertTask"></task-form>

    </div>
</template>

<script>
import store from './../../router/index.js';
import TaskList from './List.vue';
import TaskForm from './CreateForm.vue';

export default {
  data() {
      return {
          new_task: '',
          tasks: store.state.tasks
      }
    },

    components: {
      'task-list': TaskList,
      'task-form': TaskForm,
    },

    methods: {
        createTask(task){
          this.tasks.push(task);
        },

        alertTask(task){
          alert(task.description);
        },

        deleteCompleted() {
          this.tasks = this.tasks.filter(task => task.pending);

          /*  this.tasks = this.tasks.filter(function (task) {
                return task.pending;
            });*/
        }
    },
}
</script>
