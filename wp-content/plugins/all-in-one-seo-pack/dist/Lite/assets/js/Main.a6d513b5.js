var c=Object.defineProperty,u=Object.defineProperties;var d=Object.getOwnPropertyDescriptors;var i=Object.getOwnPropertySymbols;var f=Object.prototype.hasOwnProperty,_=Object.prototype.propertyIsEnumerable;var n=(t,o,r)=>o in t?c(t,o,{enumerable:!0,configurable:!0,writable:!0,value:r}):t[o]=r,e=(t,o)=>{for(var r in o||(o={}))f.call(o,r)&&n(t,r,o[r]);if(i)for(var r of i(o))_.call(o,r)&&n(t,r,o[r]);return t},s=(t,o)=>u(t,d(o));import h from"./AdditionalInformation.276f0d9f.js";import S from"./Category.18c7971c.js";import g from"./Features.91f66f2e.js";import y from"./Import.b0fc7597.js";import v from"./LicenseKey.97675027.js";import w from"./SearchAppearance.472a66cb.js";import x from"./SmartRecommendations.45dd02f1.js";import z from"./Success.667a6d18.js";import A from"./Welcome.045556f1.js";import{e as m,d as a,f as I}from"./index.01898232.js";import{n as O}from"./vueComponentNormalizer.87056a83.js";import"./ToolsSettings.cc636f56.js";import"./Img.f20cb7b5.js";import"./helpers.e80a64dc.js";import"./index.460e1b4b.js";import"./client.93f15631.js";import"./MaxCounts.3eed5286.js";import"./Phone.2b07efde.js";import"./RadioToggle.98e1e7ec.js";import"./SocialProfiles.09d6c89a.js";import"./Checkbox.5873a8d2.js";import"./Checkmark.e7547654.js";import"./Index.c7d3532f.js";import"./SettingsRow.eb71f07b.js";import"./Row.13b6f3f1.js";import"./Plus.a9b9ba75.js";import"./Header.e156dc6b.js";import"./Logo.1a5e022a.js";import"./Steps.a1ac0d85.js";import"./HighlightToggle.47bdd2a8.js";import"./Radio.99a9886d.js";import"./HtmlTagsEditor.45568624.js";import"./Editor.97935a18.js";import"./UnfilteredHtml.13ff0800.js";import"./ImageSeo.0ea16b4e.js";import"./NewsChannel.fc0a5ed5.js";import"./Pencil.d547ebca.js";import"./ProBadge.7c0de2f7.js";import"./popup.25df8419.js";import"./params.bea1a08d.js";import"./GoogleSearchPreview.bf413128.js";import"./PostTypeOptions.ba5b802e.js";import"./Tooltip.674a9fb4.js";import"./Modal.a1dd4f63.js";import"./QuestionMark.83ebd18e.js";import"./Book.b6a9040c.js";import"./VideoCamera.896ed18d.js";var $=function(){var t=this,o=t.$createElement,r=t._self._c||o;return r(t.$route.name,{tag:"component"})},L=[];const M={components:{AdditionalInformation:h,Category:S,Features:g,Import:y,LicenseKey:v,SearchAppearance:w,SmartRecommendations:x,Success:z,Welcome:A},computed:e(e(e(e({},m("wizard",["shouldShowImportStep"])),m(["isUnlicensed"])),a("wizard",["stages"])),a(["internalOptions"])),methods:s(e({},I("wizard",["setStages","loadState"])),{deleteStage(t){const o=[...this.stages],r=o.findIndex(l=>t===l);r!==-1&&this.$delete(o,r),this.setStages(o)}}),mounted(){if(this.internalOptions.internal.wizard){const t=JSON.parse(this.internalOptions.internal.wizard);delete t.currentStage,delete t.stages,delete t.licenseKey,this.loadState(t)}this.shouldShowImportStep||this.deleteStage("import"),this.isUnlicensed||this.deleteStage("license-key"),this.$isPro&&this.deleteStage("smart-recommendations")}},p={};var R=O(M,$,L,!1,U,null,null,null);function U(t){for(let o in p)this[o]=p[o]}var Ot=function(){return R.exports}();export{Ot as default};