-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2018 às 03:02
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teren671_bd_escola_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_administrador`
--

CREATE TABLE `tb_administrador` (
  `id_administrador` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_administrador`
--

INSERT INTO `tb_administrador` (`id_administrador`, `nome`, `usuario`, `senha`) VALUES
(9, 'Aluno Administrador', 'aluno', 'aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_artigo`
--

CREATE TABLE `tb_artigo` (
  `id_artigo` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `resumo` text NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `edicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_artigo`
--

INSERT INTO `tb_artigo` (`id_artigo`, `titulo`, `resumo`, `arquivo`, `edicao`) VALUES
(2, 'Desenvolvimento de Aplicativo de Cálculos Matemáticos utilizando MIT App Inventor', 'Devido à grande dificuldade presente na vida da maioria dos estudantes em relação as fórmulas matemáticas, observa-se que seria de enorme interesse e necessidade, ser criado um aplicativo que obtivesse fórmulas matemáticas para melhorar o desempenho desses estudantes dos quais apresentam esse mal desempenho nesta matéria. O objetivo deste trabalho é apresentar os resultados para algumas fórmulas matemáticas em apenas um click, facilitando então a operação àqueles que obtêm dificuldade. Neste trabalho foi desenvolvido um aplicativo para a Fórmula de Bhaskara, que é uma das fórmulas matemáticas que os estudantes têm maior dificuldade, por ser uma conta de estrutura extensa. Para isso também houve necessidade de estudos para nossos programadores, que também obtinham dificuldades com esta estrutura. Conclui-se que o aplicativo poderá ser utilizado por qualquer pessoa, sem ser necessariamente estudantes, pois é uma ferramenta de rápido resultado, que pode ajudar quem tem dificuldades com sua estrutura ou simplesmente ajudar quem está num momento em que se é necessário obter um resultado de uma forma rápida e com resultados precisos.', '0bb391c9e79c9c963f84bea18c5a20af.pdf', 2017);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id_banner` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `posicao` varchar(10) NOT NULL,
  `data` date NOT NULL,
  `ativo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_banner`
--

INSERT INTO `tb_banner` (`id_banner`, `titulo`, `link`, `alt`, `imagem`, `posicao`, `data`, `ativo`) VALUES
(3, 'Banner 2', 'http://eewbs.com.br/eletivas', 'banner eletiva', 'promocional.png', 'PROMOCAO', '0000-00-00', '1'),
(4, 'Equipe WBS 2017', '', 'Equipe WBS 2017', 'equipe.jpeg', 'EQUIPE', '2017-12-12', '1'),
(8, 'Eletivas 2018', 'http://eewbs.terenciani.com.br/eletivas', 'Eletivas 2018-2', '747ed4a593652d6ac02fbc701547dbba.png', 'ROTATIVO', '2018-08-09', '1'),
(12, 'Futebol', 'http://eewbs.com.br/site/futebol.php', 'Lista do Futebol', 'df3dca53cf975570e9f08ae7a60240f3.png', 'MURAL', '2018-04-26', '1'),
(13, 'Vôlei', 'http://eewbs.com.br/site/volei.php', 'Lista do Vôlei', 'dc154eaaaeafaa9f2d6376e92bf824c6.png', 'MURAL', '2018-04-26', '1'),
(14, 'Feccat', 'eewbs.com.br', '2018', '230666a60bb3655a1f01e243f735bb47.png', 'ROTATIVO', '2018-11-13', '1'),
(15, 'Oficina de Desenvolvimento de Sites', 'https://docs.google.com/forms/d/e/1FAIpQLScxSP5UTQzbMickme8jcahIz6HhAUS7DR6NS7K4EzHb0UoTHQ/viewform?c=0&w=1', 'Desculpe o transtorno, mas link está fora do ar!', 'dd5084cef98a34592f5930fb025c11b8.png', 'ROTATIVO', '2018-11-01', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `tipo` varchar(5) NOT NULL,
  `ativa` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`id_categoria`, `titulo`, `data`, `tipo`, `ativa`) VALUES
(1, 'Haloween 2017', '2017-11-08', 'FOTO', 1),
(2, 'Haloween 2017', '2017-11-08', 'VIDEO', 1),
(3, 'FECCAT 2017', '2017-11-21', 'FOTO', 1),
(4, 'Jantar 3º Ano 2017', '2017-12-01', 'FOTO', 1),
(5, 'DOJO de Programação com a Empresa JERA', '2017-11-22', 'FOTO', 1),
(6, 'Eletivas Primeiro Semestre de 2018', '2018-03-05', 'VIDEO', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_equipe`
--

CREATE TABLE `tb_equipe` (
  `id_servidor` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `turno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `atuacao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pedagogico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_foto_profissional`
--

CREATE TABLE `tb_foto_profissional` (
  `id_foto_profissional` int(11) NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_foto_profissional`
--

INSERT INTO `tb_foto_profissional` (`id_foto_profissional`, `descricao`, `url_imagem`, `alt`, `data`) VALUES
(1, 'FECCAT', 'feccat.png', 'Foto da FECCAT de 2017', '2017-11-22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_inscricao_esporte`
--

CREATE TABLE `tb_inscricao_esporte` (
  `id_inscricao` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `turma` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ultimo` tinyint(1) NOT NULL,
  `esporte` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_inscricao_esporte`
--

INSERT INTO `tb_inscricao_esporte` (`id_inscricao`, `nome`, `turma`, `ultimo`, `esporte`) VALUES
(4, 'Thalia', '2º C', 0, 'VOLEI'),
(5, 'Mateus', '3º A', 0, 'VOLEI'),
(6, 'Renato', '2º C', 0, 'VOLEI'),
(7, 'Luiz', '2º C', 0, 'VOLEI'),
(8, 'Maria Eduarda', '2º B', 0, 'VOLEI'),
(9, 'Gabriel Henrique', '1º B', 1, 'VOLEI'),
(10, 'Lucas Almeida', '2º B', 0, 'VOLEI'),
(11, 'Vinicius', '2º A', 0, 'VOLEI'),
(12, 'Braian', '2º A', 0, 'VOLEI'),
(13, 'Vitor', '2º B', 0, 'VOLEI'),
(14, 'Tiago', '2º D', 0, 'VOLEI'),
(15, 'Gabriel Alvaro', '2º D', 0, 'VOLEI'),
(16, 'Gabriela', '2º D', 0, 'VOLEI'),
(17, 'Rhairys', '2º B', 0, 'VOLEI'),
(18, 'Isabeli', '2º B', 0, 'VOLEI'),
(19, 'Pablo', '3º EMII A', 0, 'VOLEI'),
(20, 'Karla', '1º EMII B', 0, 'VOLEI'),
(21, 'Evelyn', '2º D', 0, 'VOLEI'),
(22, 'Marcelo', 'Professor', 0, 'VOLEI'),
(23, 'Saulo', 'Professor', 0, 'VOLEI'),
(24, 'Ewerton', '3º A', 0, 'VOLEI'),
(25, 'Julio', '2º D', 0, 'VOLEI'),
(26, 'Guilherme', '3º A', 0, 'VOLEI'),
(27, 'Rafael', '2º B', 0, 'VOLEI'),
(29, 'Santiago', '2º D', 0, 'VOLEI'),
(30, 'Elio', '2º D', 0, 'VOLEI'),
(31, 'Kamila', '1º A', 0, 'VOLEI'),
(33, 'Aniely', '1º EMII B', 0, 'VOLEI'),
(34, 'Yuky', '1º EMII C', 0, 'VOLEI'),
(35, 'João', '1º A', 0, 'VOLEI'),
(36, 'Vinícius', '2º A', 0, 'VOLEI'),
(37, 'Alex', '1º B', 0, 'VOLEI'),
(38, 'Igor', '3º EMII A', 0, 'VOLEI'),
(39, 'Samuel', '3º EMII A', 0, 'VOLEI'),
(40, 'Lucas Andrei', '3º EMII A', 0, 'VOLEI'),
(41, 'Jean', '3º EMII A', 0, 'VOLEI'),
(42, 'Ludson', '3º EMII A', 0, 'VOLEI'),
(43, 'Gabriel Pauletti', '3º EMII A', 0, 'VOLEI'),
(44, 'Marcelo', 'Professor', 0, 'FUTEBOL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_instituicao`
--

CREATE TABLE `tb_instituicao` (
  `data_alteracao` datetime NOT NULL,
  `nome_escola` varchar(255) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo_principal` varchar(255) NOT NULL,
  `logo_secundaria` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `missao` text NOT NULL,
  `visao` text NOT NULL,
  `valores` text NOT NULL,
  `historico` text NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `telefone_alternativo` varchar(15) NOT NULL,
  `destinatario_contato` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `mapa` varchar(255) NOT NULL,
  `tem_profissional` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_instituicao`
--

INSERT INTO `tb_instituicao` (`data_alteracao`, `nome_escola`, `sigla`, `slogan`, `logo_principal`, `logo_secundaria`, `favicon`, `missao`, `visao`, `valores`, `historico`, `endereco`, `telefone`, `telefone_alternativo`, `destinatario_contato`, `email`, `facebook`, `youtube`, `mapa`, `tem_profissional`) VALUES
('2017-11-01 00:00:00', 'Célia Maria Naglis', 'EEWBS', 'Escola da Autoria e Ensino Médio Integrado ao Curso Técnico de Informática', 'wbs-logo.png', 'wbstec-logo.png', 'favicon.png', 'Oferecer uma educação de qualidade garantindo o acesso, a permanência e o sucesso de todos os alunos.', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. \r\nFormar alunos críticos capazes de transformar a comunidade em que vivem. \r\nContribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado .', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. \r\nFormar alunos críticos capazes de transformar a comunidade em que vivem. \r\nContribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado.', '<p>Criada em 14 de março de 1991, através do Decreto n° 5.838, publicado no Diário Oficial de 16 de março de 1991, como Escola Estadual de Pré-Escolar Primeiro e Segundo Graus Waldemir Barros da Silva. Teve suas instalações físicas entregues pela Secretaria de Estado de Educação a então chefe do Núcleo Educacional 73, professora Arlene dos Santos Messa, em 19 de novembro de 1992. Constituía-se de 16 salas de aula, área administrativa e área para Educação Física, totalizando 4.148 m2 de área construída, no Conjunto Habitacional Moreninha I, na Rua Palmácea S/N, no município de Campo Grande, Estado de Mato Grosso do Sul. Seu nome homenageia um aluno da comunidade, morto ao ser atropelado por um motorista embriagado em junho de 1989, quando saía da Escola Arlindo de Sampaio Jorge, onde cursava o Ensino Médio. </p>\r\n<p>A organização administrativa e pedagógica teve início, em 26 de novembro de 1992, com a nomeação da diretora professora Luzia Silva Soares, cuja publicação ocorreu em 21 de janeiro de 1993, no Diário Oficial n 3467. </p>\r\n<p>O funcionamento oficial com início das matriculas foi em 11 de janeiro de 1993. As atividades letivas com os alunos em 08 de fevereiro de 1993. Porém, sua inauguração oficial, com a presença do então governador Pedro Pedrossian, ocorreu em 28 de dezembro de 1993. </p>\r\n<p>Para início das aulas tinha como mobiliário apenas os conjuntos escolares. No primeiro ano foram oferecidas 850 vagas para o Ensino Fundamental. Trazia uma proposta diferenciada, para o Ensino Médio, que a tornaria única no Estado de Mato Grosso do Sul, a implantação dos três cursos de 2° Grau no período noturno, onde dois cursos seriam implantados de forma imediata e um gradativo. Os cursos eram: Habilitação para o magistério de Pré-Escolar, 1ª a 4ª série, oferecendo de imediato quatro séries. O Curso Técnico em Contabilidade, implantou-se de imediato as três séries e o Curso Lei 7.044/1982 que foi implantado de forma gradativa a partir da 1ª série. Tal proposta tinha como objetivo a qualidade do ensino destes cursos, uma vez que possibilitaria a centralização de professores habilitados em uma só escola. </p>\r\n<p>A escola tinha ainda outras características que a diferenciava neste primeiro ano de funcionamento que era: quadra coberta, o que a tornava dentre as 80 escolas estaduais de Campo Grande a 2ª que contava com tal estrutura. Foi primeira escola da periferia a oferecer o Ensino de 2° Grau no diurno, com uma estrutura física arrojada para os padrões da década 1990. A escola junto com a comunidade decidiu pelo uso de uniforme escolar, e contava, ainda, com serviços de limpeza e segurança terceirizado.\r\nDesde o princípio a escola procurou adotar como referência teórica uma linha progressista, com vistas ao desenvolvimento de um trabalho dentro da tendência crítica dos conteúdos. As decisões eram tomadas coletivamente, com a participação de todos os segmentos, o conselho de classe era participativo. </p>\r\n<p>Em julho de 1993, realizou sua primeira eleição para diretor e Colegiado Escolar. Antes já havia realizado a eleição para a Associação de Pais e Mestres, tendo como primeiro presidente o professor Enéias Crispiano da Rocha. O primeiro presidente do Colegiado Escolar, eleito em 1993, foi o professor Celestino de Oliveira; o primeiro presidente do Grêmio estudantil foi o aluno José Mauro, uma das primeiras coordenadoras pedagógicas da escola professora Maria de Lourdes Matos. </p>\r\n<p>O primeiro Projeto Político Pedagógico foi elaborado com a participação de todos os segmentos: pais, alunos, professores e funcionários administrativos. A escola teve a sua proposta inicial para o 2° grau modificada pela Lei de Diretrizes e Bases da Educação Nacional 9.394/1996, que trouxe nova nomenclatura e nova organização para a Educação Básica. A partir de 1998 iniciou o processo gradativo de desativação dos cursos de Técnico em Contabilidade e Habilitação para o Magistério. Devido à grande demanda de alunos para o Ensino Médio diurno, foi desativando gradativamente o Ensino Fundamental de 1ª a 4ª série, que desde 1998 era organizado em ciclo. A escola possuía uma sala de aula adaptada como sala de recurso para alunos com Deficiência Auditiva, implantada em 1994. </p>\r\n<p>Recebeu em setembro de 1999 o laboratório de Informática, por meio do Proinfo, tendo como primeiro coordenador o professor João Carlos Rezende. Em 1999, iniciou o Projeto “Aulas Programadas” para o Ensino Noturno, com objetivo de diminuir a evasão escolar. O Projeto consistia em flexibilizar para o aluno o primeiro ou último tempo e desenvolver projeto de ensino. </p>\r\n<p>Destacou-se no processo da Constituinte Escolar participando com todos os segmentos das discussões e proposta para elaboração do Plano Estadual de Educação. A escola WBS junto com as demais escolas do COUNE (Conselho das Unidades Escolares ) Bandeira II organizaram um grande evento com mais de 300 pessoas para sistematizar o trabalho da constituinte. Neste ato contou com a participação do então Secretário de educação Pedro César Kemp, palestras com a Professora Dra. Vera Peroni e Galdêncio Frigoto. </p>\r\n<p>Em 2000, foi referência para a Rede Estadual de Ensino com relação ao trabalho com projetos, tendo sua experiência citada no caderno 2 do Ensino Médio da Secretaria de Estado de Educação. O trabalho dos alunos da escola está apresentado também na capa do Caderno 2.1 do Ensino Médio da SED.\r\nNo ano de 2003, a escola Waldemir Barros da Silva foi convidada a participar do projeto Educomrádio, concebido pelo Ministério da Educação, Universidade de São Paulo - USP e Secretaria de Estado de Educação, em Mato Grosso do Sul vinte escolas foram contempladas com o projeto; dez escolas da capital e as demais de municípios do interior. </p>\r\n<p>Foram capacitados dois professores da escola com um curso de 180 horas, em 2004 a escola recebeu os equipamentos para realização de atividades com os alunos. A coordenadora do projeto Educomrádio na escola é a professora Valdirene Ungari, que com grupos de alunos produz os programas na rádio, para serem utilizados como recurso nas aulas e fazem a programação cultural para toda semana. </p>\r\n<p>Em 2005 os projetos Educomrádio e História e Cultura afro-brasileira foram publicados na Revista do Ensino Médio de Mato Grosso do Sul da Secretaria de Estado de Educação.\r\nTambém ano de 2005, a escola inscreveu-se no Projeto proporcionado pelo MEC/ UNESCO para que as escolas brasileiras de Ensino Médio Noturno apresentassem proposta diferenciada para essa etapa de ensino. O projeto denominado “Melhoria do Ensino Médio Noturno” contou com a participação de 972 escolas brasileiras, destas dez foram selecionadas, sendo duas de cada região do país. A Escola Estadual Waldemir Barros da Silva foi uma das selecionadas e recebeu um prêmio no valor de R$ 140.000 (cento e quarenta mil reais) para investir em materiais, equipamentos e serviços, bem como capacitação dos profissionais. </p>\r\n<p>Em 16 de março de 2006, a Diretora Maria de Lourdes Matos, a Diretora adjunta Ernângela Maria de Sousa Calixto e a presidente da Associação de Pais e Mestres Ana Elisabete Correa representaram a escola em Brasília, evento realizado pelo MEC com as dez escolas premiadas. Onde cada coordenador do projeto apresentou o trabalho da escola e em seguida o representante legal da APM assinou o convênio para o recebimento do recurso.\r\n<p>No ano de 2007, foi autorizado o funcionamento do Curso Técnico em Informática integrado ao Ensino Médio – área Profissional: Informática – Educação Profissional Técnica de Nível Médio, sendo oferecido nos períodos matutino e noturno. O Estágio Supervisionado é oferecido aos alunos do Ensino Médio de acordo com a legislação vigente e as orientações emanadas da Secretaria de Estado de Educação. Esta unidade escolar participou por duas vezes do Prêmio Gestão Escolar com objetivo de avaliar boas práticas de gestão e de autoavaliação da escola com a finalidade melhorar a gestão e a qualidade do ensino público no país. </p>\r\n<p>No ano de 2010, a escola escreveu o dossiê referente ao trabalho realizado em 2009 e ficou entre as seis finalistas, como prêmio recebeu certificado e um computador para escola. No ano de 2011, a escola participou novamente escrevendo sua experiência referente ao ano Base 2010, ficando em primeiro lugar, sendo conferido lhe o Diploma destaque Estadual, como prêmio, recebeu um notebook e a diretora Ernângela M. S. Calixto ganhou uma viagem de intercâmbio para os Estados Unidos da América com a finalidade de conhecer o Sistema Educacional Americano e para troca de experiências. </p>\r\n<p>Em 2011 por meio de Convênio entre a Secretaria Estadual de Educação e o Instituto Federal de Mato Grosso do Sul a escola cede uma sala de aula e laboratório de informática, para o curso de educação profissional a distância por meio da Rede e-Tec, para o curso de Técnico em Edificações com duração de 02 (dois) anos, no período noturno e aos sábados. </p>\r\n<p>No dia 07 de Agosto de 2012, a escola recebeu a visita da diretora da Escola Urbana de Ensino Médio para a Lei e Justiça, Shannon B. Curran, de Nova Iorque, e do vice-diretor da Escola de Ensino Médio Fox Creek, Samuel Dickerson II, de Elyra, estado de Ohaio. Com o objetivo de conhecerem o sistema de ensino desenvolvido na escola e trocarem experiências com a direção, funcionários e estudantes.\r\nA escola passou a oferecer a partir de outubro de 2012, o curso Técnico em Informática Concomitante ao Ensino Médio no período vespertino, e que surgiu através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). Neste mesmo ano em parceria com Secretaria de Educação/SED e DETRAN/ MS a escola desenvolve o Programa Jovem Condutor, também realiza o Projeto do 1º Tempo, para o período noturno, onde organiza os conteúdos dados no 1º tempo, por meio de atividades orientadas para os alunos, que são postadas no blog da escola. </p>\r\n<p>Atualmente, a escola oferece o Ensino Fundamental com o 9º ano, no período vespertino, o Ensino Médio nos três períodos, Ensino Médio Profissional Técnico em Informática Integrado ao Médio, no matutino e noturno e Técnico em Informática concomitante ao Médio no período vespertino. A partir de setembro de 2013, a escola também passou a oferecer o curso Técnico em Informática e o curso Técnico em Redes de Computadores, os dois na modalidade subsequente ao Ensino Médio no período noturno. Estes novos cursos também são ofertados através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). </p>\r\n<p>A Escola Estadual Waldemir Barros da Silva constrói a sua história com a participação de valiosos profissionais da educação, de pais e alunos, que tem como bandeira a defesa da escola pública, democrática e de qualidade.</p>', 'Rua Palmácea S/N\r\nBairro Moreninha I - Campo Grande/MS', '3314-9014', '3314-9062', 'prof.ari@outlook.com.br, eewbds@sed.ms.gov.br', 'eewbds@sed.ms.gov.br', 'https://www.facebook.com/eewbs', 'https://www.youtube.com/user/eewbs1993', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14943.947980691068!2d-54.5814073649684!3d-20.547712999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf42a2e93ffb9144b!2sEscola+Estadual+Waldemir+Barros+da+Silva!5e0!3m2!1spt-BR!2sus!4v1509966968771', 1),
('2018-11-14 00:00:00', 'Escola Estadual Waldemir Barros da Silva', 'EEWBS', 'Escola da Autoria e Ensino Médio Integrado ao Curso Técnico de Informática', 'd6d80b04a9c0089ef7aba4b6d92a7eb8.jpg', 'ef1d2a1905b142543e7fa6eb6958342a.jpg', 'bff7fe4d5ed0d44b53e965f1620ba6e9.jpg', 'Oferecer uma educação de qualidade garantindo o acesso, a permanência e o sucesso de todos os alunos.', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. Formar alunos críticos capazes de transformar a comunidade em que vivem. Contribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado .', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. \r\nFormar alunos críticos capazes de transformar a comunidade em que vivem. \r\nContribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado.', '<p>Criada em 14 de março de 1991, através do Decreto n° 5.838, publicado no Diário Oficial de 16 de março de 1991, como Escola Estadual de Pré-Escolar Primeiro e Segundo Graus Waldemir Barros da Silva. Teve suas instalações físicas entregues pela Secretaria de Estado de Educação a então chefe do Núcleo Educacional 73, professora Arlene dos Santos Messa, em 19 de novembro de 1992. Constituía-se de 16 salas de aula, área administrativa e área para Educação Física, totalizando 4.148 m2 de área construída, no Conjunto Habitacional Moreninha I, na Rua Palmácea S/N, no município de Campo Grande, Estado de Mato Grosso do Sul. Seu nome homenageia um aluno da comunidade, morto ao ser atropelado por um motorista embriagado em junho de 1989, quando saía da Escola Arlindo de Sampaio Jorge, onde cursava o Ensino Médio. </p>\r\n<p>A organização administrativa e pedagógica teve início, em 26 de novembro de 1992, com a nomeação da diretora professora Luzia Silva Soares, cuja publicação ocorreu em 21 de janeiro de 1993, no Diário Oficial n 3467. </p>\r\n<p>O funcionamento oficial com início das matriculas foi em 11 de janeiro de 1993. As atividades letivas com os alunos em 08 de fevereiro de 1993. Porém, sua inauguração oficial, com a presença do então governador Pedro Pedrossian, ocorreu em 28 de dezembro de 1993. </p>\r\n<p>Para início das aulas tinha como mobiliário apenas os conjuntos escolares. No primeiro ano foram oferecidas 850 vagas para o Ensino Fundamental. Trazia uma proposta diferenciada, para o Ensino Médio, que a tornaria única no Estado de Mato Grosso do Sul, a implantação dos três cursos de 2° Grau no período noturno, onde dois cursos seriam implantados de forma imediata e um gradativo. Os cursos eram: Habilitação para o magistério de Pré-Escolar, 1ª a 4ª série, oferecendo de imediato quatro séries. O Curso Técnico em Contabilidade, implantou-se de imediato as três séries e o Curso Lei 7.044/1982 que foi implantado de forma gradativa a partir da 1ª série. Tal proposta tinha como objetivo a qualidade do ensino destes cursos, uma vez que possibilitaria a centralização de professores habilitados em uma só escola. </p>\r\n<p>A escola tinha ainda outras características que a diferenciava neste primeiro ano de funcionamento que era: quadra coberta, o que a tornava dentre as 80 escolas estaduais de Campo Grande a 2ª que contava com tal estrutura. Foi primeira escola da periferia a oferecer o Ensino de 2° Grau no diurno, com uma estrutura física arrojada para os padrões da década 1990. A escola junto com a comunidade decidiu pelo uso de uniforme escolar, e contava, ainda, com serviços de limpeza e segurança terceirizado.\r\nDesde o princípio a escola procurou adotar como referência teórica uma linha progressista, com vistas ao desenvolvimento de um trabalho dentro da tendência crítica dos conteúdos. As decisões eram tomadas coletivamente, com a participação de todos os segmentos, o conselho de classe era participativo. </p>\r\n<p>Em julho de 1993, realizou sua primeira eleição para diretor e Colegiado Escolar. Antes já havia realizado a eleição para a Associação de Pais e Mestres, tendo como primeiro presidente o professor Enéias Crispiano da Rocha. O primeiro presidente do Colegiado Escolar, eleito em 1993, foi o professor Celestino de Oliveira; o primeiro presidente do Grêmio estudantil foi o aluno José Mauro, uma das primeiras coordenadoras pedagógicas da escola professora Maria de Lourdes Matos. </p>\r\n<p>O primeiro Projeto Político Pedagógico foi elaborado com a participação de todos os segmentos: pais, alunos, professores e funcionários administrativos. A escola teve a sua proposta inicial para o 2° grau modificada pela Lei de Diretrizes e Bases da Educação Nacional 9.394/1996, que trouxe nova nomenclatura e nova organização para a Educação Básica. A partir de 1998 iniciou o processo gradativo de desativação dos cursos de Técnico em Contabilidade e Habilitação para o Magistério. Devido à grande demanda de alunos para o Ensino Médio diurno, foi desativando gradativamente o Ensino Fundamental de 1ª a 4ª série, que desde 1998 era organizado em ciclo. A escola possuía uma sala de aula adaptada como sala de recurso para alunos com Deficiência Auditiva, implantada em 1994. </p>\r\n<p>Recebeu em setembro de 1999 o laboratório de Informática, por meio do Proinfo, tendo como primeiro coordenador o professor João Carlos Rezende. Em 1999, iniciou o Projeto “Aulas Programadas” para o Ensino Noturno, com objetivo de diminuir a evasão escolar. O Projeto consistia em flexibilizar para o aluno o primeiro ou último tempo e desenvolver projeto de ensino. </p>\r\n<p>Destacou-se no processo da Constituinte Escolar participando com todos os segmentos das discussões e proposta para elaboração do Plano Estadual de Educação. A escola WBS junto com as demais escolas do COUNE (Conselho das Unidades Escolares ) Bandeira II organizaram um grande evento com mais de 300 pessoas para sistematizar o trabalho da constituinte. Neste ato contou com a participação do então Secretário de educação Pedro César Kemp, palestras com a Professora Dra. Vera Peroni e Galdêncio Frigoto. </p>\r\n<p>Em 2000, foi referência para a Rede Estadual de Ensino com relação ao trabalho com projetos, tendo sua experiência citada no caderno 2 do Ensino Médio da Secretaria de Estado de Educação. O trabalho dos alunos da escola está apresentado também na capa do Caderno 2.1 do Ensino Médio da SED.\r\nNo ano de 2003, a escola Waldemir Barros da Silva foi convidada a participar do projeto Educomrádio, concebido pelo Ministério da Educação, Universidade de São Paulo - USP e Secretaria de Estado de Educação, em Mato Grosso do Sul vinte escolas foram contempladas com o projeto; dez escolas da capital e as demais de municípios do interior. </p>\r\n<p>Foram capacitados dois professores da escola com um curso de 180 horas, em 2004 a escola recebeu os equipamentos para realização de atividades com os alunos. A coordenadora do projeto Educomrádio na escola é a professora Valdirene Ungari, que com grupos de alunos produz os programas na rádio, para serem utilizados como recurso nas aulas e fazem a programação cultural para toda semana. </p>\r\n<p>Em 2005 os projetos Educomrádio e História e Cultura afro-brasileira foram publicados na Revista do Ensino Médio de Mato Grosso do Sul da Secretaria de Estado de Educação.\r\nTambém ano de 2005, a escola inscreveu-se no Projeto proporcionado pelo MEC/ UNESCO para que as escolas brasileiras de Ensino Médio Noturno apresentassem proposta diferenciada para essa etapa de ensino. O projeto denominado “Melhoria do Ensino Médio Noturno” contou com a participação de 972 escolas brasileiras, destas dez foram selecionadas, sendo duas de cada região do país. A Escola Estadual Waldemir Barros da Silva foi uma das selecionadas e recebeu um prêmio no valor de R$ 140.000 (cento e quarenta mil reais) para investir em materiais, equipamentos e serviços, bem como capacitação dos profissionais. </p>\r\n<p>Em 16 de março de 2006, a Diretora Maria de Lourdes Matos, a Diretora adjunta Ernângela Maria de Sousa Calixto e a presidente da Associação de Pais e Mestres Ana Elisabete Correa representaram a escola em Brasília, evento realizado pelo MEC com as dez escolas premiadas. Onde cada coordenador do projeto apresentou o trabalho da escola e em seguida o representante legal da APM assinou o convênio para o recebimento do recurso.\r\n<p>No ano de 2007, foi autorizado o funcionamento do Curso Técnico em Informática integrado ao Ensino Médio – área Profissional: Informática – Educação Profissional Técnica de Nível Médio, sendo oferecido nos períodos matutino e noturno. O Estágio Supervisionado é oferecido aos alunos do Ensino Médio de acordo com a legislação vigente e as orientações emanadas da Secretaria de Estado de Educação. Esta unidade escolar participou por duas vezes do Prêmio Gestão Escolar com objetivo de avaliar boas práticas de gestão e de autoavaliação da escola com a finalidade melhorar a gestão e a qualidade do ensino público no país. </p>\r\n<p>No ano de 2010, a escola escreveu o dossiê referente ao trabalho realizado em 2009 e ficou entre as seis finalistas, como prêmio recebeu certificado e um computador para escola. No ano de 2011, a escola participou novamente escrevendo sua experiência referente ao ano Base 2010, ficando em primeiro lugar, sendo conferido lhe o Diploma destaque Estadual, como prêmio, recebeu um notebook e a diretora Ernângela M. S. Calixto ganhou uma viagem de intercâmbio para os Estados Unidos da América com a finalidade de conhecer o Sistema Educacional Americano e para troca de experiências. </p>\r\n<p>Em 2011 por meio de Convênio entre a Secretaria Estadual de Educação e o Instituto Federal de Mato Grosso do Sul a escola cede uma sala de aula e laboratório de informática, para o curso de educação profissional a distância por meio da Rede e-Tec, para o curso de Técnico em Edificações com duração de 02 (dois) anos, no período noturno e aos sábados. </p>\r\n<p>No dia 07 de Agosto de 2012, a escola recebeu a visita da diretora da Escola Urbana de Ensino Médio para a Lei e Justiça, Shannon B. Curran, de Nova Iorque, e do vice-diretor da Escola de Ensino Médio Fox Creek, Samuel Dickerson II, de Elyra, estado de Ohaio. Com o objetivo de conhecerem o sistema de ensino desenvolvido na escola e trocarem experiências com a direção, funcionários e estudantes.\r\nA escola passou a oferecer a partir de outubro de 2012, o curso Técnico em Informática Concomitante ao Ensino Médio no período vespertino, e que surgiu através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). Neste mesmo ano em parceria com Secretaria de Educação/SED e DETRAN/ MS a escola desenvolve o Programa Jovem Condutor, também realiza o Projeto do 1º Tempo, para o período noturno, onde organiza os conteúdos dados no 1º tempo, por meio de atividades orientadas para os alunos, que são postadas no blog da escola. </p>\r\n<p>Atualmente, a escola oferece o Ensino Fundamental com o 9º ano, no período vespertino, o Ensino Médio nos três períodos, Ensino Médio Profissional Técnico em Informática Integrado ao Médio, no matutino e noturno e Técnico em Informática concomitante ao Médio no período vespertino. A partir de setembro de 2013, a escola também passou a oferecer o curso Técnico em Informática e o curso Técnico em Redes de Computadores, os dois na modalidade subsequente ao Ensino Médio no período noturno. Estes novos cursos também são ofertados através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). </p>\r\n<p>A Escola Estadual Waldemir Barros da Silva constrói a sua história com a participação de valiosos profissionais da educação, de pais e alunos, que tem como bandeira a defesa da escola pública, democrática e de qualidade.</p>', 'Rua Palmácea S/NBairro Moreninha I - Campo Grande/MS', '3314-9014', '3314-9062', 'prof.ari@outlook.com.br, eewbds@sed.ms.gov.br', 'eewbds@sed.ms.gov.br', 'https://www.facebook.com/eewbs', 'https://www.youtube.com/user/eewbs1993', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14943.947980691068!2d-54.5814073649684!3d-20.547712999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf42a2e93ffb9144b!2sEscola+Estadual+Waldemir+Barros+da+Silva!5e0!3m2!1spt-BR!2sus!4v1509966968771', 1),
('2018-11-20 00:00:00', 'Escola Estadual Waldemir Barros da Silva', 'EEWBS', 'Escola da Autoria e Ensino Médio Integrado ao Curso Técnico de Informática', '753bce37cae7d12e379b3db1441d0a04.', '4c14e7ead841c5662c65436ed07992cd.', '4c14e7ead841c5662c65436ed07992cd.', 'Oferecer uma educação de qualidade garantindo o acesso, a permanência e o sucesso de todos os alunos.', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. Formar alunos críticos capazes de transformar a comunidade em que vivem. Contribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado .', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. \r\nFormar alunos críticos capazes de transformar a comunidade em que vivem. \r\nContribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado.', '<p>Criada em 14 de março de 1991, através do Decreto n° 5.838, publicado no Diário Oficial de 16 de março de 1991, como Escola Estadual de Pré-Escolar Primeiro e Segundo Graus Waldemir Barros da Silva. Teve suas instalações físicas entregues pela Secretaria de Estado de Educação a então chefe do Núcleo Educacional 73, professora Arlene dos Santos Messa, em 19 de novembro de 1992. Constituía-se de 16 salas de aula, área administrativa e área para Educação Física, totalizando 4.148 m2 de área construída, no Conjunto Habitacional Moreninha I, na Rua Palmácea S/N, no município de Campo Grande, Estado de Mato Grosso do Sul. Seu nome homenageia um aluno da comunidade, morto ao ser atropelado por um motorista embriagado em junho de 1989, quando saía da Escola Arlindo de Sampaio Jorge, onde cursava o Ensino Médio. </p>\r\n<p>A organização administrativa e pedagógica teve início, em 26 de novembro de 1992, com a nomeação da diretora professora Luzia Silva Soares, cuja publicação ocorreu em 21 de janeiro de 1993, no Diário Oficial n 3467. </p>\r\n<p>O funcionamento oficial com início das matriculas foi em 11 de janeiro de 1993. As atividades letivas com os alunos em 08 de fevereiro de 1993. Porém, sua inauguração oficial, com a presença do então governador Pedro Pedrossian, ocorreu em 28 de dezembro de 1993. </p>\r\n<p>Para início das aulas tinha como mobiliário apenas os conjuntos escolares. No primeiro ano foram oferecidas 850 vagas para o Ensino Fundamental. Trazia uma proposta diferenciada, para o Ensino Médio, que a tornaria única no Estado de Mato Grosso do Sul, a implantação dos três cursos de 2° Grau no período noturno, onde dois cursos seriam implantados de forma imediata e um gradativo. Os cursos eram: Habilitação para o magistério de Pré-Escolar, 1ª a 4ª série, oferecendo de imediato quatro séries. O Curso Técnico em Contabilidade, implantou-se de imediato as três séries e o Curso Lei 7.044/1982 que foi implantado de forma gradativa a partir da 1ª série. Tal proposta tinha como objetivo a qualidade do ensino destes cursos, uma vez que possibilitaria a centralização de professores habilitados em uma só escola. </p>\r\n<p>A escola tinha ainda outras características que a diferenciava neste primeiro ano de funcionamento que era: quadra coberta, o que a tornava dentre as 80 escolas estaduais de Campo Grande a 2ª que contava com tal estrutura. Foi primeira escola da periferia a oferecer o Ensino de 2° Grau no diurno, com uma estrutura física arrojada para os padrões da década 1990. A escola junto com a comunidade decidiu pelo uso de uniforme escolar, e contava, ainda, com serviços de limpeza e segurança terceirizado.\r\nDesde o princípio a escola procurou adotar como referência teórica uma linha progressista, com vistas ao desenvolvimento de um trabalho dentro da tendência crítica dos conteúdos. As decisões eram tomadas coletivamente, com a participação de todos os segmentos, o conselho de classe era participativo. </p>\r\n<p>Em julho de 1993, realizou sua primeira eleição para diretor e Colegiado Escolar. Antes já havia realizado a eleição para a Associação de Pais e Mestres, tendo como primeiro presidente o professor Enéias Crispiano da Rocha. O primeiro presidente do Colegiado Escolar, eleito em 1993, foi o professor Celestino de Oliveira; o primeiro presidente do Grêmio estudantil foi o aluno José Mauro, uma das primeiras coordenadoras pedagógicas da escola professora Maria de Lourdes Matos. </p>\r\n<p>O primeiro Projeto Político Pedagógico foi elaborado com a participação de todos os segmentos: pais, alunos, professores e funcionários administrativos. A escola teve a sua proposta inicial para o 2° grau modificada pela Lei de Diretrizes e Bases da Educação Nacional 9.394/1996, que trouxe nova nomenclatura e nova organização para a Educação Básica. A partir de 1998 iniciou o processo gradativo de desativação dos cursos de Técnico em Contabilidade e Habilitação para o Magistério. Devido à grande demanda de alunos para o Ensino Médio diurno, foi desativando gradativamente o Ensino Fundamental de 1ª a 4ª série, que desde 1998 era organizado em ciclo. A escola possuía uma sala de aula adaptada como sala de recurso para alunos com Deficiência Auditiva, implantada em 1994. </p>\r\n<p>Recebeu em setembro de 1999 o laboratório de Informática, por meio do Proinfo, tendo como primeiro coordenador o professor João Carlos Rezende. Em 1999, iniciou o Projeto “Aulas Programadas” para o Ensino Noturno, com objetivo de diminuir a evasão escolar. O Projeto consistia em flexibilizar para o aluno o primeiro ou último tempo e desenvolver projeto de ensino. </p>\r\n<p>Destacou-se no processo da Constituinte Escolar participando com todos os segmentos das discussões e proposta para elaboração do Plano Estadual de Educação. A escola WBS junto com as demais escolas do COUNE (Conselho das Unidades Escolares ) Bandeira II organizaram um grande evento com mais de 300 pessoas para sistematizar o trabalho da constituinte. Neste ato contou com a participação do então Secretário de educação Pedro César Kemp, palestras com a Professora Dra. Vera Peroni e Galdêncio Frigoto. </p>\r\n<p>Em 2000, foi referência para a Rede Estadual de Ensino com relação ao trabalho com projetos, tendo sua experiência citada no caderno 2 do Ensino Médio da Secretaria de Estado de Educação. O trabalho dos alunos da escola está apresentado também na capa do Caderno 2.1 do Ensino Médio da SED.\r\nNo ano de 2003, a escola Waldemir Barros da Silva foi convidada a participar do projeto Educomrádio, concebido pelo Ministério da Educação, Universidade de São Paulo - USP e Secretaria de Estado de Educação, em Mato Grosso do Sul vinte escolas foram contempladas com o projeto; dez escolas da capital e as demais de municípios do interior. </p>\r\n<p>Foram capacitados dois professores da escola com um curso de 180 horas, em 2004 a escola recebeu os equipamentos para realização de atividades com os alunos. A coordenadora do projeto Educomrádio na escola é a professora Valdirene Ungari, que com grupos de alunos produz os programas na rádio, para serem utilizados como recurso nas aulas e fazem a programação cultural para toda semana. </p>\r\n<p>Em 2005 os projetos Educomrádio e História e Cultura afro-brasileira foram publicados na Revista do Ensino Médio de Mato Grosso do Sul da Secretaria de Estado de Educação.\r\nTambém ano de 2005, a escola inscreveu-se no Projeto proporcionado pelo MEC/ UNESCO para que as escolas brasileiras de Ensino Médio Noturno apresentassem proposta diferenciada para essa etapa de ensino. O projeto denominado “Melhoria do Ensino Médio Noturno” contou com a participação de 972 escolas brasileiras, destas dez foram selecionadas, sendo duas de cada região do país. A Escola Estadual Waldemir Barros da Silva foi uma das selecionadas e recebeu um prêmio no valor de R$ 140.000 (cento e quarenta mil reais) para investir em materiais, equipamentos e serviços, bem como capacitação dos profissionais. </p>\r\n<p>Em 16 de março de 2006, a Diretora Maria de Lourdes Matos, a Diretora adjunta Ernângela Maria de Sousa Calixto e a presidente da Associação de Pais e Mestres Ana Elisabete Correa representaram a escola em Brasília, evento realizado pelo MEC com as dez escolas premiadas. Onde cada coordenador do projeto apresentou o trabalho da escola e em seguida o representante legal da APM assinou o convênio para o recebimento do recurso.\r\n<p>No ano de 2007, foi autorizado o funcionamento do Curso Técnico em Informática integrado ao Ensino Médio – área Profissional: Informática – Educação Profissional Técnica de Nível Médio, sendo oferecido nos períodos matutino e noturno. O Estágio Supervisionado é oferecido aos alunos do Ensino Médio de acordo com a legislação vigente e as orientações emanadas da Secretaria de Estado de Educação. Esta unidade escolar participou por duas vezes do Prêmio Gestão Escolar com objetivo de avaliar boas práticas de gestão e de autoavaliação da escola com a finalidade melhorar a gestão e a qualidade do ensino público no país. </p>\r\n<p>No ano de 2010, a escola escreveu o dossiê referente ao trabalho realizado em 2009 e ficou entre as seis finalistas, como prêmio recebeu certificado e um computador para escola. No ano de 2011, a escola participou novamente escrevendo sua experiência referente ao ano Base 2010, ficando em primeiro lugar, sendo conferido lhe o Diploma destaque Estadual, como prêmio, recebeu um notebook e a diretora Ernângela M. S. Calixto ganhou uma viagem de intercâmbio para os Estados Unidos da América com a finalidade de conhecer o Sistema Educacional Americano e para troca de experiências. </p>\r\n<p>Em 2011 por meio de Convênio entre a Secretaria Estadual de Educação e o Instituto Federal de Mato Grosso do Sul a escola cede uma sala de aula e laboratório de informática, para o curso de educação profissional a distância por meio da Rede e-Tec, para o curso de Técnico em Edificações com duração de 02 (dois) anos, no período noturno e aos sábados. </p>\r\n<p>No dia 07 de Agosto de 2012, a escola recebeu a visita da diretora da Escola Urbana de Ensino Médio para a Lei e Justiça, Shannon B. Curran, de Nova Iorque, e do vice-diretor da Escola de Ensino Médio Fox Creek, Samuel Dickerson II, de Elyra, estado de Ohaio. Com o objetivo de conhecerem o sistema de ensino desenvolvido na escola e trocarem experiências com a direção, funcionários e estudantes.\r\nA escola passou a oferecer a partir de outubro de 2012, o curso Técnico em Informática Concomitante ao Ensino Médio no período vespertino, e que surgiu através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). Neste mesmo ano em parceria com Secretaria de Educação/SED e DETRAN/ MS a escola desenvolve o Programa Jovem Condutor, também realiza o Projeto do 1º Tempo, para o período noturno, onde organiza os conteúdos dados no 1º tempo, por meio de atividades orientadas para os alunos, que são postadas no blog da escola. </p>\r\n<p>Atualmente, a escola oferece o Ensino Fundamental com o 9º ano, no período vespertino, o Ensino Médio nos três períodos, Ensino Médio Profissional Técnico em Informática Integrado ao Médio, no matutino e noturno e Técnico em Informática concomitante ao Médio no período vespertino. A partir de setembro de 2013, a escola também passou a oferecer o curso Técnico em Informática e o curso Técnico em Redes de Computadores, os dois na modalidade subsequente ao Ensino Médio no período noturno. Estes novos cursos também são ofertados através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). </p>\r\n<p>A Escola Estadual Waldemir Barros da Silva constrói a sua história com a participação de valiosos profissionais da educação, de pais e alunos, que tem como bandeira a defesa da escola pública, democrática e de qualidade.</p>', 'Rua Palmácea S/NBairro Moreninha I - Campo Grande/MS', '3314-9014', '3314-9062', 'prof.ari@outlook.com.br, eewbds@sed.ms.gov.br', 'eewbds@sed.ms.gov.br', 'https://www.facebook.com/eewbs', 'https://www.youtube.com/user/eewbs1993', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14943.947980691068!2d-54.5814073649684!3d-20.547712999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf42a2e93ffb9144b!2sEscola+Estadual+Waldemir+Barros+da+Silva!5e0!3m2!1spt-BR!2sus!4v1509966968771', 1),
('2018-11-27 00:00:00', 'Testes', 'EEWBS', 'Escola da Autoria e Ensino Médio Integrado ao Curso Técnico de Informática', '402b3693456f3978ac80920ba905badb.png', 'fad825f91dff46ad3db000bbfa45a16d.png', '2ed67de4b3de908be3149f13a13f86de.png', 'Oferecer uma educação de qualidade garantindo o acesso, a permanência e o sucesso de todos os alunos.', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. Formar alunos críticos capazes de transformar a comunidade em que vivem. Contribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado .', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. \r\nFormar alunos críticos capazes de transformar a comunidade em que vivem. \r\nContribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado.', '<p>Criada em 14 de março de 1991, através do Decreto n° 5.838, publicado no Diário Oficial de 16 de março de 1991, como Escola Estadual de Pré-Escolar Primeiro e Segundo Graus Waldemir Barros da Silva. Teve suas instalações físicas entregues pela Secretaria de Estado de Educação a então chefe do Núcleo Educacional 73, professora Arlene dos Santos Messa, em 19 de novembro de 1992. Constituía-se de 16 salas de aula, área administrativa e área para Educação Física, totalizando 4.148 m2 de área construída, no Conjunto Habitacional Moreninha I, na Rua Palmácea S/N, no município de Campo Grande, Estado de Mato Grosso do Sul. Seu nome homenageia um aluno da comunidade, morto ao ser atropelado por um motorista embriagado em junho de 1989, quando saía da Escola Arlindo de Sampaio Jorge, onde cursava o Ensino Médio. </p>\r\n<p>A organização administrativa e pedagógica teve início, em 26 de novembro de 1992, com a nomeação da diretora professora Luzia Silva Soares, cuja publicação ocorreu em 21 de janeiro de 1993, no Diário Oficial n 3467. </p>\r\n<p>O funcionamento oficial com início das matriculas foi em 11 de janeiro de 1993. As atividades letivas com os alunos em 08 de fevereiro de 1993. Porém, sua inauguração oficial, com a presença do então governador Pedro Pedrossian, ocorreu em 28 de dezembro de 1993. </p>\r\n<p>Para início das aulas tinha como mobiliário apenas os conjuntos escolares. No primeiro ano foram oferecidas 850 vagas para o Ensino Fundamental. Trazia uma proposta diferenciada, para o Ensino Médio, que a tornaria única no Estado de Mato Grosso do Sul, a implantação dos três cursos de 2° Grau no período noturno, onde dois cursos seriam implantados de forma imediata e um gradativo. Os cursos eram: Habilitação para o magistério de Pré-Escolar, 1ª a 4ª série, oferecendo de imediato quatro séries. O Curso Técnico em Contabilidade, implantou-se de imediato as três séries e o Curso Lei 7.044/1982 que foi implantado de forma gradativa a partir da 1ª série. Tal proposta tinha como objetivo a qualidade do ensino destes cursos, uma vez que possibilitaria a centralização de professores habilitados em uma só escola. </p>\r\n<p>A escola tinha ainda outras características que a diferenciava neste primeiro ano de funcionamento que era: quadra coberta, o que a tornava dentre as 80 escolas estaduais de Campo Grande a 2ª que contava com tal estrutura. Foi primeira escola da periferia a oferecer o Ensino de 2° Grau no diurno, com uma estrutura física arrojada para os padrões da década 1990. A escola junto com a comunidade decidiu pelo uso de uniforme escolar, e contava, ainda, com serviços de limpeza e segurança terceirizado.\r\nDesde o princípio a escola procurou adotar como referência teórica uma linha progressista, com vistas ao desenvolvimento de um trabalho dentro da tendência crítica dos conteúdos. As decisões eram tomadas coletivamente, com a participação de todos os segmentos, o conselho de classe era participativo. </p>\r\n<p>Em julho de 1993, realizou sua primeira eleição para diretor e Colegiado Escolar. Antes já havia realizado a eleição para a Associação de Pais e Mestres, tendo como primeiro presidente o professor Enéias Crispiano da Rocha. O primeiro presidente do Colegiado Escolar, eleito em 1993, foi o professor Celestino de Oliveira; o primeiro presidente do Grêmio estudantil foi o aluno José Mauro, uma das primeiras coordenadoras pedagógicas da escola professora Maria de Lourdes Matos. </p>\r\n<p>O primeiro Projeto Político Pedagógico foi elaborado com a participação de todos os segmentos: pais, alunos, professores e funcionários administrativos. A escola teve a sua proposta inicial para o 2° grau modificada pela Lei de Diretrizes e Bases da Educação Nacional 9.394/1996, que trouxe nova nomenclatura e nova organização para a Educação Básica. A partir de 1998 iniciou o processo gradativo de desativação dos cursos de Técnico em Contabilidade e Habilitação para o Magistério. Devido à grande demanda de alunos para o Ensino Médio diurno, foi desativando gradativamente o Ensino Fundamental de 1ª a 4ª série, que desde 1998 era organizado em ciclo. A escola possuía uma sala de aula adaptada como sala de recurso para alunos com Deficiência Auditiva, implantada em 1994. </p>\r\n<p>Recebeu em setembro de 1999 o laboratório de Informática, por meio do Proinfo, tendo como primeiro coordenador o professor João Carlos Rezende. Em 1999, iniciou o Projeto “Aulas Programadas” para o Ensino Noturno, com objetivo de diminuir a evasão escolar. O Projeto consistia em flexibilizar para o aluno o primeiro ou último tempo e desenvolver projeto de ensino. </p>\r\n<p>Destacou-se no processo da Constituinte Escolar participando com todos os segmentos das discussões e proposta para elaboração do Plano Estadual de Educação. A escola WBS junto com as demais escolas do COUNE (Conselho das Unidades Escolares ) Bandeira II organizaram um grande evento com mais de 300 pessoas para sistematizar o trabalho da constituinte. Neste ato contou com a participação do então Secretário de educação Pedro César Kemp, palestras com a Professora Dra. Vera Peroni e Galdêncio Frigoto. </p>\r\n<p>Em 2000, foi referência para a Rede Estadual de Ensino com relação ao trabalho com projetos, tendo sua experiência citada no caderno 2 do Ensino Médio da Secretaria de Estado de Educação. O trabalho dos alunos da escola está apresentado também na capa do Caderno 2.1 do Ensino Médio da SED.\r\nNo ano de 2003, a escola Waldemir Barros da Silva foi convidada a participar do projeto Educomrádio, concebido pelo Ministério da Educação, Universidade de São Paulo - USP e Secretaria de Estado de Educação, em Mato Grosso do Sul vinte escolas foram contempladas com o projeto; dez escolas da capital e as demais de municípios do interior. </p>\r\n<p>Foram capacitados dois professores da escola com um curso de 180 horas, em 2004 a escola recebeu os equipamentos para realização de atividades com os alunos. A coordenadora do projeto Educomrádio na escola é a professora Valdirene Ungari, que com grupos de alunos produz os programas na rádio, para serem utilizados como recurso nas aulas e fazem a programação cultural para toda semana. </p>\r\n<p>Em 2005 os projetos Educomrádio e História e Cultura afro-brasileira foram publicados na Revista do Ensino Médio de Mato Grosso do Sul da Secretaria de Estado de Educação.\r\nTambém ano de 2005, a escola inscreveu-se no Projeto proporcionado pelo MEC/ UNESCO para que as escolas brasileiras de Ensino Médio Noturno apresentassem proposta diferenciada para essa etapa de ensino. O projeto denominado “Melhoria do Ensino Médio Noturno” contou com a participação de 972 escolas brasileiras, destas dez foram selecionadas, sendo duas de cada região do país. A Escola Estadual Waldemir Barros da Silva foi uma das selecionadas e recebeu um prêmio no valor de R$ 140.000 (cento e quarenta mil reais) para investir em materiais, equipamentos e serviços, bem como capacitação dos profissionais. </p>\r\n<p>Em 16 de março de 2006, a Diretora Maria de Lourdes Matos, a Diretora adjunta Ernângela Maria de Sousa Calixto e a presidente da Associação de Pais e Mestres Ana Elisabete Correa representaram a escola em Brasília, evento realizado pelo MEC com as dez escolas premiadas. Onde cada coordenador do projeto apresentou o trabalho da escola e em seguida o representante legal da APM assinou o convênio para o recebimento do recurso.\r\n<p>No ano de 2007, foi autorizado o funcionamento do Curso Técnico em Informática integrado ao Ensino Médio – área Profissional: Informática – Educação Profissional Técnica de Nível Médio, sendo oferecido nos períodos matutino e noturno. O Estágio Supervisionado é oferecido aos alunos do Ensino Médio de acordo com a legislação vigente e as orientações emanadas da Secretaria de Estado de Educação. Esta unidade escolar participou por duas vezes do Prêmio Gestão Escolar com objetivo de avaliar boas práticas de gestão e de autoavaliação da escola com a finalidade melhorar a gestão e a qualidade do ensino público no país. </p>\r\n<p>No ano de 2010, a escola escreveu o dossiê referente ao trabalho realizado em 2009 e ficou entre as seis finalistas, como prêmio recebeu certificado e um computador para escola. No ano de 2011, a escola participou novamente escrevendo sua experiência referente ao ano Base 2010, ficando em primeiro lugar, sendo conferido lhe o Diploma destaque Estadual, como prêmio, recebeu um notebook e a diretora Ernângela M. S. Calixto ganhou uma viagem de intercâmbio para os Estados Unidos da América com a finalidade de conhecer o Sistema Educacional Americano e para troca de experiências. </p>\r\n<p>Em 2011 por meio de Convênio entre a Secretaria Estadual de Educação e o Instituto Federal de Mato Grosso do Sul a escola cede uma sala de aula e laboratório de informática, para o curso de educação profissional a distância por meio da Rede e-Tec, para o curso de Técnico em Edificações com duração de 02 (dois) anos, no período noturno e aos sábados. </p>\r\n<p>No dia 07 de Agosto de 2012, a escola recebeu a visita da diretora da Escola Urbana de Ensino Médio para a Lei e Justiça, Shannon B. Curran, de Nova Iorque, e do vice-diretor da Escola de Ensino Médio Fox Creek, Samuel Dickerson II, de Elyra, estado de Ohaio. Com o objetivo de conhecerem o sistema de ensino desenvolvido na escola e trocarem experiências com a direção, funcionários e estudantes.\r\nA escola passou a oferecer a partir de outubro de 2012, o curso Técnico em Informática Concomitante ao Ensino Médio no período vespertino, e que surgiu através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). Neste mesmo ano em parceria com Secretaria de Educação/SED e DETRAN/ MS a escola desenvolve o Programa Jovem Condutor, também realiza o Projeto do 1º Tempo, para o período noturno, onde organiza os conteúdos dados no 1º tempo, por meio de atividades orientadas para os alunos, que são postadas no blog da escola. </p>\r\n<p>Atualmente, a escola oferece o Ensino Fundamental com o 9º ano, no período vespertino, o Ensino Médio nos três períodos, Ensino Médio Profissional Técnico em Informática Integrado ao Médio, no matutino e noturno e Técnico em Informática concomitante ao Médio no período vespertino. A partir de setembro de 2013, a escola também passou a oferecer o curso Técnico em Informática e o curso Técnico em Redes de Computadores, os dois na modalidade subsequente ao Ensino Médio no período noturno. Estes novos cursos também são ofertados através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). </p>\r\n<p>A Escola Estadual Waldemir Barros da Silva constrói a sua história com a participação de valiosos profissionais da educação, de pais e alunos, que tem como bandeira a defesa da escola pública, democrática e de qualidade.</p>', 'Rua Palmácea S/NBairro Moreninha I - Campo Grande/MS', '3314-9014', '3314-9062', 'prof.ari@outlook.com.br, eewbds@sed.ms.gov.br', 'eewbds@sed.ms.gov.br', 'https://www.facebook.com/eewbs', 'https://www.youtube.com/user/eewbs1993', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14943.947980691068!2d-54.5814073649684!3d-20.547712999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf42a2e93ffb9144b!2sEscola+Estadual+Waldemir+Barros+da+Silva!5e0!3m2!1spt-BR!2sus!4v1509966968771', 1);
INSERT INTO `tb_instituicao` (`data_alteracao`, `nome_escola`, `sigla`, `slogan`, `logo_principal`, `logo_secundaria`, `favicon`, `missao`, `visao`, `valores`, `historico`, `endereco`, `telefone`, `telefone_alternativo`, `destinatario_contato`, `email`, `facebook`, `youtube`, `mapa`, `tem_profissional`) VALUES
('2018-11-27 02:55:36', 'Testes', 'EEWBS', 'Escola da Autoria e Ensino Médio Integrado ao Curso Técnico de Informática', '1ca59a0c86794cce7a93742bf56daa28.png', '19b50b9afa26712120fadaa0cf710b02.png', 'f3231cb5019ec7e362aae6ff4bd1501e.png', 'Oferecer uma educação de qualidade garantindo o acesso, a permanência e o sucesso de todos os alunos.', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. Formar alunos críticos capazes de transformar a comunidade em que vivem. Contribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado .', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. \r\nFormar alunos críticos capazes de transformar a comunidade em que vivem. \r\nContribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado.', '<p>Criada em 14 de março de 1991, através do Decreto n° 5.838, publicado no Diário Oficial de 16 de março de 1991, como Escola Estadual de Pré-Escolar Primeiro e Segundo Graus Waldemir Barros da Silva. Teve suas instalações físicas entregues pela Secretaria de Estado de Educação a então chefe do Núcleo Educacional 73, professora Arlene dos Santos Messa, em 19 de novembro de 1992. Constituía-se de 16 salas de aula, área administrativa e área para Educação Física, totalizando 4.148 m2 de área construída, no Conjunto Habitacional Moreninha I, na Rua Palmácea S/N, no município de Campo Grande, Estado de Mato Grosso do Sul. Seu nome homenageia um aluno da comunidade, morto ao ser atropelado por um motorista embriagado em junho de 1989, quando saía da Escola Arlindo de Sampaio Jorge, onde cursava o Ensino Médio. </p>\r\n<p>A organização administrativa e pedagógica teve início, em 26 de novembro de 1992, com a nomeação da diretora professora Luzia Silva Soares, cuja publicação ocorreu em 21 de janeiro de 1993, no Diário Oficial n 3467. </p>\r\n<p>O funcionamento oficial com início das matriculas foi em 11 de janeiro de 1993. As atividades letivas com os alunos em 08 de fevereiro de 1993. Porém, sua inauguração oficial, com a presença do então governador Pedro Pedrossian, ocorreu em 28 de dezembro de 1993. </p>\r\n<p>Para início das aulas tinha como mobiliário apenas os conjuntos escolares. No primeiro ano foram oferecidas 850 vagas para o Ensino Fundamental. Trazia uma proposta diferenciada, para o Ensino Médio, que a tornaria única no Estado de Mato Grosso do Sul, a implantação dos três cursos de 2° Grau no período noturno, onde dois cursos seriam implantados de forma imediata e um gradativo. Os cursos eram: Habilitação para o magistério de Pré-Escolar, 1ª a 4ª série, oferecendo de imediato quatro séries. O Curso Técnico em Contabilidade, implantou-se de imediato as três séries e o Curso Lei 7.044/1982 que foi implantado de forma gradativa a partir da 1ª série. Tal proposta tinha como objetivo a qualidade do ensino destes cursos, uma vez que possibilitaria a centralização de professores habilitados em uma só escola. </p>\r\n<p>A escola tinha ainda outras características que a diferenciava neste primeiro ano de funcionamento que era: quadra coberta, o que a tornava dentre as 80 escolas estaduais de Campo Grande a 2ª que contava com tal estrutura. Foi primeira escola da periferia a oferecer o Ensino de 2° Grau no diurno, com uma estrutura física arrojada para os padrões da década 1990. A escola junto com a comunidade decidiu pelo uso de uniforme escolar, e contava, ainda, com serviços de limpeza e segurança terceirizado.\r\nDesde o princípio a escola procurou adotar como referência teórica uma linha progressista, com vistas ao desenvolvimento de um trabalho dentro da tendência crítica dos conteúdos. As decisões eram tomadas coletivamente, com a participação de todos os segmentos, o conselho de classe era participativo. </p>\r\n<p>Em julho de 1993, realizou sua primeira eleição para diretor e Colegiado Escolar. Antes já havia realizado a eleição para a Associação de Pais e Mestres, tendo como primeiro presidente o professor Enéias Crispiano da Rocha. O primeiro presidente do Colegiado Escolar, eleito em 1993, foi o professor Celestino de Oliveira; o primeiro presidente do Grêmio estudantil foi o aluno José Mauro, uma das primeiras coordenadoras pedagógicas da escola professora Maria de Lourdes Matos. </p>\r\n<p>O primeiro Projeto Político Pedagógico foi elaborado com a participação de todos os segmentos: pais, alunos, professores e funcionários administrativos. A escola teve a sua proposta inicial para o 2° grau modificada pela Lei de Diretrizes e Bases da Educação Nacional 9.394/1996, que trouxe nova nomenclatura e nova organização para a Educação Básica. A partir de 1998 iniciou o processo gradativo de desativação dos cursos de Técnico em Contabilidade e Habilitação para o Magistério. Devido à grande demanda de alunos para o Ensino Médio diurno, foi desativando gradativamente o Ensino Fundamental de 1ª a 4ª série, que desde 1998 era organizado em ciclo. A escola possuía uma sala de aula adaptada como sala de recurso para alunos com Deficiência Auditiva, implantada em 1994. </p>\r\n<p>Recebeu em setembro de 1999 o laboratório de Informática, por meio do Proinfo, tendo como primeiro coordenador o professor João Carlos Rezende. Em 1999, iniciou o Projeto “Aulas Programadas” para o Ensino Noturno, com objetivo de diminuir a evasão escolar. O Projeto consistia em flexibilizar para o aluno o primeiro ou último tempo e desenvolver projeto de ensino. </p>\r\n<p>Destacou-se no processo da Constituinte Escolar participando com todos os segmentos das discussões e proposta para elaboração do Plano Estadual de Educação. A escola WBS junto com as demais escolas do COUNE (Conselho das Unidades Escolares ) Bandeira II organizaram um grande evento com mais de 300 pessoas para sistematizar o trabalho da constituinte. Neste ato contou com a participação do então Secretário de educação Pedro César Kemp, palestras com a Professora Dra. Vera Peroni e Galdêncio Frigoto. </p>\r\n<p>Em 2000, foi referência para a Rede Estadual de Ensino com relação ao trabalho com projetos, tendo sua experiência citada no caderno 2 do Ensino Médio da Secretaria de Estado de Educação. O trabalho dos alunos da escola está apresentado também na capa do Caderno 2.1 do Ensino Médio da SED.\r\nNo ano de 2003, a escola Waldemir Barros da Silva foi convidada a participar do projeto Educomrádio, concebido pelo Ministério da Educação, Universidade de São Paulo - USP e Secretaria de Estado de Educação, em Mato Grosso do Sul vinte escolas foram contempladas com o projeto; dez escolas da capital e as demais de municípios do interior. </p>\r\n<p>Foram capacitados dois professores da escola com um curso de 180 horas, em 2004 a escola recebeu os equipamentos para realização de atividades com os alunos. A coordenadora do projeto Educomrádio na escola é a professora Valdirene Ungari, que com grupos de alunos produz os programas na rádio, para serem utilizados como recurso nas aulas e fazem a programação cultural para toda semana. </p>\r\n<p>Em 2005 os projetos Educomrádio e História e Cultura afro-brasileira foram publicados na Revista do Ensino Médio de Mato Grosso do Sul da Secretaria de Estado de Educação.\r\nTambém ano de 2005, a escola inscreveu-se no Projeto proporcionado pelo MEC/ UNESCO para que as escolas brasileiras de Ensino Médio Noturno apresentassem proposta diferenciada para essa etapa de ensino. O projeto denominado “Melhoria do Ensino Médio Noturno” contou com a participação de 972 escolas brasileiras, destas dez foram selecionadas, sendo duas de cada região do país. A Escola Estadual Waldemir Barros da Silva foi uma das selecionadas e recebeu um prêmio no valor de R$ 140.000 (cento e quarenta mil reais) para investir em materiais, equipamentos e serviços, bem como capacitação dos profissionais. </p>\r\n<p>Em 16 de março de 2006, a Diretora Maria de Lourdes Matos, a Diretora adjunta Ernângela Maria de Sousa Calixto e a presidente da Associação de Pais e Mestres Ana Elisabete Correa representaram a escola em Brasília, evento realizado pelo MEC com as dez escolas premiadas. Onde cada coordenador do projeto apresentou o trabalho da escola e em seguida o representante legal da APM assinou o convênio para o recebimento do recurso.\r\n<p>No ano de 2007, foi autorizado o funcionamento do Curso Técnico em Informática integrado ao Ensino Médio – área Profissional: Informática – Educação Profissional Técnica de Nível Médio, sendo oferecido nos períodos matutino e noturno. O Estágio Supervisionado é oferecido aos alunos do Ensino Médio de acordo com a legislação vigente e as orientações emanadas da Secretaria de Estado de Educação. Esta unidade escolar participou por duas vezes do Prêmio Gestão Escolar com objetivo de avaliar boas práticas de gestão e de autoavaliação da escola com a finalidade melhorar a gestão e a qualidade do ensino público no país. </p>\r\n<p>No ano de 2010, a escola escreveu o dossiê referente ao trabalho realizado em 2009 e ficou entre as seis finalistas, como prêmio recebeu certificado e um computador para escola. No ano de 2011, a escola participou novamente escrevendo sua experiência referente ao ano Base 2010, ficando em primeiro lugar, sendo conferido lhe o Diploma destaque Estadual, como prêmio, recebeu um notebook e a diretora Ernângela M. S. Calixto ganhou uma viagem de intercâmbio para os Estados Unidos da América com a finalidade de conhecer o Sistema Educacional Americano e para troca de experiências. </p>\r\n<p>Em 2011 por meio de Convênio entre a Secretaria Estadual de Educação e o Instituto Federal de Mato Grosso do Sul a escola cede uma sala de aula e laboratório de informática, para o curso de educação profissional a distância por meio da Rede e-Tec, para o curso de Técnico em Edificações com duração de 02 (dois) anos, no período noturno e aos sábados. </p>\r\n<p>No dia 07 de Agosto de 2012, a escola recebeu a visita da diretora da Escola Urbana de Ensino Médio para a Lei e Justiça, Shannon B. Curran, de Nova Iorque, e do vice-diretor da Escola de Ensino Médio Fox Creek, Samuel Dickerson II, de Elyra, estado de Ohaio. Com o objetivo de conhecerem o sistema de ensino desenvolvido na escola e trocarem experiências com a direção, funcionários e estudantes.\r\nA escola passou a oferecer a partir de outubro de 2012, o curso Técnico em Informática Concomitante ao Ensino Médio no período vespertino, e que surgiu através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). Neste mesmo ano em parceria com Secretaria de Educação/SED e DETRAN/ MS a escola desenvolve o Programa Jovem Condutor, também realiza o Projeto do 1º Tempo, para o período noturno, onde organiza os conteúdos dados no 1º tempo, por meio de atividades orientadas para os alunos, que são postadas no blog da escola. </p>\r\n<p>Atualmente, a escola oferece o Ensino Fundamental com o 9º ano, no período vespertino, o Ensino Médio nos três períodos, Ensino Médio Profissional Técnico em Informática Integrado ao Médio, no matutino e noturno e Técnico em Informática concomitante ao Médio no período vespertino. A partir de setembro de 2013, a escola também passou a oferecer o curso Técnico em Informática e o curso Técnico em Redes de Computadores, os dois na modalidade subsequente ao Ensino Médio no período noturno. Estes novos cursos também são ofertados através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). </p>\r\n<p>A Escola Estadual Waldemir Barros da Silva constrói a sua história com a participação de valiosos profissionais da educação, de pais e alunos, que tem como bandeira a defesa da escola pública, democrática e de qualidade.</p>', 'Rua Palmácea S/NBairro Moreninha I - Campo Grande/MS', '3314-9014', '3314-9062', 'prof.ari@outlook.com.br, eewbds@sed.ms.gov.br', 'eewbds@sed.ms.gov.br', 'https://www.facebook.com/eewbs', 'https://www.youtube.com/user/eewbs1993', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14943.947980691068!2d-54.5814073649684!3d-20.547712999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf42a2e93ffb9144b!2sEscola+Estadual+Waldemir+Barros+da+Silva!5e0!3m2!1spt-BR!2sus!4v1509966968771', 1),
('2018-11-27 02:57:12', 'Teste Eletiva', 'EEWBS', 'Escola da Autoria e Ensino Médio Integrado ao Curso Técnico de Informática', 'a32f6585fb98b09efc1282186fd73b8b.png', '40b506c1c9203c5c281d5c83966b86f4.png', '73644db224b55c8dd588c18e612128e1.png', 'Oferecer uma educação de qualidade garantindo o acesso, a permanência e o sucesso de todos os alunos.', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. Formar alunos críticos capazes de transformar a comunidade em que vivem. Contribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado .', 'Cumprir os princípios da educação quanto a qualidade de educação para todos. \r\nFormar alunos críticos capazes de transformar a comunidade em que vivem. \r\nContribuir para o desenvolvimento do aluno dando-lhe acesso ao conhecimento historicamente acumulado.', '<p>Criada em 14 de março de 1991, através do Decreto n° 5.838, publicado no Diário Oficial de 16 de março de 1991, como Escola Estadual de Pré-Escolar Primeiro e Segundo Graus Waldemir Barros da Silva. Teve suas instalações físicas entregues pela Secretaria de Estado de Educação a então chefe do Núcleo Educacional 73, professora Arlene dos Santos Messa, em 19 de novembro de 1992. Constituía-se de 16 salas de aula, área administrativa e área para Educação Física, totalizando 4.148 m2 de área construída, no Conjunto Habitacional Moreninha I, na Rua Palmácea S/N, no município de Campo Grande, Estado de Mato Grosso do Sul. Seu nome homenageia um aluno da comunidade, morto ao ser atropelado por um motorista embriagado em junho de 1989, quando saía da Escola Arlindo de Sampaio Jorge, onde cursava o Ensino Médio. </p>\r\n<p>A organização administrativa e pedagógica teve início, em 26 de novembro de 1992, com a nomeação da diretora professora Luzia Silva Soares, cuja publicação ocorreu em 21 de janeiro de 1993, no Diário Oficial n 3467. </p>\r\n<p>O funcionamento oficial com início das matriculas foi em 11 de janeiro de 1993. As atividades letivas com os alunos em 08 de fevereiro de 1993. Porém, sua inauguração oficial, com a presença do então governador Pedro Pedrossian, ocorreu em 28 de dezembro de 1993. </p>\r\n<p>Para início das aulas tinha como mobiliário apenas os conjuntos escolares. No primeiro ano foram oferecidas 850 vagas para o Ensino Fundamental. Trazia uma proposta diferenciada, para o Ensino Médio, que a tornaria única no Estado de Mato Grosso do Sul, a implantação dos três cursos de 2° Grau no período noturno, onde dois cursos seriam implantados de forma imediata e um gradativo. Os cursos eram: Habilitação para o magistério de Pré-Escolar, 1ª a 4ª série, oferecendo de imediato quatro séries. O Curso Técnico em Contabilidade, implantou-se de imediato as três séries e o Curso Lei 7.044/1982 que foi implantado de forma gradativa a partir da 1ª série. Tal proposta tinha como objetivo a qualidade do ensino destes cursos, uma vez que possibilitaria a centralização de professores habilitados em uma só escola. </p>\r\n<p>A escola tinha ainda outras características que a diferenciava neste primeiro ano de funcionamento que era: quadra coberta, o que a tornava dentre as 80 escolas estaduais de Campo Grande a 2ª que contava com tal estrutura. Foi primeira escola da periferia a oferecer o Ensino de 2° Grau no diurno, com uma estrutura física arrojada para os padrões da década 1990. A escola junto com a comunidade decidiu pelo uso de uniforme escolar, e contava, ainda, com serviços de limpeza e segurança terceirizado.\r\nDesde o princípio a escola procurou adotar como referência teórica uma linha progressista, com vistas ao desenvolvimento de um trabalho dentro da tendência crítica dos conteúdos. As decisões eram tomadas coletivamente, com a participação de todos os segmentos, o conselho de classe era participativo. </p>\r\n<p>Em julho de 1993, realizou sua primeira eleição para diretor e Colegiado Escolar. Antes já havia realizado a eleição para a Associação de Pais e Mestres, tendo como primeiro presidente o professor Enéias Crispiano da Rocha. O primeiro presidente do Colegiado Escolar, eleito em 1993, foi o professor Celestino de Oliveira; o primeiro presidente do Grêmio estudantil foi o aluno José Mauro, uma das primeiras coordenadoras pedagógicas da escola professora Maria de Lourdes Matos. </p>\r\n<p>O primeiro Projeto Político Pedagógico foi elaborado com a participação de todos os segmentos: pais, alunos, professores e funcionários administrativos. A escola teve a sua proposta inicial para o 2° grau modificada pela Lei de Diretrizes e Bases da Educação Nacional 9.394/1996, que trouxe nova nomenclatura e nova organização para a Educação Básica. A partir de 1998 iniciou o processo gradativo de desativação dos cursos de Técnico em Contabilidade e Habilitação para o Magistério. Devido à grande demanda de alunos para o Ensino Médio diurno, foi desativando gradativamente o Ensino Fundamental de 1ª a 4ª série, que desde 1998 era organizado em ciclo. A escola possuía uma sala de aula adaptada como sala de recurso para alunos com Deficiência Auditiva, implantada em 1994. </p>\r\n<p>Recebeu em setembro de 1999 o laboratório de Informática, por meio do Proinfo, tendo como primeiro coordenador o professor João Carlos Rezende. Em 1999, iniciou o Projeto “Aulas Programadas” para o Ensino Noturno, com objetivo de diminuir a evasão escolar. O Projeto consistia em flexibilizar para o aluno o primeiro ou último tempo e desenvolver projeto de ensino. </p>\r\n<p>Destacou-se no processo da Constituinte Escolar participando com todos os segmentos das discussões e proposta para elaboração do Plano Estadual de Educação. A escola WBS junto com as demais escolas do COUNE (Conselho das Unidades Escolares ) Bandeira II organizaram um grande evento com mais de 300 pessoas para sistematizar o trabalho da constituinte. Neste ato contou com a participação do então Secretário de educação Pedro César Kemp, palestras com a Professora Dra. Vera Peroni e Galdêncio Frigoto. </p>\r\n<p>Em 2000, foi referência para a Rede Estadual de Ensino com relação ao trabalho com projetos, tendo sua experiência citada no caderno 2 do Ensino Médio da Secretaria de Estado de Educação. O trabalho dos alunos da escola está apresentado também na capa do Caderno 2.1 do Ensino Médio da SED.\r\nNo ano de 2003, a escola Waldemir Barros da Silva foi convidada a participar do projeto Educomrádio, concebido pelo Ministério da Educação, Universidade de São Paulo - USP e Secretaria de Estado de Educação, em Mato Grosso do Sul vinte escolas foram contempladas com o projeto; dez escolas da capital e as demais de municípios do interior. </p>\r\n<p>Foram capacitados dois professores da escola com um curso de 180 horas, em 2004 a escola recebeu os equipamentos para realização de atividades com os alunos. A coordenadora do projeto Educomrádio na escola é a professora Valdirene Ungari, que com grupos de alunos produz os programas na rádio, para serem utilizados como recurso nas aulas e fazem a programação cultural para toda semana. </p>\r\n<p>Em 2005 os projetos Educomrádio e História e Cultura afro-brasileira foram publicados na Revista do Ensino Médio de Mato Grosso do Sul da Secretaria de Estado de Educação.\r\nTambém ano de 2005, a escola inscreveu-se no Projeto proporcionado pelo MEC/ UNESCO para que as escolas brasileiras de Ensino Médio Noturno apresentassem proposta diferenciada para essa etapa de ensino. O projeto denominado “Melhoria do Ensino Médio Noturno” contou com a participação de 972 escolas brasileiras, destas dez foram selecionadas, sendo duas de cada região do país. A Escola Estadual Waldemir Barros da Silva foi uma das selecionadas e recebeu um prêmio no valor de R$ 140.000 (cento e quarenta mil reais) para investir em materiais, equipamentos e serviços, bem como capacitação dos profissionais. </p>\r\n<p>Em 16 de março de 2006, a Diretora Maria de Lourdes Matos, a Diretora adjunta Ernângela Maria de Sousa Calixto e a presidente da Associação de Pais e Mestres Ana Elisabete Correa representaram a escola em Brasília, evento realizado pelo MEC com as dez escolas premiadas. Onde cada coordenador do projeto apresentou o trabalho da escola e em seguida o representante legal da APM assinou o convênio para o recebimento do recurso.\r\n<p>No ano de 2007, foi autorizado o funcionamento do Curso Técnico em Informática integrado ao Ensino Médio – área Profissional: Informática – Educação Profissional Técnica de Nível Médio, sendo oferecido nos períodos matutino e noturno. O Estágio Supervisionado é oferecido aos alunos do Ensino Médio de acordo com a legislação vigente e as orientações emanadas da Secretaria de Estado de Educação. Esta unidade escolar participou por duas vezes do Prêmio Gestão Escolar com objetivo de avaliar boas práticas de gestão e de autoavaliação da escola com a finalidade melhorar a gestão e a qualidade do ensino público no país. </p>\r\n<p>No ano de 2010, a escola escreveu o dossiê referente ao trabalho realizado em 2009 e ficou entre as seis finalistas, como prêmio recebeu certificado e um computador para escola. No ano de 2011, a escola participou novamente escrevendo sua experiência referente ao ano Base 2010, ficando em primeiro lugar, sendo conferido lhe o Diploma destaque Estadual, como prêmio, recebeu um notebook e a diretora Ernângela M. S. Calixto ganhou uma viagem de intercâmbio para os Estados Unidos da América com a finalidade de conhecer o Sistema Educacional Americano e para troca de experiências. </p>\r\n<p>Em 2011 por meio de Convênio entre a Secretaria Estadual de Educação e o Instituto Federal de Mato Grosso do Sul a escola cede uma sala de aula e laboratório de informática, para o curso de educação profissional a distância por meio da Rede e-Tec, para o curso de Técnico em Edificações com duração de 02 (dois) anos, no período noturno e aos sábados. </p>\r\n<p>No dia 07 de Agosto de 2012, a escola recebeu a visita da diretora da Escola Urbana de Ensino Médio para a Lei e Justiça, Shannon B. Curran, de Nova Iorque, e do vice-diretor da Escola de Ensino Médio Fox Creek, Samuel Dickerson II, de Elyra, estado de Ohaio. Com o objetivo de conhecerem o sistema de ensino desenvolvido na escola e trocarem experiências com a direção, funcionários e estudantes.\r\nA escola passou a oferecer a partir de outubro de 2012, o curso Técnico em Informática Concomitante ao Ensino Médio no período vespertino, e que surgiu através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). Neste mesmo ano em parceria com Secretaria de Educação/SED e DETRAN/ MS a escola desenvolve o Programa Jovem Condutor, também realiza o Projeto do 1º Tempo, para o período noturno, onde organiza os conteúdos dados no 1º tempo, por meio de atividades orientadas para os alunos, que são postadas no blog da escola. </p>\r\n<p>Atualmente, a escola oferece o Ensino Fundamental com o 9º ano, no período vespertino, o Ensino Médio nos três períodos, Ensino Médio Profissional Técnico em Informática Integrado ao Médio, no matutino e noturno e Técnico em Informática concomitante ao Médio no período vespertino. A partir de setembro de 2013, a escola também passou a oferecer o curso Técnico em Informática e o curso Técnico em Redes de Computadores, os dois na modalidade subsequente ao Ensino Médio no período noturno. Estes novos cursos também são ofertados através de convênio da Secretaria Estadual de Educação com o Ministério da Educação, para implementação do Programa Nacional de Acesso ao Ensino Técnico e Emprego (Pronatec). </p>\r\n<p>A Escola Estadual Waldemir Barros da Silva constrói a sua história com a participação de valiosos profissionais da educação, de pais e alunos, que tem como bandeira a defesa da escola pública, democrática e de qualidade.</p>', 'Rua Palmácea S/NBairro Moreninha I - Campo Grande/MS', '3314-9014', '3314-9062', 'prof.ari@outlook.com.br, eewbds@sed.ms.gov.br', 'eewbds@sed.ms.gov.br', 'https://www.facebook.com/eewbs', 'https://www.youtube.com/user/eewbs1993', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14943.947980691068!2d-54.5814073649684!3d-20.547712999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf42a2e93ffb9144b!2sEscola+Estadual+Waldemir+Barros+da+Silva!5e0!3m2!1spt-BR!2sus!4v1509966968771', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_media`
--

CREATE TABLE `tb_media` (
  `id_media` int(11) NOT NULL,
  `fk_categoria` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL DEFAULT 'Falha ao carregar a imagem'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_media`
--

INSERT INTO `tb_media` (`id_media`, `fk_categoria`, `titulo`, `descricao`, `url`, `alt`) VALUES
(11, 2, 'Brincando de Industrias Stark - Parte 3', 'Eletiva do primeiro semestre de 2017 - Supervisão da professora Enilda Aparecida Mendes Rosa Cáceres', 'https://www.youtube.com/embed/2lla42bI9NM', 'Falha ao carregar a imagem'),
(13, 3, 'Apresentação Externa', 'Apresentação externa dos projetos', 'ad972bb2022fbcaec6c0f6495e470d4b.jpeg', 'Apresentação Externa'),
(14, 3, 'Apresentação Externa', 'Apresentação Externa', 'cf44b93d8346d307d1f4f5c97379defc.jpeg', 'Apresentação Externa'),
(15, 3, 'Reportagem TV-Morena', 'Gravação da Reportagem da Equipe da TV-Morena', 'e5842884c2735522ff0f22a2998b10e2.jpeg', 'Gravação da Reportagem TV-Morena'),
(16, 3, 'Integrantes da Sala Magia do Integrado', 'Professora Enilda e os alunos da Sala Magia do Integrado', 'a8baf43cafd039ddbb194cb603cda6aa.jpeg', 'Integrantes da Sala Magia do Integrado'),
(17, 3, 'Cubo Mágico', 'Projeto do 2º Ano Integrado com orientação da professora Enilda', 'd22ec9ca7a5443019036874f81c0924f.jpeg', 'Cubo Mágico'),
(18, 3, 'Apresentação do Cubo de Led 8x8x8', 'Apresentação do Cubo de Led 8x8x8', '0a7183bbdc8c9450b289ca92980ae5ba.jpeg', 'Apresentação do Cubo de Led 8x8x8'),
(19, 3, 'Apresentação do Case Mode', 'Apresentação do Case Mode', '763e363b8331d3d0b3533fec0aef5cc5.jpeg', 'Apresentação do Case Mode'),
(20, 3, 'Sala Magia do Integrado', 'Sala Magia do Integrado', '0c10f67935c1da640db87e85610b30bc.jpeg', 'Sala Magia do Integrado'),
(21, 3, 'Sala Magia do Integrado', 'Sala Magia do Integrado', '8a8110671d9342b36e6f83e72bad4170.jpeg', 'Sala Magia do Integrado'),
(22, 3, 'Sala Magia do Integrado', 'Sala Magia do Integrado', '4e79cb4f8e6a949457712845e3ce10ab.jpeg', 'Sala Magia do Integrado'),
(23, 3, 'Sala Magia do Integrado', 'Aluno Dalbert Apresentado o projeto na sala Magia do Integrado', '3d1005b8053f3b96223772d964c15c09.jpeg', 'Sala Magia do Integrado'),
(24, 3, 'Sala Magia do Integrado', 'Sala Magia do Integrado', '70fec74d5f5519d7f4d0466e376bc88e.jpeg', 'Sala Magia do Integrado'),
(25, 3, 'Sala Magia do Integrado', 'Sala Magia do Integrado', 'a6c50b9b1484781909244af085a2106f.jpeg', 'Sala Magia do Integrado'),
(27, 4, 'Equipe da Base Técnica', 'Professores do Curso Técnico em Informática Integrado ao Ensino Médio', '6368e0507b1c6b874c934d12c4b698d3.jpg', 'Professores do Curso Técnico em Informática Integrado ao Ensino Médio'),
(28, 4, 'Turma do Terceiro Ano A Regular', 'Turma do Terceiro Ano A Regular', 'c9b17494c95ac2b85aa3d0f8304c4630.jpg', 'Turma do Terceiro Ano A Regular'),
(29, 4, 'Aluno Dalbert e Professora Larissa', 'Aluno Dalbert e Professora Larissa', '55973f222a88b1efc1035c4f98556448.jpg', 'Aluno Dalbert e Professora Larissa'),
(30, 4, 'Aluno Gabriel e Professora Carina', 'Aluno Gabriel e Professora Carina', 'a3f80cdaf87917eadd997578abe0f709.jpg', 'Aluno Gabriel e Professora Carina'),
(31, 4, 'Aluno Isac e Professor Thiago', 'Aluno Isac e Professor Thiago', 'f8bb8b6f5abbf2f9d4243273a4d38cd9.jpg', 'Aluno Isac e Professor Thiago'),
(32, 4, 'Aluna Isadora e professora Enilda', 'Aluna Isadora e professora Enilda', '55202c1129a2f6ea1dc4a99622eb16d3.jpg', 'Aluna Isadora e professora Enilda'),
(33, 4, 'Aluna Jennifer e professora Larissa', 'Aluna Jennifer e professora Larissa', 'a5f75765f0ec12a3a561bd334919a9a5.jpg', 'Aluna Jennifer e professora Larissa'),
(34, 4, 'Aluna Larissa e Professor Thiago', 'Aluna Larissa e Professor Thiago', '49806e7f150c0bf363e4c31378418d31.jpg', 'Aluna Larissa e Professor Thiago'),
(35, 4, 'Aluno Rafael e Professora Marilucia', 'Aluno Rafael e Professora Marilucia', 'c8f6b7db62670ad1de531d8e29042aea.jpg', 'Aluno Rafael e Professora Marilucia'),
(36, 4, 'Aluno Tiago e Professor Marcelo', 'Aluno Tiago e Professor Marcelo', '6a5cb0320bae3c5bb3c1b294896e2e06.jpg', 'Aluno Tiago e Professor Marcelo'),
(37, 4, 'Aluno Willian e Coordenador Ari', 'Aluno Willian e Coordenador Ari', '7fb15c68556215f1376f2e988244ffa1.jpg', 'Aluno Willian e Coordenador Ari'),
(38, 5, 'Participantes junto com a Equipe', 'Participantes junto com a Equipe', 'ea113be876148e7ba0275e39222eeac2.jpg', 'Participantes junto com a Equipe'),
(39, 5, 'Dojo de Ruby on Rails', 'Dojo de Ruby on Rails', 'f392a090ca359dfa25b5297ba7d0969a.jpg', 'Dojo de Ruby on Rails'),
(40, 5, 'Dojo de Ruby on Rails', 'Dojo de Ruby on Rails', '5c73d8a353fc2a4fcc54f0bdeea046b0.jpg', 'Dojo de Ruby on Rails'),
(41, 5, 'Dojo de Ruby on Rails', 'Dojo de Ruby on Rails', '4a31385613cc8811673bed18548d9f09.jpg', 'Dojo de Ruby on Rails'),
(42, 5, 'Dojo de Ruby on Rails', 'Dojo de Ruby on Rails', '02cfeb41ad64c493edc4d4502a0cf0ea.jpg', 'Dojo de Ruby on Rails'),
(43, 5, 'Participantes do DOJO de Ruby on Rails', 'Participantes do DOJO de Ruby on Rails', 'f8aefcba2e0e0d65d6efc922917a1392.jpg', 'Participantes do DOJO de Ruby on Rails'),
(44, 5, 'Participantes do DOJO de Ruby on Rails', 'Participantes do DOJO de Ruby on Rails', '0ab1ad024cfe986690ee51ba577a1844.jpg', 'Participantes do DOJO de Ruby on Rails'),
(45, 5, 'Participantes do DOJO de Ruby on Rails juntamente com a equipe da JERA', 'Participantes do DOJO de Ruby on Rails juntamente com a equipe da JERA', 'ec5e28ef8b4caa6f7bec3a4c1b35943e.jpg', 'Participantes do DOJO de Ruby on Rails juntamente com a equipe da JERA'),
(46, 5, 'Participantes do DOJO de Ruby on Rails juntamente com a equipe da JERA', 'Participantes do DOJO de Ruby on Rails juntamente com a equipe da JERA', 'edda31d52a7558892b121c6d5273619b.jpg', 'Participantes do DOJO de Ruby on Rails juntamente com a equipe da JERA'),
(47, 5, 'Participantes do DOJO de Ruby on Rails juntamente com a equipe da JERA', 'Participantes do DOJO de Ruby on Rails juntamente com a equipe da JERA', '6fe3ea6c0fe3aef60cbc6206313ae65e.jpg', 'Participantes do DOJO de Ruby on Rails juntamente com a equipe da JERA'),
(48, 3, 'Alunos da Eletiva Junto com o professor Orientador Eder', 'Alunos da Eletiva Junto com o professor Orientador Eder', '744b11542e71465ce01188bd6f49f5ef.jpeg', 'Alunos da Eletiva Junto com o professor Orientador Eder'),
(49, 3, 'Presença de Pedro Demo durante apresentações da FECCAT', 'Presença de Pedro Demo durante apresentações da FECCAT', '1e759291b34d63da954c51d7823050c3.jpeg', 'Presença de Pedro Demo durante apresentações da FECCAT'),
(50, 3, 'Presença de Pedro Demo nas apresentações dos projetos da FECCAT', 'Durante a semana de apresentações da FECCAT (Feira Cultural Artística Tecnológica) presença de Dr.Pedro Demo escritor e doutor na área da educação para apreciar os projetos a serem apresentados. ', 'd82e5cbfcafb928a310d96855c54fab7.jpeg', 'Presença de Pedro Demo em apresentações da FECCAT (Feira Cultural Artística Tecnológica)'),
(51, 3, 'Apresentação da Eletiva Reabilitação Psicossocial Através das Oficinas Artesanais', 'Apresentação feita por alunos da escola Waldemir  Barros da Silva durante apresentações da FECCAT (Feira Cultural Artística Tecnológica) na Eletiva Reabilitação Psicossocial Através das Oficinas Artesanais das Orientadoras Cristiane e Marilúcia.', 'dcf5dc13ed5d1a270ee3cb8f2ad304f1.jpeg', 'Apresentação da Eletiva Reabilitação Psicossocial Através das Oficinas Artesanais'),
(52, 3, 'Projetos da Eletiva o Poder das Essências realizados pelos alunos da escola Waldemir Barros da Silva ', 'Produtos de Higiene pessoal produzidos de forma orgânica pelos alunos juntamente com as Orientadoras Vanessa e Rejane durante o ano ', 'c8b4ef4c9a31149f89f259911a1f329a.jpeg', 'Projetos da Eletiva o Poder das Essências realizados pelos alunos da escola Waldemir Barros da Silva '),
(53, 6, 'DEVPLAY: a diversão de programar', 'Eletiva DEVPLAY: a diversão de programar.\r\n<br/>\r\nProfessores Marcelo e Ucleber', 'https://www.youtube.com/embed/5xnkRVur_WY', 'Falha ao carregar a imagem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_noticia`
--

CREATE TABLE `tb_noticia` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `chamada` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `data` date NOT NULL,
  `fonte` varchar(255) NOT NULL,
  `ativa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_noticia`
--

INSERT INTO `tb_noticia` (`id_noticia`, `titulo`, `chamada`, `imagem`, `texto`, `data`, `fonte`, `ativa`) VALUES
(4, 'Inscrições abertas para nova Turma do PRONATEC - Vespertino', '', '2ea9a07c23240d67e257db988a8871ef.jpg', '<p>Estão abertas as inscrições para a nova turma no período vespertino do PRONATEC -  Curso Técnico em Informática, com início das aulas previsto para o dia 31/07/2014.</p>\r\n<p>A turma é da modalidade concomitante, e por isso tem os seguintes pré-requisitos para os candidatos se inscreverem:<p>\r\n* ser aluno de escola pública, e estar cursando o ensino médio;<br>\r\n* ter completado a idade mínima de 16 anos, até o inicio do curso (31/07/2014);<br>\r\n* possuir cadastro de pessoa física (CPF).<br>\r\n<p>As inscrições podem ser feitas na secretaria da escola, no período vespertino e noturno, ou através do site no endereço: </p>\r\n<p>www.eewbs.com.br/site/pre-inscricoes.php</P>\r\n<p>Qualquer dúvida ou esclarecimentos, entrar em contato pelos telefones 3314-3014 ou 3314-9062.</p>\r\n', '2014-07-20', 'EE WBS (SED)', 1),
(5, 'As matriculas para 2015 na Rede Estadual de Ensino, já estão abertas', '', 'ccbd2f9b528ca7e8e7b1e6de1490dd7f.png', 'Já estão abertas as inscrições para as matrículas do ano de 2015, para a Rede Estadual de Ensino. Os interessados deverão acessar na internet o site <a href=\"http://www.matriculadigital.ms.gov.br\" target=\"_blank\"> www.matriculadigital.ms.gov.br</a> e realizar sua pré-matrícula, conforme calendário já divulgado. \r\n', '2014-11-17', 'SED', 1),
(6, 'Abertas as inscrições para o Ensino Médio Integrado', '', '4678f3ce9d43e3afbac17aa4f8361c92.png', 'A Escola Estadual Waldemir Barros da Silva, informa que estão abertas as inscrições para as turmas do <b>Ensino Médio Integrado</b> do Curso <b>Técnico em Informática</b>.\r\nPara o ano de 2015 serão abertas no mínimo duas turmas, uma no período matutino e outra no período noturno, totalizando 70 vagas.\r\nOs interessados devem realizar a pré-matricula no site da \r\n<a href=\"http://www.matriculadigital.ms.gov.br/inscricao/identificarAluno.aspx?InscricaoID=66&TipoEnsinoID=2\" target=\"_blank\">\r\nSED - Educação Profissional\r\n</a>.', '2014-11-17', 'SED', 1),
(7, 'Nova turma de curso técnico para o PRONATEC ', '', '67b1fdbf21ab489d886ead122e8c9c8d.jpg', 'Estamos abrindo uma nova turma do <b>Curso Técnico</b> no período vespertino \r\nde <b>Redes de Computadores (Concomitante)</b>, que é para quem esta estudando o Ensino Médio em escola pública.<br>\r\nSão 40 (quarenta) vagas para início previsto para o dia 24 de novembro de 2014.\r\nOs interessados devem acessar a nossa página de \r\n <a href=\"http://www.eewbs.com.br/site/pre-inscricoes.php\" target=\"_blank\">\r\n<font color=\"#3333ff\"><font face=\"Arial\"><font size=\"2\" style=\"font-size: 11pt\"><b>\r\npré-inscrição</font></font></font>\r\n</a>\r\n na parte da <b>Educação Profissional</b>, ou então realizar a matrícula direto no site do \r\n<a href=\"http://pronatec.mec.gov.br/inscricao/\" target=\"_blank\">\r\n<font color=\"#3333ff\"><font face=\"Arial\"><font size=\"2\" style=\"font-size: 11pt\"><b>\r\nPronatec </font></font></font>\r\n</a>.', '2014-11-17', 'SED', 1),
(8, 'Premiação das turmas ganhadoras dos Projetos de 2014 (Gincamática e Superação)', '', 'e2d31a939fdc33edb4850ec341910d60.jpg', 'As turmas/equipes que venceram os projetos da Gincamática (2º D, 1º H e 3º EMI B)  e Superação (2º C) deste ano, ganharão como prêmio uma sessão de cinema, com direito a pipoca e refrigerante. Os Agentes Jovens que se destacaram neste ano, também foram convidados para participar.<br>\r\nSerá no dia 25/11/2014 as 08h  no Cinépolis - Shopping Norte Sul Plaza.\r\nParabéns a todos os ganhadores e aos Agentes Jovens pelo bom trabalho desenvolvido...o ano que vem tem mais! <br>\r\nVejam o trailer do filme \r\n<a href=\"https://www.youtube.com/watch?v=bndlriD5Gek\" target=\"_blank\">\r\n<b>aqui</b></a>.', '2014-11-18', 'WBS', 1),
(9, 'Resultado da Gincana da Semana de Informática WBSTEC 2014', '', 'af7f326b7fd3869c0a5603f9b1a627d0.png', 'Finalmente chegamos ao resultado final da nossa Gincana da Semana de Informática WBSTEC 2014. <br><br>\r\nA equipe ganhadora foi a de <b>número 3</b>, com 139 (cento e trina e nove) pontos. Ela é formada pelos alunos: <br><br>\r\nEduardo (RC I), Ana Karolayne (3º EMI B), Sabina (3º EMI B), Pedro (3º EMI B), Francielle Gill (1º EMI A), Mariani (1º EMI A), Karen (2º EMI A), Natasha (2º EMI A), Gabrielly (3º EMI A), Nathália (3º EMI A), Bruno Aparecido (TI Vesp), Juliana (TI Vesp), Maycon (TI Vesp) e Fernanda (TI Vesp).<br><br>\r\nO segundo lugar ficou com a <b>equipe 4</b> com 80 (oitenta) pontos e o terceiro lugar ficou com a <b>equipe 9</b> com 70 (setenta) pontos.<br><br>\r\nParabéns a todos pela participação.', '2014-11-18', 'WBSTEC', 1),
(10, 'Semana de Informática WBSTEC 2015', '', '21aebbbcb67f3cc02375b27e8d27b969.png', 'A Escola Estadual Waldemir Barros da Silva realiza a \"Semana de Informática WBSTEC 2015\", um evento organizado pela área de Educação Profissional através da coordenação técnica e seu corpo docente, em parceria com as demais áreas de conhecimentos da escola (Linguagem, Natureza e Humanas). Ela faz parte do calendário anual de projetos da escola e este ano está na sua 5º edição. Será realizado nos dias 06, 07 e 08 de Outubro de 2015 na sede da escola, situada na Rua Palmácia, s/n - Bairro Moreninha I em Campo Grande / MS. O evento conta também com parcerias de instituições de ensino púlicas e privadas, além de empresas do setor de TI (Tecnologia da Informação).', '2015-10-06', 'EE Waldemir Barros da Silva', 1),
(11, '<br><br>Educação Integral, Regular e Profissional em 2016', '', '6506f59e2f69a882cfdd35cdfac9512e.jpg', 'Já estão abertas as matrículas para as escolas estaduais que, neste ano, vão oferecer o Ensino Médio em período integral. O projeto é experimental da Secretaria Estadual de Educação e propõe uma nova pedagogia de ensino para adolescentes e jovens.<br><br>\r\n\r\nVeja reportagem completa no seguinte endereço:<br><br>\r\n\r\n<a href=\"http://www.sbtms.com.br/noticia/ensino-medio-integral-e-a-novidade-para-os-alunos-de-escolas-estaduais/15547\" target=\"_blank\"> SBT Noticia </a>\r\n<br><br>\r\nOu assista o video no link abaixo:\r\n<br><br>\r\n<a href=\"https://www.youtube.com/watch?v=Gpq8IgmVVLE&feature=youtu.be\" target=\"_blank\"> Vídeo da Reportagem </a>', '2016-02-11', 'www.sbtms.com.br/noticia', 1),
(12, 'Festa Junina Interna WBS 2016', '', '059a6af175f9a7a3390976b28230575a.jpg', 'Olá Pessoal...\r\nVamos participar da nossa tradicional Festa Julina, que será no dia 08 de Julho. Cada turno terá uma festa. Vamos encerrar nosso primeiro semestre com chave de ouro.', '2016-07-07', 'EE WBS', 1),
(13, 'Reunião de Pais e Responsáveis', 'Reunião de Pais e Responsáveis', '4a601fd2fc9a2f0ca0da22a5d65e6dea.png', 'No próximo sábado, dia 06 de agosto de 2016 as 8h, a Escola realizará a reunião de Pais e Responsáveis, para a entrega dos boletins do 2º Bimestre. Contamos com a presença de todos.', '2016-08-04', 'Coordenação e Direção da EE WBS', 1),
(14, 'ESCOLA DA AUTORIA, PRÊMIO GESTÃO ESCOLAR', 'ESCOLA DA AUTORIA, PRÊMIO GESTÃO ESCOLAR', 'ce72100a6e5ab790f1297e364040f71f.png', 'Campo Grande (MS) – Os 27 diretores finalistas do Prêmio Gestão Escolar 2017 já estão em Brasília para participar da reunião de preparação para um intercâmbio nos Estados Unidos, entre os dias 4 e 14 de março. Eles representam os 26 estados do país e o Distrito Federal, sendo escolhidos entre mais de quatro mil participantes. Integra o grupo a diretora da Escola Estadual de Ensino Médio em Tempo Integral – Escola da Autoria, Ernângela Calixto.\r\n\r\nNesta quinta-feira (1º), eles estão na sede do Conselho Nacional de Secretários de Educação (Consed), para conhecerem os detalhes da viagem. Na programação do dia, almoço oferecido pela Embaixada América. O embarque para o Estados Unidos será no sábado (3), às 18 horas.\r\n\r\nClassificada entre as melhores escolas do Brasil pela segunda vez, a diretora Ernângela leva ao exterior o orgulho de fazer parte da educação sul-mato-grossense. “Me sinto, neste momento, representando todas as escolas públicas de Mato Grosso do Sul, Estado que está em desenvolvimento, sempre em busca de mais qualidade na educação”, afirma a diretora da escola da Vila Moreninha, Campo Grande, que em 2017 ficou entre as cinco finalistas.\r\n\r\nRealizado desde 1998, o Prêmio Gestão Escolar contempla projetos inovadores e gestões competentes na Educação Básica da rede pública de todo o país. Para participar, o diretor teve que fazer uma autoavaliação de sua gestão, elaborando um plano de ação, com o apoio da comunidade escolar.\r\n\r\nEsta é a 16ª edição do prêmio, que a partir de 2011 tornou-se bianual. Em mais de duas décadas, aproximadamente 40 mil escolas de todas as regiões do país participaram e mais de 9 milhões de estudantes foram beneficiados com os projetos implantados pelos gestores inscritos. A viagem de intercâmbio é uma premiação para os 27 representantes das escolas que conquistaram o título “Referência Estadual”.', '2018-03-01', 'http://www.sed.ms.gov.br/em-brasilia-diretora-da-ee-waldemir-barros-da-silva-se-prepara-para-intercambio-internacional/', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_profissional`
--

CREATE TABLE `tb_profissional` (
  `ativa` tinyint(4) NOT NULL,
  `explicacao` text COLLATE utf8_unicode_ci NOT NULL,
  `funcionamento` text COLLATE utf8_unicode_ci NOT NULL,
  `histórico` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_profissional`
--

INSERT INTO `tb_profissional` (`ativa`, `explicacao`, `funcionamento`, `histórico`) VALUES
(1, 'A Educação profissional é isso isso isso', 'Ensino médio integrado', 'Iniciou em 2003');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servidor`
--

CREATE TABLE `tb_servidor` (
  `id_servidor` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL,
  `funcao` varchar(255) NOT NULL,
  `atuacao` varchar(255) NOT NULL,
  `pedagogico` tinyint(4) NOT NULL,
  `ativo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_servidor`
--

INSERT INTO `tb_servidor` (`id_servidor`, `nome`, `sobrenome`, `imagem`, `turno`, `funcao`, `atuacao`, `pedagogico`, `ativo`) VALUES
(1, 'Marcelo', 'Figueiredo Terenciani', 'marcelo.jpg', 'Integral', 'Professor', 'Base Técnica', 1, 1),
(2, 'Arisvaldo', 'Dias Rodrigues', '', 'Integral', 'Coordenador', 'Técnico', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_administrador`
--
ALTER TABLE `tb_administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indexes for table `tb_artigo`
--
ALTER TABLE `tb_artigo`
  ADD PRIMARY KEY (`id_artigo`);

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `tb_equipe`
--
ALTER TABLE `tb_equipe`
  ADD PRIMARY KEY (`id_servidor`);

--
-- Indexes for table `tb_foto_profissional`
--
ALTER TABLE `tb_foto_profissional`
  ADD PRIMARY KEY (`id_foto_profissional`);

--
-- Indexes for table `tb_inscricao_esporte`
--
ALTER TABLE `tb_inscricao_esporte`
  ADD PRIMARY KEY (`id_inscricao`);

--
-- Indexes for table `tb_instituicao`
--
ALTER TABLE `tb_instituicao`
  ADD PRIMARY KEY (`data_alteracao`);

--
-- Indexes for table `tb_media`
--
ALTER TABLE `tb_media`
  ADD PRIMARY KEY (`id_media`),
  ADD KEY `fk_galeria` (`fk_categoria`);

--
-- Indexes for table `tb_noticia`
--
ALTER TABLE `tb_noticia`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indexes for table `tb_profissional`
--
ALTER TABLE `tb_profissional`
  ADD PRIMARY KEY (`ativa`);

--
-- Indexes for table `tb_servidor`
--
ALTER TABLE `tb_servidor`
  ADD PRIMARY KEY (`id_servidor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_administrador`
--
ALTER TABLE `tb_administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_artigo`
--
ALTER TABLE `tb_artigo`
  MODIFY `id_artigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_equipe`
--
ALTER TABLE `tb_equipe`
  MODIFY `id_servidor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_foto_profissional`
--
ALTER TABLE `tb_foto_profissional`
  MODIFY `id_foto_profissional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_inscricao_esporte`
--
ALTER TABLE `tb_inscricao_esporte`
  MODIFY `id_inscricao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_media`
--
ALTER TABLE `tb_media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_noticia`
--
ALTER TABLE `tb_noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_servidor`
--
ALTER TABLE `tb_servidor`
  MODIFY `id_servidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_media`
--
ALTER TABLE `tb_media`
  ADD CONSTRAINT `fk_galeria` FOREIGN KEY (`fk_categoria`) REFERENCES `tb_categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
