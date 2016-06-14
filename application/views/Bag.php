<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KCPK</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/assets/home_view_style.css">


  </head>

  <body>

  <?php
    $this->load->view('/partials/header.php');
  ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    </div>
  </div>
</nav>

	<div id="container">
<div class="col-md-2"></div>
<div class="col-md-1">
<h4>SHOPPING BAG</h4>
	<table class='clothesList'>
			<tr>
				<td class ='style'>ITEM</td>
				<td class ='style'>DESCRIPTION</td>
				<td class ='size'>SIZE</td>
				<td class ='qty'>QTY</td>
				<td class ='price'>PRICE</td>
				<td class = 'action'>ACTION</td>
			</tr>
<?php
		foreach($allItems as $cartItem)
		{

?>
			<div class="bagList">
				<tr>
					<td class ='style'><a href='/itemDetails/<?= $cartItem['product_id'] ?>'><img class='productImage' src = '/assets/currentProducts/<?= $cartItem['front_image_filename'] ?>'/></a></td>
					<td class ='name'><?= $cartItem['name'] ?></td>
					<td class ='size'><?= $cartItem['size'] ?></td>
					<td class ='qty'><?= $cartItem['quantity'] ?></td>
					<td class ='price'>$<?= $cartItem['price'] ?></td>
					<td class='action'><a id = "bag_action" href="/Products/remove_from_bag/<?= $cartItem['id'] ?>">REMOVE</a></td>
					<!-- NEED TO ADD REMOVE FUNCTIONALITY -->
				</tr>
			</div>


<?php
		}
?>


		</table>

		<div class="bottomContents">
			
			<p class='continue'><a href="/Products" class='cont'> < CONTINUE SHOPPING</a></p>

			<div class="total">
				<table class='orderTotal'>
					<tr>
						<td class='totalStyle'>SUBTOTAL</td>
						<td class='money'>$<?=$subtotal ?></td>
					</tr>

					<tr>
						<td class='totalStyle'>ESTIMATED SHIPPING</td>
						<td class='money'>FREE</td>

					</tr>
					<tr>
						<td class='totalStyle'>ESTIMATED TOTAL</td>
						<td class='money'>$<?= $subtotal ?></td>
					</tr>
				</table>
				<form action='/Products/shipping' method = 'POST'>
					<input type = 'hidden' name = 'subtotal' value ='<?= $subtotal ?>'>
					<input type='submit' class='submit' value='PROCEED TO CHECKOUT/SHIPPING INFO'></input>	
				</form>

			</div>
		</div>
	</div>
</div>

</body>
</html>