-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 09-Set-2019 às 18:19
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10107606_dc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `palavras`
--

CREATE TABLE `palavras` (
  `id` int(11) NOT NULL,
  `palavra` text NOT NULL,
  `classe` text NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `palavras`
--

INSERT INTO `palavras` (`id`, `palavra`, `classe`, `descricao`) VALUES
(1, 'abrasonar', 'vtd', 'Conceder brasão a\r\nPôr brasão em'),
(2, 'acervar', 'vtd', 'Juntar, amontoar\r\nInventariar'),
(3, 'adágio', 'sm', 'Sentença de cunho moral; provérbio; ditado'),
(4, 'adelgaçar', 'vtd', 'Tornar-se mais fino, mais delgado\r\nFazer ficar mais magro para ganhar eficiência em relação à força'),
(5, 'afiançar', 'vtd - vtdi', 'Afirmar que algo é certo; afirmar\r\nGarantir alguma coisa a alguém\r\nTestemunhar\r\nPassar a ter responsabilidade por; ser fiador; abonar; avalizar\r\nPagar ou prestar fiança de'),
(6, 'alcovitar', 'vtd', 'Ajudar como intermediário em relação amorosa\r\nFazer intrigas; mexericar'),
(7, 'almocreve', 'sm', 'Condutor de bestas de carga; muleiro; arrieiro'),
(8, 'ambiência', 'sf', 'Meio físico ou moral em que se vive.\r\nConjunto de condições de um meio ambiente que influencia o comportamento de quem nele vive.\r\n'),
(9, 'aniagem', 'sf', 'Tecido ordinário de fibra vegetal (juta, linho cru etc.), us. para confeccionar fardos e sacos.\r\n\r\n'),
(10, 'apanágio', 'sm', 'Característica particular (de alguém ou algo); atributo, condição: As doenças são o apanágio da velhice.\r\nVantagem que se concede a uma pessoa ou grupo, em detrimento da maioria; privilégio; regalia.\r\nJur. Pensão oriunda do rendimento dos bens deixados pelo cônjuge falecido, à qual tem direito o cônjuge vivo.\r\n\r\n\r\n\r\n\r\n'),
(11, 'aporia', 'sf', 'Fil. Dificuldade de escolher entre duas opiniões igualmente racionais, mas contrárias.\r\nRet. Dúvida, figura pela qual o orador parece hesitar acerca do que há de dizer.\r\n\r\n\r\n'),
(12, 'areópago', 'sm', 'Hist. Supremo tribunal de justiça de Atenas, célebre pela retidão e imparcialidade; reunia-se na colina de Ares.\r\nP.ext. Reunião de magistrados, sábios, cientistas.\r\nP.ext. Toda assembleia, tribunal etc. respeitados pela justiça e probidade de seu julgamento.'),
(13, 'ascetismo', 'sm', 'Prática da ascese para alcançar elevação espiritual.\r\nMoral fundada no desprezo do corpo e das sensações físicas.'),
(14, 'atavio', 'sm', 'Ação ou resultado de ataviar(-se); o mesmo que ataviamento.\r\nAdorno, enfeite; o que serve para adornar, ataviar, enfeitar.'),
(15, 'atávico', 'adj', 'Referente a atavismo.\r\n\r\nQue se transmite, adquire, produz ou manifesta por atavismo'),
(16, 'atavismo', 'sm', 'Biol. Reaparecimento, no ser animal ou vegetal, de caracteres genéticos (características naturais, físicas, psicológicas, intelectuais, comportamentais etc.) não presentes em seus ascendentes imediatos, mas sim em ascendentes remotos, e que haviam ficado latente ao longo de gerações [tb. denomin. herança ou hereditariedade ancestral ou reversão.]\r\nFig. Suposta transmissão hereditária de habilidades, comportamentos, características intelectuais ou psicológicas etc.\r\nLit. Retorno a um estilo, enfoque etc. (atavismo ficcional) [A\"reversão a um tipo anterior\"tem sido, durante séculos, tema recorrente da literatura.]\r\n'),
(17, 'ataviar', 'vtd', 'Pôr atavios, enfeites em; ornamentar.\r\nP.ext. Vestir-se com gosto.'),
(18, 'azo', 'sm', 'Ocasião motivo; ensejo; oportunidade'),
(19, 'beatífico', 'adj', 'Que propicia bem-aventurança celeste.\r\nQue propicia felicidade, êxtase, ou diz-se do sentimento que deles resulta.'),
(20, 'borderô', 'sm', 'Cont. Relação detalhada das operações financeiras e comerciais referente a um evento ou um período.\r\nRol completo dos títulos remetidos a um banco para cobrança, desconto ou caução.'),
(21, 'cambiante', 'adj', 'Que passa por mudanças, variações; que cambia.'),
(22, 'caritativo', 'adj', 'Que tem ou demonstra caridade; caridoso.'),
(23, 'caterva', 'sf', 'Grande quantidade de pessoas, animais ou coisas.\r\nGrupo de pessoas de má índole ou de mau comportamento; corja; malta.'),
(25, 'fleumático', 'adj', 'Pachorrento; impassível; imperturbável.'),
(26, 'fumarento', 'adj', 'Fumacento.'),
(27, 'gadanha', 'sf', 'Foice com cabo longo para cortar feno.'),
(28, 'granizar', 'v', 'Chover granizo.\r\nDar forma de grão a.'),
(29, 'hausto', 'sm', 'Ação de haurir.\r\nGole ingerido de uma vez.\r\nAspiração forte, longa ou profunda. Sorvo'),
(30, 'haurir', 'vtd', 'Retirar alguma coisa de dentro de onde estava.\r\nConsumir ou gastar algo completamente; ESGOTAR: Hauriu toda a bebida que havia na adega.\r\nAbsorver por aspiração ou sucção; sorver.'),
(31, 'hiante', 'adj', 'Que tem fenda ou buraco de grande tamanho; fendido.\r\nFig. Que está faminto, cheio de apetite.'),
(32, 'hórrido', 'adj', 'Horrendo.'),
(33, 'absconso', 'adj', 'Que está oculto, escondido; abscôndito; esconso.\r\nDifícil de compreender (linguagem absconsa); OBSCURO [Antôn.: claro, inteligível]'),
(34, 'acosso', 'sm', 'Ato de acossar; perseguição.'),
(35, 'adensar', 'vtd', 'Tornar mais denso.'),
(36, 'adernar', 'vi ou vtd', 'Inclinar-se (geralmente embarcação)para um dos lados.'),
(37, 'afresco', 'sm', 'Obra feita com técnica de pintura em parede ou teto em que se aplica a tinta diluída em água sobre revestimento ainda fresco e úmido.'),
(38, 'alfarrabista', 'sm', 'Pessoa ou empresa que vende livros usados; sebo.'),
(39, 'alvissareiro', 'adj', 'Que dá esperança; auspicioso; promissor.\r\nQue dá ou promete boas notícias.\r\nPortador de boas notícias.'),
(40, 'anatocismo', 'sm', 'Capitalização de juros de quantia emprestada.\r\n'),
(41, 'antinomia', 'sf', 'Contradição entre leis, princípios ou doutrinas.\r\nP.ext. Qualquer contradição: \"(...) o amor romântico está vivendo o seu canto do cisne. Está vivendo a antinomia que o inviabiliza(...)\" (Jurandir Freire Costa, Ética versus moralidade))\r\nFil. Contradição entre duas proposições apresentadas com lógica, coerência e rigor, mas que chegam a conclusões opostas; oposição.\r\nFil. Afirmação que colide com sistemas ou pressupostos antes considerados indiscutíveis; paradoxo.'),
(42, 'crível', 'adj', 'Em que se pode crer; acreditável; verossímil.'),
(43, 'crisol', 'sm', 'Quím. Recipiente de material metálico ou refratário us. em experiências químicas; cadinho.\r\nFig. Aquilo que serve para experimentar e comprovar as boas qualidades de algo ou alguém.\r\nFig. P.ext. Circunstância ou lugar adequados a que se revelem e apurem sentimentos.\r\nTip. Recipiente em que se derrete o chumbo para a fundição das linhas do linotipo.\r\n\r\n'),
(44, 'sicofanta', 'sm', 'Delator; impostor; caluniador; patife.'),
(45, 'Sicário', 'sm', 'Assassino contratado; matador; pistoleiro.'),
(46, 'Sinecura', 'sf', 'Emprego ou lugar rendoso que não obriga a funções algumas ou que não dá trabalho algum à pessoa que o desfruta.\r\n(P. ext.) Emprego rendoso e de pouco trabalho. \r\n(Fig.) Emprego cujas. f..unções não se exercem.'),
(47, 'Súplice', 'adj', 'Que suplica; suplicante.\r\nHumilde; prostrado.'),
(48, 'surdir', 'v', 'Brotar, jorrar ou emergir da água [ta. : A água voltou a surdir da fonte] [int.: Cavou um pouco,esperando que a água surdisse em profusão.].\r\nAparecer, surgir [int.: A moça surdiu por entre as cortinas].\r\nRomper, irromper, manifestar-se [int.: No fim do espetáculo, os aplausos surdiram].\r\nSurgir como consequência; resultar [tr. + de: Algo de benéfico surdiu daquela missão].\r\nTornar-se público [int. : Afinal, as novas decisões do governo surdiram].\r\n'),
(49, 'abside', 'adj', 'Arq. Nas basílicas romanas, nicho semicircular, de teto abobadado, em que se achava o assento do juiz.\r\nRel. Nos templos antigos, recinto similar onde ficavam estátuas de deuses.\r\nNas basílicas cristãs, a cabeceira da igreja, onde fica a cadeira episcopal e o altar-mor.\r\nOratório reservado por detrás do altar-mor.\r\nRelicário com ossos de santos, que antigamente se expunha nos altares.'),
(50, 'acuidade', 'sf', 'Qualidade do que é agudo.\r\nFig. Sensibilidade ou capacidade de percepção, de entendimento; argúcia; perspicácia.\r\nQualidade do que é perceptivo, relevante, perspicaz: uma análise de grande acuidade: uma análise de grande acuidade.\r\nGrau de sensibilidade de um sentido (acuidade visual; acuidade auditiva).'),
(51, 'adro', 'sm', 'Arq. Rel. Terreno aberto ou murado, em frente e/ou ao redor de uma igreja; átrio; períbolo.'),
(52, 'álacre', 'adj', 'Que é alegre, jovial, animado.'),
(53, 'alheamento', 'sm', 'Alienação.'),
(54, 'assisado', 'adj', 'Que tem siso, que age com siso; judicioso, sensato, ponderado.'),
(55, 'beneplácito', 'sm', 'Aprovação de um ato, de um pacto; concordância com eles, ou seu consentimento.\r\nAprovação de algo por autoridade ou em instância superior.'),
(56, 'deletério', 'adj', 'Que prejudica a saúde; insalubre.\r\nQue destrói, causa dano (ação deletéria); daninho, danoso, nocivo.\r\nFig. Que corrompe (doutrinas deletérias); degradante.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `palavras`
--
ALTER TABLE `palavras`
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
-- AUTO_INCREMENT for table `palavras`
--
ALTER TABLE `palavras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
