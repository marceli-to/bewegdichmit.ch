<template>
  <template v-if="show">
    <div class="text-white bg-green-600 font-basetica-bold leading-6 fixed z-[100] top-0 left-0 w-full sm:inline-block sm:w-auto sm:max-w-lg sm:top-10 sm:left-10 p-10 lg:p-15">
      Herzlichen Dank. Ihre Daten wurden erfolgreich übermittelt. Sie erhalten in Kürze eine Bestätigung per E-Mail mit weiteren Informationen.
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
  // auto hide after 5 seconds
  mounted() {
    setTimeout(() => {
      this.show = false;
    }, 5000);
  }
}
</script>