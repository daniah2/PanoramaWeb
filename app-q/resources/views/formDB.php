<!-- Conction DB-->

<div id="popup" class="popup">
    <h2>Thank you for your submission!</h2>
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

<?php


      $host="localhost";
      $usernam="root";
      $pass="";
      $dbname="form";
      $connect_database = mysqli_connect($host,$usernam,$pass,$dbname);
      if(mysqli_connect_errno())
      {
         echo "no Connected";
         exit();
         
      }
      else {
         echo " youer Connected";
      }
      

      
      
      // التحقق من أن البيانات تم إرسالها عبر POST
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // جلب البيانات من النموذج
          $namee = $_POST['Name'];
          $phone = $_POST['Phone'];
          $email = $_POST['Email'];
          $message = $_POST['Massage'];
      
          // إعداد استعلام SQL لإدراج البيانات
          $sql = "INSERT INTO contacts (fulname, email, phone, msg) VALUES (' $namee', '$phone', '$email','$message')";
      
          // تنفيذ الاستعلام والتحقق من النجاح
          if ($connect_database->query($sql) === TRUE) {
              echo "<h1 >New record created successfully</h1>";
          } else {
              echo "Error: " . $sql . "<br>" . $connect_database->error;
          }
      
          // إغلاق الاتصال
          $connect_database->close();
       }
?>