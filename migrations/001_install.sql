CREATE TABLE IF NOT EXISTS `frontusers` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `password` varchar(255) NOT NULL,
    `group_id` int(11) NOT NULL,
    `email` varchar(255) NOT NULL,
    `last_login` int(11)  NOT NULL,
    `login_hash` varchar(255) NOT NULL,
    `last_hash` varchar(255) NOT NULL,
    `profile_fields` text NOT NULL,
    `created_at` int(11)  DEFAULT NULL,
    `updated_at` int(11)  DEFAULT NULL,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
