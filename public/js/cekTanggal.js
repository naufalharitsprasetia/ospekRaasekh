function cekTanggal(tanggalTarget) {
  // Ambil tanggal hari ini
  var tanggalSekarang = new Date();
  
  // Ubah tanggal target menjadi objek Date
  var tanggalTargetObj = new Date(tanggalTarget);
  
  // Bandingkan tanggal
  if (tanggalSekarang.getTime() === tanggalTargetObj.getTime()) {
    // Jika sama, tambahkan kelas .tag-progress ke elemen <span> yang sesuai
    document.querySelector('.tag-progress').classList.add("active");
    document.querySelector('.tag-soon').classList.remove("active");
    document.querySelector('.tag-selesai').classList.remove("active");
  } else if (tanggalSekarang < tanggalTargetObj) {
    // Jika tanggal hari ini sebelum tanggal target, tambahkan kelas .tag-soon ke elemen <span> yang sesuai
    document.querySelector('.tag-soon').classList.add('active');
    document.querySelector('.tag-progress').classList.remove('active');
    document.querySelector('.tag-selesai').classList.remove('active');
  } else {
    // Jika tanggal hari ini sudah melewati tanggal target, tambahkan kelas .tag-selesai ke elemen <span> yang sesuai
    document.querySelector('.tag-selesai').classList.add('active');
    document.querySelector('.tag-soon').classList.remove('active');
    document.querySelector('.tag-progress').classList.remove('active');
  }
}
