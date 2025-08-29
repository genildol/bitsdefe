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

function initCollapse() {
  document.addEventListener('DOMContentLoaded', () => {
    // Instancia os collapses sem auto-toggle
    const instances = {};
    document.querySelectorAll('.collapse').forEach(el => {
      instances[el.id] = new bootstrap.Collapse(el, { toggle: false });
    });

    // Clique do botão
    document.querySelectorAll('.collapse-toggle').forEach(btn => {
      btn.addEventListener('click', () => {
        const selector = btn.getAttribute('data-target');
        const target = document.querySelector(selector);
        const isOpen = target.classList.contains('show');

        // Fecha todos
        Object.values(instances).forEach(i => i.hide());

        // Se o alvo não estava aberto, abre (se estava, fica fechado)
        if (!isOpen) {
          instances[target.id].show();
        }
      });
    });
  });
}