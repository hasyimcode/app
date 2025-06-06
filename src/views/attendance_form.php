<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { $meeting_id = $_POST['meeting_id']; } else { $meeting_id = $_GET['meeting_id'] ?? ''; } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4">
    <h1 class="text-xl mb-4">Absensi Rapat</h1>
    <form method="post" action="attendance_form.php" class="space-y-2">
        <input type="hidden" name="meeting_id" value="<?= htmlspecialchars($meeting_id) ?>">
        <select name="status" class="border p-2 w-full">
            <option value="hadir">Hadir</option>
            <option value="izin">Izin</option>
            <option value="alfa">Alfa</option>
        </select>
        <button class="bg-blue-500 text-white px-4 py-2 rounded" type="submit">Submit</button>
    </form>
</body>
</html>
