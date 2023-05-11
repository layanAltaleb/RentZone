<!DOCTYPE html>
<html>
  
<head>
      <title>Edit Proretry Page</title>
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/AddNewPropertyPage1.css">
      <link rel="stylesheet" href="css/EditProretryPage.css">
      <script src="https://kit.fontawesome.com/b23f7a360e.js" crossorigin="anonymous"></script>
     
</head>

<body>
<header>
    <img src="img/RentZoneLogo.png" alt="logo" width="250" height="210">
    <h1 id="welcome">Welcome <em>Asma AL Abdullah</em></h1>

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
                <div class="col-75"><input type="text" id="propertyName" name="propertyName" placeholder="Villa Al Nakheel"></div>
            </div>


            <div class="row">
                <div class="col-25"><label >Number of Room's</label></div>
                <div class="col-75"><input type="text" id="numberOfRooms" name="numberOfRooms" placeholder="5"></div>
            </div>


            <div class="row">
                <div class="col-25"><label >Rent</label></div>
                <div class="col-75"><input type="text" id="Rent" name="Rent" placeholder="120000/year"></div>
            </div>


            <div class="row">
                <div class="col-25"><label > Max Number of Tenant's</label></div>
                <div class="col-75"><input type="text" id="numTenants" name="numTenants" placeholder="10"></div>
            </div>


            <div class="row">
                    <div class="col-25"><label >Location</label></div>
                    <div class="col-75"><input type="text" id="Location" name="Location" placeholder="Riyadh,AlNakheel"></div>
            </div>


            <div class="row">
                <div class="col-25"><label for="Category">Category</label></div>
                <div class="col-75">
                    <input type="text" placeholder="villa "> 
                        
                        
                    
                </div>
            </div>
            

            <div class="row">
                <div class="col-25"><label>Description</label></div>
                <div class="col-75"><textarea id="description" name="description"
                     placeholder="the villa consist of :
                    Ground floor: 3 living room, dining room , 2 bathrooms, kitchen
                    Upper floor: bedroom, 3 bathrooms, small dining room,Office room
                    Basement: childrens games room,Laundry room ,Cinema room
                    the area  is 500m2 ,the street width is 30m  " style="height:200px"></textarea></div>
            </div>

<br>
            <div class="row">
                <div class="col-25"><label >Pictures of The Property</label></div>
                
                 <div class="col-75" id="flexxx" >
             
                    <a id="upload" href="" >upload images</a>
                   
                    <div class="col-75" id="flexx" >
                    <div><img src="img\room1.jpg"  width="65"  height="65"><br><a href="">Delete</a></div>
                    
                      <div><img src="img\room11.jpg" width="65" height="65" >  <br> <a href="">Delete</a></div>
                 
                            <div><img src="img\bathroom.jpg" width="65" height="65" >  <br> <a href="">Delete</a></div>
                          
                                <div><img src="img\ketchen1.jpg" height="65" width="65" >  <br> <a href="">Delete</a></div>
                            
                                    <div><img src="img\h2.jpg" width="65" height="65">   <br> <a href="">Delete</a></div>     
                             
                            
         </div>
            
            </div>
            </div>

            <br>
            
            <div class="row">
                 <input type="submit" value="Save">
            </div>

        </form>
    </div>
</body>

</html>
