<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/sie.main.includes.php';
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

        echo "<p class='h2'>Instituites found (".$total.")</p>";
        foreach ($data as $row) {
            echo  "<a href=./sie.main.institutes.gov.php?logo=" . $row['logo'] .">";

            echo "<div>".$row['name'] ;
            echo "[" . $row['logo'] . "]";
            echo "</div></a>";
        }
        echo "</div>";

        echo "<div class='col-md-6' >";
        if(isset($_GET) && isset($_GET['logo']))
        {
            $shortName = $_GET['logo'];
            $sql = "SELECT * FROM ptc_name WHERE logo = ".  $shortName;
            $data = $connect->query($sql);
            $total = $data->rowCount();

            foreach ($data as $row) {
            echo '<p class="h1"><i class="fa fa-institution">'.$row["name"]."  [" . $row['logo'] . "]".'</i></p>';
            echo '<p class="h2">About</p>
            <p class="h2">'.$row['aboutus'].'</p>';
            echo '<p class="h2">Website : <a target="_blank" href='.$row['website'].'>'.$row['website'].'</a></p>';
            ///
            echo "crashing here ....";
            $occupationList = explode(',', $row['occupation']);
            $sqlCondition = "";
            foreach ($occupationList as $list) {
                $sqlCondition .="`id` = $list";
                $sqlCondition .=" OR ";
            }
            $sqlCondition = substr($sqlCondition, 0, -3);
            echo "crashing here ....";
            echo $sqlCondition;

            $sql2 = "SELECT * FROM ptc_occupation WHERE " . $sqlCondition;
            echo $sql2;
            $data2 = $connect->query($sql2);
            $total2 = $data2->rowCount();
            echo "crashing here ....";

            foreach ($data2 as $row2) {
                echo $row2['area'];
            }
            echo "crashing here ....";


            echo '<p class="h2">Programs</p>';
            echo '<p class="h2">Bachelors (Under graduate - UG )
            <span><a href="#">coming soon</a></span>
            </p>';
            echo '<p class="h2">Masters
            <span><a href="#">coming soon</a></span>
            </p>';
            echo '<p class="h2">PhDs
            <span><a href="#">coming soon</a></span>
            </p>';
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
