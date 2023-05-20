<!DOCTYPE html>
<html>
  <head>
    <title>Nor's Kan anan</title>
    <style>
      *{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  box-sizing: border-box;
}
/*HEADING TITLE ibarra's kan anan SECTION*/

.vl {
  border-left: 2px solid grey;
  height: 5px;
}

.dashed{
  border-top: 3px dashed aliceblue;
}

h4{
  font-family: sans-serif;
}

.price{
  text-align: center;
  font-size: 25px;
  font-family: 'Lucida Sans',Geneva;
  background-image: url(recipe/bg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  opacity: 90%;
}


h1{
  text-align: center;
  font-size: 90px;
  font-family: 'Lucida Sans',Geneva;
  color: wheat;
  padding: 90px;
  background-image: url(recipe/bg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  opacity: 90%;
  text-shadow: 3px 3px 3px black;
}
/*NAVIGATION SECTION*/
nav{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: wheat;
  position: -webkit-sticky;
  position: sticky;
  top: 0;

}
.page{
  display: inline-block;
  padding: 20px;
  text-decoration: none;
  color: #000;
  font-size: 18px;
}
nav ul{
  list-style: none;
}
nav ul a{
  display: inline-block;
  padding: 20px;
  text-decoration: none;
  color: #000;
  transition: 0.2s ease-in;
  font-size: 18px;
}
nav ul a:hover{
  background-color: burlywood;
  color: white;
}

/*FOOD LISTING DESIGN SECTION*/
.items{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  padding: 30px 20px;
  grid-column-gap: 20px;
  grid-row-gap: 30px;
}
.sudan{
  background-image: url(recipe/bg.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  padding: 50px 50px;
  padding-top: 20px;
  padding-bottom: 10px;
  width: 100%;
  height: 300px;
  object-fit: cover;
  transition: 0.2s ease;
  box-shadow: 1px 1px 1px 1px#000;
}

.item img{
  width: 100%;
  height: 300px;
  object-fit: cover;
  transition: 0.2s ease;
  box-shadow: 1px 1px 1px 1px#000;
}
.item img:hover{
  transform: scale(1.04);
}
.item h4{
  padding: 5px;
  text-align: center;
  text-shadow: 1px 1px black;
}

p{
  color: aliceblue;
  text-shadow: .5px .5px black;
  font-family: sans-serif;
}

.disabled{
  padding: 5px 30px;
  border: none;
  outline: none;
  background-color: grey;
  color: black;
  border-radius: 4px;
  font-size: 20px;
  display: block;
  margin: 0 auto;
}

.pad{
  padding: 5px 30px;
}


.add{
  size: 10px;
  background-color: burlywood;
  color: white;
  cursor: pointer;
  font-size: 10px;
  transition: 0.2s all;
  padding: 5px 5px;

}
.sub{
  size: 10px;
  background-color: burlywood;
  color: white;
  cursor: pointer;
  font-size: 10px;
  transition: 0.2s all;
  padding: 5px;
  padding-inline: 6.4px;

}
.item_button{
  padding: 5px 30px;
  border: none;
  outline: none;
  background-color: burlywood;
  color: white;
  cursor: pointer;
  border-radius: 4px;
  font-size: 20px;
  display: block;
  margin: 0 auto;
  transition: 0.2s all;
}
.item button:hover{
  transform: scale(1.04);
}

footer{
  text-align: center;
  font-size: 25px;
  font-family: 'Lucida Sans',Geneva;
  color: white;
  padding: 50px;
  background-color: #000;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  opacity: 90%;
}

/*MEDIA SCREENING TO ADJUST IN DIFFERENT SCREEN DISPLAY*/
@media screen and (max-width: 1000px){
  .items{
    grid-template-columns: repeat(2, 1fr);
  }
}

@media screen and (max-width: 768px){
  .items{
    grid-template-columns: repeat(1, 1fr);
  }
}

.popup{
  position: absolute;
  top: 60%;
  left: 13%;
  padding: 5px 10px;
  
  border-radius: 50%;
  background-color: #f44336;
}

.icon{
  position: fixed;
  top: 90%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon{
  display: block;
  text-align: center;
  padding: 5px;
  transition: all 0.3s ease;
  color: bisque;
}

.icon:hover{
  opacity: 0.5;
}

.cartpic {
  width: 20%;
  cursor: pointer;
  display: block;
  padding: 20px;
  text-decoration: none;
  color: #000;
  font-size: 18px;
  
}
.cartpic:hover {
  opacity: 0.8;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  }
  
  /* Set a style for all buttons */
  .l_button {
  background-color: burlywood;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  }
  
  .l_button:hover {
  opacity: 0.8;
  }
  
  /* Extra styles for the cancel button */
  .cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  }
  
  /* Center the image and position the close button */
  .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
  }
  
  img.avatar {
  width: 40%;
  border-radius: 50%;
  }
  
  .container {
  padding: 16px;
  }
  
  span.psw {
  float: right;
  padding-top: 16px;
  }
  
  /* The Modal (background) */
  .modal {
  
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  }
  
  /* Modal Content/Box */
  .modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
  }
  
  /* The Close Button (x) */
  .close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
  color: red;
  cursor: pointer;
  }
  
  /* Add Zoom Animation */
  .animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
  }
  
  @-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
  }
  
  @keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  }




  /*ADD TO CART CSS*/

  @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');
*, ::before, ::after { box-sizing: border-box; }
body{
  font-family:'Quicksand', sans-serif;
  text-align:center;
  line-height:1.5em;
  background:#E0E4CC;
 background: #69d2e7;
 background: -moz-linear-gradient(-45deg, #69d2e7 0%, #a7dbd8 25%, #e0e4cc 46%, #e0e4cc 54%, #f38630 75%, #fa6900 100%);
 background: -webkit-linear-gradient(-45deg, #69d2e7 0%,#a7dbd8 25%,#e0e4cc 46%,#e0e4cc 54%,#f38630 75%,#fa6900 100%);
 background: linear-gradient(135deg, #69d2e7 0%,#a7dbd8 25%,#e0e4cc 46%,#e0e4cc 54%,#f38630 75%,#fa6900 100%);
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#69d2e7', endColorstr='#fa6900',GradientType=1 );
  
 }
 hr {
   border:none;
   background:#E0E4CC;
   height:1px;
 /*   width:60%;
   display:block;
   margin-left:0; */
 }
 h1{
   margin: 12px;
 }
 .container {
   max-width: 800px; 
   margin: 1em auto; 
   background:#FFF; 
   padding:30px;
   border-radius:5px;
 }
 .productcont {
   display: flex; 
 }
 .product {
   padding:1em; 
   border:1px solid #E0E4CC; 
   margin-right:1em; 
   border-radius:5px;
 }
 .cart-container {
   border:1px solid #E0E4CC;
   border-radius:5px;
   margin-top:1em;
   padding:1em;
 }
 .cartbutton, input[type="submit"] { 
   border:1px solid #FA6900; 
   color:#fff; 
   background: #F38630; 
   padding:0.6em 1em;
   font-size:1em; 
   line-height:1; 
   border-radius: 1.2em;
   transition: color 0.2s ease-in-out, background 0.2s ease-in-out, border-color 0.2s ease-in-out;
 }
 .cartbutton:hover, .cartbutton:focus, .cartbutton:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active {
   background: #A7DBD8;
   border-color:#69D2E7;
   color:#000;
   cursor: pointer;
 }
 table {
   margin-bottom:1em;
   border-collapse:collapse;
 }
 table td, table th {
   text-align:left;
   padding:0.25em 1em;
   border-bottom:1px solid #E0E4CC;
 }
 #carttotals {
   margin-right:0;
   margin-left:auto;
 }
 .cart-buttons {
   width:auto;
   margin-right:0;
   margin-left:auto;
   display:flex;
   justify-content:flex-end;
   padding:1em 0;
 }
 #emptycart {
   margin-right:1em;
 }
 table td:nth-last-child(1) {
   text-align:right;
 }
 .message {
   border-width: 1px 0px;
   border-style:solid;
   border-color:#A7DBD8;
   color:#679996;
   padding:0.5em 0;
   margin:1em 0;
 }

    </style>


    <script>
      
      var quantity = 1;
var price = 0;
var fee = 35;
var total = 0;

function disable(){
    var c = document.getElementById('username');
    var x = document.getElementById('pinakbet1');
    var y = document.getElementById('pancit1');
    var z = document.getElementById('sitaw1');
    if (x.style.display === "block" || y.style.display === "block" || z.style.display === "block"){
        alert('Order one at a time.');
        exit();
    }else if(c.style.display === "none"){
        alert('Please Login First.');
        exit();
    }
}

function login(){
    var val = document.getElementById('user').value;
    document.getElementById('id01').style.display='none';
    document.getElementById('log').style.display='none';
    document.getElementById('username').innerHTML = "Welcome " + val;
    document.getElementById('id01').style.display='none';
    document.getElementById('log').style.display='none';
    document.getElementById('logout').style.display='inline-block';
    document.getElementById('username').style.display='inline-block';
}

function logout(){
    document.getElementById('log').style.display='inline-block';
    document.getElementById('username').style.display='none';
    document.getElementById('logout').style.display='none';
}

function add(){
    if (quantity < 10){
        quantity = quantity + 1;
        total = total + price;
        document.getElementById('q').innerHTML = quantity;
        document.getElementById('q1').innerHTML = quantity;
        document.getElementById('q2').innerHTML = quantity;
        document.getElementById('total').innerHTML = total;
        document.getElementById('total1').innerHTML = total;
        document.getElementById('total2').innerHTML = total;
    }else{
        alert('Quantity Exceed the maximum amount');
    }
    
}

function sub(){
    if (quantity > 1){
        quantity = quantity - 1;
        total = total - price;
        document.getElementById('q').innerHTML = quantity;
        document.getElementById('q1').innerHTML = quantity;
        document.getElementById('q2').innerHTML = quantity;
        document.getElementById('total').innerHTML = total;
        document.getElementById('total1').innerHTML = total;
        document.getElementById('total2').innerHTML = total;
    }else{
        alert('Quantity Cannot be zero');
    }
}
//PINAKBET
function pinakbet(){
    disable()

    price = price + 35;
    total = total + price + fee;
    document.getElementById('total').innerHTML = total;

    var x = document.getElementById('pinakbet');
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    } 
    var y = document.getElementById('pinakbet1');
    if (y.style.display === "none") {
        y.style.display = "block";
        document.querySelector('btn2').disable = true;
        document.querySelector('btn2.1').disable = true;
    } else {
        y.style.display = "none";
    } 
    var a = document.getElementById('pinakbet');
}
function cancel(){
    fee = 0;
    price = 0;
    total = 0;
    quantity = 1
    document.getElementById('q').innerHTML = "1";
    document.getElementById('total').innerHTML = total;

    var x = document.getElementById('pinakbet');
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    } 
    var y = document.getElementById('pinakbet1');
    if (y.style.display === "none") {
        y.style.display = "block";
        document.querySelector('btn2').disable = false;
        document.querySelector('btn2.1').disable = false;
    } else {
        y.style.display = "none";
        
    } 
}

function pancit(){
    disable()

    price = price + 45;
    total = total + price + fee;
    document.getElementById('total1').innerHTML = total;

    var x = document.getElementById('pancit');
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    } 
    var y = document.getElementById('pancit1');
    if (y.style.display === "none") {
        y.style.display = "block";
        
    } else {
        y.style.display = "none";
    } 
}
function cancel1(){
    price = 0;
    total = 0;
    quantity = 1
    document.getElementById('q1').innerHTML = "1";
    document.getElementById('total1').innerHTML = total;

    var x = document.getElementById('pancit');
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    } 
    var y = document.getElementById('pancit1');
    if (y.style.display === "none") {
        y.style.display = "block";
        
    } else {
        y.style.display = "none";
        
    } 
}

function sitaw(){
    disable()

    price = price + 40;
    total = total + price + fee;
    document.getElementById('total2').innerHTML = total;

    var x = document.getElementById('sitaw');
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    } 
    var y = document.getElementById('sitaw1');
    if (y.style.display === "none") {
        y.style.display = "block";
        
    } else {
        y.style.display = "none";
    } 
}
function cancel2(){
    fee = 0;
    price = 0;
    total = 0;
    quantity = 1
    document.getElementById('q2').innerHTML = "1";
    document.getElementById('total2').innerHTML = total;

    var x = document.getElementById('sitaw');
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    } 
    var y = document.getElementById('sitaw1');
    if (y.style.display === "none") {
        y.style.display = "block";
        
    } else {
        y.style.display = "none";
        
    } 
}

//ADD TO CART

/* get cart total from session on load */
updateCartTotal();

/* button event listeners */
document.getElementById("emptycart").addEventListener("click", emptyCart);
var btns = document.getElementsByClassName('addtocart');
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function() {addToCart(this);});
}

/* ADD TO CART functions */

function addToCart(elem) {
    //init
    var sibs = [];
    var getprice;
    var getproductName;
    var cart = [];
     var stringCart;
    //cycles siblings for product info near the add button
    while(elem = elem.previousSibling) {
        if (elem.nodeType === 3) continue; // text node
        if(elem.className == "price"){
            getprice = elem.innerText;
        }
        if (elem.className == "productname") {
            getproductName = elem.innerText;
        }
        sibs.push(elem);
    }
    //create product object
    var product = {
        productname : getproductName,
        price : getprice
    };
    //convert product data to JSON for storage
    var stringProduct = JSON.stringify(product);
    /*send product data to session storage */
    
    if(!sessionStorage.getItem('cart')){
        //append product JSON object to cart array
        cart.push(stringProduct);
        //cart to JSON
        stringCart = JSON.stringify(cart);
        //create session storage cart item
        sessionStorage.setItem('cart', stringCart);
        addedToCart(getproductName);
        updateCartTotal();
    }
    else {
        //get existing cart data from storage and convert back into array
       cart = JSON.parse(sessionStorage.getItem('cart'));
        //append new product JSON object
        cart.push(stringProduct);
        //cart back to JSON
        stringCart = JSON.stringify(cart);
        //overwrite cart data in sessionstorage 
        sessionStorage.setItem('cart', stringCart);
        addedToCart(getproductName);
        updateCartTotal();
    }
}
/* Calculate Cart Total */
function updateCartTotal(){
    //init
    var total = 0;
    var price = 0;
    var items = 0;
    var productname = "";
    var address = "";
    var carttable = "";
    if(sessionStorage.getItem('cart')) {
        //get cart data & parse to array
        var cart = JSON.parse(sessionStorage.getItem('cart'));
        //get no of items in cart 
        items = cart.length;
        //loop over cart array
        for (var i = 0; i < items; i++){
            //convert each JSON product in array back into object
            var x = JSON.parse(cart[i]);
            //get property value of price
            price = parseFloat(x.price.split('$')[1]);
            productname = x.productname;
            //add price to total
            carttable += "<tr><td>" + productname + "</td><td>$" + price.toFixed(2) + "</td></tr>";
            total += price;
        }
        
    }
    //update total on website HTML
    document.getElementById("carttotal").innerHTML = total.toFixed(2);
    //insert saved products to cart table
    document.getElementById("carttable").innerHTML = carttable;
    //update items in cart on website HTML
    document.getElementById("itemsquantity").innerHTML = items;
}
//user feedback on successful add
function addedToCart(pname) {
  var message = pname + " was added to the cart";
  var alerts = document.getElementById("alerts");
  alerts.innerHTML = message;
  if(!alerts.classList.contains("message")){
     alerts.classList.add("message");
  }
}
/* User Manually empty cart */
function emptyCart() {
    //remove cart session storage object & refresh cart totals
    if(sessionStorage.getItem('cart')){
        sessionStorage.removeItem('cart');
        updateCartTotal();
      //clear message and remove class style
      var alerts = document.getElementById("alerts");
      alerts.innerHTML = "";
      if(alerts.classList.contains("message")){
          alerts.classList.remove("message");
      }
    }
}


    
    </script>
  </head>
  <body>

    <h1>Nor's Kan anan</h1>
      <nav>
        <ul>
          <a href="Main.php"><li>Home</li></a>
          <a href="About.html"><li>About</li></a><span class="vl"></span>
          &nbsp;&nbsp;
          <button id="log" class="l_button" onclick="location.href = 'logout.php';" style="width:auto;">Logout</button>
          <span id="username"></span>
          <label>
        </ul>
      </nav>
      
      <section class = "items">
      
          <div class="item" id="pinakbet1" style="display: none;">
            <div class="pinakbet">
              <div id="prod">
                <h4  style="color: aliceblue;" class="price">P35</h4>
                  <h4 style="color: aliceblue;"><br><br>Quantity
                <button class="sub" onclick = "sub()">-</button>
                <span id="q">&nbsp;1&nbsp;</span>
                <button class="add" onclick = "add()">+</button><br></h4>
                <p><b>Shipping To: <input id="int"></input></p><br>
                <p>Shipping Fee: P35.00</p><br>
                <hr class="dashed"><br>
                <p>Total: P<span id="total">0</span></b></p>


              </div>
            
            </div>
            <h4>Pinakbet</h4>
            <button class="item_button" id="btn1" onclick="cancel()">Cancel</button>
          </div>
          <div class="item" id="pinakbet">
            <img src="recipe/pinakbet.jpg">
            <h4>Pinakbet</h4>
            <button class="item_button" id="btn" onclick="pinakbet()">Order</button>
          </div>

          <div class="item">
            <img src="recipe/pancit.jpg">
            <h4>Pancit</h4>
            <button class="item_button" id="btn">Order</button>
          </div>

          <div class="item">
              <img src="recipe/sitaw.jpg">
              <h4>Minudong Sitaw</h4>
              <button class="item_button" id="btn">Order</button>
          </div>

          <div class="item">
              <img src="recipe/bihon.jpg">
              <h4>Bihon</h4>
              <button class="item_button" id="btn">Order</button>
          </div>

          <div class="item">
              <img src="recipe/chapsui.jpg">
              <h4>Chapsui</h4>
              <button class="item_button" id="btn">Order</button>
          </div>

          <div class="item">
              <img src="recipe/dinuguan.jpg">
              <h4>Dinuguan</h4>
              <button class="item_button" id="btn">Order</button>
          </div>

          <div class="item">
              <img src="recipe/maranay.jpg">
              <h4>Maranay</h4>
              <button class="item_button" id="btn">Order</button>
          </div>

          <div class="item">
              <img src="recipe/langka.jpg">
              <h4>Ginataang Langka</h4>
              <button class="item_button" id="btn">Order</button>
          </div>

          <div class="item">
              <img src="recipe/lumpia.jpg">
              <h4>Lumpia</h4>
              <button class="item_button" id="btn">Order</button>
          </div>

          <div class="item">
              <img src="recipe/minudo.jpg">
              <h4>Minudo</h4>
              <button class="item_button" id="btn">Order</button>
          </div>

          <div class="item">
              <img src="recipe/maranay.jpg">
              <h4>Maranay</h4>
              <button class="item_button" id="btn">Order</button>
          </div>

          <div class="item">
            <img src="recipe/bbq.jpg">
            <h4>BBQ</h4>
            <button class="item_button" id="btn">Order</button>
        </div>
      </section>
      <div id="id01" class="modal">
  
        <form class="modal-content animate">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <h4 style="font-size: 20px;">Login</h4>
          </div>
      
          <div class="container">
            <label id="user" for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
              
            <button class="l_button" type="submit" onclick="login()">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Don't have an Account? <a href="register.html">Register Here</a></span>
          </div>
        </form>
      </div>

      <footer>
        <div>This website is for project purpose only all image use 
          reserve for te actual owner. </div>
      </footer>

  </body>
  </html>