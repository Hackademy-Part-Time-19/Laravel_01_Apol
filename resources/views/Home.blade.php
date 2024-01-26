<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Website</title>
  <link rel="stylesheet" href="/style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <header style="height: 200px;">
    <nav class="fill"> <!--Nav Bar-->
      <img src="./imagini/LogoSignature.png" alt="">
      <ul>
      <li><a href="{{ route('Home')}}">Home</a></li>
        <li><a href="{{ route('Articoli')}}">Articoli</a></li>
        <li><a href="{{ route('ChiSono')}}">Chi Sono</a></li>
      </ul>
      <div class="search">
        <input type="text" placeholder="Cerca">
        <i class="ri-search-line"></i>
      </div>
    </nav>
 
  </header>
  <section class="about"> <!--Chi sono-->
    <h1 class="titoloHome">{{ $titoloHome}}</h1>
    <div class="description">
      <div class="line"></div>
    
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>