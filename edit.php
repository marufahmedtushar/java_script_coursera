
<head>
<title>Dr. Chuck's Profile Edit</title>
<!-- bootstrap.php - this is HTML --><!-- Latest compiled and minified CSS --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Editing Profile for UMSI</h1>
<form method="post" action="edit.php">
<p>First Name:
<input type="text" name="first_name" size="60" value="Unhonoured"></p>
<p>Last Name:
<input type="text" name="last_name" size="60" value="Isagogics"></p>
<p>Email:
<input type="text" name="email" size="30" value="blah@example.com"></p>
<p>Headline:<br><input type="text" name="headline" size="80" value="Addressing"></p>
<p>Summary:<br><textarea name="summary" rows="8" cols="80">
Plier</textarea></p>
<p>
<input type="hidden" name="profile_id" value="7325"><input type="submit" value="Save"><input type="submit" name="cancel" value="Cancel"></p>
</form>
</div>
</body>
</html>