@extends('front.master')
@section('content')

    {{-- <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
          <div class="row justify-content-between gy-5">
            <div
              class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start"
            >
              <h2 data-aos="fade-up">Enjoy Your Healthy<br />Delicious Food</h2>
              <p data-aos="fade-up" data-aos-delay="100">
                Sed autem laudantium dolores. Voluptatem itaque ea consequatur
                eveniet. Eum quas beatae cumque eum quaerat.
              </p>
              <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                <a
                  href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                  class="glightbox btn-watch-video d-flex align-items-center"
                  ><i class="bi bi-play-circle"></i><span>Watch Video</span></a
                >
              </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
              <img
                src="assets/img/hero-img.png"
                class="img-fluid"
                alt=""
                data-aos="zoom-out"
                data-aos-delay="300"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- End Hero Section --> --}}

      <main id="main">
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Contact</h2>
              <p>Need Help? <span>Contact Us</span></p>
            </div>

            <div class="mb-3">
              <iframe
                style="border: 0; width: 100%; height: 350px"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <!-- End Google Maps -->

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                  <i class="icon bi bi-map flex-shrink-0"></i>
                  <div>
                    <h3>Our Address</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                  <i class="icon bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h3>Email Us</h3>
                    <p>contact@example.com</p>
                  </div>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                  <i class="icon bi bi-telephone flex-shrink-0"></i>
                  <div>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                  </div>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                  <i class="icon bi bi-share flex-shrink-0"></i>
                  <div>
                    <h3>Opening Hours</h3>
                    <div>
                      <strong>Mon-Sat:</strong> 11AM - 23PM;
                      <strong>Sunday:</strong> Closed
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Info Item -->
            </div>
            <div class="row">
                <div class="col-xl-6 form-group">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session('success')!=null)
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif
            <form
            novalidate
              action="{{route('contact-us-send')}}"
              method="POST"
              role="form"
              class="php-email-form p-3 p-md-4"
            >
            @csrf

                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    required
                    value="{{old('name')}}"
                  />
                </div>
                <div class="col-xl-6 form-group">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Your Email"
                    required
                    value="{{old('email')}}"
                  />
                </div>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="Subject"
                  required
                  value="{{old('subject')}}"
                />
              </div>
              <div class="form-group">
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  placeholder="Message"
                  required
                  value="{{old('message')}}"
                ></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your message has been sent. Thank you!
                </div>
              </div>
              <div class="text-center">
                <button type="submit">Send Message</button>
              </div>
            </form>
            <!--End Contact Form -->
          </div>
        </section>
        <!-- End Contact Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery section-bg">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>gallery</h2>
              <p>Check <span>Our Gallery</span></p>
            </div>

            <div class="gallery-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/gallery/gallery-1.jpg"
                    ><img
                      src="assets/img/gallery/gallery-1.jpg"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/gallery/gallery-2.jpg"
                    ><img
                      src="assets/img/gallery/gallery-2.jpg"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/gallery/gallery-3.jpg"
                    ><img
                      src="assets/img/gallery/gallery-3.jpg"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/gallery/gallery-4.jpg"
                    ><img
                      src="assets/img/gallery/gallery-4.jpg"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/gallery/gallery-5.jpg"
                    ><img
                      src="assets/img/gallery/gallery-5.jpg"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/gallery/gallery-6.jpg"
                    ><img
                      src="assets/img/gallery/gallery-6.jpg"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/gallery/gallery-7.jpg"
                    ><img
                      src="assets/img/gallery/gallery-7.jpg"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
                <div class="swiper-slide">
                  <a
                    class="glightbox"
                    data-gallery="images-gallery"
                    href="assets/img/gallery/gallery-8.jpg"
                    ><img
                      src="assets/img/gallery/gallery-8.jpg"
                      class="img-fluid"
                      alt=""
                  /></a>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </section>
        <!-- End Gallery Section -->
      </main>
      <!-- End #main -->


@endsection
