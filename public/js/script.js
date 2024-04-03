// Ambil elemen2 yg dibutuhkan
let keyword = document.getElementById("search");
let option = document.getElementById("contoh");

keyword.addEventListener("keyup", function () {
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            option.innerHTML = xhr.responseText;
            // console.log(xhr.responseText);
        }
    };

    // eksekusi ajax
    xhr.open("GET", "/ajax/pertanyaan.php?keyword=" + keyword.value, true);
    xhr.send();
});
