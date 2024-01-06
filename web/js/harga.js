function hitung() {
  var biaya_repaint = document.getElementById("biaya_repaint").value;
  var biaya_tambahan = document.getElementById("biaya_tambahan").value;
  var total_biaya = parseFloat(biaya_repaint) + parseFloat(biaya_tambahan);
  document.getElementById("total_biaya").value = total_biaya;
}

// $("#total_biaya").keyup(function (e) {
//   let total = $("#total_biaya")
//     .val()
//     .replace(/[^.\d]/g, "")
//     .toString();
//   $("#total_biaya").val(parseFloat(total));
// });

// $("#biaya_repaint").keyup(function (e) {
//   hitung();
// });

// $("#repaint-biaya_tambahan").keyup(function (e) {
//   hitung();
// });

// function hitung() {
//   let biaya_repaint = $("#repaint-biaya_repaint")
//     .val()
//     .replace(/[^.\d]/g, "")
//     .toString();
//   let biaya_tambahan = $("#repaint-biaya_tambahan")
//     .val()
//     .replace(/[^.\d]/g, "")
//     .toString();
//   let total = parseFloat(biaya_repaint) + parseFloat(biaya_tambahan);
//   $("#repaint-total_biaya").val(total_biaya);
// }
