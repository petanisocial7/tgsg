$("#total_biaya").focus();

$("#total_biaya").keyup(function (e) {
  let total_biaya = $("#total_biaya")
    .val()
    .replace(/[^.\d]/g, "")
    .toString();
  $("#total_biaya").val(parseFloat(total_biaya));
});

$("#biaya-repaint").keyup(function (e) {
  hitung();
});

$("#biaya-tambahan").keyup(function (e) {
  hitung();
});

function hitung() {
  let biaya_repaint = $("#biaya-repaint")
    .val()
    .replace(/[^.\d]/g, "")
    .toString();
  let biaya_tambahan = $("#biaya-tambahan")
    .val()
    .replace(/[^.\d]/g, "")
    .toString();
  let total_biaya = parseFloat(biaya_repaint) + parseFloat(biaya_tambahan);
}
    