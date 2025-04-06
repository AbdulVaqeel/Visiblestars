class Modal {
    constructor({ triggerClass: e, contentClass: l, speed: s }) {
        (this.trigger = document.querySelectorAll(e)),
            (this.content = document.querySelectorAll(l)),
            this.content.forEach((e) => {
                e.style.display = "none";
            });
        this.trigger.forEach((r) => {
            r.addEventListener("click", (e) => {
                let t = r.parentElement.querySelector(l),
                    o = () => {
                        let e = window.getComputedStyle(t).display;
                        "none" === e && (e = "block"), (t.style.display = e);
                        t.offsetHeight;
                        (t.style.overflow = "hidden"),
                            (t.style.opacity = 1),
                            (t.style.paddingTop = 0),
                            (t.style.paddingBottom = 0),
                            (t.style.marginTop = 0),
                            (t.style.marginBottom = 0),
                            t.offsetHeight,
                            (t.style.boxSizing = "border-box"),
                            (t.style.transitionProperty = "opacity"),
                            (t.style.transitionDuration = s + "ms"),
                            (t.style.opacity = 0),
                            t.style.removeProperty("padding-top"),
                            t.style.removeProperty("padding-bottom"),
                            t.style.removeProperty("margin-top"),
                            t.style.removeProperty("margin-bottom"),
                            window.setTimeout(() => {
                                t.style.removeProperty("opacity"), t.style.removeProperty("overflow"), t.style.removeProperty("transition-duration"), t.style.removeProperty("transition-property"), (t.style.display = "none");
                            }, s);
                    };
                if (
                    (this.content.forEach((e) => {
                        e.querySelectorAll(".close-icon").forEach((e) => {
                            e.addEventListener("click", (e) => {
                                o(this.content);
                            });
                        });
                    }),
                    "none" === window.getComputedStyle(t).display)
                ) {
                    let e = window.getComputedStyle(t).display;
                    "none" === e && (e = "block"), (t.style.display = e);
                    t.offsetHeight;
                    (t.style.overflow = "hidden"),
                        (t.style.opacity = 0),
                        (t.style.paddingTop = 0),
                        (t.style.paddingBottom = 0),
                        (t.style.marginTop = 0),
                        (t.style.marginBottom = 0),
                        t.offsetHeight,
                        (t.style.boxSizing = "border-box"),
                        (t.style.transitionProperty = "opacity"),
                        (t.style.transitionDuration = s + "ms"),
                        (t.style.opacity = 1),
                        t.style.removeProperty("padding-top"),
                        t.style.removeProperty("padding-bottom"),
                        t.style.removeProperty("margin-top"),
                        t.style.removeProperty("margin-bottom"),
                        window.setTimeout(() => {
                            t.style.removeProperty("opacity"), t.style.removeProperty("overflow"), t.style.removeProperty("transition-duration"), t.style.removeProperty("transition-property");
                        }, s);
                } else o();
            });
        });
    }
}
export default Modal;
