
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
      let feed= document.querySelector('.feed_reviews');
      console.log(feed);
      
      while(feed.firstChild){
        feed.removeChild(feed.firstChild);
    }
    for(let i =0; i< item.length;i++){
      let article =document.createElement("article");
      article.setAttribute("data-id",item[i].ID);
      article.setAttribute("user-id",item[i].UserID);
      let review_info = document.createElement("div");
      review_info.setAttribute("class","review_info");
      let title= document.createElement("h2");
      title.innerText=item[i].Title;
      review_info.appendChild(title);
      let movie = document.createElement("h3");
      movie.innerHTML = 'Movie:'+'<a href="movie.php?movie_id='+item[i].MovieID+'">'+item[i].MovieName+'</a>';
      review_info.appendChild(movie);
      let createdBy = document.createElement("h4");
      createdBy.innerHTML= 'Created by '+  '<a href="profile.php?username='+item[i].UserName+'">'+item[i].UserName+"</a>"+
                           ' on '+ item[i].ReviewDate;
      review_info.appendChild(createdBy);
      article.appendChild(review_info);  
     
      let review_content =document.createElement("div");
      review_content.setAttribute("class","review_content"); 
      let description= document.createElement("h5");
      description.innerText= item[i].Description;
      review_content.appendChild(description);
      article.appendChild(review_content);
      
      let review_options = document.createElement("div");
      review_options.setAttribute("class","review_options");
      let review_nav=document.createElement("ul");
      review_nav.setAttribute("class","review_nav");
      let firstLi = document.createElement("li");
      let likes=document.createElement("div");
      likes.setAttribute("class","likes");
      let review_likes= document.createElement("span");
      review_likes.setAttribute("id","review_likes");
      review_likes.setAttribute("class","fas fa-heart");
      review_likes.innerText = item[i].Heart;
      likes.appendChild(review_likes);
      firstLi.appendChild(likes);
      review_nav.appendChild(firstLi);
      let secondLi = document.createElement("li");
      let dislikes=document.createElement("div");
      dislikes.setAttribute("class","dislikes");
      let review_dislikes= document.createElement("span");
      review_dislikes.setAttribute("id","review_dislikes");
      review_dislikes.setAttribute("class","fas fa-heartbeat");
      review_dislikes.innerText = item[i].Dislike;
      dislikes.appendChild(review_dislikes);
      secondLi.appendChild(dislikes);
      review_nav.appendChild(secondLi);

      let thirdLi =document.createElement("li");
      let addComment=document.createElement("input");
      addComment.setAttribute("type","button");
      addComment.setAttribute("name","addComment");
      addComment.setAttribute("value","Add Comment");
     
      thirdLi.appendChild(addComment);
      let add_comment= document.createElement("div");
      add_comment.setAttribute("id","add_comment");
      add_comment.setAttribute("class","popup");
      let popup = document.createElement("div");
      popup.setAttribute("class","popup-content");
      let form = document.createElement("form");
      form.setAttribute("method","post");
      form.setAttribute("id","addCommentForm");
      let textarea=document.createElement("textarea");
      textarea.setAttribute("id","description");
      textarea.setAttribute("placeholder","Share you opinion...");
      form.appendChild(textarea);
      let input = document.createElement("input");
      input.setAttribute("onclick","closeBox('Add Comment')");
      input.setAttribute("type","button");
      input.setAttribute("value","Cancel");
      form.appendChild(input);
      let submit=document.createElement("input");
      submit.setAttribute("type","submit");
      submit.setAttribute("value","Add Comment");
      submit.setAttribute("id","submit_content");
      form.appendChild(submit);
      popup.appendChild(form);
      add_comment.appendChild(popup);
      thirdLi.appendChild(add_comment);
      review_nav.appendChild(thirdLi);     
      review_options.appendChild(review_nav); 
      article.appendChild(review_options);

      let comments = document.createElement("div");
      comments.setAttribute("class","comments");
      let inputComments= document.createElement("input");
      inputComments.setAttribute("type","button");
      inputComments.setAttribute("value",item[i].NumberComments+" Comments");
      inputComments.innerHTML+='<br>';
      comments.appendChild(inputComments);
      article.appendChild(comments);
      let allComments= document.createElement("div");

      allComments.setAttribute("class","allComments");
      for(let j =0;j<item[i].Comments.length;j++){
        let comment = document.createElement("div");
        comment.setAttribute("class","comment");
        comment.setAttribute("data-id",item[i].Comments[j].ID);
        comment.setAttribute("user-id",item[i].Comments[j].UserID);
        let description = document.createElement("p");
        description.innerText= item[i].Comments[j].Description;
        comment.appendChild(description);
        let comment_nav = document.createElement("ul");
        comment_nav.setAttribute("class","review_nav");
        comment_nav.setAttribute("id","comment_nav");

        let commentLi = document.createElement("li");
        let commentedBy = document.createElement("h4");
      commentedBy.innerHTML= 'Commented by '+  '<a href="profile.php?username='+item[i].Comments[j].Username+'">'+item[i].Comments[j].Username+"</a>"+
                           ' on '+ item[i].Comments[j].CommentDate;
      commentLi.appendChild(commentedBy);
      comment_nav.appendChild(commentLi);
      
      let likesLi = document.createElement("li");
      let likesSpan= document.createElement("span");
      likesSpan.setAttribute("id","likes");
      likesSpan.setAttribute("class","fas fa-heart");
      likesSpan.innerText =item[i].Comments[j].Likes;
      likesLi.appendChild(likesSpan);
      comment_nav.appendChild(likesSpan);

      let dislikesLi = document.createElement("li");
      let dislikesSpan= document.createElement("span");
      dislikesSpan.setAttribute("id","dislikes");
      dislikesSpan.setAttribute("class","fas fa-heartbeat");
      dislikesSpan.innerText =item[i].Comments[j].Dislikes;
      dislikesLi.appendChild(dislikesSpan);
      comment_nav.appendChild(dislikesSpan);
      comment.appendChild(comment_nav);
      allComments.appendChild(comment);
      }
  
     article.appendChild(allComments);
      console.log(article);
      feed.appendChild(article);      
    }
        })
    

    request.send(encodeForAjax({orderBy}))
    event.preventDefault();
}


