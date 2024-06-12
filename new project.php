
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
{         
//echo "New Record Inserted";         
echo "Order Successfully Placed";
}      
 else 
{  
 echo "Error" .$sql."<br>".mysqli_error($connect);   
  }
} 
 ?>