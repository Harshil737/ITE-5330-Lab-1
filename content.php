<div class="wrapper">
    <div class="card">
        <img src="./images/humber.jpg" alt="Humber Building" id="img-humber">
        <div class="container">
            <form action="process.php" id="regfrm" method="post">
                First name:
                <label for="firstname"></label><input type="text" name="firstname" id="firstname"
                                                      placeholder="First Name">
                <span></span>
                <br><br>
                Last name:
                <label for="lastname"></label><input type="text" id="lastname" name="lastname" placeholder="Last Name">
                <span></span>
                <br><br>
                Email:
                <label for="email"></label><input type="email" id="email" name="email" placeholder="Email">
                <span></span><br/>
                <br>
                Password:
                <label for="password"></label><input type="password" id="password" name="password"
                                                     placeholder="Password">
                <span></span><br/>
                <br>
                Confirm Password:
                <label for="confirmpassword"></label><input type="password" id="confirmpassword" name="confirmpassword"
                                                            placeholder="Confirm Password">
                <span></span><br/>
                <br>
                <input type="button" id="btn-submit" value="Register">
            </form>
        </div>
    </div>
</div>

