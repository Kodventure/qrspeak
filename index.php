<!DOCTYPE html>
<html>
<head>
<title><?php echo $_GET['text'] ?? 'QR Read';?></title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width">
</head>
<body>
    <h1 style="text-align:center"><?php echo $_GET['text'] ?? 'QR Read';?></h1>
<p style="text-align:center">
        <button id="speakButton">READ</button>
</p>
    <script>

        var textToRead = '<?php echo $_GET['text'] ?? 'no word';?>'
        window.onload = function() {
            // Metni otomatik olarak okuma işlemi
            var utterance = new SpeechSynthesisUtterance(textToRead);
            speechSynthesis.speak(utterance);

            // Düğmeye tıklama işlemi
            document.getElementById("speakButton").addEventListener("click", function() {
                    console.log(textToRead)
                speechSynthesis.speak(utterance);
            });

        };
    </script>
</body>
</html>
