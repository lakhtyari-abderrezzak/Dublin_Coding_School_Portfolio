<?php

print <<<HTML


<div class="contact" id="contact">
    <div class="title">Contact Us</div>
    <div class="container">
      <div class="first-card">
        <div class="info">
          <i class="fa-solid fa-phone"></i>
          <p>+353831119128</p>
        </div>
        <div class="info">
          <i class="fa-regular fa-envelope"></i>
          <p>Lakhtyari.abderrazzak@gmail.com</p>
        </div>
        <div class="info">
          <i class="fa-brands fa-linkedin"></i>
          <p><a href="https://www.linkedin.com/in/abderrazzak-lakhtayari-747340273/">lakhtyari Abderrazzak</a></p>
        </div>
        <div class="info">
          <i class="fa-solid fa-location-dot"></i>
          <p>Tullamore, Ireland</p>
        </div>
      </div>
      <form class="second-card" action="./includes/formHandler.php" method="POST">
        <h3>Contact us</h3>
        <input type="text" placeholder="Enter valid User Name" name="username" id="username" required/>
        <input type="text" placeholder="Enter Valid Email"   name="email" required/>
        <input type="password" placeholder="Enter valid User password" name="pwd" id="pwd" required/>
        <textarea  id="" placeholder="Send  Us a Message" name="comment" ></textarea>
        <input type="submit" name="Send" id="submit" />
      </form>
    </div>
  </div>

HTML;



