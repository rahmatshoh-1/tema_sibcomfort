<template>
    <AppLayout
        :info="{
            title: 'Собственное производство домокомплектов',
        }"
    >
        <main id="catalogSection" class="bg-[#393939] relative">
            <section id="proizvodstvo-firstBlock" class="relative px-4">
                <div class="container mx-auto">
                    <h2
                        class="text-[#16A34A] text-[32px] mb-10 md:text-[56px] text-right relative"
                    >
                        Домокомплекта
                    </h2>
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 md:col-span-6">
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz1.webp"
                                alt=""
                                class="rounded"
                            />
                        </div>
                        <div class="col-span-12 md:col-span-6 text-white">
                            <div class="text-right my-2">
                                Собственное производство
                            </div>
                            <h3 class="text-[25px] md:text-[36px] mb-3">
                                Наша миссия создавать качественные дома по
                                доступным ценам.
                            </h3>
                            <p>
                                Все деревянные конструкции и детали
                                изготавливаются в заводских условиях.
                                производственный цех пск сибкомфорт оснащен
                                сушильными камерами для древесины. строгальными,
                                шлифовальными станками и другим необходимым
                                деревообрабатывающим оборудованием. сборка
                                силового каркаса ведется нейлерами.
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-4 mt-24 relative z-10">
                        <div class="col-span-6 md:col-span-3">
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz2.webp"
                                alt=""
                                class="rounded"
                            />
                        </div>
                        <div class="col-span-6 md:col-span-3">
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz3.webp"
                                alt=""
                                class="rounded"
                            />
                        </div>
                        <div class="col-span-6 md:col-span-3">
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz4.webp"
                                alt=""
                                class="rounded"
                            />
                        </div>
                        <div class="col-span-6 md:col-span-3">
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz5.webp"
                                alt=""
                                class="rounded"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <section
                id="proizvodstvo-secondBlock"
                class="bg-[url('/image/Sobstvennoe-Proizvodstvo/bgProiz7.webp')] bgSidesShadow mt-16 py-10 bg-cover relative"
            >
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-4 my-24 px-4">
                        <div class="col-span-12 md:col-span-6">
                            <h2
                                class="text-[#16A34A] text-[25px] md:text-[56px] mb-8"
                            >
                                В малоэтажным строительством 13 ЛЕТ
                            </h2>
                            <p class="text-white">
                                Постоянно совершенствуем производственные и
                                прочие процессы возведения домов используем
                                качественные экологически безопасные материалы
                                Заказывая дом у нас вас не ждет
                                незапланированное увеличение сметы. вы покупаете
                                дом за четкую сумму. без доплат и скрытых
                                расходов все этапы строительства в согласованные
                                твердые календарные графики
                            </p>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz6.webp"
                                alt=""
                                class="rounded"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <section id="proizvodstvo-thirdBlock" class="my-10 relative px-4">
                <div class="container mx-auto">
                    <h2 class="text-[#16A34A] text-[36px] md:text-[56px] mb-4">
                        Наши технологии
                    </h2>
                    <div class="grid grid-cols-12 gap-4 my-8">
                        <div
                            class="col-span-12 md:col-span-5 order-2 md:order-1"
                        >
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz8.webp"
                                alt=""
                                class="rounded"
                            />
                        </div>
                        <div
                            class="col-span-12 md:col-span-7 order-1 md:order-2 text-white"
                        >
                            <h3 class="text-[25px] md:text-[36px] mb-4">Проектирование</h3>
                            <p class="mb-4">
                                Каркасный дом сложная система разнокалиберных
                                деталей из разных материалов. Без плана с
                                расчетами размера, расположения и вида элементов
                                построить прочный и теплый дом невозможно
                            </p>
                            <p>
                                Каркасный дом сложная система разнокалиберных
                                деталей из разных материалов. Без плана с
                                расчетами размера, расположения и вида элементов
                                построить прочный и теплый дом невозможно
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-4 my-8">
                        <div class="col-span-12 md:col-span-7 text-white">
                            <h3 class="text-[25px] md:text-[36px] mb-4">Фундамент</h3>
                            <p class="mb-4">
                                Специалисты под каждое место выбирают свой тип
                                фундамента. Чаще всего для наших каркасников мы
                                используем свайные фундаменты. Оцинкованные
                                винтовые, железобетонные или буро-набивные.
                            </p>
                            <p>
                                Специалисты под каждое место выбирают свой тип
                                фундамента. Чаще всего для наших каркасников мы
                                используем свайные фундаменты. Оцинкованные
                                винтовые, железобетонные или буро-набивные.
                            </p>
                        </div>
                        <div class="col-span-12 md:col-span-5">
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz9.webp"
                                alt=""
                                class="rounded"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-4 my-8">
                        <div
                            class="col-span-12 md:col-span-5 order-2 md:order-1"
                        >
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz10.webp"
                                alt=""
                                class="rounded"
                            />
                        </div>
                        <div
                            class="col-span-12 md:col-span-7 order-1 md:order-2 text-white"
                        >
                            <h3 class="text-[25px] md:text-[36px] mb-4">Кровля</h3>
                            <p class="mb-4">
                                Каркасный дом сложная система разнокалиберных
                                деталей из разных материалов. Без плана с
                                расчетами размера, расположения и вида элементов
                                построить прочный и теплый дом невозможно
                            </p>
                            <p>
                                Каркасный дом сложная система разнокалиберных
                                деталей из разных материалов. Без плана с
                                расчетами размера, расположения и вида элементов
                                построить прочный и теплый дом невозможно
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section
                id="proizvodstvo-forthBlock"
                class="bg-[url('/image/Sobstvennoe-Proizvodstvo/bgProiz11.webp')] mt-16 py-20 bgSidesShadow bg-cover relative"
            >
                <div class="container mx-auto px-4">
                    <h2
                        class="text-[#16A34A] text-[36px] md:text-[56px] mb-4 text-center md:text-right"
                    >
                        Как мы строим
                    </h2>
                    <div class="grid grid-cols-12 gap-4 my-8">
                        <div class="col-span-12 md:col-span-6 text-white">
                            <h3 class="text-[25px] md:text-[36px] mb-4">
                                Каркас пола
                            </h3>
                            <p class="mb-4">
                                После обвязки свай монтируется силовой каркас
                                пола. Напомним, что вся древесина только
                                камерной сушки и обработана огне био защитой
                                погружным способом. Каркас прочен, горизонтален,
                                можно начать сборку домокомплекта стен.
                            </p>
                            <p>
                                После обвязки свай монтируется силовой каркас
                                пола. Напомним, что вся древесина только
                                камерной сушки и обработана огне био защитой
                                погружным способом. Каркас прочен, горизонтален,
                                можно начать сборку домокомплекта стен.
                            </p>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz12.webp"
                                alt="Каркас пола"
                                class="rounded"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-4 my-8">
                        <div class="col-span-12 md:col-span-5">
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz13.webp"
                                alt="Каркас стен"
                                class="rounded"
                            />
                        </div>
                        <div class="col-span-12 md:col-span-7 text-white">
                            <h3 class="text-[25px] md:text-[36px] mb-4">
                                Каркас стен
                            </h3>
                            <p class="mb-4">
                                Силовой каркас стен это типовые решения
                                разработанные для каждого проекта. Мы заранее
                                расчитываем нагрузки по всем элементам.
                                Усиливаем каркас если в стенах монтируем окна,
                                двери или витражи. Если дом двухэтажный или с
                                мансардой мы также дополнительно усиливаем
                                конструкции.
                            </p>
                            <p>
                                Силовой каркас стен это типовые решения
                                разработанные для каждого проекта. Мы заранее
                                расчитываем нагрузки по всем элементам.
                                Усиливаем каркас если в стенах монтируем окна,
                                двери или витражи. Если дом двухэтажный или с
                                мансардой мы также дополнительно усиливаем
                                конструкции.
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-4 my-8">
                        <div class="col-span-12 md:col-span-7 text-white">
                            <h3 class="text-[25px] md:text-[36px] mb-4">
                                Установка инженерных систем
                            </h3>
                            <p class="mb-4">
                                После изоляции и обшивки начинается внешняя
                                отделка. Идёт монтаж окон, дверей и инженерных
                                коммуникаций. Каналы для инженерных сетей
                                предусматриваются на этапе возведения каркаса.
                                Параллельно, снаружи делают облицовку имитацией
                                бруса, сайдингом, панелями ПВХ, черепицей или
                                металлом. Но следует помнить, что прокладывать,
                                что то новое и разбирать самостоятельно
                                домокомплект нельзя. Только со специалистом
                                знающим внутреннюю несущую конструкцию. После
                                всех видов монтаже можно приступать к внутренней
                                отделке.
                            </p>
                        </div>
                        <div class="col-span-12 md:col-span-5">
                            <img
                                v-tilt="{ speed: 500, perspective: 1200 }"
                                src="/image/Sobstvennoe-Proizvodstvo/proiz14.webp"
                                alt="Установка инженерных систем"
                                class="rounded"
                            />
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </AppLayout>
    <Head title="Cтраница Домокомплект" />
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";

export default {
    components: {
        AppLayout,
        Head,
    },
};
</script>
