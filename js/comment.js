let likesComment= document.querySelectorAll('#likes');
likesComment.forEach((like) => like.addEventListener('click', incrementLikesComment))
let dislikesComment= document.querySelectorAll(' #dislikes');
dislikesComment.forEach((like) => like.addEventListener('click', incrementDislikesComment))

let add_Comment= document.querySelectorAll('form#addCommentForm input[type=submit]');
add_Comment.forEach((comment) => comment.addEventListener('click',addComment));

let close_Comment= document.querySelectorAll('form#addCommentForm input[type=button]');
close_Comment.forEach((comment) => comment.addEventListener('click',closeComment));
let show_form = document.querySelectorAll('article input[name="addComment"]');
show_form.forEach((form) =>form.addEventListener('click',showForm));

function incrementLikesComment(event)
{
  let commentID= event.target.parentElement.parentElement.parentElement.getAttribute('data-id');
  let userID= event.target.parentElement.parentElement.parentElement.getAttribute('user-id');


  let request = new XMLHttpRequest()

    request.open("post", "../actions/action_api_likes_comment.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      let item = JSON.parse(this.responseText)
      event.target.textContent=item['likes']
      console.log( event.target.parentElement.parentElement)
      event.target.parentElement.parentElement.querySelector('span#dislikes').textContent= item['dislikes']
    })  

    request.send(encodeForAjax({commentID,userID}))
}



function incrementDislikesComment(event)
{
  let commentID=event.target.parentElement.parentElement.parentElement.getAttribute('data-id');
  let userID= event.target.parentElement.parentElement.parentElement.getAttribute('user-id');
  console.log(event.target.parentElement.parentElement)

  let request = new XMLHttpRequest()

    request.open("post", "../actions/action_api_dislikes_comment.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      let item = JSON.parse(this.responseText)
      event.target.textContent=item['dislikes']
      event.target.parentElement.parentElement.querySelector('span#likes').textContent= item['likes']
    })  

    request.send(encodeForAjax({commentID,userID}))
}

function addComment(event){
  let description = event.target.parentElement.querySelectorAll('textarea#description')[0].value
  let reviewID= event.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.getAttribute('data-id')
  console.log(description)
  let request = new XMLHttpRequest()
  request.open("post", "../actions/action_api_insert_comment.php", true)
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
  request.addEventListener("load", function () {
    location.reload();
  }) 
  request.send(encodeForAjax({description,reviewID}))
   event.preventDefault();
}

function showForm(event){
  if(event.target.parentElement.querySelector('#add_comment').style.display=="none")
  event.target.parentElement.querySelector('#add_comment').style.display="block"
  else 
  event.target.parentElement.querySelector('#add_comment').style.display="none"
}

function closeComment(event){
  event.target.parentElement.parentElement.parentElement.style.display="none";
}
