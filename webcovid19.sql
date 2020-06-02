-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jun-2020 às 17:16
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `webcovid19`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo_memorial`
--

CREATE TABLE `conteudo_memorial` (
  `cont1_mem` text COLLATE utf8_unicode_ci NOT NULL,
  `cont2_mem` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `conteudo_memorial`
--

INSERT INTO `conteudo_memorial` (`cont1_mem`, `cont2_mem`) VALUES
('Até agora, milhares de pessoas perderam suas famílias.\r\n<br>\r\nSão maridos, esposas, mães, pais, filhos, filhas e muito mais.', 'Apresentamos este trabalho para lembrar os entes queridos de milhares de famílias <br>\r\ne como eles promoveram o progresso social globalmente. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_covid`
--

CREATE TABLE `dados_covid` (
  `id_dados_covid` bigint(20) UNSIGNED NOT NULL,
  `data_dados` date NOT NULL DEFAULT current_timestamp(),
  `mortes_dados` int(11) NOT NULL,
  `confirmados_dados` int(11) NOT NULL,
  `recuperados_dados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `dados_covid`
--

INSERT INTO `dados_covid` (`id_dados_covid`, `data_dados`, `mortes_dados`, `confirmados_dados`, `recuperados_dados`) VALUES
(6, '2020-05-25', 149911, 365213, 22746),
(7, '2020-05-27', 22746, 365214, 22746),
(8, '2020-05-27', 1, 365213, 22746),
(9, '2020-05-27', 2, 365212, 22742),
(10, '2020-05-27', 3, 3, 3),
(11, '2020-05-27', 4, 4, 4),
(12, '2020-05-27', 25598, 411821, 166647),
(13, '2020-05-28', 25599, 411821, 166647),
(14, '2020-05-31', 25598, 411821, 166647),
(15, '2020-05-31', 25598, 411821, 166647),
(16, '2020-05-31', 25590, 411820, 166640),
(17, '2020-05-31', 25590, 411820, 166640);

-- --------------------------------------------------------

--
-- Estrutura da tabela `memorial`
--

CREATE TABLE `memorial` (
  `nome_mem` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `idade_mem` int(11) DEFAULT NULL,
  `frase_mem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_solicitante` varchar(50) NOT NULL,
  `nome_solicitante` varchar(50) NOT NULL,
  `sobrenome_mem` varchar(30) NOT NULL,
  `1analise_2aceito` int(11) NOT NULL DEFAULT 1,
  `id_memorial` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `memorial`
--

INSERT INTO `memorial` (`nome_mem`, `idade_mem`, `frase_mem`, `email_solicitante`, `nome_solicitante`, `sobrenome_mem`, `1analise_2aceito`, `id_memorial`) VALUES
('Abel', 65, 'Não gostava que se preocupassem com ele. Sempre dizia que estava tudo bem.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Teixeira', 2, 1),
('Alcebíades', 65, 'Quando garoto, craque de bola que saiu até no jornal. Adulto, viveu pela e para a família.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Santos', 2, 2),
('Alcides', 76, '\"No escurema do cininho...” dizia ele, o trocador de sílabas.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Branco', 2, 3),
('Aguinaldo', 49, 'Ele foi um homem muito alegre e que gostava de estar sempre com a família.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Miranda', 2, 4),
('Zozima', 85, 'A mulher mais forte e guerreira. A melhor avó do mundo.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Sousa', 2, 5),
('Giucelina', 72, '“Tudo que eu faço é por amor a você”, dizia.;', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Carneiro', 2, 6),
('Justino', 80, 'Amou e seguirá, para sempre, amado.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Pinheiro', 2, 7),
('Lelia', 44, 'Todos os dias, ela ia à casa da mãe e da irmã, para que pudessem tomar café da manhã juntas.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Xavier', 2, 8),
('Letícia ', 65, 'Dentro de seu coração sempre cabia mais um.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Andrade', 2, 9),
('Maria', 90, 'Dona de casa paraibana cujo maior serviço foi amar.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Santos', 2, 10),
('Diogo ', 38, 'Ajudava todo mundo, mesmo sem conhecer.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Andrade', 2, 11),
('Edinaldo', 63, 'Era especialista em brincadeiras e sorrisos.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Santos', 2, 12),
('Zulmira', 87, 'Mesmo não sabendo demonstrar seus sentimentos, ela tinha o coração do tamanho do mundo.', 'amoninawang@gmail.com', 'Maycon Deyvid Brito De Oliveira', 'Sousa', 2, 13),
('Yolanda', 88, 'Uma amada contadora de histórias.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Fernandes', 2, 14),
('Ramon', 43, 'Seu perfume era inebriante. Deixou seu cheiro de saudade.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Santos', 2, 15),
('Regina', 63, 'Mais conhecida como Raimunda , ela dividia seu prato de comida com quem precisasse.', 'amoninawang@gmail.com', 'Maycon Deyvid Brito De Oliveira', 'Silva', 2, 16),
('Roberto', 65, 'Honestidade o define.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Domenes', 2, 17),
('Roberto', 73, 'Tinha tanto amor aos outros, que deixou um tanto de amor para cada um que aqui ficou.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Oliveira', 2, 18),
('Rodrigo', 39, 'Ele era sempre o mais animado em todas as festas.', 'amoninawang@gmail.com', 'Maycon Deyvid Brito De Oliveira', 'Vieira', 2, 19),
('Iracymar', 85, 'Sempre acolheu a todos. Dizia que sua casa era da família e que sempre cabia mais um.', 'amoninawang@gmail.com', 'Maycon Deyvid Brito De Oliveira', 'Ferreira', 2, 20),
('Itamar', 89, 'Cozinheiro do melhor feijão do mundo, se divertia encobrindo as peraltices dos bisnetos.', 'amoninawang@gmail.com', 'Maycon Deyvid Brito De Oliveira', 'Braga', 2, 21),
('Jandyr', 84, 'Dira era tão festeira que suas lembranças estão sendo comemoradas no céu.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Moreira', 2, 22),
('Jerlan', 37, 'Dona de um sorriso contagiante, que transbordava alegria, luz e serenidade.', 'amoninawang@gmail.com', 'Maycon Deyvid Brito De Oliveira', 'Santos', 2, 23),
('João', 80, '“no meu aniversário eu quero uma banda de música tocando na portaria do meu aniversário para todos saberem”', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Matos', 2, 24),
('Joel ', 40, 'Dizia para todos que amava: meu coração gordo ama você!', 'amoninawang@gmail.com', 'Maycon Deyvid Brito De Oliveira', 'Neto', 2, 25),
('Jorléia', 51, 'A querida avó dos \"pururuquinhas\".', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Santos', 2, 26),
('Mara ', 60, 'Conseguia nos encantar com o dom pelas palavras e alegria contagiante.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Fajardo', 2, 27),
('Marcio', 48, 'Sempre preocupado em ajudar o próximo. Era o amor em pessoa.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Trevisan', 2, 28),
('Marcos', 44, 'E quando sobrava tempo, lá ia ele para a praia ou encontrar amigos. Ele era leal ao mar e aos seus.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Alin', 2, 29),
('Marcos', 44, 'E quando sobrava tempo, lá ia ele para a praia ou encontrar amigos. Ele era leal ao mar e aos seus.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Alin', 2, 30),
('Marcos', 56, 'Era militar, mas a leveza era sua marca registrada.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Sobral', 2, 31),
('Maria', 84, 'Comer a farofa de Amélia era o seu programa preferido!', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Lopes', 2, 32),
('Mariluce', 37, 'Respirava cultura, inspirava gerações... Uma pessoa única!', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Gonçalves', 2, 33),
('Maura ', 78, 'Maura gostava de estar rodeada de gente.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Barros', 2, 34),
('Mônica', 59, 'Sempre sorridente.', 'amoninawang@gmail.com', 'Maycon Deyvid Brito De Oliveira', 'Bezerra', 2, 35),
('Neith', 67, 'Vivia cada momento com seus movimentos.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Silva', 2, 36),
('Nilza', 63, 'Reencontrou a filha após 29 anos, seu maior presente.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Milharance', 2, 37),
('Ormenos', 46, 'Tinha um jeito muito peculiar de ser, uma bondade que beirava à inocência.', 'amoninawang@gmail.com', 'Maycon Deyvid Brito De Oliveira', 'Gomes', 2, 38),
('Paulo', 55, '“Ele era gordinho porque seu coração era enorme e não caberia num corpo magrinho”, brinca a sobrinha.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Medeiros', 2, 39),
('Quiteria', 58, '”Mais uma vez o homem aprendeu que nossa salvação é Deus, peço de joelho para curar o mundo inteiro!”', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Araújo', 2, 40),
('Raimundo ', 65, 'Ficaram a alegria, o sorriso e os olhinhos brilhando do porteiro Condomínio Macondo.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Souza', 2, 41),
('Renato', 56, 'Cabeça dura, mas de um coração gigante.', 'amoninawang@gmail.com', 'Maycon Deyvid Brito De Oliveira', 'Azevedo', 2, 42),
('Fredy', 40, '\"Naci un dia de much sol y no pretendo morir sino hasta realizar algo por esta humanidad\"', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Huarhua', 2, 43),
('Geni', 72, 'Defendia seus filhos e netos com unhas e dentes.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Arimura', 2, 44),
('Giucelina ', 72, '“Tudo que eu faço é por amor a você”, dizia.;', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Carneiro', 2, 45),
('Hilda', 82, 'Aniversário e casa cheia eram as suas alegrias.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Silva', 2, 46),
('Idê ', 82, 'Idê foi uma pessoa generosa, não negou ajuda a ninguém que ela percebesse estar com dificuldade.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Rocha', 2, 47),
('Iramar ', 43, 'Para ele, dava pra ser oito e oitenta ao mesmo tempo.', 'amoninawang@gmail.com', 'Maycon Deyvid Brito De Oliveira', 'Oliveira', 2, 48),
('Itamar', 89, 'Cozinheiro do melhor feijão do mundo, se divertia encobrindo as peraltices dos bisnetos.', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Braga', 2, 49),
('Janete', 66, 'Não podia ver alguém distraído que soltava: \"Tá pensando na morte da bezerra?\".', 'amoninawang@gmail.com', 'MARIA JOSE BRITO DE OLIVEIRA', 'Souza', 2, 50),
('', 0, '', '', '', '', 1, 52);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pag_principal`
--

CREATE TABLE `pag_principal` (
  `id_conteudo` bigint(20) UNSIGNED NOT NULL,
  `titulo_conteudo` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conteudo` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pag_principal`
--

INSERT INTO `pag_principal` (`id_conteudo`, `titulo_conteudo`, `conteudo`) VALUES
(1, 'O que é COVID-19', 'A COVID-19 é uma doença causada pelo coronavírus SARS-CoV-2, que apresenta um quadro \r\nclínico que varia de infecções assintomáticas a quadros respiratórios graves. \r\n<br>\r\nDe acordo com a Organização Mundial de Saúde (OMS), a maioria dos pacientes com COVID-19 (cerca de 80%)\r\npodem ser assintomáticos e cerca de 20% dos casos podem requerer atendimento hospitalar por \r\napresentarem dificuldade respiratória e desses casos aproximadamente 5% podem necessitar de\r\nsuporte para o tratamento de insuficiência respiratória (suporte ventilatório)'),
(2, 'O que é o coronavírus?', 'Coronavírus é uma família de vírus que causam infecções respiratórias. O novo agente do coronavírus\r\nfoi descoberto em 31/12/19 após casos registrados na China. Provoca a doença chamada de coronavírus \r\n(COVID-19). Os primeiros coronavírus humanos foram isolados pela primeira vez em 1937. No entanto, \r\nfoi em 1965 que o vírus foi descrito como coronavírus, em decorrência do perfil na microscopia,\r\nparecendo uma coroa.A maioria das pessoas se infecta com os coronavírus comuns ao longo da vida, sendo \r\nas crianças pequenas mais propensas a se infectarem com o tipo mais comum do vírus. Os coronavírus mais \r\ncomuns que infectam humanos são o alpha coronavírus 229E e NL63 e beta coronavírus OC43, HKU1.'),
(3, 'Quais são os sintomas', 'Os sintomas da COVID-19 podem variar de um simples resfriado até uma pneumonia severa.\r\nSendo os sintomas mais comuns:\r\n<br>\r\n▹ Tosse <br>\r\n▹ Febre <br>\r\n▹ Coriza <br>\r\n▹ Dor de garganta <br>\r\n▹ Dificuldade para respirar <br>'),
(4, 'Como é transmitido', 'A transmissão acontece de uma pessoa doente para outra ou por contato próximo por meio de: \r\n<br>\r\n▹ Toque do aperto de mão <br>\r\n▹ Gotículas de saliva <br>\r\n▹ Espirro <br>\r\n▹ Tosse <br>\r\n▹ Catarro <br>\r\n▹ Objetos ou superfícies contaminadas, como celulares, mesas, maçanetas, brinquedos, \r\nteclados de computador etc.'),
(5, 'Diagnóstico', 'O diagnóstico da COVID-19 é realizado primeiramente pelo profissional de saúde que deve avaliar a\r\npresença de critérios clínicos: Pessoa com quadro respiratório agudo, caracterizado por sensação \r\nfebril ou febre, que pode ou não estar presente na hora da consulta (podendo ser relatada ao \r\nprofissional de saúde), acompanhada de tosse OU dor de garganta OU coriza OU dificuldade respiratória,\r\no que é chamado de Síndrome Gripal. Pessoa com desconforto respiratório/dificuldade para respirar OU\r\npressão persistente no tórax OU saturação de oxigênio menor do que 95% em ar ambiente OU coloração \r\nazulada dos lábios ou rosto, o que é chamado de Síndrome Respiratória Aguda Grave\r\nCaso o paciente apresente os sintomas, o profissional de saúde poderá solicitar exame laboratoriais:\r\nDe biologia molecular (RT-PCR em tempo real) que diagnostica tanto a COVID-19, a Influenza ou a presença \r\ne Vírus Sincicial Respiratório (VSR).\r\nImunológico (teste rápido) que detecta, ou não, a presença de anticorpos em amostras coletadas somente \r\napós o sétimo dia de início dos sintomas.\r\nO diagnóstico da COVID-19 também pode ser realizado a partir de critérios como: histórico de contato \r\npróximo ou domiciliar, nos últimos 7 dias antes do aparecimento dos sintomas, com caso confirmado \r\nlaboratorialmente para COVID-19 e para o qual não foi possível realizar a investigação laboratorial \r\nespecífica, também observados pelo profissional durante a consulta.'),
(6, 'Como se proteger', 'As recomendações de prevenção à COVID-19 são as seguintes:\r\n <br>\r\n▹ Lave com frequência as mãos até a altura dos punhos, com água e sabão, ou então higienize com álcool em gel 70%. <br>\r\n▹ Ao tossir ou espirrar, cubra nariz e boca com lenço ou com o braço, e não com as mãos. <br>\r\n▹ Evite tocar olhos, nariz e boca com as mãos não lavadas. <br>\r\n▹ Ao tocar, lave sempre as mãos como já indicado. <br>\r\n▹ Mantenha uma distância mínima de cerca de 2 metros de qualquer pessoa tossindo ou espirrando. <br>\r\n▹ Evite abraços, beijos e apertos de mãos. Adote um comportamento amigável sem contato físico, mas sempre com um sorriso no rosto. <br>\r\n▹ Higienize com frequência o celular e os brinquedos das crianças. <br>\r\n▹ Não compartilhe objetos de uso pessoal, como talheres, toalhas, pratos e copos. <br>\r\n▹ Mantenha os ambientes limpos e bem ventilados. <br>\r\n▹ Evite circulação desnecessária nas ruas, estádios, teatros, shoppings, shows, cinemas e igrejas. Se puder, fique em casa. <br>\r\n▹ Se estiver doente, evite contato físico com outras pessoas, principalmente idosos e doentes crônicos, e fique em casa até melhorar. <br>\r\n▹ Durma bem e tenha uma alimentação saudável. <br>\r\n▹ Utilize máscaras caseiras ou artesanais feitas de tecido em situações de saída de sua residência. <br>');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados_covid`
--
ALTER TABLE `dados_covid`
  ADD PRIMARY KEY (`id_dados_covid`),
  ADD UNIQUE KEY `id_dados_covid` (`id_dados_covid`);

--
-- Índices para tabela `memorial`
--
ALTER TABLE `memorial`
  ADD PRIMARY KEY (`id_memorial`),
  ADD UNIQUE KEY `id_memorial` (`id_memorial`);

--
-- Índices para tabela `pag_principal`
--
ALTER TABLE `pag_principal`
  ADD PRIMARY KEY (`id_conteudo`),
  ADD UNIQUE KEY `id_conteudo` (`id_conteudo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_covid`
--
ALTER TABLE `dados_covid`
  MODIFY `id_dados_covid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `memorial`
--
ALTER TABLE `memorial`
  MODIFY `id_memorial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `pag_principal`
--
ALTER TABLE `pag_principal`
  MODIFY `id_conteudo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
