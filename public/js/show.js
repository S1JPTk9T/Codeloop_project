function edit(id) {
alert("editar");

};


function rm(id) {
let token = document.getElementsByName("_token")[0].value;
let question = confirm("Deseja apagar??");
  if(question==true)
  {
     let xhr = new XMLHttpRequest();
         xhr.onload=function(response) {
            if(this.status==200)
            {
              alert("dados excluidos!");
              location = window.location.href;
            }
         };
         xhr.open("delete",location.origin+"/data/"+id,true);
         xhr.setRequestHeader("X-CSRF-TOKEN",token);
         xhr.send();
  };


};
