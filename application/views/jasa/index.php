<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 00%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}


.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>


<div class="jumbotron text-center bg-dark py-3 text-white text-center">
  <h2> Seminar</h1>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="<?php echo base_url() ?>foto/posterb.jpg"  alt="poster" style="width:100%">
      <div class="container">
        <p class="title">NOVEMBER / SEMINAR</p>
        <h5>JOB FAIR [ How To Stand Out When Applying For Jobs ]</h5>
        <p> Webinar will be hold on :📆 21 November 2020🕐 
        09:00 – End💻 Zoom Meetings You will get :A new
        friendGreat ExperienceE – ceritificate Acara ini  </p>
        <a href="<?php echo base_url() ?>Artikel" class="button">Contact</button></a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="<?php echo base_url() ?>foto/postera.jpg"  alt="poster" style="width:100%">
      <div class="container">
        <p class="title">DESEMBER / SEMINAR</p>
        <h5>Kreen Destination Series Uluwatu: Best Surfing Destination in Bali</h5>
        <p> Tanggal: 2 Desember 2020Tempat: ZoomHTM: Free 
          [Kreen Destination Series Uluwatu: Best Surfing Destination in Bali] 
          Uluwatu terletak diujung selatan pulau Bali dan sangat terkenal.... </p>
        <a href="<?php echo base_url() ?>Artikel" class="button">Contact</button></a>


      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
       <img src="<?php echo base_url() ?>foto/posterc.jpg"  alt="poster" style="width:100%">
      <div class="container">
        <p class="title">DESEMBER / SEMINAR</p>
        <h5>[DISKON] Diskusi Online 3.0 : “How Does Your Food Affect 
        (Your) Mental Health?”</h5>
        <p> Tanggal: 5 Desember 2020Tempat: via 
        ZOOMHTM: Free Halo, Sobat Pangan! 🥰👋 
        Siapa nih yang suka ngerasa seperti ini? 👇🏼
        “Ngopi, yuk. Lagi mumet banget nih pikiranku.. </p>
        <a href="<?php echo base_url() ?>Artikel" class="button">Contact</button></a>

      </div>
    </div>
  </div>
</div>

</body>
</html>
