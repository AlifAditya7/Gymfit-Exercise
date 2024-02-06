<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<div>
        <style>
          body {
            background-image: url(<?= base_url('frontend-gymfit'); ?>/images/bg_gym2.jpg);
            font-family: 'Arial', sans-serif;
          }
        </style>
    </div>

    <!--Search-->
    <div class=" p-3 d-flex justify-content-end">
    <form action="#" method="get">
        <input type="text" id="search" name="search" placeholder="Cari Latihan">
        <button type="submit" class="rounded-circle"><i class="material-icons">search</i></button>
    </form>
    </div>
    <!--End-->

    <!-- roadmap -->
        <section class="p-5">
            <div class="container">
            <div class="row text-center g-4">
              <div class="col-md-4">
                <div class="card text-dark bg-white" >
                  <div class="card-body">
                    <img src="<?= base_url('frontend-gymfit'); ?>/images/dumblerowicon.jpg" width="100px">
                    <h3 class="card-title mb-3">dumbbell Row</h3>
                    <p class="card-text">
                     
                    </p>
                    <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#Dumbellrow">Selengkapnya</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card text-dark bg-white" >
                  <div class="card-body">
                    <img src="<?= base_url('frontend-gymfit'); ?>/images/deadlifticon.jpg" width="100px">
                    <h3 class="card-title mb-3">DeadLift</h3>
                    <p class="card-text">
                    </p>
                    <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#Deadlift">Selengkapnya</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card text-dark bg-white" >
                  <div class="card-body">
                    <img src="<?= base_url('frontend-gymfit'); ?>/images/plankicon.jpg" width="100px">
                    <h3 class="card-title mb-3">Plank</h3>
                    <p class="card-text">
                     
                    </p>
                    <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#Plank">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
            </div>

        <section class="p-5">
            <div class="container">
            <div class="row text-center g-4">
              <div class="col-md-4">
                <div class="card text-dark bg-white" >
                  <div class="card-body">
                    <img src="<?= base_url('frontend-gymfit'); ?>/images/situpicon.jpg" width="100px">
                    <h3 class="card-title mb-3">Sit Up</h3>
                    <p class="card-text">
                      <h1><b></b></h1>
                    </p>
                    <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#Situp">Selengkapnya</a>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card text-dark bg-white" >
                  <div class="card-body">
                    <img src="<?= base_url('frontend-gymfit'); ?>/images/pushupicon.jpg" width="100px">
                    <h3 class="card-title mb-3">Push Up</h3>
                    <p class="card-text">
                     
                    </p>
                    <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#Pushup">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
    <!--end-->

    <!-- Modal -->
<div class="modal fade" id="Pushup" tabindex="-1" role="dialog" aria-labelledby="PushUpLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="PushupLabel">Detail Program Latihan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
          <!-- Bootstrap Carousel -->
          <!--Push up-->
          <div id="carouselPushup" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- Image Corousel -->
                <img src="<?= base_url('frontend-gymfit'); ?>/images/pushup.jpg" class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
                 <!-- Video Slide -->
            <div class="carousel-item active">
                <img src="<?= base_url('frontend-gymfit'); ?>/images/pushupvid.gif" class="d-block w-100" alt="Slide 2">>
              </div>
              </div>
              <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#carouselPushup" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselPushup" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
  
          <!-- Additional details about the training program -->
          <p>Push-up adalah latihan angkat tubuh yang melibatkan otot dada, trisep, bahu, lengan, punggung, dan inti. Manfaatnya termasuk memperkuat otot tubuh bagian atas, meningkatkan stabilitas dan koordinasi, melatih otot inti, meningkatkan fleksibilitas, dan dapat dilakukan tanpa peralatan khusus.
            <hr><i class="material-icons">access_time</i> <b>3-5 set dengan 10x gerakan & istirahat 30 detik per set.</b><br>
            <i class="material-icons">fitness_center</i><b>dapat dilakukan oleh bodybuilder dan powerlifter.</b><br>
            <b>Alat Yang Dibutuhkan : -</b>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">selesai</button>
        </div>
      </div>
    </div>
  </div>
  <!--End-->

  <!--SitUp-->
  <div class="modal fade" id="Situp" tabindex="-1" role="dialog" aria-labelledby="SitUpLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="SitupLabel">Detail Program Latihan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
          <!-- Bootstrap Carousel -->
          <div id="carouselSitup" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- Image Corousel -->
                <img src="<?= base_url('frontend-gymfit'); ?>/images/situp2.jpg" class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
                 <!-- Video Slide -->
            <div class="carousel-item active">
                <img src="<?= base_url('frontend-gymfit'); ?>/images/situp.jpg" class="d-block w-100" alt="Slide 2">>
              </div>
              </div>
              <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#carouselSitup" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselSitup" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
  
          <!-- Additional details about the training program -->
          <p>Sit-up adalah latihan fisik yang melibatkan pengangkatan tubuh bagian atas dari posisi terlentang hingga posisi duduk atau setengah duduk. Latihan ini bertujuan untuk melatih otot-otot perut, khususnya otot rectus abdominis. Pada saat melakukan sit-up, Anda biasanya mengepalkan otot perut Anda untuk mengangkat bagian atas tubuh dari lantai, menjaga lutut ditekuk dan kaki tetap di lantai.
            <hr><i class="material-icons">access_time</i> <b>dilakukan 30 detik sekali latihan.</b><br>
            <i class="material-icons">fitness_center</i><b>dapat dilakukan oleh bodybuilder dan powerlifter.</b><br>
            <b>Alat Yang Dibutuhkan : -</b>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">selesai</button>
        </div>
      </div>
    </div>
  </div>
  <!--End-->

  <!--Plank-->
  <div class="modal fade" id="Plank" tabindex="-1" role="dialog" aria-labelledby="PlankLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="PlankLabel">Detail Program Latihan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
          <!-- Bootstrap Carousel -->
          <div id="carouselPlank" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- Image Corousel -->
                <img src="<?= base_url('frontend-gymfit'); ?>/images/plank.jpg" class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
                 <!-- Video Slide -->
            <div class="carousel-item active">
                <img src="<?= base_url('frontend-gymfit'); ?>/images/plank2.jpg" class="d-block w-100" alt="Slide 2">>
              </div>
              </div>
              <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#carouselPlank" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselPlank" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
  
          <!-- Additional details about the training program -->
          <p>Plank adalah latihan kebugaran yang melibatkan posisi tubuh terlentang dengan berat badan didukung oleh siku, lengan, dan jari kaki. Saat melakukan plank, tubuh membentuk garis lurus dari kepala hingga tumit, dan otot-otot inti, punggung, dan bahu diaktifkan untuk menjaga stabilitas.Plank secara efektif melatih kekuatan inti, meningkatkan postur tubuh, dan dapat menjadi bagian integral dari rutinitas latihan untuk pengembangan kekuatan dan stabilitas inti.
            <hr><i class="material-icons">access_time</i> <b>3-5 set dengan 10x push up & istirahat 30 detik per set.</b><br>
            <i class="material-icons">fitness_center</i><b>dapat dilakukan oleh bodybuilder dan powerlifter.</b><br>
            <b>Alat Yang Dibutuhkan : -</b>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">selesai</button>
        </div>
      </div>
    </div>
  </div>
  <!--End-->

  <!--Deadlift-->
  <div class="modal fade" id="Deadlift" tabindex="-1" role="dialog" aria-labelledby="DeadliftLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="DeadliftLabel">Detail Program Latihan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
          <!-- Bootstrap Carousel -->
          <div id="carouselDeadlift" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- Image Corousel -->
                <img src="<?= base_url('frontend-gymfit'); ?>/images/deadlift.jpg" class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
            <div class="carousel-item active">
                <img src="<?= base_url('frontend-gymfit'); ?>/images/deadlift2.jpg" class="d-block w-100" alt="Slide 2">>
              </div>
              </div>
              <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#carouselDeadlift" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselDeadlift" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
  
          <!-- Additional details about the training program -->
          <p>Deadlift adalah latihan angkat beban yang melibatkan pengangkatan beban dari lantai hingga posisi berdiri tegak. Gerakan ini melibatkan otot-otot punggung, kaki, dan inti. 
            <hr><i class="material-icons">access_time</i> <b>2-3 set & istirahat 3-5 menit per set untuk powerlifter dan 1,5-3 menit per set untuk bodybuilder.</b><br>
            <i class="material-icons">fitness_center</i><b>dapat dilakukan oleh bodybuilder dan powerlifter.</b><br>
            <b>Alat Yang Dibutuhkan : barbel, Bumper Plates atau Weight Plates, Rack atau Platform</b>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">selesai</button>
        </div>
      </div>
    </div>
  </div>
  <!--End-->

  <!--Dumbbell row-->
  <div class="modal fade" id="Dumbellrow" tabindex="-1" role="dialog" aria-labelledby="DumbellrowLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="DumbellrowLabel">Detail Program Latihan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
          <!-- Bootstrap Carousel -->
          <div id="carouselDumbelrow" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <!-- Image Corousel -->
                <img src="<?= base_url('frontend-gymfit'); ?>/images/dumblerow.jpg" class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
            <div class="carousel-item active">
                <img src="<?= base_url('frontend-gymfit'); ?>/images/dumblerow2.jpg" class="d-block w-100" alt="Slide 2">>
              </div>
              </div>
              <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#carouselDumbelrow" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselDumbelrow" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
  
          <!-- Additional details about the training program -->
          <p>Dumbbell row adalah latihan angkat beban yang bertujuan untuk menguatkan otot-otot punggung, terutama otot latissimus dorsi dan rhomboid. 
            <hr><i class="material-icons">access_time</i> <b>1-6x repetisi & istirahat 2-5 menit untuk powerlifter dan 6-12 repetisi & istirahat 1-2 menit untuk bodybuilder.</b><br>
            <i class="material-icons">fitness_center</i><b>dapat dilakukan oleh bodybuilder dan powerlifter.</b><br>
            <b>Alat Yang Dibutuhkan : barbel, dumbbell</b>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">selesai</button>
        </div>
      </div>
    </div>
  </div>
  <!--End-->
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?= $this->endSection(); ?>
