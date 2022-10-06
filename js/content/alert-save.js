$('#job').click(function() {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })
  
  swalWithBootstrapButtons.fire({
    title: 'Do you want to take this job?',
    icon: 'info',
    confirmButtonText: 'Yes!',
    reverseButtons: true
  })
  
  .then((result) => {
      swalWithBootstrapButtons.fire(
        'Well done!',
        'You took this job.',
        'success'
      )
  })


  });


$('#no-job').click(function() {
    Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Someone already took this job!',
    })

    });