<?php
$colorData = [
    [
        "color" => "marron", 
        "value" => 1,
        "class" => "brown"
    ],
    [
        "color" => "rouge", 
        "value" => 2,
        "class" => "red"
    ],
    [
        "color" => "orange", 
        "value" => 3,
        "class" => "orange"
    ],
    [
        "color" => "jaune", 
        "value" => 4,
        "class" => "yellow"
    ],
    [
        "color" => "vert", 
        "value" => 5,
        "class" => "green"
    ],
    
    [
        "color" => "bleu", 
        "value" => 6,
        "class" => "blue"
    ],
    [
        "color" => "violet", 
        "value" => 7,
        "class" => "violet"
    ],
    [
        "color" => "gris", 
        "value" => 8,
        "class" => "grey"
    ],
    [
        "color" => "blanc", 
        "value" => 9,  
        "class" => "white"
    ]
        
];
$colorData2 = [
    [
        "color" => "noir", 
        "value" => 0,
        "class" => "black"
    ],
    
    [
        "color" => "marron", 
        "value" => 1,
        "class" => "brown"
    ],
    [
        "color" => "rouge", 
        "value" => 2,
        "class" => "red"
    ],
    [
        "color" => "orange", 
        "value" => 3,
        "class" => "orange"
    ],
    [
        "color" => "jaune", 
        "value" => 4,
        "class" => "yellow"
    ],
    [
        "color" => "vert", 
        "value" => 5,
        "class" => "green"
    ],
    
    [
        "color" => "bleu", 
        "value" => 6,
        "class" => "blue"
    ],
    [
        "color" => "violet", 
        "value" => 7,
        "class" => "violet"
    ],
    [
        "color" => "gris", 
        "value" => 8,
        "class" => "grey"
    ],
    [
        "color" => "blanc", 
        "value" => 9,
        "class" => "white"
    ]
        
];
        
$colorData3 = [
    [
        "color" => "argent", 
        "value" => 0.01,
        "class" => "silver"
    ],
    [
        "color" => "or", 
        "value" => 0.1,
        "class" => "gold"
    ],
    [
        "color" => "noir", 
        "value" => 1,
        "class" => "black"
    ],
    
    [
        "color" => "marron", 
        "value" => 10,
        "class" => "brown"
    ],
    [
        "color" => "rouge", 
        "value" => 100,
        "class" => "red"
    ],
    [
        "color" => "orange", 
        "value" => 1000,
        "class" => "orange"
    ],
    [
        "color" => "jaune", 
        "value" => 10000,
        "class" => "yellow"
    ],
    [
        "color" => "vert", 
        "value" => 100000,
        "class" => "green"
    ],
    
    [
        "color" => "bleu", 
        "value" => 1000000,
        "class" => "blue"
    ],
    [
        "color" => "violet", 
        "value" => 10000000,
        "class" => "violet"
    ],
    [
        "color" => "gris", 
        "value" => 100000000,
        "class" => "grey"
    ]
];
$colorData4 = [
    [
        "color" => "argent", 
        "value" => 0.01,
        "class" => "silver",
        "tolerance" =>"-(+ ou -) 10%"
    ],
    [
        "color" => "or", 
        "value" => 0.1,
        "class" => "gold",
        "tolerance" =>"-(+ ou -) 5%"
    ],
    
    
    [
        "color" => "marron", 
        "value" => 10,
        "class" => "brown",
        "tolerance" =>"-(+ ou -) 1%"
    ],
    [
        "color" => "rouge", 
        "value" => 100,
        "class" => "red",
        "tolerance" =>"(+ ou -) 2%"
    ],
    
    
    [
        "color" => "vert", 
        "value" => 100000,
        "class" => "green",
        "tolerance" =>"-(+ ou -) 0,5%"
    ],
    
    [
        "color" => "bleu", 
        "value" => 1000000,
        "class" => "blue",
        "tolerance" =>"-(+ ou -) 0,25%"
    ],
    [
        "color" => "violet", 
        "value" => 10000000,
        "class" => "violet",
        "tolerance" =>"-(+ ou -) 0,01%"
    ],
    [
        "color" => "gris", 
        "value" => 100000000,
        "class" => "grey",
        "tolerance" =>"-(+ ou -) 0,005%"
    ]
];
                
// je récupere les données soumises par l'utilisateur 
var_dump($_GET);
// var_dump(equivalent de console.log en php)

//  calcul pour le resultat
if ( isset( $_GET["ring1"] ) && isset( $_GET["ring2"]) && isset( $_GET["ring3"]) && isset( $_GET["ring4"]))  {

    $resultat = ($_GET["ring1"] . $_GET["ring2"]) * $_GET["ring3"] . $_GET["ring4"];
}
// je calcule le resultat que si le formulaire est soumis
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>ResistronPHP</title>
</head>
<body>
    <div class="body1">
        <div class="header_top">
            <header>
                <h1 class="header_title">Ma calculatrice toute simple</h1>
                <hr >
                <hr>
                <section class="resistance">
                    <div class="part1">
    
                    </div>
                    <div class="middle">
                        <div class="color_ring1"></div>
                        <div class="color_ring2"></div>
                        <div class="color_ring3"></div>
                        <div class="color_ring4"></div>
    
                    </div>
                    <div class="part3">
                    
                    </div>

                </section>
                <!-- <img class="resistor_img" src="resistance.png" alt="image de resistance"> -->
            </header>
        </div>
        <h2> Sélectionnez les couleurs</h2>
        <div class="color-line">
            <form action="index.php">
                <div class="color1">
                    <!-- je crée une boucle pour assigner des couleurs au premier anneau -->
                    <select name="ring1" class="colors-select">
                        <?php foreach ($colorData as $color) :?>
                            <option class="<?=$color["class"]?>"value="<?= $color["value"] ?>"><?= $color["color"] ?>-<?=$color["value"]?></option>   
                        <?php endforeach;?>
                    </select>
                    <!-- je crée une boucle pour assigner des couleurs au deuxieme anneau -->
    
                    <select name="ring2" class="colors-select">
                        <?php foreach ($colorData2 as $color) :?>
                            <option class="<?=$color["class"]?>"value="<?= $color["value"] ?>"><?= $color["color"] ?>-<?=$color["value"]?></option>   
                        <?php endforeach;?>
                    </select>
                    <!-- je crée une boucle pour assigner un multpiple aux deux premier anneaux -->
    
                    <select name="ring3" class="colors-select">
                        <?php foreach ($colorData3 as $color) :?>
                            <option class="<?=$color["class"]?>"value="<?=$color["value"] ?>"><?= $color["color"] ?>-<?=$color["value"]?><span>&#8486;</span></option>
                        <?php endforeach;?>
                    </select>

                    <!-- j'assigne la tolérance -->
    
                    <select name="ring4" class="colors-select">
                        <?php foreach ($colorData4 as $color) :?>
                            <option class="<?=$color["class"]?>"value="<?=$color["tolerance"]?>"><?=$color["color"]?><?=$color["tolerance"]?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="color2">
                    <button type="submit">Calculer </button>
                </div>
            </form>
        </div>

        <h2>Résultat</h2>
        <div class="resultat">
              <!-- les deux ?? indiquent que si le resultat est null alors on met une valeur par defaut 
              ?? s'appelle null coalescing operator -->
            <p><?= $resultat ?? 0 ?> <span class="result">&#8486;</span></p>
        </div>

    </body>
</html>