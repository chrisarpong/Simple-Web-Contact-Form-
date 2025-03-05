<?php
// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $issue = htmlspecialchars($_POST['issue']);
  $comment = htmlspecialchars($_POST['comment']);
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
  <div class="form-container">
    <h1>Form Submission</h1>
    <div id="submittedData">
      <p><strong>Name:</strong> <?php echo $name; ?></p>
      <p><strong>Email:</strong> <?php echo $email; ?></p>
      <p><strong>Issue:</strong> <?php echo $issue; ?></p>
      <p><strong>Comment:</strong> <?php echo $comment; ?></p>
    </div>

    <!-- Edit Button -->
    <form action="index.html" method="GET">
      <input type="hidden" name="name" value="<?php echo $name; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="issue" value="<?php echo $issue; ?>">
      <input type="hidden" name="comment" value="<?php echo $comment; ?>">
      <button type="submit">Edit</button>
    </form>
  </div>
</body>
</html>