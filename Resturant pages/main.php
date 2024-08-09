<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
      /* universal settings */

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      /* For background image */

      .head::before {
        content: "";
        position: absolute;
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
          url("https://www.traveldailymedia.com/assets/2023/07/shutterstock_1435375889.jpg")
            no-repeat center center/cover;
        height: 50%;
        width: 100%;
        z-index: -1;
        opacity: 0.8;
      }

      /* head section */

      .head {
        display: flex;
        flex-direction: column;
      }

      /* navbar */

      .nav {
        display: flex;
        justify-content: end;
        list-style: none;
      }

      /* elements within the navbar */

      .nav li {
        padding: 10px 5px 0px 5px;
        margin: 0px 15px 0px 15px;
        color: white;
        font-size: 20px;
        border-bottom: 2px solid transparent;
        transition: all 0.3s ease-in-out 0s;
      }

      /* what to do when hover over the navbar elements */

      .nav li:hover {
        cursor: pointer;
        border-bottom: 2px solid white;
      }
        /* secend section */
      .intro {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 297px;
      }
        /* text in iamge*/
      .primary-head {
        color: white;
        text-align: center;
        margin-bottom: 20px;
      }

      /* search bar */
      .search-cont {
        background-color: white;
        height: 12%;
        width: 60%;
        display: flex;
        justify-content: flex-end;
        border-radius: 12px;
      }


      #search {
        width: 75%;
        border: none;
        border-left: 1px solid black;
        border-top-right-radius: 12px;
        border-bottom-right-radius: 12px;
        text-align: center;
        outline: none;
      }

      .section-2 {
        width: 1080px;
        margin: 0 auto;
        margin-bottom: 4rem;
      }

      .section-2-heading {
          font-size: 2rem;
          line-height: 1.2;
          font-weight: 400;
      }

      .section-2 .section-2-container .section-2-items {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          cursor: pointer;

      }

      .section-2 .section-2-container .section-2-items .section-2-item {
          width: 100%;
          max-width: 26%;
          margin-bottom: 20px;
      }

      .section-2-item {
          border-radius: 10px;
          box-shadow: 0 2px 4px rgb(236, 236, 236);
          padding: 20px;
      }
      .section-2-item a{
        text-decoration: none;
        color:#333;
      }

      .section-2-item .item-head {
          font-size: 1.2rem;
          color: rgb(28, 28, 28);
          margin: 0;
          margin-bottom: 5px;
      }

      .section-2-item .item-subhead {
          font-weight: lighter;
          color: rgb(51, 51, 51);
          margin: 0;
      }
      .dropdown {
        float: left;
        overflow: hidden;
    }

    /* Dropdown button */
    .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 20px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: whitesmoke;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: transparent rgba(0, 0, 0, 0.3);
        color: yellowgreen;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }
       /* footer*/

      footer{
        background-color:#333; 
        color: whitesmoke;
        padding: 20px;
        justify-content:left;
        position:relative;
        bottom: 0;
        width:100%;
        cursor: pointer;
        
      }
      /*  End footer */

    </style>
  </head>
  <body>
    <header class="head">
      <ul class="nav">
        <div class="dropdown">
        <button class="dropbtn">Restaurants 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../coustmer/Agra.php">Best Restaurants In Town</a>
            <a href="../ADMIN AND PHP\home.php">Visit Page</a>
            <a href="../coustmer/Delhi.php">5-Star-Rating</a>
            
            
        </div>
    </div> 
        <li onclick="log()">Login</li>
        <li onclick="signup()">Signup</li>
      </ul>
    </header>

    <section class="intro">
      <div class="primary-head">
        <h2>Discover the best food & drinks in your area</h2>
      </div>
      <div class="search-cont">
      <i class='bx bx-search' style="font-size: 25px;"></i>
      <input type="search" name="search" id="search" placeholder="Search delicious food in our area"/>
      </div>
    </section>
    <section class="section-2">
      <div class="section-2-heading">
        <h2 style="text-align:center;"> Popular locations in <img alt="India flag" src="https://b.zmtcdn.com/images/flags_z10/in.png?output-format=webp" loading="lazy">
          India</h2>
          <br>
          <p style="text-align:center; margin-right: 2px; padding-right: 2px; margin-left: 2px; padding-left: 1px; font-size: 18px;">From swanky upscale restaurants to the cosiest hidden gems serving the most incredible food,<br>
           our RMT Restaurants covers it all. Explore menus and millions of restaurant photos and reviews from users <br>
           just like you, to find your next great meal.</p>
      </div>
           <br>
            <br>
      <div class="section-2-container">
        <div class="section-2-items">
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Jalandhar.php">Jalandhar Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Agra.php">Agra Restaurants </a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Delhi.php">Delhi Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Ahmedabad.php">Ahmedabad Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Allahabad Restaurants.php">Allahabad Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Ajmer.php">Ajmer Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Bhopal.php">Bhopal Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Chandigarh.php">Chandigarh Restaurants</a></p>

          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Amritsar.php">Amritsar Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Goa.phphp">Goa Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Hyderabad.phphp">Hyderabad Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Bangalore.phphp">Bangalore Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Gangtok.phphp">Gangtok Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Haridwar.php">Haridwar Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Gujrat.php">Gujrat Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Bihar.php">Bihar Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Gwalior.php">Gwalior Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Ludhiana.php">Ludhiana Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Banras.php">Banras Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Kanpur.php">Kanpur Restaurants</a></p>
          </div><div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Kolkata.php">Kolkata Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Kota.php">Kota Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Mumbai.php">Mumbai Restaurants</a></p>
          </div>
          <div class="section-2-item">
            <p class="item-head">
              <a href="../coustmer/Nagpur.php">Nagpur Restaurants</a></p>
          </div>
        </div>
      </div>
    
    </section>
    <footer>
      <p>&copy; 2024 RMT Resturants. All rights reserved.</p>
      <p>Devloped By: Ravi Raj Tiwari [GU-2023-1304]</p>
      <p>Handled By: Manisha [GU-2023-1267]</p>
      <p>Desinged By: Tannu Kumari [GU-2023-1330]</p>
    </footer>
    <script>
      function signup() {
        window.location.href = "../login System/signup.php";
      }
      function  log() {
        window.location.href="../login System/Login.php";
      }
    </script>
  </body>
</html>
