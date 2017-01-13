<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="GBK">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
    <meta property="qc:admins" content="72427065176211625601176375" />
    <meta property="wb:webmaster" content="ebe4b370116736c0" />
	<!--[if lt IE 9]>  <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>newjrx/ie8main.css"/> <![endif]-->
	<!--[if lte IE 8]>  <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>newjrx/ie8main.css"/> <![endif]-->
    <link href="<?php echo CSS_PATH;?>newjrx/main.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>digg.js"></script>
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <!--百度代码统计开始-->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?14849530a824347c089d1fc83022ec76";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <script type="text/javascript">
        $(document).ready(function()
        {
            updateDingCai();
        });
    </script>
    <!-- 百度代码统计结束-->

    <!-- 百度分享代码-->
    <script>
        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
    </script>
</head>
<body>
<div class="head">
    <div class="head-top">
        <div class="head-container">
            <div class="head-title">
                <p>贱人笑-分享你身边的搞笑事，无节操，有内涵</p>
            </div>
			<div class="head-login">
            <script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="100%" height="30px" frameborder="0" scrolling="no"></iframe>')</script>
			</div>
            <!--<div class="head-login">
                <a class="head-top-qq">QQ登录</a>
                <a class="head-top-weibo">微博登录</a>
                <a>|</a>
                <a class="head-top-ogin">登录</a>
                <a class="head-top-reg">注册</a>
            </div>-->
        </div>
    </div>
    <div class="head-nav-container">
        <div class="head-nav-center">
            <div class="head-nav-logo">
                <a href="http://www.jianrenxiao.com"> <img src="<?php echo IMG_PATH;?>jrx/systemImg/logo.png" alt="贱人笑-分享你身边的搞笑事，无节操，有内涵"></a>
            </div>
            <div class="head-nav">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1563d90ca1df8b6a4ec4f3fd24c16028&action=category&catid=0&num=25&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'limit'=>'25',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <a href="<?php echo $r['url'];?>" target="_blank"><span><?php echo $r['catname'];?></span></a>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <div class="head-nav-wap">
                <ul>
                    <li>
                        <a href="http://www.jianrenxiao.com/index.php?m=content&c=index&a=lists&catid=2">笑话</a>
                    </li>
                    <li>
                        <a href="http://www.jianrenxiao.com/index.php?m=content&c=index&a=lists&catid=3">内涵</a>
                    </li>
                    <li>
                        <a href="http://www.jianrenxiao.com/index.php?m=content&c=index&a=lists&catid=4">爆图</a>
                    </li>
                </ul>
            </div>
			<?php $userid= param::get_cookie('_userid');?>
			<?php if($userid) { ?>
				<div class="head-wap-login">
					<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=logout&forward=<?php echo urlencode($_GET['forward']);?>&siteid=<?php echo $siteid;?>" target="_top">退出</a>
				</div>
			<?php } else { ?>   
				<div class="head-wap-login">
					<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&forward=<?php echo urlencode($_GET['forward']);?>&siteid=<?php echo $siteid;?>">登录</a>
				</div>
			<?php } ?>
            
        </div>
    </div>
</div>