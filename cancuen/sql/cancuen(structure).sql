-- phpMyAdmin SQL Dump
-- version 2.6.0-rc2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Oct 11, 2004 at 11:44 AM
-- Server version: 4.0.21
-- PHP Version: 4.3.7
-- 
-- Database: `winbridgedb`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `article`
-- 

DROP TABLE IF EXISTS article;
CREATE TABLE article (
  idarticle int(11) NOT NULL auto_increment,
  imgpath varchar(255) default NULL,
  title varchar(255) NOT NULL default '',
  content text NOT NULL,
  idparent int(11) NOT NULL default '0',
  PRIMARY KEY  (idarticle)
) TYPE=MyISAM COMMENT='Esta tabla guardará informacion sobre informacion especifica';

-- --------------------------------------------------------

-- 
-- Table structure for table `comments`
-- 

DROP TABLE IF EXISTS comments;
CREATE TABLE comments (
  id int(11) NOT NULL auto_increment,
  user varchar(20) NOT NULL default '0',
  title varchar(100) NOT NULL default '',
  comment text NOT NULL,
  dateposted timestamp(14) NOT NULL,
  replies int(11) default '0',
  views int(11) default '0',
  idparent int(11) default '0',
  PRIMARY KEY  (id),
  KEY user (user)
) TYPE=MyISAM PACK_KEYS=0 COMMENT='comments tables';

-- --------------------------------------------------------

-- 
-- Table structure for table `image`
-- 

DROP TABLE IF EXISTS image;
CREATE TABLE image (
  id int(11) NOT NULL auto_increment,
  cat int(11) default '1',
  name varchar(100) NOT NULL default '',
  description varchar(100) NOT NULL default 'Alguna imagen',
  pathimage varchar(255) default NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM COMMENT='para la galería de imágenes';

-- --------------------------------------------------------

-- 
-- Table structure for table `imgcategory`
-- 

DROP TABLE IF EXISTS imgcategory;
CREATE TABLE imgcategory (
  id int(11) NOT NULL auto_increment,
  namecategory varchar(100) NOT NULL default '',
  pathimage varchar(255) default NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM COMMENT='Categoria para la galería de imágenes';

-- --------------------------------------------------------

-- 
-- Table structure for table `imgcomments`
-- 

DROP TABLE IF EXISTS imgcomments;
CREATE TABLE imgcomments (
  id int(11) NOT NULL auto_increment,
  idImg int(11) NOT NULL default '0',
  user varchar(255) NOT NULL default '',
  comment text NOT NULL,
--  show enum('0','1') default '0',
  cat int(11) NOT NULL default '0',
  PRIMARY KEY  (id)
) TYPE=MyISAM COMMENT='This table will save the comments of the users';

-- --------------------------------------------------------

-- 
-- Table structure for table `modules`
-- 

DROP TABLE IF EXISTS modules;
CREATE TABLE modules (
  id int(11) NOT NULL auto_increment,
  description varchar(50) NOT NULL default '',
  name varchar(50) NOT NULL default '',
  PRIMARY KEY  (id)
) TYPE=MyISAM COMMENT='This table is for save the modules that are installed';

-- --------------------------------------------------------

-- 
-- Table structure for table `news`
-- 

DROP TABLE IF EXISTS news;
CREATE TABLE news (
  id int(11) NOT NULL auto_increment,
  title varchar(100) NOT NULL default '',
  shortnew text NOT NULL,
  longnew text NOT NULL,
  pathimage varchar(255) NOT NULL default '',
  date timestamp(14) NOT NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM COMMENT='This table is for save the news or other text';

-- --------------------------------------------------------

-- 
-- Table structure for table `ou`
-- 

DROP TABLE IF EXISTS ou;
CREATE TABLE ou (
  time time NOT NULL default '00:00:00',
  ip int(4) unsigned NOT NULL default '0'
) TYPE=MyISAM;

-- --------------------------------------------------------

-- 
-- Table structure for table `statics`
-- 

DROP TABLE IF EXISTS statics;
CREATE TABLE statics (
  id bigint(20) NOT NULL auto_increment,
  today varchar(10) NOT NULL default '',
  date timestamp(14) NOT NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM COMMENT='statics module save visits to the page';

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

DROP TABLE IF EXISTS user;
CREATE TABLE user (
  iduser int(10) unsigned NOT NULL auto_increment,
  nombre varchar(50) NOT NULL default '',
  apellido varchar(50) NOT NULL default '',
  direccion varchar(100) NOT NULL default '',
  telefono varchar(9) NOT NULL default '',
  promocion varchar(4) NOT NULL default '1981',
  ocupacion varchar(50) NOT NULL default 'Secretaria',
  tema varchar(50) NOT NULL default '1981',
  email varchar(100) default NULL,
  url varchar(255) default NULL,
  user varchar(20) NOT NULL default '',
  password varchar(100) NOT NULL default '',
  pathavatar varchar(255) default './modules/user/images/avatar/000.gif',
  PRIMARY KEY  (iduser),
  UNIQUE KEY iduser (iduser),
  UNIQUE KEY nombre (user)
) TYPE=MyISAM COMMENT='Tabla para almacenar datos del usuario';

-- --------------------------------------------------------

-- 
-- Table structure for table `usersonline`
-- 

DROP TABLE IF EXISTS usersonline;
CREATE TABLE usersonline (
  timestamp int(15) NOT NULL default '0',
  ip varchar(40) NOT NULL default '',
  file varchar(100) NOT NULL default '',
  KEY timestamp (timestamp),
  KEY ip (ip),
  KEY file (file)
) TYPE=MyISAM;

-- --------------------------------------------------------

-- 
-- Table structure for table `video`
-- 

DROP TABLE IF EXISTS video;
CREATE TABLE video (
  id int(11) NOT NULL auto_increment,
  title varchar(100) NOT NULL default '',
  description text NOT NULL,
  version float NOT NULL default '0',
  size double NOT NULL default '0',
  date datetime NOT NULL default '0000-00-00 00:00:00',
  hints int(11) NOT NULL default '0',
  pathvideo varchar(255) NOT NULL default '',
  pathscreenshot varchar(255) NOT NULL default '',
  PRIMARY KEY  (id)
) TYPE=MyISAM COMMENT='This table is maded for the information of videos';
