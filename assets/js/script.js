$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#judulModal').html('Tambah Data Karakter ML');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        // $('#nama').val('');
        // $('#role').val('');
        // $('#ras').val('');
        // $('#ultimate').val('');
        // $('#id').val('');
    });

    $('.tampilModalUbah').on('click', function() {
        $('#judulModal').html('Edit Data Karakter ML');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/karakter_ml/edit')

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/karakter_ml/getEdit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#role').val(data.role);
                $('#ras').val(data.ras);
                $('#ultimate').val(data.ultimate);
                $('#id').val(data.id);
            }
        })
    });
});