<template>
  <img :src="src" alt="Avatar" />
</template>

<script>
export default {
  props: ["src"],
  name: "VueRoundImage"
};
</script>

<style scoped>
img {
  border-radius: 50%;
}
</style>
