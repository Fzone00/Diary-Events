<?php
	
	require_once "config.php";
	$id = $_GET['id'];
	$sql = "SELECT * FROM project where id=$id";
	$query = mysqli_query($conn,$sql);
	
	$num_student = mysqli_num_rows($query);
	$row = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/font.css">
    <link rel="stylesheet" href="CSS/card.css">
    <title>Edit Page</title>
</head>
<body>
<div class="container" style="padding-top: 80px">
    
    <!-- HEADER -->

    <p class="thFont" style="font-size: 40px; font-weight: bold" >แก้ไขข้อมูลของ : <?=$row['projectName']?></p>

<form action="doEdit.php " method="POST" >

    <input type="hidden" name="id" value="<?=$row['id']?>"/>

    <!-- STEP_1 -->
                   
    <h3 class="thFont" style="font-weight: bold">กรอกข้อมูล เพื่อเสนอจัดซื้อ</h3><br>
        <div class="form-inline row">
            <span for="departmentName" class="thFont col-sm-2" style="font-size: 24px">ฝ่ายงาน : </span>
            <select class="form-control col-sm-3" name="department"  style="margin-top: 5px" value="<?=$row['department']?>">
                <option>ฝ่ายบุคลากร</option>
                <option>ฝ่ายวิชาการ</option>
                <option>ฝ่ายงบประมาณและฝ่ายแผน</option>
                <option>ฝ่ายบริหารงานทั่วไป</option>
            </select>

        </div>

        <div class="form-inline row">
                <span for="projectName" class="thFont col-sm-2" style="font-size: 24px" >กิจกรรม/โครงการ : </span>
                <input type="text" class="form-control col-sm-4" id="projectName" placeholder="้ป้อนกิจกรรมหรือโครงการ" name="projectName" value="<?=$row['projectName']?>"  style="margin-top: 5px">
        </div>

        <div class="form-inline row">
            <span for="subject" class="thFont col-sm-2" style="font-size: 24px">กลุ่มสาระ : </span>
            <select class="form-control col-sm-4" name="subject" style="margin-top: 5px" value="<?=$row['subject']?>">
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
            <input class="form-control col-sm-3" type="date" name="dateOut" style="margin-top: 5px" value="<?=$row['dateOut']?>">

        </div>

        <div class="form-inline row">
            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">กำหนดใช้ภายใน : </span>
            <select class="form-control col-sm-3" name="getDateIn" style="margin-top: 5px" value="<?=$row['getDateIn']?>">
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
            <input type="text" class="form-control col-sm-3"  placeholder="ป้อนเลขที่คำสั่ง" name="projectNumber" size="10" style="margin-top: 5px" value="<?=$row['projectNumber']?>">

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
            <input type="text" class="form-control col-sm-4"  placeholder="ป้อนชื่อห้างร้าน" name="nameStore" style="margin-top: 5px" value="<?=$row['nameStore']?>">

        </div>

        <div class="form-inline row">
                <span for="subject" class="thFont col-sm-2" style="font-size: 24px">เบอร์โทรทางร้าน :</span>
                <input type="tel" class="form-control col-sm-2"  maxlength="10" name="telStore"  style="margin-top: 5px" value="<?=$row['telStore']?>"> 
        </div>

        <div class="form-inline row">
                <span for="subject" class="thFont col-sm-2" style="font-size: 24px">เบอร์ Fax ทางร้าน :</span>                            
                <input type="tel" class="form-control col-sm-2"  name="faxStore" style="margin-top: 5px" value="<?=$row['faxStore']?>">
        </div>

        <div class="form-inline row">
            <span for="subject" class="thFont col-sm-2" style="font-size: 24px">ที่อยู่ร้าน :</span>
            <textarea class="form-control col-sm-4" rows="3" name="addressStore" style="margin-top: 5px; " value="<?=$row['addressStore']?>"></textarea>
        </div>

        <div class="form-inline row">
            <span for="dateOut" class="thFont col-sm-2" style="font-size: 24px">ผู้มีอำนาจลงนาม :</span>
            <input type="text" class="form-control col-sm-3"  placeholder="ผู้ลงนามจากร้านค้า " name="emStore"  style="margin-top: 5px" value="<?=$row['emStore']?>">

            <span class="col-sm-1"></span>

            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">เลขประจำตัวผู้เสียภาษี :</span>
            <input type="tel" class="form-control col-sm-3"  placeholder="ป้อนเลขประจำตัวผู้เสียภาษี 12 หลัก" name="emNStore"  style="margin-top: 5px" value="<?=$row['emNStore']?>">

        </div>
            
        <div class="form-inline row">
            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">เลขที่บัญชีธนาคาร : </span>
            <input type="tel" class="form-control col-sm-3"  placeholder="ป้อนเลขที่บัญชีธนาคารของร้านค้า" name="bankNStore" style="margin-top: 5px" value="<?=$row['bankNStore']?>">

            <span class="col-sm-1"></span>

            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">ชื่อบัญชี : </span>
            <input type="tel" class="form-control col-sm-3"  placeholder="ป้อนชื่อบัญชี" name="bankAStore"  style="margin-top: 5px" value="<?=$row['bankAStore']?>">

        </div>

        <div class="form-inline row">
            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">ธนาคาร : </span>
            <input type="tel" class="form-control col-sm-3"  placeholder="ชื่อธนาคาร" name="bankStore" style="margin-top: 5px" value="<?=$row['bankStore']?>">
            
            <span class="col-sm-1"></span>

            <span for="getDateIn" class="thFont col-sm-2" style="font-size: 24px">สาขา : </span>
            <input type="tel" class="form-control col-sm-3"  placeholder="สาขาของธนาคาร" name="bankBStore" style="margin-top: 5px" value="<?=$row['bankBStore']?>">

        </div>
        
        <br>
        <br>

        <div class="form-inline row">
            <button type="submit" class="btn btn-success col. ">Save Project</button>
        </div>
</form>
<div style="padding-bottom:100px"></div>
</body>
</html>