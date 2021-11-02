
    <link rel="stylesheet" href="css/style.css">
	<script src="js/build/tracking-min.js"></script>
    <script src="js/build/data/face-min.js"></script>

  

        <div class="stuff" id="stuff">
          <div id="allow"> Let use the camera </div>
           <div class="container">
              <video id="video" width="620" height="360" preload autoplay loop muted></video>
			  <canvas id="canvas" width="620" height="360"></canvas>
           </div>
             
			 <input id="button" type="button" class="button" value="Распознать" />
 <br><br>
       <div class="bwWrapper">
       <canvas id="canvas2" width="80" height="120"></canvas>
       </div>
       </div>
	   
            <input id="buttonStart" type="button" class="button" value="[Шаг 2] Распознавание лица" />

	<script>
          window.onload = function(){
            var canvas = document.getElementById('canvas');
            var canvas2 = document.getElementById('canvas2');
            var video = document.getElementById('video');
            var button = document.getElementById('button');
            var allow = document.getElementById('allow');
            var buttonStart = document.getElementById('buttonStart');
            var stuff = document.getElementById('stuff');

            var context = canvas.getContext('2d');
            var context2 = canvas2.getContext('2d');
			
			//Нахождения лица
		    var tracker = new tracking.ObjectTracker('face');
                tracker.setInitialScale(1.9);
                tracker.setStepSize(2);
                tracker.setEdgesDensity(0.1);
	        //----
				
                buttonStart.style.display = 'block';

    var captureMe = function () {
      //alert(hg);
      window.scrollBy(0, 500);
      context2.drawImage(video, xx, yy, wd, 1.5 * hg, 0, 0, 80, 120);
      var base64dataUrl = canvas2.toDataURL('image/png');
      window.open(base64dataUrl);
    }

          button.addEventListener('click', captureMe);
				
          buttonStart.addEventListener('click', function(){
		  

	       buttonStart.style.display = 'none';
               stuff.style.display = 'block';
               allow.style.display = "none"; 
               button.style.display = 'block';				


              //нахождение лица		
	  tracking.track('#video', tracker, { camera: true }); 
      tracker.on('track', function(event) {

        context.clearRect(0, 0, canvas.width, canvas.height);

        event.data.forEach(function(rect) {
          xx = rect.x;
          yy = rect.y;
          wd = rect.width;
          hg = rect.height;
          context.strokeStyle = '#a64ceb';
          context.strokeRect(xx, yy, wd, hg);
          context.font = '11px Helvetica';
          context.fillStyle = "#fff";
          context.fillText('x: ' + xx + 'px', xx + wd + 5, yy + 11);
          context.fillText('y: ' + yy + 'px', xx + wd + 5, yy + 22);
        });
      });

      var gui = new dat.GUI();
      gui.add(tracker, 'edgesDensity', 0.1, 0.5).step(0.01);
      gui.add(tracker, 'initialScale', 1.0, 10.0).step(0.1);
      gui.add(tracker, 'stepSize', 1, 5).step(0.1);
     
             //-----

           });
			 	 		 				 
        };
</script>	
		