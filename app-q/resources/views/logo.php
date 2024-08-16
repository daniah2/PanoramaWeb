<!DOCTYPE html>
<html lang="en"  dir="rtl">
   <head>
     <style>
        /* تنسيق القائمة المنبثقة */
        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .popup h2 {
            margin: 0;
            font-size: 20px;
        }

        .popup button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Detailscservic</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="csss/style.css">

      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="csss/responsive.css">

      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
      <!-- font awesome css -->
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   </head>
   <body>
     <!-- header section start -->
     <div class="header_section">
        <div class="container">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="logo" style="width:80px;"><a href="index.html"><img src="images\pan.png"></a></div>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                       <a class="nav-link" href="index.html">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="blog.html">عملائنا</a>
                    </li>
                 <!--      <li class="nav-item">
                       <a class="nav-link" href="portfolio.html">Portfolio</a>
                    </li>
                   -->
                    <li class="nav-item">
                       <a class="nav-link" href="services.html">خدماتنا</a>
                    </li>
<!--
                    <li class="nav-item">
                       <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                      -->
                    <li class="nav-item">
                       <a class="nav-link" href="contact.php">تواصل معنا</a>
                    </li>
                 </ul>
              </div>
           </nav>
        </div>

     </div>
     <!-- header section end -->

     <!--  Undrt Nave  -->
     <div  class="header_section1">
              <div class="container">
                 <nav class=" "><br>
                 <h1 style="color:#ffff" class="contact_taitalnv">إختيار وتصميم شعار</h1>

                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <ul class="navbar-nav ml-auto">

                       </ul>
                    </div>
                 </nav>
              </div>

     <!--  Undrt Nave End  -->

      <!-- portfolio section start -->
      <div class="portfolio_section layout_padding" style="background-color:#fdf6ea;">
         <div class="container">
            <div class="row">

            </div>
              <div class="portfolio_section" >
              <div class="portfolio_section_2">
               <!-- section1 -->

<!-- section1 End-->

 <!-- section2 -->

               <section class="portfolio_section" id="section2">
               <div class="portfolio_section_2">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="container_main">
                            <img src="images/ser2.jpg" alt="" class="image1">
                            <div class="">
                              <h2 class="image1h2" href="#">إختيار وتصميم شعار</h2>
                              <p class="image1p" > موقع متكامل لخدمة نادي الرائد ولتسهيل عملية التواصل مع مشجعينه وعرض اخر اخبار وإنجازات النادي موقع متكامل لخدمة نادي الرائد ولتسهيل عملية التواصل مع مشجعينه وعرض اخر اخبار وإنجازات النادي</p>
                              <p class="image1p" >التصنيف: جديد</p>
                              <p class="image1p" >سعر الخدمة :    50$</p>
                              <p class="image1p" >مدة التنفيذ: 2 يوم</p>
                              <div class="container">
                                         <div class="contact_section_2  col-md-12">
                                            <div class="row">
                                               <div class="col-md-8">
                                                  <div class="mail_section">
                                                  <h1 class="contact_taital">أرسل لنا رسالة</h1>
                                                  <form id="contactForm" action="formDB.php" method="post">
                                                   <input type="text" class="form-control" placeholder="الأسم" id="q" name="Name" required><br>
                                                   <input type="text" class="form-control" placeholder="رقم الجوال" id="w" name="Phone" required> <br>
                                                   <input type="text" class="form-control" placeholder="الإيميل" id="e" name="Email" required><br>
                                                   <textarea class="form-control" placeholder="الموضوع" rows="5" id="r" name="Massage"required></textarea><br>
                                                  <input class="send_bt"  type="submit" value="إرسال">
                                                </form>
                                                <div id="popup" class="popup">
                            <h2>تم إرسال البيانات بنجاح</h2>
                            <button onclick="closePopup()">Close</button>
                        </div>

                        <script>
                            function showPopup() {
                                document.getElementById('popup').style.display = 'block';
                            }

                            function closePopup() {
                                document.getElementById('popup').style.display = 'none';
                            }

                            // ربط إرسال النموذج بإظهار القائمة المنبثقة
                            document.getElementById('contactForm').addEventListener('submit', function(event) {
                                event.preventDefault(); // منع إرسال النموذج افتراضيًا

                                var xhr = new XMLHttpRequest();
                                xhr.open('POST', this.action, true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === 4 && xhr.status === 200) {
                                        showPopup(); // إظهار القائمة المنبثقة عند نجاح إرسال النموذج
                                    }
                                };

                                // جمع البيانات من النموذج
                                var formData = new FormData(this);
                                var params = new URLSearchParams(formData).toString();

                                xhr.send(params); // إرسال البيانات باستخدام AJAX
                            });
                        </script>
                            </div>

                         </div>
                      </div>

                   </div>
                </section>
 <!-- section2 End -->


            </div>

            <!-- script-->
            <script>
               document.addEventListener('DOMContentLoaded', function() {
                   var sectionId = sessionStorage.getItem('sectionId');
                   if (sectionId) {
                       document.getElementById(sectionId).style.display = 'blok';
                   }
               });
           </script>
           <!-- script-->
        <!--    <div class="seemore_bt"><a href="#">See More</a></div> -->
         </div>
      </div>
      <!-- portfolio section end -->
      <!-- footer section start -->
        <div class="footer_section layout_padding margin_top90">
           <div class="container">
              <div class="row">
                 <div class="col-lg-3 col-sm-6">
                    <h3 class="useful_text">خدماتنا</h3>
                    <div class="footer_menu">
                       <ul>
                          <li><a href="index.html">تصميم وإدارة المواقع</a></li>
                          <li><a href="services.html">إختيار وتصميم شعار</a></li>
                          <li><a href="about.html">تصميم التطبيقات</a></li>
                          <li><a href="priceing.html">لغات برمجة</a></li>
                          <li><a href="room.html">تقنيات</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <h3 class="useful_text">نبذة عنا</h3>
                    <p class="" style="text-align:right;padding:0px;margin:0px;color:#222222;"> نهدف دائمًا لإرضاء كافة العملاء لدينا من خلال تقديم مجموعة من الخدمات المميزة نقدم لعملائنا أفضل الحلول والخدمات الرقميـة المتكامـــــــــــــــلـة</p>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <h3 class="useful_text">منصات التواصل الإجتماعي</h3>
                    <div class="footer_social_icon">
                       <ul class="footer_social_icon">
                          <li class="footer_social_icon">
                             <a href="#"><i class="fa fa-facebook" aria-hidden="true" style="background-color:#7E2716;border-radius:10px;padding:9px;margin:9px;"></i></a>
                          </li>
                          <li>
                             <a href="#"><i class="fa fa-twitter" aria-hidden="true" style="background-color:#7E2716;border-radius:10px;padding:9px;margin:9px;"></i></a>
                          </li>
                          <li>
                             <a href="#"><i class="fa fa-linkedin" aria-hidden="true" style="background-color:#7E2716;border-radius:10px;padding:9px;margin:9px;"></i></a>
                          </li>
                          <li>
                             <a href="#"><i class="fa fa-instagram" aria-hidden="true" style="background-color:#7E2716;border-radius:10px;padding:9px;margin:9px;"></i></a>
                          </li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <h3 class="useful_text">تواصل معنا</h3>
                    <ul>
                       <li>
                          <a href="https://maps.app.goo.gl/vwsWiZ6tcRu8rGwA8?g_st=ic">
                          <i class="fa fa-map-marker" aria-hidden="true" style="color:#7E2716;"></i><span class="padding_left_10"> القصيم, بريدة- جادة 30</span>
                          </a>
                       </li>
                       <li>
                          <a href="tel:966596698558+">
                          <i class="fa fa-phone" aria-hidden="true" style="color:#7E2716;"></i><span class="padding_left_10"> 966596698558+</span>
                          </a>
                       </li>
                       <li>
                          <a href="mailto:info@panorama-q.com">
                          <i class="fa fa-envelope" aria-hidden="true" style="color:#7E2716;"></i><span class="padding_left_10"> info@panorama-q.com</span>
                          </a>
                       </li>
                    </ul>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">©  جميع الحقوق محفوظة لدى شركة بانوراما القصيم للبرمجيات ©<a href="https://panorama-q.com">2024</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $('#myCarousel').carousel({
            interval: false
         });

         //scroll slides on swipe for touch enabled devices

         $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
         });
      </script>
   </body>
</html>
