<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Futbolo akademija</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
      color: #111;
      scroll-behavior: smooth;
    }

    .navbar {
      background-color: #000;
    }

    .navbar-brand,
    .nav-link {
      color: white !important;
    }

    .nav-link:hover,
    .nav-link.active {
      color: #ffd500 !important;
    }

    .dropdown-menu {
      background-color: #111;
    }

    .dropdown-item {
      color: white;
    }

    .dropdown-item:hover {
      background-color: #ffd500;
      color: black;
    }

    .logo-box {
      background-color: #ffd500;
      color: #000;
      font-weight: bold;
      padding: 8px 12px;
      border-radius: 8px;
    }

    .hero {
      background-color: #ffffff;
      color: #000;
      padding: 45px 20px;
      text-align: center;
    }

    .carousel img {
      height: 420px;
      object-fit: cover;
    }

    .section-title {
      border-left: 8px solid #ffd500;
      padding-left: 12px;
      margin-bottom: 25px;
      font-weight: bold;
    }

    .card {
      transition: 0.3s;
    }

    .card:hover {
      transform: scale(1.02);
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .btn-yellow {
      background-color: #ffd500;
      color: black;
      font-weight: bold;
      border: none;
    }

    .btn-yellow:hover {
      background-color: #e6bf00;
    }

    .training-card {
      border-left: 6px solid #ffd500;
    }

    .price {
      font-size: 20px;
      font-weight: bold;
      background-color: #ffd500;
      display: inline-block;
      padding: 6px 12px;
      border-radius: 8px;
    }

    footer {
      background-color: #000;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }
  </style>
</head>

<body>

<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#pagrindinis">
       <img src="https://gintrafa.lt/wp-content/uploads/2023/01/GINTRA-FA-logo-150x150-1.png" class="d-block w-80" alt="Logo">
    </a>

    <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#meniu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="meniu">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link active" href="#pagrindinis">Pagrindinis</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#treniruotes" role="button" data-bs-toggle="dropdown">
            Treniruotės
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#2014">2014 A berniukai</a></li>
            <li><a class="dropdown-item" href="#2016">2016 berniukai</a></li>
            <li><a class="dropdown-item" href="#2020">2020 berniukai</a></li>
            <li><a class="dropdown-item" href="#u15">U15 mergaitės</a></li>
            <li><a class="dropdown-item" href="#u11">U11 mergaitės</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#apie">Apie akademiją</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#kontaktai">Kontaktai</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<section id="pagrindinis" class="hero">

<div id="naujienos" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active text-center">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUdWOQ-EMce8rBP29GjAG-Cyudv5FzOOpXew&s" class="d-block mx-auto" alt="Futbolo treniruotė">
      <div class="carousel-caption bg-dark bg-opacity-75 rounded">
        <h5>Naujas sezonas prasidėjo</h5>
        <p>Kviečiame vaikus prisijungti prie treniruočių.</p>
      </div>
    </div>

    <div class="carousel-item text-center">
      <img src="https://gintrafa.lt/wp-content/uploads/2023/03/10.jpg" class="d-block mx-auto text-center" alt="Futbolo komanda">
      <div class="carousel-caption bg-dark bg-opacity-75 rounded">
        <h5>Komandinis darbas</h5>
        <p>Mokomės palaikyti vieni kitus.</p>
      </div>
    </div>

    <div class="carousel-item text-center">
      <img src="https://gintrafa.lt/wp-content/uploads/2022/12/34-1024x683.jpg" class="d-block mx-auto" alt="Vaikai">
      <div class="carousel-caption bg-dark bg-opacity-75 rounded">
        <h5>Treniruotės visiems lygiams</h5>
        <p>Grupės sudaromos pagal amžių ir pasirengimą.</p>
      </div>
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#naujienos" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#naujienos" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</section>

<section class="container my-5">
  <h2 class="section-title">Treneriai ir grupės</h2>

  <div class="row g-4">

    <div class="col-md-4">
      <div class="card h-100">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR01Hfl9Ow3J8b1a1P6zsCKi3UdJszYiqhdSw&s" class="card-img-top" alt="Treneris">
        <div class="card-body">
          <h5>Treneris Ruben</h5>
          <p> – Kilęs iš Madrido, Ispanijos;</p>
          <p> – Įgijęs Ispanijos PRO trenerio licenciją;p>
          <p><b>Grupės:</b> 2014 m. A – vyr. treneris, 2016 m. A – asistentas.</p>
          <p><b>Kontaktai:</b> +34 654209426, el. p.: rperezcudero@gmail.com </p>
          <a href="#2014" class="btn btn-yellow">Plačiau</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOYF-2CnzwwAhRPtqRwlAbFQwnocsZoVqTOw&s" class="card-img-top" alt="Treneris">
        <div class="card-body">
          <h5>Treneris Henrikas Kubulkis</h5>
          <p> -Gimęs ir užaugęs Šiauliuose;</p>
          <p> -Buvęs Lietuvos jaunimo rinktinių narys;</p>
          <p><b>Grupės:</b> 2014 m. A – asistentas, 2016 m. A – vyr. treneris. 2020 m. – vyr. treneris;</p>
          <p><b>Kontaktai:</b> +370 646 10828; el.p.: henrikas.kubulkis@gmail.com</p>
          <a href="#2016" class="btn btn-yellow">Plačiau</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <img src="https://gintrafa.lt/wp-content/uploads/2024/08/G.Vasilenko.png" class="card-img-top" alt="Trenerė">
        <div class="card-body">
          <h5>Trenerė Gabrielė Vasilenko</h5>
          <p> -Kilusi iš Vilniaus;</p>
          <p> – Atstovauja Šiaulių „Gintros” komandai;<p>
          <p><b>Grupės:</b>  U-15 mergaitės – vyr. trenerė, U-11 mergaitės – vyr. trenerė, vartininkų trenerė.</p>
          <p><b>Kontaktai:</b> +370 604 03044, el. p.: gabrielevasi455@gmail.com</p>
          <a href="#u15" class="btn btn-yellow">Plačiau</a>
        </div>
      </div>
    </div>

  </div>
</section>

<section id="treniruotes" class="container my-5">
  <h2 class="section-title">Treniruotės</h2>

  <div id="2014" class="card training-card p-4 mb-4">
    <h4>2014 A berniukai</h4>
    <p><b>Treneria:</b> Ruben</p>
    <p><b>Laikas:</b> pirmadienis, antradienis ir ketvirtadienis, 17:00-18:30</p>
    <p><b>Vieta:</b> Šiaulių Gytarių progimnazijos stadionas</p>
    <p><b>Kontaktai:</b> +34 654209426, el. p.: rperezcudero@gmail.com</p>
    <p class="price">40 €/mėn.</p>
    <br>
    <a href="#pagrindinis" class="btn btn-dark mt-2">Grįžti į pradžią</a>
  </div>

  <div id="2016" class="card training-card p-4 mb-4">
    <h4>2016 berniukai</h4>
    <p><b>Treneris:</b> Henrikas</p>
    <p><b>Laikas:</b> pirmadienis, antradienis ir ketvirtadienis, 18:30-20:00</p>
    <p><b>Vieta:</b> Šiaulių Gytarių progimnazijos stadionas</p>
    <p><b>Kontaktai:</b> +370 646 10828; el.p.: henrikas.kubulkis@gmail.com</p>
    <p class="price">40 €/mėn.</p>
    <br>
    <a href="#pagrindinis" class="btn btn-dark mt-2">Grįžti į pradžią</a>
  </div>

 <div id="2020" class="card training-card p-4 mb-4">
    <h4>2020 berniukai</h4>
    <p><b>Treneris:</b> Henrikas</p>
    <p><b>Laikas:</b> trečiadienis, penktadienis, 18:30-19:30</p>
    <p><b>Vieta:</b> Šiaulių Gytarių progimnazijos stadionas</p>
    <p><b>Kontaktai:</b> +370 646 10828; el.p.: henrikas.kubulkis@gmail.com</p>
    <p class="price">30 €/mėn.</p>
    <br>
    <a href="#pagrindinis" class="btn btn-dark mt-2">Grįžti į pradžią</a>
  </div>

  <div id="u15" class="card training-card p-4 mb-4">
    <h4>U15 mergaitės</h4>
    <p><b>Treneris:</b> Gabrielė</p>
    <p><b>Laikas:</b> pirmadienis, trečiadienis, penktadienis, 17:00-18:30</p>
    <p><b>Vieta:</b> Šiaulių Gytarių progimnazijos stadionas</p>
    <p><b>Kontaktai:</b> +370 604 03044, el. p.: gabrielevasi455@gmail.com</p>
    <p class="price">35 €/mėn.</p>
    <br>
    <a href="#pagrindinis" class="btn btn-dark mt-2">Grįžti į pradžią</a>
  </div>

   <div id="u11" class="card training-card p-4 mb-4">
    <h4>U11 mergaitės</h4>
    <p><b>Treneris:</b> Gabrielė</p>
    <p><b>Laikas:</b> pirmadienis, trečiadienis, penktadienis, 18:30-19:45</p>
    <p><b>Vieta:</b> Šiaulių Gytarių progimnazijos stadionas</p>
    <p><b>Kontaktai:</b> +370 604 03044, el. p.: gabrielevasi455@gmail.com</p>
    <p class="price">35 €/mėn.</p>
    <br>
    <a href="#pagrindinis" class="btn btn-dark mt-2">Grįžti į pradžią</a>
  </div>
</section>

<section id="apie" class="container my-5">
  <h2 class="section-title">Apie akademiją</h2>

  <div class="row">
    <div class="col-md-8">
      <p>
        Futbolo akademijos tikslas – padėti berniukams ir mergaitėms tobulėti per futbolą.
        Treniruotėse daug dėmesio skiriama technikai, komandiniam darbui, disciplinai
        ir pasitikėjimui savimi.
      </p>

    </div>

    <div class="col-md-4">
      <div class="card p-3 bg-warning">
        <h5>Pagrindinės vertybės</h5>
        <ul>
          <li>Komandinis darbas</li>
          <li>Disciplina</li>
          <li>Tobulėjimas</li>
          <li>Pagarba</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="kontaktai" class="container my-5">
  <h2 class="section-title">Kontaktai</h2>

  <div class="row g-4">
    <div class="col-md-6">
      <h4>Susisiekite</h4>
      <p><b>Telefonas:</b>  +370 67020230</p>
      <p><b>El. paštas:</b> info@gintrafa.lt</p>
      <p><b>Adresas:</b> Šiauliai, Lietuva</p>

      <a href="#pagrindinis" class="btn btn-dark">Grįžti į pradžią</a>
    </div>

    <div class="col-md-6">
      <form onsubmit="rodytiPranesima(event)">
        <div class="mb-3">
          <label class="form-label">Vardas</label>
          <input type="text" class="form-control" placeholder="Įveskite vardą" required>
        </div>

        <div class="mb-3">
          <label class="form-label">El. paštas</label>
          <input type="email" class="form-control" placeholder="Įveskite el. paštą" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Žinutė</label>
          <textarea class="form-control" rows="4" placeholder="Parašykite žinutę" required></textarea>
        </div>

        <button type="submit" class="btn btn-yellow">Siųsti</button>
      </form>

      <div id="pranesimas" class="alert alert-success mt-3 d-none">
        Žinutė sėkmingai paruošta siuntimui!
      </div>
    </div>
  </div>
</section>

<footer>
  <p>© 2026 Gintra futbolo akademija | Autorė: Gabrielė Vasilenko</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function rodytiPranesima(event) {
    event.preventDefault();
    document.getElementById("pranesimas").classList.remove("d-none");
  }
</script>

</body>
</html>