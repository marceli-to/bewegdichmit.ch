<template>
  <textarea
    :id="id"
    :type="type"
    :value="modelValue"
    :placeholder="placeholder"
    @input="updateInput"
    :class="[$props.error ? 'bg-red-600' : 'bg-white', 'bg-white outline-none border-none ring-0 focus:ring-0 p-10 w-full placeholder:text-black min-h-[150px]']">
  </textarea>
</template>
<script>
export default {
  name: "FormTextarea",
  props: {
    
    id: {
      type: String,
      default: "",
    },
    
    modelValue: {
      type: [String, Number],
      default: "",
    },

    type: {
      type: String,
      default: "text",
    },

    placeholder: {
      type: String,
      default: "",
    },

    error: {
      type: Boolean,
      default: false,
    },
  },

  methods: {
    updateInput(event) {
      this.$emit("update:modelValue", event.target.value);
    }
  }
};
</script>