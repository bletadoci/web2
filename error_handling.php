<?php 
//funct: empty()?, is_numeric, is_int, is_string ?
function error($errno, $errstr){
echo $errno;
echo $eestr;
}
set_error_handler("error");

try{
    $age =15;
    if($age<18){
        throw new Exception("You must be 18 or older."); //--> aktivizohet blloko catch
    }
    echo "Access granted";
}

    catch (Exception $e){
        echo 'Error'. $e>getmessage();
    }

finally{
    echo "yay";
}


?>