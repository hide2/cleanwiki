<?php
/////////////////////////// 设置文档标题、作者、email
$title = 'PHP+Laravel';
$author = '犀利哥';
$email = '23771066@qq.com';

require __DIR__.'/../_header.php';

/////////////////////////// 文档内容开始
$md = <<<SSS
# 先上几个段子：
-------------------------
`我想说，PHP也是垃圾啊，Facebook那么大的网站，用PHP做的，根本上不去嘛`
  
`某女：你能让这个论坛的人都吵起来，我就跟你吃饭。`
`PHP程序员：PHP是世界上最好的语言！`
`某论坛炸锅了，各种吵架……`
`某女：服了你了，我们走吧！`
`PHP程序员：今天不行，我一定要说服他们，PHP必须是最好的语言。`
  
`三个程序员坐在格子间里编程。`
`一个程序员一言不发，他用的是python。`
`一个程序员写一会儿就按一下编译，然后就玩会儿手机。他用的是C++。`
`一个程序员坐在那里浏览网页，不时飞快的键入一些字符。`
`经理看到，怒道：你怎么不干活，尽在上网。`
`回答：我在查实现这个功能需要用什么函数。`
`他用的是PHP。`
  
# 趣图赏析-淘宝在售PHP记忆卡
![PHP记忆卡](https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1512066988014&di=82535bc44be4b2282bd402dcd000ba96&imgtype=jpg&src=http%3A%2F%2Fimg1.imgtn.bdimg.com%2Fit%2Fu%3D476940231%2C194477151%26fm%3D214%26gp%3D0.jpg)
  
# 趣图赏析-PHP眼中的其他语言
![PHP眼中的其他语言](https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=1195453099,3857893795&fm=27&gp=0.jpg)
  
# 趣图赏析-PHP程序员相亲
![PHP程序员相亲](https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=2250285903,3835268836&fm=27&gp=0.jpg)
  
# PHP的一篇比较严肃的分析：
https://eev.ee/blog/2012/04/09/php-a-fractal-of-bad-design/
# A good language must be:
- A language must be predictable. It’s a medium for expressing human ideas and having a computer execute them, so it’s critical that a human’s understanding of a program actually be correct.
- A language must be consistent. Similar things should look similar, different things different. Knowing part of the language should aid in learning and understanding the rest.
- A language must be concise. New languages exist to reduce the boilerplate inherent in old languages. (We could all write machine code.) A language must thus strive to avoid introducing new boilerplate of its own.
- A language must be reliable. Languages are tools for solving problems; they should minimize any new problems they introduce. Any “gotchas” are massive distractions.
- A language must be debuggable. When something goes wrong, the programmer has to fix it, and we need all the help we can get.

# But PHP...
- PHP is full of surprises: mysql_real_escape_string, E_ALL
- PHP is inconsistent: strpos, str_rot13
- PHP requires boilerplate: error-checking around C API calls, ===
- PHP is flaky: ==, foreach (\$foo as &\$bar)
- PHP is opaque: no stack traces by default or for fatals, complex error reporting

  
# ThinkPHP
ThinkPHP是一个国产框架，基本是抄袭了Struts、RoR等框架，把一些好的理念应用到PHP。什么MVC、ORM、AOP、DI、模板、filter、bundler、AJAX/REST/NoSQL支持之类的全搞了个遍，没什么新东西，不过原来PHP诟病的不好维护性算是通过学习好的模式和架构得以解决了，算是个敏捷开发的好框架。而且没想到的是，通过面试发现，现在国内用TP的PHPer很多。
TP官网上的入门教程竟然要收费，20RMB一位，着实被恶心了一把。。那么多可以选择的商业模式，偏偏要选择卖门票。。Anyway, 存在即合理。
  
# 8小时PHP速成
- 《PHP中文手册》
http://www.php.cn/manual/view/4.html
- 《ThinkPHP5.0完全开发手册》
http://www.php.cn/manual/view/14174.html

  
8小时PHP速成=3小时《PHP中文手册》+3小时《ThinkPHP5.0完全开发手册》+2小时搭建开发环境和练手
  
# Laravel
-------------------------
了解了Laravel之后，才知道ThinkPHP很烂。
Laravel目前是PHP界最火热的框架，不过基本上大同小异。
  
- 世界编程语言排行榜
https://www.tiobe.com/tiobe-index/
- Web开发排行榜
https://w3techs.com/technologies/overview/programming_language/all
- Nginx服务端开发语言排行
https://w3techs.com/technologies/breakdown/ws-nginx/programming_language
- 主流网站使用技术列表
https://en.wikipedia.org/wiki/Programming_languages_used_in_most_popular_websites
- Laravel市场占有率
https://laravel-china.org/topics/3550/laravel-market-share-data
- PHP手册
http://www.php.cn/manual/view/4.html
- Laravel
https://laravel.com/
https://laravel-china.org/
https://d.laravel-china.org/docs/5.5

  
# Win下搭建Laravel开发环境
-------------------------
# 下载Composer
————————
- 下载并执行安装
https://getcomposer.org/Composer-Setup.exe
- 使用中国镜像：
`composer config -g repo.packagist composer https://packagist.phpcomposer.com`

# 下载PHP
————————
- 下载最新PHP7.x http://windows.php.net/download/
- 解压到任意目录，比如`F:\php`
- 将PHP的安装路径`F:\php`加入PATH 环境变量
- 进入PHP安装目录（例如 `F:\php`）。找到`php.ini-development`文件并复制一份到当前目录，重命名为`php.ini`
用编辑器打开 php.ini 文件，修改以下配置：
去掉`extension_dir = "ext"`前面的分号（738 行左右）
去掉`extension=php_curl.dll`前面的分号（893 行左右）
去掉`extension=php_mbstring.dll`前面的分号（903 行左右）
去掉`extension=php_openssl.dll`前面的分号（907 行左右）
去掉`extension=php_pdo_sqlite.dll`前面的分号（913 行左右）

# 下载Laravel
————————
- 下载最新Laravel:
`composer global require "laravel/installer"`
- 创建project：
`composer create-project --prefer-dist laravel/laravel blog`
`cd blog`
`php artisan serve`
- 浏览器访问 http://localhost:8000

  
# Linux下部署Nginx+Laravel
-------------------------
# 更新yum安装包
————————
`rpm -Uvh http://mirror.webtatic.com/yum/el6/latest.rpm`

# 安装PHP7
————————
`yum install php70w.x86_64 php70w-cli.x86_64 php70w-common.x86_64 php70w-gd.x86_64 php70w-ldap.x86_64 php70w-mbstring.x86_64 php70w-mcrypt.x86_64 php70w-mysql.x86_64 php70w-pdo.x86_64 php70w-fpm -y`
`vi /etc/php-fpm.d/www.conf`
`;listen = 127.0.0.1:9000`
`listen = /var/run/php-fpm/php-fpm.sock`
`service php-fpm restart`

# 安装composer
——————————————
`curl -sS https://getcomposer.org/installer | php`
`mv composer.phar /usr/local/bin/composer`
`composer config -g repo.packagist composer https://packagist.phpcomposer.com`

# 安装laravel
——————————————
`composer global require "laravel/installer"`

# 安装nginx
——————————————
`yum install nginx -y`
`vim /etc/nginx/conf.d/default.conf`
```
server_name 180.150.183.xxx;
root /var/www/pp/public;
index index.php index.html index.htm;
    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location ~ \.php\$ {
        try_files \$uri /index.php =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)\$;
        fastcgi_pass unix:/var/run/php-fpm/php-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }
```
`service nginx restart`

# 部署项目
——————————————
`mkdir -p /var/www`
```
alias dd='cd /f/projects/fancy-data/pp && echo "============ svn up" && svn up && svn info > version && echo "============ local version" && cat version && cd /f/projects/fancy-data && echo "============ zip -r pp.zip pp" && zip -r -q pp.zip pp && echo "============ scp pp.zip" && scp pp.zip root@180.150.183.xxx:/var/www && rm pp.zip && echo "============ unzip pp.zip & php artisan migrate" && ssh root@180.150.183.xxx "cd /var/www ; unzip -o -q pp.zip ; chmod -R 777 /var/www/pp/storage ; chmod -R 777 /var/www/pp/database ; cd /var/www/pp ; php artisan migrate ; php artisan clear-compiled ; php artisan cache:clear ; php artisan config:cache ; php artisan optimize ; echo "============ remote version" ; cat version ;"'
```

# 项目设置
——————————————
修改.env，设置
`APP_ENV=production`
`APP_DEBUG=false`
`php artisan migrate `

`chown -R nginx:nginx /var/run/php-fpm/php-fpm.sock`
`chown -R nginx:nginx /var/www/pp`
`chmod -R 777 /var/www/pp/storage`
`chmod -R 777 /var/www/pp/database`
`service nginx restart`

# 开始访问
——————————————
http://180.150.183.xxx/
  
2017.11.1
SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>
