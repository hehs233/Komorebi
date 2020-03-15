<?php
/**
* 友联
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="container grid-sm s-content">
    <div class="column col-12">
        		<nav>
        <input id="check-toggle" type="checkbox"/>
        <label for="check-toggle">
		<a href="/"><img src="https://q1.qlogo.cn/g?b=qq&nk=81462475&s=100" /></a>
		</label>
		</nav>
            <ul>
					</p><div class="indexheader"><?php $this->title() ?></div>
            </ul>
            <?php $this->content(); ?>
        </div>
    </div>
    <HR align=center width=100% color=#555 SIZE=8>
    <?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>