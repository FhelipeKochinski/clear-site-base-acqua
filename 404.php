<?php get_header() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page404.css">

<!-- BreadCrumbs -->
<?php include('templates/contents/breadCrumbs.php') ?>

<section id="page404">
	
	<div class="container">
	
		<h2>Página <strong>não encontrada</strong></h2>
		<h3>Opss, essa página não existe!</h3>
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
		<p>Você será redirecionado...</p>
		
	</div>
	
</section>

<script>
	setTimeout(function(){ 
		document.location='<?php echo esc_url( home_url( '/' ) ); ?>';
	}, 5000);
</script>

<?php get_footer() ?>