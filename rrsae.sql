-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2015 at 08:38 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rrsae`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_main`
--

CREATE TABLE IF NOT EXISTS `album_main` (
`albumid` int(11) NOT NULL,
  `albumname` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `album_main`
--

INSERT INTO `album_main` (`albumid`, `albumname`) VALUES
(1, '2006 Formula SAE West'),
(3, '2008 Assembly Files'),
(4, '2008 FSAE West'),
(5, '2009-10 Construction'),
(6, '2010 Formula SAE West'),
(7, '2011 FSAE Car'),
(8, 'FSAE 2012 Build '),
(9, '2011 Michigan'),
(10, 'RoadRunner Racing AutoX'),
(11, '2014 Driver Training'),
(12, '2014 Manufacturing'),
(13, '1st Annual Chili Cook Off');

-- --------------------------------------------------------

--
-- Table structure for table `album_pictures`
--

CREATE TABLE IF NOT EXISTS `album_pictures` (
`picid` int(11) NOT NULL,
  `albumid` int(11) NOT NULL,
  `src` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=141 ;

--
-- Dumping data for table `album_pictures`
--

INSERT INTO `album_pictures` (`picid`, `albumid`, `src`) VALUES
(2, 1, 'pics/193428_114812431931720_7706943_o.jpg'),
(3, 1, 'pics/194287_114812418598388_1527522_o.jpg'),
(4, 1, 'pics/195976_114812758598354_4142279_n.jpg'),
(5, 1, 'pics/196864_114813005264996_2550523_n.jpg'),
(6, 1, 'pics/198856_114812805265016_6094119_n.jpg'),
(7, 1, 'pics/200531_114812935265003_1842606_n.jpg'),
(8, 1, 'pics/202061_114812451931718_7782874_o.jpg'),
(9, 1, 'pics/205492_114812675265029_1320401_n.jpg'),
(10, 1, 'pics/206544_114812578598372_5584468_n.jpg'),
(11, 1, 'pics/208666_114813028598327_7897827_n.jpg'),
(12, 3, 'pics/196841_114814755264821_1510751_n.jpg'),
(13, 3, 'pics/197477_114814705264826_1744589_n.jpg'),
(14, 3, 'pics/197561_114814785264818_2461902_n.jpg'),
(15, 3, 'pics/198145_114815098598120_1052938_n.jpg'),
(16, 3, 'pics/199885_114815148598115_5325365_n.jpg'),
(17, 3, 'pics/200381_114814945264802_6985771_n.jpg'),
(18, 3, 'pics/200737_114814915264805_6219110_n.jpg'),
(19, 3, 'pics/206713_114814968598133_4218403_n.jpg'),
(20, 3, 'pics/200569_114814978598132_3521207_n.jpg'),
(21, 3, 'pics/206777_114815265264770_1157972_n.jpg'),
(22, 3, 'pics/207849_114814768598153_4799654_n.jpg'),
(23, 3, 'pics/208221_114815171931446_5472765_n.jpg'),
(24, 4, 'pics/188543_114387441974219_843074_n.jpg'),
(25, 4, 'pics/191309_114387558640874_377393_o.jpg'),
(26, 4, 'pics/195905_114387581974205_1060407_n.jpg'),
(27, 4, 'pics/196633_114387455307551_5840198_n.jpg'),
(28, 4, 'pics/197448_114387595307537_5429556_n.jpg'),
(29, 4, 'pics/199092_114387508640879_1050736_n.jpg'),
(30, 4, 'pics/201672_114387631974200_3083126_o.jpg'),
(31, 4, 'pics/205267_114387658640864_6307668_n.jpg'),
(32, 4, 'pics/206408_114387401974223_5339866_n.jpg'),
(33, 4, 'pics/207018_114387605307536_2701682_n.jpg'),
(34, 4, 'pics/208484_114387475307549_6141405_n.jpg'),
(35, 5, 'pics/196319_114997091913254_6074247_n.jpg'),
(36, 5, 'pics/196420_114996381913325_3240875_n.jpg'),
(37, 5, 'pics/196592_114999011913062_4310234_n.jpg'),
(38, 5, 'pics/196700_114996328579997_8313411_n.jpg'),
(39, 5, 'pics/196900_114997058579924_802520_n.jpg'),
(40, 5, 'pics/197025_114998641913099_601516_n.jpg'),
(41, 5, 'pics/197184_114996318579998_5261435_n.jpg'),
(42, 5, 'pics/197188_114998721913091_1444088_n.jpg'),
(43, 5, 'pics/197295_114999038579726_3641378_n.jpg'),
(44, 5, 'pics/197484_114996361913327_5432039_n.jpg'),
(45, 5, 'pics/198036_114999125246384_2370850_n.jpg'),
(46, 5, 'pics/198839_114996551913308_3014855_n.jpg'),
(47, 5, 'pics/199628_114996151913348_6152347_n.jpg'),
(48, 5, 'pics/206539_114997008579929_2104215_n.jpg'),
(49, 5, 'pics/208740_114996275246669_5885829_n.jpg'),
(50, 5, 'pics/207231_114996681913295_627438_n.jpg'),
(51, 6, 'pics/188551_114388385307458_7538330_n.jpg'),
(52, 6, 'pics/196729_114389021974061_1992974_n.jpg'),
(53, 6, 'pics/198481_114389055307391_2247784_n.jpg'),
(54, 6, 'pics/199821_114389038640726_1361964_n.jpg'),
(55, 6, 'pics/200048_114388431974120_7004862_n.jpg'),
(56, 6, 'pics/200661_114388988640731_6681988_n.jpg'),
(57, 6, 'pics/205551_114388421974121_5800999_n.jpg'),
(58, 6, 'pics/206897_114388891974074_2037260_n.jpg'),
(59, 6, 'pics/207089_114388871974076_978205_n.jpg'),
(60, 6, 'pics/208661_114388975307399_3181021_n.jpg'),
(61, 7, 'pics/191222_114381238641506_1599478_o.jpg'),
(62, 7, 'pics/192641_114383128641317_254939_o.jpg'),
(63, 7, 'pics/194053_114383448641285_1032131_o.jpg'),
(64, 7, 'pics/196610_115472075199089_3131913_n.jpg'),
(65, 7, 'pics/196849_115472065199090_142541_n.jpg'),
(66, 7, 'pics/198919_115472021865761_4070630_n.jpg'),
(67, 7, 'pics/201487_114382308641399_3268836_o.jpg'),
(68, 7, 'pics/202091_114382201974743_1801202_o.jpg'),
(69, 7, 'pics/204863_114382548641375_4287202_o.jpg'),
(70, 7, 'pics/210075_114384161974547_7782826_o.jpg'),
(71, 7, 'pics/221208_122316774514619_7428930_o.jpg'),
(72, 7, 'pics/226805_121716981241265_4676156_n.jpg'),
(73, 7, 'pics/227665_121716961241267_6929177_n.jpg'),
(74, 7, 'pics/230101_121717074574589_7542836_n.jpg'),
(75, 8, 'pics/294538_182963738449922_1832959028_n.jpg'),
(76, 8, 'pics/309703_182963648449931_199248342_n.jpg'),
(77, 8, 'pics/310765_187196341359995_69622251_n.jpg'),
(78, 8, 'pics/315025_187198411359788_2101513486_n.jpg'),
(79, 8, 'pics/321500_182963721783257_876266869_n.jpg'),
(80, 8, 'pics/324323_257985857614376_1458402191_o.jpg'),
(81, 8, 'pics/324323_257985870947708_40817432_o.jpg'),
(82, 8, 'pics/333658_172721946140768_391263834_o.jpg'),
(83, 8, 'pics/380801_225267130886249_1549543942_n.jpg'),
(84, 8, 'pics/386619_225269370886025_543664188_n.jpg'),
(85, 8, 'pics/429459_242640542482241_616110570_n.jpg'),
(86, 9, 'pics/219639_124040777675552_816545_o.jpg'),
(87, 9, 'pics/219639_124040787675551_6088347_o.jpg'),
(88, 9, 'pics/219639_124040791008884_7206110_o.jpg'),
(89, 9, 'pics/219767_124041657675464_3159662_o.jpg'),
(90, 9, 'pics/219767_124041661008797_2797131_o.jpg'),
(91, 9, 'pics/222246_124785457601084_6706176_n.jpg'),
(92, 9, 'pics/224630_124785754267721_3136027_n.jpg'),
(93, 9, 'pics/225201_124785480934415_609028_n.jpg'),
(94, 9, 'pics/225259_124785570934406_4343203_n.jpg'),
(95, 9, 'pics/225429_125220074224289_6171380_n.jpg'),
(96, 9, 'pics/225474_124785914267705_1758519_n.jpg'),
(97, 9, 'pics/225853_124785697601060_7738386_n.jpg'),
(98, 9, 'pics/226700_125219907557639_4622480_n.jpg'),
(99, 9, 'pics/226830_125281024218194_3515594_n.jpg'),
(100, 9, 'pics/226912_125219870890976_7774292_n.jpg'),
(101, 9, 'pics/227328_124785887601041_4597783_n.jpg'),
(102, 9, 'pics/249556_125219890890974_6021347_n.jpg'),
(103, 9, 'pics/249116_125220147557615_2459821_n.jpg'),
(104, 9, 'pics/242079_123323377747292_2090274_o.jpg'),
(105, 10, 'pics/194664_186036848142611_562235225_o.jpg'),
(106, 10, 'pics/289098_186036824809280_892881259_o.jpg'),
(107, 10, 'pics/290610_186036768142619_946204530_o.jpg'),
(108, 10, 'pics/322702_186149558131340_1113256433_o.jpg'),
(109, 10, 'pics/330970_186036751475954_1949829771_o.jpg'),
(110, 10, 'pics/335414_186036791475950_1960449708_o.jpg'),
(111, 10, 'pics/289160_186036798142616_1820127530_o.jpg'),
(112, 11, 'pics/69083_582736751805950_966311992_n.jpg'),
(113, 11, 'pics/75888_582736945139264_1844279893_n.jpg'),
(114, 11, 'pics/996511_582736685139290_803895343_n.jpg'),
(115, 11, 'pics/1425515_582736801805945_1667366376_n.jpg'),
(116, 11, 'pics/1618431_582736775139281_1453851650_n.jpg'),
(117, 11, 'pics/1625541_582736841805941_436608729_n.jpg'),
(118, 11, 'pics/1661485_582736748472617_1479125696_n.jpg'),
(119, 11, 'pics/1779790_582736785139280_121377814_n.jpg'),
(120, 11, 'pics/1779791_582736825139276_929986722_n.jpg'),
(121, 12, 'pics/10019_580390742040551_259385438_n.jpg'),
(122, 12, 'pics/1010415_586973881382237_326767124_n.jpg'),
(123, 12, 'pics/1509198_580390672040558_403398066_n.jpg'),
(124, 12, 'pics/1511693_586973811382244_1816630855_n.jpg'),
(125, 12, 'pics/1546029_580390668707225_847115536_n.jpg'),
(126, 12, 'pics/1656058_586973878048904_1712477268_n.jpg'),
(127, 12, 'pics/1779722_586973861382239_341162065_n.jpg'),
(128, 12, 'pics/1797337_586973924715566_2135573858_n.jpg'),
(129, 12, 'pics/1798867_586973814715577_1223272786_n.jpg'),
(130, 13, 'pics/304296_199948740084755_1117921602_n.jpg'),
(131, 13, 'pics/309052_199948370084792_1948067840_n.jpg'),
(134, 13, 'pics/310497_199948116751484_1780670145_n.jpg'),
(135, 13, 'pics/318377_199947976751498_220607001_n.jpg'),
(136, 13, 'pics/381705_199948400084789_1993950126_n.jpg'),
(137, 13, 'pics/313521_199948140084815_861401566_n.jpg'),
(138, 13, 'pics/387442_199948576751438_544620204_n.jpg'),
(139, 13, 'pics/378465_199948006751495_2145465053_n.jpg'),
(140, 13, 'pics/380521_199948496751446_1153006164_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `runner_car`
--

CREATE TABLE IF NOT EXISTS `runner_car` (
`carid` int(11) NOT NULL,
  `year` text NOT NULL,
  `compete` text NOT NULL,
  `weight` text NOT NULL,
  `engine` text NOT NULL,
  `drivetrain` text NOT NULL,
  `suspension` text NOT NULL,
  `wheels` text NOT NULL,
  `majorchanges` text NOT NULL,
  `photofile` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `runner_car`
--

INSERT INTO `runner_car` (`carid`, `year`, `compete`, `weight`, `engine`, `drivetrain`, `suspension`, `wheels`, `majorchanges`, `photofile`) VALUES
(4, '2013', 'Lincoln - Placed 52nd', '441', 'Kawasaki KFX 450R - Microsquirt\r\n31.6 hp 28.8 ft*lbs ', 'Torsen Differential with a custom aluminum housing.', ' F Pushrod and R Pullrod with Tanner shocks.', '10" Kaiser Aluminum wheels.', 'Complete redesign with a fresh perspective with thought towards the future.', 'pics/2013small.jpg'),
(6, '2011', 'Michigan - Placed 92nd', '404', 'KTM 560SMR\r\nCustom EFI controlled by a custom student designed ECU.', 'Custom Steel Spool.', 'F+R Pushrod with Penske shocks.', '13" Jongbloed custom wheels.', 'UTSA Roadrunner Racings first one year build.', 'pics/2011p.jpg'),
(7, '2010', 'California - Placed 53rd', '389', 'KTM 560SMR\r\nCustom EFI controlled by a custom student designed ECU. Pneumatic computer controlled paddle shifters. ', 'Custom Steel Spool.', 'F+R Pushrod with Penske shocks.', '13" Jongbloed custom wheels.', 'Team moved from four cylinder to single cylinder engine. Custom ECU and Pneumatic Paddle Shifters.', 'pics/car1.jpg'),
(8, '2008', 'California - Placed 28th', '479', 'Honda F4i 600\r\nPerformance Electronics ECU.', 'Custom housed Torsen Differential.', 'Pullrod front suspension, pushrod rear suspension with Tanner shocks.', '13" BBS Magnesium wheels.', '', 'pics/2008v.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `runner_home_background`
--

CREATE TABLE IF NOT EXISTS `runner_home_background` (
`imgid` int(11) NOT NULL,
  `main` int(11) NOT NULL,
  `src` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `runner_home_background`
--

INSERT INTO `runner_home_background` (`imgid`, `main`, `src`) VALUES
(1, 1, 'pics/homebackground/background.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `runner_spons`
--

CREATE TABLE IF NOT EXISTS `runner_spons` (
`sponsid` int(11) NOT NULL,
  `src` text NOT NULL,
  `link` text NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `runner_team`
--

CREATE TABLE IF NOT EXISTS `runner_team` (
`memberid` int(11) NOT NULL,
  `membername` text NOT NULL,
  `memberposition` text NOT NULL,
  `membermajor` text NOT NULL,
  `memberpicture` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `runner_team`
--

INSERT INTO `runner_team` (`memberid`, `membername`, `memberposition`, `membermajor`, `memberpicture`) VALUES
(1, 'David Cormier', 'President - 3 years', 'Mechanical Engineering Major', 'pics/davidsmall.jpg'),
(2, 'Jacob Goodale', 'Design Lead - 4 years', 'Mechanical Engineering Major', 'pics/jacobsmall.jpg'),
(3, 'Kristopher Boyle', 'Construction Lead - 3 years', 'Mechanical Engineering Major', 'pics/krissmall.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `runner_youtube`
--

CREATE TABLE IF NOT EXISTS `runner_youtube` (
`id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `remove` int(11) NOT NULL,
  `main` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `runner_youtube`
--

INSERT INTO `runner_youtube` (`id`, `name`, `link`, `remove`, `main`) VALUES
(8, 'UTSA FSAE 2010 Assembly ', '<iframe width="420" height="315" src="https://www.youtube.com/embed/rlJYd4_5XCo" frameborder="0" allowfullscreen></iframe>', 0, 1),
(9, 'UTSA Roadrunner Racing - Driver Interview', '<iframe width="560" height="315" src="https://www.youtube.com/embed/UfO6ru8f-cA" frameborder="0" allowfullscreen></iframe>', 0, 0),
(12, 'Roadrunner Racing Driver Training Autocross', '<iframe width="560" height="315" src="https://www.youtube.com/embed/gCnzQug9p5s" frameborder="0" allowfullscreen></iframe>', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `special_thanks`
--

CREATE TABLE IF NOT EXISTS `special_thanks` (
`thanksid` int(11) NOT NULL,
  `thanks` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `special_thanks`
--

INSERT INTO `special_thanks` (`thanksid`, `thanks`) VALUES
(1, 'Paul Krueger'),
(2, 'Dave Kuenstler'),
(3, 'Kota Miyakita'),
(4, 'Mike Daniel'),
(5, 'Denny Ware'),
(6, 'Eddie Barron'),
(7, 'Jana Kennelly');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'bob', '9a618248b64db62d15b300a07b00580b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_main`
--
ALTER TABLE `album_main`
 ADD PRIMARY KEY (`albumid`);

--
-- Indexes for table `album_pictures`
--
ALTER TABLE `album_pictures`
 ADD PRIMARY KEY (`picid`);

--
-- Indexes for table `runner_car`
--
ALTER TABLE `runner_car`
 ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `runner_home_background`
--
ALTER TABLE `runner_home_background`
 ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `runner_spons`
--
ALTER TABLE `runner_spons`
 ADD PRIMARY KEY (`sponsid`);

--
-- Indexes for table `runner_team`
--
ALTER TABLE `runner_team`
 ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `runner_youtube`
--
ALTER TABLE `runner_youtube`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_thanks`
--
ALTER TABLE `special_thanks`
 ADD PRIMARY KEY (`thanksid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_main`
--
ALTER TABLE `album_main`
MODIFY `albumid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `album_pictures`
--
ALTER TABLE `album_pictures`
MODIFY `picid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `runner_car`
--
ALTER TABLE `runner_car`
MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `runner_home_background`
--
ALTER TABLE `runner_home_background`
MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `runner_spons`
--
ALTER TABLE `runner_spons`
MODIFY `sponsid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `runner_team`
--
ALTER TABLE `runner_team`
MODIFY `memberid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `runner_youtube`
--
ALTER TABLE `runner_youtube`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `special_thanks`
--
ALTER TABLE `special_thanks`
MODIFY `thanksid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
