<?php
$this_instance_id=file_get_contents('http://169.254.169.254/latest/meta-data/');

if(!empty($this_instance_id)){
    var_dump($this_instance_id);
}
else{
    echo "Sorry, instance id unknown";
}