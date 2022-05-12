<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eshop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> 
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
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

      * {
    margin: 0;
}
html, body {
    height: 100%;
}
.wrapper {
    min-height: 100%;
    height: 100%;
    margin: 0 auto -155px; /* the bottom margin is the negative value of the footer's height */
}

.navbar-bottom {
min-height: 300px;
margin-top: 100px;
background-color: #28364f;
padding-top: 5rem;
color:#FFFFFF; 
}
.footer, .push {
    height: 155px; /* .push must be the same height as .footer */
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

.liCss li a:hover{
  text-decoration: none;
  background-color: transparent; 
}

</style>
</head>

<?php
   session_start();
  $_SESSION['uname']="null";
?> 


<body>
<nav class="navbar navbar"> 
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button> 
    </div>
    <div  class="liCss" class="collapse navbar-collapse"  class="myNavbar">
      <ul class="nav navbar-nav navbar-left" class="nav navbar-nav">
        <li class="liCss"> <a href="index.php">Home</a></li>  
        <li class="liCss" ><a href="#wines">Products</a></li>
        <li class="liCss" ><a href="#">Deals</a></li>
        <li class="liCss" ><a href="#">Stores</a></li>
        <li class="liCss"><a href="#">Contact</a></li> 
        <li>
          <form class="navbar-form navbar-center" role="search">
            <div class="form-group">
              <input type="text" class="form-control"  size=50 placeholder="Search" id="search">
            </div>
            <button id="searchButton" type="submit" class="btn btn-primary">Submit</button>       
          </form>
        </li> 

         
      </ul> 
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" ></span>
            Guest1435</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="LogIn.html">LOG IN</a><br>
            <a class="dropdown-item" href="SignUp.html">SIGN UP</a> 
          </div>
      </li>
        <li> <a href="cart.php">  <span class="glyphicon glyphicon-shopping-cart"></span> Cart<span class="badge">0</span></a></li>         
      </ul> 
    </div>
  </div>
</nav> 

<div class="jumbotron">
    <div class="container text-center"> 
      <h1>Online Store</h1>       
        
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li> 
      <li data-target="#myCarousel" data-slide-to="2"></li> 
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active"> 
        <img src="images/wines2.png" alt="images/wines1">
      </div>
  
      <div class="item">
        <img src="images/wineBottle5.png" alt="Chicago">
      </div>
  
      <div class="item">
        <img src="images/barrelsWine.png" alt="New York"> 
      </div>
    </div>
  
    <!-- prev next arrows -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span> 
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
  </div>


<div class="container" id="wines">    
  <div class="row">
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">NOBILO SAUVIGNON BLANC </div>
        <div class="panel-body"><img src="images/wineBottle1.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-body">
          <h4>SAUVIGNON BLANC</h4>
          <p> Our Nobilo Sauvignon Blanc boasts fresh, vivid classic flavors that consistently showcase the diverse qualities of our Marlborough vineyards, year after year.</p>
          </br>
          <h4>TASTING NOTES</h4>
          <p>Fresh, crisp and clean with zesty flavors of ripe tropical fruits, especially passionfruit and pineapple with subtle hints of green herbs. The wine is intensely flavored with balanced mouthwatering acidity and a generous finish.Enjoyable on its own as an aperitif, or pairs well with any lighter seafood dish</p>
        </div>
        <div class="panel-footer">  <p> <del>29,99€</del> <p class="text-danger">19,99€</p>
          <button type="button" data-name="NOBILO" data-price="19.99" class="add-to-cart btn btn-primary">ADD TO CART</button> 
        </div>
      </div>
    </div>


    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">JACOBS CREEK SHIRAZ CABERNET</div>
        <div class="panel-body"><img src="images/wineBottle2.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-body">
          <h4>SHIRAZ CABERNET</h4>
          <p> From the humble cottage of William Jacob set along the banks of a small creek to the legacy of the Gramp family, we have over 150 years of winemaking tradition flowing through our vineyards. From vine to glass, the people whose dedication to craft and place can be tasted in every bottle.</p>
          </br>
          <h4>TASTING NOTES</h4>
          <p>Cork sealed. 50% Shiraz. Nice sweet berry fruits. Quite open, rich and bold with pure fruit. Warming, dense and vibrant with some menthol notes. Impressive. </p>
        </div>
        <div class="panel-footer">  <p> <del>39,99€</del> <p class="text-danger">29,99€</p>
          <button type="button" data-name="JACOBS" data-price="29.99" class="add-to-cart btn btn-primary">ADD TO CART</button> 
        </div>
      </div>
      </div>


    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CASTILLO YGAY RIOJA</div>
        <div class="panel-body"><img src="images/wineBottle3.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-body">
          <h4>CASTILLO YGAY RIOJA</h4>
          <p> The 1942 Castillo Ygay Gran Reserva Especial from a great Rioja vintage spent a mind-boggling 40 years in American oak barriques before it was bottled in 1983.</p>
          </br>
          <h4>TASTING NOTES</h4>
          <p>Lovely deep ruby and brick color, quite clear. Alluring nose (bit lifted?) with chocolate, spice, light earthy and dried fruit aromas. Quite round and rich on the palate, sweet/tart raisin flavors, with notes of tobacco, currant and spice. Tannins resolved, lovely supple texture.</p>
        </div>
        <div class="panel-footer">  <p> <del>69,99€</del> <p class="text-danger">49,99€</p>
          <button type="button" data-name="CASTILLO" data-price="69.99" class="add-to-cart btn btn-primary">ADD TO CART</button> 
        </div>
      </div>
    </div>

  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BERINGER PRIVATE RESERVE</div>
        <div class="panel-body"><img src="images/Beringer.JPG" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-body">
          <h4>BERINGER PRIVATE RESERVE</h4>
          <p> The Beringer reserve vineyards offer Cabernet Sauvignon of such quality that a minimalist approach to winemaking has long defined this special blend. Each vineyard is vinified separately and monitored carefully from the moment the fruit comes into the winery at Harvest.</p>
          </br>
          <h4>TASTING NOTES</h4>
          <p>Rich, full-bodied and deeply rewarding, this vintage expression is one for the ages (and aging). Notes of crème de cassis, black and blue fruits and baking spices frame flavors of ripe plum, dark cherry and chocolate in a muscular yet exceedingly well balanced and elegant wine.</p>
        </div>
        <div class="panel-footer">  <p> <del>129,99€</del> <p class="text-danger">99,99€</p>
          <button type="button" data-name="BERINGER" data-price="99.99" class="add-to-cart btn btn-primary">ADD TO CART</button> 
        </div>
      </div>
    </div>


    <div class="col-sm-4"> 
      <div class="panel panel-primary" id=bulk>
        <div class="panel-heading">CRETE VINEYARD</div>
        <div class="panel-body"><img src="images/wineBulk2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-body">
          <h4>CRETE VINEYARD</h4>
          <p> 	
            <br>
            The Crete Estate is a family winery which has been producing high quality wines since 1966 with a strong focus on rare local varieties and producing single variety wines.Surrounded by the idyllic setting of the vineyards and the Lassithi mountains we offer you the opportunity to enjoy nature and discover local
            varieties abd wines distinguished by the uniqueness of their origin and heritage.Art ,  a very important aspect of Greek history, across  all generations during war
            and peace times and in all parts of life, has played a key role in Ntourakis Winery.It is truly appreciated by family Ntourakis, which is why there are special exhibitions held in the
            winery. Supporting Greek and other local artists, the synergy that comes from art, wine  and nature is trully enjoyed. Inspired by the beautiful landscapes he would be able to return to nature and cultivate his father’s vineyards  and surrounding land to provide some independence and future for his young family 
            and-of course-to create beautiful wines. Here he would build his castle."I belong to the third generation of winemakers in my family, following in the footsteps of my Grandfather,father.
            </p>
        </div>
        <div class="panel-footer">  <p> <del>2,99€/L</del> <p class="text-danger">1,99€/L</p>
          <button type="button" data-name="CRETE" data-price="1.99" class="add-to-cart btn btn-primary">ADD TO CART</button> 
        </div>
      </div>
    </div>
    
    <div class="col-sm-4"> 
      <div class="panel panel-primary" id="bulk">
        <div class="panel-heading">SAMOS VINEYARD</div>
        <div class="panel-body"><img src="images/wineBulk3.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-body">
          <h4>SAMOS VINEYARD</h4>
          <p> 	
            <br>
            The SAMOS Estate is a family winery which has been producing high quality wines since 1966 with a strong focus on rare local varieties and producing single variety wines.Surrounded by the idyllic setting of the vineyards and the Lassithi mountains we offer you the opportunity to enjoy nature and discover local
            varieties abd wines distinguished by the uniqueness of their origin and heritage.Art ,  a very important aspect of Greek history, across  all generations during war
            and peace times and in all parts of life, has played a key role in Ntourakis Winery.It is truly appreciated by family Ntourakis, which is why there are special exhibitions held in the
            winery. Supporting Greek and other local artists, the synergy that comes from art, wine  and nature is trully enjoyed. Inspired by the beautiful landscapes he would be able to return to nature and cultivate his father’s vineyards  and surrounding land to provide some independence and future for his young family 
            and-of course-to create beautiful wines. Here he would build his castle."I belong to the third generation of winemakers in my family, following in the footsteps of my Grandfather,father.
            </p>
        </div>
        <div class="panel-footer">  <p> <del>4,99€/L</del> <p class="text-danger">2,99€/L</p>
          <button type="button" data-name="SAMOS" data-price="2.99" class="add-to-cart btn btn-primary">ADD TO CART</button>  
        </div>
      </div>
    </div>

  </div> 
</div><br><br>



<footer class="container-fluid text-center">  
  <form class="form-inline">Get deals:
    <input type="email" id="dealsEmail" class="form-control" size="70" placeholder="Email Address">
    <button type="button" id="dealsId" onclick="deals()" class="btn btn-danger">Sign Up</button>  
  </form>
</footer>


<nav class="navbar navbar-inverse navbar-bottom" style="padding:0 0 50px 0"> 
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

function deals()
{

  var dealsEmailFromUser= document.getElementById("dealsEmail").value;

  if (dealsEmailFromUser=="")
  {
    $("#dealsEmail").attr("placeholder", "Please enter a valid email");
    $("#dealsEmail").css({"border": "2px solid #c31432", "box-shadow": "3px"});
    $("#dealsEmail").click(function() { $("#dealsEmail").css({"border": "none", "box-shadow": "none"})});
    return;
  }

  $.ajax
        ({
            url: "deals.php", 
            type: 'GET',
            data: { "dealsEmail": dealsEmailFromUser}, 

            success: function(textStatus) 
            {
              alert(textStatus); 
            },

            error:function (xhr, ajaxOptions, thrownError)
            {
              alert(thrownError); 
            }
        });
}


  function badgeUpdate()
  {
    let quantity= document.querySelector(".badge").innerHTML;
    quantity= parseInt(quantity)+1;
    //alert(quantity);
    document.querySelector(".badge").innerHTML=""+quantity;
  }

  $(document).ready(function () {
  document.cookie = "cartData=empty;path=/;"; 
});


var shoppingCart = (function() {
  cart = []; 
  
  // Constructor
  function Item(name, price, count) {
    this.name = name;
    this.price = price;
    this.count = count;
  }
  
  // Save cart
  function saveCart() {
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }
  
    // Load cart
  function loadCart() {
    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }
  
  var obj = {};
  
  // add to cart or update count
  obj.addItemToCart = function(name, price, count) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart[item].count ++;
        saveCart();
        return; 
      }
    }
    var item = new Item(name, price, count);
    cart.push(item);
    saveCart();
  }

  // Set count from item
  obj.setCountForItem = function(name, count) {
    for(var i in cart) {
      if (cart[i].name === name) {
        cart[i].count = count;
        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(name) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart[item].count --;
          if(cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break; 
        }
    }
    saveCart();
  }

  obj.removeItemFromCartAll = function(name) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart.splice(item, 1);
        break; 
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart 
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
    }
    return totalCount;
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }
    return Number(totalCart.toFixed(2));
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy; 
  }


  return obj;
})();

 
// Add item 
$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var name = $(this).data('name'); 
  var price = Number($(this).data('price'));
  shoppingCart.addItemToCart(name, price, 1);
  //alert(JSON.parse(sessionStorage.getItem('shoppingCart')).data); 
  //alert(Object.keys(sessionStorage));
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {
    output+=cartArray[i].name+" ";
    output+=cartArray[i].price+ " ";
  }
  badgeUpdate();
  //alert(output);
  document.cookie="cartData="+output;
});

// Clear items
$('.clear-cart').click(function() {
  shoppingCart.clearCart();
});


function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}    
</script> 
</html> 