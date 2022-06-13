<?php
include_once 'Processing/Processing.php';
include_once 'Processing/Conversion/currency.php';

$myCard = new Processing\ManageCardVisaMaster();
$myCard->cardInformationUpdate('Khanh', 'XYZ001', 01-01-2023, 'A00011');
$myCard->putMoney(1000);
$myCard->cardInformationViewing();
$myCard->payment(800, 01-01-2023, 'A00011');
$myCard->currencyConversion();
