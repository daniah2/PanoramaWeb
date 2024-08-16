@extends('layouts.app')
@section('title','تواصل معنا')

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
      <!-- contact section start -->
      <div class="">

            <div class="row">

<!--  Undrt Nave  -->
<div  class="header_section1">
         <div class="container">
            <nav class=" "><br>
            <h1 style="color:#ffff" class="contact_taitalnv">إتصل بنا</h1>
               <li class="">
                        <a style="color:#ffff;font-size:16px;font-weight:normal ;" class="contact_taitala"href="{{route('/')}}">الرئيسية / إتصل بنا</a>

                     </li>
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">

                  </ul>
               </div>
            </nav>
         </div>

<!--  Undrt Nave End  -->
           </div>
            </div>
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
                             <div class="col-md-4">


                                <div class="location_text1">
                                  <h1 class="contact_taital1" style="">تواصل معنا</h1>
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
                    </div>

<!-- Api Form -->

       <!-- API Form -->
       <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // الحصول على بيانات النموذج
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $massage = $_POST['Massage'];

        // رابط API
    $url = '';

    // البيانات التي سيتم إرسالها إلى API
    $data = array(
        'name' => $name,
        'email' => $email,
        'phone' => $name,
        'massage' => $email
    );

    // تحويل البيانات إلى JSON
    $json_data = json_encode($data);

    // إعدادات الطلب
    $options = array(
        'http' => array(
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => $json_data,
        ),
    );

    // إرسال الطلب إلى API
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // معالجة النتيجة
    if ($result === FALSE) {
        // معالجة الخطأ
        echo "There was an error sending the data to the API.";
    } else {
        // عرض النتيجة أو إعادة التوجيه
        echo "Data sent successfully!";
        // يمكنك إعادة التوجيه إلى صفحة أخرى باستخدام:
        // header("Location: success_page.php");
    }
}
?>

<!-- Api Form End -->







         <!-- <div class="container-fluid">
            <div class="map_main">
               <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="368" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
               </div>
            </div>
         </div>
      </div> -->
      <!-- contact section end -->

      @endsection