function likePage(pageId) {
  let formData = new FormData();
  formData.append("page_id", pageId);

  fetch("like.php", {
    method: "POST",
    body: formData
  })
    .then(res => res.text())
    .then(data => {
      document.querySelector("#like-count button").innerText = data;
    });
}

window.onload = function () {
  fetch("get_likes.php?page_id=home")
    .then(res => res.text())
    .then(data => {
      document.querySelector("#like-count button").innerText = data;
    });
}