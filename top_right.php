<!DOCTYPE html>
<html>
    <head>
        <html>
    <head>
        <link rel = "stylesheet" href = "mystyle.css">
    </head>
</html>

<?php

if (isset($_GET['product_id']))
{
    $product_id = $_GET['product_id'];
    
    $connection = mysqli_connect("aa1x5vqcga6phu1.cii10r2h4uzq.us-east-1.rds.amazonaws.com","thawzin","13476801","assignment1")or die("Couldn't connect to Server");
    
    $query_string = "select * from products where product_id = $product_id";
    
    $result = mysqli_query($connection,$query_string);
    
    $num_rows = mysqli_num_rows($result);
    
    if($num_rows >0)
    {
        echo "<h2>Product Details</h2>";
        echo "<table border = '2' width='100%'>";
        echo "<tr>";
        echo "<th>Product ID</th>";
        echo "<th>Product Name</th>";
        echo "<th>Price</th>";
        echo "<th>Quantity</th>";
        echo "<th>InStock</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result))
        {
            
            echo "<tr>";
            echo "<td>".$row["product_id"]."</td>";
            echo "<td>".$row["product_name"]."</td>";
            echo "<td>".$row["unit_price"]."</td>";
            echo "<td>".$row["unit_quantity"]."</td>";
            echo "<td>".$row["in_stock"]."</td>";
            echo "<tr>";
            $product_name = $row["product_name"];
            $product_price = $row["unit_price"]; 
            
        }
        echo "</table>";
        echo "<br>";
        echo "<br>";
        echo "<table width ='50%'>";
        echo "<div><form method='GET' action='bottom_right.php' target='bottom-right' onsubmit='return validate_quantity()'>";
        echo "<tr>";
        echo "<td><h4>Quantity of items (Less than 20):</h4></td>";
        echo "<td><input type='number' id='quantity' name='quantity' min='1' value = '1'></td></tr>";
        echo "<tr>";
        echo "<td><input type='submit' value='Add' name='submit'></td></tr>";
        echo "<input type = 'hidden' name = 'product_name' value = '$product_name'>";
        echo "<input type = 'hidden' name = 'product_price' value = '$product_price'>";
        echo "</form>";
        echo "</div>";
        echo "</table>";
        
    }
    mysqli_close($connection);
}
else{
    echo "<p>Please select a product from the category<P>";
}

?>


<script>
	function validate_quantity(){
		var quantity = document.getElementById("quantity").value;
		if (quantity > 20) {
			alert("Quantity should be less than 20");
    		return false;			
		} 
		return true;
	}
	
</script>