<script type="text/javascript">
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import axios from "axios";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
import { router } from "@inertiajs/vue3";
import Swal from "@/sweetalert2/src/sweetalert2";

export default {
    components: {
        DashboardLayout,
        vSelect,
    },
    props: {
        contact: { type: Object, default: {} },
    },
    data() {
        return {
            item: {
                phone: "",
                email: "",
                adress: "",
            },
            loading: [false, false, false, false, false],
        };
    },
    mounted() {
        this.item = this.contact.data;
    },

    methods: {
        submit() {
            axios
                .put(route("contacts.update", 1), this.item)
                .then((res) => {
                    Swal.fire({
                        title: `Контакты успешно обновлени`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "success",
                        toast: true,
                        position: "top-end",
                    });
                    router.visit(route("dashboard"), { replace: true });
                })
                .catch((err) => {
                    console.log(err.response.data);
                });
        },

        changeFile(event, item, index) {
            if (event.target.files.length > 0) {
                const fd = new FormData();
                fd.append("pdf_file", event.target.files[0]);

                this.loading[index] = true;

                axios
                    .post(route("upload.file"), fd)
                    .then((res) => {
                        item["file"] = res.data.file;
                    })
                    .catch((err) => {})
                    .finally(() => {
                        this.loading[index] = false;
                    });
            }
        },
    },
};
</script>

<template>
    <DashboardLayout>
        <form class="gap-6" @submit.prevent="submit()">
            <div class="flex flex-col">
                <h2 class="font-bold text-xl my-8">
                    Дополнителная информация<span class="text-xs text-gray-500">
                        - ( директор пск сибкомфорт )</span
                    >
                </h2>

                <div
                    v-for="(building, index) in item.building"
                    :key="index"
                    class="pb-3 pt-2 border-b border-gray-300"
                >
                    <div class="sm:grid grid-cols-3 gap-6">
                        <div class="">
                            <label class="block" for="">Число:</label>
                            <input
                                type="text"
                                class="form-controls"
                                required
                                v-model="building.count"
                            />
                        </div>
                        <div class="">
                            <label class="block" for=""
                                >Заголовок
                                <span class="text-xs text-gray-500"
                                    >( Построиных домов )</span
                                ></label
                            >
                            <input
                                type="text"
                                class="form-controls"
                                required
                                v-model="building.title"
                            />
                        </div>
                        <div class="">
                            <label class="block" for=""
                                >Описание
                                <span class="text-xs text-gray-500"
                                    >( Построиных домов )</span
                                ></label
                            >
                            <textarea
                                type="text"
                                class="form-controls"
                                v-model="building.description"
                            ></textarea>
                        </div>
                    </div>
                </div>

                <div>
                    <div
                        v-for="(file, index) in item['files']"
                        :key="index"
                        class="col-span-full pb-3 pt-2"
                        :class="{
                            'border-b': index !== item['files'].length - 1,
                        }"
                    >
                        <div class="block leading-6 text-gray-900 font-medium">
                            {{ file["label"] }}
                        </div>
                        <div class="mt-2 flex items-center gap-x-3">
                            <svg
                                height="28"
                                width="28"
                                version="1.1"
                                id="_x32_"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 512 512"
                                xml:space="preserve"
                            >
                                <g>
                                    <path
                                        class="st0"
                                        d="M378.413,0H208.297h-13.182L185.8,9.314L57.02,138.102l-9.314,9.314v13.176v265.514
		c0,47.36,38.528,85.895,85.896,85.895h244.811c47.353,0,85.881-38.535,85.881-85.895V85.896C464.294,38.528,425.766,0,378.413,0z
		 M432.497,426.105c0,29.877-24.214,54.091-54.084,54.091H133.602c-29.884,0-54.098-24.214-54.098-54.091V160.591h83.716
		c24.885,0,45.077-20.178,45.077-45.07V31.804h170.116c29.87,0,54.084,24.214,54.084,54.092V426.105z"
                                    />
                                    <path
                                        class="st0"
                                        d="M171.947,252.785h-28.529c-5.432,0-8.686,3.533-8.686,8.825v73.754c0,6.388,4.204,10.599,10.041,10.599
		c5.711,0,9.914-4.21,9.914-10.599v-22.406c0-0.545,0.279-0.817,0.824-0.817h16.436c20.095,0,32.188-12.226,32.188-29.612
		C204.136,264.871,192.182,252.785,171.947,252.785z M170.719,294.888h-15.208c-0.545,0-0.824-0.272-0.824-0.81v-23.23
		c0-0.545,0.279-0.816,0.824-0.816h15.208c8.42,0,13.447,5.027,13.447,12.498C184.167,290,179.139,294.888,170.719,294.888z"
                                    />
                                    <path
                                        class="st0"
                                        d="M250.191,252.785h-21.868c-5.432,0-8.686,3.533-8.686,8.825v74.843c0,5.3,3.253,8.693,8.686,8.693h21.868
		c19.69,0,31.923-6.249,36.81-21.324c1.76-5.3,2.723-11.681,2.723-24.857c0-13.175-0.964-19.557-2.723-24.856
		C282.113,259.034,269.881,252.785,250.191,252.785z M267.856,316.896c-2.318,7.331-8.965,10.459-18.21,10.459h-9.23
		c-0.545,0-0.824-0.272-0.824-0.816v-55.146c0-0.545,0.279-0.817,0.824-0.817h9.23c9.245,0,15.892,3.128,18.21,10.46
		c0.95,3.128,1.62,8.56,1.62,17.93C269.476,308.336,268.805,313.768,267.856,316.896z"
                                    />
                                    <path
                                        class="st0"
                                        d="M361.167,252.785h-44.812c-5.432,0-8.7,3.533-8.7,8.825v73.754c0,6.388,4.218,10.599,10.055,10.599
		c5.697,0,9.914-4.21,9.914-10.599v-26.351c0-0.538,0.265-0.81,0.81-0.81h26.086c5.837,0,9.23-3.532,9.23-8.56
		c0-5.028-3.393-8.553-9.23-8.553h-26.086c-0.545,0-0.81-0.272-0.81-0.817v-19.425c0-0.545,0.265-0.816,0.81-0.816h32.733
		c5.572,0,9.245-3.666,9.245-8.553C370.411,256.45,366.738,252.785,361.167,252.785z"
                                    />
                                </g>
                            </svg>
                            <label
                                :for="`file_${index}`"
                                type="button"
                                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                            >
                                {{
                                    loading[index]
                                        ? "Загрузка на сервер"
                                        : "Сменить"
                                }}
                            </label>
                            <input
                                type="file"
                                class="hidden"
                                :id="`file_${index}`"
                                accept="application/pdf"
                                @change="changeFile($event, file, index)"
                            />
                            <a
                                :href="file['file']"
                                target="_blank"
                                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                            >
                                Открыть
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2 border-t-2 pt-3 mt-6">
                Последнее изменение: {{ contact.admin?.name }}
                <div class="flex items-center justify-end gap-x-3">
                    <button
                        class="dash-btn disabled:bg-gray-400"
                        :disabled="loading.filter((o) => o).length > 0"
                    >
                        Сохранить
                    </button>
                </div>
            </div>
        </form>
    </DashboardLayout>
</template>
