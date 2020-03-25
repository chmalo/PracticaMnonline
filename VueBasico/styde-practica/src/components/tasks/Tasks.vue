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
import TaskList from './List.vue';
import TaskForm from './CreateForm.vue';

export default {
  data() {
      return {
          new_task: '',
          tasks:[
            {
                description: 'Aprender Vue.js',
                pending: true
            },
            {
                description: 'Mejorar el lenguaje',
                pending: true
            },
            {
                description: 'Crear una API',
                pending: false
            }
        ]
      }
    },

    components: {
      'task-list': TaskList,
      'task-form': TaskForm
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

    created() {
        this.tasks.forEach((task, index) => this.$set(task, 'id', index +1));

      /*  this.tasks.forEach(function (task, index) {
            this.$set(task, 'id', index +1);
        }.bind(this)); */
    }
}
</script>
