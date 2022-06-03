const menu_url = base_url + `/api/menu/`;
const tabmainmenu = $("#menus-main .table-responsive");
const tabsubmenu = $("#menus-sub .table-responsive");
const loader = `<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></div>`;
const nothing = `<div class="alert alert-primary" role="alert">Anda belum mempunyai data !</div>`;
const tablemainheader = `<table class="table app-table-hover mb-0 text-left"><thead><tr><th class="cell">Order</th><th class="cell">Icon</th><th class="cell">Label</th><th class="cell">Route</th><th class="cell">Role</th><th class="cell">Type</th><th class="cell"></th></tr></thead><tbody></tbody></table>`;

let datamenu;
let tablemain;
let tablesub;

$(document).ready(function () {
  tabmainmenu.empty();
  // tabsubmenu.empty();
  console.log(tabmainmenu);
  reloadMenu();
});

function reloadMenu() {
  $.ajax({
    type: "get",
    url: menu_url + "getencmenu",
    beforeSend: function () {
      tabmainmenu.append(loader);
    },
    success: function (data) {
      datamenu = data;
      if (data) {
        createMenu(data);
      } else {
        tabmainmenu.append(nothing);
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something Happened!",
        showConfirmButton: true,
      });
      console.log(textStatus);
    },
    complete: function () {
      $("#menus-main .d-flex").remove();
    },
  });
}

function createMenu(menu) {
  tabmainmenu.append(tablemainheader);
  tablemain = $("#menus-main tbody");
  let num = 1;
  $.each(menu, function (i, p) {
    tablemain.append(
      $("<tr></tr>").html(
        `<td class="cell">${num}</td><td class="cell text-center"><i class="bi bi-${p.icon}"></i></td><td class="cell">${p.label}</td><td class="cell">${p.route}</td><td class="cell"><span class="badge bg-danger">super</span> <span class="badge bg-danger">pengurus</span> <span class="badge bg-danger">kader</span></td><td class="cell"><span class="badge bg-success">${p.type}</span></td><td class="cell"><a class="btn-sm app-btn-secondary" href="#!">Edit</a> <a class="btn-sm app-btn-secondary" href="#!">Hapus</a></td>`
      )
    );
    num++;
  });
}
