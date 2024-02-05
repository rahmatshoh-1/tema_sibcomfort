<template>
    <AppLayout :isFrame="true" :showSlider="false">
        <header
            class="relative home-slider" id="header-main-frame"
        >
            <div
                class="text-white pt-8 max-h-screen bg-cover bg-no-repeat relative bgSidesShadow"
                :style="{
                    backgroundImage: `url(${
                        clientWidth > 768
                            ? '/image/pogonazh.png'
                            : '/image/pogonazh_mob.png'
                    })`,
                }"
            >
                <div
                    class="absolute top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50"
                ></div>
                <div class="container mx-auto relative z-50">
                    <div class="mt-[150px] pb-[100px] text-center">
                        <h1 class="lg:text-[64px] lg:w-4/5 mx-auto text-[36px]">
                            Погонажные изделия оптом от производителя
                        </h1>
                        <p
                            class="text-[20px] md:w-3/4 text-center md:mx-auto pb-[100px] sub_title_h1"
                        >
                            Производство и оптовая продажа погонажных изделий из
                            ангарской сосны, лиственницы, кедра, осины.
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <main id="catalogSection" class="bg-[#393939] relative">
            <section class="py-10">
                <div class="container mx-auto relative">
                    <div class="absolute -top-20 right-0">
                        <h3
                            class="text-[#16A34A] px-4 text-[36px] md:text-[56px] text-right relative"
                        >
                            Наша продукция
                        </h3>
                    </div>
                    <div class="lg:pt-7 lg:mx-auto mx-8 md:pb-10">
                        <Carousel
                            class="block-pog rounded"
                            :autoplay="10000"
                            :wrap-around="true"
                            v-bind="settings"
                        >
                            <Slide v-for="slider in sliders" :key="slider.id">
                                <a
                                    class="md:mx-3 cursor-pointer rounded relative group w-full"
                                    aria-hidden="true"
                                >
                                    <img
                                        :src="
                                            clientWidth > 768
                                                ? slider.image
                                                : slider.mobile_image
                                        "
                                        class="w-full object-cover rounded"
                                        alt="Дом и баня"
                                    />
                                </a>
                            </Slide>
                            <template #addons>
                                <Navigation />
                                <Pagination />
                            </template>
                        </Carousel>
                    </div>

                    <div class="pb-16 px-4">
                        <div id="tab-1" class="tabsContent">
                            <div class="col-span-12">
                                <div
                                    class="grid md:grid-cols-2 lg:grid-cols-4 gap-6"
                                >
                                    <ProductCard
                                        v-for="product in products"
                                        :key="product.id"
                                        :product="product" productType="Пиломатериал"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sm:container sm:mx-auto mx-[20px]">
                <Carousel
                    class="block-pog rounded"
                    :autoplay="10000"
                    :wrap-around="true"
                    v-bind="settings"
                >
                    <Slide v-for="i in 2" :key="i">
                        <img
                            :src="
                                clientWidth > 768
                                    ? '/image/pgzh.webp'
                                    : '/image/pog_mob.jpg'
                            "
                            class="w-full rounded"
                            alt=""
                        />
                    </Slide>
                </Carousel>
            </section>

            <section class="pb-20 pt-8 sm:mx-auto mx-[20px]">
                <div class="container mx-auto">
                    <h2
                        class="text-[#16A34A] text-[25px] md:text-[45px] text-center md:text-left relative"
                    >
                        Часто задаваемые вопросы
                    </h2>
                    <div class="grid lg:grid-cols-2 gap-[30px] my-[40px]">
                        <div
                            class="bg-white p-4 rounded"
                            v-for="faq in faqs"
                            :key="faq.id"
                        >
                            <div
                                @click="
                                    selectedFaq =
                                        selectedFaq == faq ? null : faq
                                "
                                class="flex items-center justify-between"
                            >
                                <h3
                                    class="xl:text-[20px] lg:text-[18px] text-[16px] mb-2"
                                >
                                    {{ faq.label }}
                                </h3>
                                <span>
                                    <svg
                                        :class="{
                                            'rotate-180': selectedFaq == faq,
                                        }"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="14"
                                        height="10"
                                        role="presentation"
                                    >
                                        <path
                                            d="M9.211364 7.59931l4.48338-4.867229c.407008-.441854.407008-1.158247 0-1.60046l-.73712-.80023c-.407008-.441854-1.066904-.441854-1.474243 0L7 5.198617 2.51662.33139c-.407008-.441853-1.066904-.441853-1.474243 0l-.737121.80023c-.407008.441854-.407008 1.158248 0 1.600461l4.48338 4.867228L7 10l2.211364-2.40069z"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div
                                class="text-[14px]"
                                :class="selectedFaq == faq ? 'block' : 'hidden'"
                            >
                                <p v-html="faq.body"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </AppLayout>
    <Head title="Погонажные изделия оптом от производителя" />
    <CustomModal> </CustomModal>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import ProductCard from "@/Components/ProductCard.vue";
import { Head } from "@inertiajs/vue3";
import CustomModal from "@/Components/CustomModal.vue";
import { Carousel, Navigation, Slide, Pagination } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";

export default {
    components: {
        Head,
        Carousel,
        Navigation,
        Slide,
        Pagination,
        AppLayout,
        ProductCard,
        CustomModal,
    },

    props: {
        products: {
            type: Array,
            default: [],
        },
        sliders: {
            type: Array,
            default: [],
        },
        faqs: {
            type: Array,
            default: [],
        },
    },

    data() {
        return {
            secondSliders: [
                { id: 1, imagePath: "/image/pgzh.webp" },
                { id: 2, imagePath: "/image/p-s.png" },
            ],
            selectedFaq: null,
            settings: {
                itemsToShow: 1,
                snapAlign: "center",
            },
            clientWidth: 0,
        };
    },

    mounted() {
        this.onresize();
    },

    methods: {
        onresize() {
            this.clientWidth = document.body.clientWidth;
        },
    },

    created() {
        window.addEventListener("resize", this.onresize);
    },
    unmounted() {
        window.removeEventListener("resize", this.onresize);
    },
};
</script>

<style>
.block-pog .carousel__next,
.block-pog .carousel__prev {
    @apply w-[36px] h-[32px] md:w-[45px] md:h-[52px] border-2 border-[#16a34a] text-white hover:bg-[#16a34a] hover:text-white rounded;
}
.block-pog .carousel__next {
    @apply lg:top-[42%] md:top-[35%] top-[34%] -right-5 absolute;
}
.block-pog .carousel__prev {
    @apply lg:top-[36%] md:top-[25%] top-[31%] -left-5 absolute right-[60px];
}
.carousel__pagination {
    overflow: hidden;
}
.carousel__next,
.carousel__prev {
    border: 2px solid #16a34a;
    background: #16a34a;
    opacity: 1 !important;
}

.carousel__next {
    bottom: -110px;
    top: auto;
}

.carousel__prev {
    transform: translateY(0);
}
.carousel__prev:hover,
.carousel__next:hover {
    color: #16a34a;
}

.carousel__pagination
    .carousel__pagination-button.carousel__pagination-button--active::after {
    @apply lg:w-14 w-6 lg:h-4 h-3 !bg-green-600 rounded-[4px];
}

.carousel__pagination {
    @apply lg:gap-x-6 gap-x-3 lg:my-12 my-6 transition-all duration-150 ease-in;
}

.carousel__pagination .carousel__pagination-button::after {
    @apply lg:w-14 lg:h-4 w-3 h-3 !bg-gray-600 rounded-sm;
}
</style>
