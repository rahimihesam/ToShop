window.addEventListener("DOMContentLoaded",() => {
	const c = new TossToggle(".toss-toggle");
});

class TossToggle {
    pristine = "toss-toggle--pristine";

    constructor(el) {
        this.el = document.querySelector(el);
        this.init();
    }
    init() {
        this.el?.addEventListener("change",this.removePristine.bind(this));

        // override Firefox’s preserving of input
        const input = this.el?.querySelector("input");
        if (input) input.checked = false;
    }
    removePristine() {
        this.el?.classList.remove(this.pristine);
    }
}