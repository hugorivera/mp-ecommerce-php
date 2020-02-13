<!DOCTYPE html>
<?php 
require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken('APP_USR-6718728269189792-112017-dc8b338195215145a4ec035fdde5cedf-491494389');
    $preference = new MercadoPago\Preference();
    $payer = new MercadoPago\Payer();
    $item = new MercadoPago\Item();
    
    $item->id = "1234";
    $item->title = $_POST['title'];
    $item->quantity =$_POST['unit'] ;
    $item->unit_price = $_POST['price'];
    $item->currency_id = "MXN";
    $item->description = "Dispositivo móvil de Tienda e-commerce";
    $item->picture_url = $_POST['img'];
    
    $payer->email = "test_user_98623993@testuser.com";
    $payer->name = "Lalo Landa";
    $payer->phone = array("area_code" => "55", "number" => "49737300");
    $payer->address = array("zip_code" => "03940", "street_name" => "Insurgentes Sur", "street_number" => "1602");

    $preference->payment_methods = array(
        "excluded_payment_types" => array(
            array("id"=>"atm")
        ),
        "excluded_payment_methods" => array(
            array("id" => "amex")
          ),
        "installments" => 6
      );
    $preference->items = array($item);
    $preference->external_reference = "ABCD1234";
    $preference->payer = $payer;
    $preference->back_urls =  array (
        "success"=> 'http://localhost/mp-ecommerce-php/index.php',
        "failure"=> 'http://localhost/mp-ecommerce-php/failure.php'
    );

    $preference->save();
?>
<html
    class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser"
    lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/category-landing.css" media="screen, print">

    <link rel="stylesheet" href="./assets/category.css" media="screen, print">

    <link rel="stylesheet" href="./assets/merch-tools.css" media="screen, print">

    <link rel="stylesheet" href="./assets/fonts" media="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <style>
        .as-filter-button-text {
            font-size: 26px;
            font-weight: 700;
            color: #333;
        }

        .row.as-fixed-nav {
            border-bottom: 1px solid #ddd;
        }

        .as-producttile-tilehero.with-paddlenav.with-paddlenav-onhover {
            height: 330px;
        }

        .as-footnotes {
            background: #333;
            color: #fff;
            padding: 16px 40px;
        }

        .fixedbutton {
            position: fixed;
            bottom: 0px;
            right: 0px;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
    <style type="text/css">
        @keyframes loading-rotate {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }

            50% {
                stroke-dasharray: 100, 200;
                stroke-dashoffset: -20px;
            }

            100% {
                stroke-dasharray: 89, 200;
                stroke-dashoffset: -124px;
            }
        }

        @keyframes loading-fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .mp-spinner {
            position: absolute;
            top: 100px;
            left: 50%;
            font-size: 70px;
            margin-left: -35px;
            animation: loading-rotate 2.5s linear infinite;
            transform-origin: center center;
            width: 1em;
            height: 1em;
        }

        .mp-spinner-path {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0;
            animation: loading-dash 1.5s ease-in-out infinite;
            stroke-linecap: round;
            stroke-width: 2px;
            stroke: #009ee3;
        }
    </style>
    <style type="text/css">
        .mercadopago-button {
            padding: 0 1.7142857142857142em;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 0.875em;
            line-height: 2.7142857142857144;
            background: #009ee3;
            border-radius: 0.2857142857142857em;
            color: #fff;
            cursor: pointer;
            border: 0;
        }
    </style>
</head>



<body class="as-theme-light-heroimage">

    <div class="stack">

        <div class="as-search-wrapper" role="main">
            <div class="as-navtuck-wrapper">
                <div class="as-l-fullwidth  as-navtuck" data-events="event52">
                    <div>
                        <div class="pd-billboard pd-category-header">
                            <div class="pd-l-plate-scale">
                                <div class="pd-billboard-background">
                                    <img src="./assets/music-audio-alp-201709" alt="" width="1440" height="320"
                                        data-scale-params-2="wid=2880&amp;hei=640&amp;fmt=jpeg&amp;qlt=95&amp;op_usm=0.5,0.5&amp;.v=1503948581306"
                                        class="pd-billboard-hero ir">
                                </div>
                                <div class="pd-billboard-info">
                                    <h1 class="pd-billboard-header pd-util-compact-small-18">Tienda e-commerce</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="as-search-results as-filter-open as-category-landing as-desktop" id="as-search-results">

                <div id="accessories-tab" class="as-accessories-details">
                    <div class="as-accessories" id="as-accessories">
                        <div class="as-accessories-header">
                            <div class="as-search-results-count">
                                <span class="as-search-results-value"></span>
                            </div>
                        </div>
                        <div class="as-searchnav-placeholder" style="height: 77px;">
                            <div class="row as-search-navbar" id="as-search-navbar" style="width: auto;">
                                <div class="as-accessories-filter-tile column large-6 small-3">

                                    <button class="as-filter-button" aria-expanded="true"
                                        aria-controls="as-search-filters" type="button">
                                        <h2 class=" as-filter-button-text">
                                            Smartphones
                                        </h2>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="as-accessories-results as-search-desktop">
                            <div class="container">
                                <div class="row"> <br> </div>
                                <div class="row justify-content-md-center">
                                    <div class="col-4">
                                        <div class="card as-producttile-tilehero with-paddlenav " style="float:left;">
                                            <img class="card-img-top" src="<?php echo $_POST['img'] ?>"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $_POST['title'] ?></h5>
                                                <p class="card-text"><?php echo  "" . $_POST['unit'] ?>
                                                    <?php echo  ' X  $' . $_POST['price']  ?> </p>
                                                <a href="#">
                                                    <form action="<?php echo $preference->back_urls->success; ?>" method="POST">
                                                        <script
                                                            src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
                                                            data-preference-id="<?php echo $preference->id; ?>"
                                                            data-header-color="#2D3277"
                                                            data-button-label="Pagar la compra">
                                                        </script>
                                                    </form>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"> <br> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div role="alert" class="as-loader-text ally" aria-live="assertive"></div>
    <div class="as-footnotes fixedbutton">
        <div class="as-footnotes-content">
            <div class="as-footnotes-sosumi">
                Todos los derechos reservados Tienda e-commerce
            </div>
        </div>
    </div>

    </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div class="mp-mercadopago-checkout-wrapper"
        style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;">
        <svg class="mp-spinner" viewBox="25 25 50 50">
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle>
        </svg> </div>
    <div id="ac-gn-viewport-emitter"> </div>
</body>

</html>