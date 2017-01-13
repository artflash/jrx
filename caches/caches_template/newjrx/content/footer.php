<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script>
//右侧保持
    fnKeep();
    function fnKeep()
    {
        var oLeft=$(".content-left");     //左侧栏元素
        var oRight=$(".content-right");
        var iHeight=oLeft.height()-oRight.height(); //高度之差
        var iTop = oRight.offset().top;     //左侧栏距离顶部距离
        var iLeft;            //主体区左侧距离
        var iScrollTop;     //滚动条距离
        if(iHeight>0){
            $(window).bind("scroll load resize", function() {
                iScrollTop=$(window).scrollTop();
                iLeft=oLeft.offset().left;
                if (iScrollTop >= iTop&&iScrollTop <= iTop+iHeight) {
                    oRight.removeClass("m_t_10").css({
                        "position": "fixed",
                        "top": 0,
                        "right":iLeft
                    });
                }else{
                    if(iScrollTop>iTop){
                        oRight.addClass("m_t_10").css({
                            "position": "absolute",
                            "top": iHeight,
                            "right":iLeft
                        });
                    }else{
                        oRight.addClass("m_t_10").css({
                            "position": "static"
                        });
                    }
                }
            }).load();
        }
    }
</script>
<div class="footer">
    <div class="footer-content">
        <div class="about">
            <dl>
                <dt>关于贱人</dt>
                <dd>
                    <a href="#">贱人简介</a>
                    <a href="#">贱人公告</a>
                </dd>
                <dd>
                    <a href="#">免责声明</a>
                    <a href="#">意见反馈</a>
                </dd>
            </dl>

            <dl>
                <dt>互动规则</dt>
                <dd>
                    <a href="#">投稿规则</a>
                    <a href="#">审稿规则</a>
                </dd>
                <dd>
                    <a href="#">升级规则</a>
                    <a href="#">贱币规则</a>
                </dd>
            </dl>

            <dl>
                <dt>关注贱人</dt>
                <dd>
                    <a href="#">新浪微博</a>
                    <a href="#">QQ空间</a>
                </dd>
                <dd>
                    <a href="#">腾讯微博</a>
                    <a href="#">微信订阅</a>
                </dd>
            </dl>

            <dl>
                <dt>贱人合作</dt>
                <dd>
                    <a href="#">贱人QQ群</a>
                </dd>
                <dd>
                    <a href="#">合作：jianrenxiao.163.com</a>
                </dd>
            </dl>
        </div>
        <div class="coypright">
            <p>Copyright 2005-2015 jianrenxiao.com 版权所有 备案信息：宁ICP备15000523号-1</p>
			<div style="width:300px;margin:0 auto; padding:20px 0;">
		 		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=64050202000031" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="http://www.beian.gov.cn/file/ghs.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">宁公网安备 64050202000031号</p></a>
		 	</div>
        </div>
    </div>
</div>