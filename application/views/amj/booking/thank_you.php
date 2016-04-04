<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="apple-touch-icon" href="<?php echo base_url('apple-touch-icon.png') ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Thank you</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-61676776-1', 'auto');
        ga('send', 'pageview');

    </script>

    <style>
        html, body {
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            color: #555;
            background: #f4f4f4;
        }

        #wrapper {
            text-align: center;
            max-width: 500px;
            margin: 30px auto;
            background: #fff;
            padding: 50px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
        }

        h1 {
            font-weight: 300;
            font-size: 40px;
        }

        img {
            max-width: 300px;
        }

        #close_window {
            text-transform: uppercase;
            cursor: pointer;
            margin-top: 80px;
            display: block;
            text-decoration: none;
            color: #555 !important;
        }
    </style>

</head>

<body>

<div id="wrapper">
    <h1>Your table has been ...</h1>
    <img src="<?php echo base_url('public/images/thankyou-icon.png') ?>" alt="reserved">
    <h1>Thank you</h1>

    <a href="<?php echo base_url(); ?>" id="close_window">Close</a>

</div>

</body>
</html>