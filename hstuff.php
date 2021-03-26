
<html>
    <head>
        <title>Who Wants To Be A Millionaire</title>
        <link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
    </head>

    <body>
        <?php   
            include("logic.php");


            if(isset($_POST["submit"])){
                if(isset($_POST["answer"])){
                    increment();
                }
            }

            echo $_SESSION['count'];
            ?>
            

        <form action = hstuff.php method = "post">
            <p>
                <?= 
                    $content[$_SESSION['count']][0]
                ?>
            </p>
            <fieldset>
                <input type = "radio" id = "1" name = "answer" value = "1">
                <label for = "1"><?=$content[1][1]?></label>

                <input type = "radio" id = "2" name = "answer" value = "2">
                <label for = "2"><?=$content[1][2]?></label>

                <br>

                <input type = "radio" id = "3" name = "answer" value = "3">
                <label for = "1"><?=$content[1][3]?></label>

                <input type = "radio" id = "4" name = "answer" value = "4">
                <label for = "1"><?=$content[1][4]?></label>

                <input type = "submit" value = "Final Answer" name = "submit">
            </fieldset>
        </form>
    </body>

</html>