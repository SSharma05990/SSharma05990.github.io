

<!Doctype Html>

<html>
<body>
 

    <head>
      
        <link rel="stylesheet" type="text/css" href="bootstrap.css">

        <link rel="stylesheet" type="text/css" href="contactcss.css">

    </head>
<p> 
    
    <div id="navbar">
        <a href="Home.html">Home</a>
        <a href="experience.html">Experience</a>
        <a href="Awards.html"> Awards & Achievments</a> </li>
        <a href="Contact.html">Contact</a>
    
      </div> 
    
    
      <script>
        window.onscroll = function() {myFunction()};
        
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
        </script>

        </p>

    <h1 style="text-align:center"> Contact Me! </h1>

<form name="Contact" action="qw.php" method="POST">

   
    <div class="form-group">
        <label for="exampleInputName2">Name:</label>
        <input name="name"type="text" class="form-control" id="exampleInputName2" type="text" placeholder="John Smith" required>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail2">Email:</label>
        <input name="mail" type="email" class="form-control" id="exampleInputEmail2" placeholder="John.Smith@example.com" required>
      </div>



      <div class="form-group">
        <label for="exampleInputPhone Number2">Phone Number:</label>
        <input name="number" type="tel" class="form-control" id="exampleInputPhone Number2" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4} placeholder="Optional">
        <small id="small">Format: 123-456-7890</small>
      </div>
 


      <div class="form-group">
<label for="Subject">Subject:</label>
<input name="subject" type="text" id="Subject" class="form-control" aria-describedby="helpBlock" placeholder="Write your Message here!" required> 
</div>

<br>
<br>
    <button type="submit" class="btn btn-primary">Send!</button>
    
</form>



</body>

</body>



<br>
<br>
<br>

<script src="https://kit.fontawesome.com/29e3a0babb.js" crossorigin="anonymous"></script>

<a href="https://www.instagram.com/s.sharma_05/"><i class="fab fa-instagram"></i></a>


<a href="https://www.facebook.com/shauriyasharma28"><i class="fab fa-facebook-square"></i></a>


<a href="https://www.youtube.com/channel/UCpX_gG34VRENdkP3uUkvKRw?view_as=subscriber"><i class="fab fa-youtube"></i> </a>

?>

</body>
</html>