<?php
    include_once("../../../Database/db_connection.php");

    $id_course = $_POST["id_course"];
    $threshold = $_POST["threshold"];
    $questions = $_POST["questions"];
    $answers_1 = $_POST["answers_1"];
    $answers_2 = $_POST["answers_2"];
    $answers_3 = $_POST["answers_3"];
    

    //Create exam
    $sql = "INSERT INTO `evaluation`(`threshold`, `id_course`)
        VALUES ('$threshold', '$id_course')";
    if($result = mysqli_query($conn,$sql)or die(mysqli_error($conn))):
        //Get id_evaluation
        $get_exam = "SELECT * FROM `evaluation` WHERE id_evaluation = (SELECT MAX(id_evaluation) FROM `evaluation`)";
        $exam_result = mysqli_query($conn,$get_exam)or die(mysqli_error($conn));
        $exam_row = mysqli_fetch_assoc($exam_result);
        $id_evaluation = $exam_row['id_evaluation'];


        if($exam_result):
            for ($i = 0; $i < count($questions); ++$i) {
                $question = $questions[$i];

                //insert question
                $insert = "INSERT INTO `question`(`description`, `id_evaluation`) VALUES ('$question', '$id_evaluation')";
                $insert_result = mysqli_query($conn,$insert)or die(mysqli_error($conn));

                if($insert_result):
                    //Get id_question
                    $get_question = "SELECT * FROM `question` WHERE id_question = (SELECT MAX(id_question) FROM `question`)";
                    $question_result = mysqli_query($conn,$get_question)or die('H'.mysqli_error($conn));
                    $question_row = mysqli_fetch_assoc($question_result);
                    $id_question = $question_row['id_question'];
                    if($question_result):
                        //Get responses related to question number i
                        $responses = array("$answers_1[$i]", "$answers_2[$i]", "$answers_3[$i]");
                        //insert Responses
                        $status = 1;
                        foreach($responses as $answer):
                            $insert = "INSERT INTO `response`(`response`, `status`, `id_question`) VALUES ('$answer',  '$status', '$id_question')";
                            $insert_result = mysqli_query($conn,$insert)or die('J'.mysqli_error($conn));
                            $status = 0;
                        endforeach;
                    endif;
                endif;
            }
        endif;
        

    endif;

    header("Location: ../course_list.php?success=true");

?>