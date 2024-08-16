@extends('layouts.app')
@section('title','الخدمة')
@section('contant')
    
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

     <!--  Undrt Nave  -->
     <div  class="header_section1">
      <div class="container">
         <nav class=" "><br>
         <h1 style="color:#ffff" class="contact_taitalnv">{{$show->title}}</h1>

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
                    <img src="/imgs/{{$show->photo}}" alt="" class="image1">
                    <div class="">
                      <h2 class="image1h2" href="#">{{$show->title}}</h2>
                      <br>
                      <pre   style="color: gray; font-size:16px;">{{$show->description}}</pre>
                       
                      <div class="container">
                                 <div class="contact_section_2  col-md-12">
                                    <div class="row">
                                       <div class="col-md-8">
                                          <div class="mail_section">
                                          <h1 class="contact_taital">أرسل لنا رسالة</h1>
                                          <form id="contactForm" action="{{route('contact.store')}}" method="post">
                                             @csrf
                                             <input type="text" class="form-control" placeholder="الأسم" id="q" name="name" required><br>
                                             <input type="text" class="form-control" placeholder="رقم الجوال" id="w" name="phone" required> <br>
                                             <input type="text" class="form-control" placeholder="الإيميل" id="e" name="email" required><br>
                                             <textarea class="form-control" placeholder="الموضوع" rows="5" id="r" name="description"required></textarea><br>
                                            <input class="send_bt" style="float:right;" type="submit" value="إرسال">
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

     
    @endsection