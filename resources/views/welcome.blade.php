<!DOCTYPE html>
<html lang="es">

<head>
    <title>Concretera de los Llanos Centrales. C.A </title>
    <meta name="description" content="{{ $informacion->empresa_descripcion }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="Content-Language" content="es-VE">
    <meta name="language" content="es-VE">
    <meta name="Copyright" content="Copyright (c) 2022 Concretera de los Llanos Centrales. C.A.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="icon" href="/storage/favicon.ico" sizes="16x16">
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
    </style>
</head>

<body>
    <div class="c-site-wrapper">
        <header class="c-header">
            <div class="c-header__nav">
                <div class="o-grid">
                    <div class="o-grid__column -lg-12 -sm-8 -xs-4">
                        <a href="/" class="c-header__nav__logo">
                            <img src="/storage/{{ $info->logo }}" alt="Concretera">
                        </a>
                        <nav>
                            <ul>
                                <li>
                                    <a href="/productos" class="">Nuestros&nbsp;Productos</a>
                                </li>

                                <li>
                                    <a href="/contactanos" class="">Contactanos</a>
                                </li>

                            </ul>
                        </nav>
                        <div class="c-header__nav__mobile">
                            <a onclick="openMenu()" class="c-icon -menu-button" role="button" ws-mobile-menu-btn="">???</a>
                            <div id="menu-mobil" class="c-mobile-menu" ws-mobile-menu="">
                                <div class="c-mobile-menu__overlay" ws-mobile-menu-overlay="" onclick="closeMenu()">
                                </div>
                                <div class="c-mobile-menu__inner">
                                    <div onclick="closeMenu()" class="c-mobile-menu__inner__header">
                                        <a onclick="closeMenu()" ws-link-sign-in="">Cerrar</a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="/" class="-active">Inicio</a>
                                        </li>
                                        <li>
                                            <a href="/productos" class="">Nuestros&nbsp;Productos</a>
                                        </li>
                                        <li>
                                            <a href="/contactanos" class="">Contactanos</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <main id="main">


            <a href="https://api.whatsapp.com/send?phone={{ $info->whatapp }}&text=Hola,Buen dia!" class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
            </a>

            <section class="c-hero" style="background-image: url(/storage/banner1.jpg);background-repeat:no-repeat;background-size:auto 900px;">
                <div class="c-hero__overlay">
                    <h1>lo que quieras construir, te ayudaremos!</h1>
                    <a href="/productos" target="_self" class="c-button">
                        Comprar<span class="c-icon -arrow-right">???</span>
                    </a>

                    <a href="https://api.whatsapp.com/send?phone={{ $info->whatapp }}&text=Hola,Buen dia!" target="_self" class="c-button -black">
                        Contactanos Ya<span class="c-icon -arrow-right">???</span>
                    </a>

                </div>
            </section>

            <section class="o-grid c-featured ">
                <h1>Conoce Nuestros Productos</h1>
                <div class="c-featured__content">

                    @foreach ($productos as $producto)
                    <div class="c-featured__item o-grid__column -lg-4 -md-6 -sm-12">
                        <div class="c-featured__item__desc c-product">
                            <div class="c-featured__item__category">
                                {{ $producto->categoria->nombre }}
                            </div>
                            <h2>
                                <a href="/producto/{{ $producto->slug }}">
                                    {{ $producto->producto_nombre }}
                                </a>
                            </h2>
                            <div class="c-pricetag">
                                <h2 style="font-size:18px;">
                                    {{ $producto->precio }}
                                </h2>

                            </div>
                            <h3>{{ $producto->subcategoria->nombre }}</h3>
                            <a href="/producto/{{ $producto->slug }}" ws-add-cart-modal="211803"><span class="c-icon "> <i class="fa fa-plus"></i> </span> Ver Detalles</a>
                        </div>
                        <div class="c-featured__item__image">
                            <img src="/storage/{{ $producto->imagen }}" alt="Product Photo">
                        </div>

                    </div>
                    @endforeach

                </div>
            </section>

            <div class="o-grid -xs-collapse " style="margin-top: 60px;">
                <div class="o-grid__column -lg-6 -sm-4 -xs-4">
                    <div>
                        <div class="c-call-to-action " style="background-image: url(/storage/aliven.jpg); background-repeat:no-repeat; background-size:960px 600px;">
                            <h2 style="color:#f9690e; text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;">
                                Productos de Aliv??n</h2>
                            <a href="/productos?categoria_id=2" class="c-button" role="button" aria-label="View our best sellers." target="_self"><span class="c-icon -arrow-right">???</span></a>
                        </div>
                    </div>
                </div>
                <div class="o-grid__column -lg-6 -sm-4 -xs-4">
                    <div>
                        <div class="c-call-to-action " style="background-image: url(/storage/concreto1.jpg)">
                            <h2 style="color:#f9690e;text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;">
                                Productos de Concreto</h2>
                            <a href="/productos?categoria_id=1" class="c-button" role="button" aria-label="Find your wine." target="_self"><span class="c-icon -arrow-right">???</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <section>


                <div class="o-grid -xs-collapse ">
                    <div class="o-grid__column -lg-12 -sm-8 -xs-4 -lg-push-1 -md-push-0">
                        <div>
                            <h1 class="-sm-center-text">
                                Acerca de Nosotros
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="c-story ">
                    <div class="o-grid -xs-collapse">
                        <div class="o-grid__column -lg-4 -md-5 -sm-8 -xs-4 -lg-push-1 -md-push-0 -sm-visible">
                            <img src="/storage/565656.jpg">
                        </div>
                        <div class="o-grid__column -lg-6 -md-7 -sm-8 -xs-4 -lg-push-1 -md-push-0">
                            <p><strong>Concretera de los Llanos Centrales C.A </strong> es una empresa l??der con ampl??a experiencia en la elaboraci??n de productos de <strong>Concreto, Prefabricados y de Aliven</strong>, dise??ado para obras <strong>civiles, el??ctricas</strong> y de <strong>saneamiento</strong>.
                            </p>

                            <p>
                                La filosof??a <strong>vanguardista</strong> que tiene siempre presente nuestra empresa es la constante actualizaci??n e <strong>innovaci??n</strong> en la elaboraci??n de todos  <a href="/productos">nuestros productos</a> de acuerdo a los nuevos requerimientos del <strong>mundo de la construcci??n</strong>.
                            </p>

                            <p>
                                Nuestra meta es la <strong>satisfacci??n</strong> de nuestros clientes gracias a la <strong> calidad, puntualidad y eficiencia </strong> en la entrega de los productos, ofrecemos <strong>precios competitivos</strong> sin que esto merme la calidad de los mismos, pero sobre todo tenemos el fin y el <strong>compromiso de contribuir al desarrollo del sector construcci??n</strong>.
                            </p>

                            <p>Nuestros productos de <strong>Concreto, Prefabricados y de Aliven</strong> est??n en todas partes. <strong>Desarrollamos</strong> productos acorde a las necesidades y exigencias del mercado nacional,
                                <a href="/productos">conoce mas acerca de estos.</a>
                            </p>


                            <p>
                                Nuestro personal cuenta con <strong>experiencia y capacidad</strong> que requiere la elaboraci??n de cada una de las piezas respetando las <strong>normas t??cnicas requeridas</strong> en cada uno de estos.
                            </p>

                            <p>
                                Nuestra empresa adem??s de brindar los <strong>servicios de Fabricaci??n</strong>, tambien ofrece <strong>Asesor??a en la planificaci??n</strong> de obras relacionadas al sector construcci??n y dispone de una ampl??a gama de <a href="/productos?categoria_id=3">agregados</a> requeridos en la ejecuci??n de obras de concreto.
                            </p>
                        </div>
                        <div class="o-grid__column -lg-4 -md-5 -sm-8 -xs-4 -lg-push-2 -md-push-0 -sm-hidden">
                            <img src="/storage/1231232.jpg">
                            <img src="/storage/454545.jpg">
                            <img src="/storage/Placa.jpg">
                            <img src="/storage/Placa2.jpg">
                        </div>
                    </div>
                </div>
            </section>


            {{-- <section>
                <div class="o-grid -xs-collapse ">
                    <div class="o-grid__column -lg-12 -sm-8 -xs-4 -lg-push-1 -md-push-0">
                        <div>

                            <h1 class="-sm-center-text">
                                Stores &amp; Information
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="o-grid -xs-collapse c-stores" style="margin-top: 0px;">
                    <div class="o-grid__column -lg-7 -md-7 -sm-8 -xs-4 -lg-push-1 -md-push-0 -xs-side-gutters">
                        <div>
                            <div class="-sm-center-text">
                                <div>
                                    <p class="paragraph--large">

                                        Our goal is to provide a fun, educational and non-intimidating shopping
                                        experience for wine lovers of all levels of expertise.
                                    </p>
                                </div>
                            </div>
                            <img class="" src="/storage/123123.jpg" alt="Chapel Hill.jpeg">
                            <div class="c-hours ">
                                <table>
                                    <caption>Horarios de Atenci??n</caption>
                                    <tbody>
                                        @foreach ($horarios as $dia)
                                            <tr>
                                                <td>{{ $dia->dia }}</td>
            <td>{{ $dia->apertura }} - {{ $dia->cierre }}</td>
            </tr>
            @endforeach

            </tbody>
            </table>
    </div>


    <div class="o-location-list ">
        <div class="c-location">
            <h2>Cede Principal</h2>
            <p>
                Carretera via San Juan-Parapara <br>
                S/N <br>
                J298862432 <br>
            </p>
        </div>
    </div>
    </div>
    </div>
    <div class="o-grid__column -lg-4 -md-5 -sm-8 -xs-4 -lg-push-1 -md-push-0">
        <div>
            <section class="c-contact ">
                <form ws-contact-form="">
                    <h1>Contact Us</h1>
                    <p>Have a question or a comment? Fill out the form below to send us a message.</p>
                    <div class="c-contact__wrapper" ws-contact-wrapper="">
                        <div class="c-contact__wrapper__inputs">
                            <label>
                                Name
                                <input type="text" name="name" maxlength="200">
                            </label>
                            <label>
                                Email
                                <input type="text" name="email" maxlength="255">
                            </label>
                            <label>
                                Message
                                <textarea name="message" maxlength="2000"></textarea>
                            </label>
                            <div class="c-contact__wrapper__inputs__buttons">
                                <button type="reset" class="c-button -black">Cancel</button>
                                <button type="submit" class="c-button">Submit</button>
                            </div>
                        </div>
                    </div>
                    <p class="c-contact__result" ws-contact-result="">???</p>
                </form>
            </section>
        </div>
    </div>
    </div>
    </section> --}}
    </main>


    <footer class="c-footer">
        <div class="o-grid">
            <div class="o-grid__column -lg-4 -sm-hidden">
                <section class="c-footer__follow">
                    <h1>Siguenos en Nuestras Redes Sociales</h1>
                    @if (isset($redes['Instagram']))
                    <a href="{{ $redes['Instagram'] }}" class="c-icon -social-instagram" title="Instagram" target="_blank">???</a>
                    @endif
                    @if (isset($redes['Twitter']))
                    <a href="{{ $redes['Twitter'] }}" class="c-icon -social-twitter" title="Twitter" target="_blank">???</a>
                    @endif
                    @if (isset($redes['Facebook']))
                    <a href="{{ $redes['Facebook'] }}" class="c-icon -social-facebook" title="Facebook" target="_blank">???</a>
                    @endif
                </section>
                <div class="c-footer__copyright">
                    <p>
                        ?? 2022 Concretera de los Llanos Centrales. C.A.<br>
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
                            <a href="/contactanos" class="">Contactanos</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="o-grid__column -lg-5 -md-4 -right-border">
                <section class="c-footer__follow -sm-visible">
                    <h1>Siguenos en Nuestras Redes Sociales</h1>
                    @if (isset($redes['Instagram']))
                    <a href="{{ $redes['Instagram'] }}" class="c-icon -social-instagram" title="Instagram" target="_blank">???</a>
                    @endif
                    @if (isset($redes['Twitter']))
                    <a href="{{ $redes['Twitter'] }}" class="c-icon -social-twitter" title="Twitter" target="_blank">???</a>
                    @endif
                    @if (isset($redes['Facebook']))
                    <a href="{{ $redes['Facebook'] }}" class="c-icon -social-facebook" title="Facebook" target="_blank">???</a>
                    @endif
                </section>
                {{-- <section class="c-footer__newsletter">
                        <h1>Solicita tu Cotizaci??n</h1>
                        <form
                            action="https://winestore-online.us1.list-manage.com/subscribe/post?u=c0a9efc525bfba905d31b49b7&amp;id=8dfa8c03a4"
                            method="POST" _lpchecked="1">
                            <label for="footer-newsletter-email" class="sr-only">Tu correo electr??nico ??
                                tel??fono</label>
                            <input type="text" name="EMAIL" id="footer-newsletter-email"
                                placeholder="Tu correo electr??nico ?? tel??fono">

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
                            <a href="/contactanos" class="">Contactanos</a>
                        </li>
                    </ul>
                </div>
                <div class="c-footer__copyright">
                    <p>
                        ?? 2022 Concretera de los Llanos Centrales. C.A.<br>
                        <a href="/terms">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    </div>

    <!-- Concretera de los Llanos Centrales. C.A.. All Rights Reserved. -->
    <script>
        function openMenu() {
            menu = document.getElementById('menu-mobil');
            menu.classList.add('-active');
        }

        function closeMenu() {
            menu = document.getElementById('menu-mobil');
            menu.classList.remove('-active');
        }
    </script>
</body>

</html>