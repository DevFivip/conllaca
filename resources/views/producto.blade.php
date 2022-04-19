<!DOCTYPE html>

<html lang="es">

<head>
    <title>Concretera de los Llanos Centrales. C.A | Producto | {{ $producto->producto_nombre }}</title>
	<meta name="description" content="{{ $producto->descripcion }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="Content-Language" content="es-VE">
    <meta name="language" content="es-VE">
    <meta name="Copyright" content="Copyright (c) 2022 Concretera de los Llanos Centrales. C.A.">
    <link rel="icon" href="/storage/favicon.ico" sizes="16x16">
    <link rel="canonical" href="{{url()->current()}}"/>
    <link rel="stylesheet" href="../../css/theme.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
        <main id="main" class="c-main">
            <header class="c-header">
                <div class="c-header__nav">
                    <div class="o-grid">
                        <div class="o-grid__column -lg-12 -sm-8 -xs-4">
                            <a href="/" class="c-header__nav__logo">
                                <a href="/" class="c-header__nav__logo">
                                    <img src="/storage/{{$info->logo}}"
                                        alt="Concretera">
                                </a>
                            </a>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="/productos">Nuestros&nbsp;Productos</a>
                                    </li>
                                    <li>
                                        <a href="/contactanos" class="">Contactanos</a>
                                    </li>

                                </ul>
                            </nav>
                            <div class="c-header__nav__mobile">
                                <a onclick="openMenu()" class="c-icon -menu-button" role="button"
                                    ws-mobile-menu-btn="">‌</a>
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
                                                <a href="/productos" class="-active">Nuestros&nbsp;Productos</a>
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
            <div class="c-product-detail" ws-product-detail="">
                <div class="o-grid">
                    <div class="o-grid__column -lg-3 -md-2 -sm-hidden -xs-0">
                        <img src="/storage/{{ $producto->imagen }}" alt="Product Photo">
                    </div>
                    <div class="o-grid__column -lg-6 -md-8 -sm-12">
                        <div class="c-product-detail__category">{{ $producto->categoria->nombre }}</div>
                        <h1>{{ $producto->producto_nombre }}</h1>
                        <p class="c-product-detail__description">{{ $producto->descripcion }}
                        </p>
                        <span class="-sm-visible">
                            <img src="/storage/{{ $producto->imagen }}" alt="Product Photo">
                        </span>
                        <div>
                            <div class="c-product-detail__iconscontainer">
                                <p class="c-product-detail__summary">{{ $producto->subcategoria->nombre }}</p>
                            </div>
                        </div>
                        <div class="c-product-detail__price">
                            <div class="c-pricetag -horizontal">
                                <div class="c-pricetag__price" aria-hidden="true">
                                    {{ $producto->precio }}
                                </div>
                            </div>
                            <form>
                                <a class="c-button"
                                    href="https://api.whatsapp.com/send?phone={{ $info->whatapp }}&text=Necesito informacion del {{ $producto->producto_nombre }}">
                                    <i class="fa fa-whatsapp"></i>
                                    Solicitar Cotización</a>
                            </form>
                        </div>
                    </div>
                    <div class="o-grid__column -lg-3 -md-2 -sm-0 -xs-1">
                        <div class="c-product-detail__vintage__container">
                            <div class="c-product-detail__vintage"></div>
                            <div class="c-product-detail__vintage"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-featured -similar">
                <div class="o-grid c-featured__content">
                    <div class="o-grid__column -lg-12">
                        <h1>Productos Similares</h1>
                    </div>
                </div>
            </div>
            <div class="c-featured -similar">
                <div class="o-grid c-featured__content">
                    @foreach ($similares as $producto)
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
                                    <h4 class="" aria-hidden="true">
                                        {{ $producto->precio }}
                                    </h4>
                                </div>
                                <h3> {{ $producto->subcategoria->nombre }}</h3>
                                <a href="/producto/{{ $producto->slug }}" ws-add-cart-modal="211803"><span
                                    class="c-icon "> <i class="fa fa-plus"></i> </span> Ver Detalles</a>
                            </div>
                            <div class="c-featured__item__image">
                                <img src="/storage/{{ $producto->imagen }}"
                                    alt="{{ $producto->producto_nombre }}">
                            </div>
                        </div>
                    @endforeach



                    <div class="-hide">
                        <div ws-product-add-to-cart="211160">
                            <div class="c-cart__add__summary">
                                <div class="c-product">
                                    <div class="c-product__category">Sangiovese</div>
                                    <h2><a href="/wines/detail/532875">Arcanum</a></h2>
                                    <div class="c-pricetag">
                                        <div class="c-pricetag__price" aria-hidden="true">
                                            <span>$</span><span>64</span><span>99</span>
                                        </div>
                                        <span class="sr-only">$64.99</span>
                                        <span class="c-pricetag__net">(NET)</span>
                                    </div>
                                    <div class="c-product__imagebox">
                                        <img src="/themes/winestore/assets/images/nophoto.png" alt="Product Photo">
                                    </div>
                                </div>
                            </div>
                            <div class="c-cart__add__actions" ws-add-cart-wrapper="">
                                <form>
                                    <label class="-selectize">
                                        Quantity
                                        <select selectize="" ws-add-cart-quantity="">
                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6 (Half case)</option>
                                            <option value="12">12 (Full case)</option>
                                            <option value="-1">Custom Amount</option>
                                        </select>
                                    </label>
                                    <br><br>
                                    <button class="c-button" type="button" ws-add-cart-btn="211160"><span
                                            class="c-icon -shopping-cart"></span> Add to Shopping Cart</button>
                                </form>
                            </div>
                            <div ws-add-cart-error=""></div>
                        </div>
                        <div ws-product-add-to-cart="199667">
                            <div class="c-cart__add__summary">
                                <div class="c-product">
                                    <div class="c-product__category">Pinot Noir</div>
                                    <h2><a href="/wines/detail/509229">Arterberry Maresh "Maresh" 2017</a></h2>
                                    <div class="c-pricetag">
                                        <div class="c-pricetag__price" aria-hidden="true">
                                            <span>$</span><span>49</span><span>99</span>
                                        </div>
                                        <span class="sr-only">$49.99</span>
                                        <span class="c-pricetag__net">(NET)</span>
                                    </div>
                                    <div class="c-product__imagebox">
                                        <img src="https://res.cloudinary.com/dqnv3y6ob/image/asset/c_scale,h_480,q_auto/v1615561102/products/509229.png"
                                            alt="Product Photo">
                                    </div>
                                </div>
                            </div>
                            <div class="c-cart__add__actions" ws-add-cart-wrapper="">
                                <form>
                                    <label class="-selectize">
                                        Quantity
                                        <select selectize="" ws-add-cart-quantity="">
                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6 (Half case)</option>
                                            <option value="12">12 (Full case)</option>
                                            <option value="-1">Custom Amount</option>
                                        </select>
                                    </label>
                                    <br><br>
                                    <button class="c-button" type="button" ws-add-cart-btn="199667"><span
                                            class="c-icon -shopping-cart"></span> Add to Shopping Cart</button>
                                </form>
                            </div>
                            <div ws-add-cart-error=""></div>
                        </div>
                        <div ws-product-add-to-cart="211782">
                            <div class="c-cart__add__summary">
                                <div class="c-product">
                                    <div class="c-product__category">Pinot Noir</div>
                                    <h2><a href="/wines/detail/504363">Arterberry Maresh Old Vines PN</a></h2>
                                    <div class="c-pricetag">
                                        <div class="c-pricetag__price" aria-hidden="true">
                                            <span>$</span><span>54</span><span>99</span>
                                        </div>
                                        <span class="sr-only">$54.99</span>
                                        <span class="c-pricetag__net">(NET)</span>
                                    </div>
                                    <div class="c-product__imagebox">
                                        <img src="https://res.cloudinary.com/dqnv3y6ob/image/asset/c_scale,h_480,q_auto/v1648564649/products/504363.png"
                                            alt="Product Photo">
                                    </div>
                                </div>
                            </div>
                            <div class="c-cart__add__actions" ws-add-cart-wrapper="">
                                <form>
                                    <label class="-selectize">
                                        Quantity
                                        <select selectize="" ws-add-cart-quantity="">
                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6 (Half case)</option>
                                            <option value="12">12 (Full case)</option>
                                            <option value="-1">Custom Amount</option>
                                        </select>
                                    </label>
                                    <br><br>
                                    <button class="c-button" type="button" ws-add-cart-btn="211782"><span
                                            class="c-icon -shopping-cart"></span> Add to Shopping Cart</button>
                                </form>
                            </div>
                            <div ws-add-cart-error=""></div>
                        </div>

                    </div>
                </div>
            </div>
        </main>



        <a href="https://api.whatsapp.com/send?phone={{ $info->whatapp }}&text=Hola,Buen dia!" class="float"
            target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>


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
                                <a href="/contactanos" class="">Contactanos</a>
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
                                <a href="/contactanos" class="">Contactanos</a>
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
