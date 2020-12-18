<!DOCTYPE html>

<?php $name="aktuellesProjekt"; ?>

<html lang="de">
<head>

    <meta charset="UTF-8" />

    <title>Aktuelles Projekt</title>

    <?php include ("elements/head.php") ?>

</head>
<body>

    <div class="container container-fluid">

        <!-- Header -->
        <?php include ("elements/jumbo.php") ?>

        <div class="row">

            <!-- Navigation -->
            <?php include ("elements/navigation.php") ?>

            <!-- Inhalt -->
            <div id="hauptkomponente" class="col-md">

                <div class="row">

                    <?php include ("function/todoliste.php"); ?>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
