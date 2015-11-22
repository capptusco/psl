@extends('layouts.principal')

@section('title', 'Inicio')

@section('sidebar')
    @parent
          <div id="myself" class="col-md-1 col-xs-1">
            <a href="index.html"><img src="images/myself.png" alt="" class="img-responsive"/></a>
          </div>

          <div id="people" class="col-md-1 col-xs-1">
            <a href="index.html"><img src="images/myself.png" alt="" class="img-responsive"/></a>
          </div>

          <div id="peace" class="col-md-1 col-xs-1">
            <a href="index.html"><img src="images/myself.png" alt="" class="img-responsive"/></a>
          </div>

          <div id="new" class="col-md-1 col-xs-1">
            <a href="index.html"><img src="images/myself.png" alt="" class="img-responsive"/></a>
          </div>

          <div id="connection" class="col-md-1 col-xs-1">
            <a href="index.html"><img src="images/myself.png" alt="" class="img-responsive"/></a>
          </div>

          <div id="calm" class="col-md-1 col-xs-1">
            <a href="index.html"><img src="images/myself.png" alt="" class="img-responsive"/></a>
          </div>

          <div id="beuty" class="col-md-1 col-xs-1">
            <a href="index.html"><img src="images/myself.png" alt="" class="img-responsive"/></a>
          </div>

          <div id="happy" class="col-md-1 col-xs-1">
            <a href="index.html"><img src="images/myself.png" alt="" class="img-responsive"/></a>
          </div>

          <div id="play" class="col-md-1 col-xs-1">
            <a href="index.html"><img src="images/myself.png" alt="" class="img-responsive"/></a>
          </div>

          <div id="think" class="col-md-1 col-xs-1">
            <a href="index.html"><img src="images/myself.png" alt="" class="img-responsive"/></a>
          </div>
@endsection

@section('content')

      
      @if($psms)

        <?php $i=0;?>
        <?php $j=0;?>
        <?php $fila="postrowpar";?>
        <?php $columna="postcolpar";?>
        @foreach($psms as $psm)
          
       

          @if($j%2 == 0)
            @if($j > 0)  
              <?php $i++; ?>
              <?php $j=0; ?>
              </div>
            @endif
          @endif      

          @if($i%2 == 0)
             <?php $fila="postrowpar"; ?>
          @else
             <?php $fila="postrowimpar";?>
          @endif

          @if($j%2 == 0 )
            <div class="{{ $fila }}"> 
          @endif

          @if($j%2 == 0)
             <?php $columna="postcolpar"; ?>
          @else
             <?php $columna="postcolimpar"; ?>
          @endif
          
          <div class="{{ $columna }} col-md-6">

            <div class="row">
              <div class="muesca"></div>
              <div class="usuario foto col-md-4">
                <img src="images/myself.png" alt="" class="img-responsive"/>
                <p>{{ $psm->usuario }}</p>
              </div>
              <?php
                $parapartir = substr($psm->created_at,0,10);
                $ano = substr($parapartir,0,4);
                $mes = substr($parapartir,5,-3);
                $dia = substr($parapartir,8,2);
                
                $fecha = strftime("%d de %B del %Y",mktime(0, 0, 0, $mes, $dia, $ano));
              ?>
              <div class="post comentario col-md-8">
                  <p>{{ $fecha }}</a>
                  <p class="negro">{{ $psm->publicacion }}</p>
              </div>
            </div>

            <div class="row">
              
              <div class="usuario tag col-md-4">
                <img src="images/myself.png" alt="" class="img-responsive"/>
              </div>
              <?php 
                $votos = intval($psm->votos);
                $sumavotos = intval($psm->sumavotos);
                if($votos==0){
                  $votos =1;
                }
                $puntaje = intval($sumavotos / $votos);
                ?>
              <div class="post interactuar col-md-8">
                  <div class="escribir col-md-6">
                    <p class="comenta">Comenta</p>
                    <div class="puntaje estrellas{{$puntaje}}"></div>
                  </div>
                  <div class="compartir col-md-6">
                    <div class="divisor"></div>
                    <p>Share <img src="images/sharefb.png" width="17px" heigth="17px" >  <img src="images/sharetw.png" width="17px" heigth="17px"></p>
                  </div>
              </div>
            </div>

          </div>

          <?php $j++; ?>

        @endforeach

        </div>
               
      @endif
  
        
@endsection


				
			