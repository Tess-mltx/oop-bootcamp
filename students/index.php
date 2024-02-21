<?php
require('students.php');

$averageNoteG1 = getAverageNote($students, "A");
$averageNoteG2 = getAverageNote($students, "B");

$maxNoteG1 = getMaxNotesStudent($students, "A");
$minNoteG2 = getMinNotesStudent($students, "B");

$changeStudent1 = SetGroupByName("Ryan", "B", $students);
$changeStudent2 = SetGroupByName("Sophia", "A", $students);

$newAverageNoteG1 = getAverageNote($students, "A");
$newAverageNoteG2 = getAverageNote($students, "B");

require('template.php');