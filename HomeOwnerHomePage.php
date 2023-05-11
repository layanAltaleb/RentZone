<!DOCTYPE html>
<html>
  
<head>
      <title>Home Owner HomePage</title>
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/HomeOwnerHomepage.css">
      <script src="https://kit.fontawesome.com/b23f7a360e.js" crossorigin="anonymous"></script>
</head>

<body>

<header>
    <img src="img/RentZoneLogo.png" alt="logo" width="250" height="210">
    <h1 id="welcome">Welcome <em>Asma AL Abdullah</em></h1>

    <div id="OwnerlInfoCon">
    <ul>
        <li><strong>Name:</strong> <em class="info">Asma AL Abdullah </em></li><br>
        <li><strong>Phone Number:</strong> <em class="info">0533335556 </em> </li><br>
        <li><strong>Email:</strong> <em class="info">asma@rental.com</em> </li>
    </ul>
    </div>
</header>

<main>

    <a href="HomePage.php" id="sign-out">SignOut</a>

    <table id="t1">
        <caption>Rental Applications</caption>

        <tr Class = "table head">
            <th>Property Name</th>
            <th>Location</th>
            <th>Applicant</th>
            <th>Status</th>
            
        </tr>
        <tr>
            <td><a href = "Property.php">Olaya Plaza</a></td>
            <td>Riyadh, Al Olaya, r street, 33</td>
            <td><a href = "ApplicantInformationPage.php">Sara Ahmad</a></td>
            <td>Under consideration</td>
            <td><a href="">Accept</a>&#160;&#160;<a href="">Decline</a></td>
        </tr>
       
        
    </table>
    <br>
    <br>

    <a href="AddNewPropertyPage.php" id="add-property">Add Property</a>
    <table id="t2">
        
        <caption>Listed Properties</caption>
        
        <tr Class = "table head">
            <th>Property Name</th>
            <th>Category</th>
            <th>Rent</th>
            <th>Room's</th>
            <th>Location</th>
        </tr>
        <tr>
            <td><a href = "Property.php">Malqa plaza</a></td>
            <td>Apartment</td>
            <td>7000/month</td>
            <td>3</td>
            <td>Riyadh, Almalqa District,468 St.</td>
            <td><a href = "">Delete</a></td>
        </tr>
        <tr>
            <td><a href = "Property.php">Al Nakheel Home</a></td>
            <td>Villa</td>
            <td>1500/month</td>
            <td>6</td>
            <td>Riyadh,Al Nakheel District,Al-juwairiyah bin harith Street</td>
            <td><a href = "">Delete</a></td>
        </tr>
       
        
    </table>
</main>

</body>

</html>

