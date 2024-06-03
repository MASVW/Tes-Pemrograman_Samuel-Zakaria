<?php

namespace App\Livewire;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Dashboard extends Component
{
    public $action;
    public $siswa;
    public $namaSiswa = '';
    public $kelasId;

    public $listKelas;
    public $namaGuru = 'Silahkan Pilih Kelas';

    public function rules()
    {
        return [
            'namaSiswa' => 'required|min:6',
        ];
    }

    public function mount($action, Siswa $siswa){
        $this->action = $action;
        $this->siswa = $siswa;


        $this->listKelas = Kelas::all();
    }

    public function updateData($kelasId)
    {
        $this->kelasId = $kelasId;
        $guru = Guru::where('kelas_id', $kelasId)->first();
        return $this->namaGuru = $guru ? $guru->nama : 'Tidak ditemukan';
    }

    public function create()
    {
        $this->validate();

        Siswa::create([
            "nama" => $this->namaSiswa,
            "kelas_id" => $this->kelasId
        ]);

        $this->redirect("/");
    }

    public function update()
    {
        $this->validate();

        Siswa::where('id', $this->siswa->id)->update([
            "nama" => $this->namaSiswa,
            "kelas_id" => $this->kelasId
        ]);


        $this->redirect("/");
    }




    public function render()
    {
        return view('livewire.dashboard');
    }
}
