<template>
  <div class="jumbotron jumbotron-fluid mb-0" :class="{ 'no-margin': !hasMargin }">
    <div class="container">
      <h1>{{ title }}</h1>
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      default: ""
    },
    hasMargin: {
      type: Boolean,
      default: true
    }
  },
  name: "VueSection"
};
</script>

<style scoped>
.no-margin {
    margin-bottom: 0px;
    margin-top: 0px;
}
</style>
