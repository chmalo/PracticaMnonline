var EventBus = new Vue;

Vue.component('app-icon',{
    template: '<span :class="cssClases" aria-hidden="true"></span>',
    props: ['img'],

    computed: {
        cssClases: function (){
            return 'glyphicon glyphicon-' + this.img;
        }
    },
});

Vue.component('app-task', {
    data: function () {
        return {
            editing: false,
            draft: ''
        };
    },
    template: '#task-template',
    props: ['task', 'index'],

    created: function () {
        EventBus.$on('editing', function (index) {
            if(this.index != index) {
                console.log('Discarding: ' + this.index);
                this.discard();
            }
        }.bind(this));
    },

    methods: {
        toggleStatus: function () {
            this.task.pending = !this.task.pending
        },

        edit: function () {
            console.log('editing' + this.index);
            
            EventBus.$emit('editing', this.index);
            /*
            this.tasks.forEach(function () {
                task.editing = false;
            }); */

            this.draft = this.task.description;

            this.editing = true;
        },

        discard: function () {
            this.editing = false;
        },

        update: function (ask) {
            this.task.description = this.draft;

            this.editing = false;
        },

        remove: function () {
            this.$emit('remove', this.index);
        },
    }
});

var vm = new Vue({
    el: '#app',
    data: {
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
});