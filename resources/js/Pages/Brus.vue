<template>
    <AppLayout :isFrame="true">
        <CustomModal> </CustomModal>
        <main id="catalogSection" class="bg-[#393939] relative">
            <section>
                <div class="sm:container sm:mx-auto mx-[20px] relative">
                    <h3 class="text-[#16A34A] px-4 text-[36px] md:text-[56px] relative text-end">
                        Наши технологии
                    </h3>
                    <div class="text-white relative mt-[9px] lg:mb-[73px] mb-[28px]">
                        <h2 class="lg:text-[36px] mt-10 text-[20px]">Процесс</h2>

                        <p class="mt-[20px]">
                            Процесс производства стеновых комплектов домов из
                            бруса камерной сушки начинается с распиловки
                            древесины. При распиловке получается заготовка в
                            виде пиленного бруса нужного сечения 100х150мм,
                            150х150мм 150х200мм. Далее заготовку транспортируют
                            к сушильным камерам, где в брусе делается продольный
                            пропил для снятия напряжения в волокнах
                            древесины(позволяет сократить количество трещин в
                            брусе). Далее брус закладывают в камеры на 3-3,5
                            недели и сушат в определенных температурных режимах,
                            необходимых для достижения максимального качества
                            стенового материала. Качество определяется наличием
                            появившихся трещин на теле бруса, геометрии
                            заготовки и уровнем содержания влаги. Требуемый
                            уровень влажности древесины - 18-22% влажности. По
                            факту достижения данного уровня, брус может по праву
                            называться сухим. Но, в летнее время, когда
                            температура варьируется от 18 до 30 градусов, брус
                            оставляется на улице, где подвергается процессу
                            естественной сушки температурой окружающей среды и
                            обдувания ветром. Благодаря данному процессу удается
                            сократить время, необходимое для принудительной
                            сушки в камере до 1-2х недель. Из камеры брус
                            доставляется в зону профилирования, где брус
                            строгается с четырех сторон сначала прямыми фрезами
                            для выравнивания геометрии заготовки по всей длине и
                            плоскостям заготовки, после чего завершающим этапом
                            является придание брусу профиля в виде прямых или
                            имитирующих бревно форм, а также придания шипа и
                            паза. Далее, в зависимости от типа будущего
                            строения, судьба профилированного бруса определяется
                            следующим образом: грузится на автотранспорт и
                            доставляется к месту строительства в таком виде, в
                            котором вышел из фрезерного станка либо отправляется
                            в цех зарезки чаш. Цех зарезки чаш — это линия, на
                            которой по предварительно заданным размерам в
                            соответствии с проектом нарезаются нужной длины
                            элементы и запиливаются замковые соединения. В
                            последствии данный комплект дома привозится на
                            строительную площадку и возводится также быстро,
                            точно и просто как конструктор Лего. Также имеющееся
                            оборудование служит для производства деревянной
                            шпунтованной доски, имитации бруса, имитации бревна,
                            вагонки, элементов лестниц ступени, тетивы,
                            балясины и заходные столбы
                        </p>
                    </div>

                    <div class="lg:h-[600px] sm:max-h-[400px] max-h-[256px] flex">
                        <ImgComparisonSlider>
                            <img slot="first" src="/image/home.png" style="width: 100%" class="rounded" />
                            <img slot="second" style="width: 100%" src="/image/home-out.png" class="rounded" />
                        </ImgComparisonSlider>
                    </div>

                    <div class="flex justify-center">
                        <h2 class="text-center mt-10 text-[25px] md:text-[36px] text-white lg:w-1/2">
                            Посмотрите на построенные нами наши дома, база
                            отдыха и баня
                        </h2>
                    </div>
                    <div class="pb-16 md:pb-8 md:px-4">
                        <div id="tab-1" class="tabsContent">
                            <div class="col-span-12 my-10 md:my-16">
                                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                                    <ProjectCard v-for="project in projects" :key="project.id" :project="project" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="ourProjects">
                <div class="sm:container sm:mx-auto mx-[20px]">
                    <h2 class="text-[25px] md:text-[36px] text-white lg:w-1/2">
                        Реализованное проекты
                    </h2>
                    <div class="gap-6 my-8 md:pb-8 relative z-10">
                        <Carousel class="block-home" :wrap-around="true" :autoplay="3000" v-bind="settings"
                            :breakpoints="breakpoints">
                            <Slide v-for="project in readyProjects" :key="project.id">
                                <Link :href="route('project.single', project.id)"
                                    class="cursor-pointer rounded-[4px] block w-full mr-6" aria-hidden="true">
                                <img :src="project.image_top" class="h-[306px] w-full object-cover rounded-[4px]"
                                    alt="Дом и баня" />
                                </Link>
                            </Slide>
                            <template #addons>
                                <Navigation />
                                <!-- <Pagination /> -->
                            </template>
                        </Carousel>
                    </div>
                </div>
            </section>
            <section id="moreProject"
                class="mt-6 py-14 bg-gray-900 relative bg-[url('/image/BGcatalogProject.webp')] bg-no-repeat bg-center bg-cover">
                <div class="sm:container sm:mx-auto mx-[20px] md:px-4">
                    <h2 class="text-[#16A34A] text-[25px] mt-10 md:text-[56px] text-center md:text-left relative">
                        Нужно больше проектов для выбора?<br />
                        скачайте наш полный каталог!
                    </h2>
                    <div class="grid grid-cols-12 gap-4">
                        <CatalogForm type="brus" />
                        <div class="col-span-12 md:col-span-6 order-1 md:order-none">
                            <img v-tilt="{ speed: 500, perspective: 1200 }" src="/image/catalog.webp" alt="catalog.webp" />
                        </div>
                    </div>
                </div>
            </section>

            <section class="pb-20 pt-8 sm:mx-auto mx-[20px]">
                <div class="sm:container sm:mx-auto mx-[20px]">
                    <h2 class="text-[#16A34A] text-[25px] md:text-[45px] text-center md:text-right relative">
                        Часто задаваемые вопросы
                    </h2>
                    <div class="pb-16 grid lg:grid-cols-2 gap-[30px] items-start lg:mt-[73px] mt-[33px]">
                        <div class="bg-white p-4 rounded" v-for="faq in faqs" :key="faq.id">
                            <div @click="
                                selectedFaq =
                                selectedFaq == faq ? null : faq
                                " class="flex items-center justify-between">
                                <h3 class="xl:text-[20px] lg:text-[18px] text-[16px] mb-2">
                                    {{ faq.label }}
                                </h3>
                                <span>
                                    <svg :class="{
                                        'rotate-180': selectedFaq == faq,
                                    }" xmlns="http://www.w3.org/2000/svg" width="14" height="10"
                                        role="presentation">
                                        <path
                                            d="M9.211364 7.59931l4.48338-4.867229c.407008-.441854.407008-1.158247 0-1.60046l-.73712-.80023c-.407008-.441854-1.066904-.441854-1.474243 0L7 5.198617 2.51662.33139c-.407008-.441853-1.066904-.441853-1.474243 0l-.737121.80023c-.407008.441854-.407008 1.158248 0 1.600461l4.48338 4.867228L7 10l2.211364-2.40069z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <div class="text-[14px] transition-all ease-out duration-500" :class="selectedFaq == faq
                                    ? 'max-h-full opacity-100'
                                    : 'max-h-0 opacity-0'
                                ">
                                <p v-html="faq.body"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </AppLayout>

    <Head title="Строительство из бруса" />
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import ProjectCard from "@/Components/ProjectCard.vue";
import { Head } from "@inertiajs/vue3";
import CustomModal from "@/Components/CustomModal.vue";
import { ImgComparisonSlider } from "@img-comparison-slider/vue";
import { Carousel, Navigation, Slide, Pagination } from "vue3-carousel";
import CatalogForm from "@/Components/CatalogForm.vue";

export default {
    components: {
        Head,
        AppLayout,
        ProjectCard,
        CustomModal,
        Carousel,
        Navigation,
        Slide,
        Pagination,
        ImgComparisonSlider,
        CatalogForm,
    },

    props: {
        projects: {
            type: Array,
            default: [],
        },
        readyProjects: {
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
            settings: {
                itemsToShow: 1,
                snapAlign: "start",
            },

            breakpoints: {
                640: {
                    itemsToShow: 1,
                },
                768: {
                    itemsToShow: 2,
                },
                1024: {
                    itemsToShow: 3,
                },
            },
        };
    },

    created() { },

    methods: {},
};
</script>

<style>
#ourProjects .carousel__next,
#ourProjects .carousel__prev {
    @apply w-[36px] h-[32px] md:w-[45px] md:h-[52px] !border-2 !border-[#16a34a] text-[#16a34a] hover:bg-[#16a34a] hover:text-white rounded;
}

#ourProjects .carousel__next {
    @apply top-auto -bottom-[70px] md:-bottom-[135px];
}

#ourProjects .carousel__prev {
    @apply top-auto left-auto -bottom-[55px] md:-bottom-[110px] absolute right-[60px];
}
</style>
<style scoped>
#ourProjects::after {
    height: 0
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