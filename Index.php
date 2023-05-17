<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Main template CSS file-->
    <link rel="stylesheet" href="./CSS/index.css" />
    <link rel="stylesheet" href="./CSS/navbar.css" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Home</title>

</head>
<body>

    <?php    include('./Templates/navbar.php'); ?>




        <section class="myTop d-flex">

        <div class="search-bar d-flex" style="background-color: #E8ECEC;">

            <input placeholder="Tulkarm, Attil" type="text">
            <button>Search</button>

        </div>
    </section>

   <!-- Start cards -->

    <section style="margin-top: 30px; padding: 20px;">

        <h1>Hot Properties</h1>
    
        <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
            <div class="card">
                <img class="card-image" src="img/backiee-176475.jpg">
                <div class="Description">
                    <div class="content">
                        <p>$3,000+</p>
                        <p>Sabastea, Nablus</p>
                        <p>El baeader, Opposite Rasim coffe</p>
                        <p>2-3 beds • 2 Bath</p>
                    </div>
                </div>
                
            </div>
            <div class="card ">
                <img class="card-image" src="img/backiee-176475.jpg">
                <div class="Description">
                    <div class="content">
                        <p>$3,000+</p>
                        <p>Sabastea, Nablus</p>
                        <p>El baeader, Opposite Rasim coffe</p>
                        <p>2-3 beds • 2 Bath</p>
                    </div>
                </div>
                
            </div>
            <div class="card ">
                <img class="card-image" src="img/backiee-176475.jpg">
                <div class="Description">
                    <div class="content">
                        <p>$3,000+</p>
                        <p>Sabastea, Nablus</p>
                        <p>El baeader, Opposite Rasim coffe</p>
                        <p>2-3 beds • 2 Bath</p>
                    </div>
                </div>
                
            </div>
            <div class="card ">
                <img class="card-image" src="img/backiee-176475.jpg">
                <div class="Description">
                    <div class="content">
                        <p>$3,000+</p>
                        <p>Sabastea, Nablus</p>
                        <p>El baeader, Opposite Rasim coffe</p>
                        <p>2-3 beds • 2 Bath</p>
                    </div>
                </div>
                
            </div>
            <div class="card ">
                <img class="card-image" src="img/backiee-176475.jpg">
                <div class="Description">
                    <div class="content">
                        <p>$3,000+</p>
                        <p>Sabastea, Nablus</p>
                        <p>El baeader, Opposite Rasim coffe</p>
                        <p>2-3 beds • 2 Bath</p>
                    </div>
                </div>
                
            </div>
            <div class="card ">
                <img class="card-image" src="img/backiee-176475.jpg">
                <div class="Description">
                    <div class="content">
                        <p>$3,000+</p>
                        <p>Sabastea, Nablus</p>
                        <p>El baeader, Opposite Rasim coffe</p>
                        <p>2-3 beds • 2 Bath</p>
                    </div>
                </div>
                
            </div>
        </div> 
        
    </section>

        <!-- End cards -->
        
    
        <footer class="footer">
            &copy; 2023 <span>RentalMate</span> All Right Reserved
        </footer>

    <script src="./JS/browse.js"></script>


</body>