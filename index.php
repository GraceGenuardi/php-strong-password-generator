<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>Password Generator</title>
</head>
<body>

    <h1>Strong Password Generator</h1>
      <h2>Genera una password sicura!</h2>

<!-- MILSTONE 1- CREARE FORM -->

 <div class="form-password">

       <form method="get" action="index.php">
		    <label for="length"> <p>Lunghezza password:</p></label>
		    <input type="number" name="length" id="length" min="8" max="50" value="8">
		    <br><br>
		    <button type="submit">Genera password</button>
	   </form>

</div> 
    
</body>
</html>