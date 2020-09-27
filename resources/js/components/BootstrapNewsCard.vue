<template>
  <div class="col-md-3">
    <div class="card">
      <a :href="newsDetailsUrl">
        <img class="card-img-top" :src="newsPictureUrl" alt="Una noticia" />
      </a>
      <div class="card-body">
        <h5 class="card-title">{{ newsTitle }}</h5>
        <p class="card-text text-secondary" id="news-description">{{ newsText }}</p>
        <p class="card-text">{{ newsDate }}</p>
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
  margin-bottom: 8px;
}

#new-title {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

#news-description {
  height: 140px;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
