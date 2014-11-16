<!doctype html>
<html>

<head>
  <title>easy stock</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables html5 elements and feature detects -->
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
          <h1><a href="index.php?<? echo "username=$username&password=$password"; ?>">welcome to <span class="logo_colour">easystock</span></a></h1>
          <h2>warehouse management website</h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
           
            <li><a href="index.php?<? echo "username=$username&password=$password"; ?>">home</a></li>
            <li><a href="add.php?<? echo "username=$username&password=$password"; ?>">add</a></li>
            <li><a href="edit.php?<? echo "username=$username&password=$password"; ?>">edit</a></li>
            <li><a href="remove.php?<? echo "username=$username&password=$password"; ?>">remove</a></li>
            <li><a href="recieve.php?<? echo "username=$username&password=$password"; ?>">recieve</a>
              <li><a href="sell.php?<? echo "username=$username&password=$password"; ?>">sell</a>
                
               
              </li>
              <li><a href="contact.php?<? echo "username=$username&password=$password"; ?>">contact us</a></li>
            </ul>
          </div>
        </nav>
      </header>
      <div id="site_content">
        <div id="sidebar_container">     
          
          <div class="sidebar">
            <h3>client login</h3>

            <form action="index.php" method="get">  
              

             <p><span>user name:</span> 
               
              <input type="text" id="username" name="username" class="login_input" placeholder="username" value=<? echo $_get["username"];?> >
            </p>
            <p><span>password:</span>
              <input type="password" id="password" name="password" class="login_input" placeholder="password" value=<? echo $_get["password"];?> >
            </p>
            
            
            <br><br>

            
            
            
            
          </div>
        </div>
        <div class="content">

          
          
         <h2>general</h2>
         <p><span>name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="name"/>
        </p>
        <p><span>code:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" placeholder="except 0 or blank" name="code" />
        </p>
        <p><span>quantity:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="amount"/>
        </p>
        <p><span>unit quantity:</span>&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="unitamount"/>
        </p>
        <p><span>netweight:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="netweight"/>
        </p>
        <p><span>unit netweight:</span>
          <input type="text" id="username" name="unitnetweight"/>
        </p><br>  
        
        <h2>finance</h2>

        <p><span>currency:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="currency"/>
        </p>
        <p><span>cost:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="cost"/>
        </p>
        <p><span>sale price:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="price"/>
        </p>
        
        <p><span>sales amount:</span>
          <input type="text" id="username" name="sale"/>
        </p><br>
        <h2>feature</h2>

        <p><span>hierarchy:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="hierarchy"/>
        </p>
        <p><span>certificate:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="certificate"/>
        </p>
        <p><span>expire:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="expire"/>
        </p>
        <p><span>authorization:</span>
          <input type="text" id="username" name="authorization"/>
        </p><br>
        <h2>logistic</h2>
        <p><span>order lead time:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="orderleadtime"/>
        </p>
        <p><span>unit order lead time:</span>&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" id="username" name="unitorderleadtime"/>
        </p>
        <p><span>minimum packing:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="text" id="username" name="minimumpacking"/>
       </p>       
       <p><span>minimum order:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="username" name="minimumorder"/>
      </p>
      <p><span>payment term:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="username" name="paymentterm"/>
      </p>
      <p><span>location:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="username" name="allocation"/>
      </p><br>
      <input type="submit" name="submitadd" value=" submit product ">

      <br>                            
      
    </form>

  </div>
</div>
<div id="scroll">
  <a title="scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
</div>
<footer>
  <p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
  <p><a href="index.php?<? echo "username=$username&password=$password"; ?>">home</a> | <a href="add.php?<? echo "username=$username&password=$password"; ?>">add</a> | <a href="edit.php?<? echo "username=$username&password=$password"; ?>">edit</a> | <a href="remove.php?<? echo "username=$username&password=$password"; ?>">remove</a> |<a href="recieve.php?<? echo "username=$username&password=$password"; ?>">recieve</a> |<a href="sell.php?<? echo "username=$username&password=$password"; ?>">sell</a> | <a href="contact.php?<? echo "username=$username&password=$password"; ?>">contact us</a></p>
  <p>copyright &copy; photo_blurred3 | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
</footer>
</div>
<!-- javascript at the bottom for fast page loading -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
<script type="text/javascript" src="js/jquery.sooperfish.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('ul.sf-menu').sooperfish();
    $('.top').click(function() {$('html, body').animate({scrolltop:0}, 'fast'); return false;});
  });
</script>
</body>
</html>
