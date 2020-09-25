<template>
  <div class="col-md-3">
    <div class="card">
      <img class="card-img-top" :src="newsPictureUrl" alt="Una noticia" />
      <div class="card-body">
        <h5 class="card-title" >{{ newsTitle }}</h5>
        <p class="card-text text-secondary">{{ newsText }}</p>
        <p class="card-text">{{ newsDate }}</p>
      </div>
      <div class="card-body">
        <a :href="newsDetailsUrl">
          <button class="btn btn-outline-success">
            <span class="mdi mdi-eye"></span>
          </button>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    "newsPictureUrl",
    "newsTitle",
    "newsText",
    "newsDate",
    "newsDetailsUrl"
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
