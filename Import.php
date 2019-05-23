<?php
$connect = mysqli_connect("localhost","root","","zadanie2");
if($_FILES['file']['name']) {
    $filename = explode('.',$_FILES['file']['name']);
    if($filename[1] == 'csv'){
        $handle = fopen($_FILES['file']['tmp_name'],"r");
        while ($data = fgetcsv($handle,1000,";")){
            $item1 = mysqli_real_escape_string($connect,$data[0]);
            $item2 = mysqli_real_escape_string($connect,$data[1]);
            $sql="INSERT into dane(city,people) value('$item1','$item2')";
            mysqli_query($connect,$sql);
        }
        fclose($handle);
        header('location:/zadanie2/bargraph.html');
    }
}


