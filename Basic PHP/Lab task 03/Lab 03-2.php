<?php
$marks=99;
if ($marks >=90)
echo "Grade: A+";
else if ($marks >=85&& $marks<90)
echo "Grade: A";
else if ($marks >=80&& $marks<85)
echo "Grade: B+";
else if ($marks >=75&& $marks<80)
echo "Grade: B";
else if ($marks >=70&& $marks<75)
echo "Grade: C+";
else if ($marks >=65&& $marks<70)
echo "Grade: C";
else if ($marks >=60&& $marks<70)
echo "Grade: D+";
else if ($marks >=50&& $marks<60)
echo "Grade: D";
else
echo "Grade: F";
?>