<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="content">
        <div class="wrapp">
<?php if ($this->have()): ?>
<?php while($this->next()): ?>
            <div class="post">
                <div class="top">
                    <div class="title">
                        <a class="p-title" title="<?php $this->title(); ?>" href="<?php $this->permalink(); ?>" rel="bookmark"><i class="fa fa-file-text-o"></i><?php $this->title(); ?></a>
                    </div>
                    <div class="info">
                        <div class="white">
                            <span class="date"><?php $this->date('Y/m/d'); ?></span>
                            <span class="dot"> - </span>
                            <span class="category">
                            <ul class="post-categories">
                                <li><?php $this->category(''); ?></li>
                            </ul>
                            </span>
                            <span class="dot"> - </span>
                            <span class="comment"><?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论'); ?></span>
                        </div>
                    </div>
                </div>
<?php
preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
$imgCount = count($matches[0]);
if($imgCount >= 1){
    $img = $matches[2][0];
echo <<<Html
                <div class="thumb"><img src="{$img}" alt="{$this->title}"></div>
Html;
}
?>

                <div class="entry">
                    <?php $this->excerpt('200', '...'); ?>
                </div>
                <div class="bottom">
                    <div class="left">
                        <a class="more ripple" href="<?php $this->permalink(); ?>"><i class="fa fa-caret-square-o-right"></i>阅读全文</a>
                    </div>
                    <div class="right">
                        <div class="tag">
                            <?php $this->tags('', true, '<a>暂无标签</a>') ?>
                        </div>
                    </div>
                </div>
            </div>
<?php endwhile; ?>
            <div class="page-navi">
                <span class="line-left line"></span>
                <div class="white">
                    <li><?php $this->pageNav(); ?></li>
                </div>
                <span class="line-right line"></span>
            </div>
<?php else: ?>
            <div class="no-more-content">
                <p><?php _e('沒有更多內容 ヽ(｀⌒´)ノ'); ?></p>
            </div>
<?php endif; ?>
        </div>
    </div>
<?php $this->need('footer.php'); ?>