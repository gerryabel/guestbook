<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h1>Buku Tamu</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/store">
        @csrf
        <input type="text" name="name" placeholder="Nama"><br>
        <textarea name="message" placeholder="Pesan"></textarea><br>
        <button type="submit">Kirim</button>
    </form>

    <hr>

    @foreach($messages as $msg)
        <p><strong>{{ $msg->name }}</strong>: {{ $msg->message }}</p>
    @endforeach
</body>
</html>
