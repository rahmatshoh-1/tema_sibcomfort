<template>
    <AppLayout :show-slider="false">
        <header class="relative home-slider" id="header-main">
            <div class="text-white pt-8 max-h-screen bg-cover bg-no-repeat relative bgSidesShadow" :style="{
                backgroundImage: `url(${product.image})`,
            }">
                <div class="absolute top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50"></div>
                <div class="container mx-auto relative z-50">
                    <div class="mt-[150px] pb-[100px] text-center">
                        <h1 class="lg:text-[64px] lg:w-4/5 mx-auto text-[36px]" v-html="product.name"></h1>
                        <p v-if="product.body?.length > 0"
                            class="text-[20px] md:w-3/4 text-center md:mx-auto pb-[100px] sub_title_h1"
                            v-html="product.title"></p>
                    </div>
                </div>
            </div>
        </header>
        <main id="catalogSection" class="bg-[#393939] relative">
            <section>
                <div class="container mx-auto">
                    <h2 class="text-[#16A34A] px-4 text-[32px] md:text-[56px] text-right relative">
                        {{ product.name }}
                    </h2>

                    <div class="pb-16">
                        <div class="flex-col flex md:flex-row justify-between gap-8 my-16 px-2">
                            <div class="w-full md:w-8/12">
                                <img :src="product.image" alt="cardHouse" class="w-full mb-8 rounded md:h-[500px]" />
                                <div class="text-white" v-html="product.body"></div>
                            </div>
                            <div class="w-full md:w-4/12">
                                <div class="text-lg">
                                    <div class="p-3 mb-4 bg-white rounded" v-for="randomProduct in randomProducts"
                                        :key="randomProduct.id">
                                        <Link :href="route(
                                            'product.single',
                                            randomProduct.id
                                        )
                                            ">{{ randomProduct.name }}</Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="moreProjectIpoteka"
                class="mt-6 py-14 bg-gray-900 relative bg-[url('/image/BGcatalogProject.webp')] bg-cover bgSidesShadow">
                <div class="container mx-auto px-4">
                    <h2 class="text-[#16A34A] text-[25px] mt-10 md:text-[56px] text-center md:text-left relative">
                        Нужно больше проектов для выбора?<br />
                        скачайте наш полный каталог!
                    </h2>
                    <div class="grid grid-cols-12 gap-4">
                        <CatalogForm type="catalog" />
                        <div class="col-span-12 md:col-span-6 order-1 md:order-none">
                            <img v-tilt="{ speed: 500, perspective: 1200 }" src="/image/catalog.webp" alt="catalog.webp" />
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </AppLayout>

    <Head :title="product.title" />
</template>
<script setup>
import { vMaska } from "maska";
</script>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import axios from "axios";
import "@/sweetalert2/dist/sweetalert2.min.css";
import Swal from "@/sweetalert2/src/sweetalert2";
import MainNavbar from "@/Components/MainNavbar.vue";
import CatalogForm from "@/Components/CatalogForm.vue";

export default {
    components: {
        AppLayout,
        Head,
    },

    props: {
        product: {
            type: Object,
            default: {},
        },
        randomProducts: {
            type: Array,
            default: [],
        },
    },
    data() {
        return {
            bid: {
                name: "",
                phone: "",
                email: "",
            },
        };
    },
    methods: {
        sendCatalog() {
            axios
                .product(route("send.catalog"), this.bid)
                .then((res) => {
                    Swal.fire({
                        title: `Ваш запрос принят в работу`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "success",
                    });
                    this.bid = {
                        name: "",
                        phone: "",
                        email: "",
                    };
                })
                .catch((err) => {
                    Swal.fire({
                        title: `Ошибка при отправки запроса`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "error",
                    });
                });
        },
    },
};
</script>
