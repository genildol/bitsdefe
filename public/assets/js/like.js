function likePage(pageId) {
  let formData = new FormData();
  formData.append("page_id", pageId);

  fetch("like.php", {
    method: "POST",
    body: formData
  })
    .then(res => res.text())
    .then(data => {
      document.getElementById("like-count").innerText = data;
    });
}
