<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

		<nav>
        <input id="check-toggle" type="checkbox"/>
        <label for="check-toggle">
		<a href="/"><img src="https://q1.qlogo.cn/g?b=qq&nk=81462475&s=100" /></a>
		</label>
		</nav>


                <header>

                    <h1><span class="h1"><?php $this->title() ?></span></h1>

                        <ul class="info">

                            <span class="iconfont icon-rili"></span> <li><?php $this->date('Y.m.d'); ?></li>
							
							<span class="iconfont icon-wenjianjia"></span> <li><?php _e(''); ?><?php $this->category(','); ?></li>
                           							
							<span class="iconfont icon-tianxie"></span> <li><?php art_count($this->cid); ?>字</li>
							
							<span class="iconfont icon-liulan"></span> <li><?php get_post_view($this) ?></li>
							
							<span class="iconfont icon-pinglun"></span> <li><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum(_t(''), _t(' 1 '), _t(' %d ')); ?></a></li>

                        </ul>

                </header>

                <main>

                    <div class="content markdown">
					<p class="md_block">

					<?php $this->content(); ?>
					
					</p>

                    </div>

                </main>

				<?php $this->need('comments.php'); ?></br>

<?php $this->need('footer.php'); ?>
