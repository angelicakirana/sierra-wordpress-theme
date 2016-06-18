<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Angelica Kirana</title>
		<?php wp_head(); ?>
	</head>
	
	<?php 
		if( is_front_page() ):
		$sierra_classes = array( 'sierra-class', 'myclass' );
		else :
		$sierra_classes = array( 'no-sierra-class' );
		endif;
		
		
	?>
	<body <?php body_class( $sierra_classes ); ?>>
		
		<div class="container">
		<div class="row">
		<div class="col-xs-12">
			
		
				<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Angelica Kirana</a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <?php 
		    wp_nav_menu(array(
		    'theme_location' =>'primary',
		    'container' => false,
		    'menu_class' => 'nav navbar-nav navbar-right'
		    )
		  );
		?>
	    </div>
	  </div><!-- /.container-fluid -->
	</nav>
			
	</div>
		</div>
		
		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />