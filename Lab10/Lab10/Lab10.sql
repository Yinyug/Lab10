DROP DATABASE IF EXISTS `Lab10`;
CREATE DATABASE IF NOT EXISTS `Lab10` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `Lab10`;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20)  NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30)  NOT NULL,
  `age` int(3) NOT NULL,
  PRIMARY KEY (`userid`)
);

INSERT INTO `user` (`userid`, `username`, `password`, `firstname`, `lastname`, `age`) VALUES
(1, 'sam', 'abc1234', 'Sam', 'Yau', 50),
(2, 'kenwong', 'zxcvbnm', 'Ken', 'Wong', 18),
(3, 'bencheung', 'asdfgqwer', 'Ben', 'Cheung', 23),
(4, 'kennychan', 'kennychan12345', 'Kennny', 'Chan', 18);


