<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BLOONSTD</title>
</head>

<body>
    
<?php
    require_once("link.php");
    
    
    function desenhaBotao($titulo, $lista)
    {
        echo '<div class="dropdown">';
            echo '<button class="dropbtn">' . $titulo . '</button>';
            echo '<div class="dropText">';

                foreach ($lista as $item) {
                    echo '<span><img src="' . $item->getLinkImg() . '" width="70" height="70"> ' . $item->getInfo() . '</span><br>';
                }

            echo '</div>';
        echo '</div>';
    }
    
    $lista2 = array();
    $link2 = new Link();
    $link2->setLinkimg("https://bk.ibxk.com.br/2023/08/28/28110121537005.png");
    $link2->setInfo("domador");
    array_push($lista2,$link2);
    $link2 = new Link();
    $link2->setLinkimg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNzGmgdlsuwTMNsauditTHtUaMimL7LckwIg&s");
    $link2->setInfo("macaco ninja");
    array_push($lista2,$link2);
    $link2 = new Link();
    $link2->setLinkimg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeYOAXumIFZRWCAfS6Vf4Imi2kKGtaph_z3g&s");
    $link2->setInfo("macaco 10 anos");
    array_push($lista2,$link2);

    desenhaBotao("Macacos", $lista2);

    $lista3 = array();
    $link3 = new Link();
    $link3->setLinkimg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSK7Vc8vQ9hqDUa7kjAXhtec3E3sK7ZHgRUA&s");
    $link3->setInfo("macaco forte");
    array_push($lista3,$link3);
    $link3 = new Link();
    $link3->setLinkimg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwK1UNvI2VP3HWwusXo4gSsIpM0Ai1x78odA&s");
    $link3->setInfo("macacobumetrange");
    array_push($lista3,$link3);
    $link3 = new Link();
    $link3->setLinkimg("https://static.wikia.nocookie.net/b__/images/9/99/000-WizardMonkey.png/revision/latest?cb=20190522015102&path-prefix=bloons");
    $link3->setInfo("macaco mago");
    array_push($lista3,$link3);

    desenhaBotao("Macacos", $lista3);

    $lista4 = array();
    $link4 = new Link();
    $link4->setLinkimg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4CPD90aEkiLucwPBNOUaXkL8NQYATfMD0kA&s");
    $link4->setInfo("macacomassa");
    array_push($lista4,$link4);
    $link4 = new Link();
    $link4->setLinkimg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4CPD90aEkiLucwPBNOUaXkL8NQYATfMD0kA&s");
    $link4->setInfo("macacolegal");
    array_push($lista4,$link4);
    $link4 = new Link();
    $link4->setLinkimg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4CPD90aEkiLucwPBNOUaXkL8NQYATfMD0kA&s");
    $link4->setInfo("macaconaoegal");
    array_push($lista4,$link4);

    desenhaBotao("Macacos", $lista4);
    

    
    ?>

<div class="dropdown">
        <button class="dropbtn">Times de futebol</button>
        <div class="dropText">
            <span><img src="https://i.pinimg.com/736x/f2/b1/fc/f2b1fc8ac8c1273f51a8385ac3fe8514.jpg" width="40" height="40"> MAGOS</span>
            <br>
            <span><img src="https://i.pinimg.com/originals/f4/23/ca/f423cad8415e2bdfd6de21fce07fd342.png" width="40" height="40">HEROIS</span>
            <br>
            <span><img src="https://wallpaper.forfun.com/fetch/e8/e8e0477990ca2870d749ccd166679316.jpeg" width="40" height="40">PRIMARIOS</span>
            <br>
        </div>
    </div>
</body>

</html>
