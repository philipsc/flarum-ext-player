<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta name="renderer" content="webkit"/>
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
<title>DPlayer</title>
<style type="text/css">body, html, .dplayer {padding: 0;margin: 0;width: 100%;height: 100%;color: #aaa;background-color: #000;}a{text-decoration: none;}
#DPlayer .dplayer-logo {max-width: 100px;left: initial;right: 20px;top: 16px;}.dplayer-subtitle {top: 25px;}
</style>
<link type="text/css" href="./DPlayer.min.css" rel="stylesheet">
</head>
<?php
$a=$_GET['url'];
$long=explode("/",$a);
//echo "id=".$long[4];
?>
<body>
<div id="DPlayer"></div>
<div id="stats"></div>
<script src="https://cdn.jsdelivr.net/npm/hls.js/dist/hls.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dplayer/dist/DPlayer.min.js"></script>
<script>
var dp = new DPlayer({
    container: document.getElementById('DPlayer'),
    autoplay:false,
    screenshot:true,
    hotkey:true,
    preload:'auto',
    //logo: 'logo.png',
    theme:'#090',
    mutex:true,
    video: {
        url: "<?php echo $_GET['url'];?>",
        pic: 'play.jpg',
        type: 'hls'
    },
    danmaku: {
        id: '<? echo $long[4];?>',
        api: 'https://dplayer.alone88.cn/',   //这里填写弹幕地址。 //Fill in the barrage address here.https://dplayer.moerats.com/
        bottom: '25px'  //弹幕距离播放器底部的距离，防止遮挡字幕，取值形如: '10px' '10%'。 //The distance between the screen and the bottom of the player to prevent the subtitle from being blocked. The value is as follows:'10px ''10%'.
    }
});
dp.on('pause', function () {
	dp.notice('友情提醒：影片内第三方广告，请勿轻信！', 15000, 1);
    });
dp.on('play', function () {
    dp.notice('友情提醒：影片内第三方广告，请勿轻信！', 20000, 0.5);
    });
dp.play();
</script>
</body>
</html>
