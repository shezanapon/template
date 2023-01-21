<?php
$title = "Email Templete";
$name = "Neiman Marcus";
$discount = "40%";
$head = <<<EMAILTEMP1
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>$title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        p{
            margin: 0;
        }

        #wrapper{
            width: 550px;
            margin: auto;
            background-color: #f5f5f5;
            padding: 20px;

        }
        #wrapper header{
            border-bottom: 1.5px solid #808080;
        }
        #wrapper header .free-shipping{
            color: #bc0555;
            border-bottom: 1px solid #dcdcdc;
            letter-spacing: 1.5px;
        }

        #wrapper header .navbar-brand{
            width: 30%;
            margin: auto;
        }

        #wrapper header .discount .styles{
            font-size: 1.3rem;
            letter-spacing: 1.2px;
            color: #d77b59;
            font-weight: 600;
        }
        #wrapper header .discount .discount-forty{
            font-size: 2rem;
            letter-spacing: 1.2px;
            color: #000;
            font-weight: 600;
        }

        #wrapper header .discount .shop-sale a{
            text-decoration: none;
            color: #000;
        }

        #wrapper header .discount .shop-sale a span{
            padding-bottom: 3px;
            border-bottom: 2px solid #000 ;
        }

        #wrapper main .about{
            background-color: #3e3e3e;
            width: 10rem;
            margin: auto;
            color: #fff;
            line-height: 0.9;
            padding-top: 10px;
            padding-bottom: 8px;
        }

        #wrapper main .about p:first-child{
            font-size: 0.85rem;
            letter-spacing: 1px;
        }

        #wrapper main .about p:last-child{
            font-size: 0.75rem;
            letter-spacing: 6px;
        }

        #wrapper main h1{
            font-size: 3rem;
        }
        #wrapper main .btn{
            border-radius: 0;
            padding: 10px 18px;
        }
    </style>
</head>
EMAILTEMP1;

$header = <<<EMAILTEMP2
<header src="pb-3 mb-3">
        <p src="text-center free-shipping pb-3 fw-bold mb-3">FREE SHIPPING + FREE RETURN</p>
        <div src="navbar-brand">
            <img src="img/logo.svg" alt="Logo Icon" src="img-fluid">
        </div>

        <div src="discount text-center mt-4">
            <p src="styles">2000 + STYLES JUST ADDED</p>
            <p src="discount-forty">UP TO $discount OFF</p>
            <p src="shop-sale"><a href="#"><span>SHOP SALE</span> &GT; </a></p>
        </div>
    </header>
EMAILTEMP2;

$main = <<<EMAILTEMP3
<main src="text-center">
        <div src="about text-uppercase">
            <p>$name</p>
            <p>Exclusive</p>
        </div>
        <h1 src="mt-3 mb-3">Theory</h1>
        <p>Relaxed styles capture the effortless spirit of the</p>
        <p>Mediterranean, including exclusives only found here</p>
        <p src="mt-3"><button type="button" src="btn btn-dark text-uppercase">Shop Now</button></p>
    </main>
EMAILTEMP3;

?>

<!doctype html>
<html lang="en">
<?php
echo $head;
?>
<body>
<div id="wrapper" class="mt-3">

    <?php
    echo $header;
    echo $main;
    ?>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
