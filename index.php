<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="shortcut icon" href="assets/img/behance-icon.png" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

  <link rel="stylesheet" href="assets/css/style.css" />

  <link href="assets/fontawesome/css/all.css" rel="stylesheet" />
  <!--load all styles -->

  <title>Behance</title>
</head>

<body>
  <section class="fixed-top">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white pad-nav">
      <a class="navbar-brand" title="Behance" href="#"><img src="assets/img/Behance_logo.png" class="logo" alt="" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-body font-weight-bold" title="Discover" href="#">Discover</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-body font-weight-bold" title="Livestreams" href="#">Livestreams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-body font-weight-bold" title="Jobs" href="#">Jobs</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item pl-3">
            <a class="btn text-body tomNav lengkung" href="#" role="button">Log In</a>
          </li>
          <li class="nav-item pl-3">
            <a class="btn text-white tomNav-s lengkung" href="#">Sign Up</a>
          </li>
          <li class="pl-3 ml-4">
            <a href="#">
              <img src="assets/img/adobe-systems.png" id="adobe" alt="">
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Akhir Nav -->

    <div class="jumbotron bg-white border-top border-bottom">
      <!-- header -->
      <div class="mt-4 pencarian row-lg">
        <form class="input-group">
          <i class="fas fa-search fa-lg icon-cari"></i>
          <input id="search" type="text" class="col-lg border-right" name="search" placeholder="Search the creative world at work" />
          <button class="btn tomSearch-active ml-3" type="button">Projects</button>
          <button class="btn tomSearch ml-2" type="button">Images</button>
          <button class="btn tomSearch ml-2" type="button">Prototypes</button>
          <button class="btn tomSearch ml-2" type="button">People</button>
          <button class="btn tomSearch ml-2 mr-3" type="button">Moodboards</button>
        </form>

      </div>
      <!-- akhir header -->

      <div class="mt-4 row-lg sorting">
        <form class="input-group"></form>
        <button class="btn tomGar text-body font-weight-bold dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
          <i class="fab fa-creative-commons-remix mr-2"></i>Creative Fields</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
        <button class="btn tomGar text-body ml-2 font-weight-bold dropdown-toggle"><i class="fas fa-tools mr-2"></i>Tools</button>
        <button class="btn tomGar text-body ml-2 font-weight-bold dropdown-toggle"><i class="fas fa-palette mr-2"></i>Color</button>
        <button class="btn tomGar text-body ml-2 font-weight-bold dropdown-toggle"><i class="fas fa-map-marker-alt mr-2"></i>Location</button>
        <button class="btn tomGar text-body ml-2 font-weight-bold dropdown-toggle"><i class="fas fa-graduation-cap mr-2"></i>Schools</button>
      </div>
    </div>

  </section>

  <!-- <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-bottom pad-nav">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>
  </section> -->

  <div class="grid-container">

    <!-- content1 -->
    <span class="menu1">
      <div class="card border-0" style="width: 314px;">
        <div class="isi-konten">
          <img class="card-img-top" src="assets/img/NGC.jpg" alt="Card image cap">
          <div href="#" class="overlay" title="Link to project">
            <a href="#" class="icon">
              <button class="btn btn-sm tomOver"><i class="fas fa-save mr-2"></i>Save</button>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 mt-2">
            <span>
              <a href="#" class="card-text">River Plate</a>
              <p class="owners">Multiple owners<i class="fas fa-caret-down ml-2"></i></p>
            </span>
          </div>
          <div class="col-lg-5 mt-2">
            <span class="d-flex justify-content-end">
              <span>
                <i class="fas fa-thumbs-up fa-xs icon-view"></i>
                <span class="desk">254</span>
              </span>
              <span class="ml-3">
                <i class="fas fa-eye fa-xs icon-view"></i>
                <span class="desk pr-1">1k</span>
              </span>
            </span>
          </div>
        </div>



      </div>
    </span>
    <!-- akhirContent1 -->

  </div>





  <script type="text/javascript">
    $(document).ready(function() {
      $(document).tooltip();
    });
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/bcce6f187a.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>