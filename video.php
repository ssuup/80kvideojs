<!DOCTYPE html> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="title" content="播放器">
<meta name="apple-touch-fullscreen" content="YES">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">

<title>播放器</title>
<style>
	body{
		margin: 0;
}
@media (max-width: 440px){
	.web_size{
		height: 200px !important;
	}
}
.vjs-paused .vjs-big-play-button,
.vjs-paused.vjs-has-started .vjs-big-play-button {
    display: block;
}
</style>

</head>
<body>
<div style="width:100%;height:100vh" class="web_size">										<video id='myVideo'  class="video-js" preauto="auto" poster="loading.jpg"> </video>
											<link rel="stylesheet" type="text/css" href="video.min.css?v=3">
											<script type="text/javascript" src="video.min.js?v=1" charset="utf-8" > </script>
												<script type="text/javascript" src="video-conrtib-ads.js?v=1" charset="utf-8" > </script>
												<script type="text/javascript" src="myVideo.js?v=6" charset="utf-8" > </script>
												<script src="lang/zh-CN.js"></script>
												<script type="text/javascript">
												var vPath = '<?php echo($_REQUEST['url']);?>';
										//		var logo = '';
												var myVideo=initVideo({
                                                    id:'myVideo',
                                                    url:vPath,
										//			ad:{
                                        //              pre:{
                                        //                  url:'',
                                        //                  link:'',
                                         //             },
										//		  	},
                                        //         	logo:{
                                         //               url:'logo.png',
                                         //               width:'100px'
                                         //           },
												});
												</script>
</div>
</body>
</html>