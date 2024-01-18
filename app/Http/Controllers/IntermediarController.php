<?php

namespace App\Http\Controllers;

use App\Models\intermediar;
use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class IntermediarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(intermediar $intermediar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, intermediar $intermediar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(intermediar $intermediar)
    {
        //
    }

	public function consumeapidemo(){
		$client = new Client([
			'base_uri' => 'https://jsonplaceholder.typicode.com',
		]);
		$response = $client->request('GET', 'users/1', ['verify' => false]);
		return json_decode($response->getBody()->getContents());
	}

}
