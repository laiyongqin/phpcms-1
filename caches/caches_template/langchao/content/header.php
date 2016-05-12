<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-language" content="zh-CN" />
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link rel="Shortcut icon" href="favicon.ico" type="image/x-icon" />

<!-- <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>Css/css.css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>Css/list.css" id="flexlist"> -->

<script type="text/javascript" src="<?php echo JS_PATH;?>Scripts/jquery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>Scripts/adservice.js"></script>

<style>html{overflow-y:scroll;}body{margin:0;padding:0;font:12px/1.5 '微软雅黑',Arial,sans-serif;position:relative;}div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,blockquote,p{padding:0;margin:0;}table,td,tr,th{font-size:12px;}ol,ul{list-style:none;}li{list-style-type:none;}img{vertical-align:top;border:0;}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:normal;}address,cite,code,em,th,i{font-weight:normal;font-style:normal;}.hx a,.hx em,.fB{font-weight:bold;}.clearfix{*zoom:1}.clearfix:after{content:'';display:table;clear:both}a{text-decoration:none;}.bjnewslogo,#searchBtn,.sld,#btn,.menu li a,.menu li:hover,#kuaixu dt .client,#kuaixu dt .Cooperation,#kuaixu dt .login,.btns span,.btns span.now,.news .tit em,.news .vnew li .video,.news .tag dd,.share .sina,.share .qqwb,.share .baidu,.share .weixin,.share .douban,.attitude .up,.attitude .down,.news .pnews .lnew .video,.share .qrcode,#tcc .x{background:url(<?php echo IMG_PATH;?>Images/icon.png) no-repeat;}#header{clear:both;height:150px;width:100%;position:fixed; _position:absolute; border-bottom:1px solid #BABABA;padding-top:20px;left:0;top:0;z-index:800;background:#fff;}#logo{clear:both;height:61px;display:block;}.logo{float:left;}.bjnewslogo{width:344px;height:48px;display:block;overflow:hidden;text-indent:-10em;background-position:0px 0px;}.search{float:right;width:245px;padding-top:20px;}.searchTxt{width:205px;float:left;height:30px;border:1px solid #CECECE;overflow:visible;}.searchBtn{float:left;width:33px;height:32px;margin-left:-1px;}#searchBtn{cursor:pointer;background-position:-891px 0px;border:none;overflow:hidden; font-size:16px; width:33px;height:32px;}.searchMenu{float:left;width:61px;height:30px;border-right:1px solid #CECECE;position:relative;}.sld{background-position:-535px -22px;height:32px;width:48px;padding-left:11px;font:normal 14px/32px '微软雅黑';color:#666;cursor:pointer;}#bjTxt{float:left;border:0;background:#fff;color:#333;font:14px/22px '微软雅黑',verdana,tahoma,arial,'SimSun',sans-serif;width:132px;height:22px;margin:0;outline:medium none;padding:4px;}.searchTab{display:none;z-index:999;width:61px;height:auto;border:1px solid #CECECE;border-top:none;border-bottom:none;position:absolute;top:30px;left:-1px;}.searchTab li{font:normal 14px/32px '微软雅黑';color:#666;height:32px;padding-left:11px;background:#E8E8E8;color:#666;border-bottom:1px solid #CECECE;cursor:pointer;}#nav{ clear:both; height:49px;background:#a80000;margin:0px auto 0px;}#btn{width:53px;height:49px;background-position:0px -87px;text-indent:-10em;overflow:hidden;display:block;float:left;cursor:pointer;}.menu{float:left;width:878px;overflow:hidden;height:33px;margin-top:16px;}.menu li{float:left;display:inline-block;height:33px;}.menu li a{color:#fff;text-decoration:none;font:normal 14px/18px '微软雅黑';background-position:right -151px;display:block;padding-left:10px;padding-right:10px;height:22px;}.menu li a:hover{color:#edcbcb;}.menu li:hover{background:url(<?php echo IMG_PATH;?>Images/i.png) center bottom no-repeat;}#kuaixu{height:40px;overflow:hidden;clear:both;}#kuaixu dd{float:left;width:720px;height:40px;overflow:hidden;}#kuaixu dt{float:right;width:275px;height:40px;color:#d1d1d1; padding-right:5px;}#kuaixu dd .ksig{display:inline-block;float:left;}#kuaixu dd .ksig a{font:bold 20px/40px '微软雅黑';color:#a80000;}#kuaixu dd .klist{margin-left:2px;display:inline-block;float:left;}#kuaixu dd .klist li{height:40px;line-height:40px;width:100%;}#kuaixu dd .klist li a{font:bold 16px/40px '微软雅黑';color:#000;}#kuaixu dd .klist li span{color:#666;font:normal 12px/40px '微软雅黑';padding-left:15px;}#kuaixu dt .client,#kuaixu dt .Cooperation,#kuaixu dt .login{display:block;float:right;border-right:1px solid #c6cacb;padding-left:20px;height:40px;font:normal 14px/40px '微软雅黑';color:#666;padding-right:9px;margin-left:8px;}#kuaixu dt .client{background-position:left -173px;}#kuaixu dt .Cooperation{background-position:-88px -172px;}#kuaixu dt .login{background-position:-205px -174px;border-right:none;}#kuaixu dt .reg{font:normal 14px/40px '微软雅黑';color:#d1d1d1;float:right;}#kuaixu dt .ln,#kuaixu dt .user{display:block;float:right;line-height:40px;color:#d1d1d1;padding-right:10px;}#kuaixu dt .user{padding-left:10px;}#kuaixu dt .user a{ color:#d1d1d1;}#kuaixu dt a:hover{color:#a80000;}#main{padding-top:175px;position:relative;z-index:100}#main .main{width:1150px;float:left;position:relative;}#main .main .left,#main .main .right{float:left;padding-top:15px;overflow:hidden;}#main .main .left{width:733px; margin-top:-20px; *margin-top:-10px;_margin-top:0px;}#main .main .right{width:240px;margin-left:26px;}#main .sidebar{width:107px;position:fixed;top:190px;margin-right:15px;float:left;background:#B6B6B6;min-height:506px;display:none;z-index:950;}.sideul li{height:30px;padding-left:19px;}.sideul li.now{background:#ddd;}.sideul li a{font:normal 16px/30px '微软雅黑';color:#fff;}.sideul li.now a{color:#a80000;}.focus{width:720px;height:328px; margin-top:20px;}.pics{height:308px;width:720px;overflow:hidden;clear:both;position:relative;}.pics ul{position:absolute;left:0px;top:0px;}.pics ul li{ width:720px; height:308px; position:relative;}.pics ul li span{ height:38px; background:url(<?php echo IMG_PATH;?>Images/s.png) repeat-x; clear:both; overflow:hidden; position:absolute; bottom:0px; left:0; z-index:10; display:block; width:100%;}.pics ul li .txt a{color:#fff; font:normal 14px/38px '微软雅黑';}.pics ul li .img{ clear:both; overflow:hidden;}.pics ul li .txt{ padding-left:15px; color:#fff; font:normal 14px/38px '微软雅黑'; position:absolute; bottom:0px; left:0; z-index:100;}.btns{height:10px;padding-top:10px;text-align:center;}.btns span{background-position:-360px -180px;width:10px;height:10px;cursor:pointer;display:inline-block;margin:0px auto 0px;margin-right:5px;text-indent:-10em;overflow:hidden;}.btns span.now{background-position:-370px -180px;}.news{margin:20px auto 0px;padding-bottom:4px;border-bottom:3px solid #DCDCDC;}.news .tit{margin:10px auto 0px;color:#666;font:normal 12px/20px '微软雅黑';}.news .tit em{font-style:normal;background-position:-573px -165px;color:#666;margin-right:10px;}.news .tit em a{color:#666;}.news .tit .date{padding-left:5px;}.news h2{font:bold 22px/30px '微软雅黑';color:#000;}.news h2 a{font:bold 22px/30px '微软雅黑';color:#000;}.news .disc,.news .pnews .disc{padding-top:5px;color:#666;font:normal 14px/24px '微软雅黑';}.news .relevant,.news .vnew{margin-top:0px;}.news .relevant li{float:left;width:320px;height:22px;color:#666;font:normal 14px/24px '微软雅黑';overflow:hidden;}.news .relevant li a,.news .vnew li span,.news .vnew li a{color:#123E60;}.news .relevant li .abt,.news .vnew li .abt{color:#a80000;padding-right:5px;}.news .relevant li a:hover,.news .vnew li a:hover{color:#a80000;}.news .vnew li{height:22px;color:#666;font:normal 14px/24px '微软雅黑';}.news .vnew li .video,.news .vnew li .voice{cursor:pointer;background-position:right -284px;height:24px;padding-right:48px;display:inline;}.news .vnew li .video:hover,.news .vnew li .voice:hover{background-position:right -307px;}.news .tag{overflow:visible;clear:both;margin:0px auto 0px; padding-top:15px;}.news .tag dd{padding-left:42px;background-position:left -220px;color:#000;float:left;width:323px;}.news .tag dd a{color:#000;margin-right:15px;}.news .tag dt{width:365px;float:right;}.share{float:right;display:inline-block;position:relative;}.share .qrcode{bottom:18px;left:0px;position:absolute;width:118px;height:120px;padding-top:13px;text-align:center;background-position:-422px -59px;display:none;}.share .qrcode img{width:90px;height:91px;}.attitude{float:right;display:inline-block;position:relative;padding-right:7px;}.attitude .j{color:#a80000;position:absolute;left:0px;bottom:10px;font:bold 16px/24px Tahoma,Geneva,sans-serif;}.share span{cursor:pointer;display:inline-block;width:20px;height:17px;margin-right:8px;}.share .sina{background-position:0px -252px;}.share .qqwb{background-position:-27px -252px;}.share .baidu{background-position:-56px -252px;}.share .weixin{background-position:-82px -252px;width:22px;}.share .douban{background-position:-113px -252px;margin-right:0;}.attitude span{height:18px;display:inline-block;margin-right:8px;cursor:pointer;padding-left:22px;}.attitude .up{background-position:-428px -217px;}.attitude .down{background-position:-685px -216px;}.share .sina:hover{background-position:-588px -253px;}.share .qqwb:hover{background-position:-615px -253px;}.share .baidu:hover{background-position:-644px -253px;}.share .weixin:hover{background-position:-670px -253px;}.share .douban:hover{background-position:-701px -253px;}.attitude .up:hover{background-position:-428px -236px;color:#a80000;}.attitude .down:hover{background-position:-685px -235px;color:#a80000;}.news .pnews{padding-top:7px;}.news .pnews .limg{width:160px;float:left;overflow:hidden;margin-top:5px;}.news .pnews .limg img{width:140px;height:175px;}.news .pnews .rinew{width:520px;float:left;overflow:hidden;}.news .pnews .disc{padding-top:0;}.news .pnews .lnew{width:240px;float:left;position:relative;overflow:hidden;margin-top:5px;}.news .pnews .lnew img{width:220px;height:140px;}.news .pnews .lnew .video{width:43px;height:43px;position:absolute;left:5px;bottom:5px;background-position:left -286px;z-index:500;cursor:pointer;}.news .pnews .rnew{width:490px;float:left;overflow:hidden;}.leftad{margin:20px auto 0px;padding-bottom:20px; border-bottom:3px solid #DCDCDC; display:none;}#more{margin:20px auto 0px;text-align:center;color:#bfc4c8;font:bold 20px/26px '微软雅黑';padding-bottom:50px;}#more span{cursor:pointer;}#ipage{text-align:center;margin:15px auto 0px;padding-bottom:50px;}#ipage a{display:inline-block;padding:9px 12px;margin:0px auto 0px;margin-right:4px;border:1px solid #a80000;font:bold 12px Tahoma,Geneva,sans-serif,'微软雅黑';color:#a80000;}#ipage a.now{background:#a80000;color:#fff;}.gbtn,.rul li,.rtit,.images .icon,.hzlist li span,.c1,.c2,.c3,.c4,.c5,#rsig .gotop,#rsig .ask{background:url(<?php echo IMG_PATH;?>Images/r.png) no-repeat;}.guancj{background-color:#F9F9F9;padding:0px 15px 10px;}.right .p{height:92px;background-color:#F9F9F9;}.right .p img{width:240px;height:73px;}.guancj h2{display:block;line-height:25px;}.guancj h2 a{font:bold 20px/25px '微软雅黑';color:#000;}.guancj .txt{height:168px;margin:10px auto 0px;text-justify:auto;text-align:justify;}.guancj .txt,.guancj .txt a{font:100 14px/24px '微软雅黑';color:#666;}.gbtn{background-position:left -244px;padding:15px 15px;}.rul li{background-position:left -443px;padding-left:15px;height:24px;color:#666;}.rul li a{color:#666;font:bold 12px/24px '微软雅黑';}.rad,.images,.rtit,.book{margin:12px auto 0px;}.rtit{height:45px;display:block;}.tz{background-position:left -519px;}.jz{background-position:left -564px;}.sp{background-position:left -609px;}.top{background-position:left -654px;}.hz{background-position:left -699px;}.juz{background-position:left -744px;}.tuz{padding:6px 9px;background:#F9F9F9;}.tuz .img img{width:222px;}.tujie{padding-top:5px;padding-left:5px;}.jiezi{padding:10px 0px 10px 16px;background:#F9F9F9;}.jiezi .lf{float:left;width:68px;padding-top:5px;}.jiezi .ri{float:left;width:145px;padding-top:1px;color:#666;font:normal 12px/22px '微软雅黑';}.jiezi .ri a{color:#666;font:normal 12px/22px '微软雅黑';}.jiezi .ri a:hover{ color:#a80000;}.shuping{padding:15px 0px 10px 16px;background:#F9F9F9;}.shuping h3 a{color:#000;font:normal 14px '微软雅黑';}.book dd,.book dt{float:left;}.book dd{width:68px;}.book dt{width:148px;font:normal 12px/22px '微软雅黑';color:#666;margin-top:-4px;}.book dt a{color:#666;}.bklist{margin:15px auto 0px;}.topday{padding-top:20px;padding-left:70px;}.topday ul li{width:38px;height:23px;float:left;margin-right:18px;text-align:center;cursor:pointer;}.topday ul li.now{border-bottom:2px solid #a80000;}.tdnews{padding:5px 0px 10px 16px;background:#F9F9F9;}.tdnews li{margin-top:11px;}.tdnews li span{display:inline-block;float:left;width:20px;height:20px;background:#a80000;color:#fff;font:normal 12px/20px Tahoma,Geneva,sans-serif;text-align:center;margin-right:10px;}.tdnews li .b{background:#03A3DC}.tdnews li h3{display:inline-block;float:left;width:186px;}.tdnews li h3 a{font:normal 12px/22px '微软雅黑';color:#666;}.images{padding:12px 0px 10px 16px;background:#F9F9F9;}.images .img{position:relative;width:209px;height:148px;}.images img{width:209px;height:148px;z-index:1;}.images .icon{width:33px;height:24px;background-position:right -1090px;position:absolute;left:10px;top:11px;z-index:700;display:block;}.images .v{background-position:right -1154px;}.images .titl a{font:normal 12px/20px '微软雅黑';color:#666;}.images .titl{margin-top:8px;}.hzlist{padding:5px 0px 10px 16px;background:#F9F9F9;}.hzlist li{margin-top:3px;}.hzlist li span{display:inline-block;float:left;width:15px;height:15px;color:#fff;background-position:left -443px;}.hzlist li h3{display:inline-block;float:left;width:186px;}.hzlist li h3 a{font:normal 12px/22px '微软雅黑';color:#666;}.juzhen{padding:5px 0px 15px 16px;background:#F9F9F9;}.juzhen li{height:38px;margin-top:8px;}.juzhen li span{display:inline-block;float:left;width:40px;margin-right:9px;height:38px;font:normal 14px/38px '微软雅黑';text-align:center;}.juzhen li h3{display:inline-block;float:left;width:170px;}.juzhen li h3 a{font:normal 12px/20px '微软雅黑';color:#666;}.c1{color:#5a3100;background-position:1px -829px;}.c2{color:#a73124;background-position:0px -876px;}.c3{color:#e79300;background-position:0px -923px;}.c4{color:#a73124;background-position:0px -969px;}.c5{color:#00712d;background-position:0px -1016px;}.c1 a{color:#5a3100;}.c2 a{color:#a73124;}.c3 a{color:#e79300;}.c4 a{color:#a73124;}.c5 a{color:#00712d;}#footer{background:#343539;z-index:999;position:relative;}.partner{padding-top:14px;padding-bottom:15px;}.partner .tit{height:26px;border-bottom:1px solid #333;}.partner .tit li{display:inline-block;float:left;font:normal 14px/26px '微软雅黑';color:#fff;}.partner .tit li a{font:normal 14px/26px '微软雅黑';color:#fff;}.partner .l1{width:156px;padding-left:20px;}.partner .l2{width:193px;}.partner .l3{width:292px;}.partner .l4{width:115px;}.partner .l5{width:115px;}.partner .l6{width:107px;}.ptext .lft{float:left;padding-left:10px;padding-top:12px;display:inline-block;}.ptext .lft li,.ptext .p3 ul li{height:22px;color:#b6b6b6;font:normal 12px/22px '微软雅黑';}.ptext .lft li a,.ptext .p3 ul li a{color:#b6b6b6;font:normal 12px/22px '微软雅黑';}.ptext strong{color:#a80000;font:normal 12px/22px '微软雅黑';}.ptext .p1{width:147px;padding-left:28px;}.ptext .p2{width:183px;}.ptext .p3{width:282px;}.ptext .p4{width:105px;}.ptext .p5{width:105px;}.ptext .p6{width:97px;}.ptext .p3 ul{width:90px;margin-top:0px;display:inline-block;float:left;}#dbnews{background:#242528;}#dbnews .dbnews{clear:both;width:980px;margin:0px auto 0px;height:40px;padding-top:15px;overflow:hidden;line-height:18px;color:#62656e;padding-left:35px; text-align:center;}#dbnews .dbnews a{color:#aaa;}#logo,.nav,#kuaixu,#main,.partner{width:1003px;margin:0px auto 0px;}.news,.news .tit,.news .disc,.news .relevant,.news .vnew li,.leftad,.news .pnews,.guancj,.guancj h2,.guancj .txt,.gbtn,.rul li,.rad,.rtit,.tuz,.tuz .img,.tujie,.jiezi,.shuping h3,.book,.bklist,.topday,.tdnews,.tdnews,.tdnews ul,.tdnews li,.images .img,.images .titl,.images .i,.hzlist,.hzlist li,.juzhen,.juzhen ul,.juzhen li,#footer,#dbnews,.partner,.partner .tit ul,.ptext .lft li,.ptext,.tanck .ap,.tanck .tij,.tanck p,.sideul,#side,#tdnews,.tdnews,.tdnews ul,.right .p,#main,#main .main,.focus,.pics ul,.btns,.news .vnew li,#more,#ipage{clear:both;overflow:hidden;}#rsig{overflow:visible;width:32px;height:70px;position:fixed; _position:absolute;bottom:50px;right:50px;z-index:999;}#rsig .r{width:32px;height:70px;position:relative;}#rsig .r span{width:32px;height:31px;display:block;cursor:pointer;}#rsig .gotop{background-position:left -1097px;}#rsig .ask{background-position:left -1135px;margin-top:6px;}.tanck{width:346px;height:308px;position:absolute;right:0px;bottom:38px;border:1px solid #D9D9D9;background:#F9F9F9;padding:10px 40px 0 35px;display:none;}.tanck .txt{font:normal 16px '微软雅黑';padding-top:10px;height:28px;}.tanck .lx .inp{border:1px solid #CECECE;width:200px;height:30px;font:normal 16px/30px '微软雅黑';padding-left:5px;padding-right:5px;}.tanck .opinion{width:330px;height:134px;border:1px solid #CECECE;background:#fff;font:normal 14px/24px '微软雅黑';padding-left:4px;padding-right:3px;}.tanck .btn{width:76px;height:27px;border:none;background:#A80000;float:left;color:#fff;font:normal 16px/27px '微软雅黑';cursor:pointer;}.tanck .cls{color:#bcbcbc;font:normal 16px/27px '微软雅黑';float:right;cursor:pointer; display:inline-block;}#rsig .r #ier{ display:inline-block; float:left; font:normal 14px/24px '微软雅黑'; color:#a80000; padding-left:10px; padding-right:10px; width:200px;}.tanck .tij{padding-top:12px;}.news .pnews .st{width:570px;}#v{position:fixed;top:30%;left:35%;z-index:999;display:none;}.close{clear:both;height:20px;text-align:right;position:relative;z-index:999;width:500px;}#cls_v_play{width:24px;height:24px;background:url(<?php echo IMG_PATH;?>Images/cls.png) no-repeat;cursor:pointer;display:block;float:right;position:absolute;top:24px;right:-24px;}#rolemain{position:relative;overflow:hidden;float:left;width:1003px;}#rolemain .rbl,#zhez{width:100%;position:fixed;left:0;top:0;height:100%;background:#fff;filter:alpha(opacity=80);-moz-opacity:0.8;-khtml-opacity:0.8;opacity:0.8;z-index:900;display:none;}#zhez{background:#000;z-index:800;}#side{width:100%;overflow:hidden;height:100%;}.mejs-inner,.mejs-inner div,.mejs-inner a,.mejs-inner span,.mejs-inner button{margin:0;padding:0;border:none;outline:none;}.mejs-container{position:relative;}.mejs-inner{position:relative;width:inherit;height:inherit;}.me-plugin{position:absolute;}.mejs-container-fullscreen .mejs-mediaelement,.mejs-container-fullscreen video,.mejs-embed,.mejs-embed body,.mejs-mediaelement{width:100%;height:100%;}.mejs-embed,.mejs-embed body{margin:0;padding:0;overflow:hidden;}.mejs-container-fullscreen{position:fixed;left:0;top:0;right:0;bottom:0;overflow:hidden;z-index:1000;}.mejs-poster img{display:block;}.mejs-background,.mejs-mediaelement,.mejs-poster,.mejs-overlay{position:absolute;top:0;left:0;}.mejs-overlay-play{cursor:pointer;}.mejs-inner .mejs-overlay-button{position:absolute;top:50%;left:50%;width:50px;height:50px;margin:-25px 0 0 -25px;background:url(<?php echo IMG_PATH;?>Images/play.png) no-repeat;}.mejs-container .mejs-controls{position:absolute;width:100%;height:34px;left:0;bottom:0;background:rgb(0,0,0);background:rgba(0,0,0,.7);}.mejs-controls .mejs-button button{display:block;cursor:pointer;width:16px;height:16px;background:transparent url(<?php echo IMG_PATH;?>Images/controls.png);}.mejs-controls div.mejs-playpause-button{position:absolute;top:12px;left:15px;}.mejs-controls .mejs-play button,.mejs-controls .mejs-pause button{width:12px;height:12px;background-position:0 0;}.mejs-controls .mejs-pause button{background-position:0 -12px;}.mejs-controls div.mejs-volume-button{position:absolute;top:12px;left:45px;}.mejs-controls .mejs-mute button,.mejs-controls .mejs-unmute button{width:14px;height:12px;background-position:-12px 0;}.mejs-controls .mejs-unmute button{background-position:-12px -12px;}.mejs-controls div.mejs-fullscreen-button{position:absolute;top:7px;right:7px;}.mejs-controls .mejs-fullscreen-button button,.mejs-controls .mejs-unfullscreen button{width:27px;height:22px;background-position:-26px 0;}.mejs-controls .mejs-unfullscreen button{background-position:-26px -22px;}.mejs-controls div.mejs-horizontal-volume-slider{position:absolute;cursor:pointer;top:15px;left:65px;}.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total{width:60px;background:#d6d6d6;}.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current{position:absolute;width:0;top:0;left:0;}.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total,.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current{height:4px;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;}.mejs-controls div.mejs-time-rail{position:absolute;width:100%;left:0;top:-10px;}.mejs-controls .mejs-time-rail span{position:absolute;display:block;cursor:pointer;width:100%;height:10px;top:0;left:0;}.mejs-controls .mejs-time-rail .mejs-time-total{background:rgb(152,152,152);background:rgba(152,152,152,.5);}.mejs-controls .mejs-time-rail .mejs-time-loaded{background:rgb(0,0,0);background:rgba(0,0,0,.3);}.mejs-controls .mejs-time-rail .mejs-time-current{width:0;}.mejs-controls .mejs-time-rail .mejs-time-handle{position:absolute;cursor:pointer;width:16px;height:18px;top:-3px;background:url(<?php echo IMG_PATH;?>Images/handle.png);}.mejs-controls .mejs-time-rail .mejs-time-float{position:absolute;display:none;width:33px;height:23px;top:-26px;margin-left:-17px;background:url(<?php echo IMG_PATH;?>Images/tooltip.png);}.mejs-controls .mejs-time-rail .mejs-time-float-current{position:absolute;display:block;left:0;top:4px;font-family:Helvetica,Arial,sans-serif;font-size:10px;font-weight:bold;color:#666666;text-align:center;}.mejs-controls .mejs-time-rail .mejs-time-float-corner{display:none;}.mejs-controls .mejs-time-rail .mejs-time-current,.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current{background:#82d344;background:-webkit-linear-gradient(top,#82d344 0%,#51af34 100%);background:-moz-linear-gradient(top,#82d344 0%,#51af34 100%);background:-o-linear-gradient(top,#82d344 0%,#51af34 100%);background:-ms-linear-gradient(top,#82d344 0%,#51af34 100%);background:linear-gradient(top,#82d344 0%,#51af34 100%);}#logsc{ display:none;}.tag dd a:hover{ color:#a80000}.guancj h2 a:hover,.rul li a:hover,.guancj .txt a:hover,.shuping h3 a:hover,.tdnews li h3 a:hover,.images .titl a:hover,.hzlist li h3 a:hover,.juzhen li h3 a:hover{ color:#a80000;}.szb{ float:right; width:67px; height:38px; margin-top:5px; margin-right:5px;}#tcc{ display:none; width:720px; padding-top:5px; padding-left:10px; position:absolute; top:49px; left:0px; border:1px solid #E8E8E8; border-top:none; height:70px; background:#fff;}#tcc p{ clear:both; overflow:hidden; padding-top:12px;}#tcc p a{ color:#221815; font:normal 12px/20px ''; margin-right:17px; float:left;}#tcc a:hover{ color:#a80000;}#tcc .x{ width:12px; height:12px; background-position:-590px -318px; cursor:pointer; float:right; display:block; margin-right:10px;}.nav{ width:1003px; position:relative;}.szb a img{ width:67px; height:33px; margin-top:2px;}
@media screen and(min-width:400px) and (max-width:10003px){#main{ padding-left:5px; padding-right:5px;}}
/*浮层 2014.7.18*/.popup-bg{ position:fixed; left:0; top:0; background:#000000; filter: alpha(opacity=0); -moz-opacity:0; -khtml-opacity:0; opacity:0; z-index:999998; width:100%; height:100%;_position: absolute;}.popup-box{ position:fixed;_position: absolute; left:50%; top:200px;z-index:999999; width:800px; margin-left:-400px; overflow:hidden;}.p-close{ position:absolute; right:14px; top:14px; background:url(<?php echo IMG_PATH;?>Images/shijiebei_bg.png) -33px -123px; display:block;  width:14px; height:15px; cursor:pointer;}
/*图集 2014.12.30*/#imagetuji{ width:240px; height:200px; overflow:hidden; position:relative;}#imagetuji .iconyuan{ display:block; position:absolute; left:16px; right:0; top:148px; height:10px; width:209px; text-align:center;}#imagetuji .iconyuan span{ display:inline-block; width:8px; height:8px; background:url(<?php echo IMG_PATH;?>Images/iconyuan.png) no-repeat; margin-right:6px; cursor:pointer;}#imagetuji .iconyuan span.cur{ background:url(<?php echo IMG_PATH;?>Images/iconyuan.png) no-repeat -8px 0;}
.rulsan li{ background-position: left -359px;}
.rulsan li a{ font-weight:normal;}
.tjj{background-position:left -385px;}
.dbimg{ clear:both; overflow:hidden; zoom:1; width:980px; margin:13px auto; text-align:center;}
.dbimg a{ display:inline; padding-right:30px;}
    
#shipin_dong{}
#shipin_dong .img{ position: relative;}  
#shipin_dong .img .titl{ position: absolute; left: 0; bottom: 0; right: 0; height: 25px; padding-top: 3px; background: #a80000;filter: alpha(opacity=85); -moz-opacity:0.85; -khtml-opacity:0.85; opacity:0.85; text-align: center; margin-top: 0;}
    #shipin_dong .img .titl a{ color: #ffffff; font-weight: bold; font-size: 14px; font-family: 'microsoft yahei';}
    #shipin_dong .img .bofang{ z-index: 2; position: absolute; width: 46px; height: 46px; left: 86px; top: 56px;}
    #shipin_dong .img .bofang a{ display: block; width: 46px; height: 46px; background-image: url(<?php echo IMG_PATH;?>Images/bofang.png);}
</style>

</head>
<body>
<div id="header">
    <div id="logo">
        <div class="logo">
			 <h1><a href="<?php echo siteurl($siteid);?>/" title="浪潮报网" class="bjnewslogo">浪潮报网</a></h1>
		</div>
        <div class="search" id="bjnewsbar" role="search">
            <form method="get" name="scform" id="scform" action="<?php echo APP_PATH;?>index.php" target="_blank">
                <div id="searchTxt" class="searchTxt">
                    <div class="searchMenu">
                        <div class="sld" id="sld">精确</div>
                        <div class="searchTab" id="searchTab">
                            <ul>
                                <li class="selected">精确</li>
                                <li>模糊</li>
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" name="m" value="search"/>
					<input type="hidden" name="c" value="index"/>
					<input type="hidden" name="a" value="init"/>
					<input type="hidden" name="typeid" value="1" id="typeid"/>
					<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                    <input id="bjTxt" type="text" value="" name="q" autocomplete="off">
                </div><div class="searchBtn"><button id="searchBtn" value="" class="button" type="submit"></button></div>
            </form>
        </div>
    </div>
    <div id="nav">
        <div class="nav"> 
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <ul class="menu">
               <li><a href="<?php echo siteurl($siteid);?>">首页</a></li>
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                  <li><a href="<?php echo $r['url'];?>" target="_blank"><span><?php echo $r['catname'];?></span></a></li>
			   <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<?php echo runhook('glogal_menu')?>
        </div>
    </div>
    <dl id="kuaixu">
        <dd> <span class="ksig"><a href="<?php echo $CATEGORYS['12']['url'];?>" target="_blank"><?php echo $CATEGORYS['12']['catname'];?>：</a></span>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2e3bec5eab254972ef7678fb28fb15b9&action=position&posid=9&order=id&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'9','order'=>'id',)).'2e3bec5eab254972ef7678fb28fb15b9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'id','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            <div class="klist" >
                <ul id="klist">
                    <!-- <script type="text/javascript" src="<?php echo JS_PATH;?>Scripts/realtime_last_v3.js"></script> -->
	                <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
	                    <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
	                <?php $n++;}unset($n); ?>
                </ul>
            </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	 	<!-- 	<?php echo runhook('glogal_header')?> -->
<script type="text/javascript">
</script>
        </dd>
        
    </dl>
</div>
<!--header end-->