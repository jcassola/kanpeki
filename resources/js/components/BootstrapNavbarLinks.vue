<template>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item" v-for="route in routes" :key="route.name">
      <a
        class="nav-link"
        :class="{ active: route.name === currentRoute }"
        :href="route.route"
        >{{ route.public }}</a
      >
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
          route: "/home",
          name: "home",
          public: "Inicio"
        },
        {
          route: "/news",
          name: "news",
          public: "Noticias"
        },
        {
          route: "/events",
          name: "events",
          public: "Eventos"
        },
        {
          route: "/store",
          name: "store",
          public: "Tienda"
        },
        {
          route: "/authors",
          name: "authors",
          public: "Autores"
        },
        {
          route: "/about",
          name: "about",
          public: "Nosotros"
        }
      ]
    };
  }
};
</script>
