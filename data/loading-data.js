
window.addEventListener("DOMContentLoaded", () => {
  console.log('Complete');
  var imageData = [];
  var posts = [];
  var images = [];
  var ourRequest = new XMLHttpRequest();
  var ourImageRequest = new XMLHttpRequest();

  ourRequest.open("GET", "https://damacena.blog.br/wp-json/wp/v2/posts");
  ourImageRequest.open("GET","https://damacena.blog.br/wp-json/wp/v2/media");

  ourImageRequest.onload = function () {
    if (ourImageRequest.status >= 200 && ourImageRequest.status < 400) {
      imageData = JSON.parse(ourImageRequest.responseText);
      localStorage.setItem("images", JSON.stringify(imageData));
    } else {console.log("We connected to the server, but it returned an error during request image resource." );}
  };

  ourRequest.onload = function () {
    if (ourRequest.status >= 200 && ourRequest.status < 400) {
      var data = JSON.parse(ourRequest.responseText);
      localStorage.setItem("posts", JSON.stringify(data));       
    } else {console.log("We connected to the server, but it returned an error."); }
  };

  ourRequest.onerror = function () {console.log("Connection error!");};
  ourImageRequest.onerror = function () {console.log("Connection error!");};
  

  if (!localStorage.hasOwnProperty("posts") && !localStorage.hasOwnProperty('images')) {
    ourRequest.send();
    ourImageRequest.send();
  } else {
    posts = JSON.parse(localStorage.getItem("posts"));
    images = JSON.parse(localStorage.getItem("images"));
    createHTML(posts, images);
  }
});


function createHTML(postsData, imagesData) {
  var postInHtml = "";

  for (i = 0; i < postsData.length; i++) {
    for (j = i; j < imagesData.length; j++) {
      if (postsData[i].id === imagesData[j].post) {
        if (i === 0) {
          postInHtml += `<div class="testimonial-wrap"> <div class="testimonial-item">
        <img class="testimonial-img"  src="`+ imagesData[j].source_url + `" alt="Card image cap">
        <h3><a href="`+ postsData[i].link + `">` + postsData[i].title.rendered.toUpperCase() + `</a></h3>
        <p>  <i class="bx bxs-quote-alt-left quote-icon-left"></i>`+ postsData[i].excerpt.rendered + `
        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
        </div> </div>`;
        } else {
          postInHtml += `<div class="testimonial-wrap"><div class="testimonial-item">
        <img class="testimonial-img"  src="`+ imagesData[j].source_url + `" alt="Card image cap">
        <h3><a href="`+ postsData[i].link + `">` + postsData[i].title.rendered.toUpperCase() + `</a></h3>
        <p>  <i class="bx bxs-quote-alt-left quote-icon-left"></i>`+ postsData[i].excerpt.rendered + `
        <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
        </div></div>`;
        }
      }
    }

  }
  document.getElementById("loader").style.display = "none";
  document.getElementById("postsBlog").innerHTML = postInHtml;
}