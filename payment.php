<?php
session_start(); //session starts here  
include 'Navbar2.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment getway</title>
	<!-- <link rel="stylesheet" type="text/css" href="payment.css"> -->
</head>
<style>
	* {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		font-family: sans-serif;
	}

	header {
		width: 100vw;
		min-height: 100vh;
		background-color: #DCDCDC;
		font-size: 1.2rem;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.container {
		background: white;
		max-width: 800px;
		min-height: 500px;
		display: flex;
		justify-content: space-between;
		align-items: flex-start;
		padding: 0.5rem 1.5rem;
	}

	.left {
		flex-basis: 50%;
	}

	.right {
		flex-basis: 50%;
	}

	form {
		padding: 1rem;
	}

	h3 {
		margin-top: 1rem;
		color: #2c3e50;
	}

	form input[type="text"] {
		width: 100%;
		padding: 0.5rem 0.7rem;
		margin: 0.5rem 0;
		outline: none;
	}

	#zip {
		display: flex;
		margin-top: 0.5rem;
	}

	#zip select {
		padding: 0.5rem 0.7rem;
	}

	#zip input[type="number"] {
		padding: 0.5rem 0.7rem;
		margin-left: 5px;
	}

	.button {
		padding-top: 9px;
	}

	button {
		background-color: #4CAF50;
		border: none;
		color: white;
		width: 100%;
		padding: 10px;
		text-align: center;
		display: inline-block;
		border-radius: 10px;
		font-size: 16px;
	}

	input[type="submit"]:hover {
		background: #2c3e50;
	}


	@media only screen and (max-width: 770px) {
		.container {
			flex-direction: column;
		}

		body {
			overflow-x: hidden;
		}
	}
</style>

<body>
	<header>
		<div class="container">
			<div class="left">
				<h3>BILLING ADDRESS</h3>
				<form method="post" action="payment.php">
					Full name
					<input type="text" name="" placeholder="Enter name" required>
					Email
					<input type="text" name="" placeholder="Enter email" required>

					Address
					<input type="text" name="" placeholder="Enter address" required>

					City
					<input type="text" name="" placeholder="Enter City" required>
					<div id="zip">
						<label>
							State
							<select>
								<option>Choose State..</option>
								<option>Rajasthan</option>
								<option>Hariyana</option>
								<option>Uttar Pradesh</option>
								<option>Madhya Pradesh</option>
							</select>
						</label>
						<label>
							Zip code
							<input type="number" name="" placeholder="Zip code" required>
						</label>
					</div>
				</form>
			</div>
			<div class="right">
				<h3>PAYMENT</h3>
				<form>
					Accepted Card <br>
					<img src="card1.png" width="100">
					<img src="card2.png" width="50">
					<br><br>

					Credit card number
					<input type="text" name="" placeholder="Enter card number" required>

					Exp month
					<input type="text" name="" placeholder="Enter Month" required>
					<div id="zip">
						<label>
							Exp year
							<select>
								<option>Choose Year..</option>
								<option>2022</option>
								<option>2023</option>
								<option>2024</option>
								<option>2025</option>
							</select>
						</label>
						<label>
							CVV
							<input type="number" name="" placeholder="CVV" required>
						</label>
					</div>
					<div class="button">
						<button type="submit" value="checkout" name="checkout">Proceed to Checkout</button>
					</div>
				</form>
			</div>
		</div>
	</header>
</body>

<?php
if (isset($_POST['checkout'])) {
	echo "<script>window.open('Buy_book.php','_self')</script>";
	echo "<script>alert('Payment Successful!')</script>";
}
?>

</html>