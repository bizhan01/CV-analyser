<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CV mkr</title>
  </head>
  <body>
    <div style="height: 1000px; width: 100%; border: 1px solid black" >
    @foreach($user as $user)
      <div style="height: 980px; width: 40%; float: left; background-color: #acafb8; padding: 10px">
        <div class="row" style="margin-top: 0px; margin-bottom: 10px">
          <center>
             <img src="UploadedImages/{{$user->profileImage }}"  height="200px"  style="border-radius: 100%"/> </center>
              <center> <h1 style="margin:auto 0px; ">{{$user->fullName}}</h1></center>
        </div>

        <div class="personal Information">

         <b><h3 style="margin: auto 0px"> Personal Information</h3></b>
         <P>Profession: {{$user->profession}}</p>
         <P>Date of Birth: {{$user->dob}}</p>
         <P>E-mail: {{$user->email}}</p>
         <P>Cell Phone: {{$user->phone}}</p>
         <P>Address: {{$user->address}}</p>
         @endforeach
       </div>

       <div class="">
        <h3 class="title">Computer Skills</h3>
          @foreach($skills as $skill)
            <ul>
              <li>{{$skill -> skill}}:{{$skill->percentage}}%</li>
            </ul>
           @endforeach
        </div>

          <div class="">
            <h3 class="title"> Languages</h3>
              @foreach($languages as $language)
                <ul>
                  <li>{{$language -> language}}: {{$language->level}}</li>
                </ul>
               @endforeach
          </div>

      </div>
      <div style="height: 950px; width: 55%; float: right">
        <div class="" style="margin-top: 40px">
         <h3 class="title">  Education</h3>
         @foreach($education as $education)
         <ul>
           <li>{{$education -> degree}} of <strong>{{$education -> fieldOfStudy}}</strong> from {{$education -> school}}. {{$education -> city}}, {{$education -> country}}| {{$education -> end}}</li>
         </ul>
        @endforeach
       </div>
       <div class="">
         <h3 class="title"> Work Experience</h3>
          @foreach ($experiences as $experience)
         <ul>
           <li>{{$experience->start}} - {{$experience->end}} <br><strong>{{$experience->jobTitle}}</strong> at <strong>{{$experience->company}}</strong>  {{$experience->city}}, {{$experience->country}}</li>
         </ul>
         @endforeach
       </div>
       <div class="">
         <h3 class="title"> Reference</h3>
         @foreach($references as $reference)
         <p>Full Name: {{$reference-> fullName}}</p>
         <p>Relationship: {{$reference-> relationship}}</p>
         <p>Company: {{$reference-> company}}</p>
         <p>Position: {{$reference-> position}}</p>
         <p>E-mail: {{$reference-> email}}</p>
         <p>Phone #: {{$reference-> phone}}</p>
         @endforeach
       </div>
      </div>
    </div>
  </body>
</html>
