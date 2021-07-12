<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCHING</title>
</head>
<body>
    <div class="content">
    <fieldset>
        <legend><b>SEARCH</b></legend>
        <form action="../controller/searchcon.php" method="post">
            <input type="search" name="name" id="name">
            <input type="submit" value="Search By Name">
        </form>
        <hr>
        <table>
            <tr>
                <td>NAME</td>
                <td>PROFIT</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><a href="edit.php">edit</a></td>
                <td><a href="delete.php">delete</a></td>
            </tr>
        </table>
    </fieldset>
    </div>
</body>
</html>