<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Weather;
use Illuminate\Support\Facades\Mail;
use function Ramsey\Uuid\v1;
use App\Jobs\SendWeatherJob;
use Carbon\Carbon;


class QuotesController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function quotes()
    {
        return view('quotes');
    }

    public function weather()
    {
        return view('weather');
    }

    public function sendquotes(Request $request)
    {

        $attributes = $request->validate([
            'email' => 'required',
        ]);

        $email = $request->email;
        User::create($attributes);

        // $url = 'https://zenquotes.io/api/random';
        // $response = file_get_contents($url);
        // $newsData = json_decode($response,true);
        // $quote = $newsData[0]['q'];
        // $author = $newsData[0]['a'];

        // $details = [
        //     'email' => $email,
        //     'quote' => $quote,
        //     'author'=> $author
        // ];

        // return response()->json($newsData);  
        // dd($details);

        // // SendMailJob::dispatch($details)->delay(Carbon::now()->addSeconds(10));
        // SendMailJob::dispatch($details);
        return view('welcome');
    }

    public function sendweather(Request $request)
    {

        $weather_attributes = $request->validate([
            'email' => 'required',
        ]);

        $weather_email = $request->email;
        Weather::create($weather_attributes);

        // $chennai_url = 'https://api.openweathermap.org/data/2.5/weather?q=Chennai&appid=777a367af263cfb27f7d5445074f9727';
        // $chennai_response = file_get_contents($chennai_url);
        // $chennaiData = json_decode($chennai_response, true);

        // $mumbai_url = 'https://api.openweathermap.org/data/2.5/weather?q=Mumbai&appid=777a367af263cfb27f7d5445074f9727';
        // $mumbai_response = file_get_contents($mumbai_url);
        // $mumbaiData = json_decode($mumbai_response, true);

        // $delhi_url = 'https://api.openweathermap.org/data/2.5/weather?q=Delhi&appid=777a367af263cfb27f7d5445074f9727';
        // $delhi_response = file_get_contents($delhi_url);
        // $delhiData = json_decode($delhi_response, true);

        // $bangalore_url = 'https://api.openweathermap.org/data/2.5/weather?q=Bangalore&appid=777a367af263cfb27f7d5445074f9727';
        // $bangalore_response = file_get_contents($bangalore_url);
        // $bangaloreData = json_decode($bangalore_response, true);

        // $kolkatta_url = 'https://api.openweathermap.org/data/2.5/weather?q=Goa&appid=777a367af263cfb27f7d5445074f9727';
        // $kolkatta_response = file_get_contents($kolkatta_url);
        // $kolkattaData = json_decode($kolkatta_response, true);

        // $details_weather = [
        //     'email' => $weather_email,
        //     'chennai_weather' => $chennaiData["weather"][0]["main"],
        //     'mumbai_weather' => $mumbaiData["weather"][0]["main"],
        //     'delhi_weather' => $delhiData["weather"][0]["main"],
        //     'bangalore_weather' => $bangaloreData["weather"][0]["main"],
        //     'kolkatta_weather' => $kolkattaData["weather"][0]["main"]
        // ];

        // SendWeatherJob::dispatch($details_weather);
        // Mail::to('sk@gmail.com')->send(new SendWeatherMail($details_weather));
        return view('welcome');
    }

    public function test_quotes()
    {
        $user = new User;
        $emails = $user->pluck('email');

        foreach ($emails as $email) {
            $url = 'https://zenquotes.io/api/random';
            $response = file_get_contents($url);
            $newsData = json_decode($response, true);
            $quote = $newsData[0]['q'];
            $author = $newsData[0]['a'];

            $details = [
                'email' => $email,
                'quote' => $quote,
                'author' => $author
            ];
            SendMailJob::dispatch($details);
        }

        return view('welcome');
    }

    public function test_weather()
    {

        $user = new Weather;
        $emails = $user->pluck('email');

        foreach ($emails as $email) {
            $chennai_url = 'https://api.openweathermap.org/data/2.5/weather?q=Chennai&appid=777a367af263cfb27f7d5445074f9727';
            $chennai_response = file_get_contents($chennai_url);
            $chennaiData = json_decode($chennai_response, true);

            $mumbai_url = 'https://api.openweathermap.org/data/2.5/weather?q=Mumbai&appid=777a367af263cfb27f7d5445074f9727';
            $mumbai_response = file_get_contents($mumbai_url);
            $mumbaiData = json_decode($mumbai_response, true);

            $delhi_url = 'https://api.openweathermap.org/data/2.5/weather?q=Delhi&appid=777a367af263cfb27f7d5445074f9727';
            $delhi_response = file_get_contents($delhi_url);
            $delhiData = json_decode($delhi_response, true);

            $bangalore_url = 'https://api.openweathermap.org/data/2.5/weather?q=Bangalore&appid=777a367af263cfb27f7d5445074f9727';
            $bangalore_response = file_get_contents($bangalore_url);
            $bangaloreData = json_decode($bangalore_response, true);

            $kolkatta_url = 'https://api.openweathermap.org/data/2.5/weather?q=Goa&appid=777a367af263cfb27f7d5445074f9727';
            $kolkatta_response = file_get_contents($kolkatta_url);
            $kolkattaData = json_decode($kolkatta_response, true);

            $details_weather = [
                'email' => $email,
                'chennai_weather' => $chennaiData["weather"][0]["main"],
                'mumbai_weather' => $mumbaiData["weather"][0]["main"],
                'delhi_weather' => $delhiData["weather"][0]["main"],
                'bangalore_weather' => $bangaloreData["weather"][0]["main"],
                'kolkatta_weather' => $kolkattaData["weather"][0]["main"]
            ];

            SendWeatherJob::dispatch($details_weather);
        }
    }
}
