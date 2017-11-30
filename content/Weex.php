<?php
/////////////////////////// 设置文档标题、作者、email
$title = 'Weex';
$author = '犀利哥';
$email = '23771066@qq.com';

require __DIR__.'/../_header.php';

/////////////////////////// 文档内容开始
$md = <<<SSS
# Win下搭建Weex开发环境
-------------------------
- 下载并安装Node.js
https://nodejs.org/zh-cn/download/
- 使用X宝镜像
`$ npm install -g cnpm --registry=https://registry.npm.taobao.org`
- 安装Weex
`cnpm install -g weex-toolkit`
- 创建项目
`weex create test`
- 安装依赖
`cnpm install`
- 开启watch模式和静态服务器
`npm run dev & npm run serve`
- 浏览器访问
http://localhost:8081/
  
2017.11.29

SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>
