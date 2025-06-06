<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Kehadiran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">
    <h1 class="text-xl mb-4">Laporan Kehadiran</h1>
    <table class="w-full border">
        <tr class="bg-gray-200">
            <th class="border p-2">Nama</th>
            <th class="border p-2">Status</th>
            <th class="border p-2">Waktu</th>
        </tr>
        <?php foreach ($attendances as $a): ?>
        <tr>
            <td class="border p-2"><?= htmlspecialchars($a['name']) ?></td>
            <td class="border p-2"><?= htmlspecialchars($a['status']) ?></td>
            <td class="border p-2"><?= htmlspecialchars($a['timestamp']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
