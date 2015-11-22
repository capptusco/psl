
<html>
    <head>
        <title>PSL - @yield('title')</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <section id="side_menu" class="side_menu right" tabindex="5000" style="overflow-y: hidden; outline: none; right: 0px; visibility: visible;">
               <a id="cerrar" href="#" target="_self" onclick="" style="color:white;font-size:12px;  float: right;" class="close_side_menu">X</a>


               <div id="comentarpsl">
                  <h3>Publicar PSM</h3>
                  <div id="division" style="height: 5px;background-color: #01a8b1;"></div>
                  <div id="reglas">
                    </br></br>
                    <p>Por favor, respeta las <a href="">reglas al publicar</a></p>
                    <p>+ No hay temas tabú, expresate en 400 caracteres. Evita historias de quinceañereas propias de la SuperPOP.</p>
                    <p>+ Lee y repasa tu mensaje. Escribe correctamente evitando errores ortográficos y lenguaje sms. Los ADV mal redactados y con errores no seran publicados.</p>
                    <p>+ Si tu anécdota no es publicada, no te ofendas, ¡ agradecemos enormemente tu colaboración!</p>
                  </div>
               </div> 
              </br>
               <div id="formupsl">
             
                  {!! Form::open(array('route' => 'psm.store', 'method' => 'post')) !!}

                    {!! Form::text('usuario', null, ["class" => "form-control","placeholder" => "Anonimo"]) !!}</br>
                    <select class="form-control" name="categoria">
                      <option value="">Categoria</option>
                      @foreach($listacats as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                      @endforeach
                    </select></br>
                   <select class="form-control" name="sexo">
                      <option value="">Sexo</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Femenino">Femenino</option>
                    </select></br>
                    {!! Form::textarea('publicacion', null,['class'=>'form-control', 'placeholder'=>'Publicación', 'maxlength'=>'400','rows'=>'5','cols'=>'43'])!!}</br>
                    <label>
                      <input type="checkbox"> Acepto términos y condiciones
                    </label></br></br></br>
                    {!! Form::submit('Publicar', ["class" => "btn boton btn-block"]) !!}
                  
                  {!! Form::close() !!}

                  
               </div>


        </section>
        <div id="wrapper" class="row">
          <div id="superior" class="row">

    			<div id="logologin" class="col-md-12">

                <div id="logo" class="col-md-7">
                      <a href="index.html"><img src="images/logo.png" alt="" class="img-responsive"/></a>
           			</div>  

           			<div id="login" class="col-md-5">

                	<div id="social" class="col-md-6">
                      <div id="instagram" class="col-md-3">
                        <a href="index.html"><img src="images/instagram.png" alt="" class="img-responsive"/></a>
                      </div>
                      <div id="facebook" class="col-md-3">
                        <a href="index.html"><img src="images/facebook.png" alt="" class="img-responsive"/></a>
                      </div>
                      <div id="tweeter" class="col-md-3">
                        <a href="index.html"><img src="images/tweeter.png" alt="" class="img-responsive"/></a>
                      </div>
                      <div id="bing" class="col-md-3">
                        <a href="index.html"><img src="images/bing.png" alt="" class="img-responsive"/></a>
                      </div>
           				</div>  

           				<div id="formulario" class="col-md-12">
                    <button type="button" data-toggle="modal" data-target=".bs-example-modal-lg">Login</button>
           				</div> 

           			</div>  

           		</div>  

           		<div id="menu" class="col-md-12">

                <div id="publicar" class="col-md-2">
                   <a href="">Publicar <strong>PSM</strong></a>
                </div>

                <div id="mejhist" class="col-md-2">
                   <a href="index.html" class="blanco">Mejores </a>
                   <a href="index.html">Historias </a>
                </div>

                <div id="aleatorio" class="col-md-2">
                  <a href="index.html">Aleatorio</a>
                </div>

                <div id="merchan" class="col-md-2">
                  <a href="index.html">Merchandaising</a>
                </div>

                <div id="ultimas" class="col-md-2">
                  <a href="index.html">Ultimas Historias</a>
                </div>

                <div id="moderar" class="col-md-2">
                  <a href="index.html">Moderar</a>
                </div>
                
            	</div>   

            </div>

            <div class="container">
 
            <div class="row">
                <!-- Large modal -->
                
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    
                      <div class="modal-body">
                      <div id="formulario" class="row">
                      <form action="/foo/bar" method="POST">

                                      <div id="info" class="col-md-12">
                                      
                                        <div id="usuario" class="row">

                                            <input type="text" name="user" class="form-control btnredondo" placeholder="Usuario">

                                        </div>

                                        <div id="password" class="row">

                                            <input type="password" name="password" class="form-control btnredondo"  placeholder="Contraseña">

                                        </div>

                                        <div id="enviar" class="row">

                                            <input type="Submit" id="botonlogin" name="enviar" class="btn boton btn-block" value="Login">

                                        </div>
                                      
                                      </div>

                                      <div id="recuperar" class="col-md-10">


                                        <div id="recordarme" class="col-md-5">
                                          <p>Recordarme</p><input type="checkbox" name="remember" value="yes">
                                        </div>

                                        <div id="registro" class="col-md-3">
                                          <a href="index.html">Registro</a>
                                        </div>

                                        <div id="nopuedo" class="col-md-4">
                                          <a href="index.html">No puedo ingresar</a>
                                        </div>

                                      </div>

                                    </form>
                                  </div>
                     
                      </div>
                    </div>
                  </div>
                </div>
                    </div>
                    
                    
                </div>

            <div id="segundomenu" class="row fivecolumns">
              @yield('sidebar')        
        	  </div>

            <div id="container" class="col-md-12">
                @yield('content')
            </div>

            <div id="footer" class="row col-md-12">
                  <a href="">Acerca de PSM / </a><a href="">Términos de servicio / </a>
            </div> 
        </div>
           


        <script src="//code.jquery.com/jquery.js"></script>
        <script src="./js/collapsable.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>