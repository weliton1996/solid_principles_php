<?php

require __DIR__."/vendor/autoload.php";

// Aplicando SRP
use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\EmailService;

// echo CarrinhoCompra::teste();

$carrinho = new CarrinhoCompra();

echo '<br/>Com SRP.<br/><br/>';

$pedido = new Pedido();

// ------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copo');
$item1->setValor(4.55);

$item2->setDescricao('Lâmpada');
$item2->setValor(8.32);
// ------------------------------

echo '<h4>Pedido</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
// ------------------------------

echo '<br>';
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

// ------------------------------
echo '<br>';
echo '<h4>Pedido com itens</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

// ------------------------------
echo '<br>';
echo '<h4>Exibindo itens</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';

// ------------------------------
echo '<br>';
echo '<h4>Valor do pedido</h4>';
echo '<pre>';
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item){
    // echo $item->getValor(). '<br>';
    $total += $item->getValor();
}
echo $total;
echo '</pre>';

// ------------------------------
echo '<br>';
echo '<h4>Carrinho é valido?</h4>';
echo($pedido->getCarrinhoCompra()->validarCarrinho());

// ------------------------------
echo '<br>';
echo '<h4>Status do pedido</h4>';
echo($pedido->getStatus());

// ------------------------------
echo '<br>';
echo '<h4>Confirmar pedido</h4>';
$pedido->confirmar();
echo($pedido->getStatus());

// ------------------------------
echo '<br>';
echo '<h4>E-mail</h4>';
if($pedido->getStatus() == 'confirmado') {
    // $disparoEmail = new EmailService();
    // echo $disparoEmail->dispararEmail();

    echo EmailService::dispararEmail();
}