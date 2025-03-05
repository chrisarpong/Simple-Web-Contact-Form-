<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $issue = htmlspecialchars($_POST["issue"]);
    $comment = htmlspecialchars($_POST["comment"]);
} else {
    // Redirect to form if accessed directly
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Submitted Information</h2>

    <div>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Issue:</strong> <?php echo $issue; ?></p>
        <p><strong>Comment:</strong> <?php echo nl2br($comment); ?></p>
    </div>

    <form action="index.php" method="GET">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="issue" value="<?php echo $issue; ?>">
        <input type="hidden" name="comment" value="<?php echo $comment; ?>">
        <button type="submit">Edit</button>
    </form>
</body>
</html>
