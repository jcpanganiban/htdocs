const addItemBtnEl = document.querySelector(".add-menu-btn");

const addInventoryFormEl = document.querySelector("#addMenuForm");

addItemBtnEl.addEventListener("click", firstclickAddMenu);
function firstclickAddMenu(e) {
  addInventoryFormEl.style.display = "flex";
  e.stopImmediatePropagation();
  this.removeEventListener("click", firstclickAddMenu);
  addItemBtnEl.onclick = secondClickAddMenu;
}
function secondClickAddMenu(e) {
  addInventoryFormEl.style.display = "none";
  e.stopImmediatePropagation();
  this.removeEventListener("click", secondClickAddMenu);
  addItemBtnEl.onclick = firstclickAddMenu;
}
