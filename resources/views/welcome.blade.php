@extends('layouts.app')
@section('content')

<div class="row">
                <div class="col-lg-3">
                    <h1 class="my-4">Nos Services</h1>
                    <div class="list-group">
                        <a class="list-group-item" href="#!">Reservations</a>
                        <a class="list-group-item" href="#!">Restaurations</a>
                        <a class="list-group-item" href="#!">Activités</a>
                        <a class="list-group-item" href="#!">Bien Etres</a>
                        <a class="list-group-item" href="#!">Services</a>
                    </div>
                </div>
                <div class="col-lg-9">
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
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-55">
                                <a href="#!"><img class="card-img-top"  height="150" src="/images/109348086_643962209661458_6055582010355001046_n.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Reservations</a></h4>
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-55">
                                <a href="#!"><img class="card-img-top" height="150" src="/images/181332957_295623345479243_8754722557943562476_n.jpg"  alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Restauration</a></h4>
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-55">
                                <a href="#!"><img class="card-img-top"  height="150" src="/images/181846405_1639385406247353_7355347222931292017_n.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Acitivités</a></h4>
                                   
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-55">
                                <a href="#!"><img class="card-img-top"  height="150" src="/images/182229132_1675753329302325_9183201522271453827_n.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Bien Etre</a></h4>
                                    
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-55">
                                <a href="#!"><img class="card-img-top"  height="150" src="/images/117395605_826711041444304_5397342219903027048_n.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Services</a></h4>
                                
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-55">
                                <a href="#!"><img class="card-img-top"  height="150" src="/images/73312148_531245677435067_4898590989146390528_n.png" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Utilisateurs</a></h4>
                                   
                                </div>
                                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection


               

     
