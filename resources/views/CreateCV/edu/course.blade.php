<p>Please Enter Your <strong style="color: blue">Other Courses</strong> Details Here  </p>
  <input type="hidden" name="user_id[]" value="{{Auth::user()->id}}">
<div class=" form-group">
  <label for="" style="color: black">Certificate</label>
  <input type="radio" checked name="degree[]" value="Certificate">
  <label for="" style="color: black">Diploma</label>
  <input type="radio" name="degree[]" value="Diploma">
</div>
<div class="row form-group">
   <div class="col-md-3 mb-3 mb-md-0">
     <label  for="Field of Study" style="color:black">Field of Study </label>
     <input type="text"  name="fieldOfStudy[]" class="form-control" placeholder="Field of Study" required>
   </div>
   <div class="col-md-3">
     <label  for="University Name" style="color:black">School Name</label>
     <input type="text"  name="school[]" class="form-control" placeholder="University Name" required>
   </div>
   <div class="col-md-2 mb-3 mb-md-0">
     <label  for="City" style="color:black">City </label>
     <input type="text"  name="city[]" class="form-control" placeholder="The City" required>
   </div>
   <div class="col-md-2">
     @include('countryList')
   </div>

   <div class="col-md-2">
     <label  for="End Date" style="color:black">End Date</label>
     <input type="date"  name="end[]" class="form-control" required>
   </div>
   </div>
   <br>