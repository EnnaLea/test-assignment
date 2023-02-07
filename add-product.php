
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">

    
    <title>Product List</title>
   

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="stylesheet" href="./css/style.css">

</head>

  
<body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">

        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint odio dolore repellendus, perferendis explicabo facere. Commodi dignissimos suscipit veniam, a iusto sunt nam, totam sit consequuntur, eum asperiores quasi repellat.</p>
        </div>

        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email us</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">

      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Your@Shop</strong>
      </a>
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <strong>Home</strong>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </div>

</header>

<main>

  <section class="py-5 text-center container ">
    <div class="heading row py-lg-5 ">
      <div class="row ">
      <div class="header col-lg">
        <span class="product col"><h1 class=" fw-light">Product Add</h1></span>
        <span class="product-buttons col"><a href="add_product.php"  class=" btn btn-primary my-2">SAVE</a>
        <a href="#" id="delete-product-btn" class="btn btn-secondary my-2">CANCEL</a></span>
      </div>

      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">

  <form class="form-control" method="post" enctype="multipart/form-data" id="product_form" >
  
  <div class="form-group mb-3" style="width: 30rem;">
  <label for="sku">SKU</label>
  <input class="form-control" type="text" id="#sku" placeholder="" >
  </div>

  <div class="form-group mb-3" style="width: 30rem;" >
  <label for="name">Name</label>
  <input class="form-control" type="text" id="#name" placeholder="" >
  </div>

  <div class="form-group mb-3" style="width: 30rem;">
  <label for="price">Price($)</label>
  <input class="form-control" type="text" id="#price" placeholder="" >
  </div>

<!-- SELECT OPTION  FORM-->
  <div class="form-group mb-3">
  <label for="type-switcher">Type Switcher</label>
  <select name="type-switcher" id="productType">
  <option value="Type Switcher">Select type:</option>
  <option class="select-dvd" id="DVD" value="DVD">DVD</option>
  <option class="select-book" id="Book" value="Book">Book</option>
  <option class="select-furniture" id="Furniture" value="Forniture">Furniture</option>
  </select>
  </div>


<!-- INDIVIDUAL CHOICE FORM -->
<div class="formContainer" >
  <form class="form-control " method="post" enctype="multipart/form-data" id="product_form">
  
  <!-- for dvd -->
  <div class="container select-option" id="dvd-form " >
    <div class="form-group mb-3 DVD" style="width: 30rem;">
  <label for="size">Size MB</label>
  <input id="#size" class="form-control" type="text" id="#size" placeholder="" >
  <div id="passwordHelpBlock" class="form-text">
  “Please, provide size in MB.”
</div>
  </div>
  </div>


<!-- for furniture -->
<div class="container furniture-form select-option">
  <div class="form-group mb-3" style="width: 30rem;" >
  <label for="height">Height (CM)</label>
  <input class="form-control" type="text" id="#height" placeholder="" >
  </div>

  <div class="form-group mb-3" style="width: 30rem;">
  <label for="width">Width (CM)</label>
  <input class="form-control" type="text" id="#width" placeholder="" >
  </div>

  <div class="form-group mb-3" style="width: 30rem;">
  <label for="length">Length (CM)</label>
  <input class="form-control" type="text" id="#length" placeholder="" >
</div>

  <div id="passwordHelpBlock" class="form-text">
“Please, provide dimensions in CM.”
</div>

  </div>

<!-- for book -->

<div class="container book-form select-option">
  <div class="form-group mb-3" style="width: 30rem;">
  <label for="weight">Weight (KG)</label>
  <input class="form-control" type="text" id="#weight" placeholder="" >
  <div id="passwordHelpBlock" class="form-text">
 “Please, provide weight in KG.” 
</div>
  </div>

</div>


  </form>

</div>


</form>

  
  
    
  </div>

</main>



<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
    <strong>
    <a class="footer-link" href="#">Back to top</a>
    </strong>
    </p>
  </div>
</footer>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script src="./javascript/script.js"></script>



     
  </body>
</html>
