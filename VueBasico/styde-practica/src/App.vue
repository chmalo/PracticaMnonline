<template>
<div id="app" class="container">
        <h2>Tareas</h2>

        <ul class="list-group tasks">
           <li is="app-task" v-for="(task, index) in tasks"
           :tasks="tasks" :task="task" :index="index" @remove="deleteTask"></li>
        </ul>

        <br>
        <p><a @click="deleteCompleted">Eliminar tareas completadas</a></p>

        <form @submit.prevent="createTask" class="new-task-form">
            <br>
            <input v-model="new_task" type="text" class="form-control">
            <button class="btn btn-primary">Crear tarea</button>
        </form>

         <footer class="footer">
             <br>
            <p>&copy; Chmalo.net.</p>
        </footer>
    </div>

</template>

<script>
export default {
    el: '#app',
    data: function () {
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

    methods: {
        createTask: function(){
            this.tasks.push({
                description: this.new_task,
                pending: true,
                editing: false
            });

            this.new_task = '';
        },

        deleteTask: function (index) {
            this.tasks.splice(index, 1);
        },

        deleteCompleted: function () {
            this.tasks = this.tasks.filter(function (task) {
                return task.pending;
            });
        }
    },

    /*
    created: function () {
        this.tasks.forEach(function (task) {
            this.$set(task, 'editing', false)
        }.bind(this));
    } */
}
</script>

<style>
#app body {
  margin: 10px;
}
.container {
  max-width: 650px;
}
.container h2 {
  margin-bottom: 20px;
}
.tasks {
  margin-bottom: 40px;
}
.tasks a {
  text-decoration: none;
}
.tasks li {
  display: flex;
  justify-content: space-between;
}
.tasks li.editing {
  box-shadow: inset 0 0 5px #999;
}
.tasks output,
.tasks .description {
  flex: none;
  padding: 0 5px;
}
.tasks input {
  border: 0;
}
.tasks input:focus {
  outline: none;
}
.completed .description {
  text-decoration: line-through;
}
.completed,
.completed a {
  color: #999;
}
.new-task-form {
  display: flex;
}
.new-task-form input {
  margin-right: 10px;
}
.container footer {
  margin: 40px 0;
  padding-top: 20px;
  border-top: 1px solid #ccc;
  color: #999;
}
</style>


