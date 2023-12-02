<?php
//Assume that "item" and "priority" have been posted from a form
//Check for posted data and filter
if(!empty($_POST)){
    $item = $_POST['item'] ?? '';
    $priority = $_POST['priority']?? '';
    if(!empty($item) && !empty($priority)){
        $item = filter_var(strip_tags($item), FILTER_SANITIZE_STRING);
        $priority = (int) $priority;
        echo 'Data is validated and sanitized, handle it ...';
    }else{
        echo 'Invalid input ... redirecting';
        //header('Location: http://localhost:90/repository/learning-progress/zend-php-enroll/III/test.php');
        //exit;
    }
}else{
    $item = '';
    $priority = '';
    // no form data has been posted
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action="test.php" method="post">
        <Fieldset>
            <legend>Add Checklist Item</legend>
            <label for="item">Enter the Checklist Item</label>
            <input type="text" name="item" id="item" value="<?= htmlspecialchars($item); ?>">
            <label for="priority">Enter the priority</label>
            <input type="text" name="priority" id="priority" value="<?= htmlspecialchars($priority); ?>">
            <input type="submit" value="Submit">
        </Fieldset>
        </form>
    </body>
</html>

<?php phpinfo(INFO_VARIABLES); ?>
