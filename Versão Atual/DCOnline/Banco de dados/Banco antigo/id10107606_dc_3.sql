-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11-Maio-2020 às 02:04
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id10107606_dc`
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
(56, 'deletério', 'adj', 'Que prejudica a saúde; insalubre.\r\nQue destrói, causa dano (ação deletéria); daninho, danoso, nocivo.\r\nFig. Que corrompe (doutrinas deletérias); degradante.'),
(57, 'cartografar', 'v', 'Fazer mapa; fazer levantamento e traçado de carta geográfica.'),
(58, 'feniano', 'sm ou adj', 'Revolucionário irlandês contra o domínio da Inglaterra.'),
(59, 'locaute', 'sm', 'Fechamento de uma fábrica ou estabelecimento pela direção, a fim de impedir a entrada dos funcionários e pressioná-los a aceitar certas condições.'),
(60, 'abstratizante', 'adj', 'Que torna abstrato.'),
(61, 'abstratizante', 'adj', 'Que torna abstrato.'),
(62, 'abrasonar', 'v', 'Conceder brasão a.'),
(63, 'açaimar', 'v', '1. Por açaimo ou mordaça em animal; amordaçar.\r\n2.Refrear ou fazer calar.'),
(64, 'abjurar', 'v', 'Abdicar; renunciar.'),
(65, 'abismal', '', ''),
(66, '', 'adj', 'Que tem característica ou natureza de abismo; abissal.'),
(67, 'alodial', 'adj', 'Diz-se de imóvel ou quaisquer outros bens que estão livres de foros, pensões, vínculos ou outro ônus ou encargo (bens alodiais).'),
(68, 'ancilose', 'sf', '1. Med. Falta de movimento em uma articulação.\r\n2. Fig. Rigidez de ideias etc.'),
(69, 'bastardia', 'sf', '1.Característica ou condição de quem é bastardo\r\n2. Descendência bastarda de uma família; os descendentes de filho ou filha ilegítimos.\r\n3. Alteração ou perda das característcas primitivas.'),
(70, 'bastião', 'sm', 'Muro ou trincheira levantada diante do ângulo saliente de um forte ou de uma praça.'),
(71, 'báratro', 'sm.', 'Precipício onde se jogavam os condenados em Atenas; inferno; abismo.'),
(72, 'umbral', 'sm.', 'Local através do qual se consegue entrar; porta.\r\nRegião espiritual habitada por morto que ainda mantém relações com a vida terrena.'),
(73, 'himeneu', 'sm', 'União matrimonial, casamento; festa em que se celebra esta união.'),
(74, 'alígero', 'adj', 'Que tem asas; que é muito rápido e leve.'),
(75, 'platonizar', 'verbo', 'Atribuir feições platônicas a.'),
(76, 'trívio', 'adj.', 'Que pode se separar em três caminhos; local exato onde se encontram três ruas ou três caminhos.'),
(77, 'lavorar', 'verbo', 'Lavrar; cultivar.'),
(78, 'encastrar', 'verbo', 'Encaixar; engastar.'),
(79, 'sobrestante', 'adj.', 'Que suspender, interrompe o desenvolvimento de; faz com que algo seja suspenso: sobrestou o inquérito; sobrestou ao ver o policial.\r\nQue faz parar o andamento de uma ação judicial; cessar: o juiz sobresteve a ação. Que faz com que algo seja adiado ou postergado; adiar: o presidente sobresteve a medida provisória.\r\nQue aparecer mais que os demais: a montanha sobrestava ao horizonte.'),
(80, 'toldar', 'verbo', 'Cobrir com toldo.\r\nAnuviar, tampar, encobrir, obscurecer.\r\nEntristecer.'),
(81, 'viração', 'sf', 'Vento suave e fresco que sopra do mar para a terra.');

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
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `palavras`
--
ALTER TABLE `palavras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `palavras`
--
ALTER TABLE `palavras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
