<?php

$xml = simplexml_load_file('data.xml');
echo 'Номер заказа - ' . $xml[PurchaseOrderNumber];
echo "<br>";
echo 'Дата заказа - ' . $xml[OrderDate];
echo "<br>";
echo "<pre>";

foreach ($xml->Address as $result) {
    if ($result[Type] == 'Shipping')
        echo "<u>Адрес доставки:</u> <br>";
    elseif ($result[Type] == 'Billing')
        echo "<u>Адрес плательщика:</u> <br>";
    echo "Имя: " . $result->Name . "<br>";
    echo "Улица: " . $result->Street . "<br>";
    echo "Город: " . $result->City . "<br>";
    echo "Штат: " . $result->State . "<br>";
    echo "Индекс: " . $result->Zip . "<br>";
    echo "Страна: " . $result->Country . "<br>";
    echo "<br>";
}
foreach ($xml->Items->Item as $result) {
    echo "<b>Артикул: </b>" . $result[PartNumber] . "<br>";
    echo "Наименование: " . $result->ProductName . "<br>";
    echo "Количество: " . $result->Quantity . "<br>";
    echo "Цена, $: " . $result->USPrice . "<br>";
    echo "Дата доставки: " . $result->ShipDate . "<br>";
    echo "Коммент.: " . $result->Comment . "<br>";
    echo "<br>";
}



