<?php
include 'HTML/header.php';
include 'HTML/navbar.php';
?>


<div class="container res_turent">
	<h3 class="all">All Restaurants</h3>
	<div class="topnav">
	 <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search res-search"></i></button>
    </form>
    </div>
    </div>
    <div class="clear"></div>
	<div class="row resrows"></div>
</div>



<?php
include 'HTML/footer.php';
?>