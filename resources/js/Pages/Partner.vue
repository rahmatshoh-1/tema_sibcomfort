<template>
    <AppLayout
        :info="{
            title: 'Выбирайте удобную кредитную программу или ипотеку с нашими партнёрами',
        }"
    >
        <main id="catalogSection" class="bg-[#393939] relative px-5 py-10">
            <section>
                <div class="container mx-auto">
                    <h2
                        class="text-[#16A34A] text-[36px] md:text-[56px] text-center md:text-right relative"
                    >
                        ПСК СибКомфорт
                    </h2>
                    <div class="pb-16">
                        <p
                            class="text-[25px] md:text-[36px] text-white text-center mb-16"
                        >
                            ПСК СибКомфорт - ваш надежный сертифицированный
                            партнер от ведущих банков ДОМ.РФ и Почта Банк,
                            гарантирующий комфорт и уверенность в решении
                        </p>
                        <div class="grid md:grid-cols-4 gap-8 pb-10">
                            <div>
                                <div
                                    class="p-4 mb-2 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a @click="showMultiple(0)"
                                        ><img
                                            src="/image/rosselhoz.webp"
                                            class="h-10"
                                            alt="rosselhoz logo"
                                    /></a>
                                </div>
                                <div
                                    class="p-4 mb-2 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a @click="showMultiple(1)"
                                        ><img
                                            src="/image/bankLev.svg"
                                            class="h-10"
                                            alt="Банк Левобережный логотип"
                                    /></a>
                                </div>
                                <div
                                    class="p-4 mb-2 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a @click="showMultiple(2)"
                                        ><img
                                            src="/image/logo-pochta-bank.webp"
                                            class="h-10"
                                            alt="Почта Банк logo"
                                    /></a>
                                </div>
                                <div
                                    class="p-4 mb-2 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a @click="showMultiple(3)"
                                        ><img
                                            src="/image/domrf.webp"
                                            class="h-10"
                                            alt="domrf logo"
                                    /></a>
                                </div>
                                <div
                                    class="p-4 mb-2 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a @click="showMultiple(4)"
                                        ><img
                                            src="/image/rosbank.webp"
                                            class="h-10"
                                            alt="rosbank logo"
                                    /></a>
                                </div>
                                <div
                                    class="p-4 mb-2 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a @click="showMultiple(5)"
                                        ><img
                                            src="/image/sber.webp"
                                            class="h-10"
                                            alt="sber logo"
                                    /></a>
                                </div>
                            </div>
                            <div>
                                <a @click="showMultiple(6)"
                                    ><img
                                        v-tilt="{
                                            speed: 500,
                                            perspective: 1200,
                                        }"
                                        src="/image/certificatePochta.webp"
                                        class="w-full transition duration-300 rounded"
                                        alt="certificatePochta"
                                /></a>
                            </div>
                            <div>
                                <a @click="showMultiple(7)"
                                    ><img
                                        v-tilt="{
                                            speed: 500,
                                            perspective: 1200,
                                        }"
                                        src="/image/certificateDomRF.webp"
                                        class="w-full transition duration-300 rounded"
                                        alt="certificateDomRF"
                                /></a>
                            </div>
                            <div>
                                <a @click="showMultiple(8)"
                                    ><img
                                        v-tilt="{
                                            speed: 500,
                                            perspective: 1200,
                                        }"
                                        src="/image/certificateRos.webp"
                                        class="w-full transition duration-300 rounded"
                                        alt="certificateRos"
                                /></a>
                            </div>
                        </div>

                        <vue-easy-lightbox
                            :visible="visibleRef"
                            :imgs="imgsRef"
                            :index="indexRef"
                            @hide="onHide"
                        ></vue-easy-lightbox>
                    </div>
                </div>
            </section>
        </main>
    </AppLayout>
    <Head title="Главная страница" />
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import VueEasyLightbox from "vue-easy-lightbox";
import "vue-easy-lightbox/dist/external-css/vue-easy-lightbox.css";

export default {
    components: {
        AppLayout,
        Head,
        VueEasyLightbox,
    },
    data() {
        return {
            visibleRef: false,
            indexRef: 0,
            imgsRef: [
                "/image/rosselhoz.webp",
                "/image/bankLev.svg",
                "/image/logo-pochta-bank.webp",
                "/image/domrf.webp",
                "/image/rosbank.webp",
                "/image/sber.webp",
                "/image/certificatePochta.webp",
                "/image/certificateDomRF.webp",
                "/image/certificateRos.webp",
            ],
        };
    },
    methods: {
        onShow() {
            this.visibleRef = true;
        },
        showMultiple(index) {
            this.indexRef = index;
            this.onShow();
        },
        onHide() {
            this.visibleRef = false;
        },
    },
};
</script>
