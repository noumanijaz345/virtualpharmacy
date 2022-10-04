<link href="bootstrap1/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="front.css" rel="stylesheet" type="text/css" />
<?php
require_once('admin_panel/conn1.php');
require_once('function/function.php');

// session_start();


?>
<?php require_once('header.php'); 
?>
<form action="search.php" method="GET">

<input type="text" name="query" placeholder="Search..." style="margin-top:12px; padding: 2px"></input>


<button type="submit" class="btn btn-primary">Apply</button>
</form>



<?php
if(isset($_POST['test1'])){
    echo "checked value1"."<br>";
}
else{
    echo "Not checked value1"."<br>";
}

$conny = mysqli_connect("localhost", "root", "", "abc") or die($conny);

//Saad
       if($_GET['query']=="")
           {
               $query="null";
               echo $query;
           }
       else $query = $_GET['query']; 

//Saad
		   $query1 = "baby_Care";
		// gets value sent over search form

   
	$min_length = 3;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		$query = mysqli_real_escape_string($conny , $query);
        
		// makes sure nobody uses SQL injection
		
		$raw_results = mysqli_query($conny , "SELECT * FROM insert_product
			WHERE (`Product_Title` LIKE '%".$query."%') && (`catergory` LIKE '%".$query1."%') 
			
			OR (`Product_keywords` LIKE '%".$query."%')
			") or die(mysqli_error());
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            			
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
// 			    echo "
//                 <div class='container-fluid'>
//                 <div class='col-lg-3 col-md-3'>      

// ".$results['Product_Title']." 
// </div>
// ";

// <div class='row'>
echo"

<div class='col-lg-3 col-md-3'>      
<div class='thumbnail'>
<img src='admin_panel/product_image/".$results['Product_image1']."' height='400' width='100%' />
<br />
<center>
<br />
<strong>Company</strong>:".$results['Product_company']."
<br /><br />
<a href='#'> 
<strong>
".$results['Product_Title']."</a><br />
<br />
Price

</strong>:Rs. ".$results['Product_saleprice']." | <del> ".$results['Product_price']." </del> <br />
<br />
<a href='index.php?view_details=".$results['ID']."' class='btn btn-default'>View details</a>
<a href='index.php?view_details=".$results['ID']."' class='btn btn-primary'><span class='glyphicon glyphicon-trash'></span> Add to cart</a>

</center>
<br />

</div>
</div>
</div>

";
				//echo "<p><h3>".$results['Product_Title']."</h3>".$results['Product_keywords']."</p>";
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}
			
        }
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
    
?>



<?php require_once('footer.php');  ?>



