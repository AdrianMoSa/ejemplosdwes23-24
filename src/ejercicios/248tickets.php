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
function generarNumeroAleatorioTickets(int $numero, float $total): int
{
    if ($numero === 1) {
        $aleatorio = random_int(1, 5);
    } else if ($numero === 2) {

        if ($total >= 10 && $total <= 20) {
            $aleatorio = $total;
        } else {
            $aleatorio = random_int(10, 20);
        }
    } else if ($numero === 3) {
        if ($total >= 20 && $total <= 70) {
            $aleatorio = $total;
        } else {
            $aleatorio = random_int(20, 70);
        }
    }
    return $aleatorio;
}

function generarProductosDisponibles(int $valorTicket, array $productos): array
{
    $arrayProductos = [];
    foreach ($productos as $producto => $valor) {
        if ($valor <= $valorTicket) {
            $arrayProductos[$producto] = $valor;
        }
    }
    return $arrayProductos;
}

function rellenarTickets(int $valorTicket, array $productos): array
{
    $total = 0;
    $ticket = [];
    $contadorDeUnidades = [];
    while ($total < $valorTicket) {
        $productoAleatorio = array_rand($productos);
        $precioProducto = $productos[$productoAleatorio];

        if ($total + $precioProducto <= $valorTicket) {
            if (!isset($ticket[$productoAleatorio])) {
                $contadorDeUnidades[$productoAleatorio] = 1;
            } else {
                $contadorDeUnidades[$productoAleatorio]++;

            }
            $ticket[$productoAleatorio] = array("precio" => $precioProducto, "unidades" => $contadorDeUnidades[$productoAleatorio], "total" => $precioProducto * $contadorDeUnidades[$productoAleatorio]);
            $total += $precioProducto;
        }

    }

    return $ticket;
}

function esPosible($baremo, $valorTicket, $contadorRestante): bool
{
    $posible = true;
    switch ($baremo) {
        case 2:
            if ($contadorRestante - $valorTicket < 10) {
                $posible = false;
                return $posible;
            }
            break;
        case 3:
            if ($contadorRestante - $valorTicket < 20) {
                $posible = false;
                return $posible;
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
        $valorTicket = generarNumeroAleatorioTickets($baremo, $contadorRestante);
        $arrayProductosDisponibles = generarProductosDisponibles($valorTicket, $productos);
        $ticket[] = array($valorTicket, rellenarTickets($valorTicket, $arrayProductosDisponibles));
        if ($contadorRestante - $valorTicket >= 0) {
            //if(esPosible($baremo, $valorTicket,$contadorRestante)){
            $arrayTicket = $ticket;
            $contadorRestante -= $valorTicket;
            //}
        }
    }

    return $arrayTicket;
}


function mostrarTicket(array $tickets)
{
    $numTicket = 1;
    foreach ($tickets as $ticket) {
        $ticketTotal = $ticket[0];
        $ticketLineas = $ticket[1];
        echo "El ticket numero $numTicket :<br>";
        echo "\t Casa Paco <br>";
        echo "Calle falsa 1,2,3<br>";
        echo " Concepto &nbsp;&nbsp;&nbsp;&nbsp; Precio &nbsp;&nbsp;&nbsp;&nbsp; Unidades &nbsp;&nbsp;&nbsp;&nbsp; Valor total &nbsp;&nbsp;&nbsp;&nbsp;<br>";
        echo "__________________________________________________________________________________________________________________________<br>";
        foreach ($ticketLineas as $producto => $datosProducto) {
            echo $producto . "&nbsp;&nbsp;&nbsp;&nbsp";
            echo $datosProducto['precio'] . "&nbsp;&nbsp;&nbsp;&nbsp";
            echo $datosProducto['unidades'] . "&nbsp;&nbsp;&nbsp;&nbsp";
            echo $datosProducto['total'] . "&nbsp;&nbsp;&nbsp;&nbsp<br>";
        }
        echo "<br>";
        echo "Precio total: " . $ticketTotal . "<br>";
        $numTicket++;
    }

}

$ticketsTotales = generarTickets($valorTotal, $baremoTickets, $productos);
mostrarTicket($ticketsTotales);

