<div class="jumbotron text-center">
    <h1>Aufgabenplaner:
        <?php
            switch($name)
            {
                case ("aktuellesProjekt"):
                    echo "ToDos (Aktuelles Projekt)";
                    break;

                case ("aufgaben"):
                    echo "Aufgaben";
                    break;

                case ("personen"):
                    echo "Personen";
                    break;

                case ("projekte"):
                    echo "Projekte";
                    break;

                case ("reiter"):
                    echo "Reiter";
                    break;

                case ("login"):
                    echo "Login";
                    break;

                case ("registrieren"):
                    echo "Registrierung";
                    break;
        }
        ?>
    </h1>
</div>