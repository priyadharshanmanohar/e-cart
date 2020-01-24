<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
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
    public function __construct()
    {
        
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
        $fileD = fopen('/Applications/MAMP/htdocs/project1/storage/app/logos/csv_file.csv',"r");
        $column=fgetcsv($fileD);
        while(!feof($fileD)){
         $rowData[]=fgetcsv($fileD);
        }
        
        
        foreach ($rowData as $key => $value) {
            
            
                $product = new Product;
                $product->title = $value[0];
                $product->description=$value[1];
                $product->product_price=$value[2];
                $product->barcode=$value[3];
                $product->base_product_id=$value[4];
                $product->product_type=$value[5];
                $product->save();
    
        
    }
       Mail::to('priyadharshan.manohar@landmarkwebteam.com')
       ->send(new RecordUpdated());

    }
}
