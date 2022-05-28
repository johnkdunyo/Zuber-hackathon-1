<?php
/**
 * Set of PHP functions that fetches students from an endpoint, sorts them and returns a student at a given position
 *
 * @return array
 */





function getStudents(): array
{
    $curl = curl_init('https://d68b3d3a-38f9-4da4-9acf-5b4a29ccc098.mock.pstmn.io/students');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = json_decode(curl_exec($curl), true);
    return $response['data'];
}


// The sortStudents() function must accept a list of $students param (array) and return a sorted list from highest to lowest averageScore.
// The sorted students list should be updated such that each student now has a position index, which tells the students position.
// Example a student at the first index: 0 should have a position field with value 1, and a student at the third index: 2 should have a position field with value 3
function sortStudents(array $students): array
{
    $sortedArray =array();
    foreach($students as $student){ 
        foreach($student as $key=>$value){ 
            if(!isset($sortArray[$key])){ 
                $sortArray[$key] = array(); 
            } 
            $sortArray[$key][] = $value; 
        } 
      }
      array_multisort($sortArray['averageScore'],SORT_DESC,$students); 

    return [$students];
}




  
// The findStudentByPosition() function must accept a list of $students and a $position and return the student that has that $position in the list
function findStudentByPosition(array $students, int $position): array
{
    // edit the code below
    return [$students[$position]];
}

$students = getStudents();



print_r(sortStudents($students));

print_r(findStudentByPosition($students, 3));
