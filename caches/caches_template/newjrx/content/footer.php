<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script>
//�Ҳౣ��
    fnKeep();
    function fnKeep()
    {
        var oLeft=$(".content-left");     //�����Ԫ��
        var oRight=$(".content-right");
        var iHeight=oLeft.height()-oRight.height(); //�߶�֮��
        var iTop = oRight.offset().top;     //��������붥������
        var iLeft;            //������������
        var iScrollTop;     //����������
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
                <dt>���ڼ���</dt>
                <dd>
                    <a href="#">���˼��</a>
                    <a href="#">���˹���</a>
                </dd>
                <dd>
                    <a href="#">��������</a>
                    <a href="#">�������</a>
                </dd>
            </dl>

            <dl>
                <dt>��������</dt>
                <dd>
                    <a href="#">Ͷ�����</a>
                    <a href="#">������</a>
                </dd>
                <dd>
                    <a href="#">��������</a>
                    <a href="#">���ҹ���</a>
                </dd>
            </dl>

            <dl>
                <dt>��ע����</dt>
                <dd>
                    <a href="#">����΢��</a>
                    <a href="#">QQ�ռ�</a>
                </dd>
                <dd>
                    <a href="#">��Ѷ΢��</a>
                    <a href="#">΢�Ŷ���</a>
                </dd>
            </dl>

            <dl>
                <dt>���˺���</dt>
                <dd>
                    <a href="#">����QQȺ</a>
                </dd>
                <dd>
                    <a href="#">������jianrenxiao.163.com</a>
                </dd>
            </dl>
        </div>
        <div class="coypright">
            <p>Copyright 2005-2015 jianrenxiao.com ��Ȩ���� ������Ϣ����ICP��15000523��-1</p>
			<div style="width:300px;margin:0 auto; padding:20px 0;">
		 		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=64050202000031" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="http://www.beian.gov.cn/file/ghs.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">���������� 64050202000031��</p></a>
		 	</div>
        </div>
    </div>
</div>