<?php 
/**
 * pages/cards/list.php
 * https://www.w3schools.com/php/php_mysql_select.asp
 * 
 * Used to select all the rows in the card table and display them to the user.
 * 
 */

    require($_SERVER['DOCUMENT_ROOT'] . '/flashcards/core/app.php'); 
    require($_SERVER['DOCUMENT_ROOT'] . '/flashcards/fragments/header.php');

    // using the $db_conn variable which is initialized in cord/database.php
    // connect to the database and get all the subjects
    // 
    // NOTE!! This query is different from the subject/list.php. It uses an INNER JOIN in order to get the subject name
    // instead of the subject ID that is available in this card row
    // 
    $sql = 'SELECT c.id, c.question, c.answer, s.subject_name FROM card c INNER JOIN subject s ON c.subject_id = s.id';
    $result = $db_conn->query($sql);
    if($db_conn->error){
        print_r($db_conn->error);
    }
?>

<h1>Cards - List</h1>

<!-- include the card_actions, the navigation buttons for the cards pages -->
<?php require($_SERVER['DOCUMENT_ROOT'] . '/flashcards/pages/cards/card_actions.php'); ?>

<?php if($result->num_rows == 0): ?>
    <p>No cards found!</p>
<?php else: ?>
    <p>Subjects found: <?php echo $result->num_rows; ?></p>
    <table>
        <tr>
            <th>ID</th>
            <th>Subject Name</th>
            <th>Question</th>
            <th>Answer</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['subject_name']; ?></td>
                <td><?php echo $row['question']; ?></td>
                <td><?php echo $row['answer']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

<?php endif; ?>

<!-- include the footer fragment -->
<?php require($_SERVER['DOCUMENT_ROOT'] . '/flashcards/fragments/footer.php'); ?>