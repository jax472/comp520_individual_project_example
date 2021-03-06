<?php 
/**
 * pages/cards/delete.php
 * https://www.w3schools.com/php/php_mysql_delete.asp
 * 
 * Used to delete a card. Will lookup the card by the ID and delete it.
 * 
 */
    require($_SERVER['DOCUMENT_ROOT'] . '/flashcards/core/app.php'); 
    require(APP_ROOT_DIR . '/fragments/header.php');

    // Only do the following if the FORM action was a POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // get the value from the POST form
        $posted_card_id = $_POST['card_id'];
        
        // Delete it
        $sql = "DELETE FROM card WHERE id=". $posted_card_id .";";
        $result = $db_conn->query($sql);
        if($db_conn->error){
            print_r($db_conn->error);
        }
    }
?>

<h1>Cards - Delete</h1>

<!-- include the card_actions, the navigation buttons for the card pages -->
<?php require(APP_ROOT_DIR . '/pages/cards/card_actions.php'); ?>

<p>Use the form below to delete a card.</p>

<form action="" method="post">
    Card ID: <input type="text" name="card_id"><br>
    <input type="submit">
</form>

<?php 

if(!empty($result) && $result == TRUE){
  // the row was updated
  echo "<p>Card successfully delete!</p>";
}

?>

<!-- include the footer fragment -->
<?php require(APP_ROOT_DIR . '/fragments/footer.php'); ?>