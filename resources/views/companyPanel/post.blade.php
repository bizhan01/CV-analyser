<section class="colorlib-education" data-section="dashborad">
  <div class="colorlib-narrow-content">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
        <h2 class="colorlib-heading animate-box">Post Job</h2>
      </div>
    </div>
      <form method="POST" action="/job">
           {{csrf_field()}}
        <div class="row form-group">
          <div class="col-md-6 mb-3 mb-md-0">
            <label  for="jobTitle" style="color:black">Job Title</label> <span style="color: red">*</span>
            <input type="text" id="jobTitle" name="jobTitle" class="form-control"  placeholder="Job Title">
          </div>
          <div class="col-md-6">
            <label  for="education" style="color:black">Education Level</label></label> <span style="color: red">*</span>
            <select name="education" id="education" class="form-control">
              <option value="N/A">Select Education Level</option>
              <option value="Diploma">Diploma </option>
              <option value="Bachelor">Bachelor </option>
              <option value="Master">Master </option>
              <option value="PhD">PhD</option>
              <option value="Other">Other</option>
            </select>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-6">
            <label  for="category" style="color:black">Gender</label> </label> <span style="color: red">*</span>
            <select name="gender" id="" class="form-control">
              <option value="N/A">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Any">Any</option>
            </select>
          </div>

          <div class="col-md-6">
            <label  for="category" style="color:black">Category</label> </label>
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
           <label  for="experience" style="color:black">Experience</label>
           <input type="number" id="experience" name="experience" class="form-control" placeholder="Enter the needed number of experience YEARS here">
         </div>
         <div class="col-md-6">
           <label  for="vacancy" style="color:black">Vacancy</label>
           <input type="number" id="vacancy" name="vacancy" class="form-control" placeholder="20 people needed">
         </div>
       </div>

       <div class="row form-group">
         <div class="col-md-6 mb-3 mb-md-0">
           <label  for="salary" style="color:black">Salary</label>
           <input type="number" id="salary" name="salary" class="form-control" placeholder="10,000 AFN">
         </div>
         <div class="col-md-6">
           <label  for="dateline" style="color:black">Dateline</label> <span style="color: red">*</span>
           <input type="date" id="dateline" name="dateline" class="form-control">
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
</section>
