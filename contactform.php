<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css\style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css?family=Basic|Dancing+Script|Great+Vibes|Sacramento|Satisfy|Tangerine&display=swap" rel="stylesheet">
  
  <title>Contact</title>


</head>




<body id="contact" class="contact-back"> 

 <div style="padding: 10px;">
  <div style="text-decoration: underline;"> 

    <a href="D:/Projects/Website/HTML/homepage.html">

  <button class="btn-icon"><i class="fa fa-home"></i>
  </button>
</a>

<div style="margin-bottom: 30px;">
  <h4 style="text-align: center;">Contact Form</h4>
</div>
  </div>

</div>

  <div class="container">

        <form class="needs-validation" novalidate>


  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="name1">First name</label>
      <input type="text" class="form-control" id="name1" name="name1" placeholder="First name" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="name2">Last name</label>
      <input type="text" class="form-control" id="name2" name="name2" placeholder="Last name" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" pattern="[789][0-9]{9}" placeholder="Cell" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>




    <!-- <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div> -->
  </div>


  <div class="form-group">
          <label for="email">Email address</label>

          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
          <div class="valid-feedback">
        Looks good!
      </div>
        </div>

      
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="state">State</label>
      <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="zip">Zip</label>
      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>

  <div class="form-group">
          <label for="dropdown">Select Enquiry Type</label>
          <select name="dropdown" class="form-control" id="dropdown">

            <option value="Option1">Android Application Enquiry</option>
            <option value="Option2">Website Development Enquiry</option>
            <option value="Option3">Software Development Enquiry</option>
            <option value="Option4">Server Hosting Enquiry</option>
            <option value="Option5">Get Immediate Technical Support</option>
            <option value="Option6">Marketing Solutions</option>
          </select>
        </div>

        <div class="form-group" id="enquiry">
          <label for="enquiry">Enquiry:</label>
          <textarea class="form-control" name="message" placeholder="Explain your Requirement Here." rows="5" required></textarea>
          <div class="valid-feedback">
        Looks good!
      </div>
        </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="checkbox1" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" name="checkbox2" type="checkbox" value="">
      <label>Request Immediate Callback</label>

    </div>
  </div>    

  <div style="padding: 20px;">
  <div style="text-align-last: center;">

  <button id="submit" class="btn btn-primary" name="submit" type="submit">Submit form</button>
  </div>
  </div>
</form>

</div>



<!-- Footer -->

  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Arnine Corporation is a Company which provides Fundamental Services for your Business by using Latest Technology and Advance Skillset.
            We ensure the best conversions for our clients. We know what their businesses mean to them, and hence no stone uturned in offering the best services.
            Associate with us now and give us the opportunity of fulfilling your dreams. </p>


            <span></span> 

            <p style="color: silver"><img src="https://img.icons8.com/color/35/000000/gmail.png"> arninecorporation@gmail.com</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://Arnine Corporation.com/category/c-language/">Web Development</a></li>
              <li><a href="http://Arnine Corporation.com/category/front-end-development/">Android Development</a></li>
              <li><a href="http://Arnine Corporation.com/category/back-end-development/">Software Development</a></li>
              <li><a href="http://Arnine Corporation.com/category/java-programming-language/">Server Hosting & Designing</a></li>
              <li><a href="http://Arnine Corporation.com/category/android/"></a>Technical Support</li>
              <li><a href="http://Arnine Corporation.com/category/templates/">Marketing</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://Arnine Corporation.com/about/">About Us</a></li>
              <li><a href="http://Arnine Corporation.com/contact/">Contact Us</a></li>
              <li><a href="http://Arnine Corporation.com/contribute-at-Arnine Corporation/">Contribute</a></li>
              <li><a href="http://Arnine Corporation.com/privacy-policy/">Team</a></li>
              <li><a href="http://Arnine Corporation.com/sitemap/">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Arnine Corporation</a>.
            </p>
          </div>

        </div>
        </div>

<!-- Social Icons Bar -->


<div class="center">

<div style="margin-top: 10px" style="margin-bottom: 10px">

<a href="https://www.youtube.com/channel/UCpQw958yO7t98vaZ19Jbnew?view_as=subscriber"style="margin-right: 20px"><img src="https://img.icons8.com/color/48/000000/google-plus.png"></a>
<a href="https://www.facebook.com/arninecorp/"style="margin-right: 20px"><img src="https://img.icons8.com/color/48/000000/facebook-circled.png"></a>
<a href="https://www.instagram.com/arninecorp/"style="margin-right: 20px"><img src="https://img.icons8.com/color/48/000000/instagram-new.png"></a>
<a href="https://twitter.com/arninecorp"style="margin-right: 20px"><img src="https://img.icons8.com/color/48/000000/twitter-circled.png"></a>
<a href="https://www.pinterest.com/arninecorporation/"style="margin-right: 20px"><img src="https://img.icons8.com/color/48/000000/pinterest.png"></a>
<a href="https://github.com/arnine-corporation"style="margin-right: 20px"><img src="https://img.icons8.com/nolan/50/github.png"></a>
<a href="https://www.linkedin.com/in/arnine-corporation-112b6918b/"style="margin-right: 20px"><img src="https://img.icons8.com/color/48/000000/linkedin-circled.png"></a>
<a href="https://www.reddit.com/user/arninecorporation"style="margin-right: 20px"><img src="https://img.icons8.com/color/48/000000/reddit.png"></a>


</div>

</div>

  </footer>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>   

        
      

</div>

















  
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css"></script>



</html>