function plus(e)
{

    var id = e;
    let testid = id.split("plus");
    var productid =  testid[1];
    var quantitiyid = "quantity"+ productid;
 
   var quantity = document.getElementById(quantitiyid);
           var quantityval = parseInt(quantity.value);
           
           quantityval = quantityval + 1;
           quantity.value = quantityval;
              
    
               
            
 }
    
         function minus(e){
              var id = e;
              let testid = id.split("minus");
              var productid =  testid[1];
              var quantitiyid = "quantity"+productid;
              var quantity = document.getElementById(quantitiyid);
              var quantityval = parseInt(quantity.value);
             if(quantityval > 0)
             { 
              quantityval = quantityval - 1;
              quantity.value = quantityval;
            }
        
            }
