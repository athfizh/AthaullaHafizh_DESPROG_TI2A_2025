$(document).ready(function() {
    
    $('#contactForm').on('submit', function(event) {
        event.preventDefault();

        $('.error-message').hide(); 

        let isValid = true;
        
        const nama = $('#nama').val().trim();
        const email = $('#email').val().trim();
        const pesan = $('#pesan').val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Validasi nama
        if (nama === '') {
            $('#namaError').text('Nama tidak boleh kosong.').show(); 
            isValid = false;
        }

        // Validasi email
        if (email === '') {
            $('#emailError').text('Email tidak boleh kosong.').show();
            isValid = false;
        } else if (!emailRegex.test(email)) {
            $('#emailError').text('Format email tidak valid.').show();
            isValid = false;
        }

        if (pesan.length <= 10) {
            $('#pesanError').text('Pesan harus lebih dari 10 karakter.').show();
            isValid = false;
        }

        if (isValid) {
            const submitButton = $(this).find('button[type="submit"]');
            submitButton.prop('disabled', true).find('span').text('Mengirim...');

            this.submit();
        }
    });
});