class Menu {
  constructor(opt = { url: "http://portal.pmii/api/menu/" }) {
    this.url = opt.url;
    this.mainmenu = this.load();
  }

  async init() {
    this.submenu = [];
    this.mainmenu = await this.load();
    if (this.mainmenu) {
      this.mainmenu.forEach((main) => {
        if (main.type == "multiple") {
          this.submenu.push(main);
        }
      });
    }
  }

  async load() {
    return fetch(this.url + "getencmenu", {
      method: "get",
      headers: {
        "Content-Type": "application/json",
        "X-Requested-With": "XMLHttpRequest",
      },
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error(response.statusText);
        }
        return response.json();
      })
      .then((menu) => menu);
  }

  createMenu(menu) {
    return `<tr><td class="cell">${menu.order}</td><td class="cell text-center"><i class="bi bi-${menu.icon}"></i></td><td class="cell">${menu.label}</td><td class="cell">${menu.route}</td><td class="cell"><span class="badge bg-danger">super</span> <span class="badge bg-danger">pengurus</span> <span class="badge bg-danger">kader</span></td><td class="cell"><span class="badge bg-success">${menu.type}</span></td><td class="cell"><a class="btn-sm app-btn-secondary" href="#!">Edit</a> <a class="btn-sm app-btn-secondary" href="#!">Hapus</a></td></tr>`;
  }

  createMenuSub(label, submenu) {
    return `<tr><td class="cell">${submenu.order}</td><td class="cell">${submenu.label}</td><td class="cell"><span class="truncate">${submenu.description}</span></td><td class="cell">${submenu.route}</td><td class="cell"><span class="badge bg-danger">${label}</span></td><td class="cell"><a class="btn-sm app-btn-secondary" href="#!">Edit</a> <a class="btn-sm app-btn-secondary" href="#!">Hapus</a></td></tr>`;
  }

  createHeaderMain() {
    return `<table class="table app-table-hover mb-0 text-left"><thead><tr><th class="cell">Order</th><th class="cell">Icon</th><th class="cell">Label</th><th class="cell">Route</th><th class="cell">Role</th><th class="cell">Type</th><th class="cell"></th></tr></thead><tbody></tbody></table>`;
  }

  createHeaderSub() {
    return `<table class="table app-table-hover mb-0 text-left"><thead><tr><th class="cell">Order</th><th class="cell">Label</th><th class="cell">Deskripsi</th><th class="cell">Route</th><th class="cell">Sub Of</th><th class="cell"></th></tr></thead><tbody></tbody></table>`;
  }

  createLoader() {
    return `<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></div>`;
  }

  createNothing() {
    return `<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></div>`;
  }
}
