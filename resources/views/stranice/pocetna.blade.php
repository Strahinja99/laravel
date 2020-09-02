@extends('layouts.app')
@section('sadrzaj')
		
		<div class="jumbotron">
  <h1 class="display-4">{{$naslov}}</h1>
  <p class="lead">nudimo Vam širok asortiman usluga za sve vrste događaja.</p>
  <hr class="my-4">
  <p></p>
  <a class="btn btn-primary btn-lg" href="/posts" role="button">Pogledaj Usluge</a>
  <a class="btn btn-primary btn-lg" href="/cene" role="button">Pogledaj Cene</a>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
	  <img src="/images/banner.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Neki tekst</h5>
        <p>jos neki tekst.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/banner_service.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Neki tekst</h5>
        <p>jos neki tekst.jos neki tekst.jos neki tekst.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/images/img.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>jos neki tekst.jos neki tekst.</h5>
        <p>asfasf.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection
