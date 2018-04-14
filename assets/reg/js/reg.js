 	 var z=document.getElementById('content1');
     var y =document.getElementById('content2');
 var x=document.getElementById('firstbtn');
x.addEventListener('click',function()
{

     y.style.display='block';
     z.style.display='none';

});

var m=document.getElementById('back1');
m.addEventListener('click',function()
{
          y.style.display='none';
     z.style.display='block';

});



//for graduation div
var gra= document.getElementById('graduate');
var inte= document.getElementById('intermed');

var selector = document.getElementById('coll');
 var value = selector[selector.selectedIndex].text;
var gar= document.getElementById('gr');

var hs = document.getElementById('hs');
var inter= document.getElementById('inter');

 if((value== 'GRADUATE') )
 {
 	gra.style.display= 'block';

 }
 else if((value== 'INTERMEDIATE'))
 {
 	inte.style.display= 'block';
 }
 
 gar.addEventListener('click',function(){gra.style.display= 'block';inte.style.display= 'block';});

hs.addEventListener('click',function(){gra.style.display= 'none';inte.style.display= 'none';});
inter.addEventListener('click',function(){gra.style.display= 'none';
                                           inte.style.display= 'block';});
