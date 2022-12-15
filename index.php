<?php

 $conn = mysqli_connect("localhost","root","jap@1510","csv_db 12");
 if($conn){
    echo "success";
 }
 else{

    echo "not COnn";
 }
//  $query = "SELECT * FROM new_restaurants_data";
//  $connect=mysqli_query($conn,$query);

//  $num=mysqli_num_rows($connect);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <style type="text/css">
     *{
        padding: 0;
        margin: 0;
        box-sizeing: border-box;
     }

     body{
        margin-top: -10px;
        width:100%;
        min-height:100vh;
        /* background:#5d6d7d; */
        background-image: url(image/cool-background.svg);
        background-size: cover;
         height: 690px;
        }
        .container{
            max-width:900px;
            width:100%;
            margin : 100px auto;
        }
        table{
            width:100%;
            border-collapse:collapse;
            font-size:29px;

        }
        table th{
            background-color: red;
            color:#fff;
            padding:10px;
    
        }
        table td{
            padding:12px;
            color: #fff;
            font-size:1em;
            text-align:center;
        }
        
        table tr:nth-child(odd){
            background-color: #797676;
        }
        table tr:nth-child(even){
            background-color:#735858;
        }
        .hero{
   width: 100%;
   /* height: 50px; */

   color: #525252;
}
.logo:hover{
   
   position: relative;
   animation: myfirst 50s ;
   animation-direction:alternate;
   
}

   @keyframes myfirst {
      0%   { left: 0px; top: 0px;}
      /* 25%  { left: 600px; top: 0px;}
      50%  { left: 700px; top: 0px;} */
      100%  { left: 900px; top: 0px;}
   }
  

nav{
   background: #2a3b79;
   width: 100%;
   padding: 10px 10px;
   display: flex;
   justify-content: space-between;
   align-items: center;
   position: relative;
   height: 43px;
   
}
.user{
   border-radius: 50%;
   cursor: pointer;
   margin-left: 30px;
   margin-right: 5px;
}
nav ul{
   width: 100%;
   text-align: right;
  
}
nav li{
   display: inline-block;
   margin: 10px 25px;
   list-style: none;
}
nav ul li a{
   text-decoration: none;
   color: white;
}
li:hover{
   background-color: #c15f5f;
   height: 19px;
   border-radius: 2%;
}

.sub-menu-wrap{
   position: absolute;
   top: 100%;
   right: 10%;
   width: 320px;
   max-height: 0px;
   overflow: hidden;
   transition: max-height 0.5s;
   border-bottom: 0.1px solid rgb(72, 72, 72);
   border-left: 0.1px solid rgb(72, 72, 72);
   border-right: 0.1px solid rgb(72, 72, 72);
   border-radius: 20px;
   z-index: 1;
}
.sub-menu-wrap.open-menu{
   max-height: 400px;
}
.sub-menu{
   background: #fff;
   padding: 20px;
   margin: 0px;

}
.sub-menu-wrap .sub-menu .user-info .jap{
   border-radius: 100px;
   border: 2px solid black;
   width: 60px;
   margin-right:15px ;
}
.user-info{
   display: flex;
   align-items: center;
}
.user-info h3{
  font-weight: 500;
}
.sub-menu hr{
   border: 0;
   height: 1px;
   width: 100%;
   background: #ccc;
   margin: 15px 0 10px;
}
.sub-menu-link{
   display: flex;
   align-items: center;
   text-decoration: none;
   color: #525252;
   margin: 12px 0;
}
.sub-menu-link p{
   width: 100%;

}
.sub-menu-link:hover p{
   font-weight: 700;

}
.sub-menu-link span{
   font-size: 22px;
   transition: transform 0.5s;
}
.sub-menu-link:hover span{
   transform:translateX(5px) ;
}
.formM{
  
  display: flex;
  position: relative;
  margin-left: 60px;
  padding: 10px;
  
}
.form{
    font-size:40px;
}
.form1{
   
    margin-left: 190px;
    
}
.form1 .form .h1{
    text-decoration:none;
    color: black;
    margin-top:10px;
    /* font-family: 'Rubik', sans-serif;
   -webkit-text-stroke-width: 1.5px;
    -webkit-text-stroke-color: rgb(66, 5, 5);
   color: #fff; */

}
.form1 .form{
   padding-left: 10px;
   font-size: 20px;
   /* background-color: #9ea8cb; */
   padding: 50px;
   margin-left: 0px;
   font-family: 'Rubik', sans-serif;
   z-index: 0;
   margin-right: 20px;
  }
  select {

/* styling */
background-color: white;
border: thin solid rgb(9, 9, 10);
border-radius: 4px;
display: inline-block;
font: inherit;

line-height: 20px;
padding: 0.5em 3.5em 0.5em 1em;

/* reset */

margin: 0;      
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-appearance: none;
-moz-appearance: none;
}
select.classic {
background-image:
  linear-gradient(45deg, transparent 50%, blue 50%),
  linear-gradient(135deg, blue 50%, transparent 50%),
  linear-gradient(to right, skyblue, skyblue);
background-position:
  calc(100% - 20px) calc(1em + 2px),
  calc(100% - 15px) calc(1em + 2px),
  100% 0;
background-size:
  5px 5px,
  5px 5px,
  2.5em 2.5em;
background-repeat: no-repeat;
}

select.classic:focus {
background-image:
  linear-gradient(45deg, white 50%, transparent 50%),
  linear-gradient(135deg, transparent 50%, white 50%),
  linear-gradient(to right, gray, gray);
background-position:
  calc(100% - 15px) 1em,
  calc(100% - 20px) 1em,
  100% 0;
background-size:
  5px 5px,
  5px 5px,
  2.5em 2.5em;
background-repeat: no-repeat;
border-color: grey;
outline: 0;
}
input[type=submit] {
  width: 100px;
  background-color: #469951;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  margin-top:100px ;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #2f7a39;
}
     </style>
</head>
<body>
   <!-- <div>
      <img src="url(image/newpic-transformed.jpeg)" >
  
   </div> -->
<div class="hero">
     <nav>
      <img src="image/delivery.png" class="logo" height="50">
      <ul>
        <li><a href="#" id="hover1">HOME</a></li>
        <li><a href="about_us.html" id="hover2">ABOUT US</a></li>
        <li><a href="#" id="hover3">CONTACT</a></li>
        <li><a href="#" id="hover4" >FEATURES</a></li>
      </ul>
      <img src="image/jap.png" height="30" class="user" onclick="toggleMenu()">

      <div class="sub-menu-wrap" id="submenu">
        <div class="sub-menu">
          <div class="user-info">
            <img src="image/jap.png" class="jap">
            <h3>Jap patel</h3>
          </div>
          <hr>
          <a href="#" class="sub-menu-link">
            <p>Edit Profile</p>
            <span>></span>
          </a>
          <a href="#" class="sub-menu-link">
            <p>Settings & privacy</p>
            <span>></span>
          </a>
          <a href="#" class="sub-menu-link">
            <p>Help & Support</p>
            <span>></span>
          </a>
          <a href="#" class="sub-menu-link">
            <p>Logout</p>
            <span>></span>
          </a>
        </div>
      </div>

     </nav>
   </div>
   <div class="form1">
    
     <form action="index.php" method="POST" class="formM">
       <!-- <div class="form">
          <h1 class="h1">Select cuisine</h1>
          <input type="checkbox" class="checkbox">Paneer & Vegetable<br>
          <input type="checkbox" class="checkbox">Rice & Biryani <br>
          <input type="checkbox" class="checkbox">Indian Desserts & Sweets <br>
          <input type="checkbox" class="checkbox">North india<br>
          <input type="checkbox" class="checkbox">south indian<br>
          <input type="checkbox" class="checkbox">Gujarati dishes<br>
          <input type="checkbox" class="checkbox">Punjabi dishes<br>
          <br><br><br>
       </div> -->

        <!-- <div class="form">
          <h1 class="h1">Budget</h1>
        
          <input type="text" placeholder="Min Budget" class="input"><br>
          <br>
          <input type="text" placeholder="Max Budget" class="input">
          <br><br><br>
        </div> -->

        <div class="form">
           <h1 class="h1">Cuisine</h1>
          <select class="classic" name="Cuisine">
          <option>Gujarati</option>
          <option>Fast Food</option>
          <option>Street Food
</option>
          <option>South Indian
</option>
          
          <option>North Indian</option>
          <option>Cafe</option>
          <option>Mexican</option>
          <option>Italian</option>
          <option>Chinese
</option>
          <option>Beverages</option>
          <option>Italian</option>
          <option>Asian</option>
          <option>Rolls</option>
          <option>Modern Indian</option>
          <option>Desserts</option>
          <option>Ice Cream
</option>
          
          </select>
        <br><br><br>
     
        </div>

        <div class="form">
           <h1 class="h1">Area</h1>
          <select class="classic" name="Location">
          <option>Alkapuri</option>
          <option>Karelibaug</option>
          <option>Kendranagar</option>
          <option>Subhanpura</option>
          <option>Nizampura</option>
          <option>Gotri</option>
          <option>Vadiwadi</option>
          <option>Fatehgunj</option>
          <option>Mandvi</option>
          <option>Makarpura</option>
          <option>Bhayli</option>
          <option>Akota</option>
          <option>Sama</option>
          </select>
        <br><br><br>
     
        </div>

       <div class="form">
       <!-- <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>  -->
       <!-- <input type="submit" name="search" value="Search" > -->
       <button class="btn btn-primary" name="search">search</button>
      
        </div>
       </form>

    

    
     <!-- </form> -->
     </div>
    <div class="container">
      <!-- <form action="index1.php" method="POST"> -->
      
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Ratings</th>
                <th>Location</th>
                <th>Cuisine</th>
            </tr>
           <?php
           if(ISSET($_POST['search'])){
            $Location=$_POST['Location'];
            $Cuisine=$_POST['Cuisine'];
       
            $query=mysqli_query($conn, "SELECT * FROM new_restaurants_data WHERE `Location`='$Location' AND `Cuisine` ='$Cuisine'") or die(mysqli_error());
            while($data=mysqli_fetch_array($query)){
                       echo "
                         <tr>
                         <td>".$data['Name']."</td>
                         <td>".$data['Ratings']."</td>
                         <td>".$data['Location']."</td>
                         <td>".$data['Cuisine']."</td>
                         
                         
                         </tr>
                       ";
                    }
         }
         //   if($num>0){
         //      while( $data=mysqli_fetch_assoc($connect)){
         //         echo "
         //           <tr>
         //           <td>".$data['Name']."</td>
         //           <td>".$data['Ratings']."</td>
         //           <td>".$data['Location']."</td>
         //           <td>".$data['Cuisine']."</td>
                   
                   
         //           </tr>
         //         ";
         //      }
         //    }
           ?>
        </table>
        <!-- </form> -->
    </div>
     <script>
    let submenu = document.getElementById("submenu");
    function toggleMenu(){
      submenu.classList.toggle("open-menu")
    }
   </script>

  