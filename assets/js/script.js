const flashData = $('.flash-data').data('flashdata');

if(flashData) {
    Swal.fire({
        title: 'Data Universitas ',
        text: 'berhasil ' + flashData,
        icon: 'success'
    });
}

$('.delete-button').on('click', function(ev) {
    ev.preventDefault(); 
    const delete_href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda ingin menghapusnya?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
      }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = delete_href;
        }
      })
});
