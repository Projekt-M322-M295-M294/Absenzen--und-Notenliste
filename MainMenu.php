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
  <title>Menu</title>

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
      padding: 29.5px 0;
    }

    .menu-container {
      background: #FBFBFB;
      padding: 50px;
      border-radius: 16px;
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
      width: 400px;
      margin: 20px auto;
    }

    .menu-container h1 {
      font-size: 30px;
      margin-bottom: 30px;
      text-align: center;
      color: #000;
      font-weight: bold;
      text-decoration-line: underline;
      text-decoration-thickness: 2px;
    }

    .menu-section {
      margin-bottom: 25px;
      text-align: center;
    }

    .menu-section h2 {
      font-size: 20px;
      color: #000;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .menu-section button {
      padding: 12px 20px;
      font-size: 16px;
      color: white;
      background-color: #C4D9FF;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
      width: 80%;
    }

    .menu-section button:hover {
      background-color: #A3C2E8;
    }

    .quick-actions {
      margin-top: 20px;
      padding-top: 20px;
      border-top: 2px solid #C4D9FF;
    }

    .quick-actions h2 {
      font-size: 20px;
      color: black;
      margin-bottom: 15px;
      font-weight: bold;
      text-align: center;
    }

    .quick-actions ul {
      list-style: none;
      padding: 0;
      margin: 0;
      text-align: center;
    }

    .quick-actions ul li {
      margin-bottom: 12px;
      font-size: 16px;
    }

    .quick-actions ul li a {
      text-decoration: none;
      color: #000;
      display: inline-block;
      padding: 10px 16px;
      border: 1px solid #C4D9FF;
      border-radius: 8px;
      background-color: #E8F9FF;
      transition: background-color 0.3s, color 0.3s;
    }

    .quick-actions ul li a:hover {
      background-color: #C4D9FF;
      color: white;
    }

  </style>

</head>
<body>

  <nav class="navigation"></nav>

  <div class="menu-container">
    <h1>Menü</h1>
    <div class="menu-section">
      <h2>Absenzenliste</h2>
      <button onclick="location.href='absenzenliste.html'">Zu den Absenzen</button>
    </div>
    <div class="menu-section">
      <h2>Notenliste</h2>
      <button onclick="location.href='notenliste.html'">Zu den Noten</button>
    </div>
    <div class="menu-section">
      <h2>Schülerliste</h2>
      <button onclick="location.href='schuelerliste.html'">Zu den Schülern</button>
    </div>
    <div class="quick-actions">
      <h2>Quick-Aktionen</h2>
      <ul>
        <li><a href="add_absence.html">Absenzen hinzufügen</a></li>
        <li><a href="add_grade.html">Noten hinzufügen</a></li>
      </ul>
    </div>
  </div>

</body>
</html>
