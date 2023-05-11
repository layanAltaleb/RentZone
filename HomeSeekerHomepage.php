<!DOCTYPE html>
<html>
  
<head>
      <title>Home Seeker’s HomePage</title>
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/HomeSeekerHomepage.css">
      <script src="https://kit.fontawesome.com/b23f7a360e.js" crossorigin="anonymous"></script>
</head>

<body>

<header>
    <img src="img/RentZoneLogo.png" alt="logo" width="210" height="180">
    <h1 id="welcome">Welcome <em>Sara Ahmad</em></h1>

    <div id="seekerInfoCon">
    <ul>
        <li>First Name: <em class="info">Sara</em> </li><br>
        <li>Last Name: <em class="info">Ahmad</em> </li><br>
        <li>Number of FamilyMembers: <em class="info">5</em> </li><br>
        <li>PhoneNumber: <em class="info">055555333333</em></li><br>
        <li>Email: <em class="info">Sara@gmail.com</em></li>
    </ul>
    </div>
</header>

<main>

    <a href="HomePage.php" id="sign-out">sign-out</a>

    <table id="t1">
        <caption>Requested Home's</caption>

        <tr Class = "table head">
            <th>Property Name</th>
            <th>Category</th>
            <th>Rent</th>
            <th>Status</th>
        </tr>
        <tr>
            <td><a href = "Property.php">Olaya Plaza</a></td>
            <td>Apartment</td>
            <td>8000/month</td>
            <td>Under consideration</td>
            <td><a href = "">Withdraw</a></td>
        </tr>
        <tr>
            <td><a href = "Property.php">Al Nakheel Home</a></td>
            <td>Villa</td>
            <td>120000/year</td>
            <td>Accepted</td>
            <td></td>
        </tr>
        
    </table>

  
    <table id="t2">
        
        <caption>Home's for Rent</caption>

        <div id="SearchByCategory">
            <label >Search by Category:</label>
            <select id="search" placeholder="Category">
              <option value="Apartment">Apartment</option>
              <option value="Villa">Villa</option>
            </select>
            </div>
        
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
            <td><a href = "">Apply</a></td>
        </tr>
        <tr>
            <td><a href = "">sweet Home</a></td>
            <td>Villa</td>
            <td>1500/month</td>
            <td>6</td>
            <td>Riyadh, Alyasamin District</td>
            <td><a href = "">Apply</a></td>
        </tr>
    </table>
</main>

</body>

</html>

