# Weplayer by philipsc
Add a video player plug-in that supports m3u8 format

### v0.1↑
Support adding music & videos playing link `[audio src=url]`&`[video src=url]`  
支持添加音乐播放链接,用法`[audio src=url]`& `[video src=url]`

### Installation
composer:
```sh
composer require philipsc/flarum-ext-player:dev-master
```

### Updating
```sh
composer require philipsc/flarum-ext-player:dev-master
```

And clear the cache(`php flarum cache:clear` or clear from the admin panel)  
然后清除缓存(`php flarum cache:clear` 或从管理面板清除)

### Usage
用法
```sh
[weplay src=url]
```
All media files that support DPlayer  
所有支持DPlayer的媒体文件

### Screenshot
![ada3Ax.jpg](https://s1.ax1x.com/2020/08/03/ada3Ax.jpg)

### Demo url
https://wedog.cc/d/148/3

### Credits
[MoePlayer/DPlayer](https://github.com/MoePlayer/DPlayer) ([DIYgod](https://github.com/DIYgod)) for the HTML5 video player

The current version only supports referencing external DPlayer players, I hope someone can integrate DPlayer in the root directory of the plugin.  
当前版本只支持引用外部DPlayer播放器，希望有人能集成插件根目录的DPlayer.
