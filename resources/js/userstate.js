function e(e, r, n) {
    return r in e ? Object.defineProperty(e, r, {
        value: n,
        enumerable: !0,
        configurable: !0,
        writable: !0
    }) : e[r] = n,
    e
}
const r = new class extends class {
    warn(e, ...r) {
        throw new Error("Not implmeneted!")
    }
    info(e, ...r) {
        throw new Error("Not implmeneted!")
    }
    error(e, ...r) {
        throw new Error("Not implmeneted!")
    }
}
{
    info() {}
    warn() {}
    error() {}
}
;
const n = new class {
    constructor() {
        e(this, "config", void 0)
    }
    async getConfig() {
        if (this.config)
            return this.config;
        const e = await fetch("/user-state")
          , r = await e.json();
        return this.config = r,
        this.config
    }
}
;
export {r as L, e as _, n as u};
