<?php
    $players = [
        [
            "name" => "Fathul Arifin",
            "role" => "Jungler",
            "nickname" => "kuhaku",
            "mainhero"  => "Gusion",
            "profile" => "pathol.png",
        ],
        [
            "name" => "Barokatu Rizky",
            "role" => "Exp-laner",
            "nickname" => "Rox",
            "mainhero"  => "Alice",
            "profile" => "barok.png",
        ],
        [
            "name" => "Muhammad Roihan",
            "role" => "Roamer",
            "nickname" => "RAY Huns",
            "mainhero"  => "Estes",
            "profile" => "roihan.png",
        ],
        [
            "name" => "Rian Wibowo",
            "role" => "Midlaner",
            "nickname" => "kuhaku2",
            "mainhero"  => "Kagura",
            "profile" => "rian.png",
        ],
        [
            "name" => "Wildanul",
            "role" => "Gold-laner",
            "nickname" => "wild",
            "mainhero"  => "Claude",
            "profile" => "wild.png",
        ]
    ]
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<style>
    img{
        width: 100px;
        border-radius: 25px;
    }
    ul{
        float: left;
    }
</style>
<body>
    <h1>Hunts TOP UP E-Sport</h1>
    <?php foreach ($players as $player) : ?>
        <ul>
            <img src="img/<?php echo $player["profile"]; ?>" alt="<?php echo $player["profile"]; ?>">
            <li>Nama : <?php echo $player["name"]; ?></li>
            <li>Role : <?php echo $player["role"]; ?></li>
            <li>Nickname : <?php echo $player["nickname"]; ?></li>
            <li>Main Hero : <?php echo $player["mainhero"]; ?></li>
        </ul>
    <?php endforeach  ?>
</body>
</html>