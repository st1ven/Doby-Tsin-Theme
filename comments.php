<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

            <script type="text/javascript">
            //<![CDATA[
            var TypechoComment = {
                dom : function (id) {
                    return document.getElementById(id);
                },
                
                create : function (tag, attr) {
                    var el = document.createElement(tag);
                    
                    for (var key in attr) {
                        el.setAttribute(key, attr[key]);
                    }
                    
                    return el;
                },

                reply : function (cid, coid) {
                    this.dom('cancel-comment-reply-link').style.display = 'none';
                    
                    var comment = this.dom(cid), parent = comment.parentNode,
                        response = this.dom('<?php $this->respondId(); ?>'), input = this.dom('comment-parent'),
                        form = 'form' == response.tagName ? response : response.getElementsByTagName('form')[0];

                    if (null == input) {
                        input = this.create('input', {
                            'type' : 'hidden',
                            'name' : 'parent',
                            'id'   : 'comment-parent'
                        });

                        form.appendChild(input);
                    }
                    
                    input.setAttribute('value', coid);
                    $('.respond-bk').addClass('is-on');

                    return false;
                },

                cancelReply : function () {
                    var response = this.dom('<?php $this->respondId(); ?>'),
                    holder = this.dom('comment-form-place-holder'), input = this.dom('comment-parent');

                    if (null != input) {
                        input.parentNode.removeChild(input);
                    }

                    if (null == holder) {
                        return true;
                    }

                    this.dom('cancel-comment-reply-link').style.display = 'none';
                    holder.parentNode.insertBefore(response, holder);
                    return false;
                }
            }
            //]]>
            </script>
         <ol class="comment-main">
<?php $this->comments()->to($comments); ?>
<?php if ($comments->have()): ?>
          <?php $comments->listComments(); ?>
          <div class="comment-page-select">
            <?php $comments->pageNav('<span class="left">&laquo; 前一页</span>', '<span class="right">后一页 &raquo;</span>'); ?>
          </div>
<?php else: ?>
          <div class="none"><?php if($this->options->comments=='') echo '暂无评论，快来抢沙发吧！'; else echo $this->options->comments; ?></div>
<?php endif; ?>
     </ol>
      <div class="respond-bk">
        <div class="respond-main" style="top: 10.5px;">
            <span class="nws-line"></span>
            <div class="subscribe-bg"></div>
            <div class="smilelink">
                <div class="faceIt wrapp wrapp-active">
                    <a onclick="javascript:grin('|∀ﾟ')">|∀ﾟ</a>
                    <a onclick="javascript:grin('(´ﾟДﾟ`)')">(´ﾟДﾟ`)</a>
                    <a onclick="javascript:grin('(;´Д`)')">(;´Д`)</a>
                    <a onclick="javascript:grin('(｀･ω･)')">(｀･ω･)</a>
                    <a onclick="javascript:grin('(=ﾟωﾟ)=')">(=ﾟωﾟ)=</a>
                    <a onclick="javascript:grin('| ω・´)')">| ω・´)</a>
                    <a onclick="javascript:grin('|-` )">|-` )</a>
                    <a onclick="javascript:grin('(´ﾟДﾟ`)')">(´ﾟДﾟ`)</a>
                    <a onclick="javascript:grin('|д` )">|д` )</a>
                    <a onclick="javascript:grin('|ー` )')">|ー` )</a>
                    <a onclick="javascript:grin('|∀` )')">|∀` )</a>
                    <a onclick="javascript:grin('(つд⊂)')">(つд⊂)</a>
                    <a onclick="javascript:grin('(ﾟДﾟ≡ﾟДﾟ)')">(ﾟДﾟ≡ﾟДﾟ)</a>
                    <a onclick="javascript:grin('(＾o＾)ﾉ')">(＾o＾)ﾉ</a>
                    <a onclick="javascript:grin('(|||ﾟДﾟ)')">(|||ﾟДﾟ)</a>
                    <a onclick="javascript:grin('( ﾟ∀ﾟ)')">( ﾟ∀ﾟ)</a>
                    <a onclick="javascript:grin('( ´∀`)')">( ´∀`)</a>
                    <a onclick="javascript:grin('(*´∀`)')">(*´∀`)</a>
                    <a onclick="javascript:grin('(*ﾟ∇ﾟ)')">(*ﾟ∇ﾟ)</a>
                    <a onclick="javascript:grin('(*ﾟーﾟ)')">(*ﾟーﾟ)</a>
                    <a onclick="javascript:grin('(　ﾟ 3ﾟ)')">(　ﾟ 3ﾟ)</a>
                    <a onclick="javascript:grin('( ´ー`)')">( ´ー`)</a>
                    <a onclick="javascript:grin('( ・_ゝ・)')">( ・_ゝ・)</a>
                    <a onclick="javascript:grin('( ´_ゝ`)')">( ´_ゝ`)</a>
                    <a onclick="javascript:grin('(*´д`)')">(*´д`)</a>
                    <a onclick="javascript:grin('(・ー・)')">(・ー・)</a>
                    <a onclick="javascript:grin('(・∀・)')">(・∀・)</a>
                    <a onclick="javascript:grin('(ゝ∀･)')">(ゝ∀･)</a>
                    <a onclick="javascript:grin('(〃∀〃)')">(〃∀〃)</a>
                    <a onclick="javascript:grin('(*ﾟ∀ﾟ*)')">(*ﾟ∀ﾟ*)</a>
                    <a onclick="javascript:grin('( ﾟ∀。)')">( ﾟ∀。)</a>
                    <a onclick="javascript:grin('( `д´)')">( `д´)</a>
                    <a onclick="javascript:grin('(`ε´ )')">(`ε´ )</a>
                    <a onclick="javascript:grin('(`ヮ´ )')">(`ヮ´ )</a>
                    <a onclick="javascript:grin('σ`∀´)')">σ`∀´)</a>
                    <a onclick="javascript:grin('ﾟ∀ﾟ)σ')">ﾟ∀ﾟ)σ</a>
                    <a onclick="javascript:grin('ﾟ ∀ﾟ)')">ﾟ ∀ﾟ)</a>
                    <a onclick="javascript:grin('(╬ﾟдﾟ)')">(╬ﾟдﾟ)</a>
                    <a onclick="javascript:grin('(|||ﾟдﾟ)')">(|||ﾟдﾟ)</a>
                    <a onclick="javascript:grin('( ﾟдﾟ)')">( ﾟдﾟ)</a>
                    <a onclick="javascript:grin('Σ( ﾟдﾟ)')">Σ( ﾟдﾟ)</a>
                    <a onclick="javascript:grin('( ;ﾟдﾟ)')">( ;ﾟдﾟ)</a>
                    <a onclick="javascript:grin('( ;´д`)')">( ;´д`)</a>
                    <a onclick="javascript:grin('(　д ) ﾟ ﾟ')">(　д ) ﾟ ﾟ</a>
                    <a onclick="javascript:grin('( ☉д⊙)')">( ☉д⊙)</a>
                    <a onclick="javascript:grin('(((　ﾟдﾟ)))')">(((　ﾟдﾟ)))</a>
                    <a onclick="javascript:grin('( ` ・´)')">( ` ・´)</a>
                    <a onclick="javascript:grin('( ´д`)')">( ´д`)</a>
                    <a onclick="javascript:grin('( -д-)')">( -д-)</a>
                    <a onclick="javascript:grin('(>д<)')">(&gt;д&lt;)</a>
                    <a onclick="javascript:grin('･ﾟ( ﾉд`ﾟ)')">･ﾟ( ﾉд`ﾟ)</a>
                    <a onclick="javascript:grin('( TдT)')">( TдT)</a>
                    <a onclick="javascript:grin('(￣∇￣)')">(￣∇￣)</a>
                    <a onclick="javascript:grin('(￣3￣)')">(￣3￣)</a>
                    <a onclick="javascript:grin('(￣ｰ￣)')">(￣ｰ￣)</a>
                    <a onclick="javascript:grin('(￣ . ￣)')">(￣ . ￣)</a>
                    <a onclick="javascript:grin('(￣皿￣)')">(￣皿￣)</a>
                    <a onclick="javascript:grin('(￣艸￣)')">(￣艸￣)</a>
                    <a onclick="javascript:grin('(￣︿￣)')">(￣︿￣)</a>
                    <a onclick="javascript:grin('(￣︶￣)')">(￣︶￣)</a>
                    <a onclick="javascript:grin('ヾ(´ωﾟ｀)')">ヾ(´ωﾟ｀)</a>
                    <a onclick="javascript:grin('(*´ω`*)')">(*´ω`*)</a>
                    <a onclick="javascript:grin('(・ω・)')">(・ω・)</a>
                    <a onclick="javascript:grin('( ´・ω)')">( ´・ω)</a>
                    <a onclick="javascript:grin('(｀・ω)')">(｀・ω)</a>
                    <a onclick="javascript:grin('(´・ω・`)')">(´・ω・`)</a>
                    <a onclick="javascript:grin('(`・ω・´)')">(`・ω・´)</a>
                    <a onclick="javascript:grin('( `_っ´)')">( `_っ´)</a>
                    <a onclick="javascript:grin('( `ー´)')">( `ー´)</a>
                    <a onclick="javascript:grin('>( ´_っ`)')">&gt;( ´_っ`)</a>
                    <a onclick="javascript:grin('( ´ρ`)')">( ´ρ`)</a>
                    <a onclick="javascript:grin('( ﾟωﾟ)')">( ﾟωﾟ)</a>
                    <a onclick="javascript:grin('(oﾟωﾟo)')">(oﾟωﾟo)</a>
                    <a onclick="javascript:grin('(　^ω^)')">(　^ω^)</a>
                    <a onclick="javascript:grin('(｡◕∀◕｡)')">(｡◕∀◕｡)</a>
                    <a onclick="javascript:grin('/( ◕‿‿◕ )\')">/( ◕‿‿◕ )\</a>
                    <a onclick="javascript:grin('ヾ(´ε`ヾ)')">ヾ(´ε`ヾ)</a>
                    <a onclick="javascript:grin('(ノﾟ∀ﾟ)')">(ノﾟ∀ﾟ)</a>
                    <a onclick="javascript:grin('(σﾟдﾟ)σ')">(σﾟдﾟ)σ</a>
                </div>
                <div class="sm-bottom">
                    <a class="faceItemLnk current" onclick="faceItem()">表情</a>
                    <a class="faceCloseLnk" onclick="closeFaceSelect()">关闭</a>
                </div>
            </div>
            <div id="<?php $this->respondId(); ?>" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title">发表评论</h3><small><?php $comments->cancelReply(); ?></small>
                <form action="<?php $this->commentUrl(); ?>" method="post" id="comment-form" class="comment-form">
<?php if($this->user->hasLogin()): ?>
                    <p class="comment-form-field"><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>，<a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
<?php else: ?>
                    <p class="comment-form-field comment-form-author">
                    <input id="author" name="author" type="text" placeholder="昵称" value="<?php $this->remember('author'); ?>" size="10">
                    </p>
                    <p class="comment-form-field comment-form-email">
                    <input id="mail" name="mail" type="email" placeholder="邮箱" value="<?php $this->remember('mail'); ?>">
                    </p>
                    <p class="comment-form-field comment-form-url">
                    <input id="url" name="url" type="url" placeholder="网站" value="<?php _e('http://'); ?>">
                    </p>
<?php endif; ?>
                    <p class="comment-form-comment">
                    <textarea id="textarea" name="text" aria-required="true" placeholder="说点什么…"><?php $this->remember('text'); ?></textarea>
                    </p>
                    <p class="form-toolbar">
                        <a onclick="showFaceSelect()" class="addSmile" title="表情"><i class="fa fa-smile-o"></i></a>
                        <!-- 以下两行如需使用请先在后台-设置-评论中允许使用a与img标签 -->
                        <!--<a class="addLink" href="javascript:grin('<a href=&quot;请输入网站地址&quot;></a>')" title="网址"><i class="fa fa-link"></i></a>-->
                        <!--<a class="addPic" href="javascript:grin('<img src=&quot;请输入图片地址&quot;></img>')" title="图片"><i class="fa fa-image"></i></a>-->
                    </p>
                    <p class="form-btm-cancel">
                        <input type="button" onclick="hiddenReplyForm()" id="form-bottom-cancel" class="cancel" value="取消评论" input="">
                    </p>
                    <p class="form-submit">
                        <input name="submit" type="submit" id="submit" value="发表评论">
                    </p>
                </form>
            </div>
        </div>
      </div>