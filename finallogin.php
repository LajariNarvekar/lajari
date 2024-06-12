<html>  
 <head>  
 <title>Login</title>      
 <style>            
body
{                      
margin-top: 100px;       
margin-bottom: 100px;       
margin-right: 150px;       
margin-left: 80px;       
background-color: azure ; 
color: palevioletred;       
font-family: verdana;       
font-size: 100%                  
}               
h1 
{       
color: indigo;       
font-family: verdana;       
font-size: 100%;  
}          
 h3 
{ 
 color: indigo;
       font-family: verdana; 
      font-size: 100%;  
 } 
</style>  
 </head>   
<body>        
<center>
<h1>WELCOME TO ONLINE ART GALLERY</h1>
</center>      
<p><a href="register.php">Register</a> | 
<a href="login.php">Login</a></p> 
  <center>
<h3>Login Form</h3> 
 </center>  
<form action="" method="POST">  
<legend><fieldset><center>   
 Username: <input type="text" name="user"><br><br>  
 Password: <input type="password" name="pass"><br><br> 
  <input  type="submit"  value="Login"  name="submit"  onclick="cart.php"  style="background-color: lightblue; color: darkblue" >  
 </center>
</fieldset>
</legend>
</form> 
<?php   
if(isset($_POST["submit"]))
{   
if(!empty($_POST['user']) && !empty($_POST['pass'])) 
{ 
      $user=$_POST['user'];    
   $pass=$_POST['pass']; 
    $con=mysqli_connect('localhost','root','','product2') or die(mysql_error());   
  //mysqli_select_db('product2',$con) or die("cannot select DB");    
   $query=mysqli_query($con,"SELECT  *  FROM  user  WHERE  name='".$user."'  AND password='".$pass."'") 
      //$numrows=mysqli_num_rows($query); 
     // if($numrows!=0)    
   { 
      //while($row=mysqli_fetch_assoc($query))  
     //{    
   $dbusername=$row['name'];  
     $dbpassword=$row['password']; 
      } 
}  
       if($user == $dbusername && $pass == $dbpassword)    
   {  
     session_start();  
     $_SESSION['sess_user']=$user;  
  header("Location: cart.php");      
 }       
} 
else
 {      
 echo "Invalid username or password!";      
 }  
} 
else
 {    
   echo "All fields are required!";
 }  
 }
  ?> 
  </body> 
  </html>
<html> 
  <head>   
<title>Register</title>   
    <style>        
    body
{  
     margin-top: 100px;  
     margin-bottom: 100px;   
    margin-right: 150px;    
   margin-left: 80px; 
      background-color: azure ;   
    color: palevioletred;   
    font-family: verdana;    
   font-size: 100%   
}   
            h1
 {      
 color: indigo;  
     font-family: verdana;  
     font-size: 100%; 
  }    
        h2
 {      
 color: indigo;  
     font-family: verdana; 
      font-size: 100%; 
  }
</style> 
  </head>  
 <body>  
<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
      <center><h2>Registration Form</h2></center>  
 <form action="" method="POST">    
    <legend>       <fieldset>  
 <table border="1px" cellpadding="5px" align="center" style="color: black; text-align: center; background-color: lightgrey"><br/>      
 <tr> 
<td>NAME:</td> 
        <td><input type=text name=user size=30></td>
       </tr>               
  <tr>         
<td>CONTACT:</td>        
 <td><input type=text name=contact size=30></td>   
    </tr>       
<tr>         
<td>E-MAIL:</td>       
  <td><input type=email name=email size=30></td>    
   </tr>     
  <tr>        
 <td>CITY:</td>      
   <td><input type=text name=city size=30></td>    
   </tr>     
  <tr>
<td>PASSWORD:</td>  
       <td><input type=password name=pass size=30></td>   
    </tr>     
  <tr>        
 <td><input  type=submit    value="REGISTER"  name="submit" style="background-color: white; color: darkblue"></td> 
        <td><input  type=reset  style="background-color  :  white;  color: darkblue"></td>  
</table>  
       </fieldset> 
          </legend>  
 </form>  
 <?php   
if(isset($_POST["submit"]))
{  
 if(!empty($_POST['user'])  &&  !empty($_POST['contact'])  &&  !empty($_POST['email'])  && !empty($_POST['city']) && !empty($_POST['pass']) )
 {    
   $user=$_POST['user']; 
     $num=$_POST['contact'];   
   $email=$_POST['email'];    
 $city=$_POST['city'];    
  $pass=$_POST['pass'];      
 $con=mysqli_connect('localhost','root','','product2') or die(mysql_error());  
     //mysqli_select_db('user_registration') or die("cannot select DB");    
      $query=mysqli_query($con,"SELECT * FROM user WHERE name='".$user."'");   
    $numrows=mysqli_num_rows($query);     
  if($numrows==0) 
{
 $sql="INSERT  INTO  user(name,contact,email,city,password) VALUES('$user','$num','$email','$city','$pass')"; 
          $result=mysqli_query($con,$sql); 
           if($result)
{       
echo "Account Successfully Created";      
 } 
else 
{       
echo "Failure!";
         }         
 } 
else 
{       
echo "That username already exists! Please try again with another.";    
   }     
 }
 else
 {     
  echo "All fields are required!";  
 }  
 }  
 ?>  
 </body>  
 </html> 
<?php 
 session_start(); 
$connect = mysqli_connect("localhost", "root", "", "product2");
 $tot=0; 
if(isset($_POST["add_to_cart"])) 
{   
if(isset($_SESSION["shopping_cart"])) 
  {  
   $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");    
 if(!in_array($_GET["id"], $item_array_id))  
   {  
$count = count($_SESSION["shopping_cart"]);   
    $item_array = array(        
 'item_id'      =>  $_GET["id"],     
    'item_name'      =>  $_POST["hidden_name"],   
      'item_price'    =>  $_POST["hidden_price"],   
      'item_quantity'   =>  $_POST["quantity"]       );  
     $_SESSION["shopping_cart"][$count] = $item_array; 
    }
else
{     
  echo '<script>alert("Item Already Added")</script>';
}  
 }
else
{     
$item_array = array(       
'item_id'      =>  $_GET["id"],    
   'item_name'      =>  $_POST["hidden_name"], 
      'item_price'    =>  $_POST["hidden_price"],  
'item_quantity'   =>  $_POST["quantity"]     );    
 $_SESSION["shopping_cart"][0] = $item_array;
}
} 
 if(isset($_GET["action"]))
 {
if($_GET["action"] == "delete") 
 {     
foreach($_SESSION["shopping_cart"] as $keys => $values)    
 {
if($values["item_id"] == $_GET["id"])     
  {          
unset($_SESSION["shopping_cart"][$keys]);         
echo '<script>alert("Item Removed")</script>';         
//echo '<script>window.location="cart.php"</script>'; 
}}  }} 
if(isset($_POST["submit"]))
 {   
header("Location:bill.php");   
} 
?> 
<html>
<head> 
</head>
<body> 
<h2>Welcome,
 <? php=$_SESSION['sess_user'];
?>
! <a href="logout.php">Logout</a></h2>

  <br/><br/><br/><br/>

 <h3 align="center"><title="Online Art Gallery">Online Art Gallery</h3><br /><br/><br />    
   <?php  
      
 $query = "SELECT * FROM tbl_product ORDER BY id ASC";        
 $result = mysqli_query($connect, $query);        
 if(mysqli_num_rows($result) > 0)        
 {          
 while($row = mysqli_fetch_array($result))           
{        
 ?> 
<div class="col-md-4">       
<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
 <div  style="border:1px  solid  #555;  background-color:#f2f2f2;  border-radius:5px;  padding:16px;" align="center">
 <img  src="images/<?php  echo  $row["image"];  ?>" 
 class="img-responsive"  width="200" height="200"/><br />    
         <h4><?php echo $row["name"]; ?></h4>   
          <h4><?php echo $row["price"]; ?></h4>            
 <input  type="text"  name="quantity"  value="1"  class="form-control" />    
         <input  type="hidden"  name="hidden_name"  value="<?php echo $row["name"]; ?>" />  
<input  type="hidden"  name="hidden_price"  value="<?php echo  $row["price"];  ?>"  /<input  type="submit"  name="add_to_cart"  style="margin-top:5px;"  class="btn btn-success" value="Add to Cart" />
 </div></form></div>
<?php    
}}       
?> 
    <div style="clear:both"></div> 
 <br />      
 <h3>Order Details</h3> 
      <div class="table-responsive">       
<div  style="border:1px  solid  #555;  background-color:#f2f2f2;  border-radius:5px; padding:16px;" align="center"> 
<tr>                
 <th>Item Name</th>     
        <th>Quantity</th>    
         <th>Price</th>        
     <th>Total</th>          
   <th>Action</th>         
  </tr>         
  <?php           if(!empty($_SESSION["shopping_cart"]))  
         {            
  $total = 0;     
    foreach($_SESSION["shopping_cart"] as $keys => $values) 
            {       
    ?>    
       <tr> 
<td>
<?php
 echo $values["item_name"];
 ?>
</td>            
 <td><?php echo $values["item_quantity"]; ?></td>    
 <td><?php echo $values["item_price"]; ?></td>   
<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
 <td><a  href="cart.php?action=delete&id=<?php  echo  $values["item_id"];  ?>">
<span  class="text-danger">Remove</span></a></td></tr>       
    <?php $total = $total + ($values["item_quantity"] * $values["item_price"]);   
            $_SESSION["tot"]=$total;          
   }          
 ?>      
 <tr>        
 <td colspan="3" align="right">Total</td>     
    <td align="right">
 <?php echo number_format($total, 2); ?></td>    
       </tr>         
  <?php          
 ?>
</table>
<form  method="post">
<input  type="submit"  value="Proceed  to  Checkout" name="submit">
</form></div></div></div></body>
</html> 
<?php 
session_start();
 $connect = mysqli_connect("localhost", "root", "", "product2");
 $query=mysqli_query($connect,"SELECT * FROM user WHERE name='".$_SESSION['sess_user']."'"); 
      $numrows=mysqli_num_rows($query);      
 $name=$num=$em=$city=" ";    
 if($numrows!=0)      
 {       
while($row=mysqli_fetch_assoc($query))   
   {         
$name=$row['name'];         
$num=$row['contact'];      
 $em=$row['email'];      
 $city=$row['city']; 
}    }    
  $total=$_SESSION['tot'];
 ?> 
<html>  

<head>  
<title>Bill</title>  
<style>            
  body
{       margin-top: 100px;      
 margin-bottom: 100px;       
margin-right: 150px;      
 margin-left: 80px;      
 background-color: azure ;      
 color: palevioletred;       
font-family: verdana;       
font-size: 100% 
}              
 h1 
{       
color: indigo; 
font-family: verdana;   
    font-size: 100%;  
 }        
    h2
 {       
color: indigo;      
 font-family: verdana;      
 font-size: 100%;  
 }
</style>   </head>  
 <body>  
 <form action="" method="POST">    
<table  border="1px"  cellpadding="5px"  align="center"  style="color:  black;  text-align:  center; background-color: lightgrey"><br/> 
      <tr>
<td>NAME:</td> 
  <td>
<input type=text name=user size=30 value=<?php echo $name;?> ></td>
    </tr>                 <tr>         
<td>CONTACT:</td>   <td><input type=text name=contact size=30 value=<?php echo $num;?>></td> 
      </tr>       <tr>         
<td>E-MAIL:</td>   <td><input type=email name=email size=30 value=<?php echo $em;?>></td> 
      </tr>       <tr>         
<td>CITY:</td>   <td><input type=text name=city size=30 value=<?php echo $city;?>></td>
       </tr>       <tr>         
<td>Total Amount:</td>        
 <td><?php echo "Rs.".$_SESSION['tot'];?></td>    
   </tr>       <tr>  
 <td colspan="2"><input type="submit" value="Confirm Order" name="submit"></td>  
     </tr></table></form></body></html>  
<?php
 if(isset($_POST["submit"])) 
{   
$n=$_POST["user"];  
 $c=$_POST["contact"];  
 $e=$_POST["email"];  
 $ci=$_POST["city"];   
 require_once('C:\xampp\lib\class.phpmailer.php'); 
  require_once('C:\xampp\lib\class.smtp.php');  
 $mail = new PHPMailer();  
 $mail->IsSMTP(); 
  $mail->SMTPAuth = true;
   $mail->Host = "smtp.gmail.com";   
$mail->Port = 25;  
 $mail->Username ="bardiyaasmeeta@gmail.com";
$mail->Password ="asmeeta2001  @";   
$mail->setFrom('bardiyaasmeeta@gmail.com'); 
  $mail->addAddress($e);  
 $mail->IsHTML(true);
$mail->Subject='Your order has been placed successfully.';  
 $mail->Body = "        
 <html>           
  <body>                
 <table style='width:600px;'> 
                    <tbody>                         <tr>                            
 <td style='width:150px'><strong>Name: </strong></td>                            
 <td style='width:400px'>$n</td>                        
 </tr>                         <tr>                           
  <td style='width:150px'><strong>Email ID: </strong></td>                             
<td style='width:400px'>$e</td>                         </tr>                       
  <tr>                           
  <td style='width:150px'><strong>Mobile No: </strong></td>                            
 <td style='width:400px'>$c</td>                         </tr>                        
 <tr>                            
 <td style='width:150px'><strong>Address: </strong></td>                            
 <td style='width:400px'>$ci</td>                         </tr>                         
<tr>                             
<td style='width:150px'><strong>Total Bill: </strong></td>                           
  <td style='width:400px'>$total</td>                        
 </tr>                         <tr>                            
 <td style='width:150px'><strong>Arrival Date: </strong></td>                          
   <td style='width:400px'><strong>It will arrive in 2 to 3 days</strong></td>                         
</tr>                     </tbody>               
  </table>             </body> 
 </html>         ";   
if(!$mail->send()) 
  {     
echo "ERROR: ".$mail->ErrorInfo;   
}   
else  
 {     
 $connect = mysqli_connect("localhost", "root", "", "product2");   
  $sql  =  "INSERT  INTO order_place(name,contact,email,city,total)VALUES('$n','$c','$e','$ci','$total')";     
  $retval = mysqli_query($connect, $sql);       
if($retval )
 {         //echo "New Record Inserted";       
  echo "Order Successfully Placed";
}      
 else    echo "Error" .$sql."<br>".mysqli_error($connect);    
 }
} 
 ?>