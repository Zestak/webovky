<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./query/header-query.css">
    <link rel="stylesheet" href="./css/footer.css">


    <script src="https://kit.fontawesome.com/0fe3234472.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php require "assets/header.php"; ?>


    <main>
    <section class="form"> 
        <form action="contact.php" method="POST">
            <input type="text" name="first_name" placeholder="Křestní jméno" required><br>
            <input type="text" name="second_name" placeholder="Příjmení" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <textarea name="message" placeholder="Vaše zpráva" required></textarea><br>
            <button>Odeslat dotaz</button>
        </form>
    </section>

    </main>


    <?php require "assets/footer.php"; ?>
    <script src="./js/header.js"></script>
</body>
</html>