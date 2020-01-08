<?php
    include_once("../../../Database/db_connection.php");

    $id_course = $_POST["id_course"];
    $threshold = $_POST["threshold"];
    $question_1 = $_POST["q1"];
    $answer_1 = $_POST["a1"];
    $answer_2 = $_POST["a2"];
    $answer_3 = $_POST["a3"];
    $responses = array("$answer_1", "$answer_2", "$answer_3");

    //Create exam
    $sql = "INSERT INTO `evaluation`(`threshold`, `id_course`)
        VALUES ('$threshold', '$id_course')";
    $result = mysqli_query($conn,$sql)or die(mysqli_error($conn));
    if($result):
        //Get id_evaluation
        $get_exam = "SELECT * FROM `evaluation` WHERE id_evaluation = (SELECT MAX(id_evaluation) FROM `evaluation`)";
        $exam_result = mysqli_query($conn,$get_exam)or die(mysqli_error($conn));
        $exam_row = mysqli_fetch_assoc($exam_result);
        $id_evaluation = $exam_row['id_evaluation'];

        //insert questions
        $insert = "INSERT INTO `question`(`description`, `id_evaluation`) VALUES ('$question_1', '$id_evaluation')";
        $insert_result = mysqli_query($conn,$insert)or die('A'.mysqli_error($conn));

        //Get id_question
        $get_question = "SELECT * FROM `question` WHERE id_question = (SELECT MAX(id_question) FROM `question`)";
        $question_result = mysqli_query($conn,$get_question)or die('H'.mysqli_error($conn));
        $question_row = mysqli_fetch_assoc($question_result);
        $id_question = $question_row['id_question'];




        //insert Responses
        $status = 1;
        foreach($responses as $answer):
            $insert = "INSERT INTO `response`(`response`, `status`, `id_question`) VALUES ('$answer',  '$status', '$id_question')";
            $insert_result = mysqli_query($conn,$insert)or die('J'.mysqli_error($conn));
            $status = 0;
        endforeach;



    endif;

    header("Location: ../course_list.php?success=true");

?>