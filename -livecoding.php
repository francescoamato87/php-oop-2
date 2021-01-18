<?php
include_once __DIR__ . '/classes/Elettrici.php'
?>

<?php
include_once __DIR__ . '/classes/Acustici.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EREDITARIETA'</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1> OOP Ereditarietà </h1>
    </header>

    <main>
        <section>
        <?php //istanza Elettrici
            $elettrici = new Elettrici('Ibanez','Roland','Yamaha', 200);
            var_dump($elettrici);

        ?>
            <h2>CONSEGNA</h2>
            
            <div>
                Prodotti in consegna: 
                <?php 
                echo $elettrici->printProducts();
                ?>
            </div>

            <div>
                Costo di consegna:
                <?php echo $elettrici->productCost(200); ?>
                €
            </div>

        </section>

        <section>
            <?php // istanza Acustici
            $acustici = new Acustici('Disponibile',' ', 'Non Disponibile');
            $acustici->setAvailability('Disponibile');
            var_dump($acustici);
            ?>
            <h2>Strumenti Acustici</h2>
            <div>
            Chitarre:
            <?php echo $acustici->printProducts();?>
            </div>
        </section>

    </main>

</body>
</html>