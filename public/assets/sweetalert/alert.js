$('.btn-delete').click(function() {
    let that = $(this);
    Swal.fire({
        title: 'Konfirmasi Hapus',
        text: "Apakah anda yakin ingin menghapus?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        showLoaderOnConfirm: true
    }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Deleted!',
            'Data berhasil dihapus',
            'success'
          )

          that.parent('form').submit();

        } else if (
          result.dismiss === Swal.DismissReason.cancel
        ) {
          Swal.fire(
            'Cancelled',
            'Data tidak jadi dihapus',
            'error'
          )
        }
})
})

$(document).ready(function() {
    $('.btnSubmit').click(function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        Swal.fire({
            title: 'Konfirmasi Submit',
            text: "Apakah anda yakin ingin submit?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Submit',
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.value) {
                $('#formSubmit').submit();

            }else if (
                result.dismiss === Swal.DismissReason.cancel

              ) {
                Swal.fire(
                  'Cancelled',
                  'Submit di cancel, silahkan cek dan masukkan data anda dengan benar',
                  'info'
                )
              }
        })
    })
})

$(document).ready(function() {
    $('.btnEdit').click(function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        Swal.fire({
            title: 'Konfirmasi Submit',
            text: "Apakah anda yakin ingin update data ini?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Submit',
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.value) {
                $('#formSubmit').submit();

            }else if (
                result.dismiss === Swal.DismissReason.cancel

              ) {
                Swal.fire(
                  'Cancelled',
                  'Submit di cancel, silahkan cek dan masukkan data anda dengan benar',
                  'info'
                )
              }
        })
    })
})
