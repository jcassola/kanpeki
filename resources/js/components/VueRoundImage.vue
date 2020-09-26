<template>
  <img
    class="img-fluid"
    :src="src"
    alt="Avatar"
    :style="{ height: height, width: width }"
  />
</template>

<script>
export default {
  props: {
    src: {
      type: String,
      required: true
    },
    height: {
      type: String,
      default: "200px"
    },
    width: {
      type: String,
      default: "200px"
    }
  },
  name: "VueRoundImage"
};
</script>

<style scoped>
img {
  border-radius: 50%;
}
</style>
