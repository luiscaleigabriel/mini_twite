<?php

use Livewire\Component;
use App\Models\Tweet;

new class extends Component
{


    public function todos()
    {
        return Tweet::all();
    }

};
?>

<div>

    <h1>Lista de tweets</h1>

    @forelse ($this->todos() as $tweet)
        <h1>{{ $tweet->user->name }} - {{ $tweet->content }}</h1>
    @empty
        <h2>Nenhum tweet encontrado</h2>
    @endforelse

</div>
