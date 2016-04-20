

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <!--nav start-->
    <!--weather script start-->
    <script src="//www.powr.io/powr.js" external-type="html"></script>
    <!--weather script end-->


	<!--nav end-->
	<br/>
	<!--manin page area for home-->
    <div class="container">
    	<h1 class="bg-primary" style="text-align:center">One Click for all</h1>
	
    <img class="img-responsive img-rounded center-block" src="img/money.jpg">

   </div>
   
   
   



		<span class="label label-warning">Select your currency</span><br>
	<form class="center" action="" method="post">

		<label for="from">From</label>
		<select name="from">
			<option value="usd">USD</option>
			<option value="pound">POUND</option>
		</select>

		<label for="to">To</label>
		<select name="to">
			<option value="euro">EURO</option>
			<option value="baht">BAHT</option>
		</select>

		<label for="c_input">Enter Amount</label>
		<input type="number" name="camount" required=""/>

		
		<button type="submit" name="convert" value="Convert" class="btn btn-success">Change</button>
	</form>
	<br /><br /><br />


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

		echo '<div class="center">';
		if($from=='usd'){
			if($to=='euro'){
				$result=$amount*0.88;
				echo "Exchange is ".$result." euro";
			}
			else if ($to=='baht') {
				$result=$amount*34.82;
				echo "Exchange is ".$result." baht";
			}
		}
		else if ($from=='pound') {
			if($to=='euro'){
				$result=$amount*1.27;
				echo "Exchange is ".$result." euro";
			}
			else if ($to=='baht') {
				$result=$amount*50.13;
				echo "Exchange is ".$result." baht";
			}
		}
		echo '</div>';
	}
 ?>
		

