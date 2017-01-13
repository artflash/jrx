<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="content">
    <div class="content-left">
        <div class="content-top-focue">
            <div class="FocusPic">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                <div id="main-slide">
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a href="<?php echo $r['url'];?>" target="blank" title="<?php echo str_cut($r['title'],30);?>"><img class="content-left-img" src="<?php echo thumb($r['thumb'],690,220);?>" alt="<?php echo $r['title'];?>"/></a>
                        <?php $n++;}unset($n); ?>
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=06950276ea9657371f621ad309e2e1c1&sql=SELECT+%2A+FROM+jian_news+ORDER+BY+updatetime+DESC&num=15&page=%24_GET%5B%27page%27%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 15;$page = intval($_GET['page']) ? intval($_GET['page']) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM  jian_news ORDER BY updatetime DESC");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT * FROM jian_news ORDER BY updatetime DESC LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="content-left-joke">
            <div class="content-left-joke-head">
                <a href="<?php echo $r['url'];?>">
                    <?php $meminfo=get_memberinfo_buyusername($r['username']);$userimg=$meminfo['userid']?>
                    <img class="avatar-icon" src="<?php if(($userimg !='' && custom_file_exists(get_memberavatar($userimg,90,90)))) { ?><?php echo get_memberavatar($userimg,90,90);?><?php } else { ?><?php echo IMG_PATH;?>jrx/systemImg/avatar.jpg<?php } ?>" alt="<?php echo str_cut($r['username'],30);?>"/>
                </a>
                <div>
                    <p class="joke-username"><a href="<?php echo $r['url'];?>" target="blank" title="<?php if($meminfo['nickname']!='') { ?><?php echo str_cut($meminfo['nickname'],30);?><?php } else { ?><?php echo str_cut($r['username'],30);?><?php } ?>"><?php if($meminfo['nickname']!='') { ?><?php echo str_cut($meminfo['nickname'],30);?><?php } else { ?><?php echo str_cut($r['username'],30);?><?php } ?></a></p>
                    <p class="joke-title"><a href="<?php echo $r['url'];?>" target="blank"><?php echo str_cut($r['title'],30);?></a></p>
                </div>
            </div>
            <?php $m_id=$r['id']?>
            <?php $customTitle = $r['title']?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=961cb2eb607d99f4b8a702c59acc8d54&sql=SELECT+%2A+FROM+jian_news_data+WHERE+id%3D%24m_id&return=content_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM jian_news_data WHERE id=$m_id LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$content_data = $a;unset($a);?>
            <div class="content-left-content">
            <?php
                echo preg_replace("/alt=\".*?\"/i","alt=\"$customTitle\"",$content_data[0]['content']);
            ?>
            </div>
            <div class="content-left-comment" id="main-left-comment">
                 <div class="comment-dingcai">
					<a class="ding" id="up<?php echo $m_id;?>" href="javascript:void(0);" title="顶" onclick="digg(<?php echo $m_id;?>,1,1)"><?php echo $content_data['0']['up'];?></a>
					<span class="line">|</span>
					<a class="cai" id="down<?php echo $m_id;?>" href="javascript:void(0);" onclick="digg(<?php echo $m_id;?>,0,1)"><?php echo $content_data['0']['down'];?></a>
					<span class="line">|</span>
					<a class="comment-btn" href="#" title="评论" onClick="Effect('showHideId',this.parentNode.id)">0</a>
					<span class="line">|</span>			
				</div>	
                <div class="bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1449732411607">
                    <a href="#" class="bds_more" data-cmd="more"></a>
                    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                    <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                </div>
            </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <?php $n++;}unset($n); ?>
        <div class="link-page">
            <div class="page"><?php echo $pages;?></div>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <?php include template("content","contentRight"); ?>
</div>

<!--js区开始-->
<script type="text/javascript">
    $(function(){
        new slide("#main-slide","cur",690,220,1);//焦点图
        new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
    })
</script>
<!--js区结束-->
<?php include template("content","footer"); ?>