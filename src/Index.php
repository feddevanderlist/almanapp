<?php include 'app/template/header.php';?>


        <!-- Form
        =============================================== -->
        
        <div class="information_form">
            <form name="registration" action="app/procces.php" method='POST'>
                Initial(s):<input type="text" name="initials" required="required" placeholder="initials" id="initials"><br>
                First name:<input type="text" name="first_name" required="required" placeholder="First name" id="first_name"><br>
                Last name:<input type="text" name="last_name" required="required" placeholder="Last name" id="last_name"><br>
                Postal code:<input type="text" name="postal_code" required="required" placeholder="1234AB" id="postal_code"><br>
                Home number:<input type="text" name="home_number" required="required" placeholder="10A" id="home_number"><br>
                Email address:<input type="email" name="email" required="required" placeholder="janedoe@example.com" id="email"><br>
                Phone number:<input type="tel" name="phone" required="required" placeholder="0612345678" id="phone"><br>
                Password:<input type="password" name="passw" required="required" id="passw"><br>
                <input type="submit" name="submit" value="send">
            </form>

        </div>









<?php include 'app/template/footer.php';?>