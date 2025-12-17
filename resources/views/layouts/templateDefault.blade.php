<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title-page') </title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    {{-- CSS --}}
    @vite('resources/css/app.css')
    {{-- CSS / LINKS DAS PÁGINAS --}}
    @yield('content-head')
    
    <!-- Hotjar Tracking Code for AlgoritmUX Site -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:3927785,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    
    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P4K4SDF');</script>
    <!-- End Google Tag Manager -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="icon" href="{{ asset('/images/unicornio-LOGO-roxo.png') }}">
</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4K4SDF"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    
    <header class="header">
        <div class="content-menu">
            <figure>
                <a href="{{ Route('home') }}">
                    <img src="{{ asset('/images/logo-algoritmux.svg') }}">
                </a>
            </figure>

            <!-- Botão para abrir/fechar o menu no mobile -->
            <button class="menu-toggle" onclick="toggleMenu()">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </button>

            <div class="menu-mobile hidden">
                <ul>
                    <li><a href="{{ Route('home') }}">Home</a></li>
                    <li><a href="/metodologia">Metodologia</a></li>
                    <li><a href="/equipe">A equipe</a></li>
                    <li><a href="/contato">Contato</a></li>
                    <!-- <li><a href="/roas">ROAS</a></li> -->
                </ul>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ Route('home') }}">Home</a></li>
                    <li><a href="/metodologia">Metodologia</a></li>
                    <li><a href="/equipe">A equipe</a></li>
                    <li><a href="https://api.whatsapp.com/send/?phone=5512992482237&text&type=phone_number&app_absent=0" target="_blank">Contato</a></li>
                    <!-- <li><a href="/roas">ROAS</a></li> -->
                </ul>
            </div>
        </div>
        </div>
    </header>

    @yield('content')


    <footer class="footer">
        <div class="content-footer">
            <div class="footer-right">
                <div class="content">
                    <h3 class="text-xl text-primary">Institucional</h3>
                    <ul>
                        <li><a href="{{ Route('home') }}">Home</a></li>
                        <li><a href="/metodologia">Metodologia</a></li>
                        <li><a href="/equipe">A equipe</a></li>
                        <li><a href="https://api.whatsapp.com/send/?phone=5512992482237&text&type=phone_number&app_absent=0" target="_blank">Contato</a></li>
                        <li><a href="/roas">Roas</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-center">
                <div class="content">
                    <figure>
                        <a href="{{ Route('home') }}">
                            <img src="{{ asset('/images/logo-algoritmux.svg') }}">
                        </a>
                    </figure>
                    <span>
                        <p>Desenvolvido pela agência AlgoritmUX.</p>
                    </span>
                </div>
            </div>
            <div class="footer-left">
                <div class="content">
                    <h3 class="text-xl text-primary">Nossas redes sociais</h3>
                    <div class="social">
                        <div class="icons">
                            <a href="https://www.linkedin.com/company/algoritmux-growth-marketing/" target="_blank">
                                <img src="{{ asset('/images/icons/linkedin.svg') }}">
                            </a>
                            <a href="https://www.instagram.com/algoritmux/" target="_blank">
                                <img src="{{ asset('/images/icons/instagram.svg') }}">
                            </a>
                        </div>
                        <div class="telEmail">
                            <p><a href="https://wa.me/5512992482237">(12) 99247-4969</a></p>
                            <p><a href="mailto:contato@algoritmux.com">contato@algoritmux.com</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menuMobile = document.querySelector('.menu-mobile');
            menuMobile.classList.toggle('show');
        }
    </script>
    @vite('resources/js/app.js')
    @stack('scripts')
</body>

</html>
