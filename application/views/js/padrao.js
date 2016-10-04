function ajaxx (){
    
     try { 
  ajax = new ActiveXObject("Microsoft.XMLHTTP"); 
 }  
 catch(e) { 
  try { 
   ajax = new ActiveXObject("Msxml2.XMLHTTP"); 
  } 
  catch(ex) { 
   try { 
    ajax = new XMLHttpRequest(); 
   } 
   catch(exc) { 
    alert("Esse browser não tem recursos para uso do Ajax"); 
    ajax = null; 
   } 
  } 
 } 
    
   
}

