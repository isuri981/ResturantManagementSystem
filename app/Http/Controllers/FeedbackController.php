<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Feedback;

use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Http;

class FeedbackController extends Controller
{
    // Display the feedback form
    public function create()
    {
        return view('feedback');
    }

    // Store feedback and perform sentiment analysis
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'feedback' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'customer_name' => 'nullable|string',
            'customer_email' => 'nullable|email',
        ]);

        // Call an external API for sentiment analysis or use a local library
        $sentimentScore = $this->analyzeSentiment($validatedData['feedback']);

        $validatedData['sentiment_score'] = $sentimentScore;

        Feedback::create($validatedData);

        return redirect()->back()->with('message', 'Feedback submitted successfully!');
    }

    // Method to perform sentiment analysis
    private function analyzeSentiment($text)
    {
        $response = Http::asForm()->withHeaders([
            'x-textrazor-key' => '82af606daa624f516b8c6fb495ae051743670dcae00e48a35d8f3315',
        ])->post('https://api.textrazor.com/', [
            'text' => $text,
            'extractors' => 'entities,sentiment',
        ]);

        $data = $response->json();

        // Log the response for debugging purposes
        // dd('TextRazor API Response:', $data);

        // Return the sentiment score (adjust according to your API response)
        return $data['response']['sentiment']['score'] ?? 0;
    }


    // public function test($text)
    // {
    //     // $response = Http::withHeaders([
    //     //     'x-textrazor-key' => '82af606daa624f516b8c6fb495ae051743670dcae00e48a35d8f3315',
    //     // ])->post('https://api.textrazor.com', [
    //     //     'text' => $text,
    //     //     'extractors' => 'entities,sentiment',
    //     // ]);

    //     // $data = $response->json();
    //     // return $data['response']['sentiment']['score'] ?? 0;

    //     return $text;
    // }



    // Display feedback report
    public function report()
    {
        $feedbacks = Feedback::all();
        $averageRating = Feedback::avg('rating');
        $averageSentiment = Feedback::avg('sentiment_score');

        return view('admin.report', compact('feedbacks', 'averageRating', 'averageSentiment'));
    }
}
