$(document).ready(function(){
	$(document).on('click','a.delete-button',function(e){		
		e.preventDefault();
		$('<form method="POST" action="'+$(this).attr('href')+'" hidden><input name="_method" value="DELETE"></form>').appendTo('body').submit();
		//console.log($(this))
	})
})
