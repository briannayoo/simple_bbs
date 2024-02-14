<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update - Simple BBS</title>
</head>
<body>
  <h1>글수정</h1>
  <form action="update_insert.php" method="POST">
    <p>
      <label for="username">이름:</label>
      <input type="text" id="username" name="username" require>
    </p>
    <p>
      <label for="usermsg">메시지:</label>
      <textarea id="usermsg" name="usermsg" cols="30" row="usermsg"></textarea>
    </p>
    <button>전송</button>
  </form>
  
</body>
</html>