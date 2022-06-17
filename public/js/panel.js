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
let idSender = 0;
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
    $(this).LoadingOverlay("show");
    await refreshmain();
    $(this).LoadingOverlay("hide");
  });
  $("#menus-main .btn-add").click(async function (e) {
    e.preventDefault();
    myModal.utils.title.text("Tambahkan Menu");
    myModal.utils.submit.attr("id", "submit-main-add").text("Tambahkan");
    myModal.utils.body.html(await modals.forms.add.main);
    await selectTransformer("form select");
    myModal.primary.show();
  });
  $(".modal").on("click", "#submit-main-add", async function () {
    $(".modal .btn-submit").LoadingOverlay("show");
    await addmain();
    $(".modal .btn-submit").LoadingOverlay("hide");
  });
  $("#menus-main").on("click", ".btn-edit", async function () {
    idSender = $(this).data("id");
    let menuParser = menus.mainmenu[idSender];
    myModal.utils.title.text("Edit Menu");
    myModal.utils.submit.attr("id", "submit-main-edit").text("Simpan");
    myModal.utils.body.html(await modals.forms.add.main);
    Object.keys(menuParser).forEach(function (key) {
      $(`form [name=${key}]`).val(menuParser[key]);
    });
    await selectTransformer("form select");
    myModal.primary.show();
  });
  $(".modal").on("click", "#submit-main-edit", async function () {
    $(".modal .btn-submit").LoadingOverlay("show");
    await editmain();
    $(".modal .btn-submit").LoadingOverlay("hide");
  });
  $("#menus-main").on("click", ".btn-delete", async function () {
    idSender = $(this).data("id");
    myModal.utils.title.text("Edit Menu");
    myModal.utils.submit.attr("id", "submit-main-delete").text("Konfirmasi");
    myModal.utils.body.html(
      `<p>Apakah anda yakin ingin menghapus item ini ?</p>`
    );
    myModal.primary.show();
  });
  $(".modal").on("click", "#submit-main-delete", async function () {
    $(".modal .btn-submit").LoadingOverlay("show");
    await deletemain();
    $(".modal .btn-submit").LoadingOverlay("hide");
  });
  $("#menus-sub .reload-menu").click(async function (e) {
    e.preventDefault();
    $(this).LoadingOverlay("show");
    await refreshsub();
    $(this).LoadingOverlay("hide");
  });
});

const refreshmain = async function () {
  tab.mainmenu.html(menus.createLoader());
  await menus.init();
  if (menus.mainmenu.length > 0) {
    tab.mainmenu.html(menus.createHeaderMain());
    let listmain = "";
    let tablemain = $("#menus-main tbody");
    menus.mainmenu.forEach(
      (menu, i) => (listmain += menus.createMenu(i, menu))
    );
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

const editmain = async function () {
  $(".form-control").removeClass("is-invalid").removeClass("is-valid");
  validate = menus.editValidator(idSender, $("#menuform").serializeArray());
  if (validate) {
    let data = await menus.editmain(
      idSender,
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
  } else {
    toastr.warning(`Tidak ada data yang berubah`);
  }
};

const deletemain = async function () {
  let data = await menus.deletemain(idSender);
  console.log(data);
  if (data.status == 400) {
    Object.keys(data.messages).forEach(function (key) {
      toastr.warning(`${data.messages[key]}`);
    });
  } else {
    myModal.primary.hide();
    refreshmain();
    toastr.success("data berhasil dihapus");
  }
};

const selectTransformer = async function (selector) {
  VirtualSelect.init({
    ele: `${selector} `,
    maxWidth: "100%",
  });
};
