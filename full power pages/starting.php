<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewport</title>
<style>
    /* ONLY CSS */

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
/* BODY PART */
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #ec0303;
}

/* CONTAINER  */
.container {
 text-align: center;
 width: 60%;
 /* viewport */
 max-width: 900px;

}

/* P TAG */
.container p{
    font-size: 25px;
    cursor: pointer;
    
}

/* INPUT FIELD  */
input[type="button"] {
  background-color: #e0e9e0;
  border: none;
  color: rgb(8, 8, 8);
  padding: 15px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}

@media screen and (orientation: landscape) {  
 .container{
     max-width: 1200px;
     }
}

    
</style>
</head>
<body>
    <div class="container">
        <div class="content">
            <p > RMT RESTURANTS</p>
            <br><br><br>
            <p>Login and Signup With  RMT RESTURANTS</p>
            <br><br><br>
            
            <!-- Button trigger modal -->
            <input type="button" name="Login" value="Login"  onclick=" location='../login System/login.php'"/>
            <input type="button" name="Signup" value="Signup"onclick= "location='../login System/signup.php'"/>
            <input type="button" name="Website" value="Website"onclick= "location='../ADMIN AND PHP/login.php'"/>
            <br><br><br>
          
        </div>
    </div>
   
</body>
</html>