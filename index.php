<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitter</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php include('connectsql.php') ; ?>


    <!-- Header -->
    <div class="nav-container">
        <nav>
            <div class="logo">
                <a href="#"><img src="assets/img/nav-logo.png"></a>
            </div>
        </nav>
    </div>
<!-- End Header -->

    <div class="container">
        <div class="row">
            <div class="col-md-3" style="height: 100vh;">
                    <ul class="sidebar list-unstyled">
                        <li>
                            <a class="active" href="index.php"><img class="nav-sidebar-icon"
                                    src="assets/img/home.svg"></img>
                                หน้าหลัก</a>
                        </li>
                        <li>
                            <a href="mood.php"><img class="nav-sidebar-icon" src="assets/img/smile.svg"></img>
                                ประเมินอารมณ์</a>
                        </li>
                        <li>
                            <a href="calendar.php"><img class="nav-sidebar-icon" src="assets/img/carendar.svg"></img>
                                ปฏิทิน</a>
                        </li>
                        <li>
                            <a href="timer.php"><img class="nav-sidebar-icon" src="assets/img/clock.svg"></img>
                                จับเวลาทำงาน</a>
                        </li>
                        <li>
                            <a href="info.php"><img class="nav-sidebar-icon" src="assets/img/info.svg"></img>
                                ความช่วยเหลือ</a>
                        </li>
                    </ul>
                </div>
            </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card col-8" style="background: #2C2C2C;
    border-radius: 29.2452px; color:white; margin-left:50%; margin-top: 50px;">
                                <div class="card-body text-center">
                                    <blockquote class="blockquote mb-0">
                                        <h1>ยินดีต้อนรับ</h1>
                                        <p>ตอนนี้คุณรู้สึกอย่างไรบ้าง?</p>
                                        <footer class="form-text text-muted">(ให้คะแนนอารมณ์ของคุณ 0 - 10)
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="col-12 text-center">
                                    <input type="image" src="assets/img/0.png" data-toggle="modal"
                                        data-target="#myModal" alt="Submit" id="0" width="48" height="48">
                                    <input type="image" src="assets/img/1.png" data-toggle="modal"
                                        data-target="#myModal" alt="Submit" id="1" width="48" height="48">
                                    <input type="image" src="assets/img/2.png" data-toggle="modal"
                                        data-target="#myModal" alt="Submit" id="2" width="48" height="48">
                                    <input type="image" src="assets/img/3.png" data-toggle="modal"
                                        data-target="#myModal" alt="Submit" id="3" width="48" height="48">
                                    <input type="image" src="assets/img/4.png" data-toggle="modal"
                                        data-target="#myModal" alt="Submit" id="4" width="48" height="48">
                                    <input type="image" src="assets/img/5.png" data-toggle="modal"
                                        data-target="#myModal" alt="Submit" width="48" height="48">
                                    <input type="image" src="assets/img/6.png" data-toggle="modal"
                                        data-target="#myModal" alt="Submit" width="48" height="48">
                                    <input type="image" src="assets/img/7.png" data-toggle="modal"
                                        data-target="#myModal" alt="Submit" width="48" height="48">
                                    <input type="image" src="assets/img/8.png" data-toggle="modal"
                                        data-target="#myModal" alt="Submit" width="48" height="48">
                                    <input type="image" src="assets/img/9.png" data-toggle="modal"
                                        data-target="#myModal" alt="Submit" width="48" height="48">
                                    <input type="image" src="assets/img/10.png" data-toggle="modal"
                                        data-target="#myModal" alt="Submit" width="48" height="48">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        



        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ยืนยันข้อมูล</h4>
                    </div>
                    <div class="modal-body">
                        <p>บันทึกข้อมูลสำเร็จ</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>