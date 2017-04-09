<html>
    <head>
        <title>icons of game design</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="maincontent">
            <h2>Иконы игростроя</h2>
            <?php
                include_once 'Arrays/array.php';
                include_once 'Class/MyClass.php';
    
                foreach ($Person as $persons){
                    $objperson = new Member($persons["name"],$persons["age"],
                    $persons["image"],$persons["description"],$persons["game"]);
   
                    echo $objperson -> getName(); }
            ?>
        </div>
    </body>
</html>


