-- --------------------------------------------------------

--
-- 洲 `continent`
--

DROP TABLE IF EXISTS `continent`;
CREATE TABLE `continent` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `code` smallint unsigned NOT NULL default '0',
  `name` text NOT NULL,
  PRIMARY KEY  (`id`)
);

-- --------------------------------------------------------

--
-- 国家 `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `code` smallint unsigned NOT NULL default '0',
  `name` text NOT NULL,
  PRIMARY KEY  (`id`)
);

-- --------------------------------------------------------

--
-- 省份 `province`
--

DROP TABLE IF EXISTS `province`;
CREATE TABLE `province` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `code` smallint unsigned NOT NULL default '0',
  `name` text NOT NULL,
  PRIMARY KEY  (`id`)
);

-- --------------------------------------------------------

--
-- 县 `county`
--

DROP TABLE IF EXISTS `county`;
CREATE TABLE `county` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `code` smallint unsigned NOT NULL default '0',
  `name` text NOT NULL,
  PRIMARY KEY  (`id`)
);

-- --------------------------------------------------------

--
-- 镇 `town`
--

DROP TABLE IF EXISTS `town`;
CREATE TABLE `town` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `code` smallint unsigned NOT NULL default '0',
  `name` text NOT NULL,
  PRIMARY KEY  (`id`)
);

-- --------------------------------------------------------

--
-- 村 `village`
--

DROP TABLE IF EXISTS `village`;
CREATE TABLE `village` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `code` smallint unsigned NOT NULL default '0',
  `name` text NOT NULL,
  PRIMARY KEY  (`id`)
);