<div class="qr-body">
<div class="stuff" id="stuff">
  <div id="allow"> Let use the camera </div>
   <div class="container">

	<div id="main">
		<div id="mainbody">
        
        
		   <ul class="caption-style-4">
			<li class="img-qr1" onclick="setwebcam()">
				<img src="pic/qr/vid.png" alt="" >
				<div class="caption">
					<div class="blur"></div>
					<div class="caption-text">
						<h1>Использовать</h1>
						<p>Web-камеру</p>
					</div>
				</div>
			</li>
			<li class="img-qr2" onclick="setimg()">
				<img src="pic/qr/cam.png" alt="" >
				<div class="caption">
					<div class="blur"></div>
					<div class="caption-text">
						<h1>Использовать</h1>
						<p>Картинку</p>
					</div>
				</div>
			</li>
           </ul>
			 
									
											<div id="outdiv">
												<video id="v" autoplay src=" "></video>
											</div>
									
								
						
					<div id="result"></div>
	
		</div>
		&nbsp;
		<div id="footer">
		<h5 align="center">
			</h5>
	
		</div>
	</div>
	<canvas id="qr-canvas" width="800" height="600"
		style="width: 800px; height: 600px;"></canvas>
 </div>
</div>
<input id="buttonStart" type="button" class="qr-button" value="Просканировать ваш QR-code" />
</div>
<script>
window.onload = function(){
            var buttonStart = document.getElementById('buttonStart');
            var stuff = document.getElementById('stuff');
            var allow = document.getElementById('allow');

            buttonStart.style.display = 'block';			
}

buttonStart.addEventListener('click', function(){
			   buttonStart.style.display = 'none';
               stuff.style.display = 'block';
               allow.style.display = "none"; 
			   initCanvas(800, 600);
               qrcode.callback = read;
		       document.getElementById("mainbody").style.display="inline";
			   setimg();
 });
</script>
