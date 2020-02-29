<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="footer">© 2016-<?php echo date('Y'); ?> <?php $this->author(); ?>. Theme by
<a href="https://blog.fueis.com" target="_blank">Komorebi</a>
, Powered by
<a href="http://typecho.org/" target="_blank">Typecho</a>. 加载时间：0.0<?php echo timer_stop();?></br>
<a href="http://beian.miit.gov.cn/" target="_blank"><span>
		
    <?php if ($this->options->beian): ?>
	<?php $this->options->beian() ?>       	   
            <?php endif; ?>
			
        </span></a>
		
</div>
<?php $this->footer(); ?>
</body>
</html>

