<?php
	require_once "config.php";

	$sql = "SELECT * FROM project";
	$query = mysqli_query($conn,$sql);
	
    $num_student = mysqli_num_rows($query);
    

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
    <title>Home</title>
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

    <h1 class="thFont" style="font-weight: bold; font-size: 80px;">ฟอร์มซื้อ : โรงเรียนบ้านเทอดไทย</h1> 
    <p class="thFont" style="font-size: 40px">สำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน</p>

    <h3 class="thFont" style="font-weight: bold">ตารางข้อมูล</h3><br>
    <table>
  
    <?php while($row = mysqli_fetch_assoc($query)) : ?>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                <div class="card-body">
                    <span class="thFont" style="font-size: 20px">ลำดับที่ <?=$row['id'] ?></span>
                    <h5 class="card-title thFont" style="font-size: 36px; font-weight: bold"  ><?=$row['projectName'] ?> <span style="font-size: 24px; font-weight: normol">&nbsp <?=$row['dateOut'] ?></span></h5>
                    
                    <p class="card-text thFont"  style="font-size: 24px;" >Describe : <?=$row['department'] ?> / <?=$row['subject'] ?> </p>
                    <a href="edit.php?id=<?=$row['id'] ?>" class="btn btn-outline-info" role="button">Edit</a>
                    <a href="#" class="btn btn-outline-danger disabled" role="button">Delete</a>
                    <form method="post" action="export.php">
                    <input type="submit" name="export" class="btn btn-success" value="Export" />
                    </form>
                </div>
                </div>
            </div>
           
        </div>

        <!-- <td>
            <?=$row['id'] ?>
            <?=$row['department'] ?>
            <?=$row['projectName'] ?>
            <?=$row['subject'] ?>
            <?=$row['dateOut'] ?>
            <?=$row['projectNumber'] ?>
            <?=$row['nameStore'] ?>
            <?=$row['telStore'] ?>
            <?=$row['faxStore'] ?>
            <?=$row['addressStore'] ?>
            <?=$row['emStore'] ?>
            <?=$row['emNStore'] ?>
            <?=$row['bankNStore'] ?>
            <?=$row['bankAStore'] ?>
            <?=$row['bankStore'] ?>
            <?=$row['bankBStore'] ?>
        </td> -->
        
        <!-- <td>
            <a href="edit.php?id=<?=$row['id'] ?>">แก้ไข</a>
            ลบ
        </td> -->

    <?php endwhile; ?>
    </table>
</div>
<div style="padding-bottom:100px"></div>




</body>
</html>