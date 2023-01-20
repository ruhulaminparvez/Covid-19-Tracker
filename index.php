<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Tracker</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
    <?php include 'dbcon.php'; ?>
    <?php include 'logic/logic.php'; ?>
  
</head>
<body onload="fetch()"> 
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#"><span class="corona_title"><img class="img-fluid" src="img/blue2.png" alt="corona" width="30"></span> COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-id">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#state-id">State</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptoms-id">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#prevention-id">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#emergency-id">Contract</a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img class="img-fluid" src="img/family-covid.jpg" alt="Keep Safe" width="450" height="450">
            </div>
        </div>
        <div class="col-lg-7 col-md-5 col-7 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                <h1 class="slogan">Let's Stay Safe and Fight Together Against Cor<span class="corona_rot"><img class="img-fluid" src="img/red-v.png" alt="Corona" width="50"></span>na Virus</h1>

            </div>

        </div>
    </div>
</div>


<!-- ***************** CORONA WORLD STATE ******************* -->

<section class="corona_update container-fluid" id="state-id">
  <div>
    <h1 class="text-uppercase text-center"> <u>COVID-19 WORLD STATE</u> </h1>
  </div>

  <div>
        <div>
            <div class="w-100 h-100 d-flex justify-content-center">
                <img class="img-fluid" src="img/rate-bar.gif" alt="Bar" width="150" height="280">
            </div>
        </div>

  </div>      
  

  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Countries</th>
          <th scope="col">TotalConfirmed</th>
          <th scope="col">TotalRecovered</th>
          <th scope="col">TotalDeaths</th>
          <th scope="col">NewConfirmed</th>
          <th scope="col">NewRecovered</th>
          <th scope="col">NewDeaths</th>
        </tr>
      </thead>
    </table>
  </div>
</section>


<!-- ***************** ABOUT SECTION *********************** -->

<div class="container-fluid pt-5 pb-5" id="about-id">

  <div class="section_header text-center mb-5 mt-4">
      <h1><u>ABOUT COVID-19</u> </h1>
  </div>
  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5">
        <img src="img/corona.gif" alt="Covid Photo" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2>What is COVID-19 (Corona Virus)?</h2>
      <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
      <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
      
    </div>
  </div>
</div>

<!-- ***************** SYMPTOMS *********************** -->

<div class="container-fluid symptoms pt-5 pb-5" id="symptoms-id">

  <div class="section_header text-center mb-5 mt-4">
      <h1><u>SYMPTOMS</u> </h1>
</div>

  <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-2">
          <figure class="text-center">
            <img src="img/cough.png" alt="Cough" class="img-fluid" width="120" height="120">
            <figcaption>Cough</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-2">
          <figure class="text-center">
            <img src="img/nose.png" alt="Nose" class="img-fluid" width="120" height="120">
            <figcaption>Runny Nose</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-2">
          <figure class="text-center">
            <img src="img/fever.png" alt="Fever" class="img-fluid" width="120" height="120">
            <figcaption>Fever</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-4">
          <figure class="text-center">
            <img src="img/cold.png" alt="Cold" class="img-fluid" width="120" height="120">
            <figcaption>Cold</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-4">
          <figure class="text-center">
            <img src="img/tired.png" alt="Tired" class="img-fluid" width="120" height="120">
            <figcaption>Tiredness</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-4">
          <figure class="text-center">
            <img src="img/breath.png" alt="Breath" class="img-fluid" width="120" height="120">
            <figcaption>Difficulty Breathing</figcaption>
          </figure>
        </div>
    </div>

  </div>


  <!-- ***************** PREVENTION *********************** -->

<div class="container-fluid pt-5 pb-5" id="prevention-id">

  <div class="section_header text-center mb-5 mt-4">
      <h1><u>PREVENTION</u> </h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-2">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="img/wash.png" alt="Wash Hand" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
              <p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</p>
          </div>

        </div>

      </div>


      <div class="col-lg-4 col-md-4 col-12 mt-2">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="img/mask.png" alt="Mask" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
              <p>Cover your nose and mouth with a disposable tissue or fiexed elbow when you coughor sneeze</p>
          </div>

        </div>

      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-2">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="img/distance.png" alt="Maintain Distance" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
              <p>Avoid close contract (1 meter or 3 feet) with people who are unwell</p>
          </div>

        </div>

      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="img/home.png" alt="Stay Home" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
              <p>Stay home and self-isolate from others in the household if you feel unwell</p>
          </div>

        </div>

      </div>


      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="img/positive.png" alt="Stay Positive" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
              <p>Stay informed by watching news and follow the recommended practices</p>
          </div>

        </div>

      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">
            <img src="img/medical.png" alt="Medical Care" class="img-fluid" width="90" height="90">
          </figure>
          </div>
          <div class="col-lg-8 col-md-8 col-12">
              <p>If you have fever,cough and difficulty breathing, seek medical care early</p>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- ***************** CONTRACT US OR EMERGENCY *********************** -->

  <div class="container-fluid pt-5 pb-5" id="emergency-id">

<div class="section_header text-center mb-5 mt-4">
    <h1><u>CONTRACT US/EMERGENCY</u> </h1>
    <blockquote class="text-center text-muted">"If you notice that you have such symptoms, you can contract here for an emergency"</blockquote>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">


        <form class="text-left mt-5" action="" method="POST">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="enter your name" required autocomplete="off">
          </div>
          <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
          </div>
          <div class="form-group">
            <label>Mobile Number</label>
            <input type="number" class="form-control" name="number" placeholder="+088 017.." required autocomplete="off">
          </div>

          <div class="form-group">
          <label>Select Symptoms</label><br>
           <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
              <label class="custom-control-label" for="customcheckbox1">Cold</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
              <label class="custom-control-label" for="customcheckbox2">Fever</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
              <label class="custom-control-label" for="customcheckbox3">Difficulty in Breath</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
              <label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
            </div>
          </div>

          <div class="form-group">
            <label >Describe Briefly</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

        </div>
      </div>
    </div>
</div>

<!-- ***************** TOP CURSOR *********************** -->
<div class="container scrolltop float-right pr-5">
      <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>


<!-- ***************** FOOTER *********************** -->

<!-- ***************** TOP ARROW SCRIPT ************* -->
<script type="text/javascript">

  mybutton = document.getElementById("myBtn");
  //When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  function scrollFunction(){
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
  }
  // When the user click on the button, scroll to the top of the page
  function topFunction(){
    document.body.scrollTop = 0; //For Safari
    document.documentElement.scrollTop = 0; //For Chrome, Firefox, IE and Opear
  }

  function fetch(){
    $.get("https://api.covid19api.com/summary",

      function(data){
        //console.log(data['Countries'].length);
        var tbval = document.getElementById('tbval');

        for(var i=1; i<(data['Countries'].length); i++){
          var x = tbval.insertRow();
          x.insertCell(0);
          tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];

          x.insertCell(1);
          tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];

          x.insertCell(2);
          tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];

          x.insertCell(3);
          tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];

          x.insertCell(4);
          tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];

          x.insertCell(5);
          tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];

          x.insertCell(6);
          tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];


        }
      }

    )
  }

</script>

</body>
</html>

 



