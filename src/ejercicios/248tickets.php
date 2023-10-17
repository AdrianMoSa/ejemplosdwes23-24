<?php
$valorTotal = $_POST['valorTickets'];
$baremoTickets = $_POST['baremoTickets'];
$productos = array(
    "Hamburguesa" => 8,
    "Pizza Margarita" => 10.50,
    "Tacos de Carnitas" => 10,
    "Ensalada César" => 7,
    "Sushi Roll de Salmón" => 13,
    "Filete de Ternera" => 16,
    "Pollo a la Parrilla" => 11.50,
    "Pasta Alfredo" => 10,
    "Papas Fritas" => 4,
    "Sopa de Tomate" => 4.50,
    "Tarta de Manzana" => 6,
    "Café Espresso" => 2.50,
    "Refresco" => 2,
    "Sándwich de Pavo" => 7.50,
    "Salmón a la Parrilla" => 14,
    "Tacos de Camarones" => 12,
    "Spaghetti Bolognese" => 8.50,
    "Helado de Vainilla" => 5,
    "Enchiladas" => 9.50,
    "Tortilla Española" => 7,
    "Tofu con Verduras" => 8,
    "Cerveza Artesanal" => 6,
    "Sopa Miso" => 4,
    "Chuletas de Cerdo" => 12.50,
    "Lasagna" => 11,
    "Palitos de Queso" => 5,
    "Crepe de Nutella" => 7,
    "Tacos de Pescado" => 12,
    "Quesadilla" => 7.50,
    "Hot Dog" => 6,
    "Tostada" => 2,
    "Caesar Wrap" => 9,
    "Mousse de Chocolate" => 5,
    "Té Verde" => 3,
    "Pechuga de Pollo Empanizada" => 11,
    "Pasta Pesto" => 9,
    "Nuggets de Pollo" => 6.50,
    "Arroz Frito con Vegetales" => 8,
    "Sopa de Lentejas" => 4.50,
    "Crepes de Espinacas" => 6,
    "Pollo al Curry" => 12,
    "Sándwich de Atún" => 8.50,
    "Lasagna Vegetariana" => 9.50,
    "Papas Bravas" => 5,
    "Smoothie de Frutas" => 3.50,
    "Sopa de Champiñones" => 5.50,
    "Filete de Salmón a la Parrilla" => 15,
    "Huevos Benedictinos" => 8,
    "Crepe de Fresa" => 6.50,
    "Café Latte" => 3,
    "Café solo" => 1,
    "Botella de Agua" => 0.50,
    "Malteada de Chocolate" => 5
);
function generarNumeroAleatorioTickets(int $numero): int
{
    if ($numero === 1) {
        $aleatorio = random_int(1, 5);
    }
    else if ($numero === 2) {
        $aleatorio = random_int(10, 20);
    }
    else if ($numero === 3) {
        $aleatorio = random_int(20, 70);
    }
    return $aleatorio;
}

//Funciona
function generarProductosDisponibles(int $valorTicket, array $productos): array{
    $arrayProductos=[];
    foreach ($productos as $producto=>$valor){
        if($valor<=$valorTicket){
            $arrayProductos[$producto]=$valor;
        }
    }
    return $arrayProductos;
}
function rellenarTickets(int $valorTicket, array $productos): array{
    $total=0;
    $ticket=[];
    //echo "El valor del ticket es: $valorTicket<br>";
    while($total<$valorTicket){
        $productoAleatorio=array_rand($productos);
        $precioProducto=$productos[$productoAleatorio];
        if ($total+$precioProducto<=$valorTicket){
            $ticket[]=array("producto"=>$productoAleatorio, "precio"=>$precioProducto);
            $total+=$precioProducto;
        }
    }

    /*
     foreach ($ticket as $producto){
        echo "Producto :".$producto["producto"]." Precio:".$producto["precio"]."<br>";
    }

    //print_r($ticket);*/

    return $ticket;
}

function esPosible($baremo, $valorTicket,$contadorRestante):bool{
    $posible=true;
    switch ($baremo){
        case 2:
            if($contadorRestante-$valorTicket<10) {
                $posible = false;
            }
            break;
        case 3:
            if($contadorRestante-$valorTicket<20) {
                $posible = false;
            }
            break;
    }
    return $posible;

}
function generarTickets(int $total, int $baremo, array $productos): array
{

    $contadorRestante = $total;
    $arrayTicket = [];
    for ($i = 1; $contadorRestante != 0; $i++) {
       $valorTicket = generarNumeroAleatorioTickets($baremo);
        $arrayProductosDisponibles=generarProductosDisponibles($valorTicket,$productos);
        $ticket = rellenarTickets($valorTicket,$arrayProductosDisponibles);
        if($contadorRestante-$valorTicket>=0){
            if(esPosible($baremo, $valorTicket,$contadorRestante)){
                $arrayTicket = $ticket;
                $contadorRestante -= $valorTicket;
            }
        }
    }
    //var_dump($arrayTicket);
return $arrayTicket;
}


function mostrarTicket(array $tickets){
$numero=1;

    /*foreach ($tickets as $indice=>$ticket){
        echo "El ticket numero $indice :<br>";
        foreach ($ticket as $producto=>$precio){
            echo "el producto: $producto y su valor: $precio<br>";
        }
        echo "-----------------------";
    }*/
    /*foreach ($tickets as $ticket) {
        echo "El ticket $numero:<br>";
        $numero++;
        foreach ($ticket as $producto) {
            echo "Producto :" . $producto["producto"] . " Precio:" . $producto["precio"] . "<br>";
        }
        echo "-----------------------";
    }*/
    //var_dump($tickets);
}

$ticketsTotales=generarTickets($valorTotal,$baremoTickets,$productos);
var_dump($ticketsTotales);

mostrarTicket($ticketsTotales);
/*
$pruebaArray= generarProductosDisponibles(generarNumeroAleatorioTickets($baremoTickets),$productos);
print_r($pruebaArray);

/*
$numeroRandom = generarNumeroAleatorioTickets($baremoTickets);

echo "el numero aleatorio es: $numeroRandom";
/*


//$valorBuscado = array_search(generarNumeroAleatorioTickets(1),$productos);

/*Escoge un valor random del array
$valorBuscado=array_rand($productos,1);
echo $valorBuscado;
echo "$productos[$valorBuscado]<br>";
/*

/* para imprimir todo el array.
foreach ($productos as $producto=>$valor){
    echo "el producto: $producto y su valor: $valor";
}

print_r(array_keys($productos));
*/