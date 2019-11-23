-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2019 at 05:30 AM
-- Server version: 10.1.41-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uzzaorti_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_page`
--

CREATE TABLE `add_page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_page`
--

INSERT INTO `add_page` (`id`, `name`, `body`) VALUES
(1, 'About us', '                                                                                             fgdfgfdg  fgfdgfdgfdgdf    About us..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.\r\n\r\nAbout me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.\r\n\r\nAbout me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.                                                                                                '),
(2, 'contact us', 'Contact us .Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.\r\n\r\nAbout me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.\r\n\r\nAbout me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.'),
(4, 'private policy ', 'private policy :  here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.\r\n\r\nAbout me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.\r\n\r\nAbout me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.');

-- --------------------------------------------------------

--
-- Table structure for table `blog_catagory`
--

CREATE TABLE `blog_catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_catagory`
--

INSERT INTO `blog_catagory` (`id`, `name`) VALUES
(8, 'hero'),
(2, 'php'),
(3, 'css'),
(4, 'html'),
(5, 'Sports'),
(6, 'educationl'),
(9, 'CSS3'),
(10, 'javakk j');

-- --------------------------------------------------------

--
-- Table structure for table `blog_logo`
--

CREATE TABLE `blog_logo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descripton` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_logo`
--

INSERT INTO `blog_logo` (`id`, `title`, `descripton`, `logo`) VALUES
(1, 'Website Title', 'Website Title des', 'upload/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `cat`, `title`, `body`, `images`, `author`, `tag`, `date`) VALUES
(32, 8, 'ffff Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'upload/5cd9376c27.jpg', 'uzzal barmon', 'war t', '2019-09-08 18:33:01'),
(33, 2, 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'upload/8121303fcf.jpg', 'uzzal barmon', 'dsfdsk  kkkk jjjj hhh', '2019-09-08 18:40:07'),
(35, 4, 'SERVER_PROTOCOL\'     Name and revisio', '\'PHP_SELF\'\r\n    The filename of the currently executing script, relative to the document root. For instance, $_SERVER[\'PHP_SELF\'] in a script at the address http://example.com/foo/bar.php would be /foo/bar.php. The __FILE__ constant contains the full path and filename of the current (i.e. included) file. If PHP is running as a command-line processor this variable contains the script name since PHP 4.3.0. Previously it was not available. \r\n\'argv\'\r\n    Array of arguments passed to the script. When the script is run on the command line, this gives C-style access to the command line parameters. When called via the GET method, this will contain the query string. \r\n\'argc\'\r\n    Contains the number of command line parameters passed to the script (if run on the command line). \r\n\'GATEWAY_INTERFACE\'\r\n    What revision of the CGI specification the server is using; e.g. \'CGI/1.1\'. ', 'upload/ca5665b795.jpg', 'uzzal barmon ', 'php', '2019-09-30 09:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `blog_slider`
--

CREATE TABLE `blog_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_slider`
--

INSERT INTO `blog_slider` (`id`, `title`, `images`) VALUES
(1, 'This is slider one Title or Description 44444', 'upload/slider/501e0b15cd.jpg'),
(3, 'This is slider one Title or Description 221', 'upload/slider/3d335a8c1b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_social`
--

CREATE TABLE `blog_social` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `instra` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_social`
--

INSERT INTO `blog_social` (`id`, `fb`, `tw`, `ln`, `instra`) VALUES
(1, 'https://www.facebook.com/sd', 'https://twitter.com/fgdf', 'https://bd.linkedin.com/dfggg', 'https://bd.linkedin.com/dfgggkk');

-- --------------------------------------------------------

--
-- Table structure for table `blog_user`
--

CREATE TABLE `blog_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_user`
--

INSERT INTO `blog_user` (`id`, `name`, `username`, `password`, `email`, `details`, `role`) VALUES
(1, 'uzzal barmon', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'uzzal.heliumvalley@gmail.com', '                                     \r\n      fgfdgfgfdgfdgfdg                                 ', 0),
(11, '', 'topan', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 1),
(8, '', 'editor', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 0),
(9, '', 'sumon', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 1),
(10, 'aruna rani', 'aruna', 'fa8ab0b2d59af8bad5c84784831a8927', 'ujjalbarmon2041@gmail.com', '                                     \r\n  hi klfdkls                                                                   ', 2),
(12, '', 'fff', '9afdca824a8c8c836d3d0389e4c9c486', '', '', 2),
(13, '', 'arunagg', '827ccb0eea8a706c4c34a16891f84e7b', '', '', 1),
(14, 'author', 'author', '81dc9bdb52d04dc20036dbd8313ed055', 'author@gmail.com', '                                     \r\n                                                                    ', 1),
(15, '', 'email', '0c83f57c786a0b4a39efab23731c7ebc', 'email@gmail.com', '', 1),
(16, '', 'hero', '827ccb0eea8a706c4c34a16891f84e7b', 'habib.heliumvalley@gmail.com', '', 1),
(17, '', 'heko', '81dc9bdb52d04dc20036dbd8313ed055', 'ujjalbarmon2042@gmail.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `body` text NOT NULL,
  `status` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `body`, `status`, `date`) VALUES
(4, 'uzzal', 'barmnon', 'ujjalbarmon2041@gmail.com', '\'PHP_SELF\' The filename of the currently executing script, relative to the document root. For instance, $_SERVER[\'PHP_SELF\'] in a script at the address http://example.com/foo/bar.php would be....', 1, '2019-10-03 06:13:34'),
(5, 'uzzal', 'barmnon', 'ujjalbarmon2041@gmail.com', '\'PHP_SELF\' The filename of the currently executing script, relative to the document root. For instance, $_SERVER[\'PHP_SELF\'] in a script at the address http://example.com/foo/bar.php would be....', 1, '2019-10-03 06:14:17'),
(6, 'Eric', 'Jones', 'eric@talkwithcustomer.com', 'Hello infobeginner.com,\r\n\r\nPeople ask, â€œwhy does TalkWithCustomer work so well?â€\r\n\r\nItâ€™s simple.\r\n\r\nTalkWithCustomer enables you to connect with a prospective customer at EXACTLY the Perfect Time.\r\n\r\n- NOT one week, two weeks, three weeks after theyâ€™ve checked out your website infobeginner.com.\r\n- NOT with a form letter style email that looks like it was written by a bot.\r\n- NOT with a robocall that could come at any time out of the blue.\r\n\r\nTalkWithCustomer connects you to that person within seconds of THEM asking to hear from YOU.\r\n\r\nThey kick off the conversation.\r\n\r\nThey take that first step.\r\n\r\nThey ask to hear from you regarding what you have to offer and how it can make their life better. \r\n\r\nAnd it happens almost immediately. In real time. While theyâ€™re still looking over your website infobeginner.com, trying to make up their mind whether you are right for them.\r\n\r\nWhen you connect with them at that very moment itâ€™s the ultimate in Perfect Timing â€“ as one famous marketer put it, â€œyouâ€™re entering the conversation already going on in their mind.â€\r\n\r\nYou canâ€™t find a better opportunity than that.\r\n\r\nAnd you canâ€™t find an easier way to seize that chance than TalkWithCustomer. \r\n\r\nCLICK HERE http://www.talkwithcustomer.com now to take a free, 14-day test drive and see what a difference â€œPerfect Timingâ€ can make to your business.\r\n\r\nSincerely,\r\nEric\r\n\r\nPS:  If youâ€™re wondering whether NOW is the perfect time to try TalkWithCustomer, ask yourself this:\r\nâ€œWill doing what Iâ€™m already doing now produce up to 100X more leads?â€\r\nBecause those are the kinds of results we know TalkWithCustomer can deliver.  \r\nIt shouldnâ€™t even be a question, especially since it will cost you ZERO to give it a try. \r\nCLICK HERE http://www.talkwithcustomer.com to start your free 14-day test drive today.\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=infobeginner.com', 0, '2019-10-09 01:52:37'),
(7, 'Beulah', 'Lair', 'lair.beulah@yahoo.com', 'Interested in advertising that costs less than $50 every month and delivers tons of people who are ready to buy directly to your website? Send a reply to: jack5886tur@gmail.com to find out how this works.', 0, '2019-10-12 18:40:50'),
(8, 'Woodrow', 'Brinkman', 'brinkman.woodrow@gmail.co', 'Hey there,\r\nDo you want to reach new clients? \r\n\r\nWe are personally welcoming you to join one of the leading influencer and affiliate networks on the internet. \r\nThis network finds influencers and affiliates in your niche who will promote your business on their websites and social network channels. \r\nAdvantages of our program include: brand recognition for your product or service, increased credibility, and possibly more clients. \r\n\r\nIt\'s the best, easiest and most effective method to increase your sales! \r\n\r\nWhat do you think?\r\n\r\nVisit: http://bit.ly/smartsocialpromotion', 0, '2019-10-13 23:37:01'),
(9, 'Heike', 'Delarosa', 'heike.delarosa78@yahoo.co', 'Get free gas, free groceries, free movie and music downloads, product giveaways and more free offers just for completing small surveys, visit: http://freestuff.giveawaysusa.xyz', 0, '2019-10-17 23:44:10'),
(10, 'Eric', 'Jones', 'eric@talkwithcustomer.com', 'Hey,\r\n\r\nYou have a website infobeginner.com, right?\r\n\r\nOf course you do. I am looking at your website now.\r\n\r\nIt gets traffic every day â€“ that youâ€™re probably spending $2 / $4 / $10 or more a click to get.  Not including all of the work you put into creating social media, videos, blog posts, emails, and so on.\r\n\r\nSo youâ€™re investing seriously in getting people to that site.\r\n\r\nBut howâ€™s it working?  Great? Okay?  Not so much?\r\n\r\nIf that answer could be better, then itâ€™s likely youâ€™re putting a lot of time, effort, and money into an approach thatâ€™s not paying off like it should.\r\n\r\nNowâ€¦ imagine doubling your lead conversion in just minutesâ€¦ In fact, Iâ€™ll go even better.\r\n \r\nYou could actually get up to 100X more conversions!\r\n\r\nIâ€™m not making this up.  As Chris Smith, best-selling author of The Conversion Code says: Speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 14 minutes vs being contacted within 5 minutes.\r\n\r\nHeâ€™s backed up by a study at MIT that found the odds of contacting a lead will increase by 100 times if attempted in 5 minutes or less.\r\n\r\nAgain, out of the 100s of visitors to your website, how many actually call to become clients?\r\n\r\nWell, you can significantly increase the number of calls you get â€“ with ZERO extra effort.\r\n\r\nTalkWithCustomer makes it easy, simple, and fast â€“ in fact, you can start getting more calls todayâ€¦ and at absolutely no charge to you.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com now to take a free, 14-day test drive to find out how.\r\n\r\nSincerely,\r\nEric\r\n\r\nPS: Donâ€™t just take my word for it, TalkWithCustomer works:\r\nEMA has been looking for ways to reach out to an audience. TalkWithCustomer so far is the most direct call of action. It has produced above average closing ratios and we are thrilled. Thank you for providing a real and effective tool to generate REAL leads. - P MontesDeOca.\r\nBest of all, act now to get a no-cost 14-Day Test Drive â€“ our gift to you just for giving TalkWithCustomer a try. \r\nCLICK HERE http://www.talkwithcustomer.com to start converting up to 100X more leads today!\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=infobeginner.com', 0, '2019-10-21 21:23:42'),
(11, 'Meagan', 'Dunaway', 'dunaway.meagan@gmail.com', 'Do you want to post your business on 1000\'s of Advertising sites every month? For one small fee you\'ll get virtually unlimited traffic to your site forever! To find out more check out our site here: http://adsonthousandsofsites.dealz.site', 0, '2019-10-23 05:35:06'),
(12, 'Leland', 'Gurley', 'leland.gurley@gmail.com', 'Hey,\r\n\r\nYou\'ve got 9 hours until this shuts down\r\n\r\nACT NOW - GET LIFETIME 50% DISCOUNT - ONLY FOR YOU\r\n\r\nhttp://sellmore.tips/\r\n\r\nPROVEN RESULTS: Better Conversions, More Profitable Funnels, Cheaper Leads And Bigger Ad ROI â€“ All Thanks To our Sales Funnel System\r\n\r\nAnd look, I get it. You don\'t want to fall for shiny object syndrome. You only want to invest in platforms that help your business.\r\n\r\nAnd that\'s good. You should be commended on not just rushing after every new toy.\r\n\r\nBut you need to be careful that it doesn\'t blind you to genuine opportunities.\r\n\r\nAnd this, I firmly believe, is a genuine opportunity.\r\n\r\nBecause this isn\'t a \'launch product\'. It isn\'t an app from a vendor who\'s working on something different every month.\r\n\r\nIt\'s a real platform, used by over 4,000 people.\r\n\r\nIt\'s been updated (often with brand new features) every Tuesday since it was launched in 2017! \r\n\r\nThey even shipped an update on Christmas day 2018! \r\n\r\nI\'m mean, who works Christmas Day? Just Santa... and these guys:\r\n\r\nhttp://sellmore.tips/\r\n\r\nThis is fully supported. The dev team is in-house, ready to answer your questions.\r\n\r\nThe Facebook group is active, and the founders are in there every day.\r\n\r\nThis is more than a product - it\'s a community who help and support each other.\r\n\r\nAnd most of them think Sales Funnel System is the best thing they ever invested in.\r\n\r\nAnd remember...\r\n\r\nIt\'s just got a MASSIVE video upgrade that will keep Sales Funnel System at the forefront of page building technology for years to come. \r\n\r\nNow you\'ve got the chance to be there with them, at an incredible discount.\r\n\r\nBut that chance will only last for another 9 hours:\r\n\r\nhttp://sellmore.tips/\r\n\r\nCheers,\r\nLeland\r\n\r\nNote: If you don\'t want to receive emails from us, just click here\r\nhttp://sellmore.tips/salefunnel/index.php?domain=infobeginner.com', 0, '2019-10-25 19:32:26'),
(13, 'Jeannie', 'Stein', 'stein.jeannie@msn.com', 'Get $2000 To Spend At The Supermarket!, details at: http://freestuff.giveawaysusa.xyz', 0, '2019-10-28 00:42:54'),
(14, 'Callum', 'Normanby', 'callum.normanby0@gmail.co', 'Finally understand what\'s going on with your website!\r\n\r\nGoogle analytics can be overwhelming, and let\'s be honest, you don\'t have time to learn all of that data stuff.\r\nYou also don\'t want to spend thousands of dollars on expensive marketing agency retainers.\r\n\r\nWe have some good news for you: You donâ€™t need a PhD in analytics to understand how your website is performing for your business. You can easily get simple, high-impact analysis, reporting, and visuals to let you know how you are doing and what to do next.\r\n\r\nWith our software, we create a custom growth plan for your businessâ€™s online presence. Find lucrative opportunities and grow confidently with articles, videos, and custom solutions that are tied into one simple revenue-based KPI.\r\n\r\nOur software tells the user in plain English what is going on with the website. This type of tech used to cost tens of thousands of dollars, just a year or two ago.\r\n\r\nCheck out what our customers are saying:\r\n\r\n&quot;Everything was really clear and easy! I feel much more informed about what is going on with my website now and I feel like I know what to do to keep growing it.&quot;\r\n\r\nOur Answer Engineâ„¢ and powerful diagnostic tool will scan your site and come up with a customized growth plan by simply giving you the answers.\r\n\r\nDiscover all of the business oportunitties you can leverage with your current website, visiting us at the following link: http://bit.ly/2JtIJwS', 0, '2019-10-29 15:29:09'),
(15, 'Carmel', 'Rolfe', 'carmel.rolfe@gmail.com', 'Hey there,\r\nWould you like to reach brand-new customers? \r\n\r\nWe are personally inviting you to join one of the leading influencer and affiliate networks online. \r\nThis network finds influencers and affiliates in your niche who will promote your business on their sites and social media channels. \r\nAdvantages of our program consist of: brand recognition for your product or service, increased credibility, and possibly more customers. \r\n\r\nIt\'s the best, most convenient and most effective method to increase your sales! \r\n\r\nWhat do you think?\r\n\r\nLearn more here: http://results.socialinfluencermarketing.xyz', 0, '2019-10-30 22:55:22'),
(16, 'Tosha', 'Roberts', 'tosha.roberts53@googlemai', 'How would you like to submit your advertisement on over 1000 ad sites monthly? One tiny investment every month will get you virtually unlimited traffic to your site forever! For more information just visit: http://morebusiness.myadsubmissions.xyz', 0, '2019-11-03 01:13:15'),
(17, 'Selma', 'Hamlett', 'selma.hamlett@hotmail.com', 'Would you like to post your business on thousands of advertising sites monthly? Pay one low monthly fee and get virtually unlimited traffic to your site forever!To find out more check out our site here: http://moreadsposted.n3t.store', 0, '2019-11-03 20:59:53'),
(18, 'Jeb', 'Spahn', 'getfunded@offerriseupcapi', 'Hi - I apologize for using your form to get a hold of you, but I couldnâ€™t get through on the phone line and I wanted to reach out to see if your business was looking to get funded between $5000 and $750,000 in working capital?\r\n\r\n\r\nWe fund a lot of businesses in your niche within 24 - 48 hours.\r\n\r\n\r\n    Poor Credit or No Credit is OK\r\n    High Approval Rates\r\n    No Hard Credit Pulls to Qualify\r\n\r\n\r\nIf your business can benefit from a cash influx then see how much funding you pre-qualify for in 60 seconds: http://bit.ly/riseupcapital\r\n\r\n\r\nThank you!\r\n\r\nJeb', 0, '2019-11-05 09:54:40'),
(19, 'Jolie', 'Boose', 'boose.jolie@gmail.com', 'Looking for fresh buyers? Get hundreds of people who are ready to buy sent directly to your website. Boost your profits fast. Start seeing results in as little as 48 hours. For more info write a reply to: michael4621gre@gmail.com', 0, '2019-11-08 11:16:04'),
(20, 'Monserrate', 'Vosper', 'monserrate.vosper@hotmail', 'Do you want to promote your ad on 1000\'s of Advertising sites every month? One tiny investment every month will get you virtually unlimited traffic to your site forever! To find out more check out our site here: http://www.postmyads.tech', 0, '2019-11-12 22:41:59'),
(21, 'Erica', 'Sweetapple', 'sweetapple.erica@gmail.co', 'Are you looking for effective advertising that isn\'t full of BS? I apologize for sending you this message on your contact form but actually that\'s exactly where I wanted to make my point. We can send your ad message to websites through their contact forms just like you\'re reading this ad right now. You can specify targets by keyword or just execute bulk blasts to websites in the country of your choice. So let\'s say you want to blast a message to all the interior decorators in the US, we\'ll scrape websites for just those and post your ad message to them. As long as you\'re advertising something that\'s relevant to that business category then you\'ll be blessed with an amazing response! \r\n\r\nShoot me a reply to eliza3644will@gmail.com for details on how this works', 0, '2019-11-15 14:49:17'),
(22, 'Eric', 'Jones', 'eric@talkwithcustomer.com', 'Hi,\r\n\r\nMy name is Eric and I was looking at a few different sites online and came across your site infobeginner.com.  I must say - your website is very impressive.  I am seeing your website on the first page of the Search Engine. \r\n\r\nHave you noticed that 70 percent of visitors who leave your website will never return?  In most cases, this means that 95 percent to 98 percent of your marketing efforts are going to waste, not to mention that you are losing more money in customer acquisition costs than you need to.\r\n \r\nAs a business person, the time and money you put into your marketing efforts is extremely valuable.  So why let it go to waste?  Our users have seen staggering improvements in conversions with insane growths of 150 percent going upwards of 785 percent. Are you ready to unlock the highest conversion revenue from each of your website visitors?  \r\n\r\nTalkWithCustomer is a widget which captures a website visitorâ€™s Name, Email address and Phone Number and then calls you immediately, so that you can talk to the Lead exactly when they are live on your website â€” while they\'re hot! Best feature of all, International Long Distance Calling is included!\r\n  \r\nTry TalkWithCustomer Live Demo now to see exactly how it works.  Visit http://www.talkwithcustomer.com\r\n\r\nWhen targeting leads, speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 30 minutes vs being contacted within 5 minutes.\r\n\r\nIf you would like to talk to me about this service, please give me a call.  We have a 14 days trial.  Visit http://www.talkwithcustomer.com to start converting up to 100X more leads today!\r\n\r\nThanks and Best Regards,\r\nEric\r\n\r\nIf you\'d like to unsubscribe go to http://liveserveronline.com/talkwithcustomer.aspx?d=infobeginner.com', 0, '2019-11-16 04:00:31'),
(23, 'Ryan', 'C', 'ryanc@pjnmail.com', 'I came across your website (https://infobeginner.com/contact.php) and just wanted to reach\r\nout to see if you\'re hiring? \r\n\r\nIf so, I\'d like to extend an offer to post to top job sites at\r\nno cost for two weeks. \r\n\r\nHere are some of the key benefits: \r\n\r\n-- Post to top job sites with one click \r\n-- Manage all candidates in one place \r\n-- No cost for two weeks \r\n\r\nYou can post your job openings now by going to our website below: \r\n\r\n&gt;&gt; http://www.TryProJob.com\r\n\r\n* Please use offer code 987FREE -- Expires Soon * \r\n\r\nThanks for your time, \r\nRyan C. \r\n\r\nPro Job Network \r\n10451 Twin Rivers Rd #279 \r\nColumbia, MD 21044 \r\n\r\nTo OPT OUT, please email ryanc@pjnmail.com\r\nwith &quot;REMOVE infobeginner.com&quot; in the subject line.', 0, '2019-11-21 20:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `footer_bl`
--

CREATE TABLE `footer_bl` (
  `id` int(11) NOT NULL,
  `copy_fb` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_bl`
--

INSERT INTO `footer_bl` (`id`, `copy_fb`) VALUES
(1, 'Copyright  2019 TWLP Learning Solutions.ff All Right Reserved. gg');

-- --------------------------------------------------------

--
-- Table structure for table `test_blog`
--

CREATE TABLE `test_blog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_blog`
--

INSERT INTO `test_blog` (`id`, `name`, `email`, `skill`) VALUES
(1, 'uzzal barmon', 'ujjalbarmon2041@gmail.com', 'php, mysqli'),
(2, 'aruna shaha', 'arunashaha@gmail.com', 'css,html'),
(3, 'uzzal barmon', 'ujjalbarmon2041@gmail.com', 'php, mysqli'),
(4, 'aruna shaha', 'arunashaha@gmail.com', 'css,html'),
(5, '', '', ''),
(6, '', '', ''),
(7, 'topan', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_page`
--
ALTER TABLE `add_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_catagory`
--
ALTER TABLE `blog_catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_logo`
--
ALTER TABLE `blog_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_slider`
--
ALTER TABLE `blog_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_social`
--
ALTER TABLE `blog_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_user`
--
ALTER TABLE `blog_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_bl`
--
ALTER TABLE `footer_bl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_blog`
--
ALTER TABLE `test_blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_page`
--
ALTER TABLE `add_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_catagory`
--
ALTER TABLE `blog_catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_logo`
--
ALTER TABLE `blog_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `blog_slider`
--
ALTER TABLE `blog_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_social`
--
ALTER TABLE `blog_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_user`
--
ALTER TABLE `blog_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `footer_bl`
--
ALTER TABLE `footer_bl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_blog`
--
ALTER TABLE `test_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
