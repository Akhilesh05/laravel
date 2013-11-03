<head>
  <title><?= $title ?></title>
</head>

<body>
<h1><?= $name  ?></h1>
<form action="/form" method="post">
  <label for="name">name: </label>
  <input type="text" name="name" />
  <label for="email">email: </label>
  <input type="email" name="email" />
  <label for="password">password: </label>
  <input type="password" name="password" />
  <input type="submit" value="post" />
</form>

</body>
