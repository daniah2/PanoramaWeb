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
                <h5 class="card-title"  >الرسائل</h5>
                  
            
                                    </div>



  
  <div class="card-datatable table-responsive">


   
    <table class="datatables-customers table border-top">
      <thead>
        <tr>
          <th>#</th>
          <th>الاسم</th>
          <th>رقم الجوال</th>
          <th>الايميل</th>
          <th>الموضوع</th>
           
        </tr>
      </thead>
      <tbody>
      @php $x=1; @endphp
      @foreach ($show as $item)
       
        <tr>
          <td>{{ ($loop->iteration + (($show->currentPage() - 1) * $show->perPage())) }}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->phone}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->description}}</td>
           

        </tr>
        @endforeach
        
      </tbody>
    </table>
    {{-- {{ $show->links() }} --}}

    <div class="mt-4">
      {{ $show->links('pagination::bootstrap-4') }}
  </div>
  </div>



























  <!-- Offcanvas to add new customer -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCustomerAdd" aria-labelledby="offcanvasEcommerceCustomerAddLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">إضافة خدمة</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0">


      <form class="ecommerce-customer-add pt-0" enctype="multipart/form-data" id="eCommerceCustomerAddForm" method="POST"  action="{{route('service.store')}}">
        @csrf
        <div class="ecommerce-customer-add-basic mb-3">
   
          <div class="mb-3">
            <label class="form-label" for="ecommerce-customer-add-name">العنوان*</label>
            <input type="text" class="form-control" id="ecommerce-customer-add-name" required placeholder="العنوان" name="title" aria-label="John Doe" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="ecommerce-customer-add-email">الوصف*</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control" required placeholder="الوصف"></textarea>
          </div>
          <div>
          <div class="mb-3">

            <label class="form-label" for="ecommerce-customer-add-contact">الصورة*</label>
            <input type="file" id="ecommerce-customer-add-contact" class="form-control phone-mask" required  name="photo" />
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

   @section('footer')
   <!-- Page JS -->
   {{-- <script src="{{asset("admin")}}/js/app-ecommerce-customer-all.js"></script> --}}

   

   @endsection

