<template>
    <AppLayout
        :info="{
            title: 'Полезный контент',
            body: 'Раскроем для вас море полезной информации!',
        }"
    >
        <main id="catalogSection" class="bg-[#393939] relative">
            <section>
                <div class="container mx-auto px-4">
                    <h2 class="text-[#16A34A] text-[56px] text-right relative">
                        Блог Статьи
                    </h2>

                    <div class="pb-16">
                        <div
                            class="flex flex-wrap gap-4 mt-5 md:grid md:grid-cols-2 lg:grid-cols-4 relative z-10"
                        >
                            <div
                                v-for="post in posts"
                                :key="post.id"
                                class="w-full px-2 rounded border border-gray-100 bg-white shadow-md"
                            >
                                <a
                                    :href="route('post.single', post.slug)"
                                    class="relative mx-2 mt-3 flex h-60 overflow-hidden"
                                >
                                    <img
                                        v-tilt="{
                                            speed: 500,
                                            perspective: 1200,
                                        }"
                                        class="object-cover w-full rounded"
                                        :src="post.image"
                                        alt="product image"
                                    />
                                </a>
                                <div class="!mt-4 !px-5 !pb-5">
                                    <a :href="route('post.single', post.slug)">
                                        <h5
                                            class="h-[80px] text-ellipsis sm:text-[16px] md:text-[25px] tracking-tight text-slate-900 line-clamp-2"
                                        >
                                            {{ post.title }}
                                        </h5>
                                    </a>
                                    <div class="mb-5 text-base">
                                        <p
                                            class="mb-1 line-clamp-3"
                                            v-html="post.body"
                                        ></p>
                                    </div>
                                    <div
                                        class="flex items-center justify-between gap-x-4"
                                    >
                                        <a
                                            :href="
                                                route('post.single', post.slug)
                                            "
                                            class="flex items-center transition rounded duration-300 hover:text-[#16A34A] hover:border-[#16A34A] justify-center w-full text-gray-600 !px-5 !py-2.5 text-center text-base font-bold border border-black"
                                            id="cardProject_morebtn"
                                        >
                                            Подробно
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                id="moreProjectIpoteka"
                class="mt-6 py-14 bg-gray-900 relative bg-[url('/image/BGcatalogProject.webp')] bgSidesShadow bg-cover"
            >
                <div class="container mx-auto px-4">
                    <h2
                        class="text-[#16A34A] text-[25px] mt-10 md:text-[56px] text-center md:text-left relative"
                    >
                        Нужно больше проектов для выбора?<br />
                        скачайте наш полный каталог!
                    </h2>
                    <div class="grid grid-cols-12 gap-4">
                        <CatalogForm />
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
    <Head title="Блог Статьи" />
</template>
<script setup>
import { vMaska } from "maska";
</script>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import CatalogForm from "@/Components/CatalogForm.vue";

export default {
    components: {
        AppLayout,
        Head,
    },

    props: {
        posts: { type: Array, default: [] },
    },
};
</script>
