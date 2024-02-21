<?php
require('students.php');

echo getAverageNote($students, "A") . "</br>";
echo getAverageNote($students, "B") . "</br>";

echo getMaxNotesStudent($students, "A") . "</br>";
echo getMinNotesStudent($students, "B") . "</br>";
echo SetGroupByName("Ryan", "B", $students) . "</br>";
echo SetGroupByName("Sophia", "A", $students) . "</br>";

echo getAverageNote($students, "A") . "</br>";
echo getAverageNote($students, "B") . "</br>";