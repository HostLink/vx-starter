(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d2293b8"],{dd24:function(t,e,n){"use strict";n.r(e);var a=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("ul",{staticClass:"nav",class:t.getClass(),attrs:{role:"tablist"}},[t._t("default")],2),n("div",{staticClass:"tab-content"},[n("div",{ref:"content",staticClass:"tab-pane active",attrs:{role:"tabpanel"}})])])},r=[],s=n("b85c"),o=n("1da1"),c=(n("96cf"),n("159b"),n("9911"),{props:{type:{type:String,default:"tabs"}},data:function(){return{}},mounted:function(){var t=this;return Object(o["a"])(regeneratorRuntime.mark((function e(){var n,a,r,s,o;return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:for(n=[],t.$slots.default.forEach((function(t){void 0!=t.tag&&n.push(t.componentInstance)})),r=0,s=n;r<s.length;r++)o=s[r],o.$on("selected",(function(e){t.loadContent(e)})),o.active&&(a=o.link);if(!a){e.next=6;break}return e.next=6,t.loadContent(a);case 6:case"end":return e.stop()}}),e)})))()},methods:{loadContent:function(t){var e=this;return Object(o["a"])(regeneratorRuntime.mark((function n(){var a,r,o,c,i;return regeneratorRuntime.wrap((function(n){while(1)switch(n.prev=n.next){case 0:return a="/"!=t[0]?e.$route.path+"/"+t:t,n.next=3,e.$vx.get(a);case 3:r=n.sent.data,o=Object(s["a"])(r);try{for(o.s();!(c=o.n()).done;)i=c.value,"page"==i.type&&window.$(e.$refs.content).html(i.body.content)}catch(u){o.e(u)}finally{o.f()}case 6:case"end":return n.stop()}}),n)})))()},getClass:function(){return["nav-"+this.type]}}}),i=c,u=n("2877"),l=Object(u["a"])(i,a,r,!1,null,null,null);e["default"]=l.exports}}]);
//# sourceMappingURL=chunk-2d2293b8.4533676f.js.map