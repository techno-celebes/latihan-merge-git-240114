@extends('master.master_home')
@section('content')
<section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0" style="margin-top: 50px;">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200" >
            <div class="content">
              <h2>About Us</h2>
              <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
              <p>
                Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
              </p>

              <div class="belalang" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-youtube"></i>
                <i class="bi bi-github"></i>
              </div>

              <div class="kuda text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="300">
            <img src="../../img/about.jpg" class="img-fluid" alt="image" style="width: 50rem">
          </div>
        </div>
      </div>
    </section>

    <style>
      .belalang i{
        font-size: 2em;
        margin-right: 17px;
        color: black;
      }

      .belalang i:hover{
        color: blue;
      }

      .kuda{
        margin-top: 20px;
      }
    </style>
@endsection