<?php  
require_once 'Classes/PHPExcel.php';
$con = mysqli_connect("localhost", "root", "", "gendoc");
if(!$con){
  echo mysqli_error($con);
  exit;
}

$excel = new PHPExcel();

$excel->setActiveSheetIndex(0);

$query = mysqli_query($con,"SELECT * FROM project ");
$row = 1;
if($data = mysqli_fetch_object($query)){
    $excel->getActiveSheet()
        ->setCellValue('C'.$row = 3 , $data->department)
        ->setCellValue('C'.$row = 4, $data->projectName)
        ->setCellValue('C'.$row = 5, $data->subject)
        ->setCellValue('C'.$row = 6, $data->dateOut)
        ->setCellValue('C'.$row = 8, $data->projectNumber)
        ->setCellValue('C'.$row = 9, $data->getDateIn)
        ->setCellValue('C'.$row = 15, $data->nameStore)
        ->setCellValue('C'.$row = 16, $data->telStore)
        ->setCellValue('C'.$row = 17, $data->addressStore)
        ->setCellValue('C'.$row = 20, $data->emStore)
        ->setCellValue('C'.$row = 18, $data->emNStore)
        ->setCellValue('C'.$row = 19, $data->bankNStore)
        ->setCellValue('E'.$row = 19, $data->bankAStore)
        ->setCellValue('G'.$row = 19, $data->bankStore)        
        ->setCellValue('I'.$row = 19, $data->bankBStore)
        ;

    $excel->getActiveSheet() ->getColumnDimension('A')->setWidth(8);        
    $excel->getActiveSheet() ->getColumnDimension('B')->setWidth(37);        
    $excel->getActiveSheet() ->getColumnDimension('C')->setWidth(24);        
    $excel->getActiveSheet() ->getColumnDimension('F')->setWidth(36);        

    $excel->getActiveSheet()
        ->setCellValue('A1','ฟอร์มซื้อ')    
        ->setCellValue('B1','โรงเรียนบ้านเทอดไทย') 
        ->setCellValue('C1','สำนักงานคณะกรรมการการศึกษาขั้นพื้นฐาน')   
        ->setCellValue('B2','กรุณากรอกข้อมูล เพื่อเสนอจัดซื้อ ให้ครบถ้วน')  
        ->setCellValue('B3','ฝ่ายงาน')            
        ->setCellValue('B4','กิจกรรม/โครงการ')   
        ->setCellValue('B5','กลุ่มสาระ')   
        ->setCellValue('A6','ข้อ 1')  
        ->setCellValue('B6','วัน เดือน ปี ที่จัดซื้อ')
        ->setCellValue('A7','ข้อ 2')    
        ->setCellValue('A8','ข้อ 3')  
        ->setCellValue('A9','ข้อ 4')   
        ->setCellValue('A10','ข้อ 5')  
        ->setCellValue('A11','ข้อ 6') 
        ->setCellValue('A12','ข้อ 7')   
        ->setCellValue('A13','ข้อ 8') 
        ->setCellValue('A15','ข้อ 9')  
        ->setCellValue('A17','ข้อ 10')  
        ->setCellValue('A18','ข้อ 11')  
        ->setCellValue('A19','ข้อ 12')  
        ->setCellValue('A20','ข้อ 13') 
        ->setCellValue('A21','ข้อ 14')  
        ->setCellValue('A22','ข้อ 15') 
        ->setCellValue('A23','ข้อ 17')   
        ->setCellValue('A26','ข้อ 18')  
        ->setCellValue('A33','ข้อ 16')   
        ->setCellValue('A34','ข้อ 17')   
        ->setCellValue('A35','ข้อ 18') 
        ->setCellValue('B7','เลขที่จัดซื้อ')
        ->setCellValue('B8','เลขที่คำสั่ง')
        ->setCellValue('B9','กำหนดใช้ภายใน')
        ->setCellValue('B10','วัน เดือน ปี ที่ต้องการใช้พัสดุ')
        ->setCellValue('B11','จำนวนรายการที่ขอซื้อ')
        ->setCellValue('B12','ประเภทของเงิน')
        ->setCellValue('B13','ฝ่ายงาน')       
        ->setCellValue('B14','ข้อมูลการตรวจรับ')
        ->setCellValue('B15','ห้างร้านบริษัทที่จัดซื้อ') 
        ->setCellValue('B16','โทรศัพท์') 
        ->setCellValue('B17','ที่อยู่ห้างร้านบริษัทที่จัดซื้อ') 
        ->setCellValue('B18','เลขประจำตัวผู้สียภาษี  ')    
        ->setCellValue('B19','เลขที่บัญชีเงินฝากธนาคาร') 
        ->setCellValue('B20','ผู้มีอำนาจลงนาม') 
        ->setCellValue('B21','ใบเสนอราคา เลขที่') 
        ->setCellValue('B22','กำหนดวัน เดือน ปี ที่ส่งของ') 
        ->setCellValue('B23','ผู้ตรวรับตรวจรับ') 
        ->setCellValue('B26','วัน เดือน ปี ที่ตรวจรับ')  
        ->setCellValue('B27','ใบส่งของ / ใบแจ้งหนี้/ใบเสร็จ  เล่มที่')
        ->setCellValue('B28','เกินกำหนดวัน  เดือน  ปี  ที่ส่งของ') 
        ->setCellValue('B29','ค่าปรับ')
        ->setCellValue('B30','ภาษี  หัก  ณ  ที่จ่าย')  
        ->setCellValue('B31','คงจ่ายจริง') 
        ->setCellValue('B32','ข้อมูลเบื้องต้น') 
        ->setCellValue('B33','เจ้าหน้าที่พัสดุ') 
        ->setCellValue('B34','หัวหน้าเจ้าหน้าที่พัสดุ') 
        ->setCellValue('B35','ผู้อำนวยการโรงเรียน')   
        ->setCellValue('D11','รายการ') 
        ->setCellValue('D19','ชื่อบัญชี') 
        ->setCellValue('F19','ธนาคาร') 
        ->setCellValue('H19','สาขา') 
        ->setCellValue('D21','ลงวันที่')           
        ->setCellValue('D23','ตำแหน่ง') 
 ;   

}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="test.xlsx"');
header('Cache-Control: max-age=0');

$file = PHPExcel_IOFactory::createWriter($excel,'Excel2007');

$file->save('php://output');
?>