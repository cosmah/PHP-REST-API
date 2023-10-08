<?php
//miscellaneous file (MISC)

//response function for end points
function response($data): void{
    header('Content-Type: application/json');
    echo json_encode($data);
}