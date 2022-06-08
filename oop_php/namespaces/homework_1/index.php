<?php
include_once 'src/Model/Customer.php';

$customer = new Model\Customer('Khanh');
echo $customer->getName();
