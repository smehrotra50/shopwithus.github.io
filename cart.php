

<!DOCTYPE html>
  
  <html>
  
  <style>
  #button1{
    margin-bottom:10px;
    font-size: 15px;
    width :700 px;
  }

  #button2{
    font-size: 15px;
  }
  
  img{
      height:100px    !important;
      width:80px    !important;
      }
     
  body{
        background-color:#e6f2ff;
        }
        
        table,td,th
        {
        
        border: 2px solid #64B681;
        
        
        }
        table
        {
        
        border-collapse: collapse;
         border-radius:10px;
        }
  </style>
   <body>

    
              <table style=" margin-top: 140px; margin-left: 100px;">
                  <tr>
                      <th    style="text-align: center;">S. No.</th>
                      <th    style="text-align: center;">Product Image</th>
                      <th    style="text-align: center;">Product Name</th><br></br>
                      <th    style="text-align: center;">Price</th>
                      <th    style="text-align: center;">Quantity</th>  
                      <th     style="text-align: center;">Total</th> 
                      <apex:variable value="{!0}"  var="index"/ >   
                         <apex:commandButton value="total" onclick="cost" />
                  </tr>
                  <tr>
                      <td><apex:outputText value="{!g.Serial_no__c}"/></td>
                      <td><apex:outputField value="{!g.product_image__c}"/></td><br></br>
                      <td><apex:commandLink value="{!g.product_name__c}"/></td><br></br>
                      <td><apex:commandLink value="{!g.price__c}"/></td><br></br>
                      <td contenteditable='true'></td>
                      <td contenteditable='true'></td>
                      <td><p><b id="boldstuff"></b></p></td>
                       
                             <script>
                             <head>
                            
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
                     
                     
 <script>
function cost()
{
var price=  document.getElementById("Price__c").rows[1].cells.item(2).innerHTML;
var quantity= document.getElementById("Quantity__c").rows[1].cells.item(3).innerHTML;

var tot=parseInt(price)*parseInt(quantity);

alert(tot);
}
</script>
</tr>
</table>









