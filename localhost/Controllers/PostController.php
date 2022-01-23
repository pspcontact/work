<?php
//header('Location: ../Views/index.php');
if(isset($_POST['data']) && $_POST['1'] == true) {
    $data = strtok($_POST['data'], " ");
    while($data)
    {
	    echo $data."<br>"; 
	    $data = strtok(" ");
    }
} elseif(isset($_POST['data']) && $_POST['2'] == true) {
    $data = explode(" ",$_POST['data']);
    foreach($data as $d)
    {
        echo $d."<br />";
    }
    
} elseif(isset($_POST['data']) && $_POST['3'] == true) {
    $data = explode(" ", $_POST['data']);
    for($d = 0; $d < count($data); $d )
    {
        echo $data[$d]."<br />";
    }
    
}

