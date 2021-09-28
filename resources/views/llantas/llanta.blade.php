@extends('layout.plantilla')
@section('titulo', 'llanta')
@section('titulodePagina','llantas gr')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3">
                <img src="{{asset('img/lla.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Adquiere tus llantas</h5>

                </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <img src="{{asset('img/b1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">MICHELIN</h5>
                      <p class="card-text">2-75-18  300-18  300-17</p>
                      <p class="card-text">90-90-18  140-70-17  </p>
                      <p class="card-text">130-60-13  120-60-10  </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{asset('img/b2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">PIRELLI</h5>
                      <p class="card-text">2-75-18  300-18  300-17</p>
                      <p class="card-text">130-60-13  120-60-10  </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{asset('img/b5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">YUANXIN</h5>
                      <p class="card-text">2-75-18  300-18  300-17</p>
                      <p class="card-text">130-60-13  120-60-10  </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card">
                        <p class="card-text"><small class="text-muted">ECONOMICAS</small></p>
                      <img src="{{asset('img/b6.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">FEYDA</h5>
                        <p class="card-text">2-75-18  300-18  300-17</p>
                        <p class="card-text">130-60-13  120-60-10  </p>
                      </div>
                    </div>
                  </div>
               
                <div class="col">
                  <div class="card">
                    <p class="card-text"><small class="text-muted">ECONOMICAS</small></p>
                    <img src="{{asset('img/b3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">YUNDA</h5>
                      <p class="card-text">2-75-18  300-18  300-17</p>
                      <p class="card-text">130-60-13  120-60-10  </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card">
                        <p class="card-text"><small class="text-muted">ECONOMICAS</small></p>
                        <img src="{{asset('img/b4.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        
                        <h5 class="card-title">MOTOCORP</h5>
                        <p class="card-text">2-75-18  300-18  300-17</p>
                        <p class="card-text">130-60-13  120-60-10  </p>
                      </div>
                    </div>
                  </div>
              
        </div>
    </div>
</div>
@endsection
    