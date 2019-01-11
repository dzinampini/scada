<?php include('_header.php'); ?>

<form name="" method="POST" action="">

<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Company</label>
				<input name="company" class="form-control" type="text" minlength="3" maxlength="30" required>
			</div> 
			

			<div class="form-group">
				<label>Share Price</label>
				<input name="price" class="form-control" step="0.01" type="number" required>
			</div>

			<div class="form-group">
				<label>Shares Available</label>
				<input name="shares" class="form-control" type="number" required>
			</div>
		


			<div class="form-group">
				<br><br>
				<input name="submit" type="submit" id="submit" class="form-control submit_button" value="Add Company"  /> 
			</div>
		</div>


		<div class="col-md-4">
		</div>

		</div>
		</div>
		</div>
		</div>
	</div>
</div>
</form>

<?php 
if(isset($_POST['submit'])){


$company = $_POST['company'];
$shares = $_POST['shares'];
$price = $_POST['price'];

$staff_insert = "INSERT INTO `companies`(`company`, `shares`, `price`) VALUES ('$company','$shares','$price')"; 

$rs = mysqli_query($con, $staff_insert); ?> 

<script>
       alert("Company added successfully!");
       location = 'companies.php';
      </script>
<?php }
?>


}


