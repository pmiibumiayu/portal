const myModal = {
  primary: new bootstrap.Modal("#modals"),
  utils: {
    title: $(".modal .modal-title"),
    body: $(".modal-body"),
    submit: $(".modal .btn-submit"),
  },
};
tab = {
  mainmenu: $("#menus-main .table-responsive"),
  submenu: $("#menus-sub .table-responsive"),
};

let opt = {
  url: base_url + `/api/menu/`,
};
const menus = new Menu(opt);
const modals = new Modal(opt);
menus.init();

const select = (el, all = false) => {
  el = el.trim();
  if (all) {
    return [...document.querySelectorAll(el)];
  } else {
    return document.querySelector(el);
  }
};

$(document).ready(async function () {
  /**
   * Preloader
   */
  let preloader = select("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }
  await modals.main();
  refreshmain();
  refreshsub();
  $("#menus-main .reload-menu").click(async function (e) {
    e.preventDefault();
    await refreshmain();
  });
  $("#menus-sub .reload-menu").click(async function (e) {
    e.preventDefault();
    await refreshsub();
  });
  $("#menus-main .btn-add").click(async function (e) {
    e.preventDefault();
    myModal.utils.title.text("Tambahkan Menu");
    myModal.utils.submit.text("Tambahkan");
    myModal.utils.body.html(modals.forms.add.main);
    myModal.primary.show();
  });
  $(".btn-submit").click(async function (e) {
    $("#menuform").submit();
  });
});

const refreshmain = async function () {
  tab.mainmenu.html(menus.createLoader());
  new Promise((resolve, reject) => {
    resolve(menus.load());
  }).then((menu) => {
    if (menu.length > 0) {
      tab.mainmenu.html(menus.createHeaderMain());
      let listmain = "";
      let tablemain = $("#menus-main tbody");
      menu.forEach((menu) => (listmain += menus.createMenu(menu)));
      tablemain.html(listmain);
    } else {
      tab.mainmenu.html(menus.createNothing());
    }
  });
};

const refreshsub = async function () {
  tab.submenu.html(menus.createLoader());
  new Promise((resolve, reject) => {
    resolve(menus.load());
  }).then((menu) => {
    tab.submenu.html(menus.createHeaderSub());
    let listsub = "";
    let tablesub = $("#menus-sub tbody");
    menu.forEach((m) => {
      if (m.type == "multiple") {
        m.sub.forEach((sub) => (listsub += menus.createMenuSub(m.label, sub)));
      }
    });
    if (listsub.length > 0) {
      tablesub.html(listsub);
    } else {
      tab.submenu.html(menus.createNothing());
    }
  });
};
