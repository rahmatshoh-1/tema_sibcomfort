import{T as g,k as h,o as a,e as l,b as e,u as t,Z as p,w as o,h as _,a as s,n as y,f as n,j as u,i as v,F as x}from"./app-00f1f0af.js";import{A as b}from"./AuthenticationCard-2caff893.js";import{_ as k}from"./AuthenticationCardLogo-a5462c0f.js";import{_ as w}from"./PrimaryButton-cacb33bd.js";import"./_plugin-vue_export-helper-c27b6911.js";const A=s("div",{class:"mb-4 text-sm text-gray-600"}," Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1),V={key:0,class:"mb-4 font-medium text-sm text-green-600"},E=["onSubmit"],B={class:"mt-4 flex items-center justify-between"},T={__name:"VerifyEmail",props:{status:String},setup(c){const d=c,i=g({}),f=()=>{i.post(route("verification.send"))},m=h(()=>d.status==="verification-link-sent");return(r,C)=>(a(),l(x,null,[e(t(p),{title:"Email Verification"}),e(b,null,{logo:o(()=>[e(k)]),default:o(()=>[A,m.value?(a(),l("div",V," A new verification link has been sent to the email address you provided in your profile settings. ")):_("",!0),s("form",{onSubmit:v(f,["prevent"])},[s("div",B,[e(w,{class:y({"opacity-25":t(i).processing}),disabled:t(i).processing},{default:o(()=>[n(" Resend Verification Email ")]),_:1},8,["class","disabled"]),s("div",null,[e(t(u),{href:r.route("profile.show"),class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#16A34A]"},{default:o(()=>[n(" Edit Profile")]),_:1},8,["href"]),e(t(u),{href:r.route("logout"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#16A34A] ml-2"},{default:o(()=>[n(" Log Out ")]),_:1},8,["href"])])])],40,E)]),_:1})],64))}};export{T as default};