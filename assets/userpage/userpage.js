
var x= document.getElementById('about');
var y = document.getElementById('interview');
var z = document.getElementById('result');
var xin= document.getElementById('about_hi');
var yin= document.getElementById('interview_hi');
var zin= document.getElementById('result_hi');
var cool= document.getElementById('air');
x.addEventListener('click',function(){
   xin.style.display='block';
   	yin.style.display='none';

zin.style.display='none';
cool.style.background='rgb(122,122,122)';
});
y.addEventListener('click',function(){
	yin.style.display='block';
xin.style.display='none';
zin.style.display='none';
});

z.addEventListener('click',function(){
yin.style.display='none';
xin.style.display='none';
zin.style.display='block';
});
