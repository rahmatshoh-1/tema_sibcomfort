<template>
    <AppLayout :isFrame="true">
        <CustomModal> </CustomModal>
        <main id="catalogSection" class="bg-[#393939] relative">
            <section>
                <div class="container mx-auto relative">
                    <h3
                            class="text-[#16A34A] px-4 text-[36px] md:text-[56px] text-right relative"
                        >
                            Почему мы
                        </h3>
                    <ul
                        class="pt-10 grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:text-[20px] text-[14px] text-center gap-[30px] sm:mx-auto mx-[20px]"
                    >
                        <li class="rounded-[4px] py-[27px] bg-white">
                            12 лет на рынке строительства
                        </li>
                        <li class="rounded-[4px] py-[27px] bg-white">
                            5 лет гарантии
                        </li>
                        <li class="rounded-[4px] py-[27px] bg-white">
                            Собственное производство
                        </li>
                        <li class="rounded-[4px] py-[27px] bg-white">
                            Доступная ипотека от 0,1%
                        </li>
                    </ul>
                    <div id="imageContainer" class="sm:mx-auto mx-[20px]">
                        <div class="one">
                            <img
                                class="lg:w-[65%]"
                                src="https://thumb.tildacdn.com/tild3833-3134-4264-b638-363331653366/-/resize/900x/-/format/webp/3_1.png"
                                alt="Изображение"
                            />
                            <div class="absolute right-0 top-[35%]">
                                <p class="text-white mb-[10px] float-right">
                                    <span class="lg:block hidden"
                                        >Силовой каркас из клееного бруса</span
                                    >
                                    <span
                                        class="lg:hidden w-[20px] h-[20px] border border-[#16A34A] rounded-full bg-white text-black flex items-center justify-center"
                                    >
                                        1
                                    </span>
                                      <span
                                    class="block w-[135px] h-[1px] bg-white"
                                ></span>
                                </p>
                              
                            </div>
                        </div>
                        <div class="two">
                            <img
                                class="lg:w-[65%]"
                                src="https://thumb.tildacdn.com/tild3334-3465-4235-a530-646437326564/-/resize/900x/-/format/webp/photo.png"
                                alt="Изображение"
                            />
                            <div class="absolute left-0 top-[35%] w-1/2">
                                <p
                                    class="text-white mb-[10px] lg:max-w-[240px]"
                                >
                                    <span class="lg:block hidden"
                                        >Утепленная крыша</span
                                    >
                                    <span
                                        class="lg:hidden w-[20px] h-[20px] border border-[#16A34A] rounded-full bg-white text-black flex items-center justify-center"
                                    >
                                        2
                                    </span>
                                </p>
                                <span
                                    class="w-1/2 block h-[1px] bg-white"
                                ></span>
                            </div>
                        </div>
                        <div class="three">
                            <img
                                class="lg:w-[65%]"
                                src="https://thumb.tildacdn.com/tild6539-6439-4931-a538-313765626538/-/resize/900x/-/format/webp/photo.png"
                                alt=""
                            />

                            <div class="absolute right-0 bottom-[35%] xl:w-1/2">
                                <p
                                    class="text-white mb-[10px] w-1/2 float-right"
                                >
                                    <span class="lg:block hidden">
                                        Панорамное (возможность остекления до
                                        95% фасадов) и рамное остекление</span
                                    >
                                    <span
                                        class="lg:hidden w-[20px] h-[20px] border border-[#16A34A] rounded-full bg-white text-black flex items-center justify-center"
                                    >
                                        3
                                    </span>
                                </p>
                                <span
                                    class="h-[1px] bg-white absolute right-0 bottom-0 left-[25%]"
                                ></span>
                            </div>
                        </div>
                        <div class="four">
                            <img
                                class="lg:w-[65%]"
                                src="https://thumb.tildacdn.com/tild3338-6362-4565-b765-366564633834/-/resize/900x/-/format/webp/photo.png"
                                alt=""
                            />
                            <div class="absolute left-0 bottom-[30%] w-1/2">
                                <p class="text-white mb-[10px] w-1/2">
                                    <span class="lg:block hidden">
                                        Заполнение стен стеновыми панелями
                                        заводского изготовления или клееным
                                        брусом
                                    </span>
                                    <span
                                        class="lg:hidden w-[20px] h-[20px] border border-[#16A34A] rounded-full bg-white text-black flex items-center justify-center"
                                    >
                                        4
                                    </span>
                                </p>
                                <span
                                    class="w-1/2 block h-[1px] bg-white"
                                ></span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-20 mx-[20px] lg:hidden">
                        <ul class="text-white grid gap-y-[22px]">
                            <li
                                class="border-b border-white flex items-center gap-x-[14px] pb-1"
                            >
                                <span>1</span>
                                <span>Силовой каркасиз клееного бруса</span>
                            </li>
                            <li
                                class="border-b border-white flex items-center gap-x-[14px] pb-1"
                            >
                                <span>2</span>
                                <span> Утепленная кровля</span>
                            </li>
                            <li
                                class="border-b border-white flex items-center gap-x-[14px] pb-1"
                            >
                                <span>3</span>
                                <span
                                    >Заполнение стен стеновыми панелями
                                    заводского изготовления или клееным
                                    брусом</span
                                >
                            </li>
                            <li
                                class="border-b border-white flex items-center gap-x-[14px] pb-1"
                            >
                                <span>4</span>
                                <span>
                                    Панорамное (возможность остекления до 95%
                                    фасадов) и рамное остекление</span
                                >
                            </li>
                        </ul>
                    </div>

                    <div class="flex justify-center">
                        <h2 class="text-center text-[36px] text-white lg:w-1/2 px-4">
                            Посмотрите на построенные нами наши дома, база
                            отдыха и баня
                        </h2>
                    </div>
                    <div class="pb-4 relative z-10 px-4">
                        <div id="tab-1" class="tabsContent">
                            <div class="col-span-12 my-10 md:my-16">
                                <div
                                    class="grid md:grid-cols-2 lg:grid-cols-4 gap-6"
                                >
                                    <ProjectCard
                                        v-for="project in projects"
                                        :key="project.id"
                                        :project="project"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                id="moreProject"
                class="mt-6 py-14 bg-gray-900 relative bg-[url('/image/BGcatalogProject.webp')] bg-no-repeat bg-center bg-cover"
            >
                <div class="container mx-auto px-4">
                    <h2
                        class="text-[#16A34A] text-[25px] mt-10 md:text-[56px] text-center md:text-left relative"
                    >
                        Нужно больше проектов для выбора?<br />
                        скачайте наш полный каталог!
                    </h2>
                    <div class="grid grid-cols-12 gap-4">
                        <CatalogForm type="karkas" />
                        <div
                            class="col-span-12 md:col-span-6 lg:col-span-8 order-1 md:order-none"
                        >
                            <img
                                v-tilt="{ speed: 500, perspective: 2500 }"
                                src="/image/catalogKarkas.webp"
                                alt="catalog.webp"
                                class="mx-auto"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <section class="pb-20 pt-8 sm:mx-auto mx-[20px]">
                <div class="container mx-auto">
                    <h2
                        class="text-[#16A34A] text-[25px] md:text-[45px] text-center md:text-right relative"
                    >
                        Часто задаваемые вопросы
                    </h2>
                    <div
                        class="pb-16 grid lg:grid-cols-2 gap-[30px] lg:mt-[73px] mt-[33px]"
                    >
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
                                class="flex items-center justify-between cursor-pointer"
                            >
                                <h3
                                    class="xl:text-[20px] lg:text-[18px] text-[16px] mb-2"
                                >
                                    {{ faq.label }}
                                </h3>
                                <span>
                                    <svg
                                        :class="{
                                            'rotate-180 ease-out transition duration-300': selectedFaq == faq,
                                        }"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="14"
                                        height="10"
                                        role="presentation"
                                        class="ease-out transition duration-300"
                                    >
                                        <path
                                            d="M9.211364 7.59931l4.48338-4.867229c.407008-.441854.407008-1.158247 0-1.60046l-.73712-.80023c-.407008-.441854-1.066904-.441854-1.474243 0L7 5.198617 2.51662.33139c-.407008-.441853-1.066904-.441853-1.474243 0l-.737121.80023c-.407008.441854-.407008 1.158248 0 1.600461l4.48338 4.867228L7 10l2.211364-2.40069z"
                                        ></path>
                                    </svg>
                                </span>
                            </div>
                            <div
                                class="lg:text-[16px] text-[14px]"
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
    <Head title="Главная страница" />
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import ProjectCard from "@/Components/ProjectCard.vue";
import CatalogForm from "@/Components/CatalogForm.vue";
import { Head } from "@inertiajs/vue3";
import CustomModal from "@/Components/CustomModal.vue";

export default {
    components: {
        Head,
        AppLayout,
        ProjectCard,
        CustomModal,
        CatalogForm
    },

    props: {
        projects: {
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
            selectedFaq: null,
        };
    },

    mounted() {
        this.loadBuilder();
    },

    methods: {
        loadBuilder() {
            const imageContainer = document.querySelector("#imageContainer");
            const img1 = document.querySelector(".one");
            const img2 = document.querySelector(".two");
            const img3 = document.querySelector(".three");
            const img4 = document.querySelector(".four");

            window.addEventListener("scroll", function () {
                const scrollPosition = window.scrollY;

                if (scrollPosition < 500) {
                    img2.style.top = "100px";
                    img2.style.opacity = 1;
                }
                if (scrollPosition > 500 && scrollPosition > 700) {
                    img3.style.top = "100px";
                    img3.style.opacity = 1;
                }
                if (scrollPosition > 700 && scrollPosition < 1000) {
                    img4.style.top = "0" + "px";
                    img4.style.opacity = 1;
                    img4.style.position = "relative";
                }
            });
        },
    },
};
</script>

<style scoped>
#imageContainer {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
.one,
.two,
.three,
.four {
    position: sticky;
    @apply w-full flex items-center justify-center;
}
.one {
    top: 100px;
}
.two {
    top: 500px;
    opacity: 0.5;
}
.three {
    top: 500px;
    opacity: 0.5;
}
.four {
    top: 800px;
    opacity: 0.5;
}

#moreProject::after {
    content: "";
    width: 100%;
    height: 9rem;
    position: absolute;
    bottom: -90px;
    background-color: #393939;
    transform: skewY(-2deg);
}
</style>
