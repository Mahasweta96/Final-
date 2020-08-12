@extends ('layout2')

@section('content')
<section id="contact" class="contact">
<div class="container">
        <a class="navbar-brand" href="/">Cloud Beans</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>31/1. EAST POINT, INDIA, KOLKATA-700078</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>mahasweta08@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 8017847819</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d606.1748623701712!2d88.38126004643892!3d22.512192811689403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02713592269feb%3A0x691f74be887fbef6!2s31%2C%20E%20Point%20St%2C%20Ruby%20Park%20East%2C%20Kasba%2C%20Kolkata%2C%20West%20Bengal%20700039!5e0!3m2!1sen!2sin!4v1596569539527!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

          </div>
          
         <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form method="POST"  class="php-email-form" action="/cart">
            @csrf
             <div class="form-row">
              <div class="form-group col-md-6">
                 <label class="label" for="name">Name</label>

                 
                     <input type="text" 
                     class="form-control" 
                     name="name" 
                     id="name"
                     >{{ old('name') }}
                     @error('name')
                     <p class="help is-danger">{{ $errors->first('name') }}</p>
                     @enderror
                 </div> 
             </div>

             
              <div class="form-group">
                 <label class="label" for="email">Email</label>

                 
                     <input type="email" class="form-control" name="email" id="email">{{ old('email') }}
                      @error('email')
                     <p class="help is-danger">{{ $errors->first('email') }}</p>
                     @enderror

                 
             </div>
             <div class="form-group">
              
                 <label class="label" for="subject">Subject</label>

                 
                     <input type="text" class="form-control" name="subject" id="subject">{{ old('subject') }}
                      @error('subject')
                     <p class="help is-danger">{{ $errors->first('subject') }}</p>
                     @enderror
                 
             </div>

                <div class="form-group">
                  
                 <label class="label" for="message">Message</label>

             
                 <textarea class="form-control" name="message" id="message">{{ old('message') }}</textarea>
                  @error('message')
                     <p class="help is-danger">{{ $errors->first('message') }}</p>
                     @enderror
             
             </div>
             <div class="field is grouped">
                 <div class="control">
                     <button class="button is-link" type="submit">SUBMIT</button>
                 </div>
             </div>

         </form>
             </div>
         </div>

          
    </section>
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  @endsection
