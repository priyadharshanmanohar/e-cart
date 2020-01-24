@extends('admin::layouts.admin')
@section('content')
<!-- Default form register -->

<form class="text-center  p-5" action="adddetails" method="POST">
        {{ csrf_field() }}
        
<div class="container" style="width:300px">
        <p class="h4 mb-4">Enter Product Details</p>
        <fieldset style="
        text-align: justify;"
    >
        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
               <!-- Material input -->
<!-- Default input -->
<label for="exampleForm2">Title: </label>  <input required type="text" id="exampleForm2" name="title">

            </div>
            
        </div>
   <!--Material textarea-->
   <div class="d-flex">
        <label for="exampleFormControlTextarea1">Description:</label>
         <textarea required class="form-control rounded-0" id="exampleFormControlTextarea1" name="description" rows="6"></textarea>
      </div>
      
      <br>
 
      
        <!-- Password -->
        <label for="exampleForm3">Price:</label> <input required type="text" id="exampleForm3" name="price" >
            
            <label for="exampleForm4">Barcode:</label> <input required type="text" id="exampleForm4" name="barcode" >
                      
    
            <label for="exampleForm5">Base PID:</label> <input required type="text" id="exampleForm5" name="baseproductid">
           
            <label for="exampleForm6">Product Type:</label> <select required class="browser-default " id="exampleForm6" name="producttype">
                   
                    <option value="apparel">Apparel</option>
                    <option value="cosmetics">Cosmetics</option>
                    <option value="accessory">Accessories</option>
                  </select>
        </fieldset>
        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit">Submit</button>
    
      
       
        </div>
    </form>
    @if(session()->has('message'))
<div class="alert alert-danger text-centre">
        {{ session()->get('message') }}
    </div>

@endif
</div>

    <!-- Default form register -->
      </div>
@endsection