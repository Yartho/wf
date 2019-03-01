<?php

$db ='fuckindatabase';
$host = '127.0.0.1';

$username = 'root';
$password = '';

try {
    $connection = new PDO( "mysql:dbname=$db;host=$host", $username,$password);
} catch (\PDOException $exception) {
    print_r('[ERROR] %s Impossible connection to the DB %s');
    print_r($exception);

}

$articles = $connection -> query('SELECT * FROM article');

//echo "<br>".$articles->rowCount()."<br><br>";

//print_r($articles ->fetch());
echo "<br><br>";
//print_r($articles ->fetch(PDO :: FETCH_ASSOC));

//$AllArticles = $articles -> fetchAll();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WTF</title>




</head>


<body >


<div>
    <?php

    foreach($articles->fetchAll() as $article) {
        echo '<!-- '.$article['pub_date'].' -->';

        ?>
        <div>
            <div>
                <img src='<?php echo $article['img']; ?>'/>
            </div>
            <div>
                <h4>'<?php echo $article['title'];  ?>'</h4>
                <p>'<?php echo $article['description'];  ?>'</p>
            </div>
        </div>
        <?php
    }

    ?>
</div>
</body>
</html>


