<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    
<body>
                    <div class="form1">
						<form action="myChurchWebsite/contact.php" method ="post">
							<h2>Your Details</h2>
							<input type="text " class="field"  name="fname" placeholder=" Your Name"><br>
							<input type="email" class="field"  name="email" placeholder="E-mail"><br>
							<input type="number" class="field"  name="mnumber" placeholder="Contact No" pattern="^\d{3}-\d{3}-\d{4}$"><br>
							<textarea  class="field" name="massage" placeholder="Massage"></textarea><br>
							<input type="submit"  placeholder="Submit">
						</form>
				    </div>
</body>
</html>