<?php
require_once '../includes/main.connect.php';
require_once '../includes/main.includes.php';
myheader();
?>

<body>
  <div class="middle-section">
    <div class="container-fluid">
      <div class="col-md-12">
        <form action="sie.main.registration.php" method="GET">
          <div class="form-group row">
            <label for="sia-ptc-name" class="col-4 col-form-label">PTC Name</label>
            <div class="col-8">
              <select id="sia-ptc-name" name="sia-ptc-name" required="required" class="custom-select" aria-describedby="sia-ptc-nameHelpBlock">
                <option value="unknown">Choose PTC name</option>
              </select>
              <span id="sia-ptc-nameHelpBlock" class="form-text text-muted">Polytechnic (PTC)</span>
            </div>
          </div>
          <div class="form-group row">
            <label for="sia-ptc-occupation" class="col-4 col-form-label">Occupation</label>
            <div class="col-8">
              <select id="sia-ptc-occupation" name="sia-ptc-occupation" class="custom-select" required="required" multiple="multiple">
                <option value="unknown">Choose Occupation</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<?php
myfooter();
?>