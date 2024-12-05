<?php
//get the index from URL
$url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url); 
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="home" role="button"><i class="fas fa-home"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item" style="display:none;">
      <div class="google_translate_element custom-control custom-switch nav-link">
        <input type="checkbox" class="custom-control-input" id="customSwLang">
        <label class="custom-control-label" for="customSwLang"><i class="fas fa-world"></i></label>
      </div>
    </li>
    <li class="nav-item">
      <div class="custom-control custom-switch nav-link">
        <input type="checkbox" class="custom-control-input" id="customSwitch1">
        <label class="custom-control-label" for="customSwitch1"><i class="fas fa-moon"></i></label>
      </div>
    </li>
    <li class="nav-item" style="display:none;">
      <a class="nav-link" href="#" role="button" data-toggle="modal" data-target="#modalQrCode">
        <i class="fas fa-qrcode"></i>
      </a>
    </li>
  </ul>
</nav>