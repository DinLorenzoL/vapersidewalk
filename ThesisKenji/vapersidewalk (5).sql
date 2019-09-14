-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 10:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `DateApproved` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(000000000001, 'ZEUS 25MM RTA BY GEEK VAPE', 'Atomizer', 1449, 60, 'Zeus Dual is an upgraded dual coil version of the original Zeus RTA, with the innovative leak-proof top airflow system, airflow transferring from the top to the bottom to maintain great flavor. It comes with upgraded postless build deck that allows for easy building for both single coil and dual coils.', 'The Zeus 25mm RTA by Geek Vape is creatively constructed with user-friendly functionality in-mind, integrating a postless single-coil build deck along with a creative 3D Airflow System that synergizes with a leak-proof top airflow design. A continuation of Geek Vape dedication on producing top-tier rebuildable tank atomizers, the Zeus RTA is specially designed with high quality machining and beautiful design elements. The diameter measures 25mm in diameter, with a maximum capacity of 4 milliliters accessed via a convenient threaded top-fill method for toda top e-juice. The design element features a leak-proof structure with airflow entering the system through two top airflow slots. Similar to the Ammit 25 RTA, this air channel feeds into a 3D Three-Dimensional System in which the initial air path travels downward to the atomizer base. Then, it redirects into two channels that are located on the central internal airtube and dual three-slotted on the internal side walls that travels directly acrross the coil structure before rising vertically through the chimney. The build deck of the Zeus RTA is quite ergonomic, designed to be user-friendly with single-coil configuration for enhanced flavor experience. Furthermore, the kit includes a 510 Delrin widebore drip tip with the optional 810 Delrin widebore drip tip for extended versatility.\r\n<br>\r\nPackage Contents: 1 x RTA, 1 x Glass Tube, 1 x Allen Wrench, 1 x 510 Delrin Drip Tip, 1 x 510 Adapter, 1 x 810 Drip Tip, 2 x Heating Wire, 1 x English User Manual', '45672260_1931008363642237_5411897086335516672_n.jpg', 'Top airflow control ', 'Diameter: 2.6cm', 'Capacity: 4ml', 'Thread: 510', 'Leakproof'),
(000000000003, 'Blitzen RTA', 'Atomizer', 1, 99, 'Blitzen RTA is designed by Geekvape for maximum airflow and vapor production without the messy leaking common in tank atomizers.', 'It features a honeycomb airflow design that results in a smooth, pleasant, and clean drag every time. The postless design helps keep Blitzen RTA compact while keeping its build deck roomy for easy rebuilding and wicking of the coils.', 'blitzen.png', 'Type: RTA', 'Connector: 510 threaded', 'Diameter: 24m', 'Juice Capacity: 2mL / 5mL', 'Builds: Single/Dual Coil'),
(000000000004, 'Creed RTA', 'Atomizer', 1, 60, 'The Geek Vape Creed 25mm RTA is an innovation in the rebuildable atomizer space, introducing an interchangeable airflow system with a spacious two-post build deck and a generous 6.5mL maximum juice capacity. ', 'The GeekVape Creed RTA is fashioned from superior stainless steel and has a dynamic airflow system, allowing users to change the three different types of inner airflow chambers to match their preferred vaping style. External airflow enters the structure through three external airslots, fully adjustable by the AFC ring to deliver intense flavor and dense clouds.\r\n<br>\r\nThe spacious build deck hosts a two-post design, implementing large terminal openings to accommodate a plethora of coil leads. The convenient top-fill method is accessed by unscrewing the threaded top cap to reveal a large fill port, featuring a 4.5mL juice capacity that can be increased to a whopping 6.5mL of eLiquids with the bulb glass.', 'creed.png', '25mm Diameter', '6.5mL Maximum Juice Capacity', 'Superior Stainless Steel Construction', 'Superior Stainless Steel Construction', 'Spacious Build Deck'),
(000000000005, 'NCR Nicotine Reinforcer RDA', 'Atomizer', 1, 1, 'Tired of building your coils or just wanting to take a break from it? A new concept RDA is just the right gear for you!', 'NCR RDA features a food grade top cap and the innovative WAFER HEATER where you just put a cotton to it and cover it with the aluminum clamp, yes that easy. ', 'NCR.png', 'Type: RDA', 'Connector: 510 threaded', 'Diameter: 24mm', 'Builds: Wafer heating element or single coil', 'Toolless rebuilding'),
(000000000006, 'Serpent RDTA', 'Atomizer', 1, 1, 'The Serpent RDTA by Wotofo is the reinterpretation of its popular Serpent platform. The build deck has the classic dual-posts with 4 clamp-secured terminals, paired with a redirected side airflow funnel and convenient side-fill system. It is very easy to rebuild, with room for large coils despite the flavor-centric 22mm diameter chassis.', 'Coil leads are inserted within the large surface area of the terminal base and the clamp itself, secured via a centrally positioned Phillips-screws for a tremendous range of coil structure configurations. Furthermore, contacts are cleanly attached within the terminal in an efficient manner, resulting in a superior and consistent connection. The Serpent RDTA integrates a unique air delivery system of its kind, with airflow entering through the hidden mid section, which are then funneled up through the internal air tube to create an effective passage to the atomizer base. The result is effective vapor production and flavor recreation.', 'serpent.png', 'Type: RDTA', 'Connector: 510 threaded', 'Diameter: 22mm', 'Juice Capacity: 2.5mL', 'Builds: Single Coil'),
(000000000008, 'USV-L 75W Mod', 'Mods', 3, 60, 'Inspired by the simplicity of mechanical mods, but with the variability and safety of regulated mods. United Society of Vape USV-L Mod is a statement device: a fusion of the look of mechanical box mods with the rich suite of control and safety features of regulated box mods. For lovers of mechs looking for greater control over their vapor, it is an enticing proposition.', 'The heart of the USV-L is the VO Tech chipset, featuring full wattage and temperature control modes. The chipsets screen is cleverly hidden inside the battery cabin, resulting in one of the cleanest looking mods in the market, its lines and shapes almost completely unbroken by parts and connections.\r\n\r\nUltra-fast ramp time and custom power curve round out the rich features of USV-L, ensuring that even the most demanding users will be able to customize the mod to their satisfaction.', 'USV.png', 'United Society of Vape and VO Tech Collaboration', 'Wattage Ouput Range: 5-75W', 'Minimum Atomizer Resistance: 0.03ohm', 'MicroUSB Port', 'Short Circuit Protection'),
(000000000009, 'Geekvape Lumi Sub-Ohm DTA', 'Atomizer', 250, 1, 'Flavorful, powerful, and supremely convenient. Geekvape brings to market the leading disposable tank atomizer, compatible with high-powered box mods with a universal 510 connector.', 'Lumi Sub-Ohm is hewn from stainless steel and polycarbonate glass, while the atomizer is core is made from high quality kanthal mesh wire. With a resistance of 0.3ohm coupled with a mesh framework, Lumi Sub-Ohm is capable of producing thick clouds of vapor from mid to high VG liquids (low to mid nicotine recommended). The tank has a generous fill capacity of 4ml, cutting down on the frequency of refills and ensuring a convenient, day-long vape.', 'geek.png', 'Design: DTA (disposable tank atomizer)', 'Body material: stainless steel and polycarbonate', 'Core material: Supermesh coil', 'Diameter: 24mm', 'Connector: 510 threaded'),
(000000000010, 'Kanger Vola 100W Mod', 'Mods', 2, 1, 'Vola 100W typifies Kangertech is legendary design language, with a beautiful, durable frame of clean lines and gentle curves coupled with a very large 1.3inch TFT screen delivering vital information on mod settings.', 'Volas 2000mAh battery is one of the largest in the market at this mod size, and the  finely tuned power output ensures that recharging will be infrequent. The chipset is both powerful and intelligent. It is capable of a wattage range of 1 to 100W and supports a resistance level as low as 0.05ohm. A full temperature control suite and both TCR and DIY adjustments allow vaping enthusiasts to closely match the mods power output to their coil characteristics and flavor output preference.', 'kanger.png', 'Dimensions: 74mm by 44mm by 25mm', 'Integrated 2000mAh Rechargeable Battery', 'Wattage Output Range: 10-100W', 'Minimum Atomizer Resistance: 0.05ohm', 'Short Circuit Protection'),
(000000000011, 'Aegis Legend Mod', 'Mods', 3, 90, 'Aegis Legend is a new durable and powerful Box MOD inheriting from Aegis Mod family with waterproof, shockproof and dust-proof design. ', 'Powered by dual 18650 batteries with the new AS chipset, the Aegis Legend Mod releases up to 200W max output with colored display screen and fast, stable & powerful performance.\r\n\r\nAegis Legend Mod uses up to six different materials with high grade silicon, leather and alloy to achieve style and extreme durability. Together with the advanced VW/TC modes, more convenient battery door and USB port for direct charging & firmware update, the GeekVape Aegis Legend 200W MOD is definitely an excellent vaping device!', 'agies.png', 'Size: 90.5x 58.5 x 30.6mm', 'Max power output: 200W', 'Output mode: VW/ VPC/TC/TCR/BYPASS', 'Resistance range: 0.05-3.0ohm', 'Temperature Range: 100-315â„ƒ/200-600â„‰'),
(000000000012, 'Nikola Medea 218W Mod', 'Mods', 3, 992, 'Nikola Medea Mod is the flagship temp control box mod from Nikola. Constructed with zinc alloy and a hairline baking finish, Medea offers a comfortable grip due to its textured feel and finger curves hewn into the frame.', 'A generous 0.96 inch OLED display with a horizontal menu offers great at-a-glance insight into the settings of the mod.\r\n\r\nPowered by two 18650 batteries (sold separately) and capable of taking a recharge via the micro USB port (up to 1.5 amp charging current), Medea can fire from 7W to 218W at full capacity.\r\n\r\nThe temperature control suite is compatible with nickel, titanium & stainless steel. A further TCR mode allows for entering custom resistance values depending on your heating element of choice, as well as several flavor modes to hit your favorite vape (normal, soft, hard).', 'nikola.png', 'Size: 88mm x 57.2mm x 30mm', 'Material: Zinc alloy', 'Output Wattage: 7-218W', 'USB Charging Voltage and Current: 5V/1.5A', 'Thread type: 510'),
(000000000016, '3.7V 3000mAh', 'Batteries', 230, 1, '', '', 'batt5.png', 'Voltage: 3.7 V', 'Current Rating: 3000 mAh', 'Size: 0.73â€³', 'Diameter x 2.56â€³ H', 'Weight: 0.1 lbs.'),
(000000000017, 'ENOOK 3600mAh', 'Batteries', 500, 99, '', '', 'batt4.png', 'Type: IMR High Drain', 'Size: 18650', 'Capacity: 3600mAh', 'Voltage: 3.7 V', 'Continuous Ampere: 35A'),
(000000000018, 'Kanthal Wire', 'Accessories', 40, 1, 'Kanthal. The most reliable wire for vaping, with little to no change in resistance while heating up. Its what makes kanthal perfect for wattage mode vaping, and why it has become the go-to material for use with rebuildable atomizers on both mech and variable mods.', '', 'wire2.png', '0.40mm', '0.51mm', '0.64mm', '', ''),
(000000000019, 'Clapton Wire', 'Accessories', 140, 1, 'This clapton variant comes in 1 meter cuts, and is made of high quality Swiss kanthal and nichrome80 wires, proudly spun in the Philippines by a passionate craftsman.', 'Clapton made from kanthal inner and nichrome outer wires are known for combining the stable resistance of kanthal at any temperature with the quick heat-up and cool-down times of nichrome alloy. Its the best of both worlds.', 'wire1.png', '0.4mm diameter for inner kanthal wire', '0.2mm diameter for outer nichrome wire', '0.8mm total diameter', 'Not compatible with temperature control', ''),
(000000000020, 'Delorean Replacement Pods', 'Accessories', 200, 0, 'Durable. Flavor-accurate. Designed for both high and low power vaping.', 'Delorean refillable pods utilize a ceramic wick and coil system for durability and flavor- accuracy. The coils are designed to work with liquids as high as 60% VG, though Nikolas recommendation is still primarily 50% VG liquids for optimal performance.\n\nDelorean is designed to work on multiple voltage levels, allowing higher power for thicker, freebase nic liquids and lower power for thinner, salt nic liquids. Please consult the manual and know your liquids characteristics for the appropriate setting, or consult Mistwood.', 'pods.png', '2.0ml Juice Capacity - PCTG Refillable Pod', 'Resistance: 1.2ohm', 'Double protection against leaks', 'Porous ceramic wick', 'High to low power compatible'),
(000000000021, 'Muji Cotton Pad', 'Accessories', 10, 1, 'Muji cotton pads allow for easy cutting and forming into wicks for use in rebuildable atomizers. Made from 100% unbleached Japanese cotton, it ensures the purest vapor flavor possible with cotton wicking.', '', 'cotton2.png', '', '', '', '', ''),
(000000000022, 'Mighty Wicks', 'Accessories', 200, 99, 'Organic cotton pre-fluffed by machine for very high wicking rate and optimal flavor.', '', 'cotton1.png', '', '', '', '', ''),
(000000000023, 'Brown Roots', 'Juice', 150, 100, 'A fresh take on deserts and treats, with old school nic up to 8mg/ml.', 'Brown Roots puts its spin on vaping favorites like cheesecake, cookies, and even bubblegum, with quality throatiness rounding out the burst of flavor from every puff.', 'juice1.png', 'Volume: 30mL/bottle', 'Nicotine levels: 3mg/mL and 8mg/mL', 'VG to PG ratio: 70:30', 'Pod Compatibility: Yes', ''),
(000000000024, 'Chillax', 'Juice', 280, 100, 'A little something for everybody, everyday. Thats the Chillax way.', 'Available in 50mL bottles, with a range of flavors from fruity, to pastry, to tobacco-y, Chillax offers a full range of vaping flavors. With 3 and 6mg/mL nic levels, you are sure to find your new daily vape in Chillax.', 'juice2.png', 'Volume: 60 mL/bottle', 'Nicotine levels: 3mg/mL and 6mg/mL', 'VG to PG ratio: 70:30', 'Pod Compatibility: Yes', ''),
(000000000025, 'Freezy Tricks', 'Juice', 400, 99, 'Enjoy a blast of freshness in our year-round heat.', 'Strong menthol with delectable fruit combinations bring you the freshness that you are craving. Perfect for our year-round summer.', 'juice3.png', 'Volume: 60 mL/bottle', 'Nicotine levels: 3mg/mL', 'VG to PG ratio: 60:40', 'Pod Compatibility: Yes', ''),
(000000000026, 'Masons Drop', 'Juice', 300, 1, 'Rich flavors and a full-bodied, throaty vape even at low nic levels.', '', 'juice4.png', 'Volume: 50mL/bottle', 'Nicotine levels: 3mg/mL', 'VG to PG ratio: 50:50', 'Pod Compatibility: Yes', '');

--
-- Indexes for dumped tables
--

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
  MODIFY `OrderID` float UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` float UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
