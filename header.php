<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="icon" href="favicon.ico">
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?> | <?php $this->options->description(); ?></title>
<?php $this->header("generator=&template=&wlw=&xmlrpc=&commentReply=&rss1=&atom="); ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/finally.js'); ?>"></script>
<!--[if lt IE 10]>
  <script type="text/javascript" src="<?php $this->options->themeUrl('js/placeholder.js'); ?>"></script>
  <script type="text/javascript">
    $(function() {
    $('input, textarea').placeholder();
    });
  </script>
<![endif]-->
</head>
<body class="custom-background">
<div class="main">
    <div class="header">
        <div class="title">
            <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
        </div>
        <div class="navigation">
            <div class="left">
                <ul class="menu">
                    <li><a href="<?php $this->options->siteUrl(); ?>"><i class="fa fa-home"></i>首页</a></li>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?><?php while($pages->next()): ?>
                    <li><a href="<?php $pages->permalink(); ?>"><i class="fa fa-link"></i><?php $pages->title(); ?></a></li>
<?php endwhile; ?>
                </ul>
            </div>
            <div class="mobile">
                <ul>
                    <li>
                    <a class="mobile-menu-toggle" title="菜单"><i class="fa fa-th-list"></i></a>
                    <select class="mobile-menu-drop" id="m-menu" onchange="location.href=this.value">
                        <option value="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></option>
<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?><?php while($pages->next()): ?>
                        <option value="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></option>
<?php endwhile; ?>
                    </select>
                    </li>
                </ul>
            </div>
            <div class="default">
                <ul>
                    <li class="line"><span></span></li>
                    <li class="search"><a title="搜索"><i class="fa fa-search"></i></a></li>
                    <li class="rss"><a href="<?php $this->options->feedUrl(); ?>" title="订阅本站" target="_blank"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="search-form">
            <span class="dot"></span>
            <form id="searchform" class="searchform" action="./" method="post" role="Search">
                <input class="box" id="s" type="text" name="s" x-webkit-grammar="builtin:search" placeholder="搜索..."></input>
            </form>
        </div>
    </div>
    <div class="secHeader"><i class="fa fa-bullhorn"></i><?php if($this->options->tips=='') echo '感谢使用Doby Tsin主题，请在控制台-外观-设置外观中更改公告内容。'; else echo $this->options->tips; ?></div>
