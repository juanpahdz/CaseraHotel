<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casera</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<style>

*{
    font-family:'Montserrat'

}
.section{
    padding:30px;
    min-height:300px;
    display:flex;
    align-items:center;
}
.section.background{
    background-attachment: fixed;
    background-repeat:no-repeat;
    background-position:center;
    background-size:cover;
}
.fit-img{
    object-fit: cover;
    height:300px
}
</style>

<body>
<?php echo(isset($animal["id"]) ? "<script>M.toast({html: '".$animal["id"]." Registrado con Exito'})</script>": "");?>
    <header>
        <nav class="teal lighten-2">
        <div class="container">
            <div class="nav-wrapper">
            <a href="<?php echo(base_url("/public"))?>" style="font-weight:800" class="brand-logo">Casera Hotel</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?php echo(base_url("/public"))?>">Registrar</a></li>
                <li><a href="<?php echo(base_url("/public/listar"))?>">Listar</a></li>
                <li><a href="">Contactarnos</a></li>
            </ul>
            </div>
        </div>
        </nav>
    </header>
    <main>
    
        <div style="<?php echo('background-image:url('.base_url("/public/img/baner1.jpg").')') ?>" class="section background paralax">
            <div class="container">
                <div class="row">
                    <div class="col s5">
                    <div style="padding:40px; border-radius:10px"class="card">
                        <div style="text-align:center;" class="card-content">
                            <h3 style="font-weight:600; font-size:2em">REGISTRAR UN ANIMAL</h3>
                            <p style="margin-bottom:20px">¡Estamos siempre para servirte! Dejanos tu responsabilidad</p>
                            <form action="<?php echo(base_url("/public/registro"))?>" method="POST">
                                <div class="row">
                                    <div class="input-field col s6">
                                    <input name="nombre" id="nombre" type="text" class="validate" required>
                                    <label for="nombre">Animal</label>
                                    </div>

                                    <div class="input-field col s6">
                                    <input name="edad" id="edad" type="number" class="validate" required>
                                    <label for="edad">edad</label>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select name="tipo" class="icons" require>
                                        <option value="" disabled selected>Elije una opcion</option>
                                        <option value="0" data-icon="" class="left">Domestico</option>
                                        <option value="1" data-icon="" class="left">fauna silvestre</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="comida" id="comida" type="text" class="validate" required>
                                        <label for="comida">comida</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="imagen" id="imagen" type="text" class="validate" required>
                                        <label for="imagen">Image URL</label>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="input-field col s12">
                                    <textarea name="descripcion" id="descripcion" class="materialize-textarea" required></textarea>
                                    <label for="descripcion">Descripcion</label>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <button type="submit" style="width:100%" class="waves-effect waves-light btn-large teal lighten-2">Registrar ahora</a>
                                </div>
                                    

                            </form>
                        </div>
                    </div>
                    </div>
                    <div class="col s2"></div>
                    <div class="col s5">
                        <div style="display:flex; align-items:center;">
                            <h2 style="color:white; font-weight:700; margin-top: 50%;">
                                !CASERA HOTEL SIEMPRE PARA TI¡<br> <span style="font-size:60%; font-weight:400; line-height:39px;">Estamos para cuidar a los mas indefensos</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <div class="section grey lighten-4">
            <div class="container">
                <div class="row">
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image">
                            <img class="fit-img" src="<?php echo(base_url("/public/img/fauna_silvestre.jpg")) ?>">
                            <span class="card-title">Fauna Silvestre</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image">
                            <img class="fit-img" src="<?php echo(base_url("/public/img/domesticos.jpg")) ?>">
                            <span class="card-title">Animales Domesticos</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image">
                            <img class="fit-img" src="<?php echo(base_url("/public/img/diversidad.jpg")) ?>">
                            <span class="card-title">Diversidad</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>


    </main>
    <footer></footer>

    <script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, {});
  });

        
    
    </script>
</body>
</html>