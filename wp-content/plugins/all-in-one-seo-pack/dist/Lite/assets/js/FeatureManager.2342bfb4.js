var p=Object.defineProperty,m=Object.defineProperties;var g=Object.getOwnPropertyDescriptors;var r=Object.getOwnPropertySymbols;var f=Object.prototype.hasOwnProperty,v=Object.prototype.propertyIsEnumerable;var o=(e,t,s)=>t in e?p(e,t,{enumerable:!0,configurable:!0,writable:!0,value:s}):e[t]=s,i=(e,t)=>{for(var s in t||(t={}))f.call(t,s)&&o(e,s,t[s]);if(r)for(var s of r(t))v.call(t,s)&&o(e,s,t[s]);return e},n=(e,t)=>m(e,g(t));import"./ToolsSettings.cc636f56.js";import{e as h,d as _,j as y}from"./index.01898232.js";import{n as u}from"./vueComponentNormalizer.87056a83.js";import{c as b}from"./news-sitemap.e595aa53.js";import{C as S}from"./Index.c7d3532f.js";import{C as A,S as x,a as C,b as k}from"./SitemapsPro.617e65c7.js";import{C as $}from"./Index.17df93e8.js";import{G as L,a as w}from"./Row.13b6f3f1.js";import{a as F,S as I}from"./ImageSeo.0ea16b4e.js";import"./index.460e1b4b.js";import"./client.93f15631.js";import"./params.bea1a08d.js";import"./Url.781a1d48.js";import"./Tooltip.674a9fb4.js";const U={computed:{yourLicenseIsText(){let e="You have not yet added a license key.";return this.$aioseo.license.isExpired&&(e="Your license has expired."),this.$aioseo.license.isDisabled&&(e="Your license has been disabled."),this.$aioseo.license.isInvalid&&(e="Your license key is invalid."),e}}};var T=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("svg",{staticClass:"aioseo-code",attrs:{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"}},[s("path",{attrs:{d:"M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z",fill:"currentColor"}})])},O=[];const E={},l={};var P=u(E,T,O,!1,z,null,null,null);function z(e){for(let t in l)this[t]=l[t]}var G=function(){return P.exports}(),M=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",{staticClass:"aioseo-feature-manager"},[s("div",{staticClass:"aioseo-feature-manager-header"},[e.getAddons.filter(function(a){return a.canActivate===!0}).length>0?s("div",{staticClass:"buttons"},[s("div",{staticClass:"button-content"},[s("base-button",{attrs:{size:"medium",type:"blue",loading:e.loading.activateAll},on:{click:e.activateAllFeatures}},[e._v(e._s(e.strings.activateAllFeatures))]),e.isUnlicensed?e._e():s("base-button",{attrs:{size:"medium",type:"gray",loading:e.loading.deactivateAll},on:{click:e.deactivateAllFeatures}},[e._v(e._s(e.strings.deactivateAllFeatures))])],1)]):e._e(),s("div",{staticClass:"search"},[s("base-input",{attrs:{size:"medium",placeholder:e.strings.searchForFeatures,"prepend-icon":"search"},model:{value:e.search,callback:function(a){e.search=a},expression:"search"}})],1)]),s("div",{staticClass:"aioseo-feature-manager-addons"},[e.isUnlicensed?s("core-alert",{attrs:{type:"red"}},[s("strong",[e._v(e._s(e.yourLicenseIsText))]),e._v(" "+e._s(e.strings.aValidLicenseIsRequired)+" "),s("div",{staticClass:"buttons"},[s("base-button",{attrs:{type:"blue",size:"small",tag:"a",href:e.$aioseo.urls.aio.settings}},[e._v(" "+e._s(e.strings.enterLicenseKey)+" ")]),s("base-button",{attrs:{type:"green",size:"small",tag:"a",target:"_blank",href:e.$links.getUpsellUrl("feature-manager-upgrade","no-license-key","pricing")}},[e._v(" "+e._s(e.strings.purchaseLicense)+" ")])],1)]):e._e(),s("grid-row",e._l(e.getAddons,function(a,d){return s("grid-column",{key:d,attrs:{sm:"6",lg:"4"}},[s("core-feature-card",{ref:"addons",refInFor:!0,attrs:{"can-activate":a.canActivate,"can-manage":e.$allowed(a.capability),feature:a},scopedSlots:e._u([{key:"title",fn:function(){return[s(e.getIconComponent(a.icon),{tag:"component",attrs:{src:e.getIconSrc(a.icon,a.image)}}),e._v(" "+e._s(a.name)+" ")]},proxy:!0},{key:"description",fn:function(){return[s("div",{domProps:{innerHTML:e._s(e.getAddonDescription(a))}})]},proxy:!0}],null,!0)})],1)}),1)],1),e.isUnlicensed?s("cta",{staticClass:"feature-manager-upsell",attrs:{type:2,"button-text":e.strings.ctaButtonText,floating:!1,"cta-link":e.$links.utmUrl("feature-manager","main-cta"),"learn-more-link":e.$links.getUpsellUrl("feature-manager","main-cta","home"),"feature-list":[e.strings.videoNewsSitemaps,e.strings.imageSeoOptimization,e.strings.localBusinessSeo,e.strings.advancedWooCommerce,e.strings.customTaxonomies,e.strings.andMore]},scopedSlots:e._u([{key:"header-text",fn:function(){return[s("span",{staticClass:"large"},[e._v(e._s(e.strings.ctaHeaderText))])]},proxy:!0},{key:"description",fn:function(){return[e._v(" "+e._s(e.upgradeToday)+" ")]},proxy:!0},{key:"featured-image",fn:function(){return[s("img",{attrs:{src:e.$getImgUrl(e.ctaImg)}})]},proxy:!0}],null,!1,462631475)}):e._e()],1)},B=[];const N={components:{CoreAlert:S,CoreFeatureCard:A,Cta:$,GridColumn:L,GridRow:w,SvgCode:G,SvgImageSeo:F,SvgLinkAssistant:x,SvgLocalBusiness:I,SvgRedirect:C,SvgSitemapsPro:k},mixins:[U],data(){return{ctaImg:b,search:null,loading:{activateAll:!1,deactivateAll:!1},strings:{videoNewsSitemaps:"Video and News Sitemaps",imageSeoOptimization:"Image SEO Optimization",localBusinessSeo:"Local Business SEO",advancedWooCommerce:"Advanced WooCommerce",customTaxonomies:"SEO for Categories, Tags and Custom Taxonomies",andMore:"And many more...",activateAllFeatures:"Activate All Features",deactivateAllFeatures:"Deactivate All Features",searchForFeatures:"Search for Features...",ctaHeaderText:this.$t.sprintf("Upgrade %1$s to Pro and Unlock all Features!","AIOSEO"),ctaButtonText:"Upgrade to Pro and Unlock All Features",aValidLicenseIsRequired:"A valid license key is required in order to use our addons.",enterLicenseKey:"Enter License Key",purchaseLicense:"Purchase License"},descriptions:{aioseoImageSeo:{description:"<p>Globally control the Title attribute and Alt text for images in your content. These attributes are essential for both accessibility and SEO.</p>",version:0},aioseoVideoSitemap:{description:"<p>The Video Sitemap works in much the same way as the XML Sitemap module, it generates an XML Sitemap specifically for video content on your site. Search engines use this information to display rich snippet information in search results.</p>",version:0},aioseoNewsSitemap:{description:"<p>Our Google News Sitemap lets you control which content you submit to Google News and only contains articles that were published in the last 48 hours. In order to submit a News Sitemap to Google, you must have added your site to Google\u2019s Publisher Center and had it approved.</p>",version:0},aioseoLocalBusiness:{description:"<p>Local Business schema markup enables you to tell Google about your business, including your business name, address and phone number, opening hours and price range. This information may be displayed as a Knowledge Graph card or business carousel.</p>",version:0}}}},computed:n(i(i({},h(["isUnlicensed"])),_(["addons"])),{upgradeToday(){return this.$t.sprintf("%1$s %2$s comes with many additional features to help take your site's SEO to the next level!","AIOSEO","Pro")},getAddons(){return this.addons.filter(e=>!this.search||e.name.toLowerCase().includes(this.search.toLowerCase()))}}),methods:n(i({},y(["installPlugins","deactivatePlugins"])),{getIconComponent(e){return e.startsWith("svg-")?e:"img"},getIconSrc(e,t){return typeof e=="string"&&e.startsWith("svg-")?null:typeof e=="string"?`data:image/svg+xml;base64,${e}`:t},getAddonDescription(e){const t=e.sku.replace(/-./g,s=>s.toUpperCase()[1]);return this.descriptions[t]&&this.descriptions[t].description&&e.descriptionVersion<=this.descriptions[t].version?this.descriptions[t].description:e.description},activateAllFeatures(){if(!this.$isPro||!this.$aioseo.license.isActive)return window.open(this.$links.utmUrl("activate-all-features"));this.loading.activateAll=!0;const e=this.addons.filter(t=>!t.requiresUpgrade).map(t=>({plugin:t.basename}));this.installPlugins(e).then(t=>{const s=Object.keys(t.body.completed).map(a=>t.body.completed[a]);this.$refs.addons.forEach(a=>{s.includes(a.feature.basename)&&(a.activated=!0)}),this.loading.activateAll=!1})},deactivateAllFeatures(){this.loading.deactivateAll=!0;const e=this.addons.filter(t=>!t.requiresUpgrade).filter(t=>t.installed).map(t=>({plugin:t.basename}));this.deactivatePlugins(e).then(t=>{const s=Object.keys(t.body.completed).map(a=>t.body.completed[a]);this.$refs.addons.forEach(a=>{s.includes(a.feature.basename)&&(a.activated=!1)}),this.loading.deactivateAll=!1})}})},c={};var R=u(N,M,B,!1,V,null,null,null);function V(e){for(let t in c)this[t]=c[t]}var ie=function(){return R.exports}();export{ie as default};
