<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Foodwise</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    body{
      background-image: url(img/protein.png) ;
      background-repeat: no-repeat;
      -webkit-background-size:cover ;
      -moz-background-size: cover ;
      -o-background-size: cover;
      background-size: 75px;

      width: 100%;
      height: fit-content;
    }
    .section{
      background-image: url(img/bglol.jpg);
    }
     /* Center align the text within the three columns below the carousel */
     .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .marketing h2 {
      font-weight: 400;
    }

    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }
      /* Featurettes
------------------------- */

    .featurette-divider {
      margin: 5rem 0;
      /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-weight: 300;
      line-height: 1;
      letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    
  </style>


</head>
<body>
  <header>
    <div class="collapse bg-warning" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Kami adalah tim yang berdedikasi dalam memberikan rekomendasi makanan yang tepat berdasarkan kondisi kesehatan Anda. 
            Dengan pengetahuan gizi dan kecerdasan buatan, kami hadir sebagai solusi praktis untuk mencapai gaya hidup sehat. Tim ahli kami bekerja keras 
            untuk memberikan rekomendasi yang disesuaikan dengan kondisi Anda. Kepercayaan dan kerahasiaan data Anda adalah prioritas kami. Bergabunglah dengan 
            kami dalam perjalanan menuju kesehatan yang lebih baik!.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-primary shadow-sm">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>
  <div style="text-align:justify; width:75%; border:0px solid #000099; ">
  </div>
    <section class="py-5 text-center container">
      <div class="row py-lg-6">
        <div class="col-lg-6 col-md-10 mx-auto">
          <h1 class="font-Poppins" >Food Wise</h1>
          <p class="lead text-success">"Health is not a destination; it's a lifelong journey. 
            Let your plate be filled with vibrant colors and nourishing choices."</p>
          <p>
            <a href="penyakit.php" class="btn btn-primary my-2">Mulai Pilih Penyakit</a>

            
          </p>
        </div>
      </div>
    </section>
    
    <div class="container marketing">
    <div class="row">
     <h4 class="text-secondary">Review</h4>
      <div class="col-lg-4">
      <div class="bd-placeholder" style="width: 18rem;">
        <img src="img/foto1.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="...">
        <div class="card-body">
          <h2 class="card-title">Jessica</h2>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      </div><!-- /.row -->
      <div class="col-lg-4">
      <div class="bd-placeholder" style="width: 18rem;">
        <img src="img/foto2.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="...">
        <div class="card-body">
          <h2 class="card-title">Nanda</h2>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      </div><!-- /.row -->
      <div class="col-lg-4">
      <div class="bd-placeholder" style="width: 18rem;">
        <img src="img/foto3.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="...">
        <div class="card-body">
          <h2 class="card-title">Amanda</h2>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      </div><!-- /.row -->
      </div>
      </div>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-right mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">FoodWise is Smart Expert System for Disease-Specific Food Recommendations, 
        Delivering Precise Food Recommendations and Restrictions for Your Health." </p>
    </div>
  </footer>

</body>

</html>