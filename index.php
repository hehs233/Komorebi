<?php
/**
 *  清爽的夏日，阳光明媚，树影姚曳，阳光穿过树叶间的间隙，在地上撒下点点星光
 *  感谢<a href="https://xiamuyourenzhang.cn/">夏目贵志</a>、<a href="https://blog.fueis.com/">当下</a>、<a href="https://kimtsu.com/">黑暗游侠</a>
 * 
 * @package Komorebi
 * @author 肖同学
 * @version 1.2
 * @link https://xiaojunkang.com/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div id="blog">

<div class="indexheader">BLOG</div>

    <div id="postlist">

		<?php while($this->next()): ?>
 
            <ul class="postlist">

            <li>

                <time><?php $this->date('Y.m.d'); ?></time><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a><sup><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum(' %d'); ?></a></sup>

            </li>

            </ul>
			
		<?php endwhile; ?>
      
    </div>
    

	<?php $this->pageLink('<span class="page-numbers current">- 下一页 -</span>','next'); ?>
    <?php $this->pageLink('<span class="page-numbers current">- 上一页 -</span>'); ?>

</div>

<div id="about">

    <div class="indexheader">ABOUT</div>

        <a href="<?php $this->options->siteUrl(); ?>"><img src="https://q1.qlogo.cn/g?b=qq&nk=81462475&s=100" /></a>

    <div class="aboutdetail">

        <span>
		
            <?php if ($this->options->shuo): ?>
			<?php $this->options->shuo() ?>
            <?php else: ?>
        	    <?php $this->options->description() ?>
            <?php endif; ?>
			
        </span>

        <span><?php $this->author(); ?> ——

        <a href="/<?php $this->options->guanyuwo() ?>" target="_blank">关于博主</a>

        </span>

        <span>与日志无关评论 ——

        <a href="/<?php $this->options->liuyanben() ?>" target="_blank">留言本</a>

        </span>

        <span>其他页面 ——

	<a href="/<?php $this->options->youlian() ?>" target="_blank">友链链接</a> 

        </span>



    </div>

</div>


<?php $this->need('footer.php'); ?>
