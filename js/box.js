function openBox(value,id){
    event.preventDefault();
    switch(value){
    case 'Delete Account':
        document.getElementById("delete_account").style.display = "block";
        break;
        case 'Show Comments':
        document.getElementById("show_comments").style.display = "block";
        break;
        case 'Add Review':
        document.getElementById("add_review").style.display="block";
        console.log('Aa');
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
    case 'Add Review':
        document.getElementById("add_review").style.display="none";
        console.log('Aa');
        break;
    default:
    }

}