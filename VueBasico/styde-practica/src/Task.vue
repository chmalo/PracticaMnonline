<template>
  <li class="list-group-item task-list-item"
  :class="{ editing: editing, completed: !task.pending }"
>
                <a @click="toggleStatus">
                    <app-icon :img="task.pending ? 'unc hecked' : 'check'" aria-hidden="true"></app-icon>
                </a>

                <template v-if="!editing">
                    <span  class="description">{{ task.description }}</span>
                        <div>
                            <a @click="edit">
                             <app-icon img="edit"></app-icon>
                            </a>
                            <a @click="remove">
                                <app-icon img="trash"></app-icon>
                            </a>
                        </div>

                </template>

                <template v-else type="text">
                     <input type="text" v-model="draft">

                     <div>
                        <a @click="update">
                            <app-icon img="ok"></app-icon>
                        </a>
                        <a @click="discard">
                            <app-icon img="remove"></app-icon>
                        </a>
                    </div>
                </template>
            </li>

</template>

<script>
import EventBus from './event-bus.js';
import Icon from './Icon.vue';

export default {
    data() {
        return {
            editing: false,
            draft: ''
        };
    },
    template: '#task-template',
    props: ['task', 'index'],

    created() {
        EventBus.$on('editing', (index) => {
            if(this.index != index) {
                this.discard();
            }
        });
    },

    components: {
      'app-icon': Icon

      },

    methods: {
        toggleStatus() {
            this.task.pending = !this.task.pending
        },

        edit() {
            EventBus.$emit('editing', this.index);
            /*
            this.tasks.forEach(function () {
                task.editing = false;
            }); */

            this.draft = this.task.description;

            this.editing = true;
        },

        discard() {
            this.editing = false;
        },

        update(ask) {
            this.task.description = this.draft;

            this.editing = false;
        },

        remove() {
            this.$emit('remove', this.index);
        },
    }
}
</script>

<style>
.task-list-item {
    display: flex;
    justify-content: space-between;
  }

  .task-list-item a {
    text-decoration: none;
  }

  .task-list-item.editing {
    box-shadow: inset 0 0 5px #999;
  }

  .task-list-item input, .task-list-item .description {
    flex: 1;
    padding: 0 5px;
  }

  .task-list-item input {
    border: 0;
  }

  .task-list-item input:focus {
    outline: none;
  }

  .task-list-item.completed .description {
    text-decoration: line-through;
  }

  .task-list-item.completed, .task-list-item.completed a {
    color: #999;
  }
</style>
