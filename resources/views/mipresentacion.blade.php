<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="resources/css/misestilos.css" rel="stylesheet" type="text/css" >
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <title>Boton</title>
    <style>
           #MiImagen{
               margin-top: 10px;
    width: 170px;
   height: 180px; 
   align-items: center;
   
}

#formulario{
         background-color: skyblue;
        margin-top: 0px;
        text-align: center;
        justify-content: center;
        background-image: linear-gradient(to right, #fdcae1 , #b0c2f2);
        
}

h1{
    color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
        </style>
</head>
<body  >
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet"/>


<section class="content">
    <div class="row">
        <!--Columna derecha-->
    
        <div class="col-sm-6 mx-auto">
            <div class="box box-warning">
            <br>
            <br>
                <div class="box-header with-border">
                    <h3 class="box-title">Presentación</h3>
                </div>

                <!--Aqui empieza la informacion del solicitante-->
                <form id="formulario" class="user">
                    <div class="form-row">  
                        <div class="form-group col-md-12">
                            <img id="MiImagen"  src="https://media-exp1.licdn.com/dms/image/C4D03AQFZR6h_1qKRYQ/profile-displayphoto-shrink_800_800/0/1639534763137?e=1648080000&v=beta&t=Li9Fqn2RpsS9BSnIVvFj7_21yrApwEvJj9YnhazpkA4"  class="rounded">
                        <h1>Maria Paola Vilcapoma Ignacio</h1>
                        </div>                                               
                     </div>
                     <div class="form-row">                                          
                     <div class="form-group col-md-2">
                          
                             </div> 
                        <div class="form-group col-md-8">
                           <p> Soy del distrito de Colca, provincia de Huancayo, 
                               actualmente estoy estudiando en el instituto
                            Continental, la carrera Desarrollo de sistemas 
                        de información </p>
                             </div>                       
                     </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>