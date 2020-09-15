<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumusController extends Controller
{
    public function tabungPage($hasil = null) {
        return view('tabung',['hasil' => $hasil]);
    }

    public function rumusTabung(Request $inputan) {
        $inputan->validate([
            'jari2' => 'required|numeric',
            'tinggi' => 'required|numeric'
        ]);

        $jari2 = $inputan->jari2;
        $tinggi = $inputan->tinggi;

        $formulaTabung = 3.14*$jari2*$jari2*$tinggi;
        $hasil = $formulaTabung;
        return $this->tabungPage($hasil);
    }

    public function bolaPage($hasil = null) {
        return view('bola', ['hasil' => $hasil]);
    }

    public function rumusBola(Request $inputan) {
        $inputan->validate([
            'jari2' => 'required|numeric'
        ]);

        $jari2 = $inputan->jari2;

        $formulaBola = 4/3*3.14*$jari2*$jari2*$jari2;
        $hasil = $formulaBola;

        return $this->bolaPage($hasil);
    }

    public function kerucutPage($hasil = null) {
        return view('kerucut', ['hasil' => $hasil]);
    }

    public function rumusKerucut(Request $inputan) {
        $inputan->validate([
            'jari2' => 'required|numeric',
            'tinggi' => 'required|numeric'
        ]);

        $jari2 = $inputan->jari2;
        $tinggi = $inputan->tinggi;

        $formulaKerucut = 1/3*3.14*$jari2*$jari2*$tinggi;
        $hasil = $formulaKerucut;

        return $this->kerucutPage($hasil);
    }
}
