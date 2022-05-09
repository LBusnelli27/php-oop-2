<?php 
include_once __DIR__ . "/classes/Client.php";
include_once __DIR__ . "/classes/Product.php";

$croccantini = new PetFood('Pollo, patate', 'Latta', '2022-10-13');

$card = new PaymentMethod('Luca Busnelli', '12323434568723', 2023, 032, 50);
$customer = new Client("Luca", "Busna", 'Milano', 'Via Montenapoleone', $card);
echo $customer->buyProduct($croccantini);

$card->setBalance(200);
echo $customer->buyProduct($croccantini);
echo "<br>";
echo "Disponibilità: " . $customer->getBalance();

?>