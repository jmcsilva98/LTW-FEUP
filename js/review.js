let likes = document.querySelectorAll('.likes input[type=button]');
likes.forEach((like) => like.addEventListener('click', incrementLikes))


function incrementLikes(event)
{
    let reviewName = document.querySelector('.review_info').getElementsByTagName('h2')[0].innerText
    let reviewLikes= document.querySelector('.likes').getElementsByTagName('h4')[0].innerText

    let request = new XMLHttpRequest()
    request.open("post", "../actions/action_api_likes.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.send(encodeForAjax({reviewName,reviewLikes}))
    console.log(request)
    event.preventDefault();
}

// Helper function
function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&')
}
 