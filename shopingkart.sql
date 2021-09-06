-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2021 a las 08:23:51
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shopingkart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2020_11_11_082403_create_products_table', 1),
(14, '2020_11_15_033412_agregar_campo__categoty', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,3) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `description`, `photo`, `price`, `category`) VALUES
(1, NULL, NULL, 'iPhone XR 128GB 4G', 'Conoce el celular iPhone XR 128GB 4G. Adquiérelo en Kit Amigo y por tu primera recarga de $2000 o más, te darémos un Paquete de Bienvenida', 'https://tienda.claro.com.co/wcsstore/Claro/images/catalog/equipos/646x1000/70029102.jpg', '2.860', 0),
(2, NULL, NULL, 'Nokia 5.3 4G', 'Conoce el celular Nokia 5.3 4G;. Adquiérelo en Kit Amigo y por tu primera recarga de $2000 o más, te darémos un Paquete de Bienvenida.\r\n', 'https://tienda.claro.com.co/wcsstore/Claro/images/catalog/equipos/646x1000/70034974.jpg', '629.900', 0),
(3, NULL, NULL, 'Xiaomi Redmi 9C 4G', 'Conoce en Claro el celular Xiaomi Redmi 9C 4G, adquiérelo en Kit Amigo y por tu primera recarga de $2000 o más, te daremos un Paquete de Bienvenida.\r\n', 'https://tienda.claro.com.co/wcsstore/Claro/images/catalog/equipos/646x1000/70036454.jpg\r\n', '494.900', 0),
(4, NULL, NULL, 'Xiaomi Redmi 9A 4G', 'Conoce en Claro el celular Xiaomi Redmi 9A 4G, adquiérelo en Kit Amigo y por tu primera recarga de $2000 o más, te daremos un Paquete de Bienvenida.', 'https://tienda.claro.com.co/wcsstore/Claro/images/catalog/equipos/646x1000/70036202.jpg', '376.900', 0),
(5, NULL, NULL, 'Alcohol Antiséptico Fiamme 70% Con Invima Galon 3785 Ml', 'Alcohol Antiséptico Fiamme 70% Con Invima Galon 3785 ml\r\nMarca: Fiamme\r\nFabricante: Fuller\r\nContenido: 3785 ml\r\nConcentración: Alcohol Etílico al 70%\r\n\r\nTIENE REGISTRO INVIMA', 'https://http2.mlstatic.com/D_NQ_NP_760227-MCO43373781991_092020-O.webp', '28.900', 1),
(6, NULL, NULL, 'Gel Antibacterial Galon 70% Alc - L a $9975', 'GALON DE GEL ANTIBACTERIAL 3800 ML\r\n\r\nPreviene enfermedades. Este liquido reduce en un 99,99% germenes y bacterias, producto de alto espectro antibacterial.\r\n\r\nEste producto elimina en un 99,99% sin necesidad de lavarse las manos.\r\n\r\nFICHA TÉCNICA\r\n\r\n-Contenido 1 Galon (3.8 Litros)\r\n-Con Registro invima NSOC90490-19CO\r\n-Hecho en colombia.\r\n-Envase Plástico', 'https://http2.mlstatic.com/D_NQ_NP_658788-MCO43419963737_092020-O.webp', '39.900', 1),
(7, NULL, NULL, 'Lubricante Íntimo Caliente Chocolate 30ml', 'La opción \"retiro en domicilio del vendedor\" solo debe ser usada si usted se encuentra en Bogotá y esta dispuesto a pasar a recoger el producto, las politicas de Mercado Libre no permiten publicar nuestra ubicación, por lo que una vez realizada la compra dados del comprador le son llegados al vendedor y viceversa para que se pongan en contacto.', 'https://http2.mlstatic.com/D_NQ_NP_726323-MCO43263844751_082020-O.webp', '17.900', 1),
(8, NULL, NULL, 'Prueba De Embarazo', 'Prueba de embarzo rapida y facil en tan solo 3 minutos.\r\n\r\n100% higiénico y confiable\r\n', 'https://http2.mlstatic.com/D_NQ_NP_947850-MCO43401384696_092020-O.webp', '1.200', 1),
(9, NULL, NULL, 'Cerveza Kostritzer Schwarzbier 5 Litros', 'Ingredientes cuidadosamente seleccionados, una receta única y una pasión por la tradición cervecera: beber unA Köstritzer Schwarzbier es una experiencia especial y única: la verdadera perfección de la cerveza. Al tostar la cebada para nuestra malta, nuestra cerveza adquiere un sabor único a malta tostada y un carácter inconfundiblemente especial. Prueba la diferencia y disfruta de la cerveza negra más popular de Alemania.\r\n', 'https://http2.mlstatic.com/D_NQ_NP_690673-MCO31123675191_062019-O.jpg', '79.000', 2),
(10, NULL, NULL, 'Aguardiente Nectar Rojo Botella 375 M', '“Se prohíbe el expendio de bebidas embriagantes a menores de edad. Ley 124 de 1994. El exceso de alcohol es perjudicial para la salud. Ley 30 de 1986”', '\r\nhttps://http2.mlstatic.com/D_NQ_NP_723432-MCO43039156778_082020-O.webp', '21.000', 2),
(11, NULL, NULL, 'Ron Marques 8 Años Del Valle', 'el exceso de alcohol es perjudicial para la salud ley 30 de 1986. prohíbase el expendió de bebidas embriagantes a menores de edad ley 124 de 1994.\r\n\r\nDescripción\r\n\r\n1 Botella de Ron Marques 8 años de la industrias de licores del Valle\r\nProducto totalmente original y estampillado\r\n', 'https://http2.mlstatic.com/D_NQ_NP_806072-MCO32747504735_112019-O.webp', '82.900', 2),
(12, NULL, NULL, 'Absolut Vodka 1000ml ', 'Absolut Vodka es un vodka sueco elaborado exclusivamente a partir de ingredientes naturales, y a diferencia de algunos otros vodkas, no contiene azúcar añadido\r\n', 'https://http2.mlstatic.com/D_NQ_NP_671629-MCO42102432190_062020-O.webp', '110.000', 2),
(13, NULL, NULL, '2 Bowl chips potle', 'Tazón de pollo, arroz integral, frijoles, guacamole, pico de gallo, tortichips, lechuga, cilantro, limón y aderezo chipotle.', 'https://images.rappi.com/products/aa49e4d9-7f50-4893-95c3-8603f2875f39-1600892704123.jpeg', '29.900', 3),
(14, NULL, NULL, 'Ensalada go roma + Limonada', 'Pollo, parmesano, lechuga, aderezo cesar.', 'https://images.rappi.com/products/2092548505-1601496699039.png', '12.900', 3),
(15, NULL, NULL, 'Igo súper', 'Escoge base de arroz o lechuga, con pollo, quinoa, maíz, frijol, tomate, cebolla, tortichips, cilantro y aderezo limón, cilantro.', '\r\nhttps://images.rappi.com/products/e7575625-3e44-4891-bfdd-8405120d202f-1600888786611.png', '15.900', 3),
(16, NULL, NULL, 'Ensalada go sumer', 'Ensalada con lechuga, atún, tocineta, pasta, maíz, tomate y aderezo ranch.', 'https://d1ralsognjng37.cloudfront.net/400dae29-3cec-4a8e-bafc-33a9bea599e6.jpeg', '17.900', 3),
(17, NULL, NULL, 'Leche Parmalat entera vitamina d x6 und x1100ml', 'Lo mejor para ti y tu familia.', 'https://metrocolombiafood.vteximg.com.br/arquivos/ids/314071-1000-1000/7700604052360.jpg?v=637588727844070000', '16.590', 4),
(18, NULL, NULL, 'Bebida Silk almendra vainilla sin endulzante caja x6u x946ml c-u', 'Características principales:\r\nExquisita leche de almendras cremosa con un delicioso sabor, ideal para compartir con tu familia en las mañanas.\r\nPor: $57.', 'https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3693841-1000-1000/7709334797398.jpg?v=637493417100900000', '57.990', 4),
(19, NULL, NULL, 'Alimento Lacteo Alqueria fortificante avengers cuchareable x 12 undd x 95 g c-u', 'Características principales:\r\nElaborado con la mejor calidad de la leche alquería, tiene una textura y cremosidad incomparables. Perfecto para compartir con los que más quieres en cualquier momento del día.', 'https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3505096-1000-1000/7707331406060.jpg?v=637254199068370000', '9.590', 4),
(20, NULL, NULL, 'Bebida Láctea Yox Fresa x 8und.x 100g c-u', 'Características principales:\r\nYox es una bebida láctea con microorganismos que entran a fortalecer la barrera intestinal y el sistema inmunológico.', 'https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3702145-1000-1000/7702001101450.png?v=637503912796200000', '15.390', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'andres', 'andres830525@gmail.com', NULL, '$2y$10$oB8O3tPvP36QPFKNXpd7gOoQRqLxx/32O4/bc.JMIrScftB1Gt1Wi', NULL, '2020-11-15 09:29:32', '2020-11-15 09:29:32'),
(2, 'andres alvarez', 'afa9702@gmail.com', NULL, '$2y$10$Cpof/vrGyY4bKHFljb5D7Ow8gPUPpD1JEsqPEfM/H4y8tT38Lqjd2', NULL, '2021-08-10 01:34:40', '2021-08-10 01:34:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

