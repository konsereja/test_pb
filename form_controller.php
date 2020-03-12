
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

$field = $_POST['field'];
$res_array= [];
if(isset($field)){
    if (filter_var($field, FILTER_VALIDATE_INT )){
        $res_array= [
            'text'=>'Вы ввели целое число',
            'color'=>'yellow'
            ];
     } else if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
        $res_array= [
            'text'=>'Вы ввели email',
            'color'=>'green'
            ];
    } else {
        $res_array= [
            'text'=>'Вы ввели строку',
            'color'=>'red'
            ];
    }
     if($field === ''){
        $res_array= [
            'text'=>'',
            'color'=>''
            ];
    }
    echo json_encode($res_array);
}
