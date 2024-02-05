<template>
    <AppLayout
        :info="{
            title: 'Контакты и реквизиты',
            body: '',
        }"
    >
        <main id="catalogSection" class="bg-[#393939] relative">
            <section id="contact-firstBlock" class="relative">
                <div class="container mx-auto">
                    <h2
                        class="text-[#16A34A] text-4xl md:text-[56px] mx-4 text-right relative"
                    >
                        Контакты и реквизиты
                    </h2>
                    <div class="grid grid-cols-12 gap-4 my-16">
                        <div class="col-span-12 md:col-span-6 mx-4">
                            <img class="rounded" src="/image/director.webp" alt="Директор сибкомфорт" />
                        </div>
                        <div
                            class="col-span-12 md:col-span-6 my-8 mx-4 text-white md:text-left"
                        >
                            <p>
                                <strong>Сокращенное наименование:</strong> ООО
                                ПСК «СибКомфорт
                            </p>
                            <p>
                                <strong>Юридический адрес:</strong> 660118,
                                Красноярский край, г. Красноярск, ул. Урванцева
                                5 пом 149
                            </p>
                            <p>
                                <strong>Фактический адрес:</strong> 660118,
                                Красноярский край, г. Красноярск, ул. Урванцева
                                5 пом 149
                            </p>
                            <p><strong>ИНН:</strong> 2465192482</p>
                            <p class="mb-8">
                                <strong>ОГРН:</strong> 1192468006488
                            </p>
                            <p><strong>Банковские реквизиты:</strong></p>
                            <p>р/с 40702810923420001737</p>
                            <p>Филиал «Новосибирский» АО «АЛЬФА-БАНК»</p>
                            <p>ИНН 7728168971</p>
                            <p>ОГРН 1027700067328</p>
                            <p>БИК 045004774</p>
                            <p>к/с 30101810600000000774 в СИБИРСКОЕ ГУ</p>
                            <p>БАНКА РОССИИ</p>
                            <p>
                                630004, г. Новосибирск, Железнодорожный район,
                                улица Ленина, д. 52
                            </p>
                            <div class="text-lg my-8">
                                <strong>Директор:</strong> Манченко Михаил
                                Владимирович
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container mx-auto">
                    <h2
                        class="text-white text-2xl md:text-[36px] pb-28 text-center w-full md:w-3/4 mx-auto"
                    >
                        Остались вопросы? Давайте встретимся и обсудим их за
                        чашкой кофе в удобное для вас время
                    </h2>
                </div>
            </section>
            <section id="section-map" class="relative">
                <div class="container mx-auto">
                    <div
                        class="w-80 md:w-96 rounded shadow-2xl bg-[#434343] p-4 text-white z-10 absolute -top-10 md:top-1/3"
                    >
                        <div class="text-center text-2xl mb-3">
                            Контактная информация
                        </div>
                        <div
                            class="grid grid-rows-1 md:grid-cols-2 lg:md:grid-cols-2 gap-4"
                        >
                            <div
                                class="flex items-center justify-between md:flex-col"
                            >
                                <div
                                    class="flex md:flex-none items-center gap-2"
                                >
                                    <svg
                                        width="12"
                                        height="16"
                                        viewBox="0 0 12 16"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M5.03906 15.582C0.761719 9.42969 0 8.78516 0 6.5C0 3.39453 2.49023 0.875 5.625 0.875C8.73047 0.875 11.25 3.39453 11.25 6.5C11.25 8.78516 10.459 9.42969 6.18164 15.582C5.91797 15.9922 5.30273 15.9922 5.03906 15.582ZM5.625 8.84375C6.91406 8.84375 7.96875 7.81836 7.96875 6.5C7.96875 5.21094 6.91406 4.15625 5.625 4.15625C4.30664 4.15625 3.28125 5.21094 3.28125 6.5C3.28125 7.81836 4.30664 8.84375 5.625 8.84375Z"
                                            fill="white"
                                        />
                                    </svg>
                                    <div>
                                        {{ $page.props.contact?.data?.adress }}
                                    </div>
                                </div>
                            </div>
                            <div class="flex md:flex-col gap-6 md:gap-0">
                                <span class="text-sm md:text-base">{{
                                    $page.props.contact?.data?.phone
                                }}</span>
                                <div class="text-sm md:text-base">
                                    {{ $page.props.contact?.data?.email }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A8c849360d8026b91ecb1663b2c2f2715049d38b6ad243cbf4b2dabf4113c0b93&amp;source=constructor"
                    width="100%"
                    height="500"
                    frameborder="0"
                ></iframe>
            </section>
        </main>
    </AppLayout>
    <Head title="Главная страница" />
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
