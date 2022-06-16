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

const select = (el, all = false) => {
  el = el.trim();
  if (all) {
    return [...document.querySelectorAll(el)];
  } else {
    return document.querySelector(el);
  }
};
const toastBs = document.getElementById("toast-bs");
toastr.options = {
  closeButton: true,
  debug: false,
  newestOnTop: true,
  progressBar: true,
  positionClass: "toast-top-right",
  preventDuplicates: false,
  onclick: null,
  showDuration: "300",
  hideDuration: "1000",
  timeOut: "5000",
  extendedTimeOut: "1000",
  showEasing: "swing",
  hideEasing: "linear",
  showMethod: "fadeIn",
  hideMethod: "fadeOut",
};
$.LoadingOverlaySetup({
  image: "",
  fontawesome: "bi bi-clock-fill fa-spin",
  fontawesomeColor: "#202020",
  background: "rgba(255, 255, 255, 0.5)",
});

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
    myModal.utils.body.html(await modals.forms.add.main);
    VirtualSelect.init({ ele: "select" });
    myModal.primary.show();
  });
  $(".btn-submit").click(async function (e) {
    $(".modal .btn-submit").LoadingOverlay("show");
    await addmain();
    $(".modal .btn-submit").LoadingOverlay("hide");
  });
});

const refreshmain = async function () {
  tab.mainmenu.html(menus.createLoader());
  await menus.init();
  if (menus.mainmenu.length > 0) {
    tab.mainmenu.html(menus.createHeaderMain());
    let listmain = "";
    let tablemain = $("#menus-main tbody");
    menus.mainmenu.forEach((menu) => (listmain += menus.createMenu(menu)));
    tablemain.html(listmain);
  } else {
    tab.mainmenu.html(menus.createNothing());
  }
  return "Refresh Main Menu";
};

const refreshsub = async function () {
  tab.submenu.html(menus.createLoader());
  await menus.init();
  if (menus.submenu.length > 0) {
    tab.submenu.html(menus.createHeaderSub());
    let listsub = "";
    let tablesub = $("#menus-sub tbody");
    menus.mainmenu.forEach((m) => {
      if (m.type == "multiple") {
        m.sub.forEach((sub) => (listsub += menus.createMenuSub(m.label, sub)));
      }
    });
    tablesub.html(listsub);
  } else {
    tab.submenu.html(menus.createNothing());
  }
  return "Refresh Sub Menu";
};

const addmain = async function () {
  $(".form-control").removeClass("is-invalid").removeClass("is-valid");
  let data = await menus.addmain(
    menus.postData(document.getElementById("menuform"))
  );
  console.log(data);
  if (data.status == 400) {
    Object.keys(data.messages).forEach(function (key) {
      // data.messages[key]
      toastr.warning(`${data.messages[key]}`);
      $(`form [name="${key}"]`).addClass("is-invalid");
    });
    $("form .form-control:not(.is-invalid)").addClass("is-valid");
  } else {
    myModal.primary.hide();
    refreshmain();
    toastr.success("data berhasil disimpan");
  }
};
