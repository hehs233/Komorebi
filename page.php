<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

                <main>

                    <div class="content markdown">
					<p class="md_block">

					<?php $this->content(); ?>
					
					</p>

                    </div>

                </main>

				<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
