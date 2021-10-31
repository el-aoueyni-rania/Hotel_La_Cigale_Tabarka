@extends('layouts.app')

@section('content')
               <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase"></div>
            </div>
        </header> 
  <br><br>     
  <div class="row" style="margin-left: 50px">
    <div class="col-lg-4 " style="margin-bottom: 50px">
        <div class="card" style="width: 20rem;">
            <img src="../images/chm4.jpg" class="imgk" alt="...">
            <div class="card-body">
              <h5 class="card-title">Chambres & Suites</h5>
              <p class="card-text">Les chambres sont dotées de la climatisation, d'une télévision par satellite et d'un balcon ou d'une terrasse. Le restaurant sur place sert une cuisine traditionnelle sous forme de buffet.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 " style="margin-bottom: 50px">
            <div class="card" style="width: 20rem;">
                <img src="../images/rest3.png" class="imgk" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Restaurants & Bars</h5>
                  <p class="card-text"> la restauration se décline en buffet ou à la carte pour sublimer les produits du terroir sans jamais les dénaturer. Les grands classiques de la cuisine méditerranéenne et internationale sont à l’honneur. </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 " style="margin-bottom: 50px">
                <div class="card" style="width: 20rem;">
                    <img src="../images/reun.png" class="imgk" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Réunions & Événements</h5>
                      <p class="card-text">Durant votre séjour à La Cigale Tabarka Hôtel – Thalasso & Spa – Golf , vous serez toujours connectés et votre travail ne s’arrêtera jamais grâce à nos services complets d’affaires.</p>
                    </div>
                  </div>
                </div>
                        <div class="col-lg-4 " style="margin-bottom: 50px">
                            <div class="card" style="width: 20rem;">
                                <img src="../images/spa3.jpg" class="imgk" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Thalasso & SPA</h5>
                                  <p class="card-text"> La Cigale Thalasso & SPA est l’un des plus luxueux établissements . </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 " style="margin-bottom: 50px">
                                <div class="card" style="width: 20rem;">
                                    <img src="../images/golf4.jpg" class="imgk" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Golf</h5>
                                      <p class="card-text">Fait peau neuve afin d’offrir à ses membres et aux visiteurs un parcours exceptionnel.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 " style="margin-bottom: 50px">
                                    <div class="card" style="width: 20rem;">
                                        <img src="../images/stade.png" class="imgk" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Complexe Sportif</h5>
                                          <p class="card-text">Un lieu où l’exigence du plus haut niveau côtoie l’émotion au quotidien.</p>
                                        </div>
                                      </div>
                                    </div>   
</div>

<div class="row" style="margin-left: 300px">  
        <br><br> 
        <div class="carousel slide my-4" id="carouselExampleIndicators" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>


            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"><img class="d-block img-fluid" src="/images/chm3.png" hight="400" width="800" alt="First slide" /></div>
                <div class="carousel-item"><img class="d-block img-fluid" src="/images/ch2.png" height="400" width="800" alt="Second slide" /></div>
                <div class="carousel-item"><img class="d-block img-fluid" src="/images/rest3.png" height="400" width="800" alt="Third slide" /></div>
                <div class="carousel-item"><img class="d-block img-fluid"src="/images/img3.jpg" height="350" width="900" alt="Fourth slide" /></div>
                <div class="carousel-item"><img class="d-block img-fluid" src="/images/img2.jpg" height="350" width="900" alt="Fifth slide" /></div>
                <div class="carousel-item"><img class="d-block img-fluid" src="/images/ch3.jpg" height="350" width="900" alt="Sixth slide" /></div>



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
        
    </div>


@endsection


               

     
