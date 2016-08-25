<header>
<nav class="navbar navbar-default navbar-fixed-top nav-oculto hidden-xs" id="oculto" style="z-index: 9999999999999 !important; display:none;">
        <div class="container">             
        <ul class="menuitem nav navbar-nav">
				<li><a class="jumper" href="#sobrejump">QUEM SOMOS</a></li>
	            <li><a class="jumper" href="#processo">PRODUTOS</a></li>
	            <li><img src="img/logo.png" class="hidden-xs img-responsive" width="140px;"></li>   
	            <li><a class="jumper" href="#orcamento">ORÇAMENTO</a></li>
	            <li><a class="jumper" href="#contato">FALE CONOSCO</a></li>
	      </ul> 
        </div>
</nav>


 <nav class="navbar">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="home">
		     <img src="img/logo.png" class="visible-xs img-responsive" width="140px">   
	      </a>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="menuitem nav navbar-nav">
				<li><a class="jumper" href="#sobre">QUEM SOMOS</a></li>
	            <li><a class="jumper" href="#processo">PRODUTOS</a></li>
	            <li><img src="img/logo.png" class="hidden-xs img-responsive" width="140px;"></li>   
	            <li><a class="jumper" href="#orcamento">ORÇAMENTO</a></li>
	            <li><a class="jumper" href="#contato">FALE CONOSCO</a></li>
	      </ul>  
	    </div><!-- /.navbar-collapse -->
	    
	    <div class="col-md-6 slidertopo">
	    <ul class="bxslider">
	    	<li><img src="img/banner.png" /></li>
	    	<li><img src="img/banner2.png" /></li>
	    	<li><img src="img/banner3.png" /></li>
	    	<li><img src="img/banner4.png" /></li>
	    	<li><img src="img/banner5.png" /></li>
	    </ul>
	    </div>
	  </div><!-- /.container-fluid -->
 </nav>
</header>


<script>
$(document).ready(function() {
    $(".jumper").on("click", function( e ) {

        e.preventDefault();

        $("body, html").animate({ 
            scrollTop: $( $(this).attr('href') ).offset().top 
        }, 1000);

    });
});
</script>