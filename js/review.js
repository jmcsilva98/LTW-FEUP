'use strict'
let likes = document.querySelectorAll('.likes ');
likes.forEach((like) => like.addEventListener('click', incrementLikes))

let dislikes = document.querySelectorAll('.dislikes');
dislikes.forEach((dislike) => dislike.addEventListener('click', incrementDislikes))


let comments = document.querySelectorAll('.comments input[type=button]');
console.log(comments)
comments.forEach((comment) => comment.addEventListener('click', showComments));

function incrementLikes(event)
{
    let reviewID = event.target.parentElement.parentElement.parentElement.parentElement.parentElement.getAttribute('data-id')
    let userID =event.target.parentElement.parentElement.parentElement.parentElement.parentElement.getAttribute('user-id')

    
    let request = new XMLHttpRequest()

    request.open("post", "../actions/action_api_likes.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      let item = JSON.parse(this.responseText)
      event.target.textContent=item['likes']
      if (document.querySelector('.profile_container') != null){
        document.querySelector('.profile_container').querySelector('.profile_points').getElementsByTagName('h3')[0].getElementsByTagName('span')[0].innerText=item['points'];
      }
      event.target.parentElement.parentElement.parentElement.querySelector('#review_dislikes').textContent= item['dislikes']    })  

    request.send(encodeForAjax({reviewID,userID}))
}

function incrementDislikes(event)
{
    let reviewID = event.target.parentElement.parentElement.parentElement.parentElement.parentElement.getAttribute('data-id')
    let userID = event.target.parentElement.parentElement.parentElement.parentElement.parentElement.getAttribute('user-id')
    let request = new XMLHttpRequest()
    request.open("post", "../actions/action_api_dislikes.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      let item = JSON.parse(this.responseText)
      event.target.textContent=item['dislikes']
      if (document.querySelector('.profile_container') != null){
        document.querySelector('.profile_container').querySelector('.profile_points').getElementsByTagName('h3')[0].getElementsByTagName('span')[0].innerText=item['points'];
      }
      event.target.parentElement.parentElement.parentElement.querySelector('#review_likes').textContent= item['likes']    })  
      


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
  console.log(event.target.parentElement)
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