

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
   
	<br/>
	<!--manin page area for home-->
    <div class="container">
    	<h1 class="alert alert-info" style="text-align:center;font-weight:bold"> One Click for all</h1>
    	
    	
	
    <img class="img-responsive img-rounded center-block" src="img/money.jpg">

   
       	<br><br>
   


	<div class="bradius center-block">
		<span class="label label-warning">Select your currency</span><br>

	<form class="center" action="" method="post">

		<label for="from">From</label>
		<select name="from">
			<option value="usd">USD</option>
			<option value="pound">POUND</option>
			<option value="euro">EURO</option>
			<option value="ruble">Ruble</option>
			<option value="baht">BAHT</option>

			
		</select>

		<label for="to">To</label>
		<select name="to">

		    <option value="usd">USD</option>
			<option value="euro">EURO</option>
			<option value="baht">BAHT</option>
			<option value="ruble">Ruble</option>
			<option value="pound">POUND</option>
		</select>

		<label for="c_input">Enter Amount</label>
		<input type="number" name="camount" required=""/>

		
		<button type="submit" name="convert" value="Convert" class="btn btn-success"><b>Submit</b></button>
	</form>
	<br/>
	
	</div>
	    	<br>
	<div class='btn btn-success center' style="margin-left: 30%;font-weight:bold">
	
	<h4> Result: </h4>



<?php 

	if (isset($_POST['convert'])) {
		$from=$_POST['from'];
		$to=$_POST['to'];
		$amount=$_POST['camount'];

		if($amount==''||is_int($amount))
		{
			echo "Please Enter Valid Amount";
			exit();
		}

	
		if($from=='usd'){
			if($to=='euro'){
				$result=$amount*0.88;
				echo $result." Euro";
			}
			else if ($to=='baht') {
				$result=$amount*34.82;
				echo $result." Baht";
			}
				else if ($to=='ruble') {
				$result=$amount*55.82;
				echo $result." Ruble";
			}
				else if ($to=='pound') {
				$result=$amount / 1.82;
				echo $result." Round";
			}
		}
		else if ($from=='pound') {
			if($to=='euro'){
				$result=$amount*1.27;
				echo $result." Euro";
			}
			else if ($to=='baht') {
				$result=$amount*50.13;
				echo $result." Raht";
			}
			else if ($to=='ruble') {
				$result=$amount*65.82;
				echo $result." Ruble";
			}
			else if ($to=='usd') {
				$result=$amount*5.82;
				echo $result." Ruble";
			}
		}
		else if ($from=='ruble') {
			if($to=='euro'){
				$result=$amount /  1.27;
				echo $result." Euro";
			}
			else if ($to=='baht') {
				$result=$amount*5.13;
				echo $result." Baht";
			}
			else if ($to=='usd') {
				$result=$amount /  65.82;
				echo $result." Ruble";
			}
				else if ($to=='pound') {
				$result=$amount / 5.82;
				echo $result." Pound";
			}
		}
			if($from=='baht'){
			if($to=='euro'){
				$result=$amount / 45.88;
				echo $result." euro";
			}
			else if ($to=='usd') {
				$result=$amount / 34.82;
				echo $result." Baht";
			}
				else if ($to=='ruble') {
				$result=$amount / 5.82;
				echo $result." Ruble";
			}
				else if ($to=='pound') {
				$result=$amount / 65.82;
				echo $result." Pound";
			}
		}
			if($from=='euro'){
			if($to=='baht'){
				$result=$amount * 45.88;
				echo $result." Euro";
			}
			else if ($to=='usd') {
				$result=$amount * 1.82;
				echo $result." Baht";
			}
				else if ($to=='ruble') {
				$result=$amount / 20.82;
				echo $result." Buble";
			}
				else if ($to=='pound') {
				$result=$amount / 5.82;
				echo $result." Pound";
			}
		}
	
	}

 ?>
		
</div>
</div>
