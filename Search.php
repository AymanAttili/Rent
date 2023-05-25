

<!-- still need backend code, to be completed later -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Main template CSS file-->
    <link rel="stylesheet" href="./CSS/Search.css" />
    <link rel="stylesheet" href="./CSS/navbar.css" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>RentalMate | Search</title>

</head>
<body >


    <?php    include('./Templates/navbar.php'); ?>

    <!-- start Body -->
    
    <section class="cardsSection">
        
        <!-- Start searchbar -->
        <div class="searchbar">
            <div class="searchbox">
                <input type="text" class="search" placeholder="Search">
                <img class="icon search-icon" src="./SVG/search.svg">
            </div>
            <div class="selections">
                <select class="choose" title="Max price">
                    <option>Max price</option>
                </select>
                <select class="choose" title="Beds">
                    <option>Beds</option>
                </select>
                <button class="filterButton" onmouseenter="filterIcon.src='./SVG/filtersearch1.svg'" onmouseleave="filterIcon.src='./SVG/filtersearch.svg'">
                    Filters
                    <img class="icon" name="filterIcon" src="./SVG/filtersearch.svg">
                </button>
            </div>
            <div class="filtersList">
                <div class="filter" id="f1" onmouseenter="i1.src='./SVG/X3.svg'" onmouseleave="i1.src='./SVG/X2.svg'">
                    <p class="filterDescription">filter 1</p>
                    <img class="icon" name="i1" src="./SVG/X2.svg" onclick="deleteFilter('f4')">
                </div>
                <div class="filter" id="f2" onmouseenter="i2.src='./SVG/X3.svg'" onmouseleave="i2.src='./SVG/X2.svg'">
                    <p class="filterDescription">filter 2</p>
                    <img class="icon" name="i2" src="./SVG/X2.svg" onclick="deleteFilter('f2')">
                </div>
                <div class="filter" id="f3" onmouseenter="i3.src='./SVG/X3.svg'" onmouseleave="i3.src='./SVG/X2.svg'">
                    <p class="filterDescription">filter 3</p>
                    <img class="icon" name="i3" src="./SVG/X2.svg" onclick="deleteFilter('f3')">
                </div>
                <div class="filter" id="f4" onmouseenter="i4.src='./SVG/X3.svg'" onmouseleave="i4.src='./SVG/X2.svg'">
                    <p class="filterDescription">filter 4</p>
                    <img class="icon" name="i4" src="./SVG/X2.svg" onclick="deleteFilter('f4')">
                </div>
                
                <p class="clearAll" onclick="clearAll()">Clear all</p>
            </div>

            <div class="sort">
                <p class="noProperties">1198</p>
                <div class="divSortBy">
                    <select class="sortBy"><option>Best match</option></select>
                </div>
            </div>
        </div>
        <!-- End searchbar -->


        <!-- Start Cards -->
        <div class="cards">
            
            <div class="card " onmouseenter="initialize(32.379579881501606,35.06897156349406)">
                <button type="button" class="likeButton">
                    <img class="like" id="like0" src="./SVG/heart1.svg" onclick="xchange('like0')">
                </button>
                <img class="photo" src="./img/card1.png">
                <div class="innerCard">
                    <div class="desrciption">
                        <p class="price">120$+</p>
                        <p class="name">Attili Rent.</p>
                        <p class="location">Tulkarem, Attil</p>
                        <p class="beds">3 Beds</p>
                    </div>
                    <div class="buttonDiv">
                        <button class="cardButton phone"><img src="./SVG/phone.svg"><p>Phone number</p></button>
                        <button class="cardButton email"><img src="./SVG/Email.svg"><p>Send E-mail</p></button>
                    </div>
                    <br>
                    <button class="cardButton rent"><img src="./SVG/Rent1.svg" style="width: 30px;"><p>Rent</p></button>
                </div>
                
            </div>

            <div class="card " onmouseenter="initialize(32.379579881504606,35.16897156343406)">
                <button type="button" class="likeButton" >
                    <img class="like" id="like1" src="./SVG/heart1.svg" onclick="xchange('like1')">
                </button>
                <img class="photo" src="./img/card1.png">
                <div class="innerCard">
                    <div class="desrciption">
                        <p class="price">120$+</p>
                        <p class="name">Attili Rent.</p>
                        <p class="location">Tulkarem, Attil</p>
                        <p class="beds">3 Beds</p>
                    </div>
                    <div class="buttonDiv">
                        <button class="cardButton phone"><img src="./SVG/phone.svg"><p>Phone number</p></button>
                        <button class="cardButton email"><img src="./SVG/Email.svg"><p>Send E-mail</p></button>
                    </div>
                    <br>
                    <button class="cardButton rent"><img src="./SVG/Rent1.svg" style="width: 30px;"><p>Rent</p></button>
                </div>
                
            </div>

            <div class="card " onmouseenter="initialize(32.579579881501606,35.06897156349406)">
                <button type="button" class="likeButton">
                    <img class="like" id="like2" src="./SVG/heart1.svg" ">
                </button>
                <img class="photo" src="./img/card1.png">
                <div class="innerCard">
                    <div class="desrciption">
                        <p class="price">120$+</p>
                        <p class="name">Attili Rent.</p>
                        <p class="location">Tulkarem, Attil</p>
                        <p class="beds">3 Beds</p>
                    </div>
                    <div class="buttonDiv">
                        <button class="cardButton phone"><img src="./SVG/phone.svg"><p>Phone number</p></button>
                        <button class="cardButton email"><img src="./SVG/Email.svg"><p>Send E-mail</p></button>
                    </div>
                    <br>
                    <button class="cardButton rent"><img src="./SVG/Rent1.svg" style="width: 30px;"><p>Rent</p></button>
                </div>
                
            </div>

            <div class="card " onmouseenter="initialize(32.379579881501606,35.56897156349406)">
                <button type="button" class="likeButton">
                    <img class="like" id="like3" src="./SVG/heart1.svg" ">
                </button>
                <img class="photo" src="./img/card1.png">
                <div class="innerCard">
                    <div class="desrciption">
                        <p class="price">120$+</p>
                        <p class="name">Attili Rent.</p>
                        <p class="location">Tulkarem, Attil</p>
                        <p class="beds">3 Beds</p>
                    </div>
                    <div class="buttonDiv">
                        <button class="cardButton phone"><img src="./SVG/phone.svg"><p>Phone number</p></button>
                        <button class="cardButton email"><img src="./SVG/Email.svg"><p>Send E-mail</p></button>
                    </div>
                    <br>
                    <button class="cardButton rent"><img src="./SVG/Rent1.svg" style="width: 30px;"><p>Rent</p></button>
                </div>
                
            </div>
            
        </div>
        <!-- End cards -->
        
    </section>
    <!-- End searchbar -->




    <section class="mapContainer">
        <a class="direction-link" target="_blank" href="//maps.google.com/maps?f=d&amp;daddr=37.422230,-122.084058&amp;hl=en"> Get Directions</a>
        <div id="map"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUxruZQ8r_AszFmZvHCH_hlDrUL3_plRE"></script>
    
    <script src="./JS/searchMap.js"></script>
    </section>
    <!-- End body -->


    <script src="./JS/browse.js"></script>
    
    

</body>