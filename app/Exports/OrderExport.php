<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExport implements FromCollection,WithHeadings
{
    public function headings():array
    {
        return[
            "id","order_number","user_id","sub_total","shipping_id","coupon","total_amount","quantity","payment_method","payment_status","status","first_name","last_name","email","phone","country","delivery_charge","post_code","address1","address2"
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Order::getOrder());
        //return Order::all();
    }
}
