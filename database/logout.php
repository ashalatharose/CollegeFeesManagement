<?php
session_start();
session_destroy();
header("http://localhost:8088/CollegeFeesManagement/Varsity/index.html");
?>