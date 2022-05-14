<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/sie_includes/sie.main.includes.php';;
sie_header();
?>
<div class="container">
  <h2>Data Entry form</h2>
  <form action="/sie.internal.action.php" method="post">
    <div class="form-group">
      <label for="name">Institute</label>
      <select name="name" id="name" class="form-control" >
      <option value="unknown">Choose Institute</option>
      <?php
        $sql = "SELECT * FROM institute_gov ORDER BY name";
        $data = $connect->query($sql);
        foreach ($data as $row) {
            echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
        }

      ?>
      </select>
    </div>
    <div class="form-group">
      <label for="website">Website</label>
      <input type="text" class="form-control" id="website" placeholder="Enter Website" name="website">
    </div>
    <div class="form-group">
      <label for="logo">Logo</label>
      <input type="text" class="form-control" id="logo" placeholder="Enter logo" name="logo">
    </div>
    <div class="form-group">
      <label for="logo">About Us</label>
      <textarea type="text" class="form-control" rows="16" cols="50" id="aboutus" placeholder="Enter About Us" name="aboutus"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<?php
sie_footer();
?>

