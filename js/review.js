'use strict'
let likes = document.querySelectorAll('.likes input[type=button]');
likes.forEach((like) => like.addEventListener('click', incrementLikes))

let dislikes = document.querySelectorAll('.dislikes input[type=button]');
dislikes.forEach((dislike) => dislike.addEventListener('click', incrementDislikes))


function incrementLikes(event)
{
    let reviewID = event.target.parentElement.parentElement.parentElement.getAttribute('data-id')
    let request = new XMLHttpRequest()
    request.open("post", "../actions/action_api_likes.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      let item = JSON.parse(this.responseText)
      document.querySelector('.likes').getElementsByTagName('h4')[0].textContent=item['likes']
      document.querySelector('.dislikes').getElementsByTagName('h4')[0].textContent=item['dislikes']
    })  

    request.send(encodeForAjax({reviewID}))
}

function incrementDislikes(event)
{
    let reviewID = event.target.parentElement.parentElement.parentElement.getAttribute('data-id')
    let request = new XMLHttpRequest()
    request.open("post", "../actions/action_api_dislikes.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      let item = JSON.parse(this.responseText)
      document.querySelector('.likes').getElementsByTagName('h4')[0].textContent=item['likes']
      document.querySelector('.dislikes').getElementsByTagName('h4')[0].textContent=item['dislikes']
    })  

    request.send(encodeForAjax({reviewID}))
}

// Helper function
function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&')
}
 