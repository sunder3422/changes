
/*
var x = document.getElementById('ad');
var z = document.getElementById('us');
var y = document.getElementById('img');
var m1 = x.options[x.selectedIndex].text;
var m2= z.options[z.selectedIndex].text;
if(x.m1 == 'user')
{
	y.src="http://localhost/IM/assets/login/images/student.png";
}
if(z.m2 == 'admin')
{
	y.src="http://localhost/IM/assets/login/images/admin.png";
}

x.addEventListener('click',function()
{
	var y = document.getElementById('img');
	

});
z.addEventListener('click',function()
{
	
	y.src="http://localhost/IM/assets/login/images/user.png";

});
*/
var selector = document.getElementById('suun');
 var value = selector[selector.selectedIndex].text;
var y = document.getElementById('img');
var x = document.getElementById('ad');
var z = document.getElementById('us');
var w= document.getElementById('opa');

    
 
    	if(value == 'USER')
      {

    	y.src="http://localhost/IM/assets/login/images/student.png";
    }
    else if(value == 'ADMIN'){
          y.src="http://localhost/IM/assets/login/images/admin.png";
    }else if(value == 'OPERATOR')
    {
    	y.src="http://localhost/IM/assets/login/images/operator.png";
    }
    x.addEventListener('click',function(){y.src="http://localhost/IM/assets/login/images/admin.png";});
    z.addEventListener('click',function(){y.src="http://localhost/IM/assets/login/images/student.png";});
    w.addEventListener('click',function(){y.src="http://localhost/IM/assets/login/images/operator.png";});
