<!DOCTYPE html>
<html> 
<head>
      <title>Add New Proretry Page</title>
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/AddNewPropertyPage1.css">
</head>

<body>
<header>
    <img src="img/RentZoneLogo.png" alt="logo" width="250" height="210">
    <h1 id="welcome">Welcome <em>Amal Abdullah</em></h1>
</header>
    <ul >
        <li><a href="HomePage.php" id="sign-out" class = "nav">SignOut</a></li>
        <br>
        <br>
        <li><a href="HomeOwnerHomePage.php" id="back" class = "nav"> Back </a></li>
    </ul>

    <div class="container">
        <form >

            <div class="row">
                <div class="col-25"><label >Property Name</label></div>
                <div class="col-75"><input type="text" id="propertyName" name="propertyName" placeholder="Enter propertyName.."></div>
            </div>


            <div class="row">
                <div class="col-25"><label >Number of Room's</label></div>
                <div class="col-75"><input type="number" id="numberOfRooms" name="numberOfRooms" placeholder="Enter Number of Room's"></div>
            </div>


            <div class="row">
                <div class="col-25"><label >Rent</label></div>
                <div class="col-75"><input type="number" id="Rent" name="Rent" placeholder="Enter Rent"></div>
            </div>


            <div class="row">
                <div class="col-25"><label > Max Number of Tenant's</label></div>
                <div class="col-75"><input type="number" id="numTenants" name="numTenants" placeholder="Enter Max Number of Tenant's"></div>
            </div>


            <div class="row">
                    <div class="col-25"><label >Location</label></div>
                    <div class="col-75"><input type="text" id="Location" name="Location" placeholder="Enter Location.."></div>
            </div>


            <div class="row">
                <div class="col-25"><label for="Category">Category</label></div>
                <div class="col-75">
                    <select id="search" placeholder=" Enter Category">
                        <option value="Apartment">Apartment</option>
                        <option value="Villa">Villa</option>
                    </select>
                </div>
            </div>
            

            <div class="row">
                <div class="col-25"><label >Description</label></div>
                <div class="col-75"><textarea id="description" name="description" placeholder="Enter Description.." style="height:200px"></textarea></div>
            </div>


            <div class="row">
                <div class="col-25"><label >Pictures of The Property</label></div>
                <div class="col-75"><input type="file"  id="proPictures" name="proPictures" accept="image/gif, image/jpeg, image/png"></div>
            </div>

            <br>
            
            <div class="row">
                 <input type="submit" value="Submit">
            </div>

        </form>
    </div>
</body>

</html>

