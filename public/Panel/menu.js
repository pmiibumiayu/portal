class Menu {
  mainmenu = null;
  submenu = [];
  listmain = null;
  listsub = null;

  constructor(menu) {
    this.mainmenu = menu;
    this.mainmenu.forEach((p) => {
      if (p.type == "multiple") {
        this.submenu.push(p);
      }
    });
  }

  load() {
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

  createMenu(mainmenu = this.mainmenu) {
    let num = 1;
    this.listmain = "";
    mainmenu.forEach((p) => {
      this.listmain += "<tr>";
      this.listmain += `<td class="cell">${num}</td><td class="cell text-center"><i class="bi bi-${p.icon}"></i></td><td class="cell">${p.label}</td><td class="cell">${p.route}</td><td class="cell"><span class="badge bg-danger">super</span> <span class="badge bg-danger">pengurus</span> <span class="badge bg-danger">kader</span></td><td class="cell"><span class="badge bg-success">${p.type}</span></td><td class="cell"><a class="btn-sm app-btn-secondary" href="#!">Edit</a> <a class="btn-sm app-btn-secondary" href="#!">Hapus</a></td>`;
      this.listmain += "</tr>";
      num++;
    });
    return this.listmain;
  }

  createMenuSub(submenu = this.submenu) {
    let num = 1;
    this.listsub = "";
    submenu.forEach((main) => {
      main.sub.forEach((sub) => {
        this.listsub += "<tr>";
        this.listsub += `<td class="cell">${num}</td><td class="cell">${sub.label}</td><td class="cell"><span class="truncate">${sub.description}</span></td><td class="cell">${sub.route}</td><td class="cell"><span class="badge bg-danger">${main.label}</span></td><td class="cell"><a class="btn-sm app-btn-secondary" href="#!">Edit</a> <a class="btn-sm app-btn-secondary" href="#!">Hapus</a></td>`;
        this.listsub += "</tr>";
        num++;
      });
    });
    return this.listsub;
  }
}
