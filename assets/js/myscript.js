const flashData = $('.flash-data').data('flashdata');

function previewImg() {
    const sampul = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);

    fileSampul.onload = function(ev) {
        imgPreview.src = ev.target.result;
    }
}

$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});

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

function totalCount(count) {
    const inputBtn = document.getElementById('input_jumlah').value;
    const newInputBtn = parseInt(inputBtn);

    let total = newInputBtn;
    if(count == true) {
        total = newInputBtn + 1;
    }
    if(count == false && newInputBtn > 0) {
        total = newInputBtn - 1;
    }
    document.getElementById('input_jumlah').value = total;
    document.getElementById('jumlah_lomba').innerText = total;
}
