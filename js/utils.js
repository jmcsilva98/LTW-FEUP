function callFileBtn(){
    document.getElementById("file_upload").click();

}

function searchFunction(){
  var input, filter, ul, li, a, i, txtValue;
  input = document.querySelector('.search_container input[type=text]');
  filter = input.value;
  console.log(filter)
  
  ul = document.getElementById("allMoviesAndReviews");
  li = ul.getElementsByTagName('li');

  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    
    txtValue = a.textContent || a.innerText;
    if (txtValue.match(filter) != null && filter != "") {
      li[i].style.display = "block";
    } else {
      li[i].style.display = "none";
    }
  }
}
