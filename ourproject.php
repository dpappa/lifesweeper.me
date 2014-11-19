<?php include __DIR__.'/includes/header.php'; ?>
  <div class="splash">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1>Our Project</h1>
            <p>Down to the nuts and bolts</p>
          </div>
        </div>
      </div>
    </div>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title">Final Cut</h1>
					</div>
					<div class="panel-body">
					<p>Coming Soon!</p>
					<p>This is where final design and implementation goes and breakdown of parts</p>
				</div>
			</div>
		</div>
	</div>
	<i class="fa fa-pause fa-5x"></i>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title">Arduino + Pi</h1>
					</div>
					<div class="panel-body">
					<p>The Arduino Yun was chosen due to its access point feature. The Yun is an integral part of the project because it connects to the Pi, motors, and web page. Without the Yun, we could not have achieved this.</p>
					<a href="http://arduino.cc/en/Main/ArduinoBoardYun?from=Products.ArduinoYUN" title="Arduino Yun Website"><img class="img-responsive" src="/images/yun.jpg" alt="Arduino Yun"></a> 
					<p>The Raspberry Pi was used for camera controls. Using the <a href="http://www.raspberrypi.org/products/camera-module/" title="Raspberry Pi Camera Module">Camera Module</a>, we can achieve greater framerate and lower latency than a standard web cam. The video feed is hosted on the Pi's web server and access through an iFrame on the web control page.</p>
					<img class="img-responsive" src="/images/yunandpi2.jpg" alt="Raspberry Pi and Arduino Yun"> 
					<p>We used a combination of the following:</p>
					<ul>
						<li><a href="http://arduino.cc/en/main/software" title="Arduino IDE">Arduino IDE 1.5x for Yun</a></li>
						<li>We used uhttpd which is already on the Yun</li>
						<li><a href="https://www.archlinux.org/" title="Pi operating system">Operating System for Pi - Arch Linux</a></li>
						<li><a href="https://www.ffmpeg.org/" title="Camera program for Pi">Camera program for Pi - FFMPEG</a></li>
						<li><a href="http://sourceforge.net/adobe/smp/home/Strobe%20Media%20Playback/" title="Adobe RTMP Plugin">Adobe Plugin for RTMP Streaming</a></li>
						<li><a href="http://nginx.org/" title="Nginx">NGINX web server for Pi</a></li>
						<li><a href="https://github.com/arut/nginx-rtmp-module/wiki/Directives" title="NGINX RTMP module">Nginx RTMP module</a></li>
					</ul>	
					<img class="img-responsive" src="/images/working1.jpg" alt="Christian Angelo and Nick Stalter working on programming"> 
				</div>
			</div>
		</div>
	</div>
	<i class="fa fa-plus fa-5x"></i>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title">3D Printed Parts</h1>
					</div>
					<div class="panel-body">
					<p>We incorporated a lot of 3D printed parts thanks to [Fuse]Chicken. These parts allowed us to develop custom pieces using plastic instead of metal, which saves time and money.</p>
					<p>Some pictures of us at [Fuse]Chicken!</p>
					 <img class="img-responsive" src="/images/fusechicken1.jpg" alt="Nick Stalter and Matt Rich looking at MakerBot 2 at Fuse Chicken">
					 <p>Jon Fawcett showing us the ropes!</p>
					 <img class="img-responsive" src="/images/fusechicken2.jpg" alt="Jon Fawcett of Fuse Chicken with 3D printer">
					<p>List of parts that are 3D printed:</p>
					<ul>
						<li>Camera Case for Raspberry Pi</li>
						<li>Camera Mount for Raspberry Pi</li>
						<li>Motor Mounts</li>
						<li>Motor Supports</li>
						<li>Marking Mechanism Dispenser</li>
						<li>Marking Mechanisn Clamp</li>
						<li>Marking Mechanism Supports</li>
						<li>Wheel Hub Shafts</li>
						<li>Wheel Hub Shaft Locks</li>
						<li>wheel hub Shaft Spacers</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<i class="fa fa-plus fa-5x"></i>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title">Mechanical Parts</h1>
					</div>
					<div class="panel-body">
					<p>Everything else that could not be affordably 3D printed were purchased or custom made through the help of Ron Rich and Mike Maczuzak/SmartShape Design</p>
					<img class="img-responsive" src="/images/working2.jpg" alt="Matt Rich working with his dad, Ron Rich">
					<p>Some pictures of us working with Ron Rich</p>					 
					 <img class="img-responsive" src="/images/working6.jpg" alt="Darrell Pappa working with Ron Rich">
					 <p>Working hard while still having fun</p>
					 <img class="img-responsive" src="/images/working5.jpg" alt="LifeSweeper working">
					<p>List of non 3D printed parts:</p>
					<ul>
						<li>Car Body</li>
						<li>Wheels and Rims</li>
						<li>Acrylic Mounts</li>
						<li>Drive Belt</li>
						<li>Metal Detector</li>
						<li>Rotating Plate</li>
						<li>Axels</li>
						<li>Wheel Mounts</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<i class="fa fa-plus fa-5x"></i>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title">Final Thoughts</h1>
					</div>
					<div class="panel-body">
					<p>Coming Soon! </p>
					<p>Given more resources, what would we like to accomplish</p>
				</div>
			</div>
		</div>
	</div>
</div>
        
<?php require __DIR__.'/includes/footer.php'; ?>