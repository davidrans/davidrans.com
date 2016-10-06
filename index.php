<!doctype html>
<html>
<head>
   <title>David Rans - Web Development</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.0/css/bootstrap.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.0/css/bootstrap-responsive.css" rel="stylesheet">
   <!-- CSS -->
   <link href="css/home.css" rel="stylesheet" media="screen" type="text/css">
   <!-- Favicon -->
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
   <!-- JS -->
   <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
   <script src="js/home.js"></script>
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
</head>
<body>
   <div id="header">
      <p id="name" class="heading">DAVID RANS</p>
      <hr>
      <p id="job" class="subheading">web development</p>
   </div>
   <div id="contact" class="heading">
      <p class="heading">GET IN TOUCH</p>
      <div class="row-fluid">
         <div id="contact-form" class="span6 offset3">
            <span>Name:</span>
            <input type="text" id="inputName"><br>
            <span>Email:</span>
            <input type="email" id="inputEmail"><br>
            <p>Tell me about your project:</p>
            <textarea rows="10" id="inputMessage"></textarea><br>
            <button id="sub" class="btn">Submit</button>
            <span id="status-message"></span>
         </div>
      </div>
   </div>
   <div id="footer">
      <hr>
      <p>&copy; David Rans <?= date('Y') ?> All Rights Reserved</p>
   </div>
</body>
</html>
