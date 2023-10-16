<?php
$valorTotal= $_POST['valorTickets'];
$baremoTickets= $_POST['baremoTickets'];
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
    "Hot Dog" => 5.99,
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
    "Café Latte" => 2.99,
    "Café solo" => 1,50,
    "Botella de Agua"=> 1,
    "Malteada de Chocolate" => 4.99
);
function generarNumeroAleatorioTickets(int $numero):int{
    if($numero===1) {
        $aleatorio = random_int(1,5);
        }
    if($numero===2){
        $aleatorio = random_int(10,20);
    }
    if($numero===3){
        $aleatorio = random_int(20,70);
    }
    return $aleatorio;
}
/* Dejar para despues hacer antes una función que mediante baremos te dé el numero de tickets y el valor.
function generarTickets(int $total, int $baremo, array $productos):array{
    $arrayTicket=[];
    $precioTotal= $total;
    foreach ($productos as $producto=>$valor){
        if($valor<$baremo and )
    }
}

 $numeroRandom=generarNumeroAleatorioTickets($baremoTickets);

echo "el numero aleatorio es: $numeroRandom";

foreach ($productos as $producto=>$valor){
    echo "el producto: $producto y su valor: $valor";
}
*/
