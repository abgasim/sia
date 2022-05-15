<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/main.includes.php';
myheader();
?>
<div class="middle-section">
    <div class="container-fluid">
        <?php
        echo "<div class='row' style='padding:20px'>";

        echo "<div class='col-md-12' >";
        if (isset($_GET) && isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM ptc_name WHERE `occupation` LIKE '%" . $id . "%'";
            $data = $connect->query($sql);
            $total = $data->rowCount();
            echo '<p class="h2">Found ('.$total.') Colleges in  ' . $_GET["area"] . '</p>';
            echo '<p class="h2">';
            foreach ($data as $row) {
                echo  "<a href=./main.institutes.gov.php?logo=" . $row['logo'] . ">";
                echo $row['name']. "[" . $row['logo'] . "], ";
                echo "</a>";
            }
            echo '</p>';
        }
        echo "</div>";
        ?>

    </div>
</div>
</body>
<?php
myfooter();
?>