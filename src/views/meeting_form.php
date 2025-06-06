<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tambah Rapat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">
    <h1 class="text-xl mb-4">Tambah Rapat</h1>
    <form method="post" action="meeting_form.php" class="space-y-2">
        <input type="text" name="title" placeholder="Judul" class="border p-2 w-full" required>
        <input type="text" name="agenda" placeholder="Agenda" class="border p-2 w-full" required>
        <input type="date" name="date" class="border p-2 w-full" required>
        <input type="time" name="start_time" class="border p-2 w-full" required>
        <input type="time" name="end_time" class="border p-2 w-full" required>
        <input type="text" name="location" placeholder="Lokasi" class="border p-2 w-full" required>
        <button class="bg-blue-500 text-white px-4 py-2 rounded" type="submit">Simpan</button>
    </form>
</body>
</html>
