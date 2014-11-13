

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




                            ////edit
                            if(isset($_GET["submitEdit"])){
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
                           //fncUpdateRecord("product","code='$code'","code='$productCode'");
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
                           mysql_close($conn);}


                            ////remove
                            if(isset($_GET["submitRemove"])){

                            $conn=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
                            mysql_select_db("easystock",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");
                             $strSQL="UPDATE product";
                            $strSQL=$strSQL." SET lastCode='$productCode'";                             
                            //print $name;
                            //print $productCode;
                            $strSQL=$strSQL." WHERE code='$productCode'";
                            mysql_query($strSQL,$conn) or die("ไม่สามารถเปรับปรุงข้อมูล");
                            $strSQL="UPDATE product";
                            $strSQL=$strSQL." SET code='0'";                             
                            //print $name;
                            //print $productCode;
                            $strSQL=$strSQL." WHERE code='$productCode'";
                            mysql_query($strSQL,$conn) or die("ไม่สามารถเปรับปรุงข้อมูล");
                              //$strSQL=$strSQL." SET amount='$amountSell',sale='$saleSell'";       
                           
                            $strSQL="SELECT*FROM product";
                            $result=mysql_query($strSQL,$conn);

                            $strSQL="UPDATE person SET code1='0' WHERE code1='$productCode'";mysql_query($strSQL,$conn);$strSQL="SELECT*FROM product";               
                            $result=mysql_query($strSQL,$conn);
                            $strSQL="UPDATE person SET code2='0' WHERE code2='$productCode'";mysql_query($strSQL,$conn);$strSQL="SELECT*FROM product";               
                            $result=mysql_query($strSQL,$conn);
                            $strSQL="UPDATE person SET code3='0' WHERE code3='$productCode'";mysql_query($strSQL,$conn);$strSQL="SELECT*FROM product";               
                            $result=mysql_query($strSQL,$conn);
                            $strSQL="UPDATE person SET code4='0' WHERE code4='$productCode'";mysql_query($strSQL,$conn);$strSQL="SELECT*FROM product";               
                            $result=mysql_query($strSQL,$conn);
                            $strSQL="UPDATE person SET code5='0' WHERE code5='$productCode'";mysql_query($strSQL,$conn);$strSQL="SELECT*FROM product";               
                            $result=mysql_query($strSQL,$conn);
                            $strSQL="UPDATE person SET code6='0' WHERE code6='$productCode'";mysql_query($strSQL,$conn);$strSQL="SELECT*FROM product";               
                            $result=mysql_query($strSQL,$conn);
                            $strSQL="UPDATE person SET code7='0' WHERE code7='$productCode'";mysql_query($strSQL,$conn);$strSQL="SELECT*FROM product";               
                            $result=mysql_query($strSQL,$conn);
                            $strSQL="UPDATE person SET code8='0' WHERE code8='$productCode'";mysql_query($strSQL,$conn);$strSQL="SELECT*FROM product";               
                            $result=mysql_query($strSQL,$conn);
                            $strSQL="UPDATE person SET code9='0' WHERE code9='$productCode'";mysql_query($strSQL,$conn);$strSQL="SELECT*FROM product";               
                            $result=mysql_query($strSQL,$conn);
                            $strSQL="UPDATE person SET code10='0' WHERE code10='$productCode'";mysql_query($strSQL,$conn);$strSQL="SELECT*FROM product";               
                            $result=mysql_query($strSQL,$conn);mysql_close($conn);

                        }


                             ////recieve
                            if(isset($_GET["submitRecieve"])){                              
                            $conn=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
                            mysql_select_db("easystock",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");                            
                            //load
                            $result=mysql_query("SELECT*FROM product WHERE code LIKE '$productCode%'",$conn);
                            $rs=mysql_fetch_array($result);
                            //Set value to class then use function sell() to calculate
                            $productSell=new Product();
                            $productSell->setAmount($rs[amount]+$amount); 
                            //$productSell->setCost($rs[cost]);
                            //$productSell->setPrice($rs[price]);
                            //$productSell->setSale($rs[sale]);
                            //$productSell->sell($amount);                          
                            //update detail to database
                            $amountRecieve=$productSell->getAmount();
                            //$saleSell=$productSell->getSale();                        
                            $strSQL="UPDATE product";
                            $strSQL=$strSQL." SET amount='$amountRecieve'";                            
                            $strSQL=$strSQL." WHERE code='$productCode'";
                            mysql_query($strSQL,$conn) or die("ไม่สามารถเปรับปรุงข้อมูล");
                            $strSQL="SELECT*FROM product";
                            $result=mysql_query($strSQL,$conn);
                            mysql_close($conn);}



                            ////sell
                            if(isset($_GET["submitSell"])){                              
                            $conn=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
                            mysql_select_db("easystock",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");                            
                            //load
                            $result=mysql_query("SELECT*FROM product WHERE code LIKE '$productCode%'",$conn);
                            $rs=mysql_fetch_array($result);
                            //Set value to class then use function sell() to calculate
                            $productSell=new Product();
                            $productSell->setAmount($rs[amount]); 
                            $productSell->setCost($rs[cost]);
                            $productSell->setPrice($rs[price]);
                            $productSell->setSale($rs[sale]);
                            $productSell->sell($amount);                          
                            //update detail to database
                            $amountSell=$productSell->getAmount();
                            $saleSell=$productSell->getSale();                        
                            $strSQL="UPDATE product";
                            $strSQL=$strSQL." SET amount='$amountSell',sale='$saleSell'";                            
                            $strSQL=$strSQL." WHERE code='$productCode'";
                            mysql_query($strSQL,$conn) or die("ไม่สามารถเปรับปรุงข้อมูล");
                            $strSQL="SELECT*FROM product";
                            $result=mysql_query($strSQL,$conn);
                            mysql_close($conn);}


                            
                              ////register
                            if(isset($_GET["submitReg"])){

                             $conn=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
                            mysql_select_db("easystock",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");
                          
                           
                           fncInsertRecord("person","code1","5555");
                            fncUpdateRecord("person","user='$username'","code1=5555");
                           fncUpdateRecord("person","password='$password'","code1=5555");
                           mysql_close($conn);

                        }







                            ////add
                            if(isset($_GET["submitAdd"])){
                            $conn=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
                            mysql_select_db("easystock",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");
                           // $strSQL="INSERT INTO product(name,code,amount,unitAmount,netWeight,unitWeight,currency,cost,price,sale,hierarchy,certificate,expire,authorization,orderLeadTime,unitOrederLeadTime,minimumPacking,unitMinimumPacking,minimumOrder,paymentTerm,allocation)";
                          // $strSQL=$strSQL." VALUES('$name','$code','$amount','$unitAmount','$netWeight','$unitNetWeight','$currency','$cost','$price','$sale','$hierarchy','$certificate','$expire','$authorization','$orderLeadTime','$unitOrederLeadTime','$minimumPacking','$unitMinimumPacking','$minimumOrder','$paymentTerm','$allocation')";
                           // $strSQL="INSERT INTO product(name,code,amount,unitAmount,netWeight,unitWeight,currency,cost,price,profit,sale,hierarchy,certificate,expire,authorization,orderLeadTime,unitOrderLeadTime,minimumPacking,unitMinimumPacking,minimumOrder,paymentTerm,allocation)";
                            //$strSQL=$strSQL." VALUES('$name','$code','$amount','$unitAmount','$netWeight','$unitNetWeight','$currency','$cost','$price','$sale','$hierarchy','$certificate','$expire','$authorization','$orderLeadTime','$unitOrderLeadTime','$minimumPacking','$unitMinimumPacking','$minimumOrder','$unitMinimumPacking','$minimumOrder','$paymentTerm','$allocation')";
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
                        
                              


                                              

                            //mysql_query($strSQL,$conn) or die("ไม่สามารถเพิ่มข้อมูล");

                            //update person
                             $resultPerson=mysql_query("SELECT*FROM person WHERE user LIKE '$username%' AND password LIKE '$password%'",$conn);
                            $rsPerson=mysql_fetch_array($resultPerson);

                             $strSQL="UPDATE person";
                             if($rsPerson[code1]=="0"or$rsPerson[code1]=="5555")$strSQL=$strSQL." SET code1='$code'";
                             elseif($rsPerson[code2]=="0")$strSQL=$strSQL." SET code2='$code'";
                             elseif($rsPerson[code3]=="0")$strSQL=$strSQL." SET code3='$code'";
                             elseif($rsPerson[code4]=="0")$strSQL=$strSQL." SET code4='$code'";
                             elseif($rsPerson[code5]=="0")$strSQL=$strSQL." SET code5='$code'";
                             elseif($rsPerson[code6]=="0")$strSQL=$strSQL." SET code6='$code'";
                             elseif($rsPerson[code7]=="0")$strSQL=$strSQL." SET code7='$code'";
                             elseif($rsPerson[code8]=="0")$strSQL=$strSQL." SET code8='$code'";
                             elseif($rsPerson[code9]=="0")$strSQL=$strSQL." SET code9='$code'";
                             elseif($rsPerson[code10]=="0")$strSQL=$strSQL." SET code10='$code'";
                            
                            //print $name;
                            //print $productCode;
                             $strSQL=$strSQL." WHERE user='$username'";
                            mysql_query($strSQL,$conn) or die("ไม่สามารถเปรับปรุงข้อมูล");
                            $strSQL="SELECT*FROM person";
                            $result=mysql_query($strSQL,$conn);
                            mysql_close($conn);}

                                


                            ////represent
                            $conn=mysql_connect("localhost","root","password"); 
                            mysql_select_db("easystock",$conn);
                            //$result = mysql_query("SELECT * FROM uoc_std WHERE STD_FNAME LIKE '$_POST[keyword]%'  OR STD_LNAME LIKE '$_POST[keyword]%'");
                            
                            $resultPerson=mysql_query("SELECT*FROM person WHERE user LIKE '$username%' AND password LIKE '$password%'",$conn)or die("กรุณาล๊อกอินด้วยรหัสผ่านที่ถูกต้อง");
                            $rsPerson=mysql_fetch_array($resultPerson)or die("กรุณากรอกรหัสผ่านที่ถูกต้อง");
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
                            //print $person->getNumproduct()."<br>";

                            for($i=0;$i<=$person->getNumproduct()-1;$i++){                              
                              $code=$person->getProduct($i);
                              
                            //$result=mysql_query("SELECT*FROM product WHERE code LIKE '$code%'",$conn);
                            //$rs=mysql_fetch_array($result);
                              
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
                            print "Location : ".$rs[allocation]."<br><br><br>";                         
                        }          
                            mysql_close($conn);





                            /*

                            include "Product.php";
                            $odj=new Product();
                            $odj->setName($_GET["name"]);
                            $odj->setCode($_POST["code"]);
                            $odj->setAmount($_POST["amount"]);
                            $odj->setunitAmount($_POST["unitAmount"]);
                            $odj->setNetWeight($_POST["netWeight"]);
                            $odj->setUnitNetWeight($_POST["unitNetWeight"]);

                            $odj->setCurrency($_POST["currency"]);
                            $odj->setCost($_POST["cost"]);
                            $odj->setPrice($_POST["price"]);
                            //$odj->setProfit($_POST["profit"]);
                            $odj->setSale($_POST["sale"]);

                            $odj->setHierarchy($_POST["hierarchy"]);
                            $odj->setCertificate($_POST["certificate"]);
                            $odj->setExpire($_POST["expire"]);
                            $odj->setAuthorization($_POST["authorization"]);
                            $odj->setOrderLeadTime($_POST["orderLeadTime"]);
                            $odj->setUnitOrderLeadTime($_POST["unitOrederLeadTime"]);
                            $odj->setMinimumPacking($_POST["minimumPacking"]);
                            $odj->setUnitMinimumPacking($_POST["unitMinimumPacking"]);
                            $odj->setMinimumOrder($_POST["minimumOrder"]);
                            $odj->setPaymentTerm($_POST["paymentTerm"]);
                            $odj->setAllocation($_POST["allocation"]);

                            $odj->printAll();
                            */








                            
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