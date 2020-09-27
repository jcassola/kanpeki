<template>
  <div class="card">
    <a :href="productDetailsUrl">
      <img class="card-img-top" :src="productPictureUrl" alt="Un producto" />
    </a>
    <div class="card-body">
      <h5 class="card-title" id="product-title">{{ productName }}</h5>
      <p class="card-text text-secondary" id="product-description">{{ productDescription }}</p>
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

#product-title {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

#product-description {
  height: 140px;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
