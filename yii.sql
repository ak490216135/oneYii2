-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-09-28 17:27:53
-- 服务器版本： 5.5.40
-- PHP Version: 5.5.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii`
--

-- --------------------------------------------------------

--
-- 表的结构 `yii_base`
--

CREATE TABLE `yii_base` (
  `id` int(10) NOT NULL COMMENT 'ID',
  `name` varchar(100) NOT NULL COMMENT '站点名称',
  `domain` varchar(100) NOT NULL COMMENT '域名',
  `title` varchar(100) NOT NULL COMMENT '站点标题',
  `keywords` varchar(100) NOT NULL COMMENT '关键字',
  `description` text NOT NULL COMMENT '简介',
  `uploadtype` text NOT NULL COMMENT '上传类型',
  `email` varchar(100) NOT NULL COMMENT '站长邮箱'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='站点基本信息表';

--
-- 转存表中的数据 `yii_base`
--

INSERT INTO `yii_base` (`id`, `name`, `domain`, `title`, `keywords`, `description`, `uploadtype`, `email`) VALUES
(1, 'Yii2', 'http://www.yii.com', 'YII2TEST', 'YII2TEST KEYWORLDS', 'YII2TEST DESCRIPTION', 'jpg,jpeg,png,gif,ico,bmp', 'yii@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `yii_cat`
--

CREATE TABLE `yii_cat` (
  `catid` int(10) NOT NULL COMMENT '栏目ID',
  `catname` varchar(64) NOT NULL COMMENT '栏目名称',
  `fcatid` int(10) NOT NULL DEFAULT '0' COMMENT '父栏目ID',
  `order` int(1) NOT NULL DEFAULT '0' COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='栏目表';

--
-- 转存表中的数据 `yii_cat`
--

INSERT INTO `yii_cat` (`catid`, `catname`, `fcatid`, `order`) VALUES
(1, '首页文章', 0, 0),
(2, '栏目2', 0, 0),
(3, '栏目3', 0, 0),
(4, '栏目4', 0, 0),
(7, 'hfhhdfhfdhf', 0, 0),
(5, '栏目5', 0, 0),
(6, '栏目6', 3, 9),
(8, 'ppp', 7, 99);

-- --------------------------------------------------------

--
-- 表的结构 `yii_comment`
--

CREATE TABLE `yii_comment` (
  `id` int(10) NOT NULL COMMENT 'ID',
  `nid` int(10) NOT NULL COMMENT '对应文章ID',
  `date` int(10) NOT NULL COMMENT '评论时间',
  `name` varchar(100) NOT NULL DEFAULT '匿名' COMMENT '评论发布人名称',
  `content` text NOT NULL COMMENT '评论内容',
  `d` int(10) NOT NULL DEFAULT '0' COMMENT '顶贴数',
  `ip` varchar(15) NOT NULL COMMENT 'IP',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '审核'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章评论表';

-- --------------------------------------------------------

--
-- 表的结构 `yii_news`
--

CREATE TABLE `yii_news` (
  `id` int(10) NOT NULL COMMENT '文章ID',
  `title` varchar(64) NOT NULL COMMENT '标题',
  `pic` text NOT NULL COMMENT '封面图',
  `description` text NOT NULL COMMENT '简介',
  `content` text NOT NULL COMMENT '内容',
  `date` int(16) NOT NULL COMMENT '添加时间',
  `catid` int(10) NOT NULL COMMENT '栏目ID',
  `order` int(1) NOT NULL COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章表';

--
-- 转存表中的数据 `yii_news`
--

INSERT INTO `yii_news` (`id`, `title`, `pic`, `description`, `content`, `date`, `catid`, `order`) VALUES
(2, 'CREATIVE MINDS', 'uploads/20160928113855889.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.', 1475033935, 1, 0),
(3, 'CREATIVE HEARTS', 'uploads/20160928113938581.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\n', 1475033978, 1, 0),
(4, 'CREATIVE IDEAS', 'uploads/20160928114010442.jpg', 'Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.', 'Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nNunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nNunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nNunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nNunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\n', 1475034010, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `yii_page`
--

CREATE TABLE `yii_page` (
  `id` int(10) NOT NULL COMMENT 'ID',
  `catdir` varchar(100) NOT NULL COMMENT '单页路径名',
  `title` varchar(100) NOT NULL COMMENT '单页标题',
  `content` text NOT NULL COMMENT '单页内容'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='单页表';

--
-- 转存表中的数据 `yii_page`
--

INSERT INTO `yii_page` (`id`, `catdir`, `title`, `content`) VALUES
(1, '123', '123', '321'),
(2, '222', '222', '222'),
(5, '99999', '9999', '999999'),
(4, '444444', '444444444', '44444444444444444444444444444');

-- --------------------------------------------------------

--
-- 表的结构 `yii_post`
--

CREATE TABLE `yii_post` (
  `id` int(10) NOT NULL COMMENT 'ID',
  `title` varchar(100) NOT NULL COMMENT '推荐位标题',
  `description` text NOT NULL COMMENT '推荐位简介',
  `pic` varchar(100) NOT NULL COMMENT '推荐位封面图',
  `order` int(10) NOT NULL COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='推荐位列表';

--
-- 转存表中的数据 `yii_post`
--

INSERT INTO `yii_post` (`id`, `title`, `description`, `pic`, `order`) VALUES
(1, 'Yii2', 'An exclusive HTML5/CSS3 freebie by Peter Finlan, for Codrops', 'uploads/postpic/20160906172348615.jpg', 0),
(2, 'A CREATIVE PORTFOLIO TEMPLATE', 'Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent id tempor ipsum. Fusce at massa ac nunc porta fringilla sed eget neque. Quisque quis pretium nulla. Fusce eget bibendum neque, vel volutpat augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus.', '', 0),
(3, 'LOVE WHAT YOU DO, AND YOU''LL DO IT WELL', 'null', '', 0),
(4, 'phone right', '手机图右侧', '', 0),
(5, 'I GOT 99 PROBLEMS', 'BUT DESIGN ''AINT ONE', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `yii_post_list`
--

CREATE TABLE `yii_post_list` (
  `id` int(10) NOT NULL COMMENT 'id',
  `pid` int(10) NOT NULL COMMENT '所属推荐位',
  `title` varchar(100) NOT NULL COMMENT '标题',
  `url` varchar(100) NOT NULL COMMENT '地址',
  `pic` varchar(100) NOT NULL COMMENT '图片',
  `date` int(10) NOT NULL COMMENT '添加日期',
  `order` int(10) NOT NULL COMMENT '排序',
  `description` text NOT NULL COMMENT '简介'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='推荐位列表表';

--
-- 转存表中的数据 `yii_post_list`
--

INSERT INTO `yii_post_list` (`id`, `pid`, `title`, `url`, `pic`, `date`, `order`, `description`) VALUES
(2, 1, 'pp', 'pppp', 'uploads/postlistpic/20160908153202496.jpg', 1231, 0, 'pppp'),
(3, 3, 'DIGITAL DESIGN', '', '', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.'),
(4, 3, 'WEB DEVELOPMENT', '', '', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interd.'),
(5, 3, 'CREATIVE DIRECTION', '', '', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis i'),
(6, 4, 'RESPONSIVE DESIGN SPECIALISTS', '', '', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.'),
(7, 4, 'BOOTSTRAP PROFESSIONALS', '', '', 0, 0, 'Mauris ultrices odio vitae nulla ultrices iaculis. Nulla rhoncus odio eu lectus faucibus facilisis. Maecenas ornare augue vitae sollicitudin accumsan.\r\n\r\nMauris ultrices odio vitae nulla ultrices iaculis. Nulla rhoncus odio eu lectus faucibus facilisis. Maecenas ornare augue vitae sollicitudin accumsan.');

-- --------------------------------------------------------

--
-- 表的结构 `yii_user`
--

CREATE TABLE `yii_user` (
  `id` int(16) NOT NULL COMMENT '用户ID',
  `username` varchar(32) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `name` varchar(64) NOT NULL COMMENT '姓名',
  `date` int(10) NOT NULL DEFAULT '0' COMMENT '注册日期',
  `at` varchar(100) NOT NULL COMMENT 'accesstoken',
  `ak` varchar(100) NOT NULL COMMENT 'authkey'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表';

--
-- 转存表中的数据 `yii_user`
--

INSERT INTO `yii_user` (`id`, `username`, `password`, `name`, `date`, `at`, `ak`) VALUES
(1, 'admin@qq.com', '652400860ba7b0cf0430133773d4e0ed', 'FTWWWWWWWWWW', 1451635991, '', ''),
(2, '490216135@qq.com', '652400860ba7b0cf0430133773d4e0ed', 'FTW', 1451635999, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yii_base`
--
ALTER TABLE `yii_base`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yii_cat`
--
ALTER TABLE `yii_cat`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `yii_comment`
--
ALTER TABLE `yii_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yii_news`
--
ALTER TABLE `yii_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yii_page`
--
ALTER TABLE `yii_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yii_post`
--
ALTER TABLE `yii_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yii_post_list`
--
ALTER TABLE `yii_post_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yii_user`
--
ALTER TABLE `yii_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `yii_base`
--
ALTER TABLE `yii_base`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `yii_cat`
--
ALTER TABLE `yii_cat`
  MODIFY `catid` int(10) NOT NULL AUTO_INCREMENT COMMENT '栏目ID', AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `yii_comment`
--
ALTER TABLE `yii_comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID';
--
-- 使用表AUTO_INCREMENT `yii_news`
--
ALTER TABLE `yii_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '文章ID', AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `yii_page`
--
ALTER TABLE `yii_page`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `yii_post`
--
ALTER TABLE `yii_post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `yii_post_list`
--
ALTER TABLE `yii_post_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `yii_user`
--
ALTER TABLE `yii_user`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT COMMENT '用户ID', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
