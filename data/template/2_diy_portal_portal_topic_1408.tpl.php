<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��������ƻ�&mdash;&mdash;�ﳵȥ�׶ؿ�����</title>
<link rel="stylesheet" type="text/css" href="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/style/style1.css"/>
<link href="2012-06-05jixin/style/style1.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">
var myFocus={
//Design By Koen @ 2010.7.x
//http://hi.baidu.com/koen_li
//koen_lee@qq.com
$:function(id){return document.getElementById(id);},
$$:function(tag,obj){return (typeof obj=='object'?obj:this.$(obj)).getElementsByTagName(tag);},
linear:function(t,b,c,d){return c*t/d + b;},
easeIn:function(t,b,c,d){return c*(t/=d)*t*t*t + b;},
easeOut:function(t,b,c,d){return -c*((t=t/d-1)*t*t*t - 1) + b;},
opa:function(obj,v){
if(v!=undefined) {v=v>100?100:(v<0?0:v); obj.style.filter = "alpha(opacity=" + v + ")"; obj.style.opacity = (v / 100);}
else return (document.all)?((obj.filters.alpha)?obj.filters.alpha.opacity:100):((obj.style.opacity)?obj.style.opacity*100:100);
},
move:function(obj,dir,val,type,spd,fn){
var t=0,b=parseInt(obj.style[dir])||0,c=val-b,d=spd||50,st=type||'linear',m=c>0?'ceil':'floor';
if(obj[dir+'timer']) clearInterval(obj[dir+'timer']);
obj[dir+'timer']=setInterval(function(){
if(t<d){obj.style[dir]=Math[m](myFocus[st](t++,b,c,d))+'px';}
else {clearInterval(obj[dir+'timer']);fn&&fn.call(myFocus);}
},10);return this;
},
fade:function(obj,type,spd,fn){
var o=this.opa(obj),m=spd||5;
if(o==0) obj.style.display='';
if(type=='out') m=-m;
if(obj.fadeTimer) clearInterval(obj.fadeTimer);
obj.fadeTimer=setInterval(function(){
o+=m;myFocus.opa(obj,o);
if(o<=0) obj.style.display='none';
if(o>=100||o<=0){clearInterval(obj.fadeTimer);fn&&fn.call(myFocus);}
},10);return this;
},
addList:function(obj,cla,arr){
var s=[],n=this.$$('li',this.$$('ul',obj)[0]).length,num=cla.length;
for(var j=0;j<num;j++){
s.push('<ul class='+cla[j]+'>');
for(var i=0;i<n;i++){s.push('<li>'+(cla[j]=='num'?(i+1):(cla[j]=='txt'?this.$$('li',obj)[i].innerHTML.replace(/\<img.*?\>/i,this.$$('img',obj)[i].alt):''))+'<span></span></li>')};
s.push('</ul>');
}; obj.innerHTML+=s.join('');
},
setting:function(par){//����DOM/�ĵ����ؾ�����ִ�е�����
if(window.attachEvent){window.attachEvent('onload',function(){myFocus[par.style](par)});}
����		else{window.addEventListener('load',function(){myFocus[par.style](par)},false);}
},
mF_expo2010:function(par){
var box=this.$(par.id),t=par.time*1000;
this.addList(box,['txt-bg','txt','num-bg','num']);
var pic=this.$$('ul',box)[0],txt=this.$$('ul',box)[2],num=this.$$('ul',box)[4],img=this.$$('li',pic),tip=this.$$('li',txt);
var H=tip[0].clientHeight+60;
var n=img.length;
var index=0;
for(var i=0;i<img.length;i++){this.opa(img[i],0); img[i].style.display='none'; tip[i].style.bottom=-H+'px'}
box.removeChild(this.$$('div',box)[0]);
this.fade(img[index],'in');
this.move(tip[index],'bottom',0,'easeOut',40)
this.$$('li',num)[index].className='current';
var run=function(idx){
myFocus.fade(img[index],'out');
myFocus.move(tip[index],'bottom',-H,'easeIn',10);
myFocus.$$('li',num)[index].className='';
if(index==n-1) index=-1;
var N=idx!=undefined?idx:index+1;
myFocus.fade(img[N],'in');
myFocus.move(tip[N],'bottom',0,'easeOut',40);
myFocus.$$('li',num)[N].className='current';
index=N;
}
var auto=setInterval(function(){run()},t);
for (var j=0;j<n;j++){
this.$$('li',num)[j].j=j;
this.$$('li',num)[j].onclick=function(){run(this.j)}
this.$$('li',num)[j].onmouseover=function(){if(!this.className) this.className = 'hover';}
this.$$('li',num)[j].onmouseout=function(){if(this.className=='hover') this.className ='';}
}
box.onmouseover=function(){clearInterval(auto);}
    	box.onmouseout=function(){auto=setInterval(function(){run()},t);}
}
}
myFocus.setting({style:'mF_expo2010',id:'myFocus',time:2});//styleΪ�����ʽ��idΪ����ͼID��timeΪÿ֡���ʱ��(��) 
</script>
<body>
<div class="banner0">
            <a href="http://www.qitianxia.com/portal.php" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/qitianxia.jpg" /></a>
            </div>
    <div class="banner">
            <a href="http://www.shehe.com.cn/zhanti1.aspx?s_id=94" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/jix.png" /></a>
            <a href="http://www.8264.com/" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/8264.png" /></a>
            <div class="clear"></div> 

        </div>
        
    <div class="wai">
    
        <div class="min980">
            <div class="min1">
            	<div class="min1l">
                	<div class="lunbo">
                          <div id="focus_turn">
                              <ul id="focus_pic">
                                  <li class="current1"><a href="http://bbs.8264.com/thread-1289750-1-2.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/t61.jpg" /></a></li>
                                  <li class="current"><a href="http://bbs.8264.com/forum-redirect-goto-findpost-ptid-1289750-pid-20382057.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/t11.jpg" /></a></li>
                                  <li class="normal"><a href="http://bbs.8264.com/forum-redirect-goto-findpost-ptid-1289750-pid-20302908.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/t21.jpg" /></a></li>
                                  <li class="normal1"><a href="http://bbs.8264.com/forum-redirect-goto-findpost-ptid-1289750-pid-20266726.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/t31.jpg" /></a></li>                                 
                                  <li class="normal3"><a href="http://bbs.8264.com/forum-redirect-goto-findpost-ptid-1289750-pid-20230156.html " target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/t51.jpg" /></a></li>                              

                              </ul>
                        <div id="focus_opacity"></div>
                              <ul id="focus_tx">
                              <li class="current1"><a href="#" target="_blank"></a></li>
                              <li class="current"><a href="#" target="_blank"></a></li>
                              <li class="normal"><a href="#" target="_blank"></a></li>
                              <li class="normal1"><a href="#" target="_blank"></a></li>
                              <li class="normal3"><a href="#" target="_blank"></a></li>
                              

                              </ul>
                        </div>
            </div>
                	
                </div>
                <div class="min1r">
                	<h3>2012��������ƻ������ﳵȥ�׶ؿ�����</h3>
                    
                    <p>�̱������ˡ��������˺����ڴ���֮���������ٴ�Я�ּ�������ƻ��������������翪չ�����й�������ŷ�޻������ͨ��һȺ�й�������Я�ֱ������˻�棬ͨ��һ��ƽ���ķ�ʽȥ��������ƥ�ˡ���̼�������Ļ������Ⱦ������</p>
                    <ul>
                        <li>&#8226;&nbsp;<a href="http://bbs.8264.com/thread-1289750-1-2.html" target="_blank"><span style="color:#00559a">��Shehe����ƻ���</span><span style="color:#F00">�������֣�׷�����룬�ﳵȥ�׶ؿ�����!</span></a></li>
                        <li>&#8226;&nbsp;<a href="http://www.8264.com/viewnews-78477-page-1.html" target="_blank"><span style="color:#00559a">��Shehe����ƻ���</span>&nbsp;<span style="color:#F00">new!</span>&nbsp;�ﳵȥ�׶ؿ����˰˴�ع�</a></li>
                    <li>&#8226;&nbsp;<a href="http://u.8264.com/home-space-uid-6111-do-blog-id-406898.html" target="_blank" ><span style="color:#00559a">��Shehe����ƻ���</span>�ﳵȥ�׶ؿ����ˡ����߽��׶� ��������</a></li>
                        <li>&#8226;&nbsp;<a href="http://www.8264.com/viewnews-77921-page-1.html" target="_blank" ><span style="color:#00559a">��Shehe����ƻ���</span>�ﳵȥ�׶ؿ����� ��Խ���޵ִ�ŷ�޵�һ��</a></li>
                        <li>&#8226;&nbsp;<a href="http://www.8264.com/portal.php?mod=view&amp;aid=77894" target="_blank" ><span style="color:#00559a">��Shehe����ƻ���</span>���������г���ż�����껷�����г���</a></li>
                    	<li>&#8226;&nbsp;<a href="http://www.8264.com/portal.php?mod=view&amp;aid=77727" target="_blank" ><span style="color:#00559a">��Shehe����ƻ���</span>�����³��ӵִ�ŷ�޵�һվ��������</a></li>

                  </ul>
                    <h4><a href="#message">���࡭</a>&nbsp;&nbsp;</h4>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="nav"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/nav1.jpg" /></div>
            <div class="min2">
            	<div class="min2_1">
                	<div id="myFocus" class="mF_expo2010">
                       <div class="loading"><span></span></div>
                        <!--���뻭��-->
                        	<ul class="pic">
                        		<!--�����б�-->
                        		<li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=76739" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/pic1.jpg" /></a></li>
                        		     <!--alt������Ϊ����-->
                        		<li> <a href="http://www.8264.com/portal.php?mod=view&amp;aid=76744"target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/pic0.jpg"/></a></li>

                      		</ul>
                </div>
                </div>
                <div class="min2_2">
                	<h3>2012��������ƻ��������������а���

 </h3>
                    <p>
�ڴ˴�����ƻ��Ĺ��ڲ��֣����н��ٳ�֪����ѧ�ݽ���ͬ�ǵ�̼���еȴ��͹��ػ��չ�����ǵ����ж��齫���ռ��д����Ե��黭���մɺ͹���Ʒ������;�߷ý�Ҫ�����׶ذ��˵��й���ش����ӡ�
</p>
                    <p>��ŷ�ޣ����ж��齫�����ռ����黭���մɺ͹���Ʒ���͸���;���ҵ��Ļ���֯������ѧԺ��������֯�ȣ�ͬʱ���Ὺչ��ʮ�����͵��ݽ������л��������;���Ҵ�ѧ��һ�����е��׶أ����߷ý�Ҫ�����׶ذ��˵Ĺ�����ش����ӡ�</p>
                </div>
                <div class="min2_3">
                	<ul>
                    	<li><a href="http://www.8264.com/viewnews-76736-page-1.html" target="_blank">�� ���ڼ�������ƻ��������� </a></li>
                        <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=76740" target="_blank">�� 2011 ��̼���˻���й��� </a></li>
                        <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=76742" target="_blank">�� 2010 ������ ������ </a></li>
                        <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=76743" target="_blank">�� 2008 ��ϵ���� �Ķ����� </a></li>
                        <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=76744" target="_blank">�� 2004-2007 ���г����й������� </a></li>
                
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="nav"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/nav21.jpg" border="0" usemap="#Map" />
              <map name="Map" id="Map">
                <area shape="rect" coords="890,9,971,29" href="http://www.8264.com/portal.php?mod=view&amp;aid=76749" target="_blank" />
              </map>
</div>
            
            <div class="min3">
            	<div class="min3_1">
                	<div class="pic_box"><a href="http://bbs.8264.com/thread-1289750-1-2.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/pic-.jpg" /></a></div>
                    <div class="pic_jies">
                    	<h3>������</h3>
                        <p>������Ԫ��֮һ���ﳵȥ�׶ؿ�����ŷ�޶ζӳ���</p>
                        <p>08�굥�ﾩ�����˺ӣ�09�ꡢ10��ȫ�̲μ��Ŷ�����־Ը��ʹ���ڶ����Ǻ��й������л��</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="min3_1">
                	<div class="pic_box"><a href="http://bbs.8264.com/thread-1289750-1-2.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/pic2-.jpg" /></a></div>
                  <div class="pic_jies">
                    	<h3>����÷</h3>
                    <p>�ӳ����������Ǿ���è���º��д���Ϭ�����͵�����Ӳ��</p>
                      <p>����м����Ӣ����ֻ����è��Ů�ӣ����ɾ���õ��Լ���</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="min3_1">
                	<div class="pic_box"><a href="http://www.qitianxia.com/thread-1385-1-1.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/pic3-.jpg" /></a></div>
                    <div class="pic_jies">
                    	<h3>�ƻ���</h3>
                       <p>���ָ��׫д��63����������й����ϵ�����Խ��������������ɫ������</p>
                        <p>05�괩Խ�½����̲��06�곩�����ɴ��ԭ��07���ź���;����ߡ�</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="min3_1">
                	<div class="pic_box"><a href="http://bbs.8264.com/thread-1289750-1-2.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/pic4-.jpg" /></a></div>
                    <div class="pic_jies">
                    	<h3>�ź�</h3>
                        <p>�������Լ��Ļ��ʦ�����������롶ON THE WAY�������鲻һ����������</p>  
                        <p>һֱδ������������������輶���֣������������ʡ�</p>                        
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="min3_1">
                	<div class="pic_box"><a href="http://bbs.8264.com/thread-1289750-1-2.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/pic5-.jpg" /></a></div>
                    <div class="pic_jies">
                    	<h3>������</h3>
                        <p>�˳�"����"�����ﳵȥ�׶ؿ����˶�����������Ķ�Ա��</p>
                        <p>��������·������ʲô���裬һֱ���ֹ۵���̬ȥ��ԣ��������ݡ�</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="min3_1">
                	<div class="pic_box"><a href="http://bbs.8264.com/thread-1289750-1-2.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/pic6-.jpg" /></a></div>
                    <div class="pic_jies">
                    	<h3>����</h3>
                        <p>��Ӱʦ���˳�"����"��06��μ�"�ൺơ�ƣ����ǹھ�"ȫ���ٴ���ս��������������ͽ��31Сʱ128���9��ͽ���Ĺ���ɽ��11�괩Խ��ϼɽ��</p>
                        
                  </div>
                    <div class="clear"></div>
                </div>
                <div class="min3_1">
                	<div class="pic_box"><a href="http://bbs.8264.com/thread-1253317-1-1.html " target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/pic7.jpg" /></a></div>
                    <div class="pic_jies">
                    	<h3>�ܲ���</h3>
                        <p>���ϴ�ѧ12���о�����ҵ��09��Ӵ����г����Σ�10��1�»����ϵ����У�10��7-8�����е���ߣ�12�����޷��˷���ǩԼ�������뻷������֮�á�</p>
                        
                  </div>
                    <div class="clear"></div>
                </div>
                <div class="min3_1">
                	<div class="pic_box"><a href="http://bbs.8264.com/thread-1289750-1-2.html" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/pic8.jpg" /></a></div>
                    <div class="pic_jies">
                    	<h3>����</h3>
                        <p>"���ӳ�"��������ڱ��ϼ�ά�ޡ�֣Ԩ�������ɳ�·;�ϵľ���ʦ�������ɼ�����������������롣�˶���̽�ա������������У��Ķ������������ֳ������ҡ�</p>
</div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="nav"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/nav31.jpg" border="0" usemap="#Map2" />
              <map name="Map2" id="Map2">
                <area shape="rect" coords="892,10,967,27" href="http://u.8264.com/home-space-uid-6111-do-album-id-162331.html" target="_blank" />
              </map>
</div>
            <a name="message" id="message"></a>
<div class="min4">
<div class="min4_1">
                	<div class="pic_box1">
                    	<a href="http://u.8264.com/home-space-uid-6111-do-album-picid-4320585.html#pic_block" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/tuwen11.jpg" /></a>
                        <p><a>����������·����Ů</a></p>
                    </div>
                    
                </div>
                <div class="min4_1">
                	<div class="pic_box1">
                    	<a href="http://u.8264.com/home-space-uid-6111-do-album-picid-4320588.html#pic_block" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/tuwen21.jpg" /></a>
                        <p><a>��������-������ ·��</a></p>
                    </div>
                    
                </div>
                <div class="min4_1">
                	<div class="pic_box1">
                    	<a href="http://u.8264.com/home-space-uid-6111-do-album-picid-4320590.html#pic_block" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/tuwen31.jpg" /></a>
                        <p><a>������FERRARA����Ӫ</a></p>
                    </div>
                    
                </div>
                <div class="min4_1">
                	<div class="pic_box1">
                    	<a href="http://u.8264.com/home-space-uid-6111-do-album-picid-4320591.html#pic_block" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/tuwen41.jpg" /></a>
                        <p><a>�������ߡ��������֣��趯����</a></p>
                    </div>
                    
                </div>
                <div class="min4_1">
                	<div class="pic_box1">
                    	<a href="http://u.8264.com/home-space-uid-6111-do-album-picid-4320594.html#pic_block" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/tuwen51.jpg" /></a>
                        <p><a>����ά�ꡤ�Ƶ��ϰ�������һ��</a></p>
                    </div>
                    
                </div>
                <div class="min4_1">
                	<div class="pic_box1">
                    	<a href="http://u.8264.com/home-space-uid-6111-do-album-picid-4320597.html#pic_block" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/tuwen61.jpg" /></a>
                        <p><a>������������������</a></p>
                    </div>
                    
                </div>
                <div class="min4_1">
                	<div class="pic_box1">
                    	<a href="http://u.8264.com/home-space-uid-6111-do-album-picid-4320598.html#pic_block" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/tuwen71.jpg" /></a>
                        <p><a>������������������</a></p>
                    </div>
                    
                </div>
                <div class="min4_1">
                	<div class="pic_box1">
                    	<a href="http://u.8264.com/home-space-uid-6111-do-album-picid-4320600.html#pic_block" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/tuwen81.jpg" /></a>
                        <p><a>��������-�������ڷɰ���</a></p>
                    </div>
                    
                </div>
                <div class="min4_1">
                	<div class="pic_box1">
                    	<a href="http://u.8264.com/home-space-uid-6111-do-album-picid-4320602.html#pic_block" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/tuwen91.jpg" /></a>
                        <p><a>�����������������</a></p>
                    </div>
                    
                </div>
                <div class="min4_1">
                	<div class="pic_box1">
                    	<a href="http://u.8264.com/home-space-uid-6111-do-album-picid-4320603.html#pic_block" target="_blank"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/tuwen101.jpg" /></a>
                        <p><a>�ڷ����ۿ�������</a></p>
                    </div>
                    
                </div>
                <div class="clear"></div>
            </div>
            <div class="min4">
            <div class="zixunleft">
              <ul>
                  <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=77727" target="_blank">����������ƻ��������³��ӵִ�ŷ�޵�һվ��������</a></li>     
                  <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=77815" target="_blank">����������ƻ������11�������ﳵȥ�׶ؿ����� �̳��������黶ӭ</a></li>
                  <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=77825" target="_blank">����������ƻ���"�ﳵȥ�׶ؿ�����"��ѧ���߽��Ͼ������ί</a></li> 
                  <li><a href="http://www.8264.com/viewnews-76155-page-1.html" target="_blank">����������ƻ���"�ﳵȥ�׶ؿ�����"��������վ��ʽ����</a></li>
                  <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=77775" target="_blank">����������ƻ�������6Ѯ���̵��人 �����ﵽ�׶ؿ�����</a></li>
                  <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=77762" target="_blank">����������ƻ����ﳵȥ�׶ؿ����� �����ڳ�ɳ������</a></li>
                  <li><a href="http://www.8264.com/viewnews-76947-page-1.html" target="_blank">����������ƻ���������� �ﳵȥ�׶ؿ�����</a></li>
                  <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=77811" target="_blank">����������ƻ�������66���Ͻ���ս���� ���ﳵȥ�׶ؿ�����</a></li>
                  <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=77721" target="_blank">����������ƻ���2012�ﳵȥ�׶ؿ����� ������ʽ�����ŷ�����</a></li>
                     
              </ul>
            </div>
            <div class="zixunright">
              <ul>
                 <li><a href="http://u.8264.com/home-space-uid-6111-do-blog-id-405263.html" target="_blank">����������ƻ����ﳵȥ�׶ؿ����� ���뾽����Խһ��</a></li>
                 <li><a href="http://bbs.8264.com/thread-1253317-1-1.html" target="_blank">����������ƻ���80����Ů��,һ·"��"��ŷ��</a></li>
                 <li><a href="http://bbs.8264.com/thread-1233698-1-1.html" target="_blank">����������ƻ���ֱ��2012�������ﳵȥ�׶ؿ����ˡ�����ԭ��</a></li>
                 <li><a href="http://www.qitianxia.com/thread-1385-1-1.html" target="_blank">����������ƻ���63�갢��Ҳ������ȥ�׶�</a></li>
                 <li><a href="http://www.qitianxia.com/thread-1323-2-1.html" target="_blank">����������ƻ����������롢���У��û�����Ц�ݼ�������</a></li>
                 <li><a href="http://www.qitianxia.com/thread-1371-1-1.html" target="_blank">����������ƻ��������ҵĴ�ѧ����֮��ҵ����---10000km�������� </a></li>
                 <li><a href="http://www.8264.com/portal.php?mod=view&amp;aid=77894" target="_blank">����������ƻ������������г���ż�����껷�����г��� </a></li>
                 <li><a href="http://www.8264.com/viewnews-77921-page-1.html" target="_blank">����������ƻ����ﳵȥ�׶ؿ����� ��Խ���޵ִ�ŷ�޵�һ��</a></li>
                 <li><a href="http://u.8264.com/home-space-uid-6111-do-blog-id-406898.html" target="_blank">����������ƻ����ﳵȥ�׶ؿ����ˡ����߽��׶� ��������</a></li>
                 
              </ul>
            </div>
              <div class="clear"></div>
      </div>
            
            <div class="nav"><img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/nav4.jpg" />
                <div class="bltitle">
                    <ul class="sheqian2">
                    <li><a id="guon" href="#" target="_blank" class="active">����</a></li>
                    <li style="margin-left:10px;"><a id="guow" href="#" target="_blank">����</a></li>
                    </ul>
                    <div style="clear:both"></div>
                </div>      
            </div>
            
            <div class="min5">
            	<div class="sheqianbody">
                        <div class="neirong active" id="sq-guon">
<img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/ditu1.jpg" />
                        </div>
                    	<div class="neirong" id="sq-guow">
                        	<img src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/images/ditu21.jpg" />
                        </div>
                    </div>
            </div>
            
            <div class="bottom">
<a href="http://www.8264.com/template/8264/about/aboutus.htm" target="_blank">8264���</a>
&nbsp;|&nbsp;
<a href="http://www.8264.com/template/8264/about/ggservice/index.html" target="_blank" >������</a>
&nbsp;|&nbsp;
<a href="http://www.8264.com/zhuanti" target="_blank">�����ȵ�</a>
&nbsp;|&nbsp;
<a href="http://www.8264.com/template/8264/about/aboutus.htm" target="_blank">��ϵ��ʽ</a>
&nbsp;|&nbsp;
<a href="http://bbs.8264.com/plugin.php?id=drc_qqgroup:main" target="_blank" >QQȺ����</a>
&nbsp;|&nbsp;
<a href="http://www.8264.com/link/" target="_blank">������ַ��ȫ</a>
<br>
�������ߣ�022-23708264&nbsp;|&nbsp;���棺022-23857291&nbsp;|&nbsp;��ַ������л�Է��ҵ԰����ï�Ƽ�԰C2��6��AB��Ԫ<br>
<a href="http://bx.8264.com" target="_blank">�����з��գ�8264����������</a>
<a href="http://bx.8264.com">���Ᵽ��</a>
<br>
���˽�ӡʲô�������� ������Ӱʲô�������ߣ���ӭ����ý��ת�����ǵ�ԭ����Ʒ[ת����ע������]��8264&nbsp;��Ȩ����
<a href="http://www.miibeian.gov.cn/" target="_blank">��ICP��05004140��-10</a>
&nbsp;&nbsp;&nbsp;
<a href="http://www.8264.com/template/8264/image/icp.jpg" target="_blank">ICP֤ ��B2-20110106</a>
</div>
        </div>
        
    </div>
    
</body>
</html>
<script src="http://static.8264.com/oldcms/moban/zt/2012-06-05jixin/js/common.js" type="text/javascript"></script>