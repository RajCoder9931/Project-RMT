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
  background: url("https://img.freepik.com/free-photo/vintage-old-rustic-cutlery-dark_1220-4886.jpg?size=626&ext=jpg"), #000;
  background-position: center;
  background-size: cover;
}

.container {
  width: 400px;
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
  margin: 15px 0;
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

.forget {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 25px 0 35px 0;
  color: #fff;
}

#Save-login {
  accent-color: #fff;
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
  background:#515c8f;
  color: #000;
  font-weight: 600;
  border: none;
  padding: 12px 20px;
  cursor: pointer;
  border-radius: 3px;
  text-decoration: none;
  text-underline-offset: none;
  font-size: 16px;
  border: 2px solid transparent;
  transition: 0.3s ease;
}

button:hover {
  color: #fff;
  border-color: #fff;
  background: #e0092d;
  text-decoration: none;
  text-underline-offset: none;

  }
.Create-account {
  text-align: center;
  margin-top: 30px;
  color: #fff;
}
    </style>
</head>

<body>
    <div class="container">
        <form action="#">
            <h2>Login With RMT Restaurants</h2>
            <div class="input-field">
                <input type="text"  />
                <label>Enter Phone-Number</label>
            </div>
            <div class="input-field">
                <input type="password"  />
                <label>Enter password</label>
            </div>
            <div class="forget">
                <label for="Save-login">
                    <input type="checkbox" id="Save-login" />
                    <p>Save login information</p>
                </label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" > <a href="../Resturant pages/main.php">Log In</a></button>
            <div class="Create-account">
                <p>Don't have an account? <a href="../login System/signup.php">Create account</a></p>
            </div>
        </form>
    </div>
</body>
<script>
        function validateForm() {
            var phoneNumber = document.getElementById("phoneNumber").value;
            var password = document.getElementById("password").value;

            if (phoneNumber.trim() == "") {
                alert("Please enter your phone number.");
                return false;
            }

            if (password.trim() == "") {
                alert("Please enter your password.");
                return false;
            }

            return true;
        }
    </script></html>

