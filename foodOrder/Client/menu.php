<?php
include 'HTML/header.php';
include 'HTML/navbar.php'; 
?>

<div class="container head-custom">
	<div class="row menurow">
	<img src="" id='resImg' class="col-sm-2">
	<div class="col-sm-2 detail">
		<h4 id="name"><b></b></h4>
		<div id='desc'></div>
	</div>
	</div>

	<div class="bodymenu">
		<hr>
		<div class="row rowbody">
			<div class="col-sm-6 searchmenu">
				<div>
	            <input type="text" placeholder="search menu item" name="search">
		        <i class="fa fa-search menu-search"></i>
		        </div>
			</div>

            <div class="col-sm-4" style="width: 400px;">
            
            <div class="container" style="width:100%;">
            
            	<div id="cart">Your Cart</div>
            	<div class="cart-sec">
            	<div class="resName" id="cartresName"></div>

            	<div class="container cart-item">
            		
            	</div>

            	<div class="container total-price">
            		<div class="row tota-l">
            			<div class="col-sm-12">
            				<div class="row total-amount">
            					<div class="col-sm-9" id="amount"></div>
            					<div class="col-sm-3" id="total"></div>
            				</div>
            			</div>
            		</div>
            		<button id="doneBtn" style="display: none;">PROCEED TO CHECKOUT</button>
            	</div>

            </div>
            </div>
            </div>

        </div>
    </div>
</div>




<?php
include 'HTML/footer.php';
?>