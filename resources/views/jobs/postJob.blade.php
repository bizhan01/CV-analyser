@extends('layouts.master')

@section('content')
<!-- HOME -->
  <section class="home-section section-hero inner-page overlay bg-image"
    style="background-image: url('images/hero_1.jpg');" id="home-section">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
          <div class="mb-5 text-center">
            <h1 class="text-white font-weight-bold">Post a New Job</h1>
            <p>Post your vacant position so that the candidates (job seekers) can find them.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="section-title mb-2 text-white">Publish Your Vacant Position </h2>
        </div>
      </div>
      <div class="container">
   <div class="row"  >
     <div class="col-lg-12 mb-5 mb-lg-0" style="margin:auto">
       <form method="POST" action="/post">
            {{csrf_field()}}
         <div class="row form-group">
           <div class="col-md-6 mb-3 mb-md-0">
             <label  for="organizationName">Organization Name</label><span style="color: red">*</span>
             <input type="text" id="organization" name="organization" class="form-control">
           </div>
           <div class="col-md-6">
             <label  for="jobTitle">Job Title</label> <span style="color: red">*</span>
             <input type="text" id="jobTitle" name="jobTitle" class="form-control">
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-6 mb-3 mb-md-0">
             <label  for="educationLevel">Education Level</label>
             <select name="educationLevel" id="" class="form-control">
               <option value="N/A">Select Education Level</option>
               <option value="Diploma">Diploma </option>
               <option value="Bachelor">Bachelor </option>
               <option value="Master">Master </option>
               <option value="PhD">PhD</option>
               <option value="Other Important">Other Important</option>
             </select>
           </div>
           <div class="col-md-6">
             <label  for="email">Email Address</label>
             <input type="email" id="email" class="form-control">
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-6 mb-3 mb-md-0">
             <label  for="phone">Phone Number</label> <span style="color: red">*</span>
             <input type="text" id="phoneNumber" name="phone" class="form-control">
           </div>
           <div class="col-md-6">
             <label  for="category">Category</label>
             <select name="category" id="" class="form-control">
               <option value="N/A">Category</option>
               <option value="Full Time">Full Time</option>
               <option value="Part Time">Part Time</option>
               <option value="Freelance">Freelance</option>
               <option value="Internship">Internship</option>
               <option value="Temporary">Temporary</option>
             </select>
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-6 mb-3 mb-md-0">
             <label  for="phone">City</label> <span style="color: red">*</span>
             <input type="text" id="city" name="city" class="form-control">
           </div>
           <div class="col-md-6">
             <label  for="category">Cender</label>
             <select name="gender" id="" class="form-control">
               <option value="N/A">Select Gender</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Any">Any</option>
             </select>
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-6 mb-3 mb-md-0">
             <label  for="salary">Salary</label>
             <input type="number" id="salary" name="salary" class="form-control">
           </div>
           <div class="col-md-6">
             <label  for="dateline">Dateline</label> <span style="color: red">*</span>
             <input type="date" id="dateline" name="dateline" class="form-control">
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-12">
             <label for="jobDetails">Job Details</label>
             <div id="custom-modal"  >
                 <div class="form-group" name="jobDetail">
                     <textarea class="summernote" name="jobDetail">
                     </textarea>
                 </div>
             </div>
           </div>
         </div>

         <div class="row form-group">
           <div class="col-md-12">
             <input type="submit" value="Publish" class="btn btn-primary btn-md text-white">
           </div>
         </div>
            @include('layouts.errors')
       </form>
     </div>
       </div>

        </div>
      </div>
    </div>
</section>
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>

    <script>
        jQuery(document).ready(function(){

            $('.summernote').summernote({
                height: 320,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });

        });
    </script>
    @include('layouts.footer')

@endsection
