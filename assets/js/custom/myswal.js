const swal = $('.swal').data('swal');
if (swal){
    Swal.fire({
        icon: 'success',
        title: swal,
        text: ''
    })

    $('.tombol-hapus').on('click', function(e){
      e.preventDefalut();
      const href = $(this).attr('href');
      Swal.fire({
          title: 'Anda anda yakin?',
          text: "Data akan dihapus",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Hapus Data!'
        }).then((result) => {
          if (result.value) {
            document.location.href = href;
          }
        })
  })
  }

  const swallogin = $('.swallogin').data('swallogin');
if (swallogin){
  
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  
  Toast.fire({
    icon: 'success',
    title: swallogin
  })
}
