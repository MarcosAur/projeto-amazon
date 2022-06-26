-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jun-2022 às 00:26
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clientes-teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `id_produto`, `subtotal`, `quantidade`) VALUES
(58, 20, '359.00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `login`, `senha`, `email`) VALUES
(2, 'nrd', '123', 'marcosaureliomendesoliveira@gmail.com'),
(12, 'teste', '123', 'teste@gmail.com'),
(13, 'teste', '123', 'teste@gmail.com'),
(15, 'deucerto', '123', 'deucerto@gmail.com'),
(16, 'deucerto1', '123', 'deucerto1@gmail.com'),
(17, 'deucerto2', '123', 'deucerto2'),
(18, 'deucerto3', '123', 'deucerto32gmail.com'),
(19, 'deucerto10', '123', 'deucerto10@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `produtos` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`id`, `id_cliente`, `data`, `produtos`) VALUES
(1, 2, '0000-00-00 00:00:00', 'Fire TV Stick\n'),
(2, 2, '0000-00-00 00:00:00', 'Fire TV Stick\n'),
(3, 2, '0000-00-00 00:00:00', 'Fire TV Stick\n'),
(4, 2, '0000-00-00 00:00:00', 'Fire TV Stick\n'),
(5, 2, '0000-00-00 00:00:00', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\n'),
(6, 2, '0000-00-00 00:00:00', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\n'),
(7, 2, '0000-00-00 00:00:00', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\n'),
(8, 2, '0000-00-00 00:00:00', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\n'),
(9, 2, '0000-00-00 00:00:00', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\n'),
(10, 2, '0000-00-00 00:00:00', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\nEcho Buds\n'),
(11, 2, '0000-00-00 00:00:00', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\nEcho Buds\n'),
(12, 2, '0000-00-00 00:00:00', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\nEcho Buds\n'),
(13, 2, '0000-00-00 00:00:00', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\nEcho Buds\n'),
(14, 2, '0000-00-00 00:00:00', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\nEcho Buds\n'),
(15, 2, '2022-06-26 19:10:56', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\nEcho Buds\n'),
(16, 2, '2022-06-26 19:11:52', 'Fire TV Stick\nHarry Potter e o prisioneiro de Azkaban\nEcho Buds\n'),
(17, 2, '2022-06-26 19:12:25', ''),
(18, 2, '2022-06-26 19:12:46', 'Echo Studio\n'),
(19, 2, '2022-06-26 19:13:01', ''),
(20, 2, '2022-06-26 19:13:14', ''),
(21, 2, '2022-06-26 19:14:09', ''),
(22, 2, '2022-06-26 19:14:11', ''),
(23, 2, '2022-06-26 19:14:25', ''),
(24, 2, '2022-06-26 19:15:17', 'Fire TV Stick\nEcho Dot (4ª Geração)\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `descricao`, `valor`, `img`) VALUES
(19, 'Fire TV Stick', 'Fire TV com Alexa: aproveite streaming rápido e em Full HD. Vem com o novo Controle Remoto Lite por Voz com Alexa (sem controles de TV).', '236.55', 'https://m.media-amazon.com/images/I/61rK6en2IdL._AC_SX679_.jpg'),
(20, 'Echo Dot (4ª Geração)', 'Controle músicas apenas com sua voz. Ouça músicas do Amazon Music, Apple Music, Spotify, Deezer e outros, por toda a sua casa com o recurso multi ambiente', '359.00', 'https://m.media-amazon.com/images/I/61gufBsGK7L._AC_SL1000_.jpg'),
(21, 'Echo Show 5', 'Defina alarmes e timers, cheque seu calendário ou as notícias, faça chamadas de vídeo com a câmera de 2 MP para amigos e familiares que tenham o aplicativo Alexa', '999.00', 'https://m.media-amazon.com/images/I/71C+1YtQkrL._AC_SY355_.jpg'),
(22, 'Echo Buds', 'Áudio dinâmico e cancelamento de ruído ativo (ANC): os speakers premium oferecem um som nítido e equilibrado. O design intra-auricular de encaixe firme e o ANC limitam o ruído de fundo.', '164.90', 'https://m.media-amazon.com/images/I/61mezkgozjL._AC_SY355_.jpg'),
(23, 'Echo Studio', 'Som imersivo: 5 alto-falantes que produzem graves potentes, mid-range dinâmico e agudos nítidos. A tecnologia Dolby Atmos proporciona percepção de espaço, clareza e profundidade.', '1614.05', 'https://m.media-amazon.com/images/I/61lIhZlkROL._AC_SY355_.jpg'),
(24, 'Echo Show 10', 'Desenvolvido para se mover com você: com um display HD de 10,1\" que se move automaticamente, as chamadas de vídeo, as receitas e os filmes e séries estarão sempre à vista', '1804.05', 'https://m.media-amazon.com/images/I/61B62jqg+7L._AC_SY355_.jpg'),
(25, 'Harry Potter e o prisioneiro de Azkaban', 'As aulas estão de volta à Hogwarts e Harry Potter não vê a hora de embarcar no expresso a vapor que o levará de volta à escola de bruxaria. Mais uma vez suas férias na rua dos Alfeneiros foi triste e solitária.', '41.00', 'https://images-na.ssl-images-amazon.com/images/I/81u+ljPVifL.jpg'),
(26, 'Harry Potter e o enigma do príncipe', 'Voldemort e dos Comensais da Morte, seus seguidores, cresce mais a cada dia, em meio à batalha entre o bem e o mal. A onda de terror provocada pelo Lorde das Trevas estaria afetando, até mesmo, o mundo dos trouxas', '48.90', 'https://images-na.ssl-images-amazon.com/images/I/81yFIh1yoZL.jpg'),
(27, 'Harry Potter e as relíquias da morte', 'Harry Potter e as relíquias da morte, de J.K. Rowling, é o sétimo e último livro da série. Voldemorte está cada vez mais forte e Harry Potter precisa encontrar e aniquilar as Horcruxes para enfraquecer-lo e poder enfrentálo.', '30.00', 'https://images-na.ssl-images-amazon.com/images/I/81rvO7xcJOL.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
