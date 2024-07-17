function message(){
var refnum=document.getElementById('reference');
var name=document.getElementById('exampleInputName');
var mobileno=document.getElementById('Mobile');
var email=document.getElementById('exampleInputEmail1');
var date=document.getElementById('exampleInputDate');
var address=document.getElementById('exampleAdd');
var com=document.getElementById('exampleCom');
var upload=document.getElementById('formFileMultiple');
const success=document.getElementById('success');
const danger=document.getElementById('danger');


if(refnum.value=='' ||name.value=='' || mobileno.value=='' || email.value=='' || date.value=='' ||address.value=='' || com.value=='' || upload.value==''){
    
alert("Fields can't be empty");
}
else{
    setTimeout(() =>{
        refnum.value='';
        name.value='';
        mobileno.value=='';
        email.value=='' ;
        date.value=='';
        address.value=='';
        com.value=='';
        upload.value=='';
    },2000);

    // window.location.href = 'http://localhost/WLCM/index.html'; 
    alert("Your complaint is successfully registered. ");
   
   
}

}
