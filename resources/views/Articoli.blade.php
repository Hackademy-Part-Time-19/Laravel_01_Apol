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
        <li><a href="{{route('Home')}}">Home</a></li>
        <li><a href="{{route('Articoli')}}">Articoli</a></li>
        <li><a href="{{route('ChiSono')}}">Chi Sono</a></li>
      </ul>


      <div class="search">
        <input type="text" placeholder="Cerca">
        <i class="ri-search-line"></i>
      </div>
    </nav>

  </header>
  <section class="about"> <!--Chi sono-->
    <h1 class="titoloArticoli">{{$titoloArticoli}}</h1>
    <div style="padding-top: 50px;" class="container text-center">

 @if (count($Articoli) == 0)
 <h1>Non ci sono articoli</h1>
 @else
 <div class="row">
        @foreach ($Articoli as $key => $articolo)
        <div id="card" class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
          <div style="border: 1px black solid; padding: 10px; height: 350px;display: flex; flex-direction: column; justify-content:space-evenly; align-items:start">
            <h2> {{$articolo['title']}}</h2>
            <h3>{{$articolo['category']}}</h3>
            <p>{{$articolo['description']}}</p>
            <a href="{{route('DetaglioArticolo',['id'=>$key])}}">Descrizione</a>
          </div>
        </div>
        @endforeach

      </div>
 @endif
   

 

    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>