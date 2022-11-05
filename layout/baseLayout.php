    <!DOCTYPE html>
    <html lang="en">
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <meta name="description" content="This page just shows an example for things">    
        <title>
            <?php
                if(isset($mytitle)){
                    echo $mytitle;
                }
                else{
                    echo "Webapp";
                }
            ?>
        </title>        
    </head>

    <body>
        <header>
            <nav class="navigation">
                <?php
                    include "layout/navigation.php";
                ?>
            </nav>
        </header>

        <main>
            <article class="container">
                <?php
                    include $body;
                ?>
            </article>
        </main>
        <footer>
            <nav class="navigation">
                <?php
                    include "layout/footer.php";
                ?>
            </nav>
        </footer>
    </body>
</html>