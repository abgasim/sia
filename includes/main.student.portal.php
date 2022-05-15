<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/main.includes.php';;
myheader();
?>
<body class="login">
    <div class="middle-section">
        <div class="container-fluid">
            <div class="col-md-4" style="padding: 30px; border:1px solid #c7c7c7; margin:20px;">
            <form class="form-horizontal" action="./production/index1.php" method="post" enctype="multipart/form-data">
                <h1>Student Portal</h1>
                <p class="h6 text-muted">Email</p>
                <div>
                    <input type="email" class="form-control" name="employeeID" placeholder="email" required="" />
                </div>
                <br>
                <div>
                    <input type="password" class="form-control" name="employeePassword" placeholder="Password" required="" />
                </div>
                <br>
                <div>
                    <button name="submit" type="submit" value="submit" class="btn btn btn-primary">
                        Login
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
<?php
myfooter();
?>