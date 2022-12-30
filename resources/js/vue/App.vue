<template>
    <nav-comp />
    <router-view />
</template>
<script>
import NavComp from "./components/Navcomp.vue";
export default {
    name: "app",
    components: { NavComp },
};
</script>
