-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2018 at 08:34 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xjobb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(25) NOT NULL,
  `category_title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`) VALUES
(1, 'guitar'),
(2, 'fender'),
(3, 'bass'),
(4, 'ibanez'),
(5, 'tillbehör');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `buy_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment` varchar(55) NOT NULL,
  `lev_fname` varchar(55) NOT NULL,
  `lev_lname` varchar(55) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `lev_adress` varchar(55) NOT NULL,
  `lev_city` varchar(55) NOT NULL,
  `lec_zip` varchar(55) NOT NULL,
  `fraktsatt` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE IF NOT EXISTS `order_item` (
  `order_item_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_title` varchar(55) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(25) NOT NULL,
  `product_title` varchar(150) NOT NULL,
  `product_description` varchar(950) NOT NULL,
  `product_price` int(25) NOT NULL,
  `product_img` varchar(900) NOT NULL,
  `product_thumb` varchar(900) NOT NULL,
  `product_sku` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_price`, `product_img`, `product_thumb`, `product_sku`) VALUES
(1, 'Fender Modern Player Telecaster luft', 'The Modern Player Telecaster Thinline Deluxe casts an already distinctive classic Telecaster model in a whole new light with a full-throated pair of single-coil Modern Player MP-90 pickups.', 3900, 'logo.jpg', 'logo.jpg', 120),
(2, 'Ibanez SR300E, Iron Pewter luft', 'The Ibanez SR300E Bass Guitar, Iron Pewter is constructed from a mahogany body, 5-piece maple/rosewood neck, and a rosewood fingerboard to deliver bright warm tones with excellent lows and strong mids. A set of PowerSpan dual coil pickups provide a strong response, and a tone rich in harmonics and dynamic expression. The Ibanez is also fitted with specialised electronics, such as a power tap switch and 3-band EQ to provide the ultimate control over the bass''s tonal characteristics, perfect for any aspiring bassist who wants more out of their instrument.', 2230, 'logo.jpg', 'logo.jpg', 1210),
(3, 'Ibanez KOMRAD20 Head, Red Splatter luft', 'The Ibanez KOMRAD20 Head Electric guitar is the result of the collaboration between Ibanez and long time guitarist for Korn, Brian "Head" Welch. This 7-string guitar is designed for low end riffing and its Dimarzio PAF® 7 pickups will ensure that your tone will never become muddy. Despite their lower power output, they are designed with ceramic magnets to keep the sound of the low strings bright and clean. The guitar includes many of Ibanez''s modern player features such as an easy access neck joint and a flat 15.7 inch radius. The combination of a basswood body and maple neck ensures brightness and clarity finished off in Welch''s distinctive ''Red Spatter'' paintwork. This is a guitar ready to play some low-end metal and will give your riffs clarity and power.', 7000, 'logo.jpg', 'logo.jpg', 322),
(4, 'Ibanez SR755-NTF Natural Flat 5 String Bass', 'The Ibanez SR755 is a 5 string bass guitar. It features a Natural Flat finish on an stunning Bubinga and Mahogany body. Buy online from Merchant City Music. Fast UK next working day delivery service. Pop into our Glasgow shop.', 7690, 'logo.jpg', 'logo.jpg', 120),
(5, 'Reverend Club King 290 Midnight Black, Roasted Maple', 'The Reverend Club King 290 Bigsby with a Midnight Black finish is a semi acoustic guitar. It has a semi hollow Korina body with a solid spruce top. Featuring plenty of acoustic resonance it has a great ring to it. This is the latest 2017/18 model featuring a Roasted Maple neck and lots of other upgrades. Pop in to our Glasgow shop for a closer look and choose for one of the best Reverend displays on the planet! If buying online we ship fast across the UK and beyond with every guitar getting a pro setup before dispatch.', 8790, 'logo.jpg', 'logo.jpg', 321),
(6, 'Reverend Double Agent OG Korina Burst', 'This is the Revered Double Agent OG in a new Korina Burst finish with a roasted Maple neck and Blackwood fingerboard. The Double Agent OG is one of Reverend''s best selling models and for very good reason. The combination of a bridge humbucker and neck P90 offers up a wealth of tonal variety. This guitar does it all. What''s more, the Korina Burst Double Agent OG features all of the latest upgrades that Reverend have implemented throughout 2017 and in to 2018. Pop in to our Glasgow shop to demo one for yourself and see why Reverend guitars get such great reviews. If buying online we ship fast across the UK and Europe. We can also ship worldwide at very competitive prices. Every guitar is thoroughly checked and professionally setup before dispatch.', 7290, 'logo.jpg', 'logo.jpg', 112),
(7, 'Reverend Descent HC90 Baritone Oceanside Green', 'The Reverend Descent HC90 Baritone Guitar is finished here in Reverend''s stunning Oceanside Green. Although this is an extended scale electric it plays more like a regular guitar. An excellent finish and top quality hardware make this baritone hard to ignore, especially when you consider the price. Now featuring a a silky smooth roasted maple neck, this beautiful instrument is available from Merchant City Music online and in-store. Pop in and give it a try, or order online for speedy delivery to the UK and Europe.', 8790, 'logo.jpg', 'logo.jpg', 244),
(8, 'Fender Duo-Sonic HS Daphne Offset Guitar', 'This is the Fender Duo-Sonic HS solid body electric guitar. It features a comfortable 24 inch scale and a bolted on neck. The body of the guitar has been finished in Daphne Blue for a great vintage vibe. The HS refers to the humbucker and single coil pickups fitted to the Duo Sonic. This instrument has been crafted in Mexico and part of the 2016 Offset Series. Buy online today from Guitar.co.uk or visit our Glasgow shop.', 4880, 'logo.jpg', 'logo.jpg', 323),
(9, 'Squier Bullet Stratocaster HT (Hard Tail) Arctic White', 'Classic Stratocaster body, "C"-shaped maple neck, Vintage-inspired hardtail bridge, Three single-coil Stratocaster pickups with five-way switching, 21-fret fingerboard', 1150, 'logo.jpg', 'logo.jpg', 5111),
(10, 'Jimi Hendrix''s Wilshire PRO (Limited edition)', 'In 1957 Gibson purchased New York’s Epiphone Guitar Company and moved production to Kalamazoo, Michigan. With plans to expand retail distribution by differentiating Epiphone dealers from Gibson dealers, Gibson began production of a new line of “Kalamazoo-made and designed” Epiphones in 1959. For over a decade, Epiphone solid body guitars and basses were produced right alongside Gibsons. These Epiphone guitars represented some of the highest quality and best sounding instruments of their generation. They provided unique shapes, pickup arrangements, and tonal signatures not seen on comparable Gibson models of the day. Under appreciated at the time of their release, numerous artists through the years have recognized the unique appeal of these guitars. Jimi Hendrix, Johnny Winter, Paul Gilbert and Steve Marriot are but a few of the artists that have embraced the tone and build quality of these Kalamazoo built Epiphones. One such Epiphone in', 450000, 'logo.jpg', 'logo.jpg', 123),
(11, 'Elvis Presley''s Hagström Viking II', 'The Hagstrom Viking II electric guitar features a double-cutaway semi-hollow basswood body, 24-3/4" scale UltraLux bolt-on maple neck, 6-inline headstock, and 22-fret Resinator composite fingerboard. Hagstrom''s Custom 58 uncovered humbuckers are optimized for a fat, warm vintage tone. The original Hagstrom Viking guitar was made famous in 1968 by the king himself: Elvis Presley! ', 500000, 'logo.jpg', 'logo.jpg', 112),
(12, 'Prince''s Yellow Prince Cloud', 'The Cloud guitar was first seen in the movie Purple Rain.  There were four of these originally built by David Husain, a luthier at Knut Koupee music store in Minneapolis.  This unique looking instrument caught Prince’s eye as well as his fans.  Prince had three other Cloud guitar made, although some of these underwent multiple paint changes.   There is a White Cloud on exhibit at the Smithsonian. Others are at various Hard Rock Cafes. Prince named the four Cloud guitars, North, South, East, and West.  There were only these four that have been played by Prince throughout the years though there are replicas in the some Hard Rock Cafés around the world.    ', 450000, 'logo.jpg', 'logo.jpg', 1455),
(13, 'Hofner 500/2 Club Bass Guitar', 'In 1956, Walter Hofner had an idea for an amplified semi-acoustic bass. When it was brought to life, his idea resulted in a bass with a warm, woody, double-bass-like amplified tone. Many players revere Hofner basses for their historical significance, as well as for their a\nsmooth, sweet sound and a playing ease that simply eludes most ordinary basses.\n\nBecause the original had become so scarce and expensive, popular demand compelled Hofner to re-create the Club Bass 500/2. The new Club Bass shares the feel, tone, and many features of the Vintage ''63 but with a more traditional guitar body profile and a single cutaway.', 20000, 'logo.jpg', 'logo.jpg', 512),
(14, 'Lakland Skyline 44-64 Rosewood Fingerboard 4-String Electric Bass Guitar', 'The Lakland Skyline 44-64 electric bass offers timeless good looks, tone and playability. It features a 34-in. scale flat-sawn rock maple neck for ultimate stability. The rosewood fretboard is loaded with 20 frets and a 10 in. radius with a delrin nut. Electronics are handled by a Lakland Hybrid split pickup with simple volume and tone controls mounted to an ash body.', 8000, 'logo.jpg', 'logo.jpg', 23),
(15, 'Lakland Skyline Hollowbody Bass', 'The Skyline Hollowbody results from the collaboration between master bass builder Michael Tobias and Lakland that led to the development of the original Hollowbody. This version features the same 2-piece construction and cavity dimensions as the US-made model giving it a similar thick and rich tone with fantastic definition. Adding to its classy, vintage vibe, a single f-hole recalls the model''s acoustic instrument heritage.\n\nThe natural tone is complemented by a set of CS Series Chi-Sonic pickups. Dial in a wide array of sounds with the volume, tone, and 3-way toggle. From deep, authoritative notes reminiscent of an upright to aggressive and throaty sounds capable of cutting through as a solo voice, the Hollowbody is responsive, with a solid tonal center that many hollow basses lack. \n\nLakland luthiers now do their fret work using Plek technology to assure optimum playability. Plek is a CAD/CAM machine with scanning capability. It was ', 12000, 'logo.jpg', 'logo.jpg', -1),
(16, 'Open Box Lakland Skyline 44-51 Maple Fretboard 4-String Electric Bass Guita...', 'The Lakland Skyline 44-51 shares the same slab body aesthetics of the US 44-51 and the same Lakland hybrid pickup as the US-made 44-51M. The 44-51 captures the rich and defined power of those early basses that revolutionized the four-string low-end world. The tone and power of a well-preserved vintage instrument with flawless Lakland fretwork and neck refinements make this another of our modern classics.', 8450, 'logo.jpg', 'logo.jpg', 2),
(17, 'Hofner Shorty Electric Bass Black', 'The Shorty bass offers the same classic warm Hofner bass tone with a single Hofner humbucker bridge pickup. It offers full-scale length combined with such small overall dimensions that it can be taken anywhere. Other features include a basswood body with a bolt-on maple neck, a rosewood fingerboard with dot inlays, and a fixed metal tailpiece/bridge. Available in black.', 1754, 'logo.jpg', 'logo.jpg', 32),
(18, 'Shoes', 'A pair of shoes', 800, 'logo.jpg', 'logo.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE IF NOT EXISTS `product_img` (
  `img_id` int(25) NOT NULL,
  `product_id` int(25) NOT NULL,
  `img_src` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prod_cat`
--

CREATE TABLE IF NOT EXISTS `prod_cat` (
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_cat`
--

INSERT INTO `prod_cat` (`category_id`, `product_id`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2),
(1, 3),
(4, 3),
(5, 18),
(3, 4),
(4, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(2, 8),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17);

-- --------------------------------------------------------

--
-- Table structure for table `startpage`
--

CREATE TABLE IF NOT EXISTS `startpage` (
  `id` int(11) NOT NULL,
  `title` varchar(88) NOT NULL,
  `text` varchar(600) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startpage`
--

INSERT INTO `startpage` (`id`, `title`, `text`, `timestamp`) VALUES
(3, 'Första inlägget ', 'hej hej', '2018-01-24 10:37:03'),
(4, 'Kolla in våra nya luftbaser ', 'Nya fina baser', '2018-01-24 10:41:20'),
(6, '3e inlägg', 'blabla', '2018-01-24 10:49:09'),
(7, '4e inlägg ', 'Allt är bra', '2018-01-24 10:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `userlvl` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `password`, `address`, `zip`, `city`, `userlvl`, `phone`, `username`) VALUES
(4, 'Joy', 'Lindström', 'joy.lindstrom2@gmail.com', '$2y$10$ioFTwiRYWG4oXEuW/6fPm.rcFpRk3RMC3l2jS4m6gp79FssP0ijt6', 'Kristallvägen 9', '126 78', 'Hägersten', 1, 707208638, 'joy.lindstrom2@gmail.com'),
(5, 'robin', 'magnusson', 'robin.falgen@gmail.com', '$2y$10$bOvH1VcbisYdrmYf5CrXsujTeWcTO9hddCAzaCuCVim/k4drTrhkW', 'SolbergsvÃ¤gen 57', '16866', 'Bromma', 1, 761339264, 'robin.falgen@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `prod_cat`
--
ALTER TABLE `prod_cat`
  ADD KEY `category_id` (`category_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `startpage`
--
ALTER TABLE `startpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`user_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `img_id` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_img`
--
ALTER TABLE `product_img`
  ADD CONSTRAINT `product_img_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `prod_cat`
--
ALTER TABLE `prod_cat`
  ADD CONSTRAINT `prod_cat_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `prod_cat_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
