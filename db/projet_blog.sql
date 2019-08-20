-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 15 nov. 2017 à 21:47
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `chapo` text NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `author`, `title`, `chapo`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Jean Test', 'Premier article Projet Blog', 'Exsistit autem hoc loco quaedam quaestio subdifficilis, num quando amici novi, digni amicitia, veteribus sint anteponendi, ut equis vetulis teneros anteponere solemus. Indigna homine dubitatio!', 'Nam sole orto magnitudine angusti gurgitis sed profundi a transitu arcebantur et dum piscatorios quaerunt lenunculos vel innare temere contextis cratibus parant, effusae legiones, quae hiemabant tunc apud Siden, isdem impetu occurrere veloci. et signis prope ripam locatis ad manus comminus conserendas denseta scutorum conpage semet scientissime praestruebant, ausos quoque aliquos fiducia nandi vel cavatis arborum truncis amnem permeare latenter facillime trucidarunt.\r\nPost haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est. Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest, quod ex infinita societate generis humani, quam conciliavit ipsa natura, ita contracta res est et adducta in angustum ut omnis caritas aut inter duos aut inter paucos iungeretur.\r\nQuid? qui se etiam nunc subsidiis patrimonii aut amicorum liberalitate sustentant, hos perire patiemur? An, si qui frui publico non potuit per hostem, hic tegitur ipsa lege censoria; quem is frui non sinit, qui est, etiamsi non appellatur, hostis, huic ferri auxilium non oportet? Retinete igitur in provincia diutius eum, qui de sociis cum hostibus, de civibus cum sociis faciat pactiones, qui hoc etiam se pluris esse quam collegam putet, quod ille vos tristia voltuque deceperit, ipse numquam se minus quam erat, nequam esse simularit. Piso autem alio quodam modo gloriatur se brevi tempore perfecisse, ne Gabinius unus omnium nequissimus existimaretur.', '2017-10-10 10:49:59', '2017-10-11 19:14:26'),
(2, 'Test Deux', 'DeuxiÃ¨me article Projet Blog', 'Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.', 'Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita. Excogitatum est super his, ut homines quidam ignoti, vilitate ipsa parum cavendi ad colligendos rumores per Antiochiae latera cuncta destinarentur relaturi quae audirent. hi peragranter et dissimulanter honoratorum circulis adsistendo pervadendoque divites domus egentium habitu quicquid noscere poterant vel audire latenter intromissi per posticas in regiam nuntiabant, id observantes conspiratione concordi, ut fingerent quaedam et cognita duplicarent in peius, laudes vero supprimerent Caesaris, quas invitis conpluribus formido malorum inpendentium exprimebat. Tempore quo primis auspiciis in mundanum fulgorem surgeret victura dum erunt homines Roma, ut augeretur sublimibus incrementis, foedere pacis aeternae Virtus convenit atque Fortuna plerumque dissidentes, quarum si altera defuisset, ad perfectam non venerat summitatem. Adolescebat autem obstinatum propositum erga haec et similia multa scrutanda, stimulos admovente regina, quae abrupte mariti fortunas trudebat in exitium praeceps, cum eum potius lenitate feminea ad veritatis humanitatisque viam reducere utilia suadendo deberet, ut in Gordianorum actibus factitasse Maximini truculenti illius imperatoris rettulimus coniugem.', '2017-10-10 10:49:59', '2017-10-10 10:49:59'),
(3, 'Bla Blam', 'Projet Blog OpÃ©rationnel !!!', 'At nunc si ad aliquem bene nummatum tumentemque ideo honestus advena salutatum introieris, primitus tamquam exoptatus suscipieris et interrogatus multa coactusque mentiri, miraberis numquam antea visus summatem virum tenuem te sic enixius observantem, ut paeniteat ob haec bona tamquam praecipua non vidisse ante decennium Romam.', '&lt;h1&gt;Apud has gentes&lt;/h1&gt;, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.\r\n\r\nCiliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales.\r\n\r\nHaec subinde Constantius audiens et quaedam referente Thalassio doctus, quem eum odisse iam conpererat lege communi, scribens ad Caesarem blandius adiumenta paulatim illi subtraxit, sollicitari se simulans ne, uti est militare otium fere tumultuosum, in eius perniciem conspiraret, solisque scholis iussit esse contentum palatinis et protectorum cum Scutariis et Gentilibus, et mandabat Domitiano, ex comite largitionum, praefecto ut cum in Syriam venerit, Gallum, quem crebro acciverat, ad Italiam properare blande hortaretur et verecunde. Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat in solido locari cunctorum.', '2017-10-10 10:49:59', '2017-10-11 23:55:08'),
(4, 'Jules Verni', 'Vingt mille lieues sous PHP !', 'Ac ne quis a nobis hoc ita dici forte miretur, quod alia quaedam in hoc facultas sit ingeni, neque haec dicendi ratio aut disciplina, ne nos quidem huic uni studio penitus umquam dediti fuimus. Etenim omnes artes, quae ad humanitatem pertinent, habent quoddam commune vinculum, et quasi cognatione quadam inter se continentur.', 'Iamque lituis cladium concrepantibus internarum non celate ut antea turbidum saeviebat ingenium a veri consideratione detortum et nullo inpositorum vel conpositorum fidem sollemniter inquirente nec discernente a societate noxiorum insontes velut exturbatum e iudiciis fas omne discessit, et causarum legitima silente defensione carnifex rapinarum sequester et obductio capitum et bonorum ubique multatio versabatur per orientales provincias, quas recensere puto nunc oportunum absque Mesopotamia digesta, cum bella Parthica dicerentur, et Aegypto, quam necessario aliud reieci ad tempus.\r\n\r\nQuam ob rem vita quidem talis fuit vel fortuna vel gloria, ut nihil posset accedere, moriendi autem sensum celeritas abstulit; quo de genere mortis difficile dictu est; quid homines suspicentur, videtis; hoc vere tamen licet dicere, P. Scipioni ex multis diebus, quos in vita celeberrimos laetissimosque viderit, illum diem clarissimum fuisse, cum senatu dimisso domum reductus ad vesperum est a patribus conscriptis, populo Romano, sociis et Latinis, pridie quam excessit e vita, ut ex tam alto dignitatis gradu ad superos videatur deos potius quam ad inferos pervenisse. Oportunum est, ut arbitror, explanare nunc causam, quae ad exitium praecipitem Aginatium inpulit iam inde a priscis maioribus nobilem, ut locuta est pertinacior fama. nec enim super hoc ulla documentorum rata est fides.\r\n\r\nEt quoniam mirari posse quosdam peregrinos existimo haec lecturos forsitan, si contigerit, quamobrem cum oratio ad ea monstranda deflexerit quae Romae gererentur, nihil praeter seditiones narratur et tabernas et vilitates harum similis alias, summatim causas perstringam nusquam a veritate sponte propria digressurus.', '2017-10-10 10:49:59', '2017-10-11 23:55:40'),
(5, 'Auteur Latin', 'Test Ajout depuis le formulaire', 'Quapropter a natura mihi videtur potius quam ab indigentia orta amicitia, applicatione magis animi cum quodam sensu amandi quam cogitatione quantum illa res utilitatis esset habitura. Quod quidem quale sit, etiam in bestiis quibusdam animadverti potest, quae ex se natos ita amant ad quoddam tempus et ab eis ita amantur ut facile earum sensus appareat. Quod in homine multo est evidentius, primum ex ea caritate quae est inter natos et parentes, quae dirimi nisi detestabili scelere non potest; deinde cum similis sensus exstitit amoris, si aliquem nacti sumus cuius cum moribus et natura congruamus, quod in eo quasi lumen aliquod probitatis et virtutis perspicere videamur.', 'Rogatus ad ultimum admissusque in consistorium ambage nulla praegressa inconsiderate et leviter proficiscere inquit ut praeceptum est, Caesar sciens quod si cessaveris, et tuas et palatii tui auferri iubebo prope diem annonas. hocque solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.\r\n\r\nUtque proeliorum periti rectores primo catervas densas opponunt et fortes, deinde leves armaturas, post iaculatores ultimasque subsidiales acies, si fors adegerit, iuvaturas, ita praepositis urbanae familiae suspensae digerentibus sollicite, quos insignes faciunt virgae dexteris aptatae velut tessera data castrensi iuxta vehiculi frontem omne textrinum incedit: huic atratum coquinae iungitur ministerium, dein totum promiscue servitium cum otiosis plebeiis de vicinitate coniunctis: postrema multitudo spadonum a senibus in pueros desinens, obluridi distortaque lineamentorum conpage deformes, ut quaqua incesserit quisquam cernens mutilorum hominum agmina detestetur memoriam Samiramidis reginae illius veteris, quae teneros mares castravit omnium prima velut vim iniectans naturae, eandemque ab instituto cursu retorquens, quae inter ipsa oriundi crepundia per primigenios seminis fontes tacita quodam modo lege vias propagandae posteritatis ostendit.\r\n\r\nHarum trium sententiarum nulli prorsus assentior. Nec enim illa prima vera est, ut, quem ad modum in se quisque sit, sic in amicum sit animatus. Quam multa enim, quae nostra causa numquam faceremus, facimus causa amicorum! precari ab indigno, supplicare, tum acerbius in aliquem invehi insectarique vehementius, quae in nostris rebus non satis honeste, in amicorum fiunt honestissime; multaeque res sunt in quibus de suis commodis viri boni multa detrahunt detrahique patiuntur, ut iis amici potius quam ipsi fruantur.\r\n\r\nAtque, ut Tullius ait, ut etiam ferae fame monitae plerumque ad eum locum ubi aliquando pastae sunt revertuntur, ita homines instar turbinis degressi montibus impeditis et arduis loca petivere mari confinia, per quae viis latebrosis sese convallibusque occultantes cum appeterent noctes luna etiam tum cornuta ideoque nondum solido splendore fulgente nauticos observabant quos cum in somnum sentirent effusos per ancoralia, quadrupedo gradu repentes seseque suspensis passibus iniectantes in scaphas eisdem sensim nihil opinantibus adsistebant et incendente aviditate saevitiam ne cedentium quidem ulli parcendo obtruncatis omnibus merces opimas velut viles nullis repugnantibus avertebant. haecque non diu sunt perpetrata.\r\n\r\nSed maximum est in amicitia parem esse inferiori. Saepe enim excellentiae quaedam sunt, qualis erat Scipionis in nostro, ut ita dicam, grege. Numquam se ille Philo, numquam Rupilio, numquam Mummio anteposuit, numquam inferioris ordinis amicis, Q. vero Maximum fratrem, egregium virum omnino, sibi nequaquam parem, quod is anteibat aetate, tamquam superiorem colebat suosque omnes per se posse esse ampliores volebat.\r\n\r\nRestabat ut Caesar post haec properaret accitus et abstergendae causa suspicionis sororem suam, eius uxorem, Constantius ad se tandem desideratam venire multis fictisque blanditiis hortabatur. quae licet ambigeret metuens saepe cruentum, spe tamen quod eum lenire poterit ut germanum profecta, cum Bithyniam introisset, in statione quae Caenos Gallicanos appellatur, absumpta est vi febrium repentina. cuius post obitum maritus contemplans cecidisse fiduciam qua se fultum existimabat, anxia cogitatione, quid moliretur haerebat.\r\n\r\nLatius iam disseminata licentia onerosus bonis omnibus Caesar nullum post haec adhibens modum orientis latera cuncta vexabat nec honoratis parcens nec urbium primatibus nec plebeiis.\r\n\r\nMartinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans, ut ab omni culpa inmunibus parceretur, cum non inpetraret, minabatur se discessurum: ut saltem id metuens perquisitor malivolus tandem desineret quieti coalitos homines in aperta pericula proiectare.\r\n\r\nIbi victu recreati et quiete, postquam abierat timor, vicos opulentos adorti equestrium adventu cohortium, quae casu propinquabant, nec resistere planitie porrecta conati digressi sunt retroque concedentes omne iuventutis robur relictum in sedibus acciverunt.', '2017-10-10 13:08:17', '2017-10-10 13:08:17'),
(6, 'caidor beauvil', 'C\'est quoi le BIOS d\'un ordinateur?', 'Qu\'est-ce que le BIOS d\'un ordinateur ? Explications.', 'Le BIOS (Â« Basic Input/Output System Â» traduisez Â« SystÃ¨me de gestion Ã©lÃ©mentaire des entrÃ©es/sorties Â») est un composant essentiel de l\'ordinateur, permettant le contrÃ´le des Ã©lÃ©ments matÃ©riels. Il s\'agit d\'un petit logiciel dont une partie est dans une ROM (mÃ©moire morte, c\'est-Ã -dire une mÃ©moire qui ne peut pas Ãªtre modifiÃ©e), et une autre partie est dans un EEPROM (mÃ©moire modifiable par impulsions Ã©lectriques, d\'oÃ¹ le terme flasher pour dÃ©signer l\'action de modifier l\'EEPROM). Le POST Lorsque le systÃ¨me est mis sous-tension ou rÃ©amorcÃ© (Reset), le BIOS fait l\'inventaire du matÃ©riel prÃ©sent dans l\'ordinateur et effectue un test (appelÃ© POST, pour \"Power-On Self Test\") afin de vÃ©rifier son bon fonctionnement : Effectuer un test du processeur (CPU) , VÃ©rifier le BIOS, VÃ©rifier la configuration du CMOS, Initialiser le timer (l\'horloge interne), Initialiser le contrÃ´leur DMA, VÃ©rifier la mÃ©moire vive et la mÃ©moire cache, Installer toutes les fonctions du BIOS, vÃ©rifier toutes les configurations (clavier, disquettes, disques durs ...)\r\n\r\nSi jamais le POST rencontre une erreur, il va essayer de continuer le dÃ©marrage de l\'ordinateur. Toutefois si l\'erreur est grave, le BIOS va arrÃªter le systÃ¨me et : Afficher un message Ã  l\'Ã©cran si possible (le matÃ©riel d\'affichage n\'Ã©tant pas forcÃ©ment encore initialisÃ©e ou bien pouvant Ãªtre dÃ©faillant), Ã©mettre un signal sonore, sous forme d\'une sÃ©quence de bips (beeps en anglais) permettant de diagnostiquer l\'origine de la panne, envoyer un code (appelÃ© code POST) sur le port sÃ©rie de l\'ordinateur, pouvant Ãªtre rÃ©cupÃ©rÃ© Ã  l\'aide d\'un matÃ©riel spÃ©cifique de diagnostic, Si tout est correct, le BIOS Ã©mettra gÃ©nÃ©ralement un bip bref, signalant qu\'il n\'y a pas d\'erreur. Vous voulez en savoir plus Ã  ce sujet ? procurez-vous Â« comprendre, Assembler et RÃ©parer votre ordinateur de BC COMPUTERS.', '2017-11-15 21:27:12', '2017-11-15 21:27:12'),
(7, 'Ludovic Etienne', 'L\'informatique ou le monde dans tous ses Ã©tats', 'La Recherche d\'une vie meilleure, telle est la mission primordiale de l\'informatique sans cesse en Ã©volution. Cela est de l\'Ã©volution dans le bon sens.', 'L\'Informatique\r\nou le monde actuel dans tous ses Ã©tats.\r\n\r\nL\'Informatique, un terme qui a pris une place prÃ©dominante dans le monde d\'aujourd\'hui.\r\nAucune entreprise actuelle, petite moyenne ou grande, ne peut se permettre de poursuivre son activitÃ© sans ces moyens essentiels qui lui permettent de prospÃ©rer.\r\nIl existe aussi une forte demande chez les particuliers qui dÃ©sirent souvent se former Ã  ce nouvel outil utilisÃ© dans la vie quotidienne autant pour l\'Ã©ducation que pour la distraction.\r\n\r\nAinsi, l\'informatique avec le dÃ©veloppement d\'Internet qui ne cesse d\'Ã©voluer touche la plupart d\'entre nous. D\'ailleurs c\'est grÃ¢ce Ã  cela que vous pouvez lire ces quelques lignes, n\'est-ce pas?\r\n\r\nL\'informatique est partout, et fait maintenant partie intÃ©grante de nos vies. Tout nouveau moyen de communication et tout concept actuel l\'utilise de maniÃ¨re absolue.\r\nSans oublier,malheureusement, les rÃ©centes et pÃ©riodiques catastrophes naturelles qui sont Ã©tudiÃ©es de par le monde et qui ne peuvent se dÃ©tourner de cette technologie pour le moins utile et innovante de jour en jour.\r\n\r\n\r\nPour preuve, le plus gros moyen informatique qui existe en Europe est un supercalculateur capable de rÃ©aliser prÃ¨s de 50 000 milliards d\'opÃ©rations par seconde: Le TERA-10 installÃ© en France, dans le CEA au sein de la Direction des Applications Militaires.\r\nAvec ses 4532 processeurs et ses 27 000 Gigaoctets de mÃ©moire, Le TERA-10 vise Ã  assurer la fiabilitÃ© et la sÃ©curitÃ© des armes de dissuasion dÃ©veloppÃ©es par la dÃ©fense franÃ§aise ainsi que la simulation des phÃ©nomÃ¨nes atmosphÃ©riques.\r\n\r\nA l\'inverse, les ordinateurs les plus petits comme les ultra portables font aussi de grands miracles.\r\n\r\n\r\nL\'informatique, exclusivement pour les connaisseurs?\r\nFaut-il Ãªtre ingÃ©nieur pour exploiter au maximum les possibilitÃ©s d\'un ordinateur?\r\n\r\nPas du tout, l\'utilisateur de base est quelqu\'un comme vous et moi, et la majoritÃ© des personnes qui l\'utilise n\'ont eu au dÃ©part aucune connaissance technique.\r\n\r\nEt c\'est toute l\'idÃ©e de ces pages que de vous amener Ã  la dÃ©couverte de:\r\n\"ce monde dans tous ces Ã©tats\" \r\n\r\nVous n\'en Ãªtes qu\'au commencement, ce site est spÃ©cialement fait pour vous. \r\n\r\nUtilisateurs avancÃ©s, vous y trouverez aussi votre compte, car on en apprend toujours.\r\n\r\nA vous, novices et dÃ©butants dans le domaine, le pouvoir d\'expliquer clairement et simplement ce qu\'est l\'informatique. Ainsi vous deviendrez incollable sur le sujet.\r\n\r\nJe ne pouvais vous faire entrer dans ce monde sans cette petite introduction simple mais essentielle sur un sujet si vaste.\r\n\r\nCet article est offert par:\r\nhttp://informatique-pour-tous.fr.nf', '2017-11-15 21:28:50', '2017-11-15 21:29:56'),
(8, 'Steve Bureau', 'Passer de <h1>Photoshop</h1> Ã  Gimp', 'Si vous envisagez de faire le saut de Photoshop Ã  Gimp, vous avez besoin de comprendre quelques concepts de base qui feront de votre passage un peu moins chaotique.', 'Si vous envisagez de faire le saut de Photoshop Ã  Gimp, vous avez besoin de comprendre quelques concepts de base qui feront de votre passage un peu moins chaotique. \r\n\r\nVoici quatre conseils importants pour faire le saut vers Gimp.\r\n\r\n1. Gimp n\'est pas Photoshop. \r\n\r\nNon, ce n\'est pas Photoshop. Il ne le sera jamais. Mais est-il aussi bon? Pour la plupart des utilisations, en particulier des graphiques Web, il sera aussi bon. Pour l\'impression, Photoshop est mieux. Le point principal est d\'entrer dans Gimp comme un dÃ©butant. Essayez de laisser vos connaissances sur Photoshop ailleurs et regardez Gimp comme un programme tout Ã  fait nouveau.\r\n\r\n2. Lisez le manuel. \r\n\r\nJ\'ai essayÃ© pendant des annÃ©es d\'utiliser Gimp, mais je ne pouvais pas, parce que je n\'arrÃªtais pas de penser qu\'il devait Ãªtre Photoshop. Je me suis plaint que les frappes ne sont pas les mÃªmes, que la fonctionnalitÃ© de la culture Ã©tait diffÃ©rente, etc. Quand j\'ai finalement lu le manuel de Gimp et que j\'ai vu qu\'il s\'approchait de l\'apprentissage d\'un dÃ©butant, j\'ai vu la lumiÃ¨re.\r\n\r\n3. Faire un tas de tutoriels. \r\n\r\nIl y a une tonne de tutoriels Gimp en ligne. Rappelez-vous quand vous avez commencÃ© Ã  apprendre Photoshop. Vous avez fait un tas de tutoriels et vous avez appris toutes sortes de raccourcis et astuces. C\'est ainsi que vous devez apprendre Gimp. Prenez votre temps. Voyez comment d\'autres personnes travaillent avec Gimp. Encore une fois, laissez vos apprentissages de Photoshop sur le plateau et recommencez avec Gimp.\r\n\r\n4. N\'abandonnez pas. \r\n\r\nAvant d\'avoir vu la lumiÃ¨re, lu le manuel de Gimp, fais un tas de tutoriels, j\'Ã©tais frustrÃ© Ã  chaque fois que j\'essayais d\'utiliser Gimp. Il Ã©tait affolant de faire les choses les plus simples : faire un graphique en-tÃªte, couleur de la police, appliquez une ombre, etc.\r\n\r\nJ\'ai abandonnÃ© plusieurs fois. En fin de compte, ma persÃ©vÃ©rance a portÃ© fruit, et il en sera de mÃªme pour vous. Passer de Photoshop Ã  Gimp n\'est pas facile. Mais une fois que vous l\'installÃ© et l\'avez traitÃ© comme un nouveau programme, lire le manuel, faire des tutoriels, vous trouverez que le travail effectuÃ© dans Gimp est facile.', '2017-11-15 21:30:59', '2017-11-15 21:31:32'),
(9, 'Jean-Pierre Delieux', 'Mon PC ne dÃ©marre plus ! Comment Ã©tablir un premier diagnostique.', 'Cela vous est dÃ©jÃ  arrivÃ© ? ou c\'est la premiÃ¨re fois ? lorsque vous essayez d\'allumer votre ordinateur, il ne se passe rien . A part le bruit du clic de l\'interrupteur, rien ne se passe, surtout ne paniquez pas . Pour comprendre et analyser les pannes de son ordinateur, il faut savoir que celui-ci est composÃ© de diffÃ©rentes parties, plus ou moins importantes.', 'Cet article s\'adresse aux nÃ©ophytes, Ã©videmment si vous connaissez la structure d\'un ordinateur, vous n\'apprendrez pas de nouvelles choses.\r\n\r\nCela vous est dÃ©jÃ  arrivÃ© ? ou c\'est la premiÃ¨re fois ? lorsque vous essayez d\'allumer votre ordinateur, il ne se passe rien . A part le bruit du clic de l\'interrupteur, rien ne se passe, surtout ne paniquez pas . \r\n\r\nPour comprendre et analyser les pannes de son ordinateur, il faut savoir que celui-ci est composÃ© de diffÃ©rentes parties, plus ou moins importantes. Avant de rentrer dans les dÃ©tails, il est bon de se poser les bonnes questions. \r\n\r\nCertains vendeurs en informatique ou bricoleurs, vont tout de suite vous dire, Â« Monsieur, votre processeur est brÃ»lÃ© ou votre carte-mÃ¨re est dÃ©fectueuse Â» et tout Ã§a, sans ouvrir le capot de votre ordinateur, ce qui est totalement scandaleux.\r\n\r\nUne Ã©tude rÃ©vÃ¨le que dans 90% des cas, les pannes d\'ordinateurs sont mineures et n\'entraÃ®nent pas d\'achats de nouvelles piÃ¨ces. Bien Ã©videmment, certaines personnes peu mÃ©fiantes ne tomberont pas toujours sur un informaticien honnÃªte. \r\n\r\nAvant de passer au test, il faut observer ce qui se passe. Vous appuyez sur l\'interrupteur, les ventilateurs tournent, l\'alimentation fonctionne.\r\nOn entend que l\'ordinateur dÃ©marre mais l\'Ã©cran reste noir, deux choix, soit c\'est la carte Ã©cran qui dÃ©conne ou qui est mal enfichÃ©e, ou plus sÃ©rieux c\'est la carte-mÃ¨re qui est dÃ©fectueuse. Et certains fabricants d\'ailleurs, ont prÃ©-programmÃ© des codes qui se manifestent avec des bips sonores ( long , court ) et qui permettent de dÃ©terminer Ã  quel niveau se situe la panne. La suite des test n\'est valable que si le pc ne dÃ©marre pas et que les ventilateurs ne tournent pas.\r\n\r\nPour commencer, il faut vous assurer que les cÃ¢bles d\'alimentations, conduisent bien le courant nÃ©cessaire au bloc d\'alimentation, et oui, ce n\'est pas rare de trouver un cÃ¢ble ayant subit des dÃ©saltÃ©rations, Ã  cause de la foudre ou d\'une surtension du rÃ©seau Ã©lectrique, peut perdre ses qualitÃ©s conductrices et bloquer l\'arrivÃ©e du courant, ou tout simplement, un multiprise avec un interrupteur dÃ©fectueux, c\'est dÃ©jÃ  arrivÃ©, je vous l\'assure.\r\n\r\nEnsuite, on va regarder le bloc d\'alimentation, certains sont pourvus de fusibles, vÃ©rifiez que celui-ci n\'est pas tout simplement grillÃ©, c\'est-Ã -dire, assurez-vous que le contact du fusible n\'est pas rompu. Ces fusibles se trouvent assez facilement dans un magasin qui vend de l\'Ã©lectronique.\r\n\r\nLe plus simple pour voir si c\'est votre alimentation qui est dÃ©fectueuse, c\'est avoir sous la main, une seconde alimentation, soit vous avez un second ordinateur, ou un copain peut vous prÃªter son alimentation, juste pour effectuer un test. \r\n\r\nSi avec une autre alimentation Ã§a marche ! Il suffit d\'acheter uniquement une nouvelle alimentation, dont le prix ne dÃ©passe pas 20 euros pour une alimentation bon marchÃ©.\r\nSi le pc ne dÃ©marre pas malgrÃ© tout ces tests, je vous conseillerai de vous tourner vers un technicien, au-de-lÃ  de ce niveau, il serait dangereux, Ã  ce stade, d\'aller plus loin dans ce type de dÃ©marche. \r\n\r\nSi je vous ai permis de rÃ©soudre, ne serais-ce qu\'une fois, un problÃ¨me de ce genre, et d\'avoir Ã©conomisÃ© quelques euros chez votre marchand d\'ordinateurs, Ã§a me ferait dÃ©jÃ  plaisir .', '2017-11-15 21:33:01', '2017-11-15 21:33:01'),
(10, 'Anne Doe', 'Casino : tu m\'as rendu fou', 'La Dame de Pique est une nouvelle d\'Alexandre Pouchkine, traduite par Prosper MÃ©rimÃ©e et publiÃ©e en 1834.', 'Contrairement aux Ã©crits prÃ©cÃ©dents de Pouchkine, la nouvelle n\'est ni folklorique, ni historique mais se dÃ©roule plutÃ´t sous le signe de l\'Ã©vÃ©nement mondain et alÃ©atoire Ã  St Petesbourg.\r\n\r\nHermann, jeune officier d\'origine allemande s\'interdit formellement de jouer aux jeux d\'hasards. Mais voila qu\'un jour il entend que durant sa jeunesse la comtesse Ana Fedotovna a retrouvÃ© tout son argent grÃ¢ce a une combinaison secrÃ¨te de trois cartes qu\'elle avait trouvÃ©e. Le jeune officier se promet des lors de dÃ©nicher cette combinaison et croit ainsi qu\'a partir de ce moment la, la richesse lui appartiendra.\r\n\r\nC\'est ainsi que Hermann use de tous ses charmes afin de sÃ©duire Lisaveta Ivanovna, jeune demoiselle de compagnie de la comtesse, se disant qu\'en se rapprochant de la demoiselle, il se rapprochera Ã©galement de la comtesse et donc obtiendra le secret menant a la richesse proche. \r\n\r\nLors d\'une soirÃ©e alors qu\'il a rendez vous avec Lisaveta dans sa chambre, il dÃ©cide d\'entrer dans la chambre d\'a cote, qui n\'est autre que la demeure de la comtesse. Cette derniÃ¨re, paniquÃ©e par la menace armÃ©e d\'Hermann, s\'effondre et meurt sur le coup.\r\n\r\nLe soir mÃªme de l\'enterrement de la comtesse, Hermann croit halluciner en voyant la comtesse lui adresser un clin d\'Å“il. Puis le soir suivant, cette derniÃ¨re apparaÃ®t dans son rÃªve : elle se dit Ãªtre prÃªte a lui rÃ©vÃ©ler la combinaison des trois cartes : Le trois, le sept et l\'as. Mais s\'il joue ces cartes, il doit lui promettre d\'Ã©pouser sa pupille et de ne plus jouer.\r\n\r\nSans plus attendre, l\'officier, sur de lui plus que jamais, va jouer toute sa fortune. La premiÃ¨re carte est la bonne, la deuxiÃ¨me aussi, mais catastrophe la troisiÃ¨me carte n\'est pas un as mais plutÃ´t une dame de pique qui de plus ressemble Ã©trangement a la comtesse morte. Par ailleurs, la carte lui fait un clin d\'Å“il. Ruine, il s\'effondre et sombre dans la folie condamne a peser ses jours dans une maison psychiatrique, dans laquelle Hermann marmonne sans cesse Â« trois sept as trois sept dame Â» \r\n\r\nAlexandre Pouchkine est sans l\'ombre d\'un doute l\'auteur qui a permit une indÃ©pendance littÃ©raire a la Russie sans devoir se confronter aux normes Ã©trangÃ¨res. Le suivront dans ses idÃ©aux et dans son style, beaucoup de grands auteurs russes comme Gogol, TolstoÃ¯ ou DostoÃ¯evski pour n en citer que quelques uns. Si il fallait retenir une idÃ©e principale de l\'Å“uvre pouchkinienne, cela serait certainement que Pouchkine voulait Â« dire simplement les choses simples Â»\r\n\r\nLa Dame de Pique, excellente et unique Å“uvre peut se lire et relire sans se lasser. A chaque fois de nouvelles interprÃ©tations et e visions s\'offrent en effet au lecteur. Une fois fantastique et complÃ¨tement mythique, une fois contemporaine et actuelle, La Dame de pique m\'a enseignee beaucoup de choses : qu\'il ne faut jamais mentir, que la sorcellerie existe et que le casino a Ã©galement des dangers. Personnellement, je ne fais pas confiance a ma propre intuition, alors pensez vous a celle de cette comtesse inconnueâ€¦', '2017-11-15 21:46:10', '2017-11-15 21:47:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
