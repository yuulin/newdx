<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="gbk">
<title>微信支付 - 8264户外运动学校</title>
<meta name="viewport" content="minimal-ui,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="MobileOptimized" content="width">
<meta name="description" content="">
<meta name="author" content="">
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

<link rel="stylesheet" href="http://static.8264.com/static/css/exam/style.css?20170901">
<script src="http://static.8264.com/static/js/exam/jquery-1.9.1.min.js" type="text/javascript"></script>
<style>
    body,html{background:#f8f8f8;}
</style>

<script type="text/javascript">
    function jsApiCall()
    {
        WeixinJSBridge.invoke(
                'getBrandWCPayRequest',
                <?php echo $jsApiParameters;?>,
        function(res){
            WeixinJSBridge.log(res.err_msg);
            if(res.err_msg == "get_brand_wcpay_request:ok" ) {
                window.location.href = '<?php echo $exam_http_referer;?>';
            }

        }
    );
    }
    function callpay()
    {
        if (typeof WeixinJSBridge == "undefined"){
            if( document.addEventListener ){
                document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
            }else if (document.attachEvent){
                document.attachEvent('WeixinJSBridgeReady', jsApiCall);
                document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
            }
        }else{
            jsApiCall();
        }
    }
</script>
    <script type="text/javascript">
        //获取共享地址
        function editAddress()
        {
            WeixinJSBridge.invoke(
                    'editAddress',
                    <?php echo $editAddress;?>,
            function(res){
                var value1 = res.proviceFirstStageName;
                var value2 = res.addressCitySecondStageName;
                var value3 = res.addressCountiesThirdStageName;
                var value4 = res.addressDetailInfo;
                var tel = res.telNumber;

                //alert(value1 + value2 + value3 + value4 + ":" + tel);
            }
        );
        }

        window.onload = function(){
            if (typeof WeixinJSBridge == "undefined"){
                if( document.addEventListener ){
                    document.addEventListener('WeixinJSBridgeReady', editAddress, false);
                }else if (document.attachEvent){
                    document.attachEvent('WeixinJSBridgeReady', editAddress);
                    document.attachEvent('onWeixinJSBridgeReady', editAddress);
                }
            }else{
                editAddress();
            }
        };

    </script>
</head>

<body>
<!--头部开始-->
<?php if($isWechat == 0) { ?>
<div class="header-content">
<div class="home-icons" style="display: none;">
<a href="http://www.8264.com/xuexiao/">首页</a>
</div>
<div class="goback-icons">
<a href="http://www.8264.com/xuexiao/">返回</a>
</div>
<div class="logo">
<a href="#">
<img src="http://static.8264.com/static/images/exam/logo.png" alt="">
</a>
</div>
</div>
<?php } else { if($phonetype == 'android') { ?>
<a href="<?php echo $back_url;?>" class="chat-back"></a>
<?php } } ?>
<div class="zhifutitle">支付订单</div>

<div class="zhifujiagebox">
    <div class="zhifujiagecon">
        <?php if($attach == 1) { ?>
        <i class="hyzhifuicon"></i>
        <div class="zhifurightcon">
            <span>8264超级会员</span>
            <em>成为会员，超值享受各种福利</em>
        </div>
        <b class="baojia">￥<?php echo $total_fee;?>	/年</b>
        <?php } else { ?>
        <i class="hyzhifuicon"></i>
        <div class="zhifurightcon">
            <span>&nbsp;8264视频课程</span>
            <em><?php echo $video_title;?></em>
        </div>
        <b class="baojia">￥<?php echo $total_fee;?>	</b>
        <?php } ?>
    </div>
</div>


<div class="zhifujiagecon whitebox ptb15">
    <i class="weixinzhifuicon"></i>
    <div class="zhifurightcon">
        <span>微信支付</span>
        <em>微信安全支付</em>
    </div>
    <b class="duigou"></b>
</div>

<div class="zhifuadbox">
    <img src="http://static.8264.com/static/images/exam/zhifuad.png" alt="">
</div>
<a href="javascript:///" class="bottom_bar" onclick="callpay()">
    确认支付 ￥<?php echo $total_fee;?>
</a>
</body>
</html>
