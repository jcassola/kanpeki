<template>
  <a :href="href">
    <button id="floating-button">
      <span class="mdi mdi-plus"></span>
    </button>
  </a>
</template>

<script>
export default {
  props: ["href"],
  name: "VueBackToTop"
};
</script>


<style lang="scss" scoped>
#floating-button {
  position: fixed; /* Fixed/sticky position */
  top: 120px; /* Place the button at the bottom of the page */
  right: 240px; /* Place the button 30px from the right */
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

@media only screen and (max-width: 1200px) {
  #floating-button {
    right: 20px; /* Place the button 30px from the right */
  }
}

@media only screen and (max-width: 900px) {
  #floating-button {
    right: 20px; /* Place the button 30px from the right */
  }
}

@media only screen and (max-width: 600px) {
  #floating-button {
    right: 10px;
    bottom: 20px; /* Place the button at the bottom of the page */
    top: unset;
  }
}

@media only screen and (max-width: 400px) {
  #floating-button {
    right: 10;
    bottom: 5px;
    top: unset;
  }
}
</style>
