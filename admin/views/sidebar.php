<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation.min.css"
        crossorigin="anonymous">

    <!-- foundation-float.min.css: Compressed CSS with legacy Float Grid -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation-float.min.css"
        crossorigin="anonymous">

    <!-- foundation-prototype.min.css: Compressed CSS with prototyping classes -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation-prototype.min.css"
        crossorigin="anonymous">

    <!-- foundation-rtl.min.css: Compressed CSS with right-to-left reading direction -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation-rtl.min.css"
        crossorigin="anonymous">

</head>

<body>


<button type="button" class="button" data-toggle="offCanvasLeft1">Open Left</button>
<button type="button" class="button" data-toggle="offCanvasRight1">Open Right</button>
<button type="button" class="button" data-toggle="offCanvasTop1">Open Top</button>
<button type="button" class="button" data-toggle="offCanvasBottom1">Open Bottom</button>

<div class="cell">
  <div class="off-canvas-wrapper">
    <div class="off-canvas position-left" id="offCanvasLeft1" data-off-canvas>
      <!-- Your menu or Off-canvas content goes here -->
    </div>
    <div class="off-canvas position-right" id="offCanvasRight1" data-off-canvas>
      <!-- Your menu or Off-canvas content goes here -->
    </div>
    <div class="off-canvas position-top" id="offCanvasTop1" data-off-canvas>
      <!-- Your menu or Off-canvas content goes here -->
    </div>
    <div class="off-canvas position-bottom" id="offCanvasBottom1" data-off-canvas>
      <!-- Your menu or Off-canvas content goes here -->
    </div>
    <div class="off-canvas-content" data-off-canvas-content>
      <img src="https://placehold.it/300x300" class="" height="" width="" alt="">
    </div>
  </div>
</div>
    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js"
        crossorigin="anonymous"></script>
</body>


</html>