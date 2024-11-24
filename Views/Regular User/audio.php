<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Quran Player</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/audio.css">
</head>
<body>
<div class="container">
    <div class="player">
        <div class="surahs"></div>
        <audio src="" class="quranplayer" controls autoplay></audio>
        <div class="ayah">Click on surah to listen</div>
        <div class="buttons">
            <div class="icon prev"><i class="fas fa-backward"></i></div>
            <div class="icon play"><i class="fas fa-play"></i></div>
            <div class="icon next"><i class="fas fa-forward"></i></div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/audio.js"></script>
</body>
</html>
