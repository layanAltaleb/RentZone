<!DOCTYPE html>
<html>
  <head>
    <title>Home Seeker Sign Up</title>
    <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/Signup.css">
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
    <form>
    <h1>Sign Up</h1>
    <form action="/login" method="post">
        <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName"  required><br><br>

      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName"  required><br><br>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" min="18" max="99" required ><br><br>

      <label for="familyMembers">Number of Family Members:</label>
      <input type="number" id="familyMembers" name="familyMembers" required  ><br><br>

      <label for="income">Income:</label>
      <input type="number" id="income" name="income" required ><br><br>

      <label for="job">Job:</label>
      <input type="text" id="job" name="job" required ><br><br>

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required ><br><br>

      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required ><br><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required ><br><br>

      <input type="submit" value="Sign Up" class="signup" onClick="myFunction()" >
    </form>
    <br>
  </body>
  <script>
    function myFunction() {
        window.location.href="HomeSeekerHomepage.php";
      }
  </script>
</html>
