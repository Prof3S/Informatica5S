<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello - E-Lusso</title>
    <link rel="stylesheet" href="../CSS/cart.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="Main.php">E-Lusso</a>
            </div>
        </nav>
    </header>
    <main>
        <section class="cart">
            <h2>Il Tuo Carrello</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nome Prodotto</th>
                        <th>Prezzo Unitario</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- I prodotti saranno generati dinamicamente da uno script lato server come PHP -->
                    <?php include '../PHP/cart_order.php'; ?>
                </tbody>
            </table>
            <div class="cart-total">
                <p>Totale Ordine: <span> <?php include '../PHP/total_order.php'; ?> €</span></p>
                <a href="checkout.html" class="btn">Procedi al Checkout</a>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 E-Lusso. Tutti i diritti riservati.</p>
    </footer>
</body>
</html>
