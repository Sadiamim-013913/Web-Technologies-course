<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
</head>
<body>
    <div class="content">
    <center>
        <fieldset>
            <legend> <b>Add Product</b> </legend>
            <form action="../controller/addcon.php"  method="POST">
            <table>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td>
                        Buying Price:
                    </td>
                    <td><input type="text" name="buyingprice" id="buyingprice"></td>
                </tr>
                <tr>
                    <td>
                        Selling Price:
                    </td>
                    <td><input type="text" name="sellingprice" id="sellingprice"></td>
                </tr>
                <tr>
                    <td><hr></td>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="display" id="display">Display</td>
                </tr>
                <tr>
                    <td><hr></td>
                    <td><hr></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="SAVE">
                    </td>
                </tr>
            </table>
            </form>
        </fieldset>
    </center>
    </div>
</body>
</html>