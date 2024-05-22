<?php
session_start();


$servername = "192.168.254.128";
$username = "User";
$password = "Pass1234";
$DB = "all_good_machinery";

// Create connection
$conn = new mysqli($servername, $username, $password, $DB);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<Div class="Item_container">
    <h1>Rental Information</h1><br>

    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Cost</th>
            <th>Description</th>
            <th></th>
        </tr>

        <tr>
            <td></td>
            <td>Van 1</td>
            <td>$130.00</td>
            <td></td>
            <td class="booking">
            <?php

                if (isset($_SESSION['TBL_Login_ID'])){
                echo '<form method="POST" action="items.php">
                    <button type="submit" name="booking">Book now</button>
                    </form>';
                } else{
                    echo "Please login to book";
                }

                ?>
            </td>
        </tr>


        <tr>
            <td></td>
            <td>Van 2</td>
            <td>$130.00</td>
            <td></td>
            <td class="booking">
            <?php

                if (isset($_SESSION['TBL_Login_ID'])){
                echo '<form method="POST" action="items.php">
                    <button type="submit" name="booking">Book now</button>
                    </form>';
                } else{
                    echo "Please login to book";
                }

                ?>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>Truck 1</td>
            <td>$215.00</td>
            <td></td>
            <td class="booking">
            <?php

                if (isset($_SESSION['TBL_Login_ID'])){
                echo '<form method="POST" action="items.php">
                    <button type="submit" name="booking">Book now</button>
                    </form>';
                } else{
                    echo "Please login to book";
                }

                ?>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>Truck 2</td>
            <td>$225.00</td>
            <td></td>
            <td class="booking">
            <?php

                if (isset($_SESSION['TBL_Login_ID'])){
                echo '<form method="POST" action="items.php">
                    <button type="submit" name="booking">Book now</button>
                    </form>';
                } else{
                    echo "Please login to book";
                }

                ?>
            </td>
        </tr>

        
        <tr>
            <td></td>
            <td>Bob Cat 1</td>
            <td>$140.00</td>
            <td></td>
            <td class="booking">
            <?php

                if (isset($_SESSION['TBL_Login_ID'])){
                echo '<form method="POST" action="items.php">
                    <button type="submit" name="booking">Book now</button>
                    </form>';
                } else{
                    echo "Please login to book";
                }

                ?>
            </td>
        </tr>


        <tr>
            <td></td>
            <td>Chainsaw 1</td>
            <td>$45.00</td>
            <td></td>
            <td class="booking">
            <?php

                if (isset($_SESSION['TBL_Login_ID'])){
                echo '<form method="POST" action="items.php">
                    <button type="submit" name="booking">Book now</button>
                    </form>';
                } else{
                    echo "Please login to book";
                }

                ?>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>Chainsaw 2</td>
            <td>$55.00</td>
            <td></td>
            <td class="booking">
            <?php

                if (isset($_SESSION['TBL_Login_ID'])){
                echo '<form method="POST" action="items.php">
                    <button type="submit" name="booking">Book now</button>
                    </form>';
                } else{
                    echo "Please login to book";
                }

                ?>
            </td>
        </tr>

    </table>
</Div>



</body>
</html>
