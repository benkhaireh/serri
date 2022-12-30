import './bootstrap';
import "remixicon/fonts/remixicon.css";
import "../css/app.css";
import "../css/default.css";

import { createApp } from "vue";
import router from "./vue/router/index.js";
import App from "./vue/App.vue";

import { directive } from "vue3-click-away";

createApp(App).use(router).directive("click-away", directive).mount("#app");
