-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2019 às 15:54
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cosmo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_admin_banco` int(11) NOT NULL,
  `nome_admin_banco` varchar(70) NOT NULL,
  `senha_admin_banco` varchar(100) NOT NULL,
  `email_admin_banco` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_admin_banco`, `nome_admin_banco`, `senha_admin_banco`, `email_admin_banco`) VALUES
(1, 'Julia', '827ccb0eea8a706c4c34a16891f84e7b', 'eu@julia.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artesanato`
--

CREATE TABLE `artesanato` (
  `id_artesanato_banco` int(11) NOT NULL,
  `titulo_artesanato_banco` varchar(100) NOT NULL,
  `texto_artesanato_banco` text NOT NULL,
  `img_artesanato_banco` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artesanato`
--

INSERT INTO `artesanato` (`id_artesanato_banco`, `titulo_artesanato_banco`, `texto_artesanato_banco`, `img_artesanato_banco`) VALUES
(1, 'POR QUÊ FAZER ARTESANIAS?', 'Preparados para o ano novo? As previsões astrológicas para 2020 indicam que vem aí um período em que devemos ter pés no chão e apertar o cinto. Se você é fã de entender o contexto coletivo geral, a Astrologia indica os bastidores e explica o que está acontecendo no mundo.\r\n\r\nTemos um ano complexo e marcante pela frente (e tudo isso está explicado neste outro artigo que escrevi aqui), mas, além das previsões para 2020 coletivas, é importante entender certos aspectos relevantes para você. Por isso, vamos começar por estes três tópicos obrigatórios:\r\n\r\nSaturno em Capricórnio está ocorrendo desde 2018 e fica ainda em 2020. Isso indica que é hora de trabalhar e ter os pés no chão.\r\nSaturno está conjunto a Plutão. A tendência, com isso, é de reformulação de estruturas e “aperto no cinto”!\r\nJúpiter entra em Capricórnio, o que sugere período de ambição e de trabalho.\r\nEssa é a cara de 2020! A partir destes tópicos, vou te ajudar a entender que atitudes serão as melhores para se ter neste ano novo.\r\n\r\nMAIO: MAIS RELAÇÕES E DIVERSIDADE\r\nEm novembro de 2018, o Nodo Norte ingressou em Câncer, prestigiando o eixo Câncer/Capricórnio. A grande motivação inconsciente de cada um de nós passou a ser vínculos, família e trabalho, com viés de grande emotividade e ênfase na vida privativa e particular.', 'Artist’s_impression_of_the_deep_blue_planet_HD_189733b.jpg'),
(2, 'COMO FAZER UMA PULSEIRA TRANÇADA?', 'Para fazer pulseira hippie você irá precisar de:\r\n\r\nTesoura comum;Base ou suporte para trançar;Cordão de sua preferência, com o estilo, a espessura e a cor de sua preferência.\r\nPasse dois pedaços grandes de fio colorido por um fio amarrando em uma base ou suporte, passando as duas pontas pela dobra do meio, “abraçando” o fio que está na base. Pegue o fio da esquerda e passe por cima de todos os fios, levando-o para a direita. Passe o fio da direita por cima do fio anterior e por baixo dos dois fios centrais, e por cima do último fio da esquerda. O fio que agora está na direta deve passar por baixo do fio que agora está na esquerda. Volte o fio para a direita passando-o por baixo dos outros fios, mas por cima da última laçada. Aperte este nó e siga fazendo o mesmo processo até chegar ao tamanho desejado para a pulseira. Finalize com nós e deixando pontas para amarrar no pulso.', 'PULSEIRA.jpg'),
(3, 'QUAIS MATÉRIAS PRIMAS PODEM SER UTILIZADAS?', 'Como peças de decoração você encontra porta incensos e porta canetas de vários tipos. Alguns são verdadeiras obras de arte feitas com materiais bem simples como bambus, conchinhas e durepox. Alguns artesão utilizam até CD como base para o seu trabalho. É comum também toda a peça ser em durepox e apenas o acabamento usar materiais mais bonitinhos. A peça de decoração mais hippie que existe é o Filtro dos sonhos. Ele geralmente é um círculo feito com linhas e enfeitado com pedras e penas de vários tamanhos para você pendurar na porta ou na parede.\r\n', 'AAA.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `id_materia_banco` int(11) NOT NULL,
  `titulo_materia_banco` varchar(1000) NOT NULL,
  `texto_materia_banco` mediumtext NOT NULL,
  `img_materia_banco` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id_materia_banco`, `titulo_materia_banco`, `texto_materia_banco`, `img_materia_banco`) VALUES
(1, 'TRABALHO EM 2020: PREVISÕES SEGUNDO O ASCENDENTE', 'Trabalho em 2020: previsões segundo o Ascendente\r\nO que 2020 vai pedir, profissionalmente, para cada Ascendente? As previsões para o Trabalho em 2020 foram feitas por Ascendente, e não pelo signo solar, porque a partir do Ascendente é possível determinar em que casas astrológicas os planetas mais lentos, de Júpiter a Plutão, estão transitando.\r\n\r\nAssim, por exemplo, o Ascendente em Áries tende a ter forte ativação de sua Casa 10 no ano de 2020, o que justamente dá visibilidade à carreira, mas também traz muitas responsabilidades.\r\n\r\nVocê pode ler, claro, seu Ascendente e também as previsões para o seu signo solar, que, de alguma forma, pode reverberar e fazer sentido para você. Por exemplo, se você é aquariano com Ascendente em Virgem, leia sobre o seu Virgem, mas, secundariamente, dê uma olhada na descrição para sobre Aquário. No final, registre que atitudes e foco devem predominar em 2020 para você se sair bem.', ''),
(2, 'SEU SIGNO É, NA VERDADE, TODO SEU MAPA ASTRAL', 'Dizer-se ariano, libriano ou de qualquer outro signo é o mesmo que falar “eu tenho cabelos pretos”. Ou seja, não significa muita coisa. Talvez você nem imagine, mas seu signo é, na verdade, todo o seu Mapa Astral.\r\n\r\nQuando alguém pergunta “qual é o seu signo?” – questão comum em nossa cultura – está em verdade levantando um ponto que só se tornou significativo a partir do início do século XX, por conta dos movimentos de popularização da Astrologia, em grande parte realizados pelo astrólogo inglês Alan Leo.\r\n\r\nApesar de a Astrologia ser um conhecimento com mais de cinco mil anos de história, a questão dos signos solares e a utilização dos mesmos como uma identidade é relativamente recente. Dizer algo do tipo “eu sou de Áries”, “meu namorado é taurino” ou qualquer coisa que o valha, se fosse dito para um ser humano de antes do início do século XX, soaria como um código alienígena. A pessoa simplesmente não entenderia sobre o que se está falando. Mesmo hoje em dia, para qualquer astrólogo, este tipo de descrição identitária não significa muita coisa, não tem grande importância dentro do contexto de um estudo astrológico individualizado, feito a partir do estudo do Mapa Astral.\r\n\r\nQuando Alan Leo popularizou o conhecimento astrológico a partir dos signos solares, o fez por um motivo muito simples: para saber qual o signo solar de uma pessoa, basta saber o dia e o mês em que ela nasceu. Todas as pessoas nascidas em 15 de setembro, por exemplo, serão virginianas. O signo ascendente exige um cálculo mais complexo, e o signo lunar então nem se fala… Mas o fato de o signo solar ser mais conhecido do que o signo lunar ou do que o ascendente, por exemplo, não tem nada a ver com uma suposta “maior importância” do signo solar, e sim com uma maior facilidade da informação. Como seu objetivo era popularizar a Astrologia, Alan Leo procurou divulgar o ponto astrológico que seria mais fácil para que qualquer um conhecesse, sem precisar realizar nenhum cálculo matemático complicado demais.\r\n\r\n', ''),
(3, 'CALENDÁRIO LUNAR 2020', 'O Calendário Lunar 2020 traz o dias de início de todas as fases da Lua durante o ano. As mudanças nas quatro fases da Lua podem causar diferentes reações em nós, por isso, com essas datas, você pode perceber melhor as tendências em sua forma de agir.\r\n\r\nObserve, também, como pessoas próximas reagem a cada fase. Há pessoas que reagem muito claramente a cada fase lunar, enquanto outras são menos sensíveis. Foram também assinalados os dias de eclipse lunar, que trazem mexidas na nossa vida ou na de pessoas próximas cerca de três semanas antes e três depois do fenômeno ocorrer no céu.\r\n\r\n', ''),
(4, 'RETORNO DE SATURNO: HORA DE AMADURECER', 'Para a Astrologia, Retorno de Saturno é aquele momento em que tomamos consciência de nossas limitações, daquilo que podemos ou não podemos fazer. Isso porque Saturno simboliza o limite, justamente por ser o último planeta que pode ser visto a olho nu.\r\n\r\nTecnicamente, Retorno de Saturno trata-se do tempo necessário para que este planeta realize uma volta completa em torno do Sol. Enquanto nosso planeta, a Terra, leva em torno de 365 dias para realizar esta volta, Saturno leva aproximadamente 29 anos terrestres para fazer o mesmo movimento. Isso significa que se na Terra você tem 29 anos, em Saturno você acabou de completar seu primeiro ano de vida. Se você acha que está ficando velho(a), é tudo uma questão de perspectiva, pois em Saturno você ainda é muito novinho(a).', 'mercurio.jpg'),
(5, 'MERCÚRIO RETRÓGRADO: TEMPO DE REVISÃO', 'O fenômeno planetário não muito raro chamado de Mercúrio Retrógrado ocorre quando o planeta Mercúrio realiza um movimento de retrocesso em relação a quem observa esse astro a partir do nosso planeta.\r\n\r\nDe que maneira isso pode nos afetar e como podemos utilizar o conhecimento deste fenômeno a nosso favor?\r\nPrimeiramente, você poderá perceber algo que poderá lhe parecer esquisito em seu horóscopo personalizado. Todos os trânsitos que envolvem o planeta Mercúrio parecerão se repetir, e você poderá pensar: “será que o site está com algum erro?”. Não, não se trata de um erro.\r\n\r\nComo Mercúrio está em movimento retrógrado em relação à Terra, algumas coisas que o seu horóscopo lhe disse serão novamente ditas em um curto espaço de tempo. Mercúrio retrógrado exalta a importância da revisão, do retorno e da reavaliação.\r\n\r\nEm segundo lugar, saiba que o período de Mercúrio retrógrado pode ser muito benéfico em relação a vários aspectos da vida.\r\n\r\nPor exemplo: se você escreve e deseja revisar coisas que já fez, o momento é esse. Se sente a necessidade de retomar uma conversa que ficou mal concluída, aproveite. Se quer corrigir um mal entendido, o período é excelente.', 'mercurio.jpg'),
(6, 'ASTROLOGIA 2020: O QUE ESPERAR PARA A SUA VIDA', 'Preparados para o ano novo? As previsões astrológicas para 2020 indicam que vem aí um período em que devemos ter pés no chão e apertar o cinto. Se você é fã de entender o contexto coletivo geral, a Astrologia indica os bastidores e explica o que está acontecendo no mundo.\r\n\r\nTemos um ano complexo e marcante pela frente (e tudo isso está explicado neste outro artigo que escrevi aqui), mas, além das previsões para 2020 coletivas, é importante entender certos aspectos relevantes para você. Por isso, vamos começar por estes três tópicos obrigatórios:\r\n\r\nSaturno em Capricórnio está ocorrendo desde 2018 e fica ainda em 2020. Isso indica que é hora de trabalhar e ter os pés no chão.\r\nSaturno está conjunto a Plutão. A tendência, com isso, é de reformulação de estruturas e “aperto no cinto”!\r\nJúpiter entra em Capricórnio, o que sugere período de ambição e de trabalho.\r\nEssa é a cara de 2020! A partir destes tópicos, vou te ajudar a entender que atitudes serão as melhores para se ter neste ano novo.\r\n\r\nMAIO: MAIS RELAÇÕES E DIVERSIDADE\r\nEm novembro de 2018, o Nodo Norte ingressou em Câncer, prestigiando o eixo Câncer/Capricórnio. A grande motivação inconsciente de cada um de nós passou a ser vínculos, família e trabalho, com viés de grande emotividade e ênfase na vida privativa e particular.', 'mercurio.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario_banco` int(11) NOT NULL,
  `nome_usuario_banco` varchar(90) NOT NULL,
  `senha_usuario_banco` varchar(120) NOT NULL,
  `email_usuario_banco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario_banco`, `nome_usuario_banco`, `senha_usuario_banco`, `email_usuario_banco`) VALUES
(18, 'Julia', '827ccb0eea8a706c4c34a16891f84e7b', 'julia@usuaria.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin_banco`);

--
-- Índices para tabela `artesanato`
--
ALTER TABLE `artesanato`
  ADD PRIMARY KEY (`id_artesanato_banco`);

--
-- Índices para tabela `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia_banco`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario_banco`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `artesanato`
--
ALTER TABLE `artesanato`
  MODIFY `id_artesanato_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
