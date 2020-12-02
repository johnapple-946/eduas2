<?php
	//header('Location: https://www.eduas.ro/moodle/index.php');
?>
<!DOCTYPE html>
<html>
  <!--
    Modified from the Debian original for Ubuntu
    Last updated: 2016-11-16
    See: https://launchpad.net/bugs/1288690
  -->
  <head>
  <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Proiectul MateBV</title>
    <style>

    html
    {
      background:linear-gradient(to bottom right,#FF5F6D, #FFC371);
      background-attachment:fixed;
      height:100%;
    }

    *
    {
      margin:0;
      border:0;
      padding:0;
    }

    a.backgroundDegrade
    {
      background:url('degrade.png');
      background-size:100%;
      position:absolute;
      width:30%;
      height:60px;
      text-align:center;
      text-decoration: none;
      color:Black;
      padding-top:20px;
      font-family:'EB Garamond'; 
      font-size:27px;
    }

    a.prSt
    {
      margin-left:0%;
      animation-name:prSt;
      animation-duration:4s;
    }

    a.prFront
    {
      margin-left:35.5%;
      animation-name:prFront;
      animation-duration:6s;
    }

    a.prDr
    {
      margin-left:70%;
      animation-name:prDr;
      animation-duration:4s;
    }

    img.footerBvFront
    {
      animation-name:anim1;
      animation-duration:4s;
      animation-delay:0;
    }

    h1.titluFr
    {
      animation-name:titluFr;
      animation-duration:6s;
    }

    @keyframes anim1
    {
      0% 
      {
        transform: translateX(-100vw);
      }
    
      100% 
      {
        transform: translateX(0);
      }
    }
    
    @keyframes prSt
    {
      0% 
      {
        transform: translateX(-150vw);
      }
    
      100% 
      {
        transform: translateX(0);
      }
    }

    @keyframes prDr
    {
      0% 
      {
        transform: translateX(200vw);
      }
    
      100% 
      {
        transform: translateX(0);
      }
    }

    @keyframes prFront
    {
      0% 
      {
        opacity:0;
      }
    
      100% 
      {
        opacity:1;
      }
    }

    @keyframes titluFr
    {
      0% 
      {
        opacity:0;
      }
    
      100% 
      {
        opacity:1;
      }
    }

    </style>
  </head>
  
  <body>
  <h1 class="titluFr" style="font-family:'Great Vibes'; font-size:100px;text-align:center; padding-top: 20px;">MateBV</h1>
  <a class="backgroundDegrade prSt" href="moodle">Spre moodle >> </a>
  <a class="backgroundDegrade prFront" href="moodle">Accesati moodle</a>
  <a class="backgroundDegrade prDr" href="moodle">Intrati aici pentru moodle</a>

  <div>
  <img class="footerBvFront" style="position:absolute; bottom:0; margin:0; padding:0; border:0; width:100%;" src="footer.png"/>
  </div>
  </body>
</html>

