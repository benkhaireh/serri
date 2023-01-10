<template>
    <div class="pt-[6.8rem] pb-[4rem]">
        <section class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 px-8 md:px-0">
                <div class="block flex-1 mb-12">
                    <div class="max-w-[480px]">
                        <h1
                            class="font-[900] text-[3rem] leading-[1] mb-[1rem]"
                        >
                            Planter en securité
                            <span class="text-[#39b54a]">Avec nous</span>
                        </h1>
                        <p class="font-[500] mb-[2rem]">
                            Nous innovons dans le secteur agricole pour que vous
                            pouvez planter en quantité et qualité. Nous vous
                            aidons à travailler intelligemment avec les
                            nouvelles technologies pour les serres agricole et
                            l'irrigation.
                        </p>
                        <div class="flex items-center">
                            <button
                                type="button"
                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-3"
                            >
                                Demander un devis
                            </button>
                            <button type="button" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Nous contacter</button>
                        </div>
                    </div>
                </div>
                <div
                    class="flex items-center justify-center w-10/12 mx-auto md:max-h-[150px]"
                >
                    <img
                        src="/imgs/Farming-software.jpg"
                        alt="Farming Software"
                        class="inline-block w-full rounded-full"
                    />
                </div>
            </div>
        </section>
        <section class="mt-48 md:mt-64 pb-40 relative bg-blueGray-100">
            <div class="container mx-auto">
                <div class="flex flex-wrap items-center">
                    <div
                        class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-32"
                    >
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-emerald-500"
                        >
                            <img
                                alt="..."
                                src="/imgs/Modern-farming.jpg"
                                class="w-full align-middle rounded-lg"
                            />
                        </div>
                    </div>
                    <div class="w-full md:w-6/12 px-4">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-6/12 px-4">
                                <div class="relative flex flex-col mt-4">
                                    <div class="px-4 py-5 flex-auto">
                                        <div
                                            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white"
                                        >
                                            <i class="ri-tools-fill text-3xl"></i>
                                        </div>
                                        <h6 class="text-xl mb-1 font-semibold">
                                            Construction de votre serre
                                        </h6>
                                        <p class="mb-4 text-blueGray-500">
                                            Nous agencons votre serre en filet et en polycarbonate selon vos spécification.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="relative flex flex-col min-w-0 mt-4"
                                >
                                    <div class="px-4 py-5 flex-auto">
                                        <div
                                            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white"
                                        >
                                        <i class="ri-drop-line text-3xl"></i>
                                        </div>
                                        <h6 class="text-xl mb-1 font-semibold">
                                            Installation des flotteurs
                                        </h6>
                                        <p class="mb-4 text-blueGray-500">
                                            Pour automatiser le remplissage automatique  du réservoi d'irrigation, nous mettons en place des flotteurs
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-6/12 px-4">
                                <div class="relative flex flex-col min-w-0">
                                    <div class="px-4 py-5 flex-auto">
                                        <div
                                            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white"
                                        >
                                        <i class="ri-refresh-line text-3xl"></i>
                                        </div>
                                        <h6 class="text-xl mb-1 font-semibold">
                                            Mettons en place l'irrigation Automatique
                                        </h6>
                                        <p class="mb-4 text-blueGray-500">
                                            Nous installons des Kits d'irrigation automatique complète sur mesure de 50m2 ,100m2 à 200m2.
                                        </p>
                                    </div>
                                </div>
                                <div class="relative flex flex-col min-w-0">
                                    <div class="px-4 py-5 flex-auto">
                                        <div
                                            class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white"
                                        >
                                            <i class="ri-temp-hot-fill text-3xl"></i>
                                        </div>
                                        <h6 class="text-xl mb-1 font-semibold">
                                            Gestion du climat du serre
                                        </h6>
                                        <p class="mb-4 text-blueGray-500">
                                            Nous vous donnons la possibilité de gérer le climat de votre serre avec suivi via une application
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    name: "home",
};
</script>
