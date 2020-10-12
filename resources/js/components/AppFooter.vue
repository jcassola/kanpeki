<template>
  <footer>
    <div class="jumbotron-fluid bg-dark text-white pt-5 footer">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 text-center">
            <img
              src="/images/kampeki-kun-name.png"
              alt="Logo de ZaruArquitectura"
              class="site-logo text-center"
              style="width:80px;"
            />
            <p>
              Somos un proyecto Santiaguero que abarca la cultura pop asiatica y occidental
            </p>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="padding-bottom-40 text-center">Detalles de contactos</h3>
            <ul class="fa-ul margin-left-25">
              <li class="padding-bottom-20 padding-left-5">
                <span class="fa-li">
                  <i class="mdi mdi-phone"></i>
                </span>
                05 3087308
              </li>
              <li class="padding-bottom-20 padding-left-5">
                <span class="mdi mdi-email"></span>
                roswellh@nauta.cu
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-4">
            <h3 class="padding-bottom-40 text-center">Important links</h3>
            <ul class="fa-ul margin-left-25">
              <li class="padding-bottom-20 padding-left-5">
                <a href = "/about" class="color-principal">
                  <span class="fa-li">
                    <i class="fa fa-link"></i>
                  </span>
                  Acerca de nosotros
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="text-center padding-top-30 padding-bottom-30">Copyright © 2020 Se no Kanpeki-Sa</div>
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
ul {
    list-style-type: none;
}
</style>
