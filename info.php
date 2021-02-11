<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitter</title>
    <?php include('layouts/loadCss.php'); ?>
</head>

<body>
    <div class="row">
        <div class="nav-container">
            <nav>
                <div class="logo">
                    <a href="#"><img src="assets/img/nav-logo.png"></a>
                </div>
            </nav>
        </div>

        <div class="col-md-2">
            <div class="nav-sidebar-container">
                <ul>
                    <li>
                        <a href="index.php"><img class="nav-sidebar-icon" src="assets/img/home.svg"></img>
                            หน้าหลัก</a>
                    </li>
                    <li>
                        <a href="mood.php"><img class="nav-sidebar-icon" src="assets/img/smile.svg"></img> ประเมินอารมณ์</a>
                    </li>
                    <li>
                        <a href="calendar.php"><img class="nav-sidebar-icon" src="assets/img/carendar.svg"></img> ปฏิทิน</a>
                    </li>
                    <li>
                        <a href="timer.php"><img class="nav-sidebar-icon" src="assets/img/clock.svg"></img> จับเวลาทำงาน</a>
                    </li>
                    <li>
                        <a class="active" href="info.php"><img class="nav-sidebar-icon" src="assets/img/info.svg"></img> ความช่วยเหลือ</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row-10 fade-in">
                <img src="assets/img/dev-process.png" style="margin-left: 50%; padding-top: 3.45%;">

                <h1 style="color: white; margin-left: 40%; padding-top: 2.4%;">หน้าเพจนี้กำลังอยู่ในระหว่างการพัฒนา!</h1>
                <h1 style="color: white; margin-left: 32%; padding-top: 2.4%;">สามารถพบกับโฉมหน้าใหม่ของหน้าเพจนี้ได้ในเร็ว ๆ นี้! ;)</h1>
            </div>
        </div>
    </div>

    <?php include('layouts/loadJs.php'); ?>
</body>

</html>