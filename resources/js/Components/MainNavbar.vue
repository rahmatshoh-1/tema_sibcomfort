<template>
    <div>
        <div class="container mx-auto">
            <nav
                class="lg:flex justify-between items-center relative text-white"
            >
                <Link href="/" class="logo ml-5">
                    <img
                        class="-mt-8 md:-mt-0 relative"
                        :src="
                            fixed
                                ? '/image/logo_dark.svg'
                                : '/image/logo_light.svg'
                        "
                        alt="logo сибкомфорт"
                    />
                </Link>
                <ul
                    class="nav-menu"
                    :class="{ '!block': showMenu, 'text-[#16A34A]': fixed }"
                    id="menu"
                >
                    <li class="mx-5">
                        <Link
                            href="/catalog"
                            class="hover:text-[#16A34A]"
                            :class="{
                                'font-bold underline':
                                    $page.url.startsWith('/catalog'),
                            }"
                            >Проекты</Link
                        >
                    </li>
                    <li class="mx-5 relative">
                        <button
                            type="button"
                            @click="showBuildding = !showBuildding"
                            @blur="hideBuildding"
                            class="group flex items-center hover:text-[#16A34A]"
                            :class="{ 'text-[#16A34A]': showBuildding }"
                        >
                            Строительство
                            <svg
                                class="w-5 transition-transform ease-in duration-100 group-hover:text-[#16A34A] mt-[1px]"
                                :class="
                                    showBuildding
                                        ? 'text-[#16A34A] rotate-90'
                                        : 'text-white -rotate-90'
                                "
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="h-0 w-0 border-x-8 border-x-transparent border-b-[10px] lg:absolute border-b-black mx-auto left-0 right-0"
                            :class="showBuildding ? 'block' : 'hidden'"
                        ></div>
                        <ul
                            class="lg:absolute lg:bg-black opacity-80 lg:w-40 -ml-6 pl-2 lg:py-3 top-8 rounded"
                            :class="showBuildding ? 'block' : 'hidden'"
                        >
                            <li class="mb-1 !py-0 flex items-start gap-x-1">
                                <span class="mt-1">-</span>
                                <Link
                                    class="block lg:py-1 py-2 px-2 hover:!text-[#16A34A] !text-white"
                                    href="/brus"
                                    >Брус</Link
                                >
                            </li>
                            <li class="mb-1 !py-0 flex items-start gap-x-1">
                                <span class="mt-1">-</span>
                                <Link
                                    class="block lg:py-1 py-2 px-2 hover:!text-[#16A34A] !text-white"
                                    href="/karkas"
                                    >Каркас</Link
                                >
                            </li>
                            <li class="mb-1 !py-0 flex items-start gap-x-1">
                                <span class="mt-1">-</span>
                                <Link
                                    class="block lg:py-1 py-2 px-2 hover:!text-[#16A34A] !text-white"
                                    href="/module"
                                >
                                    Модули</Link
                                >
                            </li>
                            <li class="h mb-1 !py-0 flex items-start gap-x-1">
                                <span class="mt-1">-</span>
                                <Link
                                    class="block lg:py-1 py-2 px-2 hover:!text-[#16A34A] !text-white"
                                    href="/ruchnaya-rubka"
                                    >Ручная рубка</Link
                                >
                            </li>
                        </ul>
                    </li>
                    <li class="mx-5 relative">
                        <button
                            type="button"
                            @click="showProd = !showProd"
                            @blur="hideProd"
                            class="group flex items-center hover:text-[#16A34A]"
                            :class="{ 'text-[#16A34A]': showProd }"
                        >
                            Производство
                            <svg
                                class="w-5 transition-transform ease-in duration-100 group-hover:text-[#16A34A] mt-[1px]"
                                :class="
                                    showProd
                                        ? 'text-[#16A34A] rotate-90'
                                        : 'text-white -rotate-90'
                                "
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="h-0 w-0 border-x-8 border-x-transparent border-b-[10px] lg:absolute border-b-black mx-auto left-0 right-0"
                            :class="showProd ? 'block' : 'hidden'"
                        ></div>
                        <ul
                            class="lg:absolute lg:bg-black opacity-80 lg:w-40 -ml-6 pl-2 lg:py-3 top-8 rounded"
                            :class="showProd ? 'block' : 'hidden'"
                        >
                            <li class="mb-1 !py-0 flex items-start gap-x-1">
                                <span class="mt-1">-</span>
                                <Link
                                    class="block lg:py-1 py-2 px-2 hover:!text-[#16A34A] !text-white"
                                    href="/pogonazh"
                                >
                                    Погонажные изделия
                                </Link>
                            </li>
                            <li class="mb-1 !py-0 flex items-start gap-x-1">
                                <span class="mt-1">-</span>
                                <Link
                                    class="block lg:py-1 py-2 px-2 hover:!text-[#16A34A] !text-white"
                                    href="/pilomaterial"
                                >
                                    Пиломатериал
                                </Link>
                            </li>
                            <li class="mb-1 !py-0 flex items-start gap-x-1">
                                <span class="mt-1">-</span>
                                <Link
                                    class="block lg:py-1 py-2 px-2 hover:!text-[#16A34A] !text-white"
                                    href="/production"
                                >
                                    Домокомплекты</Link
                                >
                            </li>
                        </ul>
                    </li>
                    <li class="mx-5">
                        <Link
                            href="/ready-project"
                            class="hover:text-[#16A34A]"
                            :class="{
                                'font-bold underline':
                                    $page.url.startsWith('/ready-project'),
                            }"
                            >Готовые объекты</Link
                        >
                    </li>
                    <li class="mx-5">
                        <Link
                            href="/ipoteka"
                            class="hover:text-[#16A34A]"
                            :class="{
                                'font-bold underline':
                                    $page.url.startsWith('/ipoteka'),
                            }"
                            >Ипотека</Link
                        >
                    </li>
                    <li class="mx-5">
                        <Link
                            href="/contact"
                            class="hover:text-[#16A34A]"
                            :class="{
                                'font-bold underline':
                                    $page.url.startsWith('/contact'),
                            }"
                            >Контакты</Link
                        >
                    </li>
                    <li class="mx-5">
                        <a
                            :href="
                                'tel:' +
                                ($page.props.contact?.data?.phone
                                    ? $page.props.contact.data.phone.replace(
                                          /[\s-()]/g,
                                          ''
                                      )
                                    : '')
                            "
                        >
                            {{ $page.props.contact?.data?.phone }}</a
                        >
                    </li>
                </ul>
                <button
                    type="button"
                    class="absolute right-0 top-0 lg:hidden"
                    name="buttonMenu"
                    @click="showMenu = !showMenu"
                >
                    <svg
                        v-if="showMenu"
                        :class="{ 'text-gray-500': fixed }"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-10 h-10"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>

                    <svg
                        v-else
                        :class="{ 'text-gray-500': fixed }"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-10 h-10"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 9h16.5m-16.5 6.75h16.5"
                        />
                    </svg>
                </button>
            </nav>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    components: { Link },
    props: {
        fixed: { type: Boolean, default: false },
    },
    data() {
        return {
            showMenu: false,
            showBuildding: false,
            showProd: false,
        };
    },
    methods: {
        hideBuildding() {
            setTimeout(() => {
                this.showBuildding = false;
            }, 250);
        },
        hideProd() {
            setTimeout(() => {
                this.showProd = false;
            }, 250);
        },
    },
};
</script>
