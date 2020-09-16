/**
 * This file loads most javascript dependencies
 */

require("./bootstrap");

const Vue = require("vue");
window.Vue = Vue;

/**
 * The following block of code imports vue components automatically
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context("./", true, /\.vue$/i);
files.keys().map(key =>
  Vue.component(
    key
      .split("/")
      .pop()
      .split(".")[0],
    files(key).default
  )
);

/**
 * Creates a vue instance
 */

const app = new Vue({
  el: "#app"
});

module.exports = app;
