<style>
  .map-container-6{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-6 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}

.wi{
  border-radius: 500%;
}
</style>

<div class="container">
<!--Section: Contact v.1-->
<section class="section pb-5">

  <!--Section heading-->
  <h2 class="section-heading h1 pt-4">Contact us</h2>
  <!--Section description-->
  <p class="section-description pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error
    amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a
    pariatur accusamus veniam.</p>

  <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 mb-4">

      <!--Form with header-->
      <div class="card">

        <div class="card-body">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3><i class="fas fa-envelope"></i> Write to us:</h3>
          </div>


          <!--Body-->
          <form method="post" action="<?php echo base_url() ?>kontak/proses" class="user">
                
                <div class="form-group">
                  <input type="text" name="nama" placeholder="Name" class="form-control">
                </div>

                <div class="form-group">
                  <input type="text" name="email" placeholder="Email" class="form-control">
                </div>

                <div class="form-group">
                  <input type="text" name="no_hp" placeholder="Phone" class="form-control">
                </div>

                <div id="form-group">
                  <textarea type="text" name="pesan" placeholder="Message" class="form-control mb-4" cols="20" rows="7" style="padding: 7px;"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block form-control active">Kirim</button>
              </form>

        </div>

      </div>
      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3388.331249018407!2d109.09317871431715!3d-6.915807219608026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb97dd13e5ddd%3A0x526678b08e8b7898!2sKetitang%2C%20Ketanggungan%2C%20Kec.%20Dukuhturi%2C%20Tegal%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1606700071944!5m2!1sid!2sid" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="wi btn btn-primary btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
          <p>Dukuhturi, Tegal </p>
          <p>Indonesia</p>
        </div>

        <div class="col-md-4">
          <a class="wi btn btn-primary btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
          <p> 0858 4871 8618 </p>
          <p> 0838 2975 3287 </p>
        </div>

        <div class="col-md-4">
          <a class="wi btn btn-primary btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
          <p>wiwinnurkholifah850@gmail.com</p>
          <p>wiwinnurkholifah2019@gmail.com</p>
        </div>
      </div>

    </div>
    <!--Grid column-->

  </div>

   </div>
  <div class="jumbotron text-center bg-light py-3">
    <div class="btn-group">
    
    <a class="btn-floating btn-fb mx-2" href="https://www.facebook.com/wiwin.winnk" target="_blank">
      <button type="button" class="btn btn-primary">
        <i class="fab fa-facebook fa-2x"></i>
      </button>
    </a>

    <a class="btn-floating btn-gplus mx-2" href="https://www.youtube.com/channel/UCnAIrTaBQQkmTjvVKXk44Mg?" target="_blank">
      <button type="button" class="btn btn-primary">
        <i class="fab fa-youtube fa-2x"></i> 
      </button>
    </a>

    <a class="btn-floating btn-li mx-2" href="https://api.whatsapp.com/send?phone=6285848718618" target="_blank">
      <button type="button" class="btn btn-primary">
        <i class="fab fa-whatsapp fa-2x"></i>
      </button>
    </a>

    <a class="btn-floating btn-dribbble mx-2" href="https://t.me/Wiwinnk" target="_blank">
      <button type="button" class="btn btn-primary">
       <i class="fab fa-telegram fa-2x"></i>
        </button>
      </a>
    </div>
  </div>

</section>
<!--Section: Contact v.1-->
</div>