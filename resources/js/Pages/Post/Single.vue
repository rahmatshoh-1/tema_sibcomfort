<template>
    <AppLayout>
        <main id="catalogSection" class="bg-[#393939] relative">
            <section>
                <div class="container mx-auto">
                    <h2
                        class="text-[#16A34A] px-4 text-[32px] md:text-[56px] text-right relative"
                    >
                        {{ post.title }}
                    </h2>

                    <div class="pb-16">
                        <div
                            class="flex-col flex md:flex-row justify-between gap-8 my-16 px-2"
                        >
                            <div class="w-full md:w-8/12">
                                <img
                                    :src="post.image"
                                    alt="cardHouse"
                                    class="w-full mb-8 rounded"
                                />
                                <div
                                    class="text-white"
                                    v-html="post.body"
                                ></div>
                            </div>
                            <div class="w-full md:w-4/12">
                                <div class="text-lg">
                                    <div
                                        class="p-3 mb-4 bg-white rounded"
                                        v-for="randomPost in randomPosts"
                                        :key="randomPost.id"
                                    >
                                        <Link
                                            :href="
                                                route(
                                                    'post.single',
                                                    randomPost.slug
                                                )
                                            "
                                            >{{ randomPost.title }}</Link
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                id="moreProjectIpoteka"
                class="mt-6 py-14 bg-gray-900 relative bg-[url('/image/BGcatalogProject.webp')] bg-cover bgSidesShadow"
            >
                <div class="container mx-auto px-4">
                    <h2
                        class="text-[#16A34A] text-[25px] mt-10 md:text-[56px] text-center md:text-left relative"
                    >
                        Нужно больше проектов для выбора?<br />
                        скачайте наш полный каталог!
                    </h2>
                    <div class="grid grid-cols-12 gap-4">
                        <div
                            class="col-span-12 md:col-span-6 lg:col-span-4 order-2 md:order-none pb-16 mb:pb-0"
                        >
                            <form
                                @submit.prevent="sendCatalog"
                                class="bg-white px-8 py-5 md:mt-32 rounded"
                            >
                                <h3
                                    class="w-full md:w-50 mb-4 md:mb-0 text-[18px] md:text-[25px] font-medium mx-auto text-center"
                                >
                                    Оставьте контактные данные и мы пришлем вам
                                    каталог
                                </h3>
                                <label for="#" class="text-lg"
                                    >Введите имя:<br />
                                    <input
                                        type="text"
                                        class="p-2 my-2 rounded bg-gray-200 w-full focus:outline-none focus:ring-2 focus:ring-[#16A34A]"
                                        placeholder="Михаил"
                                        required
                                        v-model="bid.name"
                                    />
                                </label>
                                <label for="#" class="text-lg"
                                    >Введите ваш номер:<br />
                                    <input
                                        v-maska
                                        data-maska="+7 (###)-###-##-##"
                                        type="text"
                                        class="p-2 my-2 rounded bg-gray-200 w-full focus:outline-none focus:ring-2 focus:ring-[#16A34A] [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                                        placeholder="+7 (xxx)-xxx-xx-xx"
                                        required
                                        v-model="bid.phone"
                                    />
                                </label>
                                <label for="#" class="text-lg"
                                    >Введите ваш Email:<br />
                                    <input
                                        type="email"
                                        class="p-2 my-2 rounded bg-gray-200 w-full focus:outline-none focus:ring-2 focus:ring-[#16A34A]"
                                        placeholder="mail@example.com"
                                        required
                                        v-model="bid.email"
                                    />
                                </label>
                                <button
                                    type="submit"
                                    class="w-full rounded mt-6 flex items-center justify-center transition duration-300 bg-[#16A34A] !px-5 !py-2.5 text-center text-base font-medium text-white hover:bg-[#178e43] focus:outline-none focus:ring-4 focus:ring-[#d3ffc4]"
                                >
                                    Получить каталог
                                </button>
                                <p
                                    class="text-center mx-auto mt-4 text-gray-500"
                                >
                                    Нажимая на кнопку, вы принимаете условия
                                    <a href="#">передачи информации</a>
                                </p>
                            </form>
                        </div>
                        <div
                            class="col-span-12 md:col-span-6 order-1 md:order-none"
                        >
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/catalog.webp"
                                alt="catalog.webp"
                            />
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </AppLayout>
    <Head :title="post.title" />
</template>
<script setup>
import { vMaska } from "maska";
</script>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import axios from "axios";

import Swal from "@/sweetalert2/src/sweetalert2";

export default {
    components: {
        AppLayout,
        Head,
    },

    props: {
        post: {
            type: Object,
            default: {},
        },
        randomPosts: {
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
                .post(route("send.catalog"), this.bid)
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
