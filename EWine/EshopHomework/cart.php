<!DOCTYPE html> 
<html lang="en">
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<style>

   
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 20;  
      padding:0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px; 
    }
    
    .liCss{
        padding: 16px;
        font-size: 30px;
      }
      

      #search
      {
        margin-top:1.5rem;
      }

      #searchButton
      {
        margin-top:1.25rem;
      }

.wrapper {
    min-height: 100%;
    height: 100%;
    margin: 0 auto -155px; /* the bottom margin is the negative value of the footer's height */
}

.navbar-bottom {
min-height: 200px;
margin-top: 100px;
background-color: #28364f;
padding-top: 5rem;
color:#FFFFFF;
}


.navbar {
  margin: 0px; 
}

.carousel
{
  margin-top: 5rem;
}

.carousel-inner > .item > img, .carousel-inner > .item > a > img {
    width: 100%;
}
.panel-footer p{
  display: inline-block;
  margin-right: 3rem;
}

.panel-footer button{
  display: inline-block;
}

#bulk{
  padding-bottom: 1rem;
}

.fab{
  margin-right: 1.5rem;
}

#footer-header
{
  margin-top: 15%;
}

/*.footerStick{
position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
}*/

#copyright
{
    padding-top:15rem;
    width:100%;
    bottom:0;
    color:white;
    padding-right:2rem;
    text-align: center;
}


.badge {
  position: absolute;
  top: -2.5px;
  background: black;
  padding: 10px;
  border-radius:50%;
  color: white;
}
 .glyphicon> .badge {
  margin-top: 20px;
  position: relative;
}

#cart
{
	margin-top:30rem;
	margin-bottom:30rem;
	overflow: hidden;
}
.liCss a 
{
  font-size: 20px;
}

.liCss li a:hover
{
  background-color: transparent;
}
.center{
	text-align: center;
	font-size:3rem;
}

.center2
{
	margin-top:2rem;
	font-size:2rem;
}

.payment{
text-align: left;
background-color:transparent;
border:none;
}

.paymentForm{
	margin-left:20rem;
	margin-right:80rem;
	background-color:transparent;
}
.col-lg-6
{
	margin-left:18rem;
	margin-bottom:5rem;
}

.headerStuff
{
	margin-bottom:7.5rem;
}
</style>
</head>


<body>
	<nav class="headerStuff navbar navbar"> 
		<div class="container-fluid">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>                        
			</button>
		  </div>
		  <div  class="liCss" class="collapse navbar-collapse"  class="myNavbar">
			<ul class="nav navbar-nav navbar-center" class="nav navbar-nav">  
			  <li class="liCss"> <a href="index.php">Home</a></li>  
			  <li class="liCss" ><a href="#">Products</a></li>
			  <li class="liCss" ><a href="#">Deals</a></li>
			  <li class="liCss" ><a href="#">Stores</a></li>
			  <li class="liCss"><a href="#">Contact</a></li>
			  <li>
				<form class="navbar-form navbar-left" role="search">
				  <div class="form-group">
					<input type="text" class="form-control"  size=50 placeholder="Search" id="search">
				  </div>
				  <button id="searchButton" type="submit" class="btn btn-primary">Submit</button>       
				</form>
			  </li>
			</ul> 
			<ul class="nav navbar-nav navbar-right">
		
<li><a href=""> <span class="glyphicon glyphicon-user"></span>
	<?php   session_start();
if(isset($_SESSION['uname'])) 
{
	if($_SESSION['uname']=="null")
	{
		echo "Guest1435";
	}
	else
	{
		$username=$_SESSION['uname'];
		echo$username;
	}
}?></a>	</li></ul> 
		</div>
	</div>
  </nav> 


<?php
 	$arr= explode(' ', $_COOKIE['cartData']);  

	//foreach($arr as $value) 
		//echo $value."<br>";
	$totalCost=0;
	for($i=0; $i< count($arr); $i++)
		if($i%2==1)
			$totalCost+=(float)$arr[$i];
	//echo $totalCost;
		

	$countOfItems=0;
	for($i=0; $i< count($arr); $i++)
		if($i%2==0)
			$countOfItems++;
		

		echo "<table class='table'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th scope='col'>#</th>"; 
		echo "<th scope='col'>Product Name</th>";
		echo "<th scope='col'>Price</th>";
		echo "<th scope='col'>Remove</th>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";

	for($i=0; $i<count($arr); $i++)
	{
		if ($i == $countOfItems)
		{
			"</tr>";
		}

		$tableRowData=$i+1;
		if($i%2==0) 
		{
			if($i==0)
			{
				$firstRowNum=$i+1;
				echo"<tr class='$i'>"; 
				echo "<th scope='row'>$firstRowNum</th>";
			}
			else
			{ 
				echo"<tr class='$i'>";
				echo "<th scope='row'>$i</th>"; 
			}

			echo "<td>	$arr[$i] </td>";
			echo "<td>	$arr[$tableRowData] </td>";
			echo "<td> <button id='$i' onclick='myFunction(this.id)' class='btn btn-danger dropdown-toggle'> Remove</button></td>"; 
			echo"</tr>";
		}
		else
			continue;
	}

	echo "</tbody>";
	echo "</table>";
	echo" <hr style='width:100%'>";
	echo "<div style='text-align:left'>";
    echo "<h3 id='totalCost'> TOTAL COST:" .$totalCost."€</h3>"; 
	echo "</div>";
	echo" <hr style='width:100%'>";
	echo"<br><br>";


	echo "<div class='center'>";
    echo "Order information"; 
	echo "</div>";
	echo" <hr style='width:100%'>";
	echo"<br><br>";

	echo "<form action='cart-order.php' method='GET'>";
	echo "<div class='col-lg-6'>";
	echo "<div class='input-group input-group-sm'>";
	echo "<span class='input-group-addon' id='basic-addon1'>Enter your data</span>";
	echo "<input type='text' class='form-control' placeholder='First name' name='FirstName' aria-describedby='basic-addon1'>";
	echo "<input type='text' class='form-control' placeholder='Last name'  name='LastName'  aria-describedby='basic-addon1'>";
	echo "<input type='email' class='form-control' placeholder='Email' name='Email' required aria-describedby='basic-addon1'>";
	echo "<input type='text' class='form-control' placeholder='Address'  name='Address'  aria-describedby='basic-addon1'>";
	echo "<input type='tel' class='form-control' placeholder='Phone number'  name='PhoneNumber'  aria-describedby='basic-addon1'>";
  	echo "</div>";
  	echo "</div>";
	echo"<br>"; 
	echo"<br><br>";
	echo "<div class='payment input-group-addon'>";
	echo" <div class='paymentForm form-group' onchange='toggleCardInfo()'>";

	echo "<input type='radio' id='paypal' name='payment' value='paypal'>";
	echo "<label for='paypal'> Paypal <img src='https://img.icons8.com/color/36/000000/paypal.png'> </label>";
	echo"<br>";

	echo "<input type='radio' id='creditCard' name='payment' value='credit card'>";
	echo "<label for='credit card'> Card <img src='https://img.icons8.com/color/36/000000/visa.png'> <img src='https://img.icons8.com/color/36/000000/mastercard.png'> <img src='https://img.icons8.com/color/36/000000/amex.png'>  </label>";
	echo"<br>";

	echo"<input type='radio' id='payondelivery' name='payment' value='payondelivery'>";
	echo"<label for='credit card'> Pay on delivery </label>";
	echo"<br>";	echo"<br>"; echo"<br>";
	
	echo "<div class='input-group'id='creditCardNum' style='display:none'>";
  	echo"<div class='input-group-addon'>Credit card/Paypal number</div>";
  	echo"<input type='text' class='form-control' placeholder='XXXX XXXX XXXX'>";
	echo "</div>";
	echo "<div class='myClass input-group' id='CreditCardExp' style='display:none'>";
	echo"<div class='input-group-addon'>Credit card/Paypal expire date (example 12/21)</div>";
	echo"<input type='text' class='form-control' placeholder='Month/Year'";
 	echo "</div>";
	echo "</div>";
	echo "<input type='submit' class='center2 btn btn-primary' style='align-items: center' value='Submit'>";
	echo "</div>";
?> 


	
<nav class="footerStick navbar navbar-inverse navbar-bottom" style="padding:0 0 50px 0"> 
	<div class="container">
		<div class="row">
  
			<div class="col-sm-4">
				<h5 id='footer-header'> SITEMAP </h3>
				<div class="col-sm-4" style="padding: 0 0 0 0px"> 
					<p>News</p>
					<p>contact</p>
				</div>
			</div>
  
			<div class="col-sm-4">
			  <h5 id='footer-header'> Help </h3>
			  <p>FAQ</p>
			  <p>Privacy Policy</p>
		  </div>
  
			<div class="col-sm-4">
				<h5 id='footer-header'> Socials </h3>
				<a href=""><i class="fab fa-facebook-square fa-2x"></i></a>
				<a href=""><i class="fab fa-instagram fa-2x"></i></a>
				<a href=""><i class="fab fa-twitter fa-2x"></i></a> 
			</div>
			<div class="row"> 
			  <p id="copyright">
				<br>
				<br>
				© 2021 All Rights Reserved.
			  </p>
		    </div>
		</div>
	</div>
  </nav> 
  
</body>

<script> 
document.cookie = "cookieDeleteData=empty"; // new cookie gia na brw poia items tha exei bgalei se sxesh me to old cookie apo to prhgoymeno page

function toggleCardInfo()
{
	if (document.getElementById("paypal").checked == true)
	{
		$("#creditCardNum").show();
		$("#CreditCardExp").show();
	}

	if (document.getElementById("creditCard").checked == true)
	{
		$("#creditCardNum").show();
		$("#CreditCardExp").show();
	}

	if (document.getElementById("payondelivery").checked == true)
	{
		$("#creditCardNum").hide();
		$("#CreditCardExp").hide();
	}
}

function getCookie2(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);  // best function gia get cookie
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function delete_cookie( name, path, domain ) {  // function gia del to cookie
  if( get_cookie( name ) ) {
    document.cookie = name + "=" +
      ((path) ? ";path="+path:"")+
      ((domain)?";domain="+domain:"") +
      ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
  }
}

	function myFunction(clickedId)
	{

		var myvar= "."+clickedId; //moy deinei to button id poy ekana click
		//alert(myvar);
		$(myvar).remove();
		
		var iApoPhpCode=<?php echo json_encode($i); ?>; // Mexri stigmhs exw to i
		//alert(iApoPhpCode);
		var idLastValueFromPhp=parseInt(iApoPhpCode);
		//alert(idLastValueFromPhp+"");


		var phpArr = <?php echo json_encode($arr);?>;  //pairnw to arr poy einai to cookie se array
		var phpCost=phpArr[parseInt(clickedId)+1];   // pairnw to current price toy clicked item
		var phpName=phpArr[clickedId];					//pairnw to current name toy clicked item
		var output="";

		for(var i in phpArr)
		{
			if(phpArr[i]!=phpName && phpArr[i]!=phpCost)  // koitazw na brw pou yparxei to name kai to price toy clicked item sto cookie
				continue;

			output+=phpArr[i]+" ";
			//alert(output);
			
		}

		if(parseInt(clickedId)===0)
		{
			var costToRemove=<?php echo json_encode($arr[1]); ?>; //pairnw names kai prices apo to php arr
			var totalCost=$("#totalCost").html(); //pairnw to total cost
			totalCostValue = totalCost.replace(/[^\d.-]/g, ''); // remvove letters leaving only the cost
			var updatedCost= parseFloat(totalCostValue) - parseFloat(costToRemove); // briskw to current cost
			updatedCost=updatedCost.toFixed(2); // 2 dekadika 
			$("#totalCost").replaceWith($('<h3 id="totalCost">' + "TOTAL COST:" + updatedCost + "€" + '</h3>')); //kanw update to total cost
		}
		else
		{
			var obj = <?php echo json_encode($arr); ?>; //pairnw olo to arr poy exei ta names kai ta prices
			var  deletedElementCost=obj[parseInt(clickedId)+1];//pairnw to price toy selected item me bash to clickedId poy einai to id gia to kathe button +1 giati to kathe name apexei +1 sto arr
			var totalCost=$("#totalCost").html();//pairnw to total cost apo to html part tou page
			totalCostValue = totalCost.replace(/[^\d.-]/g, ''); // remvove letters leaving only the cost
			var updatedCost= parseFloat(totalCostValue) - parseFloat(deletedElementCost); //briskw to current cost 
			updatedCost=updatedCost.toFixed(2); //thelw mono 2 dekadika
			$("#totalCost").replaceWith($('<h3 id="totalCost">' + "TOTAL COST:" + updatedCost + "€" + '</h3>')); //kanw update to total cost
		}

		var tempCookie= getCookie2("cookieDeleteData");
		if(tempCookie.includes("empty")) // thn prwth fora tha moy gurisei empty 
			document.cookie = "cookieDeleteData="+tempCookie.substring(5,tempCookie.length)+output;   //to kanw giati to prwto cookie moy deinei thn prwth fora empty ara me to substr to bgazw
		else
			document.cookie = "cookieDeleteData=" + tempCookie+" " + output;	//kanw ypdate to new cookie me to item poy bgazw kathe fora me to remove button
			document.cookie = "totalCostOrder = " + updatedCost; //kanw cookie gia na xerw sto cart-order.php poso htan to total cost
	}
</script>
</html> 