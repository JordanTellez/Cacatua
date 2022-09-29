<!DOCTYPE html>

<html lang="es">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
    maximum-scale=1.0, minimun-scale=1.0">
<title>Policia</title>
<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/05dc764b99.js" crossorigin="anonymous"></script>


<header class="header">
    <div class="contenedor">
        <h1   class="logo" STYLE="margin-top: 15px" ><g"></h1>
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
            <ul class="menu" style="width: 1500px;margin-left: 50px">
                <ul class="nav" style="padding-right: 150px;padding-top: 1%;">

                    <li><a href="">Inicio</a></li>

                    <li><a>Denuncia</a>
                        <ul>
                            <li><a href="CITAS/editorialAlta.php">Boton Panico </a></li>
                            <li><a href="CITAS/editorialConsulta.php">Realizar una denuncia </a></li>

                        </ul>
                    </li>


                    <li><a href="" target="_blank">Ubicacion</a></li>
                </ul>




                <style type="text/css">

                    * {
                        margin:0px;
                        padding:0px;
                    }

                    #header {
                        margin:auto;
                        width:500px;
                        font-family:Arial, Helvetica, sans-serif;
                    }

                    ul, ol {
                        list-style:none;
                    }

                    .nav > li {
                        float:left;

                    }

                    .nav li a {
                        background-color:rgb(128, 12, 31);
                        color:white;
                        text-decoration:none;
                        padding:13px 14px ;
                        display:block;
                    }

                    .nav li a:hover {
                        background-color:coral;

                    }

                    .nav li ul {
                        display:none;
                        position:absolute;
                        min-width:140px;
                    }

                    .nav li:hover > ul {
                        display:block;
                    }

                    .nav li ul li {
                        position:relative;
                    }

                    .nav li ul li ul {
                        right:-140px;
                        top:0px;
                    }

                </style>

            </ul>
        </nav>
    </div>
</header>




<div class="banner">
    <img src="Imagen/fondopoli.jpg" alt="">
    <div class="contenedor">


        <h2 class="banner__titulo">Policia Cibernética</h2>
        <p class="banner__txt">La Policía Cibernética fue creada con la finalidad de  detectar por medio del patrullaje en la red, los sitios, procesos y responsables de las diferentes conductas delictivas que se puedan cometer en contra y a través de medios  informáticos y electrónicos. </p>
    </div>
</div>

<div class="vh-100 d-flex flex-column justify-content-center align-items-center">
    <h2 class="titulo" style="padding-top:0%;color:#ffffff;padding-bottom: 30px">Escanear imagen</h2>
    <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger">
            <strong><i class="fa-solid fa-xmark"></i> Este archivo no es una imagen!</strong>
        </div>
    <?php } ?>
    <form class="d-flex" action="escanear.php" method="post" enctype="multipart/form-data">
        <input class="form-control me-2" type="file" name="image" id="" required>
        <button class="btn btn-primary active" type="submit"><i>Escanear</i></button>
    </form>
</div>

<br>
<br>

<h2 class="titulo" style="padding-top:0%;color:#ffffff;padding-bottom: 30px">UBICACION</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29871.099814563237!2d-103.42880095018184!3d20.633442844015804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2f6f4fd8d196aa6e!2sMASCOTAS!5e0!3m2!1ses!2smx!4v1601255499027!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0; padding-left: 30px; padding-right: 30px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


<section class="form_wrap">

    <section class="cantact_info">
        <section class="info_title">
            <span class="fa fa-user-circle"></span>
            <h2>Policia<br>
                Cibernetica </h2>
        </section>
        <section class="info_items">
            <p><span class="fa fa-envelope" "></span>
                policia_cibernetica@policia.gob.mx</p>
        </section>
    </section>

    <form action="" class="form_contact">
        <h2>Envianos tu denuncia</h2>
        <div class="user_info">
            <label for="names">Nombres *</label>
            <input type="text" id="names">

            <label for="phone">Telefono / Celular</label>
            <input type="text" id="phone">

            <label for="email">Correo electronico *</label>
            <input type="text" id="email">

            <label for="mensaje">Denuncia *</label>
            <textarea id="mensaje"></textarea>

            <input type="button" value="Enviar Denuncia" id="btnSend">
        </div>
    </form>

</section>











<!--------------------------------------PIE  DE DE PAGINA FOOTER  ------------------------------------------------>


<footer class="footer">

    <div class="contenedor">
        <div class="social">
            <a href="#" target="_blank" class="icon-facebook" >
                <img src="Imagen/face.jpg" alt=""></a>
            <a href="#" class="icon-twitter">
                <img src="Imagen/twitter.png" alt=""></a>

            <a href="#" class="icon-gplus">
                <img src="Imagen/instagran.png" alt=""></a>

            <a href="#" class="icon-vine">
                <img src="Imagen/youtube.png" alt=""></a>

        </div>
    </div>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h2>TELÉFONO</h2>
            <p>911</p>
        </div>
        <div class="content-foo">
            <h2>EMAIL</h2>
            <p>policia_cibernetica@policia.gob.mx</p>
        </div>
        <div class="content-foo">
            <h2>LOCALIZACIÓN</h2>
            <p>AV.LÓPEZ POLICIA</p>
        </div>
    </div>
    <h2 class="copy"> Dirección General de Tecnologías de la Información. Secretaría de Administración. </h2>

</footer>
<script src="js/menu.js"></script>


</html>


