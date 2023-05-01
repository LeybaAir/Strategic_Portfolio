var video = document.getElementById("my-video");

video.addEventListener("ended", function() {
    // Redirect to the next page
    window.location.href = "./html/index.html";
  });
