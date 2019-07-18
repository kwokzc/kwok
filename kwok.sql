-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2019-07-18 18:13:04
-- 服务器版本： 5.6.38
-- PHP 版本： 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `kwok`
--

-- --------------------------------------------------------

--
-- 表的结构 `kwok_asset_type`
--

CREATE TABLE `kwok_asset_type` (
  `id` int(11) NOT NULL COMMENT '资产类型表id',
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '交易代码',
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名字',
  `jiaoyisuo` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '交易所',
  `changneiwai` int(2) DEFAULT NULL COMMENT '场内场外标识',
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '资产类型',
  `attributes_id` int(11) NOT NULL COMMENT '属性id，对应资产类型属性表id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `kwok_asset_type_ attributes`
--

CREATE TABLE `kwok_asset_type_ attributes` (
  `id` int(11) NOT NULL COMMENT '资产类型属性表id',
  `pid` int(11) NOT NULL COMMENT '父级id',
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名字'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `kwok_love`
--

CREATE TABLE `kwok_love` (
  `id` int(11) NOT NULL COMMENT '主键',
  `user_id` int(4) NOT NULL COMMENT '作者id,对应kwok_user表id',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '标题',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '内容',
  `location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '地点',
  `type_id` int(4) NOT NULL COMMENT '类型id主键,对应kwok_timeline_type表的id',
  `look_permission` int(4) NOT NULL DEFAULT '1' COMMENT '查看权限;1公开,0隐私',
  `time` int(10) DEFAULT NULL COMMENT '发表时间,不设置为草稿状态',
  `status` int(4) NOT NULL DEFAULT '1' COMMENT '状态;1为正常,0为删除',
  `create_time` int(10) NOT NULL COMMENT '数据创建时间',
  `update_id` int(10) DEFAULT NULL COMMENT '更新记录对应的id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='时间线记录表';

--
-- 转存表中的数据 `kwok_love`
--

INSERT INTO `kwok_love` (`id`, `user_id`, `title`, `content`, `location`, `type_id`, `look_permission`, `time`, `status`, `create_time`, `update_id`) VALUES
(1, 2, '萌芽', '猛然得知，他是校友，年久的记忆翻滚而至…… <br> 忐忑而又欢喜地发送了时隔三年的第一条消息……', NULL, 0, 1, 1470326400, 1, 1470326400, NULL),
(2, 1, '再次联系', '时隔半月，才看到这个已经不再使用的QQ收到她发给我的消息。<br />\r\n时隔三年，我们又一次联系上，心中久久不能平静。。。', '', 2, 1, 1471536000, 1, 1563437192, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `kwok_love_type`
--

CREATE TABLE `kwok_love_type` (
  `id` int(11) NOT NULL COMMENT '时间线类型id主键',
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '类型名称',
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '类型',
  `div_background` char(7) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圆形div背景颜色',
  `i_color` char(7) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'i标签color',
  `status` int(4) NOT NULL DEFAULT '1' COMMENT '状态;1为启用,0为禁用',
  `user_id` int(4) NOT NULL COMMENT '用户表id',
  `create_time` int(10) NOT NULL COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='时间线类型表';

--
-- 转存表中的数据 `kwok_love_type`
--

INSERT INTO `kwok_love_type` (`id`, `name`, `type`, `div_background`, `i_color`, `status`, `user_id`, `create_time`) VALUES
(1, '心', '<i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i>', '#f65b5b', '#fff', 1, 1, 1),
(2, '笑脸', '<i class=\"fa fa-smile-o\" aria-hidden=\"true\"></i>', '#6da1a8', '', 1, 1, 1),
(3, '消息', '<i class=\"fa fa-commenting\" aria-hidden=\"true\"></i>', '#2682d1', '', 1, 1, 1563373351);

-- --------------------------------------------------------

--
-- 表的结构 `kwok_user`
--

CREATE TABLE `kwok_user` (
  `id` int(4) UNSIGNED NOT NULL COMMENT '表id主键',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '用户名',
  `password` char(40) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密码',
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '邮箱',
  `is_admin` int(1) NOT NULL DEFAULT '0' COMMENT '0是普通,1是管理员',
  `wx_id` int(100) DEFAULT NULL COMMENT '微信登录返回id',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '状态;1为启用,0为禁用',
  `create_time` int(10) NOT NULL COMMENT '创建时间',
  `update_time` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `kwok_user`
--

INSERT INTO `kwok_user` (`id`, `name`, `password`, `email`, `is_admin`, `wx_id`, `status`, `create_time`, `update_time`) VALUES
(1, 'Kwok', '1161e6ffd3637b302a5cd74076283a7bd1fc20d3', 'admin@ikwok.cn', 0, NULL, 1, 1562999814, 1563020820),
(2, 'Tang', '4170ac2a2782a1516fe9e13d7322ae482c1bd594', '2037263843@qq.com', 0, NULL, 1, 1563071822, 1563071822);

-- --------------------------------------------------------

--
-- 表的结构 `love`
--

CREATE TABLE `love` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `love_timeline`
--

CREATE TABLE `love_timeline` (
  `id` int(10) UNSIGNED NOT NULL,
  `time` datetime NOT NULL,
  `type` enum('text','mood','picture','movie','love') CHARACTER SET utf8 NOT NULL DEFAULT 'text',
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `text` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `location` varchar(200) CHARACTER SET utf8 DEFAULT '',
  `timemark` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `author` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `look` tinyint(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `love_timeline`
--

INSERT INTO `love_timeline` (`id`, `time`, `type`, `title`, `text`, `location`, `timemark`, `author`, `look`) VALUES
(1, '2016-08-05 00:00:00', 'mood', '萌芽', '猛然得知，他是校友，年久的记忆翻滚而至…… <br>忐忑而又欢喜地发送了时隔三年的第一条消息……', '', 1, 2, 1),
(2, '2016-08-19 19:23:30', 'text', '再次联系', '时隔半月，才看到这个已经不再使用的QQ收到她发给我的消息。<br>时隔三年，我们又一次联系上，心中久久不能平静。。。', '', 1, 1, 1),
(3, '2016-08-19 19:42:45', 'mood', '悸动', '期间也看到了他已弃用QQ的签名，也已逐渐放弃收到回复的期许，一切不过是妄想罢了，回复了又能怎样？<br>\n同学聚会刚到家，时间就是如此巧妙，刚打开手机就收到他的消息，莫名亢奋！<br>\n加了现在的QQ，还和五年前第一次加我一样，头像依然很“独特”……', '', 1, 2, 1),
(4, '2016-09-08 11:15:36', 'mood', '心中思念', '在她开学去郑州的路上，虽然没有聊天联系，但却不停的看手机、刷新空间，明明我们之间没有什么。', '', 1, 1, 1),
(5, '2016-09-09 22:00:00', 'mood', '星火燎原', '开学了，今晚入住宿舍，也睡不着，就想和他聊天。☺️☺️☺️确实聊到很晚，开心^_^', '', 0, 2, 1),
(6, '2016-09-12 23:02:15', 'text', '军训', '虽然军训比较苦，军姿站到腿脚硬疼，听着教官不时传来的鞭打，但一旦解散必然是拿起手机开始找她。', '', 1, 1, 1),
(7, '2016-10-01 08:15:36', 'text', '记得想我', '十月一了，虽是同一个家乡，但却并没有一同回去。<br>厚脸皮的我告诉和我没有关系的你，“记得想我！”。', '', 1, 1, 1),
(8, '2016-10-01 09:00:00', 'text', '我喜欢你', '国庆小长假，他回家了，他走的那天，情绪莫名的异样。\r<br>\r<br>时间飞快，已经开学有小一个月了，我对他的情愫也飞涨。这些天，没了聊天觉得很无力乏味，鸡毛蒜皮的小事也想跟他说一说，聊天的时候总是那么的开心。但烦心事也不少，他总是要与我保持距离，频繁的暗示他总是捉摸不透，我也总在“他喜欢我”与“不喜欢我”这两个想法中徘徊。做他的小迷妹，实则暗示；催他给我找一个嫂子，≖_≖ 多么希望他回一句，你就是……   \r<br>思绪杂乱无章，我俩到底是有缘无分，可公交上收到的一句“记得想我”，又让我多了一份甜蜜，多了一丝希望。。。\r<br>傻瓜，你已经走进我的心里，怎会不想ಠ_ಠ ', '', 1, 2, 1),
(9, '2016-10-09 17:54:00', 'text', '第一通电话', '实在没有想到的是，不善言辞的我和有些尴尬关系的她，第一通电话竟不是草草收场，而是看到了一个惊人的数字：“72分46秒”！！！\n<br>心情从未如此愉快，而这似乎更是奠定了我的方向！<br><img style=\"margin-top:10px;\" src=\"./data/img/20161009-7246.png\" class=\"img-thumbnail\">', '', 0, 1, 1),
(10, '2016-10-16 00:00:00', 'text', '初次见面', '纠结再纠结，答应了今天的见面。\n<br>昨天答应的今早我请客，买了早饭，前去赴约。尴尬加倍，我迟到了，ﾟ∀ﾟ人家早就到了。尴尬地走着，思索着他现在会是什么模样，又是期待又是害怕，期待三年怎样改变了你，害怕变了的我你如何看。\n<br>眼睛虽然近视了，可离很远看到了一个身形，心里就打定，就是他。果然，当这个身形迈着尴尬的步伐走向我时， ˘ᵕ˘ 尴尬之余还挺开心的。\n<br>从你的全世界路过，电影不错，旁边的人也不错。这个不要脸的人，人家讲话你也听不清，撑着把手还不愿意￣▽￣，你还别说，确有撩住我。\n<br>\n<br>\n<br>二十一点十三分十四秒，经过斟酌与这个不要脸的软磨硬泡，我……脱单了。和一个白天说我和初中没变化，打我手，吃完饭就让我回学校的人，在一起了。\n<br>\n<br>\n<br>初次见面，请日后多多关照~', '', 1, 2, 1),
(11, '2016-10-16 00:00:00', 'text', '在一起啦！', '今天是我们两个几年时间后的第一次见面，虽然还是以校友同学的身份见面，但此时的心情绝不是面对普通同学该有的心情。\n<br>一天的行程还是有些尴尬，特别是走路的过程！两个人要保持一定的距离，而且还没有多大话题，不过在路边的小狗让她吓了一跳，躲在我身后；而在地铁的她，活泼的让我吓了一跳。\n<br>\n<br>不知怎么的，看电影的过程总是想要靠近她，但却怎么也靠不近，第一次的见面虽然有些尴尬，但却让我更加坚定！\n<br>终于在晚上，忐忑很久之后谈了我们之间的事，结果……一大惊喜！嘿嘿\n<br>2016年10月16日 21:13:14', '', 1, 1, 1),
(12, '2016-10-16 21:13:14', 'love', '终于在一起！', '我们终于在一起啦！', '', 0, 1, 1),
(13, '2016-11-05 11:13:45', 'mood', '初吻', '第一次牵手，第一次亲吻。', '郑州市德化新街', 1, 1, 1),
(14, '2016-11-05 16:00:00', 'mood', '初吻', '那么紧张，那么短暂。\n<br>紧张了那么久，终于寻得机会，轻轻地吻了她。\n<br>非常激动，非常开心！终于吻了这个在我心里这么久的女孩。', '郑州市德化新街', 1, 1, 1),
(15, '2017-07-06 11:48:45', 'mood', '巧合的过了国际接吻日', '三人约定一起吃了中午饭，也算是老同学第一次相聚，希望以后还有很多很多次。<br>不过很是高兴的是在这个事先不知道的\"国际接吻日\"确确实实是接吻了！！！', '邓州市', 1, 1, 1),
(16, '2017-07-16 16:48:45', 'mood', '高兴和激动', '张老师终于知道了我们两个的事儿，乖乖全程在哭，张老师很淡定。<br>不过这些不重要，重要的是:张老师同意我们交往！<br>很激动！很开心!', '', 1, 1, 1),
(17, '2018-10-16 15:59:45', 'love', '恋爱两周年👫', '亲爱的，我们两周年啦！\n<br>虽然今天我们不能在一起度过，但是也是心连着心度过，对不对？！\n<br>下月补上😏', '郑州', 1, 1, 1);

--
-- 转储表的索引
--

--
-- 表的索引 `kwok_asset_type`
--
ALTER TABLE `kwok_asset_type`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `kwok_asset_type_ attributes`
--
ALTER TABLE `kwok_asset_type_ attributes`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `kwok_love`
--
ALTER TABLE `kwok_love`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `kwok_love_type`
--
ALTER TABLE `kwok_love_type`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `kwok_user`
--
ALTER TABLE `kwok_user`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `love`
--
ALTER TABLE `love`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `love_timeline`
--
ALTER TABLE `love_timeline`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `kwok_asset_type`
--
ALTER TABLE `kwok_asset_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '资产类型表id';

--
-- 使用表AUTO_INCREMENT `kwok_asset_type_ attributes`
--
ALTER TABLE `kwok_asset_type_ attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '资产类型属性表id';

--
-- 使用表AUTO_INCREMENT `kwok_love`
--
ALTER TABLE `kwok_love`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `kwok_love_type`
--
ALTER TABLE `kwok_love_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '时间线类型id主键', AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `kwok_user`
--
ALTER TABLE `kwok_user`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '表id主键', AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `love`
--
ALTER TABLE `love`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `love_timeline`
--
ALTER TABLE `love_timeline`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
