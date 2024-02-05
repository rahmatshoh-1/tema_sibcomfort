<template>
    <!-- v-if="usePage().url === '/'" -->
    <header class="relative home-slider" :id="isFrame ? 'header-main-frame' : 'header-main'">
        <MainNavbar :fixed="fixMenu" class="z-[1000] pt-3 left-0 right-0"
            :class="fixMenu ? '!fixed bg-white pb-3 shadow-2xl' : '!absolute'" />
        <Carousel v-if="showSlider && $page.props.sliders != null" :autoplay="5000"
            :wrap-around="$page.props.sliders.length > 1">
            <template v-for="slider in $page.props.sliders" :key="slider.id">
                <Slide class="text-white max-h-screen bg-cover bg-no-repeat relative bgSidesShadow min-h-[100vh]" :style="{
                    backgroundImage: `url(${clientWidth > 768
                        ? slider.image
                        : slider.mobile_image
                        })`,
                }">
                    <div class="absolute top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50"></div>
                    <div class="container mx-auto relative z-50">
                        <div class="text-center mt-24 md:mt-12">
                            <h1 class="lg:text-[64px] lg:w-4/5 mx-auto text-[36px]" v-html="slider.title"></h1>
                            <p v-if="slider.body?.length > 0"
                                class="text-[20px] md:w-2/4 text-center md:mx-auto pb-[50px] sub_title_h1"
                                v-html="slider.body"></p>
                            <a v-if="slider.link != null &&
                                slider.link?.length > 0
                                " :href="slider.link" class="inline-block">
                                <div
                                    class="offer_btn border border-[#16A34A] w-[210px] mx-auto py-4 mb-[100px] text-lg transition ease-out duration-300 transform hover:bg-[#16A34A] rounded">
                                    В Каталог
                                </div>
                            </a>
                        </div>
                    </div>
                </Slide>
            </template>

            <template #addons>
                <Navigation v-if="$page.props.sliders.length > 1" />
                <Pagination v-if="$page.props.sliders.length > 1" />
            </template>
        </Carousel>

        <div v-else-if="!showSlider && $page.props.sliders != null && isHome"
            class="text-white pt-8 max-h-screen sm:bg-cover bg-cover bg-no-repeat relative bgSidesShadow" :style="{
                backgroundImage: `url(${clientWidth > 768
                        ? $page.props.sliders[0]?.image
                        : $page.props.sliders[0]?.mobile_image
                    })`,
            }">
            <div class="absolute top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50"></div>
            <div class="container mx-auto relative z-50">
                <div class="sm:mt-[150px] mt-[30px] sm:pb-[100px] text-center">
                    <h1 class="lg:text-[64px] lg:w-4/5 mx-auto text-[36px]" v-html="$page.props.sliders[0]?.title"></h1>
                    <p v-if="$page.props.sliders[0]?.body?.length > 0"
                        class="text-[20px] md:w-3/4 text-center md:mx-auto pb-[80px] sub_title_h1"
                        v-html="$page.props.sliders[0]?.body"></p>

                    <a v-if="$page.props.sliders[0]?.link != null &&
                        $page.props.sliders[0]?.link.length > 0
                        " :href="$page.props.sliders[0]?.link" class="inline-block">
                        <div
                            class="offer_btn border border-[#16A34A] w-[210px] mx-auto py-4 mb-[100px] text-lg transition ease-out duration-300 transform hover:bg-[#16A34A] rounded">
                            В Каталог
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- <header v-else class="text-white pt-8 max-h-screen relative" id="header">
        <div class="container mx-auto">
            <MainNavbar />
            <div id="offer" class="mt-[100px] pb-[100px] text-center">
                <h1
                    class="lg:text-[64px] lg:w-4/5 mx-auto text-[36px] inheritPadding"
                    v-html="info.title"
                ></h1>
                <p
                    v-if="'body' in info"
                    class="text-[16px] hidden md:block md:w-3/4 text-center md:mx-auto pb-[100px] sub_title_h1"
                    v-text="info.body"
                ></p>
                <a v-if="'link' in info" :href="info.link">
                    <div
                        class="offer_btn bg-[#16A34A] w-[210px] mx-auto text-black py-4 mt-[88px] mb-[100px] text-lg"
                    >
                        В Каталог
                    </div>
                </a>
            </div>
        </div>
    </header> -->

    <slot />

    <footer class="bg-[#434343] py-12 relative" id="footer">
        <div class="container mx-auto px-2">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="md:w-2/5">
                    <Link href="/" id="logo">
                    <img src="/image/logo_light.svg" alt="logo" />
                    </Link>
                    <p class="text-white my-9 text-center md:text-left md:w-10/12">
                        Строительство домов из бруса, бревна, каркаса с
                        доставкой и сборкой по всей территории РФ и СНГ
                    </p>
                    <div class="flex justify-center md:justify-start flex-row gap-3">
                        <a href="#" target="_blank">
                            <img src="/image/vk.webp" alt="vk" />
                        </a>
                        <a href="https://www.youtube.com/channel/UCAo6Ytl1XVlDKp4KipR5aKA" target="_blank">
                            <img src="/image/youtube.webp" alt="youtube сибкомфорт" />
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-1/5 text-center md:text-left">
                    <h3 class="text-xl font-medium my-9 text-[#16A34A]">
                        Выбирайте
                    </h3>
                    <div class="flex flex-col text-white">
                        <Link href="/ready-project" class="mb-2 hover:text-[#16A34A]">Готовые проекты</Link>
                        <Link href="/production" class="mb-2 hover:text-[#16A34A]">Домокомплекты</Link>
                        <Link href="/pilomaterial" class="mb-2 hover:text-[#16A34A]">Пиломатериал</Link>
                        <Link href="/pogonazh" class="mb-2 hover:text-[#16A34A]">Погонаж</Link>
                    </div>
                </div>

                <div class="w-full md:w-1/5 text-center md:text-left">
                    <h3 class="text-xl font-medium my-9 text-[#16A34A]">
                        Информация
                    </h3>
                    <div class="flex flex-col text-white">
                        <Link href="/" class="mb-2 hover:text-[#16A34A]">Главная</Link>
                        <Link href="/catalog" class="mb-2 hover:text-[#16A34A]">Каталог</Link>
                        <Link href="/posts" class="mb-2 hover:text-[#16A34A]">Статьи</Link>
                        <Link href="/ipoteka" class="mb-2 hover:text-[#16A34A]">Ипотека</Link>
                        <Link href="/contact" class="hover:text-[#16A34A]">Контакты</Link>
                    </div>
                </div>
                <div class="w-full hidden md:block md:w-1/5 text-center md:text-left">
                    <h3 class="text-xl font-medium my-9 text-[#16A34A]">
                        Социальные сети
                    </h3>
                    <div class="flex flex-col text-white">
                        <div class="flex justify-center md:justify-start flex-row items-center">
                            <img class="w-36" src="/image/social.png" alt="social media" />
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/5 text-center md:text-left">
                    <h3 class="text-xl font-medium my-9 text-[#16A34A]">
                        Связаться
                    </h3>
                    <div class="flex flex-col text-white">
                        <div class="flex justify-center md:justify-start flex-row items-center">
                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.03906 15.2617C0.761719 9.10938 0 8.46484 0 6.17969C0 3.07422 2.49023 0.554688 5.625 0.554688C8.73047 0.554688 11.25 3.07422 11.25 6.17969C11.25 8.46484 10.459 9.10938 6.18164 15.2617C5.91797 15.6719 5.30273 15.6719 5.03906 15.2617ZM5.625 8.52344C6.91406 8.52344 7.96875 7.49805 7.96875 6.17969C7.96875 4.89062 6.91406 3.83594 5.625 3.83594C4.30664 3.83594 3.28125 4.89062 3.28125 6.17969C3.28125 7.49805 4.30664 8.52344 5.625 8.52344Z"
                                    fill="white" />
                            </svg>
                            <p class="ml-2 mb-2">
                                {{ $page.props.contact?.data?.adress }}
                            </p>
                        </div>

                        <div class="flex flex-row justify-center md:justify-start items-center">
                            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.707 4.65039C14.8242 4.5625 15 4.65039 15 4.79688V10.7734C15 11.5645 14.3555 12.1797 13.5938 12.1797H1.40625C0.615234 12.1797 0 11.5645 0 10.7734V4.79688C0 4.65039 0.146484 4.5625 0.263672 4.65039C0.9375 5.17773 1.78711 5.82227 4.77539 7.99023C5.39062 8.42969 6.44531 9.39648 7.5 9.39648C8.52539 9.39648 9.60938 8.42969 10.1953 7.99023C13.1836 5.82227 14.0332 5.17773 14.707 4.65039ZM7.5 8.42969C6.79688 8.45898 5.83008 7.58008 5.33203 7.22852C1.43555 4.41602 1.14258 4.15234 0.263672 3.44922C0.0878906 3.33203 0 3.12695 0 2.89258V2.33594C0 1.57422 0.615234 0.929688 1.40625 0.929688H13.5938C14.3555 0.929688 15 1.57422 15 2.33594V2.89258C15 3.12695 14.8828 3.33203 14.707 3.44922C13.8281 4.15234 13.5352 4.41602 9.63867 7.22852C9.14062 7.58008 8.17383 8.45898 7.5 8.42969Z"
                                    fill="white" />
                            </svg>
                            <p class="ml-2 mb-2">
                                {{ $page.props.contact?.data?.email }}
                            </p>
                        </div>

                        <div class="flex flex-row justify-center md:justify-start items-center">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.4434 1.78711C15.7656 1.875 16 2.13867 16 2.46094C16 9.99023 9.90625 16.0547 2.40625 16.0547C2.05469 16.0547 1.79102 15.8496 1.70312 15.5273L1 12.4805C0.941406 12.1582 1.08789 11.8066 1.41016 11.6602L4.69141 10.2539C4.98438 10.1367 5.30664 10.2246 5.51172 10.459L6.97656 12.2461C9.26172 11.1621 11.1074 9.28711 12.1621 7.06055L10.375 5.5957C10.1406 5.39062 10.0527 5.06836 10.1699 4.77539L11.5762 1.49414C11.7227 1.17188 12.0742 0.996094 12.3965 1.08398L15.4434 1.78711Z"
                                    fill="white" />
                            </svg>
                            <p class="ml-2 mb-2">
                                {{ $page.props.contact?.data?.phone }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <TimerModal />
</template>

<script setup>
import { usePage } from "@inertiajs/vue3";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
import TimerModal from "@/Components/TimerModal.vue";
</script>

<script>
import MainNavbar from "@/Components/MainNavbar.vue";
import Modal from "@/Components/Modal.vue";

export default {
    props: {
        info: {
            type: Object,
            default: {},
        },
        isFrame: {
            type: Boolean,
            default: false,
        },
        showSlider: {
            type: Boolean,
            default: true,
        },
        isHome: {
            type: Boolean,
            default: false,
        },
    },
    data() {
        return {
            showMenu: false,
            fixMenu: false,
            clientWidth: 0,
        };
    },
    mounted() {
        this.onresize();
        const tl = gsap.timeline();
        tl.fromTo(
            "h1",
            {
                y: 50,
                opacity: 0,
            },
            {
                y: 0,
                opacity: 1,
                duration: 1,
            },
            0.6
        )
            .fromTo(
                ".sub_title_h1",
                {
                    y: 30,
                    opacity: 0,
                    duration: 1,
                },
                {
                    y: 0,
                    opacity: 1,
                },
                2
            )
            .fromTo(
                ".offer_btn",
                {
                    y: 30,
                    opacity: 0,
                    duration: 1,
                },
                {
                    y: 0,
                    opacity: 1,
                },
                2
            )
            .fromTo(
                ".logo",
                {
                    y: 30,
                    opacity: 0,
                    duration: 1,
                },
                {
                    y: 0,
                    opacity: 1,
                },
                3
            )
            .fromTo(
                "#menu li",
                {
                    y: 30,
                    opacity: 0,
                },
                {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    stagger: 0.15,
                },
                3
            );
        // scroll animation
        gsap.to("#offer", {
            scrollTrigger: {
                trigger: "#header",
                start: "top top",
                scrub: true,
            },
            yPrecent: 50,
            scale: 0.5,
            xPercent: -50,
            opacity: 0,
        });
    },
    created() {
        window.addEventListener("scroll", this.handleScroll);
        window.addEventListener("resize", this.onresize);
    },
    unmounted() {
        window.addEventListener("scroll", this.handleScroll);
        window.removeEventListener("resize", this.onresize);
    },
    methods: {
        handleScroll(event) {
            if (event.target.scrollingElement.scrollTop > 50) {
                this.fixMenu = true;
            } else {
                this.fixMenu = false;
            }
        },

        onresize() {
            this.clientWidth = document.body.clientWidth;
        },
    },
    components: { MainNavbar },
};
</script>

<style>
.home-slider .carousel__next,
.home-slider .carousel__prev {
    @apply w-[35px] h-[32px] md:w-[45px] opacity-30 hover:opacity-100 md:opacity-100 md:h-[52px] border-2 border-[#16A34A] text-[#16A34A] hover:text-white md:top-[50%] top-[74%] rounded hover:bg-[#16A34A];
    transform: translateY(-50%);
}

.home-slider .carousel__next {
    @apply right-0;
}

.home-slider .carousel__prev {
    @apply left-0;
}

#header-main-frame::after {
    content: "";
    width: 100%;
    height: 9rem;
    position: absolute;
    bottom: -74px;
    background-color: #393939;
    transform: skewY(-2deg);
    box-shadow: 0px 10px 40px 5px;
}
</style>
