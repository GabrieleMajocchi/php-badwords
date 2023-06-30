<?php 

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
            <form action="./server.php" method="POST">
                <label for="paragraph">Scrivi un paragrafo:</label><br>
                <input type="text" id="paragraph" name="paragraph"><br>
                <label for="censor">Parola da censurare:</label><br>
                <input type="text" id="censor" name="censor"><br><br>
                <button type="submit">
                    Invia il paragrafo da censurare
                </button>
            </form> 
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
        height: 20%;
        aspect-ratio: 1;
        background-color: lightgrey;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
</style>