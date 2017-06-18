<html>
<head>
    <meta charset=utf-8>
    <meta content="IE=edge" http-equiv=X-UA-Compatible>
    <meta content="width=device-width,initial-scale=1" name=viewport>

    <title>VAMK Guest</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <link rel="stylesheet" href="./styles/style.css">

    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

</head>
<body>
<div class="col-xs-8 col-xs-offset-2">

    <div class="row">
        <div class="page-title text-center">
            <h1 class="">VAMK GUESTS</h1>
        </div>

        <div class="">
            <h5 class="text-center">VAMK Registraion List</h5>
        </div>
    </div>

    <div class="row">
        <?php

        $ch = curl_init("https://azuremobapptest.azurewebsites.net/tables/Guest?ZUMO-API-VERSION=2.0.0");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        $myArray = json_decode($data, true);
        curl_close($ch);

        for ($i = 0; $i < count($myArray); $i++) {
            ?>

            <div class="col-sm-4 col-xs-12">
                <div>
                    <img class="image-responsive img-rounded visitor-pic"
                         src="<?php $myArray[$i]["image"]; ?>">
                </div>
                <div class="col-sm-3 col-xs-12">
                    <p>First Name: <?php echo $myArray[$i]["fname"]; ?></p>
                    <p>Last Name: <?php echo $myArray[$i]["lname"]; ?></p>
                    <p>Gender: <?php echo $myArray[$i]["sex"]; ?></p>
                    <p>Birthday: <?php echo $myArray[$i]["birthday"]; ?></p>
                    <p>Email: <?php echo $myArray[$i]["email"]; ?></p>
                </div>
            </div>
    </div>
</div>
</body>
<html>
