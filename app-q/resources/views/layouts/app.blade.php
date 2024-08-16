<!DOCTYPE html>
<html lang="en" dir="rtl">
   <head>

      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title')</title>
      <link rel="icon" type="image/x-icon" href="{{asset("web")}}/images\pan.png" />
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset("web")}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset("web")}}/css/style.css">
      <link rel="stylesheet" type="text/css" href="{{asset("web")}}/csss/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset("web")}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{asset("web")}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset("web")}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <!-- font awesome css -->
      {{-- <link rel="stylesheet" href="{{asset("web")}}/css/font-awesome.min.css"> --}}
   </head>
   <body style="background-color:#fdf6ea;">
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo" style="width:80px;"><a href="{{route('/')}}"><img src="{{asset("web")}}/images\pan.png"></a></div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                       <a class="nav-link" href="{{route('/')}}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{route('blog')}}">عملائنا</a>
                    </li>
                 <!--      <li class="nav-item">
                       <a class="nav-link" href="portfolio.html">Portfolio</a>
                    </li>
                   -->
                    <li class="nav-item">
                       <a class="nav-link" href="{{route('services')}}">خدماتنا</a>
                    </li>
<!--
                    <li class="nav-item">
                       <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                      -->
                    <li class="nav-item">
                       <a class="nav-link" href="{{route('contacts')}}">تواصل معنا</a>
                    </li>
                 </ul>
               </div>
            </nav>
         </div>

      </div>
      <!-- header section end -->







@yield('contant')












       <!-- footer section start -->
       <div class="footer_section layout_padding margin_top90">
        <div class="container">
           <div class="row">
              <div class="col-lg-3 col-sm-6">
                 <h3 class="useful_text">خدماتنا</h3>
                 <div class="footer_menu">
                    <ul>
                        @foreach ($show1 as $item1)
                       <li><a href="{{route('services.show',$item1->id)}}">{{$item1->title}}</a></li>
                       
                       @endforeach
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
                          <a href="https://www.facebook.com/palqassim"><i class="fab fa-facebook" aria-hidden="true" style="background-color:#7E2716;border-radius:10px;padding:9px;margin:9px;"></i></a>
                       </li>
                       <li>
                          <a href="https://twitter.com/panorama_q?s=21"><i class="fab fa-twitter" aria-hidden="true" style="background-color:#7E2716;border-radius:10px;padding:9px;margin:9px;"></i></a>
                       </li>
                       <li>
                          <a href="https://www.linkedin.com/company/panoramaq/"><i class="fab fa-linkedin" aria-hidden="true" style="background-color:#7E2716;border-radius:10px;padding:9px;margin:9px;"></i></a>
                       </li>
                       <li>
                          <a href="https://www.instagram.com/palqassim/"><i class="fab fa-instagram" aria-hidden="true" style="background-color:#7E2716;border-radius:10px;padding:9px;margin:9px;"></i></a>
                       </li>
                       <li>
                          <a href="https://api.whatsapp.com/send/?phone=9660553172552"><i class="fab fa-whatsapp" aria-hidden="true" style="background-color:#7E2716;border-radius:10px;padding:9px;margin:9px;"></i></a>
                       </li>
                       <li>
                          <a href="https://www.tiktok.com/@panorama_alqassim?_t=8oq2bVKXQOu&_r=1"><i class="fab fa-tiktok" aria-hidden="true" style="background-color:#7E2716;border-radius:10px;padding:9px;margin:9px;"></i></a>
                       </li>
                       <li>
                          <a href="https://www.snapchat.com/add/panorama_q"><i class="fab fa-snapchat-ghost" aria-hidden="true" style="background-color:#7E2716;border-radius:10px;padding:9px;margin:9px;"></i></a>
                       </li>
                    </ul>
                 </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                 <h3 class="useful_text">تواصل معنا</h3>
                 <div class="">
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
   <script src="{{asset("web")}}/js/jquery.min.js"></script>
   <script src="{{asset("web")}}/js/popper.min.js"></script>
   <script src="{{asset("web")}}/js/bootstrap.bundle.min.js"></script>
   <script src="{{asset("web")}}/js/jquery-3.0.0.min.js"></script>
   <script src="{{asset("web")}}/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="{{asset("web")}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="{{asset("web")}}/js/custom.js"></script>
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
