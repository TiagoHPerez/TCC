-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/10/2024 às 04:42
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formchefe`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ingredientes` text NOT NULL,
  `preparo` text NOT NULL,
  `obs` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `products`
--

INSERT INTO `products` (`id`, `name`, `ingredientes`, `preparo`, `obs`, `image`) VALUES
(40, 'Gatinho Gominola', '1 gato gominolo 2 gatos gominolos', 'assar o gato gominolo em temperaturas elevadas para ele ficar queimado', 'Um belo gato gominolo que serve até 1 pessoa', 'imagem_2024-05-10_232249646-removebg-preview.png'),
(43, 'a', 'b', 'c', 'e', 'imagem_2024-10-08_203051428.png'),
(44, 'Aniquilação total da vida inferior', 'gás mostarda', 'espalhe gentilmente o gás mostarda por toda uma área determinada e aguarde seus efeitos.', 'como matar todos os mosquitos de uma maneira simples e rápida! ;)', 'imagem_2024-10-06_171337557.png'),
(47, 'Alien gato a milanesa', 'alien, gato e 1/2 colheres de milanesa', 'misture o alien e o gato, asse no forno por 30 minutos a 180 graus e jogue a milanesa', 'gato a milanesa delicioso', 'album_2024-06-08_22-41-33.png'),
(48, 'comida de lanchonete', 'lanchonete', 'pede pra garçonete', 'comida de lanchonete facil e rapido e baratete', 'imagem_2024-10-08_203148044.png'),
(50, 'Bolo Simples', '2 xícaras (chá) de açúcar farinha de trigo 3 xícaras (chá) de farinha de trigo margarina 4 colheres (sopa) de margarina ovo 3 ovos leite 1 e 1/2 xícara (chá) de leite fermento em pó químico 1 colher (sopa) bem cheia de fermento em pó', '1 Bata as claras em neve e reserve.  2 Misture as gemas, a margarina e o açúcar até obter uma massa homogênea.  3 Acrescente o leite e a farinha de trigo aos poucos, sem parar de bater.  4 Por último, adicione as claras em neve e o fermento.  5 Despeje a massa em uma forma grande de furo central untada e enfarinhada.  6 Asse em forno médio 180 °C, preaquecido, por aproximadamente 40 minutos ou ao furar o bolo com um garfo, este saia limpo.', 'Um bolo simples fofinho e quentinho com uma xícara de café pode ser tudo o que você precisa numa tarde chuvosa. E essa aqui é a receita que pode dar isso para você. Essa receita é bem simples e não leva muitos ingredientes. A massa branca pode ser usada com aa a a a a a a  a asyuibwefuybfweua fahuyfbawuyhfaw fyuawfbwofyuafbawyh bfaw', 'imagem_2024-10-08_205257112.png'),
(53, 'batata frita', '1 gato gominolo', 'assar o gato gominolo em temperaturas elevadas para ele ficar queimado', 'a', '1000_F_707782560_xUQ9VvZ4vlA6hzHul4eWeM5iwNZr9qQr-removebg-preview.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `fullnome` varchar(110) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `adm` varchar(3) NOT NULL DEFAULT 'Não'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `fullnome`, `usuario`, `senha`, `adm`) VALUES
(6, 'q', 'q', 'q', 'Sim'),
(7, 'tiago henrique perez', 'tagostoso', 'tiago', 'Não'),
(9, 'juninho', 'juninhogameplay', '123', 'Sim');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
