# CleanWiki - A clean & beautiful wiki in PHP

demo: http://cleanwiki.top

mailto: 23771066@qq.com

# 用法
content目录下直接新增.php文件，对应访问URL，比如：
- content\demo.php，对应访问URL：http://your_host/demo
- content\php-laravel.php，对应访问URL：http://your_host/php-laravel
- content\重新定义公司.php，对应访问URL：http://your_host/重新定义公司

# 语法
使用markdown语法写内容：
- 标题字，以#号加空格开始
- 删除字，以\~\~开始和\~\~号结束
- 分隔线，3个或3个以上减号---
- 换行，使用两个空格的空行
- 列表，以-号加空格开始
- 颜色，=red xx，=blue xx
- 高亮，\`xx\`
- 链接，\[文字\]\(url\)
- 图片，\!\[文字\]\(图片url\)
- 表格，如下：
\|任务\|时间\|数量\|
\|---\|---\|---\|
\|Filet Mignon\|05/14/2013\|$5,230.000\|
\|Blue beer\|16/08/2013\|$5,230.000\|
\|T-shirts\|22/12/2013\|$5,230.000\|
- 代码块，如下：
\`\`\`
namespace App\Http\Controllers;
\`\`\`
- 信息块，=info xx
- 警告块，=warn xx
- 折线图，=line 1\|100\|2\|150
- 柱状图，=bar 1\|100\|2\|150
- 饼状图，=pie Google\|100\|Twitter\|150