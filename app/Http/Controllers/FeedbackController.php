<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $data = Feedback::latest()->paginate(5);

        $feedbacks = Feedback::all();
        $keywordsCount = [];
        $ignoredWords = [
            'saya', 'aku', 'kamu', 'dia', 'mereka',
            'ini', 'itu', 'sini', 'situ',
            'adalah', 'sebagai', 'oleh', 'pada', 'di',
            'dan', 'atau', 'tetapi', 'namun', 'sebab', 'karena',
            'yang', 'apa', 'bagaimana', 'dimana', 'kapan', 'siapa',
            'dengan', 'ke', 'dari', 'menuju', 'kepada', 'menuju',
            'ini', 'itu', 'tersebut', 'sangat', 'benar', 'tidak',
            'bisa', 'boleh', 'mungkin', 'harus', 'seharusnya', 'perlu',
            'akan', 'telah', 'sudah', 'sedang', 'masih',
            'yang', 'apa', 'bagaimana', 'dimana', 'kapan', 'siapa',
            'bagus', 'buruk', 'baik', 'jelek', 'tidak', 'ya', 'tidak',
            'mereka', 'kami', 'kita', 'anda', 'diri', 'kalian',
        ];

        foreach ($feedbacks as $feedback) {
            $feedbackText = strtolower($feedback->feedback);

            $words = array_diff(str_word_count($feedbackText, 1), $ignoredWords);

            $wordCount = array_count_values($words);

            foreach ($wordCount as $word => $count) {
                if (!isset($keywordsCount[$word])) {
                    $keywordsCount[$word] = 0;
                }
                $keywordsCount[$word] += $count;
            }
        }

        arsort($keywordsCount);

        $topKeywords = array_slice($keywordsCount, 0, 10);

        if (!request()->has('pg') || request()->pg == 1) {
            $itemsPerPage = 5;
            $currentPage = 1;
            $startIndex = ($currentPage - 1) * $itemsPerPage;
            $topKeywords = array_slice($topKeywords, $startIndex, $itemsPerPage);
        }

        if (request()->has('pg') && request()->pg == 2) {
            $itemsPerPage = 5;
            $currentPage = 2;
            $startIndex = ($currentPage - 1) * $itemsPerPage;
            $topKeywords = array_slice($topKeywords, $startIndex, $itemsPerPage);
        }

        return view('pages.dashboard.feedback.index', compact('data', 'topKeywords'));
    }
}
