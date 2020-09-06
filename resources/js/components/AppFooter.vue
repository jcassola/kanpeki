<template>
  <footer>
      <div class="container">
          <div class="footer">
            <p>Copyright by &copyKanpeki-Sa</p>
          </div>
      </div>
  </footer>
</template>

<script>
export default {
  name: "AppFooter"
};
</script>

<style scoped>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 4em;
   background-color: #343a40;
   color: rgba(255, 255, 255, 0.75);
   text-align: center;
   padding: 0.5rem 1rem;
}
</style>
