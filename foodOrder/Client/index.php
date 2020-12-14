<?php
include 'HTML/header.php';
include 'HTML/navbar.php';
?>

<div class="container-fluid justify-content-center">
<p class="pp">Free Online Ordering System 
<br>For Restaurants</p>


<form class="form-inline my-2 my-lg-0 justify-content-center se_arch" method="POST" id="homeS" autocomplete="off">
      <input class="form-control mr-sm-2 in_search" type="search" name="inSearch" id="homeSearch" placeholder="Search for restaurant" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" id="bt-search" type="submit">Search</button>
</form>
<div id="ull"></div>
</div>


<div class="container main">
<div class="row">
<hr class="col-sm-4">
<h4 class="col-sm-3">SHOP BEST SELLERS</h4>
<hr class="col-sm-4">
</div>

<div class="row row1">
		<div class="col-sm-2">
			<img src="imgs/seafood.jpg">
			<div>Shrimp</div>
		</div>

		<div class="col-sm-2">
			<img src="imgs/seafood.jpg">
			<div>Shrimp</div>
		</div>

		<div class="col-sm-2">
			<img src="imgs/seafood.jpg">
			<div>Shrimp</div>
		</div>

		<div class="col-sm-2">
			<img src="imgs/seafood.jpg">
			<div>Shrimp</div>
		</div>
			<div class="col-sm-2">
			<img src="imgs/seafood.jpg">
			<div>Shrimp</div>
		</div>

		<div class="col-sm-2">
			<img src="imgs/seafood.jpg">
			<div>Shrimp</div>
		</div>

</div>

<div class="main2">

<div class="row">
<hr class="col-sm-4">
<h4 class="col-sm-3">BEST RESTAURANTS</h4>
<hr class="col-sm-4">
</div>

<div class="row row2">
</div>

</div>
</div>	



<?php
include 'HTML/foot.php';
include 'HTML/footer.php';
?>

