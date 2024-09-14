<template>
  <div>
    <ul v-if="todos.length">
      <TodoItem 
        v-for="todo in todos" 
        :key="todo.id" 
        :todo="todo" 
        @delete-todo="deleteTodo" 
        @toggle-completed="toggleCompleted" 
      />
    </ul>
    <p v-else>No todos available. Add a new todo!</p>
  </div>
</template>

<script>
import TodoItem from './TodoItem.vue';

export default {
  components: {
    TodoItem
  },
  props: {
    todos: {
      type: Array,
      required: true
    }
  },
  methods: {
    deleteTodo(id) {
      this.$emit('delete-todo', id);
    },
    toggleCompleted(id) {
      this.$emit('toggle-completed', id);
    }
  }
}
</script>

<style scoped>
p {
  text-align: center;
  color: #888;
}
</style>
