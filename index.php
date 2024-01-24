<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Repuestos Victoria</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url('imagenes/images/fiatcronos_back.jpg') center center fixed no-repeat;
            background-size: cover;
            color: #ffffff;
        }

        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #34495e;
            padding: 0.5em;
            text-align: center;
        }

        nav a {
            color: #ecf0f1;
            text-decoration: none;
            padding: 0.5em 1em;
            margin: 0 1em;
            border-radius: 5px;
            transition: background-color 0.3s;
            font-weight: bold;
        }

        nav a:hover {
            background-color: #2c3e50;
        }

        .catalog-menu {
            position: relative;
            display: inline-block;
        }

        .catalog-menu-content {
            display: none;
            position: absolute;
            background-color: #34495e;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border-radius: 5px;
            z-index: 0;
            text-align: left;
        }

        .catalog-menu-content a {
            color: #ecf0f1;
            padding: 0.5em 1em;
            display: block;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .catalog-menu-content a:hover {
            background-color: #2c3e50;
        }

        .catalog-menu:hover .catalog-menu-content {
            display: block;
        }

        .catalog-button {
            background-color: #e74c3c;
            color: #ecf0f1;
            text-decoration: none;
            padding: 0.7em 1.5em;
            margin: 0 1em;
            border-radius: 10px;
            transition: background-color 0.3s;
            font-size: 1.2em;
            font-weight: bold;
        }

        section {
            padding: 2em;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            margin: 10px;
            text-align: center;
            color: #ecf0f1;
        }

        h2, h3 {
            color: #3498db;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 20px;
        }

        .center-images {
            text-align: center;
            padding: 10px;
        }

        .center-images img {
            max-width: 20%;
            height: auto;
            border-radius: 10px;
            margin: 10px;
            transition: transform 0.3s;
            position: relative;
        }

        .center-images img:hover {
            transform: scale(1.1);
        }

        .image-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .floating-contact-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #2c3e50;
            color: #ffffff;
            padding: 8px;
            border-radius: 50%;
            text-align: center;
            font-size: 18px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .floating-contact-button:hover {
            background-color: #34495e;
        }
        .swiper-container {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            overflow: hidden;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .swiper-slide {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .swiper-slide h2 {
            margin-bottom: 10px;
            color: #333333;
        }

        .swiper-slide p {
            margin-bottom: 20px;
            color: #666666;
        }

        .swiper-button-next, .swiper-button-prev {
            color: #ffffff;
            background-color: #3498db;
            border-radius: 50%;
            padding: 10px;
        }

        .swiper-pagination {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            color: #3498db;
        }
        .swiper-slide img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
            width: 20%; /* Asegura que la imagen ocupe todo el ancho */
            object-fit: cover; /* Hace que la imagen se ajuste al contenedor sin perder la proporción */
        }
        .product-catalog {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .product {
            width: 18%;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            text-align: center;
        }

        .product img {
            max-width: 90%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
            width: 100%;
            object-fit: cover;
        }

        .product h2 {
            color: #333333;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .product p {
            color: #666666;
            font-size: 1em;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Repuestos Victoria</h1>
    </header>

    <nav>
        <a href="https://api.whatsapp.com/send?phone=1166315754">Contáctanos</a>
        <div class="catalog-menu">
            <span class="catalog-menu-content">
                <a href="#">Llantas</a>
                <a href="#">Filtros</a>
                <a href="#">Frenos</a>
                <a href="#">Luces</a>
                <a href="#">Motores</a>
            </span>
            <a href="#" class="catalog-button">Catálogo</a>
        </div>
        <a href="https://www.google.com/maps/place/Av.+Centenario+2517,+B1643CGM+B%C3%A9ccar,+Provincia+de+Buenos+Aires/@-34.4565705,-58.5341855,18.11z/data=!4m6!3m5!1s0x95bcafe0d1c4e7fd:0xe9bf775d7bf34a4f!8m2!3d-34.4567584!4d-58.533736!16s%2Fg%2F11c8784041?entry=ttu">Ubicación</a>
    </nav>

    <section>
        <h2>Repuestos Victoria es una Empresa Nacional dedicada a la producción y distribución de autopartes para las líneas Fiat, Peugeot, Volkswagen, Renault, Chevrolet y Ford.</h2>
        <p>Contamos con la más alta calidad en nuestros productos y procesos. Desde hace más de 30 años hemos desarrollado soluciones basados en tecnología propia.</p>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="imagenes/images/fiatcronos_back.jpg" alt="Producto 1">
                <h2>Producto 1</h2>
                <p>Precio: $100</p>
                <p>Descripción breve del producto 1.</p>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <h2>Producto 2</h2>
                <p>Precio: $150</p>
                <p>Descripción breve del producto 2.</p>
            </div>

            <!-- Agrega más slides según sea necesario -->
        </div>

        <!-- Agregar botones de navegación -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Agregar paginación -->
        <div class="swiper-pagination"></div>
    </div>

    <div class="center-images">
        <img src="imagenes/images/motor.jpg" alt="Imagen 1">
        <img src="imagenes/images/luces.jpg" alt="Imagen 2">
        <img src="imagenes/images/llantas.jpg" alt="Imagen 3">

        <h3>Catálogo de Autopartes Nuevas</h3>
        <ul>

    <div class="product-catalog">
        <!-- Producto 1 -->
        <div class="product">
            <img src="imagenes/images/valvulasventa.jpg" alt="Producto 1">
            <h2>VÁLVULAS (Combo x 4 unidades)</h2>
            <p>Precio: $4.000</p>
            <p>Válvulass De Goma Completas Para Llantas Tr 413 Tr 414 Tr 418 (4 unidades)...</p>
        </div>

        <!-- Producto 2 -->
        <div class="product">
            <img src="imagenes/images/trendelanterofiatuno.jpg" alt="Producto 2">
            <h2>Kit Tren Delantero P/ Fiat Uno</h2>
            <p>Precio: $115.000</p>
            <p>p2 AMORTIGUADORES 2 EXTREMOS 4 BUJE...</p>
        </div>

        <!-- Agrega más productos según sea necesario -->

        <!-- Producto 3 -->
        <div class="product">
            <img src="imagenes/images/llantasventa.jpg" alt="Producto 3">
            <h2>185/65R15 Firestone Firehawk 900 H/88</h2>
            <p>Precio: $169.999</p>

            <p>El neumático Firehawk 900 cuenta con...</p>
        </div>

        <!-- Producto 4 -->
        <div class="product">
            <img src="imagenes/images/motorventa.jpg" alt="Producto 4">
            <h2>Motor Nuevo Completo Citroen Jumper 2.2 Hdi 0km</h2>
            <p>Precio: $12.584.560</p>
            <p>Motor completo 2.2 HDI Peugeot Cit...</p>
        </div>

        <!-- Producto 5 -->
        <div class="product">
            <img src="imagenes/images/bateriaventa.jpg" alt="Producto 5">
            <h2>Bateria Bosch S4 62d 12x62 Ford Ranger 4.0i Nafta 1997-2002</h2>
            <p>Precio: $97.000</p>
            <p>Bateria Bosch S4 62d 12x62 Ford Ranger 4.0i Naf...</p>
        </div>



            <!-- Agrega más slides según sea necesario -->
        </div>
            <!-- Agrega más elementos según sea necesario -->
        </ul>
    </section>


    <a href="https://api.whatsapp.com/send?phone=1166315754" class="floating-contact-button" target="_blank" rel="noopener noreferrer">
        <img src="imagenes/images/whatsapp.png" style="width: 24px; height: 24px; margin-right: 4px;">
    </a>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        // Inicializar Swiper
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>
</html>
