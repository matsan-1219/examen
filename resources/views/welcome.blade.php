@extends('layout.plantilla')
@section('titulo', 'welcome')
@section('titulodePagina','bienvenido, todo para tu moto')
@section('contenido')
    
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3">
                <img src="{{asset('img/06.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: #d64c15">NUEVAS MARCAS</h5>
                </div>
              </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <img src="{{asset('img/uber.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">NUEVO RODUCTO LUBER</h5>
                      <p class="card-text">Lubricante multigrado de la mas alta calidad para motos de 4 tiempos</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{asset('img/anta1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">LLANTAS MICHELIN</h5>
                        <p class="card-text">2-75-18  300-18  300-17</p>
                      <p class="card-text">90-90-18  140-70-17  </p>
                      <p class="card-text">130-60-13  120-60-10  </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card">
                      <img src="{{asset('img/cas3.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">NO SALGAS SIN CASCO</h5>
                          <h5 class="card-title">adquiere el tuyo</h5>
                          <p class="card-text">IRON  RACING</p>
                          <p class="card-text">WINMEX</p>
                          <p class="card-text">MOTOCORP</p>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="{{asset('img/buj.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">BUJIA NGK</h5>
                          <p class="card-text">LLEVATE LA CAJA CON 10 PIEZAS</p>
                        
                      </div>
                    </div>
                  </div>
           
        </div>
    </div>
</div>

      


@endsection
    

    
