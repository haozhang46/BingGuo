;jQuery.fn.extend({
	wf_bot:function(){

		$(this).each(function(index,key){
		  	//获取wrap 在用户适口的位置 
			$(function(){
				
			})
        	$(window).scroll(function(){
               
                	console.log($(key)[0].getBoundingClientRect().bottom);


                	//在wrap到底时触发
                	if($(key)[0].getBoundingClientRect().bottom<=0){
                		// console.log("触发");
                		//ajax
                	}
        	})
            
        	
  
		})
	}
})