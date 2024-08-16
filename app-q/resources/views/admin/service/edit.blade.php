
@extends('admin.layout.app')

@section('page' , "Order List")
    
 
@section('contant')
       

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

 

<!-- customers List Table -->
<div class="card">





  <div class="card-header">
    <h5 class="card-title"  >تعديل عميل</h5>
      

                        </div>


  
  <div class="card-datatable table-responsive">


    <div class="card-header d-flex flex-wrap py-3">
      <form class="ecommerce-customer-add pt-0" style="width: 100%" enctype="multipart/form-data" id="eCommerceCustomerAddForm" method="POST"  action="{{route('service.update',$show->id)}}">
        @csrf
        <div class="ecommerce-customer-add-basic mb-12">
   
          <div class="mb-12">
            <label class="form-label" for="ecommerce-customer-add-name">العنوان*</label>
            <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="العنوان" value="{{$show->title}}" name="title" aria-label="John Doe" />
 <br>
          
          </div>
          <div class="mb-12">
            <label class="form-label" for="ecommerce-customer-add-email">الوصف*</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"  placeholder="الوصف">{{$show->description}}</textarea>
 <br>
          
          </div>
          <div>
          <div class="mb-12">

            <label class="form-label" for="ecommerce-customer-add-contact">الصورة*</label>
            <input type="file" id="ecommerce-customer-add-contact" class="form-control phone-mask"   name="photo" />
 <br>
          
          </div>
        </div>

 <br>
        <a href="/imgs/{{$show->photo}}"><img style="width:200px;height: 200px" src="/imgs/{{$show->photo}}" alt=""></a>
        <br>
        <br>

 
        <div class="pt-3">
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">إضافة</button>
          <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">إغلاق</button>
        </div>
      </form>
     

    
  </div>



























  <!-- Offcanvas to add new customer -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCustomerAdd" aria-labelledby="offcanvasEcommerceCustomerAddLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">إضافة عميل</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0">


      <form class="ecommerce-customer-add pt-0" enctype="multipart/form-data" id="eCommerceCustomerAddForm" method="POST"  action="{{route('customer.store')}}">
        @csrf
        <div class="ecommerce-customer-add-basic mb-12">
   
          <div class="mb-12">
            <label class="form-label" for="ecommerce-customer-add-name">العنوان*</label>
            <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="العنوان" name="title" aria-label="John Doe" />
          </div>
          <div class="mb-12">
            <label class="form-label" for="ecommerce-customer-add-email">الوصف*</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"  placeholder="الوصف"></textarea>
          </div>
          <div>
            <label class="form-label" for="ecommerce-customer-add-contact">الصورة*</label>
            <input type="file" id="ecommerce-customer-add-contact" class="form-control phone-mask"   name="photo" />
          </div>
        </div>

 
      

 
        <div class="pt-3">
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">إضافة</button>
          <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">إغلاق</button>
        </div>
      </form>
    </div>
  </div>
  </div>
</div>


          </div>
          <!-- / Content -->

          
          
   

@endsection


 

 