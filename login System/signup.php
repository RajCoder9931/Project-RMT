<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <style>
 @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  width: 100%;
  padding: 0 10px;
}

body::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: url("https://static.vecteezy.com/system/resources/thumbnails/001/948/406/small/wood-table-top-for-display-with-blurred-restaurant-background-free-photo.jpg"), #000;
  background-position: center;
  background-size: cover;
}

.container {
  width: 400px;
  height:auto;
  border-radius: 8px;
  padding: 30px;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(7px);
  -webkit-backdrop-filter: blur(7px);
}

form {
  display: flex;
  flex-direction: column;
}

h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #fff;
}

.input-field {
  position: relative;
  border-bottom: 2px solid #ccc;
  margin: 17px 0;
}

.input-field label {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  color: #fff;
  font-size: 19px;
  pointer-events: none;
  transition: 0.15s ease;
}

.input-field input {
  width: 100%;
  height: 50px;
  background: transparent;
  border: none;
  outline: none;
  font-size: 20px;
  color: #fff;
}

.input-field input:focus~label,
.input-field input:valid~label {
  font-size: 0.8rem;
  top: 15px;
  transform: translateY(-120%);
}

.forget label {
  display: flex;
  align-items: center;
}

.forget label p {
  margin-left: 8px;
}

.container a {
  color: #efefef;
  text-decoration: none;
}

.container a:hover {
  text-decoration: underline;
}

button {
  background:#405452;
  color: #000;
  font-weight: 600;
  border: none;
  padding: 12px 20px;
  cursor: pointer;
  border-radius: 3px;
  font-size: 16px;
  border: 2px solid transparent;
  transition: 0.3s ease;
}

button:hover {
  color: #fff;
  border-color: #fff;
  background: #d93275;
}
</style>
</head>

<body>
    <div class="container">
        <form action="#">
            <h2>Signup With RMT Restaurants</h2>
            <div class="input-field">
                <input type="text" required />
                <label>Enter PhoneNumber</label>
            </div>
            <div class="input-field">
                <input type="text" required />
                <label>Enter Email Id</label>
            </div>
            <div class="input-field">
                <input type="text" required />
                <label>Enter Password</label>
            </div>
            <div class="input-field">
                <input type="password" required />
                <label>Confirm Password</label>
            </div><br>
           <button type="submit">Signup</button>
            </form>
    </div>
</body>

</html>