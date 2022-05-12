

<style>
<?php include 'SignUp.css'; ?> 
</style>

<?php

	$arr= explode(' ', $_COOKIE['cartData']);  //spaw to cookie se arr/ cookie format name space price space 

	//foreach($arr as $value) 
		//echo $value."<br>";
	//echo "<br>";
		//$radio= $_GET['payment'];
		//echo $radio;

		$ItemsLeft= array();
		$ItemsLeftNames= array();


		$arrCookie2= explode(' ', $_COOKIE['cookieDeleteData']);  
		//foreach($arrCookie2 as $value) 
			//echo $value."<br>";
	
			$paymentMethod= $_GET['payment'];
			//echo $paymentMethod;

			$userEmail= $_GET['Email'];
			//echo $userEmail;
	
	/*for ( $i=0; $i< count($arr);   $i++) failed attemp to find what's the different elements in those 2 arrs
	{
		for($j=0; $j<count($arrCookie2); $j++)
		{
			if( $arr[$i]!=$arrCookie2[$j])
			{
				array_push($ItemsLeft,$arr[$i]);
			}
		}					
	}*/

	$ItemsLeft = array_diff($arr, $arrCookie2);

		echo "<br><br>";
		//foreach($ItemsLeft as $value) 
			//echo $value."itemsleft <br><br>";

	$totalCostOrder= $_COOKIE['totalCostOrder'];
	//echo $totalCostOrder. "total cost <br><br>";

	$keys = array_keys($ItemsLeft); //we need keys to loop through with for using a php array
	for($i=0; $i< count($ItemsLeft); $i++) 
	{
		if($i%2==0)
		{      
			array_push($ItemsLeftNames,$ItemsLeft[$keys[$i]]); // php arrays are like hmaps key->value
		}
		else
			continue;
	}
	//foreach($ItemsLeftNames as $value) 
	//echo $value." Items left names<br>";
	//echo count($ItemsLeftNames);

	$productsOrder= implode(" ",$ItemsLeftNames); //joins the array with a string (our case the empty string) into a string
	$timestamp= date("Y-m-d H:i:s");
	//echo "<br>". gettype($productsOrder);
	//echo  "<br>" .gettype(date('Y-m-d H:i:s'));

	$servername = "localhost";
    $username = "eshopuser"; 
    $password = "eshopuserpasswd";
    $dbname = "eshop";


	  // Create connection
	  $conn = new mysqli($servername, $username, $password, $dbname);
	  // Check connection
	  if ($conn->connect_error) 
	  {
		  die("Connection failed: " . $conn->connect_error);
	  }
	  $sql = "INSERT INTO orders (order_date,status,notification_email,total_cost,products,way_of_payment) VALUES  ( '$timestamp', 'on-process', '$userEmail', '$totalCostOrder', '$productsOrder' , '$paymentMethod')"; 
	  $result = mysqli_query($conn, $sql); 
	  //echo "<br>".$result."<br>";



	  echo "<header class='main-header'>
	  <nav class='main-nav nav'>
		  <ul>
			  <li><a href='index.php'>HOME</a></li>
			  <li><a href='LogIn.html'>LOGIN</a></li>
			  <li><a href='SignUp.html'>SIGN UP</a></li>
		  </ul>
	  </nav>
  </header>";

	  $actualText= "hey " . $userEmail ." your order:" . $productsOrder. " for the price of:" . $totalCostOrder."€";
	  if($result==1)
	  {
		  echo "<h2> Hello ". $userEmail . ", your order was successfully placed. In case you want to know more about your order make sure to check your email.</h2>";
	  }

	  mail('jimkapadoukas@gmail.com','Your order was successfully placed', $actualText, 'From: jimkapadoukas@gmail.com');// params to who, header text, actual text, from who, exei kai polla alla params 
	  $conn->close();

	  echo"<br><br><br><br>";
	  echo "<h2  style='text-align:center'>Do you have a minute? Let us know how we can improve.</h2>";
	  echo"<div class='container'>";
	  echo"<p>Did you face any dificulties? Let us know what you would like us to change.</p>";
	  echo"<form>";
	  echo"<div class='form-group'>";
	  echo"<textarea class='form-control' rows='4' columns='100' placeholder='Use up to 500 words. 'style='width: 1836px; height: 92px;'></textarea>";
	  echo"</div>";
	  echo"</form>";
	  echo"</div>";
?> 