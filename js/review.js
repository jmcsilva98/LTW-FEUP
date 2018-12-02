let likes = document.querySelectorAll('.likes input[type=button]');
likes.forEach((like) => like.addEventListener('click', incrementLikes))

let dislikes = document.querySelectorAll('.dislikes input[type=button]');
dislikes.forEach((dislike) => dislike.addEventListener('click', incrementDislikes))


function incrementLikes(event)
{
    let reviewID = document.querySelector('.likes input[type="hidden"]').value
    
    let reviewLikes= document.querySelector('.likes').getElementsByTagName('h4')[0].innerText

    let request = new XMLHttpRequest()
    request.open("post", "../actions/action_api_likes.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.send(encodeForAjax({reviewID,reviewLikes}))
    console.log(request)
    event.preventDefault();
}

function incrementDislikes(event)
{
    let reviewID = document.querySelector('.dislikes input[type="hidden"]').value
    let reviewDislikes= document.querySelector('.dislikes').getElementsByTagName('h4')[0].innerText

    let request = new XMLHttpRequest()
    request.open("post", "../actions/action_api_dislikes.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.send(encodeForAjax({reviewID,reviewDislikes}))
    console.log(request)
    event.preventDefault();
}

// Helper function
function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&')
}
 