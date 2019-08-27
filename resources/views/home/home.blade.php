@extends('master.index')
@section('title','home')
@section('content')
  {{--  slider  --}}
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.squarespace-cdn.com/content/v1/5c1e0cbdf93fd4d532bff977/1548084914501-ZCOIID5RKBMW9ANI8G9R/ke17ZwdGBToddI8pDm48kCIucNrXHoy_vg-75bVrNDhZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PIQqgg-nArBv2Fc8uIvb6sCEGggUtXwxSjtPX3LrzV6d0/rsz_2.png" class="d-block w-100" alt="slide">
      </div>
      <div class="carousel-item">
        <img src="https://images.squarespace-cdn.com/content/v1/5c1e0cbdf93fd4d532bff977/1548084914462-40O868B683YBV0DVNLRF/ke17ZwdGBToddI8pDm48kCIucNrXHoy_vg-75bVrNDhZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PIQqgg-nArBv2Fc8uIvb6sCEGggUtXwxSjtPX3LrzV6d0/rsz_1.png" class="d-block w-100" alt="slide">
      </div>
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
  {{--  end   --}}
   
@endsection