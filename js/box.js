function openBox(value){
    event.preventDefault();
    switch(value){
    case 'Delete Account':
        document.getElementById("delete_account").style.display = "block";
        break;
        case 'Show Comments':
        if(document.getElementById("allComments").style.display == "block")
            document.getElementById("allComments").style.display = "none";
        else 
            document.getElementById("allComments").style.display = "block";
        break;
        case 'Add Review':
        document.getElementById("add_review").style.display="block";
        break;
        case 'Add Comment':
        console.log(document.querySelectorAll("addCommentForm"))
        document.getElementById("add_comment").style.display="block";
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
        break;
    case 'Add Comment':
        document.getElementById("add_comment").style.display="none";
        break;
    default:
    }

}