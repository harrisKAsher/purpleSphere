<?php
    // Get the Data
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
    $discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_FLOAT);
    $errorMessage = '';

    //Validate Product Discription, List Price, and Discount Price
    if ($product_description == '') {
        $errorMessage = 'Please enter a valid Product Discription. <br>';
    }
    if ($list_price <= 0 || $list_price === false) {
        $errorMessage .= 'List Price must be a valid number greater than 0. <br>';
    }
    if ($discount_percent <= 0 || $discount_percent === false) {
        $errorMessage .= 'Discount Percent must be a valid number greater than 0. <br>';
    }
  

    // If error message exsists, return to index page
    if ($errorMessage != '') {
        include('index.php');
        exit;
    }

    //Calculate Discount
    $discount = $list_price * $discount_percent * .01;
    $dicountPrice = $list_price - $discount;

    //Calculate Tax
    $tax = .08;
    $tax_amount = $dicountPrice * $tax;
    $tax_rate = $tax * 100;

    //Store
    $f_list_price = "$" . number_format($list_price, 2);
    $f_discount_percent = $discount_percent ."%";
    $f_discount = "$" . number_format($discount, 2);
    $f_discountPrice = "$" . number_format($dicountPrice, 2);
    $f_tax_rate = $tax_rate . "%";
    $f_tax_amount = "$" . number_format($tax_amount, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description);?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($f_list_price); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($f_discount_percent); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo htmlspecialchars($f_discount); ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo htmlspecialchars($f_discountPrice); ?></span><br>

        <br><br>

        <label>Sales Tax Rate:</label>
        <span><?php echo htmlspecialchars($f_tax_rate); ?></span><br>

        <label>Sales Tax Amount:</label>
        <span><?php echo htmlspecialchars($f_tax_amount); ?></span><br>
    </main>
</body>
</html>
