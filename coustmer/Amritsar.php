<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
      width: 300px;
      border: 1px solid #ccc;
      background-color: white;
      border-radius: 5px;
      padding: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s ease;

    }

    .card-cover {
      display: flex;
      justify-content: center;
      column-gap: 7px;

    }

    .card:hover {
      box-shadow: 0 30px 20px rgba(0, 0, 0, 0.4);
    }

    .card img {
      max-width: 100%;
      border-radius: 5px;
    }

    .title {
      margin-top: 10px;
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
      border: 5px transparent black;
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
          <input placeholder="Amritsar" id="location">
          <i class='bx bx-search'></i>
          <input type="search" id="search" placeholder="search for resturants, cuisine or a dish">
        </ul>
        <div class="btn">
          <button style="margin-right: 10px;">Login</button>
          <button>Signup</button>
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
          <img src="../Images/resturant images/tajmhal.jpeg" alt=" Image">
          <div class="title">
            <h3>Taj Mahal Resturant</h3>
            <span><i class='bx bx-star'></i>4.5/<small>10 Reviews</small></span>
            <br>
          </div>
        </div>
        <div class="card">
          <img src="../Images/resturant images/famous.jpeg" alt=" Image">
          <div class="title">
            <h3>14 Local Famous Places</h3>
            <span><i class='bx bx-star'></i>5.6/<small>10 Reviews</small></span>
            <br>
          </div>
        </div>
        <div class="card">
          <img src="../Images/resturant images/luxury.jpg" alt=" Image">
          <div class="title">
            <h3>18 Best Luxury Dinning Places </h3>
            <span><i class='bx bx-star'></i>8.5/<small>10 Reviews</small></span>
            <br>
          </div>
        </div>
        <div class="card">
          <img src="../Images/resturant images/great.jpeg" alt=" Image">
          <div class="title">
            <h3>10 Great Places</h3>
            <span><i class='bx bx-star'></i>7.5/<small>10 Reviews</small></span>
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
          <img src="../Images/resturant images/maya.jpg" alt=" Image">
          <div class="title">
            <h3 style="font-size: 12px;">Maya Hotel & Restaurant <br>Fatehabad Rd
              Casual budget hotel with a restaurant</h3>
              <div class="rating">4.5
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
          <img src="../Images/resturant images/pind.jpg" alt=" Image">
          <div class="title">
            <h3 style="font-size: 12px;">Pind Balluchi Agra <br> Fatehabad Rd, Opposite Saga Emporium, Tajganj, Agra, Basai,</h3>
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
          <img src="../Images/resturant images/priya.jpg" alt=" Image">
          <div class="title">
            <h3 style="font-size: 12px;">Priya Restaurant <br>Fatehabad Rd, near Shanti Mangalik Hospital, Tajganj, Agra, Basai,</h3>
              <div class="rating">3.7
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
              </div>
            <br>
          </div>
        </div>
        <div class="card">
          <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
          <div class="title">
            <h3 style="font-size: 12px;">Dasaprakash Agra <br>Fatehabad Rd, behind ManSingh Hotel, Bansal Nagar, Tajganj,
              Agra, </h3>
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
    </div>
            <!-- working  with the model -->
            
            <div class="card">
              <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
              <div class="title">
                <h3> Daawat-E-Nawab <br>Taj Hotel & Convention Centre, Agra, Taj East Gate Rd, Taj Nagari Phase 1, Telipara, Agra, </h3>
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
              <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
              <div class="title">
                <h3>Dasaprakash Agra <br>Fatehabad Rd, behind ManSingh Hotel, Bansal Nagar, Tajganj,
                  Agra, </h3>
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
              <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
              <div class="title">
                <h3>Dasaprakash Agra <br>Fatehabad Rd, behind ManSingh Hotel, Bansal Nagar, Tajganj,
                  Agra, </h3>
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
              <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
              <div class="title">
                <h3>Dasaprakash Agra <br>Fatehabad Rd, behind ManSingh Hotel, Bansal Nagar, Tajganj,
                  Agra, </h3>
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
              <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
              <div class="title">
                <h3>Dasaprakash Agra <br>Fatehabad Rd, behind ManSingh Hotel, Bansal Nagar, Tajganj,
                  Agra, </h3>
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
              <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
              <div class="title">
                <h3>Dasaprakash Agra <br>Fatehabad Rd, behind ManSingh Hotel, Bansal Nagar, Tajganj,
                  Agra, </h3>
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
              <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
              <div class="title">
                <h3>Dasaprakash Agra <br>Fatehabad Rd, behind ManSingh Hotel, Bansal Nagar, Tajganj,
                  Agra, </h3>
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
              <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
              <div class="title">
                <h3>Dasaprakash Agra <br>Fatehabad Rd, behind ManSingh Hotel, Bansal Nagar, Tajganj,
                  Agra, </h3>
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
              <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
              <div class="title">
                <h3>Dasaprakash Agra <br>Fatehabad Rd, behind ManSingh Hotel, Bansal Nagar, Tajganj,
                  Agra, </h3>
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
              <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
              <div class="title">
                <h3>Dasaprakash Agra <br>Fatehabad Rd, behind ManSingh Hotel, Bansal Nagar, Tajganj,
                  Agra, </h3>
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
              <img src="../Images/resturant images/dasaprakash.jpg" alt=" Image">
              <div class="title">
                <h3>Dasaprakash Agra <br>Fatehabad Rd, behind ManSingh Hotel, Bansal Nagar, Tajganj,
                  Agra, </h3>
                  <div class="rating">4.0
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    </div>
                <br>
              </div>
            </div>
            
            
            



            <!--  End Trending Resturants -->
          
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
</body>

</html>