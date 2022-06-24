<?php


// Stranica ispisuje 
// Shaquille O'Neal 
// koristeći echo funckciju s jednostrukim navodnicima ' ?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php require_once 'zaglavlje.php'; ?>
  </head>
<body>
<div class="callout" data-closable>
  <button class="close-button" aria-label="Close alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
  <p>This is a close button example.</p>
</div>


<div class="callout">
  <h5>This is a callout.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#0">It's dangerous to go alone, take this.</a>
</div>

<div class="callout primary">
  <h5>This is a primary callout.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#0">It's dangerous to go alone, take this.</a>
</div>

<div class="callout secondary">
  <h5>This is a secondary callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#0">It's dangerous to go alone, take this.</a>
</div>

<div class="callout success">
  <h5>This is a success callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#0">It's dangerous to go alone, take this.</a>
</div>

<div class="callout warning">
  <h5>This is a warning callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#0">It's dangerous to go alone, take this.</a>
</div>

<div class="callout alert">
  <h5>This is an alert callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#0">It's dangerous to go alone, take this.</a>
</div>
  <!-- Anchors (links) -->
<a href="#0" class="button">Learn More</a>
<a href="#features" class="button">View All Features</a>

<!-- Buttons (actions) -->
<button type="button" class="success button">Save</button>
<button type="button" class="alert button">Delete</button>

<a class="tiny button" href="#0">So Tiny</a>
<a class="small button" href="#0">So Small</a>
<a class="large button" href="#0">So Large</a>
<a class="expanded button" href="#0">Such Expand</a>
<div class="button-group">
  <a class="button">One</a>
  <a class="button">Two</a>
  <a class="button">Three</a>
</div>

<ul class="vertical menu" data-drilldown style="width: 200px" id="m1">
  <li>
    <a href="#0">Item 1</a>
    <ul class="vertical menu" id="m2">
      <li>
        <a href="#0">Item 1A</a>
        <ul class="vertical menu" id="m3">
          <li><a href="#0">Item 1Aa</a></li>
          <li><a href="#0">Item 1Ba</a></li>
          <li><a href="#0">Item 1Ca</a></li>
          <li><a href="#0">Item 1Da</a></li>
          <li><a href="#0">Item 1Ea</a></li>
        </ul>
      </li>
      <li><a href="#0">Item 1B</a></li>
      <li><a href="#0">Item 1C</a></li>
      <li><a href="#0">Item 1D</a></li>
      <li><a href="#0">Item 1E</a></li>
    </ul>
  </li>
  <li>
    <a href="#0">Item 2</a>
    <ul class="vertical menu">
      <li><a href="#0">Item 2A</a></li>
      <li><a href="#0">Item 2B</a></li>
      <li><a href="#0">Item 2C</a></li>
      <li><a href="#0">Item 2D</a></li>
      <li><a href="#0">Item 2E</a></li>
    </ul>
  </li>
  <li>
    <a href="#0">Item 3</a>
    <ul class="vertical menu">
      <li><a href="#0">Item 3A</a></li>
      <li><a href="#0">Item 3B</a></li>
      <li><a href="#0">Item 3C</a></li>
      <li><a href="#0">Item 3D</a></li>
      <li><a href="#0">Item 3E</a></li>
    </ul>
  </li>
  <li><a href='#0'> Item 4</a></li>
</ul>

<div class="callout clearfix">
  <a class="button float-left">Left</a>
  <a class="button float-right">Right</a>
</div>

<div class="slider" data-slider data-initial-start="50" data-end="200">
  <span class="slider-handle"  data-slider-handle role="slider" tabindex="1"></span>
  <span class="slider-fill" data-slider-fill></span>
  <input type="hidden">
</div>

<div class="slider vertical" data-slider data-initial-start="25" data-end="200" data-vertical="true">
  <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
  <span class="slider-fill" data-slider-fill></span>
  <input type="hidden">
</div>

<div class="slider" data-slider data-initial-start="25" data-initial-end="75">
  <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
  <span class="slider-fill" data-slider-fill></span>
  <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
  <input type="hidden">
  <input type="hidden">
</div>

<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Site Title</li>
      <li class="has-submenu">
        <a href="#0">One</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#0">One</a></li>
          <li><a href="#0">Two</a></li>
          <li><a href="#0">Three</a></li>
        </ul>
      </li>
      <li><a href="#0">Two</a></li>
      <li><a href="#0">Three</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>
          
<span class="primary badge">1</span>
<span class="secondary badge">2</span>
<span class="success badge">3</span>
<span class="alert badge">A</span>
<span class="warning badge">B</span>
    <div class="grid-container">
    <?php include_once 'izbornik.php'; ?>
    <!-- Start tijelo -->
    <div class="grid-x grid-margin-x" id="tijelo">
      <div class="cell">
        <div class="callout">
          
          <?php 
          echo "Shaquille O'Neal";

          ?>


        </div>
      </div>
    </div>
    <!-- End tijelo -->
    <?php 
    
    require_once 'podnozje.php'; ?>
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>