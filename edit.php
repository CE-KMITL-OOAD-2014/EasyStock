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
           <form action="edit.php" method="get">  

               <p><span>User Name:</span>
                 
                              <input type="text" id="username" name="username" class="login_input" placeholder="username" value=<? echo $_GET["username"];?> >
                            </p>
                            <p><span>Password:</span>
                            <input type="password" id="password" name="password" class="login_input" placeholder="password" value=<? echo $_GET["password"];?> >
                            </p><br><br>
                            
        </div>
      </div>
      <div class="content">
   
      
        <h2>Select product</h2><br>
       
         <p><span>Product code:</span>
                            
                            <input type="text" id="username" name="productCode"  value=<?  if(isset($_GET["submitProductCode"]))echo $_GET["productCode"];?>>
                            </p>
                            <input type="submit" name="submitProductCode" value=" Submit Code ">
                            <br><br>
                            
                               <?php 
                               
                               //load data
            if(isset($_GET["submitProductCode"])or isset($_GET["submitEdit"])){
                             
         $conn=mysql_connect("localhost","root","password"); 
                            mysql_select_db("easystock",$conn);
         $rs=fncSelectRecord("product","code LIKE '$productCode%'");                                  
            }   
            ////edit
               if(isset($_GET["submitEdit"])){
                              if(isAlreadyHaveProduct($code)==1&&$code!=$productCode)print "<br><br>**************  This product code has been publish **************<br><br><br>";
                                else{
                            $conn=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
                            mysql_select_db("easystock",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");                        
                            $profit=$price-$cost; 
                            //find user in database
                            $resultPerson=mysql_query("SELECT*FROM person WHERE user LIKE '$username%' AND password LIKE '$password%'",$conn);
                            $rsPerson=mysql_fetch_array($resultPerson);
                            //Update product primary key at person database
                             $strSQL="UPDATE person";
                             if($rsPerson[code1]==$productCode)$strSQL=$strSQL." SET code1='$code'";
                             elseif($rsPerson[code2]==$productCode)$strSQL=$strSQL." SET code2='$code'";
                             elseif($rsPerson[code3]==$productCode)$strSQL=$strSQL." SET code3='$code'";
                             elseif($rsPerson[code4]==$productCode)$strSQL=$strSQL." SET code4='$code'";
                             elseif($rsPerson[code5]==$productCode)$strSQL=$strSQL." SET code5='$code'";
                             elseif($rsPerson[code6]==$productCode)$strSQL=$strSQL." SET code6='$code'";
                             elseif($rsPerson[code7]==$productCode)$strSQL=$strSQL." SET code7='$code'";
                             elseif($rsPerson[code8]==$productCode)$strSQL=$strSQL." SET code8='$code'";
                             elseif($rsPerson[code9]==$productCode)$strSQL=$strSQL." SET code9='$code'";
                             elseif($rsPerson[code10]==$productCode)$strSQL=$strSQL." SET code10='$code'";  
                            $strSQL=$strSQL." WHERE user='$username'";
                            mysql_query($strSQL,$conn) or die("ไม่สามารถเปรับปรุงข้อมูล");
                            $strSQL="SELECT*FROM person";
                            $result=mysql_query($strSQL,$conn);
                            //Update all detail product
                           fncUpdateRecord("product","code='$code'","code='$productCode'");
                           fncUpdateRecord("product","name='$name'","code='$code'");
                           fncUpdateRecord("product","amount='$amount'","code='$code'");
                           fncUpdateRecord("product","unitAmount='$unitAmount'","code='$code'");
                           fncUpdateRecord("product","netWeight='$netWeight'","code='$code'");
                           fncUpdateRecord("product","unitWeight='$unitNetWeight'","code='$code'");

                           fncUpdateRecord("product","currency='$currency'","code='$code'");
                           fncUpdateRecord("product","cost='$cost'","code='$code'");
                           fncUpdateRecord("product","price='$price'","code='$code'");
                           fncUpdateRecord("product","profit='$profit'","code='$code'");
                           fncUpdateRecord("product","sale='$sale'","code='$code'");

                           fncUpdateRecord("product","hierarchy='$hierarchy'","code='$code'");
                           fncUpdateRecord("product","certificate='$certificate'","code='$code'");
                           fncUpdateRecord("product","expire='$expire'","code='$code'");
                           fncUpdateRecord("product","authorization='$authorization'","code='$code'");

                           fncUpdateRecord("product","orderLeadTime='$orderLeadTime'","code='$code'");
                           fncUpdateRecord("product","unitOrderLeadTime='$unitOrderLeadTime'","code='$code'");
                           fncUpdateRecord("product","minimumPacking='$minimumPacking'","code='$code'");
                           fncUpdateRecord("product","unitMinimumPacking='$unitMinimumPacking'","code='$code'");                       
                           fncUpdateRecord("product","minimumOrder='$minimumOrder'","code='$code'");
                           fncUpdateRecord("product","paymentTerm='$paymentTerm'","code='$code'");
                           fncUpdateRecord("product","allocation='$allocation'","code='$code'");                         
                           mysql_close($conn);}}  
        
      ?>
                            

                          <h2>General</h2>
                          <p><span>Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="name" value=<?  if(isset($_GET["submitProductCode"]))echo $rs[name];?>>
                            </p>
                             <p><span>Code:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="code" value=<?  if(isset($_GET["submitProductCode"]))echo $rs[code];?>>
                            </p>
                             <p><span>Quantity:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="amount"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[amount];?>>
                            </p>
                            <p><span>Unit quantity:</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="unitAmount"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[unitAmount];?>>
                            </p>
                            <p><span>NetWeight:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="netWeight" value=<?  if(isset($_GET["submitProductCode"]))echo $rs[netWeight];?>>
                            </p>
                            <p><span>Unit NetWeight:</span>
                            <input type="text" id="username" name="unitNetWeight" value=<?  if(isset($_GET["submitProductCode"]))echo $rs[unitNetWeight];?>>
                            </p><br>  
                                                     
                             <h2>Finance</h2>

                            <p><span>Currency:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="currency"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[currency];?>>
                            </p>
                            <p><span>Cost:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="cost"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[cost];?>>
                            </p>
                            <p><span>Sale price:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="price"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[price];?>>
                            </p>
                           
                            <p><span>Sales amount:</span>
                            <input type="text" id="username" name="sale"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[sale];?>>
                            </p><br>
                             <h2>Feature</h2>

                            <p><span>Hierarchy:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="hierarchy"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[hierarchy];?>>
                            </p>
                            <p><span>Certificate:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="certificate"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[certificate];?>>
                            </p>
                            <p><span>Expire:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="expire"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[expire];?>>
                            </p>
                            <p><span>Authorization:</span>
                            <input type="text" id="username" name="authorization"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[authorization];?>>
                            </p><br>
                            <h2>Logistic</h2>
                            <p><span>Order lead time:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="orderLeadTime"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[orderLeadTime];?>>
                            </p>
                            <p><span>Unit order lead time:</span>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="unitOrderLeadTime"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[unitOrderLeadTime];?>>
                            </p>
                            <p><span>Minimum packing:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <input type="text" id="username" name="minimumPacking"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[minimumPacking];?>>
                            </p>
                           
                            <p><span>Minimum order:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="minimumOrder"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[minimumOrder];?>>
                            </p>
                            <p><span>Payment term:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="paymentTerm"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[paymentTerm];?>>
                            </p>
                            <p><span>Location:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" id="username" name="allocation"value=<?  if(isset($_GET["submitProductCode"]))echo $rs[allocation];?>>
                            <?php 
                             mysql_close($conn);

                            ?>
                            </p><br>
                            </p><br><input type="submit" name="submitEdit" value=" Submit Product ">

                            <br>
                            </form>



                            <?php 
               

  function isAlreadyHaveProduct($code){
  $conn=mysql_connect("localhost","root","password"); 
  mysql_select_db("easystock",$conn);
   $rs=fncSelectRecord("product","code LIKE '$code%'");
   if($rs[code]!=$code)return 0;
   else return 1;
   mysql_close($conn);
                           
                            
}


                          

                            /**** credit : http://www.thaicreate.com/php/php-mysql-used-function-database-query.html ****/
                            /**** function connection to database ****/

//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");

//$objDB = mysql_select_db("mydatabase");
 

/**** function insert record ****/

function fncInsertRecord($strTable,$strField,$strValue)

{

$strSQL = "INSERT INTO $strTable ($strField) VALUES ($strValue) ";

return @mysql_query($strSQL);

}

 

/**** function select record ****/

function fncSelectRecord($strTable,$strCondition)

{

$strSQL = "SELECT * FROM $strTable WHERE $strCondition ";

$objQuery = @mysql_query($strSQL);

return @mysql_fetch_array($objQuery);

}

 

/*** function update record ****/

function fncUpdateRecord($strTable,$strCommand,$strCondition)

{

$strSQL = "UPDATE $strTable SET  $strCommand WHERE $strCondition ";

return @mysql_query($strSQL);

}

 

/**** function delete record ****/

function fncDeleteRecord($strTable,$strCondition)

{

$strSQL = "DELETE FROM $strTable WHERE $strCondition ";

return @mysql_query($strSQL);

}



                            ?>
                        
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
