<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<style>
    nav{
        background-color: cadetblue;
    }
    nav .navbar-brand h3{
        font-family: fantasy;
    }
    .caro img{
        height: 500px;
    }
    .cat img{
        height: 300px;
        width: 100%;
        object-fit: cover;
    }
</style>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top">
        <div class="container">
            <a href="" class="navbar-brand"><h3>ELECTRIC Gaddi</h3></a>
           
            <form action="" class="mx-auto">
                <div class="input-group">
                    <input type="search" name="search" size="40" placeholder="Search for Vehicles..." class="form-control">
                    <button class="btn btn-dark border"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link mx-2">About</a></li>
                <li class="nav-item"><a href="" class="nav-link">Services</a></li>
            </ul>
        </div>
   </nav>

   <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner caro">
    <div class="carousel-item active">
      <img src="https://www.generalkinematics.com/wp-content/uploads/2018/04/New-GK-2018-Size-2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://evnerds.com/wp-content/uploads/2019/09/e-motorcycle-and-ebike-concept-design.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://specials-images.forbesimg.com/imageserve/5f84a3ad940c2998d700cfc4/960x0.jpg?cropX1=0&cropX2=1987&cropY1=0&cropY2=1388" class="d-block w-100" alt="...">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
   <div class="container my-5">
   <h1>Explore</h1>
   <hr class="mb-4">
       <div class="row">
            <div class="col-4">
                <div class="card shadow border-0">
                    <div class="card-body p-0 cat">
                        <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/polestar-precept-110-1586211484.jpg" class="img-fluid p-0" alt="">
                        <h3 class="p-2 text-center">Electric Cars</h3>
                        <a href="/car" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow border-0">
                    <div class="card-body p-0 cat">
                        <img src="https://i.pinimg.com/originals/0e/27/0d/0e270d2203dfc36b6510d1c5a0610961.jpg" class="img-fluid p-0" alt="">
                        <h3 class="p-2 text-center">Electric Bikes</h3>
                        <a href="/bike" class="stretched-link"></a>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow border-0">
                    <div class="card-body p-0 cat">
                        <img src="https://www.autocarpro.in/Utils/ImageResizer.ashx?n=http://img.haymarketsac.in/autocarpro/792d2b31-b4dc-40c2-b22b-d6e1b80b7ad0.jpg&h=485&w=735" class="img-fluid p-0" alt="">
                        <h3 class="p-2 text-center">Transport Vehicles</h3>
                        <a href="/transport" class="stretched-link"></a>
                    </div>
                </div>
            </div>
       </div>
   </div>
</body>
</html>