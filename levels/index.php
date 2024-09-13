<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <?php require '../views/templates/head.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels en Informatie</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0 20px;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            font-size: 2.5rem;
            color: #2d5a91;
        }

        .level {
            background-color: #ffffff;
            margin: 20px auto;
            padding: 20px;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .level:hover {
            background-color: #e0ebf8;
        }

        h2 {
            margin: 0;
            font-size: 1.5rem;
            color: #2d5a91;
        }

        .level-content {
            display: none;
            margin-top: 10px;
            padding: 15px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            color: #555;
        }

        p {
            margin: 10px 0;
        }

        strong {
            color: #2d5a91;
        }
    </style>
</head>
<body>

    <?php require '../views/templates/menu.php' ?>


<h1>Levels</h1>

<div class="level" onclick="toggleContent('content1')">
    <h2>Level 1</h2>
    <div id="content1" class="level-content">
        <p><strong>Naam:</strong> Level 1</p>
        <p><strong>Beschrijving:</strong> Begin met de basisprincipes van het spel. Leer de besturing en ontdek eenvoudige uitdagingen.</p>
        <p><strong>Doelen:</strong> Behaal 100 punten om naar het volgende level te gaan.</p>
    </div>
</div>

<div class="level" onclick="toggleContent('content2')">
    <h2>Level 2</h2>
    <div id="content2" class="level-content">
        <p><strong>Naam:</strong> Level 2</p>
        <p><strong>Beschrijving:</strong> Dit level introduceert nieuwe obstakels. Je moet ze ontwijken en je vaardigheden verbeteren.</p>
        <p><strong>Doelen:</strong> Vermijd obstakels gedurende 3 minuten zonder levens te verliezen.</p>
    </div>
</div>

<div class="level" onclick="toggleContent('content3')">
    <h2>Level 3</h2>
    <div id="content3" class="level-content">
        <p><strong>Naam:</strong> Level 3</p>
        <p><strong>Beschrijving:</strong> Verzamel speciale items om extra punten te verdienen. Dit level test je snelheid en precisie.</p>
        <p><strong>Doelen:</strong> Verzamel 30 items binnen de tijdslimiet.</p>
    </div>
</div>

<div class="level" onclick="toggleContent('content4')">
    <h2>Level 4</h2>
    <div id="content4" class="level-content">
        <p><strong>Naam:</strong> Level 4</p>
        <p><strong>Beschrijving:</strong> De moeilijkheidsgraad neemt toe. Meer vijanden verschijnen, en je moet ze verslaan.</p>
        <p><strong>Doelen:</strong> Versla alle vijanden om door te gaan.</p>
    </div>
</div>

<div class="level" onclick="toggleContent('content5')">
    <h2>Level 5</h2>
    <div id="content5" class="level-content">
        <p><strong>Naam:</strong> Level 5</p>
        <p><strong>Beschrijving:</strong> Een puzzellevel waarin je problemen moet oplossen om verder te komen.</p>
        <p><strong>Doelen:</strong> Los 3 puzzels op om verder te gaan.</p>
    </div>
</div>

<div class="level" onclick="toggleContent('content6')">
    <h2>Level 6</h2>
    <div id="content6" class="level-content">
        <p><strong>Naam:</strong> Level 6</p>
        <p><strong>Beschrijving:</strong> Dit level test je uithoudingsvermogen. Hoe lang kun je overleven?</p>
        <p><strong>Doelen:</strong> Overleef 10 minuten zonder een leven te verliezen.</p>
    </div>
</div>

<div class="level" onclick="toggleContent('content7')">
    <h2>Level 7</h2>
    <div id="content7" class="level-content">
        <p><strong>Naam:</strong> Level 7</p>
        <p><strong>Beschrijving:</strong> Het eindlevel met de laatste en moeilijkste uitdagingen. Versla de eindbaas!</p>
        <p><strong>Doelen:</strong> Versla de eindbaas om het spel te voltooien.</p>
    </div>
</div>

<script>
    function toggleContent(contentId) {
        var content = document.getElementById(contentId);
        if (content.style.display === "none" || content.style.display === "") {
            content.style.display = "block";
        } else {
            content.style.display = "none";
        }
    }
</script>
<?php require '../views/templates/footer.php' ?>


<script>
    function toggleContent(contentId) {
        var content = document.getElementById(contentId);
        if (content.style.display === "none" || content.style.display === "") {
            content.style.display = "block";
        } else {
            content.style.display = "none";
        }
    }
</script>

<style>
    .level-content {
        display: none;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    td {
        text-align: left;
    }
</style>
