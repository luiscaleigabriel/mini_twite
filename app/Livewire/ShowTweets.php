<?php

namespace App\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public string $message = 'Hello, Livewire';

    public function render()
    {
        $tweets = Tweet::get();

        return view('livewire.show-tweets', compact('tweets'));
    }
}
