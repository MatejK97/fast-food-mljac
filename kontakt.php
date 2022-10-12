<?php include('header.php') ?>

<div class="divKontaktWrap">
	<div class="container">
		<div class="divTextAling divTextHeight">
			<h1>Kontakt</h1>
		</div>
	</div>
</div>
<div class="divContantFormWrap">
	<div class="container">
		<p>Za sva pitanja <span id="greenText">pošaljite nam poruku....</span></p>
		<form class="" method="post">
		<div class="mb-3">
			<label for="name" class="form-label">Ime <span class="redStar">*</span></label>
			<input type="text" name="name" class="form-control" id="name" placeholder="Ovdje ide Vaše ime..." required="">
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">E-mail <span class="redStar">*</span></label>
			<input type="email" name="email" class="form-control" id="email"
			placeholder="Ovdje ide Vaš email..." required="">
		</div>
		<div class="mb-3">
			<label for="phone" class="form-label">Broj telefona</label>
			<input type="tel" name="phone" class="form-control" id="phone"
			placeholder="Ovdje ide Vaš broj telefona...">
		</div>
		<div class="mb-3">
			<label for="text" class="form-label">Poruka</label>
			<textarea class="form-control" id="text" rows="6" name="text" placeholder="Ovdje ide Vaša poruka..."></textarea>
		</div>
		<div>
			<button class="btn btn-primary" name="submit" type="submit">Pošalji</button>
		</div>
		</form>
	</div>
</div>

<?php 
		if(isset($_POST['submit'])){
			$ime = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$text = $_POST['text'];
			
			$to = "alfonso@lin39.mojsite.com";
			$subject = "Food Mljac Pitanja";

			$message = "<b>Korisničko ime je '$ime'.<br>Broj telefona je '$phone'</b>";
			$message .= "<br>'$text'";
			$header = "From:'$email' \r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-type: text/html\r\n";
      $retval = mail ($to,$subject,$message,$header);
         
      if( $retval == true ) {
        echo "Message sent successfully...";
      }else {
        echo "Message could not be sent...";
      };
    }
	?>

<?php include ('footer.php') ?>