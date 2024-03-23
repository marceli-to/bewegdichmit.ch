<template>
  <label :for="$props.id" :class="[error ? 'text-red-600' : 'text-black', 'font-basetica-bold block mb-4 lg:mb-6']">
    <slot />
  </label>
</template>
<script>
export default {
  props: {
    id: {
      type: String,
      required: true,
    },
    error: {
      type: Boolean,
      default: false,
    },
  }
}
</script>