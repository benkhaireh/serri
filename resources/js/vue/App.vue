<template>
    <nav-comp />
    <router-view />
    <footer-comp />
</template>
<script>
import NavComp from "./components/Navcomp.vue";
import FooterComp from "./components/Footercomp.vue";
export default {
    name: "app",
    components: { NavComp, FooterComp },
};
</script>
