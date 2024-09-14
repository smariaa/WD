<template>
  <li class="todo-item">
    <div class="checkbox-wrapper">
      <input 
        type="checkbox" 
        id="checkbox-{{ todo.id }}" 
        v-model="todo.completed" 
        @change="$emit('toggle-completed', todo.id)" 
      />
      <label :for="'checkbox-' + todo.id">
        <span class="custom-checkbox" :class="{ completed: todo.completed }"></span>
      </label>
    </div>
    <span :class="{ completed: todo.completed }">{{ todo.text }}</span>
    <button @click="$emit('delete-todo', todo.id)">Delete</button>
  </li>
</template>

<script>
export default {
  props: {
    todo: {
      type: Object,
      required: true
    }
  }
}
</script>

<style scoped>
.todo-item {
  display: flex;
  align-items: center;
  margin-bottom: 8px;
}

.checkbox-wrapper {
  display: flex;
  align-items: center;
  margin-right: 10px;
}

input[type="checkbox"] {
  display: none; /* Hide the default checkbox */
}

label {
  display: inline-block;
  cursor: pointer;
}

.custom-checkbox {
  width: 20px;
  height: 20px;
  border: 2px solid #ccc;
  background-color: #fff;
  border-radius: 4px;
  position: relative;
}

.custom-checkbox.completed {
  background-color: #4caf50; /* Change color to indicate completion */
}

.custom-checkbox.completed::after {
  content: '✘'; /* Unicode for a cross */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 16px;
}

span.completed {
  text-decoration: line-through;
  color: gray;
}
</style>
