<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/main.includes.php';;
myheader();
?>
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

            $documnetRootPath = $_SERVER['DOCUMENT_ROOT'];
            require_once $documnetRootPath . '/main.connect.php';


            echo "<div class='row' style='padding:20px'>";
            echo "<div class='col-md-8' >";
            echo "<div class='row' >";
            echo "<div class='col-md-5' >";
            echo "<p class='h1'>Governmental Instituites</p>";
            echo "</div>";
            echo "<div class='col-md-5' >";
            echo "<p class='h1'>Private Instituites</p>";
            echo "</div>";
            echo "</div>";

            echo "<div class='row' >";
            echo "<div class='col-md-5 box' style=''>";

            $sql = "SELECT * FROM institute WHERE website <> 'http://www.studyinethiopia.com' AND type = 'g' ORDER BY name";
            foreach ($connect->query($sql) as $row) {
                echo  "<a target='blank' href=" . $row['website'] . "><div class='col-md-12'>
                    <div class='col-md-10'>"
                    . $row['name'] . "</div> <div class='col-md-2' style='text-align: left;'> [" . $row['logo'] . "]</div>
                    </div></a>";
            }
            echo "</div>";


            echo "<div class='col-md-5 box'  style=''>"; //height:400px;overflow: scroll;

            $sql = "SELECT * FROM institute WHERE type = 'p' ORDER BY name";
            foreach ($connect->query($sql) as $row) {
                echo  "<a target='_blank' href=" . $row['website'] . "><div class='col-md-12 '>" . $row['name'] . "</div></a>";
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