-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Po 20.Feb 2017, 22:57
-- Verzia serveru: 5.7.11
-- Verzia PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `20feb`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `chat`
--

CREATE TABLE `chat` (
  `msg1` varchar(1800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `msg2` varchar(1800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `msg3` varchar(1800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `msg4` varchar(1800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `msg5` varchar(1800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `msg6` varchar(1800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `msg7` varchar(1800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `msg8` varchar(1800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `msg9` varchar(1800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `msg10` varchar(1800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `daily`
--

CREATE TABLE `daily` (
  `id` int(11) NOT NULL,
  `bonus` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `guild`
--

CREATE TABLE `guild` (
  `id` int(11) NOT NULL,
  `owner` bigint(20) UNSIGNED NOT NULL,
  `owner2` varchar(1800) NOT NULL,
  `name` varchar(1800) NOT NULL,
  `level` bigint(20) UNSIGNED NOT NULL,
  `food` bigint(20) UNSIGNED NOT NULL,
  `gold` bigint(20) UNSIGNED NOT NULL,
  `lcost` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(1800) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `mailbox`
--

CREATE TABLE `mailbox` (
  `mail` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) NOT NULL,
  `number` bigint(20) NOT NULL,
  `title` varchar(1800) COLLATE latin1_general_ci NOT NULL,
  `text` varchar(1800) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `message`
--

CREATE TABLE `message` (
  `msg` int(11) NOT NULL,
  `text` varchar(1800) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `ranking`
--

CREATE TABLE `ranking` (
  `id` int(11) NOT NULL,
  `number` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `stats`
--

CREATE TABLE `stats` (
  `id` int(11) NOT NULL,
  `gold` bigint(20) UNSIGNED NOT NULL,
  `attack` bigint(20) UNSIGNED NOT NULL,
  `defense` bigint(20) UNSIGNED NOT NULL,
  `food` bigint(20) UNSIGNED NOT NULL,
  `income` bigint(20) UNSIGNED NOT NULL,
  `farming` bigint(20) UNSIGNED NOT NULL,
  `battery` bigint(20) UNSIGNED NOT NULL,
  `rank` bigint(20) UNSIGNED NOT NULL,
  `floor` bigint(20) UNSIGNED NOT NULL,
  `quest` bigint(20) UNSIGNED NOT NULL,
  `qok` bigint(20) UNSIGNED NOT NULL,
  `cannon` bigint(20) UNSIGNED NOT NULL,
  `wall` bigint(20) UNSIGNED NOT NULL,
  `ccost` bigint(20) UNSIGNED NOT NULL,
  `cattack` bigint(20) UNSIGNED NOT NULL,
  `wcost` bigint(20) UNSIGNED NOT NULL,
  `wdefense` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `inv` bigint(20) UNSIGNED NOT NULL,
  `new` bigint(20) NOT NULL,
  `guild` bigint(20) UNSIGNED NOT NULL,
  `apotion` bigint(20) UNSIGNED NOT NULL,
  `dpotion` bigint(20) UNSIGNED NOT NULL,
  `diamonds` bigint(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `ftime` bigint(20) UNSIGNED NOT NULL,
  `mtime` bigint(20) UNSIGNED NOT NULL,
  `atime` bigint(20) UNSIGNED NOT NULL,
  `adtime` bigint(20) UNSIGNED NOT NULL,
  `ad2time` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `trade`
--

CREATE TABLE `trade` (
  `number` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` bigint(20) UNSIGNED NOT NULL,
  `food` bigint(20) UNSIGNED NOT NULL,
  `gold` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `worker` bigint(20) UNSIGNED NOT NULL,
  `farmer` bigint(20) UNSIGNED NOT NULL,
  `rifleman` bigint(20) UNSIGNED NOT NULL,
  `machinegunner` bigint(20) UNSIGNED NOT NULL,
  `tfarmer` bigint(20) UNSIGNED NOT NULL,
  `dog` bigint(20) UNSIGNED NOT NULL,
  `fisherman` bigint(20) UNSIGNED NOT NULL,
  `soldier` bigint(20) UNSIGNED NOT NULL,
  `sergeant` bigint(20) UNSIGNED NOT NULL,
  `gendef` bigint(20) UNSIGNED NOT NULL,
  `schutze` bigint(20) UNSIGNED NOT NULL,
  `soldad` bigint(20) UNSIGNED NOT NULL,
  `maschinengewehr` bigint(20) UNSIGNED NOT NULL,
  `leutant` bigint(20) UNSIGNED NOT NULL,
  `hauptmann` bigint(20) UNSIGNED NOT NULL,
  `hund` bigint(20) UNSIGNED NOT NULL,
  `strelec` bigint(20) UNSIGNED NOT NULL,
  `gulometcik` bigint(20) UNSIGNED NOT NULL,
  `vojak` bigint(20) UNSIGNED NOT NULL,
  `serzant` bigint(20) UNSIGNED NOT NULL,
  `pes` bigint(20) UNSIGNED NOT NULL,
  `strelets` bigint(20) UNSIGNED NOT NULL,
  `pistoleti` bigint(20) UNSIGNED NOT NULL,
  `vojnik` bigint(20) UNSIGNED NOT NULL,
  `sershant` bigint(20) UNSIGNED NOT NULL,
  `obscht` bigint(20) UNSIGNED NOT NULL,
  `kuce` bigint(20) UNSIGNED NOT NULL,
  `tiratore` bigint(20) UNSIGNED NOT NULL,
  `artigliere` bigint(20) UNSIGNED NOT NULL,
  `soldato` bigint(20) UNSIGNED NOT NULL,
  `sergente` bigint(20) UNSIGNED NOT NULL,
  `generale` bigint(20) UNSIGNED NOT NULL,
  `enfieldman` bigint(20) UNSIGNED NOT NULL,
  `gunner` bigint(20) UNSIGNED NOT NULL,
  `generalobrany` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(1800) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(1800) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(1800) COLLATE latin1_general_ci NOT NULL,
  `fraction` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `activated` int(11) NOT NULL,
  `code` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `weapon`
--

CREATE TABLE `weapon` (
  `id` int(11) NOT NULL,
  `springfield` bigint(20) UNSIGNED NOT NULL,
  `browning` bigint(20) UNSIGNED NOT NULL,
  `thompson` bigint(20) UNSIGNED NOT NULL,
  `m1garand` bigint(20) UNSIGNED NOT NULL,
  `sherman` bigint(20) UNSIGNED NOT NULL,
  `hellcat` bigint(20) UNSIGNED NOT NULL,
  `pershing` bigint(20) UNSIGNED NOT NULL,
  `kar98` bigint(20) UNSIGNED NOT NULL,
  `mp40` bigint(20) UNSIGNED NOT NULL,
  `gw43` bigint(20) UNSIGNED NOT NULL,
  `mp44` bigint(20) UNSIGNED NOT NULL,
  `mg42` bigint(20) UNSIGNED NOT NULL,
  `m1a1` bigint(20) UNSIGNED NOT NULL,
  `tiger` bigint(20) UNSIGNED NOT NULL,
  `stugv` bigint(20) UNSIGNED NOT NULL,
  `tiger2` bigint(20) UNSIGNED NOT NULL,
  `howitzer` bigint(20) UNSIGNED NOT NULL,
  `panzerstellung` bigint(20) UNSIGNED NOT NULL,
  `pps43` bigint(20) UNSIGNED NOT NULL,
  `pps41` bigint(20) UNSIGNED NOT NULL,
  `mp38` bigint(20) UNSIGNED NOT NULL,
  `zk383` bigint(20) UNSIGNED NOT NULL,
  `gulometvz24` bigint(20) UNSIGNED NOT NULL,
  `puskavz24` bigint(20) UNSIGNED NOT NULL,
  `pak38` bigint(20) UNSIGNED NOT NULL,
  `flak37` bigint(20) UNSIGNED NOT NULL,
  `grw` bigint(20) UNSIGNED NOT NULL,
  `lt38` bigint(20) UNSIGNED NOT NULL,
  `enfield` bigint(20) UNSIGNED NOT NULL,
  `sten` bigint(20) UNSIGNED NOT NULL,
  `bren` bigint(20) UNSIGNED NOT NULL,
  `bar` bigint(20) UNSIGNED NOT NULL,
  `delisle` bigint(20) UNSIGNED NOT NULL,
  `lewis` bigint(20) UNSIGNED NOT NULL,
  `vickers` bigint(20) UNSIGNED NOT NULL,
  `comet` bigint(20) UNSIGNED NOT NULL,
  `cromwell` bigint(20) UNSIGNED NOT NULL,
  `carcano` bigint(20) UNSIGNED NOT NULL,
  `skoda` bigint(20) UNSIGNED NOT NULL,
  `brixia` bigint(20) UNSIGNED NOT NULL,
  `breda` bigint(20) UNSIGNED NOT NULL,
  `ovp` bigint(20) UNSIGNED NOT NULL,
  `baretta` bigint(20) UNSIGNED NOT NULL,
  `fucile` bigint(20) UNSIGNED NOT NULL,
  `p43` bigint(20) UNSIGNED NOT NULL,
  `carro` bigint(20) UNSIGNED NOT NULL,
  `mosinnagant` bigint(20) UNSIGNED NOT NULL,
  `minometvz40` bigint(20) UNSIGNED NOT NULL,
  `maxim` bigint(20) UNSIGNED NOT NULL,
  `kv2` bigint(20) UNSIGNED NOT NULL,
  `dp27` bigint(20) UNSIGNED NOT NULL,
  `zis3` bigint(20) UNSIGNED NOT NULL,
  `t34` bigint(20) UNSIGNED NOT NULL,
  `is2` bigint(20) UNSIGNED NOT NULL,
  `svt40` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `working`
--

CREATE TABLE `working` (
  `id` int(11) NOT NULL,
  `fyes` bigint(20) UNSIGNED NOT NULL,
  `myes` bigint(20) UNSIGNED NOT NULL,
  `bonus` bigint(20) UNSIGNED NOT NULL,
  `ayes` bigint(20) UNSIGNED NOT NULL,
  `fwork` bigint(20) UNSIGNED NOT NULL,
  `mwork` bigint(20) UNSIGNED NOT NULL,
  `tfwork` bigint(20) UNSIGNED NOT NULL,
  `tyes` bigint(20) UNSIGNED NOT NULL,
  `fishermanwork` bigint(20) UNSIGNED NOT NULL,
  `adyes` bigint(20) UNSIGNED NOT NULL,
  `ad2yes` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `chat`
--
ALTER TABLE `chat` ADD FULLTEXT KEY `msg2` (`msg2`);

--
-- Indexy pre tabuľku `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `guild`
--
ALTER TABLE `guild`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `mailbox`
--
ALTER TABLE `mailbox`
  ADD PRIMARY KEY (`mail`);

--
-- Indexy pre tabuľku `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg`);

--
-- Indexy pre tabuľku `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`number`);

--
-- Indexy pre tabuľku `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `weapon`
--
ALTER TABLE `weapon`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `working`
--
ALTER TABLE `working`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `daily`
--
ALTER TABLE `daily`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `guild`
--
ALTER TABLE `guild`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `mailbox`
--
ALTER TABLE `mailbox`
  MODIFY `mail` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `message`
--
ALTER TABLE `message`
  MODIFY `msg` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `trade`
--
ALTER TABLE `trade`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `weapon`
--
ALTER TABLE `weapon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pre tabuľku `working`
--
ALTER TABLE `working`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
