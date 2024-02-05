import{D as y}from"./DashboardLayout-d96027a2.js";import{B as k,O as w,p as u,o as a,c as V,w as h,a as e,l as m,A as b,z as C,e as r,g as L,t as g,F as j,b as _,h as B,f as o,i as z}from"./app-00f1f0af.js";import{S as M}from"./sweetalert2-c9babbd4.js";import{C as A}from"./ckeditor-f9579a91.js";import{_ as D}from"./_plugin-vue_export-helper-c27b6911.js";const U={components:{DashboardLayout:y},props:{slider:{type:Object,default:{}}},data(){return{item:{link:"",image:"",title:"",body:"",page:"",status:"active",mobile_image:""},editor:A,editorConfig:{ckfinder:{uploadUrl:"/dashboard/editor/upload",name:"upload",url:"url"},mediaEmbed:{previewsInData:!0}},sliderPages:[{label:"Главная страница",value:"home"},{label:"Полезный контент",value:"posts"},{label:"Подробно 'Полезный контент'",value:"post.single"},{label:"Собственное производство",value:"production"},{label:"Готовые объекты",value:"ready.project"},{label:"Проекты",value:"projects"},{label:"Подробно 'Проекты'",value:"project.single"},{label:"Ипотека",value:"ipoteka"},{label:"Контакты",value:"contacts"},{label:"Каркасные дома",value:"frame.house"},{label:"Погонаж",value:"molded.house"},{label:"Строительство из бруса",value:"brus"},{label:"Модульное строительство",value:"module"},{label:"Ручная рубка",value:"manual.cutting"},{label:"Пиломатериал",value:"lumber"}]}},mounted(){this.item=this.slider},methods:{changeImage(i,s){if(i.target.files.length>0){var n=i.target;if(n.files&&n.files[0]){var c=new FileReader;c.onload=t=>{this.item[s]=t.target.result},c.readAsDataURL(n.files[0])}}},validLink(){return this.item.link===null||this.item.link.length==0?!0:!!(this.item.link!=null&&this.item.link.startsWith("http"))},submit(){k.put(route("sliders.update",this.slider.id),this.item).then(i=>{M.fire({title:"Слайд успешно обновлен",timer:3e3,timerProgressBar:!0,showConfirmButton:!1,icon:"success",toast:!0,position:"top-end"}),w.visit(route("sliders.index"),{replace:!0})}).catch(i=>{console.log(i.response.data)})}}},P=e("div",{class:"mb-6"},[e("h2",{class:"font-bold text-xl"},"Редактировать слайд")],-1),q={class:""},G=e("label",{class:"block",for:""},[o("Заголовок: "),e("span",{class:"text-xl text-red-500"},"*")],-1),I={class:""},N=e("label",{class:"block",for:""},[o("Страница: "),e("span",{class:"text-xl text-red-500"},"*")],-1),F=["value"],S={class:"col-span-2 border-t-2 pt-3"},E=e("label",{class:"block",for:""},[o("Описание: "),e("span",{class:"text-xl text-red-500"},"*")],-1),O={class:"col-span-2 border-t-2 pt-3"},H=e("label",{class:"block",for:""},[o(" Изображение: "),e("span",{class:"text-xl text-red-500"},[o("* "),e("span",{class:"text-sm"},"(рекомендуемый размер 1500x800 пиксель)")])],-1),J=["required"],R={for:"image",class:"cursor-pointer"},T={key:0,class:"relative group"},W=["src"],K=e("div",{class:"group-hover:flex hidden absolute right-0 left-0 bottom-0 top-0 bg-black bg-opacity-50 z-20 items-center justify-center rounded-lg"},[e("span",{class:"inline-block border-2 rounded-lg px-4 py-3 font-bold text-sm text-white"},"Изменить")],-1),Q={key:1,class:"mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10"},X=e("div",{class:"text-center"},[e("svg",{class:"mx-auto h-12 w-12 text-gray-300",viewBox:"0 0 24 24",fill:"currentColor","aria-hidden":"true"},[e("path",{"fill-rule":"evenodd",d:"M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z","clip-rule":"evenodd"})]),e("div",{class:"mt-4 flex text-sm leading-6 text-indigo-600 tex"},[e("p",{class:"pl-1"}," Upload a file. PNG, JPG, GIF up to 10MB ")])],-1),Y=[X],Z={class:"col-span-2 border-t-2 pt-3"},$=e("label",{class:"block",for:""},[o(" Изображение для мобильного версия сайта: "),e("span",{class:"text-xl text-red-500"},[o("* "),e("span",{class:"text-sm"},"(рекомендуемый размер 450x730 пиксель)")])],-1),ee=["required"],te={for:"mobile_image",class:"cursor-pointer"},se={key:0,class:"relative group"},le=["src"],oe=e("div",{class:"group-hover:flex hidden absolute right-0 left-0 bottom-0 top-0 bg-black bg-opacity-50 z-20 items-center justify-center rounded-lg"},[e("span",{class:"inline-block border-2 rounded-lg px-4 py-3 font-bold text-sm text-white"},"Изменить")],-1),ie={key:1,class:"mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10"},ae=e("div",{class:"text-center"},[e("svg",{class:"mx-auto h-12 w-12 text-gray-300",viewBox:"0 0 24 24",fill:"currentColor","aria-hidden":"true"},[e("path",{"fill-rule":"evenodd",d:"M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z","clip-rule":"evenodd"})]),e("div",{class:"mt-4 flex text-sm leading-6 text-indigo-600 tex"},[e("p",{class:"pl-1"}," Upload a file. PNG, JPG, GIF up to 10MB ")])],-1),re=[ae],de={class:""},ne=e("label",{class:"block",for:""},"Ссылка:",-1),ce={key:0,class:"text-red-500 mt-2"},ue={class:"lg:col-span-2 flex items-center gap-x-3"},me=["checked","value"],pe=e("label",{class:"block",for:"is_show"}," Отображать?",-1),he={class:"col-span-2 border-t-2 pt-3"},be={class:"flex items-center justify-end gap-x-3"},ge=["disabled","href"];function _e(i,s,n,c,t,d){const f=u("ckeditor"),v=u("Link"),x=u("DashboardLayout");return a(),V(x,null,{default:h(()=>{var p;return[P,e("form",{class:"sm:grid sm:grid-cols-2 gap-6",onSubmit:s[7]||(s[7]=z(l=>d.submit(),["prevent"]))},[e("div",q,[G,m(e("input",{type:"text",class:"form-controls",required:"","onUpdate:modelValue":s[0]||(s[0]=l=>t.item.title=l)},null,512),[[b,t.item.title]])]),e("div",I,[N,m(e("select",{class:"form-controls",required:"","onUpdate:modelValue":s[1]||(s[1]=l=>t.item.page=l)},[(a(!0),r(j,null,L(t.sliderPages,l=>(a(),r("option",{key:l.value,value:l.value},g(l.label),9,F))),128))],512),[[C,t.item.page]])]),e("div",S,[E,_(f,{modelValue:t.item.body,"onUpdate:modelValue":s[2]||(s[2]=l=>t.item.body=l),editor:t.editor,config:t.editorConfig},null,8,["modelValue","editor","config"])]),e("div",O,[H,e("input",{id:"image",onChange:s[3]||(s[3]=l=>d.changeImage(l,"image")),type:"file",accept:"image/*",required:t.item.image=="",class:"w-[1px] h-[1px] opacity-0"},null,40,J),e("label",R,[t.item.image?(a(),r("div",T,[e("img",{class:"object-cover h-[270px] rounded-lg border border-dashed border-gray-900/25 w-full",src:t.item.image,alt:""},null,8,W),K])):(a(),r("div",Q,Y))])]),e("div",Z,[$,e("input",{id:"mobile_image",onChange:s[4]||(s[4]=l=>d.changeImage(l,"mobile_image")),type:"file",accept:"image/*",required:t.item.mobile_image=="",class:"w-[1px] h-[1px] opacity-0"},null,40,ee),e("label",te,[t.item.mobile_image?(a(),r("div",se,[e("img",{class:"object-cover h-[270px] rounded-lg border border-dashed border-gray-900/25 w-full",src:t.item.mobile_image,alt:""},null,8,le),oe])):(a(),r("div",ie,re))])]),e("div",de,[ne,m(e("input",{type:"text",class:"form-controls",placeholder:"Пример: https://www.google.com/","onUpdate:modelValue":s[5]||(s[5]=l=>t.item.link=l)},null,512),[[b,t.item.link]]),d.validLink()?B("",!0):(a(),r("span",ce,"Введите корректный адрес"))]),e("div",ue,[e("input",{id:"is_show",name:"is_show",type:"checkbox",onChange:s[6]||(s[6]=l=>t.item.status=t.item.status=="active"?"deactive":"active"),checked:t.item.status=="active",value:t.item.status,class:"h-4 w-4 rounded border-white/10 bg-white/5 text-[#16a34a] focus:ring-[#16a34a] focus:ring-offset-gray-900 ring ring-[#16a34a]"},null,40,me),pe]),e("div",he,[o(" Последнее изменение: "+g((p=t.item.admin)==null?void 0:p.name)+" ",1),e("div",be,[_(v,{class:"dash-btn !bg-gray-300 !text-gray-800",href:i.route("sliders.index")},{default:h(()=>[o("Назад")]),_:1},8,["href"]),e("button",{disabled:!d.validLink(),class:"dash-btn",href:i.route("sliders.index")}," Сохранить ",8,ge)])])],32)]}),_:1})}const we=D(U,[["render",_e]]);export{we as default};