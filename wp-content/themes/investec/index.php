<?php get_header();?>
<main>
  


  <div id="myCarouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarouselIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#myCarouselIndicators" data-slide-to="1"></li>
      <li data-target="#myCarouselIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://localhost/wordpress/wp-content/uploads/2021/08/investec_carousel.jpg" class="d-block width="1200" height="680">
      </div>
      <div class="carousel-item">
        <img src="http://localhost/wordpress/wp-content/uploads/2021/08/investec_carousel2.jpg" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="http://localhost/wordpress/wp-content/uploads/2021/08/investec_carousel3.jpg" class="d-block w-100" alt="">
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarouselIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarouselIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
  </div>



  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="card text-right">
  
    <div class="card bg-light text-black">
      <img class="card-img" src="http://localhost/wordpress/wp-content/uploads/2021/08/rockstar-zebra.jpg" alt="Card image">
    <div class="card-img-overlay">
      <h1 class="card-title">One Page Wonder</h1>
      <h3><p class="card-text">Will Rock Your Socks Off</p></h3>
    <a href="row featurette" class="btn btn-primary">LEARN MORE</a>
  </div>
</div>  
</div>



    <hr class="featurette-divider">

    <div class="row featurette">
      
      <div class="col-md-5 order-md-2">
        <img src="http://localhost/wordpress/wp-content/uploads/2021/08/investec_front-end_developer.jpg" class="d-block width="200" height="200">
      </div>
      <div class="col-md-7 order-md-1">
        <h2 class="featurette-heading">For those about to rock...</h2>
        <p class="lead">Thulani, a prospective Front-End Developer at INVESTEC. AKA "Tools" that's his friends and peers call him. We assume its the meer fact that he is a coder's "toolbox". Be it design or development he has proven to be a natural problem solver</p>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
      <img src="http://localhost/wordpress/wp-content/uploads/2021/08/investec_2021.jpg" class="d-block width="200" height="200">
      </div>
      <div class="col-md-5">
        <h2 class="featurette-heading">We salute you!</h2>
        <p class="lead">For always investing in young brilliant minds, allowing them to express and embrace their personalities with freedom. Seeing them for who they truely are...</p>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


<!-- Get footer -->
<?php get_footer();?>