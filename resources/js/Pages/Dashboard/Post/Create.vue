<script type="text/javascript">
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import axios from "axios";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";
import { router } from "@inertiajs/vue3";
import Swal from "@/sweetalert2/src/sweetalert2";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

export default {
    components: {
        DashboardLayout,
        vSelect,
    },
    props: {
        categories: { type: Object, default: {} },
    },
    data() {
        return {
            item: {
                category_id: "",
                image: "",
                title: "",
                body: "",
                status: "active",
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

            // years: [],
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
                .post(route("posts.store"), this.item)
                .then((res) => {
                    Swal.fire({
                        title: `Запись успешно создан`,
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        icon: "success",
                        toast: true,
                        position: "top-end",
                    });
                    router.visit(route("posts.index"), { replace: true });
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
            <h2 class="font-bold text-xl">Добавить запись</h2>
        </div>
        <form class="sm:grid sm:grid-cols-2 gap-6" @submit.prevent="submit()">
            <div class="">
                <label class="block" for="">Название :</label>
                <input
                    type="text"
                    class="form-controls"
                    required
                    v-model="item.title"
                />
            </div>
            <div class="">
                <label class="block" for="">Категория:</label>
                <v-select
                    :options="categories"
                    label="name"
                    :searchable="true"
                    :reduce="(option) => option.id"
                    :clearable="false"
                    v-model="item.category_id"
                >
                    <template #search="{ attributes, events }">
                        <input
                            class="vs__search"
                            :required="!item.category_id"
                            v-bind="attributes"
                            v-on="events"
                        />
                    </template>
                </v-select>
            </div>
            <div class="col-span-2 border-t-2 pt-3">
                <label class="block" for="">Описание:</label>
                <ckeditor
                    v-model="item.body"
                    :editor="editor"
                    :config="editorConfig"
                ></ckeditor>
                <!-- <textarea
                    type="number"
                    step="0.02"
                    class="form-controls"
                    required
                    v-model="item.width"
                /> -->
            </div>

            <div class="col-span-2 border-t-2 pt-3">
                <label class="block" for=""> Изображение: </label>
                <input
                    id="image"
                    @change="changeImage($event, 'image')"
                    type="file"
                    accept="image/*"
                    :required="item.image == ''"
                    class="w-[1px] h-[1px] opacity-0"
                />
                <label for="image" class="cursor-pointer">
                    <div v-if="item.image" class="relative group">
                        <img
                            class="object-cover h-[270px] rounded-lg border border-dashed border-gray-900/25 w-full"
                            :src="item.image"
                            alt=""
                        />
                        <div
                            class="group-hover:flex hidden absolute right-0 left-0 bottom-0 top-0 bg-black bg-opacity-50 z-20 items-center justify-center rounded-lg"
                        >
                            <span
                                class="inline-block border-2 rounded-lg px-4 py-3 font-bold text-sm text-white"
                                >Изменить</span
                            >
                        </div>
                    </div>
                    <div
                        v-else
                        class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10"
                    >
                        <div class="text-center">
                            <svg
                                class="mx-auto h-12 w-12 text-gray-300"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <div
                                class="mt-4 flex text-sm leading-6 text-indigo-600 tex"
                            >
                                <p class="pl-1">
                                    Upload a file. PNG, JPG, GIF up to 10MB
                                </p>
                            </div>
                        </div>
                    </div>
                </label>
            </div>

            <div class="lg:col-span-2 flex items-center gap-x-3">
                <input
                    id="is_show"
                    name="is_show"
                    type="checkbox"
                    @change="
                        item.status =
                            item.status == 'active' ? 'deactive' : 'active'
                    "
                    :checked="item.status == 'active'"
                    :value="item.status"
                    class="h-4 w-4 rounded border-white/10 bg-white/5 text-[#16A34A] focus:ring-[#16A34A] focus:ring-offset-gray-900 ring ring-[#16A34A]"
                />
                <label class="block" for="is_show"> Отображать?</label>
            </div>
            <div class="col-span-2 border-t-2 pt-3">
                <div class="flex items-center justify-end gap-x-3">
                    <Link
                        class="dash-btn !bg-gray-300 !text-gray-800"
                        :href="route('posts.index')"
                        >Назад</Link
                    >
                    <button class="dash-btn" :href="route('posts.index')">
                        Сохранить
                    </button>
                </div>
            </div>
        </form>
    </DashboardLayout>
</template>
