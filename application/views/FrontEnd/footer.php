<footer>
<div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-3">
          <h3 class="mb-4">Pingendo</h2>
          <p class="text-white">A company for whatever you may need, from website prototyping to publishing</p>
        </div>
        <div class="p-4 col-md-3">
          <h3 class="mb-4">Mapsite</h2>
          <ul class="list-unstyled">
            <a href="#" class="text-white">Home</a>
            <br>
            <a href="#" class="text-white">About us</a>
            <br>
            <a href="#" class="text-white">Our services</a>
            <br>
            <a href="#" class="text-white">Stories</a>
          </ul>
        </div>
        <div class="p-4 col-md-3">
          <h3 class="mb-4">Contact</h2>
          <p>
            <a href="tel:+246 - 542 550 5462" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-phone"></i>+246 - 542 550 5462</a>
          </p>
          <p>
            <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>kesone01@gmail.com</a>
          </p>
          <p>
            <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="blank"><i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>365 Park Street, NY</a>
          </p>
        </div>
        <div class="p-4 col-md-3">
          <h2 class="mb-4 text-light">Subscribe</h2>
          <form>
            <fieldset class="form-group text-white"> <label for="exampleInputEmail1">Get our newsletter</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> </fieldset>
            <button type="submit" class="btn btn-outline-secondary">Submit</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">© Copyright 2017 Pingendo - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
</footer>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
 	<link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">
<style>
body > * {
  background-size: cover;
}

.opaque-overlay {
  overflow: hidden;
  position: relative; 
  > *:first-child:before {
    content: '';
    width: 100%;
    height: 100%;
    display: block;
    position: absolute;
    left: 0px;
    top: 0px; 
    pointer-events:none;
    background: rgba(map-get($theme-colors, 'dark'), 0.25);
  }
}


.gradient-overlay {
  overflow: hidden;
  position: relative; 
  > *:first-child:before {
    content: '';
    width: 100%;
    height: 100%;
    display: block;
    position: absolute;
    left: 0px;
    top: 0px; 
    pointer-events:none;
    background: linear-gradient(to top, map-get($theme-colors, 'dark') 0%, transparent 100%);
  }
}
</style>
</body>
</html>