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

        $url = "https://api.whatsapp.com/send/?phone={$nomor}&text=+Kepada+Yth%2C%0ABapak%2FIbu%2FSaudara%2Fi%0A%2A{$nama}%2A%0A____________%0A%0A_Bismillahirrahmanirrahim%2C_%0AAssalamu%27alaikum+Warahmatullahi+Wabarakatuh%0A%0AIzinkan+kami+berbagi+momen+paling+berbahagia+dalam+hidup+kami.+Momen+Spesial+kami+yang+akan+bermula+dari+titik+ini.%0A%0A%2ASiti+Khodijah+al-Ayyubi%2A%0A%26%0A%2APirman+Abdurohman%2A%0A%0AKlik+tautan+berikut+ini+yang+akan+membawa+Bapak%2FIbu%2FSaudara%2Fi+dan+teman-teman+menuju+Undangan+Pernikahan+kami.%0A%0Ahttps%3A%2F%2Fwedding.pimenvibritania.tech%2F%3Fto%3DNama%2BTamu+%0A%0AMerupakan+suatu+kebahagiaan+bagi+kami+jika+Bapak%2FIbu%2FSaudara%2Fi+dan+teman-teman+berkenan+menghadiri+dan+memberikan+doa+restu+pada+momen+spesial+kami+%0A%0ATerima+Kasih%0AWassalamu%27alaikum+Warahmatullahi+Wabarakatuh%0A%0A%2AYayang+%26+Pimen%2A&app_absent=0";

        return redirect()->away($url);
    }
}
