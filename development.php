<?php include __DIR__.'/includes/header.php'; ?>
<<<<<<< HEAD
      <div class="splash">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1>The Development Process</h1>
            <p>It's all in the mind, you know?</p>
          </div>
        </div>
      </div>
    </div>    
=======
<div class="splash">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h1>The Development Process</h1>
        <p>It's all in the mind, you know?</p>
      </div>
    </div>
  </div>
</div>    
>>>>>>> bb9a381f0b43ed5a0abf64149109e2e2f0c565a4
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Initial Idea</h1>
          </div>
          <div class="panel-body">
<<<<<<< HEAD
            <p>Our story starts with Mike watching TV. The show is called "Inside Combat Rescue." In the episode,
               American soliders in Afghanistan are on a search and rescue mission. The mission takes them to an active minefield.
                 Unfortunately, the team is stuck waiting for ground forces to sweep for mines before the helicopter can land.
                 Time is critical when a soldier is bleeding out.</p>
            <p> Here we will have references to Mike's first idea conception. 
            Maybe links to video clips on youtube, and how we all first precieved it. </p>
=======
          <p>The goal of LifeSweeper is to develop a remote controlled minesweeping vehicle to replace the human beings that do it manually. Our major focus is on portability and ease of use.
                We noticed that there are no other alternatives to what we are doing and feel that we should take the initiative and develop this for the world.</p>
            <p>Our story starts with Mike watching TV. The show is called "Inside Combat Rescue." In the episode,
               American soliders in Afghanistan are on a search and rescue mission. The mission takes them to an active minefield.
                 Unfortunately, the team is stuck waiting for ground forces to sweep for mines before the helicopter can land.
                 Time is critical when a soldier is bleeding out. This is where we step in.</p>
>>>>>>> bb9a381f0b43ed5a0abf64149109e2e2f0c565a4
          </div>
        </div>
        <i class="fa fa-arrow-down fa-5x"></i>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">First Thoughts</h1>
          </div>
          <div class="panel-body">
<<<<<<< HEAD
          <p>Our first few designs looked like a lunch box with treads. We had tossed around the idea of mounting the metal detector under the body of the car vs right in front of it.</p>  
          <p>Originally, the intent was to control the car through an Android application. The idea was shelved due to time constraints. Instead we opted for web based control.</p>
          <p>The marking mechanism was originally designed around the use of spray paint. Using different types of paints, we could achieve different goals, such as glow in the dark and infrared.</p>
     
=======
          <p>Our first few designs looked like a lunch box with treads. We had tossed around the idea of mounting the metal detector under the body of the car vs right in front of it. Here is the original 3D mockup without treads.</p>  
          <img class="img-responsive" src="/images/firstcar.jpg" alt="First 3D mockup of car"> 
          <p>Originally, the intent was to control the car through an Android application. The idea was shelved due to time constraints. Instead we opted for web based control.</p>
          <p>The marking mechanism was originally designed around the use of spray paint. Using different types of paints, we could achieve different goals, such as glow in the dark and infrared.</p>
          
>>>>>>> bb9a381f0b43ed5a0abf64149109e2e2f0c565a4
        </div>
        </div>
        <i class="fa fa-arrow-down fa-5x"></i>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Revisting the Idea</h1>
          </div>
          <div class="panel-body">
<<<<<<< HEAD
          <p>After some thinking, we decided to revist some of our ideas. Some of the biggest ideas we revisted were the marking mechanism, the metal detector placement, and how to control the vehicle.</p>
          <p>We took inspiration from real life and developed the boom arm to mimic the action of manually sweeping mines. The boom arm will hold the metal detector in front of the vehicle.</p>
          <p>The marking mechanism got scrapped for a more mechanized system. Using a motor attached to the boom arm, glow sticks are dropped where the metal detector is positioned.</p>            
=======
          <p></p>
          <img class="img-responsive" src="/images/newmodel.jpg" alt="final 3D mockup of car">
          <p>We took inspiration from real life and developed the boom arm to mimic the action of manually sweeping mines. The boom arm will hold the metal detector in front of the vehicle.</p>
          <img class="img-responsive rotate180" src="/images/boomarm.jpg" alt="Boom Arm">
          <p>The marking mechanism got scrapped for a more mechanized system. Using a motor attached to the boom arm, glow sticks are dropped where the metal detector is positioned.</p>            
          <img class="img-responsive" src="/images/markingmechanism.jpg" alt="Marking Mechanism">
          </div>
        </div>
        <i class="fa fa-arrow-down fa-5x"></i>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Car Construction</h1>
          </div>
          <div class="panel-body">
            <p>There are 2 drills/Motors, each controlling a half of the vehicle. Everything is powered using the 18V batteries that came with them. Power regulators and DC to MicroUSB adapters are used to step down and convert the power to the other devices.</p>
            <img class="img-responsive" src="/images/motors.jpg" alt="Car body with motors">
            <p>Controlling the forward and reverse of the motors was a major challange for us. Fortunately, Mike discovered an integrated circuit called an H Bridge. This allows us to keep a one directional circuit while implementing a two directional circuit through use of a toggle switch.</p>
            <img class="img-responsive" src="/images/hbridge.jpg" alt="H Bridge testing with Arduino Uno">
            <p>Using the Arduino Yun as an access point, we can connect the Raspberry Pi and all of our devices. The Yun will also host the web page we will be using to control the vehicle with.</p>
            <img class="img-responsive" src="/images/yunandpi.jpg" alt="Arduino Yun and Raspberry Pi">
            <p>The motors will be controlled through a webpage using a REST API, we opted for Javascript. Javascript allows us to use keyboard actions to send commands to the Yun. </p>
>>>>>>> bb9a381f0b43ed5a0abf64149109e2e2f0c565a4
          </div>
        </div>
        <i class="fa fa-arrow-down fa-5x"></i>
        <div class="panel panel-default">
          <div class="panel-heading">
<<<<<<< HEAD
            <h1 class="panel-title">Car Construction</h1>
          </div>
          <div class="panel-body">
            <p>Here we will discuss our current progress. This will include any challenges we faced, and how we aim to overcome them. We can talk about pending plans for the future, and how they might affect our relese date.</p>
=======
            <h1 class="panel-title">Final moments</h1>
          </div>
          <div class="panel-body">
            <p>Last few things before car is finished and goes on to project page</p>
            <img class="img-responsive" src="/images/working1.jpg" alt="Working on car">
            <img class="img-responsive" src="/images/working2.jpg" alt="Working on car">
>>>>>>> bb9a381f0b43ed5a0abf64149109e2e2f0c565a4
          </div>
        </div>
        <i class="fa fa-arrow-down fa-5x"></i>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Final moments</h1>
          </div>
          <div class="panel-body">
            <p>Last few things before car is finished and goes on to project page</p>
          </div>
        </div>

      </div>
    </div>
  </div>  
<?php require __DIR__.'/includes/footer.php'; ?>
