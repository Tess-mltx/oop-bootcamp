<?php
class Students{
    private string $name;
    private int $note;
    private string $group;
    
    public function __construct(string $name, int $note, string $group){
        $this->name=$name;
        $this->note=$note;
        $this->group=$group;
    }

    public function getName() {
        return $this->name;
    }

    public function getNote() {
        return $this->note;
    }

    public function setNote(int $value) {
        $this->note = $value;
    }

    public function getGroup() {
        return $this->group;
    }

    public function setGroup(string $value) {
        $this->group = $value;
        return "$this->name is now in group $this->group";
    }

}


$students = [
    new Students("Jhon", 3, "A"),
    new Students("Alice", 8, "B"),
    new Students("Bob", 5, "A"),
    new Students("Charlie", 2, "B"),
    new Students("David", 9, "A"),
    new Students("Emma", 7, "B"),
    new Students("Frank", 4, "A"),
    new Students("Grace", 6, "B"),
    new Students("Henry", 1, "A"),
    new Students("Ivy", 10, "B"),
    new Students("Jack", 3, "A"),
    new Students("Katherine", 8, "B"),
    new Students("Leo", 5, "A"),
    new Students("Mia", 9, "B"),
    new Students("Noah", 7, "A"),
    new Students("Olivia", 4, "B"),
    new Students("Peter", 6, "A"),
    new Students("Quinn", 2, "B"),
    new Students("Ryan", 10, "A"),
    new Students("Sophia", 1, "B"),
];

function getAverageNote(array $students, string $targetGroup) {
    $count = 0;
    $total = 0;

    foreach ($students as $student) {
        if ($student->getGroup() == $targetGroup) {
            $count++;
            $total += $student->getNote();
        }
    }

    if ($count > 0) {
        $averageNote = $total / $count;
        return "The average score of group $targetGroup is: " . $averageNote;
    } else {
        return "No students found in group $targetGroup";
    }
}

function getMaxNotesStudent(array $students, string $targetGroup) {
    $theStudent = null;

    foreach ($students as $student) {
        if ($student->getGroup() == $targetGroup && ($theStudent == null || $student->getNote() > $theStudent->getNote())) {
            $theStudent = $student;
        }
    }

    return "The best note in group " . $targetGroup . " is " . $theStudent->getName() . " with : " . $theStudent->getNote() . " points.";   
}

function getMinNotesStudent(array $students, string $targetGroup) {
    $theStudent = null;

    foreach ($students as $student) {
        if ($student->getGroup() == $targetGroup && ($theStudent == null || $student->getNote() < $theStudent->getNote())) { // Not yet solution for conditional symbol
            $theStudent = $student;
        }
    }

    return "The lower note in group " . $targetGroup . " is " . $theStudent->getName() . " with : " . $theStudent->getNote() . " points.";
}

function SetGroupByName(string $targetName, string $newGroup, array $students){
    $selectedStudent = null;

foreach ($students as $student) {
    if ($student->getName() == $targetName) {
        $selectedStudent = $student;
        break;  // arrêter la boucle si la personne est trouvée
    }
}

if ($selectedStudent !== null) {
    $selectedStudent->setGroup($newGroup);
    echo "$targetName is now in the group $newGroup";
} else {
    echo "Not found student with the name $targetName";
}
}