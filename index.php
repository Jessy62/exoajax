<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
  <title>Liste clients</title>
</head>
<body>

  <h1>Listing clients</h1>
  <div id="choix">
    <select onchange="change(this.value)">
      <option value="">Selectionnez un profil client</option>
      <option value="1">Iron Man</option>
      <option value="2">Peter Parker</option>
      <option value="3">Bruce Wayne</option>
      <option value="4">Flash Gordon</option>
      <option value="5">Mario</option>
    </select>
  </div>

  <center><div id="reponse"></div></center>

  <script type="text/javascript" src="js/script.js"></script>

</body>
</html>
