<template>

  <li @click="select" class="list-group-item task-list-item"
  :class="{completed: !task.pending}"
>
          <a @click.stop="toggleStatus">
             <app-icon :img="task.pending ? 'unc hecked' : 'check'" aria-hidden="true"></app-icon>
          </a>

         <span class="description">{{ task.description }}</span>
  </li>

</template>

<script>
import Icon from './../Icon.vue';

export default {
    data() {
        return {
            draft: ''
        };
    },
    template: '#task-template',
    props: ['task', 'index'],

    components: {
      'app-icon': Icon

      },

    methods: {
        select(){
          this.$router.push('/tasks/'+this.task.id);
        },
        toggleStatus() {
            this.task.pending = !this.task.pending
        },
    }
}
</script>

<style>
.list-group-item.task-list-item {
    display: flex;
    justify-content: space-between;
  }

  .task-list-item a {
    text-decoration: none;
  }

  .task-list-item input, .task-list-item .description {
    flex: 1;
    padding: 0 5px;
  }

  .task-list-item.completed .description {
    text-decoration: line-through;
  }

  .task-list-item.completed, .task-list-item.completed a {
    color: #999;
  }
</style>
