-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 28 fév. 2019 à 15:58
-- Version du serveur :  8.0.12
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog_car`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) DEFAULT NULL,
  `post_text` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `article_image` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `description`, `date`, `id_user`, `post_text`, `category`, `article_image`) VALUES
(11, 'Essai, Fiat 500 : 2 cylindres et un style toujours à la mode', 'Dans le monde des micro-citadines je voudrais une auto à la mode et qui a du style, je vous présente la Fiat 500 dans sa finition Collezione. Malgré son âge, la 500 est toujours d’actualité !', '2019-01-06 15:31:33', 8, '   Le constructeur italien multiplie en effet les éditions spéciales pour doper les ventes. La dernière en date est exclusivement dédiée aux couleurs de l’automne avec des coloris extérieurs et intérieurs spécifiques.\r\n<br>\r\n<h2>Fiche technique et performance </h2><br>\r\nFiat 500 0.9 TwinAir 85 ch<br>\r\nMoteur : 2 cylindres 0.9 TwinAir<br>\r\nPuissance : 85 chevaux<br>\r\nCouple : 145 Nm<br>\r\nAccélération : 0 à 100 Km/h en 11 sec.<br>\r\nVitesse max : 173 km/h<br>\r\nConsommations mixtes réelles : 5.5l<br>\r\nLongueur : 3,57 m<br>\r\nPoids à vide : 930 kg<br>\r\nRéservoir : 35 litres<br>\r\nVolume de coffre : 180 litres<br>\r\n<br>\r\n<h2>Une auto à succès</h2><br>\r\nAvec plus de 2 millions de ventes, et plus de dix années d’existence, la Fiat 500 est un véritable succès commercial. Un phénomène qui touche le monde entier. La France n’est pas épargnée par ce succès et il n’est pas rare de croiser une 500 dans les rues parisiennes. Chic et élégante, la Fiat 500 navigue depuis de nombreuses années sur ce style néo-rétro qui lui va bien. Avec son design intemporel, sa bouille féminine, l’italienne surnommée également pot à yaourt certes moins élégant à de nombreux arguments pour charmer encore sa clientèle.\r\n<br><br>\r\n<h2>Fiat 500 Autumn</h2>\r\n\r\nMotorisation 85 ch, bien meilleure que la version 70 ch\r\nEn ouvrant, le capot j’observe étonnement ce bi-cylindres qui développe 85 chevaux grâce à l’ajout d’un turbo. Avec un poids de plus de 930 kg, la 500 est légère et permet de se sortir de quasiment toutes les situations grâce à son couple de 145 Nm. Ainsi, les relances et les accélérations sont plus que convenables pour sa catégorie. La sonorité du moteur deux cylindres est particulière, à bas régime je ressens quelques broutements vite estompés après 2000 trs/min.<br>\r\n\r\n\r\nÀ titre de comparaison, il y a moins d’un an, j’avais pu tester les performances du moteur 3 cylindres de 69 chevaux et autant vous dire clairement qu’il ne tient pas vraiment la comparaison avec ce petit bi-cylindres dynamique tant sur les relances et sur les consommations plus élevées. Je vous recommande vivement d’opter pour ce délicieux moteur de 85 chevaux, un véritable bonheur au quotidien aussi bien à son aise en ville et sur route. Pour le système stop and start il pourra en énerver plus d’un, heureusement celui-ci se désactive mais ne jouera plus son rôle.<br>\r\nAu quotidien, à l’assaut des villes !\r\nEn ville, la Fiat 500 est dans son élément, avec son faible gabarit (3,57 m) et les radars de recul activés, les manœuvres sont ainsi facilités avec une belle visibilité à la clé. Ma Fiat 500 se gare au doigt et à l’œil ! Dans la circulation difficile, je me faufile partout sans le moindre accroc, et il n’est pas rare de croiser au détour d’un feu rouge parisien tout une lignée de Fiat 500.<br>\r\n\r\nAvec sa boîte automatique à 5 rapports, j’ai les deux mains tranquilles sur le volant, un confort supplémentaire pour environ 1000€ supplémentaire. Certes la boite auto robotisée est très lente, il faudra s’y habituer mais pour rien au monde je roulerais en boîte manuelle dans les bouchons.\r\n<br>\r\nCôté accessibilité, malheureusement pour les places arrière, il faudra se contorsionner pour y accéder. Mais elle se rattrape par son côté pratique, en ouvrant le hayon du coffre il est possible de déposer facilement des éléments sur la banquette arrière.\r\n\r\n<br>\r\n\r\nHors ville, ma 500 assure un max !\r\nSi son terrain de prédilection reste bien entendu les beaux quartiers, les escapades hors terrains urbains sont possibles tant la 500 est confortable. Certes l’insonorisation et le charmant bruit du moteur à deux pattes me fais oublier que je suis dans une Bentley, mais en activant le régulateur, la vitesse de croisière est vite atteinte.\r\n<br>\r\nEn effet, les relances sont clairement vives, quitte à déconseiller la version 69 chevaux dont la puissance reste trop faible. Ici avec ses 85 chevaux et un turbo qui pousse bien, n’ayez aucune crainte avant d’aborder les côtes.\r\n<br>\r\nConsommations, la Fiat 500 peut mieux faire\r\nAu quotidien, la Fiat 500 est donc plaisante à conduire, mais qu’en est-il de ses consommations ? Avec son faible volume, le réservoir de 35 litres permet d’atteindre une autonomie max de 600 kilomètres. A ce rythme il faudra avoir le pied très léger sur l’accélérateur et activer le mode Eco. Malheureusement ce mode dégrade les performances de l’auto. Avec une moyenne de 6,2 litres, les consommations me déçoivent même si une conduite éco permettra d’atteindre les 5,8 litres aux 100 kilomètres.', 'Automobile', 'http://www.leblog-carspassion.fr/wp-content/uploads/2018/11/essai-fiat-500-85-960x500.jpg'),
(17, 'Comment bien drifter ? Voici quelques conseils de drift en BMW M3 pour gérer !', 'Essayez donc de drifter', '2019-01-12 11:10:47', 8, '<h2> Savez-vous bien drifter ? </h2>\r\nC’est à bord d’une BMW M3 E92, et son moteur puissant un joli V8 développant 420 chevaux sur le circuit de Lohéac que Jérôme notre instructeur pilote me donne quelques conseils pour drifter. C’est une histoire de vitesse, de transfert de masse et de coups de volant. La recette magique du drift semble sur le papier simple, en pratique c’est un peu différent.\r\n<br><br>\r\n<h2>En Bmw M3 ça glisse </h2>\r\nLe mieux c’est d’avoir une auto propulsion et les BM’ sont idéales pour ça. L’autre grand principe du drift c’est de faire glisser et donc de perdre de l’adhérence sur l’essieu arrière. Pour cela, il vous faudra une paire de pneumatiques à gomme dure et une bonne dose de puissance sur le train arrière.\r\n<br><br>\r\n<h2>Le principe de la gravité</h2>\r\nC’est assez simple à comprendre, c’est la base de la gravité, c’est donc le côté le plus léger de l’auto qui partira en premier. En clair en délestant l’arrière, l’auto partira en survirage, puis va déraper de l’arrière.\r\n<br><br>\r\nPour se faire, il suffit d’arriver très vite avant le virage, de freiner assez fort pour provoquer le transfert de masse vers l’avant, puis de changer de direction très rapidement en tournant sèchement le volant. Une fois l’auto en dérive, il faudra maintenir dans le bon angle de votre auto avec un bon filet de gaz. Attention à bien finir avec style votre drift sur la fin sinon c’est la catastrophe assurée.\r\n<br><br>\r\n<h2>Le coup de raquette, vous connaissez ?</h2><br>\r\nRien à voir avec ce que vous connaissez tous, Federer et Djokovic ne vous diront pas le contraire, mais se prendre un coup de raquette peut être fatale en auto. Ce phénomène arrive lorsque les roues arrière reprennent de l’adhérence et déstabilisent l’auto. Il est donc conseillé de reprendre très rapidement les gaz pour ne pas perdre le contrôle.\r\n<br><br>\r\nN’hésitez pas à partager votre expérience du drift et de pilotage en commentaire.\r\n<br><br>\r\nRemerciements à Evrim passagère en souffrance en Bmw M3 ;-), et à toute la team (et surtout à Julie et Jérôme de Motorsport Academy) société spécialisée en stage de pilotage.<br>\r\n<br>\r\nLieux : circuit de Lohéac long de 2.2 kilomètres, si vous êtes dans le coin, visitez le musée automobile pendant plus d’une heure.<br>', 'Sportives', 'https://cdn.allwallpaper.in/wallpapers/706x400/1000/bmw-e92-m3-cars-matte-706x400-wallpaper.jpg'),
(20, 'Une BMW M4 Pack Compétition qui attire l’œil !', 'Je vais à la rencontre de Younnsy92 pour me présenter sa BMW M4 Pack Compétition avec un covering mat orangé assez unique.', '2019-01-12 12:22:14', 6, '  Dans cette vidéo, Younsy nous fait découvrir tout le charme de cette M4 Pack Compétition. Bonus en Fin de vidéo, une Nissan GTR équipée d’une ligne d’échappement Armytrix qui crache des flammes, c’est assez impressionnant en vidéo et encore plus en réalité. Dans les faits, ça change la sonorité de la GTR en la rendant complètement démoniaque.<br><br>\r\n\r\n<h2>La BMW M4 F82 Pack Compétition développe 450 chevaux,  et se positionne entre la M4 « basique » et la M4 GTS.</h2>\r\n\r\nLe covering a été réalisé rapidement pour les besoin du clip de Djaja et Dinaz. Une demi-journée, et quelques détails de finition manquent donc malheureusement. Sa location est disponible sur GT Luxury.<br><br>\r\n\r\n<h2>Fiche technique et performances Bmw M4 Pack Compététion :</h2>\r\n<strong>Moteur :</strong> 6 cylindres en ligne bi-turbo<br>\r\n<strong>Boite :</strong> automatique DKG<br>\r\n<strong>Puissance :</strong> 450 ch<br>\r\n<strong>Accélération :</strong> 0-100 km/h en 4,2 sec.<br>\r\n<strong>Vitesse max. :</strong> 292 km/h (version débridée)<br>\r\n<strong>Prix :</strong> 95 000 €<br>\r\n<strong>Prix covering :</strong> entre 4 000€ et 6000 € (estimation)<br><br>\r\n\r\n<h2>Que pensez-vous de cette BMW M4 Compétition ? J’attends vos avis en commentaire.</h2>', 'Sportives', 'http://www.leblog-carspassion.fr/wp-content/uploads/2018/05/bmw-m4-competition-location-covering-960x500.jpg'),
(24, 'Peugeot 508 SW GT, une claque aux Allemandes ? (VLOG)', 'Est-elle prête à affronter le premium et les incontournables rivales allemandes ?', '2019-02-12 22:18:42', 1, ' <strong>En bref, Peugeot 508 SW GT</strong><br>\r\n\r\nLancée en octobre, la berline Peugeot 508 s’est déjà écoulée à 6000 exemplaires.<br><br>\r\n\r\nLorsqu’on sait que 60 % des véhicules écoulés dans ce segment sont des breaks, impossible de passer à côté d’une version break pour toucher un public toujours plus étendu. Surtout en Allemagne, où 40 % des ventes de breaks en Europe se font.<br><br>\r\n\r\nPeugeot a donc repris toutes les qualités de la berline (essayée l’été dernier ici) en l’adaptant au format plus familial du break.\r\n<br><br>\r\nRésultat : un look novateur et racé, caractéristique du design lancé par la marque avec le 3008 il y a deux ans. Que ce soit à l’extérieur ou à bord, la 508 SW impressionne. La qualité perçue approche le trio premium allemand, tout comme la dotation technologique qui les surpasse même pour la plupart.<br><br>\r\n\r\nLes choix de design ont une répercussion sur l’habitabilité arrière, qui se veut assez bonne mais donne un sentiment de confinement particulier. Le coffre, lui, est dans la moyenne haute de la catégorie des breaks premiums.\r\n<br><br>\r\nSur la route, la 508 SW reproduit l’excellent bilan de la berline, dont elle reprend la même plate-forme. Son châssis de référence et son petit volant participent au plaisir de conduite et à la sensation d’agilité sur routes sinueuses. Sur autoroute, elle peut compter sur des moteurs sobres et une pléiade d’aides à la conduite pour enchainer les kilomètres et être une routière comme il se doit.<br><br>\r\n\r\nLa montée en gamme et l’excellent bilan font logiquement grimper les tarifs, qui se rapprochent de ce que l’on peut trouver chez les rivales germaniques. Peugeot peut compter sur un design inédit, un habitacle cosy et des prestations routières de choix pour se démarquer.<br><br>\r\n\r\n<h3>Peugeot 508 SW GT en chiffres</h3>\r\n\r\n<em>Moteur</em> : 4 cyl. Essence turbo 225 ch<br>\r\n<em>Couple</em>  : 300 Nm<br>\r\n<em>Vitesse max.</em>  : 246 km/h<br>\r\n<em>Accélération (0-100)</em>  : 7,4 sec.<br>\r\n<em>Transmission</em>  : boite automatique EAT 8<br>\r\nConsommation mixte : 5,7 L / 100 km (annoncée), 7,5 L / 100 km (mesurée)<br>\r\n<em>Poids</em> : 1505 kg<br>\r\n<em>Tarifs</em> : env. 53 000 € (gamme à partir de 32 300 €).<br>', 'Automobile', 'https://www.leblog-carspassion.fr/wp-content/uploads/2018/12/Peugeot-508-SW-GT-960x500.jpeg'),
(25, 'L’intérieur du nouveau Mercedes Classe B est incroyable ! ', 'Non, ce n’est pas une Mercedes Classe S… C’est bien l’intérieur de la Nouvelle Mercedes-Benz Classe B en finition AMG-Line 2019.', '2019-02-18 20:29:38', 1, 'L’intérieur de cet habitacle est très orienté vers le futur et s’inspire d’une Mercedes Benz Classe S et de la dernière Classe A. Ambiance « boite de nuit », la déco est flashy je dois l’avouer.\r\n\r\n<h2>La technologie embarquée MBUX lors de cet essai sur cette nouvelle Mercedes Classe B 220d m’a impressionné. Elle devance tout particulièrement ses concurrentes, Audi et BMW.</h2>\r\n\r\nUne finition et un design exemplaires, la nouvelle Classe B n’a plus rien à voir avec l’ancienne. Les prix sur ce modèle démarrent à partir de 33 000 € en finition Style Line. Ce modèle Mercedes Classe B 220d AMG Line s’affiche à partir de 45 000 € environ.\r\n\r\n » Hey Mercedes « , que penses-tu …de … ?\r\nL’assistant Mercedes devient de plus en plus sophistiqué, il est possible de converser quelques phrases avec l’IA.\r\n\r\n', 'automobile', 'https://www.leblog-carspassion.fr/wp-content/uploads/2019/02/interieur-mercedes-classe-B-A-2019-interior-2-960x500.jpg'),
(26, 'Volkswagen Golf 4 V5', 'Amputé d’un cylindre, le moteur VR6 de la Golf 3 reprend ici du service dans la Volkswagen Golf 4 V5.', '2019-02-18 20:33:18', 1, '  <h1>Original 5 cylindres en quinconce dérivé du VR6, la VW Golf V5 peut compter sur 170 ch et une sonorité originale</h1> <br><br>\r\nCe 6 cylindres en V à 15° disposant de ses cylindres en quiconque est déjà une vieille connaissance puisqu’il a notamment fait les belles heures de la Volkswagen Golf 3 VR6. Depuis il a hanté de nombreux capots de différents modèles du groupe (Corrado, Passat, Sharan). <br><br>\r\nSauf qu’ici il a perdu un cylindre pour se transformer en <strong>V5</strong> ! Le haut moteur reste de facture très classique avec une distribution à deux soupapes par cylindres et un arbre à cames en tête. Une gestion intégrale Bosch Motronic s’occupe d’orchestrer allumage et injection. Le V5 de la Golf éponyme offre ainsi des prestations quelconques avec <strong>150 ch à 6 000 tr/mn et 205 Nm à 3 200 tr/mn.</strong><br>\r\n Moins puncheur que le quatre cylindres turbo de la version GTI, le V5 offre en revanche une douceur et rondeur de fonctionnement bien agréable à l’usage sans parler de sa sonorité bien plus flatteuse. <br>Avec sa boîte manuelle à 6 rapports, la Volkswagen Golf 4 V5 souffre parfois d’une motricité défaillante pour s’arracher de l’asphalte : 0 à 100 km/h en 9‘‘1; 212 km/h, km DA en 30‘‘1. Les dessous de la Volkswagen Golf 4 V5 sont de factures classiques et en ligne avec ce qui se pratique chez VAG : un pseudo McPherson avant et un essieu arrière à bras tirés. Suspensions abaissées et un amortissement qui n’est pas à la hauteur des prétentions sportives revendiquées. Ils pompent sous contraintes quitte à aller toucher les butées d’amortisseurs et dégradent tant la tenue de route que le confort. Dommage, car pour le reste, la Volkswagen Golf 4 V5 offre une tenue de route sécurisante.', 'Automobile', 'https://delessencedansmesveines.com/wp-content/uploads/2014/08/zzz_DLEDMV_G4_R32_Turbo_570ch_titre.jpg'),
(27, 'Essai, Volkswagen Golf R 2018 (310 ch) : R comme…', 'Dans la famille Golf, je demande la plus exclusive !', '2019-02-18 20:45:16', 1, '  <strong> Depuis 1971, au fil des générations, VW a toujours proposé une version sportive de la compacte légendaire sous le badge GTI. Allant même jusqu’à y rentrer au chausse-pied des V6 dans la Golf VR6 de 1993 puis dans l’exclusive Golf R32 de 2005, les fans de la marque ont toujours eu le choix d’une déclinaison très performante au sommet de la gamme. Aujourd’hui, la Golf R perpétue cette tradition avec 310 ch sous le capot et des prestations premiums. Est-elle pour autant toujours aussi sportive et exclusive ?\r\n </strong><br><br>\r\nLOOK - 75%<br>\r\nINTÉRIEUR - 75%<br>\r\nTECHNOLOGIE - 85%<br>\r\nPERFORMANCES - 90%<br>\r\nPLAISIR DE CONDUITE - 70%<br>\r\nEFFICACITÉ - 80%<br>\r\nPRIX - 60%<br><br>\r\n<h2>R comme… rassurante</h2>\r\n\r\nExtérieurement, en tout cas, la Golf R de 7e génération n’est pas aussi exubérante que ses caractéristiques sur le papier auraient pu le laisser croire. Dans le rétro’, seul un œil averti saura différencier cette version particulière d’une Golf somme toute standard une fois bien équipée. La Golf R dispose des mêmes artifices aérodynamiques qu’une Golf R-Line ; la généralisation du look sportif grâce à des packs de style sur des voitures à la cylindrée banale fait ici de l’ombre à notre Golf…\r\n\r\n<div class=\"col-sm-4\">\r\n        <img src=\"https://farm1.staticflickr.com/894/40625242540_16545892a3.jpg\" class=\"img-responsive\">\r\n    </div><br>\r\nTrop lisse, trop discrète, trop BCBG ? La Golf R est une Golf « quasiment » comme les autres et sa petite sœur GTI en devient même plus méchante à regarder. Quasiment, parce qu’elle a quand même quelques subtilités qui font d’elle la reine des Golf : le logo R sur la calandre, une superbe signature lumineuse à LED retravaillée lors du dernier restylage, et des entrées d’air sur la partie basse du bouclier lui confèrent un regard agressif sans jamais tomber dans le vulgaire.<br><br>\r\nSur la partie arrière, un diffuseur spécifique intégrant la quadruple sortie d’échappement en titane signée Akrapovic, le logo R et le petit béquet annoncent un certain niveau de performance, alors que les feux à LED avec clignotants à défilement participent au côté premium de l’ensemble.\r\n<div class=\"col-sm-4\">\r\n        <img src=\"https://farm2.staticflickr.com/1758/41530652545_5d6d0f51e2.jpg\" class=\"img-responsive\">\r\n    </div><br>\r\nUn pack aérodynamique au niveau des bas de caisse, de jolies jantes de 19 pouces et notre blanc nacré renforcent ce mélange entre sportivité et classe, une philosophie très proche de celle de sa cousine aux anneaux : l’Audi S3. La Golf R affiche ainsi avec subtilité sa vocation sportive, au risque de devenir trop sage à regarder et de perdre de son exclusivité.\r\n<br><div class=\"col-sm-4\">\r\n        <img src=\"https://farm2.staticflickr.com/1734/28560163618_a715d0a90e.jpg\" class=\"img-responsive\">\r\n    </div><br>\r\n<h2>R comme… rationnelle</h2><br>\r\n\r\nAu même titre que le plumage, le ramage de la Golf fait dans le sérieux et le premium. Loin du tissus Clark et des surpiqures rouges de la version GTI, la R s’embourgeoise et joue dans le haut-de-gamme plus que le sportif.\r\n<br><br>\r\nPas de surprise, l’intérieur de cette Golf est dans la lignée de ce que propose le constructeur, et sans être aussi léché et épuré qu’une Audi S3, la Golf R affiche toutefois des prestations de qualité. Les assemblages et matériaux sont d’excellente facture, l’ergonomie est exemplaire et la technologie embarquée répond à l’appel.\r\n', 'Sportives', 'https://www.leblog-carspassion.fr/wp-content/uploads/2018/05/P1020615-960x500.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date_comment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `id_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comment`, `comment`, `date_comment`, `id_user`, `id_article`) VALUES
(70, 'J\'aime bien l\'article', '2019-02-07 21:35:42', 6, 11),
(71, 'ah ouiiiii', '2019-02-07 21:35:52', 6, 17),
(72, 'bon dac', '2019-02-07 21:36:04', 6, 20),
(75, 'Excellent la fameuse Fiat 500', '2019-02-10 16:46:11', 1, 11),
(76, 'Mon rêve cette BMW m4 en blanche !!', '2019-02-10 16:46:30', 1, 20),
(77, 'On va aller drifter dehors sous la neige', '2019-02-10 16:46:42', 1, 17),
(78, 'Vieille voiture', '2019-02-12 22:53:31', 10, 11),
(79, 'Allemande > Française ', '2019-02-12 23:20:19', 1, 24),
(84, 'Fameuse Golf 7R', '2019-02-18 21:52:50', 1, 27);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'default.jpg',
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `email`, `password`, `image`, `type`) VALUES
(1, 'KLN', 'NKN', 'nks@outlook.fr', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'KLN-VLD.jpg', 'superuser'),
(6, 'Kurosaki', 'Ichigo', 'niksank@outlook.fr', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Kurosaki-ichigo-kurosaki-98.jpg', 'user'),
(8, 'M4 ', 'Gang', 'them4@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', '', 'user'),
(10, 'TK', '78', 'tk78@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'default.jpg', 'user'),
(11, 'capdepon', 'alexis', 'alexis@gmail.com', '90283840d90de49b8e7984bd99b47fee0d4bd50d', 'default.jpg', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_id_user` (`id_user`),
  ADD KEY `fk_id_article` (`id_article`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_id_article` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`),
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
