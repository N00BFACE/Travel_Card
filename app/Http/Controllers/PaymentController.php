<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class PaymentController extends Controller
{
    public function savePayment(Request $request, $id) {
        $user = $id;
        DB::table('payments')->insert([
            'user_id'=>$request->user_id,
            'account_number'=>$request->account_number,
        ]);
        return redirect()->route('home')->withSuccess('Payment Method added successfully');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'account_number' => ['required', 'string', 'max:18', 'min:8' ,'unique:payments'],
        ]);
    }

}
