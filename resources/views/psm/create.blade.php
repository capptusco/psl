@extends('layouts.principal')

@section('title', 'Inicio')

@section('formulario')
    @parent
                  @foreach ($errors->all() as $error)
                              <p class="error">{{ $error }}</p>
                          @endforeach




                  <form method="post" action="psm/store">
                      <input name="nombre" class="form-control" placeholder="Anonimo"><br>
                      <select name="categoria" class="form-control">
                        <option value="">Categoria</option>
                        <option value="volvo">Myself</option>
                        <option value="saab">People</option>
                        <option value="fiat">Peace</option>
                        <option value="audi">New Things</option>
                        <option value="audi">Connection</option>
                        <option value="audi">Calm</option>
                        <option value="audi">Beauty</option>
                        <option value="audi">Happines</option>
                        <option value="audi">Playing</option>
                        <option value="audi">Thinking</option>
                      </select><br>
                      <select name="sexo" class="form-control">
                        <option value="">Sexo</option>
                        <option value="volvo">Masculino</option>
                        <option value="saab">Femenino</option>
                      </select><br>
                      <textarea name="publicacion" maxlength="400" rows="5" cols="43" class="form-control"></textarea></br>
                      <label>
                          <input type="checkbox"> Acepto términos y condiciones
                      </label></br></br></br>
                      <input type="submit" value="Publicar" class="boton btn btn-default form-control">
                  </form>
@endsection

@section('content')
     <div class="postrowpar row col-md-12">   
   		<div class="postcolpar col-md-4">
   			<div class="row col-md-12">
   				
          <div class="usuario foto col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   					<p>Nombre</p>
   				</div>
          
   				<div class="post comentario col-md-8">
   						<p>Post comentario</p>
   				</div>
   			</div>
   			<div class="row col-md-12">
   				
   				<div class="usuario tag col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   				</div>

   				<div class="post interactuar col-md-8">
	   					<div class="escribir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   					<div class="compartir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   			</div>
   			</div>
        </div>      
        <div class="postcolimpar col-md-4">
   			<div class="row col-md-12">
   				<div class="usuario foto col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   					<p>Nombre</p>
   				</div>
   				<div class="post comentario col-md-8">
   						<p>Post comentario</p>
   				</div>
   			</div>
   			<div class="row col-md-12">
   				
   				<div class="usuario tag col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   				</div>

   				<div class="post interactuar col-md-8">
	   					<div class="escribir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   					<div class="compartir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   			</div>
   			</div>
        </div>  
        <div class="postcolpar col-md-4">
   			<div class="row col-md-12">
   				<div class="usuario foto col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   					<p>Nombre</p>s
   				</div>
   				<div class="post comentario col-md-8">
   						<p>Post comentario</p>
   				</div>
   			</div>
   			<div class="row col-md-12">
   				
   				<div class="usuario tag col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   				</div>

   				<div class="post interactuar col-md-8">
	   					<div class="escribir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   					<div class="compartir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   			</div>
   			</div>
        </div>           
     </div>


     <div class="postrowimpar row col-md-12">   
   		<div class="postcolpar col-md-4">
   			<div class="row col-md-12">
   				<div class="usuario foto col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   					<p>Nombre</p>s
   				</div>
   				<div class="post comentario col-md-8">
   						<p>Post comentario</p>
   				</div>
   			</div>
   			<div class="row col-md-12">
   				
   				<div class="usuario tag col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   				</div>

   				<div class="post interactuar col-md-8">
	   					<div class="escribir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   					<div class="compartir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   			</div>
   			</div>
        </div>      
        <div class="postcolimpar col-md-4">
   			<div class="row col-md-12">
   				<div class="usuario foto col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   					<p>Nombre</p>s
   				</div>
   				<div class="post comentario col-md-8">
   						<p>Post comentario</p>
   				</div>
   			</div>
   			<div class="row col-md-12">
   				
   				<div class="usuario tag col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   				</div>

   				<div class="post interactuar col-md-8">
	   					<div class="escribir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   					<div class="compartir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   			</div>
   			</div>
        </div>  
        <div class="postcolpar col-md-4">
   			<div class="row col-md-12">
   				<div class="usuario foto col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   					<p>Nombre</p>s
   				</div>
   				<div class="post comentario col-md-8">
   						<p>Post comentario</p>
   				</div>
   			</div>
   			<div class="row col-md-12">
   				
   				<div class="usuario tag col-md-4">
   					<img src="../images/myself.png" alt="" class="img-responsive"/>
   				</div>

   				<div class="post interactuar col-md-8">
	   					<div class="escribir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   					<div class="compartir col-md-6">
	   						<p>Hola</p>
	   					</div>
	   			</div>
   			</div>
        </div>           
     </div>

   
        
@endsection


				
			