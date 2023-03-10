<?php

namespace App\Http\Livewire\Peminjam;

use App\Models\Kategori as ModelsKategori;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Kategori extends Component
{
    public $count;

    public function pilihKategori($id)
    {
        $this->emit('pilihKategori', $id);
    }

    public function semuaKategori()
    {
        $this->emit('semuaKategori');
    }

    public function render()
    {
        return view('livewire.peminjam.kategori', [
            'kategori' => ModelsKategori::where('id', '!=', 1)->get(),
            'count' => $this->count
        ]);
    }
}
