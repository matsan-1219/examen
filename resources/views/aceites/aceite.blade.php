@extends('layout.plantilla')
@section('titulo', 'aceite')
@section('titulodePagina','aceites gr')
@section('contenido')
   
   <div class="container">
       <div class="row">
           <div class="col-sm-12">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <img src="{{asset('img/a1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">MOTUL 3000 10W-40 4T</h5>
                      <p class="card-text">$126
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{asset('img/a2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">REPSOL</h5>
                      <p class="card-text">$105</p>
                      <p class="card-text">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{asset('img/a55.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">AKRON</h5>
                      <p class="card-text">$88 </p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{asset('img/a4.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">ELF</h5>
                      <p class="card-text">$95</p>
                      
                    </div>
                  </div>
                </div>
              </div>
           </div>
       </div>
   </div>
        

    </div>
@endsection
    

    
