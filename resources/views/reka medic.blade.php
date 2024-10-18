<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reka Medis Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Rekam Medis Pasien</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm border-b border-gray-200">Nama Pasien</th>
                        <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm border-b border-gray-200">Tanggal Pemeriksaan</th>
                        <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm border-b border-gray-200">Riwayat Penyakit</th>
                        <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm border-b border-gray-200">Alergi</th>
                        <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm border-b border-gray-200">Resep Obat yang Diterima</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <!-- Example row -->
                    <tr>
                        <td class="w-1/5 py-3 px-4">John Doe</td>
                        <td class="w-1/5 py-3 px-4">2023-10-01</td>
                        <td class="w-1/5 py-3 px-4">Diabetes</td>
                        <td class="w-1/5 py-3 px-4">Penicillin</td>
                        <td class="w-1/5 py-3 px-4">Metformin</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>