<template>
  <div class="col-md-3">
    <div class="card">
      <img class="card-img-top" src="newsPictureUrl" alt="Un producto" />
      <div class="card-body">
        <h5 class="card-title">{{ newsName }}</h5>
        <p class="card-text text-secondary">{{ newsDescription }}</p>
        <p class="card-text">{{ newsDate }}</p>
      </div>
      <div class="card-body">
        <button href="#" class="btn btn-outline-success">
            <span class="mdi mdi-eye"></span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    "newsPictureUrl",
    "newsName",
    "newsDescription",
    "newsDate"
  ],
  name: "BootstrapNewsCard"
};
</script>

<style scoped>
.card {
  height: 400px;
  margin-bottom: 24px;
}
</style>
