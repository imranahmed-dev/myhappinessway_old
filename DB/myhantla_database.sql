-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2020 at 12:42 PM
-- Server version: 10.3.27-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhantla_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Safe-Food', 'safe-food', 'public/frontend/categoryimage/5f51f1e976ab9.jpg', 'Health is wealth.', '2020-09-04 10:55:13', '2020-09-04 12:20:00'),
(2, 'Health', 'health', 'public/frontend/categoryimage/5f51f978b3efd.jpg', NULL, '2020-09-04 10:56:07', '2020-09-04 12:23:20'),
(3, 'Philosophy', 'philosophy', 'public/frontend/categoryimage/5f51f2bee6392.png', 'Sharing your philosophy of happiness may be a great way for someone.', '2020-09-04 11:54:38', '2020-09-04 11:54:38'),
(4, 'Travelling', 'travelling', 'public/frontend/categoryimage/5f51f85d5d597.jpg', 'Sharing your travelling experience  may be a great happiness way for someone.', '2020-09-04 11:57:07', '2020-09-04 12:18:37'),
(5, 'Books', 'books', 'public/frontend/categoryimage/5f51f4ab21003.jpg', NULL, '2020-09-04 12:02:51', '2020-09-04 12:19:10'),
(6, 'Gardening', 'gardening', 'public/frontend/categoryimage/5f51f56dc74c4.jpg', NULL, '2020-09-04 12:06:05', '2020-09-04 12:06:05'),
(7, 'Self Development', 'self-development', 'public/frontend/categoryimage/5f51f6b365ee5.png', NULL, '2020-09-04 12:11:31', '2020-09-04 12:11:31'),
(8, 'Nature', 'nature', 'public/frontend/categoryimage/5f51f78b76083.jpg', NULL, '2020-09-04 12:15:07', '2020-09-04 12:15:07'),
(9, 'childhood', 'childhood', 'public/frontend/categoryimage/5f51f7ef76fb7.jpg', NULL, '2020-09-04 12:16:47', '2020-09-04 12:16:47'),
(10, 'plants', 'plants', 'public/frontend/categoryimage/5f51fa035e595.jpg', NULL, '2020-09-04 12:25:39', '2020-09-04 12:25:39'),
(11, 'technology', 'technology', 'public/frontend/categoryimage/5f51fb03789cb.jpg', NULL, '2020-09-04 12:29:55', '2020-09-04 12:29:55'),
(12, 'Happiness', 'happiness', 'public/frontend/categoryimage/5f5b06d3850fc.jpg', 'Happiness', '2020-09-10 23:10:43', '2020-09-10 23:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_25_191321_create_categories_table', 1),
(5, '2020_07_25_211652_create_tags_table', 1),
(6, '2020_07_26_101509_create_posts_table', 1),
(8, '2020_09_02_044803_create_settings_table', 2),
(9, '2020_09_03_062859_create_contacts_table', 3),
(10, '2020_09_03_171356_create_comments_table', 4),
(11, '2020_09_03_171442_create_reply_comments_table', 4),
(12, '2020_09_03_174857_create_subscribes_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_view` int(15) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `image`, `description`, `category_id`, `user_id`, `user_type`, `post_view`, `status`, `deleted_by`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Need Inspiration? 10 Remarkable People to Follow Right Now', 'need-inspiration-10-remarkable-people-to-follow-right-now', 'public/uploaded/posts_image/5f5b03e78f4d2.jpg', 'I need regular inspiration to stay positive, keep focused on what’s important, and remember to keep my heart open. I’m selective, however, about who I follow for inspiration in the realms of personal and spiritual growth. In particular, I’m wary of male teachers.&nbsp; There have been far too many revelations of abuse perpetuated by male teachers upon their students. At the same time, any group or program, regardless of whether the teacher is male or female, can encourage a group-think mentality. In that kind of conformist ambiance, you can gradually lose your ability to think autonomously without even realizing it. Because of these dangers, I don’t see the people I choose to follow as above me, better than me, or more evolved than me.&nbsp; Instead, I see them as companions on the path. With those cautions in mind, here are the main&nbsp; people I currently follow for daily inspiration. Before we continue, please know this article contains affiliate links, which means I may earn a small commission if you make a purchase after clicking them. There is no cost to you and your support enables me to continue writing free articles for you.&nbsp; Thank you! Glennon Doyle Glennon Doyle writes and talks about women’s empowerment.&nbsp; She is the author of New York Times bestseller Untamed, which I’m reading right now.&nbsp; If you want to drop people pleasing, find out who you truly are, and stand unapologetically in the center of YOU, follow Glennon. At the start of the coronavirus pandemic, Glennon began “morning meeting” live videos, which I watched later.&nbsp; In these videos, which I have loved, Glennon has touched on topics from deep self-care to living with mental differences.', 9, 11, 'Admin', 16, 2, NULL, '2020-09-10 22:58:15', '2020-09-10 22:58:15', '2020-09-27 11:16:41'),
(2, 'We Are One Human Race', 'we-are-one-human-race', 'public/uploaded/posts_image/5f5b0553d8af4.jpg', 'Did you know that “race” is a social construct?&nbsp; There is no biological basis for the idea that there are different human races. There is only one human race. As a species, we humans share around 99.9% of our DNA with one another other, whatever the color of our skin. In her Harvard University article, “How Science and Genetics Are Reshaping the Race Debate of the 21st Century,” Vivian Chou tells us, “In the biological and social sciences, the consensus is clear: race is a social construct, not a biological attribute.” She explains the genetics behind this truth. “The popular classifications of race are based chiefly on skin color, with other relevant features including height, eyes, and hair. Though these physical differences may appear, on a superficial level, to be very dramatic, they are determined by only a minute portion of the genome: we as a species have been estimated to share 99.9% of our DNA with each other. The few differences that do exist reflect differences in environments and external factors, not core biology. Dismantle the False Narrative, Dismantle Racism Nevertheless, people have used this tiny variation in human genetics, expressed primarily through the color of a person’s skin, to promote the idea that one “race,” the white race, is superior to other races.&nbsp; Countless atrocities have been committed based upon this false notion, dating back for centuries. That’s why it’s important to know that there’s no biological basis for racism.&nbsp; Race is only a socially reinforced idea.&nbsp; Thus the notion can be changed. Correcting this false narrative is how we begin to dismantle racism, the belief that one race is superior to&nbsp; another. The truth that we’re one human race doesn’t mean we suddenly drop “Black Lives Matter” and promote the idea that “All Lives Matter.”&nbsp; To the contrary, it illuminates the false storyline modern society subscribes to, and thus makes you want to highlight “Black Lives Matter” all the more, assuming you’re a compassionate human being and not a fascist. The Alt-Right and Bioligical Racism However, the Alt-Right, who opposes “Black Lives Matter, wants you to think otherwise. While there’s a diversity of opinions among the Alt-Right as to what constitutes non-white, their overarching belief is in a “pure” white heritage, with German and Scandinavian being among the most desirable ancestry.&nbsp; They promote the idea that descent from other groups like African American, Ashkenazi Jews, Italian, Armenians, and other cultural groups they deem as non-white to be less desirable. The Alt-Right promotes the idea of “biological racism”, a pseudo-scientific belief, to justify the superiority of the white race. To combat these false interpretations of science and the racism propagated by the Alt-Right, Vivian Chou says we need to be equally literate in science and genetics: “Mounting scientific evidence has shown that humans are fundamentally more similar than different from each other. Nonetheless, racism has persisted. Scientific findings are often ignored, or otherwise actively misinterpreted and misused to further racist agendas of extreme political groups. Opponents of these forces must, through their own education and awareness, combat these misleading interpretations and representations of scientific findings.” Educate Yourself on Racism I first learned this idea – that there’s no biological basis for race – when I watched Layla F. Saad’s video “Why Whiteness Must Be Named,” which I highly recommend.', 9, 11, 'Admin', 22, 2, NULL, '2020-09-10 23:04:19', '2020-09-10 23:04:19', '2020-09-27 11:16:42'),
(3, 'How to Overcome Your Fear of Change', 'how-to-overcome-your-fear-of-change', 'public/uploaded/posts_image/5f5b061bac3a5.jpg', 'Why do we suffer so much in uncertain or difficult times? One reason is a deep-rooted belief that everything should remain the same – at least all the things we love.&nbsp; Intellectually, you may know everything is impermanent.&nbsp; But emotionally, in an almost unconscious way, don’t you desire your life and all that you love to remain stable? You expect your love relationship to continue “happily ever after.” You long for job security. You’re shocked when someone gets sick or dies. Because of your veiled expectations, when change does happen, it may feel like you’ve been struck by lightning. But change doesn’t have to feel so severe.&nbsp; You don’t have to fall into extreme states of fear, anxiety, anger, despair or overwhelm when life changes. How to Minimize the Suffering of Change You can begin to accept change by recognizing that impermanence is simply a fact of life.&nbsp; Without impermanence, life wouldn’t be possible.&nbsp; Nothing would die, but also nothing would be born.&nbsp; Nothing would end, but nothing new would begin. You can minimize the suffering that comes along with change by learning to accept impermanence instead of resisting and fighting against it. But this takes dedication. Even though impermanence is happening in every moment, with every breath you breathe, you won’t be able to fully accept it without consciously noting it again and again.&nbsp; You need a daily practice to be able to embrace the truth of impermanence in the depth of your being. One way to contemplate impermanence is to make a commitment to notice change each and every day. Notice the changes constantly occurring around you: Rain appearing on a sunny day Day turning into night A withered flower petal laying on the ground Signs the season is about to change A pain in your body as it starts or stops A shift in your mood Then, each time, tell yourself: “This is an example of impermanence.&nbsp; Impermanence is a natural part of life.” Even civilizations are born and die.&nbsp; There is no guarantee that your country, civilization, or planet will continue indefinitely.&nbsp; Breathe into that thought and see if you can begin to accept it. The Five Remembrances If you’d like to practice more formally, consider reflecting on the Five ﻿Remembrances from Thich Nhat Hanh. This practice of the Five Remembrances will especially help you to face the kinds of monumental changes that occur for every single human being.&nbsp; It will help you learn to sit with your fear until it melts away. Regular practice can gradually increase your comfort with impermanence and death. These are the Five ﻿Remembrances:﻿ I am of the nature to grow old. There is no way to escape growing old. I am of the nature to have ill health. There is no way to escape having ill health. I am of the nature to die. There is no way to escape death. All that is dear to me and everyone I love are of the nature to change. There is no way to escape being separated from them. I inherit the results of my actions of body, ﻿speech, and mind. My actions are my continuation. Thich Nhat Hanh recommends doing this practice as a breathing exercise:﻿ Breathing in, I know I am of the nature to grow old. Breathing out, I know I cannot escape old age. Breathing in, I know that I am of the nature to get sick.&nbsp; Breathing out, I know that I cannot escape sickness.﻿ Breathing in, I know that I am of the nature to die. Breathing out, I know that I cannot escape dying. Breathing in, I know that one day I will have to let go of everything and everyone I cherish. Breathing out, there is no way to bring them along. Breathing in, I know that I take nothing with me except my actions, thoughts, and deeds. Breathing out, only my actions come with me. Impermanence:&nbsp; The Way to More Compassion Learning to accept impermanence will not turn you into an automaton, devoid of any feeling.&nbsp; Naturally, you’ll still feel grief when someone passes and sympathy when someone is hurt or ill.&nbsp; But you won’t be submerged in grief or other emotions for months or years on end. You may still feel some shock when an unexpected change occurs, but you’ll snap out of it more quickly.&nbsp; You’ll be able to tell yourself: “This is my old friend impermanence.&nbsp; Impermanence is a natural part of life.” Neither will you become apathetic.&nbsp; Understanding impermanence doesn’t make you turn away from your responsibilities as a human being.&nbsp; You become more acutely aware of the preciousness of each moment, and the fact that your actions make a difference for better or for worse.&nbsp; For example, you can help extend the life of our planet by taking actions aligned to reduce carbon emissions, protest for justice because that’s the right thing to do, or take another action to relieve the suffering of others. Instead of an absence of emotion, the knowledge of impermanence can open your heart into profound compassion.&nbsp; How truly heartbreaking it can feel to witness so many individuals living the delusion and pain of permanence, when everything around us – the leaves, the weather, the seasons – tells a different story. There’s an undeniably bittersweet quality to impermanence, even once we come to accept it.&nbsp; But with acceptance, you will suffer less.&nbsp; And when you suffer less, you can be more present to others and support them in their trials and tribulations they face. Recommended Reading:&nbsp; &nbsp;The World We Have:&nbsp; A Buddhist Approach to Peace and Ecology by Thich Nhat Hanh (affiliate link) Your Turn How do you respond when change occurs?&nbsp; What helps you to accept change? I would love to hear in the comments. Thank you for your presence, I know your time is precious!&nbsp; Don’t forget to&nbsp; sign up for Wild Arisings, my twice monthly letters from the heart filled with insights, inspiration, and ideas to help you connect with and live from your truest self. Subscribers receive access to the Always Well Within Library of free self-development resources. And if you would like to support Always Well Within, buy my Living with Ease course or visit my Self-Care Shop. May you be happy, well, and safe – always.&nbsp; With love, Sandra', 7, 11, 'Admin', 4, 2, NULL, '2020-09-10 23:07:39', '2020-09-10 23:07:39', '2020-09-27 11:16:42'),
(4, 'How to Calm Coronavirus Stress, Anxiety, and Depression', 'how-to-calm-coronavirus-stress-anxiety-and-depression', 'public/uploaded/posts_image/5f5b068648c56.jpg', 'It’s hard not to feel stressed, anxious, or depressed in a pandemic, isn’t it?&nbsp; But in difficult times like these, it’s essential to do all you can to reduce stress. Why? Because chronic stress combined with feelings of isolation and loneliness can alter the function and structure of the brain, and lead to anxiety, depression, and other mood disorders. My own stress levels have increased over the last few weeks as COVID-19 infections have skyrocketed in Hawaii, on Oahu especially.&nbsp; While they’re still relatively low on the Big Island, where I live, some reported infections have hit a bit too close to home for my comfort level.&nbsp; Concerns about the upcoming US election have also made my stress hormones wake up in protest on many a recent day To help you get back to your zone of resilience, I’ll share a set of remedies for stress, anxiety, and depression, some especially for this time. They\'re recommended by a group of neuroscientists in their article called Coronavirus: The Pandemic is Changing Our Brains - Here Are the Remedies.&nbsp; I\'ve added one of my own and of course, my two cents as well. 5 Ways to Calm Pandemic Stress, Anxiety, and Depression Check out the following mental health remedies, and see which ones resonate for you.&nbsp; Don’t try to force your self to do something that doesn’t feel like a good fit.&nbsp; That will only bring more stress and tension. And don’t take on too much, which might further overwhelm you.&nbsp; Just start with one, and see how it goes.&nbsp; After you’ve established the habit, move on to another if you think it would also benefit you. Here we go. 1. Get the Help You Need Since the onset of the coronavirus pandemic, most therapists offer teletherapy sessions.&nbsp; Teletherapy can be just as effective as in-person therapy for treating trauma, anxiety, and depression. I now have regular sessions with my trauma therapist via ZOOM.&nbsp; I feel I’ve had many breakthrough moments using this online format equal to ones I’ve had during in-person sessions. There are a few downsides to teletherapy, but over-all it’s an excellent solution for those who need to or prefer to stay at home to reduce risk of exposure to the coronavirus. Read more about teletherapy:&nbsp; Teletherapy, Popular in the Pandemic, May Outlast It If the thought of reaching out to a therapist brings up shame or embarrassment, consider this.&nbsp; Recently, researchers have suggested that anxiety, depression, and post-traumatic stress aren’t mental disorders at all.&nbsp; Instead, they believe these conditions are adaptive responses to adversity. Right now, the entire world has faced and continues to face a tremendous amount of adversity.&nbsp; So, what you’re feeling may be more normal than abnormal.&nbsp; But still, reach out because you can get help and practical tools to reduce the uncomfortable symptoms associated with these mental states. 2. Exercise Have you been skimping on exercise during the pandemic, and maybe overeating to calm the stress you feel? According to Harvard Health, aerobic exercise reduces the stress hormones cortisol and adrenalin.&nbsp; It also releases endorphins, the body’s natural painkillers and mood elevators.&nbsp; Exercise can also improve your sleep, which can have a beneficial effect on cortisol levels too. You need to exercise regularly to see a positive effect.&nbsp; That means 30-40 minutes of moderate exercise or 15-20 minutes of vigorous exercise most days of the week.&nbsp; If you’re not accustomed to exercise, start slow and build up. 3. Mindfulness Training Mindfulness training can help you stay in (and return to) the present moment, which can decrease stress. From the initial article cited above: “…studies have shown beneficial functional and structural changes in the brain’s prefrontal cortex (involved in planning and decision making), hippocampus and amygdala following mindfulness training.” If you’d like to learn mindfulness, check out my course:&nbsp; Living with Ease, The Mindful Way to Less Stress 4. Gamified Cognitive Training Gamified Cognitive Training can improve attention, memory, and motivation, all of which can be adversely impacted by stress, and by COVID-19 infection. This can include digital brain training apps that involve rewards and challenges typically seen in games like leaderboards, quizzes, badges, leveling, challenges, and progress bars.&nbsp; These rewards keep you motivated and engaged in the training. Read more about digital brain training: Building a Better Brain 11 Brain Train Apps to Train Your Mind and Improve Memory An activity doesn\'t have to be gamified to benefit cognitive function, however.&nbsp; Almost any activity that is challenging, complex, and involves practice can help.&nbsp; It could be swimming, quilting, or learning an instrument, among others. Read More:&nbsp; Train Your Brain 5.&nbsp; Activity Apps Activity Apps can help you monitor sleep patterns, heart rate, exercise, and more. Using an Activity App can show you moments when you could benefit from slowing down, taking a deep breath, pausing for a meditation or exercise break, or deciding to get more sleep. You can also find apps that will help you reduce stress. 13 of the Best Apps to Manage Your Stress If none of the above activities resonate for you, check out alternative ideas from my other articles. 10 Simple Ways to Quickly Calm Stress or Trauma 33 Mantras to Quickly Calm Your Stress Response A Simple Way to Balance Your Emotions and Revitalize Your Body Make your wellbeing a priority in this pandemic. Do what you can to keep your stress levels down so they don\'t spiral into full blown anxiety, depression, or post-traumatic stress.&nbsp; Although we can take personal safety precautions, we can’t control the pandemic.&nbsp; But we can take charge of our stress, and feel better by doing so', 2, 11, 'Admin', 8, 2, NULL, '2020-09-10 23:09:26', '2020-09-10 23:09:26', '2020-09-27 11:16:43'),
(5, 'The Happiness Principles: 7 Ways to Bake Happiness into Your Life', 'the-happiness-principles-7-ways-to-bake-happiness-into-your-life', 'public/uploaded/posts_image/5f5b074566067.jpg', '<p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">A while back I gave a talk at the&nbsp;<em>Britelife Summit on Happiness</em>.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">My talk was titled, “The Way of Happiness–7 Principles for Happiness.”</p><div class=\"td-g-rec td-g-rec-id-content_inline td_uid_1_5f5b06b1ed342_rand td_block_template_1 \" style=\"color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px;\"><ins class=\"adsbygoogle\" data-ad-client=\"ca-pub-0602610841907147\" data-ad-slot=\"2762756336\" data-adsbygoogle-status=\"done\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-decoration-line: none; margin-bottom: 21px; position: relative; left: 348px; transform: translateX(-50%); display: inline-block; width: 468px; height: 0px;\"><ins id=\"aswift_2_expand\" style=\"background: transparent; text-decoration-line: none; display: inline-table; border: none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 468px;\"><ins id=\"aswift_2_anchor\" style=\"background: transparent; text-decoration-line: none; display: block; border: none; height: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 468px; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_2\" name=\"aswift_2\" sandbox=\"allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"468\" height=\"60\" frameborder=\"0\" src=\"https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-0602610841907147&amp;output=html&amp;h=60&amp;slotname=2762756336&amp;adk=69731088&amp;adf=3716830775&amp;w=468&amp;lmt=1599801078&amp;psa=0&amp;guci=2.2.0.0.2.2.0.0&amp;format=468x60&amp;url=https%3A%2F%2Fsourcesofinsight.com%2Fthe-way-of-happiness-7-principles-for-happiness%2F&amp;flash=0&amp;wgl=1&amp;adsid=ChAI8J3n-gUQgeX20bej5uorEioAbTB3Bxc91w2Jvs4pCOllqJ8FWItr8OVVCMbcFR4ZTvLfT1JE0vlZk3U&amp;dt=1599801017241&amp;bpp=4&amp;bdt=4182&amp;idt=4381&amp;shv=r20200901&amp;cbv=r20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D79def4280439efcb%3AT%3D1599800172%3AS%3DALNI_MbVeI7xOAUj8oKayotuqAQoXfX0Og&amp;prev_fmts=0x0&amp;prev_slotnames=4309542024&amp;nras=1&amp;correlator=2051253585510&amp;frm=20&amp;pv=1&amp;ga_vid=979815739.1599800174&amp;ga_sid=1599801021&amp;ga_hid=1114808429&amp;ga_fc=0&amp;iag=0&amp;icsg=2260648285350655&amp;dssz=44&amp;mdo=0&amp;mso=0&amp;u_tz=360&amp;u_his=2&amp;u_java=0&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=255&amp;ady=938&amp;biw=1349&amp;bih=657&amp;scr_x=0&amp;scr_y=0&amp;eid=21066467%2C21067167&amp;oid=3&amp;pvsid=723854085113984&amp;pem=158&amp;ref=http%3A%2F%2Fsourcesofinsight.com%2Fhappiness-blogs%2F&amp;rx=0&amp;eae=0&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C0%2C0%2C1366%2C657&amp;vis=1&amp;rsz=%7Co%7CoeEbr%7C&amp;abl=NS&amp;pfx=0&amp;fu=8192&amp;bc=31&amp;jar=2020-09-11-04&amp;ifi=2&amp;uci=a!2&amp;btvi=2&amp;fsb=1&amp;xpc=6E4fknpLDF&amp;p=https%3A//sourcesofinsight.com&amp;dtd=61112\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allowfullscreen=\"true\" data-google-container-id=\"a!2\" data-google-query-id=\"CK3vhLer4OsCFdmylgodNmcOVA\" data-load-complete=\"true\" style=\"max-width: 100%; left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 468px; height: 60px;\"></iframe></ins></ins></ins></div><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">In my talk, I outlined some of the key happiness strategies and tactics I use, and share with others, to improve happiness.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Happiness really is a skill.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">My approach is really a mash up of the things I’ve learned from the school of hard knocks, and from brilliant happiness scientists like Dan Gilbert, Martin Seligman, and Sonja Lyubomirsky, as well as from the happiness artists that adorn my life, with their inner-wisdom, and meaningful mantras.</p><h2 style=\"font-family: Roboto, sans-serif; color: rgb(17, 17, 17); margin: 30px 0px 20px; font-size: 27px; line-height: 38px;\">Happiness Should Not Be Elusive</h2><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">I kept my talk raw, simple, insightful, and actionable.&nbsp; At the end of the day, I believe that happiness should not be an elusive thing, or an evasive thing.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">It should not be an abstract ideal.&nbsp; It should be right here, right now, and part of our journey, wherever we go.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Even if we have to work at it, as many of us do, that’s OK, but the key is to know how to bake happiness into our lives.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">And thus, the Way of Happiness was born.&nbsp; (Yeah, I’m a fan of Tao.&nbsp; Tao is a Chinese word meaning “way”, “path”, or “route.”&nbsp; I was a fan ever since I read&nbsp;<em>The Tao of Jeet Kune Do</em>, which is,&nbsp;<em>The Way of the Intercepting Fist</em>.)</p><h2 style=\"font-family: Roboto, sans-serif; color: rgb(17, 17, 17); margin: 30px 0px 20px; font-size: 27px; line-height: 38px;\">7 Principles for Happiness</h2><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Here are the 7 principles of happiness I identified as the framework:</p><ol style=\"padding: 0px; margin-bottom: 26px; color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px;\"><li style=\"line-height: 26px; margin-left: 21px;\">Principle #1: Focus on fulfillment.</li><li style=\"line-height: 26px; margin-left: 21px;\">Principle #2: Spend more time in your values.</li><li style=\"line-height: 26px; margin-left: 21px;\">Principle #3: Set your own happiness level.</li><li style=\"line-height: 26px; margin-left: 21px;\">Principle #4: Drive from happiness.</li><li style=\"line-height: 26px; margin-left: 21px;\">Principle #5: Don’t fall for the “If-then” trap.</li><li style=\"line-height: 26px; margin-left: 21px;\">Principle #6: Raise your frustration tolerance.</li><li style=\"line-height: 26px; margin-left: 21px;\">Principle #7: Point your camera on purpose.</li></ol><h2 style=\"font-family: Roboto, sans-serif; color: rgb(17, 17, 17); margin: 30px 0px 20px; font-size: 27px; line-height: 38px;\">Core Concepts</h2><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">I think there are fundamental concepts that help with your happiness journey:</p><ol style=\"padding: 0px; margin-bottom: 26px; color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px;\"><li style=\"line-height: 26px; margin-left: 21px;\">There are two questions for happiness:&nbsp; “How happy are you?”, and, “How happy are you with your life?” (See&nbsp;<font color=\"#4db2ec\">The Two Questions of Happiness</font>)</li><li style=\"line-height: 26px; margin-left: 21px;\">Happiness is a personal thing.&nbsp; YOUR happiness WAY, is not the WAY of others.</li><li style=\"line-height: 26px; margin-left: 21px;\">Happiness is a verb.&nbsp; It’s not static.</li></ol><h2 style=\"font-family: Roboto, sans-serif; color: rgb(17, 17, 17); margin: 30px 0px 20px; font-size: 27px; line-height: 38px;\">Bonus Tactics</h2><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">While strategies are powerful, I always find it helps to have some very practical tactics under your belt:</p><ol style=\"padding: 0px; margin-bottom: 26px; color: rgb(34, 34, 34); font-family: Verdana, Geneva, sans-serif; font-size: 15px;\"><li style=\"line-height: 26px; margin-left: 21px;\">Focus on the greater good.&nbsp; This is the sure-fire way to life yourself and others.</li><li style=\"line-height: 26px; margin-left: 21px;\">Act “as if” (How would you hold yourself if you felt happy …)</li><li style=\"line-height: 26px; margin-left: 21px;\">Grow happiness under your feet.&nbsp; (See&nbsp;<font color=\"#4db2ec\">Happiness is a Skill</font>)</li><li style=\"line-height: 26px; margin-left: 21px;\">Find your favorite happiness quotes (keep them at your finger tips) (See&nbsp;<font color=\"#4db2ec\">Happiness Quotes</font>)</li><li style=\"line-height: 26px; margin-left: 21px;\">Find a better metaphor (life is a dance, or life is an adventure) (See&nbsp;<font color=\"#4db2ec\">Use Metaphors to Find Your Motivation</font>.)</li><li style=\"line-height: 26px; margin-left: 21px;\">Change your questions to change your focus. (See&nbsp;<font color=\"#4db2ec\">Change Your Questions, Change Your Results</font>.)</li><li style=\"line-height: 26px; margin-left: 21px;\">Change your thoughts to change your feelings.</li></ol><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Here is a brief overview of each principle in The Way of Happiness …</p><h2 style=\"font-family: Roboto, sans-serif; color: rgb(17, 17, 17); margin: 30px 0px 20px; font-size: 27px; line-height: 38px;\">Principle #1: Focus on Fulfillment</h2><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">This is a way to live&nbsp;<font color=\"#4db2ec\">The Meaningful Life</font>.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">When you live a meaningful life, you make your actions, your choices, and your moments count.&nbsp; You achieve this by deciding who do you want to be, and what experiences do you want to create.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">A simple strategy to focus on fulfillment is to focus on “the greater good” and give your best where you have your best to give.&nbsp; It’s about playing to your unique strengths, and sharing your gifts with the world, or more specifically, YOUR world.&nbsp; This will help you rise above the trials and tribulations of daily living, and help you find a higher ground.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Do more meaningful things, by making meaning in the things that you already do, and choose to do.&nbsp; You are the most significant meaning maker in your life.&nbsp; A simple way to add more meaning is to identify a mission or a cause or a message you believe in.</p><h2 style=\"font-family: Roboto, sans-serif; color: rgb(17, 17, 17); margin: 30px 0px 20px; font-size: 27px; line-height: 38px;\">Principle #2: Spend More Time in Your Values</h2><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">This is a strategy that helps you live&nbsp;<font color=\"#4db2ec\">The Good Life</font>.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Living your values is one of the simplest way to add more happiness to every day.&nbsp; If you spend a lot of time at work, the best way to make the most of it, is to connect your work to your values.&nbsp; For example, if you like to learn, then master your craft.&nbsp; If you like to help others, then find a way to contribute and give back, using your skills, experience, and knowledge.&nbsp; If you value excellence, then make your work about excellence.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">When you spend more time in your values, you enjoy the journey more, regardless of the destination.</p><h2 style=\"font-family: Roboto, sans-serif; color: rgb(17, 17, 17); margin: 30px 0px 20px; font-size: 27px; line-height: 38px;\">Principle #3: Set Your Own Happiness Level</h2><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">We each have our own happiness level.&nbsp; Some people have an overall happiness of a 8 or 9 out of 10.&nbsp; For others, it’s more like a 5 or a 6.&nbsp; Embrace it, and start from where you are.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">One of the best things you can do is find simple ways to gradually improve your overall happiness level.&nbsp; One of the worst things you can do is compare your happiness level to others, or beat yourself up for not being a shiny, happy person.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">As simple as it sounds, I know several people that lead happier lives now, simply because they don’t worry about whether they are beaming with sunshine at every waking moment.&nbsp; They focus more on living their values, and focusing on fulfillment.&nbsp; The sunshine happens along the way, and in more frequent doses now.&nbsp; Sometimes they just have to take off their shades to see it.</p><h2 style=\"font-family: Roboto, sans-serif; color: rgb(17, 17, 17); margin: 30px 0px 20px; font-size: 27px; line-height: 38px;\">Principle #4: Drive from Happiness</h2><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Decide to drive from happiness.&nbsp; Happiness is a decision.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">This is where you have to look inside, and answer the tough questions.&nbsp; What do you like to do?&nbsp; What makes you happy?&nbsp; What do you want to do more of.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">It’s very easy to keep doing the things that we think others expect from us, or want for us. Instead, look inside and find the things that really do make you happy, and do more of that.</p><h2 style=\"font-family: Roboto, sans-serif; color: rgb(17, 17, 17); margin: 30px 0px 20px; font-size: 27px; line-height: 38px;\">Principle #5: Don’t Fall for the “If-Then” Trap</h2><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Don’t fall for the “if-then” or “when-then” traps … “I’ll be happy if I get that job,” “I’ll be happy when I get that house,”&nbsp; “I’ll be happy if I get that relationship,”, etc.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">It’s easy to put your happiness “out there” instead of “right here.”</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">You know what happens when you finally climb to the top of the mountain?&nbsp; There’s another mountain.&nbsp; That’s the Happiness Conundrum.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">The effective strategy is to enjoy the journey.&nbsp; Find your happiness now, here, with what you’ve got, from where you are.&nbsp; You can choose what you focus on.&nbsp; Focus on the things in your life that lift you.&nbsp; That’s the happiness way.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Most importantly, remember that it’s the journey and the destination, and sometimes the journey is all we’ve got, so make the most of it.</p><h2 style=\"font-family: Roboto, sans-serif; color: rgb(17, 17, 17); margin: 30px 0px 20px; font-size: 27px; line-height: 38px;\">Principle #6: Raise Your Frustration Tolerance</h2><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">If you raise your frustration tolerance, you can instantly raise your overall happiness level on a daily basis.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">The beauty of this insight is that it works in an instant.&nbsp; All you have to do is decide not to be frustrated by all the little things that don’t go your way on a daily basis.&nbsp; There are so many things that can cause frustration in your day to day if you let them.&nbsp; Don’t get mad at the tree, go around it.&nbsp; Don’t get frustrated by the traffic, leave earlier.&nbsp; If it happens, it happens.&nbsp; Focus on what you control, and let the rest go.&nbsp; Find the humor in it.&nbsp; Find the lesson.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Here’s how it worked instantly for me:&nbsp; The day I found out that your frustration tolerance is a limit to happiness, I raised my bar.&nbsp; I was letting too many things in my day to day, set me back.<br>The key is to practice selective intolerance, so you can live your life at a higher qualify, but roll with the punches, and deal with the setbacks, and go with the flow, while living your vision, mission, and values.</p><h2 style=\"font-family: Roboto, sans-serif; color: rgb(17, 17, 17); margin: 30px 0px 20px; font-size: 27px; line-height: 38px;\">Principle #7: Point Your Camera on Purpose</h2><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Your the director of your life.&nbsp; Point your camera at the things that you want more of.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">You get what you focus on.&nbsp; You can point your camera at more pain, or more pleasure.&nbsp; That’s a powerful choice, and it’s a powerful metaphor.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">It’s easy to test.&nbsp; Simply start pointing your camera at better scenes each day, and watch what unfolds in yourself, and the world around you.</p><p style=\"font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-bottom: 26px; overflow-wrap: break-word; color: rgb(34, 34, 34);\">Best wishes on finding YOUR path of happiness … your WAY.</p>', 12, 11, 'Admin', 3, 0, 11, '2020-09-10 23:12:37', '2020-09-10 23:12:37', '2020-09-11 20:38:40'),
(6, 'Is the Coronavirus An Urgent Message for the World?', 'is-the-coronavirus-an-urgent-message-for-the-world', 'public/uploaded/posts_image/5f5b08e89804d.jpg', 'According to psychologist and shamanic practitioner, Jose Stevens, a crisis like the new Coronavirus pandemic occurs when humanity has a major lesson to be learned or people need a “restructuring of their reality.” Instead of seeing the novel Coronavirus as an enemy, he suggests seeing it as an ally working in cooperation with us.\r\n\r\nThat might sound radical, but shifting your perspective to the bigger picture can soften feelings of fear and panic. Maybe this catastrophe isn’t random; maybe there’s a purpose behind it.\r\n\r\nHolding a larger view like this can also bring a deeper acceptance of what is, so you’re not losing precious energy fighting against reality. A shift in perspective can help you release fear and other painful emotions, which suck up your life force too. This frees up energy for healing, helping, and creative solutions.\r\n\r\nCritical Lessons from the New Coronavirus\r\nConsider some of the lessons Stevens associates with the Novel Coronavirus:\r\n\r\nDoes the new Coronavirus have an urgent message for the world? Does it have a personal message for you? Instead of seeing the coronavirus as an enemy, would it help to see it as an ally trying to wake us up? See how a shift in perspective can help lessen your fears and anxieties. #coronavirus #COVID-19 #mentalhealth #spirituality\r\n“This one is meant to cut through the vast polarization that has gripped the world in recent years. It enforces cooperation, working together for the benefit of everyone. It touches all lives, economically, socially, emotionally, intellectually, and spiritually. Not only does it do all that but it emphasizes mindfulness, paying attention, being in the moment, and not spaced out. In an interesting way it emphasizes certain more socially conscious solutions to keep the average person from falling into catastrophic job loss and financial ruin. Suddenly there have to be programs considered that bail people out of the inability to pay student loans, mortgages, medical expenses, and cope with potential job loss, childcare while needing to work and a host of other very real challenges. Hard core capitalists are forced to consider programs that they formally would have considered to be unthinkable socialist solutions to societal challenges. That’s interesting.”\r\n\r\nStevens believes the virus is saying:\r\n\r\n“Hey your way of life is unsustainable. You have your priorities scrambled. Mother Nature at any time can step in and disrupt the best laid human plans and show them to be feeble, ignorant attempts to control your world.”\r\n\r\nI invite you to reflect on each of the lessons Steven’s has identified, and to also listen for your own. Find a quiet place (at home, of course) and devote some time to contemplation. Ask yourself questions like:\r\n\r\nWhere does polarization show up in my own life?\r\n\r\nWhat can I do to cut through polarization?\r\n\r\nAre my priorities scrambled?\r\n\r\nHave I lost sight of what’s important?\r\n\r\nHow can I work together with others in this crisis and in the future for the benefit of everyone?\r\n\r\nHow can I be more mindful?\r\n\r\nWhat steps can I take to live a more eco-friendly, sustainable existence?\r\n\r\nListen for your own questions and add them to the list.\r\n\r\nIn this first article on the topic, Stevens goes on to share more insights on the Coronavirus crisis, and natural remedies that might help if you become infected.\r\n\r\nRead More: The Coronavirus: The Bigger Picture﻿\r\n\r\nThe New Corona Virus As An Ally\r\nIn his next article on the New Coronavirus, Steven explains the shamanic concept of an ally. He asks us to contemplate the possibility that the virus is a powerful ally at a critical time in our evolution:\r\n\r\n“In light of all this help we have been given, is it too much to contemplate the coronavirus as a powerful ally for humans at this critical time in our evolution? Consider that it has come along as a kind of disrupter, stopping us in our tracks to reconsider our habits, our patterns, our beliefs, our focus as humans. Perhaps everything needs a fresh look, time out so to speak. Yes, it does come with its’ inconveniences and its’ way of upsetting our need for security. Yes, some will die but then 50,000 people a year die from taking aspirin and no one blinks an eye. This is not a huge population reducer, it is just another thing that provides people an exit from the planet and there are many, many other ways as well. So, killing people is not what it is really about. It is about getting us to reevaluate our lives, reconsidering our goals, our government, our way of doing business, our economies, our health care system, our educational system, our military, our relationship with the planet, climate change, our use of resources and what we do with them and on and on. Wow, what a powerful ally it is; Just in time.”\r\n\r\nStevens then shares the standard Shamanic protocol for interacting with an ally, and receiving its message or wisdom - something you can do yourself. Because, in addition to the universal messages, maybe there’s a personal message for you.\r\n\r\nRead More: Perceiving COCID-19 As An Ally\r\n\r\nAgain, take some time to contemplate the issues Stevens brings to light in this piece. How can you become more and more part of the solution instead of part of the global problems humanity faces?\r\n\r\nGet quiet and listen for the messages you need to hear from this situation. What is it that you need to change about your life, if anything?\r\n\r\nIt might seem insensitive or irreverent to consider the coronavirus as an ally given all the pain, suffering, destruction, and death that has occurred as a result of COVID-19. I understand if you feel angry or afraid instead, and don’ like the idea of seeing the New Coronavirus as an ally. My heart goes out to everyone who has suffered and who will suffer due to this virus.\r\n\r\nBut please put this idea in the back of your mind. Our worldwide reality right now is COVID-19; there’s no escaping it. If humanity can learn from the crisis and better itself, at least the pain and suffering that has occurred won’t be for naught.\r\n\r\nSeeing the novel coronavirus as an ally doesn’t mean denial of the pandemic and its dangers. Acceptance doesn’t mean you become blasé. You still stay home to keep yourself and others safe. You practice social distancing. You use hand sanitizer and wet wipes, but you don’t hoard them. You self-isolate if you become ill. You act in a responsible way because every human life is precious.\r\n\r\nRead More: If you’re feeling stress, worry, and fear due to the coronavirus crisis, check out: Coronavirus: How to Stay Calm in A Crisis\r\n\r\nViruses and the Environment\r\nIf the idea of shamanic allies is too esoteric for you, consider this perspective from the world of science.\r\n\r\nIn their article Bats Are Not To Blame for the Coronavirus. Humans Are, Walsh and Cotovio interview two zoologists and disease experts (Cunningham and Jones) who explain how deforestation can effect bats, whom some believe are the source host of the new Coronavirus:\r\n\r\n“When a bat is stressed -- by being hunted, or having its habitat damaged by deforestation - its immune system is challenged and finds it harder to cope with pathogens it otherwise took in its stride.”\r\n\r\nThis stress can cause infections to increase and be shed. In the same way, animals caged in an open market are under stress, and may shed viruses in large numbers as well.\r\n\r\nWhile spillover of pathogens from animals to humans likely happened in the past, it didn’t have the same impact as it does in modern times with dramatically increased population numbers and unlimited worldwide travel.\r\n\r\n“Ultimately diseases like coronavirus could be here to stay, as humanity grows and spreads into places where it\'s previously had no business. Cunningham and Jones agree this will make changing human behavior an easier fix than developing a vastly expensive vaccine for each new virus.”\r\n\r\n“Destroying habitats is the cause, so restoring habitats is a solution. The coronavirus is perhaps humanity\'s first clear, indisputable sign that environmental damage can kill humans fast too. And it can also happen again, for the same reasons.”\r\n\r\nThey conclude by saying:\r\n\r\n“The ultimate lesson is that damage to the planet can also damage people more quickly and severely than the generational, gradual shifts of climate change.”\r\n\r\nThus it becomes even more imperative to take every step you can to protect the environment and the animals that live within it. Those steps will protect the humans too.\r\n\r\nRead More: 10 Easy Ways to Cut Down on Your Plastic Use\r\n\r\nLooking at the New Coronavirus as an ally or messenger, doesn’t mean it’s all good and it’s okay that people are sick and dying. Quite the contrary, it’s calling us to take compassionate action so fewer people are impacted now and in the future.', 7, 11, 'Admin', 10, 2, 11, '2020-09-10 23:19:36', '2020-09-10 23:19:36', '2020-09-22 15:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 4),
(5, 3, 1),
(6, 3, 4),
(7, 4, 1),
(8, 4, 2),
(9, 4, 3),
(10, 5, 1),
(11, 5, 2),
(12, 6, 1),
(13, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reply_comments`
--

CREATE TABLE `reply_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `replycomments` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `website_logo`, `about_website`, `about_us_text`, `about_us_image`, `facebook_link`, `twitter_link`, `instagram_link`, `youtube_link`, `email`, `mobile`, `address`, `copyright_text`, `created_at`, `updated_at`) VALUES
(1, 'ImranBD', 'public/uploaded/logo/5f5107a14b231.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia tenetur ex sunt culpa, quibusdam? Atque recusandae porro similique optio reiciendis libero vitae, at assumenda tenetur reprehenderit inventore totam mollitia, sint.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed sunt maiores, ut facilis numquam, soluta temporibus illum quibusdam dolorem consectetur, perspiciatis dolore quis odit nemo doloribus autem quo ratione assumenda. Earum natus sapiente dolorum maxime consectetur porro quia velit, nemo deserunt, incidunt tenetur perferendis officiis itaque, praesentium deleniti debitis quasi.', 'public/uploaded/logo/5f4f6ad6b3781.jpg', 'https://facebook.com', 'https://twitter.com', 'https://instagram.com', 'https://youtube.com', 'imranemon.self@gmail.com', '01755430927', 'Baliadangi', 'All rights reserved', '2020-09-02 00:00:41', '2020-09-03 09:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abutalebgmtt@gmail.com', 1, '2020-09-08 20:45:59', '2020-09-08 20:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'happy', 'happy', NULL, '2020-09-04 10:56:33', '2020-09-04 10:56:33'),
(2, 'life', 'life', NULL, '2020-09-04 10:56:41', '2020-09-04 10:56:41'),
(3, 'childhood', 'childhood', NULL, '2020-09-04 10:56:53', '2020-09-04 10:56:53'),
(4, 'aim', 'aim', NULL, '2020-09-04 10:57:01', '2020-09-04 10:57:01'),
(5, 'helth', 'helth', NULL, '2020-09-08 21:09:31', '2020-09-08 21:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'User',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_by` int(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `image`, `gender`, `provider_id`, `login_by`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$tRpKzRn5ZMoDynbbSmJtQeTqe7lsDKCw9l6wDIDm8AtjjPwwaJ82m', '01755430927', 'Baliadangi', 'public/uploaded/user_image/5f57bde561730.jpg', NULL, NULL, NULL, 1, NULL, '2020-06-28 12:31:38', '2020-09-19 19:14:41'),
(27, 'User', 'md abu  taleb', 'sosochakma@rocketmail.com', NULL, '$2y$10$Q43VpafNwX2z2apBivTbxuHqUjx0bcpHkhEWgGeTNP9vzf2faGz2u', '01899458792', 'thakurgaon', 'public/uploaded/user_image/5f51e73501bc5.jpg', 'Male', NULL, NULL, 1, NULL, '2020-09-04 11:05:25', '2020-09-04 11:05:25'),
(47, 'User', 'Md Abu Taleb', 'abutalebgmtt@gmail.com', NULL, '$2y$10$sMeMROzXdeP1FR3xvS28kelMoTDS9cCHB7O6K5ZA.Pe77Irf7sHCi', '01779325718', 'Thakurgaon', 'public/uploaded/user_image/5f57b70bab234.jpg', 'Male', NULL, NULL, 1, NULL, '2020-09-08 20:53:31', '2020-09-08 20:53:31'),
(48, 'User', 'Imran Ahmed', 'imranemon.developer@gmail.com', NULL, '$2y$10$idgDQnkiNXVTNfmt.gXgmeLoRY2ewG3DEDqcJ.Wlh0gZ2mR0uh3Bq', '01755430927', 'Baliadangi', NULL, 'Male', NULL, NULL, 1, NULL, '2020-09-09 08:21:32', '2020-09-09 08:21:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply_comments`
--
ALTER TABLE `reply_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reply_comments`
--
ALTER TABLE `reply_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
