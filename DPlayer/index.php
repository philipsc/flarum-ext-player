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
<script language="javascript">
function codefans(){
var box=document.getElementById("divbox");
box.style.display="none";
}
setTimeout("codefans()",40000);
</script>
</head>
<?php
$a=$_GET['url'];
$long=explode("/",$a);
//echo "id=".$long[4];
?>
<body>
<div id="divbox" style="width:80%; margin:0 auto;  z-index:9999999999; line-height:30px; height:30px; font-size:14px; position:absolute; color:#FFFFFF; background: #090; top:8px; left:10%; text-align:center;border-radius: 8px;border-top-right-radius: 8px;border-top-left-radius: 8px;border-bottom-right-radius: 8px;border-bottom-left-radius: 8px;opacity: 0.8;"> 影片内第三方广告，请勿轻信！ </div>
<div id="DPlayer"></div>
<div id="stats"></div>
<script src="https://cdn.jsdelivr.net/npm/cdnbye@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/p2p-dplayer@latest"></script>
<script>
var dp = new DPlayer({
    container: document.getElementById('DPlayer'),
    autoplay:true,
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
    //subtitle: {
    //    url: 'dplayer.vtt',
    //    type: 'webvtt',
    //    fontSize: '25px',
    //    bottom: '-10px',
    //    color: '#FF2300'
    //},
    //danmaku: {
    //    id: '<? echo $long[4];?>',
    //    api: '/',   //这里填写弹幕地址
    //    bottom: '25px'  //弹幕距离播放器底部的距离，防止遮挡字幕，取值形如: '10px' '10%'
    //},
        hlsjsConfig: {
            // debug: false,
            // Other hlsjsConfig options provided by hls.js
            p2pConfig: {
                logLevel: true,
                live: false,        // set to true in live mode
                // Other p2pConfig options provided by CDNBye
                wsSignalerAddr:'wss://signal.cdnbye.com/wss',
                // Other p2pConfig options provided by hlsjs-p2p-engine
                    webRTCConfig: { 
                        config: {         // custom webrtc configuration (used by RTCPeerConnection constructor)
                            iceServers: [
                              { urls: 'stun:stun.ideasip.com' }, 
                              { urls: 'stun:stun1.l.google.com:19302' }, 
                              { urls: 'stun:stun2.l.google.com:19302' }, 
                              { urls: 'stun:stun3.l.google.com:19302' }, 
                              { urls: 'stun:stun4.l.google.com:19302' }, 
                              { urls: 'stun:stun.voipbuster.com' }, 
                              { urls: 'stun:stun.voiparound.com' }, 
                              { urls: 'stun:global.stun.twilio.com:3478?transport=udp' }
                            ] 
                        }
                    }
            }
        }
});
dp.play();
</script>
</body>
</html>
