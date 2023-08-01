<!DOCTYPE html>
<html>
<head>
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        .container-full {
            min-height: 100%;
            display: flex;
            align-items: stretch;
        }
        
        .sidebar {
            background-color: #ffc107;
            padding: 20px;
            width: 30%;
        }
        
        .content {
            flex-grow: 1;
            background-color: #e1f3fc;
            padding: 20px;
        }
        .h2{
            font-size:40px;
        }
        .form-check-label {
            font-size: 20px;
        }
        
        #result {
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
        
        .text-danger {
            color: #dc3545;
            font-size:40px;
        }
        .penyakit{
            font-size:25px;
        }
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #ffc107;
            border-color: #ffc107;
        }
    </style>
</head>
<body>
    <header>
        <div class="collapse bg-warning" id="navbarHeader">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Kami adalah tim yang berdedikasi dalam memberikan rekomendasi makanan yang tepat berdasarkan kondisi kesehatan Anda. 
                    Dengan pengetahuan gizi dan kecerdasan buatan, kami hadir sebagai solusi praktis untuk mencapai gaya hidup sehat. Tim ahli kami bekerja keras 
                    untuk memberikan rekomendasi yang disesuaikan dengan kondisi Anda. Kepercayaan dan kerahasiaan data Anda adalah prioritas kami. Bergabunglah dengan 
                    kami dalam perjalanan menuju kesehatan yang lebih baik!.</p>
                  </div>
                  <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                      <li><a href="#" class="text-white">Follow on Twitter</a></li>
                      <li><a href="#" class="text-white">Like on Facebook</a></li>
                      <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="navbar navbar-dark bg-primary shadow-sm">
              <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                  aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
            </div>
        </header>
    
    <div class="container-full">
        <div class="sidebar">
            <form id="diagnosisForm" method="POST">
                <h2 class="text-danger">Diagnosis Penyakit</h2>
                <label class="penyakit"for="symptom">Penyakit:</label>
                <ul class="list-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Migrain" id="firstCheckbox" name="symptoms[]">
                            <label class="form-check-label" for="firstCheckbox">Migrain</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Diabetes" id="secondCheckbox" name="symptoms[]">
                            <label class="form-check-label" for="secondCheckbox">Diabetes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Hipertensi" id="thirdCheckbox" name="symptoms[]">
                            <label class="form-check-label" for="thirdCheckbox">Hipertensi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Maag" id="fourthCheckbox" name="symptoms[]">
                            <label class="form-check-label" for="fourthCheckbox">Maag</label>
                        </div>
                         
                </ul>
                <br>
                <br>
                <button type="submit" name="diagnose" value="Diagnosis" class="btn btn-primary">Diagnosis</button>
            </form>
        </div>
        <div class="content">
            <div id="output"></div>
        </div>
    </div>
    
    <script>
        document.getElementById("diagnosisForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Mencegah refresh halaman
            
            getCheckboxStatus();
        });
        
              function getCheckboxStatus() {
              var firstCheckbox = document.getElementById("firstCheckbox");
              var secondCheckbox = document.getElementById("secondCheckbox");
              var thirdCheckbox = document.getElementById("thirdCheckbox");
              var fourthCheckbox = document.getElementById("fourthCheckbox");

              var firstChecked = firstCheckbox.checked;
              var secondChecked = secondCheckbox.checked;
              var thirdChecked = thirdCheckbox.checked;
              var fourthChecked = fourthCheckbox.checked;

              var output1 = "";
              var output2 = "";

              if (firstChecked && secondChecked && !thirdChecked && !fourthChecked) {
                  output1 += "<p>Pisang,Oatmeal, Sayuran, Ikan </p>";
                  output2 += "<p>Alkohol, Kafe, Gula, Tepung,</p>";
              } else if (firstChecked && !secondChecked && thirdChecked && !fourthChecked) {
                  output1 += "<p>Pisang, Brokoli, Bayam, Ikan salmon, Wortel, Bayam</p>";
                  output2 += "<p>Alkohol, Kafein, Nasi, Makanan tinggi garam</p>";
              } else if (firstChecked && !secondChecked && !thirdChecked && fourthChecked) {
                  output1 += "<p>Pisang, Sayuran, Oatmeal </p>";
                  output2 += "<p>Alkohol, Kafein, Makanan tinggi garam</p>";
              } else if (!firstChecked && secondChecked && thirdChecked && !fourthChecked) {
                  output1 += "<p>Oatmeal, Sayuran, Ikan</p>";
                  output2 += "<p>Gula, Tepung, Nasi, Kafein, Makanan Tinggi Garam</p>";
              } else if (!firstChecked && secondChecked && !thirdChecked && fourthChecked) {
                  output1 += "<p>Pisang, Sayuran, Ikan, Oatmel</p>";
                  output2 += "<p>Gula, Tepung, Nasi, Makanan Pedas, Kafein, Soda, </p>";
              } else if (!firstChecked && !secondChecked && thirdChecked && fourthChecked) {
                  output1 += "<p>Ikan salmon, Wortel, Bayam, Oatmel, Sayuran </p>";
                  output2 += "<p>Kafein, Nasi, Makanan Tinggi Garam, Makanan Pedas, Soda </p>";
              } else if (firstChecked && secondChecked && thirdChecked && fourthChecked) {
                  output1 += "<p>Pisang, Sayuran, Ikan, Oatmel </p>";
                  output2 += "<p>Alkohol, Gula, Tepung, Kafein, Nasi, Makanan Tinggi Garam, Makanan Pedas, Soda  </p>";
              } else if (firstChecked && secondChecked && thirdChecked && !fourthChecked) {
                  output1 += "<p>Alkohol, Kafein, Oatmeal, Sayuran, Ikan</p>";
                  output2 += "<p>Alkohol, Gula, Tepung, Kafein, Nasi, Makanan Tinggi Garam, Makanan Pedas, Soda </p>";
              } else if (!firstChecked && secondChecked && thirdChecked && fourthChecked) {
                  output1 += "<p>Oatmeal, Sayuran, Ikan, Sayuran </p>";
                  output2 += "<p>Gula, Tepung, Nasi, Kafein, Nasi, Makanan Tinggi Garam  </p>";
              } else if (firstChecked && !secondChecked && thirdChecked && fourthChecked) {
                  output1 += "<p>Pisang, Ikan, Oatmel, Sayuran</p>";
                  output2 += "<p>Alkohol, Kafein, Nasi, Makanan Tinggi Garam, Makanan Tinggi Pedes </p>";
              } else if (firstChecked && secondChecked && !thirdChecked && fourthChecked) {
                  output1 += "<p>Pisang, Brokoli, Bayam, Oatmeal, Sayuran, Ikan, Oatmel, Sayuran </p>";
                  output2 += "<p>Alkohol, Kafein, Gula, Tepung, Nasi, Makanan Pedas, Soda </p>";
              } else {
                  // Hanya menampilkan satu output jika ada kesamaan dengan kondisi lain
                  if (firstChecked) { //Migrain
                      output1 += "<p>Pisang, Brokoli, Bayam</p>";
                      output2 += "<p>Alkohol, Keju, Kafein</p>";
                  }
                  if (secondChecked) {//Diabetes
                      output1 += "<p>Oatmeal, Sayuran, Ikan </p>";
                      output2 += "<p>Gula, Tepung, Nasi</p>";
                  }
                  if (thirdChecked) {//Hipertensi
                      output1 += "<p>Ikan salmon, Wortel, Bayam</p>";
                      output2 += "<p>Kafein, Nasi, Makanan Tinggi Garam</p>";
                  }  if (fourthChecked) {//Maag
                      output1 += "<p>Oatmel, Sayuran</p>";
                      output2 += "<p>Makanan Pedas, Kafein, Soda</p>";
                  }
              }

              document.getElementById("output").innerHTML = "<h2>Rekomendasi Makanan:</h2>" + output1 + "<h2>Larangan Makanan:</h2>" + output2;
}

    </script>

  <?php
  // Data gejala dan rekomendasi makanan
  $diseases = array(
    'migrain' => array(
      'name' => 'Migrain',
      'recommendedFood' => array('Ikan', 'Brokoli', 'Alpukat'),
      'restrictedFood' => array('Cokelat', 'Keju', 'Kafein')
    ),
    'hipertensi' => array(
      'name' => 'Hipertensi',
      'recommendedFood' => array('Kentang', 'Bayam', 'Alpukat'),
      'restrictedFood' => array('Garam', 'Kafein', 'Alkohol')
    ),
    'diabetes' => array(
      'name' => 'Diabetes',
      'recommendedFood' => array('Ikan', 'Bayam', 'Kacang-kacangan'),
      'restrictedFood' => array('Gula', 'Pasta', 'Makanan manis')
    )
  );

  if(isset($_POST['diagnose'])) {
    $symptom = $_POST['symptom'];

    if(array_key_exists($symptom, $diseases)) {
      $disease = $diseases[$symptom];

      echo '<div id="result">';
      echo '<h2>Hasil Diagnosis</h2>';
      echo 'Anda didiagnosis menderita: ' . $disease['name'] . '<br>';
      echo 'Rekomendasi makanan yang harus dimakan:<br>';
      echo '<ul>';
      foreach($disease['recommendedFood'] as $food) {
        echo '<li>' . $food . '</li>';
      }
      echo '</ul>';
      echo 'Larangan makanan:<br>';
      echo '<ul>';
      foreach($disease['restrictedFood'] as $food) {
        echo '<li>' . $food . '</li>';
      }
      echo '</ul>';
      echo '</div>';
    } else {
      echo 'Mohon pilih gejala yang valid.';
    }
  }
  ?>

</body>
</html>