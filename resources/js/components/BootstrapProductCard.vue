<template>
  <div class="card">
    <img class="card-img-top" :src="productPictureUrl" alt="Un producto" />
    <div class="card-body">
      <h5 class="card-title">{{ productName }}</h5>
      <p class="card-text text-secondary">{{ productDescription }}</p>
      <p class="card-text">{{ productPrice }}</p>
    </div>
    <div class="card-body">
      <a :href="productDetailsUrl">
        <button class="btn btn-outline-success">
          <span class="mdi mdi-eye"></span>
        </button>
      </a>
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
