<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Transformers\MemberTransformer;
use Dingo\Api\Routing\Helpers;

class penggunaController extends Controller
{
    use Helpers;

    public function index()
    {
        return $this->response->collection(pengguna::all(), new MemberTransformer);
    }

    public function show($id)
    {
        return $this->response->item(pengguna::find($id), new MemberTransformer);
    }

    public function store(Request $request)
    {
        pengguna::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Member was created!'
        ], 200);
    }

    public function update($id, Request $request)
    {
        pengguna::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Member was updated'
        ], 200);
    }

    public function delete($id)
    {
        pengguna::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Member was deleted'
        ], 200);
    }
}
