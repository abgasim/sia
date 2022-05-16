<?php
require_once './includes/main.connect.php';
require_once './includes/main.includes.php';
myheader();
?>
  <body>
    <form>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">New Occupation</label> 
        <div class="col-8">
          <input id="text" name="text" placeholder="Add a new Occupation" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </body>
  <?php
  myfooter();
  ?>
