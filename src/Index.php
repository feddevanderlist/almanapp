<?php include 'app/template/header.php';?>

    <div class="navbar-wrapper">
        <div class="container">

            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Registration</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Form
        =============================================== -->
        
        <div class="information_form">
            <form name="registration" action="app/procces.php" methode='POST'>
                Initial(s):<input type="text" name="initials" required="required" placeholder="initials"><br>
                First name:<input type="text" name="first_name" required="required" placeholder="First name"><br>
                Last name:<input type="text" name="last_name" required="required" placeholder="Last name"><br>
                Postal code:<input type="text" name="postal_code" required="required" placeholder="1234AB"><br>
                Home number:<input type="text" name="home_number" required="required" placeholder="10A"><br>
                Email address:<input type="email" name="email" required="required" placeholder="janedoe@example.com"><br>
                Phone number:<input type="tel" name="phone" required="required" placeholder="0612345678"><br>
                Password:<input type="password" name="passw" required="required"><br>
                <input type="submit" name="submit" value="send">
            </form>

        </div>









<?php include 'app/template/footer.php';?>