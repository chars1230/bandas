<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
</head>
<body>
    <main>

        <video class="cs-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="cs-video">
      <source src="https://www.youtube.com/watch?v=Vd4dlo7wOUQ" type="video/webm"> controls</source>
     
     
    </video>
    <article>
      <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
      <p>lorem ipsum dolor, sit amet consectetur adip</p>

      <p>lorem ipsum dolor, sit amet con</p>
    </article>
</main>
<script>
  var reproductor = videojs('cs-video',{
    fluid: true,
  });
</script>

</body>
</html>