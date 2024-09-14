<template>
  <div>
    <input 
      type="text" 
      v-model="newTodoText" 
      @keyup.enter="addTodo" 
      placeholder="Add a new todo" 
    />
    <button @click="addTodo">Add</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      newTodoText: ''
    };
  },
  methods: {
    addTodo() {
      if (this.newTodoText.trim()) {
        this.$emit('add-todo', this.newTodoText);
        this.newTodoText = '';  // Clear input field after adding
      }
    }
  }
}
</script>
