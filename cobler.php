<!DOCTYPE html>
<html>
<head>
 
  <title>KantaBai</title>
  <link rel="icon" type="image/icon" href="Maid2.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  .bgimg
{
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(cobback.jpg); 
  height:100vh;
  background-size: cover;
  background-position:center; 
  background-attachment: fixed;
}
</style>
</head>
<body>
     
    <div class="bgimg">
      <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top"> 
         <div class="container md-4">
          <a href="#" class="navbar-brand text-primary font-weight-bold ">
             <img src="Maid2.png"class="d-inline-block align-top" alt="">
          KantaBai.com</a>
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse " id="collapsenavbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                      <a href="index.php"class="nav-link text-primary ">Home</a>
                </li>
                
                 <li class="nav-item">
                      <a href="maid.php"class="nav-link text-white bg-dark active ">HouseMaids</a>
                </li>
                <li class="nav-item ">
                      <a href="baby.php"class="nav-link text-primary">BabySitter</a>
                </li>
          
                <li class="nav-item">
                      <a href="cook.php"class="nav-link text-primary">Cook</a>
                </li>
                  <li class="nav-item">
                      <a href="cobbler.php"class="nav-link text-primary">Cobler</a>
                </li>
                  <li class="nav-item">
                      <a href="Laundry.php"class="nav-link text-primary">Laundry</a>
                </li>
                <li class="nav-item">
                      <a href="massage.php"class="nav-link text-primary">Massage</a>
                </li>
         </ul>
         </ul>
         </div>
         </div>      

                </nav>
<div class="container text-center text-white wrap">
 <h3>KantaBai.com</h3><br> 
     <h6>Itne paise mai to Itnaich milega</h6>
<a href="register.php"><button type="button" class="btn  btn-dark text-white But"style="border-radius:4px;">
  Sign up
</button></a>
<a href="login.php"><button type="button" class="btn  btn-dark text-white But"style="border-radius:4px;">
  Sign up
</button></a>
<h6>Search all the HOUSEMAIDS in your near by places</h6>
   <h3 style="letter-spacing: 2px;"> Get Started</h3>

</div>

</div>


<div class="container text-center" >
  <h1 style="margin-top: 20px;">House Maids</h1>
  <center>
   <div class="search container">   
    <form method="POST" action="maid.php">
      <div class="formbox" style="margin-top: 20px;">

            <select name="citySelect" class="form-control" style="width: 20%">
               <option>Bhopal</option>
               <option>Hyderabad</option>
               <option>Bangalore</option>
               <option>Mumbai</option>
            </select>
            <br>
            <select name="location" class="form-control" style="width: 20%">
               <option>Bhopal</option>
               <option>Hyderabad</option>
               <option>Bangalore</option>
               <option>Mumbai</option>
            </select>
            <input type="submit" name="submit" value="Search" class="searchbtn btn-primary text-white But " />
      </div> 
    </form>

   </div>
   </center>
   </div> 
