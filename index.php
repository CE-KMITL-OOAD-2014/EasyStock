

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
          <h2><font color=#30C8EE>Please log in before using</font></h2>
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
            </p>
            <input type="submit" name="submit" id="login_submit" value=" Login   " >&nbsp; &nbsp; <a href="register.php">Register</a> 
          </form>   
          <form action="index.php" >  
            <br>

            <input type="submit" name="logOut" id="logout_submit" value=" Logout " /> </form>
            <br>
          </div>
        </div>
        <div class="content">
          <h2>Your stock</h2>

          <?php
          include "Person.php";
          include "Product.php";
          include "Database.php"; 

          /*** register ***/
          if(isset($_GET["submitReg"])){

                            // check 
            if(isAlreadyHavePerson($username)==1)print "<br><br>************** This username has been publish **************<br><br>";
            else{  

                            //database connection   
             $conn=mysql_connect("rp6150mnf8.database.windows.net,1433","mrmidnight","A1525125625a")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
             mysql_select_db("easystock",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");

                            //insert to database
             fncInsertRecord("person","code1","1111");
             fncUpdateRecord("person","user='$username'","code1=1111");
             fncUpdateRecord("person","password='$password'","code1=1111");

             mysql_close($conn); }}

             /*** add ***/
             if(isset($_GET["submitAdd"])){
              if(isAlreadyHaveProduct($code)==1)print "<br><br>************** This product code has been publish **************<br><br>";
              else{
                $conn=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
                mysql_select_db("easystock",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");
                
                $profit=$price-$cost;
                fncInsertRecord("product","code",$code);
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
                
                            //update person
                $rsPerson=fncSelectRecord("person","user LIKE '$username%' AND password LIKE '$password%'");
                
                $strSQL="UPDATE person";
                if($rsPerson[code1]=="0"or$rsPerson[code1]=="1111")$strSQL=$strSQL." SET code1='$code'";
                elseif($rsPerson[code2]=="0")$strSQL=$strSQL." SET code2='$code'";
                elseif($rsPerson[code3]=="0")$strSQL=$strSQL." SET code3='$code'";
                elseif($rsPerson[code4]=="0")$strSQL=$strSQL." SET code4='$code'";
                elseif($rsPerson[code5]=="0")$strSQL=$strSQL." SET code5='$code'";
                elseif($rsPerson[code6]=="0")$strSQL=$strSQL." SET code6='$code'";
                elseif($rsPerson[code7]=="0")$strSQL=$strSQL." SET code7='$code'";
                elseif($rsPerson[code8]=="0")$strSQL=$strSQL." SET code8='$code'";
                elseif($rsPerson[code9]=="0")$strSQL=$strSQL." SET code9='$code'";
                elseif($rsPerson[code10]=="0")$strSQL=$strSQL." SET code10='$code'";                            

                $strSQL=$strSQL." WHERE user='$username'";
                mysql_query($strSQL,$conn) or die("ไม่สามารถเปรับปรุงข้อมูล");
                $strSQL="SELECT*FROM person";
                $result=mysql_query($strSQL,$conn);
                mysql_close($conn);  }}   

                /*** remove ***/
                if(isset($_GET["submitRemove"])){

                            //check     
                  if(isAlreadyHaveProduct($productCode)==0)print "<br><br>**************  Input wrong product code **************<br><br><br>"; 
                  else{  
                    if(isOwner($productCode,$username,$password)==0)print "<br><br>**************  This isn't your product code **************<br><br><br>"; 
                    else{ 

                            //database conection
                      $conn=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
                      mysql_select_db("easystock",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");

                            //set code=0 in person database
                      fncUpdateRecord("person","code1=0","code1='$productCode'"); 
                      fncUpdateRecord("person","code2=0","code2='$productCode'"); 
                      fncUpdateRecord("person","code3=0","code3='$productCode'"); 
                      fncUpdateRecord("person","code4=0","code4='$productCode'"); 
                      fncUpdateRecord("person","code5=0","code5='$productCode'"); 
                      fncUpdateRecord("person","code6=0","code6='$productCode'"); 
                      fncUpdateRecord("person","code7=0","code7='$productCode'"); 
                      fncUpdateRecord("person","code8=0","code8='$productCode'"); 
                      fncUpdateRecord("person","code9=0","code9='$productCode'"); 
                      fncUpdateRecord("person","code10=0","code10='$productCode'");

                            //edit code=0 and save code into lastcode for restore
                      fncUpdateRecord("product","lastCode='$productCode'","code='$productCode'"); 
                      fncUpdateRecord("product","code=0","code='$productCode'");                           
                      
                      mysql_close($conn); }}}


                      /*** recieve ***/
                      if(isset($_GET["submitRecieve"])){  

                            //check                               
                        if(isAlreadyHaveProduct($productCode)==0)print "<br><br>**************  Input wrong product code **************<br><br><br>"; 
                        else{  
                          if(isOwner($productCode,$username,$password)==0)print "<br><br>**************  This isn't your product code **************<br><br><br>"; 
                          else{   

                            //database connection                          
                            $conn=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
                            mysql_select_db("easystock",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");  

                            //load product form database
                            $rs=fncSelectRecord("product","code LIKE '$productCode%'");
                            
                            //Set value to class 
                            $productSell=new Product();
                            $productSell->setAmount($rs[amount]+$amount);

                            $amountRecieve=$productSell->getAmount();

                            //update detail to database  
                            fncUpdateRecord("product","amount='$amountRecieve'","code='$productCode'");                                                
                            
                            mysql_close($conn);  }}}



                            /*** sell ***/
                            if(isset($_GET["submitSell"])){  

                            //check   
                              if(isAlreadyHaveProduct($productCode)==0)print "<br><br>**************  Input wrong product code **************<br><br><br>"; 
                              else{  
                                if(isOwner($productCode,$username,$password)==0)print "<br><br>**************  This isn't your product code **************<br><br><br>"; 
                                else{   

                            //database connection               
                                  $conn=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
                                  mysql_select_db("easystock",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");   

                            //load product form database
                                  $rs=fncSelectRecord("product","code LIKE '$productCode%'");
                                  
                            //Set value to class then use function sell() to calculate
                                  $productSell=new Product();
                                  $productSell->setAmount($rs[amount]); 
                                  $productSell->setCost($rs[cost]);
                                  $productSell->setPrice($rs[price]);
                                  $productSell->setSale($rs[sale]);
                                  $productSell->sell($amount);                                                      
                                  
                                  $amountSell=$productSell->getAmount();
                                  $saleSell=$productSell->getSale(); 

                            //update detail to database 
                                  fncUpdateRecord("product","amount='$amountSell'","code='$productCode'");  
                                  fncUpdateRecord("product","sale='$saleSell'","code='$productCode'");                     
                                  
                                  mysql_close($conn);  }}} 


                                  /*** Home ***/

                            //database connection
                                  $conn=mysql_connect("rp6150mnf8.database.windows.net,1433","mrmidnight","A1525125625a"); 
                                  mysql_select_db("easystock",$conn); 

                            //scan user by username and password                             
                                  $resultPerson=mysql_query("SELECT*FROM person WHERE user LIKE '$username%' AND password LIKE '$password%'",$conn)or die("กรุณาล๊อกอินด้วยรหัสผ่านที่ถูกต้อง");
                                  $rsPerson=mysql_fetch_array($resultPerson)or die("กรุณากรอกรหัสผ่านที่ถูกต้อง");

                            //insert to class
                                  $person=new Person();
                                  $person->setUser($rsPerson[user]);
                                  $person->setPassword($rsPerson[password]);

                                  if($rsPerson[code1]!="0")$person->addProduct($rsPerson[code1]);
                                  if($rsPerson[code2]!="0")$person->addProduct($rsPerson[code2]);
                                  if($rsPerson[code3]!="0")$person->addProduct($rsPerson[code3]);
                                  if($rsPerson[code4]!="0")$person->addProduct($rsPerson[code4]);
                                  if($rsPerson[code5]!="0")$person->addProduct($rsPerson[code5]);
                                  if($rsPerson[code6]!="0")$person->addProduct($rsPerson[code6]);
                                  if($rsPerson[code7]!="0")$person->addProduct($rsPerson[code7]);
                                  if($rsPerson[code8]!="0")$person->addProduct($rsPerson[code8]);
                                  if($rsPerson[code9]!="0")$person->addProduct($rsPerson[code9]);
                                  if($rsPerson[code10]!="0")$person->addProduct($rsPerson[code10]);
                                  
                            //represent loop
                                  for($i=0;$i<=$person->getNumproduct()-1;$i++){                              
                                    $code=$person->getProduct($i); 

                            //search product in database                             
                                    $rs=fncSelectRecord("product","code LIKE '$code%'");

                                    print "Product ".(int)($i+1)."<br><br>";

                            //general
                                    print "Name : ".$rs[name]."<br>";print "Code : ".$rs[code]."<br>";print "Quantity : ".$rs[amount]."<br>";print "Unit quantity : ".$rs[unitAmount]."<br>";
                                    print "NetWeight : ".$rs[netWeight]."<br>";print "Unit netweight : ".$rs[unitWeight]."<br>";

                            //finance
                                    print "Currency : ".$rs[currency]."<br>";print "Cost : ".$rs[cost]."<br>";print "Sale price : ".$rs[price]."<br>";print "Profit : ".$rs[profit]."<br>";
                                    print "Sales amount : ".$rs[sale]."<br>";

                            //feature
                                    print "Hierarchy : ".$rs[hierarchy]."<br>";print "Certificate : ".$rs[certificate]."<br>";print "Expire : ".$rs[expire]."<br>";print "Authorization : ".$rs[authorization]."<br>";

                            //logistic
                                    print "Order lead time : ".$rs[orderLeadTime]."<br>";print "Unit order lead time : ".$rs[unitOrderLeadTime]."<br>";print "Minimum Packing : ".$rs[minimumPacking]."<br>";
                                    print "Minimum order : ".$rs[minimumOrder]."<br>";print "Payment term : ".$rs[paymentTerm]."<br>";
                                    print "Location : ".$rs[allocation]."<br><br><br>"; }   

                                    mysql_close($conn);

                                    


                                    

                                    function isOwner($code,$username,$password){
                                      $conn=mysql_connect("localhost","root","password"); 
                                      mysql_select_db("easystock",$conn);
                                      $resultPerson=mysql_query("SELECT*FROM person WHERE user LIKE '$username%' AND password LIKE '$password%'",$conn);
                                      $rsPerson=mysql_fetch_array($resultPerson);

                                      
                                      if($rsPerson[code1]==$code)return 1;
                                      elseif($rsPerson[code2]==$code)return 1;
                                      elseif($rsPerson[code3]==$code)return 1;
                                      elseif($rsPerson[code4]==$code)return 1;
                                      elseif($rsPerson[code5]==$code)return 1;
                                      elseif($rsPerson[code6]==$code)return 1;
                                      elseif($rsPerson[code7]==$code)return 1;
                                      elseif($rsPerson[code8]==$code)return 1;
                                      elseif($rsPerson[code9]==$code)return 1;
                                      elseif($rsPerson[code10]==$code)return 1;
                                      else return 0;                          

                                      mysql_close($conn); }

                                      function isAlreadyHavePerson($username){
                                        $conn=mysql_connect("localhost","root","password"); 
                                        mysql_select_db("easystock",$conn);
                                        $resultPerson=mysql_query("SELECT*FROM person WHERE user LIKE '$username%'",$conn);
                                        $rsPerson=mysql_fetch_array($resultPerson);
                                        if($rsPerson[user]==$username)return 1;                             
                                        else return 0;                          

                                        mysql_close($conn);
                                        
                                        
                                      }


                                      function isAlreadyHaveProduct($code){
                                        $conn=mysql_connect("localhost","root","password"); 
                                        mysql_select_db("easystock",$conn);
                                        $rs=fncSelectRecord("product","code LIKE '$code%'");
                                        if($rs[code]!=$code)return 0;
                                        else return 1;
                                        mysql_close($conn);
                                        
                                        
                                      }
                                      ?>



                                    </div>
                                  </div>
                                  <div id="scroll">
                                    <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
                                  </div>
                                  <footer>
                                    <p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
                                    <p><a href="index.php?<? echo "username=$username&password=$password"; ?>">Home</a> | <a href="add.php?<? echo "username=$username&password=$password"; ?>">Add</a> | <a href="edit.php?<? echo "username=$username&password=$password"; ?>">Edit</a> | <a href="remove.php?<? echo "username=$username&password=$password"; ?>">Remove</a>|<a href="recieve.php?<? echo "username=$username&password=$password"; ?>">Recieve</a>  |<a href="sell.php?<? echo "username=$username&password=$password"; ?>">Sell</a> | <a href="contact.php?<? echo "username=$username&password=$password"; ?>">Contact Us</a></p>
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