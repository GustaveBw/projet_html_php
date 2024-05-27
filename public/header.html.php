<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/projet_html_php/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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