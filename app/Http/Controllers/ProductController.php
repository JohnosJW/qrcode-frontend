<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://127.0.0.1:8000/api/qrcodes', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImZkNDk5ZmFjZmM3MDMwMzdiYjk0NzBmYWUzOWUwOWU2OTY0ZWYzYTY2Y2ViODc1MzJlYmQyMmNlYzU4YmU0NTY0ZjdjYzVmNTE0NzhjMjU5In0.eyJhdWQiOiIxIiwianRpIjoiZmQ0OTlmYWNmYzcwMzAzN2JiOTQ3MGZhZTM5ZTA5ZTY5NjRlZjNhNjZjZWI4NzUzMmViZDIyY2VjNThiZTQ1NjRmN2NjNWY1MTQ3OGMyNTkiLCJpYXQiOjE1MzgwMzU0ODAsIm5iZiI6MTUzODAzNTQ4MCwiZXhwIjoxNTY5NTcxNDgwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.Y79GaajrlRrYJqeYGvqyjpAgIdGekh8vbmZomhzbWY9IK4kK6GWPzW6CTQO5EynTBLt3IUgVf14gDDm1HV9FGeVNqt470cz2qfFn7kOhV2-PWSsCN2fOvQubs5fw1VTM5v884wn-0R30Va2i6VOWbelFi0--PdvEGtxLKW9WIh4SjBHZipkk3CkjZxqs1lW9awp1-4ztBQbIFnBdNgjtKmV6CPzF0VRq-7sak_kncVdahR8cLNk1RxN8daNFR0DsB5TizNKdPLiy112x9UIc1bOyhdIDPN9qmCs1iYeCUzHdABUCJwwv7tlXU2TPkcuH1Sy3kyxecdTY3CABG5FvCU38FQktZRYAKr9b635ss7AfuPC0k0QiUQ8ktLQBOzstjxuAEWcKW49Wbb0PJipA_YHRu6tq6S3AhzoAD2J-S42jN33SDIaMufa0PgMY61WnT5a1mOx1iIWYl27Ge2fea37ofDwn-AmQveaIMDXMzRagzIv1D6BdX4LoRQuq4YZaPO29FJhv_PbIlerRLEQQyWY45MBDIpM6RhyaqiGuFtFAZuYOmd43_yC4IbsPIxgjRrXNpd7KvLPETwGp-m_J-d7tX0lDVRzKbr8ABkQtycTMY4iMWIIKeFrdBVWKfEEWANjupInsnrO1KDNPzW68UkkGnxP8r4WRyYL92w5vBL4'
            ]
        ]);

        $qrcodes = json_decode((string) $res->getBody(), true);

        return view('products.index')->with('qrcodes', $qrcodes);
    }
}
