<?php

namespace App\Jobs;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RecordFailed;
use App\Mail\RecordUpdated;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use \Validator;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessCsv implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $useremail;
    
    public function __construct($useremail)
    {
        $this->useremail=$useremail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       
        $product = new Product;
        $ctr=0;
        $fileD = fopen('/Applications/MAMP/htdocs/ecart/storage/app/logos/csv_file.csv',"r");
        $column=fgetcsv($fileD);
        while(!feof($fileD)){
         $rowData[]=fgetcsv($fileD);
        }
        
        $flag=1;
        foreach ($rowData as $key => $value) {
            
                if(Product::find($value[4]))
                {
                    $flag=0;
                    break;
               
                }
                else {
                $product = new Product;
                $product->title = $value[0];
                $product->description=$value[1];
                $product->product_price=$value[2];
                $product->barcode=$value[3];
                $product->base_product_id=$value[4];
                $product->product_type=$value[5];
                $product->save();
                }
                
        
    }
 if($flag==1)
       {Mail::to($this->useremail)
       ->send(new RecordUpdated());
       }
    else {
        Mail::to($this->useremail)
       ->send(new RecordFailed());
    }
    }
}
