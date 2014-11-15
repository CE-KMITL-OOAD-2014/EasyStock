<!DOCTYPE HTML>
<html>
<head>
  <title>Easy Stock</title>
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
          <h1><a href="index.php?<? echo "username=$username&password=$password"; ?>">Welcome to <span class="logo_colour">EasyStock</span></a></h1>
          <h2>Warehouse management website</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            
            <li><a href="index.php?<? echo "username=$username&password=$password"; ?>">Home</a></li>
            <li><a href="add.php?<? echo "username=$username&password=$password"; ?>">Add</a></li>
            <li><a href="edit.php?<? echo "username=$username&password=$password"; ?>">Edit</a></li>
            <li><a href="remove.php?<? echo "username=$username&password=$password"; ?>">Remove</a></li>
            <li><a href="recieve.php?<? echo "username=$username&password=$password"; ?>">Recieve</a>
              <li><a href="sell.php?<? echo "username=$username&password=$password"; ?>">Sell</a>       
               
              </li>
              <li><a href="contact.php?<? echo "username=$username&password=$password"; ?>">Contact Us</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <div id="site_content">
        <div id="sidebar_container">     
          
          <div class="sidebar">
            <h3>Client login</h3>
            <form action="index.php" method="get">   

             <p><span>User Name:</span>
               
               <input type="text" id="username" name="username" class="login_input" placeholder="username" value=<? echo $_GET["username"];?> >
             </p>
             <p><span>Password:</span>
              <input type="password" id="password" name="password" class="login_input" placeholder="password" value=<? echo $_GET["password"];?> >
            </p><br><br>                       
            
          </div>
        </div>
        <div class="content">
          <h2>Select product</h2><br
          <p><span>Product code:</span>
           
           <input type="text" id="username" name="productCode"   >
         </p>
         <p><span>Quantity:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="password" name="amount"  >
        </p>                            
        <input type="submit" name="submitRecieve" value=" Submit " />
        <br><br>
      </form>
    </div>
  </div>
  <div id="scroll">
    <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
  </div>
  <footer>
    <p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
    <p><a href="index.php?<? echo "username=$username&password=$password"; ?>">Home</a> | <a href="add.php?<? echo "username=$username&password=$password"; ?>">Add</a> | <a href="edit.php?<? echo "username=$username&password=$password"; ?>">Edit</a> | <a href="remove.php?<? echo "username=$username&password=$password"; ?>">Remove</a> |<a href="recieve.php?<? echo "username=$username&password=$password"; ?>">Recieve</a> |<a href="sell.php?<? echo "username=$username&password=$password"; ?>">Sell</a> | <a href="contact.php?<? echo "username=$username&password=$password"; ?>">Contact Us</a></p>
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
