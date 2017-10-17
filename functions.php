<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $tips = new Typecho_Widget_Helper_Form_Element_Text('tips', NULL, NULL, _t('网站公告设置'), _t('<b>显示于网站全局头部</b>的网站公告处。'));
	$comments = new Typecho_Widget_Helper_Form_Element_Text('comments', NULL, NULL, _t('文章评论设置'), _t('<b>当文章无评论时默认显示的内容</b>留空为：“暂无评论，快来抢沙发吧！”。'));
    $form->addInput($tips);
	$form->addInput($comments);
}