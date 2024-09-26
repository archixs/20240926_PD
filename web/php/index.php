<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Piesakies webināram!</h1>
    <div>
        <form action="webinars" method="post">
            <label for="name">Vārds</label>
            <input type="text" name="name">

            <br>

            <label for="name">E-pasts</label>
            <input type="text" name="name">

            <br>

            <label for="limenis">Izvelies kursa līmeni</label>
            <select name="limenis" id="level">
                <option value="beg">Beginner</option>
                <option value="int">Intermediate</option>
                <option value="adv">Advanced</option>
            </select>

            <br>

            <label for="radio">Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</label>
            <label><input type="radio" name="radio" value="yes" /> Yes</label>
            <label><input type="radio" name="radio" value="no" /> No</label>

            <br>
        

            <a href="confirmation.php"><input type="button" value="Nosūtīt" ></a>
        </form>
    </div>

    <a href="blog.php">Uz blogu!</a>

    <br>

    <script src="app.js"></script>

    <h2>Jau reģistrējušies</h2>
    <?php

    $lietotaji = [
        ["vards" => "Deniss", "epasts" => "fibigs@gmail.com", "limenis" => "Advanced"],
        ["vards" => "Niks", "epasts" => "indriksons@gmail.com", "limenis" => "Intermediate"],
        ["vards" => "Ernests", "epasts" => "art@gmail.com", "limenis" => "Beginner"]
    ];
    foreach($lietotaji as $data) {
        echo("Vārds: " . $data["vards"] . ", E-pasts: " . $data["epasts"] . ", Līmenis: " . $data["limenis"]);
        echo("<br>");
    }

    ?>
</body>
</html>