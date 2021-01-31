<?php 
/**
 * pages/subjects/delete.php
 * https://www.w3schools.com/php/php_mysql_delete.asp
 * 
 * Used to delete a subject. Will lookup the subject by the ID and delete it.
 * 
 */
    require($_SERVER['DOCUMENT_ROOT'] . '/flashcards/core/app.php'); 
    require($_SERVER['DOCUMENT_ROOT'] . '/flashcards/fragments/header.php');

    // Only do the following if the FORM action was a POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // get the value from the POST form
        $posted_subject_id = $_POST['subject_id'];
        
        // Delete it
        $sql = "DELETE FROM subject WHERE id=". $posted_subject_id .";";
        $result = $db_conn->query($sql);
        if($db_conn->error){
            print_r($db_conn->error);
        }
    }
?>

<h1>Subjects - Delete</h1>

<!-- include the subject_actions, the navigation buttons for the subject pages -->
<?php require($_SERVER['DOCUMENT_ROOT'] . '/flashcards/pages/subjects/subject_actions.php'); ?>

<p>Use the form below to delete a subject.</p>

<form action="" method="post">
    Subject ID: <input type="text" name="subject_id"><br>
    <input type="submit">
</form>

<?php 

if(!empty($result) && $result == TRUE){
  // the row was updated
  echo "<p>Subject successfully delete!</p>";
}

?>

<!-- include the footer fragment -->
<?php require($_SERVER['DOCUMENT_ROOT'] . '/flashcards/fragments/footer.php'); ?>