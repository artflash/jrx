<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><head>
	<script type="text/javascript" src="<?php echo JS_PATH;?>member_common.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
</head>
<style>
*{margin:0; padding:0;}
body{font-family:"Î¢ÈíÑÅºÚ"; font-size:14px; background:none; line-height:30px; width:100%; height:30px; color:#ff;}
a{color:#fff}
a{text-decoration:none}

.head-top-qq{float:left;text-indent: 25px; background: url("../../statics/images/jrx/systemImg/img.png") -2px 3px no-repeat}
.head-top-weibo{float:left;text-indent:25px; background: url("../../statics/images/jrx/systemImg/img.png") -2px -27px no-repeat}
.login-success{float:right; color:#fff}
.login-success .member-center{color:#F4FB06}
.login-success .login-out{color:#20F507}
</style>
<body>
	<div class="head-login-content">
		<?php $userid= param::get_cookie('_userid');?>
		<?php if($userid) { ?>
			<div class="login-success"><?php if($_username) { ?>ÄúºÃ£¡£¡ <?php echo get_nickname();?>, &nbsp;&nbsp;<a class="member-center" href="<?php echo APP_PATH;?>index.php?m=member&siteid=<?php echo $siteid;?>" target="_blank">»áÔ±ÖÐÐÄ&nbsp;&nbsp;</a> <a class="login-out" href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=logout&forward=<?php echo urlencode($_GET['forward']);?>&siteid=<?php echo $siteid;?>" target="_top">ÍË³ö</a><?php } ?>
			</div>
		<?php } else { ?>   
		<a class="head-top-qq" href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=public_qq_loginnew" target='_blank' >QQµÇÂ¼</a>
		<a class="head-top-weibo" style="margin-left:10px" href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=public_sina_login" target='_blank'>Î¢²©µÇÂ¼</a>
		<a class="line" style="margin-left:20px">|</a>
		<a class="head-top-login" style="margin-left:20px" href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&forward=<?php echo urlencode($_GET['forward']);?>&siteid=<?php echo $siteid;?>" target='_top'>µÇÂ¼</a>
		<a class="head-top-reg" style="margin-left:20px" href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>" target='_blank' >×¢²á</a>
		<?php } ?>
    </div>
<script language="JavaScript">
	function show_login(site) {
		if(site == 'sina') {
			art.dialog({lock:false,title:'<?php echo L('sina_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_sina_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		} else if(site == 'snda') {
			art.dialog({lock:false,title:'<?php echo L('snda_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_snda_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		} else if(site == 'qq') {
			art.dialog({lock:false,title:'<?php echo L('qq_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_qq_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		}
	}
//-->
</script>
</body>