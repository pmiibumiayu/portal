class Modal {
  forms = {
    add: {
      main: "",
      sub: "",
    },
  };

  constructor(opt = { url: "http://portal.pmii/api/menu/" }) {
    this.url = opt.url;
  }

  async init() {
    await this.main();
    await this.sub();
  }

  async main() {
    return fetch(this.url + "formmain", {
      method: "get",
      headers: {
        "X-Requested-With": "XMLHttpRequest",
      },
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error(response.statusText);
        }
        return response.text();
      })
      .then((main) => (this.forms.add.main = main));
  }

  async sub() {
    return fetch(this.url + "formsub", {
      method: "get",
      headers: {
        "X-Requested-With": "XMLHttpRequest",
      },
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error(response.statusText);
        }
        return response.text();
      })
      .then((sub) => (this.forms.add.sub = sub));
  }
}
