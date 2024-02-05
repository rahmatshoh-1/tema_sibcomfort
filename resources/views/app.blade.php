<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
    <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
        integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- sibcomfort Онлайн Чат amocrm -->
    <!-- <script>
        (function(a, m, o, c, r, m) {
            a[m] = {
                id: "395766",
                hash: "38c78238aa658a0bb0cf690094c33c54d13733f1a9268a50dc7054fec4fb4690",
                locale: "ru",
                inline: true,
                setMeta: function(p) {
                    this.params = (this.params || []).concat([p])
                }
            };
            a[o] = a[o] || function() {
                (a[o].q = a[o].q || []).push(arguments)
            };
            var d = a.document,
                s = d.createElement('script');
            s.async = true;
            s.id = m + '_script';
            s.src = 'https://gso.amocrm.ru/js/button.js?1697790732';
            d.head && d.head.appendChild(s)
        }(window, 0, 'amoSocialButton', 0, 0, 'amo_social_button'));
    </script> -->
    <script>
        (function(a, m, o, c, r, m) {
            a[m] = {
                id: "398108",
                hash: "73df63b19b9566dfb7fef0a81d624051f766ec0823a600cb2f01ffcfc5471b20",
                locale: "ru",
                inline: false,
                setMeta: function(p) {
                    this.params = (this.params || []).concat([p])
                }
            };
            a[o] = a[o] || function() {
                (a[o].q = a[o].q || []).push(arguments)
            };
            var d = a.document,
                s = d.createElement('script');
            s.async = true;
            s.id = m + '_script';
            s.src = 'https://gso.amocrm.ru/js/button.js?1701239203';
            d.head && d.head.appendChild(s)
        }(window, 0, 'amoSocialButton', 0, 0, 'amo_social_button'));
    </script>

    <!--  end sibcomfort Онлайн Чат amocrm -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
                k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(95622984, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/95622984" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- amocrm-start -->

    <!-- amocrm-end -->

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
