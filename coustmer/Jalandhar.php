<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jalandhar Restaurant</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- CSS only -->
  <style>
    /* universal */
    * {
      margin: 0px;
      padding: 0px;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      box-sizing: border-box;
    }

    body {
      box-sizing: border-box;
      display: flex;
      column-gap: 5px;
      /* padding:70px; */
      /* margin: 11px; */
    }

    /*  navbar */

    nav {
      background-color: #fff;
      color: black;
      height: 15vh;
      width: 100%;
      justify-content: space-between;
      align-items: center;
      font-size: 15px;
      position: fixed;
      border-bottom: 1px solid black;
    }

    .navbar {
      display: flex;
    }

    .search {
      display: flex;
      justify-content: space-between;
      margin: 10px 20px;
      color: rgb(243, 113, 185);
    }

    .search ul input {
      padding: 3px 15px;
      margin-right: 20px;
    }

    .btn button {
      padding: 3px 15px;
      color: rgb(243, 113, 185);
      background: transparent;
      border: none;
      font-size: 17px;
    }

    .nav-details {
      display: flex;
      margin-left: 20px;
      margin-bottom: 10px;
      font-size: 16px;
      padding: 5px;
      cursor: pointer;
      border-bottom: 2px solid transparent;
      transition: all 0.3s ease-in-out;
    }

    .nav-details:hover,
    .nav-details:active {
      border-bottom: 2px solid black;
    }

    .nav-details i {
      background-color: rgb(189, 255, 255);
      color: black;
      border: 1px solid rgba(0, 0, 0, 0.2);
      border-radius: 50%;
      padding: 5px;
    }

    .nav-details p {
      padding: 5px;
    }
    .collect{
      margin-top: 15vh;

    }
    .collect p,h2{
      margin-left:20px;
      margin-bottom: 10px;
      
    }
    .card {
      min-width:310px;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,.2);
      border: 1px solid #ccc;
      background-color: white;
      border-radius: 5px;
      padding: 10px;
      transition: box-shadow 0.3s ease;

    }

    .card-cover {
      display: flex;
      justify-content: center;
      column-gap: 7px;

    }

    .card:hover {
      box-shadow: 0 15px 20px rgba(0, 0, 0, 0.4);
    }

    .card img {
      max-width: 100%;
      height:85%;
      object-fit: cover;
      border-radius: 5px;
    }

    .title {
      margin-top: 5px;
      font-weight: bold;
    }

    /* end card    */
    @media (min-width: 980px) {
      .card {
        float: left;
        margin-right: 20px;
        height: 300px;
      }
    }

    @media (max-width: 980px) {
      .card {
        clear: both;  
        width: calc(100% - 40px);
        margin-bottom: 20px;
        height: auto;
        }
    }

    /* filter */
    .filter {
      width: 100px;
      border: 5px  black;
      border-radius: 8px;
      padding: 8px;
      cursor: pointer;
      color: black;
      font-size: 25px;
      box-shadow: 0 4px 8px rgba(80, 77, 77, 0.103);
      display: inline;
      text-decoration: none;

    }
    .filter a{
      text-decoration: none;
      color: black;

    }
    .discount a img {
      width: 100vw;
      height: 300px;
      object-fit: cover;
      transform: none;
      opacity: 1;
      border-radius: 9px;
      transition: opacity 0.25s ease 0s,
      transform 0.25s ease 0s;

    }

    

    /*  end resturants */
    footer {
      background-color: #333;
      color: whitesmoke;
      padding: 20px;
      justify-content: left;
      position: relative;
      bottom: 0;
      width: 100%;
    }

  </style>
</head>

<body>
  <div class="container">
    <nav>
      <div class="search">
        <ul>
          <i class='bx bxs-location-plus'></i>
          <input placeholder="Jalandhar" id="location">
          <i class='bx bx-search'></i>
          <input type="search" id="search" placeholder="search for resturants, cuisine or a dish">
        </ul>
        <div class="btn">
          <button style="margin-right: 10px;" onclick="log()">Login</button>
          <button style="margin-right: 10px;" onclick="signup()">Signup</button>
        </div>
      </div>
      <div class="navbar">
        <div class="nav-details">
          <i class='bx bx-restaurant'></i>
          <p> Restaurants</p>
        </div>
        <div class="nav-details">
          <i class='bx bxs-truck'></i>
          <p>Delivery Foods</p>
        </div>
      </div>
    </nav>
    <!-- end nav -->

    <!--Collection -->
    <div class="main">
      <div class="collect">
        <p>
         <h2> Collections</h2>
        </p>
        <p>
          Explore curated lists of top restaurants, cafes, pubs, and bars in your loaction, based on trends
        </p>
      </div>
      <!-- Images -->
      <div class="card-cover">
        <div class="card">
          <img src="../Images/Jalandhar/Pizza.jpg" alt=" Image">
          <div class="title">
            <h3>Best Pizza In Town</h3>
            <span><i class='bx bx-star'></i>5 Places</span>
            <br>
          </div>
        </div>
        <div class="card">
          <img src="../Images/Jalandhar/pav-bhaji.jpeg" alt=" Image">
          <!-- <div class="title">
            <h3>14 Local Famous Places</h3>
            <span><i class='bx bx-star'></i>5.6/<small>10 Reviews</small></span>
            <br>
          </div> -->
        </div>
        <div class="card">
          <img src="../Images/Jalandhar/VADA-PAV.webp" alt=" Image">
          <div class="title">
            <h3>18 Best Luxury Dinning Places </h3>
            <span><i class='bx bx-star'></i>8.5/<small>10 Reviews</small></span>
            <br>
          </div>
        </div>
      
      </div>
    </div>
    <!--  End Collections -->

    <!-- Filters -->

    <div class="items">
      <div class=" filter">
        <ul>
          <li style="text-decoration: none;">
            <div class="filter">
              <i class='bx bx-filter'></i>
              <a href="#">Filter</a>
            </div>
            <div class="filter">

              <i class='bx bxl-sketch'></i>
              <a href="#"> Premium</a>
            </div>
            <div class="filter">

              <i class='bx bxs-star-half'></i>
              <a href="#">Rating: 4+</a>
            </div>
            <div class="filter">
              <a href="#"> Outdoor &amp; Seating</a>
            </div>
          </li>
        </ul>
      </div>

    </div>
    <!-- End  Filters -->

    <!-- Discount section -->
    <div class="discount">
      <a>
        <img src="../Images/resturant images/discount.png" loading="auto">
      </a>
    </div>
    <!--  End Discount section -->

    <!-- Trending Resturants -->
    <div class="main">
      <div class="collect">
        <p>
         <h2>Trending dining restaurants in Agra</h2>
        </p>
        <p>
          Explore curated lists of top restaurants, cafes, pubs, and bars in your loaction, based on trends
        </p>
      </div>
      <!-- Images -->
      <div class="card-cover">
        <div class="card">
          <img src="../Images/Jalandhar/MAYA HOTEL.jpg" alt=" Image">
          <div class="title">
            <h3 style="font-size: 9px;">The Maya Hotel Opposite District Session Court Near BMC<br>
              Civil Lines,Jalandhar,Punjab</h3>
              <div class="rating">4.0
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                </div>
            <br>
          </div>
        </div>  
        <div class="card">
          <img src="../Images/Jalandhar/KAKE.jpg" alt=" Image">
          <div class="title">
            <h3 style="font-size: 9px;">Kake Da Hotel Jalandhar <br>Zealong Tower, Hoshiarpur Rd, Rama Mandi, Jalandhar, Johala, Punjab </h3>
              <div class="rating">4.4
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
              </div>
            <br>
          </div>
        </div>  
        <div class="card">
          <img src="../Images/Jalandhar/PLAZA.jpg" alt=" Image">
          <div class="title">
            <h3 style="font-size: 9px;">Hotel Plaza Bar & Restaurant <br>Old Ct Rd, Civil Line, Jalandhar, Punjab</h3>
              <div class="rating">4.0
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                </div>
            <br>
          </div>
        </div>  
        <div class="card">
          <img src="../Images/Jalandhar/MAHARAJA.JPG" alt=" Image">
          <div class="title">
            <h3 style="font-size: 9px;">Hotel Maharaja Residency and Banquet Hall <br>New Railway Rd, Fentonganj, Jalandhar, Punjab</h3>
              <div class="rating">4.0
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                </div>
            <br>
          </div>
        </div>  
        <div class="card">
          <img src="../Images/Jalandhar/LOVE ITLAY.jpg" alt=" Image">
          <div class="title">
            <h3 style="font-size: 9px;">Love Italy - Lounge & Restaurant <br>The Regent Park Hotel, Gujral Nagar, Jalandhar, Punjab</h3>
              <div class="rating">4.0
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                </div>
            <br>
          </div>
        </div>  
        <div class="card">
          <img src="../Images/Jalandhar/Imperia.jpg" alt=" Image">
          <div class="title">
            <h3 style="font-size: 9px;">Hotel Imperia Suites <br>1, Urban Estate Phase 2 Rd, Vasant Vihar, Phase 2, Urban Estate phase II, Jalandhar, Punjab </h3>
              <div class="rating">4.0
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                </div>
            <br>
          </div>
        </div>  
      </div>
  
    <!-- <footer>
      <div class="text">
        <h2>RMT RESTURANTS</h2>
      </div>
      <div class="desinger">
        <p>&copy; 2024 RMT Resturants. All rights reserved.</p>
        <p>Devloped By: Ravi Raj Tiwari [GU-2023-1304]</p>
        <p>Handled By: Manisha [GU-2023-1267]</p>
        <p>Desinged By: Tannu Kumari [GU-2023-1330]</p>
      </div>
    </footer> -->
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