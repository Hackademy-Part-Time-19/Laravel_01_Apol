<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Website</title>
  <link rel="stylesheet" href="/style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
  <header style="height: 200px;">
    <nav class="fill"> <!--Nav Bar-->
      <img src="./imagini/LogoSignature.png" alt="">
      <ul>
      <li><a href="/">Home</a></li>
        <li><a href="/Articoli">Articoli</a></li>
        <li><a href="/ChiSono">Chi Sono</a></li>
      </ul>
      <div class="search">
        <input type="text" placeholder="Cerca">
        <i class="ri-search-line"></i>
      </div>
    </nav>
 
  </header>
  <section class="about"> <!--Chi sono-->
    <h1 class="titoloHome">{{ $titoloHome }}</h1>
    <div class="description">
      <div class="line"></div>
      <p class="testDes">{{$testDes}}
      </p>
    </div>
  </section>


</body>

</html>