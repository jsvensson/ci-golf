CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(30) DEFAULT '',
  `lastname` varchar(50) DEFAULT '',
  `status` int(1) NOT NULL DEFAULT '1',
  `level` int(1) NOT NULL DEFAULT '1',
  `password` char(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
