function openBox(value){
    event.preventDefault();
    switch(value){
    case 'Delete Account':
    console.log(document.getElementById("delete_account"));
        document.getElementById("delete_account").style.display = "block";
      
        break;
    default:
    }
}

function closeBox(value){
    event.preventDefault();
    switch(value){
    case 'Delete Account':
        document.getElementById("delete_account").style.display="none";
        break;
    default:
    }

}