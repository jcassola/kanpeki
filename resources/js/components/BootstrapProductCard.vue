<template>
  <div class="card">
    <a :href="productDetailsUrl">
      <img class="card-img-top" :src="productPictureUrl" alt="Un producto" />
    </a>
    <div class="card-body">
      <h5 class="card-title">{{ productName }}</h5>
      <p class="card-text text-secondary">{{ productDescription }}</p>
      <p class="card-text">{{ productPrice }}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    "productPictureUrl",
    "productName",
    "productDescription",
    "productPrice",
    "productDetailsUrl"
  ],
  name: "BootstrapProductCard"
};
</script>

<style scoped>
.card {
  height: 400px;
  margin-bottom: 24px;
}
</style>
