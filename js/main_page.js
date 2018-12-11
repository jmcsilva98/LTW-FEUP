
let orderElements = document.getElementsByClassName('orderBy')[0].addEventListener("change",orderMainPage);

function orderMainPage(event){
  
  let orderBy= event.target.value;

  //orderBy=sessionStorage.getItem("SelItem");

  let request = new XMLHttpRequest()

    request.open("post", "../actions/action_update_main_page.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      //location.reload();
      let item = JSON.parse(this.responseText)
     
      var article = document.querySelector('.feed_reviews');
      console.log(article);
      
      while(article.firstChild){
        article.removeChild(article.firstChild);
    }
    for(let i =0; i< item.length;i++){
      let child =document.createElement("article");
      child.setAttribute("data-id",item[i].ID);
      child.setAttribute("user-id",item[i].UserID);
     
      
      
      
      child.innerHTML='<div class="review_info">\n'+
                       '<h2>'+item[i].Title+'</h2>\n'+
                       '<h3> Movie: <a href="movie.php?movie_id='+item[i].MovieID+'">'+item[i].MovieName+'</a> </h3>\n'+
                       '<h4> Created by '+
                       '<a href="profile.php?username='+item[i].UserName+'">'+item[i].UserName+'</a>'+' on ' +item[i].ReviewDate+'</h4>'+
                       '</div>'+
                       '<div class="review_content">'+
                      '<h5>'+item[i].Description+'</h5>'+
                      ' </div>'+
                      '<div class="review_options">'+
                      '<ul class="review_nav">'+
                      '<li>' + 
                      '<div class="likes">'+
                     '<span id="review_likes" class="fas fa-heart">'+
                      item[i].Heart+'</span>'+
                  '</div>'+
                  '</li>'+
                  '<li>'+  
                '<div class="dislikes">'+
                  
                  '<span id="review_dislikes" class="fas fa-heartbeat">'+
                    item[i].Dislike+'</span>'+ 
                '</div>'+ 
                '</li>'+'<li>'+
                '<input type="button"  name="addComment" value="Add Comment">'
                '<div id="add_comment" class="popup">'+
                '<div class="popup-content">'+
                '<form method="post" id="addCommentForm">'+
                    '<textarea id="description" placeholder="Share your opinion..." required></textarea><br>'+
                    '<input onclick="closeBox(\'Add Comment\')" type="button" value="Cancel">'+
                    '<input type="submit" value="Add Comment">'+
                 '</form>'+
                '</div>'+
            '</div>'+
                +'</li>'+
                '</ul>'+
                '</div>'+
                '<div class="comments">';
                var x = document.createElement("INPUT");
                x.setAttribute("type", "button");
                x.setAttribute("value", item[i].NumberComments+"Number Comments");
                child.appendChild(x);

                child.innerHTML+='<div class="allComments">'+
                '</div>'+ '</div>'+'</article>';
                console.log(child);
              
                  for(let j = 0; j<item[i].Comments.length;j++){
                  let div = document.createElement("div");
                  div.setAttribute("data-id",item[i].Comments[j].ID);
                  div.setAttribute("user-id",item[i].Comments[j].UserID);
                  div.innerHTML= '<p>'+item[i].Comments[j].Description+'</p>'+
                                  '<ul class="review_nav" id="comment_nav">'+
                                  '<li>'+
                                  '<h4> Commented by'+
                                  '<a href="profile.php?username='+item[i].Comments[j].Username+'">'+item[i].Comments[j].Username+'</a>'+
                                  ' on '+item[i].Comments[j].CommentDate+'</h4>'+
                                  '</li>'+
                                   '<li>'+
                              '<span id="likes" class="fas fa-heart">'+item[i].Comments[j].Likes+'</span>'+ '<br>'+
                            '</li>'+
                             '<li>'+
                              '<span id="dislikes" class="fas fa-heartbeat">'+item[i].Comments[j].Dislikes+'</span>'+
                         ' </li>'+
                   ' </div>'+
                   '</ul>';
                   child.appendChild(div);      
                }
                child.innerHTML+='</div>'+ '</div>'+'</article>';

      
      article.appendChild(child);      
    }
        })
    

    request.send(encodeForAjax({orderBy}))
    event.preventDefault();
}
/*function doReload(orderBy){
  console.log(orderBy);
  let request = new XMLHttpRequest()

    request.open("post", "../pages/main_page.php", true)
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.addEventListener("load", function () {
      let item = JSON.parse(this.response.item)
      console.log(item);
      //draw_reviews
      //location.reload();
    })

  request.send(encodeForAjax({orderBy}))
  document.location = 'main_page.php?orderBy='+orderBy;
  event.preventDefault();
}*/


