<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        /* Internal CSS untuk menata tabel */
        table {
            width: 50%;
            border-collapse: collapse; /* Menyatukan garis batas */
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        table th,
        table td {
            padding: 12px 15px;
            border: 1px solid #dddddd;
        }
        table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3; /* Efek zebra-stripe */
        }
        table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        /* Style untuk kolom pertama agar tebal */
        table td:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Data Dosen</h2>

    <table>
        <thead>
            <tr>
                <th>Keterangan</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Array Asosiatif dari praktikum 2 
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            // Menggunakan foreach loop untuk membuat baris tabel secara dinamis
            foreach ($Dosen as $key => $value) {
                // Mengubah key menjadi format yang lebih rapi (misal: 'jenis_kelamin' menjadi 'Jenis Kelamin')
                $keterangan = ucwords(str_replace('_', ' ', $key));
                
                echo "<tr>";
                echo "<td>{$keterangan}</td>";
                echo "<td>{$value}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>