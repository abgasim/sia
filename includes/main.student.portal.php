<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/main.includes.php';;
myheader();
?>

<body class="login">
    <div class="middle-section">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="col-md-6" style="text-align: justify;height:500px; padding:20px">
                    <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                        <h1>Student Portal</h1>
                        <div>
                            <input type="email" class="form-control" name="userID" placeholder="email" required="" />
                        </div>
                        <br>
                        <div>
                            <input type="password" class="form-control" name="userPassword" placeholder="Password" required="" />
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
    </div>
</body>
<?php
myfooter();
?>