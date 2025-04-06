class slideToggle {
    constructor({ triggerClass: e, contentClass: r, speed: i, icon: t, iconPosition: o, iconStyle: s }) {
        (this.trigger = document.querySelectorAll(e)),
            (this.content = document.querySelectorAll(r)),
            this.content.forEach((e) => {
                e.style.display = "none";
            });
        this.trigger.forEach((e) => {
            e.addEventListener("click", (t) => {
                t.target.classList.toggle("active");
                let o = e.parentElement.querySelector(r);
                if ("none" === window.getComputedStyle(o).display) {
                    let e = window.getComputedStyle(o).display;
                    "none" === e && (e = "flex"), (o.style.display = e);
                    t = o.offsetHeight;
                    (o.style.overflow = "hidden"),
                        (o.style.height = 0),
                        (o.style.paddingTop = 0),
                        (o.style.paddingBottom = 0),
                        (o.style.marginTop = 0),
                        (o.style.marginBottom = 0),
                        o.offsetHeight,
                        (o.style.boxSizing = "border-box"),
                        (o.style.transitionProperty = "all"),
                        (o.style.transitionDuration = i + "ms"),
                        (o.style.height = t + "px"),
                        o.style.removeProperty("padding-top"),
                        o.style.removeProperty("padding-bottom"),
                        o.style.removeProperty("margin-top"),
                        o.style.removeProperty("margin-bottom"),
                        window.setTimeout(() => {
                            o.style.removeProperty("height"), o.style.removeProperty("overflow"), o.style.removeProperty("transition-duration"), o.style.removeProperty("transition-property");
                        }, i);
                } else
                    window.getComputedStyle(o).display,
                        (o.style.transitionProperty = "all"),
                        (o.style.transitionDuration = i + "ms"),
                        (o.style.boxSizing = "border-box"),
                        (o.style.height = o.offsetHeight + "px"),
                        o.offsetHeight,
                        (o.style.overflow = "hidden"),
                        (o.style.height = 0),
                        (o.style.paddingTop = 0),
                        (o.style.paddingBottom = 0),
                        (o.style.marginTop = 0),
                        (o.style.marginBottom = 0),
                        window.setTimeout(() => {
                            (o.style.display = "none"),
                                o.style.removeProperty("height"),
                                o.style.removeProperty("padding-top"),
                                o.style.removeProperty("padding-bottom"),
                                o.style.removeProperty("margin-top"),
                                o.style.removeProperty("margin-bottom"),
                                o.style.removeProperty("overflow"),
                                o.style.removeProperty("transition-duration"),
                                o.style.removeProperty("transition-property");
                        }, i);
            });
        });
        e = t;
        e &&
            this.trigger.forEach((e) => {
                var t = document.createElement("span");
                t.setAttribute("class", "slidetoggle-icon"), e.appendChild(t), t.parentElement;
                "left" === o && t.parentElement.classList.add("left-icon"),
                    "right" === o && t.parentElement.classList.add("right-icon"),
                    "arrow" === s && t.parentElement.classList.add("arrow-icon"),
                    "plus" === s && t.parentElement.classList.add("plus-icon");
            });
    }
}

export default slideToggle;

