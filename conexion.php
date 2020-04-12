<?php
$conn = new mysqli('localhost', 'id13210595_root', 'S6ll8\]j^^q4lZ2j', 'id13210595_iot') ;
//$conn = new mysqli('localhost', 'id13017282_root22', '{f8R#U6Q7fN(x9-?', 'id13017282_gdlwebcamp') ;

if ($conn->connect_error) {
    echo $error -> $conn->connect_error;
}