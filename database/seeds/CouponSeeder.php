<?php

use Illuminate\Database\Seedes;

class CouponSeeder extends Seeds
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'code'=>'abc123',
                'type'=>'fixed',
                'value'=>'300',
                'status'=>'active'
            ),
            array(
                'code'=>'111111',
                'type'=>'percent',
                'value'=>'10',
                'status'=>'active'
            ),
        );

        DB::table('coupons')->insert($data);
    }
}
