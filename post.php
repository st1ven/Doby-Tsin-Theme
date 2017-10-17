<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

      <div class="content">
        <div class="float-nav">
          <ul class="ex-menu">
            <li>
              <a onclick="goToTop();">回到顶部</a>
              <i class="fa fa-arrow-up"></i>
            </li>
          </ul>
          <a class="top" title="发表评论" <?php if($this->allow('comment')): ?>onclick="showReplyForm();"<?php endif; ?>>
            <i class="fa fa-comments"></i>
          </a>
        </div>
        <div class="wrapp">
          <div class="page">
            <div class="top">
              <div class="title">
                <a class="p-title" title="<?php $this->title(); ?>" rel="bookmark">
                  <i class="fa fa-file-text-o"></i><?php $this->title(); ?>
                </a>
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
            <div class="entry">
                <?php $this->content(); ?>
            </div>
          </div>
          <div class="comments-wrapp">
              <div class="topbar">
                  <div class="wrapp">
                    <div class="left">
                        <li class="num"><a><?php $this->commentsNum('评论 (0条)', '评论 (1条)', '评论 (%d条)'); ?></a></li>
                        <?php if($this->allow('comment')): ?><li class="write"><a class="reShow" onclick="showReplyForm()"><i class="fa fa-pencil-square-o"></i>发表评论</a></li><?php endif; ?>
                    </div>
                    <div class="right"><?php $this->category(''); ?></div>
                  </div>
              </div>
<?php $this->need('comments.php'); ?>
          </div>
        </div>
      </div>
<?php $this->need('footer.php'); ?>