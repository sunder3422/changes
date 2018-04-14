


//progress bar1 //REGISTRATOIN 
  var ctx=document.getElementById('mycan').getContext('2d');
var al=80;
var start = 4.72;
var cw = ctx.canvas.width;
var ch= ctx.canvas.height;
var diff;
function progressSim()
{
  diff= ((al/100) * Math.PI*2*10).toFixed(2);
  ctx.clearRect(0,0,cw,ch);
  ctx.lineWidth=30;
    ctx.strokeStyle="#09F";
    ctx.textAlign='center';
    ctx.fillText(al+'%',cw*.5, ch*.5+2,cw);
    ctx.beginPath();
    ctx.arc(90,90,65,start,diff/10+start, false);
    ctx.stroke();
       // if(al >=100){
       //   clearTimeout(sim);
      //  }
   // al++;
    ctx.closePath();
} 
var sim= setInterval(progressSim, 50);

//PROGRESS BAR2 //VIEWERS
//progress bar1 //REGISTRATOIN 
  var ctxx=document.getElementById('mycan1').getContext('2d');

function progressSim1()
{
  diff= ((al/100) * Math.PI*2*10).toFixed(2);
  ctxx.clearRect(0,0,cw,ch);
  ctxx.lineWidth=30;
    ctxx.strokeStyle="black";
    ctxx.textAlign='center';
    ctxx.fillText(al+'%',cw*.5, ch*.5+2,cw);
    ctxx.beginPath();
    ctxx.arc(90,90,65,start,diff/10+start, false);
    ctxx.stroke();
       // if(al >=100){
       //   clearTimeout(sim);
      //  }
   // al++;
  ctxx.closePath();
}
var sim1= setInterval(progressSim1, 50);

//PROGRESS BAR2 //VIEWER3
//progress bar1 //REGISTRATOIN3
  var ctx2=document.getElementById('mycan2').getContext('2d');
function progressSim2()
{
  diff= ((al/100) * Math.PI*2*10).toFixed(2);
  ctx2.clearRect(0,0,cw,ch);
  ctx2.lineWidth=30;
    ctx2.strokeStyle="red";
    ctx2.textAlign='center';
    ctx2.fillText(al+'%',cw*.5, ch*.5+2,cw);
    ctx2.beginPath();
    ctx2.arc(90,90,65,start,diff/10+start, false);

    ctx2.stroke();
       // if(al >=100){
       //   clearTimeout(sim);
      //  }
   // al++;
    ctxx.closePath();
} 
var sim2= setInterval(progressSim2, 50);
//PROGRESS BAR2 //VIEWERS
//progress bar1 //REGISTRATOIN 
  var ctx3=document.getElementById('mycan3').getContext('2d');

function progressSim3()
{
  diff= ((al/100) * Math.PI*2*10).toFixed(2);
  ctx3.clearRect(0,0,cw,ch);
  ctx3.lineWidth=30;
    ctx3.strokeStyle="green";
    ctx3.textAlign='center';
    ctx3.fillText(al+'%',cw*.5, ch*.5+2,cw);
    ctx3.beginPath();
    ctx3.arc(90,90,65,start,diff/10+start, false);
    ctx3.stroke();
       // if(al >=100){
       //   clearTimeout(sim);
      //  }
   // al++;
    ctx3.closePath();
} 
var sim3= setInterval(progressSim3, 50);



  var ctx4=document.getElementById('mycan4').getContext('2d');
function progressSim4()
{
  diff= ((al/100) * Math.PI*2*10).toFixed(2);
  ctx4.clearRect(0,0,cw,ch);
  ctx4.lineWidth=30;
    ctx4.strokeStyle="rgb(159,6,88)";
    ctx4.textAlign='center';
    ctx4.fillText(al+'%',cw*.5, ch*.5+2,cw);
    ctx4.beginPath();
    ctx4.arc(90,90,65,start,diff/10+start, false);
    ctx4.stroke();
       // if(al >=100){
       //   clearTimeout(sim);
      //  }
   // al++;
    ctx5.closePath();
} 
var sim4= setInterval(progressSim4, 50);


  var ctx5=document.getElementById('mycan5').getContext('2d');
function progressSim5()
{
  diff= ((al/100) * Math.PI*2*10).toFixed(2);
  ctx5.clearRect(0,0,cw,ch);
  ctx5.lineWidth=30;
    ctx5.strokeStyle="rgb(59,22,88)";
    ctx5.textAlign='center';
    ctx5.fillText(al+'%',cw*.5, ch*.5+2,cw);
    ctx5.beginPath();
    ctx5.arc(90,90,65,start,diff/10+start, false);
    ctx5.stroke();
       // if(al >=100){
       //   clearTimeout(sim);
      //  }
   // al++;
    ctx5.closePath();
} 
var sim5= setInterval(progressSim5, 50);