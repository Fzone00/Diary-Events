<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document Generate : genDoc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/font.css">
  <link rel="stylesheet" href="CSS/card.css">
</head>
<body>

        
<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded fixed-top">
            <div class="container">
                
                <a class="navbar-brand" href="create.php">genDoc <span class="sr-only">(current)</span></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home </a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <div class="col-auto pl-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                                </div>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                            </div>
                        </div>

                        <div class="col-auto pl-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                </div>
                                <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Password">
                            </div>
                        </div>

                        <div class="col-auto pl-0 pr-0">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">Login</button>
                        </div>
                    </form>

                </div>
            </div>
        </nav>	
    </div>
</div>

<div class="container" style="padding-top: 80px">
    
    <!-- HEADER -->

    <h1 class="thFont" style="font-weight: bold; font-size: 80px">ฟอร์มซื้อ : โรงเรียนบ้านเทอดไทย</h1> 
    <p class="thFont" style="font-size: 40px">สำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน</p>

<form action="doCreate.php" method="POST" >

    <!-- STEP_1 -->
                   
    <h3 class="thFont" style="font-weight: bold">กรอกข้อมูล เพื่อเสนอจัดซื้อ</h3><br>
        <div class="form-inline row">
            <span for="departmentName" class="thFont col-sm-2" style="font-size: 24px">ฝ่ายงาน : </span>
            <select class="form-control col-sm-3" name="department"  style="margin-top: 5px">
                <option>ฝ่ายบุคลากร</option>
                <option>ฝ่ายวิชาการ</option>
                <option>ฝ่ายงบประมาณและฝ่ายแผน</option>
                <option>ฝ่ายบริหารงานทั่วไป</option>
            </select>

        </div>

        <div class="form-inline row">
                <span for="projectName" class="thFont col-sm-2" style="font-size: 24px" >กิจกรรม/โครงการ : </span>
                <input type="text" class="form-control col-sm-4" id="projectName" placeholder="้ป้อนกิจกรรมหรือโครงการ" name="projectName" size="50"  style="margin-top: 5px">
        </div>

        <div class="form-inline row">
            <span for="subject" class="thFont col-sm-2" style="font-size: 24px">กลุ่มสาระ : </span>
            <select class="form-control col-sm-4" name="subject" style="margin-top: 5px">
                <option>กลุ่มสาระการเรียนรู้ภาษาไทย</option>
                <option>กลุ่มสาระการเรียนรู้คณิตศาสตร์</option>
                <option>กลุ่มสาระการเรียนรู้วิทยาศาสตร์</option>
                <option>กลุ่มสาระการเรียนรู้สังคม ศาสนา และวัฒนธรรม</option>
                <option>กลุ่มสาระการเรียนรู้สุขศึกษาและพลศึกษา</option>
                <option>กลุ่มสาระการเรียนรู้ศิลปะ</option>
                <option>กลุ่มสาระการเรียนรู้การงานอาชีพและเทคโนโลยี</option>
                <option>กลุ่มสาระการเรียนรู้ภาษาต่างประเทศ</option>
            </select>
        </div>

        <div class="form-inline row">
            <span for="dateOut" class="thFont col-sm-2" style="font-size: 24px">วัน/เดือน/ปี ที่จัดซื้อ : </span>
            <input class="form-control col-sm-3" type="date" name="dateOut" style="margin-top: 5px">

        </div>

        <div class="form-inline row">
            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">กำหนดใช้ภายใน : </span>
            <select class="form-control col-sm-3" name="getDateIn" style="margin-top: 5px">
                <option>3 วัน</option>
                <option>5 วัน</option>
                <option>7 วัน</option>
                <option>10 วัน</option>
                <option>15 วัน</option>
                <option>30 วัน</option>                                
            </select>
        </div>

        <div class="form-inline row">
            <span for="projectName" class="thFont col-sm-2" style="font-size: 24px" >เลขที่คำสั่ง :</span>
            <input type="text" class="form-control col-sm-3"  placeholder="ป้อนเลขที่คำสั่ง" name="projectNumber" size="10" style="margin-top: 5px">

            <label class="form-check-label thFont col-auto" style="font-size: 24px">
            <input class="form-check-input col-auto" type="checkbox" style="margin-top: 5px">&nbsp ไม่ใช้
        </div><br>


    <!-- STEP_2 --> <hr>


        <div class="form-inline row" style="padding-top: 30px">
                <h3 class="thFont col-sm-3" style="font-weight: bold">ข้อมูลการตรวจรับ จากร้านค้า</h3>
                <!-- <button type="button" class="btn btn-success dropdown-toggle col-sm-2" data-toggle="dropdown">
                    เลือกร้านค้าจากความจำ <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">EXAMPLE A STORE</a></li>
                        <li><a href="#">EXAMPLE B STORE</a></li>
                    </ul> -->
        </div><br>

        <div class="form-inline row">                      
                
            <span for="storeName" class="thFont col-sm-2" style="font-size: 24px" >ห้างร้านที่จัดซื้อ :</span>
            <input type="text" class="form-control col-sm-4"  placeholder="ป้อนชื่อห้างร้าน" name="nameStore" style="margin-top: 5px">

        </div>

        <div class="form-inline row">
                <span for="subject" class="thFont col-sm-2" style="font-size: 24px">เบอร์โทรทางร้าน :</span>
                <input type="tel" class="form-control col-sm-2"  maxlength="10" name="telStore"  style="margin-top: 5px"> 
        </div>

        <div class="form-inline row">
                <span for="subject" class="thFont col-sm-2" style="font-size: 24px">เบอร์ Fax ทางร้าน :</span>                            
                <input type="tel" class="form-control col-sm-2"  name="faxStore" style="margin-top: 5px">
        </div>

        <div class="form-inline row">
            <span for="subject" class="thFont col-sm-2" style="font-size: 24px">ที่อยู่ร้าน :</span>
            <textarea class="form-control col-sm-4" rows="3" name="addressStore" style="margin-top: 5px; "></textarea>
        </div>

        <div class="form-inline row">
            <span for="dateOut" class="thFont col-sm-2" style="font-size: 24px">ผู้มีอำนาจลงนาม :</span>
            <input type="text" class="form-control col-sm-3"  placeholder="ผู้ลงนามจากร้านค้า " name="emStore"  style="margin-top: 5px">

            <span class="col-sm-1"></span>

            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">เลขประจำตัวผู้เสียภาษี :</span>
            <input type="tel" class="form-control col-sm-3"  placeholder="ป้อนเลขประจำตัวผู้เสียภาษี 12 หลัก" name="emNStore"  style="margin-top: 5px">

        </div>
            
        <div class="form-inline row">
            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">เลขที่บัญชีธนาคาร : </span>
            <input type="tel" class="form-control col-sm-3"  placeholder="ป้อนเลขที่บัญชีธนาคารของร้านค้า" name="bankNStore" style="margin-top: 5px">

            <span class="col-sm-1"></span>

            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">ชื่อบัญชี : </span>
            <input type="tel" class="form-control col-sm-3"  placeholder="ป้อนชื่อบัญชี" name="bankAStore"  style="margin-top: 5px">

        </div>

        <div class="form-inline row">
            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">ธนาคาร : </span>
            <input type="tel" class="form-control col-sm-3"  placeholder="ชื่อธนาคาร" name="bankStore" style="margin-top: 5px">
            
            <span class="col-sm-1"></span>

            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">สาขา : </span>
            <input type="tel" class="form-control col-sm-3"  placeholder="สาขาของธนาคาร" name="bankBStore" style="margin-top: 5px">

        </div>
        
        <br>
        <br>

        <div class="form-inline row">
            <button type="submit" class="btn btn-success col.">Save Project</button>
        </div>
</form>
<div style="padding-bottom:100px"></div>

</body>
</html>
