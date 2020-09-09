<template>
  <div class="jumbotron jumbotron-fluid mb-0">
    <div class="container">
      <h1>{{ title }}</h1>
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: ["title"],
  name: "VueSection"
};
</script>
