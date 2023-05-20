function getPDF() {

//Cria o objeto para gerar o PDF
  var doc = new jsPDF();
 
  var specialElementHandlers = {
    '#getPDF': function(element, renderer){
      return true;
    },
    '.controls': function(element, renderer){
      return true;
    }
  };

//Captura o conteúdo da DIV content
  doc.fromHTML($('.content').get(0), 50, 10, {
    'width': 70, 
    'elementHandlers': specialElementHandlers
  });

//Gera o PDF com o nome especificado.
  doc.save('Generated.pdf');
}
