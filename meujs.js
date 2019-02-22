function sem_acento(e,args)
{		
  var evt = (document.all)? event.keyCode : e.charCode;
  var valid_chars = '0123456789abcdefghijlmnopqrstuvxzwykABCDEFGHIJLMNOPQRSTUVXZWYK-_ '+args;	
  var chr= String.fromCharCode(evt);
  if (valid_chars.indexOf(chr)<0){
    e.preventDefault();
  }
}

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
   if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}



function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;  
    if((tecla>47 && tecla<58)) return true;
    else{
     if (tecla==8 || tecla==0) return true;
else  return false;
    }
}