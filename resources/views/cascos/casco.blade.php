@extends('layout.plantilla')
@section('titulo', 'casco')
@section('titulodePagina','casco gr')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-ms-12">
            <div class="card">
            <div class="text-center">
                <img src="{{asset('img/cas.jpg')}}"class="rounded" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CASCO IRON</h5>
                </div>    
              </div>
            </div>
            <div class="card">
                <div class="text-center">
                    <img src="{{asset('img/casm.jpg')}}"class="rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CASCO MOTOCROS</h5>
                    </div>    
                  </div>
                </div>
                <div class="card">
                    <div class="text-center">
                        <img src="{{asset('img/T.jpg')}}"class="rounded" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CASCO MOTOCORP</h5>
                        </div>    
                      </div>
                    </div>
                    <div class="card">
                        <div class="text-center">
                            <img src="{{asset('img/ya.jpg')}}"class="rounded" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">CASCO MOTOCORP</h5>
                            </div>    
                          </div>
                        </div>
                        <div class="card">
                            <div class="text-center">
                                <img src="{{asset('img/BH.jpg')}}"class="rounded" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">CASCO MOTOCORP</h5>
                                </div>    
                              </div>
                            </div>
        </div>
    </div>
</div>

@endsection
    