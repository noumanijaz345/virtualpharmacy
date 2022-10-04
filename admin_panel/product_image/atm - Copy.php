<html>

	<head>

   <title>Atm software</title>



</head>




<body>
		

<form method="post">
			
<label>Enter your pin</label>
			
<input type="number" name="pin">
                        
                        

			
<label>Enter your password</label>
			
<input type="password" name="pass">


                        
			
<label>range</label>
			
<input type="text" name="range"> 


			
<input type="submit" name="b1">
		
</form>
 

<?php 

if(isset($_POST['b1'])){


$x=$_POST['pin'];

$y=$_POST['pass'];

$r=$_POST['range'];

$a=1234;


$b=0000;





if($a==$x && $b==$y)
{
if($r>0 && $r<=10000)

{
echo "enjoy your money";

}
}
}




?>     
 
 
 
	
</body>

</html>
