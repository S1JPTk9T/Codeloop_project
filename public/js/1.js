




function headline() {
      head = ReactDOM.render(
          React.createElement('tr',{id:'headline'},null),
          document.getElementById('data')
        );

      headers.map(h=> {
          let th  = document.createElement("th");
          let txt = document.createTextNode(h);
          th.append(txt);
          head.appendChild(th);



      });




  }





let headers = [
  'nome',
  'nascimento',
  'serie',
  'cep'
];
