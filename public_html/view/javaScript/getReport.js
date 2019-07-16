function onClick() {
  var pdf = new jsPDF();
  pdf.canvas.height = 50 * 9;
  pdf.canvas.width = 50 * 5.5;

  pdf.fromHTML(document.body);

  pdf.save('report.pdf');
};

var element = document.getElementById("clickbind");
element.addEventListener("click", onClick);
