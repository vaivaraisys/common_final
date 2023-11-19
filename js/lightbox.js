var modal = document.getElementById("myModal");
var img = document.getElementById("myImage");
var modalImg = document.getElementById("modalImage");
var closeBtn = document.getElementById("closeBtn");

img.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
}

closeBtn.onclick = function () {
    modal.style.display = "none";
}

modal.onclick = function () {
    modal.style.display = "none";
}
  