<!DOCTYPE html>
<html>
<head>
    <title>Edit Profil</title>
</head>
<body>
    <h1>Edit Profil</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf

        <label for="name">Nama:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>

        <!-- Tambahkan atribut lainnya yang ingin diupdate -->

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
