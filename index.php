<?php include("inc/head.php");?>
	
	<!-- <div id="content" class="container-fluid">
		<div class="row col-12">
			<img src="img/croissant.png" class="img-fluid" alt="Responsive image">
		</div>
	</div> -->
	
	<!-- <p class="meGusta">Texto de me gusta</p>
	<p><span class="nomeGusta">No me gusta</span></p> -->
	
	<div id="content" class="container-fluid">
		<a href="index.php">
			<div class="row">
				<img src="img/ajuntament.png" class="img-fluid" alt="Responsive image">
			</div>
		</a>
		<!-- TODO:Buscador -->
		<div class="row">
		  <!-- <div class="col-lg-6">
		    <div class="input-group">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button">Go right!</button>
		      </span>
		      <input type="text" class="form-control" placeholder="Search for...">
		    </div>
		  </div> -->
		  <div class="col-lg-6">
		    <div class="input-group">
		      <input type="text" class="form-control" placeholder="Search for...">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button">Go!</button>
		      </span>
		    </div><!-- /input-group -->
		  </div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</div>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	    	<a href="index.php">
		    	<img class="d-block w-100" src="img/tree.jpg" alt="First slide">
		    	<div class="carousel-caption d-none d-md-block">
	    			<!-- TODO: <a href="#">link</a>-->
	  			</div>
  			</a>
	    </div>
	    <div class="carousel-item">
			<a href="index.php">
	    		<img class="d-block w-100" src="img/nubes(2).png" alt="Second slide">
	    		<div class="carousel-caption d-none d-md-block">
	    			<!-- TODO: <a href="#">link</a>-->
	  			</div>
	    	</a>
	    </div>
	    <div class="carousel-item">
			<a href="index.php">
	    		<img class="d-block w-100" src="img/nubes.jpg" alt="Third slide">
	    		<div class="carousel-caption d-none d-md-block">
	    			<!-- TODO: <a href="#">link</a>-->
	  			</div>
	    	</a>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<div id="content" class="container-fluid">
		<div class="row">
			
		</div>
	</div>
<?php include("inc/footer.php");?>

