@extends('layouts.app')
@section('title','عملائنا')

@section('contant')
    
  
     <!--  Undrt Nave  -->
     <div  class="header_section1">
      <div class="container">
         <nav class=" "><br>
         <h1 style="color:#ffff" class="contact_taitalnv">العملاء</h1>
            <li class="">
                     <a style="color:#ffff;font-size:16px;font-weight:normal ;" class="contact_taitala"href="{{route('/')}}">الرئيسية / عملائنا </a></li>
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
          <h1 class="portfolio_taital"><span class="portfolio_taital_1">العملاء</span></h1>
       </div>
    </div>
      <div class="portfolio_section">
       <div class="portfolio_section_2">
          <div class="row">


            @foreach ($show as $item)

             <div class="col-md-6">
                <div class="container_main">
                   <img src="imgs/{{$item->photo}}" alt="" class="image">
                   <div class="overlay3">
                      <div class="text2">
                         <div class="btn_main">
                            <div class="buy_bt3"><a style="overflow: auto; height:55%;" href="#">{{$item->description}}</a></div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="image2p" style="border-bottom:0px;">
                  <h2 class="" href="#" style="font-weight: bold;padding:11px 0px 25px 0px;">{{$item->title}}</h2>
                  <p class="" >donia | مستثمر </p>

                </div>

             </div>





             @endforeach
          </div>
       </div>
    </div>
<!--    <div class="seemore_bt"><a href="#">See More</a></div> -->
 </div>
</div>
 


     
@endsection
