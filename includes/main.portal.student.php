<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/main.includes.php';;
myheader();
?>

<body class="login">
    <div class="middle-section">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="col-md-6" style="text-align: justify;height:500px; padding:20px; border:1px solid #c7c7c7;">
                    <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                        <h1 style="font-size: 3rem;"><i class="fa fa-graduation-cap"></i>&nbsp;Student Portal</h1>
                        <div class="form-group row">
                            <label for="select" class="col-4 col-form-label">Select</label>
                            <div class="col-8">
                                <select id="student-portal-select" name="select" class="custom-select form-control">
                                    <option value="000">Select Your Polytechnic College</option>
                                    <?
                                    global $lang;
                                    $sql = "SELECT * FROM ptc_name ORDER BY name";
                                    $data = $connect->query($sql);
                                    $total = $data->rowCount();
                                    foreach ($data as $row) {
                                        echo '<option value="' . $row["logo"] . '">' . $_TXT[$row['name']] . '&nbsp;[' . $row["logo"] . ']</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-4 col-form-label">Email</label>
                            <div class="col-8">
                                <input type="email" class="form-control" name="userID" placeholder="" required="" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="text" class="col-4 col-form-label">Password</label>
                            <div class="col-8">

                                <input type="password" class="form-control" name="userPassword" placeholder="" required="" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" value="submit" class="btn btn btn-primary">
                                    Login
                                </button>
                            </div>
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