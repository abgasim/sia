<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/sie_includes/sie.main.includes.php';;
sie_header();
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

        echo "<div class='row'>";
        echo "<h1>Certification English Language Official links</h1>";
        $sql = "SELECT * FROM certification ORDER BY name";
        echo '      <table class="table">
            <thead>
              <tr>
                <th scope="col">Company</th>
                <th scope="col">Website link</th>
              </tr>
            </thead>
            <tbody>';
        foreach ($connect->query($sql) as $row) {
            echo  "
                <tr>
                  <td><img style=\"width:100px\" src='../sie_img/tests/" . $row['short_name'] . ".png'>
                  " . $row['name'] . "</td>
                  <td><a target='blank' href=" . $row['website'] . ">(" . $row['testcenter'] . ") <strong>read more ... </strong></a></td>
                </tr>";
        }
        echo '  </tbody>
                        </table>';
        echo "</div>";
        echo "<div class='row'>";
        echo "<p class='h1'>Practice Exams and Materials</p>";
        echo '<table class="table">
            <thead>
              <tr>
                <th scope="col">Company</th>
              </tr>
            </thead>
            <tbody>';

        echo "
            <tr>
            <td>
            <a target='blank' href='https://www.ielts.org/about-the-test/sample-test-questions>'><img style=\"width:100px;\" src='../sie_img/tests/ielts.png'>IELTS MATERIALS Offical Online Practice</a>
            </td>
            </tr>

            <tr>
            <td>
            <a target='blank' href='https://www.ielts-exam.net/>'><img style=\"width:100px\" src='../sie_img/tests/ielts-free.png'>Free IELTS Practice Exams</a>
            </td>
            </tr>

            <tr>
            <td>
            <a target='blank' href='https://www.4tests.com/toefl>'><img style=\"width:100px\" src='../sie_img/tests/4tests-logo.png'>FREE TOFEL and GRE 4Test</a>
            </td>
</tr>
            ";
            echo '  </tbody>
            </table>';
        echo "</div>";

        echo "<div class='row '>";
        echo "<h1>MOOC - Massive Open Online Course (e-learning)</h1>";
        $sql = "SELECT * FROM mooc ORDER BY name";
        echo '      <table class="table">
<thead>
  <tr>
    <th scope="col">Company</th>
    <th scope="col">Website link</th>
  </tr>
</thead>
<tbody>';
        foreach ($connect->query($sql) as $row) {
            echo  "
    <tr>
      <td><img style=\"width:100px\" src='../sie_img/moocs/" . $row['short_name'] . ".png'>
      " . $row['name'] . "</td>
      <td><a target='blank' href=" . $row['website'] . ">" . $row['extra_info'] . " <strong>read more ... </strong></a></td>
    </tr>";
        }
        echo '  </tbody>
            </table>';
        echo "</div>";

        echo "<div class='row'>";
        echo "<h1>Other useful links</h1>";
        $sql = "SELECT * FROM link ORDER BY name";
        foreach ($connect->query($sql) as $row) {
            echo  "<a target='blank' href=" . $row['website'] . "><div class='col-md-12'>" . $row['name'] . "</div></a>";
        }
        echo "</div>";
        echo "</div>";

        ?>
    </div>
</div>

</body>
<?php
sie_footer();
?>