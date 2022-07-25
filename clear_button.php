<style>
.text {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px
}
.clear_button:link, .clear_button:visited {
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 12px 12px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.clear_button:hover, .clear_button:active {
  background-color: #45a049;
}
</style>

<?php
session_destroy();
session_start();
$_SESSION['totalprice']=0;
$_SESSION['count']=0;
$_SESSION["itemname"][0]="";
$_SESSION["itemprice"][0]="";
$_SESSION["quantity"] = 0;
echo '<p class="text">Click "Go Back" button to select item again.</p>';
echo "<a class='clear_button' href='bottom_right.php'>Go back</a>";
?>


