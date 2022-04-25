$('.socialLink').editable(
    {
        validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        },
        mode: 'inline'}
);
$('#title').editable(
	{
		validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        },
        mode: 'inline'}
);
$('#meta_key').editable(
	{
		validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        },
        mode: 'inline'}
);
$('#meta_content').editable(
	{
		validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        },
        mode: 'inline'}
);
$('#email').editable(
	{
		validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        },
        mode: 'inline'}
);
$('#contact').editable(
	{
		// validate: function(value) {
  //           if(isNaN(value) == true) return 'Enter Number';
  //       },
        mode: 'inline'}
);
$('#address').editable(
	{
		validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        },
        mode: 'inline'}
);
$('#about').editable(
	{
		validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        },
        mode: 'inline'}
);
$('#meta_key').editable(
    {
        validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        },
        mode: 'inline'}
);
$('#meta_content').editable(
    {
        validate: function(value) {
            if($.trim(value) == '') return 'This field is required';
        },
        mode: 'inline'}
);

$('#logo-img').click(function(){
    
});
$(document).ready(function(){
    $('.callevetdb').dblclick(function(){
            var column =$(this).data('typeshow');
            var oldImage =$('#logo-img').attr('src');
            var serverUrl =$(this).data('url');
            var id =$(this).data('pk');
                    // var teacher_data = data;
//                            console.log(subject_data);
            var eventDone=$(".logoshow").html('<input type="file" id="select_logo" class="form-control-static" name="image" data-url="'+serverUrl+'" data-pk="'+id+'"  />');
            $.when(eventDone).done(function(){
                $("#select_logo").change(function(e){
                        // e.stopPropagation();
                        files = e.target.files;
                         var data = new FormData();
                        $.each(files, function(key, value)
                        {
                            //data.append(key, value);
                            data.append('image', value);
                        });
                        data.append('id', id);
                        data.append('oldImage', oldImage);
                        data.append('column', column);
                        // for (var pair of data.entries()) {
                        //     console.log(pair[0]+ ', ' + pair[1]); 
                        // }
                        $.ajax({
                            type: "POST",
                            enctype: 'multipart/form-data',
                            url: serverUrl,
                            data: data,
                            cache: false,
                            contentType : false,
                            processData : false,
                            success: function (data) {
                                var newImage='<img  id="logo-img" src="'+data+'" width="100px" height="100px"  alt="">';
                                $('.callevetdb').html(newImage);
                                //console.log("File available at: ", data);
                            },
                            error: function (data) {
                                var obj = jQuery.parseJSON(data);
                                alert(obj.error);
                            }
                        });

                });
                // $(document).click(function(){
                //     var newImage='<img  id="logo-img" src="'+oldImage+'" width="100px" height="100px"  alt="">';
                //     $(document).unbind();
                //    $('.callevetdb').html(newImage);
                // });
                 //
            });
        });
});
$(document).ready(function(){
    $('.calleveticondb').dblclick(function(){
            var column =$(this).data('typeshow');
            var oldImage =$('#icon-img').attr('src');
            var serverUrl =$(this).data('url');
            var id =$(this).data('pk');
                    // var teacher_data = data;
//                            console.log(subject_data);
            var eventDone=$(".iconshow").html('<input type="file" id="select_icon" class="form-control-static" name="image" data-url="'+serverUrl+'" data-pk="'+id+'"  />');
            $.when(eventDone).done(function(){
                $("#select_icon").change(function(e){
                        // e.stopPropagation();
                        files = e.target.files;
                         var data = new FormData();
                        $.each(files, function(key, value)
                        {
                            //data.append(key, value);
                            data.append('image', value);
                        });
                        data.append('id', id);
                        data.append('oldImage', oldImage);
                        data.append('column', column);
                        // for (var pair of data.entries()) {
                        //     console.log(pair[0]+ ', ' + pair[1]); 
                        // }
                        $.ajax({
                            type: "POST",
                            enctype: 'multipart/form-data',
                            url: serverUrl,
                            data: data,
                            cache: false,
                            contentType : false,
                            processData : false,
                            success: function (data) {
                                var newImage='<img  id="icon-img" src="'+data+'" width="100px" height="100px"  alt="">';
                                $('.calleveticondb').html(newImage);
                                //console.log("File available at: ", data);
                            },
                            error: function (data) {
                                var obj = jQuery.parseJSON(data);
                                alert(obj.error);
                            }
                        });

                });
                // $(document).click(function(){
                //     var newImage='<img  id="logo-img" src="'+oldImage+'" width="100px" height="100px"  alt="">';
                //     $(document).unbind();
                //    $('.callevetdb').html(newImage);
                // });
                 //
            });
        });
});