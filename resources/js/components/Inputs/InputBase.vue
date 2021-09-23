<template>
  <div class="container--input">
    <label :for="id" v-if="label">{{ label }}</label>
    <input
      :type="type"
      :required="required"
      :name="id"
      :id="id"
      :placeholder="placeholderDefault"
      :disabled="disabled"
      :readonly="readonly"
      :value="value"
      @input="$emit('update', $event.target.value)"
    >
  </div>
</template>

<script>
export default {
  name: 'InputBase',
  props: {
    value: {
      type: String,
      default: '',
    },
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
    readonly: {
      type: Boolean,
      default: false,
    },
    required: {
      type: Boolean,
      default: false,
    },
  },
  model: { prop: 'value', event: 'update' },
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
