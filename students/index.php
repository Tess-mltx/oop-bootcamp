<?php
require('students.php');

echo Students::getAverageNote($students, "A") . "</br>";
echo Students::getAverageNote($students, "B");

