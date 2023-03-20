<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaxRecordCreateRequest;
use App\Models\TaxRecord;
use Illuminate\Http\JsonResponse;

class TaxRecordController extends Controller
{
    public function create(TaxRecordCreateRequest $request): JsonResponse
    {
        $input = $request->all(['money', 'tax_type', 'name', 'phone', 'industry']);
        $item = new TaxRecord();
        $item->money = $input['money'];
        $item->tax_type = $input['tax_type'];
        $item->name = $input['name'];
        $item->phone = $input['phone'];
        $item->industry = $input['industry'];
        $item->save();
        return response()->json(['code' => 200, 'msg' => 'ok', 'data' => null]);
    }
}
