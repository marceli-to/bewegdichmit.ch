<template>
  <template v-if="show">
    <div class="text-white bg-red-600 font-basetica-bold leading-6 fixed top-0 left-0 z-[100] w-full sm:inline-block sm:w-auto sm:top-10 sm:left-10 p-10">
      Es sind Fehler aufgetreten, bitte überprüfen Sie ihre Angaben.
    </div>
  </template>
</template>
<script>
export default {
  data() {
    return {
      show: true,
    };
  },
  props: {
    validationErrors: {
      type: Array,
      default: () => []
    }
  },
  
  // auto hide after 5 seconds
  mounted() {
    setTimeout(() => {
      this.show = false;
    }, 3000);
  }
}
</script>