<?php 
include('functions.php');
include('customer_header.php');

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'id'			=>	$_GET["id"],
				'car_name'			=>	$_POST["car_name"],
				'car_price'		=>	$_POST["car_price"],
				'car_details'		=>	$_POST["car_details"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'id'			=>	$_GET["id"],
			'car_name'			=>	$_POST["car_name"],
			'car_price'		=>	$_POST["car_price"],
			'car_details'		=>	$_POST["car_details"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>
<br />
		<div class="container">
			<?php
				$query = "SELECT * FROM cars ORDER BY id ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="uploads/<?php echo$row['image_url']?>" class="image-responsive"><br />

						<h4 class="text-info"><?php echo $row["car_name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["car_price"]; ?></h4>

						<input type="text" name="car_details" value="1" class="form-control" />

						<input type="hidden" name="car_name" value="<?php echo $row["car_name"]; ?>" />

						<input type="hidden" name="car_price" value="<?php echo $row["car_price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Car Name</th>
						<th width="10%">Car Details</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["car_name"]; ?></td>
						<td><?php echo $values["car_details"]; ?></td>
						<td>$ <?php echo $values["car_price"]; ?></td>
						<td>$ <?php echo number_format($values["car_details"] * $values["car_price"], 2);?></td>
						<td><a href="index.php?action=delete&id=<?php echo $values["id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["car_details"] * $values["car_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>