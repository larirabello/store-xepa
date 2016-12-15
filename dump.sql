-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Dez-2016 às 02:32
-- Versão do servidor: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fatec`
--
CREATE DATABASE IF NOT EXISTS `fatec` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `fatec`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci,
  `price` float NOT NULL,
  `file` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `file`, `type`) VALUES
(1, 'Maça', 'maçç', 9.5, '', 'Verduras'),
(2, 'ManjericÃ£o l', 'O manjericÃ£o Ã© renomado ingrediente da culinÃ¡ria. VocÃª gostaria de fazer sua pizza ou sua salada exalar um aroma e ter um sabor diferente e intrigante? O manjericÃ£o se responsabiliza por essa tarefa. Ele Ã© o "rei das ervas", de acordo com o que afirmam diversos autores de culinÃ¡ria, entÃ£o nÃ£o o ignore. O manjericÃ£o geralmente Ã© utilizado fresco e adicionado no Ãºltimo momento da cocÃ§Ã£o, para preservar seu sabor.', 2.29, '', 'Verduras'),
(3, 'Framboesas a', 'O nosso cultivo resulta em framboesas especialmente doces e com um sabor levemente adstringente. Essa fruta silvestre Ã© um sabor maravilhoso para acrescentar a sua refeiÃ§Ã£o refrescante no verÃ£o. Elas ficam perfeitas em Smoothies, panquecas ou Ã  velha moda: puras como um lanche. Aprecie!', 10.98, 'img3.jpeg', 'Verduras'),
(4, 'Pêssegos', 'Nossos pêssegos são extremamente doces para saborear, com sua macia e fina casca. O cultivar particular dessa fruta resulta em baixa acidez, o que a candidata a uma das frutas mais refrescantes e suculentas da sua cesta de frutas.', 7.99, 'img4.jpeg', 'Fruta'),
(5, 'Espinafre', 'Caloria por caloria, vegetais frondosos como o espinafre com sua textura delicada e cor verde jade trazem mais nutrientes que quaisquer outros alimentos. O espinafre têm a amargura das folhas de beterraba e o sabor levemente salgado da acelga, o que o torna delicioso como uma base de sopa, numa torta, ou apenas cozido ao estilo Popeye!', 4.25, 'img5.jpeg', 'Verdura'),
(6, 'Uvas Thompson', 'As uvas Thompson são as uvas mais populares sem semente do mundo. Elas têm um refrescante e perfeito sabor doce. O melhor é que elas podem ser servidas sozinhas como uma bela sobremesa, ou compor uma maravilhosa salada de frutas com outras frutas da época.', 6.05, 'img6.jpeg', 'Fruta'),
(7, 'Rabanetes', 'Nossos rabanetes são crocantes o suficiente e trazem o frescor perfeito para saladas, mas eles também podem aparecer em outros pratos. Às vezes, os rabanetes são utilizados em pratos picantes ou salteados. Você pode também encontrá-los misturados a frutas compondo sucos saudáveis.', 2.49, 'img7.jpeg', 'Legume'),
(8, 'Tomates', ' Nossos tomates são notados por sua suculência, alto teor de açúcar e baixa acidez. Esses tomates são de um vermelho intenso e maiores que os tomates cereja, mas menores que um tomate comum. Essas variedade de tomate também é um ingrediente curinga nas cozinhas e pode ser usado cru, em saladas, aperitivos e outros pratos.', 7, 'img8.jpeg', 'Fruta'),
(9, 'Pimentão Vermelho', 'Pimentões vermelhos são uma rica fonte de antioxidantes e vitamina C. Seu nível de caroteno, como o licopeno, é nove vezes maior que o normal em outras variedades de pimentas. Eles ainda são duas vezes mais ricos em vitaminas C que os pimentões verdes.', 5.04, 'img9.jpeg', 'Legume'),
(10, 'Maçãs Verdes', 'As maçãs verdes já são um cultivo conhecido e amado por nossos consumidores por seu sabor muito doce. As maçãs verdes são nossas frutas favoritas para uma salada, molho de maçãs, e purê de maçãs. Nós também concordamos que essa maçã é um importante constituinte de sobremesas, por que elas continuam lindas mesmo após cozidas.', 11.78, 'img10.jpeg', 'Fruta'),
(11, 'Ameixas', 'Ameixas são muito populares na época de celebrações. A principal característica dessas é o seu sabor rico. Ela é rica em açúcar mas também é altamente adstringente. Esse fruto é sabiamente utilizado na cozinha em compotas e geléias.', 3.89, 'img11.jpeg', 'Fruta'),
(12, 'Tomates Cereja', 'Esses tomatinhos apenas serão os tomates mais doces e pequenos que você já provou. Isso tudo graças ao clima perfeito da estação. Muito pequenos, firmes e suculentos, são uma boa escolha quando você procura por uma opção fresca e nutritiva para um lanche.', 8.23, 'img12.jpeg', 'Fruta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `nome`, `tipo`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
