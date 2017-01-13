<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="content-right">
    <div class="content-right-top">
        <img src="<?php echo IMG_PATH;?>jrx/systemImg/login.jpg" alt="贱人笑微信号jianrenxiaowang"/>
    </div>
    <div class="content-right-newjoke-container">
        <div class="content-right-newjoke-head">
            <dl class="newjoke-head-title">
                <dt>新笑话 抢先看</dt>
            </dl>
            <dl class="newjoke-head-more"><a href="#">查看更多</a></dl>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2ba4cf06150e6b1a311c8703b4a9229c&action=position&posid=2&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'5',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="newjoke-content">
            <?php $c_id=$r['id']?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=7cdb2f86913b30b86fe0743b6fddd832&sql=SELECT+%2A+FROM+jian_news+WHERE+id%3D%24c_id&return=content_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM jian_news WHERE id=$c_id LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$content_data = $a;unset($a);?>
            <?php $meminfo=get_memberinfo_buyusername($content_data[0]['username']);$userimg=$meminfo['userid']?>
            <a href="<?php echo $content_data['0']['url'];?>" target="_blank"><img class="right-newjoke-avatar" src="<?php if(($userimg !='' && custom_file_exists(get_memberavatar($userimg,90,90)))) { ?><?php echo get_memberavatar($userimg,90,90);?><?php } else { ?><?php echo IMG_PATH;?>jrx/systemImg/avatar.jpg<?php } ?>" alt="<?php echo str_cut($content_data[0]['username'],30);?>"/></a>
            <div class="right-newjoke-content">
                <p><a href="<?php echo $content_data['0']['url'];?>" target="_blank"  title="<?php if($meminfo['nickname']!='') { ?><?php echo str_cut($meminfo['nickname'],30);?><?php } else { ?><?php echo str_cut($content_data[0]['username'],30);?><?php } ?>"><?php if($meminfo['nickname']!='') { ?><?php echo str_cut($meminfo['nickname'],30);?><?php } else { ?><?php echo str_cut($content_data[0]['username'],30);?><?php } ?></a></p>

                <p><a href="<?php echo $content_data['0']['url'];?>" target="_blank" ><?php echo str_cut($content_data[0]['title'],30);?></a></p>
            </div>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="right-textjoke-container">
        <div class="right-textjoke-head">
            <p class="textjoke-title"><a href="#">精彩文字笑话</a></p>
            <p class="textjoke-more"><a href="#">更多</a></p>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=36e2741a11840fc49e9a663a816ff46f&action=lists&catid=2&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'2','limit'=>'10',));}?>
        <div class="content-textjoke-content">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r['title'],20);?></a></li>
            <?php $n++;}unset($n); ?>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>