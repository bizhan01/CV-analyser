 @extends('layouts.master')

 @section('content')
 <!-- HOME -->
     <section class="home-section section-hero inner-page overlay bg-image" style="background-image: url('images/hero_1.jpg');"
       id="home-section">

       <div class="container">
         <div class="row align-items-center justify-content-center">
           <div class="col-md-12">
             <div class="mb-5 text-center">
               <h1 class="text-white font-weight-bold">Job Listings</h1>
               <p>Find your dream jobs in our powerful career website template.</p>
             </div>
           </div>
         </div>
       </div>
     </section>

    @include('jobs.jobsList')

     <!-- <section class="site-section py-4 mb-5 border-top">
       <div class="container">

         <div class="row align-items-center">
           <div class="col-12 text-center mt-4 mb-5">
             <div class="row justify-content-center">
               <div class="col-md-7">
                 <h2 class="section-title mb-2">Our Candidates Work In Company</h2>
                 <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit
                   mollitia ipsum facilis expedita tempora suscipit iste</p>
               </div>
             </div>

           </div>
           <div class="col-6 col-lg-3 col-md-6 text-center">
             <img src="images/logo_mailchimp.svg" alt="Image" class="img-fluid logo-1">
           </div>
           <div class="col-6 col-lg-3 col-md-6 text-center">
             <img src="images/logo_paypal.svg" alt="Image" class="img-fluid logo-2">
           </div>
           <div class="col-6 col-lg-3 col-md-6 text-center">
             <img src="images/logo_stripe.svg" alt="Image" class="img-fluid logo-3">
           </div>
           <div class="col-6 col-lg-3 col-md-6 text-center">
             <img src="images/logo_visa.svg" alt="Image" class="img-fluid logo-4">
           </div>
         </div>
       </div>
     </section> -->


    @include('subscribe')
     @include('layouts.footer')
 @endsection
