<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_blog_view', 'common/header_8264_new');
0
|| checktplrefresh('./template/8264/home/space_blog_view.htm', './template/8264/common/header_8264_new.htm', 1509517906, '2', './data/template/2_2_home_space_blog_view.tpl.php', './template/8264', 'home/space_blog_view')
|| checktplrefresh('./template/8264/home/space_blog_view.htm', './template/8264/home/space_header_uc.htm', 1509517906, '2', './data/template/2_2_home_space_blog_view.tpl.php', './template/8264', 'home/space_blog_view')
|| checktplrefresh('./template/8264/home/space_blog_view.htm', './template/8264/common/seccheck_2014.htm', 1509517906, '2', './data/template/2_2_home_space_blog_view.tpl.php', './template/8264', 'home/space_blog_view')
|| checktplrefresh('./template/8264/home/space_blog_view.htm', './template/8264/home/space_footer_uc.htm', 1509517906, '2', './data/template/2_2_home_space_blog_view.tpl.php', './template/8264', 'home/space_blog_view')
|| checktplrefresh('./template/8264/home/space_blog_view.htm', './template/8264/common/footer_8264_new.htm', 1509517906, '2', './data/template/2_2_home_space_blog_view.tpl.php', './template/8264', 'home/space_blog_view')
|| checktplrefresh('./template/8264/home/space_blog_view.htm', './template/8264/common/header_common.htm', 1509517906, '2', './data/template/2_2_home_space_blog_view.tpl.php', './template/8264', 'home/space_blog_view')
|| checktplrefresh('./template/8264/home/space_blog_view.htm', './template/8264/common/index_ad_top.htm', 1509517906, '2', './data/template/2_2_home_space_blog_view.tpl.php', './template/8264', 'home/space_blog_view')
|| checktplrefresh('./template/8264/home/space_blog_view.htm', './template/8264/common/ewm_r.htm', 1509517906, '2', './data/template/2_2_home_space_blog_view.tpl.php', './template/8264', 'home/space_blog_view')
;
block_get('6905');?>
<?php $_G['home_tpl_titles'] = array($blog['subject'], '��־');
$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&amp;uid=$space[uid]&amp;do=$do&amp;view=me\">TA��������־</a>";
$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&amp;uid=$space[uid]&amp;do=blog&amp;id=$blog[blogid]\">�鿴��־</a>";
$friendsname = array(1 => '���Լ��ɼ�',2 => '���Լ��ɼ�',3 => '���Լ��ɼ�',4 => '���Լ��ɼ�'); ?><!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
    <meta name="apple-itunes-app" content="app-id=492167976">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <link rel="dns-prefetch" href="http://stats.8264.com/">
<title>
<?php if(isset($forumOption)) { ?><?php $forumOption->initPageTitle(); } if($pageTitle) { ?><?php echo $pageTitle; } elseif($_G['basescript']=='portal' && $_G['gp_mod']=='list' && $metakeywords && $_G['catid']!=874 ) { if($_G['catid']==878) { ?>
������ŮͼƬ_¿��ͼƬ_����Ļ�����Ů��Ƭ
<?php } else { ?>
            <?php echo $metakeywords;?>
            <?php if($_G['setting']['bbname']) { ?> - <?php echo $_G['setting']['bbname'];?><?php } } } else { ?>
            <?php if($_GET['do']=="produce"&&$_G['uid']) { ?>
               <?php echo $navtitle;?><?php echo "��װ������"; ?>             <?php } elseif($_G['basescript']=='group') { if($_G['uid']) { ?>
<?php echo $navtitle;?>
<?php } else { ?><?php $navtitle ='Ⱥ�� - 8264'; ?><?php echo $navtitle;?>
<?php } } else { ?><?php $navtitle = preg_replace('/�ļ�¼/', '��΢��', $navtitle); if(!empty($topic['title'])) { ?><?php echo $topic['title'];?><?php } if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if($_G['setting']['bbname']) { ?><?php echo $_G['setting']['bbname'];?><?php } ?>
            <?php } } ?>
</title>
<?php echo $_G['setting']['seohead'];?>
    <meta name="keywords" content="<?php if(!empty($metakeywords)) { ?> <?php echo htmlspecialchars($metakeywords, ENT_COMPAT | ENT_HTML401, GB2312); ?> <?php } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { ?> <?php echo htmlspecialchars($metadescription, ENT_COMPAT | ENT_HTML401, GB2312); ?>,<?php echo $_G['setting']['bbname'];?> <?php } ?>" />
<meta name="author" content="8264.com" />
<meta name="copyright" content="2001-2010" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<?php if($_G['basescript']=='portal') { if($_G['gp_mod']=='list') { if($_G['catid'] == '849') { ?>
<meta name="mobile-agent" content="format=html5;url=http://m.8264.com/topic">
<?php } else { ?>
<meta name="mobile-agent" content="format=html5;url=http://m.8264.com/list/<?php echo $_G['catid'];?>">
<?php } } elseif($_G['gp_aid']) { ?>
<meta name="mobile-agent" content="format=html5;url=http://m.8264.com/viewnews-<?php echo $_G['gp_aid'];?>-page-1.html">
<?php } else { ?>
<meta name="mobile-agent" content="format=html5;url=http://m.8264.com/">
<?php } } elseif($_G['basescript']=='forum') { if($_G['gp_mod']=='viewthread' && $_G['tid']) { ?>
<meta name="mobile-agent" content="format=html5;url=http://m.8264.com/thread-<?php echo $_G['tid'];?>-<?php echo $page;?>.html">
<?php } elseif($_G['fid']) { ?>
<meta name="mobile-agent" content="format=html5;url=http://m.8264.com/bbs-<?php echo $_G['fid'];?>-1.html">
<?php } else { ?>
<meta name="mobile-agent" content="format=html5;url=http://m.8264.com/bbs">
<?php } ?>
        <?php } elseif($_G['basescript']=='dianping') { if($_G['url_mod'] && $_G['tid']) { ?>
<meta name="mobile-agent" content="format=html5;url=http://m.8264.com/<?php echo $_G['url_mod'];?>/<?php echo $_G['tid'];?>.html">
<?php } else { ?>
<meta name="mobile-agent" content="format=html5;url=http://m.8264.com/<?php echo $_G['url_mod'];?>/">
<?php } } if(isset($forumOption)) { ?><?php $flag = $forumOption->getSiteUrlbyUrl($_G['siteurl']); if(($flag==1)) { ?><?php $_G['siteurl'] = "http://bbs.8264.com/"; } else { ?><?php $_G['siteurl'] = $_G['siteurl']; } } ?>
<base href="<?php echo $_G['siteurl'];?>" />
<link rel="stylesheet" type="text/css" href="http://static.8264.com/static/css/common/common.css?<?php echo VERHASH;?>" />
<script type="text/javascript">
var STYLEID = '<?php echo STYLEID;?>',
STATICURL = '<?php echo STATICURL;?>',
IMGDIR = 'http://static.8264.com/static/image/common',
VERHASH = '<?php echo VERHASH;?>',
charset = '<?php echo CHARSET;?>',
discuz_uid = '<?php echo $_G['uid'];?>',
cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>',
cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>',
cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',
showusercard = '<?php echo $_G['setting']['showusercard'];?>',
attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>',
disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',
creditnotice = '<?php if($_G['setting ']['creditnotice ']) { ?><?php echo $_G;?>['setting ']['creditnames ']<?php } ?>',
defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>',
REPORTURL = '<?php echo $_G['currenturl_encode'];?>',
SITEURL = '<?php echo $_G['siteurl'];?>';
</script>
<script src="http://static.8264.com/static/js/common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<style>
/* ͷ��������� */
.textAdBox { float: left; width: 978px; border: 1px solid #f0f0f0; border-bottom: 0 none; overflow: hidden; }
.textAdBox ul { float: left; width: 100%; margin-left: -1px; }
.textAdBox ul li { float: left; width:20%; padding: 4px 0; border-bottom: 1px solid #f0f0f0; }
.textAdBox a { display: block; font-size:12px; line-height:24px; font-family: "Microsoft Yahei"; height: 24px; color: #585858; text-align: center; border-left: 1px dashed #d6d6d6; overflow: hidden; }
.textAdBox a:hover { color: #162833; }
.textAdBox .cRed,
.textAdBox .cRed:hover { color: #ff0000; }
.layout:after,
.hd:after,
.bd:after,
.ft:after,
.layoutLeft:after,
.layoutRight:after,
.w980:after { content: ""; display: block; clear: both; visibility: hidden; }
.layout,
.hd,
.bd,
.ft,
.layoutLeft,
.layoutRight,
.w980 { zoom: 1; }
/* ��̳��ҳ Start */
.layout { width: 980px; margin: 0 auto; }
.layoutLeft { float: left; display: inline; width: 660px; }
.layoutRight { float: right; display: inline; width: 260px; }
.w980 { width: 980px; margin: 0 auto; }
.oldad .textAdBox{width: 100%;}
.wp .oldad{width: 98%;}

/* ͷ��������� */
.a_t #textadbox_old { border: 1px solid #cdcdcd; border-bottom: 0 none; overflow: hidden; width:100%; float:none;}
.a_t #textadbox_old ul {  width: 100%; margin-left: -1px; }
.a_t #textadbox_old ul li { float: left; width: 20%; padding:0px; border-bottom: 1px solid #cdcdcd }
.a_t #textadbox_old a { display: block; font: 14px; font-family: Tahoma,Helvetica,SimSun,sans-serif,Hei; height: 28px; color: #333; text-align: center; border-left: 1px solid #cdcdcd; overflow: hidden; line-height: 28px;}
.a_t #textadbox_old a:hover { color: #162833; }
.a_t #textadbox_old .cRed,
.a_t #textadbox_old .cRed:hover { color: #ff0000; }
</style>
<?php if(defined('CURMODULE') && ($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') && (CURMODULE == 'index' || CURMODULE == 'forumdisplay' || CURMODULE == 'group')) { ?><?php echo $rsshead;?><?php } if($_G['basescript'] == 'forum') { ?>
<script src="http://static.8264.com/static/js/forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="http://static.8264.com/static/js/home.js?<?php echo VERHASH;?>" type="text/javascript" ></script>

<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="http://static.8264.com/static/js/portal.js?<?php echo VERHASH;?>" type="text/javascript" ></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && ($_G['mod'] == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { ?>
<script src="http://static.8264.com/static/js/portal.js?<?php echo VERHASH;?>" type="text/javascript" ></script>
<?php } if($_GET['diy'] == 'yes' && ($_G['mod'] == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { ?>
<link rel="stylesheet" type="text/css" href="http://static.8264.com/static/css/common/diy.css?<?php echo VERHASH;?>" />
<?php } ?><?php $user_IP = ($_SERVER["HTTP_CDN_SRC_IP"]); ?><style type="text/css">
.textAdBox ul { width:980px; overflow:hidden; }
.textAdBox ul li { width:196px; }
</style>
<!--[if lt ie 9]>
    <style type="text/css">
    .card-box input[type="checkbox"]{opacity:1!important; filter:alpha(opacity=100)!important;}
    .card-box .input-hack{display:none;}
    </style>
    <![endif]-->
<link href="http://static.8264.com/static/css/common/reset.css" rel="stylesheet" type="text/css">
<link href="http://static.8264.com/static/css/common/common_head_bottom.css" rel="stylesheet" type="text/css">
<!--[if IE 6]>
<script src="http://static.8264.com/static/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
<script src="http://static.8264.com/static/js/DD_belatedPNG_css.js" type="text/javascript"></script>
<![endif]-->
<script src="http://static.8264.com/static/js/jquery-1.9.1.min.js" type="text/javascript" type="text/javascript"></script>
<script>var timer_showmsg = null;</script>
<script src="http://static.8264.com/static/js/common_head_bottom.js" type="text/javascript" type="text/javascript"></script>
<script type="text/javascript">jQuery.noConflict();</script>
<?php if($_G['fid'] == 433 || $identifier == 'whither') { ?>
<script>
//ͳ�ƾɰ�Ŀ�ĵ�
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?2d3beaebd73cbb25bb5cfb5c1c9c0c37";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
<?php } elseif(($_G['fid']==489 || $_GET['fid']==489 || $_G['fid']==500 || $_GET['fid']==500)) { ?>
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "//hm.baidu.com/hm.js?022bd0feae65e018f92448fc5e4517d8";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>
<?php } ?>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?>" onkeydown="if(event.keyCode==27) return false;">
<?php if(($_G['mod']!='topic' && $_G['group']['allowdiy'] && !empty($_G['style']['tplfile'])) || (!empty($_G['style']['tplfile']) && $_G['mod']=='topic' && (($_G['group']['allowaddtopic'] && $topic['uid']==$_G['uid']) || $_G['group']['allowmanagetopic']))) { ?>
<a id="diy-tg" style="z-index:9999" href="javascript:openDiy();" title="�� DIY ���"><img src="http://static.8264.com/static/image/diy/panel-toggle.png" alt="DIY" /></a>
<?php } ?>
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && (CURMODULE == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { include template('common/header_diy'); } ?>
    <!--ͷ����洦��--><div>
<?php if($isShouYe == "index") { ?>    
<!--ͷ��������ʼ-->
<script type="text/javascript">
jQuery(function(){
setTimeout(function(){jQuery("#adtopbig").hide();jQuery("#adtop_r").show();},7000);
jQuery("#close_top").click(function(){
jQuery("#adtopbig").hide();
jQuery("#adtop_r").show();
});
});
</script>
<style>
.adtop{ width:1100px; height:300px; position:relative; margin:0 auto;}
.close_top{ width:79px; height:37px; position:absolute; bottom:-7px; right:-7px; cursor:pointer;}
.adtop_r{ width:1100px; height:50px; display:none; margin:0 auto; position:relative;}
</style>
<div class="adtop" id="adtopbig">
<!-- ��ҳ������������-->
<script type='text/javascript'><!--//<![CDATA[
           var m3_u = (location.protocol=='https:'?'https://ads.8264.com/www/delivery/ajs.php':'http://ads.8264.com/www/delivery/ajs.php');
           var m3_r = Math.floor(Math.random()*99999999999);
           if (!document.MAX_used) document.MAX_used = ',';
           document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
           document.write ("?zoneid=10");
           document.write ('&amp;cb=' + m3_r);
           if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
           document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
           document.write ("&amp;loc=" + escape(window.location));
           if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
           if (document.context) document.write ("&context=" + escape(document.context));
           if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
           document.write ("'><\/scr"+"ipt>");
        //]]>--></script>
<span class="close_top" id="close_top"><img width="79" height="37" border="0" src="http://static.8264.com/static/images/moban/indexnew/images/close.gif" /></span>
    <span style="width:26px; height:13px; position:absolute; bottom:0px; left:0px; font-size:0px; line-height:0px;"><img src="http://static.8264.com/static/images/common/ad_logo_update_IAB.gif"></span>
</div>
<div class="adtop_r" id="adtop_r">
<!--��ҳ����������С��-->
<script type='text/javascript'><!--//<![CDATA[
           var m3_u = (location.protocol=='https:'?'https://ads.8264.com/www/delivery/ajs.php':'http://ads.8264.com/www/delivery/ajs.php');
           var m3_r = Math.floor(Math.random()*99999999999);
           if (!document.MAX_used) document.MAX_used = ',';
           document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
           document.write ("?zoneid=1");
           document.write ('&amp;cb=' + m3_r);
           if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
           document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
           document.write ("&amp;loc=" + escape(window.location));
           if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
           if (document.context) document.write ("&context=" + escape(document.context));
           if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
           document.write ("'><\/scr"+"ipt>");
        //]]>--></script>
<span style="width:26px; height:13px; position:absolute; bottom:0px; right:0px; font-size:0px; line-height:0px;"><img src="http://static.8264.com/static/images/common/ad_logo_update_IAB.gif"></span>
</div>
<!--ͷ����������-->	
<?php } ?>
</div><!--ͷ����洦�� end-->
<div class="headerNav">
<div class="layout" id="heardnew">
<div class="logo">
<a href="<?php echo $_G['config']['web']['portal'];?>">
<img src="http://static.8264.com/static/image/common/bbs_logo.png" alt="8264" titile="8264" />
</a>
</div>
<ul class="nav">
<li>
<a href="<?php echo $_G['config']['web']['portal'];?>list/238/" class="topLink">֪ʶ</a>
<dl>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>list/751/" class="first">ҵ����Ѷ</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['forum'];?>forum-12-1.html" class="first">�������</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>list/238/">֪ʶ</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>list/204/">����װ��</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>topic_list/" class="last">ר��</a>
</dd>
</dl>
</li>
<li>
<a href="<?php echo $_G['config']['web']['portal'];?>zhuangbei.html" class="topLink">����</a>
<dl>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>zhuangbei.html" class="first">������Ʒ</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>pinpai">Ʒ��</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>dianpu">�����</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>xuechang">��ѩ��</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>shanfeng">ɽ��</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>xianlu">��·</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>panpa/">����</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>qianshui/">Ǳˮ��</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>diaoyu/">���㳡��</a>
</dd>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>julebu/">������ֲ�</a>
</dd>
                        <dd>
<a href="<?php echo $_G['config']['web']['portal'];?>kezhan/" class="last">�����ջ</a>
</dd>
</dl>
</li>
<li>
<a href="<?php echo $_G['config']['web']['forum'];?>" class="topLink">��̳</a>
<dl>
<dd>
<a href="<?php echo $_G['config']['web']['portal'];?>list/871/" class="first">��ѡ</a>
</dd>
                        <dd>
<a href="<?php echo $_G['config']['web']['portal'];?>youji/?from=bbstop">�μ�</a>
</dd>
                        <dd>
<a href="<?php echo $_G['config']['web']['portal'];?>wenda/?from=bbstop">�ʴ�</a>
</dd>
                        <dd>
<a href="http://www.8264.com/list/842">ÿ��һͼ</a>
</dd>
                        <dd>
<a href="http://www.8264.com/pp">���õ��</a>
</dd>
                        <dd>
<a href="http://www.8264.com/list/912">������Ӱʦ</a>
</dd>
                        <dd>
<a href="http://www.8264.com/list/880" class="last">��������</a>
</dd>
</dl>
</li>
                <li class="wan" style="width:82px;" id="schoolpoplink"><a href="http://www.8264.com/xuexiao/?from=indexnavtop" class="topLink topLink_w_bg wkuan" target="_blank">����ѧУ</a><div class="navschoolpop"><img src="http://static.8264.com/static/image/common/xuexiaopop.png"></div></li>
                <li>
                	<a href="http://hd.8264.com/?from=bbstop" class="topLink" target="_blank">�</a>
                    <dl>
                        <dd>
<a href="http://bbs.8264.com/forum-161-1.html" class="first last" target="_blank">���</a>
</dd>

</dl>
                </li>
        <li class="wan" style="width:67px;"><a href="http://www.8264.net/?from=top" class="topLink topLink_w_bg wkuan" target="_blank">ֵ����</a></li>
<li class="wan"><a href="http://bx.8264.com/?bbsbxnew" class="topLink topLink_w_bg wkuan" target="_blank">����</a></li>
</ul>
<?php if($_G['uid']) { ?>
<ul class="head_login_info">
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1']; ?>
<li id="usermessagetips" style="z-index:21;"  class="notHover"><?php $counts= $_G[member][newprompt]+$_G[member][newpm]; ?><a href="<?php echo $_G['config']['web']['home'];?>home.php?mod=space&do=notice" class="head_login_icon24_24 nohover"><span class="newimg <?php if($counts==0) { ?>nimg<?php } ?>"><?php if($counts>99) { ?>99+<?php } else { ?><?php echo $counts;?><?php } ?><i></i></span></a>
</li>
<li>
<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" class="head_login_icon24_24 tx"><?php echo avatar($_G[uid], 'small', false, false, false, '', true); ?></a>
<div class="myidnamewarpten"  style="display:none;">
<div class="myidname clearfix">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>"><?php echo $_G['username'];?></a>
<?php if($_G['member']['extcredits5']) { ?>
<a href="<?php echo $_G['config']['web']['forum'];?>forum.php?mod=forumdisplay&fid=483" class="bicon" target="_blank" title="��������<?php echo $_G['member']['extcredits5'];?>ö8264�ң����ȥ�һ���Ʒ">
<?php } else { ?>
<a href="<?php echo $_G['config']['web']['forum'];?>forum.php?mod=viewthread&tid=1641700" class="bicon" target="_blank" title="����������8264�ң�����������׬ȡ">
<?php } ?><?php echo $_G['member']['extcredits5'];?>ö
</a>
</div>
<ul class="myidcz">
<li><a class="wdtz" target="_blank" href="<?php echo $_G['config']['web']['home'];?>home-space-uid-<?php echo $_G['uid'];?>-do-thread-view-me-from-space.html">�ҵ�����</a></li>
<li><a class="wdxc" target="_blank" href="<?php echo $_G['config']['web']['home'];?>home-space-uid-<?php echo $_G['uid'];?>-do-album-view-me.html">�ҵ����</a></li>
<li><a class="myLog" target="_blank" href="<?php echo $_G['config']['web']['home'];?>home-space-uid-<?php echo $_G['uid'];?>-do-blog-view-me-from-space.html">�ҵ���־</a></li>
<li><a class="myFriend" target="_blank" href="<?php echo $_G['config']['web']['home'];?>home-space-uid-<?php echo $_G['uid'];?>-do-friend.html">�ҵĹ�ע</a></li>
<li><a class="sc" target="_blank" href="<?php echo $_G['config']['web']['home'];?>home-space-do-favorite.html">�ҵ��ղ�</a></li>
<li><a class="myrenwu" target="_blank" href="<?php echo $_G['config']['web']['home'];?>home-task-item-new.html">�ҵ�����</a></li>
<?php if($_G['group']['allowmanagearticle'] || $_G['group']['allowdiy'] || in_array($_G['uid'], $_G['setting']['ext_portalmanager'])) { ?>
<li><a class="myDoor" target="_blank" href="<?php echo $_G['config']['web']['portal'];?>portal.php?mod=portalcp">�Ż�����</a></li>
<?php } if($_G['uid'] && ($_G['group']['radminid'] == 1 || $_G['member']['allowadmincp'])) { ?>
<li><a class="myCenter" target="_blank" href="<?php echo $_G['config']['web']['forum'];?>admin.php">��������</a></li>
<?php } ?>
<li><a class="myAccount" target="_blank" href="<?php echo $_G['config']['web']['home'];?>home-setting.html">�˻�����</a></li>
<li><a class="myQuit" href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a></li>
</ul>
</div>
</li>
</ul>
<?php } else { ?>
<ul class="noLogin">
<li><a href="<?php echo $_G['config']['web']['forum'];?>member.php?mod=logging&action=login" onClick="showWindow('login', this.href);hideWindow('register');" class="loginIco">��¼</a></li>
<li><a href="<?php echo $_G['config']['web']['forum'];?>member.php?mod=<?php echo $_G['setting']['regname'];?>" onClick="showWindow('register', this.href);hideWindow('login');" href="" class="regIco"><?php echo $_G['setting']['reglinkname'];?></a></li>
</ul>
<?php } ?>
<div class="searchTopNav">
<form id="scform" autocomplete="off" action="http://so.8264.com/cse/search" target="_blank">
<input type="hidden" name="s" value="9963133823733045431" />
<?php if(CURSCRIPT == 'forum') { ?><input type="hidden" name="nsid" value="2" /><?php } if(CURSCRIPT == 'question') { ?><input type="hidden" name="nsid" value="4" /><?php } ?>
<span id="searchTips" class="tips">����</span>
<input id="searchText" class="text" type="text" value="" name="q"/>
<input class="subButton" type="submit" value=""/>
</form>
</div>
</div>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header']; ?>
<div id="wp">
<!-- �ֻ�����ʾ -->
<?php if($_G['uid'] && !$_G['member']['telstatus']) { ?>
<style type="text/css">.realName{background-color:#fff2e5;box-shadow:0 0 1px #f5e2cf inset}.realName__container{width:980px;margin:0 auto;position:relative}.realName__close{position:absolute;right:0;overflow:hidden;top:22px}.realName__close--button{width:15px;height:15px;background:url(http://static.8264.com/static/images/close.png) no-repeat;text-indent:-99em;display:block}.realName__content{padding:15px 0;text-align:center}.realName__text{color:#4b3627;font-size:14px;background:url(http://static.8264.com/static/images/sos.png) no-repeat 0 50%;padding-left:30px}.realName__button--binding{display:inline-block;width:82px;height:28px;line-height:28px;border-radius:14px;font-size:14px;background-color:#ff5e33;color:#fefefe;box-shadow:0 4px 10px rgba(255,94,51,.44);margin-left:10px}.realName__button--binding:hover{color:#fefefe;text-decoration: none;}</style>
<div class="realName">
<div class="realName__container">
<div class="realName__close">
<a href="javascript:void(0);" class="realName__close--button">x</a>
</div>
<div class="realName__content">
<span class="realName__text">���ݹ�����ع涨�������Ȳ�����������ֻ��Ű󶨣�</span>
<a href="http://u.8264.com/home-setting.html#account-security" class="realName__button--binding">ȥ��</a>
</div>
</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
$('.realName__close').bind('click', function(event) {
$(this).parents('.realName').hide()
});
});
</script>
<?php } ?>
<!-- //�ֻ�����ʾ -->
<?php if($_G['gp_do'] == 'album') { ?>
 <link rel="stylesheet" type="text/css" href="http://static.8264.com/static/css/home/album-app.css?<?php echo VERHASH;?>" /> 
<?php } else { ?>
 <link rel="stylesheet" type="text/css" href="http://static.8264.com/static/css/home/blog-app.css?<?php echo VERHASH;?>" /> 
<?php } ?>
<!--<link rel="stylesheet" type="text/css" href="http://www.8264.com/static/css/home/uc_tanchukuang.css?<?php echo VERHASH;?>" />-->
 <link rel="stylesheet" type="text/css" href="http://static.8264.com/static/css/home/uc_tanchukuang.css?<?php echo VERHASH;?>" /> 
<style type="text/css">
.newswarpten {display:none!important;}
</style>
<script type="text/javascript">
jQuery(function(){
//������	
jQuery('.manageContainer li').hover(function(){
var opObj = jQuery(this).find('.mod-op');		
opObj.find('.pl-popup-btn').show();
opObj.find('.pl-popup-panel').hide();
opObj.show();
},function(){
var opObj = jQuery(this).find('.mod-op');
opObj.hide();
});

jQuery('.manageContainer .pl-popup-btn').click(function(){
jQuery(this).next().show();
});

//���Ժ����ʽ��д
waithandle = setInterval(function(){
var flbobj = jQuery('.flb');
if (flbobj.length > 0) {
if (flbobj.html().indexOf("static/image/common/loading.gif") > -1) {
jQuery('.flb').addClass('dhinfo plr').removeClass('flb');
jQuery('#fwin_dialog_close').parent().remove();
jQuery('.dhinfo em').css({'padding':'0 60px'});
}
}
},10);

//��������
if (jQuery('.skin-layer-shadow').length > 0) {
jQuery('.p-profile').hover(function(){
jQuery('.skin-layer-shadow').css({'height':'30px'});
},function(){
jQuery('.skin-layer-shadow').css({'height':'0'});
});	
}
if (!jQuery('.cust-page-list .prev').hasClass('simple')) {
jQuery('.cust-page-list .prev').remove();	
}	
});

function showMenu_uc(id,top,left) {
showMenu(id);
jQuery('#'+id+'_menu').css({'top':top+'px'});
if (left) {
jQuery('#'+id+'_menu').css({'left':left+'px'});
}
}

function showDialog_uc(message) {
showDialog(message, 'notice');
jQuery('.altw').addClass('dhinfo plr');
jQuery('.alert_info').addClass('erroricon').removeClass('alert_info');
jQuery('.alert_error').addClass('erroricon').removeClass('alert_error');
jQuery('.flb').hide();
jQuery('.pns').hide();
jQuery('#fwin_dialog_cover').remove();	
jQuery('.dhinfo').append('<a href="javascript:void(0);" onclick="hideMenu(\'fwin_dialog\', \'dialog\');" class="closebtn"></a>');
return false;
}
</script>	

<div id="container" class="ic-page">
<!--header-->
<div class="lazy-showBG blur-bg">
<div class="header-bg" <?php if($coverurl) { ?>style="background-image:url('<?php echo $coverurl;?>');"<?php } ?>></div>
</div>
<div id="header">
<div class="p-profile container" <?php if($coverurl) { ?>style="background-image:url('<?php echo $coverurl;?>');"<?php } ?>>
<div class="p-profile-name">
<h3 class="tit">
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>" class="text-user">
<span class="u-vip"><?php echo $space['username'];?></span>
</a>
<!--��ע��ϵ-->
<?php if(!$space['self']) { if(empty($space['mutual'])) { if($_G['uid']) { ?>
<a href="home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=<?php echo $space['uid'];?>&amp;is_uc=1" class="p-btn-c btn-28" id="ajax_follow_me_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">
<?php } else { ?>
<a href="member.php?mod=logging&amp;action=login" class="p-btn-c btn-28">
<?php } ?>
<i class="icon-f icon-add-f"></i>��ע
</a>

<?php } elseif($space['mutual'] == 1) { ?>
<a href="javascript:void(0);" class="p-btn-d btn-28" onmouseover="var offleft = jQuery('.text-user').width()+200;showMenu_uc(this.id,'35',offleft);" id="followselect">
<i class="icon-f icon-focus-f"></i>�ѹ�ע
</a>
<?php } elseif($space['mutual'] == 2) { ?>
<a href="javascript:void(0);" class="p-btn-d btn-28" onmouseover="var offleft = jQuery('.text-user').width()+200;showMenu_uc(this.id,'35',offleft);" id="followselect">
<i class="icon-f icon-addtwo-f"></i>�����ע
</a>
<?php } if($space['mutual']) { ?>
<div class="layer-list" id="followselect_menu" style="display:none;">
<a href="home.php?mod=spacecp&amp;ac=friend&amp;op=changegroup&amp;uid=<?php echo $space['uid'];?>&amp;is_uc=1" class="" id="friend_group_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">
<span class="t">���÷���</span>
</a>
<a href="home.php?mod=spacecp&amp;ac=friend&amp;op=ucignore&amp;uid=<?php echo $space['uid'];?>&amp;is_uc=1" class="" id="ajax_unfollow_me_<?php echo $space['uid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">
<span class="t">ȡ����ע</span>
</a>
</div>
<?php } ?>
<script type="text/javascript">
jQuery(function(){
jQuery("#operation a.unfollow").off("click").click(function(e) {
var url = "home.php?mod=spacecp&amp;ac=friend&amp;op=ignore&amp;uid=%uid&amp;confirm=1";
url = url.replace(/%uid/g, uid).replace(/&amp;/g, "&");
dconfirm('ȡ����ע', 'ȷ��ȡ����ע��?', function() {
jQuery.post(url, {uid:uid}, function(data) {
if(data == 'success') {
showDialog("<p>ȡ����ע�ɹ�</p>", 'notice', '','' , 0, '', '', '', '', 2);
li.remove();
}
});
});
e.preventDefault();
jQuery(this).parent("div").hide();
});
});
</script>
<?php } ?>
<!--��ע��ϵ home.php?mod=spacecp&ac=pm&touid=<?php echo $space['uid'];?> end-->			
<?php if(!$space['self']) { ?><a href="home.php?mod=space&amp;do=pm&amp;subop=view&amp;touid=<?php echo $space['uid'];?>&amp;daterange=5#f_pst" class="p-btn-d btn-28" target="_blank"><i class="send-mess"></i>����Ϣ</a><?php } ?>				
</h3>
</div>
<div class="p-profile-data">
<div class="avatar">
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo avatar($space[uid],middle); ?></a>
</div>
<ul class="user-atten">
<li>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=friend" target="_blank">
<strong><?php if($space['friends']) { ?><?php echo $space['friends'];?><?php } else { ?>0<?php } ?></strong>
<span class="txt">��ע</span>
</a>
</li>
<li class="last">
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=friend&amp;view=fans" target="_blank">
<strong><?php if($space['fans']) { ?><?php echo $space['fans'];?><?php } else { ?>0<?php } ?></strong>
<span class="txt">��˿</span>
</a>
</li>
</ul>
</div>
<!--��������-->
<?php if($space['self']) { ?>		
<div class="skin-layer-shadow" style="display:block;height:0;overflow:hidden;">
<div id="uploadpic"></div>
</div>
<?php } ?>
<!--�������� end-->
</div>
</div>
<!--header end-->
<!--content-->
<div id="content">
<!--module-->
<div class="module">
<div class="lazy-showBG">
<div class="main-nav-bg"></div>
</div>
<div class="global-nav">
<div class="container">
<!--nav-->
<div class="global-nav-inner">
<ul class="global-actions">
<li>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?><?php if($_G['adminid'] == 1) { ?>&amp;view=admin<?php } ?>" <?php if($do == 'index' || $do == 'home') { ?>class="active"<?php } ?>>��ҳ</a>
</li>
<li class="sn-separator"></li>
<li>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=thread&amp;view=me&amp;from=space" <?php if($_G['gp_do'] == 'thread') { ?>class="active"<?php } ?>>����</a>
</li>
<li class="sn-separator"></li>					
<li>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=ownactivity" <?php if($_G['gp_do'] == 'ownactivity') { ?>class="active"<?php } ?>>�</a>
</li>
<li class="sn-separator"></li>
<li>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=dianping" <?php if($_G['gp_do'] == 'dianping') { ?>class="active"<?php } ?>>����</a>
</li>
<li class="sn-separator"></li>
<li>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=blog&amp;view=me&amp;from=space" <?php if($_G['gp_do'] == 'blog' || $_G['gp_ac'] == 'blog') { ?>class="active"<?php } ?>>��־</a>
</li>
<li class="sn-separator"></li>
<li>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=album&amp;view=me" <?php if($_G['gp_do'] == 'album') { ?>class="active"<?php } ?>>���</a>
</li>
</ul>
</div>
<!--nav end-->
<ul class="statistic-data">
<li>
<a href="forum.php?mod=forumdisplay&amp;fid=483" target="_blank">
<span class="text-atr">8264��</span>
<b class="text-count"><?php echo $space['extcredits5'];?></b>
</a>
</li>
<li>
<a href="javascript:void(0);" id="ucentermore" onmouseover="showMenu_uc(this.id,'40')" class="showmenu">
<span class="text-atr">����</span>
<!--							<b class="text-more">+</b>-->
</a>
</li>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser') || $_G['adminid'] == 1) { if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<li>
<?php if(checkperm('allowbanuser')) { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $space['username'];?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu_uc(this.id,'40');" class="showmenu" target="_blank">
<?php } else { ?>
<a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $space['username'];?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" id="usermanageli" onmouseover="showMenu_uc(this.id,'40');" class="showmenu" target="_blank">
<?php } ?>
<span class="text-atr">�û�����</span>
</a>
</li>
<?php } if($_G['adminid'] == 1) { ?>
<li>
<a href="forum.php?mod=modcp&amp;action=thread&amp;op=post&amp;do=search&amp;searchsubmit=1&amp;users=<?php echo $space['username'];?>" id="umanageli" onmouseover="showMenu_uc(this.id,'40')" class="showmenu">
<span class="text-atr">���ݹ���</span>
</a>
</li>
<?php } } ?>
</ul>
<ul id="ucentermore_menu" class="p_pop" style="display:none;">
<!--<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=doing&amp;view=me&amp;from=space">˵˵</a></li>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=share&amp;view=me&amp;from=space">����</a></li>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=wall">���԰�</a></li>			-->		
<?php if($space['self']) { ?><li><a href="home.php?mod=space&amp;do=favorite">�ղ�</a></li><?php } ?>

<!--<li><a href="home.php?mod=medal" target="_blank">ѫ��</a></li>
<li><a href="group.php?mod=my" target="_blank">Ⱥ��</a></li> Ҫ�ж�<?php echo $space['self'];?>-->					

<li><a href="home.php?mod=spacecp&amp;ac=credit&amp;uid=<?php echo $space['uid'];?>&amp;op=base">����</a></li>
<li><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=profile">��������</a></li>
</ul>
<?php if(checkperm('allowbanuser') || checkperm('allowedituser') || $_G['adminid'] == 1) { if(checkperm('allowbanuser') || checkperm('allowedituser')) { ?>
<ul id="usermanageli_menu" class="p_pop" style="display:none;">
<?php if(checkperm('allowbanuser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=ban&username=<?php echo $space['username'];?>&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=ban&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">��ֹ�û�</a></li>
<?php } if(checkperm('allowedituser')) { ?>
<li><a href="<?php if($_G['adminid'] == 1) { ?>admin.php?action=members&operation=search&username=<?php echo $space['username'];?>&submit=yes&frames=yes<?php } else { ?>forum.php?mod=modcp&action=member&op=edit&uid=<?php echo $space['uid'];?><?php } ?>" target="_blank">�༭�û�</a></li>
<?php } ?>
</ul>
<?php } if($_G['adminid'] == 1) { ?>
<ul id="umanageli_menu" class="p_pop" style="display:none;">
<li><a href="admin.php?action=threads&amp;users=<?php echo $space['username'];?>" target="_blank">��������</a></li>
<li><a href="admin.php?action=doing&amp;searchsubmit=1&amp;users=<?php echo $space['username'];?>" target="_blank">������¼</a></li>
<li><a href="admin.php?action=blog&amp;searchsubmit=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">������־</a></li>
<li><a href="admin.php?action=feed&amp;searchsubmit=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">������̬</a></li>
<li><a href="admin.php?action=album&amp;searchsubmit=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">�������</a></li>
<li><a href="admin.php?action=pic&amp;searchsubmit=1&amp;users=<?php echo $space['username'];?>" target="_blank">����ͼƬ</a></li>
<li><a href="admin.php?action=comment&amp;searchsubmit=1&amp;authorid=<?php echo $space['uid'];?>" target="_blank">��������</a></li>
<li><a href="admin.php?action=share&amp;searchsubmit=1&amp;uid=<?php echo $space['uid'];?>" target="_blank">��������</a></li>
<li><a href="admin.php?action=threads&amp;operation=group&amp;users=<?php echo $space['username'];?>" target="_blank">Ⱥ������</a></li>
<li><a href="admin.php?action=prune&amp;searchsubmit=1&amp;operation=group&amp;users=<?php echo $space['username'];?>" target="_blank">Ⱥ������</a></li>
</ul>
<?php } } ?>
</div>
</div>
</div>
<!--module end--><!--main-content-->	
<style type="text/css">
.yzm {top:25px!important;}
</style>	
<div class="main-content layout-page">
<div class="layout-app">
<div class="blog-content-container mod-wrap">
<div class="ui-block ui-block-title blog-block-title">
<div class="ui-title">
<h3><?php if($space['self']) { ?>��<?php } else { ?><?php echo $space['username'];?><?php } ?>����־</h3>
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=blog&amp;view=me&amp;from=space" class="ui-list-link">������־�б� ></a>
</div>
</div>
<div class="ui-block ui-block-content">
<div class="blog-info-container">
<div class="blog-info-hd">
<div class="blog-title">
<h3 class="c-tx2"><?php echo $blog['subject'];?></h3>
</div>
<div class="operate-toolbar">
<!--������Ϣ-->							
<div class="tit-other-info">
<span class="pub-time">
<i class="icon-b icon-time"></i><?php echo dgmdate($blog[dateline]); ?></span>
<span class="view-num">
<i class="icon-b icon-view"></i><?php echo $blog['viewnum'];?>
</span>
<?php if($blog['friend']) { ?><span class="view-num"><?php echo $friendsname[$blog['friend']];?></span><?php } if($classarr['classname']) { ?><span class="view-num">���˷��ࣺ<a href="home.php?mod=space&amp;uid=<?php echo $blog['uid'];?>&amp;do=blog&amp;classid=<?php echo $blog['classid'];?>&amp;view=me"><?php echo $classarr['classname'];?></a></span><?php } if($blog['hot']) { ?><span class="view-num">�ȶȣ�<?php echo $blog['hot'];?></span><?php } ?>
</div>
<!--������Ϣ end-->
<!--���²���-->
<div class="blog-op-bar">
<div class="mod-interactive">
<ul>
<li class="op-list-item">
<?php if($_G['uid']) { ?>
<a href="home.php?mod=spacecp&amp;ac=click&amp;op=add&amp;clickid=3&amp;idtype=blogid&amp;id=<?php echo $blog['blogid'];?>&amp;hash=<?php echo $hash;?>&amp;handlekey=clickhandle&amp;is_uc=1" id="click_blogid_<?php echo $blog['blogid'];?>_3" onclick="showWindow(this.id, this.href);doane(event);">
<?php } else { ?>
<a href="member.php?mod=logging&amp;action=login">
<?php } ?>
��(<span id="clicknum" class="clicknum"><?php echo $blog['click3']+$blog['click4'];; ?></span>)</a>
<span id="return_click_blogid_<?php echo $blog['blogid'];?>_3"></span>
</li>
<li class="op-list-item">
<a class="btncomment" href="javascript:void(0);">����(<span id="comment_replynum" class="comment_replynum"><?php echo $blog['replynum'];?></span>)</a>
</li>
<li class="op-list-item shareBtn">
<a href="javascript:;" class="share">����(<span class="shareCount"></span>)</a>
<div class="bdsharebuttonbox share-wrap-cust" data-tag="share_1">
<span class="share-arr"></span>
<a href="javascript:;" class="sina" data-cmd="tsina"></a>
<a href="javascript:;" class="qq" data-cmd="qzone"></a>
<a href="javascript:;" class="wb" data-cmd="tqq"></a>
<a href="javascript:;" class="wx" data-cmd="weixin"></a>
<a class="bds_count" data-cmd="count" style="display:none;">-1</a>
</div>
</li>
<li class="op-list-item">
<?php if($_G['uid']) { ?>
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=blog&amp;id=<?php echo $blog['blogid'];?>&amp;spaceuid=<?php echo $blog['uid'];?>&amp;is_uc=1&amp;handlekey=favoritebloghk_<?php echo $blog['blogid'];?>" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" >
<?php } else { ?>
<a href="member.php?mod=logging&amp;action=login">
<?php } ?>										
�ղ�</a>
</li>									
<li class="op-list-item moreli" style="z-index:102;">
<?php if($_G['uid'] == $blog['uid'] || checkperm('manageblog')) { ?>
<a class="drop-list" href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?>&amp;op=edit">
<span class="adjust">�༭</span>
<span class="mod-arr"></span>
</a>	
<?php } else { ?>
<a class="drop-list" href="javascript:void(0);">
<span class="adjust">����</span>
<span class="mod-arr"></span>
</a>
<?php } ?>											
<div class="op-more op-drop op-extend" style="display:none;">
<ul>
<?php if($_G['uid'] == $blog['uid'] || checkperm('manageblog')) { ?>
<li>
<a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?>&amp;op=edit" class="drop-list">�༭</a>
</li>
<li>
<a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?>&amp;op=delete&amp;handlekey=delbloghk_<?php echo $blog['blogid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);" id="blog_delete_<?php echo $blog['blogid'];?>">ɾ��</a>
</li>	
<?php } if($_G['uid'] != $blog['uid']) { ?>
<li>														
<?php if($_G['uid']) { ?>
<a href="javascript:;" onclick="showWindow('miscreport<?php echo $blog['blogid'];?>', 'misc.php?mod=report&rtype=blog&rid=<?php echo $blog['blogid'];?>&is_uc=1', 'get', -1);return false;">
<?php } else { ?>
<a href="member.php?mod=logging&amp;action=login">
<?php } ?>		
�ٱ�</a>
</li>										
<?php } if(checkperm('manageblog')) { ?>
<li class="op-list-item">
<a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?>&amp;op=edithot&amp;handlekey=bloghothk_<?php echo $blog['blogid'];?>" id="blog_hot_<?php echo $blog['blogid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">�ȶ�</a>
</li>
<?php } ?>	
<?php if(!$blog['friend'] && !$blog['pushedaid'] && ($_G['group']['allowauthorizedarticle'] || $_G['group']['allowmanagearticle'])) { ?>
<li>
<a href="portal.php?mod=portalcp&amp;ac=index&amp;op=push&amp;idtype=blogid&amp;id=<?php echo $blog['blogid'];?>" onclick="showWindow('push', this.href, 'get', 0)">��������</a>
</li>
<?php } ?>
</ul>
</div>
</li>																
</ul>
</div>
</div>							
<!--���²��� end-->
</div>
</div>
<div class="blog-info-bd">
<!--��־����-->
<div class="blog-detail-content" id="blog_article">
<style type="text/css">
#blog_article a.keyword{color:#000 !important; text-decoration:none;}
#blog_article img{display:none;}
</style><?php echo adshow("blog/a_b"); if(file_exists(DISCUZ_ROOT.'./source/plugin/articlekeywords/include.php')) { ?><?php require_once DISCUZ_ROOT.'./source/plugin/articlekeywords/include.php'; ?><?php $articleKeywords = new ArticleKeywords(); ?><?php echo $articleKeywords->parseArticle($blog[message]); } else { ?>
<?php echo $blog['message'];?>
<?php } ?>
</div>
<!--��־���� end-->					 	
<div class="operate-toolbar">
<div class="mod-links">
<?php if($prevBlog) { ?>
<span class="prev-blog">
<a href="home.php?mod=space&amp;uid=<?php echo $blog['uid'];?>&amp;do=blog&amp;id=<?php echo $prevBlog['blogid'];?>" class="">��һƪ</a>
</span>
<?php } if($nextBlog) { ?>
<span class="next-blog">
<a href="home.php?mod=space&amp;uid=<?php echo $blog['uid'];?>&amp;do=blog&amp;id=<?php echo $nextBlog['blogid'];?>" class="">��һƪ��<?php echo $nextBlog['subject'];?></a>
</span>
<?php } ?>
</div>
<!--���²���-->
<div class="blog-op-bar">
<div class="mod-interactive">
<ul>
<li class="op-list-item">
<?php if($_G['uid']) { ?>
<a href="home.php?mod=spacecp&amp;ac=click&amp;op=add&amp;clickid=3&amp;idtype=blogid&amp;id=<?php echo $blog['blogid'];?>&amp;hash=<?php echo $hash;?>&amp;handlekey=clickhandle&amp;is_uc=1" id="click_blogid_<?php echo $blog['blogid'];?>_3" onclick="showWindow(this.id, this.href);doane(event);">
<?php } else { ?>
<a href="member.php?mod=logging&amp;action=login">
<?php } ?>
��(<span id="clicknum" class="clicknum"><?php echo $blog['click3']+$blog['click4'];; ?></span>)</a>
</li>
<li class="op-list-item">
<a class="btncomment" href="javascript:void(0);">����(<span class="comment_replynum"><?php echo $blog['replynum'];?></span>)</a>
</li>
<li class="op-list-item shareBtn">
<a href="javascript:;" class="share">����(<span class="shareCount"></span>)</a>
<div class="bdsharebuttonbox share-wrap-cust" data-tag="share_1">
<span class="share-arr"></span>
<a href="javascript:;" class="sina" data-cmd="tsina"></a>
<a href="javascript:;" class="qq" data-cmd="qzone"></a>
<a href="javascript:;" class="wb" data-cmd="tqq"></a>
<a href="javascript:;" class="wx" data-cmd="weixin"></a>
<a class="bds_count" data-cmd="count" style="display:none;">-1</a>
</div>
</li>
<li class="op-list-item">
<?php if($_G['uid']) { ?>
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=blog&amp;id=<?php echo $blog['blogid'];?>&amp;spaceuid=<?php echo $blog['uid'];?>&amp;is_uc=1&amp;handlekey=favoritebloghk_<?php echo $blog['blogid'];?>" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" >
<?php } else { ?>
<a href="member.php?mod=logging&amp;action=login">
<?php } ?>										
�ղ�</a>
</li>									
<li class="op-list-item moreli" style="z-index:101;">
<?php if($_G['uid'] == $blog['uid'] || checkperm('manageblog')) { ?>
<a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?>&amp;op=edit" class="drop-list">
<span class="adjust">�༭</span>
<span class="mod-arr"></span>
</a>	
<?php } else { ?>
<a class="drop-list" href="javascript:void(0);">
<span class="adjust">����</span>
<span class="mod-arr"></span>
</a>
<?php } ?>											
<div class="op-more op-drop op-extend" style="display:none;">
<ul>
<?php if($_G['uid'] == $blog['uid'] || checkperm('manageblog')) { ?>
<li>
<a class="drop-list" href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?>&amp;op=edit">�༭</a>
</li>
<li>
<a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?>&amp;op=delete&amp;handlekey=delbloghk_<?php echo $blog['blogid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);" id="blog_delete_<?php echo $blog['blogid'];?>">ɾ��</a>
</li>	
<?php } if($_G['uid'] != $blog['uid']) { ?>
<li>														
<?php if($_G['uid']) { ?>
<a href="javascript:;" onclick="showWindow('miscreport<?php echo $blog['blogid'];?>', 'misc.php?mod=report&rtype=blog&rid=<?php echo $blog['blogid'];?>&is_uc=1', 'get', -1);return false;">
<?php } else { ?>
<a href="member.php?mod=logging&amp;action=login">
<?php } ?>		
�ٱ�</a>
</li>										
<?php } if(checkperm('manageblog')) { ?>
<li class="op-list-item">
<a href="home.php?mod=spacecp&amp;ac=blog&amp;blogid=<?php echo $blog['blogid'];?>&amp;op=edithot&amp;handlekey=bloghothk_<?php echo $blog['blogid'];?>" id="blog_hot_<?php echo $blog['blogid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">�ȶ�</a>
</li>
<?php } ?>	
<?php if(!$blog['friend'] && !$blog['pushedaid'] && ($_G['group']['allowauthorizedarticle'] || $_G['group']['allowmanagearticle'])) { ?>
<li>
<a href="portal.php?mod=portalcp&amp;ac=index&amp;op=push&amp;idtype=blogid&amp;id=<?php echo $blog['blogid'];?>" onclick="showWindow('push', this.href, 'get', 0)">��������</a>
</li>
<?php } ?>
</ul>
</div>
</li>										
</ul>
</div>
</div>							
<!--���²��� end-->
</div>
</div>
</div>
</div>
</div>
<div style="height:0;line-height:0;font-size:0;clear:both;"></div>
<!--�����б�-->
<div class="comment-list-container mod-wrap" id="comment">
<div class="blog-comment">			
<span id="comment_blog" style="display:none;"></span>
<ul id="comment_ul">
<?php if($list) { if(is_array($list)) foreach($list as $k => $value) { ?><li class="list-comment-item" id="comment_<?php echo $value['cid'];?>_li"><?php include template('home/space_comment_li'); ?></li>	
<?php } ?>				
<?php } ?>
</ul>			
</div>			
</div>
<?php if($multi) { ?>
<div style="height:0;line-height:0;font-size:0;clear:both;"></div>
<div class="cust-page-list"><?php echo $multi;?></div>
<?php } ?>
<!--�����б� end-->
<div style="height:0;line-height:0;font-size:0;clear:both;"></div>
<!--��������-->
<?php if($_G['uid']) { ?>
<form id="quickcommentform_<?php echo $id;?>" action="home.php?mod=spacecp&amp;ac=comment&amp;is_uc=1" method="post" autocomplete="off">
<div class="post-comment-container">
<div class="post-cont">
<div class="author">
<p class="avatar">
<a href="javascript:void(0);"><?php echo avatar($_G['uid'],middle); ?></a>
</p>
</div>	
<div class="post" style="height:246px;">
<div class="post-wrap">
<div class="textinput">
<textarea name="message" id="comment_message" cols="30" rows="5"></textarea>
</div>
<style type="text/css">
.code-wrap{
font-size: 12px;
float: left;
position: relative;
}
.code-wrap .que{
display: block;
float: left;
font-size: 12px!important;
}
.code-wrap [id^="checksec"]{
width: 0;
height: 0;
padding: 0!important;
margin: 0;
}
.code-wrap input{
padding: 3px 5px;
height: 18px;
margin-left: 5px;
border: 1px solid #d6d6d6;
}
.code-wrap .que{
margin-right: 10px;
}
.code-wrap span{
display: inline-block!important;
*display: inline!important;
*zoom: 1!important;
}
.code-wrap .mbm, .code-wrap .mtm{
margin: 0!important;
}
</style>
<?php if(checkperm('seccode') && ($secqaacheck || $seccodecheck)) { ?>
<div class="code-wrap"><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" class="que" onclick="showMenu(this.id);"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt yzm" style="display:none;"><sec></div>
EOF;
?>
<div class="mtm mbm sec"><?php $sechash = 'S'.random(4);
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');
$sectpldefault = $sectpl;
$sectplqaa = str_replace('<hash>', 'qaa'.$sechash, $sectpldefault);
$sectplqaa = str_replace('<classname>', 'tw', $sectplqaa);
$sectplcode = str_replace('<hash>', 'code'.$sechash, $sectpldefault);
$sectplcode = str_replace('<classname>', 'yzm', $sectplcode);
$secshow = !isset($secshow) ? 1 : $secshow;
$sectabindex = !isset($sectabindex) ? 1 : $sectabindex; ?><?php
$seccheckhtml = <<<EOF

<input name="sechash" type="hidden" value="{$sechash}" />

EOF;
 if($sectpl) { if($secqaacheck) { 
$seccheckhtml .= <<<EOF

<script src="http://api.geetest.com/get.php?gt=273df89437f54dac2bfb5b69afe1c318&r={$sechash}" type="text/javascript"></script>

EOF;
 } if($seccodecheck) { 
$seccheckhtml .= <<<EOF

{$sectplcode['0']}{$sectplcode['1']}<em>��֤��</em><input name="seccodeverify" id="seccodeverify_{$sechash}" type="text" autocomplete="off" style="width:100px" onblur="checksec('code', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updateseccode('{$sechash}');doane(event);" class="xi2">��һ��</a>
<span id="checkseccodeverify_{$sechash}"><img src="http://static.8264.com/static/image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplcode['2']}<span id="seccode_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updateseccode('{$sechash}', undefined, '�����һ����������֤��');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplcode['3']}

EOF;
 } } 
$seccheckhtml .= <<<EOF


EOF;
?><?php unset($secshow); if(empty($secreturn)) { ?><?php echo $seccheckhtml;?><?php } ?>
</div>
</div>							
<?php } ?>
<span class="num-count"><b class="num-hint" id="num_word">0</b>/500</span>
<div style="height:0;line-height:0;font-size:0;clear:both;"></div>
<a href="javascript:void(0);" class="btn-inner-reply" style="margin-top:20px;" onclick="subComment()">�ظ�</a>
</div>
</div>
</div>
</div>	
<input type="hidden" name="referer" value="home.php?mod=space&amp;uid=<?php echo $blog['uid'];?>&amp;do=<?php echo $do;?>&amp;id=<?php echo $id;?>" />
<input type="hidden" name="id" value="<?php echo $id;?>" />
<input type="hidden" name="idtype" value="blogid" />
<input type="hidden" name="handlekey" value="qcblog_<?php echo $id;?>" />
<input type="hidden" name="commentsubmit" value="true" />
<input type="hidden" name="quickcomment" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<span id="return_qcblog_<?php echo $id;?>" style="display:none;"></span>
</form>
<script type="text/javascript">
function succeedhandle_qcblog_<?php echo $id;?>(url, msg, values) {
if(values['cid']) {
comment_add(values['cid']);
var msg = jQuery('#return_qcblog_<?php echo $id;?>').html();
showDialog(msg, 'notice');
} else {
showDialog(msg);
}
}
function errorhandle_qcblog_<?php echo $id;?>(str) {
showDialog(str);
}
function subComment() {
ajaxpost('quickcommentform_<?php echo $id;?>', 'return_qcblog_<?php echo $id;?>');doane(event);
}
jQuery(function(){
jQuery("#comment_message").keyup(function(event){
var num = jQuery(this).val().length;
jQuery("#num_word").html(num);
});
});
</script>
<?php } else { ?>
<div class="post-comment-container" style="padding-left:0;">
<div class="post-cont">					
<div class="post" <?php if(!$_G['uid']) { ?>style="width:980px;"<?php } ?>>
<div class="post-wrap">
<div class="textinput" style="height:100px;line-height:100px;text-align:center;">
����Ҫ��¼��ſ������� <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">��¼</a> | <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" onclick="showWindow('register', this.href)" class="xi2"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
</div>
</div>
</div>
</div>
<?php } ?>				
<!--�������� end-->
</div>
</div>
<script type="text/javascript">
window._bd_share_config = {
common : {
//�˴�����ͨ������
},
share : [
//�˴����÷�����ť����
{"tag" : "share_1", "bdSize" : 32}
]
}
with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
jQuery(function(){
//����������������ߵ���������ť
jQuery(".shareBtn").hover(
function () {
jQuery(".share-wrap-cust",this).show();
},
function () {
jQuery(".share-wrap-cust",this).hide();
}
);
var bdindex = 0;
bdcnt = setInterval(function(){
var tempCnt = parseInt(jQuery('.bds_count').html(), 10);
if (tempCnt >= 0) {
jQuery('.shareCount').html(tempCnt);
clearInterval(bdcnt);
}
},500);	

//ͼƬ���غ����¿���			
jQuery('#blog_article img').addClass('dealimg');	
img_handle = setInterval(dealPicWidth,10);

//������ͬ��
setInterval(function(){
jQuery('.comment_replynum').html(jQuery('#comment_replynum').html());
},1000);	

//��λ�������б�    
    jQuery(".btncomment").click(function(){
var top = jQuery('.headerNav').height() + jQuery('#header').height() + jQuery('.module').height() + jQuery('.blog-content-container').height() + 20 + 45;
        jQuery('body,html').animate({scrollTop:top},300);
        return false;
    });
    
    //�༭��ť--����|�༭
    jQuery(".moreli").hover(
function () {
jQuery(this).find('.op-more').show();
},
function () {	
var obj = jQuery(this);	
obj.find('.op-more').hide();
}
);	
// jQuery(".moreli").css({'padding-bottom':'20px'});
});
</script>	
<script type="text/javascript">

//ͼƬ���غ����¿���
function dealPicWidth() {			
if (jQuery('.dealimg').length == 0) {
clearInterval(img_handle);
return false;
}												
 	jQuery('.dealimg').each(function(){
 		var tempObj 	= jQuery(this);
 		var tempWidth   = tempObj.width();
 		var tempHeight  = tempObj.height();
 		if (tempWidth > 100) {
 			if (tempWidth > 920) {
 				tempObj.attr('width', 920);
 			}
tempObj.removeClass('dealimg');
tempObj.show();
 		}
 	});
}

function succeedhandle_click_blogid_<?php echo $blog['blogid'];?>_3(url, msg, values) {
if (values['id']) {
var clicknum = parseInt(jQuery('#clicknum').html(), 10) + 1;
jQuery('.clicknum').html(clicknum);
}
}

jQuery(function(){
if (jQuery('.yzm').length > 0) {
setInterval(function(){
jQuery('.yzm').eq(0).css({'left':'53px'});
jQuery('.yzm').eq(1).css({'left':'256px'});
},10);	
}	
});
</script>
<!--main-content end-->	
</div>	
<!--content end-->
</div>

<!--��������--><?php require_once libfile('class/simpleupload'); ?><?php $flashstring = simpleUpload::getFlashStr("uploadpic", 72, 28, "/home.php?mod=misc&amp;ac=simpleupload&amp;uc_cover=1", 'flashcallback', '', "$_G[siteroot]static/images/icon/uploadcover.png"); ?><?php echo $flashstring;?>
<script>
function flashcallback(type, data){
eval("var objbtn = " + data);
//	window.console.log(type);
switch(type){
case -1:
showDialog_uc('�ϴ�ʧ��');
break;
case 1:			
hideWindow('dialog');
jQuery('.header-bg').css({'background-image':"url('"+objbtn.picurl+"')"});
jQuery('.p-profile').css({'background-image':"url('"+objbtn.picurl+"')"});
break;
case 2:
case 3:
showDialog('', 'info', '<img src="' + IMGDIR + '/loading.gif"> ���Ժ�...');
break;
}
}
</script>
<script type="text/javascript">
jQuery(function(){
var ua    = navigator.userAgent.toLowerCase();
var isIE6 = ua.indexOf('msie 6.0') > -1;
if(!isIE6){
var wh = jQuery(window).height();
var ch = jQuery('.ic-page').height();
var calch = wh - 124 -ch;
if(ch < (wh-124)){
jQuery('.ic-page').css("margin-bottom", calch);
}
}
});
</script><style>
.clear_b:after{content: ""; display: block; clear: both; visibility: hidden;}
.clear_b{ zoom: 1;}
.h13_ewm{ height:13px;}
.ewmbox{ width:160px; position: fixed !important; top: 215px; position: absolute; z-index: 10; float:right; color:#585858; }
.close_ewm{ width:11px; height:11px; background:url(http://static.8264.com/static/images/common/ewmclose.jpg) left top no-repeat; float:right; margin-bottom:2px; display:none;}
.close_ewm:hover{  background:url(http://static.8264.com/static/images/common/ewmclose_hover.jpg) left top no-repeat;}


</style>
<div class="ewmbox" style="display:none;">
<div class="clear_b h13_ewm"><a href="javascript:void(0)" class="close_ewm"></a></div><?php echo adshow("custom_468"); ?></div>
<script type="text/javascript">

//jQuery(function(){	
//	var isiOS 	  = navigator.userAgent.match('iPad') || navigator.userAgent.match('iPhone') || navigator.userAgent.match('iPod');
//    var isAndroid = navigator.userAgent.match('Android');
//    if (!isiOS && !isAndroid) {
//    	jQuery(".ewmbox").show();    	
//    	jQuery(".ewmbox").hover(
//			function () {
//			jQuery(".close_ewm",this).show();
//		  },
//		  function () {
//			jQuery(".close_ewm",this).hide();
//		  }
//		);
//		jQuery(".close_ewm").click(function(){
//			jQuery(".ewmbox").hide();
//		});   	
//    }
//	var ww = jQuery(window).width();   
//	var r_z = (ww-980)/2 -180;
//	if(r_z<0){
//		jQuery(".ewmbox").css("left",'0px');
//	}else{
//		jQuery(".ewmbox").css("left",r_z);
//	};
//	if(ww>1350){
//		jQuery(".ewmbox").show();
//	}else{
//		jQuery(".ewmbox").hide();
//	}	
//});

</script>
<style>
.bbsfoothotlist{ background: #1a2b38; color: #ffffff; padding-bottom:45px;}
.topHill{  background:url(http://static.8264.com/static/image/common/bg_fourm_sprite.png) no-repeat 0 0; height: 16px;left: 0; position: relative; text-indent: -9999px; top: -16px; width: 175px}
</style>

<div class="bbsfoothotlist">
<div class="layout-page">
<div class="topHill">����Сɽ</div>
</div>
<div class="choiceness"><?php block_display('6905'); ?></div>
</div>



</div>
<!-- �������� -->
<style>
.friendLink{ background: #0f1f2b; padding: 15px 0 18px 0px;}
.friendLink a { color: #807f7f; display: inline; margin-right: 10px; white-space: nowrap; font-size:12px;}
.friendLink a:hover { color: #fff; text-decoration:none;}
</style>
<div class="friendLink">
<div class="layout w980">
<?php if(!empty($_G['setting']['pluginhooks']['global_friendlylink'])) echo $_G['setting']['pluginhooks']['global_friendlylink']; ?>
</div>
</div>
<div class="bottomNav">
<div class="layout" style="position:relative;">
<div class="copyright">
<p><a href="http://www.miitbeian.gov.cn/" target="_blank">��ICP��05004140��-10</a> ICP֤ ��B2-20110106&nbsp;&nbsp;&nbsp;�����һ�Ƽ����޹�˾��Ȩ����</p>
<p>�����з��գ�8264����������<a href="http://bx.8264.com/?8264com" target="_blank">���Ᵽ��</a></p>
</div>
<div class="someLink">
<a target="_blank" href="http://bbs.8264.com/member-clearcookies-formhash-d64f4f90.html" rel="nofollow">���COOKIE</a>
|
<?php if($_G['group']['allowstatdata']) { ?>
<a target="_blank" href="http://bbs.8264.com/misc-stat.html" rel="nofollow">վ��ͳ��</a> |
<?php } ?>
<a target="_blank" href="http://www.8264.com/about-contact.html" rel="nofollow">��ϵ����</a>
|
<a href="http://www.8264.com/about-contact.html#q4" rel="nofollow">8264��Ƹ</a>
|
<a href="http://bbs.8264.com/misc-faq.html" rel="nofollow">����</a>
<span class="app">
<a href="http://bbs.8264.com/thread-2317569-1-1.html" target="_blank" class="appIco_95x27" rel="nofollow"></a>
</span>
</div>


        <?php if($_GET['mod'] =='index') { ?>
        <style>
.qdcionbottom{ position:absolute; left:509px; top:0px;}
.qdcionbottom img{ width:49px; height:44px;}
        </style>
        <a href='http://na3.tjaic.gov.cn/netmonitor/query/ScrNetEntQuery/Display.do?show=1&id=6eb59bd37f0000011ec3c0e5a59f7891-1-v-e-r-&ztLOID=8b4b03e47f0000012b8f0a26c9a87e67' class="qdcionbottom" target="_blank"><img src="http://static.8264.com/static/images/moban/indexnew/images/guohui.png" /></a>
        <?php } ?>



</div>
</div>
<?php if($nobottomad !== false) { ?>
<!-- ҳ��ײ��������ű� -->
<script src="http://static.8264.com/static/js/jquery.cookie.js" type="text/javascript" type="text/javascript"></script>
<style>
  .newswarpten{ position:absolute; position:fixed!important; bottom:0px; display:none; left:50%;z-index: 999}
  .newstopone{ height:46px;  font-size:14px; background: url(http://static.8264.com/static/image/common/kxbg.png) 0px -1px no-repeat #fffff6; border:#e0d3be solid 1px;  float:left; border-right:0 none;}
  .newstopone .linktitle_4587{ float:left; margin:12px 0px 0px 70px; display:inline;}
  .newstopone .linktitle_4587 a{ font-size:16px; color:#064361; text-decoration:none;}
  .newstopone .linktitle_4587 a:hover{ font-size:16px; color:#ff7e00; text-decoration:none;}
  .newstopone .close16_16{ width:16px; height:16px; float:right; cursor:pointer; background:url(http://static.8264.com/static/image/common/kxbgarrowclose.png) -47px -1px no-repeat; margin:16px 0px 0px 10px; display:inline;}
  .newstopone .close16_16:hover{background:url(http://static.8264.com/static/image/common/kxbgarrowclose.png) -1px -1px no-repeat;}
  .newsarrow{ width:18px; height:48px; background:url(http://static.8264.com/static/image/common/kxbgarrow.png) left top no-repeat; float:right;}
</style>
<body>
<div class="newswarpten">
  <div class="newstopone">
    <div style="display: inline-block;padding-left: 70px;height: 46px;line-height: 46px;"><?php echo adshow("custom_294"); ?></div>
    <span class="close16_16"></span>
  </div>
  <div class="newsarrow"></div>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){
  var tiao = jQuery(".newswarpten").width();
  jQuery(".newswarpten").css( 'margin-left' , -tiao/2 );
  var t_time = Date.parse(new Date());
  var cookietime = jQuery.cookie('showboxtime');
  if(!cookietime){
    jQuery(".newswarpten").show();
  };
  if(t_time >= cookietime){
     jQuery(".newswarpten").show();
  };
  jQuery('.close16_16,.linktitle_4587 a').click(function(){
    var t_time = Date.parse(new Date());
    jQuery.cookie('showboxtime',t_time+3600*24*1000,{expires:30,domain:'8264.com',path:'/'});
    jQuery(".newswarpten").hide();
  });
});
</script>
<!-- //ҳ��ײ��������ű� -->
<?php } if($upgradecredit !== false) { ?><div id="g_upmine_menu" class="g_up" style="display:none;">
    <div class="crly">
        ���� <?php echo $_G['member']['credits'];?>, ������һ������ <?php echo $upgradecredit;?> ����
    </div>
    <div class="mncr"></div>
    </div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer']; if(!$_G['setting']['bbclosed']) { ?> <?php if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes' && ($_G['mod'] == 'topic' || $_G['group']['allowdiy']) && (empty($do) || $do != 'index') && !empty($_G['style']['tplfile'])) { ?>
<script src="http://static.8264.com/static/js/common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="http://static.8264.com/static/js/portal_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && $space['self'] && $_G['mod'] == 'space' && $do == 'index') { ?>
    <script src="http://static.8264.com/static/js/common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
    <script src="http://static.8264.com/static/js/space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F49299785f8cc72bacc96c9a5109227da' type='text/javascript'%3E%3C/script%3E"));
</script>
<!-- �����Զ����� -->
<script type="text/javascript">
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<!-- //�����Զ����� -->
<?php if(($_G['mod'] == 'viewthread' || $_GET['act'] == 'showview' || $_GET['act'] == 'commentdetail' || $_G['mod'] == 'view' || $_GET['ctl'] == 'topic')) { ?>
<script type="text/javascript">
var _gaq = _gaq || [];
<?php if($_G['mod'] == 'view') { ?>
_gaq.push(['tid', '<?php echo $_GET['aid'];?>']);
_gaq.push(['type', '3']);
<?php } elseif($_GET['ctl'] == 'topic') { ?><?php $_G['tid'] = $topic['topicid'] ? $topic['topicid'] : 1; ?>_gaq.push(['tid', '<?php echo $_G['tid'];?>']);
_gaq.push(['type', '6']);
<?php } else { ?>
_gaq.push(['fid', '<?php echo $_G['fid'];?>']);
_gaq.push(['tid', '<?php echo $_G['tid'];?>']);
<?php } if($_G['mod'] == 'viewthread') { ?>
_gaq.push(['type', '1']);
<?php } elseif($_GET['act'] == 'showview') { ?>
_gaq.push(['type', '2']);
<?php } elseif($_GET['act'] == 'commentdetail') { ?>
_gaq.push(['pid', '<?php echo $pid;?>']);
_gaq.push(['type', '4']);
<?php } ?>

(function(d, t) {
var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
g.type = 'text/javascript'; g.async = true;
g.src = 'http://static.8264.com/static/js/ga.js?<?php echo VERHASH;?>';
s.parentNode.insertBefore(g, s);
})(document, 'script');
</script>
<?php } ?>
</body>
</html><?php output(); ?>