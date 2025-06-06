<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">
    <h1 class="text-2xl mb-4">Dashboard</h1>
    <a href="meeting_form.php" class="bg-green-500 text-white px-3 py-1 rounded mr-2">Tambah Rapat</a>
    <a href="logout.php" class="bg-gray-500 text-white px-3 py-1 rounded">Logout</a>

    <h2 class="text-xl mt-6">Daftar Rapat</h2>
    <table class="w-full mt-2 border">
        <tr class="bg-gray-200">
            <th class="border p-2">Judul</th>
            <th class="border p-2">Tanggal</th>
            <th class="border p-2">Aksi</th>
        </tr>
        <?php foreach ($meetings as $m): ?>
        <tr>
            <td class="border p-2"><?= htmlspecialchars($m['title']) ?></td>
            <td class="border p-2"><?= htmlspecialchars($m['date']) ?></td>
            <td class="border p-2">
                <form method="post" action="attendance_form.php" class="inline">
                    <input type="hidden" name="meeting_id" value="<?= $m['id'] ?>">
                    <button class="bg-blue-500 text-white px-2 py-1 rounded" name="action" value="attend">Absensi</button>
                </form>
                <form method="get" action="report.php" class="inline">
                    <input type="hidden" name="meeting_id" value="<?= $m['id'] ?>">
                    <button class="bg-gray-500 text-white px-2 py-1 rounded" type="submit">Laporan</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
