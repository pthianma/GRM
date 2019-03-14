<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <!-- InsertCss -->
    <?php include_once('insertCss.php'); ?>
</head>
<body class="Ebody">
<!-- navbar --><?php include_once('header.php'); ?>
<!-- body -->
    
    <!-- picslide -->
    <div class="container " >
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1536939459926-301728717817?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&h=900&q=80" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1513420558496-c3e2534de0ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&h=900&q=80" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1538208838829-5e7ddd2607cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&h=900&q=80" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1536053414697-007fa93e0a99?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&h=900&q=80" alt="Forth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            
            <div class="carousel-caption d-none d-md-block text-right ">
                <div class="text-shadow">
                    <h2 bi>Welcome to the website</h2>
                    <h1 class="display-4"><b>Green Refund Machine</b></h1>
                    <h2>เว็บไซต์สำหรับตรวจสอบยอดเงินของการออมเงินในรูปแบบของการเปลี่ยนขวดน้ำพลาสติกเป็นเงิน!!</h2>
                </div>
                
                <p class="lead">
                    <a class="btn btn-success btn-lg" href="loginUser.php" role="button"> Check Reward </a>
                </p>    
            </div>
        </div>
        
    <div class="container contbg">
    <br />
    <!-- Three columns of text below the carousel -->
        <div class="row text-center ">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="./image/3icon1.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>สิ่งแล้วล้อม</h2>
                    <p>ช่วยเสริมสร้างจิตใจที่รักษ์สิ่งแวดล้อม</p>
                    <!-- <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p> -->
                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle" src="./image/3icon2.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>กลับมาใช้ใหม่</h2>
                    <p>ลดปริมาณขยะที่มีมากมายในปัจจุบัน</p>
                    <!-- <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p> -->
                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle" src="./image/3icon3.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>สร้างจิตสำนึก</h2>
                    <p>ช่วยเสริมสร้างจิตใจที่รักษ์สิ่งแวดล้อม</p>
                    <!-- <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p> -->
                </div>
            </div>
    <hr class="featurette-divider">

    <!-- START THE FEATURETTES -->

             <!-- <hr class="featurette-divider"> -->

            <h1 class="display-4 text-center"><b>กติกาการรับซื้อขวดน้ำ</b></h1>  

            <div class="row featurette">
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto"  src="./image/rule2.png" >
                </div>
                <div class="col-md-7">
                    <h2 class="featurette-heading">1. ขวดน้ำที่ขายได้จะต้องอยู่ภายในฐานข้อมูลเท่านั้น </h2>
                    <p class="lead">ขวดน้ำที่มีอยู่ใน ฐ้านข้อมูล</p>
                    <p class="lead"><b>Nestle </b> <span class="text-muted">: size 1500 ml, 600 ml, 350 ml</span></p>
                    <p class="lead"><b>Crystal</b> <span class="text-muted">: size 1500 ml, 600 ml, 320 ml</span></p>
                </div>     
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-5 pull-md-7">
                    <!-- <img class="featurette-image img-fluid mx-auto"  alt="500x500" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_167b106230b%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_167b106230b%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 500px; height: 500px;"> -->
                    <img class="featurette-image img-fluid mx-auto"  src="./image/rule1.png" ><!--width="250"-->
                </div>
                <div class="col-md-7 push-md-5">
                    <h2 class="featurette-heading">2. ขนาดของขวดน้ำมีราคาที่เเตกต่างกัน </h2>
                    <!-- <span class="text-muted">See for yourself.</span> -->
                    <p class="lead"> - Size S ราคา 0.25 บาท/ ขวด</p>
                    <p class="lead"> - Size M ราคา 0.32 บาท / ขวด</p>
                    <p class="lead"> - Size L ราคา 0.375 บาท / ขวด</p>
                </div>               
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto"  src="./image/rule3.png" >
                </div>
                <div class="col-md-7">
                    <h2 class="featurette-heading">3. ผู้ใช้งานจะต้องมียอดเงิน 20 บาทขึ้นไปถึงจะทำการเเลกเป็นเงินสดได้ </h2>
                </div>
                
            </div>

            <!-- <hr class="featurette-divider">  -->

    <!-- /END THE FEATURETTES -->

        <!-- <div>
            <h1 class="text-center">กติกาการรับซื้อขวดน้ำ</h1>
            <p>1. ขวดน้ำที่ขายได้จะต้องอยู่ภายในฐานข้อมูลเท่านั้น</p>
            <p>2. ขนาดของขวดน้ำมีราคาที่เเตกต่างกัน</p>
            <p> - Size S ราคา / ขวด</p>
            <p> - Size M ราคา / ขวด</p>
            <p> - Size L ราคา / ขวด</p>
            <p>3. ผู้ใช้งานจะต้องมียอดเงิน 20 บาทขึ้นไปถึงจะทำการเเลกเป็นเงินสดได้</p>
            <p>4. ติดต่อเพิ่มเติมได้ที่เบอร์ 0631912361,0971759631</p>
        </div> -->

    <!-- FOOTER -->
    <hr class="featurette-divider">
            <footer >
            <p class="float-right"><a href="#">Back to top</a></p>
            <p class="text-center">ติดต่อเพิ่มเติมได้ที่เบอร์ 0631912361,0971759631</p>
            </footer>

    </div>
</div> 
<!-- end-body -->
  

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html> 