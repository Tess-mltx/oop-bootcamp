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
    }

    public static function getAverageNote(array $students, string $targetGroup) {
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
