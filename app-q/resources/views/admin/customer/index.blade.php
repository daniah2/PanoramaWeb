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
                <h5 class="card-title"  >العملاء</h5>
                  
            
  </div>



  
  <div class="card-datatable table-responsive">


    <div class="card-header d-flex flex-wrap py-3">
      <div class="me-5 ms-n2">
        <div id="DataTables_Table_0_filter" class="dataTables_filter">    </div>
      <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end gap-3 gap-sm-2 flex-wrap flex-sm-nowrap pt-0">
        <div class="dataTables_length mt-0 mt-md-3 me-2" id="DataTables_Table_0_length"> </div>
        <div class="dt-buttons btn-group flex-wrap d-flex">
          <div class="btn-group">
            
 </div>
</div>
 
 <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceCustomerAdd"><span><i class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">اضافة عميل</span></span></button>
        </div>
      </div>
<br>

    </div>
    
    <table class="datatables-customers table border-top">
      <thead>
        <tr>
          <th>#</th>
          <th>العنوان</th>
          <th>الوصف</th>
          <th>الصورة</th>
          <th>التحكم</th>
           
        </tr>
      </thead>
      <tbody>
        @php $x=1; @endphp
        @foreach ($show as $item)
       
        <tr>
          <td>{{ ($loop->iteration + (($show->currentPage() - 1) * $show->perPage())) }}</td>
          <td>{{$item->title}}</td>
          <td>{{$item->description}}</td>
          <td><a href="imgs/{{$item->photo}}"><img style="width:100px;height: 100px" src="imgs/{{$item->photo}}" alt=""></a></td>
          <td>
            
            <a href="{{route('customer.edit',$item->id)}}">
            <button  class="btn btn-sm btn-icon">
              <i class="bx bx-edit"></i>
            </button></a>



            <a href="{{route('customer.destroy',$item->id)}}">
              <button class="btn btn-sm btn-icon">
                <i class="bx bx-trash"></i>
              </button></a>
            
            
            
            </td>

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
      <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">إضافة عميل</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0">


      <form class="ecommerce-customer-add pt-0" enctype="multipart/form-data" id="eCommerceCustomerAddForm" method="POST"  action="{{route('customer.store')}}">
        @csrf
        <div class="ecommerce-customer-add-basic mb-3">
   
          <div class="mb-3">
            <label class="form-label" for="ecommerce-customer-add-name">العنوان*</label>
            <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="العنوان" required name="title" aria-label="John Doe" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="ecommerce-customer-add-email">الوصف*</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control" required  placeholder="الوصف"></textarea>
          </div>
          <div>
          <div class="mb-3">

            <label class="form-label" for="ecommerce-customer-add-contact">الصورة*</label>
            <input type="file" id="ecommerce-customer-add-contact" class="form-control phone-mask" required   name="photo" />
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

