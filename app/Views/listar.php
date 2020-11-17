<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<header>
        <nav class="teal lighten-2">
        <div class="container">
            <div class="nav-wrapper">
            <a href="/" style="font-weight:800" class="brand-logo">Casera Hotel</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="">Registrar</a></li>
                <li><a href="">Listar</a></li>
                <li><a href="">Contactarnos</a></li>
            </ul>
            </div>
        </div>
        </nav>
</header>
<style>

*{
    font-family:'Montserrat'

}
    .fit-img{
    object-fit: cover;
    height:300px;
}
.row h3{
    margin:0
}
</style>
<main>
    <div class="container">
        <div class="row">
            <?php
                foreach($animales as $animal ){
                    echo'
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image">
                                <img src="'.base_url("/public/img/baner1.jpg").'">
                                <span class="card-title">'.$animal["nombre"].'</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light blue darken-1"><i class="material-icons">create</i></a>
                                <a style="right: 75px;" class="btn-floating halfway-fab waves-effect waves-light red darken-4"><i class="material-icons">delete</i></a>
                            </div>
                            <div class="card-content">
                                <p>'.$animal["descripcion"].'</p>
                                <ul>
                                    <li>- Su edad es -> '.$animal["edad"].' meses</li>
                                    <li>- Tipo de animal -> '. ($animal["tipo"] = 0 ? "Domestico" : "silvestre").'</li>
                                    <li>- La comida que debe comer es -> '.$animal["comida"].'</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    ';
                }
                    
            ?>    
        </div>
    </div>
</main>
<script>

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, {});
  });
</script>

</body>
</html>