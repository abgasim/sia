<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/main.includes.php';;
myheader();
?>
    </div>
    </div>
    <div class="middle-section">
        <div class="container-fluid">
            <?php
            $sql = "UPDATE counter SET visit = visit+1 WHERE id = 1";
            $connect->query($sql);

            $sql = "SELECT visit FROM counter WHERE id = 1";
            $result = $connect->query($sql);
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $visits = $row["visit"];
                }
            } else {
                echo "no results";
            }


            echo "<div class='col-md-12'>";


            echo "<div class='row box'>";
            echo "<h1>Scholarships and official websites to study in Europe and USA</h1>";
            $sql = "SELECT * FROM scholarship ORDER BY name ";
echo '      <table class="table">
<thead>
  <tr>
    <th scope="col">Country</th>
    <th scope="col">Website link</th>
  </tr>
</thead>
<tbody>';
            foreach ($connect->query($sql) as $row) {
                echo  "
    <tr>
      <td><img style=\"width:30px\" src='../sie_img/scholarships/country/" . $row['short_name'] . ".png'>
      ".$row['name'] ."</td>
      <td><a target='blank' href=". $row['website'] .">". $row['website'] ."</a></td>
    </tr>";
            }
            echo '  </tbody>
            </table>';
            echo "</div>";

            ?>
        </div>
    </div>

    </body>
<?php
myfooter();
?>