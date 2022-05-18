<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/main.includes.php';
myheader();
?>
<div class="middle-section">
    <div class="container-fluid">
        <?php
        echo "<div class='row' style='padding:20px'>";
        echo "<div class='col-md-12' >"; 

        $sql = "SELECT * FROM ptc_name ORDER BY name";
        $data = $connect->query($sql);
        $total = $data->rowCount();

        echo "<p class='h2'>Instituites found (" . $total . ")</p>";
        foreach ($data as $row) {
            echo  "<a href=./main.institutes.search.php?logo=" . $row['logo'] . ">";

            echo "<div>" . $_TXT[$row['name']];
            echo "&nbsp;[" . $row['logo'] . "]";
            echo "</div></a>";
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