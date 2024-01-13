<?php

$conn = mysqli_connect("localhost", "root", "1234", "test_db");


if (!$conn) {
	echo "Connection failed!";
}