<?php

?>

<!DOCTYPE html>
<html lang="de">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">

  <meta charset="UTF-8">
  <title>Note Hinzufügen</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff;
    }

    .navigation {
      width: 100%;
      background-color: #C4D9FF;
      padding: 20px 0;
      text-align: center;
    }

    .navigation ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .navigation a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    .form-container {
      background: #FBFBFB;
      padding: 50px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 400px;
      margin: 20px auto;
    }

    .form-container h1 {
      font-size: 30px;
      margin-bottom: 30px;
      text-align: center;
      color: #black;
      font-weight: bold;
      text-decoration-line: underline;
      text-decoration-thickness: 2px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #black;
    }

    .form-group input, .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #C4D9FF;
      border-radius: 4px;
      background-color: #E8F9FF;
    }

    .form-actions {
      display: flex;
      justify-content: space-between;
    }

    .form-actions button {
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-actions .save {
      background-color: #C4D9FF;
      color: white;
    }

    .form-actions .cancel {
      background-color: #C4D9FF;
      color: white;
    }

  </style>

</head>
<body>

<nav class="navigation">
  <ul>
    <li><a href="MainMenu.html">Menü</a></li>
    <li><a href="Absenzenliste.html">Absenzen</a></li>
    <li><a href="Notenliste.html">Noten</a></li>
    <li><a href="Schueler.html">Schüler</a></li>
  </ul>
</nav>

<div class="form-container">
  <h1>Note hinzufügen</h1>
  <form>
    <div class="form-group">
      <label for="student">Schüler:</label>
      <input type="text" id="student" placeholder="Vorname Nachname" required>
    </div>

    <div class="form-group">
      <label for="subject">Fach:</label>
      <select id="subject" required>
        <option value="Mathematik">Mathematik</option>
        <option value="Deutsch">Deutsch</option>
        <option value="Englisch">Englisch</option>
        <option value="Biologie">Biologie</option>
        <option value="Chemie">Chemie</option>
      </select>
    </div>

    <div class="form-group">
      <label for="grade">Note:</label>
      <input type="text" id="grade" placeholder="Note eingeben" required>
    </div>

    <div class="form-group">
      <label for="date">Datum:</label>
      <input type="date" id="date" required>
    </div>

    <div class="form-actions">
      <button type="submit" class="save">Speichern</button>
      <button type="button" class="cancel">Abbrechen</button>
    </div>
  </form>

</div>

</body>
</html>

