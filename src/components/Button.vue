<template>
  <button :class="['md-button', type ? 'md-button--' + type : '']">
    <slot/>
  </button>
</template>

<script>
export default {
  name: "MDButton",
  props: {
    type: { type: String, default: 'default' }
  }
}
</script>

<style scoped>

</style>
