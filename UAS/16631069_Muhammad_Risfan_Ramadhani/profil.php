<?php include "head.php"; ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
  <div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="myfoto1.jpg" alt="myfoto">
          <div class="carousel-caption">
            <h1>PRAY</h1>
          </div>      
        </div>

        <div class="item">
          <img src="myfoto2.jpg" alt="myfoto2">
          <div class="carousel-caption">
            <h1>HARDWORK</h1>
          </div>      
        </div>
        <div class="item">
          <img src="myfoto3.jpg" alt="myfoto3">
          <div class="carousel-caption">
            <h1>SMILE</h1>
          </div>      
        </div>
       <div class="item">
            <img src="myfoto4.jpg" alt="myfoto4">
            <div class="carousel-caption">
              <h1>STUDY</h1>
            </div>      
          </div>
      </div> 
       <!--error
       <div class="item">
          <img src="minion2.jpg" alt="minion2">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>      
        </div>
      </div>-->  


      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:140px">
  <h5 class="w3-bar-item" onclick="openCity(event, 'My Profil')">My Profil</h5>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Biodata')">Biodata</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Skill')">Keahlian</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Aktifitas')">Aktifitas</button>
  <img src="pop.jpg" height="130px">
</div>

<div style="margin-left:140px">
  <div class="w3-padding"><h3>Selamat Datang Di Web Saya</h3>
      <p>Enjoy Your Life, Keep Smile and Pray to Allah SWT</p> </div>


  <div id="Biodata" class="w3-container city" style="display:none">
    <table class="table table-striped ">
              <tr>
                <th>Nama</th>
                <td>Muhammad Risfan Ramadhani</td>
              </tr>
                <tr>
                  <th>Tempat & Tanggal Lahir</th>
                  <td>Banjarmasin, 31 Desember 1997</td>
                </tr>
              <tr>
                <th>Alamat</th>
                <td>Jln Golf Komplek Pondok Pisang 2 Blok D No 2</td>
              </tr>
              <tr>
                <th>No Telpon</th>
                <td>082251947253</td>
              </tr>
              <tr>
                <th>Semester</th>
                <td>3</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>Bujangan</td>
              </tr>
            </table>
  </div>

  <div id="Skill" class="w3-container city" style="display:none">
    <h2>Keahlian</h2>
    <p>Bekerja Cepat.</p> 
    <p>Saya suka cepat, Cepat bekerja, Cepat Belajar, Cepat juga kalo tidur hehe </p>
  </div>

  <div id="Aktifitas" class="w3-container city" style="display:none">
    <h2>Aktifitas</h2>
    <p>Beribadah, Bekerja, Bermain.</p>
    <p>Itu semua hal wajib Bosku.</p>
  </div>

</div>
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-blue", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-blue";
}
</script>

<?php include "foot.php"; ?>