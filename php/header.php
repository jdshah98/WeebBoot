<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Food Delivery System</a>
        <button id="toggle" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="
    padding-left: 0px;
    padding-right: 0px;
    border-left-width: 0px;
    border-right-width: 0px;
">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <button class="btn btn-success btn-cart"><i class="fa fa-cart-arrow-down" style="color:white"></i></button>
                </li>
                <li>
                    <div class="input-group-btn btn-group btn-dynamic">
                        <button class="btn btn-outline-success btn-login" onclick="document.getElementById('id01').style.display='block',document.getElementById('id02').style.display='none'" type="submit">Login</button>
                        <button class="btn btn-outline-primary btn-signup" onclick="document.getElementById('id02').style.display='block',document.getElementById('id01').style.display='none'" type="submit">Sign UP</button>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div id="id01" class="modal">
    <div class="modal-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h1>Login</h1>
                </div>
                <div class="col-sm-2">
                    <i class="fa fa-window-close" style="font-size: 24px" aria-hidden="true" onclick="document.getElementById('id01').style.display='none'"></i>
                </div>
            </div>
            <p>Please Enter detail to Login.</p>
            <hr>

            <label for="loginemail"><b>Email</b></label>
            <input type="text" placeholder="abc@gmail.com" name="loginemail" id="loginemail">

            <label for="loginpw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="loginpw" id="loginpw">

            <span id="log-message"></span>
            <label for="newuser">New User ?</label>
            <button class="btn btn-link" onclick="document.getElementById('id02').style.display='block',document.getElementById('id01').style.display='none'" type="submit">Create new Account</button>

            <div class="clearfix">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="submit" id="login-submit" class="signupbtn btn btn-success">Login</button>
                    </div>
                    <div class="col-sm-6">
                        <input type="reset" id="login-reset" onclick="clear();" class="cancelbtn btn btn-danger" value="Reset" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Register-->
<div id="id02" class="modal">
    <div class="modal-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <h1>Sign Up</h1>
                </div>
                <div class="col-sm-2">
                    <i class="fa fa-window-close" style="font-size: 24px" aria-hidden="true" onclick="document.getElementById('id02').style.display='none'"></i>
                </div>
            </div>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name">
            <span id='name-val'></span>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="abc@gmail.com" name="email" id="email">
            <span id='em-val'></span>

            <label for="mobile"><b>Mobile no</b></label>
            <input type="text" placeholder="1234567890" id="mobile" name="mobile">
            <span id='mb-val'></span>

            <label for="pw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id="pw" name="pw">
            <span id='pw-val'></span>

            <label for="cpw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" id="cpw" name="cpw">
            <span id='cpw-val'></span>

            <div class="clearfix">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="submit" id="signup-submit" class="signupbtn btn btn-success">Sign Up</button>
                    </div>
                    <div class="col-sm-6">
                        <button type="reset" id="signup-reset" onclick="clearAll();" class="cancelbtn btn btn-danger">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Floating Button-->
<div class="" style="position: fixed; right: 0px;bottom: 6%;z-index: 2;padding:1em;text-align:center">
	<a href="restaurant/admin.html">	<img class=""  width="80px" height="80px" title="Join Us" src="img/user4.png"></a>


</div>
<script src="./js/user.js"></script>
<script src="./js/cart.js"></script>