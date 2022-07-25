<html>
    <head>
        <link rel = "stylesheet" href = "mystyle.css">
    </head>
</html>

<?php
session_start();
    if (isset($_GET["quantity"])){
		$name = $_GET["product_name"];
		$price = $_GET["product_price"];
		$quantity = $_GET["quantity"];
		$totalprice = $price * $quantity;
        $_SESSION["itemprice"][$_SESSION['count']] = $totalprice;
        $_SESSION["itemname"][$_SESSION['count']] = $name . "($quantity)";
        $_SESSION["totalprice"] += $totalprice;
        $_SESSION["quantity"] += $quantity;
        $_SESSION["count"] +=1;
    }
$row=0;
echo "<h2>Shopping Cart</h2>";
echo "<table border = '2' width = '100%'>";
echo "<tr>";
echo "<th>Item Name</th>";
echo "<th>Price</th>";
echo "</tr>";
while($row<$_SESSION['count'])
{
    echo "<tr>";
    echo "<td>".$_SESSION["itemname"][$row]. "</td>";  
    echo "<td>".$_SESSION["itemprice"][$row]. "</td>";
    echo "</tr>";
    $row+=1;
}
echo "</table>";
echo "<br>";
echo "<br>";
echo "<table border = '2' width = '40%'>";
echo "<tr><td>Quantity: </td><td>".$_SESSION["quantity"]."</td></tr>";

echo "<tr><td>Total Price: </td><td>".$_SESSION["totalprice"]."</td></tr>";
echo "</table>";
?>

<script>
    function checkout(){
        var quantity = document.getElementById("quantity").value;
	    if (quantity <= 0){
			alert("Your shopping cart is empty!");
			return false;
	    }
        else{
     		return true;
        }
    }
</script>

</head>
<body>
        <table>
            <tr>
                <td></td>
            </tr>
        </table>
       <form method='GET' target='top-right' action='checkout_page.php' onsubmit='return checkout()'>
        	<input type='hidden' id='quantity' size='20' value='<?php echo $_SESSION["quantity"]; ?>'>
        	<input type='submit' name='submit' value ='Checkout'>
  	   </form>
  
        <form method="POST" target="bottom-right" action ="clear_button.php" >
            <input type="submit"  value="Clear">
        </form>

    </body>
</html>
