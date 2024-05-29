<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/projet_html_php/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Hanunoo&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">

    <title>site en PHP</title>
</head>

<body>
    <div class="full">
        <header>
            <div class="flex_header">

                <img src="public/img/logo.png">

                <h1>Mon premier site en HTML/CSS</h1>
                <div class="logos">

                    <!-- <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-instagram" style="color: #74C0FC;"></i> -->
                    <img src="public/img/facebook.ico">
                    <img src="public/img/instagram.svg">
                </div>
            </div>
        </header>

        <?php include __DIR__ . "/nav.html.php"; ?>