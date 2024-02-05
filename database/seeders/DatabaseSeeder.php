<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\URL;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Admin::create([
            'name' => 'Admin',
            'email' => 'info@sib-comfort.ru',
            'password' => 'sibb3KV9&2kBaEl',
            'role' => 'admin'
        ]);

        $this->call([
            CategorySeeder::class,
            ReviewSeeder::class,
            PostSeeder::class,
            BuildTypeSeeder::class,
            ProjectSeeder::class,
            FaqSeeder::class,
            ProductSeeder::class,
        ]);

        Contact::create([
            'data' => [
                'phone' => '+7 (967) 555-35-49',
                'email' => 'info@sib-comfort.ru',
                'adress' => 'Красноярск ул. Урванцева д.5',

                'building' => [
                    [
                        'count' => '14',
                        'title' => 'лет превращаем мечты в недвижимост',
                        'description' => '',
                    ],
                    [
                        'count' => '473',
                        'title' => 'семьи стали новоселами в теплых, экологичных и энергоэффективных домах',
                        'description' => '',
                    ],
                    [
                        'count' => '23',
                        'title' => 'модульных строения изготовили в 2023 для дачь и объектов туризма',
                        'description' => '',
                    ],
                ],

                'files' => [
                    [
                        'label' => 'Каркас',
                        'file' => '/Презентация_проектов_ПСК_СибКомфорт.pdf',
                    ],
                    [
                        'label' => 'Брус',
                        'file' => '/Презентация_проектов_ПСК_СибКомфорт.pdf',
                    ],
                    [
                        'label' => 'Модули',
                        'file' => '/Презентация_проектов_ПСК_СибКомфорт.pdf',
                    ],
                    [
                        'label' => 'Ручная рубка',
                        'file' => '/Презентация_проектов_ПСК_СибКомфорт.pdf',
                    ],
                    [
                        'label' => 'Каталог',
                        'file' => '/Презентация_проектов_ПСК_СибКомфорт.pdf',
                    ],
                ]
            ]
        ]);

        Slider::create([
            'title' => "Превращаем мечты в недвижимость",
            'image' => "/image/bg_header.jpg",
            'mobile_image' => "/image/home_mob.jpg",
            'body' => "Строим дома из сибирской сосны. Дизайн и производство.",
            'status' => 'active',
            'page' => 'home',
            'link' => URL::to('catalog')
        ]);

        Slider::create([
            'title' => "Превращаем мечты в недвижимость",
            'image' => "/image/bg_header.jpg",
            'mobile_image' => "/image/bg_header.jpg",
            'body' => "Строим дома из сибирской сосны. Дизайн и производство.",
            'status' => 'active',
            'page' => 'projects',
            'link' => '',
        ]);

        Slider::create([
            'title' => "Посмотрите на построенные нами наши дома, база отдыха и баня",
            'image' => "/image/bg_header.jpg",
            'mobile_image' => "/image/bg_header.jpg",
            'body' => "СибКомфорт уже более 12 лет занимается строительством домов и бань",
            'status' => 'active',
            'page' => 'ready.project',
            'link' => '',
        ]);

        // Slider::create([
        //     'title' => "Выбирайте удобную кредитную программу или ипотеку с нашими партнёрами",
        //     'image' => "/image/bg_header.jpg",
        //     'mobile_image' => "/image/bg_header.jpg",
        //     'body' => "",
        //     'status' => 'active',
        //     'page' => 'partners',
        //     'link' => '',
        // ]);

        Slider::create([
            'title' => "Контакты и реквизиты",
            'image' => "/image/bg_header.jpg",
            'mobile_image' => "/image/bg_header.jpg",
            'body' => "",
            'status' => 'active',
            'page' => 'contacts',
            'link' => '',
        ]);

        Slider::create([
            'title' => "Превращаем мечты в недвижимость",
            'image' => "/image/bg_header.jpg",
            'mobile_image' => "/image/bg_header.jpg",
            'body' => "Строим дома из сибирской сосны. Дизайн и производство.",
            'status' => 'active',
            'page' => 'project.single',
            'link' => '',
        ]);

        Slider::create([
            'title' => "Полезный контент",
            'image' => "/image/bg_header.jpg",
            'mobile_image' => "/image/bg_header.jpg",
            'body' => "Раскроем для вас море полезной информации",
            'status' => 'active',
            'page' => 'posts',
            'link' => '',
        ]);

        Slider::create([
            'title' => "Полезный контент",
            'image' => "/image/bg_header.jpg",
            'mobile_image' => "/image/bg_header.jpg",
            'body' => "Раскроем для вас море полезной информации",
            'status' => 'active',
            'page' => 'post.single',
            'link' => '',
        ]);
        Slider::create([
            'title' => "Ипотека контент",
            'image' => "/image/bg_header.jpg",
            'mobile_image' => "/image/bg_header.jpg",
            'body' => "Ипотека",
            'status' => 'active',
            'page' => 'ipoteka',
            'link' => '',
        ]);
        Slider::create([
            'title' => "Домокомплект",
            'image' => "/image/bg_header.jpg",
            'mobile_image' => "/image/bg_header.jpg",
            'body' => "Домокомплект",
            'status' => 'active',
            'page' => 'production',
            'link' => '',
        ]);

        Slider::create([
            'title' => "Строим индивидуальные дома по каркасной технологии",
            'image' => "/image/karkas.png",
            'mobile_image' => "/image/karkas_mob.png",
            'body' => "Производство и оптовая продажа погонажных изделий из ангарской сосны, лиственницы, кедра, осины.",
            'status' => 'active',
            'page' => 'frame.house',
            'link' => '',
        ]);
        Slider::create([
            'title' => "Погонажные изделия оптом от производителя",
            'image' => "/image/p-s.png",
            'mobile_image' => "/image/ps-mob.png",
            'body' => "Производство и оптовая продажа погонажных изделий из ангарской сосны, лиственницы, кедра, осины.",
            'status' => 'active',
            'page' => 'molded.house',
            'link' => '',
        ]);
        Slider::create([
            'title' => "Строительство из бруса",
            'image' => "/image/brus.png",
            'mobile_image' => "/image/bg_header.jpg",
            'body' => "",
            'status' => 'active',
            'page' => 'brus',
            'link' => '',
        ]);
        Slider::create([
            'title' => "Модульное строительство",
            'image' => "/image/module.png",
            'mobile_image' => "/image/module_mob.jpg",
            'body' => "",
            'status' => 'active',
            'page' => 'module',
            'link' => '',
        ]);

        Slider::create([
            'title' => "Ручная рубка",
            'image' => "/image/module.png",
            'mobile_image' => "/image/module_mob.jpg",
            'body' => "",
            'status' => 'active',
            'page' => 'manual.cutting',
            'link' => '',
        ]);

        Slider::create([
            'title' => "Пиломатериал",
            'image' => "/image/pgzh.webp",
            'mobile_image' => "/image/module_mob.jpg",
            'body' => "",
            'status' => 'active',
            'page' => 'lumber',
            'link' => '',
        ]);
    }
}
