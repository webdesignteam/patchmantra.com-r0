-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2025 at 03:46 AM
-- Server version: 5.7.44
-- PHP Version: 8.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hhcl_patchmantra`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_routes`
--

CREATE TABLE `app_routes` (
  `app_routes_id` int(11) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `controller` varchar(225) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `pagesgroup_id` int(11) DEFAULT NULL,
  `type` enum('original','redirect') NOT NULL DEFAULT 'original',
  `created_by` varchar(50) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_routes`
--

INSERT INTO `app_routes` (`app_routes_id`, `slug`, `controller`, `page_id`, `pagesgroup_id`, `type`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'blog/what-is-patch-therapy-a-complete-beginners-guide-to-transdermal-patches', 'Home/blog_details/1', 1, 2, 'original', 'MSADMIN', '2025-10-15 17:22:16', 'MSADMIN', '2025-10-15 17:22:16'),
(2, 'blog/transdermal-patches-vs-pills-for-pain-relief', 'Home/blog_details/2', 2, 2, 'original', 'MSADMIN', '2025-10-15 17:54:17', 'MSADMIN', '2025-10-15 17:54:17'),
(3, 'blog/every-cigarette-counts-smoking-risks-quitting-guide', 'Home/blog_details/3', 3, 2, 'original', 'MSADMIN', '2025-10-15 18:18:32', 'MSADMIN', '2025-10-15 18:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `app_routes_history`
--

CREATE TABLE `app_routes_history` (
  `app_routes_id_history` int(11) NOT NULL,
  `app_routes_id` int(11) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `controller` varchar(225) NOT NULL,
  `page_id` int(11) NOT NULL,
  `pagesgroup_id` int(11) NOT NULL,
  `type` enum('original','redirect') NOT NULL DEFAULT 'original',
  `reason` varchar(100) NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_routes_history`
--

INSERT INTO `app_routes_history` (`app_routes_id_history`, `app_routes_id`, `slug`, `controller`, `page_id`, `pagesgroup_id`, `type`, `reason`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 1, 'blog/what-is-patch-therapy-a-complete-beginners-guide-to-transdermal-patches', 'Home/blog_details/1', 1, 2, 'original', 'New Entry', 'MSADMIN', '2025-10-15 17:22:16', 'MSADMIN', '2025-10-15 17:22:16'),
(2, 2, 'blog/transdermal-patches-vs-pills-for-pain-relief', 'Home/blog_details/2', 2, 2, 'original', 'New Entry', 'MSADMIN', '2025-10-15 17:54:17', 'MSADMIN', '2025-10-15 17:54:17'),
(3, 3, 'blog/every-cigarette-counts-smoking-risks-quitting-guide', 'Home/blog_details/3', 3, 2, 'original', 'New Entry', 'MSADMIN', '2025-10-15 18:18:32', 'MSADMIN', '2025-10-15 18:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `blog_title` varchar(300) DEFAULT NULL,
  `blog_date` datetime DEFAULT NULL,
  `blog_ather` text,
  `blog_short_description` varchar(500) DEFAULT NULL,
  `blog_long_description_1` longtext,
  `blog_long_description_2` longtext,
  `blog_long_description_3` longtext,
  `blog_image_1` varchar(225) DEFAULT NULL,
  `blog_image_2` varchar(225) DEFAULT NULL,
  `blog_image_3` varchar(225) DEFAULT NULL,
  `blog_image_1_alt` varchar(225) DEFAULT NULL,
  `blog_image_2_alt` varchar(225) DEFAULT NULL,
  `blog_image_3_alt` varchar(225) DEFAULT NULL,
  `blog_content_alignment` enum('Left','Right','Center') NOT NULL DEFAULT 'Center',
  `blog_cta_image` varchar(100) DEFAULT NULL,
  `blog_cta_link` varchar(100) DEFAULT NULL,
  `blog_cta_alt` varchar(100) DEFAULT NULL,
  `blog_cta_status` enum('1001','1002') DEFAULT NULL,
  `blog_read_time` int(11) DEFAULT NULL,
  `blog_status` enum('1001','1002') DEFAULT '1002',
  `blog_archive_status` enum('1001','1002') NOT NULL DEFAULT '1001',
  `blog_created_on` datetime NOT NULL,
  `blog_created_by` varchar(50) NOT NULL,
  `blog_updated_on` datetime DEFAULT NULL,
  `blog_updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `page_id`, `blog_title`, `blog_date`, `blog_ather`, `blog_short_description`, `blog_long_description_1`, `blog_long_description_2`, `blog_long_description_3`, `blog_image_1`, `blog_image_2`, `blog_image_3`, `blog_image_1_alt`, `blog_image_2_alt`, `blog_image_3_alt`, `blog_content_alignment`, `blog_cta_image`, `blog_cta_link`, `blog_cta_alt`, `blog_cta_status`, `blog_read_time`, `blog_status`, `blog_archive_status`, `blog_created_on`, `blog_created_by`, `blog_updated_on`, `blog_updated_by`) VALUES
(1, 1, 'What is Patch Therapy? A Complete Beginner’s guide to transdermal patches', '2025-09-16 17:21:16', 'MSADMIN', 'Patch therapy is all about convenience and care ensuring a pain-free, pill free journey.', '<h5>A gentle solution with powerful benefits.</h5>\n                        <p>Patch therapy is all about convenience and care ensuring a pain-free, pill free journey. Transdermal patches, in simple terms, are medicated skin patches that contain a precise amount of active ingredients—whether medicine, vitamins, or skin-enhancing compounds. These ingredients are absorbed through the layers of the skin in a controlled and steady manner. From easing discomfort and pain to improving skin health, patch therapy powered by transdermal technology can deliver effective results through simple patch.</p>\n                        <h5>Common Uses of Transdermal Patches: One patch endless benefit</h5>\n                        <p>Simple to use and gentle on the body, transdermal patches have found their place in modern wellness. From pain and neurological support to hormonal balance and natural remedies, there\'s a patch for just about every concern.</p>\n                        <ul>\n                            <li>\n                                <strong>Severe Pain:</strong>\n                                <p>In individuals with shoulder pain, back pain, leg pain, and other chronic pain conditions certain pain relief patches can ease the discomfort and pain with minimal effort.</p>\n                            </li>\n                            <li>\n                                <strong>Mild to Moderate pain:</strong>\n                                <p>Natural ingredients such as like menthol, camphor, or other herbal extracts, Herbal Pain Relief Patches can ease your pain naturally.</p>\n                            </li>\n                            <li>\n                                <strong>Smoking Cessation:</strong>\n                                <p>Effective nicotine patches with its high success rates are a reliable option in individuals with chronic smokers. They help them quit this harmful habit and overcome the withdrawal symptoms or a strong urge to smoke again.</p>\n                            </li>\n                            <li>\n                                <strong>Hormonal imbalances:</strong>\n                                <p>Safe hormonal patches ensure consistent results in menopausal women to improve hormonal concerns by delivering certain hormones such as oestrogen or progesterone.</p>\n                            </li>\n                            <li>\n                                <strong>Neurological Concerns:</strong>\n                                <p>Certain neurological transdermal patches are designed to improve individuals with neurological conditions like Alzheimer\'s disease, depression or Attention Deficit Hyperactivity disorder (ADHD) to improve cognitive (memory concerns) function while minimizing gastrointestinal side effects common with oral drugs.</p>\n                            </li>\n                            <li>\n                                <strong>Motion Sicknes:</strong>\n                                <p>Certain transdermal patches Containing scopolamine drug or similar compounds, prevent nausea and vomiting caused due to motion sickness.</p>\n                            </li>\n                        </ul>\n                        <div class=\"Smarter_Than_a_Pill row\">\n                            <div class=\"Smarter_Than_a_Pill_details col-md-8\">\n                                <h5>Smarter Than a Pill: How Transdermal Patches Simplify Healing</h5>\n                                <p>When you think of a pill, you worry about the dosage or number of pills and so missing a dose or taking the wrong dose can affect your recovery. That’s where transdermal patches offer a smarter alternative as they are designed for controlled drug release mechanism, in simple terms- When applied to the skin, the patch slowly diffuses the active ingredients into your through the skin layers and into the bloodstream over time, reaching the target site effectively, without the need for multiple doses and worry about side effectives due to over dose. </p>\n                            </div>\n                            <img loading=\"eager\" class=\"w-100 blog_sub_img col-md-4\"\n							src=\"https://www.patchmantra.com/uploads/blog/blog_inner_img1.png?Version=<?php echo Version; ?>\"\n							class=\"blog_inner_img1\" alt=\"\" />\n                        </div>\n                        <div class=\"explore_products\">\n                            <h5>Ready to switch to smarter, simpler relief? Explore our products and find the patch that fits your needs.</h5>\n							<a class=\"primary_btn\" href=\"https://www.patchmantra.com/explore-our-patches\">Explore Our Patches</a>							\n                        </div>\n                        <h5>Who Should Avoid Transdermal Patches?</h5>\n                        <p>While transdermal patches are safe and effective solutions for many individuals, they may not be safe for everyone. Therefore, you must Avoid using if you have any history of allergic reactions, skin problems like psoriasis, eczema, or dry, scaly skin and in pregnancy cases.</p>\n                        <h5>Unlocking the Benefits: Who Should Try Patch Therapy?</h5>\n                        <p>Patch therapy is a simple and effective option, ideal for Individuals</p>\n                        <ul>\n                            <li>Who find swallowing pills as challenging task (Children or elderly)</li>\n                            <li>Who need medication every day</li>\n                            <li>Preferring herbal or natural treatments over tablets or pills</li>\n                            <li>Where oral or IV therapy is quite difficult due to their existing illness (digestive or other issues)</li>\n                        </ul>\n                        <div class=\"background\">\n                            <h5>If you or your loved ones identify with any of these, patch therapy might be the perfect fit for you.</h5>\n                        </div>\n                        <h5>How to Apply a Transdermal Patch: 3 Simple Steps to Make Your Patch Work Its Best</h5>\n                        <p>It’s important to remember that applying a patch isn’t just about sticking it anywhere—it needs to be used exactly as recommended on the packaging. Before a patch can work its magic, it needs to be applied the right way. A little care goes a long way—clean skin, the right spot, and firm pressure are all it takes to ensure your patch delivers steady, effective relief. Follow these simple steps to make sure your patch stays secure and does its job—no slips, no stress.</p>\n                        <h5>Stick It Right, Stick It Tight:</h5>\n                        <div class=\"stick_right_section\">\n                            <div class=\"row\">\n                                <div class=\"col-md-4\">\n                                    <div class=\"box_color bg1\">\n                                        <div>\n                                            <h6>Step 1:</h6>\n                                        <p>Make sure to wash your hands before applying or replacing the patch Wash the skin with soap and water, then pat it dry before applying the patch. But avoid the use of lotion or oil-they can stop the patch from sticking or working properly.</p>\n                                        </div>\n                                        <img loading=\"eager\" class=\"w-100 blog_img\"\n                                        src=\"https://www.patchmantra.com/uploads/blog/blog_inner_img12.png?Version=<?php echo Version; ?>\"\n                                        class=\"blog_inner_img1\" alt=\"\" />\n                                    </div>\n                                </div>\n                                <div class=\"col-md-4\">\n                                    <div class=\"box_color bg2\">\n                                        <div>\n                                            <h6>Step 2:</h6>\n                                        <p>Apply a patch at the right spot i.e. smooth, hairless areas like your upper arm, back, or thigh) & the areas with injury or cuts</p>\n                                        </div>\n                                        <img loading=\"eager\" class=\"w-100 blog_img\"\n                                        src=\"https://www.patchmantra.com/uploads/blog/blog_inner_img13.png?Version=<?php echo Version; ?>\"\n                                        class=\"blog_inner_img1\" alt=\"\" />\n                                    </div>\n                                </div>\n                                <div class=\"col-md-4\">\n                                    <div class=\"box_color bg3\">\n                                        <div>\n                                            <h6>Step 3:</h6>\n                                        <p>Press the patch for at least 30 seconds so that its stick well and stays in place without falling off. </p>\n                                        </div>\n                                        <img loading=\"eager\" class=\"w-100 blog_img\"\n                                        src=\"https://www.patchmantra.com/uploads/blog/blog_inner_img14.png?Version=<?php echo Version; ?>\"\n                                        class=\"blog_inner_img1\" alt=\"\" />\n                                    </div>\n                                </div>\n                            </div>\n                        </div>\n                        <div class=\"note\">\n                            <h6>Note:</h6>\n                            <p>Remember excessive heat can release the medication too quickly affecting its effectiveness, therefore avoid hot showers, heating pads, or direct sunlight on the patch.</p>\n                        </div>\n                        <div class=\"conclusion\">\n                            <h5>Conclusion:</h5>\n                            <p>Patch Mantra by Hetero Healthcare represents the future of therapy-where science meets nature, and healing is made simple, effective, and accessible. Whether for pain relief, wellness, or targeted therapy, our patches provide a hassle-free way to support your health and well-being. Experience smart healing today-because your wellness deserves nothing less.</p>\n                        </div>', NULL, NULL, '675481_blog1_20251015172216.jpg', '', NULL, NULL, NULL, NULL, 'Center', '', NULL, NULL, '1002', 6, '1001', '1001', '2025-10-15 17:22:16', 'MSADMIN', '2025-10-15 17:22:16', 'MSADMIN'),
(2, 2, 'Pain Relief Revolution: Are Patches the New Pills?', '2025-09-21 17:53:17', 'MSADMIN', 'We\'ve all felt it-the dull ache in our back after a long day, the stubborn shoulder pain that refuses to budge, or the twinge in our legs after a jog. ', '<p>We\'ve all felt it-the dull ache in our back after a long day, the stubborn shoulder pain that refuses to budge, or the twinge in our legs after a jog. Traditionally, our instinct is to reach for a pill. But imagine if relief could come silently, steadily, and directly, through a small patch you wear on your skin.</p>\r\n<p>Welcome to the pain relief revolution, where <a href=\"https://www.patchmantra.com/\">transdermal patches</a> are quietly reshaping how we manage pain. Simple, discreet, and surprisingly effective, these little patches might just be the future of comfort.</p>\r\n<h2>The Gentle Science Behind Pain Relief Patches</h2>\r\n<p>A pain relief patch is basically a sticky strip that delivers medicine right through your skin. Unlike pills, which must pass through your stomach and digestive system, a patch goes straight to your bloodstream. This method, called transdermal delivery, lets the medicine work steadily and usually with fewer side effects.</p>\r\n<p>Think about it-no sudden spikes in medication, no upsetting your stomach. You just stick a patch on your shoulder, back, or legs, and the medicine quietly works exactly where your body needs it. It\'s a relief that fits seamlessly into your day.</p>\r\n<h3>Why These Patches Are Winning Hearts</h3>\r\n<p>There\'s an elegance in their simplicity. Pills demand memory, routine, and attention. Patches? They give you freedom. Here\'s what makes them stand out:</p>\r\n<ul>\r\n<li><strong>Relief where you need it: </strong>Just stick the patch on the spot that hurts-no guessing, no trial and error.</li>\r\n<li><strong>Lasting comfort: </strong>Many patches release medicine for 8&ndash;12 hours or more, so your relief doesn\'t fade quickly.</li>\r\n<li><strong>Gentle on your body: </strong>No stomach irritation or extra strain on your liver like some oral medicines.</li>\r\n<li><strong>Quiet and convenient: </strong>A patch quietly works under your clothes, letting you move through your day without anyone noticing.</li>\r\n</ul>\r\n<p>A tiny strip, silently at work, bringing comfort exactly where it\'s needed-a quiet power in its simplicity.</p>\r\n<h3>Choosing the Right Patch</h3>\r\n<p>Before you try a patch, pause and consider what your body truly needs:</p>\r\n<ul>\r\n<li><strong>Type of pain: </strong>Muscle, joint, or nerve? Pick a patch for that area.</li>\r\n<li><strong>Duration: </strong>Some last 8-12 hours, others up to 24.</li>\r\n<li><strong>Ingredients: </strong>Herbal or medicinal? Options include menthol, ketoprofen, or buprenorphine.</li>\r\n<li><strong>Ask a doctor: </strong>Especially if you have ongoing health issues or nerve pain.</li>\r\n</ul>\r\n<h5>A Patch for Every Need</h5>\r\n<p>Not all patches are created equal. Depending on your discomfort, there\'s likely a patch designed to suit it:</p>\r\n<ul>\r\n<li><strong>Pain relief for aches: </strong>Patches designed to ease chronic or post-injury pain. Find your solution today.</li>\r\n<li><strong>Herbal and natural options: </strong>Gentle relief with ingredients like menthol for those who prefer natural solutions. Explore the herbal range.</li>\r\n<li><strong>Targeted patches: </strong>Designed for specific areas like the neck, back, or legs, delivering comfort exactly where you need it. Check the targeted patches here.</li>\r\n<li><strong>Advanced therapeutic patches: </strong>Some go beyond everyday pain management, offering support for more complex conditions. See the advanced options.</li>\r\n<li><strong>Beyond pain: </strong>Patches are also used in skincare and other therapies, showing how versatile this small form of medicine can be. Discover all options.</li>\r\n</ul>\r\n<p>No matter your need, there\'s a patch ready to bring targeted relief, quietly fitting into your day. Explore today Hetero\'s range of patches, including Menthopas, K-Plast, and Trans-D to embrace your everyday life.</p>\r\n<h3>Real-Life Applications</h3>\r\n<p>Imagine a day in the life of someone dealing with chronic pain:</p>\r\n<ul>\r\n<li>Morning jog interrupted by sore calves? Apply a pain relief patch for legs before your workout.</li>\r\n<li>Stiff neck from hours at the desk? A neck pain patch offers gentle relief while you work.</li>\r\n<li>Chronic back pain after long hours on the road? Back pain relief patches provide targeted therapy without interrupting your day.</li>\r\n</ul>\r\n<p>Even for conditions beyond everyday aches, patches are evolving. Rivastigmine transdermal patches offer hope for Alzheimer\'s patients, delivering medication steadily over 24 hours, supporting memory and cognition with minimal discomfort.</p>\r\n<h3>Are Patches the Future?</h3>\r\n<p>Will patches fully replace pills? Not entirely. Pills are still essential in emergencies and for rapid relief. But for chronic, recurring, or localized pain, patches are undeniably transforming treatment.</p>\r\n<p>They\'re not just medicine-they\'re a statement: that comfort can be seamless, discreet, and integrated into daily life. They tell us that science and empathy can meet in a strip of adhesive, turning suffering into sustained relief.</p>\r\n<p>Think of it this way:</p>\r\n<ul>\r\n<li>Pills = quick, temporary relief</li>\r\n<li>Patches = slow, steady, long-lasting comfort</li>\r\n</ul>\r\n<p>And in that lasting comfort lies a revolution.</p>\r\n<h4>Conclusion:</h4>\r\n<p>Many people in India are discovering that traditional pills aren\'t always the easiest way to manage pain. Searches for painkiller patches shows that curiosity is growing, people are ready for smarter, more convenient solutions. Globally, patches have already become mainstream, from nicotine to hormone therapy, proving that this approach works.</p>\r\n<p>A pain patch is no longer just a medical product-it\'s a lifestyle choice. It\'s freedom from constant dosing, from bottles of pills scattered across your nightstand, from the anxiety of missed doses.</p>', NULL, NULL, '768592_blog1_20251015175417.jpg', '', NULL, NULL, NULL, NULL, 'Center', '', NULL, NULL, '1002', 5, '1001', '1001', '2025-10-15 17:54:17', 'MSADMIN', '2025-10-15 17:54:17', 'MSADMIN'),
(3, 3, 'Every Cigarette Counts: The Health Risks of Smoking', '2025-09-24 18:18:32', 'MSADMIN', 'We all know smoking is harmful-but have you ever thought about what\'s really in that single puff that quietly takes control of us?', '<h2>What\'s Inside a Cigarette? (Composition)</h2>\r\n<p>We all know smoking is harmful-but have you ever thought about what\'s really in that single puff that quietly takes control of us? A cigarette may seem like just &ldquo;tobacco rolled in paper,&rdquo; but in reality, it\'s a chemical cocktail- having the power to addict you, affect your health, and quietly harm your body over time. Cigarettes have around 600 ingredients that produce over 7,000 chemicals when burned-at least 69 of which can cause cancer. Before we dive deeper into how smoking affects your lungs and heart, it\'s important to understand what\'s in a cigarette.</p>\r\n<p>Some of the most harmful substances include:</p>\r\n<ul>\r\n<li><strong>Nicotine - </strong>You\'ve probably heard the name, but do you know what it really is? Nicotine is highly addictive; affects your brain and makes you crave the next puff almost automatically.</li>\r\n<li><strong>Tar-A </strong>thick, black residue that builds up in the lungs, making breathing difficult and increasing the risk of respiratory infections and other lung-related illnesses.</li>\r\n<li><strong>Carbon monoxide - </strong>the same gas found in car exhaust. In cigarette smoke, it\'s poisonous, cutting the oxygen in your blood and forcing your heart to work harder.</li>\r\n<li><strong>Heavy metals (lead, arsenic, cadmium) - </strong>these toxic substances in cigarette smoke gradually damage your bones, kidneys, and nerves, often without obvious signs at first.</li>\r\n<li><strong>Carcinogens - </strong>every puff exposes you to over 70 cancer-causing chemicals, quietly putting your health and your life at risk.</li>\r\n</ul>\r\n<p>Cigarettes don\'t just provide a temporary escape-they act as a slow-acting poison, quietly harming your organs and weakening your heart, lungs, bones, and immune system, while increasing your long-term risk of lung cancer, heart disease, stroke.</p>\r\n<h2>The Health Risks of Smoking</h2>\r\n<p>When you think of smoking, lung cancer might be the first thing that comes to mind-but the risks go much further. Smoking also causes chronic respiratory problems like COPD, emphysema, and bronchitis, along with many smoking-related diseases. The damage doesn\'t happen overnight-it builds silently, puff by puff, day by day.</p>\r\n<p>Let\'s see how smoking harms two of your most vital organs: the lungs and the heart.</p>\r\n<h2>Every Puff Counts: The Link Between Smoking and Lung Cancer</h2>\r\n<p>Smoking is the leading cause of lung cancer, accounting for nearly 80% of cases. Each cigarette delivers hundreds of cancer-causing chemicals straight to your lungs, harming cells and DNA long before symptoms appear. But the danger doesn\'t stop there, smoking also raises the risk of cancers in your mouth, throat, esophagus, bladder, and pancreas.</p>\r\n<h5>Key points:</h5>\r\n<ul>\r\n<li>Persistent coughing, wheezing, or shortness of breath is your lungs signaling stress.</li>\r\n<li>Smoking is the top cause of lung cancer, responsible for nearly 80% of cases.</li>\r\n<li>Quitting can reduce your risk and give your lungs a chance to recover.</li>\r\n</ul>\r\n<h3>Smoking and Your Heart: The Silent Strain</h3>\r\n<p>Cigarette smoke doesn\'t just irritate your lungs-it quietly targets your heart. Every chemical you inhale narrows blood vessels, raises blood pressure, and forces your heart to work overtime. The effects are often invisible at first, but over time, they can lead to serious conditions like heart disease, heart attacks, and strokes.</p>\r\n<h3>Not a Smoker? You\'re Still at Risk- Secondhand smoking (Passive Smoking)</h3>\r\n<p>Think you\'re safe because you don\'t smoke? Think again. Secondhand smoke is a mix of what a smoker exhales and the smoke from the burning cigarette, packed with harmful chemicals that can quietly harm anyone nearby.</p>\r\n<p>Research shows that nonsmokers exposed to secondhand smoke have a 20-30% higher risk of developing lung cancer and nearly 34,000 heart disease deaths annually in the U.S. alone. Even brief exposure can harm blood vessels and increase the risk of heart attack.</p>\r\n<h3>Key points:</h3>\r\n<ul>\r\n<li>Can trigger asthma, bronchitis, and lung cancer in non-smokers.</li>\r\n<li>Children face ear infections, wheezing, and sudden infant death syndrome</li>\r\n<li>Pregnant women are at high risk of low birth weight and preterm delivery.</li>\r\n</ul>\r\n<p><strong>So, Take a breath of safety-limit exposure to secondhand smoke today. </strong></p>\r\n<h5>Risks of smoking for youth</h5>\r\n<p>For many young people, smoking begins innocently, a cigarette shared with friends, a way to &ldquo;fit in,&rdquo; or a moment of social enjoyment. But what starts as a casual experiment quickly becomes a trap. Ideally, nicotine isn\'t a choice; over time, it quickly takes hold, creating dependency and making it hard to quit before adulthood. This leads to real consequences: weaker lungs, increased risk of heart disease, reduced athletic performance, and even long-term illnesses like cancer.</p>\r\n<p>The solution is simple: awareness and support. Turn to sports such as running, swimming, team games or hobbies that energize and uplift you, not habits that harm. Surround yourself with friends who inspire, and let families, schools, and communities guide you to stay strong.</p>\r\n<h2>The Benefits of Quitting:</h2>\r\n<p>Quitting isn\'t just a decision, it\'s the start of your body\'s journey to heal, recover, and regain strength. From your heart to your lungs, every smoke-free moment brings real, measurable health improvements.</p>\r\n<p>The good news? The body begins to heal as soon as you stop:</p>\r\n<ul>\r\n<li><strong>20 minutes later: </strong>Heart rate and blood pressure drop.</li>\r\n<li><strong>12 hours later: </strong>Carbon monoxide leaves the blood.</li>\r\n<li><strong>2-12 weeks later: </strong>Circulation improves, breathing feels lighter.</li>\r\n<li><strong>1 year later: </strong>Heart disease risk is cut in half.</li>\r\n<li><strong>10 years later: </strong>Lung cancer risk drops by 50%.</li>\r\n</ul>\r\n<p>Quitting smoking is the single most powerful health choice you can make.</p>\r\n<h2>Effective Ways to Quit Smoking:</h2>\r\n<p>Quitting smoking can be challenging, but the right support and strategies make it achievable. From behavioral therapies and support groups to medically approved aids like <a href=\"https://www.patchmantra.com/nitof-nicotine-patches\" target=\"blank\">nicotine patches</a>, gums, and lozenges, there are multiple ways to manage cravings and reduce withdrawal symptoms.</p>\r\n<ul>\r\n<li><strong>Nicotine replacement therapy (patches, gums, lozenges): </strong>reduces cravings.</li>\r\n<li><strong>Prescription Medicines: </strong>Medications such as bupropion and varenicline help you manage cravings.</li>\r\n<li><strong>Behavioral support: </strong>counseling, helplines, and group therapy.</li>\r\n<li><strong>Digital tools: </strong>quit-smoking apps track progress and savings.</li>\r\n<li><strong>Healthy alternatives: </strong>exercise, deep breathing, and mindfulness ease withdrawal.</li>\r\n</ul>\r\n<h5>Key Takeaways:</h5>\r\n<p>From the chemicals inside a cigarette to the risks for your lungs, heart, and even those around you, smoking quietly harms. The good news? Every cigarette avoided, every healthy habit chosen, is a step toward strength, freedom, and a life in control. For those ready to quit, our nicotine patches help ease cravings and reclaim every breath. At Patch Mantra, we make quitting simpler-one step at a time. Choose wisely. Choose life.</p>\r\n<p>Every cigarette counts-but so does every decision to quit.</p>', NULL, NULL, '152389_blog1_20251015181832.jpg', '', NULL, NULL, NULL, NULL, 'Center', '', NULL, NULL, '1002', 6, '1001', '1001', '2025-10-15 18:18:32', 'MSADMIN', '2025-10-15 18:18:32', 'MSADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_contents`
--

CREATE TABLE `blogs_contents` (
  `blogs_contents_id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `blogs_content_name` varchar(200) DEFAULT NULL,
  `blogs_content_value` varchar(200) DEFAULT NULL,
  `blogs_content_status` enum('1001','1002') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blogs_history`
--

CREATE TABLE `blogs_history` (
  `blog_id_history` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `blog_title` varchar(300) DEFAULT NULL,
  `blog_date` datetime DEFAULT NULL,
  `blog_ather` text,
  `blog_short_description` varchar(500) DEFAULT NULL,
  `blog_long_description_1` longtext,
  `blog_long_description_2` longtext,
  `blog_long_description_3` longtext,
  `blog_image_1` varchar(225) DEFAULT NULL,
  `blog_image_2` varchar(225) DEFAULT NULL,
  `blog_image_3` varchar(225) DEFAULT NULL,
  `blog_image_1_alt` varchar(225) DEFAULT NULL,
  `blog_image_2_alt` varchar(225) DEFAULT NULL,
  `blog_image_3_alt` varchar(225) DEFAULT NULL,
  `blog_content_alignment` enum('Left','Right','Center') NOT NULL DEFAULT 'Center',
  `blog_cta_image` varchar(100) DEFAULT NULL,
  `blog_cta_link` varchar(100) DEFAULT NULL,
  `blog_cta_alt` varchar(100) DEFAULT NULL,
  `blog_cta_status` enum('1001','1002') DEFAULT NULL,
  `blog_read_time` int(11) DEFAULT NULL,
  `blog_status` enum('1001','1002') DEFAULT '1002',
  `blog_reason` varchar(300) DEFAULT NULL,
  `blog_archive_status` enum('1001','1002') NOT NULL DEFAULT '1001',
  `blog_created_on` datetime NOT NULL,
  `blog_created_by` varchar(50) NOT NULL,
  `blog_updated_on` datetime DEFAULT NULL,
  `blog_updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs_history`
--

INSERT INTO `blogs_history` (`blog_id_history`, `blog_id`, `page_id`, `blog_title`, `blog_date`, `blog_ather`, `blog_short_description`, `blog_long_description_1`, `blog_long_description_2`, `blog_long_description_3`, `blog_image_1`, `blog_image_2`, `blog_image_3`, `blog_image_1_alt`, `blog_image_2_alt`, `blog_image_3_alt`, `blog_content_alignment`, `blog_cta_image`, `blog_cta_link`, `blog_cta_alt`, `blog_cta_status`, `blog_read_time`, `blog_status`, `blog_reason`, `blog_archive_status`, `blog_created_on`, `blog_created_by`, `blog_updated_on`, `blog_updated_by`) VALUES
(1, 1, 1, 'What is Patch Therapy? A Complete Beginner’s guide to transdermal patches', '2025-09-16 17:21:16', 'MSADMIN', 'Patch therapy is all about convenience and care ensuring a pain-free, pill free journey.', '<h5>A gentle solution with powerful benefits.</h5>\r\n<p>Patch therapy is all about convenience and care ensuring a pain-free, pill free journey. Transdermal patches, in simple terms, are medicated skin patches that contain a precise amount of active ingredients&mdash;whether medicine, vitamins, or skin-enhancing compounds. These ingredients are absorbed through the layers of the skin in a controlled and steady manner. From easing discomfort and pain to improving skin health, patch therapy powered by transdermal technology can deliver effective results through simple patch.</p>\r\n<h5>Common Uses of Transdermal Patches: One patch endless benefit</h5>\r\n<p>Simple to use and gentle on the body, transdermal patches have found their place in modern wellness. From pain and neurological support to hormonal balance and natural remedies, there\'s a patch for just about every concern.</p>\r\n<ul>\r\n<li><strong>Severe Pain:</strong>\r\n<p>In individuals with shoulder pain, back pain, leg pain, and other chronic pain conditions certain pain relief patches can ease the discomfort and pain with minimal effort.</p>\r\n</li>\r\n<li><strong>Mild to Moderate pain:</strong>\r\n<p>Natural ingredients such as like menthol, camphor, or other herbal extracts, Herbal Pain Relief Patches can ease your pain naturally.</p>\r\n</li>\r\n<li><strong>Smoking Cessation:</strong>\r\n<p>Effective nicotine patches with its high success rates are a reliable option in individuals with chronic smokers. They help them quit this harmful habit and overcome the withdrawal symptoms or a strong urge to smoke again.</p>\r\n</li>\r\n<li><strong>Hormonal imbalances:</strong>\r\n<p>Safe hormonal patches ensure consistent results in menopausal women to improve hormonal concerns by delivering certain hormones such as oestrogen or progesterone.</p>\r\n</li>\r\n<li><strong>Neurological Concerns:</strong>\r\n<p>Certain neurological transdermal patches are designed to improve individuals with neurological conditions like Alzheimer\'s disease, depression or Attention Deficit Hyperactivity disorder (ADHD) to improve cognitive (memory concerns) function while minimizing gastrointestinal side effects common with oral drugs.</p>\r\n</li>\r\n<li><strong>Motion Sicknes:</strong>\r\n<p>Certain transdermal patches Containing scopolamine drug or similar compounds, prevent nausea and vomiting caused due to motion sickness.</p>\r\n</li>\r\n</ul>\r\n<div class=\"Smarter_Than_a_Pill row\">\r\n<div class=\"Smarter_Than_a_Pill_details col-md-8\">\r\n<h5>Smarter Than a Pill: How Transdermal Patches Simplify Healing</h5>\r\n<p>When you think of a pill, you worry about the dosage or number of pills and so missing a dose or taking the wrong dose can affect your recovery. That&rsquo;s where transdermal patches offer a smarter alternative as they are designed for controlled drug release mechanism, in simple terms- When applied to the skin, the patch slowly diffuses the active ingredients into your through the skin layers and into the bloodstream over time, reaching the target site effectively, without the need for multiple doses and worry about side effectives due to over dose.</p>\r\n</div>\r\n<img class=\"w-100 blog_sub_img col-md-4\" src=\"&lt;?php echo base_url();?&gt;uploads/blog/blog_inner_img1.png?Version=&lt;?php echo Version; ?&gt;\" alt=\"\" loading=\"eager\"></div>\r\n<div class=\"explore_products\">\r\n<h5>Ready to switch to smarter, simpler relief? Explore our products and find the patch that fits your needs.</h5>\r\n<a class=\"primary_btn\" href=\"&lt;?php echo base_url();?&gt;explore-our-patches\">Explore Our Patches</a></div>\r\n<h5>Who Should Avoid Transdermal Patches?</h5>\r\n<p>While transdermal patches are safe and effective solutions for many individuals, they may not be safe for everyone. Therefore, you must Avoid using if you have any history of allergic reactions, skin problems like psoriasis, eczema, or dry, scaly skin and in pregnancy cases.</p>\r\n<h5>Unlocking the Benefits: Who Should Try Patch Therapy?</h5>\r\n<p>Patch therapy is a simple and effective option, ideal for Individuals</p>\r\n<ul>\r\n<li>Who find swallowing pills as challenging task (Children or elderly)</li>\r\n<li>Who need medication every day</li>\r\n<li>Preferring herbal or natural treatments over tablets or pills</li>\r\n<li>Where oral or IV therapy is quite difficult due to their existing illness (digestive or other issues)</li>\r\n</ul>\r\n<div class=\"background\">\r\n<h5>If you or your loved ones identify with any of these, patch therapy might be the perfect fit for you.</h5>\r\n</div>\r\n<h5>How to Apply a Transdermal Patch: 3 Simple Steps to Make Your Patch Work Its Best</h5>\r\n<p>It&rsquo;s important to remember that applying a patch isn&rsquo;t just about sticking it anywhere&mdash;it needs to be used exactly as recommended on the packaging. Before a patch can work its magic, it needs to be applied the right way. A little care goes a long way&mdash;clean skin, the right spot, and firm pressure are all it takes to ensure your patch delivers steady, effective relief. Follow these simple steps to make sure your patch stays secure and does its job&mdash;no slips, no stress.</p>\r\n<h5>Stick It Right, Stick It Tight:</h5>\r\n<div class=\"stick_right_section\">\r\n<div class=\"row\">\r\n<div class=\"col-md-4\">\r\n<div class=\"box_color bg1\">\r\n<div>\r\n<h6>Step 1:</h6>\r\n<p>Make sure to wash your hands before applying or replacing the patch Wash the skin with soap and water, then pat it dry before applying the patch. But avoid the use of lotion or oil-they can stop the patch from sticking or working properly.</p>\r\n</div>\r\n<img class=\"w-100 blog_img\" src=\"&lt;?php echo base_url();?&gt;uploads/blog/blog_inner_img12.png?Version=&lt;?php echo Version; ?&gt;\" alt=\"\" loading=\"eager\"></div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"box_color bg2\">\r\n<div>\r\n<h6>Step 2:</h6>\r\n<p>Apply a patch at the right spot i.e. smooth, hairless areas like your upper arm, back, or thigh) &amp; the areas with injury or cuts</p>\r\n</div>\r\n<img class=\"w-100 blog_img\" src=\"&lt;?php echo base_url();?&gt;uploads/blog/blog_inner_img13.png?Version=&lt;?php echo Version; ?&gt;\" alt=\"\" loading=\"eager\"></div>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<div class=\"box_color bg3\">\r\n<div>\r\n<h6>Step 3:</h6>\r\n<p>Press the patch for at least 30 seconds so that its stick well and stays in place without falling off.&nbsp;</p>\r\n</div>\r\n<img class=\"w-100 blog_img\" src=\"&lt;?php echo base_url();?&gt;uploads/blog/blog_inner_img14.png?Version=&lt;?php echo Version; ?&gt;\" alt=\"\" loading=\"eager\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"note\">\r\n<h6>Note:</h6>\r\n<p>Remember excessive heat can release the medication too quickly affecting its effectiveness, therefore avoid hot showers, heating pads, or direct sunlight on the patch.</p>\r\n</div>\r\n<div class=\"conclusion\">\r\n<h5>Conclusion:</h5>\r\n<p>Patch Mantra by Hetero Healthcare represents the future of therapy-where science meets nature, and healing is made simple, effective, and accessible. Whether for pain relief, wellness, or targeted therapy, our patches provide a hassle-free way to support your health and well-being. Experience smart healing today-because your wellness deserves nothing less.</p>\r\n</div>', NULL, NULL, '675481_blog1_20251015172216.jpg', '', NULL, NULL, NULL, NULL, 'Center', '', NULL, NULL, '1002', 6, '1001', 'New Entry', '1001', '2025-10-15 17:22:16', 'MSADMIN', '2025-10-15 17:22:16', 'MSADMIN'),
(2, 2, 2, 'Pain Relief Revolution: Are Patches the New Pills?', '2025-09-21 17:53:17', 'MSADMIN', 'We\'ve all felt it-the dull ache in our back after a long day, the stubborn shoulder pain that refuses to budge, or the twinge in our legs after a jog. ', '<p>We\'ve all felt it-the dull ache in our back after a long day, the stubborn shoulder pain that refuses to budge, or the twinge in our legs after a jog. Traditionally, our instinct is to reach for a pill. But imagine if relief could come silently, steadily, and directly, through a small patch you wear on your skin.</p>\r\n<p>Welcome to the pain relief revolution, where <a href=\"https://www.patchmantra.com/\">transdermal patches</a> are quietly reshaping how we manage pain. Simple, discreet, and surprisingly effective, these little patches might just be the future of comfort.</p>\r\n<h2>The Gentle Science Behind Pain Relief Patches</h2>\r\n<p>A pain relief patch is basically a sticky strip that delivers medicine right through your skin. Unlike pills, which must pass through your stomach and digestive system, a patch goes straight to your bloodstream. This method, called transdermal delivery, lets the medicine work steadily and usually with fewer side effects.</p>\r\n<p>Think about it-no sudden spikes in medication, no upsetting your stomach. You just stick a patch on your shoulder, back, or legs, and the medicine quietly works exactly where your body needs it. It\'s a relief that fits seamlessly into your day.</p>\r\n<h3>Why These Patches Are Winning Hearts</h3>\r\n<p>There\'s an elegance in their simplicity. Pills demand memory, routine, and attention. Patches? They give you freedom. Here\'s what makes them stand out:</p>\r\n<ul>\r\n<li><strong>Relief where you need it: </strong>Just stick the patch on the spot that hurts-no guessing, no trial and error.</li>\r\n<li><strong>Lasting comfort: </strong>Many patches release medicine for 8&ndash;12 hours or more, so your relief doesn\'t fade quickly.</li>\r\n<li><strong>Gentle on your body: </strong>No stomach irritation or extra strain on your liver like some oral medicines.</li>\r\n<li><strong>Quiet and convenient: </strong>A patch quietly works under your clothes, letting you move through your day without anyone noticing.</li>\r\n</ul>\r\n<p>A tiny strip, silently at work, bringing comfort exactly where it\'s needed-a quiet power in its simplicity.</p>\r\n<h3>Choosing the Right Patch</h3>\r\n<p>Before you try a patch, pause and consider what your body truly needs:</p>\r\n<ul>\r\n<li><strong>Type of pain: </strong>Muscle, joint, or nerve? Pick a patch for that area.</li>\r\n<li><strong>Duration: </strong>Some last 8-12 hours, others up to 24.</li>\r\n<li><strong>Ingredients: </strong>Herbal or medicinal? Options include menthol, ketoprofen, or buprenorphine.</li>\r\n<li><strong>Ask a doctor: </strong>Especially if you have ongoing health issues or nerve pain.</li>\r\n</ul>\r\n<h5>A Patch for Every Need</h5>\r\n<p>Not all patches are created equal. Depending on your discomfort, there\'s likely a patch designed to suit it:</p>\r\n<ul>\r\n<li><strong>Pain relief for aches: </strong>Patches designed to ease chronic or post-injury pain. Find your solution today.</li>\r\n<li><strong>Herbal and natural options: </strong>Gentle relief with ingredients like menthol for those who prefer natural solutions. Explore the herbal range.</li>\r\n<li><strong>Targeted patches: </strong>Designed for specific areas like the neck, back, or legs, delivering comfort exactly where you need it. Check the targeted patches here.</li>\r\n<li><strong>Advanced therapeutic patches: </strong>Some go beyond everyday pain management, offering support for more complex conditions. See the advanced options.</li>\r\n<li><strong>Beyond pain: </strong>Patches are also used in skincare and other therapies, showing how versatile this small form of medicine can be. Discover all options.</li>\r\n</ul>\r\n<p>No matter your need, there\'s a patch ready to bring targeted relief, quietly fitting into your day. Explore today Hetero\'s range of patches, including Menthopas, K-Plast, and Trans-D to embrace your everyday life.</p>\r\n<h3>Real-Life Applications</h3>\r\n<p>Imagine a day in the life of someone dealing with chronic pain:</p>\r\n<ul>\r\n<li>Morning jog interrupted by sore calves? Apply a pain relief patch for legs before your workout.</li>\r\n<li>Stiff neck from hours at the desk? A neck pain patch offers gentle relief while you work.</li>\r\n<li>Chronic back pain after long hours on the road? Back pain relief patches provide targeted therapy without interrupting your day.</li>\r\n</ul>\r\n<p>Even for conditions beyond everyday aches, patches are evolving. Rivastigmine transdermal patches offer hope for Alzheimer\'s patients, delivering medication steadily over 24 hours, supporting memory and cognition with minimal discomfort.</p>\r\n<h3>Are Patches the Future?</h3>\r\n<p>Will patches fully replace pills? Not entirely. Pills are still essential in emergencies and for rapid relief. But for chronic, recurring, or localized pain, patches are undeniably transforming treatment.</p>\r\n<p>They\'re not just medicine-they\'re a statement: that comfort can be seamless, discreet, and integrated into daily life. They tell us that science and empathy can meet in a strip of adhesive, turning suffering into sustained relief.</p>\r\n<p>Think of it this way:</p>\r\n<ul>\r\n<li>Pills = quick, temporary relief</li>\r\n<li>Patches = slow, steady, long-lasting comfort</li>\r\n</ul>\r\n<p>And in that lasting comfort lies a revolution.</p>\r\n<h4>Conclusion:</h4>\r\n<p>Many people in India are discovering that traditional pills aren\'t always the easiest way to manage pain. Searches for painkiller patches shows that curiosity is growing, people are ready for smarter, more convenient solutions. Globally, patches have already become mainstream, from nicotine to hormone therapy, proving that this approach works.</p>\r\n<p>A pain patch is no longer just a medical product-it\'s a lifestyle choice. It\'s freedom from constant dosing, from bottles of pills scattered across your nightstand, from the anxiety of missed doses.</p>', NULL, NULL, '768592_blog1_20251015175417.jpg', '', NULL, NULL, NULL, NULL, 'Center', '', NULL, NULL, '1002', 5, '1001', 'New Entry', '1001', '2025-10-15 17:54:17', 'MSADMIN', '2025-10-15 17:54:17', 'MSADMIN'),
(3, 3, 3, 'Every Cigarette Counts: The Health Risks of Smoking', '2025-09-24 18:18:32', 'MSADMIN', 'We all know smoking is harmful-but have you ever thought about what\'s really in that single puff that quietly takes control of us?', '<h2>What\'s Inside a Cigarette? (Composition)</h2>\r\n<p>We all know smoking is harmful-but have you ever thought about what\'s really in that single puff that quietly takes control of us? A cigarette may seem like just &ldquo;tobacco rolled in paper,&rdquo; but in reality, it\'s a chemical cocktail- having the power to addict you, affect your health, and quietly harm your body over time. Cigarettes have around 600 ingredients that produce over 7,000 chemicals when burned-at least 69 of which can cause cancer. Before we dive deeper into how smoking affects your lungs and heart, it\'s important to understand what\'s in a cigarette.</p>\r\n<p>Some of the most harmful substances include:</p>\r\n<ul>\r\n<li><strong>Nicotine - </strong>You\'ve probably heard the name, but do you know what it really is? Nicotine is highly addictive; affects your brain and makes you crave the next puff almost automatically.</li>\r\n<li><strong>Tar-A </strong>thick, black residue that builds up in the lungs, making breathing difficult and increasing the risk of respiratory infections and other lung-related illnesses.</li>\r\n<li><strong>Carbon monoxide - </strong>the same gas found in car exhaust. In cigarette smoke, it\'s poisonous, cutting the oxygen in your blood and forcing your heart to work harder.</li>\r\n<li><strong>Heavy metals (lead, arsenic, cadmium) - </strong>these toxic substances in cigarette smoke gradually damage your bones, kidneys, and nerves, often without obvious signs at first.</li>\r\n<li><strong>Carcinogens - </strong>every puff exposes you to over 70 cancer-causing chemicals, quietly putting your health and your life at risk.</li>\r\n</ul>\r\n<p>Cigarettes don\'t just provide a temporary escape-they act as a slow-acting poison, quietly harming your organs and weakening your heart, lungs, bones, and immune system, while increasing your long-term risk of lung cancer, heart disease, stroke.</p>\r\n<h2>The Health Risks of Smoking</h2>\r\n<p>When you think of smoking, lung cancer might be the first thing that comes to mind-but the risks go much further. Smoking also causes chronic respiratory problems like COPD, emphysema, and bronchitis, along with many smoking-related diseases. The damage doesn\'t happen overnight-it builds silently, puff by puff, day by day.</p>\r\n<p>Let\'s see how smoking harms two of your most vital organs: the lungs and the heart.</p>\r\n<h2>Every Puff Counts: The Link Between Smoking and Lung Cancer</h2>\r\n<p>Smoking is the leading cause of lung cancer, accounting for nearly 80% of cases. Each cigarette delivers hundreds of cancer-causing chemicals straight to your lungs, harming cells and DNA long before symptoms appear. But the danger doesn\'t stop there, smoking also raises the risk of cancers in your mouth, throat, esophagus, bladder, and pancreas.</p>\r\n<h5>Key points:</h5>\r\n<ul>\r\n<li>Persistent coughing, wheezing, or shortness of breath is your lungs signaling stress.</li>\r\n<li>Smoking is the top cause of lung cancer, responsible for nearly 80% of cases.</li>\r\n<li>Quitting can reduce your risk and give your lungs a chance to recover.</li>\r\n</ul>\r\n<h3>Smoking and Your Heart: The Silent Strain</h3>\r\n<p>Cigarette smoke doesn\'t just irritate your lungs-it quietly targets your heart. Every chemical you inhale narrows blood vessels, raises blood pressure, and forces your heart to work overtime. The effects are often invisible at first, but over time, they can lead to serious conditions like heart disease, heart attacks, and strokes.</p>\r\n<h3>Not a Smoker? You\'re Still at Risk- Secondhand smoking (Passive Smoking)</h3>\r\n<p>Think you\'re safe because you don\'t smoke? Think again. Secondhand smoke is a mix of what a smoker exhales and the smoke from the burning cigarette, packed with harmful chemicals that can quietly harm anyone nearby.</p>\r\n<p>Research shows that nonsmokers exposed to secondhand smoke have a 20-30% higher risk of developing lung cancer and nearly 34,000 heart disease deaths annually in the U.S. alone. Even brief exposure can harm blood vessels and increase the risk of heart attack.</p>\r\n<h3>Key points:</h3>\r\n<ul>\r\n<li>Can trigger asthma, bronchitis, and lung cancer in non-smokers.</li>\r\n<li>Children face ear infections, wheezing, and sudden infant death syndrome</li>\r\n<li>Pregnant women are at high risk of low birth weight and preterm delivery.</li>\r\n</ul>\r\n<p><strong>So, Take a breath of safety-limit exposure to secondhand smoke today. </strong></p>\r\n<h5>Risks of smoking for youth</h5>\r\n<p>For many young people, smoking begins innocently, a cigarette shared with friends, a way to &ldquo;fit in,&rdquo; or a moment of social enjoyment. But what starts as a casual experiment quickly becomes a trap. Ideally, nicotine isn\'t a choice; over time, it quickly takes hold, creating dependency and making it hard to quit before adulthood. This leads to real consequences: weaker lungs, increased risk of heart disease, reduced athletic performance, and even long-term illnesses like cancer.</p>\r\n<p>The solution is simple: awareness and support. Turn to sports such as running, swimming, team games or hobbies that energize and uplift you, not habits that harm. Surround yourself with friends who inspire, and let families, schools, and communities guide you to stay strong.</p>\r\n<h2>The Benefits of Quitting:</h2>\r\n<p>Quitting isn\'t just a decision, it\'s the start of your body\'s journey to heal, recover, and regain strength. From your heart to your lungs, every smoke-free moment brings real, measurable health improvements.</p>\r\n<p>The good news? The body begins to heal as soon as you stop:</p>\r\n<ul>\r\n<li><strong>20 minutes later: </strong>Heart rate and blood pressure drop.</li>\r\n<li><strong>12 hours later: </strong>Carbon monoxide leaves the blood.</li>\r\n<li><strong>2-12 weeks later: </strong>Circulation improves, breathing feels lighter.</li>\r\n<li><strong>1 year later: </strong>Heart disease risk is cut in half.</li>\r\n<li><strong>10 years later: </strong>Lung cancer risk drops by 50%.</li>\r\n</ul>\r\n<p>Quitting smoking is the single most powerful health choice you can make.</p>\r\n<h2>Effective Ways to Quit Smoking:</h2>\r\n<p>Quitting smoking can be challenging, but the right support and strategies make it achievable. From behavioral therapies and support groups to medically approved aids like <a href=\"https://www.patchmantra.com/nitof-nicotine-patches\" target=\"blank\">nicotine patches</a>, gums, and lozenges, there are multiple ways to manage cravings and reduce withdrawal symptoms.</p>\r\n<ul>\r\n<li><strong>Nicotine replacement therapy (patches, gums, lozenges): </strong>reduces cravings.</li>\r\n<li><strong>Prescription Medicines: </strong>Medications such as bupropion and varenicline help you manage cravings.</li>\r\n<li><strong>Behavioral support: </strong>counseling, helplines, and group therapy.</li>\r\n<li><strong>Digital tools: </strong>quit-smoking apps track progress and savings.</li>\r\n<li><strong>Healthy alternatives: </strong>exercise, deep breathing, and mindfulness ease withdrawal.</li>\r\n</ul>\r\n<h5>Key Takeaways:</h5>\r\n<p>From the chemicals inside a cigarette to the risks for your lungs, heart, and even those around you, smoking quietly harms. The good news? Every cigarette avoided, every healthy habit chosen, is a step toward strength, freedom, and a life in control. For those ready to quit, our nicotine patches help ease cravings and reclaim every breath. At Patch Mantra, we make quitting simpler-one step at a time. Choose wisely. Choose life.</p>\r\n<p>Every cigarette counts-but so does every decision to quit.</p>', NULL, NULL, '152389_blog1_20251015181832.jpg', '', NULL, NULL, NULL, NULL, 'Center', '', NULL, NULL, '1002', 6, '1001', 'New Entry', '1001', '2025-10-15 18:18:32', 'MSADMIN', '2025-10-15 18:18:32', 'MSADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `meta_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `pagesgroup_id` int(11) NOT NULL,
  `meta_title` varchar(225) DEFAULT NULL,
  `meta_description` text,
  `meta_keywords` text,
  `meta_h1` varchar(225) DEFAULT NULL,
  `meta_h2` varchar(225) DEFAULT NULL,
  `meta_img` varchar(225) DEFAULT NULL,
  `meta_status` enum('1001','1002') NOT NULL DEFAULT '1001',
  `meta_updated_by` varchar(50) DEFAULT NULL,
  `meta_updated_on` datetime DEFAULT NULL,
  `meta_created_by` varchar(50) DEFAULT NULL,
  `meta_created_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`meta_id`, `page_id`, `pagesgroup_id`, `meta_title`, `meta_description`, `meta_keywords`, `meta_h1`, `meta_h2`, `meta_img`, `meta_status`, `meta_updated_by`, `meta_updated_on`, `meta_created_by`, `meta_created_on`) VALUES
(1, 1, 2, 'Patch Therapy Guide: Benefits & Uses of Transdermal Patches', 'Discover patch therapy-a pill-free, pain-free solution with transdermal patches for pain, smoking cessation, hormones & wellness', 'patch therapy, transdermal patch therapy, how patch therapy works, benefits of patch therapy, transdermal patches for pain relief', NULL, NULL, NULL, '1001', 'MSADMIN', '2025-10-15 17:22:16', 'MSADMIN', '2025-10-15 17:22:16'),
(2, 2, 2, 'Pain Relief Revolution: Transdermal Patches vs Pills', 'Explore transdermal patches for pain relief & smoking cessation. Herbal, medicated & nicotine patches offer safe, steady comfort & healthier living', 'transdermal patch, pain relief patch, herbal transdermal patch, nicotine patch for smoking cessation, painkiller patch in India, back pain relief patch, shoulder pain relief patch, leg pain patch, rivastigmine transdermal patch', NULL, NULL, NULL, '1001', 'MSADMIN', '2025-10-15 17:54:17', 'MSADMIN', '2025-10-15 17:54:17'),
(3, 3, 2, 'Every Cigarette Counts: Smoking Risks & Quitting Guide', 'Learn the health risks of smoking—from lung cancer to heart disease-and discover proven ways to quit with nicotine patches, support & healthy habits', 'smoking health risks, every cigarette counts, what’s in a cigarette, harmful effects of smoking, lung cancer from smoking, smoking and heart disease, secondhand smoke risks, youth smoking risks, benefits of quitting smoking, nicotine patches to quit smoking', NULL, NULL, NULL, '1001', 'MSADMIN', '2025-10-15 18:18:32', 'MSADMIN', '2025-10-15 18:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `meta_history`
--

CREATE TABLE `meta_history` (
  `meta_id_history` int(11) NOT NULL,
  `meta_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `pagesgroup_id` int(11) NOT NULL,
  `meta_title` varchar(225) DEFAULT NULL,
  `meta_description` text,
  `meta_keywords` text,
  `meta_h1` varchar(225) DEFAULT NULL,
  `meta_h2` varchar(225) DEFAULT NULL,
  `meta_img` varchar(225) DEFAULT NULL,
  `meta_status` enum('1001','1002') NOT NULL DEFAULT '1001',
  `meta_reason` varchar(225) DEFAULT NULL,
  `meta_updated_by` varchar(50) DEFAULT NULL,
  `meta_updated_on` datetime DEFAULT NULL,
  `meta_created_by` varchar(50) DEFAULT NULL,
  `meta_created_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_history`
--

INSERT INTO `meta_history` (`meta_id_history`, `meta_id`, `page_id`, `pagesgroup_id`, `meta_title`, `meta_description`, `meta_keywords`, `meta_h1`, `meta_h2`, `meta_img`, `meta_status`, `meta_reason`, `meta_updated_by`, `meta_updated_on`, `meta_created_by`, `meta_created_on`) VALUES
(1, 1, 1, 2, 'testing', 'testing', 'testing', NULL, NULL, NULL, '1001', 'New Entry', 'MSADMIN', '2025-10-15 15:50:42', 'MSADMIN', '2025-10-15 15:50:42'),
(2, 1, 1, 2, 'Patch Therapy Guide: Benefits & Uses of Transdermal Patches', 'Discover patch therapy-a pill-free, pain-free solution with transdermal patches for pain, smoking cessation, hormones & wellness', 'patch therapy, transdermal patch therapy, how patch therapy works, benefits of patch therapy, transdermal patches for pain relief', NULL, NULL, NULL, '1001', 'New Entry', 'MSADMIN', '2025-10-15 17:22:16', 'MSADMIN', '2025-10-15 17:22:16'),
(3, 2, 2, 2, 'Pain Relief Revolution: Transdermal Patches vs Pills', 'Explore transdermal patches for pain relief & smoking cessation. Herbal, medicated & nicotine patches offer safe, steady comfort & healthier living', 'transdermal patch, pain relief patch, herbal transdermal patch, nicotine patch for smoking cessation, painkiller patch in India, back pain relief patch, shoulder pain relief patch, leg pain patch, rivastigmine transdermal patch', NULL, NULL, NULL, '1001', 'New Entry', 'MSADMIN', '2025-10-15 17:54:17', 'MSADMIN', '2025-10-15 17:54:17'),
(4, 3, 3, 2, 'Every Cigarette Counts: Smoking Risks & Quitting Guide', 'Learn the health risks of smoking—from lung cancer to heart disease-and discover proven ways to quit with nicotine patches, support & healthy habits', 'smoking health risks, every cigarette counts, what’s in a cigarette, harmful effects of smoking, lung cancer from smoking, smoking and heart disease, secondhand smoke risks, youth smoking risks, benefits of quitting smoking, nicotine patches to quit smoking', NULL, NULL, NULL, '1001', 'New Entry', 'MSADMIN', '2025-10-15 18:18:32', 'MSADMIN', '2025-10-15 18:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `pagesgroup_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_id`, `pagesgroup_id`, `created_by`, `created_on`) VALUES
(1, 1, 2, 'MSADMIN', '2025-10-15 17:22:16'),
(2, 2, 2, 'MSADMIN', '2025-10-15 17:54:17'),
(3, 3, 2, 'MSADMIN', '2025-10-15 18:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `pagesgroups`
--

CREATE TABLE `pagesgroups` (
  `pagesgroup_id` int(11) NOT NULL,
  `pagesgroup_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patchmantra_enquiry_from`
--

CREATE TABLE `patchmantra_enquiry_from` (
  `enquiry_id` int(11) NOT NULL,
  `enquiry_code` varchar(50) DEFAULT NULL,
  `enquiry_name` varchar(50) DEFAULT NULL,
  `product_name` varchar(225) DEFAULT NULL,
  `enquiry_mail` varchar(50) DEFAULT NULL,
  `enquiry_contact` varchar(20) DEFAULT NULL,
  `enquiry_location` varchar(100) DEFAULT NULL,
  `enquiry_comments` text,
  `enquiry_status` enum('1001','1002') NOT NULL DEFAULT '1001',
  `enquiry_delete_status` enum('1001','1002') DEFAULT '1001',
  `enquiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patchmantra_enquiry_from`
--

INSERT INTO `patchmantra_enquiry_from` (`enquiry_id`, `enquiry_code`, `enquiry_name`, `product_name`, `enquiry_mail`, `enquiry_contact`, `enquiry_location`, `enquiry_comments`, `enquiry_status`, `enquiry_delete_status`, `enquiry_date`) VALUES
(1, '5351426921', 'Deepthi Gangireddy', 'Lidocaine Patches (Topical Anesthetic)', 'deepthi.gangireddy@heterohealthcare.com', '9876543210', NULL, 'testing form', '1001', '1001', '2025-09-10'),
(2, '3827413469', 'testing', 'Lidocaine Patches (Topical Anesthetic)', 'testing@gmail.com', '97277578787', NULL, 'testing', '1001', '1001', '2025-09-12'),
(3, '6158227639', 'Testing', 'Lidocaine Patches (Topical Anesthetic)', 'testing@gmail.co', '555677667646', NULL, 'Testing', '1001', '1001', '2025-09-15'),
(4, '1398844163', 'CFL LIFESCIENCES', 'Lidocaine Patches (Topical Anesthetic)', 'cfllifesciences@gmail.com', '9529167111', NULL, 'Is third party manufacturing for Patches available', '1001', '1001', '2025-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `patchmantra_subscribe`
--

CREATE TABLE `patchmantra_subscribe` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(500) DEFAULT NULL,
  `sub_code` varchar(100) DEFAULT NULL,
  `sub_email` varchar(300) DEFAULT NULL,
  `sub_phone` varchar(15) DEFAULT NULL,
  `sub_status` enum('1001','1002') NOT NULL,
  `sub_delete_status` enum('1001','1002') DEFAULT '1001',
  `sub_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patchmantra_subscribe`
--

INSERT INTO `patchmantra_subscribe` (`sub_id`, `sub_name`, `sub_code`, `sub_email`, `sub_phone`, `sub_status`, `sub_delete_status`, `sub_date`) VALUES
(1, NULL, '3117564898', NULL, '9876543210', '1001', '1001', '2025-09-10 17:16:39'),
(2, NULL, '3827846954', NULL, NULL, '1001', '1001', '2025-09-10 20:46:59'),
(3, NULL, '3251627464', NULL, '565675', '1001', '1001', '2025-09-11 09:20:15'),
(4, NULL, '1861232769', NULL, '7075174780', '1001', '1001', '2025-09-11 09:26:35'),
(5, ' Test ', '5672921163', 'test@gmail.com', NULL, '1001', '1001', '2025-09-11 11:54:05'),
(6, NULL, '9552766473', NULL, '243243242432', '1001', '1001', '2025-09-13 06:04:27'),
(7, NULL, '9611834257', NULL, '123456765432', '1001', '1001', '2025-09-13 06:05:07'),
(8, NULL, '1458763137', NULL, '999999999999', '1001', '1001', '2025-09-13 06:08:01'),
(9, NULL, '5767312265', NULL, '566', '1001', '1001', '2025-09-15 09:41:08'),
(10, NULL, '1698313594', NULL, '1212112212', '1001', '1001', '2025-09-15 10:26:40'),
(11, NULL, '7523289668', NULL, '9567765677', '1001', '1001', '2025-09-15 11:19:06'),
(12, NULL, '2473355726', NULL, '4252523425', '1001', '1001', '2025-09-15 11:20:12'),
(13, ' Testing ', '8873941735', 'testing@gmail.com', NULL, '1001', '1001', '2025-09-15 11:45:35'),
(14, ' Rajeshagarwalsn ', '8649978621', 'rajeshagarwalsn@gmail.com', NULL, '1001', '1001', '2025-09-17 16:08:20'),
(15, NULL, '6368875972', NULL, '9052366408', '1001', '1001', '2025-09-19 10:38:24'),
(16, ' Divyanshujain146 ', '9781759314', 'divyanshujain146@gmail.com', NULL, '1001', '1001', '2025-10-02 20:22:55'),
(17, NULL, '8247352947', NULL, NULL, '1001', '1001', '2025-10-04 23:01:38'),
(18, NULL, '2819654189', NULL, NULL, '1001', '1001', '2025-10-20 02:43:40'),
(19, ' Ymillyg ', '7314949682', 'ymillyg@gmail.com', NULL, '1001', '1001', '2025-10-22 12:35:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_routes`
--
ALTER TABLE `app_routes`
  ADD PRIMARY KEY (`app_routes_id`);

--
-- Indexes for table `app_routes_history`
--
ALTER TABLE `app_routes_history`
  ADD PRIMARY KEY (`app_routes_id_history`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blogs_contents`
--
ALTER TABLE `blogs_contents`
  ADD PRIMARY KEY (`blogs_contents_id`);

--
-- Indexes for table `blogs_history`
--
ALTER TABLE `blogs_history`
  ADD PRIMARY KEY (`blog_id_history`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `meta_history`
--
ALTER TABLE `meta_history`
  ADD PRIMARY KEY (`meta_id_history`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagesgroups`
--
ALTER TABLE `pagesgroups`
  ADD PRIMARY KEY (`pagesgroup_id`);

--
-- Indexes for table `patchmantra_enquiry_from`
--
ALTER TABLE `patchmantra_enquiry_from`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `patchmantra_subscribe`
--
ALTER TABLE `patchmantra_subscribe`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_routes`
--
ALTER TABLE `app_routes`
  MODIFY `app_routes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `app_routes_history`
--
ALTER TABLE `app_routes_history`
  MODIFY `app_routes_id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs_contents`
--
ALTER TABLE `blogs_contents`
  MODIFY `blogs_contents_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs_history`
--
ALTER TABLE `blogs_history`
  MODIFY `blog_id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meta_history`
--
ALTER TABLE `meta_history`
  MODIFY `meta_id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pagesgroups`
--
ALTER TABLE `pagesgroups`
  MODIFY `pagesgroup_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patchmantra_enquiry_from`
--
ALTER TABLE `patchmantra_enquiry_from`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patchmantra_subscribe`
--
ALTER TABLE `patchmantra_subscribe`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
