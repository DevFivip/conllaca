<!DOCTYPE html>
<html lang="es-VE">

<head>
    <title>Concretera de los Llanos Centrales. C.A </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="Content-Language" content="es-VE">
    <meta name="language" content="es-VE">
    <meta name="Copyright" content="Copyright (c) 2022 Concretera de los Llanos Centrales. C.A.">
    <link href="https://winestore-online.com/Themes/Winestore/assets/images/favicon.ico" rel="shortcut icon"
        type="image/ico">
    {{-- <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7331616/7007392/css/fonts.css"> --}}
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        #map {
            height: 500px;
        }

    </style>
</head>

<body>

    <div class="c-site-wrapper">

        <header class="c-header">

            <div class="c-header__nav">
                <div class="o-grid">
                    <div class="o-grid__column -lg-12 -sm-8 -xs-4">
                        <a href="/" class="c-header__nav__logo">
                            <img src="/storage/{{$info->logo}}"
                                alt="Concretera">
                        </a>
                        <nav>
                            <ul>
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="/productos" class="">Nuestros&nbsp;Productos</a>
                                        </li>

                                        <li>
                                            <a href="/contactanos" class="-active">Contactanos</a>
                                        </li>
                                    </ul>
                                </nav>
                            </ul>
                        </nav>
                        <div class="c-header__nav__mobile">
                            <a onclick="openMenu()" class="c-icon -menu-button" role="button" ws-mobile-menu-btn="">‌</a>
                            <div id="menu-mobil" class="c-mobile-menu" ws-mobile-menu="">
                                <div class="c-mobile-menu__overlay" ws-mobile-menu-overlay="" onclick="closeMenu()">
                                </div>
                                <div class="c-mobile-menu__inner">
                                    <div onclick="closeMenu()" class="c-mobile-menu__inner__header">
                                        <a onclick="closeMenu()" ws-link-sign-in="">Cerrar</a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="/" class="">Inicio</a>
                                        </li>
                                        <li>
                                            <a href="/productos" class="">Nuestros&nbsp;Productos</a>
                                        </li>
                                        <li>
                                            <a href="/contactanos" class="-active">Contactanos</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-search-bar -sm-visible" ws-search-bar="">
                    <div class="c-search-bar__input">
                        <input type="search" name="query" placeholder="Start Typing Here...">
                        <span class="c-icon -cross -hide" ws-search-bar-input-clear=""></span>
                    </div>
                    <div class="c-search-bar__results o-grid -sm-collapse" ws-search-bar-results=""></div>
                </div>
        </header>



        <main id="main" class="c-main">

            <a href="https://api.whatsapp.com/send?phone={{ $info->whatapp }}&text=Hola,Buen dia!"
                class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
            </a>
            <div class="o-grid -md-collapse">


                <div class="o-grid__column -md-12 -md-visible">
                    <h1 class="-mobile-padding">Contactanos</h1>
                </div>

                <section class="o-grid__column -lg-12 -md-12 -sm-8 -xs-4 -md-push-0">

                    <h1 class="-md-hidden">Contactanos</h1>

                    <div id="map"></div>


                    <p> <a class="c-button"
                            href="https://api.whatsapp.com/send?phone={{ $informacion->whatapp }}&text=Buen dia">
                            <i class="fa fa-whatsapp"></i>&nbsp;Escribir al WhatApp</a></p>

                    <h2 class="-md-hidden">Teléfonos</h2>
                    <p><i class="fa fa-phone"></i>&nbsp;{{ $informacion->telefono }}</p>
                    <p><i class="fa fa-phone"></i>&nbsp;{{ $informacion->telefono2 }}</p>



                    <h2 class="-md-hidden">Correos Electrónicos</h2>
                    <p><i class="fa fa-envelope"></i>&nbsp;{{ $informacion->email }}</p>
                    <p><i class="fa fa-envelope"></i>&nbsp;{{ $informacion->email2 }}</p>

                </section>
            </div>
        </main>

        <footer class="c-footer">
            <div class="o-grid">
                <div class="o-grid__column -lg-4 -sm-hidden">
                    <section class="c-footer__follow">
                        <h1>Siguenos en Nuestras Redes Sociales</h1>
                        @if (isset($redes['Instagram']))
                            <a href="{{ $redes['Instagram'] }}" class="c-icon -social-instagram" title="Instagram"
                                target="_blank">‌</a>
                        @endif
                        @if (isset($redes['Twitter']))
                            <a href="{{ $redes['Twitter'] }}" class="c-icon -social-twitter" title="Twitter"
                                target="_blank">‌</a>
                        @endif
                        @if (isset($redes['Facebook']))
                            <a href="{{ $redes['Facebook'] }}" class="c-icon -social-facebook" title="Facebook"
                                target="_blank">‌</a>
                        @endif
                    </section>
                    <div class="c-footer__copyright">
                        <p>
                            © 2022 Concretera de los Llanos Centrales. C.A.<br>
                        </p>
                    </div>
                </div>
                <div class="o-grid__column -lg-3 -md-4 -sm-hidden">
                    <div class="c-footer__nav">
                        <ul>
                            <li>
                                <a href="/productos" class="">Nuestros&nbsp;Productos</a>
                            </li>

                            <li>
                                <a href="/contactanos" class="-active">Contactanos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="o-grid__column -lg-5 -md-4 -right-border">
                    <section class="c-footer__follow -sm-visible">
                        <h1>Siguenos en Nuestras Redes Sociales</h1>
                        @if (isset($redes['Instagram']))
                            <a href="{{ $redes['Instagram'] }}" class="c-icon -social-instagram" title="Instagram"
                                target="_blank">‌</a>
                        @endif
                        @if (isset($redes['Twitter']))
                            <a href="{{ $redes['Twitter'] }}" class="c-icon -social-twitter" title="Twitter"
                                target="_blank">‌</a>
                        @endif
                        @if (isset($redes['Facebook']))
                            <a href="{{ $redes['Facebook'] }}" class="c-icon -social-facebook" title="Facebook"
                                target="_blank">‌</a>
                        @endif
                    </section>
                    {{-- <section class="c-footer__newsletter">
                        <h1>Solicita tu Cotización</h1>
                        <form
                            action="https://winestore-online.us1.list-manage.com/subscribe/post?u=c0a9efc525bfba905d31b49b7&amp;id=8dfa8c03a4"
                            method="POST" _lpchecked="1">
                            <label for="footer-newsletter-email" class="sr-only">Tu correo electrónico ó
                                teléfono</label>
                            <input type="text" name="EMAIL" id="footer-newsletter-email"
                                placeholder="Tu correo electrónico ó teléfono">

                            <input type="hidden" name="FNAME" value="">
                            <input type="hidden" name="LNAME" value="">
                            <input type="hidden" name="group[1][1]" value="1">

                            <button type="submit" class="c-button" value="Submit">Submit</button>
                        </form>
                    </section> --}}
                </div>
                <div class="o-grid__column -lg-4 -sm-visible">
                    <div class="c-footer__nav">
                        <ul>
                            <li>
                                <a href="/productos" class="">Nuestros&nbsp;Productos</a>
                            </li>

                            <li>
                                <a href="/contactanos" class="-active">Contactanos</a>
                            </li>
                        </ul>
                    </div>
                    <div class="c-footer__copyright">
                        <p>
                            © 2022 Concretera de los Llanos Centrales. C.A.<br>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- Concretera de los Llanos Centrales. C.A.. All Rights Reserved. -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>


    <script>
        function openMenu() {
            menu = document.getElementById('menu-mobil');
            menu.classList.add('-active');
        }

        function closeMenu() {
            menu = document.getElementById('menu-mobil');
            menu.classList.remove('-active');
        }

        var map = L.map('map').setView([9.868544, -67.378721, 4.5], 8);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([9.86, -67.37]).addTo(map)
            .bindPopup('<b>Concretera de los Llanos Centales C.A.</b></br> Carretera Nacional San Juan-Parapara')
            .openPopup();
    </script>
</body>

</html>
