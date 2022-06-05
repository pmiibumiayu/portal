const menu_url = base_url + `/api/menu/`;
const tab = {
  mainmenu: $("#menus-main .table-responsive"),
  submenu: $("#menus-sub .table-responsive"),
};
const utils = {
  loader: `<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></div>`,
  nothing: `<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></div>`,
};
const tables = {
  header: {
    main: `<table class="table app-table-hover mb-0 text-left"><thead><tr><th class="cell">Order</th><th class="cell">Icon</th><th class="cell">Label</th><th class="cell">Route</th><th class="cell">Role</th><th class="cell">Type</th><th class="cell"></th></tr></thead><tbody></tbody></table>`,
    sub: `<table class="table app-table-hover mb-0 text-left"><thead><tr><th class="cell">Order</th><th class="cell">Label</th><th class="cell">Deskripsi</th><th class="cell">Route</th><th class="cell">Sub Of</th><th class="cell"></th></tr></thead><tbody></tbody></table>`,
  },
};
const myModal = {
  primary: new bootstrap.Modal("#modals"),
};
const modal = {
  title: $("#modalsLabel"),
  body: $(".modal-body"),
  submit: $("#modalSubmit"),
};
const forms = {
  add: {
    main: "",
    sub: "",
  },
};

let tablemain, tablesub, menus;

$(document).ready(function () {
  reloadMenu();

  $("#menus-main .btn-add").click(function (e) {
    e.preventDefault();
    modal.title.text("Tambahkan Menu");
    modal.submit.text("Tambahkan");
    myModal.primary.show();
  });

  $(".reload-menu").click(function (e) {
    e.preventDefault();
    reloadMenu();
  });
});

function reloadMenu() {
  tab.mainmenu.empty();
  tab.submenu.empty();
  $.ajax({
    type: "get",
    url: menu_url + "getencmenu",
    beforeSend: function () {
      $(".reload-menu").addClass("disabled");
      tab.mainmenu.append(utils.loader);
      tab.submenu.append(utils.loader);
    },
    success: function (data) {
      menus = new Menu(data);
      if (data) {
        createMenu();
        createMenuSub();
      } else {
        tab.mainmenu.append(nothing);
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: textStatus,
        showConfirmButton: true,
      });
      console.log(errorThrown);
    },
    complete: function () {
      $("#menus-main .d-flex").remove();
      $("#menus-sub .d-flex").remove();
      $(".reload-menu").removeClass("disabled");
    },
  });
}

function createMenu(menu) {
  tab.mainmenu.append(tables.header.main);
  tablemain = $("#menus-main tbody");
  tablemain.append(menus.createMenu());
}

function createMenuSub(menu) {
  tab.submenu.append(tables.header.sub);
  tablesub = $("#menus-sub tbody");
  tablesub.append(menus.createMenuSub());
}
