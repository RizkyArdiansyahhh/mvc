function showConfirmDelete(id) {
  Swal.fire({
    title: "apakah kamu yakin",
    text: "data setelah di hapus akan terhapus permanen",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "<?= BASE_URL ?>/mahasiswa/hapus/" + id;
      //   Swal.fire({
      //     title: "Deleted!",
      //     text: "Your file has been deleted.",
      //     icon: "success",
      //   });
    }
  });
}
