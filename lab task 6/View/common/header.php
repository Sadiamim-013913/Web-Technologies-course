<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .header {
        overflow: hidden;
        background-color: RGBA(0, 0, 0, 80%);
        padding: 20px 10px;
    }

    .header a {
        float: left;
        color: whitesmoke;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
    }

    .header a.logo {
        font-size: 25px;
        font-weight: bold;

    }

    .header .header-right a:hover {
        background-color: #ddd;
        color: blue;
    }

    .header a.active {
        background-color: dodgerblue;
        color: white;
    }

    .header-right {
        float: right;
    }

    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right {
            float: none;
        }
    }
    </style>
</head>

<body>
    <?php
$home="home";

?>


    <div class="header">

        <div class="logo">
            <a href="" class="logo"> Surjo</a>

        </div>

        <div class="header-right">
            <?php
            if(isset($_SESSION["Sname"]))
            {
                $home=$_SESSION["Sname"];
                echo "<a class='active' href='http://localhost/lab%20task%206/View/'>Logged in as $home</a>";
            }
            else{
                echo "<a class='active' href='http://localhost/lab%20task%206/View/'>$home</a>";
            }
            
        echo "
        <a href='http://localhost/lab%20task%206/View/users/login.php'>login</a>
        <a href='http://localhost/lab%20task%206/View/users/registration.php'>Registration</a>";
        ?>

        </div>
    </div>
</body>

</html>