<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="{{asset("admin")}}/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 15:39:36 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title> Dashboard Panorama-q </title>

    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset("web")}}/images\pan.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset("admin")}}/css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/select2/select2.css">

 <!-- Vendors CSS -->
 
 <link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/quill/typography.css">
<link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/quill/katex.css">
<link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/quill/editor.css">
 
<link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/dropzone/dropzone.css">
<link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/flatpickr/flatpickr.css">
<link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/tagify/tagify.css" />

 
 
<link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/@form-validation/form-validation.css">
 
<link rel="stylesheet" href="{{asset("admin")}}/vendor/libs/rateyo/rateyo.css" />

    
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset("admin")}}/vendor/css/pages/card-analytics.css" />

    <!-- Helpers -->
    <script src="{{asset("admin")}}/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{asset("admin")}}/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset("admin")}}/js/config.js"></script>
    <style>
      th ,tr,td{
        text-align: center;
      }
    </style>
    
</head>

<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

    
    




<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo ">
    <a href="{{route('customer')}}" class="app-brand-link">
      <span class="app-brand-logo demo">

        <img style="width: 67px;height:auto" src="{{asset("web")}}/images\pan.png">

</span>
      <span class="app-brand-text demo menu-text fw-bold ms-2" >بانوراما </span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
  <ul class="menu-inner py-1">
 
    <!-- e-commerce-app menu start -->
    
  







 
      <!-- customer start -->
      <li class="menu-item {{ (\Request::route()->getName() == 'customer') ? 'active  ' : ''}}">
        <a href="{{route('customer')}}" class="menu-link">
           
          <i class="menu-icon tf-icons bx bxs-group"></i>
          <div class="text-truncate"  > العملاء </div>
        </a>
      </li>

      <!-- customer end -->

<!-- service start -->
<li class="menu-item {{ (\Request::route()->getName() == 'service') ? 'active  ' : ''}}">
  <a href="{{route('service')}}" class="menu-link">
  
    <i class="menu-icon tf-icons bx bxs-calendar-week"></i>
    <div class="text-truncate"  > الخدمات </div>
  </a>
</li>

<!-- service end -->


<!-- contact start -->
<li class="menu-item {{ (\Request::route()->getName() == 'contact') ? 'active  ' : ''}}">
  <a href="{{route('contact')}}" class="menu-link">
    
    <i class="menu-icon tf-icons bx bxs-envelope"></i>
    <div class="text-truncate"  > الرسائل </div>
  </a>
</li>

<!-- contact end -->
        
       


 
    <!-- e-commerce-app menu end -->
 
    
  </ul>
  
  

</aside>
<!-- / Menu -->

    











{{-- ////////////////////////////////////////////////////////////////////// --}}













    <!-- Layout container -->
    <div class="layout-page">
      
      



<!-- Navbar -->




<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  

  

  

      
      

      
      
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>
      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        
 
        


        

        <ul class="navbar-nav flex-row align-items-center ms-auto">
          
 

          
          <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='bx bx-sm'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span class="align-middle"><i class='bx bx-sun me-2'></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                  <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- / Style Switcher-->
          
 
          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="{{asset("web")}}/images\pan.png" alt class="w-px-40 h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
               
              <li>
               
                  
             
              </li>
            </ul>
          </li>
          <!--/ User -->
          

        </ul>
      </div>

      
      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
      </div>
      
      
  </nav>
  

  
<!-- / Navbar -->













 

@yield('contant')

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0" align="">
      
       <a href="#" target="_blank" class=" "> © <script>
      document.write(new Date().getFullYear())
      </script> made by Group 5 ❤️ </a>
    </div>

  </div>
</footer>
  <!-- / Footer -->
  
            
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
  
      
      
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
      
      
      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
      
    </div>
    <!-- / Layout wrapper -->
  
    
   
    
  
    
  
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    
    <script src="{{asset("admin")}}/vendor/libs/jquery/jquery.js"></script>
    <script src="{{asset("admin")}}/vendor/libs/popper/popper.js"></script>
    <script src="{{asset("admin")}}/vendor/js/bootstrap.js"></script>
    <script src="{{asset("admin")}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset("admin")}}/vendor/libs/hammer/hammer.js"></script>
    <script src="{{asset("admin")}}/vendor/libs/i18n/i18n.js"></script>
    <script src="{{asset("admin")}}/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{asset("admin")}}/vendor/js/menu.js"></script>
    
    <!-- endbuild -->
  
    <!-- Vendors JS -->
    <script src="{{asset("admin")}}/vendor/libs/apex-charts/apexcharts.js"></script>
  
   
      <!-- Vendors JS -->
  <script src="{{asset("admin")}}/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="{{asset("admin")}}/vendor/libs/select2/select2.js"></script>
  
  <script src="{{asset("admin")}}/vendor/libs/cleavejs/cleave.js"></script>
  <script src="{{asset("admin")}}/vendor/libs/cleavejs/cleave-phone.js"></script>



<script src="{{asset("admin")}}/vendor/libs/quill/katex.js"></script>
<script src="{{asset("admin")}}/vendor/libs/quill/quill.js"></script>
 
<script src="{{asset("admin")}}/vendor/libs/dropzone/dropzone.js"></script>
<script src="{{asset("admin")}}/vendor/libs/jquery-repeater/jquery-repeater.js"></script>
<script src="{{asset("admin")}}/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="{{asset("admin")}}/vendor/libs/tagify/tagify.js"></script>


<script src="{{asset("admin")}}/vendor/libs/moment/moment.js"></script>


<script src="{{asset("admin")}}/vendor/libs/%40form-validation/popular.js"></script>
<script src="{{asset("admin")}}/vendor/libs/%40form-validation/bootstrap5.js"></script>
<script src="{{asset("admin")}}/vendor/libs/%40form-validation/auto-focus.js"></script>









    <!-- Main JS -->
    <script src="{{asset("admin")}}/js/main.js"></script>
    
  
  
    <!-- Page JS -->
    <script src="{{asset("admin")}}/js/app-ecommerce-dashboard.js"></script>
    
    @yield('footer')
  </body>
  
  
  <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-ecommerce-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 15:39:42 GMT -->
  </html>
  
  <!-- beautify ignore:end -->
  
  






