<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/SIPS/foto/a.jpg" alt="a" width="1600" height="550">
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/SIPS/foto/b.jpg" alt="b" width="1600" height="550">
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/SIPS/foto/c.jpg" alt="c" width="1600" height="550">
      <div class="carousel-caption">
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

<SCRIPT LANGUAGE="JavaScript">


function tanggal()
{
var d = new Date();
var y = d.getFullYear();

var m = d.getMonth() + 1;
var d = d.getDate();
var t = d + '/' + m + '/' + y + ' ';

document.g.defaultStatus.value = "    "+"Anda datang pada tanggal " + t ;
alert("Selamat Datang Di Website seminar");

}
function timer()
{
var d = new Date();
var jam = d.getHours();

var menit = d.getMinutes();
var detik = d.getSeconds();

var strwaktu = (jam<10)?"0"+jam: " Sekarang Jam : " +jam; strwaktu +=(menit<10)?"0"+menit:" : "+menit; strwaktu +=(detik<10)?"0"+detik:" : "+detik;

document.f.txtwaktu.value="       "+strwaktu; setTimeout("timer()",200); 
}

//  end hiding --> </SCRIPT>

<h1 align="center"></h1> <hr width="600" color="black" noshade size="10">
<font face="arial">

<CENTER>

<form name="g">

<input type="Text" size="35" name="defaultStatus"> 

</form>

<form name="f">

<h4 align="center"></h4>
<input type="Text" size="30" name="txtwaktu"> 
<hr width="600" color="black" noshade size="2"> 

</form>

<SCRIPT LANGUAGE="JavaScript">timer()</SCRIPT> </center>



  <div class="page">
    <header>
      <h1>LOLCAT CLOCK</h1>
    </header>

    <h4>
      I CAN HAZ TIME?? <br>
      <span id="clock">Clock goes here</span>
    </h4>

    <img id="lolcatImage" src="https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/08/normalTime.jpg" alt="lolcat">
    

    <blockquote id="timeEvent">This is where time events are reported</blockquote>


    set Wake Up Time
    <select id="wakeUpTimeSelector">
      <option value="1">1 AM - 2AM</option>
      <option value="2">2 AM - 3AM</option>
      <option value="3">3 AM - 4AM</option>
      <option value="4">4 AM - 5AM</option>
      <option value="5">5 AM - 6AM</option>
      <option value="6">6 AM - 7AM</option>
      <option value="7">7 AM - 8AM</option>
      <option value="8" selected>8 AM - 9AM</option>
      <option value="9">9 AM - 10AM</option>
      <option value="10">10 AM - 11AM</option>
      <option value="11">11 AM - 12PM</option>
      <option value="12">12 PM - 1PM</option>
      <option value="13">1 PM - 2PM</option>
      <option value="14">2 PM - 3PM</option>
      <option value="15">3 PM - 4PM</option>
      <option value="16">4 PM - 5PM</option>
      <option value="17">5 PM - 6PM</option>
      <option value="18">6 PM - 7PM</option>
      <option value="19">7 PM - 8PM</option>
      <option value="20">8 PM - 9PM</option>
      <option value="21">9 PM - 10PM</option>
      <option value="22">10 PM - 11PM</option>
      <option value="23">11 PM - 12AM</option>
      <option value="24">12 AM - 1AM</option>
    </select>
    <br>
    set Lunch Time
      <select id="lunchTimeSelector">
        <option value="1">1 AM - 2AM</option>
        <option value="2">2 AM - 3AM</option>
        <option value="3">3 AM - 4AM</option>
        <option value="4">4 AM - 5AM</option>
        <option value="5">5 AM - 6AM</option>
        <option value="6">6 AM - 7AM</option>
        <option value="7">7 AM - 8AM</option>
        <option value="8">8 AM - 9AM</option>
        <option value="9">9 AM - 10AM</option>
        <option value="10">10 AM - 11AM</option>
        <option value="11">11 AM - 12PM</option>
        <option value="12" selected>12 PM - 1PM</option>
        <option value="13">1 PM - 2PM</option>
        <option value="14">2 PM - 3PM</option>
        <option value="15">3 PM - 4PM</option>
        <option value="16">4 PM - 5PM</option>
        <option value="17">5 PM - 6PM</option>
        <option value="18">6 PM - 7PM</option>
        <option value="19">7 PM - 8PM</option>
        <option value="20">8 PM - 9PM</option>
        <option value="21">9 PM - 10PM</option>
        <option value="22">10 PM - 11PM</option>
        <option value="23">11 PM - 12AM</option>
        <option value="24">12 AM - 1AM</option>
      </select>
    <br>
    set Nap Time
    <select id="napTimeSelector">
      <option value="1">1 AM - 2AM</option>
      <option value="2">2 AM - 3AM</option>
      <option value="3">3 AM - 4AM</option>
      <option value="4">4 AM - 5AM</option>
      <option value="5">5 AM - 6AM</option>
      <option value="6">6 AM - 7AM</option>
      <option value="7">7 AM - 8AM</option>
      <option value="8">8 AM - 9AM</option>
      <option value="9">9 AM - 10AM</option>
      <option value="10">10 AM - 11AM</option>
      <option value="11">11 AM - 12PM</option>
      <option value="12">12 PM - 1PM</option>
      <option value="13">1 PM - 2PM</option>
      <option value="14">2 PM - 3PM</option>
      <option value="15" selected>3 PM - 4PM</option>
      <option value="16">4 PM - 5PM</option>
      <option value="17">5 PM - 6PM</option>
      <option value="18">6 PM - 7PM</option>
      <option value="19">7 PM - 8PM</option>
      <option value="20">8 PM - 9PM</option>
      <option value="21">9 PM - 10PM</option>
      <option value="22">10 PM - 11PM</option>
      <option value="23">11 PM - 12AM</option>
      <option value="24">12 AM - 1AM</option>
      </select>
    <br>
    <button id="partyTimeButton">Party!</button>

    <footer>
 
    </footer>
  </div>





<div class="container member">

    <div class="cardd">
      <img src="<?php echo base_url() ?>foto/informasi.png" width="96" height="96">
      <span class="nama">Wiwin NK</span>
      <span class="jabatan">Admin</span>
      <span class="close">×</span>
    </div> 

    <div class="cardd">
      <img src="<?php echo base_url() ?>foto/informasi.png" width="96" height="96">
      <span class="nama">Fahmi</span>
      <span class="jabatan">Admin</span>
      <span class="close">×</span>
    </div> 

    <div class="cardd">
      <img src="<?php echo base_url() ?>foto/informasi.png" width="96" height="96">
      <span class="nama">Chiko</span>
      <span class="jabatan">Admin</span>
      <span class="close">×</span>
    </div> 


</div>

<script src="<?php echo base_url() ?>assets/js1/member.js"></script>
<script src="<?php echo base_url() ?>assets/js1/jam.js"></script>

