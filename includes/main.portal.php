<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/main.includes.php';;
myheader();
?>

<body class="login">
    <div class="middle-section">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="col-md-4">
                        <a href="../includes/main.portal.internal.php">
                            <div style="text-align: center;height:500px; padding:20px; border:1px solid #c7c7c7;">
                                <p class="h1">Internal Portal</p>
                            </div>
                        </a>
                </div>
                <div class="col-md-4">
                    <a href="../includes/main.portal.student.php">
                        <div style="text-align: center;height:500px; padding:20px; border:1px solid #c7c7c7;">
                            <p class="h1">Student Portal</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<?php
myfooter();
?>