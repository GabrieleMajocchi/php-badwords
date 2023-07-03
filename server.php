<?php 

$paragraph = $_POST["paragraph"];
$censor = $_POST["censor"];

$censored = str_replace($censor, '*****', $paragraph)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>
    
    <main>
        <div class="box">
            <h1>Il paragrafo censurato è:</h1>
            <h1><?php echo $censored; ?></h1>
            <pre>Con una lunghezza di: <?php echo strlen($censored); ?></pre>
        </div>
    </main>

</body>
</html>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    main{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .box{
        height: 50%;
        aspect-ratio: 1;
        background-color: lightgrey;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
</style>

</body>
</html>