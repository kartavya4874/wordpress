<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historical Insights Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="hero">
            <h1>Historical Insights Blog</h1>
            <p>Exploring the past, understanding the present</p>
        </section>

        <section id="events">
            <h2>Historical Events</h2>
            <?php include 'events.php'; ?>
        </section>

        <section id="figures">
            <h2>Historical Figures</h2>
            <?php include 'figures.php'; ?>
        </section>

        <section id="analysis">
            <h2>Historical Analysis</h2>
            <?php include 'analysis.php'; ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Historical Insights Blog. All rights reserved.</p>
    </footer>
</body>
</html>