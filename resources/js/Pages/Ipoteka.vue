<template>
    <AppLayout
        :info="{
            title: 'С нашей ипотекой от 0,1%, Превращаем ваши идеи в недвижимость',
        }"
    >
        <main id="catalogSection" class="bg-[#393939] relative">
            <section>
                <div class="container mx-auto">
                    <h2
                        class="text-[#16A34A] px-4 text-[36px] md:text-[56px] text-right relative"
                    >
                        Калькулятор ипотеки
                    </h2>
                </div>
            </section>
            <section
                id="mortgage-calculator-section"
                class="mortgage py-10 px-4 relative z-10"
            >
                <div class="container mx-auto">
                    <div class="row mortgage-calculator">
                        <form @submit.prevent="save">
                            <div
                                class="mortgage__columns bg-white px-4 py-4 my-10"
                            >
                                <div class="mortgage__col-left">
                                    <div
                                        class="form-group order-first md:order-last"
                                    >
                                        <label for="object-price"
                                            >Стоимость недвижимости</label
                                        >
                                        <div class="range-output rounded">
                                            <input
                                                v-model="item.costEstate"
                                                name="costEstate"
                                                class="money text-input"
                                                id="object-price-output"
                                            />
                                            <input
                                                type="hidden"
                                                id="object-price-hidden"
                                            />
                                        </div>
                                        <input
                                            type="range"
                                            list="object-price-tickmarks"
                                            min="500000"
                                            max="10000000"
                                            value="3500000"
                                            class="form-control-range"
                                            id="object-price"
                                        />
                                        <datalist id="object-price-tickmarks">
                                            <option
                                                value="500000"
                                                label="500 тыс."
                                            ></option>
                                            <option value="1000000"></option>
                                            <option value="1500000"></option>
                                            <option value="2000000"></option>
                                            <option value="2500000"></option>
                                            <option value="3000000"></option>
                                            <option value="3500000"></option>
                                            <option value="4000000"></option>
                                            <option value="4500000"></option>
                                            <option value="5000000"></option>
                                            <option value="5500000"></option>
                                            <option value="6000000"></option>
                                            <option value="6500000"></option>
                                            <option value="7000000"></option>
                                            <option value="7500000"></option>
                                            <option value="8000000"></option>
                                            <option value="8500000"></option>
                                            <option value="9000000"></option>
                                            <option value="9500000"></option>
                                            <option
                                                value="10000000"
                                                label="10 млн."
                                            ></option>
                                        </datalist>
                                    </div>

                                    <div class="form-group">
                                        <label for="first-payment"
                                            >Первоначальный взнос</label
                                        >
                                        <div class="range-output rounded">
                                            <input
                                                required
                                                class="money text-input"
                                                name="firstPay"
                                                id="first-payment-output"
                                            />
                                            <input
                                                type="hidden"
                                                id="first-payment-hidden"
                                            />
                                        </div>
                                        <input
                                            type="range"
                                            list="first-payment-tickmarks"
                                            min="300000"
                                            max="5000000"
                                            value="1000000"
                                            class="form-control-range"
                                            id="first-payment"
                                        />
                                        <datalist id="first-payment-tickmarks">
                                            <option
                                                value="300000"
                                                label="300 тыс."
                                            ></option>
                                            <option value="500000"></option>
                                            <option value="1000000"></option>
                                            <option value="1500000"></option>
                                            <option value="2000000"></option>
                                            <option value="2500000"></option>
                                            <option value="3000000"></option>
                                            <option value="4500000"></option>
                                            <option
                                                value="5000000"
                                                label="5 млн."
                                            ></option>
                                        </datalist>
                                    </div>

                                    <div class="form-group">
                                        <label for="years">Срок кредита</label>
                                        <div class="range-output rounded">
                                            <input
                                                class="text-input"
                                                name="creditTerm"
                                                id="years-output"
                                            />
                                        </div>
                                        <input
                                            type="range"
                                            list="years-tickmarks"
                                            min="1"
                                            max="30"
                                            value="20"
                                            class="form-control-range"
                                            id="years"
                                        />
                                        <datalist
                                            id="tickmarks years-tickmarks"
                                        >
                                            <option
                                                value="1"
                                                label="1 год"
                                            ></option>
                                            <option
                                                value="30"
                                                label="30 лет"
                                            ></option>
                                        </datalist>
                                    </div>

                                    <div
                                        class="form-group order-last md:order-first"
                                    >
                                        <label for="percent"
                                            >Ипотечные программы</label
                                        >
                                        <p>
                                            Выберите ипотечную программу или
                                            введите % ставку
                                        </p>
                                        <div id="percent">
                                            <select
                                                id="bank-select"
                                                class="cursor-pointer rounded"
                                                name="typeProgram"
                                            >
                                                <option value="5.8" selected="">
                                                    Дом.рф – Семейная программа
                                                </option>
                                                <option value="0.1">
                                                    Дом.рф - особая
                                                </option>
                                                <option value="15.6">
                                                    Дом.рф - под строительство
                                                </option>
                                                <option value="5.3">
                                                    Сбербанк - ИЖС
                                                </option>
                                                <option value="11.9">
                                                    Сбербанк - Под строительство
                                                </option>
                                                <option value="3">
                                                    Россельхозбанк
                                                </option>
                                            </select>
                                            <div class="bank-percent rounded">
                                                <input
                                                    class="text-input-percent p-1 cursor-pointer"
                                                    id="bank-percent-span"
                                                    disabled
                                                    value="5.8"
                                                />%
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mortgage__col-right">
                                    <div class="mc-item mc-item-first">
                                        <h2 class="text-[36px] mb-2">
                                            Калькулятор ипотеки
                                        </h2>
                                        <p class="mb-5">Сумма кредита</p>
                                        <p class="mc-item-number mb-5">
                                            <span
                                                id="credit-summ"
                                                name="costCredit"
                                                >2 500 000,00</span
                                            >
                                            ₽
                                        </p>
                                        <hr />
                                    </div>
                                    <div class="mc-item mb-5">
                                        <p class="mb-5">Ежемесячный платеж</p>
                                        <p class="mc-item-number mb-5">
                                            <span id="month-pay" name="monthPay"
                                                >18 639,33</span
                                            >
                                            ₽
                                        </p>
                                        <hr />
                                    </div>
                                    <div class="mc-item-bottom">
                                        <p>
                                            Получите одобрение ипотеки<br />с
                                            этими условиями
                                        </p>
                                        <button
                                            @click="showModal = true"
                                            type="submit"
                                            id="calc-submit"
                                            data-izimodal-open="#callModalIpoteka"
                                            style="cursor: pointer"
                                            class="btn rounded w-full mt-7 flex items-center justify-center transition duration-300 border hover:bg-[#178e43] bg-[#16A34A] !px-5 !py-2.5 text-center text-base font-medium text-white focus:outline-none focus:ring-4 focus:ring-[#d3ffc4]"
                                        >
                                            Подать заявку
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section>
                <div class="container mx-auto">
                    <h2
                        class="text-[#16A34A] text-[36px] md:text-[56px] text-center md:text-right relative"
                    >
                        ПСК СибКомфорт
                    </h2>
                    <div class="pb-16">
                        <p
                            class="text-[25px] md:text-[36px] text-white text-center mb-16"
                        >
                            ПСК СибКомфорт - ваш надежный сертифицированный
                            партнер от ведущих банков ДОМ.РФ и Почта Банк,
                            гарантирующий комфорт и уверенность в решении
                        </p>
                        <div class="grid md:grid-cols-4 gap-8 relative z-20">
                            <div>
                                <div
                                    class="p-4 mb-3 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a
                                        href="https://www.rshb.ru/"
                                        target="_blank"
                                        ><img
                                            src="/image/rosselhoz.webp"
                                            class="h-10"
                                            alt="rosselhoz logo"
                                    /></a>
                                </div>
                                <div
                                    class="p-4 mb-3 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a
                                        href="https://www.nskbl.ru/private/"
                                        target="_blank"
                                        ><img
                                            src="/image/bankLev.svg"
                                            class="h-10"
                                            alt="Банк Левобережный логотип"
                                    /></a>
                                </div>
                                <div
                                    class="p-4 mb-3 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a
                                        href="https://www.pochtabank.ru/"
                                        target="_blank"
                                        ><img
                                            src="/image/logo-pochta-bank.webp"
                                            class="h-10"
                                            alt="Почта Банк logo"
                                    /></a>
                                </div>
                                <div
                                    class="p-4 mb-3 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a
                                        href="https://domrfbank.ru/"
                                        target="_blank"
                                        ><img
                                            src="/image/domrf.webp"
                                            class="h-10"
                                            alt="domrf logo"
                                    /></a>
                                </div>
                                <div
                                    class="p-4 mb-3 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a
                                        href="https://www.rosbank.ru/"
                                        target="_blank"
                                        ><img
                                            src="/image/rosbank.webp"
                                            class="h-10"
                                            alt="rosbank logo"
                                    /></a>
                                </div>
                                <div
                                    class="p-4 bg-white cursor-pointer rounded transition duration-300"
                                >
                                    <a
                                        href="http://www.sberbank.ru/"
                                        target="_blank"
                                        ><img
                                            src="/image/sber.webp"
                                            class="h-10"
                                            alt="sber logo"
                                    /></a>
                                </div>
                            </div>
                            <div>
                                <a @click="showMultiple(6)"
                                    ><img
                                        src="/image/certificatePochta.webp"
                                        class="w-full h-full transition duration-300 rounded"
                                        alt="certificatePochta"
                                /></a>
                            </div>
                            <div>
                                <a @click="showMultiple(7)"
                                    ><img
                                        src="/image/certificateDomRF.webp"
                                        class="w-full h-full transition duration-300 rounded"
                                        alt="certificateDomRF"
                                /></a>
                            </div>
                            <div>
                                <a @click="showMultiple(8)"
                                    ><img
                                        src="/image/certificateRos.webp"
                                        class="w-full h-full transition duration-300 rounded"
                                        alt="certificateRos"
                                /></a>
                            </div>
                        </div>

                        <vue-easy-lightbox
                            :visible="visibleRef"
                            :imgs="imgsRef"
                            :index="indexRef"
                            @hide="onHide"
                        ></vue-easy-lightbox>
                    </div>
                </div>
            </section>
            <!-- <section class="relative z-10 px-4 pb-4">
                <div class="container mx-auto">
                    <h2 class="text-[#16A34A] text-[25px] md:text-[45px] mb-6">
                    Посмотрите на малую часть наших проектов
                    </h2>
                    <div class="grid md:grid-cols-3 gap-4">
                        <ProjectCard
                            v-for="project in projects"
                            :key="project.id"
                            :project="project"
                        />
                    </div>
                </div>
            </section> -->
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
                        <CatalogForm type="brus" />

                        <div
                            class="col-span-12 md:col-span-6 lg:col-span-7 order-1 md:order-none"
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
    <Head title="Страница Ипотеки" />
    <template v-if="showModal">
        <div
            class="flex justify-center items-center fixed left-0 right-0 top-0 bottom-0 bg-gray-300 bg-opacity-75 z-[1000]"
        >
            <div class="p-8 rounded bg-[#434343] text-white relative mx-4">
                <button
                    type="button"
                    @click="showModal = false"
                    class="w-7 h-7 rounded-full bg-[#434343] border-2 border-white absolute -right-3 -top-2 text-lg text-center leading-6 cursor-pointer"
                >
                    x
                </button>
                <h2 class="text-xl mb-4 md:text-2xl text text-center">
                    Калькулятор ипотеки
                </h2>
                <p class="text-center text-sm mb-5">
                    Наш менеджер перезвонит вам в течении 30 минут
                </p>
                <form @submit.prevent="submit" class="group">
                    <label for="#" class="text-sm"
                        >Введите имя:<br />
                        <input
                            type="text"
                            class="p-2 my-2 bg-gray-200 text-black w-full rounded border-2 outline-none hover:border-[#16A34A] focus:border-[16A34A]"
                            placeholder="Михаил"
                            name="name"
                            v-model="item.name"
                        />
                    </label>
                    <label for="#" class="text-sm"
                        >Номер телефон<br />
                        <input
                            v-maska
                            data-maska="+7 (###)-###-##-##"
                            type="text"
                            class="p-2 my-2 bg-gray-200 text-black w-full rounded border-2 outline-none hover:border-[#16A34A] focus:border-[16A34A]"
                            placeholder="+7 (xxx)-xxx-xx-xx"
                            required
                            name="phone"
                            v-model="item.phone"
                        />
                    </label>
                    <button
                        @click="showModal = true"
                        class="rounded w-full mt-6 flex items-center justify-center bg-[#16A34A] !px-5 !py-2.5 text-center text-base font-medium text-white hover:bg-[#178e43] focus:outline-none focus:ring-4 focus:ring-[#d3ffc4]"
                    >
                        Позвоните мне
                    </button>
                    <p
                        class="text-center text-sm max-w-xs mx-auto mt-4 text-gray-300"
                    >
                        Нажимая на кнопку, вы принимаете условия
                        <a href="#">передачи информации</a>
                    </p>
                </form>
                <slot />
                <button class="popup-close"></button>
            </div>
        </div>
    </template>
</template>

<script setup>
import { vMaska } from "maska";
</script>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import ProjectCard from "@/Components/ProjectCard.vue";
import { Head } from "@inertiajs/vue3";
import "@/sweetalert2/dist/sweetalert2.min.css";
import Swal from "@/sweetalert2/src/sweetalert2";
import CatalogForm from "@/Components/CatalogForm.vue";

import VueEasyLightbox from "vue-easy-lightbox";
import "vue-easy-lightbox/dist/external-css/vue-easy-lightbox.css";

export default {
    components: {
        AppLayout,
        Head,
        ProjectCard,
        VueEasyLightbox,
        CatalogForm,
    },
    props: {
        projects: {
            type: Array,
            default: [],
        },
    },
    data() {
        return {
            visibleRef: false,
            indexRef: 0,
            imgsRef: [
                "/image/rosselhoz.webp",
                "/image/bankLev.svg",
                "/image/logo-pochta-bank.webp",
                "/image/domrf.webp",
                "/image/rosbank.webp",
                "/image/sber.webp",
                "/image/certificatePochta.webp",
                "/image/certificateDomRF.webp",
                "/image/certificateRos.webp",
            ],
            showModal: false,
            item: {
                costEstate: "",
                firstPay: "",
                creditTerm: "",
                typeProgram: "",
                costCredit: "",
                monthPay: "",
                name: "",
                phone: "",
            },
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
        submit() {
            axios
                .get(
                    "https://test-widget-9417.website/prod_projects/sib_project_siteleadmaker/create_lead.php",
                    { params: this.item }
                )
                .then((res) => {
                    this.showModal = false;
                    Swal.fire({
                        title: `Ваш запрос принят в работу`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "success",
                    });
                })
                .catch((err) => {
                    this.showModal = false;
                    Swal.fire({
                        title: `Ошибка при отправки запроса`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "error",
                    });
                });
        },
        save() {
            var costEstateName = document.querySelector(
                'input[name="costEstate"]'
            );
            var firstPayName = document.querySelector('input[name="firstPay"]');
            var creditTermName = document.querySelector(
                'input[name="creditTerm"]'
            );
            var selectElement = document.querySelector(
                'select[name="typeProgram"]'
            );
            var selectedOption =
                selectElement.options[selectElement.selectedIndex];

            // Сумма кредита

            // Ежемесячный платеж
            var costCreditName = document.querySelector(
                'span[name="costCredit"]'
            );

            // Значения
            var costEstateValue = costEstateName.value;
            var firstPayValue = firstPayName.value;
            var creditTermValue = creditTermName.value;
            var selectedOptionValue = selectedOption.value;

            // Добавлении в data item
            this.item.costEstate = costEstateValue;
            this.item.firstPay = firstPayValue;
            this.item.creditTerm = creditTermValue;
            this.item.typeProgram = selectedOptionValue;

            console.log("costEstateValue" + costEstateValue);
            console.log("firstPayValue" + firstPayValue);
            console.log("creditTerm" + creditTerm);
            console.log("typeProgram" + typeProgram);
            // Выводит значение поля input
        },
        onShow() {
            this.visibleRef = true;
        },
        showMultiple(index) {
            this.indexRef = index;
            this.onShow();
        },
        onHide() {
            this.visibleRef = false;
        },
    },
    mounted() {
        function btnClicked() {
            document.getElementById("ipoteka-modal-form-span").innerHTML =
                "Льготная ипотека для новостроек от 6,5%";
            document.getElementById("mortgage-program").value =
                "Льготная ипотека для новостроек от 6,5%";
        }
        function btn2Clicked() {
            document.getElementById("ipoteka-modal-form-span").innerHTML =
                "Семейная ипотека от 4,9%";
            document.getElementById("mortgage-program").value =
                "Семейная ипотека от 4,9%";
        }
        function btn3Clicked() {
            document.getElementById("ipoteka-modal-form-span").innerHTML =
                "Сельская ипотека от 2,7%";
            document.getElementById("mortgage-program").value =
                "Сельская ипотека от 2,7%";
        }
        function btn4Clicked() {
            document.getElementById("ipoteka-modal-form-span").innerHTML =
                "Покупка квартиры в новосторойке от 3,7%";
            document.getElementById("mortgage-program").value =
                "Покупка квартиры в новосторойке от 3,7%";
        }
        function btn5Clicked() {
            document.getElementById("ipoteka-modal-form-span").innerHTML =
                "Покупка вторичного жилья от 8,9%";
            document.getElementById("mortgage-program").value =
                "Покупка вторичного жилья от 8,9%";
        }
        //Для калькулятора

        //округление
        var rounded = function (number) {
            return +number.toFixed(2);
        };

        //вывод в денежный формат
        var moneyFormat = function (n) {
            return parseFloat(n)
                .toFixed(2)
                .replace(/(\d)(?=(\d{3})+\.)/g, "$1 ")
                .replace(".", ",");
        };

        //Переменные вывода значений в правом столбце
        var creditSumm = document.getElementById("credit-summ");
        var credit;

        var monthPay = document.getElementById("month-pay");
        var monthly;

        var overPay;
        var overPayWithUs;
        var yourSafe = document.getElementById("your-safe");
        var monthPayWithUs = document.getElementById("month-pay-with-us");

        //Переменные для расчета ежемесячного платежа
        var monthSumm;
        var monthPercent;
        var ann;
        var monthPaySumm;

        //range стоимости объекта
        var slider = document.getElementById("object-price");
        var hidden = document.getElementById("object-price-hidden");
        var output = document.getElementById("object-price-output");

        output.value = moneyFormat(slider.value);

        slider.oninput = function () {
            hidden.value = this.value;
            output.value = moneyFormat(hidden.value);
            //Подсчет суммы кредита
            creditSumm.innerHTML = moneyFormat(
                this.value - firstPaymentSlider.value
            );
            credit = this.value - firstPaymentSlider.value;
            if (credit <= 0) {
                creditSumm.innerHTML = "0,00";
            }

            //Подсчет ежемесячного платежа
            monthSumm = years.value * 12;
            monthPercent =
                percentSelect.options[percentSelect.selectedIndex].value /
                12 /
                100;
            ann =
                (monthPercent * (1 + monthPercent) ** monthSumm) /
                ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann;

            monthPay.innerHTML = moneyFormat(monthPaySumm);
            monthly = rounded(monthPaySumm);
            if (monthPaySumm <= 0) {
                monthPay.innerHTML = "0,00";
            }

            //Подсчет переплаты по кредиту
            overPay = rounded(monthly * monthSumm - credit);

            //Подсчет переплаты по кредиту с нами
            var monthPercentWithUs =
                (percentSelect.options[percentSelect.selectedIndex].value -
                    0.7) /
                12 /
                100;
            var annWithUs =
                (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
                ((1 + monthPercentWithUs) ** monthSumm - 1);
            var monthPaySummWithUs = credit * annWithUs;
            overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);

            //Подсчет сэкономленной суммы
            //   monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
            //   yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
            //   if(monthPaySummWithUs <= 0) {
            //       monthPayWithUs.innerHTML = "0,00";
            //   }

            //   if(overPay - overPayWithUs <= 0) {
            //       yourSafe.innerHTML = "0,00";
            //   }
        };

        output.oninput = function () {
            hidden.value = this.value.replace(/ /g, "").replace(",00", "");
            slider.value = hidden.value;

            //Подсчет суммы кредита
            creditSumm.innerHTML = moneyFormat(
                hidden.value - firstPaymentSlider.value
            );
            credit = hidden.value - firstPaymentSlider.value;
            if (credit <= 0) {
                creditSumm.innerHTML = "0,00";
            }
            //Подсчет ежемесячного платежа
            monthSumm = years.value * 12;
            monthPercent =
                percentSelect.options[percentSelect.selectedIndex].value /
                12 /
                100;
            ann =
                (monthPercent * (1 + monthPercent) ** monthSumm) /
                ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann;

            monthPay.innerHTML = moneyFormat(monthPaySumm);
            monthly = rounded(monthPaySumm);
            if (monthPaySumm <= 0) {
                monthPay.innerHTML = "0,00";
            }
            //Подсчет переплаты по кредиту
            overPay = rounded(monthly * monthSumm - credit);

            //Подсчет переплаты по кредиту с нами
            var monthPercentWithUs =
                (percentSelect.options[percentSelect.selectedIndex].value -
                    0.7) /
                12 /
                100;
            var annWithUs =
                (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
                ((1 + monthPercentWithUs) ** monthSumm - 1);
            var monthPaySummWithUs = credit * annWithUs;
            overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);

            //Подсчет сэкономленной суммы
            //   monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
            //   yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
            //   if(monthPaySummWithUs <= 0) {
            //       monthPayWithUs.innerHTML = "0,00";
            //   }

            //   if(overPay - overPayWithUs <= 0) {
            //       yourSafe.innerHTML = "0,00";
            //   }
        };

        //range первоначального взноса
        var firstPaymentSlider = document.getElementById("first-payment");
        var firstPaymentOutput = document.getElementById(
            "first-payment-output"
        );
        var firstHidden = document.getElementById("first-payment-hidden");
        firstPaymentOutput.value = moneyFormat(firstPaymentSlider.value);

        firstPaymentSlider.oninput = function () {
            firstHidden.value = this.value;
            firstPaymentOutput.value = moneyFormat(firstHidden.value);

            //Подсчет суммы кредита
            creditSumm.innerHTML = moneyFormat(slider.value - this.value);
            credit = slider.value - this.value;
            if (credit <= 0) {
                creditSumm.innerHTML = "0,00";
            }

            //Подсчет ежемесячного платежа
            monthSumm = years.value * 12;
            monthPercent =
                percentSelect.options[percentSelect.selectedIndex].value /
                12 /
                100;
            ann =
                (monthPercent * (1 + monthPercent) ** monthSumm) /
                ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann;

            monthPay.innerHTML = moneyFormat(monthPaySumm);
            monthly = rounded(monthPaySumm);
            if (monthPaySumm <= 0) {
                monthPay.innerHTML = "0,00";
            }

            //Подсчет переплаты по кредиту
            overPay = rounded(monthly * monthSumm - credit);

            //Подсчет переплаты по кредиту с нами
            var monthPercentWithUs =
                (percentSelect.options[percentSelect.selectedIndex].value -
                    0.7) /
                12 /
                100;
            var annWithUs =
                (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
                ((1 + monthPercentWithUs) ** monthSumm - 1);
            var monthPaySummWithUs = credit * annWithUs;
            overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);

            //Подсчет сэкономленной суммы
            //   monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
            //   yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
            //   if(monthPaySummWithUs <= 0) {
            //       monthPayWithUs.innerHTML = "0,00";
            //   }

            //   if(overPay - overPayWithUs <= 0) {
            //       yourSafe.innerHTML = "0,00";
            //   }
        };

        firstPaymentOutput.oninput = function () {
            firstHidden.value = this.value.replace(/ /g, "").replace(",00", "");
            firstPaymentSlider.value = firstHidden.value;

            //Подсчет суммы кредита
            creditSumm.innerHTML = moneyFormat(
                slider.value - firstHidden.value
            );
            credit = slider.value - firstHidden.value;
            if (credit <= 0) {
                creditSumm.innerHTML = "0,00";
            }

            //Подсчет ежемесячного платежа
            monthSumm = years.value * 12;
            monthPercent =
                percentSelect.options[percentSelect.selectedIndex].value /
                12 /
                100;
            ann =
                (monthPercent * (1 + monthPercent) ** monthSumm) /
                ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann;

            monthPay.innerHTML = moneyFormat(monthPaySumm);
            monthly = rounded(monthPaySumm);
            if (monthPaySumm <= 0) {
                monthPay.innerHTML = "0,00";
            }

            //Подсчет переплаты по кредиту
            overPay = rounded(monthly * monthSumm - credit);

            //Подсчет переплаты по кредиту с нами
            var monthPercentWithUs =
                (percentSelect.options[percentSelect.selectedIndex].value -
                    0.7) /
                12 /
                100;
            var annWithUs =
                (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
                ((1 + monthPercentWithUs) ** monthSumm - 1);
            var monthPaySummWithUs = credit * annWithUs;
            overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);

            //Подсчет сэкономленной суммы
            //   monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
            //   yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
            //   if(monthPaySummWithUs <= 0) {
            //       monthPayWithUs.innerHTML = "0,00";
            //   }

            //   if(overPay - overPayWithUs <= 0) {
            //       yourSafe.innerHTML = "0,00";
            //   }
        };

        //range срока кредита
        var years = document.getElementById("years");
        var yearsOutput = document.getElementById("years-output");
        yearsOutput.value = years.value;

        years.oninput = function () {
            yearsOutput.value = this.value;

            credit = slider.value - firstPaymentSlider.value;
            //Подсчет ежемесячного платежа
            monthSumm = years.value * 12;
            monthPercent =
                percentSelect.options[percentSelect.selectedIndex].value /
                12 /
                100;
            ann =
                (monthPercent * (1 + monthPercent) ** monthSumm) /
                ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann;

            monthPay.innerHTML = moneyFormat(monthPaySumm);
            monthly = rounded(monthPaySumm);
            if (monthPaySumm <= 0) {
                monthPay.innerHTML = "0,00";
            }

            //Подсчет переплаты по кредиту
            overPay = rounded(monthly * monthSumm - credit);

            //Подсчет переплаты по кредиту с нами
            var monthPercentWithUs =
                (percentSelect.options[percentSelect.selectedIndex].value -
                    0.7) /
                12 /
                100;
            var annWithUs =
                (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
                ((1 + monthPercentWithUs) * monthSumm - 1);
            var monthPaySummWithUs = credit * annWithUs;
            overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);

            //Подсчет сэкономленной суммы
            //   monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
            //   yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
            //   if(monthPaySummWithUs <= 0) {
            //           monthPayWithUs.innerHTML = "0,00";
            //       }

            //       if(overPay - overPayWithUs <= 0) {
            //           yourSafe.innerHTML = "0,00";
            //       }
        };

        yearsOutput.oninput = function () {
            years.value = this.value;
            credit = slider.value - firstPaymentSlider.value;
            //Подсчет ежемесячного платежа
            monthSumm = years.value * 12;
            monthPercent =
                percentSelect.options[percentSelect.selectedIndex].value /
                12 /
                100;
            ann =
                (monthPercent * (1 + monthPercent) ** monthSumm) /
                ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann;

            monthPay.innerHTML = moneyFormat(monthPaySumm);
            monthly = rounded(monthPaySumm);
            if (monthPaySumm <= 0) {
                monthPay.innerHTML = "0,00";
            }

            //Подсчет переплаты по кредиту
            overPay = rounded(monthly * monthSumm - credit);

            //Подсчет переплаты по кредиту с нами
            var monthPercentWithUs =
                (percentSelect.options[percentSelect.selectedIndex].value -
                    0.7) /
                12 /
                100;
            var annWithUs =
                (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
                ((1 + monthPercentWithUs) ** monthSumm - 1);
            var monthPaySummWithUs = credit * annWithUs;
            overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);

            //Подсчет сэкономленной суммы
            monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
            yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
            if (monthPaySummWithUs <= 0) {
                monthPayWithUs.innerHTML = "0,00";
            }

            if (overPay - overPayWithUs <= 0) {
                yourSafe.innerHTML = "0,00";
            }
        };
        //Изменение процентной ставки

        var percentSelect = document.getElementById("bank-select");
        var bankPercent = document.getElementById("bank-percent-span");

        percentSelect.onchange = function () {
            bankPercent.value = this.options[this.selectedIndex].value;

            credit = slider.value - firstPaymentSlider.value;
            //Подсчет ежемесячного платежа
            monthSumm = years.value * 12;
            monthPercent =
                percentSelect.options[percentSelect.selectedIndex].value /
                12 /
                100;
            ann =
                (monthPercent * (1 + monthPercent) ** monthSumm) /
                ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann;

            monthPay.innerHTML = moneyFormat(monthPaySumm);
            monthly = rounded(monthPaySumm);
            if (monthPaySumm <= 0) {
                monthPay.innerHTML = "0,00";
            }

            //Подсчет переплаты по кредиту
            overPay = rounded(monthly * monthSumm - credit);

            //Подсчет переплаты по кредиту с нами
            var monthPercentWithUs =
                (percentSelect.options[percentSelect.selectedIndex].value -
                    0.7) /
                12 /
                100;
            var annWithUs =
                (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
                ((1 + monthPercentWithUs) ** monthSumm - 1);
            var monthPaySummWithUs = credit * annWithUs;
            overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);

            //Подсчет сэкономленной суммы
            //   monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
            //   yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
            //   if(monthPaySummWithUs <= 0) {
            //       monthPayWithUs.innerHTML = "0,00";
            //   }

            //   if(overPay - overPayWithUs <= 0) {
            //       yourSafe.innerHTML = "0,00";
            //   }
        };

        bankPercent.oninput = function () {
            this.value = this.value.replace(",", ".");
            credit = slider.value - firstPaymentSlider.value;
            //Подсчет ежемесячного платежа
            monthSumm = years.value * 12;
            monthPercent = this.value / 12 / 100;
            ann =
                (monthPercent * (1 + monthPercent) ** monthSumm) /
                ((1 + monthPercent) ** monthSumm - 1);
            monthPaySumm = credit * ann;

            monthPay.innerHTML = moneyFormat(monthPaySumm);
            monthly = rounded(monthPaySumm);
            if (monthPaySumm <= 0) {
                monthPay.innerHTML = "0,00";
            }

            //Подсчет переплаты по кредиту
            overPay = rounded(monthly * monthSumm - credit);

            //Подсчет переплаты по кредиту с нами
            var monthPercentWithUs = (this.value - 0.7) / 12 / 100;
            var annWithUs =
                (monthPercentWithUs * (1 + monthPercentWithUs) ** monthSumm) /
                ((1 + monthPercentWithUs) ** monthSumm - 1);
            var monthPaySummWithUs = credit * annWithUs;
            overPayWithUs = rounded(monthPaySummWithUs * monthSumm - credit);

            //Подсчет сэкономленной суммы
            monthPayWithUs.innerHTML = moneyFormat(monthPaySummWithUs);
            yourSafe.innerHTML = moneyFormat(overPay - overPayWithUs);
            if (monthPaySummWithUs <= 0) {
                monthPayWithUs.innerHTML = "0,00";
            }

            if (overPay - overPayWithUs <= 0) {
                yourSafe.innerHTML = "0,00";
            }
        };
    },
};
</script>
<style>
/* Калькулятор ипотеки */
section#mortgage-calculator {
    background: #f7f7f7;
    margin: 50px 0;
    padding: 50px 0;
}

.mortgage-calculator #credit-purpose {
    width: 100%;
    background: #fff;
    border: 1px solid #ccc;
    height: 45px;
    margin-bottom: 10px;
}

.mortgage-calculator label {
    font-size: 16px;
    color: #333;
    margin-bottom: 8px;
    display: block;
}

.mortgage-calculator .range-output span {
    color: #333;
}

.mortgage-calculator datalist {
    display: flex;
    justify-content: space-between;
    padding-top: 7px;
}

.mortgage-calculator datalist option {
    display: inline;
    color: #ccc;
    font-weight: 300;
    font-size: 12px;
}

.money,
.text-input {
    width: 100%;
    border: none;
}

.text-input-percent {
    width: 60%;
    border: none;
}

.mortgage-calculator input[type="range"] {
    width: 100%;
    height: 8px;
    background: #16a34a;
    outline: none;
    -webkit-transition: 0.2s;
    transition: opacity 0.2s;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.mortgage-calculator input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 12px;
    height: 17px;
    cursor: pointer;
}

.mortgage-calculator input[type="range"]::-moz-range-thumb {
    width: 25px;
    height: 25px;
    cursor: pointer;
}

.mortgage-calculator .range-output {
    border: 1px solid #bcbcbc;
    /* height: 56px; */
    overflow: hidden;
}

.mortgage-calculator .range-output input {
    height: 100%;
    padding: 12px;
    background: #e5e7eb;
}

.mortgage-calculator #percent {
    display: block;
}

.mortgage-calculator #percent #bank-select {
    width: 80%;
    float: left;
    background: #fff;
    border: 1px solid #ccc;
    height: 42px;
    padding: 0 10px;
}

.mortgage-calculator #percent .bank-percent {
    width: 15%;
    float: left;
    background: #fff;
    border: 1px solid #ccc;
    padding: 9px;
    margin-left: 5%;
    text-align: center;
    color: #16a34a;
    font-size: 16px;
    display: flex;
    align-items: center;
    height: 42px;
    justify-content: space-between;
}

.mortgage-calculator .mc-item-first {
    margin-top: 27px;
}

.mortgage-calculator .mc-item p {
    color: #333;
}

.mortgage-calculator .mc-item p.mc-item-number {
    color: #16a34a;
    font-size: 22px;
}

.mortgage-calculator .mc-item-bottom {
    margin-top: 40px;
}

.mortgage-calculator .mc-item-bottom p {
    font-size: 18px;
    color: #333;
    font-weight: 500;
}

.mortgage__columns {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 30px;
    border-radius: 4px;
}

@media (max-width: 1200px) {
    .mortgage__columns {
        grid-template-columns: 1fr;
    }
}
</style>
