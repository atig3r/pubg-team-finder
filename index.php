<!DOCTYPE html>
<html>
<head>
    <!-- Copyright by E-Gaming.ir | Allrights reserved 2018
    Alireza Behnamnik | Github: https://github.com/atig3r -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="
        E-Gaming,egaming,PinG,kahesh ping,kahesh,game,rust,dota,dota2,csgo,steam,پینگ,کاهش پینگ,کاهش,بازی,دوتا,دوتا2,دوتا 2,کانتر,آنلاین,بازی آنلاین,rust,server,steam,rust server,server rust,steam server,persian,irani,سرور راست, سرور استیم, سرور تحت استیم, استیم سرور, سرور ایرانی, سرور ایرانی بازی, سرور بازی ایرانی, سرور ایرانی rust,سرور ایرانی بازی rust,سرور rust
        ">
    <meta name="keywords" content="
        E-Gaming,egaming,PinG,kahesh ping,kahesh,game,rust,dota,dota2,csgo,steam,پینگ,کاهش پینگ,کاهش,بازی,دوتا,دوتا2,دوتا 2,کانتر,آنلاین,بازی آنلاین,rust,server,steam,rust server,server rust,steam server,persian,irani,سرور راست, سرور استیم, سرور تحت استیم, استیم سرور, سرور ایرانی, سرور ایرانی بازی, سرور بازی ایرانی, سرور ایرانی rust,سرور ایرانی بازی rust,سرور rust
        " />
    <meta name="description" content="E-Gaming">
    <meta name="author" content="Alireza Behnamnik | T!G3R">

    <link rel="shortcut icon" type="image/ico" href="favicon.ico" />
    <title>E-Gaming | تیم یابی PUBG</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/test.css"> -->

    <!-- JS -->
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="assets/js/viewportchecker.js"></script>

    <!-- Material Design -->
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/mdb.min.css">

    <script type="text/javascript" src="assets/js/additional.min.js"></script>
</head>

<body>
    <!-- JS -->
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>

    <div class="container">
        <div class="row header">
            <div class="col-md-6 text-center">
                <a href="https://e-gaming.ir"><img src="assets/img/eglogo.png" class="" width="100px;" alt=""></a>
            </div>
            <div class="col-md-6 text-center">
                <img src="assets/img/plogo.png" class="img-responsive" width="240px;" alt="">
            </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-left">
              <small>v2.0</small>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-right">
                    <h4 class="card-header primary-color white-text">
                             E-Gaming | تیم یابی بازی PUBG
                             <!-- Go to your home page -->
                             <!-- <a href="index.php" style="width: 32px;float: left;color:#FFF;"> <i class="fas fa-home" aria-hidden></i> </a> -->
                         </h4>
                    <div class="card-body">

                        <ul class="nav md-pills nav-justified pills-primary">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#register" role="tab">ثبت نام</a>
                            </li>
                            <li class="nav-item" style="direction:ltr;">
                                <a class="nav-link" data-toggle="tab" href="#duo" role="tab">Duo</a>
                            </li>
                            <li class="nav-item" style="direction:ltr;">
                                <a class="nav-link" data-toggle="tab" href="#squad" role="tab">Squad</a>
                            </li>
                            <li class="nav-item" style="direction:ltr;">
                                <a class="nav-link" data-toggle="tab" href="#2man-squad" role="tab">2-Man Squad</a>
                            </li>
                            <li class="nav-item" style="direction:ltr;">
                                <a class="nav-link" data-toggle="tab" href="#3man-squad" role="tab">3-Man Squad</a>
                            </li>
                        </ul>
                        <hr>
                        <div class="tab-content">

                            <!-- Register form -->
                            <div class="tab-pane fade in show active" id="register" role="tabpanel">
                                <form action="send.php" method="post">
                                    <!-- name input -->
                                    <div class="md-form">
                                        <input type="text" id="fm-1" name="name" class="form-control" required>
                                        <label for="fm-1">نام و نام خانوادگی</label>
                                        <small class="attention">وارد کردن حداقل نام اجباری است.</small>
                                    </div>
                                    <!-- uname input -->
                                    <div class="md-form">
                                        <input type="text" id="fm-2" name="uname" class="form-control" required>
                                        <label for="fm-2">نام شما در بازی</label>
                                    </div>
                                    <!-- name input -->
                                    <div class="md-form">
                                        <input type="text" id="fm-3" name="link" class="form-control" required>
                                        <label for="fm-3">https://steamcommunity.com/id/xxx</label>
                                        <small class="attention">لینک پروفایل استیم را مانند نمونه وارد کنید.</small>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="fm-4">مد مورد نظر شما برای بازی:</label>
                                        <select name="mode" class="form-control" id="fm-4" required>
                                        <option>انتخاب کنید</option>
                                        <option value="1">Duo</option>
                                        <option value="2">Squad</option>
                                        <option value="3">2-Man Squad</option>
                                        <option value="4">3-Man Squad</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="fm-5">چشم انداز:</label>
                                        <select name="perspective" class="form-control" id="fm-5" required>
                                        <option>انتخاب کنید</option>
                                        <option value="1">TPP</option>
                                        <option value="2">FPP</option>
                                      </select>
                                    </div>

                                    <button type="button" onclick="save()" class="btn btn-primary"> ثبت نام </button>
                                </form>
                            </div>

                            <!-- Duo List -->
                            <div class="tab-pane fade" id="duo" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                       TPP <img src="assets/img/tpp.png" alt="" width="32px;">
                                    </div>
                                    <div class="col-md-6 text-center">
                                      FPP <img src="assets/img/fpp.png" alt="" width="32px;">
                                    </div>
                                </div>
                                <hr>
                                <table class="table table-hover table-responsive-md table-fixed table-bordered">
                                  <thead>
                                    <tr>
                                      <th> # </th>
                                      <th> نام و نام خانوادگی </th>
                                      <th> نام بازیکن </th>
                                      <th> پروفایل استیم </th>
                                      <th> چشم انداز </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                          include('db.php');
                                          $getData = $conn->prepare("SELECT * FROM features_pubg_team WHERE mode = '1' ORDER BY id ASC");
                                          $getData->execute();
                                          $sql = $getData->fetchAll();
                                          foreach ($sql as $data) {
                                              $id = $data['id'];
                                              $name = $data['name'];
                                              $uname = $data['uname'];
                                              $link = $data['link'];
                                              $perspective = $data['perspective'];
                                              $status = $data['status'];

                                              if ($perspective == 1) {
                                                  $newP = "TPP";
                                              }elseif ($perspective == 2) {
                                                  $newP = "FPP";
                                              }

                                              if ($status != 0) {
                                                  echo '
                                                  <tr>
                                                      <th scope="row">'.$id.'</th>
                                                      <td>'.$name.'</td>
                                                      <td>'.$uname.'</td>
                                                      <td class="text-center"> <a href="'.$link.'" target="_blank"> <i class="fab fa-steam-square fa-2x" aria-hidden="true"></i> </a> </td>
                                                      <td class="text-center"> <img src="assets/img/'.$newP.'.png" alt="'.$newP.'" width="42px;" class="img-rounded center-block" data-toggle="tooltip" data-placement="top" title="'.$newP.'"> </td>
                                                  </tr>
                                                  ';
                                              }


                                          }
                                      ?>
                                  </tbody>
                                </table>
                            </div>

                            <!-- Squad List -->
                            <div class="tab-pane fade" id="squad" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                       TPP <img src="assets/img/tpp.png" alt="" width="32px;">
                                    </div>
                                    <div class="col-md-6 text-center">
                                      FPP <img src="assets/img/fpp.png" alt="" width="32px;">
                                    </div>
                                </div>
                                <hr>
                                <table class="table table-hover table-responsive-md table-fixed table-bordered">
                                  <thead>
                                    <tr>
                                      <th> # </th>
                                      <th> نام و نام خانوادگی </th>
                                      <th> نام بازیکن </th>
                                      <th> پروفایل استیم </th>
                                      <th> چشم انداز </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                          include('db.php');
                                          $getData = $conn->prepare("SELECT * FROM features_pubg_team WHERE mode = '2' ORDER BY id ASC");
                                          $getData->execute();
                                          $sql = $getData->fetchAll();
                                          foreach ($sql as $data) {
                                              $id = $data['id'];
                                              $name = $data['name'];
                                              $uname = $data['uname'];
                                              $link = $data['link'];
                                              $perspective = $data['perspective'];
                                              $status = $data['status'];

                                              if ($perspective == 1) {
                                                  $newP = "TPP";
                                              }elseif ($perspective == 2) {
                                                  $newP = "FPP";
                                              }

                                              if ($status != 0) {
                                                  echo '
                                                  <tr>
                                                      <th scope="row">'.$id.'</th>
                                                      <td>'.$name.'</td>
                                                      <td>'.$uname.'</td>
                                                      <td class="text-center"> <a href="'.$link.'" target="_blank"> <i class="fab fa-steam-square fa-2x" aria-hidden="true"></i> </a> </td>
                                                      <td class="text-center"> <img src="assets/img/'.$newP.'.png" alt="'.$newP.'" width="42px;" class="img-rounded center-block" data-toggle="tooltip" data-placement="top" title="'.$newP.'"> </td>
                                                  </tr>
                                                  ';
                                              }


                                          }
                                      ?>
                                  </tbody>
                                </table>
                            </div>

                            <!-- 2-Man Squad List -->
                            <div class="tab-pane fade" id="2man-squad" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                       TPP <img src="assets/img/tpp.png" alt="" width="32px;">
                                    </div>
                                    <div class="col-md-6 text-center">
                                      FPP <img src="assets/img/fpp.png" alt="" width="32px;">
                                    </div>
                                </div>
                                <hr>
                                <table class="table table-hover table-responsive-md table-fixed table-bordered">
                                  <thead>
                                    <tr>
                                      <th> # </th>
                                      <th> نام و نام خانوادگی </th>
                                      <th> نام بازیکن </th>
                                      <th> پروفایل استیم </th>
                                      <th> چشم انداز </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                          include('db.php');
                                          $getData = $conn->prepare("SELECT * FROM features_pubg_team WHERE mode = '3' ORDER BY id ASC");
                                          $getData->execute();
                                          $sql = $getData->fetchAll();
                                          foreach ($sql as $data) {
                                              $id = $data['id'];
                                              $name = $data['name'];
                                              $uname = $data['uname'];
                                              $link = $data['link'];
                                              $perspective = $data['perspective'];
                                              $status = $data['status'];

                                              if ($perspective == 1) {
                                                  $newP = "TPP";
                                              }elseif ($perspective == 2) {
                                                  $newP = "FPP";
                                              }

                                              if ($status != 0) {
                                                  echo '
                                                  <tr>
                                                      <th scope="row">'.$id.'</th>
                                                      <td>'.$name.'</td>
                                                      <td>'.$uname.'</td>
                                                      <td class="text-center"> <a href="'.$link.'" target="_blank"> <i class="fab fa-steam-square fa-2x" aria-hidden="true"></i> </a> </td>
                                                      <td class="text-center"> <img src="assets/img/'.$newP.'.png" alt="'.$newP.'" width="42px;" class="img-rounded center-block" data-toggle="tooltip" data-placement="top" title="'.$newP.'"> </td>
                                                  </tr>
                                                  ';
                                              }


                                          }
                                      ?>
                                  </tbody>
                                </table>
                            </div>

                            <!-- 3-Man Squad List -->
                            <div class="tab-pane fade" id="3man-squad" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                       TPP <img src="assets/img/tpp.png" alt="" width="32px;">
                                    </div>
                                    <div class="col-md-6 text-center">
                                      FPP <img src="assets/img/fpp.png" alt="" width="32px;">
                                    </div>
                                </div>
                                <hr>
                                <table class="table table-hover table-responsive-md table-fixed table-bordered">
                                  <thead>
                                    <tr>
                                      <th> # </th>
                                      <th> نام و نام خانوادگی </th>
                                      <th> نام بازیکن </th>
                                      <th> پروفایل استیم </th>
                                      <th> چشم انداز </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                          include('db.php');
                                          $getData = $conn->prepare("SELECT * FROM features_pubg_team WHERE mode = '4' ORDER BY id ASC");
                                          $getData->execute();
                                          $sql = $getData->fetchAll();
                                          foreach ($sql as $data) {
                                              $id = $data['id'];
                                              $name = $data['name'];
                                              $uname = $data['uname'];
                                              $link = $data['link'];
                                              $perspective = $data['perspective'];
                                              $status = $data['status'];

                                              if ($perspective == 1) {
                                                  $newP = "TPP";
                                              }elseif ($perspective == 2) {
                                                  $newP = "FPP";
                                              }

                                              if ($status != 0) {
                                                  echo '
                                                  <tr>
                                                      <th scope="row">'.$id.'</th>
                                                      <td>'.$name.'</td>
                                                      <td>'.$uname.'</td>
                                                      <td class="text-center"> <a href="'.$link.'" target="_blank"> <i class="fab fa-steam-square fa-2x" aria-hidden="true"></i> </a> </td>
                                                      <td class="text-center"> <img src="assets/img/'.$newP.'.png" alt="'.$newP.'" width="42px;" class="img-rounded center-block" data-toggle="tooltip" data-placement="top" title="'.$newP.'"> </td>
                                                  </tr>
                                                  ';
                                              }


                                          }
                                      ?>
                                  </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
