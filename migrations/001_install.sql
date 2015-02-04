CREATE TABLE IF NOT EXISTS `menus` (
    `menu_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `menu_title` varchar(255) NOT NULL,
    `menu_description` text,
    `menu_price` varchar(255) NOT NULL,
    `menu_reserve` tinyint(1) NOT NULL DEFAULT '0',
    `menu_start` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
    `menu_end` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
    `menu_virtual_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
    `menu_publication_status` tinyint(1) NOT NULL,
    `menu_publication_start` datetime DEFAULT NULL,
    `menu_publication_end` datetime DEFAULT NULL,
    `menu_created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
    `menu_updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`menu_id`),
    KEY `menu_created_at` (`menu_created_at`),
    KEY `menu_updated_at` (`menu_updated_at`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
