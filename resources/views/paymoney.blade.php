<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
   $sec="8gBm/:&EnhH.1/q";
    $s = hash_hmac('sha256', 'Message', $sec, true);
$new = base64_encode($s);

$total_amount=100;
$transaction_uuid=1145;
$product_code="EPAYTEST";
?>
{{$new}}

<body>
    <form action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST">
    <input type="text" id="amount" name="amount" value="100" required>
    <input type="text" id="tax_amount" name="tax_amount" value ="10" required>
    <input type="text" id="total_amount" name="total_amount" value="110" required>
    <input type="text" id="transaction_uuid" name="transaction_uuid"value="1256"  required>
    <input type="text" id="product_code" name="product_code" value ="EPAYTEST" required>
    <input type="text" id="product_service_charge" name="product_service_charge" value="0" required>
    <input type="text" id="product_delivery_charge" name="product_delivery_charge" value="0" required>
    <input type="text" id="success_url" name="success_url" value="https://esewa.com.np" required>
    <input type="text" id="failure_url" name="failure_url" value="https://google.com" required>
    <input type="text" id="signed_field_names" name="signed_field_names" value="total_amount,transaction_uuid,product_code" required>
    <input type="text" id="signature" name="signature"  value={{"$new"}} required>
    <input value="Submit" type="submit">
    </form>
   </body>
   </body>
</htm>

    