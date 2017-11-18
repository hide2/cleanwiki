<?php
/////////////////////////// 设置文档标题、作者、email
$title = '《How to Start a Startup》YC CS183B';
$author = '犀利哥';
$email = '23771066@qq.com';

require __DIR__.'/../_header.php';

/////////////////////////// 文档内容开始
$md = <<<SSS
# 课程地址
-------------------------
https://startupclass.co/
http://open.163.com/special/opencourse/startup.html
  
# 课程列表
-------------------------
- # Why you should start a startup - Dustin Moskovitz
=blue The Best Reason: You Can't Not Do It
    - Passion: You need to do it
You'll need passion to endure The Struggle
You'll need passion to effectively recruit
    - Aptitude: The world needs you to do it
        - The world needs it
Otherwise do something that the world needs
        - The world needs you
It's bad for the world if you just outcompete a team with more aptitude
The world needs you somewhere - find where

- # Ideas, Products, Teams and Execution - Sam Altman

- # Counterintuitive Parts of Startups, and How to Have Ideas - Paul Graham
- # Building Product, Talking to Users, and Growing - Adora Cheung
- # Business Strategy and Monopoly Theory - Peter Thiel
- # Growth - Alex Schultz
- # How to Build Products Users Love I - Kevin Hale
- # Doing Things That Don't Scale, PR, and How to Get Started - Walker Williams
- # How to Raise Money - Marc Andreessen
- # Company Culture and Building a Team I - Alfred Lin
- # Company Culture and Building a Team II - Patrick Collison
- # Sales and Marketing - Aaron Levie
- # How To Be A Great Founder - Reid Hoffman
- # How to Operate - Keith Rabois
- # How to Manage - B Horowitz
- # How to Run a User Interview - Emmett Shear
- # How to Build Products Users Love II - Hosain Rahman
- # Mechanics--Legal, Finance, HR, etc. - Kirsty Nathoo
- # Sales and Marketing, How to Pitch, and Investor Meeting Roleplaying - Tyler Bosmeny
- # Closing Thoughts and Later-Stage Advice - Sam Altman
  
2017.11.18

SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>
