<template>
<div id="app" class="container">
        <h2 class="subtitle">Tareas</h2>

        <app-task-list :tasks="tasks"></app-task-list>

        <app-task-list :tasks="tasks2"></app-task-list>


        <p><a @click="deleteCompleted">Eliminar tareas completadas</a></p>

        <h2 >Crear:</h2>

        <app-task-form @created="createTask"></app-task-form>

        <h4>Imprimir:</h4>

        <app-task-form @created="alertTask"></app-task-form>


         <footer class="footer">
            <p>&copy; Chmalo.net.</p>
        </footer>
    </div>

</template>

<script>

import TaskList from './TaskList.vue';
import TaskForm from './TaskForm.vue';

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
        ],
            tasks2:[
            {
                description: 'Aprender laravel',
                pending: true
            },
            {
                description: 'Aprender Java Script',
                pending: true
            }
        ]
      }
    },

    components: {
      'app-task-list': TaskList,
      'app-task-form': TaskForm
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

<style>

  body {
    margin: 10px;
  }

  .container {
    max-width: 650px;
  }

  .container h2 {
    margin-bottom: 20px;
  }

  .container footer {
    margin: 40px 0;
    padding-top: 20px;
    border-top: 1px solid #ccc;
    color: #999;
  }
</style>


