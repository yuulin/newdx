<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="noticebox">
    <span><em>�����з��գ������ο�</em></span>
</div>
<!--�ײ���ʼ-->
<footer class="footer-new">
    <a href="http://www.8264.com/xuexiao/">���԰�</a>
    <a href="http://app.zaiwai.com">����APP</a>
    <p class="copyRight">Copyright 2013 - 2017  8264.com. All Rights Reserved</p>
</footer>
<!--�ײ�����-->
<!--�ײ�������ʼ-->
<div class="bottom_bar">
    <div class="kaoshiicon foot_button">
        <a href="http://www.8264.com/xuexiao/" class="select">
            <i class="select"></i>
            ѧϰ����
        </a>
    </div>
    <div class="huiguicon foot_button">
        <a href="http://www.8264.com/xuexiao/video.html">
            <i></i>
            ��Ƶ�γ�
        </a>
    </div>
    <div class="hezuoicon foot_button">
        <a href="http://www.8264.com/xuexiao/huodong.html">
            <i></i>
            ���¿γ�
        </a>
    </div>
    <div class="huiyuanicon foot_button">
        <a href="http://www.8264.com/xuexiao/user.html">
            <i></i>
            ��Ա����
        </a>
    </div>
</div>
<!--�ײ���������-->
<script type="text/javascript">
    var url = window.location.href;
    if(url.indexOf('video') > 0){
        $('.huiguicon a').addClass('select');
        $('.huiguicon i').addClass('select');
        $('.huiguicon').siblings().find('a').removeClass('select');
        $('.huiguicon').siblings().find('i').removeClass('select');
    }else if(url.indexOf('user') > 0){
        $('.huiyuanicon a').addClass('select');
        $('.huiyuanicon i').addClass('select');
        $('.huiyuanicon').siblings().find('a').removeClass('select');
        $('.huiyuanicon').siblings().find('i').removeClass('select');
    }else if(url.indexOf('huodong') > 0){
        $('.hezuoicon a').addClass('select');
        $('.hezuoicon i').addClass('select');
        $('.hezuoicon').siblings().find('a').removeClass('select');
        $('.hezuoicon').siblings().find('i').removeClass('select');
    }else{
        $('.kaoshiicon a').addClass('select');
        $('.kaoshiicon i').addClass('select');
        $('.kaoshiicon').siblings().find('a').removeClass('select');
        $('.kaoshiicon').siblings().find('i').removeClass('select');
    }
</script>