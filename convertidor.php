<?php
//creamos las variables en vacío

$valor = '';
$desde = '';
$hasta = '';

//Convertimos a la medida estandar: metros

function convertir_a_metros($valor, $unidad_desde){

    switch($unidad_desde){
        
        case 'Milimetro':
            return $valor / 1000;
        break;
        case 'Centimetro':
            return $valor /100;
        break;
        case 'Decimetro':
            return $valor /10;
        break;
        case 'Metro':
            return $valor * 1;
        break;
        case 'Decametro':
            return $valor *10;
        break;
        case 'Hectometro':
            return $valor *100;
        break;
        case 'Kilometro':
            return $valor *1000;
        break;
        default:
        return 'Unidad de medida no soportada';
        break;
        
    }
}

//convertimos desde metros

function convertir_desde_metros($valor, $unidad_hasta){

    switch($unidad_hasta){
        
        case 'Milimetro':
            return $valor * 1000;
        break;
        case 'Centimetro':
            return $valor * 100;
        break;
        case 'Decimetro':
            return $valor * 10;
        break;
        case 'Metro':
            return $valor * 1;
        break;
        case 'Decametro':
            return $valor / 10;
        break;
        case 'Hectometro':
            return $valor / 100;
        break;
        case 'Kilometro':
            return $valor / 1000;
        break;
        default:
        return 'Unidad de medida no soportada';
        break;
    }
}

if(isset($_POST["convertir"])){

    //obtener los valores
    $valor = $_POST['valor'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];

    $calculoDesde =convertir_a_metros($valor, $desde);

    $calculoHasta=convertir_desde_metros($calculoDesde, $hasta);

    $resultado = $calculoHasta;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Conversor de Longitud</title>
</head>
<body>
    <h1 class="text-center">CONVERSOR DE LONGITUD</h1>
    <div class="container">
        <form method="POST" >
            <div class="row mt-4">
                <div class="col-sm-4">
                    <div>
                        <label for="valor" class="form-label">VALOR:</label>
                        <input type="number" name="valor" class="form-control" value="">
                    </div>
                </div>
            

            <div class="col-sm-4">
                <label for="desde" class="form-label">Desde: </label>
                <select class="form-select" name="desde">
                    <option value="">--selecciona un valor--</option>
                    <option value="Milimitro">Milímitro</option>
                    <option value="Centimetro">Centímetro</option>
                    <option value="Decimetro">Decímetro</option>
                    <option value="Metro">Metro</option>
                    <option value="Decametro">Decámetro</option>
                    <option value="Hectometro">Hectómetro</option>
                    <option value="Kilometro">Kilómetro</option>
                </select>
            </div>

            <div class="col-sm-4">
                <label for="hasta" class="form-label">Hasta: </label>
                <select class="form-select" name="hasta">
                    <option value="">--selecciona un valor--</option>
                    <option value="Milimitro">Milímitro</option>
                    <option value="Centimetro">Centímetro</option>
                    <option value="Decimetro">Decímetro</option>
                    <option value="Metro">Metro</option>
                    <option value="Decametro">Decámetro</option>
                    <option value="Hectometro">Hectómetro</option>
                    <option value="Kilometro">Kilómetro</option>
                </select>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6">
                <button type="submit" name="convertir" class="btn btn-primary w-100 py-4">CONVERTIR</button>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="resultado" class="form-label">RESULTADO:</label>
                    <input type="text" name="resultado" class="form-control"value="<?php if(isset($resultado)) echo $resultado;?>">
                </div>
            </div>
        </div>
        </form>
    </div>
    
</body>
</html>