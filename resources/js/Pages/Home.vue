<template>
    <AppLayout :is-home="true" :show-slider="false">
        <main>
            <section id="secondSection" class="bg-[#393939] relative">
                <div class="sm:container sm:mx-auto px-[20px] pb-20">
                    <h2
                        class="text-[#16A34A] lg:text-[56px] text-[32px] lg:text-right text-center relative"
                    >
                        Строим дома с 2010 года
                    </h2>

                    <p class="text-white lg:text-right text-center">
                        Выбирайте свой проект и материал для постройки
                    </p>
                    <div
                        id="categorySecondSection"
                        class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 justify-between gap-6 md:mt-28 mt-10"
                    >
                        <Link
                            href="/catalog"
                            class="h-80 shadow-xl text-lg rounded hover:shadow-black bg-[#16A34A] group hover:bg-white transition-all ease-out duration-300 cursor-pointer p-8"
                        >
                            <div
                                class="sm:grid flex grid-cols-5 items-center gap-4"
                            >
                                <img
                                    src="/image/readyProject.webp"
                                    class="brightness-50 col-span-2"
                                    alt="logo"
                                />
                                <a
                                    class="col-span-3 break-words"
                                    href="/catalog"
                                    ><h3>Готовые проекты</h3></a
                                >
                            </div>
                            <p
                                class="my-7 text-base line-clamp-4 min-h-[100px]"
                            >
                                Проекты домов<br>
                                Выбирайте материал и размеры
                                Есть проекты для дачи и туризма
                            </p>
                            <button
                                class="flex text-base items-center gap-2 group-hover:animate-bounce"
                            >
                                <svg
                                    width="9"
                                    height="13"
                                    viewBox="0 0 9 13"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M7.875 7.21777L3.09375 11.999C2.74219 12.3506 2.21484 12.3506 1.89844 11.999L1.08984 11.2256C0.773438 10.874 0.773438 10.3467 1.08984 10.0303L4.5 6.65527L1.08984 3.24512C0.773438 2.92871 0.773438 2.40137 1.08984 2.0498L1.89844 1.24121C2.21484 0.924805 2.74219 0.924805 3.09375 1.24121L7.875 6.02246C8.19141 6.37402 8.19141 6.90137 7.875 7.21777Z"
                                        fill="#434343"
                                    />
                                </svg>
                                <a href="/catalog">Узнать больше</a>
                            </button>
                        </Link>
                        <Link
                            href="/production"
                            class="h-80 rounded text-lg shadow-xl hover:shadow-black bg-[#16A34A] group hover:bg-white transition-all ease-out duration-300 cursor-pointer p-8"
                        >
                            <div
                                class="sm:grid flex grid-cols-5 items-center gap-5"
                            >
                                <img
                                    src="/image/domKomplect.webp"
                                    class="brightness-50 col-span-2"
                                    alt="logo"
                                />
                                <a
                                    class="col-span-3 break-words"
                                    href="/production"
                                    ><h3>Домокомплекты</h3></a
                                >
                            </div>
                            <p
                                class="my-7 text-base line-clamp-4 min-h-[100px]"
                            >
                                Силовой каркас
                                изготовленный на производстве.<br>
                                Отправим по РФ
                            </p>
                            <button
                                class="flex items-center text-base gap-2 group-hover:animate-bounce"
                            >
                                <svg
                                    width="9"
                                    height="13"
                                    viewBox="0 0 9 13"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M7.875 7.21777L3.09375 11.999C2.74219 12.3506 2.21484 12.3506 1.89844 11.999L1.08984 11.2256C0.773438 10.874 0.773438 10.3467 1.08984 10.0303L4.5 6.65527L1.08984 3.24512C0.773438 2.92871 0.773438 2.40137 1.08984 2.0498L1.89844 1.24121C2.21484 0.924805 2.74219 0.924805 3.09375 1.24121L7.875 6.02246C8.19141 6.37402 8.19141 6.90137 7.875 7.21777Z"
                                        fill="#434343"
                                    />
                                </svg>
                                Узнать больше
                            </button>
                        </Link>
                        <Link
                            href="/pilomaterial"
                            class="h-80 shadow-xl rounded text-lg hover:shadow-black bg-[#16A34A] group hover:bg-white transition-all ease-out duration-300 cursor-pointer p-8"
                        >
                            <div
                                class="sm:grid flex grid-cols-5 items-center gap-5"
                            >
                                <img
                                    src="/image/icon2.1.webp"
                                    class="brightness-50 col-span-2"
                                    alt="logo"
                                />
                                <h3 class="col-span-3 break-words">
                                    Пиломатериал
                                </h3>
                            </div>
                            <p
                                class="my-7 text-base line-clamp-4 min-h-[100px]"
                            >
                            Брус, профилированный брус и обрезная
                            доска.
                            Камерная сушка по породам.
                            Оптом и в розницу.
                            </p>
                            <button
                                class="flex items-center text-base gap-2 group-hover:animate-bounce"
                            >
                                <svg
                                    width="9"
                                    height="13"
                                    viewBox="0 0 9 13"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M7.875 7.21777L3.09375 11.999C2.74219 12.3506 2.21484 12.3506 1.89844 11.999L1.08984 11.2256C0.773438 10.874 0.773438 10.3467 1.08984 10.0303L4.5 6.65527L1.08984 3.24512C0.773438 2.92871 0.773438 2.40137 1.08984 2.0498L1.89844 1.24121C2.21484 0.924805 2.74219 0.924805 3.09375 1.24121L7.875 6.02246C8.19141 6.37402 8.19141 6.90137 7.875 7.21777Z"
                                        fill="#434343"
                                    />
                                </svg>
                                Узнать больше
                            </button>
                        </Link>
                        <Link
                            href="/pogonazh"
                            class="h-80 shadow-xl rounded text-lg hover:shadow-black bg-[#16A34A] group hover:bg-white transition-all ease-out duration-300 cursor-pointer p-8"
                        >
                            <div
                                class="sm:grid flex grid-cols-5 items-center gap-5"
                            >
                                <img
                                    src="/image/pg.webp"
                                    class="brightness-50 col-span-2"
                                    alt="logo"
                                />
                                <h3 class="col-span-3 break-words">Погонаж</h3>
                            </div>
                            <p
                                class="my-7 line-clamp-4 text-base min-h-[100px]"
                            >
                            Для внешней и внутренней отделки. Собственного производства.
                            Камерной сушки. Оптом и в розницу.
                            </p>
                            <button
                                class="flex items-center text-base gap-2 group-hover:animate-bounce"
                            >
                                <svg
                                    width="9"
                                    height="13"
                                    viewBox="0 0 9 13"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M7.875 7.21777L3.09375 11.999C2.74219 12.3506 2.21484 12.3506 1.89844 11.999L1.08984 11.2256C0.773438 10.874 0.773438 10.3467 1.08984 10.0303L4.5 6.65527L1.08984 3.24512C0.773438 2.92871 0.773438 2.40137 1.08984 2.0498L1.89844 1.24121C2.21484 0.924805 2.74219 0.924805 3.09375 1.24121L7.875 6.02246C8.19141 6.37402 8.19141 6.90137 7.875 7.21777Z"
                                        fill="#434343"
                                    />
                                </svg>
                                Узнать больше
                            </button>
                        </Link>
                    </div>
                </div>
            </section>

            <section
                ref="diskContainer"
                id="thirdSection"
                class="relative bg-[url('/image/bg-sobproiz.webp')] bg-cover bgSidesShadow overflow-hidden"
            >
                <!-- <img
                    ref="disk_image"
                    src="/image/disk.png"
                    class="disk_image absolute z-10 lg:block hidden"
                    :style="{
                        width: `${diskContainerWidth / 2}px`,
                        right: `-${this.diskSize / 2}px`,
                        bottom: `${this.diskSize * 0.05}px`,
                    }"
                    alt="Диск"
                /> -->
                <!-- <img
                    ref="disk_image"
                    src="/image/disk.png"
                    class="disk_image absolute h-[80%] top-[18%] -right-96 z-10 lg:block hidden"
                    alt="Диск"
                /> -->
                <div class="px-[20px]">
                    <div class="flex">
                        <div class="lg:md:w-6/12 w-full lg:py-36 py-28">
                            <h2
                                class="text-[#16A34A] mt-10 md:mt-0 lg:text-[56px] text-[26px] md:text-[32px] text-left relative z-10 border-l border-[#16A34A] pl-2 md:pl-4"
                            >
                                Собственное деревообрабатывающее производство
                            </h2>
                            <hr class="mt-6 h-[1px] border-[#16A34A] w-full" />
                            <p
                                class="ml-4 text-white text-left md:w-2/3 my-10 md:mb-0"
                            >
                                Наше производство оснащено современным
                                оборудованием и использование передовых
                                технологий, что позволяет нам обеспечивать
                                высокую точность и эффективность в процессе
                                обработки древесины.
                            </p>
                            <Link href="/production">
                                <button
                                    class="ml-4 border-bottom rounded relative z-10 border border-[#16A34A] text-white px-16 py-4 my-10 text-lg transition ease-out duration-300 hover:shadow-inner hover:bg-[#16A34A]"
                                >
                                    Подробнее
                                </button>
                            </Link>
                        </div>
                        <div
                            class="md:w-6/12 w-full lg:block hidden relative transition-all"
                        >
                            <div
                                :style="{
                                    backgroundImage: `url(/image/derevo-brevno-srez.jpg)`,
                                }"
                                class="rotate-6 rounded pl-4 h-full object-cover absolute left-0 -right-16 bg-no-repeat bg-cover"
                                alt=""
                            />

                            <!-- <img
                                src="/image/1.webp"
                                class="w-[500px] h-[420px] absolute -top-10 left-4 z-10 rounded"
                                alt=""
                            />
                            <img
                                src="/image/2.webp"
                                class="w-[180px] h-[160px] absolute top-56 right-0 z-10 rounded"
                                alt=""
                            />
                            <img
                                src="/image/3.webp"
                                class="w-[220px] h-[180px] absolute bottom-[110px] -left-36 z-10 rounded"
                                alt=""
                            />
                            <img
                                src="/image/4.webp"
                                class="w-[500px] h-[350px] absolute -bottom-16 left-32 z-10 rounded"
                                alt=""
                            /> -->
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-[#434343] relative" id="sibdirector">
                <div class="sm:container sm:mx-auto px-[20px] pb-20 md:pb-0">
                    <div class="lg:flex flex-row gap-4 md:py-24">
                        <div class="lg:md:w-6/12 w-full relative">
                            <img
                                src="/image/director.webp"
                                class="relative z-20 rounded"
                                alt="Директор Сибкомфорт Михаил Манченко"
                            />
                            <!-- <div
                                class="absolute rounded z-20 text-white -bottom-16 -left-10 text-center w-36 h-36 md:w-[225px] md:h-[225px] bg13"
                            >
                                <div class="flex flex-col items-center">
                                    <strong
                                        class="text-[36px] md:text-[72px] pt-4 md:pt-8"
                                        >{{

                                        }}</strong
                                    >
                                    <p></p>
                                </div>
                            </div> -->
                        </div>
                        <div
                            class="lg:md:w-6/12 w-full relative z-10 mt-24 md:mt-16 text-white"
                        >
                            <span class="uppercase tracking-widest mb-5"
                                >директор пск сибкомфорт</span
                            >
                            <h2 class="text-6xl text-[#16A34A] relative">
                                Михаил Манченко
                            </h2>

                            <hr
                                class="relative mt-6 -left-20 border border-[#16A34A]"
                            />

                            <p class="my-6 text-lg">
                                Наше главное преимущество - многолетний
                                строительный опыт. Мы берём на себя
                                ответственность и строим качественно уже 13 лет.
                                Проектировщики следят за современными веяниями
                                малоэтажной архитектуры. Технологи применяют
                                надежные материалы и элементы конструкций. Все
                                процессы давно отлажены. Домокомплекты собираем
                                на собственном производстве. Только из
                                качественной древесины камерной сушки. В отделке
                                используем исключительно экологичные натуральные
                                материалы.
                            </p>
                            <div class="flex-column md:flex gap-4">
                                <div
                                    v-for="(building, index) in $page.props
                                        .contact?.data?.building"
                                    :key="index"
                                >
                                    <span class="text-[#16A34A] text-[48px]">{{
                                        building?.count
                                    }}</span>
                                    <div class="text-base">
                                        {{ building?.title }}
                                    </div>
                                    <p>
                                        {{ building?.description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="bg-black bg-[url('/image/bgBuild.webp')] bg-cover relative bgSidesShadow"
                id="ourProjects"
            >
                <div class="sm:container sm:mx-auto px-[20px] py-24">
                    <h2
                        class="text-[#16A34A] lg:text-[56px] text-[32px] mt-10 text-right relative border-r border-[#16A34A] pr-4"
                    >
                    Реализованные объекты
                    </h2>
                    <hr class="mt-6 md:border-[#16A34A]" />
                    <div class="gap-6 my-8 md:pb-8 relative z-10">
                        <Carousel
                            class="block-home"
                            :wrap-around="true"
                            :autoplay="3000"
                            v-bind="settings"
                            :breakpoints="breakpoints"
                        >
                            <Slide
                                v-for="project in projects"
                                :key="project.id"
                            >
                                <Link
                                    :href="route('project.single', project.id)"
                                    class="mx-3 cursor-pointer rounded"
                                    aria-hidden="true"
                                >
                                    <img
                                        :src="project.image_top"
                                        class="w-[400px] h-[400px] object-cover rounded"
                                        alt="Дом и баня"
                                    />
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
            <section
                class="bg-[#434343] mt-10 md:mt-0 pb-20 relative z-10"
                id="ourTeam"
            >
                <div
                    class="sm:container sm:mx-auto px-[20px] pb-4 -pt-10 md:pt-8"
                >
                    <h2
                        class="text-[#16A34A] lg:text-[56px] text-[32px] relative md:-top-10 border-l border-[#16A34A] pl-4"
                    >
                        Команда
                    </h2>
                    <hr
                        class="md:my-4 mt-6 md:w-2/4 md:border-[#16A34A] md:-top-8"
                    />
                    <div
                        class="relative z-10 flex flex-col md:flex-row justify-center lg:gap-6 md:mt-10 mt-6"
                    >
                        <div
                            v-tilt="{ speed: 500, perspective: 1200 }"
                            class="relative mt-8 md:mt-0"
                        >
                            <div class="relative">
                                <img
                                    src="/image/team1.webp"
                                    class="w-full rounded"
                                    alt="команда сибкомфорт"
                                />
                                <div
                                    class="absolute inset-0 flex justify-center items-center text-4xl font-semibold opacity-0 hover:opacity-100 transition duration-800 hover:bg-green-900 cursor-pointer hover:bg-opacity-50 text-white"
                                >
                                    <div>
                                        <p>Михаил</p>
                                        <p class="text-sm text-center">
                                            Проект-менеджер
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            v-tilt="{ speed: 500, perspective: 1200 }"
                            class="relative mt-8 md:mt-0"
                        >
                            <div class="relative">
                                <img
                                    src="/image/team2.webp"
                                    class="w-full rounded"
                                    alt="команда сибкомфорт"
                                />
                                <div
                                    class="absolute inset-0 flex justify-center items-center text-4xl font-semibold opacity-0 hover:opacity-100 transition duration-800 hover:bg-green-900 cursor-pointer hover:bg-opacity-50 text-white"
                                >
                                    <div>
                                        <p>Мария</p>
                                        <p class="text-sm text-center">
                                            Проект-менеджер
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            v-tilt="{ speed: 500, perspective: 1200 }"
                            class="relative mt-8 md:mt-0"
                        >
                            <div class="relative">
                                <img
                                    src="/image/team3.webp"
                                    class="w-full rounded"
                                    alt="команда сибкомфорт"
                                />
                                <div
                                    class="absolute inset-0 flex justify-center items-center text-4xl font-semibold opacity-0 hover:opacity-100 transition duration-800 hover:bg-green-900 cursor-pointer hover:bg-opacity-50 text-white"
                                >
                                    <div>
                                        <p>Михаил</p>
                                        <p class="text-sm text-center">
                                            Проект-менеджер
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            v-tilt="{ speed: 500, perspective: 1200 }"
                            class="mt-8 md:mt-0 relative"
                        >
                            <div class="relative">
                                <img
                                    src="/image/team1.webp"
                                    class="w-full rounded"
                                    alt="команда сибкомфорт"
                                />
                                <div
                                    class="absolute inset-0 flex justify-center items-center text-4xl font-semibold opacity-0 hover:opacity-100 transition duration-800 hover:bg-green-900 cursor-pointer hover:bg-opacity-50 text-white"
                                >
                                    <div>
                                        <p>Михаил</p>
                                        <p class="text-sm text-center">
                                            Проект-менеджер
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            v-tilt="{ speed: 500, perspective: 1200 }"
                            class="mt-8 md:mt-0 relative"
                        >
                            <div class="relative">
                                <img
                                    src="/image/team3.webp"
                                    class="w-full rounded"
                                    alt="команда сибкомфорт"
                                />
                                <div
                                    class="absolute inset-0 flex justify-center items-center text-4xl font-semibold opacity-0 hover:opacity-100 transition duration-800 hover:bg-green-900 cursor-pointer hover:bg-opacity-50 text-white"
                                >
                                    Михаил
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="py-24 pb-0 md:pt-24 md:pb-24 bg-[#000000] relative"
                id="reviewSec"
            >
                <div class="sm:container sm:mx-auto py-16 md:pb-0 px-[20px]">
                    <span class="uppercase text-white tracking-widest relative"
                        >Отзыв</span
                    >
                    <h2
                        class="border-l border-[#16A34A] pl-4 text-[#16A34A] lg:text-[56px] text-[32px] my-8 relative"
                    >
                    Клиенты о нашей работе
                    </h2>
                    <hr class="mb-6 h-[1px] md:border-[#16A34A]" />
                    <div class="mt-24 relative z-10">
                        <Carousel
                            :wrap-around="true"
                            class="block-home"
                            v-bind="settings"
                            :autoplay="100000"
                            :breakpoints="breakpoints"
                            :pauseAutoplayOnHover="true"
                        >
                            <Slide
                                v-for="(review, slide) in reviews"
                                :key="review.id"
                            >
                                <div
                                    class="grid p-4 gap-4 md:mx-5 md:p-12 cursor-pointer rounded w-full bg-[#16A34A]"
                                    :class="[
                                        {
                                            '!px-0':
                                                review.body.indexOf(
                                                    'youtube.com'
                                                ) >= 0,
                                        },
                                    ]"
                                >
                                    <svg
                                        :class="[
                                            'col-span-1',
                                            {
                                                'md:ml-12 ml-4':
                                                    review.body.indexOf(
                                                        'youtube.com'
                                                    ) >= 0,
                                            },
                                        ]"
                                        width="60"
                                        height="53"
                                        viewBox="0 0 60 53"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                    >
                                        <g style="mix-blend-mode: luminosity">
                                            <rect
                                                y="0.970703"
                                                width="60"
                                                height="52"
                                                fill="url(#pattern)"
                                            />
                                        </g>
                                        <defs>
                                            <pattern
                                                id="pattern"
                                                patternContentUnits="objectBoundingBox"
                                                width="1"
                                                height="1"
                                            >
                                                <use
                                                    xlink:href="#image0_60_126"
                                                    transform="scale(0.0166667 0.0192308)"
                                                />
                                            </pattern>
                                            <image
                                                id="image0_60_126"
                                                width="60"
                                                height="52"
                                                xlink:href="data:image/png;base64,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"
                                            />
                                        </defs>
                                    </svg>

                                    <p
                                        class="review-content"
                                        :class="{
                                            '!px-2 !my-1 w-full min-h-[208px]':
                                                review.body.indexOf(
                                                    'youtube.com'
                                                ) >= 0,
                                        }"
                                        v-html="review.body"
                                    ></p>
                                    <div
                                        class="flex items-center gap-6"
                                        :class="{
                                            'md:ml-12 ml-4':
                                                review.body.indexOf(
                                                    'youtube.com'
                                                ) >= 0,
                                        }"
                                    >
                                        <img
                                            class="w-[72px] h-[72px] rounded-full"
                                            :src="review.image"
                                            alt="user-review"
                                        />
                                        <div>
                                            <strong>{{ review.name }}</strong>
                                            <span class="block">{{
                                                new Date(
                                                    review.created_at
                                                ).toLocaleDateString()
                                            }}</span>
                                        </div>
                                    </div>
                                </div>
                            </Slide>
                            <template #addons>
                                <!-- <Navigation /> -->
                                <Pagination />
                            </template>
                        </Carousel>
                    </div>
                </div>
            </section>
            <section class="bg-[url('/image/book.webp')] bgSidesShadow py-16">
                <div class="sm:container sm:mx-auto px-[20px]">
                    <div class="bg-black mt-28 mb-20 rounded">
                        <div
                            class="md:flex grid justify-around items-center p-10 gap-6"
                        >
                            <a href="https://www.sberbank.ru/" target="_blank">
                                <img
                                    v-tilt="{ speed: 500, perspective: 1200 }"
                                    src="/image/sber.webp"
                                    alt="Сбер банк логотип"
                                    class="h-10 w-full object-contain hover:-mt-2 transition duration-300"
                                />
                            </a>
                            <a href="https://domrfbank.ru/" target="_blank">
                                <img
                                    v-tilt="{ speed: 500, perspective: 1200 }"
                                    src="/image/domrf.webp"
                                    alt="Дом РФ банк логотип"
                                    class="h-10 w-full object-contain hover:-mt-2 transition duration-300"
                                />
                            </a>

                            <a href="https://www.rshb.ru/" target="_blank">
                                <img
                                    v-tilt="{ speed: 500, perspective: 1200 }"
                                    src="/image/rosselhoz.webp"
                                    alt="Россельхозбанк Логотип"
                                    class="h-10 w-full object-contain hover:-mt-2 transition duration-300"
                                />
                            </a>
                            <a
                                href="https://www.nskbl.ru/private/"
                                target="_blank"
                            >
                                <img
                                    v-tilt="{ speed: 500, perspective: 1200 }"
                                    src="/image/bankLev.svg"
                                    alt="Банк Левобережный логотип"
                                    class="h-10 w-full object-contain hover:-mt-2 transition duration-300"
                                />
                            </a>
                            <a
                                href="https://www.pochtabank.ru/"
                                target="_blank"
                            >
                                <img
                                    v-tilt="{ speed: 500, perspective: 1200 }"
                                    src="/image/logo-pochta-bank.webp"
                                    alt="Почта банк логотип"
                                    class="h-10 w-full object-contain hover:-mt-2 transition duration-300"
                                />
                            </a>
                            <a href="https://www.rosbank.ru/" target="_blank">
                                <img
                                    v-tilt="{ speed: 500, perspective: 1200 }"
                                    src="/image/rosbank.webp"
                                    alt="Росбанк Логотип"
                                    class="h-10 w-full object-contain hover:-mt-2 transition duration-300"
                                />
                            </a>
                        </div>
                        <div class="text-gray-400 text-center pb-4">
                            логотипы кликабельные
                        </div>
                    </div>
                    <div
                        class="uppercase text-white tracking-widest text-right"
                    >
                        Блог
                    </div>
                    <Link href="/posts">
                        <h2
                            class="hover:text-white transition duration-300 text-[#16A34A] lg:text-[56px] text-[32px] my-6 text-right relative border-r border-[#16A34A] pr-4"
                        >
                            Полезный контент
                        </h2>
                        <hr class="h-[1px] mb-6 md:border-[#16A34A]" />
                    </Link>
                    <p class="text-white text-right mb-12">
                        Sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. when the musics over turn off the light
                    </p>
                    <div
                        class="lg:flex justify-center items-center mb-16 gap-6 lg:p-9"
                    >
                        <Link
                            :href="route('post.single', posts[0].slug)"
                            class="lg:w-2/5"
                            v-if="posts.length > 0"
                        >
                            <div class="relative group">
                                <img
                                    :src="posts[0].image"
                                    class="rounded opacity-50 w-full md:min-w-full transition duration-300 group-hover:scale-95"
                                    alt="Статья картинки брус, каркас, модул"
                                />
                                <div class="absolute bottom-0 p-6 group">
                                    <div
                                        class="text-white transition duration-300 group-hover:text-[#16A34A]"
                                    >
                                        {{ posts[0].category?.name }} |
                                        <span>{{
                                            new Date(
                                                posts[0].created_at
                                            ).toLocaleDateString()
                                        }}</span>
                                    </div>
                                    <h3
                                        class="text-lg text-ellipsis overflow-hidden md:text-2xl text-white transition duration-300 hover-group:text-[#16A34A]"
                                    >
                                        {{ posts[0].title }}
                                    </h3>
                                </div>
                            </div>
                        </Link>
                        <div class="flex lg:w-3/5">
                            <div class="flex flex-wrap">
                                <template v-for="i in 4" :key="i">
                                    <Link
                                        :href="
                                            route('post.single', posts[i].slug)
                                        "
                                        v-if="posts.length > i && i > 0"
                                        class="border border-white rounded p-8 md:w-6/12 w-full hover:border-3 hover:border-[#16A34A] transition duration-300"
                                    >
                                        <span class="text-white">{{
                                            posts[i].category?.name
                                        }}</span>
                                        <h3
                                            class="my-6 lg:text-xl text-md text-[#16A34A]"
                                        >
                                            {{ posts[i].title }}
                                        </h3>
                                        <p class="text-white">
                                            {{
                                                new Date(
                                                    posts[i].created_at
                                                ).toLocaleDateString()
                                            }}
                                        </p>
                                    </Link>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </AppLayout>
    <Head>
        <title>Главная страница</title>
        <meta
            head-key="description"
            name="description"
            content="Компания «СибКомфорт» Строим дома из бруса и по каркасной технологии, производим дом комплекты, пиломатериал, погонажные изделия под ключ в Красноярском крае."
        />
        <!--  Open Graph -->
        <meta property="og:type" content="website" />
        <meta
            property="og:title"
            content="СибКомфорт – строительство домов и бань (Красноярск, ул. Урванцева д.5)"
        />
        <meta
            property="og:description"
            content="Компания «СибКомфорт» Строим дома из бруса и по каркасной технологии, производим дом комплекты, пиломатериал, погонажные изделия под ключ в Красноярском крае."
        />
        <meta property="og:url" content="http://сибкомфорт.рф" />
        <meta
            property="og:image"
            width="320px"
            content="http://сибкомфорт.рф/image/director.webp"
        />
        <meta property="og:site_name" content="СибКомфорт" />
        <meta property="og:locale" content="ru_RU" />
    </Head>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import { Carousel, Navigation, Slide, Pagination } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";

export default {
    name: "WrapAround",
    components: {
        AppLayout,
        Head,
        Carousel,
        Navigation,
        Slide,
        Pagination,
    },

    props: {
        reviews: {
            type: Array,
            default: [],
        },
        posts: {
            type: Array,
            default: [],
        },
        projects: {
            type: Array,
            default: [],
        },
    },

    data() {
        return {
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
            speed: 1,
            diskSize: 0,
            diskContainer: 0,
        };
    },

    created() {
        // window.addEventListener("resize", this.handleScroll);
        // setInterval(() => {
        //     this.handleScroll();
        // }, 500);
    },

    mounted() {},

    unmounted() {
        // window.removeEventListener("scroll", this.handleScroll);
    },

    methods: {
        // handleScroll() {
        //     console.log(this.$refs.disk_image.width);
        //     this.diskSize = this.$refs.disk_image.width;
        //     this.diskContainerWidth = this.$refs.diskContainer.width;
        // },
    },
};
</script>

<style>
.block-home .carousel__pagination {
    @apply lg:gap-x-6 gap-x-3 my-12 transition-all duration-150 ease-in;
}

.block-home .carousel__pagination .carousel__pagination-button::after {
    @apply lg:w-5 lg:h-4 w-3 h-3 !bg-gray-600 rounded-sm;
}

.block-home
    .carousel__pagination
    .carousel__pagination-button.carousel__pagination-button--active::after {
    @apply lg:w-14 w-6 lg:h-4 h-3 !bg-green-600;
}
#ourProjects .carousel__next,
#ourProjects .carousel__prev {
    @apply w-[36px] h-[32px] md:w-[45px] md:h-[52px] border-2 border-[#16a34a] text-[#16a34a] hover:bg-[#16a34a] hover:text-white rounded;
}
#ourProjects .carousel__next {
    @apply top-auto -bottom-[70px] md:-bottom-[110px];
}
#ourProjects .carousel__prev {
    @apply top-auto left-auto -bottom-[54px] md:-bottom-[84px] absolute right-[60px];
}
.carousel__pagination {
    overflow: hidden;
}
.carousel__next,
.carousel__prev {
    border: 2px solid #16a34a;
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
</style>
