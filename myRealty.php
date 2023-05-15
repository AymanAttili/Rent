<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/bootstrap.css">
  <link rel="stylesheet" href="./CSS/myRealty.css">
  <link rel="stylesheet" href="./CSS/navbar.css">
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Profile</title>
</head>

<body>

  <?php    include('./Templates/navbar.php'); ?>


  <!------------------------------------------END HEADER---------------------------------------->
  <section>
    <div class="container">
      <h1 >Add Property</h1>
      <div class="row justify-content-center">

        <div class="left-side col-12 col-lg-6">
          <div class="row justify-content-center align-items-center" style="margin-top: 10px;">
            <label class="col-12 col-md-3 text-center" for="">Location</label>
            <input class="col-4 mx-2" placeholder="Lat" type="number" id="lat">
            <input class="col-4" placeholder="Lng" type="number" id="lng">
          </div>

          <div class="mapContainer col-12" style="margin-top: 10px; margin-bottom: 10px;">
            <a id="getBtn" class="direction-link" target="_blank"
              > Get Directions</a>
            <div id="map"></div>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUxruZQ8r_AszFmZvHCH_hlDrUL3_plRE"></script>

            <script>
              let lat = document.getElementById('lat');
              let lng = document.getElementById('lng');
              let getBtn = document.getElementById('getBtn');
              
              let map, marker;
              function initial() {
                map = new google.maps.Map(document.getElementById('map'), {
                  center: { lat: Number(lat.value), lng: Number(lng.value) },
                  zoom: 15,
                  mapTypeId: 'hybrid'
                });
                marker = new google.maps.Marker({
                  position: { lat: Number(lat.value), lng: Number(lng.value) },
                  map: map,
                  title: 'Your property location',
                  draggable: true,
                  icon: './SVG/map_marker.svg'
                })
                getBtn.href=`//maps.google.com/maps?f=d&amp;daddr=${Number(lat.value)},${Number(lng.value)}&amp;hl=en`;
                

                
                map.addListener('click', (googleMapsEvent) => {
                  lat.value = googleMapsEvent.latLng.lat();
                  lng.value = googleMapsEvent.latLng.lng();
                  marker.setMap(null);

                  marker.setPosition({lat: Number(lat.value), lng: Number(lng.value)});
                  marker.setMap(map);
                  getBtn.href=`//maps.google.com/maps?f=d&amp;daddr=${Number(lat.value)},${Number(lng.value)}&amp;hl=en`;
                });

                marker.addListener('mouseup', (googleMapsEvent) => {
                  lat.value = googleMapsEvent.latLng.lat();
                  lng.value = googleMapsEvent.latLng.lng();
                  getBtn.href=`//maps.google.com/maps?f=d&amp;daddr=${Number(lat.value)},${Number(lng.value)}&amp;hl=en`;
                });


              }
              navigator.geolocation.getCurrentPosition(function (position) {
                  lat.value = position.coords.latitude;
                  lng.value = position.coords.longitude;
                  initial();
                }); 
                
              
              

              lat.addEventListener('keyup',function(){
                initial();
              })
              lng.addEventListener('keyup',function(){
                initial();
              })
            </script>
          </div>
        </div>
        <div class="right-side row col-12 col-lg-6">
          <div class="information  row align-items-center">
            <label class="col-5 col-md-4 text-center" for="">Image</label>
            <input class="col-7 col-md-8" style="background-color: white; border: none;" type="file"
              accept="image/png, image/jpeg, image/jpg" multiple>
          </div>
          <hr>
          <div class="information row align-items-center">
            <label class="col-5 col-md-4 text-center" for="">Price</label>
            <input class="col-7 col-md-8" type="number">
          </div>
          <hr>
          <div class="information row align-items-center">
            <label class="col-5 col-md-4 text-center" for="">Country</label>
            <input class="col-7 col-md-8" type="text">
          </div>
          <div class="information row align-items-center">
            <label class="col-5 col-md-4 text-center" for="">City</label>
            <input class="col-7 col-md-8" type="text">
          </div>
          <div class="information row align-items-center">
            <label class="col-5 col-md-4 text-center" for="">Street</label>
            <input class="col-7 col-md-8" type="text">
          </div>
          <hr>
          <div class="information row align-items-center">
            <label class="col-5 col-md-4 text-center" for="">Description</label>
            <input class="col-7 col-md-8" type="text">
          </div>
          <hr>
          <div class="information row align-items-center">
            <label class="col-5 col-md-4 text-center" for="">Beds</label>
            <input class="col-7 col-md-8" type="number">
          </div>
          <hr>
          <div class="information row align-items-center">
            <label class="text-center" style="display: block;" for="">Date</label>
            <div class="row align-items-center">
              <label class="col-5 col-md-4 text-center" for="">From</label>
              <input class="col-7 col-md-8" type="date">
            </div>
            <div class="row align-items-center">
              <label class="col-5 col-md-4 text-center" for="">To</label>
              <input class="col-7 col-md-8" type="date">
            </div>
          </div>
        </div>

        <button class="col-12 Add-prop text-center" type="submit">Add Property</button>
      </div>
    </div>
  </section>


  <section>
    <div class="container">
      <h1 style="margin-bottom: 30px;">My Property</h1>

      <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
        <div class="card">
          <img class="card-image" src="./img/backiee-176475.jpg">
          <div class="Description">
            <div class="content">
              <p>$3,000+</p>
              <p>Saif Abu Raad</p>
              <p>Sabastea, Nablus</p>
              <p>2-3 beds</p>
              <div class="Delete-and-Update">
                <button class="Delete-button" type="button">Delete</button>
                <button class="Update-button" type="button">Update</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>



  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery-3.6.4.min.js"></script>
  <script src="./js/bootstrap.js"></script>
  <script src="./js/browse.js"></script>

<script>
  let imgs = document.getElementById('imgs');
  let price = document.getElementById('price');
  let address = document.getElementById('address');
  let description = document.getElementById('description');
  let beds = document.getElementById('beds');
  let from = document.getElementById('from');
  let to = document.getElementById('to');
  let addBtn = document.getElementById('addBtn');
  let cards = document.getElementById('cards');
  
  
  let myProperties = [];
  
  console.log(myProperties);
  if(localStorage.myProperties!=null){
      myProperties=JSON.parse(localStorage.myProperties);
  }
  
  
  function addProperty(){

      let property = {
          lat: lat.value,
          lng: lng.value,
          imgs: imgs.src,
          price: price.value,
          address: address.value,
          description: description.value,
          beds: beds.value,
          from: from.value,
          to: to.value,
      }
      console.log(imgs.attributes);
      myProperties.push(property)
      localStorage.setItem('myProperties', JSON.stringify(myProperties));
      
      clearD();
      read();
  }
  
  function read(){
    console.log(1);
    cards.innerHTML="";
    for(i=0 ; i<myProperties.length ; i++){
      let prop = myProperties[i];
      cards.innerHTML+=
      `<div class="card">
          <img class="card-image" src="URL.createObjectURL(${prop.imgs})">
            <div class="Description">
              <div class="content">
                <p>$ ${prop.price}+</p>
                <p>Saif Abu Raad</p>
                <p> ${prop.address}</p>
                <p>${prop.beds} beds</p>
                <div class="Delete-and-Update">
                  <button class="Delete-button" type="button" onclick="dlt()">Delete</button>
                  <button class="Update-button" type="button">Update</button>
                </div>
              </div>
            </div>
          </div>`;
    }
  }

  function clearD(){
    lat.value="";
    lng.value="";
    imgs.value="";
    price.value="";
    address.value="";
    description.value="";
    beds.value="";
    from.value="";
    to.value="";
  }

  console.log(myProperties);
  read();

  </script>

</body>

</html>