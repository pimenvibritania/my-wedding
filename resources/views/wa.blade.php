<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send</title>
</head>
<body>
    <h2>Whatsapp</h2>
    <form action="{{route('send.store')}}" method="POST">
        @csrf
        <div>
            <label>No tujuan</label>
            <input type="text" name="nomor"/>
        </div>
        <div>
            <label>Nama</label>
            <input type="text" name="nama"/>
        </div>
        <div>
            <label>Untuk</label>
            <select name="untuk">
                <option value="kawan">Kawan</option>
                <option value="tamu">Tamu</option>
            </select>
        </div>
        <button type="submit">Send</button>
    </form>
</body>
</html>
