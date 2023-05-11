<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/Property.css">
    <title>Al Nakheel villa </title>
</head>
<body>
    <header>
        <img src="img\logo.png" alt="logo" width="250" height="210">
        <a href="HomePage.php" id="sign">SignOut</a>
    </header>
    
    <div class="container">
        <div class="box">
            <div class="images">
                <div class="img-holder active" >
                    <img src="img\h2.jpg" width="260" height="310" id="img-holder">
                    <br>
                </div>
                <div class="img-holder">
                    <img src="img\room1.jpg"   class="small"id="small">
                </div>
                <div class="img-holder">
                    <img src="img\room11.jpg" class="small"id="small">
                </div>
                <div class="img-holder">
                    <img src="img\bathroom.jpg"class="small" id="small">
                </div>
                <div class="img-holder">
                    <img src="img\ketchen1.jpg" height="78" class="small" id="small">
                </div>
                <div class="img-holder">
                    <img src="img\h2.jpg" width="100" height="78"class="small" id="small">
                </div>
                
            </div>
            <div class="basic-info">
                <br>
                <h1>Villa Al Nakheel </h1>
                
                <div class="options">
                    <a href="#">Apply</a>      
                    <a href="EditPropertyPage.php">Edit</a>
                </div>
                <br>
            </div>
            <div class="description">
                <p>              
                    the villa consist of :<br>
                    <strong >Ground floor:</strong> 3 living room, dining room , 2 bathrooms, kitchen<br>
                    <strong >Upper floor:</strong>5 bedroom, 3 bathrooms, small dining room,Office room<br>
                    <strong >Basement:</strong> childrens games room,Laundry room ,Cinema room<br>
                    the area  is 500m2 ,the street width is 30m <br> 
                </p>
                <ul class="features">
                    <li><i class="fa-solid fa-circle-check"></i>category: <cite>villa</cite> </li>
                    <li><i class="fa-light fa-bed-front"></i>number of rooms: <cite>5</cite></li>
                    <li><i class="fa-solid fa-circle-check"></i>rent :<cite> 120000/year</cite></li>
                    <li><i class="fa-solid fa-circle-xmark"></i>location :<cite> Riyadh,Al Nakheel District,Al-juwairiyah bin harith Street.
                    
                    </cite></li>
                    <li><i class="fa-solid fa-circle-xmark"></i>max number of tenant : <cite>10</cite></li>
                    <br>
                </ul>                              
            </div>
        </div>
    </div>
    <script>
        var big_image=document.getElementById("img-holder");
        var smalling=document.getElementsByClassName("small");
        smalling[0].onclick=function(){
            big_image.src=smalling[0].src;
        }
        smalling[1].onclick=function(){
            big_image.src=smalling[1].src;
        }
        smalling[2].onclick=function(){
            big_image.src=smalling[2].src;
        }
        smalling[3].onclick=function(){
            big_image.src=smalling[3].src;
        }
        smalling[4].onclick=function(){
            big_image.src=smalling[4].src;
        }
    </script>
</body>
</html>