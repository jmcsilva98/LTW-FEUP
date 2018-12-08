let likesComment= document.querySelectorAll('span.likes');
likesComment.forEach((like) => like.addEventListener('click', incrementLikesComment))
let dislikesComment= document.querySelectorAll('span.dislikes');
dislikesComment.forEach((like) => like.addEventListener('click', incrementDislikesComment))

let add_Comment= document.querySelectorAll('form#addCommentForm input[type=submit]');
add_Comment.forEach((comment) => comment.addEventListener('click',addComment));

function incrementLikesComment(event)
{
  let commentID= event.target.parentElement.getAttribute('data-id');
  let userID= event.target.parentElement.getAttribute('user-id');

  let request = new XMLHttpRequest()

    request.open("post", "../actions/action_api_likes_comment.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      let item = JSON.parse(this.responseText)
      event.target.textContent=item['likes']
      event.target.parentElement.querySelector('span.dislikes').textContent= item['dislikes']
    })  

    request.send(encodeForAjax({commentID,userID}))
}



function incrementDislikesComment(event)
{
  let commentID= event.target.parentElement.getAttribute('data-id');
  let userID= event.target.parentElement.getAttribute('user-id');

  let request = new XMLHttpRequest()

    request.open("post", "../actions/action_api_dislikes_comment.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      let item = JSON.parse(this.responseText)
      event.target.textContent=item['dislikes']
      event.target.parentElement.querySelector('span.likes').textContent= item['likes']
    })  

    request.send(encodeForAjax({commentID,userID}))
}

function addComment(event){
  let description = document.getElementById("addCommentForm").elements.namedItem('description').value
  let reviewID= event.target.parentElement.parentElement.parentElement.getAttribute('data-id')

  console.log(reviewID)
  let request = new XMLHttpRequest()
  request.open("post", "../actions/action_api_insert_comment.php", true)
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
  request.addEventListener("load", function () {
    document.getElementById("add_comment").style.display="none";
  }) 
  request.send(encodeForAjax({description,reviewID}))
  event.preventDefault();
}
