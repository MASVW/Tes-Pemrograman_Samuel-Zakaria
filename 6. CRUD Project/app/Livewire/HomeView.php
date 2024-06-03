<?php

namespace App\Livewire;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Support\Carbon;
use Livewire\Component;

class HomeView extends Component
{
    public $siswa;

    public function mount()
    {
        $this->siswa = Siswa::with('kelas.gurus')->get();
        
        $this->siswa = $this->mergeSort($this->siswa->all());
        $this->siswa = collect($this->siswa);

        foreach ($this->siswa as $siswa) {
            if ($siswa->tanggalLahir) {
                $siswa->tanggalLahir = $this->transformDate($siswa->tanggalLahir);
            }
        }
    }

    public function deleteData($dataId)
    {
        Siswa::where('id', $dataId)->delete();
        $this->redirect("/");
    }

    public function transformDate($dateString)
    {
        $date = Carbon::createFromFormat('Y-m-d', $dateString);
        $date->locale('id');
        return $date->translatedFormat('d F Y');
    }

    public function mergeSort($array)
    {
        if (count($array) <= 1) {
            return $array;
        }

        $mid = intdiv(count($array), 2);
        $left = array_slice($array, 0, $mid);
        $right = array_slice($array, $mid);

        $left = $this->mergeSort($left);
        $right = $this->mergeSort($right);

        return $this->merge($left, $right);
    }

    private function merge($left, $right)
    {
        $result = [];

        while (count($left) > 0 && count($right) > 0) {
            if (Carbon::parse($left[0]->tanggalLahir)->lt(Carbon::parse($right[0]->tanggalLahir))) {
                $result[] = array_shift($left);
            } else {
                $result[] = array_shift($right);
            }
        }

        return array_merge($result, $left, $right);
    }

    public function render()
    {
        return view('livewire.home-view', ['siswa' => $this->siswa]);
    }
}
