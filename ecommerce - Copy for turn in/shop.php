<?php
session_start();

// Start the session
// Check if the add to cart button is clicked
if (isset($_POST["add_to_cart"])) {

    // Get the product ID from the form
    $product_id = $_POST["product_id"];

    // Get the product quantity from the form
    $product_quantity = $_POST["product_quantity"];

    // Initialize the cart session variable
    // if it does not exist
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
        header("location:cart.php");
    }

    // Add the product and quantity to the cart
    $_SESSION["cart"][$product_id] = $product_quantity;
    header("location:cart.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fish&Chips Shopping Site</title>
    <link rel="stylesheet"
          href="shop.css">
</head>
<body>
<header>
    <h1>Welcome <?php
        $user = $_SESSION["user"];
        echo $user["name"];
        ?> to Fish&Chips Shopping Site</h1>
</header>
<nav>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="logout.php">Logout</a></li>

    </ul>
</nav>
<main>
    <section>
        <h2>Our Products<nav></nav></h2>

        <h2>Fish</h2>
        <ul>
            <li>
                <h3>Goldfish</h3>
                <img src=
                     "https://i.gifer.com/origin/16/168164701019f3b1a2eaebd39a516d63_w200.webp"
                     alt="Product 1">
                <p>A nice pet Goldfish</p>
                <p><span>$2</span></p>

                <form method="post" action="shop.php">
                    <input type="hidden"
                           name="product_id"
                           value="1">
                    <label for="product1_quantity">
                        Quantity:
                    </label>
                    <input type="number"
                           id="product1_quantity"
                           name="product_quantity"
                           value=""
                           min="0"
                           max="10">
                    <button type="submit"
                            name="add_to_cart">
                        Add to Cart</button>
                </form>
                <h2></h2>
                <h2>Chips</h2>
            </li>
            <li>
                <h3>White Opal Betta</h3>
                <img src=
                     "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSl54i3hmNR1Qm5HzUswMrfOoJTQDmQWv-8TS3Zc2it_w&s"
                     alt="Product 2">
                <p>A unique betta for your fishbowl</p>
                <p>
                    <span>$20</span>
                </p>

                <form method="post" action="shop.php">
                    <input type="hidden"
                           name="product_id"
                           value="2">
                    <label for="product2_quantity">
                        Quantity:
                    </label>
                    <input type="number"
                           id="product2_quantity"
                           name="product_quantity"
                           value=""
                           min="0"
                           max="10">
                    <button type="submit"
                            name="add_to_cart">
                        Add to Cart
                    </button>
                </form>
            </li>
            <li>
                <h3>Panda Angelfish</h3>
                <img src=
                     "https://assets.petco.com/petco/image/upload/f_auto,q_auto/3212797-left-1"
                     alt="Product 3">
                <p>A fish that will 100% look great in your tank</p>
                <p>
                    <span>$15</span>
                </p>

                <form method="post" action="shop.php">
                    <input type="hidden"
                           name="product_id"
                           value="3">
                    <label for="product3_quantity">
                        Quantity:
                    </label>
                    <input type="number"
                           id="product3_quantity"
                           name="product_quantity"
                           value=""
                           min="0"
                           max="10">
                    <button type="submit"
                            name="add_to_cart">
                        Add to Cart
                    </button>
                </form>
            </li>



                <li>
                    <h4>Doritos Nacho Cheese</h4>
                    <img src=
                         "https://m.media-amazon.com/images/I/71HnPB90QjL._AC_UF894,1000_QL80_.jpg"
                         alt="Product 4">
                    <p>A great bag of triangle cheese things</p>
                    <p><span>$3</span></p>

                    <form method="post" action="shop.php">
                        <input type="hidden"
                               name="product_id"
                               value="4">
                        <label for="product4_quantity">
                            Quantity:
                        </label>
                        <input type="number"
                               id="product4_quantity"
                               name="product_quantity"
                               value=""
                               min="0"
                               max="10">
                        <button type="submit"
                                name="add_to_cart">
                            Add to Cart</button>
                        <h2></h2>
                        <h2>Other Items</h2>
                    </form>
                </li>
                <li>
                    <h4>Lay's Potato Chips</h4>
                    <img src=
                         "https://m.media-amazon.com/images/I/91NjwbVi0+L._AC_UF1000,1000_QL80_.jpg"
                         alt="Product 5">
                    <p>You can go wrong with this classic</p>
                    <p>
                        <span>$4</span>
                    </p>

                    <form method="post" action="shop.php">
                        <input type="hidden"
                               name="product_id"
                               value="5">
                        <label for="product5_quantity">
                            Quantity:
                        </label>
                        <input type="number"
                               id="product5_quantity"
                               name="product_quantity"
                               value=""
                               min="0"
                               max="10">
                        <button type="submit"
                                name="add_to_cart">
                            Add to Cart
                        </button>
                    </form>
                </li>
                <li>
                    <h4>Takis Tortilla Chips</h4>
                    <img src=
                         "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQK6_fwmVufqklgN3DtjueTq1Qau6y6duxlhCGDO7dKPQ&s"
                         alt="Product 6">
                    <p>WARNING!! very delicious but spicy</p>
                    <p>
                        <span>$5</span>
                    </p>

                    <form method="post" action="shop.php">
                        <input type="hidden"
                               name="product_id"
                               value="6">
                        <label for="product6_quantity">
                            Quantity:
                        </label>
                        <input type="number"
                               id="product6_quantity"
                               name="product_quantity"
                               value=""
                               min="0"
                               max="10">
                        <button type="submit"
                                name="add_to_cart">
                            Add to Cart
                        </button>
                    </form>
                </li>

            <li>
                <h4>Creamy Onion Dip</h4>
                <img src=
                     "https://m.media-amazon.com/images/I/616FSMzPl2L.jpg"
                     alt="Product 7">
                <p>Some dip for your chips</p>
                <p><span>$5</span></p>

                <form method="post" action="shop.php">
                    <input type="hidden"
                           name="product_id"
                           value="7">
                    <label for="product7_quantity">
                        Quantity:
                    </label>
                    <input type="number"
                           id="product7_quantity"
                           name="product_quantity"
                           value=""
                           min="0"
                           max="10">
                    <button type="submit"
                            name="add_to_cart">
                        Add to Cart</button>
                </form>
            </li>
            <li>
                <h4>Fishbowl</h4>
                <img src=
                     "https://3.imimg.com/data3/VW/SX/FCP-1443602/images-pot2-500x500.jpg"
                     alt="Product 8">
                <p>A home for your little fish pets</p>
                <p>
                    <span>$18</span>
                </p>

                <form method="post" action="shop.php">
                    <input type="hidden"
                           name="product_id"
                           value="8">
                    <label for="product8_quantity">
                        Quantity:
                    </label>
                    <input type="number"
                           id="product8_quantity"
                           name="product_quantity"
                           value=""
                           min="0"
                           max="10">
                    <button type="submit"
                            name="add_to_cart">
                        Add to Cart
                    </button>
                </form>
            </li>
            <li>
                <h4>Tartar Sauce Packet</h4>
                <img src=
                     "https://m.media-amazon.com/images/I/71d6rJHudYL._AC_UF894,1000_QL80_.jpg"
                     alt="Product 9">
                <p>A singular packet of scauce...</p>
                <p>
                    <span>$45</span>
                </p>

                <form method="post" action="shop.php">
                    <input type="hidden"
                           name="product_id"
                           value="9">
                    <label for="product9_quantity">
                        Quantity:
                    </label>
                    <input type="number"
                           id="product9_quantity"
                           name="product_quantity"
                           value=""
                           min="0"
                           max="10">
                    <button type="submit"
                            name="add_to_cart">
                        Add to Cart
                    </button>
                </form>
            </li>



        </ul>
    </section>
</main>
<footer>
    <p>&copy; 2023 Fish&Chips Shopping Site</p>
</footer>
<script src="shop.php"></script>
</body>
</html>