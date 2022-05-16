<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/main.includes.php';
myheader();
?>
<div class="middle-section">
    <div class="container-fluid">
        <?php
        echo "<div class='row' style='padding:20px'>";

        echo "<div class='col-md-12' >";
        echo "<div class='col-md-6' >";

        $sql = "SELECT * FROM ptc_name ORDER BY name";
        $data = $connect->query($sql);
        $total = $data->rowCount();

        echo "<p class='h2'>Instituites found (" . $total . ")</p>";
        foreach ($data as $row) {
            echo  "<a href=./main.institutes.gov.php?logo=" . $row['logo'] . ">";

            echo "<div>" . $row['name'];
            echo "&nbsp;[" . $row['logo'] . "]";
            echo "</div></a>";
        }
        echo "</div>";

        echo "<div class='col-md-6' >";
        if (isset($_GET) && isset($_GET['logo'])) {
            $shortName = $_GET['logo'];
            $sql = "SELECT * FROM ptc_name WHERE `logo` = \"" .  $shortName . "\"";
            $data = $connect->query($sql);
            $total = $data->rowCount();

            foreach ($data as $row) {
                echo '<p class="h2"><i class="fa fa-institution">&nbsp;' . $row["name"] . "  [" . $row['logo'] . "]" . '</i></p>';
                
                ///
                $occupationList = explode(',', $row['occupation']);
                $sqlCondition = "";
                foreach ($occupationList as $list) {
                    $sqlCondition .= "`id` = $list";
                    $sqlCondition .= " OR ";
                }
                $sqlCondition = substr($sqlCondition, 0, -3);

                $sql2 = "SELECT * FROM ptc_occupation WHERE " . $sqlCondition;
                $data2 = $connect->query($sql2);
                $total2 = $data2->rowCount();

                echo '<p class="h2">Available Programs</p>';
                $courses = "";
                foreach ($data2 as $row2) {
                    echo '<a href="./main.institutes.search.php?id=' . $row2["id"] . '&area=' . $row2["area"] . '">' . $row2["area"] . ',</a>&nbsp;&nbsp;';
                }

                echo '<p class="h2">About</p>';
                echo '<p class="h2">' . $row['aboutus'] . '</p>';
                echo '<p class="h2">Address</p>';
                echo '<p class="h4">';
                $lsql = "SELECT * FROM ptc_level WHERE `id` = \"" .  $row['level'] . "\"";
                $ldata = $connect->query($lsql);
                echo 'Level : ' . $ldata['level'] .'</br>';
                echo 'Location : ' . $row['subcity'] .'</br>';
                echo 'Phone    : ' . $row['phone'] . '</br>';
                echo 'Website  : <a target="_blank" href=' . $row['website'] . '>' . $row['website'] . '</a></br>';
                echo'</p>';

            }
        }
        echo "</div>";
        echo "</div>";
        ?>

    </div>
</div>
</body>
<?php
myfooter();
?>