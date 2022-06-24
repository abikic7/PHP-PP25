<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php require_once 'zaglavlje.php'; ?>
  </head>
<body>
    <div class="grid-container">
    <?php include_once 'izbornik.php'; ?>
    <!-- Start tijelo -->
    <div class="grid-x grid-margin-x" id="tijelo">
      <div class="cell">
        <div class="callout">
          Vježbanje foundationa
        </div>
      </div>
    </div>

    <form data-abide novalidate>
  <div class="grid-x grid-margin-x">
    <div class="cell">
      <div data-abide-error class="alert callout" style="display: none;">
        <p><i class="fi-alert"></i> There are some errors in your form.</p>
      </div>
    </div>
  </div>
  <div class="grid-x grid-margin-x">
    <div class="cell small-12">
      <label>Traženi broj
        <input type="text" placeholder="1234" aria-describedby="exampleHelpTextNumber" required pattern="number">
        <span class="form-error">
          Yo, you had better fill this out, it's required.
        </span>
      </label>
      <p class="help-text" id="exampleHelpTextNumber">Here's how you use this input field!</p>
    </div>
    <div class="cell small-12">
      <label>Nepotrebno polje!
        <input type="text" placeholder="Use me, or don't" aria-describedby="exampleHelpTextNothing" data-abide-ignore>
      </label>
      <p class="help-text" id="exampleHelpTextNothing">This input is ignored by Abide using `data-abide-ignore`</p>
    </div>
    <div class="cell small-12">
      <label>Potrebna loznika
        <input type="password" id="password" placeholder="bikan123" aria-describedby="exampleHelpTextPassword" required >
        <span class="form-error">
          I'm required!
        </span>
      <p class="help-text" id="exampleHelpTextPassword">Enter a password please.</p>
      </label>
    </div>
    <div class="cell small-12">
      <label>Ponovi lozinku
        <input type="password" placeholder="bikan123" aria-describedby="exampleHelpText2" required pattern="alpha_numeric" data-equalto="password">
        <span class="form-error">
          Hey, passwords are supposed to match!
        </span>
      </label>
      <p class="help-text" id="exampleHelpText2">This field is using the `data-equalto="password"` attribute, causing it to match the password field above.</p>
    </div>
  </div>
  <div class="grid-x grid-margin-x">
    <div class="cell medium-6">
      <label>URL Pattern, not required, but throws error if it doesn't match the Regular Expression for a valid URL.
        <input type="text" placeholder="http://ucenjephp.hr/Z04.php" pattern="url">
      </label>
    </div>
    <div class="cell medium-6">
      <label>Europski Auti, Odaberi jedan, može nasumično.
        <select id="select" required>
          <option value=""></option>
          <option value="volvo">Volvo</option>
          <option value="škoda">Škoda</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select>
      </label>
    </div>
  </div>
  <div class="grid-x grid-margin-x">
    <fieldset class="cell medium-6">
      <legend>Odaberi favorita,obavezno.</legend>
      <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Crveni</label>
      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue" required><label for="pokemonBlue">Plavi</label>
      <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Žuti</label>
    </fieldset>
    <fieldset class="cell medium-6">
      <legend>Odaberi favorita,nije obavezno.</legend>
      <input type="radio" name="pockets" value="Red" id="pocketsRed"><label for="pocketsRed">Crveni</label>
      <input type="radio" name="pockets" value="Blue" id="pocketsBlue"><label for="pocketsBlue">Plavi</label>
      <input type="radio" name="pockets" value="Yellow" id="pocketsYellow"><label for="pocketsYellow">Žuti</label>
    </fieldset>
    <fieldset class="cell medium-6">
      <legend>Baci pogled na ove</legend>
      <input id="checkbox1" type="checkbox"><label for="checkbox1">Provjera 1</label>
      <input id="checkbox2" type="checkbox" required><label for="checkbox2">Provjera 2</label>
      <input id="checkbox3" type="checkbox"><label for="checkbox3">Provjera 3</label>
    </fieldset>
  </div>
  <div class="grid-x grid-margin-x">
    <fieldset class="cell medium-6">
      <button class="button" type="submit" value="Submit">Submit</button>
    </fieldset>
    <fieldset class="cell medium-6">
      <button class="button" type="reset" value="Reset">Reset</button>
    </fieldset>
  </div>

  <ul class="vertical menu" data-accordion-menu>
  <li>
    <a href="#0">Auti</a>
    <ul class="menu vertical nested is-active">
      <li>
        <a href="#0"> Marke</a>
        <ul class="menu vertical nested">
          <li><a href="#0">Škoda</a></li>
          <li><a href="#0">Audi</a></li>
          <li><a href="#0">Bwm</a></li>
        </ul>
     
  <li>
    <a href="#0">Motor</a>
    <ul class="menu vertical nested">
      <li><a href="#0">Dizel</a></li>
      <li><a href="#0">Benzin</a></li>
    </ul>
  </li>
  <li><a href="#0">Tip</a>
</li>
</ul>

<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="#0">Početna</a></li>
    <li><a href="#0">Karakteristike</a></li>
    <li class="disabled">Gene Splicing</li>
    <li>
      <span class="show-for-sr">Current: </span> Cloning
    </li>
  </ul>
</nav>

<a href="#0" class="button">Nauči više</a>
<a href="#features" class="button">Pogledaj sve karakteristike</a>

<!-- Buttons (actions) -->
<button type="button" class="success button">Spremi</button>
<button type="button" class="alert button">Obriši</button>

<div class="callout" data-closable>
  <button class="close-button" aria-label="Close alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
  <p>Zatvori.</p>
</div>



<img data-interchange="[assets/img/interchange/small.jpg, small], [assets/img/interchange/medium.jpg, medium], [assets/img/interchange/large.jpg, large]" src="#" alt="">

<div class="media-object">
  <div class="media-object-section">
    <img src= "https://www.tportal.hr/media/thumbnail/w1000/1640338.jpeg" alt="">
  </div>
  <div class="media-object-section">
    <h4>ŠKODA FABIA.</h4>
    <p>Monte Carlo,brm brm brmmmmmmmmm.</p>
  </div>
</div>

</form>
    <!-- End tijelo -->
    <?php 
    
    require_once 'podnozje.php'; ?>
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>