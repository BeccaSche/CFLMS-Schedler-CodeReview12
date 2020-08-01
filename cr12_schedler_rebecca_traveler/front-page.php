<?php get_header(); ?>

<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  	</ol>
			  	<div class="carousel-inner">
			    	<div class="carousel-item active">
			      		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/guy_on_peek1.jpg" alt="image">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/img_mountain_snow1.jpg" alt="image">
			    	</div>
			    	<div class="carousel-item">
			      		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/img_mountains_lake.jpg" alt="image">
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


			<div class="container-fluid p-1">

				<div class="card-deck my-5 py-4">
  					<div class="card bg1">
    					<div class="card-body text-center py-3">
    						<i class="fas fa-camera-retro mx-2" style='font-size:3rem;color:white'></i>
    						<h5>Titel</h5>
      						<p class="card-text">Some text inside the first card</p>
    					</div>
  					</div>
				  	<div class="card bg1">
				    	<div class="card-body text-center py-3">
				    		<i class="fas fa-camera-retro mx-2" style='font-size:3rem;color:white'></i>
    						<h5>Titel</h5>
				      		<p class="card-text">Some text inside the second card</p>
				    	</div>
				  	</div>
				  	<div class="card bg1">
				    	<div class="card-body text-center py-3">
				    		<i class="fas fa-camera-retro mx-2" style='font-size:3rem;color:white'></i>
    						<h5>Titel</h5>
				      		<p class="card-text">Some text inside the third card</p>
				    	</div>
				  	</div>
				  	<div class="card bg1">
				    	<div class="card-body text-center py-2">
				    		<i class="fas fa-camera-retro mx-2" style='font-size:3rem;color:white'></i>
    						<h5>Titel</h5>
				      		<p class="card-text">Some text inside the fourth card</p>
				    	</div>
				  	</div>
				</div>

<?php get_footer(); ?>