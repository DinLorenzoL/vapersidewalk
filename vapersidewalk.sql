-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 09:19 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vapersidewalk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` float NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `completed`
--

CREATE TABLE `completed` (
  `OrderID` varchar(255) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `House` varchar(100) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Zipcode` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` varchar(11) NOT NULL,
  `Notes` varchar(250) NOT NULL,
  `Items` text NOT NULL,
  `Total` varchar(255) NOT NULL,
  `Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `ProductID` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`ProductID`, `Image`) VALUES
('123456', 'black-and-white-picture-of-chicago-new-and-old-buildings-paul-velgos.jpg'),
('123456', '17b7366506a8666663a2eded43d36ba1.jpg'),
('123456', '51344528_2320220011346172_7288827941062967296_o.jpg'),
('55555', '45672260_1931008363642237_5411897086335516672_n.jpg'),
('55555', '114531_14264923_2641382_4237f0d2_image.jpg'),
('sdasdsa', '42669617_947621402296270_6514286140336373760_n.png'),
('sdasdsa', 'black-and-white-picture-of-chicago-new-and-old-buildings-paul-velgos.jpg'),
('sdasdsa', '42669617_947621402296270_6514286140336373760_n.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` float UNSIGNED ZEROFILL NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `House` varchar(100) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Zipcode` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` varchar(11) NOT NULL,
  `Notes` varchar(250) NOT NULL,
  `Items` text NOT NULL,
  `Total` varchar(255) NOT NULL,
  `Status` varchar(25) NOT NULL,
  `DateApproved` date NOT NULL,
  `OrderStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `Firstname`, `Lastname`, `House`, `City`, `Zipcode`, `Email`, `Mobile`, `Notes`, `Items`, `Total`, `Status`, `DateApproved`, `OrderStatus`) VALUES
(000000000004, 'Rustian', 'asdasd', 'sqadas', 'dsads', '21321', 'taculogrustian@yahoo.com', '2142142141', 'sdffsdfds', 'Kanger Vola 100W Mod, ', '102', 'Approved', '2019-03-03', 'Delivery'),
(000000000005, 'rk', 'morta', '37 Sisa St', 'Malabon', '1470', 'rkmorta@gmail.com', '09999999999', '', 'Avocado 24 RDTA, Shots Fired, Nikola Medea 218W Mod, ', '6100', 'Approved', '2019-03-03', 'Delivery'),
(000000000006, 'alwidn', 'jacobe', '37 Sisa St', 'Malabon', '24000', 'rkmorta@gmail.com', '09271542613', '', 'Sir Jack, ', '350', 'Pending', '0000-00-00', ''),
(000000000007, 'Darnell', 'Leona', '37 Sisa St', 'Malabon', '1470', 'rkmorta@gmail.com', '09271542613', '', 'Lilsob Outlaw, AWT, Evil Clown, Sobb, ENOOK 3600mAh, Vapebreed, ', '9900', 'Pending', '0000-00-00', ''),
(000000000008, 'Leona', 'Darnel', '37 Sisa St', 'Malabon', '1470303', 'rkmorta@gmail.com', '09271542613', '', 'Dr. Zero, Blitzen RTA, Clapton Wire, AWT, ', '3190', 'Pending', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` float UNSIGNED ZEROFILL NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Category` varchar(25) NOT NULL,
  `Price` int(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `ShortD` text NOT NULL,
  `LongD` text NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Feature1` varchar(255) NOT NULL,
  `Feature2` varchar(255) NOT NULL,
  `Feature3` varchar(255) NOT NULL,
  `Feature4` varchar(255) NOT NULL,
  `Feature5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `Name`, `Category`, `Price`, `Quantity`, `ShortD`, `LongD`, `Image`, `Feature1`, `Feature2`, `Feature3`, `Feature4`, `Feature5`) VALUES
(000000000003, 'Blitzen RTA', 'Atomizer', 1500, 9, 'Blitzen RTA is designed by Geekvape for maximum airflow and vapor production without the messy leaking common in tank atomizers.', 'It features a honeycomb airflow design that results in a smooth, pleasant, and clean drag every time. The postless design helps keep Blitzen RTA compact while keeping its build deck roomy for easy rebuilding and wicking of the coils.', 'blitzen.png', 'Type: RTA', 'Connector: 510 threaded', 'Diameter: 24m', 'Juice Capacity: 2mL / 5mL', 'Builds: Single/Dual Coil'),
(000000000004, 'Creed RTA', 'Atomizer', 1800, 10, 'The Geek Vape Creed 25mm RTA is an innovation in the rebuildable atomizer space, introducing an interchangeable airflow system with a spacious two-post build deck and a generous 6.5mL maximum juice capacity. ', 'The GeekVape Creed RTA is fashioned from superior stainless steel and has a dynamic airflow system, allowing users to change the three different types of inner airflow chambers to match their preferred vaping style. External airflow enters the structure through three external airslots, fully adjustable by the AFC ring to deliver intense flavor and dense clouds.\r\n<br>\r\nThe spacious build deck hosts a two-post design, implementing large terminal openings to accommodate a plethora of coil leads. The convenient top-fill method is accessed by unscrewing the threaded top cap to reveal a large fill port, featuring a 4.5mL juice capacity that can be increased to a whopping 6.5mL of eLiquids with the bulb glass.', 'creed.png', '25mm Diameter', '6.5mL Maximum Juice Capacity', 'Superior Stainless Steel Construction', 'Superior Stainless Steel Construction', 'Spacious Build Deck'),
(000000000008, 'USV-L 75W Mod', 'Mods', 2000, 10, 'Inspired by the simplicity of mechanical mods, but with the variability and safety of regulated mods. United Society of Vape USV-L Mod is a statement device: a fusion of the look of mechanical box mods with the rich suite of control and safety features of regulated box mods. For lovers of mechs looking for greater control over their vapor, it is an enticing proposition.', 'The heart of the USV-L is the VO Tech chipset, featuring full wattage and temperature control modes. The chipsets screen is cleverly hidden inside the battery cabin, resulting in one of the cleanest looking mods in the market, its lines and shapes almost completely unbroken by parts and connections.\r\n\r\nUltra-fast ramp time and custom power curve round out the rich features of USV-L, ensuring that even the most demanding users will be able to customize the mod to their satisfaction.', 'USV.png', 'United Society of Vape and VO Tech Collaboration', 'Wattage Ouput Range: 5-75W', 'Minimum Atomizer Resistance: 0.03ohm', 'MicroUSB Port', 'Short Circuit Protection'),
(000000000009, 'Geekvape Lumi Sub-Ohm DTA', 'Atomizer', 1500, 10, 'Flavorful, powerful, and supremely convenient. Geekvape brings to market the leading disposable tank atomizer, compatible with high-powered box mods with a universal 510 connector.', 'Lumi Sub-Ohm is hewn from stainless steel and polycarbonate glass, while the atomizer is core is made from high quality kanthal mesh wire. With a resistance of 0.3ohm coupled with a mesh framework, Lumi Sub-Ohm is capable of producing thick clouds of vapor from mid to high VG liquids (low to mid nicotine recommended). The tank has a generous fill capacity of 4ml, cutting down on the frequency of refills and ensuring a convenient, day-long vape.', 'geek.png', 'Design: DTA (disposable tank atomizer)', 'Body material: stainless steel and polycarbonate', 'Core material: Supermesh coil', 'Diameter: 24mm', 'Connector: 510 threaded'),
(000000000010, 'Kanger Vola 100W Mod', 'Mods', 2, 10, 'Vola 100W typifies Kangertech is legendary design language, with a beautiful, durable frame of clean lines and gentle curves coupled with a very large 1.3inch TFT screen delivering vital information on mod settings.', 'Volas 2000mAh battery is one of the largest in the market at this mod size, and the  finely tuned power output ensures that recharging will be infrequent. The chipset is both powerful and intelligent. It is capable of a wattage range of 1 to 100W and supports a resistance level as low as 0.05ohm. A full temperature control suite and both TCR and DIY adjustments allow vaping enthusiasts to closely match the mods power output to their coil characteristics and flavor output preference.', 'kanger.png', 'Dimensions: 74mm by 44mm by 25mm', 'Integrated 2000mAh Rechargeable Battery', 'Wattage Output Range: 10-100W', 'Minimum Atomizer Resistance: 0.05ohm', 'Short Circuit Protection'),
(000000000011, 'Aegis Legend Mod', 'Mods', 3500, 10, 'Aegis Legend is a new durable and powerful Box MOD inheriting from Aegis Mod family with waterproof, shockproof and dust-proof design. ', 'Powered by dual 18650 batteries with the new AS chipset, the Aegis Legend Mod releases up to 200W max output with colored display screen and fast, stable & powerful performance.\r\n\r\nAegis Legend Mod uses up to six different materials with high grade silicon, leather and alloy to achieve style and extreme durability. Together with the advanced VW/TC modes, more convenient battery door and USB port for direct charging & firmware update, the GeekVape Aegis Legend 200W MOD is definitely an excellent vaping device!', 'agies.png', 'Size: 90.5x 58.5 x 30.6mm', 'Max power output: 200W', 'Output mode: VW/ VPC/TC/TCR/BYPASS', 'Resistance range: 0.05-3.0ohm', 'Temperature Range: 100-315â„ƒ/200-600â„‰'),
(000000000012, 'Nikola Medea 218W Mod', 'Mods', 4500, 10, 'Nikola Medea Mod is the flagship temp control box mod from Nikola. Constructed with zinc alloy and a hairline baking finish, Medea offers a comfortable grip due to its textured feel and finger curves hewn into the frame.', 'A generous 0.96 inch OLED display with a horizontal menu offers great at-a-glance insight into the settings of the mod.\r\n\r\nPowered by two 18650 batteries (sold separately) and capable of taking a recharge via the micro USB port (up to 1.5 amp charging current), Medea can fire from 7W to 218W at full capacity.\r\n\r\nThe temperature control suite is compatible with nickel, titanium & stainless steel. A further TCR mode allows for entering custom resistance values depending on your heating element of choice, as well as several flavor modes to hit your favorite vape (normal, soft, hard).', 'nikola.png', 'Size: 88mm x 57.2mm x 30mm', 'Material: Zinc alloy', 'Output Wattage: 7-218W', 'USB Charging Voltage and Current: 5V/1.5A', 'Thread type: 510'),
(000000000016, '3.7V 3000mAh', 'Batteries', 230, 10, '', '', 'batt5.png', 'Voltage: 3.7 V', 'Current Rating: 3000 mAh', 'Size: 0.73â€³', 'Diameter x 2.56â€³ H', 'Weight: 0.1 lbs.'),
(000000000017, 'ENOOK 3600mAh', 'Batteries', 500, 8, '', '', 'batt4.png', 'Type: IMR High Drain', 'Size: 18650', 'Capacity: 3600mAh', 'Voltage: 3.7 V', 'Continuous Ampere: 35A'),
(000000000018, 'Kanthal Wire', 'Accessories', 40, 10, 'Kanthal. The most reliable wire for vaping, with little to no change in resistance while heating up. Its what makes kanthal perfect for wattage mode vaping, and why it has become the go-to material for use with rebuildable atomizers on both mech and variable mods.', '', 'wire2.png', '0.40mm', '0.51mm', '0.64mm', '', ''),
(000000000019, 'Clapton Wire', 'Accessories', 140, 9, 'This clapton variant comes in 1 meter cuts, and is made of high quality Swiss kanthal and nichrome80 wires, proudly spun in the Philippines by a passionate craftsman.', 'Clapton made from kanthal inner and nichrome outer wires are known for combining the stable resistance of kanthal at any temperature with the quick heat-up and cool-down times of nichrome alloy. Its the best of both worlds.', 'wire1.png', '0.4mm diameter for inner kanthal wire', '0.2mm diameter for outer nichrome wire', '0.8mm total diameter', 'Not compatible with temperature control', ''),
(000000000021, 'Muji Cotton Pad', 'Accessories', 10, 10, 'Muji cotton pads allow for easy cutting and forming into wicks for use in rebuildable atomizers. Made from 100% unbleached Japanese cotton, it ensures the purest vapor flavor possible with cotton wicking.', '', 'cotton2.png', '', '', '', '', ''),
(000000000022, 'Mighty Wicks', 'Accessories', 200, 10, 'Organic cotton pre-fluffed by machine for very high wicking rate and optimal flavor.', '', 'cotton1.png', '', '', '', '', ''),
(000000000025, 'Freezy Tricks', 'Juice', 400, 10, 'Enjoy a blast of freshness in our year-round heat.', 'Strong menthol with delectable fruit combinations bring you the freshness that you are craving. Perfect for our year-round summer.', 'juice3.png', 'Volume: 60 mL/bottle', 'Nicotine levels: 3mg/mL', 'VG to PG ratio: 60:40', 'Pod Compatibility: Yes', ''),
(000000000027, 'Vapebreed', 'Atomizer', 1000, 8, '', '', 'vape_breed.png', '', '', '', '', ''),
(000000000028, 'Avocado 24 RDTA', 'Atomizer', 1200, 10, '', '', 'i1.png', '', '', '', '', ''),
(000000000029, 'Presto', 'Juice', 500, 10, '', '', 'drizzle.png', '60ml', 'Peanut Flavor', '', '', ''),
(000000000030, 'Meraki Clouds', 'Juice', 200, 10, '', '', 'meraki_clouds.png', '60ml', 'Raspberry Smoothie', '', '', ''),
(000000000031, 'Newbie Vapors', 'Juice', 150, 1, '', '', 'Newbie_Vapors.png', '60ml', 'Lemon Flavor', '', '', ''),
(000000000032, 'Smoke Rx', 'Juice', 150, 1, '', '', 'SmokerX.png', '60ml', 'Flavor Rx', '', '', ''),
(000000000033, 'Thebacco', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'The_bacco.png', '60ml', 'Tobacco Flavor', '', '', ''),
(000000000034, 'Brain Drop', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'BrainDrops.png', 'Strawberry Pink', '60ml', '', '', ''),
(000000000035, 'Brain Drop', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'BrainDrops_cheese.png', 'Cheese Flavor', '60ml', '', '', ''),
(000000000036, 'DeDe', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'dede_berrymint.png', 'Berry Mint', '60ml', '', '', ''),
(000000000037, 'DeDe', 'Juice', 250, 0, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'dede_honeydewmelon.png', 'Honeydew Melon', '60ml', '', '', ''),
(000000000038, 'DeDe', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'dede_peanutbutter.png', 'Peanut Butter', '60ml', '', '', ''),
(000000000039, 'DeDe', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'dede_reloaded.png', 'Reloaded', '60ml', '', '', ''),
(000000000040, 'DeDe', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'dede_ryf4.png', 'Ry4F', '60ml', '', '', ''),
(000000000041, 'Dr. Zero', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'dr.zero.png', 'Pineapple Blast', '60ml', '', '', ''),
(000000000042, 'Dr. Zero', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'Dr.zero_mango.png', 'Mango Splash', '60ml', '', '', ''),
(000000000043, 'Dr. Zero', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'Dr.zero_strawberry.png', 'Creamy Strawberry Candy', '60ml', '', '', ''),
(000000000044, 'Dr. Zero', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'Dr.zero_sweettoastedbread.png', 'Sweet Toasted Bread', '60ml', '', '', ''),
(000000000045, 'Dr. Zero', 'Juice', 250, 0, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'dr.zero_watermelon.png', 'Watermelon Blast', '60ml', '', '', ''),
(000000000046, 'Dr. Zero', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'dr.zero_ygrt.png', 'Yogurt Flavor', '60ml', '', '', ''),
(000000000047, 'Fruit Boyz', 'Juice', 220, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'fruityboyz.png', 'Ubas de Fresa', '60ml', '', '', ''),
(000000000048, 'Fruit Boyz', 'Juice', 220, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'fruityboyz_redlemons.png', 'Red Lemons', '60ml', '', '', ''),
(000000000049, 'Iceman', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'iceman.png', 'Blue Raspberry', '60ml', '', '', ''),
(000000000050, 'Iceman', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'iceman_graped.png', 'Grape Flavor', '60ml', '', '', ''),
(000000000051, 'Iceman', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'iceman_lychee.png', 'Lychee Flavor', '60ml', '', '', ''),
(000000000052, 'Iceman', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'iceman_mango.png', 'Mango Flavor', '60ml', '', '', ''),
(000000000053, 'Iceman', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'iceman_strawberry.png', 'Strawberry Flavor', '60ml', '', '', ''),
(000000000054, 'AWT', 'Batteries', 1200, -2, 'This is necessity for the vape to function.', '', 'awbatt.png', '18650', '3000mAh', '40A', '', ''),
(000000000055, 'Efest', 'Batteries', 600, 1, 'This is necessity for the vape to function.', '', 'efest.png', '18650', '3000mAh', '40A', '', ''),
(000000000056, 'Vapebreed', 'Batteries', 1500, 1, 'This is necessity for the vape to function.', '', 'vapebreed_1batt.png', '18650', '3000mAh', '40A', '1 batt', ''),
(000000000057, 'Xstar MC1', 'Accessories', 250, 1, '', '', 'Xstar_MC1.png', 'Micro USB Charging Port', 'Revive \"Dead\" Battery', 'Easy to Carry', '1C-CC-CV Charging Method', ''),
(000000000058, 'Xstar MC2', 'Accessories', 350, 1, '', '', 'Xstar_mC2.png', 'Micro USB Charging Port', 'Revive \"Dead\" Battery', 'Easy to Carry', '', ''),
(000000000059, 'Puff Man', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'puff_man.png', 'Milo Energy Cubes', '60ml', '', '', ''),
(000000000060, 'Puff Man', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'puffman_cheesecake.png', 'Cheesecake', '60ml', '', '', ''),
(000000000061, 'Puff Man', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'puffman_cowsmilk.png', 'Cows Milk', '60ml', '', '', ''),
(000000000062, 'Puff Man', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'puffman_frozennerds.png', 'Frozen Nerds', '60ml', '', '', ''),
(000000000063, 'Puff Man', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'puffman_nuttycupcake.png', 'Nutty Cupcake', '60ml', '', '', ''),
(000000000064, 'Mr. Whiteblends', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'Mr.whiteblends_hawhaw.png', 'Haw Haw Milk', '60ml', '', '', ''),
(000000000065, 'Mr. Whiteblends', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'mr.whiteblends_seatlesblend.png', 'Seatles Blend', '60ml', '', '', ''),
(000000000066, 'Oven Vape', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'Ovenvape_toastedmallows.png', 'Toasted Mallows', '60ml', '', '', ''),
(000000000067, 'Oven Vape', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'ovenvaped_cereal.png', 'Cereal Bar', '60ml', '', '', ''),
(000000000068, 'Oven Vape', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'Ovenvaped_strawberrymunchkins.png', 'Strawberry Munchkins', '60ml', '', '', ''),
(000000000069, 'Pomelo Project', 'Juice', 180, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'pomeloprog_mango.png', 'Mango Flavor', '60ml', '', '', ''),
(000000000070, 'Pomelo Project', 'Juice', 180, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'pomeloproj_berrypomelo.png', 'Berry Pomelo', '60ml', '', '', ''),
(000000000071, 'Pomelo Project', 'Juice', 180, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'pomeloproj_yakult.png', 'Yakult Flavor', '60ml', '', '', ''),
(000000000072, 'Shots Fired', 'Juice', 300, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'shotsfired_apple.png', 'Apple Juice', '60ml', '', '', ''),
(000000000073, 'Shots Fired', 'Juice', 300, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'shotsfired_blueraspberry.png', 'Blue Raspberry', '60ml', '', '', ''),
(000000000074, 'Shots Fired', 'Juice', 300, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'shotsfired_cheekult.png', 'Cheekult', '60ml', '', '', ''),
(000000000075, 'Shots Fired', 'Juice', 300, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'shotsfired_coffespresso.png', 'Coffee  Espresso', '60ml', '', '', ''),
(000000000076, 'Shots Fired', 'Juice', 300, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'shotsfired_iceylemon.png', 'Icy Lemon', '60ml', '', '', ''),
(000000000077, 'Shots Fired', 'Juice', 300, -1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'shotsfired_yogurt.png', 'Yogurt Queen', '60ml', '', '', ''),
(000000000078, 'Sir Jack', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'sirjack_cookiery4.png', 'Cookie RY4', '60ml', '', '', ''),
(000000000079, 'Sir Jack', 'Juice', 250, -1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'sirjack_milkycheese.png', 'Milky Cheese', '60ml', '', '', ''),
(000000000080, 'Sir Jack', 'Juice', 250, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'srjack_jellycandy.png', 'Jelly Candy', 'Mint', '60ml', '', ''),
(000000000081, 'Third Eye', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'thirdeye_candysweet.png', 'Candy Sweet', '60ml', '', '', ''),
(000000000082, 'Third Eye', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'thirdeye_cheesecake.png', 'Cheesecake', '60ml', '', '', ''),
(000000000083, 'Third Eye', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'thirdeye_coffecream.png', 'Coffee Cream', '60ml', '', '', ''),
(000000000084, 'Yummy', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'yummy_doublemint.png', 'Double Mint', '60ml', '', '', ''),
(000000000085, 'Yummy', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'yummy_icetubig.png', 'Ice Tubig', '30ml', '', '', ''),
(000000000086, 'Yummy', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'yummy_mineralwater.png', 'Mineral Water', '30ml', '', '', ''),
(000000000087, 'Yummy', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'yummy_nosebleed.png', 'Nose Bleed', '30ml', '', '', ''),
(000000000088, 'Yummy', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'yummy_posion.png', 'Poison', '30ml', '', '', ''),
(000000000089, 'Yummy', 'Juice', 200, 1, 'This product will give you variant flavors of your vaping depends on the brand and flavor type', '', 'yummy_tsiklets.png', 'Tsiklet', '30ml', '', '', ''),
(000000000090, 'Evil Clown', 'Atomizer', 2500, -1, '', '', 'i2.png', 'Deep Engraving', 'Delrin insulator', 'Brass', 'White Delrin tip', ''),
(000000000091, 'Kalasag', 'Mods', 2500, 1, '', '', 'Klasag_2batt.png', '', '', '', '', ''),
(000000000092, 'Lilsob Outlaw', 'Mods', 2100, -1, '', '', 'lilsob_outlaw.png', '', '', '', '', ''),
(000000000093, 'Sobb', 'Mods', 2500, -1, '', '', 'Sobb_2batt.png', '', '', '', '', ''),
(000000000094, 'Spine Braindbox', 'Mods', 2100, 1, '', '', 'Spine_Braindbox.png', '', '', '', '', ''),
(000000000095, 'Vapebreed 1 batt', 'Mods', 1500, 1, '', '', 'vape_breed_1batt.png', '', '', '', '', ''),
(000000000096, 'Vapebreed 2 batt', 'Mods', 2500, 1, '', '', 'Vapebreed_2batt.png', '', '', '', '', ''),
(000000000097, 'D3s', 'Mods', 1100, 1, '', '', 'd3s.png', '', '', '', '', ''),
(000000000098, 'Rincoe', 'Mods', 1400, 1, '', '', 'rincoe.png', '', '', '', '', ''),
(000000000099, 'Pulse', 'Mods', 2600, 1, '', '', 'pulse.png', '', '', '', '', ''),
(000000000100, 'Ijoy', 'Mods', 1400, 1, '', '', 'ijoy.png', '', '', '', '', ''),
(000000000101, 'Teslacigs', 'Mods', 1200, 1, '', '', 'teslacigs.png', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` float UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` float UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
