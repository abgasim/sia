<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/main.includes.php';;
myheader();
?>

<body class="login">
    <div class="middle-section">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="col-md-6" style="text-align: justify;height:500px; padding:20px">
                    <div class="col-md-4">
                        <a href="../includes/main.portal.internal.php">
                            <div>
                                <p class="h1">Internal Portal</p>
                            </div>
                        </a>
                    </div>

                    <a href="../includes/main.portal.student.php">
                        <div>
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