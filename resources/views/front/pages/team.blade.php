@extends('front.master')
@section('content')



<main id="main">
    <!-- ======= Chefs Section ======= -->
<section id="chefs" class="chefs section-bg mt-5">
 <div class="container" data-aos="fade-up">

   <div class="section-header">
     <h2>Chefs</h2>
     <p>Our <span>Proffesional</span> Chefs</p>
   </div>

   <div class="row gy-4">
    @foreach ($teams as $team )
    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="chef-member">
            <div class="member-img">
                <img src="{{asset("images/$team->image")}}" class="img-fluid" alt="">
                <div class="social">
                    <a href="{{$team->twitter}}"><i class="bi bi-twitter"></i></a>
                    <a href="{{$team->facebook}}"><i class="bi bi-facebook"></i></a>
                    <a href="{{$team->instgrame}}"><i class="bi bi-instagram"></i></a>
                    <a href="{{$team->linkedin}}"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="member-info">
                <h4>{{$team->name}}</h4>
                <span>{{$team->position}}</span>
                <p>{{$team->description}}</p>
            </div>
        </div>
    </div><!-- End Chefs Member -->
    @endforeach



   </div>

 </div>
</section><!-- End Chefs Section -->

<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
 <div class="container" data-aos="fade-up">

   <div class="section-header">
     <h2>Book A Table</h2>
     <p>Book <span>Your Stay</span> With Us</p>
   </div>

   <div class="row g-0">

     <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

     <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
       <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
         <div class="row gy-4">
           <div class="col-lg-4 col-md-6">
             <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             <div class="validate"></div>
           </div>
           <div class="col-lg-4 col-md-6">
             <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
             <div class="validate"></div>
           </div>
           <div class="col-lg-4 col-md-6">
             <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             <div class="validate"></div>
           </div>
           <div class="col-lg-4 col-md-6">
             <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             <div class="validate"></div>
           </div>
           <div class="col-lg-4 col-md-6">
             <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             <div class="validate"></div>
           </div>
           <div class="col-lg-4 col-md-6">
             <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
             <div class="validate"></div>
           </div>
         </div>
         <div class="form-group mt-3">
           <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
           <div class="validate"></div>
         </div>
         <div class="mb-3">
           <div class="loading">Loading</div>
           <div class="error-message"></div>
           <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
         </div>
         <div class="text-center"><button type="submit">Book a Table</button></div>
       </form>
     </div><!-- End Reservation Form -->

   </div>

 </div>
</section><!-- End Book A Table Section -->


</main>
<!-- End #main -->



@endsection
