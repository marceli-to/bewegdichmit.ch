
<template>
  <select
    :id="id"
    :value="modelValue"
    @input="updateInput"
    class="bg-white outline-none border-none ring-0 focus:ring-0 p-10 w-full placeholder:text-black"
  >
    <option 
      v-for="option in options" 
      :key="option.value" 
      :value="option.value">
      {{ option.label }}
    </option>
  </select>
</template>
<script>
export default {
  name: "FormSelect",
  props: {
    id: {
      type: String,
      default: "",
    },
    modelValue: {
      type: [String, Number],
      default: "",
    },
    options: {
      type: Array,
      default: () => [],
    },
    error: {
      type: Boolean,
      default: false,
    },
  },
  methods: {
    updateInput(event) {
      this.$emit("update:modelValue", event.target.value);
    },
  },
};
</script>