<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shitblox Planet!!!</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body onload="myMove()">
    <div style="margin-left: 37.5%;">
        <!--
        <p>
          <button onclick="myMove()" class="rainbow-button" alt="Button">
            Moon go Spinny
          </button>
        </p>
        <p>
          <button onclick="stop()" class="stop-button" alt="Button">
            Stop
          </button>
        </p>
        -->
        <!-- ignore this, it's not used -->
        <div id="container">
          <div id="animate" style="position: relative">
            <b><h2 style="text-align: left; color: white; font-size: 1vw; text-shadow: 5px 5px black">Shitblox Planet</h2></b>
            <img src="/images/shimoon.png" style="max-width: 100%" />
          </div>
        </div>
		<!-- Images sourced from Wikimedia commons-->
      </div>
      <div id="earth"></div>
    <script>
      function myMove() {
        const container = document.getElementById("container");
        const box = document.getElementById("animate");
        let t = setInterval(move, 1);
        let pos = 1;
        let test = true;
        let zdex = "2";

        function move() {
          box.style.left = `${pos}px`;
          box.style.top = `${pos}px`;
          if (test) {
            pos++; /* mov down */
          } else {
            pos--; /* move up */
          }
          /* update the direction when you reach the top or bottom limit*/

          if (pos >= 350) {
            test = false;
            zdown();
          } else if (pos <= -30) {
            test = true;
            zup();
          }
        }

        function zdown() {
          box.style.zIndex =
            "-10"; /* trying to make it go under the container on the way back */
        }

        function zup() {
          box.style.zIndex =
            "2"; /* trying to make it go back to it's original position for the journey across */
        }
      }
	  function stop() {
			window.stop();
		}
    </script>
  </body>
</html>