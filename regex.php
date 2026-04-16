<?php $reg2 = '/^[a-z]{2,}\.[a-z0-9]{2,}\@[a-z]{7}\.[a-z]{3}\-[a-z]{2}\.[a-z]{3}$/';
$email = "emri.mbiemri@student.uni-pr.edu";
if(preg_match($reg2, $email)){
    echo "yay";
}
else{
    echo "no";
}?>