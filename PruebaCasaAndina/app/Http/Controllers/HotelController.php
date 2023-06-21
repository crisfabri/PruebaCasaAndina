<?php
namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Http\Resources\HotelResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        
        $tipoHotel = $request->input('tipohotel'); 
        $query = Hotel::query();
        if ($tipoHotel) 
        {
            $query->whereRelation('tipoHotel', 'tht_tit', '=', $tipoHotel);
        }
        $response = HotelResource::collection($query->get());
        return response()->json($response);
    
    }

    public function show($id)
    {
        $hotel = Hotel::findOrFail($id)->with('TipoHotel')->first();
        $response = new HotelResource($hotel);
        return response()->json($response);
    }
}
