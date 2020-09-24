<template>
  <button @click="topFunction" id="floating-button" title="Go to top">
    <span class="mdi mdi-arrow-up"></span>
  </button>
</template>

<script>
export default {
  name: "VueBackToTop",
  data() {
    return {
      floatingButton: null
    };
  },
  mounted() {
    this.floatingButton = document.getElementById("floating-button");
    window.onscroll = () => {
      this.scrollFunction(this.floatingButton);
    };
  },
  methods: {
    scrollFunction(mybutton) {
      if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
        mybutton.style.display = "block";
        console.log(mybutton);
      } else {
        mybutton.style.display = "none";
      }
    },
    topFunction() {
      window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
      });
    }
  }
};
</script>

<style scoped>
#floating-button {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #007344; /* Set a background color */
  color: white; /* Text color */
  border-radius: 50%; /* Rounded corners */
  width: 80px;
  height: 80px;
  font-size: 3em; /* Increase font size */
}

#floating-button:hover {
  background-color: #719d43; /* Add a dark-grey background on hover */
}
</style>
