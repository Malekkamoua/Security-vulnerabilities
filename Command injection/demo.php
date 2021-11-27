<?php
$type= $_POST ['type'];

if($type == "secure"){
    $host= htmlspecialchars($_POST['vulnerable_ip']);

    //echo "ping -c 4 " . $host."<br>";
    exec("ping -c 4 " . $host, $output, $result);
    array_push($output, "Not today :)");
    array_push($output, "Your command ".$host);


    $final = json_encode($output);

    echo $final;
}else{
    $host= $_POST['vulnerable_ip'];

    //echo "ping -c 4 " . $host."<br>";
    exec("ping -c 4 " . $host, $output, $result);

    $final = json_encode($output);

    echo $final;
}
?>