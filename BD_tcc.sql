-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Dez-2019 às 18:49
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `passoapasso`
--

CREATE TABLE `passoapasso` (
  `id_pergunta` int(11) NOT NULL,
  `pergunta` text CHARACTER SET utf8 COLLATE utf8_esperanto_ci NOT NULL,
  `respostasim` int(11) NOT NULL,
  `respostanao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `passoapasso`
--

INSERT INTO `passoapasso` (`id_pergunta`, `pergunta`, `respostasim`, `respostanao`) VALUES
(2, 'Em primeiro momento informe se houve algum tipo de evento externo que pode ter gerado este problema, por exemplo, queda de energia, sobretensao, descarga eletrica, voltagem incorreta, queda do equipamento e etc.', 11, 3),
(3, 'Remova todos perifericos do equipamento (pendrive, monitor externo, impressora, teclado/mouse, etc) SE o problema foi solucionado, coloque os perifericos um de cada vez e teste qual item esta provocando o erro.\r\nProblema foi resolvido?', 14, 4),
(4, 'Tente ligar o equipamento pela sequencia de teclas Fn + Botao Liga/Desliga ou D + Botao Liga/desliga.\r\nHouve alguma alteraçao? ', 9, 5),
(5, 'Retire o cabo AC Adapter (carregador) da tomada e desconecte do equipamento. Apos isto, remova a bateria do equipamento. Pressione o botao LIGAR durante 30 segundos. Em seguida, reconecte o cabo de energia e teste ligar novamente.\r\nO equipamento ligou?', 13, 6),
(6, 'Examine o estado geral do carregador. Verifique se esta completamente integro, se nao ha pino torto, conector quebrado, fio exposto, etc.\r\nHa algum dano no carregador?', 11, 7),
(7, 'Neste momento iremos validar se ha algum problema no Botao Ligar/Desligar.\r\nCom o equipamento desligado da energia (sem carregador e bateria) pressione a tecla “End” e mantenha pressionada. Com a tecla ainda pressionada insira o conector do Carregador no equipamento e observe se ira ligar.\r\nO equipamento ligou?', 12, 8),
(8, 'Com o equipamento desligado da energia (sem carregador e bateria) pressione a tecla “Ctrl + Esc” e mantenha pressionada.\r\nCom as teclas ainda pressionadas insira o conector do Carregador.\r\nO equipamento ligou?', 11, 9),
(9, 'A partir deste momento voce precisara ser instruido por um tecnico do Suporte LLED. Possivelmente sera necessario a troca de algum componente.\r\nAguarde o contato do tecnico dentro de 24 horas uteis.\r\nSelecione a opção SIM e em seguida SALVAR PROTOCOLO.', 10, 10),
(10, 'FIm', 0, 9),
(11, 'Neste caso, de fato sera necessario que o Suporte Tecnico da LLED analise a situacao para verificar qual a melhor solucao. Todas informacoes selecionadas neste passo a passo serao verificadas pelo Suporte. Em ate 24 horas (uteis) entrarao em contato para dar seguimento a tratativa.\r\n\r\nSelecione a opcao SIM e em seguida SALVAR PROTOCOLO.', 10, 10),
(12, 'Provavelmente sera necessario trocar o botao LIGA/DESLIGA do equipamento ou possui algum mal contato. Neste caso o protocolo sera encaminhado para o setor tacnico para analise do caso. \r\n\r\nSelecione a opcao sim e aguarde o contato do tecnico.\r\n', 10, 10),
(13, 'Neste caso a drenagem de energia solucionou o problema. Caso venha ocorrer o problema novamente aconselhamos entrar em contato com o 0800. \r\nSelecione a opção SIM abaixo para encerrar e depois em SALVAR PROTOCOLO.\r\n', 10, 10),
(14, 'Agradecemos por ter acessado nosso Guia de Suporte. Esperamos ter ajudado da melhor maneira possivel. Caso tenha alguma duvida ainda pendente, entre em contato com nosso 0800.\r\n\r\nSelecione a opcao SIM abaixo e em seguida SALVAR PROTOCOLO. ', 10, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolo`
--

CREATE TABLE `protocolo` (
  `id_protocolo` int(9) NOT NULL,
  `nome_cliente` varchar(30) NOT NULL,
  `telefone_cliente` varchar(11) NOT NULL,
  `email_cliente` varchar(40) NOT NULL,
  `passos` text NOT NULL,
  `ID_tag` varchar(7) NOT NULL,
  `problema` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `protocolo`
--

INSERT INTO `protocolo` (`id_protocolo`, `nome_cliente`, `telefone_cliente`, `email_cliente`, `passos`, `ID_tag`, `problema`) VALUES
(1, 'ERICLES DE ARAUJO BOANOVA', '5198716187', 'ericlesboa1996@gmail.com', '2', 'ERI1234', 'Nao esta ligando'),
(5, 'ERICLES DE ARAUJO BOANOVA', '5198716187', 'ericlesboa1996@gmail.com', '', 'ERI1234', 'No Power'),
(6, 'ERICLES DE ARAUJO BOANOVA', '5198716187', 'ericlesboa1996@gmail.com', '', 'ERI1234', 'No Power'),
(7, 'ERICLES DE ARAUJO BOANOVA', '5198716187', 'ericlesboa1996@gmail.com', '', 'ERI1234', 'No Power'),
(8, 'ERICLES DE ARAUJO BOANOVA', '5198716187', 'ericlesboa1996@gmail.com', '', 'ERI1234', 'No Power'),
(9, 'ERICLES DE ARAUJO BOANOVA', '5198716187', 'ericlesboa1996@gmail.com', '', 'ERI1234', 'Nao liga'),
(10, 'Avenor Boanova', '5198716587', 'a.boanova@bol.com.br', '', 'AVE2272', 'Windows lento'),
(11, 'Julia Oliveira dos Santos', '998716187', 'juoliveiradossantos@gmail.com', '2', 'ERI1234', 'Parou de ligar'),
(12, 'asasdfs', '654654', 'asdfae', '', 'ERI1234', 'No Power'),
(13, 'ERICLES DE ARAUJO BOANOVA', '5198716187', 'ericlesboa1996@gmail.com', '', 'ERI1234', 'Nao ta ligando a bagaÃ§a'),
(14, 'ERICLES DE ARAUJO BOANOVA', '5198716187', 'ericlesboa1996@gmail.com', '', 'ERI1234', 'Nao ta ligando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicetag`
--

CREATE TABLE `servicetag` (
  `ID_tag` varchar(7) CHARACTER SET latin1 NOT NULL,
  `config` text CHARACTER SET latin1 NOT NULL,
  `data_fabricacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `servicetag`
--

INSERT INTO `servicetag` (`ID_tag`, `config`, `data_fabricacao`) VALUES
('AVE2272', 'Notebook das galaxia\r\nProcessador Intel Core i9\r\nArmazenamento 2TB + 512SSD\r\nMemoria 32GB\r\nPlaca de Video 16GB Nvidia\r\nSO Windows 10 Home\r\n', '2019-09-03'),
('ERI1234', 'Modelo Desktop Gamer\r\nProcessador Intel Core i7\r\nArmazenamento 1TB + 256 SSD\r\nMemoria 16GB\r\nPlaca de Video Geforce RTX 2080 Ti\r\nWindows 10 home', '2019-09-02'),
('IJ89PO', 'Modelo: Notebook Saturno\r\nProcessador: Intel Core i5\r\nMemória: 8GB\r\nArmazenamento: 1TB + 128 SSD\r\nWindows 10 Home', '2019-08-09'),
('SIL2177', 'Desktop Mercurio\r\n\r\nMemoria 16GB\r\nArmazenamento 2TB + 256 SSD\r\nProcessador Intel Core i9\r\nPlaca de Video GTX 1060 6GB\r\nWindows 10 Pro\r\n\r\n ', '2019-09-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passoapasso`
--
ALTER TABLE `passoapasso`
  ADD PRIMARY KEY (`id_pergunta`);

--
-- Indexes for table `protocolo`
--
ALTER TABLE `protocolo`
  ADD PRIMARY KEY (`id_protocolo`),
  ADD KEY `ID_tag_fk` (`ID_tag`) USING BTREE;

--
-- Indexes for table `servicetag`
--
ALTER TABLE `servicetag`
  ADD PRIMARY KEY (`ID_tag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passoapasso`
--
ALTER TABLE `passoapasso`
  MODIFY `id_pergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `protocolo`
--
ALTER TABLE `protocolo`
  MODIFY `id_protocolo` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `protocolo`
--
ALTER TABLE `protocolo`
  ADD CONSTRAINT `fk_tag` FOREIGN KEY (`ID_tag`) REFERENCES `servicetag` (`ID_tag`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
