<?php
   include('includes/config.php');
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>TekTune</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
         rel="stylesheet">
      <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/ionicons.min.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="css/jquery.timepicker.css">
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/index.css">
   </head>
   <style>
      .black{
      color: black;
      font-size:18px;
      }
      .red{
      color: red;
      font-size:18px;
      }
      .green{
      color: green;
      font-size:18px;
      }
      h5,  .h5{
      line-height:15px !important;
      }
      .custom-red{
      color:#DC3545;
      }
      .engine{
          background-color:white;
          margin-top:20px;
      }
     
      .selected{
          background-color:#DD3C4C !important;
          color:white !important;
      }
      
      .custom-btn{
          background-color:#b4a061;
          color:white;
      }
      
   </style>
   <body>
      <header>
         <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
               <img src="images/logo/logo8.png" alt="" height="100" width="250">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                  aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="oi oi-menu"></span> Menu
               </button>
               <div class="collapse navbar-collapse" id="ftco-nav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                     <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                     <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                     <li class="nav-item"><a href="terms.php" class="nav-link">Terms</a></li>
                     <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <h1 class="mb-4 sxt">TekTune is a dedicated remapping company</h1>
               <img class="d-block w-100" src="images/banner/car4.jpg" alt="First slide" height="800">
            </div>
            <div class="carousel-item">
               <h1 class="mb-4 sxt">Offering a professional service every time</h1>
               <img class="d-block w-100" src="images/banner/car33.jpg" alt="Second slide" height="800">
            </div>
            <div class="carousel-item">
               <h1 class="mb-4 sxt">We give more power to the people</h1>
               <img class="d-block w-100" src="images/banner/mclaren3.jpg" alt="Third slide" height="800">
            </div>
            <div class="carousel-item">
               <h1 class="mb-4 sxt">Contact us and see what we can do for you</h1>
               <img class="d-block w-100" src="images/banner/car5.jpg" alt="Third slide" height="800">
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
      <section class="ftco-section ftco-no-pt bg-light">
         <div class="container">
         <div class="row no-gutters">
            <div class="col-md-12	featured-top">
               <div class="row no-gutters">
                  <div class="col-md-4 d-flex align-items-center">
                     <form action="#" id="form" class="request-form ftco-animate bg-form" style="width:100%"
                        onsubmit="handleForm()">
                        <div class="form-group">
                           <label for="" class="label">Make</label>
                           <select class="form-control" onchange="changeMake(this.value)" id="chooseMake"
                              required>
                              <option value="" >Select Make</option>
                              <?php
                                 $make = mysqli_query($con, "SELECT DISTINCT(make) FROM mytable");
                                 while($row = mysqli_fetch_array($make)){
                                 
                                 ?>
                              <option value="<?= $row['make'] ?>"><?= $row['make'] ?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="" class="label">Model</label>
                           <select class="form-control" id="chooseModel" onchange="changeModel(this.value)"
                              required>
                              <option value=""  >Select Model</option>
                           </select>
                        </div>
                        <div class="">
                           <div class="form-group mr-2">
                              <label for="" class="label">Generation</label>
                              <select class="form-control" id="chooseGeneration"
                                 onchange="changeGeneration(this.value)" required>
                                 <option value="" >Select Generation</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="" class="label">Engine</label>
                           <select class="form-control" id="chooseEngine" required>
                              <option value=""  >Select Engine</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <input type="submit" value="Get Information" class="btn btn-secondary btn-hover py-3 px-4" />
                        </div>
                     </form>
                  </div>
                  <div class="col-md-8 d-flex align-items-center">
                     <div class="services-wrap rounded-right w-100" style="margin-top:72px">
                        <h3 class="heading-section mb-2 hide-seek-2" style="display:none">See the power your vehicle could make today!</h3>
                        <div id="hide-seek-1" style="display:block;margin-bottom:40px">
                           <div class="col-md-12 d-flex align-items-center">
                              <div class="w-100" style="margin-top:0px;  ">
                                 <h3 class="heading-section mb-4 text-center" style="margin-bottom:40px !important">To view our remap power gains today</h3>
                                 <h5 style="margin-bottom:40px; margin-left:30px"><b>Choose:</b>  </h5>
                                 <div class="row d-flex m-6">
                                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                                       <div class="services w-100 text-center">
                                          <div class="icon d-flex align-items-center justify-content-center"><span
                                             class="flaticon-car"></span></div>
                                          <div class="text w-100">
                                             <h3 class="heading mb-2">1.Make</h3>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                                       <div class="services w-100 text-center">
                                          <div class="icon d-flex align-items-center justify-content-center"><span
                                             class="flaticon-suv"></span></div>
                                          <div class="text w-100">
                                             <h3 class="heading mb-2">2.Model</h3>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                                       <div class="services w-100 text-center">
                                          <div class="icon d-flex align-items-center justify-content-center custom-red">
                                             <!--1996 <br> 2005-->
                                             <div style="line-height:20px">
                                                1996 <br> 2005
                                             </div>
                                          </div>
                                          <div class="text w-100">
                                             <h3 class="heading mb-2">3.Generation</h3>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                                       <div class="services w-100 text-center">
                                          <div class="icon d-flex align-items-center justify-content-center"><span
                                             class="flaticon-pistons"></span></div>
                                          <div class="text w-100">
                                             <h3 class="heading mb-2">4.Engine</h3>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--<p><a href="#" class="btn btn-primary py-3 px-4">Check out our services</a></p>-->
                              </div>
                           </div>
                        </div>
                        <div id="hide-seek-2" style="display:none; ">
                           <div class="row d-flex mb-2">
                              <div class="col-md-2 col-sm-12 ">
                                 <button class="btn custom-btn selected"  onclick="stage1()">Stage 1</button>
                              </div>
                              <div class="col-md-2 col-sm-12 ">
                                 <button class="btn custom-btn"  onclick="stage2()">Stage 2</button>
                              </div>
                           </div>
                           <div class="row d-flex">
                              <div class="col-md-12">
                                 <div class="bgg-dark"></div>
                              </div>
                           </div>
                           <div class="row d-flex">
                              <div class="col-md-12">
                                 <table class="table ctvc_gainTable" style="margin-bottom:0px !important">
                                    <thead>
                                       <tr>
                                          <th class="hidden" scope="col" style="background-color:#E8E8E8"></th>
                                          <th class="ctvc_stage_th black" scope="col">Original</th>
                                          <th class="ctvc_stage_th red" scope="col">Modified</th>
                                          <th class="ctvc_stage_th green" scope="col">Gains</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td scope="row" class="ctvc_stage_row_title hidden">
                                             <h4>Power</h4>
                                             <p>(Bhp)</p>
                                          </td>
                                          <td class="ctvc_stage_td black">
                                             <div class="ctvc_gauge_outer">
                                                <div class="ctvc_gauge_inner">
                                                   <div class="circle">
                                                      <div class="circle-inner">
                                                         <h5 class="black" id="powerOriginal">
                                                         </h5>
                                                         <p id="powerOriginalP" class="black"></p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </td>
                                          <td class="ctvc_stage_td red">
                                             <div class="ctvc_gauge_outer">
                                                <div class="ctvc_gauge_inner">
                                                   <div class="circle">
                                                      <div class="circle-inner">
                                                         <h5 class="red" id="powerModified">
                                                         </h5>
                                                         <p id="powerModifiedP" class="red"></p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </td>
                                          <td class="ctvc_stage_td green">
                                             <div class="ctvc_gauge_outer">
                                                <div class="ctvc_gauge_inner">
                                                   <div class="circle">
                                                      <div class="circle-inner">
                                                         <h5 class="green"
                                                            id="powerDifference" style="font-size:25px !important"></h5>
                                                         <p id="powerDifferenceP" class="green"></p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td scope="row" class="ctvc_stage_row_title hidden">
                                             <h4>Torque</h4>
                                             <p>(Nm)</p>
                                          </td>
                                          <td class="ctvc_stage_td black">
                                             <div class="ctvc_gauge_outer">
                                                <div class="ctvc_gauge_inner">
                                                   <div class="circle">
                                                      <div class="circle-inner">
                                                         <h5 class="black" id="torqueOriginal">
                                                         </h5>
                                                         <p id="torqueOriginalP" class="black"></p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </td>
                                          <td class="ctvc_stage_td red">
                                             <div class="ctvc_gauge_outer">
                                                <div class="ctvc_gauge_inner">
                                                   <div class="circle">
                                                      <div class="circle-inner">
                                                         <h5 class="circle-text" id="torqueModified">
                                                         </h5>
                                                         <p id="torqueModifiedP" class="red"></p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </td>
                                          <td class="ctvc_stage_td green">
                                             <div class="ctvc_gauge_outer">
                                                <div class="ctvc_gauge_inner">
                                                   <div class="circle">
                                                      <div class="circle-inner">
                                                         <h5 class="green"
                                                            id="torqueDifference" style="font-size:25px !important"></h5>
                                                         <p id="torqueDifferenceP" class="green"></p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="container" id="hide-seek-3" style="display:none">
              <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-8 ">
                      <div class="row">
                          <div class="col-md-1"></div>
                            <div class="col-md-5 engine" >
                                <div class="text-center">
                                    <div class="" style="text-align:left">
                                        <ul class="list-unstyled" style="font-size:14px; color: black; margin-top:1rem">
                                            <li>Fuel: <span id="fuel"></span> </li>
                                            <li>ECU Type: <span id="ecu"></span> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 engine">
                                <div class="text-center">
                                    <div class="" style="text-align:left">
                                        <ul class="list-unstyled" style="font-size:14px; color:black; margin-top:1rem">
                                            <li>Engine Size: <span id="engineSize"></span> </li>
                                            <li>Engine Number: <span id="engineNumber"></span> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                      </div>
                    
                  </div>
              </div>
          </div>
      </section>
      
      <section>
          
      </section>
      
      <section class="ftco-section ftco-about">
         <div class="container">
            <div class="row no-gutters">
               <div class="col-md-12 col-sm-12 p-md-5 img img-2 d-flex justify-content-center align-items-center">
                  <div id="stage">
                     <a ><img src="images/banner/car7.png" height="280" class="car"></a>
                     <a ><img src="images/banner/car8.png" height="280" class="car"></a>
                     <a ><img src="images/banner/car10.png" height="280" class="car"></a>
                     <a ><img src="images/banner/car11.png" height="280" class="car"></a>
                     <a ><img src="images/banner/car12.png" height="280" class="car"></a>
                     <a ><img src="images/banner/car14.png" height="280" class="car"></a>
                  </div>
               </div>
            </div>
            <div class="row">
               <!--d-flex justify-content-center align-items-center-->
               <div class="col-md-6">
                  <div class="custom md-5" style="margin-bottom:5px">
                     <div class="heading-section heading-section ">
                        <h4 style="font-size: 35px; text-align:center; color:#b4a061 ">Opening Hours</h4>
                        <div class="openinghours d-flex justify-content-center align-items-center">
                           <div class="openinghourscontent section">
                              <table class="opening-hours-table text-white">
                                 <tr id="Monday" itemprop="openingHours" title="Open Monday at 9am to 6pm">
                                    <td>Monday</td>
                                    <td class="opens">09:00</td>
                                    <td>-</td>
                                    <td class="closes">22:00</td>
                                 </tr>
                                 <tr id="Tuesday" itemprop="openingHours" title="Open Tuesday at 9am to 6pm">
                                    <td>Tuesday</td>
                                    <td class="opens">09:00</td>
                                    <td>-</td>
                                    <td class="closes">22:00</td>
                                 </tr>
                                 <tr id="Wednesday" itemprop="openingHours" title="Open Wednesday at 9am to 6pm">
                                    <td>Wednesday</td>
                                    <td class="opens">09:00</td>
                                    <td>-</td>
                                    <td class="closes">22:00</td>
                                 </tr>
                                 <tr id="Thursday" itemprop="openingHours" title="Open Thursday at 9am to 8pm">
                                    <td>Thursday</td>
                                    <td class="opens">09:00</td>
                                    <td>-</td>
                                    <td class="closes">22:00</td>
                                 </tr>
                                 <tr id="Friday" itemprop="openingHours" title="Open Friday at 9am to 6pm">
                                    <td>Friday</td>
                                    <td class="opens">09:00</td>
                                    <td>-</td>
                                    <td class="closes">22:00</td>
                                 </tr>
                                 <tr id="Saturday" itemprop="openingHours" title="Open Saturday at 10am to 6pm">
                                    <td>Saturday</td>
                                    <td class="opens">09:00</td>
                                    <td>-</td>
                                    <td class="closes">22:00</td>
                                 </tr>
                                 <tr id="Sunday" itemprop="openingHours" title="Open Sunday at 11am to 4pm">
                                    <td>Sunday</td>
                                    <td class="opens">09:00</td>
                                    <td>-</td>
                                    <td class="closes">21:00</td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 ">
                  <div class="custom2 md-5">
                     <div class="heading-section heading-section ">
                        <h4 style="text-align:center; font-size: 35px; color:#b4a061" class="">Contact Us</h4>
                     </div>
                     <div class="openinghours d-flex justify-content-center align-items-center">
                        <div class="block-23 mb-3" style="margin-top:20px">
                           <ul>
                              <li><span class="icon icon-phone"
                                 style="font-size:35px;  width:60px; color: #b4a061"></span><span
                                 class="text text-white" style="font-size:30px">0800 448 0962</span></li>
                              <li><a href="mailto:sales@tektune.co.uk"><span class="icon icon-envelope"
                                 style="font-size:35px;  width:60px; color: #b4a061"></span><span
                                 class="text text-white"
                                 style="font-size:30px">sales@tektune.co.uk</span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include('sidecontact.php')?>
      <footer class="ftco-footer ftco-bg-dark ftco-section">
         <div class="container">
            <div class="row mb-5">
               <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">
                        <img src="images/logo/logo8.png" alt="" height="100" width="250">
                     </h2>
                     <p>Here at Tektune we have an over decade of remapping experience between our in-house experts
                        To our mobile technician who installs our calibration files to the vehicles
                     </p>
                  </div>
               </div>
               <div class="col-md">
                  <div class="ftco-footer-widget mb-4 ml-md-5">
                     <h2 class="ftco-heading-2">Information</h2>
                     <ul class="list-unstyled">
                        <li><a href="about.php" class="py-2 d-block">About</a></li>
                        <li><a href="services.php" class="py-2 d-block">Services</a></li>
                        <li><a href="terms.php" class="py-2 d-block">Terms</a></li>
                        <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">Have a Question?</h2>
                     <div class="block-23 mb-3">
                        <ul>
                           <li><span class="icon icon-phone"></span><span class="text">0800 448 0962</span></li>
                           <li><a href="mailto:sales@tektune.co.uk"><span class="icon icon-envelope"></span><span
                              class="text">sales@tektune.co.uk</span></a></li>
                        </ul>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                           <li class="ftco-animate"><a href="https://www.facebook.com/TekTune"><span
                              class="icon-facebook"></span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-center">
                  <p>
                     Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                     </script> All rights reserved Tektune</a>
                  </p>
               </div>
            </div>
         </div>
      </footer>
      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen">
         <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
               stroke="#F96D00" />
         </svg>
      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/jquery.timepicker.min.js"></script>
      <script src="js/scrollax.min.js"></script>
      <script>
        var currentStage = 1;
         function changeMake(value) {
            //  console.log(value)
             $.ajax({
                 url: 'dynamicData.php',
                 method: "POST",
                 data: {
                     getModel: true,
                     make: value
                 },
                 dataType: "JSON",
                 success: function (responseData) {
                    //  console.log(responseData)
                     
                     $("#chooseModel").find('option').remove().end()
                     $("#chooseModel").append(`<option value="" >Select Model</option>`)
                     $("#chooseGeneration").find('option').remove().end()
                     $("#chooseGeneration").append(`<option value="" >Select Generation</option>`)
                     $("#chooseEngine").find('option').remove().end()
                     $("#chooseEngine").append(`<option value="" >Select Engine</option>`)
                     
                     
                     responseData.forEach(item => {1
                         $("#chooseModel").append(new Option(item.model, item.model));
                     })
                 }
             })
         }
         
         function changeModel(value) {
             $.ajax({
                 url: 'dynamicData.php',
                 method: "POST",
                 data: {
                     getGeneration: true,
                     model: value,
                     make: $("#chooseMake").val()
                 },
                 dataType: "JSON",
                 success: function (responseData) {
                     $("#chooseGeneration").find('option').remove().end()
                     $("#chooseGeneration").append(`<option value="" >Select Generation</option>`)
                     $("#chooseEngine").find('option').remove().end()
                     $("#chooseEngine").append(`<option value="" >Select Engine</option>`)
                     responseData.forEach(item => {
                         $("#chooseGeneration").append(new Option(item.year, item.year));
                     })
                 }
             })
         }
         
         function changeGeneration(value) {
             $.ajax({
                 url: 'dynamicData.php',
                 method: "POST",
                 data: {
                     getEngine: true,
                     generation: value,
                     make: $("#chooseMake").val(),
                     model: $("#chooseModel").val(),
                 },
                 dataType: "JSON",
                 success: function (responseData) {
                     $("#chooseEngine").find('option').remove().end()
                     $("#chooseEngine").append(`<option value="" >Select Engine</option>`)
                     responseData.forEach(item => {
                         $("#chooseEngine").append(new Option(item.engine, item.engine));
                     })
                 }
             })
         }
         
         function handleForm() {
             event.preventDefault();
             if(!$("#chooseMake").val() || !$("#chooseModel").val() || !$("#chooseGeneration").val() || !$("#chooseEngine").val()){
                 return;
             }
             myfunction() ;
             $.ajax({
                 url: 'dynamicData.php',
                 method: "POST",
                 data: {
                     getInformation: true,
                     generation: $("#chooseGeneration").val(),
                     make: $("#chooseMake").val(),
                     model: $("#chooseModel").val(),
                     engine: $("#chooseEngine").val()
                 },
                 dataType: "JSON",
                 success: function (responseData) {
                     responseData = responseData[0]
                     $("#torqueOriginal").text(parseInt(responseData.STANDARD_TORQUE))
                     $("#torqueOriginalP").text(responseData.STANDARD_TORQUE.replace(parseInt(responseData.STANDARD_TORQUE), ''))
                     
                     $("#torqueModified").text(parseInt(responseData.DYNO_CHIPTUNING_TORQUE))
                     $("#torqueModifiedP").text(responseData.DYNO_CHIPTUNING_TORQUE.replace(parseInt(responseData.DYNO_CHIPTUNING_TORQUE), ''))
                     
                     $("#torqueDifference").text(parseInt(responseData.DIFFERENCE_TORQUE))
                     $("#torqueDifferenceP").text(responseData.DIFFERENCE_TORQUE.replace(parseInt(responseData.DIFFERENCE_TORQUE), ''))
         
                     $("#powerOriginal").text(parseInt(responseData.STANDARD_BHP))
                     $("#powerOriginalP").text(responseData.STANDARD_BHP.replace(parseInt(responseData.STANDARD_BHP), ''))
                     
                     $("#powerModified").text(parseInt(responseData.DYNO_CHIPTUNING_BHP))
                     $("#powerModifiedP").text(responseData.DYNO_CHIPTUNING_BHP.replace(parseInt(responseData.DYNO_CHIPTUNING_BHP), ''))
                     
                     $("#powerDifference").text(parseInt(responseData.DIFFERENCE_BHP))
                     $("#powerDifferenceP").text(responseData.DIFFERENCE_BHP.replace(parseInt(responseData.DIFFERENCE_BHP), ''))
                     
                     $("#fuel").text(responseData.Type_of_fuel)
                     $("#ecu").text(responseData.Engine_ECU)
                     $("#engineSize").text(responseData.Cylinder_content)
                     $("#engineNumber").text(responseData.Engine_number)
                     
                 }
             })
         }
         
         
             function myfunction() {
                document.getElementById("hide-seek-1").style.display = "none";
                document.getElementById("hide-seek-2").style.display = "block";
                document.getElementById("hide-seek-3").style.display = "block";
             }
         
             function stage1(){
                 if(currentStage == 1){
                     return;
                 }
                 handleForm()
                 
                 currentStage = 1;
                 
                 
             }
         
             function stage2(){
                 if(currentStage == 2){
                     return;
                 }
                 
                 let value = parseInt($("#torqueModified").text());
                 value = value + value * 0.10;
                 value = Math.round(value);
                 $("#torqueModified").text(value)
                 
                 value = Math.abs(parseInt($("#torqueOriginal").text()) - value);
                 value = Math.round(value);
                 $("#torqueDifference").text(value)
                 
                 value = parseInt($("#powerModified").text());
                 value = value + value * 0.10;
                 value = Math.round(value);
                 $("#powerModified").text(value)
                 
                 value = Math.abs(parseInt($("#powerOriginal").text()) - value);
                 value = Math.round(value);
                 $("#powerDifference").text(value)
                 
                 currentStage = 2;
             }
         
         
            $('.custom-btn').on('click', function(){
                $('.custom-btn').removeClass('selected');
                $(this).addClass('selected');
            });
         
      </script>
      <script src="js/main.js"></script>
      <script>
         window.addEventListener("DOMContentLoaded", function (e) {
             var stage = document.getElementById("stage");
             var fadeComplete = function (e) {
                 stage.appendChild(arr[0]);
             };
             var arr = stage.getElementsByTagName("a");
             for (var i = 0; i < arr.length; i++) {
                 arr[i].addEventListener("animationend", fadeComplete, false);
             }
         
         }, false);
      </script>
   </body>
</html>