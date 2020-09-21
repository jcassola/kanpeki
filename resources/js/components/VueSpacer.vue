<template>
  <div :style="{ height: space + 'px'}"></div>
</template>

<script>
export default {
    props: ["space"],
    name: "VueSpacer"
};
</script>
