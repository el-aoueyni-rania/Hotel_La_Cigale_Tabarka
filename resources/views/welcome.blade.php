@extends('layouts.app')

@section('content')
  <br><br>     
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

<div class="wpb_text_column wpb_content_element ">
    <div class="wpb_wrapper">
        <h1 style="text-align: center; color: #2b76a2 !important;"><strong style="font-variant: small-caps;">Un Tout Pour Vous Plaire </strong></h1>

    </div>
</div>
<br>
<div class="wpb_text_column wpb_content_element ">
    <div class="wpb_wrapper">
        <h4 style="text-align: center;"><strong>Une s??r??nit?? et une douceur que vous ne trouverez nulle part ailleurs</strong></h4>

    </div>
</div>
<br>
  <div class="row" style="margin-left: 50px">
    <div class="col-lg-4 " style="margin-bottom: 50px">
        <div class="card" style="width: 20rem;">
            <img src="../images/chm4.jpg" class="imgk" alt="...">
            <div class="card-body">
              <h5 class="card-title">Chambres & Suites</h5>
              <p class="card-text">Les chambres sont dot??es de la climatisation, d'une t??l??vision par satellite et d'un balcon ou d'une terrasse. Le restaurant sur place sert une cuisine traditionnelle sous forme de buffet.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 " style="margin-bottom: 50px">
            <div class="card" style="width: 20rem;">
                <img src="../images/rest3.png" class="imgk" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Restaurants & Bars</h5>
                  <p class="card-text"> la restauration se d??cline en buffet ou ?? la carte pour sublimer les produits du terroir sans jamais les d??naturer. Les grands classiques de la cuisine m??diterran??enne et internationale sont ?? l???honneur. </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 " style="margin-bottom: 50px">
                <div class="card" style="width: 20rem;">
                    <img src="../images/reun.png" class="imgk" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">R??unions & ??v??nements</h5>
                      <p class="card-text">Durant votre s??jour ?? La Cigale Tabarka H??tel ??? Thalasso & Spa ??? Golf , vous serez toujours connect??s et votre travail ne s???arr??tera jamais gr??ce ?? nos services complets d???affaires.</p>
                    </div>
                  </div>
                </div>
                        <div class="col-lg-4 " style="margin-bottom: 50px">
                            <div class="card" style="width: 20rem;">
                                <img src="../images/spa3.jpg" class="imgk" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Thalasso & SPA</h5>
                                  <p class="card-text"> La Cigale Thalasso & SPA est l???un des plus luxueux ??tablissements . </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 " style="margin-bottom: 50px">
                                <div class="card" style="width: 20rem;">
                                    <img src="../images/golf4.jpg" class="imgk" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Golf</h5>
                                      <p class="card-text">Fait peau neuve afin d???offrir ?? ses membres et aux visiteurs un parcours exceptionnel.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4 " style="margin-bottom: 50px">
                                    <div class="card" style="width: 20rem;">
                                        <img src="../images/stade.png" class="imgk" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Complexe Sportif</h5>
                                          <p class="card-text">Un lieu o?? l???exigence du plus haut niveau c??toie l?????motion au quotidien.</p>
                                        </div>
                                      </div>
                                    </div>   
</div>




@endsection