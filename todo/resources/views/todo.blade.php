<!DOCTYPE html>
<html>
<head>
    <title>To-Do List Tanpa Database</title>
    <style>
        body { font-family: sans-serif; padding: 50px; background: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; max-width: 400px; margin: auto; }
        ul { list-style: none; padding: 0; }
        li { background: #eee; margin: 10px 0; padding: 10px; display: flex; justify-content: space-between; }
        .btn-hapus { background: red; color: white; border: none; padding: 5px 10px; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <h2>Daftar Tugas Hari Ini</h2>

    <!-- Form Tambah Tugas -->
    <form action="/tambah-tugas" method="POST">
        <!-- @csrf WAJIB ADA di Laravel setiap kali membuat form POST -->
        @csrf 
        <input type="text" name="nama_tugas" placeholder="Ketik tugas baru..." required>
        <button type="submit">Tambah</button>
    </form>

    <hr>

    <!-- Daftar Tugas -->
    <ul>
        @forelse($task as $id => $tugas)
            <li>
               {{ $tugas }}
               <!-- Tombol hapus di sini -->
            </li>
        @empty
            <p>Hore! Tidak ada tugas saat ini.</p>
        @endforelse
    </ul>
</div>

</body>
</html>