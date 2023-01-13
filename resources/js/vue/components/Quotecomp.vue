<template>
    <div>
        <Multiselect mode="tags" :close-on-select="false" v-model="value" :options="options" />
    </div>
</template>
<script>
import Multiselect from "@vueform/multiselect";
export default {
    name: "quotecomp",
    components: { Multiselect },
    data() {
        return {
            value: null,
            options: ["Batman", "Robin", "Joker"],
        };
    },
};
</script>
<style src="@vueform/multiselect/themes/default.css"></style>