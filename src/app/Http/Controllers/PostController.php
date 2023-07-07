<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RakutenRws_Client;

class PostController extends Controller
{
    public function show(Request $request) {
        // dd($request->search);
        $client = new RakutenRws_Client();
        define("RAKUTEN_APPLICATION_ID", config('app.rakuten_id'));
        $client->setApplicationId($_ENV['RAKUTEN_APPLICATION_ID']);
        // dd($client);

        $keyword = $request->input('search');

        $response = $client->execute('IchibaItemSearch', [
            'keyword' => $keyword
        ]);

        if ($response->isOk()) {
            echo $response['count']."件見つかりました。\n";
            foreach ($response as $item) {
                $items[] = [
                    'name' => $item['itemName'],
                    'price' => $item['itemPrice'],
                    'reviewAverage' => $item['reviewAverage'],
                    'reviewCount' => $item['reviewCount'],
                    'itemCode' => $item['itemCode']
                ];
            }
            return view('result', compact('items'));
        } else {
            echo 'Error:'.$response->getMessage();
        }
    }
};
