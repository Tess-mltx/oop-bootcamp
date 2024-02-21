<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's notes</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>

    <header>
        <h1>Mon Site Web</h1>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Average notes</h2>
            <p><?php echo $averageNoteG1; ?></p>
            <p><?php echo $averageNoteG2; ?></p>
        </section>

        <section>
            <h2>Best and lower note</h2>
            <p><?php echo $maxNoteG1; ?></p>
            <p><?php echo $minNoteG2; ?></p>
        </section>

        <section>
            <h2>Change group</h2>
            <p><?php echo $changeStudent1; ?></p>
            <p><?php echo $changeStudent2; ?></p>
        </section>

        <section>
            <h2>New average notes</h2>
            <p><?php echo $newAverageNoteG1; ?></p>
            <p><?php echo $newAverageNoteG2; ?></p>
        </section>
    </main>

    <footer>
        <p>CRL WILSON 3 | 2023-2024</p>
    </footer>

</body>
</html>