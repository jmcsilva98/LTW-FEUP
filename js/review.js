'use strict'
let likes = document.querySelectorAll('.likes input[type=button]');
likes.forEach((like) => like.addEventListener('click', incrementLikes))

let dislikes = document.querySelectorAll('.dislikes input[type=button]');
dislikes.forEach((dislike) => dislike.addEventListener('click', incrementDislikes))


let comments = document.querySelectorAll('.comments#add_comment input[type=button]');
comments.forEach((comment) => comment.addEventListener('click', showComments));

function incrementLikes(event)
{
    let reviewID = event.target.parentElement.parentElement.parentElement.getAttribute('data-id')
    let userID = event.target.parentElement.parentElement.parentElement.getAttribute('user-id')
    console.log(userID)
    let request = new XMLHttpRequest()

    request.open("post", "../actions/action_api_likes.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      let item = JSON.parse(this.responseText)
      event.target.parentElement.getElementsByTagName('h4')[0].textContent=item['likes']
      event.target.parentElement.parentElement.querySelector('.dislikes').getElementsByTagName('h4')[0].textContent=item['dislikes']
    })  

    request.send(encodeForAjax({reviewID,userID}))
}

function incrementDislikes(event)
{
    let reviewID = event.target.parentElement.parentElement.parentElement.getAttribute('data-id')
    let userID = event.target.parentElement.parentElement.parentElement.getAttribute('user-id')
    let request = new XMLHttpRequest()
    request.open("post", "../actions/action_api_dislikes.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      let item = JSON.parse(this.responseText)
      event.target.parentElement.getElementsByTagName('h4')[0].textContent=item['dislikes']
      event.target.parentElement.parentElement.querySelector('.likes').getElementsByTagName('h4')[0].textContent=item['likes']
      
    })  

    request.send(encodeForAjax({reviewID,userID}))
}

function addReview(){
  let description = document.getElementById("addReviewForm").elements.namedItem('description').value
  let movie = document.getElementById("addReviewForm").elements.namedItem('movie').value
  let title = document.getElementById("addReviewForm").elements.namedItem('title').value

  let request = new XMLHttpRequest()
  request.open("post", "../actions/action_api_insert_review.php", true)
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
  request.addEventListener("load", function () {
  let item = JSON.parse(this.responseText)
  location.reload();
  })
  request.send(encodeForAjax({title,movie,description}))
 
 
}

function showComments(event)
{
  if(event.target.parentElement.querySelector('.allComments').style.display === "none")
  event.target.parentElement.querySelector('.allComments').style.display ="block"
  else 
  event.target.parentElement.querySelector('.allComments').style.display="none"
     
}

// Helper function
function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&')
}
 