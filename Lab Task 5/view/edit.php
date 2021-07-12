<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <fieldset>
    <legend>Edit Product</legend>
    <form action="../controller/editcon.php" method="POST">
    Name <br><input type="text" name="name" id="name"> <br>
    Buying Price <br><input type="text" name="buyingprice" id="buyingprice"> <br>
    Selling Price <br><input type="text" name="sellingprice" id="sellingprice"> <br>
    <hr> <input type="checkbox" name="display" id="display">Display <br><hr>
    <input type="submit" value="Save">
    </form>

    </fieldset>
</body>
</html>