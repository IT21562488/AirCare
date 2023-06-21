function success(){

    let cardnumber = document.forms["form"]["Crdnumber"].value;

    if(cardnumber.length > 10 || cardnumber.length <10)
   {
    alert("Card number must be 10 characters");
   }
   
}
function submit(){
    alert("Payment successfull");
}
