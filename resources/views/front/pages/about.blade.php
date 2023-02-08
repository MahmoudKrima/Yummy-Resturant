@extends('front.master')
@section('content')



<main id="main">
    <!-- ======= About Section ======= -->
    @foreach ($abouts as $about)
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>About Us</h2>
                <p>Learn More <span>About Us</span></p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-7 position-relative about-img"
                    style="background-image: url({{ asset("images/$about->main_image") }}) ;" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="call-us position-absolute">
                        <h4>Book a Table</h4>
                        <p>{{ $about->phone }}</p>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            {{ $about->title }}
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> {{ $about->body }}</li>
                        </ul>
                        <p>
                            {{ $about->footer }}
                        </p>

                        <div class="position-relative mt-4">
                            <img src="{{ asset("images/$about->side_image") }}" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
@endforeach

     <!-- ======= Why Us Section ======= -->
     <section id="why-us" class="why-us section-bg">
       <div class="container" data-aos="fade-up">

         <div class="row gy-4">

           <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
             <div class="why-box">
               <h3>Why Choose Yummy?</h3>
               <p>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                 Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
               </p>
               <div class="text-center">
                 <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
               </div>
             </div>
           </div><!-- End Why Box -->

           <div class="col-lg-8 d-flex align-items-center">
             <div class="row gy-4">

                @foreach ($sections as $section)
                <div class="col-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box d-flex flex-column justify-content-center  align-items-center">
                        <img src="{{ asset("images/$section->icon_image") }}" style="border-radius:50%;"
                            class="mb-5" width="70px" height="70px" alt="">
                        <h4
                            style="max-width: 200px;   overflow: hidden;
                    ">
                            {{ $section->title }}</h4>
                        <p style="max-width: 200px;   overflow: hidden;">{{ $section->body }}
                        </p>
                    </div>
                </div><!-- End Icon Box -->
            @endforeach
             </div>
           </div>

         </div>

       </div>
     </section><!-- End Why Us Section -->

     <!-- ======= Stats Counter Section ======= -->
     <section id="stats-counter" class="stats-counter">
       <div class="container" data-aos="zoom-out">

         <div class="row gy-4">

           <div class="col-lg-3 col-md-6">
             <div class="stats-item text-center w-100 h-100">
               <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
               <p>Clients</p>
             </div>
           </div><!-- End Stats Item -->

           <div class="col-lg-3 col-md-6">
             <div class="stats-item text-center w-100 h-100">
               <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
               <p>Projects</p>
             </div>
           </div><!-- End Stats Item -->

           <div class="col-lg-3 col-md-6">
             <div class="stats-item text-center w-100 h-100">
               <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
               <p>Hours Of Support</p>
             </div>
           </div><!-- End Stats Item -->

           <div class="col-lg-3 col-md-6">
             <div class="stats-item text-center w-100 h-100">
               <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
               <p>Workers</p>
             </div>
           </div><!-- End Stats Item -->

         </div>

       </div>
     </section><!-- End Stats Counter Section -->

   </main>
   <!-- End #main -->


@endsection
