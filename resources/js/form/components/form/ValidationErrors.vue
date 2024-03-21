<template>
  <div class="text-red-600 font-basetica-bold mt-20 lg:mt-40 max-w-3xl">
    Es sind Fehler aufgetreten, bitte überprüfen Sie ihre Angaben:
  </div>
</template>
<script>
export default {
  props: {
    validationErrors: {
      type: Array,
      default: () => []
    }
  }
}
</script>