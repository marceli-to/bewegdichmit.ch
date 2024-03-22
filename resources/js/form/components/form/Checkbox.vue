<template>
  <div :class="cls">
    <label :for="id" class="hyphens-auto cursor-pointer flex items-start w-full">
      <input
        :id="id"
        type="checkbox"
        :value="modelValue"
        :placeholder="placeholder"
        :checked="$props.selected ? true : false"
        @input="updateInput"
        class="cursor-pointer h-16 w-16 sm:h-20 sm:w-20 mt-2 !accent-sunshine !ring-0 !ring-offset-0 !outline-none !border-none"
      />
      <div :class="[$props.error ? 'text-red-600' : '', 'ml-10 sm:ml-15']">
        <slot name="label"></slot>
      </div>
    </label>
  </div>
</template>
<script>

export default {
  name: "FormCheckbox",
  props: {

    cls: {
      type: String,
      default: "",
    },
    
    id: {
      type: String,
      default: "",
    },
    
    modelValue: {
      type: [String, Number, Boolean],
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

    selected: {
      type: Boolean,
      default: false,
    },

    error: {
      type: Boolean,
      default: false,
    },
  },

  methods: {
    updateInput(event) {
      this.$emit("update:modelValue", event.target.checked);
    },
  },
}
</script>

<style scoped>
input[type="checkbox"]:checked {
  @apply bg-black
}
</style>
