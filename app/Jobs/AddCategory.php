<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

//use App\Models\Tag;
class AddCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    private $name;
    private $description;
    public function __construct($request)
    {
        $this->name = $request->name;
        $this->description = $request->description;
        
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       DB::table('categories')->insert(["name"=> $this->name, "description"=> $this->description]);

       
    }
}
