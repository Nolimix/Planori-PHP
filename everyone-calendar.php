<!DOCTYPE html>
<html>
<head>
    <title>Planori - Mon planning</title>
    <link rel="stylesheet" type="text/css" href="src/styles/global.css">
    <link rel="stylesheet" type="text/css" href="src/styles/calendar.css">
    <link rel="stylesheet" type="text/css" href="src/styles/calendar-visualizer.css">
    <script src="src/scripts/everyone-calendar.js"></script>
<!--    <link rel="stylesheet" type="text/css" href="styles/my-calendar.css">-->

    <!-- META -->
    <?php include 'components/meta.php'; ?>
</head>
<body>
<?php include 'components/header.php'; ?>
<main>
    <div class="pub">

    </div>
    <div class="infos">
        <h1>Planning Général</h1>
        <p>Bienvenue sur le <B>Planning général</B>, il est propre à chaque line-up et n'est modifiable uniquement par les administrateurs.</p>
        <p>Ce planning affiche automatiquement la semaine actuelle. Vous pouvez retrouver la dernière semaine et les deux prochaines semaines en appuyant sur les flèches "Semaine précédente" et "Semaine suivante".</p>
        <p>Ce planning prend en compte les disponibilités de chacun et créer un planning qui affiche automatiquement les moments ou tout le monde est disponible pendant la semaine actuelle.</p>
        <p>Pour plus d'informations ou de tutoriels concernant l'application, veuillez vous référer à la <a href="/">documentation</a>.</p>
    </div>
    <div class="calendar">
        <div class="header">
            <button class="previous">
                <i class="fa-solid fa-caret-left"></i>
                <p>Semaine précédente</p>
            </button>
            <h2>Semaine du 01/01/2024 au 07/01/2024</h2>
            <button class="next">
                <p>Semaine suivante</p>
                <i class="fa-solid fa-caret-right"></i>
            </button>
        </div>
        <div class="visualizer">
            <?php // TABLE CREATION

                $table = "<table id='calendar' cellspacing='0' cellpadding='0'>";
                $table .= "<tr>";
                $table .= "<td></td>";
                $table .= "<td><p>Lundi</p><p class='date'></p></td>";
                $table .= "<td><p>Mardi</p><p class='date'></p></td>";
                $table .= "<td><p>Mercredi</p><p class='date'></p></td>";
                $table .= "<td><p>Jeudi</p><p class='date'></p></td>";
                $table .= "<td><p>Vendredi</p><p class='date'></p></td>";
                $table .= "<td><p>Samedi</p><p class='date'></p></td>";
                $table .= "<td><p>Dimanche</p><p class='date'></p></td>";
                $table .= "</tr>";

                for($i = 10; $i <= 23; $i++) {
                    $table .= "<tr>";
                    $table .= "<td><p>" . $i . "h</p></td>";
                    for($j = 0; $j < 7; $j++) {
                        $table .= "<td><button><p>...</p></button></td>";
                    }
                    $table .= "</tr>";
                }

                $table .= "</table>";
                echo $table;
            ?>
</main>
<?php include 'components/footer.php'; ?>
</body>
</html>