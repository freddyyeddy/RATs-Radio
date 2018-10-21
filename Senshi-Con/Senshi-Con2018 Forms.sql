-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2018 at 05:43 PM
-- Server version: 10.0.36-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lzxksnxr_NINJAA`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
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
  `artist` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `description`, `pid`, `pictaken`, `done`, `timestamp`, `manual`, `bg`, `phone`, `email`, `artist`) VALUES
(50, 'Fgghghj', 'Ggjgjhgjh', '5638', 1, 1, '2018-09-15 02:37:03', 0, 'A19', '9079829966', 'freddyyeddy@gmail.com', 'Sam'),
(49, 'Emily Bordelon', 'Bordelon ligjibhgfhgc', '2345', 1, 1, '2018-08-16 16:56:10', 1, 'A12', '9074149034', 'emily.s.thorpe@gmail.com', 'Sam'),
(48, 'asdsad', 'asdsadsad', '1234', 1, 1, '2018-08-09 09:25:47', 1, 'A12', '9079829966', 'freddyyeddy@gmail.com', 'Sam'),
(51, 'This is a test of speed', 'Asfjfdjjfjf\r\nFhfjfggdgjdg\r\n\r\nFjfjfff', '1423', 1, 1, '2018-09-15 19:08:01', 0, 'R15', '9074148084', 'smith.c.tucker@gmail.com', 'Sam'),
(52, 'SAMUEL A BORDELON', '1234', '5362', 1, 1, '2018-09-15 19:09:51', 0, 'A34', '9079829966', 'freddyyeddy@gmail.com', 'Sam'),
(53, 'Shfhfz', 'Fgjkhvjhccdkk', '5842', 1, 1, '2018-09-15 19:10:11', 0, 'R12', '9074149034', 'emily.s.thorpe@gmail.com', 'Sam'),
(54, 'Emily Bordelon', 'asdsadsad', '1234', 1, 1, '2018-09-15 20:14:04', 0, 'A01', '9074149034', 'emily.s.thorpe@gmail.com', 'Sam'),
(55, 'asdsad', 'asddfsad', '2345', 1, 1, '2018-09-15 20:14:16', 0, 'A01', '9074149034', 'emily.s.thorpe@gmail.com', 'Sam'),
(56, 'Jochdnsjd', 'Dhdjfdhjbarev\r\nGoih', '1538', 1, 1, '2018-09-15 21:19:22', 0, 'A33', '9079829966', 'freddyyeddy@gmail.com', 'Sam'),
(57, 'Tagg Davies', 'A tall skinny native guy', '9587', 1, 1, '2018-09-21 22:33:29', 0, 'A01', '9074148084', 'smith.c.tucker@gmail.com', 'Sam'),
(58, 'Jacob pennell', 'Short dude with yellow shirt and black bandolier', '5555', 1, 1, '2018-09-22 01:17:18', 0, 'A19', '9073152487', 'jacob_pennell@yahoo.com', 'Sam'),
(59, 'Roxanne', 'Purple and pink fairy costume with jeans on, tattoos on arms', '6666', 1, 1, '2018-09-22 18:13:24', 0, 'A25', '9078411183', 'emily.s.thorpe@gmail.com', 'Sam'),
(60, 'Matt jones', 'Road hog with anchor tattoo. Matt wearing grey shirt with biker vest.', '1826', 1, 1, '2018-09-22 19:01:20', 0, 'R04', '9073172260', 'snowman2385@gmail.com', 'Sam'),
(61, 'Katrina eldred', '6 year old girl in pink dress and pink wand. Cardcaptor sakura', '1827', 1, 1, '2018-09-22 19:15:17', 0, 'A07', '9373467030', 'blakie50@hotmail.com', 'Sam'),
(62, 'Anessia', 'Xayah and Rkhan bird people. Purple and gol man with rose', '1828', 1, 1, '2018-09-22 19:49:24', 0, 'R31', '9079534459', 'aahubler@alaska.edu', 'Sam'),
(63, 'Tracking kohler', 'Surprise gray husky with black ears blue eyes red and black walking dead shirt', '1829', 1, 1, '2018-09-22 20:08:29', 1, 'A33', '9077200517', 'articwolfgirlhowls@gmail.com', 'Sam'),
(64, 'Darryl skadsem', 'Luigiâ€™s mansion  with luigi', '1830', 1, 1, '2018-09-22 20:23:52', 1, 'A10', '9072407466', 'darryl.skadsem@gmail.com', 'Sam'),
(65, 'Flossie Foster ', 'Blue &white costumes black wigâ€™ blonde wigâ€™ green black wig &red & white wig second photo is 1833', '1832', 1, 1, '2018-09-22 20:34:45', 1, 'A35', '9073945142', 'aimeeleigh7@hotmail.com', 'Sam'),
(66, 'Charles Ducut', 'Polis ranger', '1835', 1, 1, '2018-09-22 20:38:35', 0, 'R04', '(907)351-3497', 'CharlesDucut@gmail.com', 'Sam'),
(67, 'Eric jonsen ', 'Unicorn ', '0016', 1, 1, '2018-09-22 20:55:35', 1, 'R31', '9079477473', 'aayrick2@yahoo.com', 'Sam'),
(68, 'Ricky marshall', 'Ninja 2 sai glow coming from symbol on chest', '1838', 1, 1, '2018-09-22 21:14:31', 1, 'A21', '8502939609', 'rickylmarshall23aa@gmail.com', 'Sam'),
(69, 'Kris Salter', 'Grey hair, black jacket and sword Yu Narukami from persona 4 izanagi in the background with him', '1839', 1, 1, '2018-09-22 21:19:34', 1, 'A07', '9072232038', 'akgaimer@hotmail.com', 'Sam'),
(70, 'Carolyn', 'Custom ruins background, Undertale, purple and white dress white hair horns FIRE coming from hands', '1843', 1, 1, '2018-09-22 21:36:31', 1, 'A01', '9074446079', 'carolyntix@gmail.com', 'Sam'),
(71, 'Elissia Dobbs', 'Mario. And Luigi with boo balloons long hair Luigiâ€™s mansion backround', '1844', 1, 1, '2018-09-22 21:48:05', 1, 'A01', '9079530704', 'elissia_dobbs@hotmail.com', 'Sam'),
(72, 'Mike kennard', 'Doc Emmett L Brown ', '1845', 1, 1, '2018-09-22 21:50:45', 0, 'R34', '9073827869', 'macch4mk@aol.com', 'Sam'),
(73, 'Mae ditty', 'Homura. From rebellion ova maid outfit', '1848', 1, 1, '2018-09-22 21:54:02', 0, 'A36', '9079474500', 'mliditty@gmail.com', 'Sam'),
(74, 'Monica Rose', 'Boy in black hoodie, two girls small in purple and big in82 sweater', '1849', 1, 1, '2018-09-22 22:07:54', 0, 'R39', '9073102603', 'barelythere86@gmail.com', 'Sam'),
(75, 'Rictar', 'Giant rat  black and grey with blue markings on the ears', '1852', 1, 1, '2018-09-22 22:30:02', 0, 'R06', '9072021339', 'taidas@gmail.com', 'Sam'),
(76, 'Julia houck', 'Chibin,moon: pink wig, pink sailor moon costume', '1851', 1, 1, '2018-09-22 22:52:34', 0, 'R30', '7077619727', 'jeweleeyuhh@gmail.com', 'Sam'),
(77, 'Sabrina kelly', 'Military admiral black and red uniform with blue and black hair', '1853', 1, 1, '2018-09-22 23:08:49', 0, 'R36', '9072528307', 'shadowridershadow@gmail.com', 'Sam'),
(78, 'Heather Stanton ', 'Three girls. Two brunette one blonde. Normal clothes', '1855', 1, 1, '2018-09-22 23:29:16', 0, 'A26', '9077482938', 'heat730@gmail.com', 'Sam'),
(79, 'Christina Watson ', 'Lady w/anchorage heart run  shirt and little boy', '1860', 1, 1, '2018-09-22 23:44:27', 0, 'A14', '9072300342', 'christinaw42@yahoo.com', 'Sam'),
(80, 'Charlotte Severin ', 'Taller girl- long purple wig, and cream turtle neck\r\nThe shorter girl with a pink tutu and pink hair', '1861', 1, 1, '2018-09-23 00:15:38', 0, 'A07', '9079523897', 'charlottesofsev@gmail.com', 'Sam'),
(81, 'Destiny Hughes', 'Girl with red and turquoise hair with cat ears black t-shirt. Yellow haired girl with brown crop top jacket. Guy with the blue jacket and the scary mask', '1862', 1, 1, '2018-09-23 00:37:48', 0, 'A17', '9076876563', 'cleep14@gmail.com', 'Sam'),
(82, 'Kathy Balaban', 'Three kids, fortnite, spray paint girl, red dress girl, orange jacket', '1864', 1, 1, '2018-09-23 01:39:42', 0, 'A30', '9072304189', 'luckykmb@yahoo.com', 'Sam'),
(83, 'Kathy Balaban', 'Female sonic the hedgehog ', '1866', 1, 1, '2018-09-23 01:44:02', 0, 'A06', '9072304189', 'luckykmb@yahoo.com', 'Sam'),
(84, 'Ashton Stockton', 'Tons of people with furry in foreground.', '1867', 1, 1, '2018-09-23 01:57:52', 0, 'A26', '9073509725', 'darkyash@icloud.com', 'Sam'),
(85, 'David Sterling', 'School uniform grey jacket green hair red tie', '1865', 1, 1, '2018-09-23 02:00:52', 0, 'A26', '2075760970', 'davidsterling659@yahoo.com', 'Sam'),
(86, 'Joshua sampson ', 'Green PokÃ©mon dinosaur in onesie', '1866', 1, 1, '2018-09-23 02:22:34', 0, 'A05', '9075384452', 'amerflw01@hotmail.com', 'Sam'),
(87, 'Angie', 'Mario long hair female. Peach . Luigi', '1868', 1, 1, '2018-09-23 02:24:29', 0, 'R19', '9073102871', 'carinomio13@hotmail.com', 'Sam'),
(88, 'Jen Jen Roelfs', 'Green and black bodysuit green cloak brown hair ', '1869', 1, 1, '2018-09-23 02:36:46', 0, 'A02', '9073543656', 'jenjenroelfs_92@yahoo.com', 'Sam'),
(89, 'Diane Reynolds', '1 woman pokeball dress, 1 girl pikachu pokemon, 1 boy pokemon hau', '1871', 1, 1, '2018-09-23 02:43:54', 0, 'A10', '9079524926', 'direyn05@yahoo.com', 'Sam'),
(90, 'Paul', 'Powerful warrior with big sword and armor with glowing sword', '1877', 1, 1, '2018-09-23 02:53:38', 1, 'A10', '9074441514', 'paulparsonsak96@gmail.com', 'Sam'),
(91, 'Ryan Wilcox', 'Little girl Link. Heart charm on neck. Leather strap on chest special effect fairy navi', '1879', 1, 1, '2018-09-23 03:07:47', 1, 'A10', '9079789750', 'silverrainshadow@hotmail.com', 'Sam'),
(92, 'Pamella Wilcox', 'Jubilee!!! Fireworks/sparkles coming from hands.', '1886', 1, 1, '2018-09-23 03:09:24', 1, 'R12', '9079789750', 'silverrainshadow@hotmail.com', 'Sam'),
(93, 'Alexei Weston', 'MerRose and Pirate Pearl', '1882', 1, 1, '2018-09-23 03:29:32', 0, 'A25', '9076170636', 'simplyalexei@hotmail.com', 'Sam'),
(94, 'Holy crap', 'Jedi, donâ€™t be an idiot', '0014', 1, 0, '2018-09-23 16:59:34', 0, 'R25', '9094148084', 'shittalker@ymum.com', ''),
(95, 'Amy Force-Garrett', 'Patriotic Peaches background chose later', '0015', 1, 1, '2018-09-23 17:08:37', 0, 'A01', '9079823385', 'amyforcegarrett@gmail.com', 'Sam'),
(96, 'Trisha Widmayer', 'Blonde sailor senshi with red mask. Glowy fingertips', '0019', 1, 1, '2018-09-23 20:12:02', 1, 'R30', '919 271 5126', 'tewidmayer@gmail.com', 'Sam'),
(97, 'Michael Bonnell', 'Division 2 facing away gun guy, orange glow coming from watch and upper right shoulder', '0020', 1, 1, '2018-09-23 20:15:43', 1, 'R39', '9073227324', 'mikenavy19@yahoo.com', 'Sam'),
(98, 'Mike kennard', 'Doc brown  custom background  infront of clock  tower black and white photo', '0024', 1, 1, '2018-09-23 20:34:22', 0, 'A01', '9073827869', 'mach4mk@aol.com', 'Sam'),
(99, 'Jenni', 'Little Moana custom background coast by ocean', '0027', 1, 1, '2018-09-23 20:38:51', 1, 'A02', '9078916293', 'vampirechica3@gmail.com', 'Sam'),
(100, 'Cae Galloway', 'Short woman, blood on face, red riding hood, grimms', '0030', 1, 1, '2018-09-23 20:50:54', 0, 'R17', '899088998899', 'caitlingallowayak@gmail.com', 'Sam'),
(101, 'Jack Gelione', 'Custom background classroom dark spandex grey scarf yellow goggles ', '0032', 1, 1, '2018-09-23 21:54:43', 0, 'A01', '9073175599', 'gelione.jack@gmail.com', 'Sam'),
(102, 'Patrick Barlow', 'Black shirt with rose pocket blue jeans', '0033', 1, 1, '2018-09-23 22:11:51', 0, 'A15', '9073503949', 'patrickbarlow907@gmail.com', 'Sam'),
(103, 'Kirsten Garoutte', 'Woman with long brown hair and black jacket w white shirt. Girl with tan cardigan and school girl uniform with pink hair and red ribbons. ', '0037', 1, 1, '2018-09-23 22:19:28', 0, 'A20', '9072687249', 'kirsten.garoutte@gmail.com', 'Sam'),
(104, 'Erica flores', 'Couple with matching outfits', '0039', 1, 1, '2018-09-23 22:52:54', 0, 'A07', '9077825420', 'erica.allizon@gmail.com', 'Sam'),
(105, 'Clynce Carrillo', 'Red shirt w/ zebra vest and boy w/red jacket ', '0040', 1, 1, '2018-09-23 22:56:32', 0, 'A07', '9076020509', 'clynce@gmail.com', 'Sam'),
(106, 'Pedro Escalante ', 'Man green jumpsuit w/red symbol and boy black w/ reaper mask glowing gun barrel ', '0042', 1, 1, '2018-09-23 23:12:43', 0, 'R09', '907-331-8130', 'pedro-escalnte198622@hotmail.com', 'Sam'),
(107, 'Bennett', 'Glasses, black jacket backpack and blue jeans Deadpool pointing gun at head', '0045', 1, 1, '2018-09-23 23:32:10', 0, 'A33', '9078855821', 'bennettlgetti@gmail.com', 'Sam'),
(108, 'Justin', '4 children 3 princesses and mario', '0048', 1, 1, '2018-09-23 23:44:17', 0, 'R24', '9076021058', 'jre1272@yahoo.com', 'Sam'),
(109, 'Kyra', 'Orange and black jumpsuit and blue stitch outfit ', '0049', 1, 1, '2018-09-24 00:04:11', 0, 'A10', '9073659881', 'kyrarodriguez530@outlook.com', 'Sam'),
(110, 'Rob Culbertson ', 'From the LEGO booth ', '0053', 1, 1, '2018-09-24 00:42:07', 0, 'R24', '9072232313', 'rob.culbertson@gmail.com', 'Sam'),
(111, 'Rin Metis', 'Friend of Freddyyeddy . Custom Galafrien wings', '0054', 1, 1, '2018-09-24 01:33:16', 1, 'A01', '9078413611', 'myluckyeverything@yahoo.com', 'Sam'),
(112, 'James Richmond', 'Cruella and Jasper with Dalmatian. Custom backdrop', '0056', 1, 1, '2018-09-24 01:38:07', 0, 'A01', '9079525729', 'richmondn3@gmail.com', 'Sam'),
(113, 'Samuel Hanson', 'White face tan and black robe', '0058', 1, 1, '2018-09-24 02:00:52', 0, 'A16', '9077078275', 'wacolqw@gmail.com', 'Sam'),
(114, 'Nicole ', 'Dog orange costumes lady purple outfit ', '0061', 1, 1, '2018-09-24 02:05:45', 0, 'R31', '9282477946', 'nicoles.corgis@gmail.com', 'Sam'),
(115, 'Nicole ', 'Griffindoor student poodle and green coat fan shirt lady', '0064', 1, 1, '2018-09-24 02:07:45', 0, 'R13', '9282477946', 'nicoles.corgis@gmail.com', 'Sam'),
(116, 'KC Elliott', 'Beleagured chaperone. Attack on titan with sword', '0059', 1, 1, '2018-09-24 02:09:23', 1, 'A35', '9072688884', 'writingtoclarity@gmail.com', 'Sam'),
(117, 'KC Elliott', 'Pink dress with star at navel level ', '0068', 1, 1, '2018-09-24 02:14:35', 0, 'A23', '9072688884', 'writingtoclarity@gmail.com', 'Sam'),
(118, 'Peyton Olson ', 'Tan school uniform with blue and ran pocket badge black pants', '0077', 1, 1, '2018-09-24 02:21:03', 0, 'A37', '9073554006', 'pgolson99@gmail.com', 'Sam'),
(119, 'Dena Neal', 'Two girls from the art booth across from you', '0078', 1, 1, '2018-09-24 02:48:16', 0, 'A03', '2069028839', 'utasartwork@gmail.com', 'Sam'),
(120, 'Luna Rue', 'Wa Lolita blue hair girl. Artists choice on bg', '0080', 1, 1, '2018-09-24 03:44:40', 0, 'A01', '7193298683', 'luna.adelaide.rue@gmail.com', 'Sam'),
(121, 'test', 'Black Hair  duded', '0000', 1, 1, '2018-09-24 07:39:31', 1, 'R15', '9079829966', 'freddyyeddy@gmail.com', 'Sam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
