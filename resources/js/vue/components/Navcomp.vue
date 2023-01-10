<template>
    <nav
        class="bg-white px-2 sm:px-4 py-2.5 fixed w-full z-20 top-0 left-0 border-b border-gray-200"
    >
        <div
            class="container flex flex-wrap items-center justify-between mx-auto"
        >
            <a href="#" class="flex items-center">
                <img
                    src="/imgs/logo.svg"
                    class="h-6 mr-3 sm:h-9"
                    alt="Flowbite Logo"
                />
            </a>
            <div class="flex items-center" v-click-away="hidenav">
                <div class="flex md:order-2">
                    <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Demander un devis</button>
                    <button
                        @click="sticknav"
                        type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-6 h-6"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                </div>
                <div
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 md:mr-8"
                    id="navbar-sticky"
                >
                    <ul
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white"
                    >
                        <li>
                            <a
                                href="#"
                                class="block py-2 pl-3 pr-4 bold text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 hover:text-white border-gray-700"
                                >À Propos</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block py-2 pl-3 pr-4 bold text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 hover:text-white border-gray-700"
                                >Nos Services</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block py-2 pl-3 pr-4 bold text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 hover:text-white border-gray-700"
                                >Nos Produits</a
                            >
                        </li>
                    </ul>
                </div>
                <div
                    class="absolute top-12 items-center justify-between w-full md:flex md:w-auto md:order-1 md:mr-8"
                    v-if="navbarsticky"
                >
                    <ul
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white"
                    >
                        <li>
                            <a
                                href="#"
                                class="block py-2 pl-3 pr-4 bold text-gray-700 rounded hover:bg-green-700 focus:bg-green-700 md:hover:bg-transparent md:hover:text-green-700 md:p-0 hover:text-white focus:text-white md:focus:text-green-700 border-gray-700"
                                >À Propos</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block py-2 pl-3 pr-4 bold text-gray-700 rounded hover:bg-green-700 focus:bg-green-700 md:hover:bg-transparent md:hover:text-green-700 md:p-0 hover:text-white focus:text-white md:focus:text-green-700 border-gray-700"
                                >Nos Services</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block py-2 pl-3 pr-4 bold text-gray-700 rounded hover:bg-green-700 focus:bg-green-700 md:hover:bg-transparent md:hover:text-green-700 md:p-0 hover:text-white focus:text-white md:focus:text-green-700 border-gray-700"
                                >Nos Produits</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>
<script>
export default {
    name: "navcomp",
    data() {
        return {
            navbarsticky: false
        }
    },
    methods: {
        sticknav: function() {
            this.navbarsticky = !this.navbarsticky;
        },
        hidenav: function() {
            this.navbarsticky = false
        }
    },
};
</script>
