<!DOCTYPE html>
<html>
<head>
  <title>Person Walking Animation</title>
  <style>
    /* Styles for the person /
    .person {
      position: relative;
      height: 150px;
      width: 100px;
    }
    / Styles for the arms and legs /
    .arm, .leg {
      position: absolute;
      height: 30px;
      width: 30px;
      background-color: black;
    }
    / Styles for the head /
    .head {
      position: absolute;
      height: 30px;
      width: 30px;
      border-radius: 50%;
      background-color: black;
    }
    / Styles for the body */
    .body {
      position: absolute;
      height: 60px;
      width: 30px;
      background-color: black;
    }
  </style>
  <script>
    // Initial positions for the arms and legs
    var armPos = 0;
    var legPos = 0;

    // Function to animate the person walking
    function animate() {
      // Get the person element
      var person = document.getElementById('person');

      // Move the arms and legs
      armPos = (armPos + 2) % 40;
      legPos = (legPos + 2) % 40;
      person.style.setProperty('--arm-pos', armPos + 'px');
      person.style.setProperty('--leg-pos', legPos + 'px');

      // Animate again after 10 milliseconds
      setTimeout(animate, 10);
    }

    // Start the animation when the page loads
    window.onload = animate;
  </script>
</head>
<body>
  <div class="person" id="person" style="--arm-pos: 0px; --leg-pos: 0px;">
    <div class="arm left" style="top: 60px; left: calc(50% - 15px);"></div>
    <div class="arm right" style="top: 60px; left: calc(50% + 15px);"></div>
    <div class="leg left" style="top: 90px; left: calc(50% - 15px);"></div>
    <div class="leg right" style="top: 90px; left: calc(50% + 15px);"></div>
    <div class="head" style="top: 30px; left: calc(50% - 15px);"></div>
    <div class="body" style="top: 60px; left: calc(50% - 15px);"></div>
  </div>
</body>
</html>
