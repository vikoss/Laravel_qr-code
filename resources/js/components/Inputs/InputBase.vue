<template>
  <div class="container--input">
    <label :for="id" v-if="label">{{ label }}</label>
    <input
      :type="type"
      :name="id"
      :id="id"
      :placeholder="placeholderDefault"
      :disabled="disabled"
    >
  </div>
</template>

<script>
export default {
  name: 'InputBase',
  props: {
    type: {
      type: String,
      default: 'text',
    },
    id: {
      type: String,
      default: '',
    },
    placeholder: {
      type: String,
      default: '',
    },
    label: {
      type: String,
      default: '',
    },
    disabled: {
      type: Boolean,
      default: false,
    },
  },
  computed: {
    placeholderDefault() {
      return this.placeholder === ''
        ? `Escribe tu ${this.label.toLowerCase()}`
        : this.placeholder;
    },
  },
};
</script>

<style scoped>

input {
  display: block;
  width: 100%;
  height: 40px;
  border-radius: 4px;
  border-width: 1px;
  border-color: #828282;
  border-style: solid;
  outline: none;
  /* padding-left: 5px;
  padding-right: 5px; */
  padding: 10px;
}

label {
  color: #2A2A2B;
  margin: 0px;
  margin-left: 2px;
}

.container--input {
  
}

</style>
