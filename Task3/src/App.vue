<template>
  <div>
    <h1>My Todo App</h1>
    <TodoInput @add-todo="addTodo" />
    <TodoList 
      :todos="todos" 
      @delete-todo="deleteTodo" 
      @toggle-completed="toggleCompleted" 
    />
  </div>
</template>

<script>
import TodoInput from './components/TodoInput.vue';
import TodoList from './components/TodoList.vue';

export default {
  components: {
    TodoInput,
    TodoList
  },
  data() {
    return {
      todos: [] // Initialize as empty
    };
  },
  methods: {
    addTodo(newTodoText) {
      if (newTodoText.trim()) {
        const newTodo = {
          id: Date.now(), // Unique ID for the todo
          text: newTodoText,
          completed: false
        };
        this.todos.push(newTodo); // Add the new todo to the list
      }
    },
    deleteTodo(todoId) {
      this.todos = this.todos.filter(todo => todo.id !== todoId);
    },
    toggleCompleted(todoId) {
      const todo = this.todos.find(todo => todo.id === todoId);
      if (todo) {
        todo.completed = !todo.completed;
      }
    }
  }
}
</script>

<style scoped>
h1 {
  text-align: center;
  margin-bottom: 20px;
}
</style>
