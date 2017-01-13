function digg(cid,d,mid){
	var arr = GetCookie('diggid'+cid);
	var saveid;
	var getding;
	if(arr !=null)
	{
		saveid=arr[0];
		getding = arr[1];
	}
	if (saveid == cid) {
		alert("您已经评价过");
		if(d==1 && getding ==1)
		{
			$('#up'+cid).css('color','red');
			$('#up'+cid).css('background-position','2px -190px');
		}
		else if(d==0 && getding ==0)
		{
			$('#down'+cid).css('color','red');
			$('#down'+cid).css('background-position','2px -230px');
		}
	} else{
		var isding = 1;
		$.get("/index.php?m=content&c=index&a=digg",
			  { modelid:mid, id: cid, digg:d},
			  function (r){
			    if(d==1){
			    	$('#up'+cid).html(r);
					$('#up'+cid).css('color','red');
					$('#up'+cid).css('background-position','2px -190px');
			    } else {
			    	$('#down'+cid).html(r);
					$('#down'+cid).css('color','red');
					$('#down'+cid).css('background-position','2px -230px');
			    }
			  });
		if(d==1)
		{
			isding = 1;
		}			
		else
		{
			isding=0;
		}
		SetCookie('diggid'+cid,cid,1,isding,d);
	}
}
 
function  updateDingCai()
{
	var cookieStr = document.cookie;
	var reg = /diggid[0-9]*=[0-9]*#/g;
	var arr =[],m;
	
	while(m=reg.exec(cookieStr))
	{
		arr.push(m[0]);	
	}
	var c_start=0; 
	var c_end=0;
	var str;
	if(arr.length>0)
	{
		for(var i=0; i<arr.length; i++)
		{
			str = arr[i];
			c_start = str.indexOf("=");
			c_end = str.indexOf("#");
			var getding = unescape(str.substring(c_start+1,c_start+2));
			var d= unescape(str.substring(c_start+2,c_start+3));
			var cid = unescape(str.substring(c_start+3,c_end));
			//alert("getding:"+getding+"d:"+d+"cid:"+cid);
			if(d==1 && getding ==1)
			{
				$('#up'+cid).css('color','red');
				$('#up'+cid).css('background-position','2px -190px');
			}
			else if(d==0 && getding ==0)
			{
				$('#down'+cid).css('color','red');
				$('#down'+cid).css('background-position','2px -230px');
			}
		}
	}
	
} 
 
function GetCookie(c_name)
{
    if (document.cookie.length > 0)
    {
		c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1)
        {
            c_start = c_start + c_name.length + 3;
            c_end   = document.cookie.indexOf("#",c_start);
            if (c_end == -1)
            {
                c_end = document.cookie.length-1;
            }
            return [unescape(document.cookie.substring(c_start,c_end)),unescape(document.cookie.substring(c_start-2,c_start-1))];
        }
    }
    return null
}
 
function SetCookie(c_name,value,expiredays,isding,d)
{
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + expiredays);
    document.cookie = c_name + "=" +escape(isding)+escape(d)+escape(value)+"#" + ";expires=" + exdate.toGMTString(); //使设置的有效时间正确。增加toGMTString()
}
