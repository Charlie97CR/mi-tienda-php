<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda - inicio</title>

    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="../assets//css/style.css">
</head>
<body>

    <!-- ENCABEZADO DE LA PÁGINA -->
    <header class="header">
        
        <div class="menu container">
            <!-- Logo -->
            <a href="tienda.php" class="logo">Zenith Shop</a>

            <!-- Menú responsive con checkbox -->
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="../assets/img/menu.png" class="menu-icono" alt="menu">
            </label>

            <!-- Navegación principal -->
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>

            <!-- Icono del carrito de compras -->
            <div>
                <ul>
                    <li class="submenu">
                        <img src="../assets/img/car.svg" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Contenido principal del header -->
        <div class="header-content container">
            <div class="header-img">
                <img src="../assets/img/right.png" alt=""/>
            </div>

            <div class="header-txt">
                <h1>Ofertas especiales</h1>
                <p>estrena las mejores prendas</p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
        </div>
    </header>

    <!-- SECCIÓN DE OFERTAS -->
    <section class="ofert container">

        <!-- Producto 1 -->
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="../assets/img/f1.png">
            </div>
            <div class="ofert-txt">
                <h3>Mochila de Cuero Exec</h3>
                <a href="#" class="btn-2">Informacion</a>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="../assets/img/f2.png">
            </div>
            <div class="ofert-txt">
                <h3>Calzado de Vestir Classic</h3>
                <a href="#" class="btn-2">Informacion</a>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="../assets/img/f3.png">
            </div>
            <div class="ofert-txt">
                <h3>Producto 3</h3>
                <a href="#" class="btn-2">Informacion</a>
            </div>
        </div>
    </section>

    <!-- SECCIÓN PRINCIPAL DE PRODUCTOS -->
    <main class="products container" id="lista-1"> 
        <h2>Productos</h2>

        <div class="product-content">

            <!-- Producto 1 -->
            <div class="product">
                <img src="../assets/img/1.png" alt="">
                <div class="product-txt">
                    <h3>Camisa Formal Black Edition</h3>
                    <p>calidad premium</p>
                    <p class="precio">$45.00</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="product">
                <img src="../assets/img/2.png" alt="">
                <div class="product-txt">
                    <h3>Abrigo Urbano Waterproof</h3>
                    <p>calidad premium</p>
                    <p class="precio">$89.90</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="2">Agregar al carrito</a>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="product">
                <img src="../assets/img/3.png" alt="">
                <div class="product-txt">
                    <h3>Abrigo Urbano Waterproof</h3>
                    <p>calidad premium</p>
                    <p class="precio">$115.00</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="3">Agregar al carrito</a>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="product">
                <img src="../assets/img/4.png" alt="">
                <div class="product-txt">
                    <h3>Camisa Casual Blue Sky</h3>
                    <p>calidad premium</p>
                    <p class="precio">$42.50</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="4">Agregar al carrito</a>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="product">
                <img src="../assets/img/5.png" alt="">
                <div class="product-txt">
                    <h3>CAMISA SLIM FIT BLACK</h3>
                    <p>calidad premium</p>
                    <p class="precio">$39.99</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="5">Agregar al carrito</a>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="product">
                <img src="../assets/img/6.png" alt="">
                <div class="product-txt">
                    <h3>CARDIGAN TÉRMICO INVERNAL</h3>
                    <p>calidad premium</p>
                    <p class="precio">$79.00</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="6">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </main>

    <!-- SECCIÓN DE ICONOS DESTACADOS -->
    <section class="icons container">
        <div class="icon-1">
            <div class="icon-img">
                <img src="../assets/img/i1.svg" alt=""/>
            </div>
            <div class="icon-txt">
                <h3>ENVÍO SEGURO</h3>
                <p>Despachos rápidos y garantizados a todo el país.</p>
            </div>
        </div>

        <div class="icon-1">
            <div class="icon-img">
                <img src="../assets/img/i2.svg" alt=""/>
            </div>
            <div class="icon-txt">
                <h3>CALIDAD PREMIUM</h3>
                <p>Tejidos finos y acabados de alta durabilidad.</p>
            </div>
        </div>

        <div class="icon-1">
            <div class="icon-img">
                <img src="../assets/img/i3.svg" alt=""/>
            </div>
            <div class="icon-txt">
                <h3>GARANTÍA DE CAMBIO</h3>
                <p>30 días para cambios en todas tus prendas.</p>
            </div>
        </div>
    </section>

    <!-- SECCIÓN DE BLOGS -->
    <section class="blog container">
        <div class="blog-1">
            <img src="../assets/img/b1.jpg" alt="">
            <h3>GUÍA DE ESTILO: CÓMO COMBINAR ACCESORIOS</h3>
            <p>Descubre los secretos para elevar tus outfits diarios con detalles minimalistas</p>
        </div>

        <div class="blog-1">
            <img src="../assets/img/b2.jpg" alt="">
            <h3>EL ARTE DEL CALZADO: CUIDADO DEL CUERO</h3>
            <p>Consejos prácticos para mantener tus zapatos impecables por más tiempo.</p>
        </div>

        <div class="blog-1">
            <img src="../assets/img/b3.jpg" alt="">
            <h3>TENDENCIAS DE TEMPORADA: CAMISERÍA FINA</h3>
            <p>Explora nuestra nueva selección de cortes formales y urbanos..</p>
        </div>
    </section>

    <!-- PIE DE PÁGINA -->
    <footer class="footer"> 
        <div class="footer-content container">
            <!-- Cuatro columnas de enlaces -->
            <div class="link">
                <h3>Lorem ipsum</h3>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Lorem ipsum</h3>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Lorem ipsum</h3>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Lorem ipsum</h3>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Lorem</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- ENLACE AL SCRIPT JS -->
    <script src="../assets/js/carrito.js"></script>

</body>
</html>