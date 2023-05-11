<!DOCTYPE html>
<html>
<head>
      <title>Login</title>
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/Login.css">
      <script src="https://kit.fontawesome.com/b23f7a360e.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>  
        <img src="img/RentZoneLogo.png" alt="logo" height="200" width="200">
    </header>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <form  id="loginForm">
        <h3>Login </h3>

		<label for="email">Email:</label><br>
		<input type="email" id="email" name="email" required><br>

		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password" required><br>

		<label id="r" for="role">Role:</label><br>
		<select id="role" name="role">
			<option value="HomeSeeker">Home Seeker</option>
			<option value="HomeOwner" >Home Owner</option>
		</select><br><br>

		<input type="button" value="Login" onclick="redirect()" >
	</form>

    <script>
      function redirect() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (email.trim() === "" || password.trim() === "") {
    alert("Please enter your email and password.");
    return;
  }

  if (document.getElementById("role").selectedIndex === 0 && email.includes("@")) {
    window.location.href = "HomeSeekerHomepage.php";
  } else if (document.getElementById("role").selectedIndex === 1) {
    window.location.href = "HomeOwnerHomePage.php";
  }
}
    </script>
</body>
</html>
