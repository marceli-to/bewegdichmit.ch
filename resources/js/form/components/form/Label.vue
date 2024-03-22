<template>
  <label :class="[error ? 'text-red-600' : 'text-black', 'font-basetica-bold block mb-4 lg:mb-6']">
    <slot />
  </label>
</template>
<script>
export default {
  props: {
    error: {
      type: Boolean,
      default: false,
    },
  }
}
</script>