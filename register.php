<!DOCTYPE HTML>
<html>

<head>
  <title>photo_blurred3</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
<div id="bg">
    <img src="images/background.jpg" alt="home">
</div>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Welcome to <span class="logo_colour">EasyStock</span></a></h1>
          <h2>Warehouse management website</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
           
            <li><a href="index.php">Home</a></li>
            <li><a href="add.php">Add</a></li>
            <li><a href="edit.php">Edit</a></li>
            <li><a href="remove.php">Remove</a></li>
              <li><a href="recieve.php">Recieve</a>
            <li><a href="sell.php">Sell</a>
            
             
            </li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">     
        
        <div class="sidebar">
          <h3>Client login</h3>

          
                

               <p><span>User Name:</span> 
                             
                              <input type="text" id="username" name="user" class="login_input" >
                            </p>
                            <p><span>Password:</span>
                            <input type="password" id="password" name="pass" class="login_input" >
                            </p>
                              
                            <input type="submit" name="submit" id="login_submit" value=" Login " />
                             <br><br>

                             
                            
                             
          
        </div>
      </div>
      <div class="content">

        
                                  <form action="index.php" method="get">  
                                  <br><br>
                
                            
                            <p><span>username:</span>
                            <input type="text" id="username" name="username"/>
                            </p>
                             <p><span>password:</span>
                            <input type="text" id="username" name="password" />
                            </p>
                            
                            <input type="submit" name="submitReg" value=" Submit User ">

                            <br>
                          
                             </form>

      </div>
    </div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
    <footer>
      <p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
     <p><a href="index.php">Home</a> | <a href="add.php">Add</a> | <a href="edit.php">Edit</a> | <a href="remove.php">Remove</a> |<a href="recieve.php?<? echo "username=$username&password=$password"; ?>">Recieve</a> |<a href="sell.php">Sell</a> | <a href="contact.php">Contact Us</a></p>
      <p>Copyright &copy; photo_blurred3 | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>
</body>
</html>
