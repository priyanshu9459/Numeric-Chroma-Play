<?php
include 'db.php';
// $sql ="select * from user";
// $res= mysqli_query($con, $sql);


// $count=mysqli_num_rows($res);
// if($count>0){
//     while($row=mysqli_fetch_assoc($res)){
        
//         $arr[] = $row;
//     }
//     echo json_encode($arr);
//  }
?>




<?php
include('db.php');

$mobile = isset($_GET['mobile']) ? $_GET['mobile'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
echo $mobile;
echo $name;
//$sql = "SELECT * FROM user WHERE mobile = $mobile";
$sql = "SELECT user SET 'mobile' = $mobile, 'name' = $name WHERE 1";
$res = mysqli_query($con,$sql);
$count = mysqli_num_rows($res);
header('Content-Type:application/json');

if($count>0){
  while($row=mysqli_fetch_assoc($res)){
    $arr[]=$row;
  }
  echo json_encode(['status'=>true, 'data'=>$arr, 'result'=>'found']);
}else{
  echo json_encode(['status'=>true, 'data'=> 'data not found', 'result'=>'not']);
}

?>