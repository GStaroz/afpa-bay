-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 27 Juin 2017 à 15:49
-- Version du serveur :  5.7.18-0ubuntu0.17.04.1
-- Version de PHP :  7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `film`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `clef` int(2) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `acteurs` text NOT NULL,
  `synopsis` text NOT NULL,
  `annee` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`clef`, `titre`, `auteur`, `acteurs`, `synopsis`, `annee`, `image`) VALUES
(8, 'Fast and furious 1', 'Rob Cohen', 'Paul Walker, Vin Diesel, Michelle Rodriguez', 'La nuit tombée, Dominic Toretto règne sur les rues de Los Angeles à la tête d\'une équipe de fidèles qui partagent son goût du risque, sa passion de la vitesse et son culte des voitures de sport lancées à plus de 250 km/h dans des rodéos urbains d\'une rare violence. Ses journées sont consacrées à bricoler et à relooker des modèles haut de gamme, à les rendre toujours plus performants et plus voyants, à organiser des joutes illicites où de nombreux candidats s\'affrontent sans merci sous le regard énamouré de leurs groupies. A la suite de plusieurs attaques de camions, la police de L.A. décide d\'enquêter sur le milieu des street racers. Brian, un jeune policier, est chargé d\'inflitrer la bande de Toretto, qui figure, avec celle de son rival Johnny Tran, au premier rang des suspects. ', 2001, 'images/fast-and-furious1.jpg'),
(9, 'Fast and furious 2', 'Rob Cohen', ' Paul Walker, Tyrese Gibson, Eva Mendes', 'Brian O\'Conner a signé sa plus belle action, mais aussi sa faute la plus grave, en laissant filer le chef du gang de voleurs de voitures qu\'il avait mission d\'infiltrer. Radié de la police de Los Angeles, ce jeune flic rebelle, fan de vitesse et de rodéos, a gardé intact son honneur mais a gâché une belle carrière. Après deux ans de galère, Brian O\'Conner se retrouve à Miami et se voit offrir une ultime chance de se racheter.\r\nLe FBI et les douanes locales surveillent depuis plusieurs mois le puissant homme d\'affaires Carter Verone, qu\'ils soupçonnent de se livrer à des opérations de blanchiment d\'argent. Mais leurs efforts sont restés vains, le seul indice dont ils disposent pour appâter et démasquer l\'énigmatique criminel étant sa passion pour les rodéos. Le temps presse, Brian semble être le seul espoir... ', 2003, 'images/fast-and-furious2.jpg'),
(10, 'Fast and furious 3', 'Rob Cohen', ' Lucas Black, Shad Moss, Brian Tee', 'Sean Boswell est un risque-tout à qui sa passion immodérée des voitures de sport trafiquées a déjà attiré de sérieux ennuis avec la police californienne. Condamné après un accident, sa seule alternative à la prison est d\'accepter la tutelle de son père, militaire de carrière basé à Tokyo.\r\nGaijin (étranger) dans la ville la plus moderne et la plus sexy du monde, le jeune homme se sent plus exclu que jamais jusqu\'au jour où un nouveau copain, Twinkie, lui fait découvrir l\'univers secret du drifting - le nec plus ultra des rodéos urbains. Un sport clandestin où l\'audace, l\'élégance et la fluidité de la conduite sont encore plus appréciées\r\nque la simple vitesse.\r\nSean est immédiatement accroché : son style de vie rebelle a trouvé sa parfaite expression\r\ndans le drift, ses périlleuses transgressions, son défi permanent aux lois de la physique... ', 2006, 'images/fast-and-furious3.jpg'),
(11, 'Fast and furious 4', 'Rob Cohen', ' Vin Diesel, Paul Walker, Jordana Brewster', 'Un meurtre oblige Don Toretto, un ancien taulard en cavale, et l\'agent Brian O\'Conner à revenir à L.A. où leur querelle se rallume. Mais confrontés à un ennemi commun, ils sont contraints à former une alliance incertaine s\'ils espèrent parvenir à déjouer ses plans. De l\'attaque de convoi aux glissades de précision qui les mèneront hors de leurs propres frontières, les deux hommes trouveront le meilleur moyen de prendre leur revanche : en poussant les limites de ce qui est faisable au volant d\'un bolide. ', 2009, 'images/fast-and-furious4.jpg'),
(12, 'Fast and furious 5', 'Justin Lin', ' Vin Diesel, Paul Walker, Dwayne Johnson', 'Depuis que Brian et Mia Toretto ont extirpé Dom des mains de la justice, ils ont dû franchir de nombreuses frontières pour échapper aux autorités. Retirés à Rio, ils sont contraints de monter un dernier coup pour se faire blanchir et recouvrer leur liberté. Ils se constituent une équipe d\'élite, réunissant les pilotes les plus avertis, conscients que leur seule chance d\'être acquittés pour bonne conduite nécessite une confrontation avec l\'homme d\'affaires véreux qui souhaite les voir morts. Mais il n\'est pas le seul à leurs trousses. L\'impitoyable agent fédéral Luke Hobbs n\'a jamais loupé sa cible. Affecté à la traque des fugitifs, lui et son équipe de choc élaborent un implacable dispositif d\'assaut destiné à les capturer. Passant le Brésil au crible, Hobbs réalise combien la frontière qui sépare les bons des méchants est ténue. Il doit alors s\'en remettre à son instinct pour acculer ses proies et éviter qu\'un autre ne les débusque avant lui. ', 2011, 'images/fast-and-furious5.jpg'),
(13, 'Fast and furious 6', 'Justin Lin', ' Vin Diesel, Paul Walker, Dwayne Johnson', 'Dom, Brian et toute leur équipe, après le casse de Rio, ayant fait tomber un empire en empochant 100 millions de dollars, se sont dispersés aux quatre coins du globe. Mais l’incapacité de rentrer chez eux, et l’obligation de vivre en cavale permanente, laissent à leur vie le goût amer de l’inaccomplissement. Pendant ce temps Hobbs traque aux quatre coins du monde un groupe de chauffeurs mercenaires aux talents redoutables, dont le meneur, Shaw est secondé d’une de main de fer par l’amour que Dom croyait avoir perdu pour toujours : Letty. La seule façon d’arrêter leurs agissements est de les détrôner en surpassant leur réputation. Hobbs demande donc à Dom de rassembler son équipe de choc à Londres. En retour ? Ils seront tous graciés et pourront retourner auprès des leurs, afin de vivre une vie normale.', 2013, 'images/fast-and-furious6.jpg'),
(14, 'Fast and furious 7', ' James Wan ', ' Vin Diesel, Paul Walker, Jason Statham', 'Dominic Toretto et sa \"famille\" doivent faire face à Deckard Shaw, bien décidé à se venger de la mort de son frère.', 2015, 'images/fast-and-furious7.jpg'),
(15, 'Fast and furious 8', ' F. Gary Gray ', ' Vin Diesel, Dwayne Johnson, Jason Statham', 'Maintenant que Dom et Letty sont en lune de miel, que Brian et Mia se sont rangés et que le reste de l’équipe a été disculpé, la bande de globetrotteurs retrouve un semblant de vie normale. Mais quand une mystérieuse femme entraîne Dom dans le monde de la criminalité, ce dernier ne pourra éviter de trahir ses proches qui vont faire face à des épreuves qu’ils n’avaient jamais rencontrées jusqu’alors.\r\n\r\nDes rivages de Cuba au rues de New York en passant par les plaines gelées de la mer arctique de Barrents, notre équipe va sillonner le globe pour tenter d\'empêcher une anarchiste de déchaîner un chaos mondial et de ramener à la maison l’homme qui a fait d’eux une famille. ', 2017, 'images/fast-and-furious8.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `films_vu`
--

CREATE TABLE `films_vu` (
  `id_user` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `films_vu`
--

INSERT INTO `films_vu` (`id_user`, `id_film`) VALUES
(1, 9),
(1, 10),
(2, 11),
(2, 12),
(1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `clef` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `avatar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `login`
--

INSERT INTO `login` (`clef`, `login`, `password`, `type`, `avatar`) VALUES
(1, 'biddal', 'a9d3f33243a06c8872cb2854c00d90c8ddb3419861edaa2ebec8585f471a3bcd', 'admin', ''),
(2, 'test', 'e9dca697e071b82e9dc15f7d57827e2cd95d414d5ed9f4b914c66055f402663b', 'user', NULL),
(3, 'test1', 'c644267bfae9c1a5dc4471af4c38f551aaef7f612d66895e8ec2f1e35344a843', 'user', NULL),
(4, 'test4', '9345765f9f1985d0c1f5750470627b3b2b841d3059babebee7c70a659d95b956', 'user', NULL),
(7, 'root', '326e0277c8c321fb41b34305d8dc4279e0340969c8bf6ef58282683604cc2c35', 'user', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`clef`);

--
-- Index pour la table `films_vu`
--
ALTER TABLE `films_vu`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_film` (`id_film`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`clef`),
  ADD UNIQUE KEY `clef_3` (`clef`),
  ADD KEY `clef` (`clef`),
  ADD KEY `clef_2` (`clef`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `clef` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `clef` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `films_vu`
--
ALTER TABLE `films_vu`
  ADD CONSTRAINT `films_vu_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `login` (`clef`),
  ADD CONSTRAINT `films_vu_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`clef`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
