<?php
//var_dump($_FILES['image']);


$isHiddenData = false;
$hidden = '';
if (isset($_FILES['image'])) {
    if ($_FILES['image']['type'] == 'image/jpeg') {
        $hexed = bin2hex(file_get_contents($_FILES['image']['tmp_name']));
        preg_match_all('/ffd8ff/', $hexed, $magicNumbers);
        if (sizeof($magicNumbers[0]) > 1) {
            $hidden = preg_split('/(?=ffd8ff)/', $hexed);
            $isHiddenData = true;
        }
    } else {

    }
} else {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="estilos.css">
<title>Policia</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/05dc764b99.js" crossorigin="anonymous"></script>
</head>




<body class="">
<div class="container">
    <div class="">
        <div class="mb-3">
            <h2 class="titulo" style="padding-top:0%;color:#ffffff;padding-bottom: 30px">Archivo Escaneado</h2>
            <div class="card flex-row" style="background-color: #3371B6">
                <img width="200px" src="data:image/png;base64,<?php echo base64_encode(file_get_contents($_FILES['image']['tmp_name'])) ?>" alt="">
                <div class="card-body p-3">
                    <h3><?php echo $_FILES['image']['name'] ?></h3>
                    <hr>
                    <p class="mb-2"><strong>Tipo:</strong> <?php echo $_FILES['image']['type'] ?></p>
                    <p class="mb-2"><strong>Tamaño:</strong> <?php echo number_format($_FILES['image']['size'], 0, '', ',') ?> bytes</p>
                </div>
            </div>
        </div>
        <div class="">
            <h2 class="titulo" style="padding-top:0%;color:#ffffff;padding-bottom: 30px">Archivos Ocultos</h2>
            <?php
            if ($isHiddenData) {
                for ($i = 2; $i < sizeof($hidden); $i++) { ?>
                   <center> <img width="400px" class="card" src="data:image/png;base64,<?php echo base64_encode(hex2bin($hidden[$i])) ?>" alt="" width=""></center>
                    <?php
                }
            } else { ?>
                <center><p style="color: white" class="banner__txt">No hay datos ocultos o no es una imagen</p></center>
            <?php }
            ?>
        </div>
    </div>
</div>
</body>

</html>