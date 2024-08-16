@extends('layouts.app')
@section('title','خدماتنا')

@section('contant')
    
 
     <!--  Undrt Nave  -->
     <div  class="header_section1">
      <div class="container">
         <nav class=" "><br>
         <h1 style="color:#ffff" class="contact_taitalnv">خدماتنا</h1>
            <li class="">
                     <a style="color:#ffff;font-size:16px;font-weight:normal ;" class="contact_taitala"href="{{route('/')}}">الرئيسية / خدماتنا </a>

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
<!-- portfolio section start -->
<div class="portfolio_section layout_padding" style="background-color:#fdf6ea;padding-bottom:0px;margin-bottom:0px;">
 <div class="container">
    <div class="row">
       <div class="col-sm-12">
          <h1 class="portfolio_taital"><span class="portfolio_taital_1">خدماتنا</span></h1>
       </div>
    </div>
      <div class="portfolio_section">
       <div class="portfolio_section_2">
          <div class="row">





            @foreach ($show as $item)
       
            <div class="col-md-4">
               <div class="container_main">
                  <img src="imgs/{{$item->photo}}" alt="" class="image">
                  <div class="overlay">
                     <div class="text">
                        <div class="btn_main">
                           <div class="buy_bt"><a href="{{route('services.show',$item->id)}}"   >قراءة المزيد</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="image2p">
                 <h2 class="" href="#" style="font-weight: bold;padding:11px 0px 25px 0px;">{{$item->title}}</h2>
                 <p class="" >مواقع    | 5 عملاء </p>
               </div>
               <div class="imagestar">

                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star"></span>
                 <span class="fa fa-star"></span>
                 <span  style="float:right;margin-left:11px;">( تقيمات العملاء )</span>
               </div>


            </div>
            @endforeach



            
             










          </div>
       </div>
    </div>





<script>
function navigateToSection(event, sectionId) {
event.preventDefault();
sessionStorage.setItem('sectionId', sectionId);
window.location.href = 'detailscservic.html';
}
</script>
<!--    <div class="seemore_bt"><a href="#">See More</a></div> -->
 </div>
</div>
<!-- portfolio section end -->

     
    @endsection