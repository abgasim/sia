<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/main.includes.php';
myheader();
?>
<div class="middle-section">
    <div class="container-fluid">
        <?php
        echo "<div class='row' style='padding:20px'>";

        echo "<div class='col-md-12' >";
        ///
        if (isset($_GET) && isset($_GET['logo'])) {
            $logo = $_GET['logo'];
            $sql = "SELECT * FROM ptc_name WHERE `logo` = \"" .  $logo . "\"";
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
                $lsql = "SELECT * FROM ptc_level WHERE `id` = \"" .  $row['level_id'] . "\"";
                $ldata = $connect->query($lsql);
                foreach ($ldata as $lrow) {
                    echo 'Level : <a href="./main.institutes.search.php?level=' . $lrow["id"] . '&name=' . $lrow["level"] .  '">' . $lrow["level"] . '</a></br>';                    
                }
                $ssql = "SELECT * FROM addis_subcity WHERE `id` = \"" .  $row['subcity_id'] . "\"";
                $sdata = $connect->query($ssql);
                foreach ($sdata as $srow) {
                    echo 'Location : <a href="./main.institutes.search.php?subcity_id=' . $srow["id"] . '&name=' . $srow["name"] .  '">' . $srow["name"] . '</a></br>';                    
                }
                echo 'Phone    : ' . $row['phone'] . '</br>';
                echo 'Website  : <a target="_blank" href=' . $row['website'] . '>' . $row['website'] . '</a></br>';

                echo '</p>';
                echo '<p>';
                echo map($logo);
                echo '</p>';
            }
        }
        ///
        if (isset($_GET) && isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM ptc_name WHERE `occupation` LIKE '%" . $id . "%'";
            $data = $connect->query($sql);
            $total = $data->rowCount();
            echo '<p class="h2">Found ('.$total.') Colleges in <strong>' . $_GET["area"] . '</strong></p>';
            echo '<p class="h2">';
            foreach ($data as $row) {
                
                echo  "<div><a href=./main.institutes.gov.php?logo=" . $row['logo'] . ">";
                echo $row['name']. "&nbsp;[" . $row['logo'] . "]";
                echo "</a></div>";
            }
            echo '</p>';
        }
        ///
        if (isset($_GET) && isset($_GET['level'])) {
            $id = $_GET['level'];
            $sql = "SELECT * FROM ptc_name WHERE `level_id` = " . $id;
            $data = $connect->query($sql);
            $total = $data->rowCount();
            echo '<p class="h2">Found ('.$total.') Colleges with <strong>' . $_GET["name"] . '</strong></p>';
            echo '<p class="h2">';
            foreach ($data as $row) {
                
                echo  "<div><a href=./main.institutes.gov.php?logo=" . $row['logo'] . ">";
                echo $row['name']. "&nbsp;[" . $row['logo'] . "]";
                echo "</a></div>";
            }
            echo '</p>';
        }
        ///
        if (isset($_GET) && isset($_GET['subcity_id'])) {
            $id = $_GET['subcity_id'];
            $sql = "SELECT * FROM ptc_name WHERE `subcity_id` = " . $id ;
            $data = $connect->query($sql);
            $total = $data->rowCount();
            echo '<p class="h2">Found ('.$total.') Colleges in <strong>' . $_GET["name"] . '</strong></p>';
            echo '<p class="h2">';
            foreach ($data as $row) {                
                echo  "<div><a href=./main.institutes.gov.php?logo=" . $row['logo'] . ">";
                echo $row['name']. "&nbsp;[" . $row['logo'] . "]";
                echo "</a></div>";
            }
            echo '</p>';
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