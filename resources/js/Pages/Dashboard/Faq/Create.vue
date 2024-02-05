<script type="text/javascript">
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import axios from "axios";
import { router } from "@inertiajs/vue3";
import Swal from "@/sweetalert2/src/sweetalert2";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

export default {
    components: {
        DashboardLayout,
    },
    data() {
        return {
            item: {
                label: "",
                body: "",
                page: "",
            },
            editor: ClassicEditor,
            editorConfig: {
                ckfinder: {
                    uploadUrl: `/dashboard/editor/upload`,
                    name: "upload",
                    url: "url",
                },
                mediaEmbed: {
                    previewsInData: true,
                },
            },
            sliderPages: [
                {
                    label: "Каркасные дома",
                    value: "frame.house",
                },
                {
                    label: "Погонажные изделия",
                    value: "molded.house",
                },
                {
                    label: "Брус",
                    value: "Brus",
                },
                {
                    label: "Модульные дома",
                    value: "module",
                },
                {
                    label: "Ручная рубка",
                    value: "manual.cutting",
                },
                {
                    label: "Пиломатериал",
                    value: "lumber",
                },
            ],
        };
    },
    mounted() {},

    methods: {
        changeImage($event, type) {
            if ($event.target.files.length > 0) {
                var input = $event.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.item.image = e.target.result;
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        },

        submit() {
            axios
                .post(route("faqs.store"), this.item)
                .then((res) => {
                    Swal.fire({
                        title: `Чаво успешно создан`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "success",
                        toast: true,
                        position: "top-end",
                    });
                    router.visit(route("faqs.index"), { replace: true });
                })
                .catch((err) => {
                    console.log(err.response.data);
                });
        },
    },
};
</script>

<template>
    <DashboardLayout>
        <div class="mb-6">
            <h2 class="font-bold text-xl">Добавить ЧАВО</h2>
        </div>
        <form class="sm:grid sm:grid-cols-2 gap-6" @submit.prevent="submit()">
            <div class="">
                <label class="block" for=""
                    >Вопрос: <span class="text-xl text-red-500">*</span></label
                >
                <input
                    type="text"
                    class="form-controls"
                    required
                    v-model="item.label"
                />
            </div>
            <div class="">
                <label class="block" for=""
                    >Страница:
                    <span class="text-xl text-red-500">*</span></label
                >
                <select class="form-controls" required v-model="item.page">
                    <option
                        v-for="page in sliderPages"
                        :key="page.value"
                        :value="page.value"
                    >
                        {{ page.label }}
                    </option>
                </select>
            </div>
            <div class="col-span-2 border-t-2 pt-3">
                <label class="block" for=""
                    >Ответь: <span class="text-xl text-red-500">*</span></label
                >
                <ckeditor
                    v-model="item.body"
                    :editor="editor"
                    :config="editorConfig"
                ></ckeditor>
            </div>

            <div class="col-span-2 border-t-2 pt-3">
                <div class="flex items-center justify-end gap-x-3">
                    <Link
                        class="dash-btn !bg-gray-300 !text-gray-800"
                        :href="route('faqs.index')"
                        >Назад</Link
                    >
                    <button class="dash-btn" :href="route('faqs.index')">
                        Сохранить
                    </button>
                </div>
            </div>
        </form>
    </DashboardLayout>
</template>
