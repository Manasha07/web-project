<!DOCTYPE html>
    <head>
        <title>Login/Registration</title>
        <link rel="stylesheet" href="./assets/css/login.css">
    </head>
    <body>
        <div class="hero">
     
            <div class="formbox">
                <div class="buttonbox">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <form action="log.php" method="POST" id="login" class="input">
                    <input name="username" type="text" class="input1" placeholder="User Id" required>
                    <input name="password" type="password" class="input1" placeholder="Enter Password" required>
                 <br>
                 <br><br>
                    <button type="submit" class="submit">Log In</button>
                </form>
                <form action="reg.php" method="POST" id="register" class="input">
                    <input name="username" type="text" class="input1" placeholder="User Id" required>
                    <input  name="emailid" type="email" class="input1" placeholder="Email Id" required>
                    <input  name="password" type="password" class="input1" placeholder="Enter Password" required>
                    <br>
                    <br><br>
                    <button type="submit" class="submit">Register</button>
                </form>
            </div>
        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");
            function register(){
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px";
            }
            function login(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0px";
            }

        </script>
    </body>