-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2019 at 06:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstoreci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `authors_id` int(11) NOT NULL,
  `authors_photo` text NOT NULL,
  `authors_name` varchar(255) NOT NULL,
  `authors_address` text NOT NULL,
  `authors_email` varchar(255) NOT NULL,
  `authors_gender` varchar(20) NOT NULL,
  `authors_dob` varchar(255) NOT NULL,
  `authors_bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`authors_id`, `authors_photo`, `authors_name`, `authors_address`, `authors_email`, `authors_gender`, `authors_dob`, `authors_bio`) VALUES
(1, 'image/author/chit-oo-nyo.jpg', 'ခ်စ္ဦးညိဳ', 'Yangon																							', 'authortesting@gmail.com', 'Male', '1943-04-03', 'asdfasdfasdfasdfDfadfaf'),
(2, 'image/author/Stephenie_Meyer.jpg', 'Stephenie Meyer', 'Hartford, Connecticut, U.S.																						', 'stepheniemeyer@gmail.com', 'Female', '1973-12-24', '<p style=\"overflow-wrap: break-word; outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(40, 40, 40); font-family: &quot;Alegreya Sans&quot;, sans-serif; font-size: 18px;\">Best known for her&nbsp;<a href=\"https://stepheniemeyer.com/the-twilight-saga/\" style=\"overflow-wrap: break-word; outline: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(106, 159, 149);\"><em style=\"overflow-wrap: break-word; outline: none;\">Twilight</em>&nbsp;series</a>, Stephenie Meyer’s four-book collection has sold over 100 million copies globally in over 50 countries, with translations in 37 different languages. Meyer was the highest-selling author of 2008 and 2009 in the United States, having sold over 29 million books in 2008, and 26.5 million books in 2009. In 2008, Meyer also released&nbsp;<em style=\"overflow-wrap: break-word; outline: none;\"><a href=\"https://stepheniemeyer.com/portfolio/the-host-book/\" style=\"overflow-wrap: break-word; outline: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(106, 159, 149);\">The Host</a></em>, which debuted at #1 on&nbsp;<em style=\"overflow-wrap: break-word; outline: none;\">The New York Times</em>&nbsp;and&nbsp;<em style=\"overflow-wrap: break-word; outline: none;\">Wall Street Journal</em>&nbsp;bestseller lists. Additionally,&nbsp;<em style=\"overflow-wrap: break-word; outline: none;\">USA Today</em>&nbsp;declared Meyer “Author of the Year,” citing that she had done something that no one else had in the 15 years of the&nbsp;<em style=\"overflow-wrap: break-word; outline: none;\">USA Today</em>&nbsp;bestselling book list– she swept the top four slots in 2008. Meyer also accomplished this feat in 2009, when The Twilight Saga once again dominated the top of the bestseller list. All together, her books have spent over 303 weeks on the&nbsp;<em style=\"overflow-wrap: break-word; outline: none;\">New York Times</em>&nbsp;Bestseller List.</p><p style=\"overflow-wrap: break-word; outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(40, 40, 40); font-family: &quot;Alegreya Sans&quot;, sans-serif; font-size: 18px;\">Stephenie Meyer graduated from Brigham Young University with a degree in English Literature. She lives in Arizona with her husband and sons.</p>																								\r\n											'),
(3, 'image/author/J_K_Rowling.jpg', 'J. K. Rowling', 'Yate, Gloucestershire, England																																		', 'jkrowling@gmail.com', 'Female', '1965-07-31', '												<p style=\"vertical-align: bottom; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; color: rgb(77, 77, 77); font-family: proxima_nova_rgregular; background-color: rgb(242, 242, 242);\">Joanne Rowling was born on 31st July 1965 at Yate General Hospital near Bristol, and grew up in Gloucestershire in England and in Chepstow, Gwent, in south-east Wales.</p><p style=\"vertical-align: bottom; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; color: rgb(77, 77, 77); font-family: proxima_nova_rgregular; background-color: rgb(242, 242, 242);\">Her father, Peter, was an aircraft engineer at the Rolls Royce factory in Bristol and her mother, Anne, was a science technician in the Chemistry department at Wyedean Comprehensive, where Jo herself went to school. Anne was diagnosed with multiple sclerosis when Jo was a teenager and died in 1990, before the Harry Potter books were published.&nbsp; Jo also has a younger sister, Di.</p><p style=\"vertical-align: bottom; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; color: rgb(77, 77, 77); font-family: proxima_nova_rgregular; background-color: rgb(242, 242, 242);\">The young Jo grew up surrounded by books. “I lived for books,’’ she has said. “I was your basic common-or-garden bookworm, complete with freckles and National Health spectacles.”</p>																								\r\n																							\r\n											'),
(4, 'image/author/E_L_James.png', 'E. L. James', 'Willesden, London, England, UK																							', 'eljames@gmail.com', 'Female', '1963-03-07', '<p style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px;\">I’m a former TV executive, wife and mother-of-two based in the leafy suburbs of West London. I have been writing romantic fiction since 2009 and in 2012 my career took an extraordinary turn when my<em>&nbsp;Fifty Shades Trilogy&nbsp;</em>became a worldwide bestseller and subsequently a series of blockbuster movies.</p><p style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px;\">From an early age, I had dreamed of writing stories that readers would fall in love with—and now those dreams have come true, thanks to you guys.&nbsp; I hope that you take my new story&nbsp;<em>The Mister</em>&nbsp;to your heart just as you did&nbsp;<em>Fifty Shades.</em></p><p style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px;\">Thanks to all of you for your support—it has meant the world to me. If anyone were to ask me what lessons I’ve learned from my crazy adventures, I would say this: Life is not a dress rehearsal—seize the day and follow your dreams.</p><p style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px;\">I wish you the best of luck.</p><p style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px;\">EL<br>January 2019</p>																								\r\n											'),
(5, 'image/author/Khin_Hnin_Yu.jpg', 'ခင္ႏွင္းယု', 'ဧရာဝတီတိုင္း ဝါးခယ္မၿမိဳ႕																', 'unknown@gmail.com', 'Female', '1925-09-07', '<font color=\"#0b0080\" face=\"mm3web, Myanmar Text, Myanmar3, TharLon, Noto Sans Myanmar, Masterpiece Uni Sans, Parabaik, Yunghkio, Thanlwin, Win Uni Innwa, Padauk, MyMyanmar Unicode, WinUni Innwa, Myanmar2\">ဧရာဝတီတိုင္း ဝါးခယ္မၿမိဳ႕၌ အဖ အစိုးရေက်ာင္းဆရာႀကီး ဦးဘ ၊ အမိ ေဒၚသိန္းတင္တို႔မွ ၁၉၂၅ခု ၊ စက္တင္ဘာ ရ ရက္ (တနလၤာေန႔) တြင္ဖြားျမင္သည္ ။ ေမြးခ်င္း ခုနစ္ေယာက္အနက္ ငါးေယာက္ေျမာက္ျဖစ္ၿပီး ဝန္ႀကီးခ်ဳပ္ ဦးႏု ႏွင့္ေမာင္ႏွမ ဝမ္းကြဲေတာ္စပ္ သူတစ္ဦးျဖစ္သည္ ။ ၁၉၅ဝ တြင္ ဗိုလ္ႀကီးေက်ာ္ေသာင္းႏွင့္ လက္ထပ္ခဲ့ကာ ၁၉၇ဝ တြင္ ခင္ပြန္းသည္ ကြယ္လြန္ခဲ့သည္ ။ ၁၉၈၅ မွ က်န္းမာေရးအလြန္ဆိုး႐ြားေသာေၾကာင့္ ေဆး႐ုံတြင္ ကုသမႈခံယူ ၿပီးေနာက္ \"ခ်မ္းေျမ့ရိပ္သာ\" တြင္ ေနထိုင္ခဲ့သည္ ။ ၂၀၀၃ ဇန္နဝါရီလ ၂၁ ရက္ (အဂၤါေန႔) နံနက္ (၈:၃၀) တြင္ ရန္ကုန္ျပည့္သူ႔ ေဆး႐ုံႀကီး၌ ကြယ္လြန္သည္။</font>'),
(6, 'image/author/chanmyaewin.jpg', 'ခ်မ္းေျမ့၀င္း', 'Yangon, Myanmar																							', 'chanmyaewin@gmail.com', 'Male', '1984-01-25', '<div class=\"_5aj7 _3-8j\" style=\"display: flex; margin: 12px; font-family: system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(28, 30, 33); font-size: 12px;\"><div class=\"_4bl9\" style=\"overflow-wrap: break-word; overflow: hidden; flex: 1 0 0px; font-family: inherit;\"><div class=\"_3-8w\" style=\"margin-top: 4px; font-family: inherit;\">Translated/ Published Mark Manson\'s \"The Subtle Art of not giving a F*ck\" and Eric Weiner\'s \"The Geography of Bliss\" into Myanmar in 2018 Director of Innwa Books and Cafe and Zit Myit publishing.</div></div></div><div class=\"_5aj7 _3-8j\" style=\"display: flex; margin: 12px; font-family: system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(28, 30, 33); font-size: 12px;\"></div>'),
(7, 'image/author/akyitaw.jpg', 'အၾကည္ေတာ္', 'Yangon																							', 'akyitaw@gmail.com', 'Male', '1963-12-01', 'asdfasdfasfasdfasdfasdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE `bookdetails` (
  `bookdetails_id` int(11) NOT NULL,
  `bookdetails_isbn` varchar(255) NOT NULL,
  `bookdetails_country` varchar(255) NOT NULL,
  `bookdetails_publicationdate` varchar(255) NOT NULL,
  `bookdetails_pages` varchar(255) NOT NULL,
  `bookdetails_booksid` int(11) NOT NULL,
  `bookdetails_publishersid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `books_id` int(11) NOT NULL,
  `books_cover` text NOT NULL,
  `books_title` varchar(255) NOT NULL,
  `books_price` varchar(255) NOT NULL,
  `books_pdf` text NOT NULL,
  `books_edition` int(11) NOT NULL,
  `books_description` text NOT NULL,
  `books_authorsid` int(11) NOT NULL,
  `books_genresid` int(11) NOT NULL,
  `books_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`books_id`, `books_cover`, `books_title`, `books_price`, `books_pdf`, `books_edition`, `books_description`, `books_authorsid`, `books_genresid`, `books_status`) VALUES
(1, 'image/book/Twilightbook.jpg', 'Twilight', '30000', '', 1, '<p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">Bella Swan is a seventeen-year-old, who moves from&nbsp;<a href=\"https://en.wikipedia.org/wiki/Phoenix,_Arizona\" title=\"Phoenix, Arizona\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Phoenix, Arizona</a>&nbsp;to&nbsp;<a href=\"https://en.wikipedia.org/wiki/Forks,_Washington\" title=\"Forks, Washington\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Forks, Washington</a>&nbsp;on the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Olympic_Peninsula\" title=\"Olympic Peninsula\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Olympic Peninsula</a>&nbsp;to live with her father,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Charlie_Swan_(Twilight)\" class=\"mw-redirect\" title=\"Charlie Swan (Twilight)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Charlie</a>. Her mother,&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_Twilight_characters#Ren%C3%A9e_Dwyer\" title=\"List of Twilight characters\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Renée</a>&nbsp;is traveling with her new husband, Phil Dwyer, a minor league baseball player. Bella is admitted to Forks High School, where she befriends many of the students. A somewhat inexperienced and shy girl, Bella is dismayed by several boys competing for her attention.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">As Bella walks into the class, a fan blows her scent towards a mysterious boy named&nbsp;<a href=\"https://en.wikipedia.org/wiki/Edward_Cullen\" title=\"Edward Cullen\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Edward Cullen</a>. Bella sits next to Edward in biology class on her first day of school, but he seems repulsed by her, offending her in the process. He disappears for a few days, but warms up to Bella upon his return; their newfound relationship is interrupted after Bella is nearly struck by a van in the school parking lot. Edward saves Bella, stopping the van with only his hand.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">Bella questions Edward about how he saved her life until she hears that Edward and his family are actually&nbsp;<a href=\"https://en.wikipedia.org/wiki/Vampires\" class=\"mw-redirect\" title=\"Vampires\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">vampires</a>&nbsp;who only drink animal blood. She is told legends of the local&nbsp;<a href=\"https://en.wikipedia.org/wiki/Quileute\" title=\"Quileute\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Quileute</a>&nbsp;people by a friend named Jacob Black, who she met during a camp out. Disturbed and riddled by recurring nightmares, Bella researches about vampires. Much to her dismay, she then realizes that Edward hadn\'t come to school on the blood typing day, because he is a vampire; she compares the characteristics of the vampires in mythology to the Cullens, and finds many similarities. Convinced that he is a vampire, she finds herself in the state of bewilderment. Bella is saved by Edward again in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Port_Angeles\" class=\"mw-redirect\" title=\"Port Angeles\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Port Angeles</a>&nbsp;when she is almost attacked. Driving a silver Volvo, Edward takes Bella to dinner and then back home. As they drive, she tells him of the stories that he is a vampire. Edward says he tried to stay away, finding her scent too desirable. Over time, Edward and Bella fall in love.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">Their relationship is affected when a nomad&nbsp;<a href=\"https://en.wikipedia.org/wiki/Coven#Vampire_covens\" title=\"Coven\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">vampire coven</a>&nbsp;arrives in Forks.&nbsp;<a href=\"https://en.wikipedia.org/wiki/James_(Twilight)\" class=\"mw-redirect\" title=\"James (Twilight)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">James</a>, a tracker vampire who is intrigued by Cullens\' relationship with a human, wants to hunt Bella for sport. The Cullen family try to separate Bella and Edward, and send Bella to Phoenix to hide in a hotel. James calls and claims to be holding her mother hostage. When Bella surrenders, James attacks her. Before he can finish her, Edward and other Cullens rescue her and kill James. He still attacks the girl. Edward prevents her from becoming a vampire, and she is treated at a hospital. After they return to Forks, they go to the school prom together. Bella says that she wants to become a vampire, but Edward cannot help at the time.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">Bella\'s desire to become a vampire increases throughout the series. Edward continues to refuse as he hates being immortal, and does not want Bella to suffer the same fate.</p>													', 2, 8, 1),
(2, 'image/book/Newmooncover.jpg', 'New Moon', '50000', '', 1, '<p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">On&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bella_Swan\" title=\"Bella Swan\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Bella Swan</a>\'s eighteenth birthday,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Edward_Cullen\" title=\"Edward Cullen\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Edward Cullen</a>, the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Vampire_(Twilight)\" class=\"mw-redirect\" title=\"Vampire (Twilight)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">vampire</a>&nbsp;she loves, and his family host her a birthday party at their residence. While unwrapping a gift, Bella receives a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Paper_cut\" class=\"mw-redirect\" title=\"Paper cut\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">paper cut</a>, which causes Edward\'s adopted brother, Jasper, to be overwhelmed by her blood\'s scent, and attempt to attack Bella. Trying to protect her, Edward and the Cullens move away from&nbsp;<a href=\"https://en.wikipedia.org/wiki/Forks,_Washington\" title=\"Forks, Washington\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Forks</a>, but in an attempt to encourage Bella to move on, Edward tells her it is because he no longer loves her. With Edward\'s departure, Bella suffers severe memory loss and depression for several months.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">In the months that follow, Bella learns that thrill-seeking activities, such as motorcycle riding and cliff-diving, allow her to \"hear\" Edward\'s voice in her head through her subconscious mind. She also seeks comfort in her deepening friendship with&nbsp;<a href=\"https://en.wikipedia.org/wiki/Jacob_Black\" title=\"Jacob Black\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Jacob Black</a>, a cheerful companion who eases her pain over losing Edward. Sometime after losing Edward, Bella starts to enjoy Jacob\'s company and friendship. After spending some time with Bella, Jacob starts experiencing some unexpected and drastic changes with his mood swings, body, and personality. As Jacob undergoes a very long, painful and life-altering transformation, Bella and Charlie become concerned. A few weeks later, Bella notes that Jacob isn\'t as happy-go-lucky as he once was. She isn\'t so comfortable with Jacob\'s recent changes, and shortly thereafter, she discovers that Jacob has unwillingly become a werewolf, and that there are other tribe members who are werewolves too. Jacob and his pack protect Bella from the vampire,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Laurent_(Twilight)\" class=\"mw-redirect\" title=\"Laurent (Twilight)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Laurent</a>, who was a part of James\' coven, and also&nbsp;<a href=\"https://en.wikipedia.org/wiki/Victoria_(Twilight)\" class=\"mw-redirect\" title=\"Victoria (Twilight)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Victoria</a>, who seeks revenge for her dead mate,&nbsp;<a href=\"https://en.wikipedia.org/wiki/James_(Twilight)\" class=\"mw-redirect\" title=\"James (Twilight)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">James</a>, whom the Cullens had killed in&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/Twilight_(novel)\" class=\"mw-redirect\" title=\"Twilight (novel)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">the previous installment</a></i>. Jacob starts developing physical emotions towards Bella, but she doesn\'t feel the same after experiencing a life-changing breakup with Edward. This makes him horribly sad and envious of Edward. Jacob then saves Bella from drowning after jumping off a cliff and almost kisses her in the events following.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">Meanwhile, a series of miscommunications leads Edward to believe that Bella has committed&nbsp;<a href=\"https://en.wikipedia.org/wiki/Suicide\" title=\"Suicide\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">suicide</a>&nbsp;by jumping off a cliff. Distraught over her suspected suicide, Edward flees to&nbsp;<a href=\"https://en.wikipedia.org/wiki/Volterra,_Italy\" class=\"mw-redirect\" title=\"Volterra, Italy\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Volterra, Italy</a>&nbsp;to provoke the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Volturi\" class=\"mw-redirect\" title=\"Volturi\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Volturi</a>, vampire royalty who are capable of killing him, though they refuse, deeming his mind-reading ability to be too valuable. In contrast to Edward\'s rash reaction to the news of Bella\'s death, Alice Cullen cleverly makes a surprise visit to Bella\'s house, which overwhelms Bella. Bella asks a series of questions, and Alice tells her that she saw Bella trying to kill herself. As Alice\'s visions about Edward change rapidly, Alice and Bella are unable to clearly understand whether Edward is or will be safe. They rush to Italy to prevent Edward from revealing himself to humans so the Volturi are forced to kill him, arriving just in time to stop him. Before leaving Italy, the Volturi tell Edward that Bella, a human who knows that vampires exist, must either be killed or transformed into a vampire to protect the secret. When they return to Forks, Edward tells Bella that he has always loved her and only left Forks to protect her. She forgives him, and the Cullens vote in favor of Bella being transformed into a vampire, to Rosalie and Edward\'s dismay. However, Jacob sternly reminds Edward about an important part of their treaty: if the Cullens bite a human for any reason, the treaty is over and the wolves will attack. When Bella reminds him that it\'s none of his concern as being a vampire is what she wants, Jacob reveals it is his business as she doesn\'t understand what\'s going to be at stake for her and the Cullens. Before he can continue warning her, they hear Charlie asking Bella to get inside the house at once. Jacob apologizes to Bella once more before leaving, and the story concludes with Charlie grounding Bella for running off to Italy.</p>													', 2, 8, 1),
(3, 'image/book/Eclipse.jpg', 'Eclipse', '50000', '', 1, '<p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">The story begins with the revelation that&nbsp;<a href=\"https://en.wikipedia.org/wiki/Seattle,_Washington\" class=\"mw-redirect\" title=\"Seattle, Washington\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Seattle, Washington</a>&nbsp;is being plagued by a string of murders, which Edward suspects is caused by a new vampire that is unable to control its thirst for human blood. As Edward and Bella apply to colleges, Bella explains to Edward her desire to see her friend,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Jacob_Black\" title=\"Jacob Black\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Jacob Black</a>, a werewolf. Although Edward fears for her safety, Bella insists that neither Jacob nor his werewolf pack would ever harm her, and she begins visiting him occasionally. On one of these visits, Jacob tells Bella that he is in love with her, and wants her to choose him instead of Edward, but Bella says she just sees him as a friend. Meanwhile,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Alice_Cullen_(Twilight)\" class=\"mw-redirect\" title=\"Alice Cullen (Twilight)\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Alice Cullen</a>&nbsp;has a vision that&nbsp;<a href=\"https://en.wikipedia.org/wiki/Minor_characters_in_Twilight#Victoria\" class=\"mw-redirect\" title=\"Minor characters in Twilight\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Victoria</a>, a vampire who is hunting Bella for revenge for the death of James, has returned to Forks. Alice takes Bella away against her wishes for a sleepover. During the sleepover, Bella learns more of Rosalie\'s past that led to her eventual transformation to a vampire and her real reasons for treasuring humanity. While being a vampire is still her wish, Bella eventually agrees to rethink her decision. A few days later, Edward proposes to Bella and, despite harboring an aversion to marriage, she accepts on the condition that he will make love to her while she\'s human.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">Bella and the Cullens soon realize that the Seattle murders are being committed by an \"army\" of newborn vampires, controlled by Victoria. The Cullens join forces with the werewolf pack to combat this threat, after failing to get their longtime allies, the Denali Coven to help them. As everyone else prepares for battle, Edward, Bella and Jacob camp in the mountains, hidden during the battle, where they are later joined by&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_Twilight_characters#Seth_Clearwater\" title=\"List of Twilight characters\" style=\"color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Seth Clearwater</a>, a young wolf pack member, to wait out the fight.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">In the morning, Jacob becomes upset when he overhears Edward and Bella discussing their engagement and threatens to join the fight and get himself killed. Bella stops Jacob by kissing him, and she comes to realize that she is in love with him as well. During the battle, Victoria tracks Edward\'s scent to Bella\'s forest hiding place, and Edward is forced to fight. Edward manages to kill Victoria and her vampire army is destroyed by the Cullens. Afterwards, Bella explains to Jacob that while she loves him, her love for Edward is far greater. The book ends with Bella proceeding to tell Charlie of her intentions to marry Edward.</p><p style=\"margin: 0.5em 0px; line-height: inherit; color: rgb(34, 34, 34); font-family: sans-serif;\">The epilogue reveals that Jacob is heartbroken and has run away in his wolf form. Leah feels sympathy for him, since she had gone through a similar heartbreak with Sam, and reveals her own disgust and hatred for Bella.</p>													', 2, 8, 1),
(4, 'image/book/COB4487.jpg', 'ဆရာတို့ကိုသာလြမ္း', '', 'upload/41ChItOoNyo_Lwam.pdf', 2, '<p style=\"margin: 6px 0px; font-family: system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41);\">၁။ ေဟာေျပာပြဲေခါင္းေဆာင္ေကာင္း (သုိ့မဟုတ္) ဆရာမင္းေက်ာ္&nbsp;<br>၂။ ခ်စ္ေသာဆရာျမ (သုိ့မဟုတ္) ျမသန္းတင့္<br>၃။ မထူးျခားလွ်င္ ဘာမွ မလုပ္ခ်င္သူ (သုိ႔မဟုတ္)အေထာက္ေတာ္လွေအာင္၊&nbsp;<br>၄။ ပကာသနီက်မ္း (သုိ႔မဟုတ္) ဆရာၾကီး (ဦး) ဆန္းထြန္း (မန္းတကၠသုိလ္)&nbsp;<br>၅။ ခပ္ၾကမ္းၾကမ္းေလးေပ်ာ္တတ္သူ(သုိ့မဟုတ္) ဆရာေသာ္တာေဆြ၊&nbsp;<br>၆။ တကယ္ျပည္သူခ်စ္ေသာ အႏုပညာသည္ (သုိ့မဟုတ္) ျမတ္ေလး၊<br>၇။ ဂီတျဖင္႕ စာေပတံခါးဖြင္႕သူ (သုိ့မဟုတ္)၀င္းဦး၊&nbsp;<br>၈။ အကဲဒမစ္အႏုပညာသမား (သုိ့မဟုတ္) တကၠသုိလ္ဘုန္းႏုိင္၊</p><p style=\"margin: 6px 0px; font-family: system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41);\">စသျဖင့္</p><p style=\"margin: 6px 0px; font-family: system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41);\">ဆရာခ်စ္ဦးညဳိ ၏ စာေပသက္တမ္းတစ္ေလွ်ာက္ ပတ္သက္ခဲ႕ဖူးေသာ စာေရးဆရာ ၈ ဦးအေၾကာင္းကို ေရးသားထားျခင္းျဖစ္ပါသည္။</p><p style=\"margin: 6px 0px; font-family: system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41);\">ယခုစာအုပ္သည္ ပထမအၾကိမ္ထုတ္ေ၀ျခင္း စာအုပ္ျဖစ္ေသာေၾကာင့္ ၊ ဒုတိယအၾကိမ္ ျဖည့္စြက္ထုတ္ေ၀ျခင္းတြင္ ပါ၀င္ေသာ စႏၵရားခ်စ္ေဆြ၊ ဂီတလုလင္ေမာင္ကိုကိုႏွင့္ ၿငိမ္းေက်ာ္ေဆာင္းပါးမ်ားမပါ၀င္ပါ။</p>													', 1, 13, 0),
(5, 'image/book/000001.jpg', 'ကြ်န္မကမေခ်ာပါဘူးနွင့္ အျခားမဂၢဇင္း၀တၳဳရွည္မ်ား', '', 'upload/000001.pdf', 1, 'ကြ်န္မကမေခ်ာပါဘူးနွင့္ အျခားမဂၢဇင္း၀တၳဳရွည္မ်ား...', 5, 11, 0),
(6, 'image/book/cmw_gayumasikechin.jpg', 'ဂရုုမစိုက္ျခင္းအနုပညာ', '', 'upload/ChanMyaeWin_SubtleArt.pdf', 1, '<div class=\"summary\" style=\"line-height: 30px; margin-bottom: 20px;\"><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\">အေသးအဖြဲကိစၥေလးေတြကို အာ႐ုံထဲထည့္ ဂ႐ုစိုက္ၿပီး ေသာကပြားေနသူေတြအတြက္ ေအာင္ျမင္မႈ၊ ေက်ာ္ၾကားမႈေတြကို တန္ဖိုးအျဖစ္ သတ္မွတ္ထားတဲ့ လူေတြရဲ႕စံႏႈန္းေတြကို စိန္ေခၚလိုက္တဲ့ အေမရိကန္ႏိုင္ငံသား စာေရးဆရာရဲ႕ စာအုပ္ေကာင္းတစ္အုပ္ ျဖစ္ပါတယ္။ လတ္တေလာအြန္လိုင္းေပၚမွာ ဘယ္သူေတြ ဒီစာအုပ္ဖတ္ၿပီးၿပီလဲဆိုတာ အၿပိဳင္အဆိုင္တင္ၾကတဲ့ ပို႔စ္ေတြၾကည့္ရင္း သိႏိုင္တဲ့ နာမည္ေက်ာ္စာအုပ္ပါ။</span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\">မူရင္းစာအုပ္ရဲ႕အမည္ကThe Subtle Art of Not Giving a F*CK&nbsp; ျဖစ္ၿပီး စာေရးဆရာMark Mansonက ေရးသားထားၿပီး စာေရးဆရာ ခ်မ္းေျမ့ဝင္းက\"ဂ႐ုမစိုက္ျခင္းအႏုပညာ\"အမည္နဲ႔ ျမန္မာဘာသာကို ျပန္ဆိုထားပါတယ္။ မူရင္းစာအုပ္ဟာ စထုတ္တဲ့ႏွစ္မွာ အုပ္ေရႏွစ္သန္းခန္႔ ေရာင္းရၿပီးျဖစ္သလို ျမန္မာဘာသာျပန္စာအုပ္ကိုလည္း ျပည္တြင္းမွာ ဖတ္ရႈသူ မ်ားလြန္းတာေၾကာင့္ သုံးလအတြင္းမွာပဲ ဒုတိယအႀကိမ္ ထပ္မံပုံႏွိပ္ခဲ့ရပါတယ္။</span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\">\"ဂ႐ုမစိုက္ျခင္းအႏုပညာ\" ဆိုလို႔ ဘာေတြပဲျဖစ္ျဖစ္ မထုံတက္ေသး ေသြးေအးေအးနဲ႔ ဘယ္သူ႔ကိုမွ ဂ႐ုမစိုက္တာကို စာေရးသူက ဆိုလိုတာမ်ိဳးေတာ့ မဟုတ္ပါဘူး။</span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\">\"တကယ္က်ေတာ့ ဘာကိုမွ ဂ႐ုမစိုက္တာ မဟုတ္ဘူး။ အဟန္႔အတားေတြကိုပဲ ဂ႐ုမစိုက္တာ။ အဟန္႔အတား ေတြကို ေက်ာ္ျဖတ္ႏိုင္တာ။ လူေတြသတ္မွတ္ထားတဲ့ လူလိမၼာဆိုတဲ့ ပုံစံခြက္ထဲကေန ထြက္ရဲတာ။ ကိုယ္တန္ဖိုးထားတဲ့အရာအတြက္ ကိုယ္ထင္တာကို လုပ္ရဲတာကို ေျပာတာ။ ေၾကာက္စရာသတၱဝါေတြကို ေစ့ေစ့ၾကည့္ၿပီး လက္ခလယ္ေထာင္ျပရဲတဲ့ သတၱိမ်ိဳးကိုေျပာတာ\"လို႔Mark Manson&nbsp; က ေရးသားထားပါတယ္။ အဲဒီလို ရည္႐ြယ္ခ်က္ေကာင္းေကာင္းနဲ႔ မူရင္းစာေရးသူရဲ႕ အာေဘာ္အတိုင္း ျမန္မာဘာသာျပန္စာအုပ္ မွာလည္း အေထ့အေငါ့ေလးေတြနဲ႔ ေပါ့ေပါ့ပါးပါး ျပန္ဆိုထားတာမို႔ ဘာသာျပန္သူရဲ႕ လက္ရာက လူႀကီးလူငယ္ မေ႐ြး အႀကိဳက္ေတြ႕ၾကပါတယ္။</span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\">\"၂၀၁၇ ခုႏွစ္ ႏွစ္ကုန္ပိုင္းေလာက္မွာ ကြၽန္ေတာ့္ အေမ ဆုံးတယ္။ ကြၽန္ေတာ့္မဂၤလာေဆာင္က ၂၀၁၈ ခုႏွစ္ ႏွစ္ဆန္းပိုင္း။ အေမက မဂၤလာေဆာင္ကို ေမွ်ာ္ေနတာ။ မမီဘဲဆုံးသြားေတာ့ ကြၽန္ေတာ္ စိတ္ညစ္ခဲ့ရတယ္။ အဲဒီအခ်ိန္မွာ တိုက္တိုက္ဆိုင္ဆိုင္ ဆိုင္ကို အဲဒီစာအုပ္ေလးက ေရာက္လာတယ္\" လို႔ အင္းဝစာအုပ္ႏွင့္ ေကာ္ဖီဆိုင္ရဲ႕ဒါ႐ိုက္တာျဖစ္တဲ့ ကိုခ်မ္းေျမ့ဝင္းက ေျပာပါတယ္။</span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\">\"စာအုပ္နာမည္ကိုၾကည့္ၿပီး ထူးထူးဆန္းဆန္းျဖစ္ေနေတာ့ ဖတ္ၾကည့္မယ္ဆိုၿပီး စဖတ္ျဖစ္တယ္။ အဲဒီစာအုပ္ဖတ္လိုက္ေတာ့ လုံးဝ စိတ္ခ်မ္းသာသြားတာ မဟုတ္သည့္တိုင္ စိတ္သက္သာရာ နည္းနည္းေတာ့ ရသြားတယ္\" လို႔ သူက ဆက္ေျပာပါတယ္။</span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\">သူကိုယ္တိုင္ကလည္း ဘာသာျပန္အေတြ႕အႀကဳံလည္း မရွိခဲ့သလို စာေပလည္း ေရးသားဖူးျခင္း မရွိပါဘူး။ ခု ဒီစာအုပ္ကိုေတာ့ မူရင္းဘာသာျပန္ဆိုထားတာမ်ိဳး မရွိတဲ့အတြက္ စာေရးသူ မာ့ခ္မန္ဆန္ထံ ခြင့္ေတာင္းၿပီး ဘာသာျပန္ဆိုခဲ့ပါတယ္။ မူရင္းစာေရးသူရဲ႕ ေပါ့ေပါ့ပါးပါး ေရးသားဟန္အတိုင္း ဘာသာလိုက္ျပန္ရာမွာလည္း အခ်ိန္တစ္လသာ ယူခဲ့ရပါတယ္။</span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\">\"ဆိုရွယ္မီဒီယာေတြ ထြန္းကားလာေတာ့ ကိုယ္ဘာလုပ္လုပ္ လူ ၃၀ဝ ေလာက္က ကိုယ့္ကို ဂ႐ုစိုက္ေစာင့္ၾကည့္ေနၾကတယ္။ ကိုယ္စားတဲ့ အစားအေသာက္ကအစ လြတ္လြတ္လပ္လပ္ မစားရေတာ့ဘူး။ မြန္းက်ပ္လာတယ္။ လြန္ခဲ့တဲ့ ၁၀ ႏွစ္၊ အႏွစ္ ၂၀ ေလာက္ကထက္ ပိုၿပီးေတာ့လည္း စိတ္ဖိစီးမႈမ်ားလာတယ္။ ဒီစာအုပ္ကို ဖတ္လိုက္ေတာ့ အရာရာကို ဂ႐ုစိုက္ေနစရာမလိုေတာ့ဘူးဆိုတာ သေဘာေပါက္သြားတယ္\" လို႔ သူကေျပာပါတယ္။</span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\">ဒီေတာ့ဘဝမွာ အားသြန္ခြန္စိုက္လုပ္သင့္တာက တကယ္အဓိပၸာယ္ရွိတဲ့၊ အေရးႀကီးတဲ့အရာကို ရွာဖို႔ပဲ။ တကယ္အေရးႀကီးတဲ့အရာကို မေတြ႕ရင္ အေရးမပါတဲ့ တျခားပမႊားျပႆနာေတြနဲ႔ အခ်ိန္ကုန္သြားလိမ့္မယ္လို႔ မူရင္းစာေရးသူက စာအုပ္ထဲမွာ ေရးသားထားပါတယ္။</span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\">စာေရးသူMark Manson&nbsp; ဟာ ဘေလာ့ဂါတစ္ဦး လည္းျဖစ္သလို အင္တာနက္လုပ္ငန္းရွင္ တစ္ဦးလည္း ျဖစ္ပါတယ္။ မူရင္းစာအုပ္ကို ဘာသာစကား၂၅ မ်ိဳးထိ ျပန္ဆိုထုတ္ေဝခဲ့ၿပီးလည္း ျဖစ္ပါတယ္။</span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; line-height: 30px;\"><font color=\"#202020\" face=\"DinPro, NotoSans, Arial, sans-serif\"><span style=\"font-size: 17px;\">\"လူ ၁၀ဝ မွာ ၁၀ဝ စလုံး ေအာင္ျမင္ဖို႔ မျဖစ္ႏိုင္ပါဘူး။ မေအာင္ျမင္တဲ့လူ ၃၀ ေလာက္က စိတ္ဆင္းရဲေနရတာလည္း မဟုတ္ျပန္ဘူး။ ကိုယ္ေအာင္ျမင္ခ်င္မွ ေအာင္ျမင္မယ္။ မေအာင္ျမင္ခ်င္လည္း မေအာင္ျမင္ဘူး။ အဲဒါကို ေခါင္းထဲမွာထားၿပီး စိတ္ဖိစီးမႈေတြမ်ားေနတာ မေကာင္းဘူး။ ကိုယ္လုပ္စရာရွိတာကို မွန္မွန္ေလး ဆက္လုပ္သြားရင္ အခ်ိန္တန္ရင္ေတာ့ တစ္ခုခုျဖစ္လာမွာပါ။ စိတ္ရွည္ရွည္ထားဖို႔ပါပဲ။ စာအုပ္ကလည္း ဒီလိုသေဘာမ်ိဳး ေျပာတာပါ\" လို႔ ကိုခ်မ္းေျမ့ဝင္းက ေျပာပါတယ္။</span></font></p></div>													', 6, 14, 0),
(7, 'image/book/The_Host.jpg', 'The Host', '30000', '', 1, '<p style=\"overflow-wrap: break-word; outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(40, 40, 40); font-family: &quot;Alegreya Sans&quot;, sans-serif; font-size: 18px;\"><i style=\"overflow-wrap: break-word; outline: none;\">Melanie Stryder refuses to fade away.</i></p><p style=\"overflow-wrap: break-word; outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(40, 40, 40); font-family: &quot;Alegreya Sans&quot;, sans-serif; font-size: 18px;\">Our world has been invaded by an unseen enemy. Humans become hosts for these invaders, their minds taken over while their bodies remain intact and continue their lives apparently unchanged. Most of humanity has succumbed.</p><p style=\"overflow-wrap: break-word; outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(40, 40, 40); font-family: &quot;Alegreya Sans&quot;, sans-serif; font-size: 18px;\">When Melanie, one of the few remaining “wild” humans is captured, she is certain it is her end. Wanderer, the invading “soul” who has been given Melanie’s body, was warned about the challenges of living inside a human: the overwhelming emotions, the glut of senses, the too vivid memories. But there was one difficulty Wanderer didn’t expect: the former tenant of her body refusing to relinquish possession of her mind.<br style=\"overflow-wrap: break-word; outline: none;\">Wanderer probes Melanie’s thoughts, hoping to discover the whereabouts of the remaining human resistance. Instead, Melanie fills Wanderer’s mind with visions of the man Melanie loves—Jared, a human who still lives in hiding. Unable to separate herself from her body’s desires, Wanderer begins to yearn for a man she has been tasked with exposing. When outside forces make Wanderer and Melanie unwilling allies, they set off on a dangerous and uncertain search for the man they both love.</p>													', 2, 8, 1),
(8, 'image/book/BreakingDaw.jpg', 'Breaking Dawn', '90000', '', 1, '<p style=\"overflow-wrap: break-word; outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(40, 40, 40); font-family: &quot;Alegreya Sans&quot;, sans-serif; font-size: 18px;\">When you loved the one who was killing you, it left you no options. How could you run, how could you fight, when doing so would hurt that beloved one? If your life was all you had to give, how could you not give it? If it was someone you truly loved?</p><p style=\"overflow-wrap: break-word; outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(40, 40, 40); font-family: &quot;Alegreya Sans&quot;, sans-serif; font-size: 18px;\">To be irrevocably in love with a vampire is both fantasy and nightmare woven into a dangerously heightened reality for Bella Swan. Pulled in one direction by her intense passion for Edward Cullen, and in another by her profound connection to werewolf Jacob Black, a tumultuous year of temptation, loss, and strife have led her to the ultimate turning point. Her imminent choice to either join the dark but seductive world of immortals or to pursue a fully human life has become the thread from which the fates of two tribes hangs.</p><p style=\"overflow-wrap: break-word; outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(40, 40, 40); font-family: &quot;Alegreya Sans&quot;, sans-serif; font-size: 18px;\">Now that Bella has made her decision, a startling chain of unprecedented events is about to unfold with potentially devastating, and unfathomable, consequences. Just when the frayed strands of Bella’s life-first discovered in Twilight, then scattered and torn in New Moon and Eclipse-seem ready to heal and knit together, could they be destroyed… forever?</p><p style=\"overflow-wrap: break-word; outline: none; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(40, 40, 40); font-family: &quot;Alegreya Sans&quot;, sans-serif; font-size: 18px;\">The astonishing, breathlessly anticipated conclusion to the Twilight Saga, Breaking Dawn illuminates the secrets and mysteries of this spellbinding romantic epic that has entranced millions.</p>													', 2, 8, 1),
(9, 'image/book/TheMister-184x301.png', 'The Mister', '50000', '', 1, '<p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px; background-color: rgb(249, 249, 249);\"><span style=\"color: rgb(43, 43, 43); font-weight: bold;\">London, 2019. Life has been easy for Maxim Trevelyan.</span>&nbsp;With his good looks, aristocratic connections, and money, he’s never had to work and he’s rarely slept alone. But all that changes when tragedy strikes and Maxim inherits his family’s noble title, wealth, and estates, and all the responsibility that entails. It’s a role he’s not prepared for and one that he struggles to face.</p><p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px; background-color: rgb(249, 249, 249);\">But his biggest challenge is fighting his desire for an unexpected, enigmatic young woman who’s recently arrived in England, possessing little more than a dangerous and troublesome past.&nbsp; Reticent, beautiful, and musically gifted, she’s an alluring mystery, and Maxim’s longing for her deepens into a passion that he’s never experienced and dares not name. Just who is Alessia Demachi? Can Maxim protect her from the malevolence that threatens her? And what will she do when she learns that he’s been hiding secrets of his own?</p><p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px; background-color: rgb(249, 249, 249);\">From the heart of London through wild, rural Cornwall to the bleak, forbidding beauty of the Balkans,&nbsp;<em>The Mister</em>&nbsp;is a roller-coaster ride of danger and desire that leaves the reader breathless to the very last page.</p>													', 4, 1, 1),
(10, 'image/book/FiftyShadesOfGrey-220x360.png', 'Fifty Shades of Grey', '50000', '', 1, '<p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px; background-color: rgb(249, 249, 249);\"><span style=\"color: rgb(43, 43, 43); font-weight: bold;\">When literature student Anastasia Steele</span>&nbsp;goes to interview young entrepreneur Christian Grey, she encounters a man who is beautiful, brilliant, and intimidating. The unworldly, innocent Ana is startled to realize she wants this man and, despite his enigmatic reserve, finds she is desperate to get close to him. Unable to resist Ana’s quiet beauty, wit, and independent spirit, Grey admits he wants her, too—but on his own terms.</p><p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px; background-color: rgb(249, 249, 249);\">Shocked yet thrilled by Grey’s singular erotic tastes, Ana hesitates. For all the trappings of success—his multinational businesses, his vast wealth, his loving family—Grey is a man tormented by demons and consumed by the need to control. When the couple embarks on a daring, passionately physical affair, Ana discovers Christian Grey’s secrets and explores her own dark desires.</p><p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px; background-color: rgb(249, 249, 249);\">Erotic, amusing, and deeply moving, the Fifty Shades Trilogy is a tale that will&nbsp;<i>obsess you, possess you, and stay with you forever.</i></p>													', 4, 1, 1),
(11, 'image/book/FiftyShadesDarker-220x360.png', 'Fifty Shades of Darker', '30000', '', 1, '<p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px; background-color: rgb(249, 249, 249);\"><span style=\"color: rgb(43, 43, 43); font-weight: bold;\">Daunted by the singular&nbsp;tastes and dark&nbsp;secrets</span>&nbsp;of the beautiful, tormented young entrepreneur Christian Grey, Anastasia Steele has broken off their relationship to start a new career with a Seattle publishing house.</p><p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px; background-color: rgb(249, 249, 249);\">But desire for Christian still dominates her every waking thought, and when he proposes a new arrangement, Anastasia cannot resist. They rekindle their searing sensual affair, and Anastasia learns more about the harrowing past of her damaged, driven and demanding Fifty Shades.</p><p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; padding: 0px; color: rgb(87, 87, 87); font-size: 16px; background-color: rgb(249, 249, 249);\">While Christian wrestles with his inner demons, Anastasia must confront the anger and envy of the women who came before her, and make the most important decision of her life.</p>													', 4, 8, 1),
(12, 'image/book/FiftyShadesFreed-220x360.png', 'Fifty Shades of Freed', '90000', '', 1, '<p> When unwordly student Anastasia Steele first encountered the driven and dazzling young entrepreneur Christian Grey it sparked a sensual affair that changed both of their lives irrevocably. Shocked, intrigued, and, ultimately, repelled by Christian’s singular erotic tastes, Ana demands a deeper commitment. Determined to keep her, Christian agrees.\r\n\r\nNow, Ana and Christian have it all—love, passion, intimacy, wealth, and a world of possibilities for their future. But Ana knows that loving her Fifty Shades will not be easy, and that being together will pose challenges that neither of them would anticipate. Ana must somehow learn to share Christian’s opulent lifestyle without sacrificing her own identity. And Christian must overcome his compulsion to control as he wrestles with the demons of a tormented past.\r\n\r\nJust when it seems that their strength together will eclipse any obstacle, misfortune, malice, and fate conspire to make Ana’s deepest fears turn to reality.</p>', 4, 8, 1),
(17, 'image/book/COB9746.jpg', 'အခ်စ္သာအမွန္တရားျဖစ္ရင္ ကြၽန္ေတာ္မွားေနတာၾကာျပီ', '', 'upload/AKyiTaw_IfLoveisTrue.pdf', 1, '<span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif;\">My Old Mistake for True Love</span>', 7, 15, 0),
(18, 'image/book/01.png', 'ရွင့္ကိုမုန္းတာ ၁၂ ခါ', '', 'upload/shinkomhonetar12khar.pdf', 1, 'ရွင့္ကိုမုန္းတာ ၁၂ ခါ', 7, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genres_id` int(11) NOT NULL,
  `genres_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genres_id`, `genres_name`) VALUES
(1, 'Fantasy'),
(2, 'Drama'),
(3, 'Accounting'),
(4, 'IT & Programming'),
(5, 'Engineering'),
(6, 'Marketing'),
(7, 'Business'),
(8, 'Romance'),
(9, 'Comic'),
(10, 'Religion'),
(11, 'Novel'),
(12, 'History'),
(13, 'Knowledge'),
(14, 'Translation'),
(15, 'Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `libraries_id` int(11) NOT NULL,
  `libraries_name` varchar(255) NOT NULL,
  `libraries_logo` varchar(255) NOT NULL,
  `libraries_cover` text NOT NULL,
  `libraries_gallery` text NOT NULL,
  `libraries_address` text NOT NULL,
  `libraries_phno` varchar(255) NOT NULL,
  `libraries_day` varchar(255) NOT NULL,
  `libraries_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`libraries_id`, `libraries_name`, `libraries_logo`, `libraries_cover`, `libraries_gallery`, `libraries_address`, `libraries_phno`, `libraries_day`, `libraries_time`) VALUES
(1, 'Universities\' Central Library', 'image/library/logo/mail_logo.jpg', 'image/library/cover/ucl_cover.jpg', '', 'Sagaing Lane, Yangon											', '01 534 979', 'Monday - Saturday', '9:00 AM- 6:00 PM'),
(2, 'National Library (Yangon)', 'image/library/logo/national_library_of_myanmar_cover.jpg', 'image/library/cover/national_library_of_myanmar_cover.jpg', '', 'No 85, Thiri Mingalar Street, Mayangone Tsp, Yangon											', '01 660 387', 'Monday - Saturday', '8:00 AM- 5:00 PM'),
(3, 'American Center (Yangon)', 'image/library/logo/American_Center_Yangon.jpg', 'image/library/cover/american_center_cover.jpg', '', 'Corner of University Avenue Road and Inya Road, Kamayut Township											', '01 934 5490', 'Monday - Saturday', '9:00 AM- 4:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderdetails_id` int(11) NOT NULL,
  `orderdetails_voucherno` varchar(255) NOT NULL,
  `orderdetails_total` varchar(255) NOT NULL,
  `orderdetails_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderdetails_id`, `orderdetails_voucherno`, `orderdetails_total`, `orderdetails_status`) VALUES
(3, 'uAvpr', '90000', 0),
(4, 'wlceW', '90000', 0),
(5, 'crpgw', '90000', 1),
(6, 'xnVqG', '90000', 0),
(7, 'HjDqO', '90000', 0),
(8, 'XHTEP', '130000', 0),
(9, 'LYSWh', '90000', 0),
(10, '8LMe6', '110000', 0),
(11, 'gNVMH', '150000', 1),
(12, 'f5aXR', '150000', 0),
(13, 'kWlnQ', '130000', 1),
(14, '3NnD0', '150000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `orders_voucherno` varchar(255) NOT NULL,
  `orders_qty` int(11) NOT NULL,
  `orders_date` date NOT NULL,
  `orders_bookid` int(11) NOT NULL,
  `orders_userid` int(11) NOT NULL,
  `orders_status` int(11) NOT NULL,
  `orders_createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `orders_voucherno`, `orders_qty`, `orders_date`, `orders_bookid`, `orders_userid`, `orders_status`, `orders_createdat`) VALUES
(2, 'uAvpr', 1, '2019-06-06', 11, 3, 0, '2019-06-06 00:15:53'),
(3, 'uAvpr', 2, '2019-06-06', 7, 3, 0, '2019-06-06 00:15:53'),
(4, 'wlceW', 1, '2019-06-06', 11, 3, 0, '2019-06-06 00:15:53'),
(5, 'wlceW', 2, '2019-06-06', 7, 3, 0, '2019-06-06 00:15:53'),
(6, 'crpgw', 1, '2019-06-06', 11, 3, 0, '2019-06-06 00:15:53'),
(7, 'crpgw', 2, '2019-06-06', 7, 3, 0, '2019-06-06 00:15:53'),
(8, 'xnVqG', 1, '2019-06-06', 11, 3, 0, '2019-06-06 00:15:53'),
(9, 'xnVqG', 2, '2019-06-06', 7, 3, 0, '2019-06-06 00:15:53'),
(10, 'HjDqO', 1, '2019-06-06', 11, 3, 0, '2019-06-06 00:15:53'),
(11, 'HjDqO', 2, '2019-06-06', 7, 3, 0, '2019-06-06 00:15:53'),
(12, 'XHTEP', 2, '2019-06-06', 3, 3, 0, '2019-06-06 00:15:53'),
(13, 'XHTEP', 1, '2019-06-06', 1, 3, 0, '2019-06-06 00:15:53'),
(14, 'LYSWh', 1, '2019-06-06', 12, 3, 0, '2019-06-06 00:15:53'),
(15, '8LMe6', 2, '2019-06-06', 1, 3, 0, '2019-06-06 00:15:53'),
(16, '8LMe6', 1, '2019-06-06', 3, 3, 0, '2019-06-06 00:15:53'),
(17, 'gNVMH', 1, '2019-06-06', 10, 3, 0, '2019-06-06 00:15:53'),
(18, 'gNVMH', 2, '2019-06-06', 3, 3, 0, '2019-06-06 00:15:53'),
(19, 'f5aXR', 2, '2019-06-06', 3, 3, 0, '2019-06-06 00:15:53'),
(20, 'f5aXR', 1, '2019-06-06', 10, 3, 0, '2019-06-06 00:15:53'),
(21, 'kWlnQ', 2, '2019-06-07', 9, 2, 0, '2019-06-07 00:21:42'),
(22, 'kWlnQ', 1, '2019-06-07', 11, 2, 0, '2019-06-07 00:21:42'),
(23, '3NnD0', 1, '2019-06-07', 8, 3, 0, '2019-06-07 00:22:26'),
(24, '3NnD0', 1, '2019-06-07', 7, 3, 0, '2019-06-07 00:22:26'),
(25, '3NnD0', 1, '2019-06-07', 1, 3, 0, '2019-06-07 00:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `publishers_id` int(11) NOT NULL,
  `publishers_name` varchar(255) NOT NULL,
  `publishers_logo` text NOT NULL,
  `publishers_founded` varchar(255) NOT NULL,
  `publishers_founder` varchar(255) NOT NULL,
  `publishers_countryofregion` varchar(255) NOT NULL,
  `publishers_headquarters` varchar(255) NOT NULL,
  `publishers_website` varchar(255) NOT NULL,
  `publishers_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `requestbooks`
--

CREATE TABLE `requestbooks` (
  `requestbooks_id` int(11) NOT NULL,
  `requestbooks_title` varchar(255) NOT NULL,
  `requestbooks_author` varchar(255) NOT NULL,
  `requestbooks_description` text NOT NULL,
  `requestbooks_date` date NOT NULL,
  `requestbooks_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requestbooks`
--

INSERT INTO `requestbooks` (`requestbooks_id`, `requestbooks_title`, `requestbooks_author`, `requestbooks_description`, `requestbooks_date`, `requestbooks_userid`) VALUES
(1, 'ခ်စ္သူနဲ႕ တစ္မိနစ္ တစ္စကၠန့္...', 'လေရာင္က်ဴးရင့္', 'စာေရးဆရာ လေရာင္က်ဴးရင့္ ရဲ့ . ခ်စ္သူနဲ႕ တစ္မိနစ္ တစ္စကၠန့္... ေလးတင္ေပးပါ။', '2019-06-06', 3),
(2, 'အတုမရွိစည္ေတာ္', ' မင္းျမတ္သူရ', 'စာေရးဆရာ မင္းျမတ္သူရ ရဲ့ အတုမရွိစည္ေတာ္ ေလးတင္ေပးပါ', '2019-06-06', 3),
(3, 'ငါဟာမင္းအတြက္', 'သ်ွင္မ', 'လူေတြရဲ႕ဘဝမွာ ကိုယ္လည္း ဖန္တီးခဲ့တဲ့ အျပစ္အနာအဆာ မဟုတ္ပါဘဲ ဒီ့အတြက္ေၾကာင့္ပဲ အႏွိမ္ခံဘဝနဲ႔ ရပ္တည္႐ွင္သန္ေနရင္ျခင္းက ရင္နာစရာေကာင္းလွပါတယ္။ ‘သ႑ာန္’ ဆိုတဲ့ လူငယ္ေလးတစ္ေယာက္ဟာလည္း ဘဝကို အဲဒီလို နည္းနဲ႔ ရွင္သန္ေနရသူပါ။ “အတြက္”ကေတာ့ မိတဆိုးသမီးေလးအျဖစ္ အလိုလိုက္ခံရတတ္တဲ့သူေတြရဲ႕ ထံုးစံအတိုင္း အရာ ရာကို တစ္ဖက္သတ္လုပ္တတ္တဲ့ အက်င့္စ႐ိုက္နဲ႔ ေကာင္မေလးပါ။ ဒီလိုလူငယ္ႏွစ္ဦးဟာ မထင္မွတ္ဘဲ ကေတာက္ကဆျဖစ္မႈေတြနဲ႔ ဆံုေတြ႕ၾကရတဲ့အခါ ‘အတြက္’ ကေတာ့ သူ႔စ႐ိုက္အတုိင္း တစ္ဖက္စီးနင္းေပါ့။ သ႑ာန္ကလည္း ဘဝမွာ အရာရာကို မ်ိဳသိပ္ငံု႔ခံလာခဲ့တဲ့ အက်င့္အတုိင္းပဲ ၿငိမ္သက္တိတ္ဆိတ္လို႔။ ဒါေပမယ့္ သ႑ာန္ရဲ႕ ရင္ထဲမွာေတာ့ ၿငိမ္သက္ တိတ္ဆိတ္ျခင္းမ႐ွိတဲ့ လိႈင္းတစ္ခုက အဲဒီအခ်ိန္မွာ ျဖတ္သန္း ႐ိုက္ခတ္လိုက္ပါေတာ့တယ္။ အဲဒါကေတာ့ အတြက္ကို ခ်စ္မိသြားတဲ့ ခ်စ္ျခင္းပါ။ ဒီဇာတ္လမ္းမွာ ထိုသို႔ အစပ်ိဳးမႈေတြနဲ႔ ဇာတ္ကြက္ကို ဖန္တီးထားရင္း ဘယ္သူဟာ ဘယ္သူအတြက္ ျဖစ္မွာလဲဆိုတဲ့ သ႐ုပ္ေဖာ္ဖြဲ႕ႏြဲ႕မႈက ထိမိလွပါတယ္။ ၿပီးေတာ့ ဒီဇာတ္လမ္းထဲက ကြယ္ဝွက္ထားတဲ့ အေၾကာင္းအရာတစ္ခ်ိဳ႕ကလည္း ဖတ္နဲ႔ရင္းနဲ႔ပဲ ဇာတ္လမ္းကို တစ္ဆစ္ခ်ိဳးေျပာင္းလဲသြားေစမွာမို႔ စာဖတ္သူတို႔ အႀကိဳက္ေတြ႕ေစမွာ ျဖစ္ေၾကာင္း ညႊန္းဆိုလိုက္ရပါတယ္။', '2019-06-06', 3),
(4, 'သုုိ႔ .. ခ်စ္သူ', 'ဗ်ဴး', 'မဟာေသြး၊ မဟာမ်ိဳးဆက္ကို ထိန္းသိမ္းလိုတဲ့ မိသားစုႀကီးထဲက တစ္ဦးတည္းေသာ ေယာက္်ားတစ္ေယာက္ဟာ မ်ိဳးရိုးတူ ထိမ္းျမားလက္ထပ္ျခင္းကို မိဘေတြရဲ႕စီမံမႈနဲ႔ လုပ္ေဆာင္ခဲ့ေပမယ့္ သာယာေပ်ာ္ရႊင္တဲ့ အိမ္ေထာင္တစ္ခု ျဖစ္မလာခဲ့သလို၊ မ်ိဳးဆက္ေသြး ရ႐ွိဖို႔ကလည္း ေမွ်ာ္လင့္ခ်က္ေဝးခဲ့ရပါတယ္။ သို႔ေပမဲ့ မဟာေသြးကို မ်ိဳးဆက္ပြားေစမယ့္သူကေတာ့ ျပင္ပမွာ အေပ်ာ္႐ွာရင္း ေမွ်ာ္လင့္မထားတဲ့ မ်ိဳးဆက္ေသြးေတြ ျဖစ္လာေစခဲ့ပါတယ္။ အဲဒီမ်ိဳးဆက္ေသြးေတြဟာ မတူညီတဲ့ ေမြးဖြားမႈကေန အင္မတန္ကို လွပတဲ့ မိန္းမပ်ိဳငါးဦးကို ေပၚေပါက္လာေစျပန္ပါတယ္။ အတိတ္ဇာတ္ေၾကာင္းအသီးသီးနဲ႔ ဒီမိန္းမပ်ိဳငါးဦးဆီကို “သုိ႔ ..ခ်စ္ သူ” လို႔ ရည္ညႊန္းတဲ့ စာေတြ ေရာက္ရွိလာတဲ့အခါမွာ …. ။ ဆန္းၾကယ္တဲ့ ဇာတ္လမ္းေဖာ္က်ဴးမႈနဲ႔ စိတ္ဝင္စားဖြယ္ရသကို ေပးစြမ္းမယ့္ ဗ်ဴးရဲ႕ “သို႔ …ခ်စ္သူ” ပဲျဖစ္ပါတယ္။ ဝန္ဇင္းပရိသတ္ႀကီးလည္း ႀကိဳက္ႏွစ္သက္မွာ အေသအခ်ာပါပဲ။', '2019-06-07', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_photo` text NOT NULL,
  `users_name` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL,
  `users_password` varchar(255) NOT NULL,
  `users_gender` varchar(20) NOT NULL,
  `users_phno` varchar(255) NOT NULL,
  `users_address` text NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_photo`, `users_name`, `users_email`, `users_password`, `users_gender`, `users_phno`, `users_address`, `role`) VALUES
(1, 'image/user/admin.jpg', 'Admin', 'admin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Female', '0987654321', 'Yangon, Myanmar', 'admin'),
(2, 'image/user/flora.jpg', 'Flora Brooks', 'flora@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Female', 'image/user/flora.jpg', 'Yangon, Myanmar', 'user'),
(3, 'image/user/chanmyaewin.jpg', 'John', 'john@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Male', '0987654321', '														Yangon, Myanmar									 	\r\n								 	\r\n								 	\r\n						', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authors_id`);

--
-- Indexes for table `bookdetails`
--
ALTER TABLE `bookdetails`
  ADD PRIMARY KEY (`bookdetails_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`books_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genres_id`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`libraries_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderdetails_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`publishers_id`);

--
-- Indexes for table `requestbooks`
--
ALTER TABLE `requestbooks`
  ADD PRIMARY KEY (`requestbooks_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `authors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bookdetails`
--
ALTER TABLE `bookdetails`
  MODIFY `bookdetails_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `books_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `libraries_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderdetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `publishers_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requestbooks`
--
ALTER TABLE `requestbooks`
  MODIFY `requestbooks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
