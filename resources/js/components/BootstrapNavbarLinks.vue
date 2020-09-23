<template>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item" v-for="route in routes" :key="route.name">
      <a class="nav-link" :class="{ 'active': route.route === currentRoute }" :href="route.route">{{ route.name }}</a>
    </li>
    <!-- Authentication Links -->
    <slot></slot>
  </ul>
</template>

<script>
export default {
  props: ["userName", "currentRoute"],
  name: "BootstrapNavbarLinks",
  data() {
    return {
      routes: [
        {
          route: "/",
          name: "Inicio"
        },
        {
          route: "news",
          name: "Noticias"
        },
        {
          route: "events",
          name: "Eventos"
        },
        {
          route: "store",
          name: "Tienda"
        },
        {
          route: "authors",
          name: "Autores"
        },
        {
          route: "about",
          name: "Nosotros"
        },

      ]
    };
  }
};
</script>
