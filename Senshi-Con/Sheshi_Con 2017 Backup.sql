-- phpMyAdmin SQL Dump
-- version 4.0.10.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2017 at 05:32 PM
-- Server version: 5.1.73
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `senshicon`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET latin1 NOT NULL,
  `description` longtext CHARACTER SET latin1 NOT NULL,
  `pid` text CHARACTER SET latin1 NOT NULL,
  `pictaken` tinyint(1) NOT NULL,
  `done` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `manual` tinyint(1) NOT NULL,
  `bg` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `artist` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=216 ;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `description`, `pid`, `pictaken`, `done`, `timestamp`, `manual`, `bg`, `phone`, `email`, `artist`) VALUES
(93, 'Mike Murdoch', 'Galreen haired school boy with blue strips on his jacket and freckles \r\n', '1442', 1, 0, '2017-09-30 20:21:05', 0, 'A3', '9075217343', 'mikehawkmurdoch@gmail.com', ''),
(81, 'Matt snowman', 'Undertaker, very large man with a hat and long coat', '1445', 1, 0, '2017-09-30 18:35:04', 0, 'A34', '9073172260', 'snowman2385@gmail.com', ''),
(84, 'Alexei weston', 'Cinderella and fairy godmother add in person from 1454 add sparkles coming from wand', '1453', 1, 0, '2017-09-30 19:43:41', 1, 'R14', '9076170636', 'simplyalexei@hotmail.com', ''),
(83, 'Tristen Aquino', 'a soldier in Atacs camo and spec ops division agent walking through a prison effects requested flashlights and green laser sight', '1451', 1, 0, '2017-09-30 19:36:47', 1, 'R9', '3606088447', 'tristen.aquino@gmail.com', ''),
(94, 'Chris chapman', 'Steampunk x3: two hot girls w/top hats & one skinny guy w/plague dr mask', '1466', 1, 0, '2017-09-30 20:28:54', 0, 'R33', '2096175594', 'stichappalias90@gmail.com', ''),
(85, 'Trisha widmayer', 'Original character pink girl, long maroon red wig with bright pink costume', '1458', 1, 0, '2017-09-30 19:49:59', 0, 'A26', '9192715126', 'tewidmayer@gmail.com', ''),
(86, 'Sharlin Maldonado', 'Sexy Wonder Woman ', '1460', 1, 0, '2017-09-30 19:51:00', 0, 'A14', '9077879276', 'mikehawkmurdoch@gmail.com', ''),
(87, 'Nataly Maldonado', 'Teen girl, blue hair, Lucina, sword', '1461', 1, 0, '2017-09-30 19:52:33', 0, 'R31', '9073013549', 'cupcakemonster151@gmail.com', ''),
(92, 'Jessica harman', 'Family of digimon cosplayers: woman in long red dress and pink hat, man with spiky hair and blue and goggles with baby.', '', 1, 0, '2017-09-30 20:12:18', 0, 'A2', '9076870191', 'jessica.harman63@gmail.com', ''),
(95, 'Christian Ranon-Bacod', 'Akatsuki Cloak black with red cloud wants DBZ style energy flash around him', '1468', 1, 0, '2017-09-30 20:48:33', 1, 'A5', '9078859161', 'carb7799@gmail.com', ''),
(96, 'Thomas Strange', 'Star Trek Officers ', '1469', 1, 0, '2017-09-30 20:52:32', 0, 'R26', '9074142330', 'tstrange@gci.com', ''),
(97, 'Jessica B', 'Freddy fox with top hat and Lara croft CJs Jessica', '1470', 1, 0, '2017-09-30 20:56:43', 0, 'R8', '9075212667', 'jsea_belanger@hotmail.com', ''),
(98, 'Elissia Dobbs ', 'Background: smash brothers. \r\n\r\nTwo girls sasuke and gaara from naruto long black hair and white robe girl and red tunic girl with gourd \r\n\r\nSpecial Effects\r\nBlue lightening from White robes hand.\r\nSand floating around Red tunic girl ', '1472', 1, 0, '2017-09-30 21:00:38', 1, 'A35', '9079530704', 'elissia_dobbs@hotmail.com', ''),
(99, 'Melissa Chlupach', 'Howls moving castle family: woman with grey and pink jacket, young girl in all orange with orange hair, man with blue vest and glasses', '1478', 1, 0, '2017-09-30 21:00:56', 0, 'A6', '9078414133', 'honeybee1877@hotmail.com', ''),
(100, 'Marc beloy', 'Diablo malthael\r\nOverwatch reinheart and hanzo: two silver armor costumes, one with large silver hammer. Long black hair in manbun with bow and gold sash 1 of 2\r\n ', '1473', 1, 0, '2017-09-30 21:01:00', 1, 'A28', '9077203974', 'marcbeloy@msn.com', ''),
(101, 'Shaun groshong', 'Shaun as a prate with many guns and a sword and Michelle his daughter as a bright pink fairy. ', '1479', 1, 0, '2017-09-30 21:18:41', 0, 'A4', '9073152214', 'groshongshaun@yahoo.com', ''),
(103, 'Marc Beloy', 'Diablo malthael Overwatch reinheart and hanzo: two silver armor costumes, one with large silver hammer. Long black hair in manbun with bow and gold sash 2 of 2 add photo 1475', '1474', 1, 0, '2017-09-30 21:25:42', 1, 'A28', '9077203974', 'marcbeloy@msn.com', ''),
(104, 'Cade Harris', 'Darth maul \r\n\r\nBlack cloak and ref light saber red face ', '1480', 1, 0, '2017-09-30 21:29:04', 0, 'R4', '9072689096', 'letsbreakitdown0@gmail.com', ''),
(134, 'Pamella Wilcox', 'Link small young child and Navi woman in full blue fairy with blue short hair', '', 1, 0, '2017-09-30 21:33:07', 0, 'R31', '9079789750', 'silverrainshadow@hotmail.com', ''),
(137, 'Emily Kerrigan ', 'Two people female wearing striped pants and grey vest with silver weapon, male with very curly black hair and white and black eye mask with little gun and knife in hand. ', '1484', 1, 0, '2017-09-30 21:47:08', 0, 'R5', '9073444344', 'emilykerrigan@gmail.com', ''),
(138, 'Angela Grider', 'Red dress pink bows white hair', '1485', 1, 0, '2017-09-30 21:57:21', 0, 'R23', '5034700787', 'angrider@alaska.edu', ''),
(139, 'Jen Jen Roelfs', 'Female Negan from the Walking Dead ', '1486', 1, 0, '2017-09-30 21:59:59', 0, 'R4', '9073543656', 'jenjenroelfs_92@yahoo.com', ''),
(140, 'Devan simpson', 'Big yellow bird person', '1487', 1, 0, '2017-09-30 22:02:38', 0, 'A2', '9074061119', 'dmsimpson94@yahoo.com', ''),
(141, 'Lance Colburn ', 'Fourth Doctor, man in khaki coat with scarf', '', 1, 0, '2017-09-30 22:09:17', 0, 'R42', '907347173', 'lance.colburn7@gmail.com', ''),
(142, 'David Sterling', 'Ninja with white mask and large sword stitches in arm', '1489', 1, 0, '2017-09-30 22:11:29', 0, 'R31', '2075760970', 'davidsterling659@yahoo.com', ''),
(143, 'Patrick Olson', 'Dragoon Final Fantasy tall man with gold and grey armor', '1490', 1, 0, '2017-09-30 22:16:51', 0, 'R15', '9072551516', 'betrayer36@hotmail.com', ''),
(144, 'Jenna stall', 'Pink and purple Cheshire Cat ', '1491', 1, 0, '2017-09-30 22:24:05', 0, 'R3', '9073152214', 'groshongshaun@yahoo.com', ''),
(145, 'Bryce Arens', 'Guy in black shirt and khaki pants with silver shoulder pads.', '1493', 1, 0, '2017-09-30 22:30:39', 0, 'R23', '9077267820', 'brycearens893@gmail.com', ''),
(180, 'Jonathan Shearer', 'Every Generic anime guy, dress in green jacket, blue jeans, sunglasses on high forehead, pointed silver finger thing. Add special effect, go wild with a wing effect! Wants you to go NUTS with this one! 2 of 2 for this guy', '1553', 1, 0, '2017-10-01 04:11:52', 0, 'A14', '4176861098', 'jmshearer98@gmail.com', ''),
(179, 'Jonathon Shearer', 'Every Generic anime guy, dress in green jacket, blue jeans, sunglasses on high forehead, pointed silver finger thing. Add special effect half of face mask, ask Tucker which mask, and add dramatic effects... Have fun!!!1 of 2 for this guy', '1549', 1, 0, '2017-10-01 04:10:15', 0, 'A11', '4176861098', 'jmshearer98@gmail.com', ''),
(152, 'Joshua', 'Soldier with red beret and soldier in silver with helmet , special effects with fog in the background', '1494', 1, 0, '2017-09-30 22:47:26', 0, 'R39', '907728603', 'josh.risten@gmail.com', ''),
(153, 'Carol sluser', 'Black Widow with R12', '1462', 1, 0, '2017-09-30 22:55:38', 0, 'R12', '9048810655', 'carol.sluser@gmail.com', ''),
(154, 'Victoria Willis', 'Symmetra from overwatch, special effects - she would like the blue orb that she is holding to glow with a similar blue as is her blue outfit', '1488', 1, 0, '2017-09-30 23:00:31', 0, 'A33', '9074440980', 'victoriawillis4727@gmail.com', ''),
(155, 'Bobbie barber', 'Cat themed jewel thief that has on again off again relationship with bat themed vigilante.', '1498', 1, 0, '2017-09-30 23:15:04', 0, 'A26', '9073171141', 'bwbarber694@icloud.com', ''),
(156, 'LaTasha Perez', 'Mikasa little girl in brown coat and red scarf', '1499', 1, 0, '2017-09-30 23:16:15', 0, 'A13', '9312208011', 'latashamartinez1201@yahoo.com', ''),
(158, 'Amber Taylor', 'Star Wars family add in photo 1529', '1501', 1, 0, '2017-09-30 23:23:44', 0, 'R32', '9079878120', 'amber1295@msn.com', ''),
(157, 'LaTasha Perez', 'Little girl in lady bug costume ', '1500', 1, 0, '2017-09-30 23:19:47', 0, 'R22', '9312208011', 'latashamartimez1201@yahoo.com', ''),
(159, 'Christina Watson', 'Two small boys with sweatshirts on - they want the smash bros background', '1514', 1, 0, '2017-09-30 23:30:06', 0, 'R2', '9072300342', 'christinaw42@yahoo.com', ''),
(160, 'James Branstetter', 'Male with black jacket, glasses, blue jeans. and short black hair', '1515', 1, 0, '2017-09-30 23:44:52', 0, 'R42', '1(907)854-7697', 'Branstetterj923@gmail.com', ''),
(161, 'Mou thao ', 'Kikyo and kagome from inuyasha. Red and whit kimono, green and white school girl costume', '1517', 1, 0, '2017-09-30 23:49:40', 0, 'A5', '9072309912', 'thao.mao93@gmail.com', ''),
(162, 'Eduardo Sanchez', 'Little Mermaid with red hair and guy with white shirt and blue pants and boots, add special effects of Flounder and Sebastian from Little Mermaid and bubble', '1519', 1, 0, '2017-09-30 23:54:38', 1, 'A1', '9079038159', 'Eduardobansan@gmail.com', ''),
(163, 'Michael Bonnell', 'Military man in black with gum and cap with American flag on it 1 of 2 for same guy', '1523', 1, 0, '2017-10-01 00:10:23', 1, 'R11', '907 322-7324', 'mikenavy19@yahoo.com', ''),
(164, 'Michael Bonnell', 'Military man in black with gun and cap with American flag on it 2 or 2 for same guy', '1524', 1, 0, '2017-10-01 00:12:47', 1, 'R12', '9073227324', 'mikenavy19@yahoo.com', ''),
(165, 'Aiden sanderson', 'Two girls in anime clothes and Ailsas brother aiden with black hair and a friend with pink hair', '1526', 1, 0, '2017-10-01 00:52:45', 0, 'A10', '9073154016', 'acsanderson@alaska.edu', ''),
(166, 'Ryan Mae ', 'Couple with guy in grey taking picture of girl in yellow turtleneck with white sweater', '1528', 1, 0, '2017-10-01 01:30:51', 0, 'R27', '907367135', 'ryan@regal-north.com', ''),
(167, 'Daniella Jade', 'Jade as Rey and Roxie as a Storm Trooper from Star Wars', '1443', 1, 0, '2017-10-01 01:38:35', 0, 'R32', '9079572016', 'daniellafincher@gmail.com', ''),
(168, 'Daniella Jade', 'Jade drinking coffee', '1441', 1, 0, '2017-10-01 01:41:43', 0, 'R35', '9079572016', 'daniellafincher@gmail.com', ''),
(169, 'Lauren boggess', 'Man in long purple coat, full face paint(joker) woman in grey and black dress (batgirl)', '1531', 1, 0, '2017-10-01 01:53:02', 0, 'A26', '9073153294', 'lauren_58@live.com', ''),
(170, 'Courtnie Metzger', 'cheerleader and girl with long black robe with blue stripes, also has a small dog in picture', '1532', 1, 0, '2017-10-01 02:18:49', 0, 'A3', '2106213432', 'courtmetz@hotmail.com', ''),
(171, 'Alek Romatz', 'Maid and man in suit in front of city', '1535', 1, 0, '2017-10-01 02:31:40', 0, 'R11', '9079534383', 'amromatz@gmail.com', ''),
(172, 'Jen Jen Roelfs', 'Young girl in Kimono as with painted face like giasha ', '1536', 1, 0, '2017-10-01 02:34:53', 0, 'R23', '9073543656', 'jenjenroelfs_92@yahoo.com', ''),
(173, 'Cherilee', 'Woman in purple hair with flash bang and army combat knife and eyepatch', '1538', 1, 0, '2017-10-01 02:43:35', 0, 'R39', '9075383954', 'rissiana856@gmail.com', ''),
(174, 'Shiela mahaney', 'Woman in red Hawaiian dress as Lilo with big blue stuffed animal Stitch ', '1539', 1, 0, '2017-10-01 02:44:53', 0, 'R17', '907-351-1872', 'pinayneng@gmail.com', ''),
(175, 'Emma Ashlock', 'Background: http://www.supernaturalwiki.com/images/e/ee/Supernatural-Impala-Fan-Car_Eric-Bates1.jpg\r\n\r\n\r\nTwo girls one in long brown coat other in gray jacket', '1542', 1, 0, '2017-10-01 02:51:49', 0, 'R2', '9079033675', 'emmaa2@icloud.com', ''),
(176, 'Jevaughn Coachman', 'Beast from Beauty and the Beast, blue jacket with yellow trim and white button  and face that looks like an angry dog with pointed ears.', '1545', 1, 0, '2017-10-01 03:17:14', 0, 'R5', '9078304210', 'mrwolfie15@gmail.com', ''),
(177, 'Andrew Lapitan', 'Male tan skin, black tee shirt, black short hair jeans, sunglass on head', '1546', 1, 0, '2017-10-01 03:47:41', 0, 'R35', '6508085300', 'a8ridgebear@yahoo.com', ''),
(178, 'Tim Anderson', 'Handsome man, purple button up shirt and blue jeans kneeling down. Wants to be right next to fire in image', '1548', 1, 0, '2017-10-01 04:02:56', 0, 'A15', '3198301990', 'phaethons7peers@gmail.com', ''),
(181, 'Kitty Chynoweth', 'small girl dressed as princess monanoke, she wants to be coming out of the driver side of the photos forest trees', '1554', 1, 0, '2017-10-01 19:42:05', 0, 'A5', '9073541000', 'jchynoweth@outlook.com', ''),
(182, 'Timothy sanders', 'Tall guy orange cloak with man in white cloak', '1555', 1, 0, '2017-10-01 19:58:40', 0, 'A35', '9075702964', 'tjsand2690@yahoo.com', ''),
(183, 'Theresa Grantland', 'Young white woman, curly black wig with bows, red turtle neck, black skirt and tights\r\nTall white man with bright red short hair and beard, white t shirt and jeans.', '1556', 1, 0, '2017-10-01 20:03:35', 0, 'A3', '9073542593', 'tbirdalaska@gmail.com', ''),
(184, 'Laura Kalolo', 'Woman in grey and red hoodie, man in dark blue and grey jacket and little kid/baby in the middle. ', '1557', 1, 0, '2017-10-01 20:15:02', 0, 'A31', '9073514599', 'laurakalolo@aol.com', ''),
(185, 'James Montgomery', 'One assassin with blue accents  and his lady with toddler. ', '1558', 1, 0, '2017-10-01 20:22:08', 0, 'R17', '5304158054', 'montgomer.james23@gmail.com', ''),
(186, 'Kris Salter', 'Nathan drake cosplay, brown shirt jeans ', '1567', 1, 0, '2017-10-01 20:29:06', 0, 'R8', '9072232038', 'akgaimer@hotmail.com', ''),
(187, 'Trisha Widmayer', 'blue and gold elf with bow and black pants', '1564', 1, 0, '2017-10-01 20:31:25', 0, 'A2', '9192715126', 'tewidmayer@gmail.com', ''),
(188, 'Shane Jonsen', 'Big white dragon. Blue claw hand and staff', '1568', 1, 0, '2017-10-01 20:39:28', 0, 'R40', '9072301684', 'gryphraptor@yahoo.com', ''),
(189, 'Mike kennard', 'Man in orange suit jacket with hippie pants\r\n', '1566', 1, 0, '2017-10-01 20:50:06', 0, 'R31', '9073827869', 'mach4mk@aol.com', ''),
(190, 'Jane doe', 'Girl with brown hair and pink Japanese dress. Red bow kara', '1567', 1, 0, '2017-10-01 20:56:36', 0, 'A6', '9073129748', 'transcoder15@gmail.com', ''),
(191, 'Chaim Krueger ', 'Princess mononoke and wolf', '1570', 1, 0, '2017-10-01 21:18:29', 0, 'A5', '9074445889', 'chami.krueger@gmail.com', ''),
(192, 'Jack Gelione', 'Red white and blue soldier with a 76 on the back \r\nspecial effects, please add a post apocaliptic war scene', '1571', 1, 0, '2017-10-01 21:23:08', 0, 'R4', '9073175599', 'gelione.jack@gmail.com', ''),
(193, 'Ziggy', 'Furry wolf with black sweatshirt and jeans.  \r\nSpecial effects surprise me', '1573', 1, 0, '2017-10-01 21:33:03', 0, 'R1', '9077200517', 'articwolfgirlhowls@gmail.com', ''),
(194, 'David sterling', 'Roy mustang battle, background is going to be one that mike has sent to you\r\nspecial effects lots of fire in the background and coming from his hand, ', '1574', 1, 0, '2017-10-01 21:38:26', 0, 'R2', '2075760960', 'davidsterling659@yahoo.com', ''),
(195, 'Eric jonsen', 'Big brown unicorn, use custom back ground Mike sent to Roxie', '1575', 1, 0, '2017-10-01 21:46:59', 0, 'R2', '9079470473', 'aayrick2@yahoo.com', ''),
(196, 'Deb simmons', 'Female Loki, long black and brown leather looking jacket, with brown/gold horns and a gold and silver staff weapon, and glowing cube \r\n', '1577', 1, 0, '2017-10-01 21:54:56', 0, 'A34', '3615480039', 'redhotmustang92@yahoo.com', ''),
(197, 'Complimentary Steven universe ', 'Greg and rose quartz. Black shirt with star and pink haired lady with big dress pink gem ', '1578', 1, 0, '2017-10-01 22:05:15', 0, 'A31', '0000000000', 'roxie@ccswpak.com', ''),
(198, 'Pedro Escalante', 'Man with glasses and teal hoodie and pants and his little rother a pikachu', '1579', 1, 0, '2017-10-01 22:28:43', 0, 'A2', '907-331-8130', 'pedro-escalante198622@hotmail.com', ''),
(206, 'Mike Murdoch', 'Dragon ball Z guy with spiky hair and a blue jump suit with armor \r\n\r\nSpecial effects purple beam out of hands ', '1590', 1, 0, '2017-10-02 00:48:25', 0, 'A4', '9075217343', 'mikehawkmurdoch@gmail.com', ''),
(200, 'Kane Welty', 'man in all black with black wig and black fur cape, jon snow\r\nspecial effect - place a white dire wolf ghost next to him', '1580', 1, 0, '2017-10-01 22:33:26', 0, 'R36', '9076999028', 'kwelty4100@gmail.com', ''),
(201, 'Marcelo Covarrubias ', 'Male, orange jumpsuit and blue shirt. Goku from DBZ \r\n\r\nSpecial Effects \r\nSuper sayin effects Ki blast and a Kamahamaha wave (blue light beam)', '1581', 1, 0, '2017-10-01 22:39:04', 0, 'A7', '9079030570', 'mquintero@gci.com', ''),
(202, 'Laura Best', 'Woman in large armor with red belt and sword And woman with platinum blonde hair with chain sash  Four different photos with different poses all in front of the same background. the three extra photo numbers will be 1584 and 1585 and 1586', '1583', 1, 0, '2017-10-01 22:54:54', 0, 'R36', '907 252 2876', 'okami75@gmail.com', ''),
(205, 'Daniella Jade', 'Jade in Rey Star Wars, light brown clothes with black boots, light saber in hand, and BB8 droid at feet. Place in front of car in pic to cover it up.', '1587', 1, 0, '2017-10-02 00:42:45', 0, 'R18', '9079572016', 'daniellafincher@gmail.com', ''),
(207, 'Gracen loveless', 'Vampire queen in plaid. And girl with blue hat with pine tree. Special effects beam of light teleporting them down', '1593', 1, 0, '2017-10-02 01:00:35', 1, 'A30', '9079877249', 'gracenlee98@Live.com', ''),
(211, 'Chloe Holland', 'Girl with burnt face and red tunic \r\nspecial effects fire bending', '1598', 1, 0, '2017-10-02 02:11:31', 1, 'A5', '3372783208', 'hollandcj3@aol.com', ''),
(212, 'Jamie Hutson', 'A white/red/pink fox and orange tabby cat couple', '1597', 1, 0, '2017-10-02 02:11:57', 0, 'A35', '9072233009', 'mizukage_spaz@hotmail.com', ''),
(213, 'Jevaughn', 'Red devil with black furry pants multiple pics with same backgroung extra pic 1601, 1609, 1610', '1599', 1, 0, '2017-10-02 02:35:59', 0, 'A34', '9078304210', 'blahsh@gmail.com', ''),
(214, 'Madison Lewis-Bennett', 'Konan (purple hair with rose and blue tunic) Belle (2017 movie edition. Also Hawaiian) and random lady who looks fine af', '1603', 1, 0, '2017-10-02 02:36:39', 0, 'R14', '9079031205', 'rhelanae@gmail.com', ''),
(215, 'Megan jaquish', 'Peridot in the toilet girl with green suit and star hair ', '1605', 1, 0, '2017-10-02 02:44:37', 1, 'R2', '9072278968', 'cylum.meg@gmail.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
