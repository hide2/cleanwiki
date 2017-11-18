<?php
/////////////////////////// 设置文档标题、作者、email
$title = '《How to Start a Startup》YC';
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
=blue 1. Why you should start a startup - Dustin Moskovitz
-------------------------
The Best Reason: `You Can't Not Do It`
    - `Passion`: You need to do it
You'll need passion to endure The Struggle
You'll need passion to effectively recruit
    - `Aptitude`: The world needs you to do it
        - The world needs it
Otherwise do something that the world needs

  
=blue 2. Ideas, Products, Teams and Execution - Sam Altman
-------------------------
=blue Ideas
The `Idea` comes first
The company should feel like an important `mission`
  
=blue Products
Build something users `love`
Talk to users
Show it to users -> `User feedback` -> Product Decisions loop
    - What do they like?
    - What would they pay for?
    - What would make them recommend it?

    Metrics: Focus on `growth`
    - Total registrations
    - Active users
    - Activity Levels
    - Cohort Retention
    - Revenue
    - Net Promoter Score

  
=blue Teams
Cofounders should be `Relentlessly Resourceful`
You are looking for co-founders that need to be unflappable, tough, know what to do in every situation, act quickly, decisive, creative, ready for anything
Know your cofounders
Try not to hire
Get the best people
Mediocre engineers do not build great companies
    - Are they smart?
    - Do they get things done?
    - Do I want to spend a lot of time around them?
    - Good communication skills
    - Manically determined
    - Pass the animal test
    - Would feel comfortable reporting to them

  
=blue 3. Counterintuitive Parts of Startups, and How to Have Ideas - Paul Graham
-------------------------

=blue 4. Building Product, Talking to Users, and Growing - Adora Cheung
-------------------------

=blue 5. Business Strategy and Monopoly Theory - Peter Thiel
-------------------------

=blue 6. Growth - Alex Schultz
-------------------------

=blue 7. How to Build Products Users Love I - Kevin Hale
-------------------------

=blue 8. Doing Things That Don't Scale, PR, and How to Get Started - Walker Williams
-------------------------

=blue 9. How to Raise Money - Marc Andreessen
-------------------------

=blue 10. Company Culture and Building a Team I - Alfred Lin
-------------------------

=blue 11. Company Culture and Building a Team II - Patrick Collison
-------------------------

=blue 12. Sales and Marketing - Aaron Levie
-------------------------

=blue 13. How To Be A Great Founder - Reid Hoffman
-------------------------

=blue 14. How to Operate - Keith Rabois
-------------------------

=blue 15. How to Manage - B Horowitz
-------------------------

=blue 16. How to Run a User Interview - Emmett Shear
-------------------------

=blue 17. How to Build Products Users Love II - Hosain Rahman
-------------------------

=blue 18. Mechanics--Legal, Finance, HR, etc. - Kirsty Nathoo
-------------------------

=blue 19. Sales and Marketing, How to Pitch, and Investor Meeting Roleplaying - Tyler Bosmeny
-------------------------

=blue 20. Closing Thoughts and Later-Stage Advice - Sam Altman
-------------------------

2017.11.18

SSS;
/////////////////////////// 文档内容结束

echo $Parsedown->text($md);

require __DIR__.'/../_footer.php';
?>
