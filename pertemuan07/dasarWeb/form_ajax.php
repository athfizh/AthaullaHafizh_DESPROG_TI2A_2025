<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi dengan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Validasi dengan AJAX</h1>
    <div id="hasil"></div>

    <form id="myForm">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        
        <input type="submit" value="Submit">
    </form>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Mencegah submit form standar

            // Validasi client-side (sama seperti soal 7.2)
            var nama = $("#nama").val();
            var email = $("#email").val();
            var isValid = true;
            if (nama === "") { $("#nama-error").text("Nama harus diisi."); isValid = false; } 
            else { $("#nama-error").text(""); }
            if (email === "") { $("#email-error").text("Email harus diisi."); isValid = false; } 
            else { $("#email-error").text(""); }

            // Jika valid, kirim data ke server menggunakan AJAX
            if (isValid) {
                $.ajax({
                    url: "proses_validasi.php", // File PHP tujuan
                    type: "POST",
                    data: $(this).serialize(), // Ambil semua data form
                    success: function(response) {
                        // Tampilkan respon dari server di div #hasil
                        $("#hasil").html(response);
                    }
                });
            }
        });
    });
    </script>
</body>
</html>