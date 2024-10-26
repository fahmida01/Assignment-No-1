<?php
function calculateResult($marks)
{
  $totalMarks = 0;
  $subjectCount = count($marks);


  foreach ($marks as $mark) {
    if ($mark < 0 || $mark > 100) {
      return "Mark range is invalid.";
    }
    if ($mark < 33) {
      return "The student has failed.";
    }
    $totalMarks += $mark;
  }
  $averageMarks = $totalMarks / $subjectCount;

  switch (true) {
    case ($averageMarks >= 80 && $averageMarks <= 100):
      $grade = "A+";
      break;
    case ($averageMarks >= 70 && $averageMarks <= 79):
      $grade = "A";
      break;
    case ($averageMarks >= 60 && $averageMarks <= 69):
      $grade = "A-";
      break;
    case ($averageMarks >= 50 && $averageMarks <= 59):
      $grade = "B";
      break;
    case ($averageMarks >= 40 && $averageMarks <= 49):
      $grade = "C";
      break;
    case ($averageMarks >= 33 && $averageMarks <= 39):
      $grade = "D";
      break;
    default:
      $grade = "F";
      break;
  }

  return "Total Marks: $totalMarks\nAverage Marks: " . round($averageMarks, 2) . "\nGrade: $grade";
}
$marks = [80, 85, 72, 88, 88];

echo calculateResult($marks);
