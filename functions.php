<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $shuo = new Typecho_Widget_Helper_Form_Element_Text('shuo', NULL, NULL, _t('名言警句'), _t('默认使用站点描述'));
    $form->addInput($shuo);
	
	$beian = new Typecho_Widget_Helper_Form_Element_Text('beian', NULL, NULL, _t('网站备案号'), _t('填写网站备案号'));
    $form->addInput($beian);
    
    $guanyuwo = new Typecho_Widget_Helper_Form_Element_Text('guanyuwo', NULL, NULL, _t('关于我'), _t('填写相关地址，如：“about.html”'));
    $form->addInput($guanyuwo);
	
    $liuyanben = new Typecho_Widget_Helper_Form_Element_Text('liuyanben', NULL, NULL, _t('留言本'), _t('填写相关地址，如：“trace.html”'));
    $form->addInput($liuyanben);
	
    $youlian = new Typecho_Widget_Helper_Form_Element_Text('youlian', NULL, NULL, _t('友链'), _t('填写相关地址，如：“links.html”'));
    $form->addInput($youlian);
	

}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/
 
 /**
     * 加载时间
     * @return bool
     */
    function timer_start() {
        global $timestart;
        $mtime     = explode( ' ', microtime() );
        $timestart = $mtime[1] + $mtime[0];
        return true;
    }
    timer_start();
    function timer_stop( $display = 0, $precision = 3 ) {
        global $timestart, $timeend;
        $mtime     = explode( ' ', microtime() );
        $timeend   = $mtime[1] + $mtime[0];
        $timetotal = number_format( $timeend - $timestart, $precision );
        $r         = $timetotal < 1 ? $timetotal * 1000 . " ms" : $timetotal . " s";
        if ( $display ) {
            echo $r;
        }
        return $r;
    }
	
function art_count ($cid){

$db=Typecho_Db::get ();

$rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));

$text = preg_replace("/[^\x{4e00}-\x{9fa5}]/u", "", $rs['text']);

echo mb_strlen($text,'UTF-8');

}	

function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
 $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
if(!in_array($cid,$views)){
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    echo $row['views'];
}
