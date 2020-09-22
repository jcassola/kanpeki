<template>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link active" href="/">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="news">Noticias</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="events">Eventos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="store">Tienda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="authors">Artistas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about">Contactos</a>
    </li>
    <!-- Authentication Links -->
    <slot></slot>
  </ul>
</template>

<script>
export default {
  props: ["userName"],
  name: "BootstrapNavbarLinks"
};
</script>
