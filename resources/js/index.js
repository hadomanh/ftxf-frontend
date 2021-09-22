import {_ as e} from "./userstate.js";
function t() {
    const e = "(prefers-reduced-motion: reduce)"
      , t = window.matchMedia(e);
    return t.media === e && t.matches
}
const n = new class {
    constructor() {
        e(this, "__gpuInfo", void 0)
    }
    get gpuInfo() {
        return void 0 === this.__gpuInfo && (this.__gpuInfo = function() {
            const e = document.createElement("canvas");
            try {
                const t = e.getContext("webgl") || e.getContext("experimental-webgl");
                if (!t)
                    return null;
                const n = t.getExtension("WEBGL_debug_renderer_info");
                return {
                    vendor: t.getParameter(n.UNMASKED_VENDOR_WEBGL) || null,
                    renderer: t.getParameter(n.UNMASKED_RENDERER_WEBGL) || null
                }
            } catch (e) {
                return null
            }
        }()),
        this.__gpuInfo
    }
    get vendor() {
        return this.gpuInfo && this.gpuInfo.vendor
    }
    get renderer() {
        return this.gpuInfo && this.gpuInfo.renderer
    }
}
  , r = [/swiftshade/i];
function o() {
    const e = n.renderer;
    return !!e && r.some(t=>e.match(t))
}
const i = {
    prefersReducedMotion: t,
    disableGPUAnimations: o,
    disableAmbientAnimations: ()=>t() || o(),
    isNativeSmoothScrollSupported() {
        var e;
        return "scrollBehavior"in ((null === (e = document.documentElement) || void 0 === e ? void 0 : e.style) || {})
    }
};
export {i as F};
