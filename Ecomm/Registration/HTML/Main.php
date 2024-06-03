<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce di Lusso</title>
    <link rel="stylesheet" href="../CSS/main.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="Main.php">E-Lusso</a>
            </div>
            <ul class="nav-links">
                <li><a href="https://www.tiffany.it/jewelry/shop/most-popular-jewelry/?gad_source=1&gclid=EAIaIQobChMIqLaZidy9hgMVxJiDBx033xVyEAAYASAAEgICUfD_BwE&gclsrc=aw.ds">Tiffany</a></li>
                <li><a href="https://www.rolex.com/it/watchmaking/excellence-in-the-making?gclid=EAIaIQobChMIj5PSk9y9hgMVIpKDBx2QeisDEAAYASAAEgL4yPD_BwE&ef_id=EAIaIQobChMIj5PSk9y9hgMVIpKDBx2QeisDEAAYASAAEgL4yPD_BwE:G:s&s_kwcid=AL!141!3!685427387938!p!!g!!orologeria%20rolex!19856782716!150821204361&gad_source=1">Rolex</a></li>
                <li><a href="https://www.patek.com/it/home">Patek Philippe</a></li>
                <li><a href="Form.html">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>Benvenuti su E-Lusso</h1>
            <p>Scopri i migliori prodotti di lusso dalle marche più prestigiose.</p>
        </section>
        <section class="products">
            <h2>Prodotti Disponibili</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nome Prodotto</th>
                        <th>Prezzo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include '../PHP/products.php'; ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 E-Lusso. Tutti i diritti riservati.</p>
    </footer>
</body>
</html>
