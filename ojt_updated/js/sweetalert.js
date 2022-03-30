document.querySelector(".second").addEventListener("click", function() {
  Swal.fire({
    title: "Are you sure about deleting this file?",
    type: "info",
    showCancelButton: true,
    confirmButtonText: "Delete It",
    confirmButtonColor: "#ff0055",
    cancelButtonColor: "#999999",
    reverseButtons: true,
    focusConfirm: false,
    focusCancel: true
  });
});

  title: 'Oops...',
  icon: 'error',
  text: 'Wrong email/password combination!',
  allowOutsideClick: true,
  allowEscapeKey: true,
  allowEnterKey: false,
  timerProgressBar: true,
  timer: 6000,
  showConfirmButton: false,