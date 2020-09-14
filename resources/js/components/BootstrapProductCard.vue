<template>
  <div class="col-md-3">
    <div class="card">
      <img class="card-img-top" src="productPictureUrl" alt="Un producto" />
      <div class="card-body">
        <h5 class="card-title">{{ productName }}</h5>
        <p class="card-text text-secondary">{{ productDescription }}</p>
        <p class="card-text">{{ productPrice }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    "productPictureUrl",
    "productName",
    "productDescription",
    "productPrice"
  ],
  name: "BootstrapProductCard"
};
</script>
