<?php
if (!ctype_alpha(str_replace(' ', '', $_POST['nama']))) {
    header("location:grade-convert.php?err_message=Nama harus menggunakan alphabet!");
}
if (!is_numeric($_POST['grade'])) {
    header("location:grade-convert.php?err_message=Nilai harus angka!");
}
function getAlphabetGrade($grade)
{
    if ($grade > 80 && $grade < 101) {
        return 'A';
    } elseif ($grade > 70 && $grade <= 80) {
        return 'AB';
    } elseif ($grade > 65 && $grade <= 70) {
        return 'B';
    } elseif ($grade >= 60 && $grade <= 65) {
        return 'BC';
    } elseif ($grade >= 56 && $grade < 60) {
        return 'C';
    } elseif ($grade >= 41 && $grade <= 55) {
        return 'D';
    } elseif ($grade >= 0 && $grade <= 40) {
        return 'E';
    } else {
        return "Ga valid bro!";
    }
}
echo "Nama: " . $_POST['nama'];
echo "</br>Nilai: " . getAlphabetGrade($_POST['grade']);
