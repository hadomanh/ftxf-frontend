const e = {
    humanizeDuration: (e,n=!1)=>n ? e : Math.round(Math.random() * e / 2) + e,
    sleep: e=>new Promise(n=>{
        const r = performance.now();
        requestAnimationFrame((function t(o) {
            o - r >= e ? n() : requestAnimationFrame(t)
        }
        ))
    }
    ),
    delay: (e,n)=>{
        let r = !1;
        const t = performance.now();
        return requestAnimationFrame((function o(a) {
            a - t >= n && !r ? e() : r || requestAnimationFrame(o)
        }
        )),
        ()=>{
            r = !0
        }
    }
    ,
    onInterval: (e,n)=>{
        let r = !1
          , t = performance.now();
        return requestAnimationFrame((function o(a) {
            a - t >= n && (t = a,
            e()),
            r || requestAnimationFrame(o)
        }
        )),
        ()=>{
            r = !0
        }
    }
};
export {e as T};
