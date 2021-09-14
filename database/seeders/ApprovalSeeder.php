<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use App\Models\Approval;

class ApprovalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 
            $approval = Approval::create([
                "approved" => false
            ]);
            Redis::set(Str::random(), $approval->id);
        }
    }
}
