<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/sie_includes/sie.main.includes.php';;
myheader();
?>
    <div class="middle-section">
        <div class="container-fluid">
            <?php
            echo "<div class='row' style='padding:20px'>";
            echo "<div class='col-md-6' >";
            echo "<div class='row' >";
            echo "<p class='h1'>Private Instituites</p>";
            echo "</div>";
            echo "<div class='row' >";

            $sql = "SELECT * FROM institute WHERE type = 'p' ORDER BY name";
            $sql = "SELECT * FROM institute WHERE type = 'p' ORDER BY name";
            foreach ($connect->query($sql) as $row) {
                echo  "<a target='blank' href=" . $row['website'] . "><div class='col-md-12 '>" . $row['name'] . "</div></a>";
            }
            echo "</div>";
            ?>
        </div>
    </div>
</body>
<?php
myfooter();
?>