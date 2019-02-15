let magnetCurs=[];magnetCurs.init=function(params){if(!params){params={}}
document.body.insertAdjacentHTML('afterbegin','<div id="cursor"></div>');magnetCurs.cursor=document.getElementById('cursor');magnetCurs.cursor.style.position="fixed"
magnetCurs.cursor.style.pointerEvents="none"
if(params.pointer){document.body.insertAdjacentHTML('afterbegin','<div id="pointer"></div>');magnetCurs.pointar=document.getElementById('pointer');magnetCurs.pointar.style.position="fixed"
magnetCurs.pointar.style.pointerEvents="none"}
magnetCurs.targetable_list=document.getElementsByClassName('targetable');magnetCurs.moveEnable=!0;document.addEventListener('mousemove',function(e){if(magnetCurs.moveEnable){magnetCurs.cursor.style.left=e.clientX+'px';magnetCurs.cursor.style.top=e.clientY+'px';magnetCurs.cursor.style.transform=""}else{if(params.shockable){let intensity=5;if(typeof params.shockable=='number'){if(params.shockable>0&&params.shockable<5){intensity=intensity-params.shockable}else{magnetCurs.error("spacing params need to be more than 0")}}else{magnetCurs.error("shockable params need to be a number")}
magnetCurs.cursor.style.transform="translate("+e.movementX/intensity+"px, "+e.movementY/intensity+"px)"}}
if(params.pointer){magnetCurs.pointar.style.left=e.clientX+'px';magnetCurs.pointar.style.top=e.clientY+'px'}});for(let index=0;index<magnetCurs.targetable_list.length;index++){const element=magnetCurs.targetable_list[index];element.addEventListener('mouseenter',function(e){magnetCurs.moveEnable=!1;magnetCurs.cursor.classList.add('magnet');let currentButton=e.currentTarget;let spacing=10;if(params.spacing){if(typeof params.spacing=='number'){if(params.spacing>0){spacing=params.spacing}else{magnetCurs.error("spacing params need to be more than 0")}}else{magnetCurs.error("spacing params need to be a number")}}
let cssProperty=[];cssProperty.width=currentButton.offsetWidth+(spacing*2);cssProperty.height=currentButton.offsetHeight+(spacing*2);cssProperty.left=currentButton.getBoundingClientRect().x-spacing;cssProperty.top=currentButton.getBoundingClientRect().y-spacing;cssProperty.borderRadius=parseInt(window.getComputedStyle(currentButton,null).getPropertyValue("border-radius").match(/\d+/g).map(Number));magnetCurs.cursor.style.left=cssProperty.left+'px';magnetCurs.cursor.style.top=cssProperty.top+'px';magnetCurs.cursor.style.width=cssProperty.width+'px';magnetCurs.cursor.style.height=cssProperty.height+'px';magnetCurs.cursor.style.margin="0";magnetCurs.cursor.style.borderRadius=(cssProperty.borderRadius+0)+'px'});element.addEventListener('mouseleave',function(e){magnetCurs.moveEnable=!0;magnetCurs.cursor.classList.remove('magnet');magnetCurs.cursor.style.width='';magnetCurs.cursor.style.height='';magnetCurs.cursor.style.margin='';magnetCurs.cursor.style.borderRadius=''})}
if(params.click){document.addEventListener('click',function(e){let time=700;if(typeof params.click=='number'){if(params.click>0){time=params.click}else{magnetCurs.error("click params need to be more than 0")}}else{magnetCurs.error("click params need to be a number")}
magnetCurs.cursor.style.animation="cursorClick "+time+"ms";setTimeout(()=>{magnetCurs.cursor.style.animation=""},time)})}}
magnetCurs.error=function(string){console.error('Magnetic Cursor : '+string)}
/*BSD 2-Clause License

Copyright (c) 2019, RIOU Kévin
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

* Redistributions of source code must retain the above copyright notice, this
  list of conditions and the following disclaimer.

* Redistributions in binary form must reproduce the above copyright notice,
  this list of conditions and the following disclaimer in the documentation
  and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.*/