<?php
if(isset($_POST['data'])) 
{
    function getData()
    {
        if($_POST['strtok'] == true) {
            $data = strtok($_POST['data'], " ");
            while($data)
            {
                echo $data."<br>"; 
                $data = strtok(" ");
            }
        } elseif($_POST['foreach'] == true) {
            $data = explode(" ",$_POST['data']);
            foreach($data as $d)
            {
                echo $d."<br />";
            }
        
        } elseif($_POST['for'] == true) {
            $data = explode(" ", $_POST['data']);
            for($d = 0; $d < count($data); $d++ )
            {
                echo $data[$d]."<br />";
            }
        
    }
}
?>
<!-- <script> window.location.href="http://testpsr.local/Views/"; </script> -->
<?php
getData();
}
