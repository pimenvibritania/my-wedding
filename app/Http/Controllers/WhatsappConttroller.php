<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsappConttroller extends Controller
{
    public function index()
    {
        return view('wa');
    }

    public function store(Request $request)
    {
        $nomor = $request->nomor;
        $nama = $request->nama;

        $baseUrl = "https://api.whatsapp.com/send";
        $encodedNama = str_replace(" ", "%20", $nama );
        $encodedUrl = str_replace(" ", "%2B", $nama);

        $text = "Kepada%20Yth%2C%0ABapak%2FIbu%2FSaudara%2Fi%0A{$encodedNama}%0A____%0A%0ABismillahirrahmanirrahim%2C%0AAssalamu%27alaikum%20Warahmatullahi%20Wabarakatuh%0A%0AIzinkan%20kami%20berbagi%20momen%20paling%20berbahagia%20dalam%20hidup%20kami.%20Momen%20Spesial%20kami%20yang%20akan%20bermula%20dari%20titik%20ini.%0A%0ASiti%20Khodijah%20al-Ayyubi%0A%26%0APirman%20Abdurohman%0A%0AKlik%20tautan%20berikut%20ini%20yang%20akan%20membawa%20Bapak%2FIbu%2FSaudara%2Fi%20dan%20teman-teman%20menuju%20Undangan%20Pernikahan%20kami.%0A%0Ahttps%3A%2F%2Fwedding.pimenvibritania.tech%2F%3Fto%3D{$encodedUrl}%20%0A%0AMerupakan%20suatu%20kebahagiaan%20bagi%20kami%20jika%20Bapak%2FIbu%2FSaudara%2Fi%20dan%20teman-teman%20berkenan%20menghadiri%20dan%20memberikan%20doa%20restu%20pada%20momen%20spesial%20kami%20%0A%0ATerima%20Kasih%0AWassalamu%27alaikum%20Warahmatullahi%20Wabarakatuh%0A%0AYayang%20%26%20Pimen";

        $url = "{$baseUrl}/?phone={$nomor}&text={$text}";
        return redirect()->away($url);
    }
}
