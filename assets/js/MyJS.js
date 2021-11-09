//ubah warna
function changecolor(id) {
  document.body.style.background = document.getElementById(id).innerHTML;
}

//pilih mood
function onMood() {
  var mood = document.getElementById("mood").value;
  if (mood == "happy") {
    document.getElementById("kata").innerHTML = "Wiidiiww Mantap";
  } else if (mood == "sad") {
    document.getElementById("kata").innerHTML = "HaHaHa Kasian ;)";
  } else {
    document.getElementById("kata").innerHTML = " ";
  }
}

//fungsi faktorial
function getFaktorial() {
  var num = document.getElementById("faktorial").value;
  var hasil = 1;
  var n = 0;
  for (n = num; n >= 1; n--) {
    hasil = hasil * n;
  }
  document.getElementById("hasilfaktorial").innerHTML = `<p>Hasil : ${hasil}</p>`;
}
