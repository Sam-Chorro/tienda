<?php  class Tienda{  
    
    public $Producto; 

    function totalizar_compra($Cantidad){      
             
    if($this->Producto == "Samsung Galaxy S6"){       
      return $Cantidad * 790;     
  }  else if($this->Producto == "iPhone 6S"){   
          return $Cantidad * 890;      
}      
 else if($this->Producto == "LG G4"){      
       return $Cantidad * 720;    
} 
else{   
      return 0;        
     }   
  }
 } 
 ?>