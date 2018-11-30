let likes = document.querySelector('.likes input[type=button]');
likes.addEventListener("click",incrementLikes);


function incrementLikes()
{
    let reviewName = document.querySelector('.review_info').getElementsByTagName('h2')[0].innerText;

    let request = new XMLHttpRequest()
    request.open("post", "../actions/action_api_likes.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.send(encodeForAjax({reviewName: reviewName}))
}

// Helper function
function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&')
}
 