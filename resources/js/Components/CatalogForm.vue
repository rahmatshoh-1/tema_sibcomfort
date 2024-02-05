<template>
    <div
        class="col-span-12 md:col-span-6 lg:col-span-4 order-2 md:order-none pb-16 mb:pb-0"
    >
        <form
            @submit.prevent="sendCatalog"
            class="bg-white rounded px-8 py-5 md:mt-32"
        >
            <h3
                class="w-full md:w-50 mb-4 md:mb-0 text-[18px] md:text-[25px] font-medium mx-auto text-center"
            >
                Оставьте контактные данные и мы пришлем вам каталог
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
                class="w-full mt-6 rounded flex items-center justify-center transition duration-300 bg-[#16A34A] !px-5 !py-2.5 text-center text-base font-medium text-white hover:bg-[#178e43] focus:outline-none focus:ring-4 focus:ring-[#d3ffc4]"
            >
                Получить каталог
            </button>
            <p class="text-center mx-auto mt-4 text-gray-500">
                Нажимая на кнопку, вы принимаете условия
                <a href="#">передачи информации</a>
            </p>
        </form>
    </div>
</template>

<script setup>
import { vMaska } from "maska";
</script>

<script>
import "@/sweetalert2/dist/sweetalert2.min.css";
import Swal from "@/sweetalert2/src/sweetalert2";

export default {
    props: {
        type: {
            type: String,
            default: "catalog",
        },
    },
    data() {
        return {
            bid: {
                name: "",
                phone: "",
                email: "",
                type: "",
            },
        };
    },
    mounted() {
        this.bid.type = this.type;
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
