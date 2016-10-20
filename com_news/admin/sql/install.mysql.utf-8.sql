DROP TABLE IF EXISTS '#_news';

CREATE TABLE IF NOT EXISTS '#_news' (
	'id' int(11) NOT NULL AUTO_INCREMENT,
	'title' varchar(25) NOT NULL,
	'published' tinyint(4) DEFAULT NULL,
	'text' text NOT NULL,
	'images' varchar(1024) NOT NULL DEFAULT '',
	'publish_up' datetime DEFAULT NULL,
	'alias' varchar(45) DEFAULT NULL,
	PRIMARY KEY ('id')
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO INCREMENT=11;