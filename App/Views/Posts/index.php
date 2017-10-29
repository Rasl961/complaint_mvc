<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<h1>Posts</h1>

<ul>
<?php
foreach ($posts as $post):?>
<li>
<?php echo $post['title'];
      echo $post['content']
      ?>
<?php endforeach; ?>
</li>
</ul>
</body>
</html>