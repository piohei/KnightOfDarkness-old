CREATE TABLE `ShoutBox` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `FK_USER` int(11) unsigned default NULL,
  `NICK` varchar(64) NOT NULL default '',
  `MESSAGE` text NOT NULL,
  `TIME` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

-- Tabela ShoutBoxUser jest wykorzystywana wylacznie w przykladzie, by pokazac wszystkie mozliwosci klasy.
-- Jesli nie chcemy korzystac ze specyficznego wygladu wiadomosci dla kazdego uzytkownika, lub tez mamy wlasna tabele uzytkownikow,
-- ponizszej tabeli nie zakladamy.
CREATE TABLE `ShoutBoxUser` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `NICK` varchar(64) NOT NULL default '',
  `PASS` varchar(40) NOT NULL default '',
  `COLOR` varchar(6) default NULL,
  `LAST_ACTIVE_TIME` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `NICK` (`NICK`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



--
-- Jesli robicie upgrade z wersji <=0.8, to trzeba zmodyfikowac tabele nastepujacymi zapytaniami:
--
ALTER TABLE `ShoutBox` MODIFY message text NOT NULL default '';
ALTER TABLE `ShoutBoxUser` ADD `LAST_ACTIVE_TIME` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP;
ALTER TABLE `ShoutBoxUser` ADD UNIQUE `NICK` (`NICK`);