CREATE TABLE `pagedata` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pageid` varchar(20) NOT NULL,
 `sectionid` varchar(20) NOT NULL,
 `data` varchar(50000) DEFAULT NULL,
 PRIMARY KEY (`id`)
)
