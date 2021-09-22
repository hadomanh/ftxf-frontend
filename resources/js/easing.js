const t = {
    ease: function(t) {
        return t < .5 ? 2 * t * t : (4 - 2 * t) * t - 1
    },
    easeInOutCubic: function(t, n, e, u) {
        return (t /= u / 2) < 1 ? e / 2 * t * t * t + n : e / 2 * ((t -= 2) * t * t + 2) + n
    },
    easeInQuart: function(t, n, e, u) {
        const r = t / u;
        return e * r * r ** 3 + n
    },
    easeOutQuart: function(t, n, e, u) {
        const r = t / u - 1;
        return -e * (r * r ** 3 - 1) + n
    },
    easeInOutQuart: function(t, n, e, u) {
        let r = t / (u / 2);
        return r < 1 ? e / 2 * r ** 4 + n : (r -= 2,
        -e / 2 * (r * r ** 3 - 2) + n)
    },
    easeInOutBack: function(t, n, e, u, r) {
        let a = null == r ? 1.70158 : r
          , s = t / (u / 2);
        return a = 1.525 * a + 1,
        s < 1 ? e / 2 * (s * s * (a * s - a) + n) : (s -= 2,
        e / 2 * (s * s * (a * s + a) + 2) + n)
    },
    easeOutElastic: function(t, n, e, u, r=700) {
        if (!t || !e)
            return n;
        const a = t / u;
        if (1 === a)
            return n + e;
        const s = e
          , c = u * (1 - Math.min(r, 999) / 1e3)
          , i = s < Math.abs(e) ? c / 4 : c / (2 * Math.PI) * Math.asin(e / s);
        return s * 2 ** (-10 * a) * Math.sin((a * u - i) * (2 * Math.PI) / c) + e + n
    }
};
export {t as E};
