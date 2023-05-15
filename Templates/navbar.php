
<!-- Start navbar -->
<nav class="mynavbar">
        <div id="slide" class="erase" onclick="popup(-300)"></div>
            <div class="menu_popup ">
                <div class="topMenu">
                    <img class="logo" src="./SVG/Logo2.svg" onclick="window.open('./Index.php','_self')">
                    <img class="close" onclick="popup(-300)" src='./SVG/X.svg'>
                </div>
                <ul class="menuList">
                    <li onclick="window.open('./Index.php','_self')">Home</li>
                    <li onclick="window.open('./Search.php','_self')">Search</li>
                    <hr>
                    <section class="">
                        <li >Saved properties <small>0</small></li>
                        <li>History</li>
                        <li onclick="window.open('./personal-details.php','_self')">Settings</li>
                        <hr>
                    </section>
                    <section class="">
                        <li onclick="window.open('./myRealty.php','_self')">My realty</li>
                        <hr>
                    </section>
                    
                    <section>
                        <li onclick="window.open('./Login.php','_self')">Login</li>
                        <li onclick="window.open('./Signup.php','_self')">Sign up</li> 
                    </section>
        
                    <section class="">
                        <hr>
                        <li class="">Log out</li>
                    </section>
                </ul>
            </div>
        
        <div class="container">
            <div class="left">
                <img src="./SVG/menu1.svg" class="menu" onclick="popup(0)">

                
                <img class="logo" src="./SVG/Logo.svg">
            </div>
            <div class="right">
                
                <img src="./SVG/off_heart.svg" class="heart erase">
                <img src="./img/HD-wallpaper-lelouch-vi-britannia-anime-code-geass.jpg" class="profile_picture erase">
                <p class="name erase">Ayman</p>
                <p class="signup_button" onclick="window.open('./Signup.php','_self')">Sign up</p>
                <p class="login_button" onclick="window.open('./Login.php','_self')">Log in</p>
                
            </div>
        </div>
    </nav>

    <!-- End navbar -->