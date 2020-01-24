<?php


namespace App\Modules\admin\Controllers;
use App\User;
use App\Product;
use App\Image;
use App\Jobs\ProcessCsv;
use Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Repositories\UserRepositoryInterface;

class ImageController extends Controller
{
    public function addimage(Request $request)
    {
       
        // $validatedData = $request->validate([
        //     'image_file' => 'required|file'
        // ]);
        $ctr=0;
        $baseId=$request->get('base_product_id');
        $images = $request->file('image_file');
        // dd($images);
        foreach ($images as $file){
        // $imageFile=$request->file('image_file');
        
        // $file = $imageFile;
        $directoryName='public/Images/'.$baseId;
       
        $dir =storage_path('app/public/Images/'.$baseId."/");

$filecount = 0; 
  
$files2 = glob( $dir ."*.*" ); 
  
if( $files2 ) { 
    $filecount = count($files2); 
} 
  
echo $filecount . "files "; 
$filecount+=1;
$path = $file->storeAs($directoryName,$baseId.'-'.$filecount.".jpg");
         $fullDirectory='Images/'.$baseId.'/'.$baseId.'-'.$filecount.".jpg";
        $images=new Image;
        $images->base_product_id=$baseId;
        $images->directory=$fullDirectory;
        $images->save();
}

       return redirect('/admin/imagemaster');
        
    
        
}
public function deleteimage(Request $request)
{
    $userid=$request->get('removeimage');
    Image::destroy($userid);
    return redirect()->back();
}
public function search(Request $request)
{
  
 
  
      $output = '';
      $query = $request->get('query');
      
        $data = Product::where('base_product_id', $query)->first();
        $imageData= Image::where('base_product_id', $query)->first();
   if(!is_null($data)){
    $output1='  
    <table class="table" >
 
  <tbody>
    
    <tr>
      <th scope="row">Base Product ID:</th>
      <td>'.$data->base_product_id.'</td>
      </tr>
      <tr>
      <th scope="row">Title: </th>
      <td>'.$data->title.'</td>
      </tr>
      <tr>
      <th scope="row">Description:</th>
      <td> '.$data->description.'</td>
      </tr>
    </tr>
  
  
   
  </tbody>
</table>
    ';
    $output2='<table class="table">
    <thead>
    </thead>
    <tbody>
      <tr>
     
        <th scope="row">Product Price:</th>
        <td>'.$data->product_price.'</td>
        </tr>
        <tr>
        <th scope="row">Barcode: </th>
        <td>'.$data->barcode.'</td>
        </tr>
        <tr>
        <th scope="row">Product Type:</th>
        <td> '.$data->product_type.'</td>
        </tr>
      </tr>
    </tbody>
  </table>
      ';
      $hr='<hr class="my-4">';
    $addImages='
    <form action="storeimage" method="POST" enctype="multipart/form-data" >
        '.csrf_field().'
        <div class="input-group hdtuto control-group lst increment" >
      <input required type="file" name="image_file[]"  multiple  accept="image/*" style=" width: 210px;
      height: 32px;
      margin: 0px;
      padding: 2px;
      float: left;
      margin-top:8px;
      margin-left: 2px;
      margin-right: 5px;">
      <div class="input-group-btn"> 
        <button type="submit" class="btn btn-primary" style="display: block; margin: 0px;  width: 77px; height: 36px; padding: 2px; ">Submit</button>
        <input type="hidden" value="'.$data->base_product_id.'" name="base_product_id">
        </div>
    </div>
       
    </form>
        ';
   }
   else{
        $error='<div class="alert alert-danger text-centre">No data found</div>';}
        $images = Image::where('base_product_id', $query)->get();
        $imageContent='';
        $imageNo=0;
        // $imageCnt=0;
        // if(!is_null($imageData))
        // {
            
        //     foreach($images as $image){
        //         $imageCnt+=1;
        //     }
        //     $colNum=2;
        // }
        foreach($images as $image)
        {$imageNo+=1;
            $imageContent=$imageContent.'
           
           <div class="col-md-2" style="text-align:center;">
            <a class="elem" href="http://ecart.local/storage/'.$image->directory.'" title="image'.$imageNo.'" data-lcl-txt="Porduct Image" data-lcl-author="xyz" data-lcl-thumb="http://ecart.local/storage/'.$image->directory.'" style="width:100%">
                <span style="background-image: url('.'../storage/'.''.$image->directory.');"></span>
               
            </a>
           
            
        
            <i id="removeimage" class="far fa-times-circle" name="removeimage" data-toggle="modal" data-target="#basicExampleModal" value="'.$image->id.'" style="margin-top: 4px;cursor: pointer;"></i>
            <!-- Modal -->
            <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Remove Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  Are you sure you want to remove the Image?
                  </div>
                  <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action="removeimage" method="POST">
                    '. csrf_field().'
                    <button type="submit" id="remove" name="removeimage"  value="'.$image->id.'" class="btn btn-primary">Confirm</button>
                    </form>
                    </div>
                </div>
              </div>
            </div>
           
        </div>
       
            ';
        }
        $msg= '<div class="row">'.$imageContent.'</div>';
       if(!is_null($data)){
        $data = array(
            'table_data1'  => $output1,
            'table_data2' =>$output2,
            'addImages'=>$addImages,
            'msg'=>$msg,
            'hr'=>$hr,
           );
      }
      else
      $data = array(
          'error'  => $error,
          );
      echo json_encode($data);
     
    }
    public function displayimage(Request $request)
    {
    //     $query=$request->get('query');
    //     $images = Image::where('base_product_id', $query)->get();
    //     $msg='<div class="container">
              
                
                
    //     <div class="content">
    //     foreach($images as $image){

        
    //            <a class="elem" href="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=2000&q=80&cs=tinysrgb" title="image 1" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=150&q=80&cs=tinysrgb">
    //             <span style="background-image: url(https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?dpr=1&auto=format&fit=crop&w=400&q=80&cs=tinysrgb);"></span>
    //         </a>
            
    //            }
    //            <br/><br/>
    //        </div>
    // </div>';
        

            }
}
