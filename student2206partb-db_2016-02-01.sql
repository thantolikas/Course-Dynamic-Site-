-- phpMyAdmin SQL Dump
-- version 4.2.13.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 01 Φεβ 2016 στις 20:03:43
-- Έκδοση διακομιστή: 5.5.41
-- Έκδοση PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `student2206partb`
--
CREATE DATABASE IF NOT EXISTS `student2206partb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `student2206partb`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `announcements`
--

CREATE TABLE `announcements` (
`id` int(11) NOT NULL,
  `date` text NOT NULL,
  `subject` text NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `announcements`
--

INSERT INTO `announcements` (`id`, `date`, `subject`, `desc`) VALUES
(1, '01/02/2016', 'Έναρξη μαθημάτων', 'Τα μαθήματα αρχίζουν την Δευτέρα 17/12/2008'),
(2, '01/02/2016', 'Ανάρτηση εργασίας', 'Η 1η εργασία έχει ανακοινωθεί. '),
(3, '01/02/2016', 'Υποβλήθηκε η εργασία', ' Η ημερομηνία παράδοσης της εργασίας είναι 12/5/2009'),
(4, '01/02/2016', 'Υποβλήθηκε η εργασία', ' Η ημερομηνία παράδοσης της εργασίας είναι 15/5/2009');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `documents`
--

CREATE TABLE `documents` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `documents`
--

INSERT INTO `documents` (`id`, `title`, `desc`, `path`) VALUES
(1, 'Έγγραφο 1', 'Περιγραφή εγγράφου', 'file1.doc'),
(2, 'Έγγραφο 2', 'Περιγραφή εγγράφου', 'file2.doc');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `projects`
--

CREATE TABLE `projects` (
`id` int(11) NOT NULL,
  `goals` text NOT NULL,
  `path` text NOT NULL,
  `delivelables` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `projects`
--

INSERT INTO `projects` (`id`, `goals`, `path`, `delivelables`, `date`) VALUES
(1, 'στόχος 1,στόχος 2,...', 'ergasia1.doc', 'Γραπτή αναφορά σε word,Παρουσίαση σε powerpoint', '12/5/2009'),
(2, 'στόχος 1, στόχος 2,...', 'ergasia2.doc', 'Γραπτή αναφορά σε word,Παρουσίαση σε powerpoint', '15/5/2009');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE `user` (
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `loginname` text NOT NULL,
  `password` text NOT NULL,
  `role` enum('Tutor','Student') NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`name`, `surname`, `loginname`, `password`, `role`, `id`) VALUES
('Thanasis', 'Tolikas', 'atolikas@csd.auth.gr', '22111', 'Student', 1),
('Tutor', 'Tutoridis', 'tutor@csd.auth.gr', '22111', 'Tutor', 2),
('Daisy', 'Qouir', 'qouirdaisy@csd.auth.gr', '22111', 'Student', 3);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `announcements`
--
ALTER TABLE `announcements`
 ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `documents`
--
ALTER TABLE `documents`
 ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `announcements`
--
ALTER TABLE `announcements`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT για πίνακα `documents`
--
ALTER TABLE `documents`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT για πίνακα `projects`
--
ALTER TABLE `projects`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT για πίνακα `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
