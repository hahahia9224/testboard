function completeInsertTestboard(ret_obj) {
    var error = ret_obj['error'];
    var message = ret_obj['message'];
    var page = ret_obj['page'];
    if(message=='success')
 	   alert("글 등록 완료");
    var url = default_url + "?module=testboard";
    location.href = url;
}
function completeDeleteTestboard(ret_obj) {
    var error = ret_obj['error'];
    var message = ret_obj['message'];
    var page = ret_obj['page'];
    if(message=='success')
 	   alert("글 삭제 완료");
    var url = default_url + "?module=testboard";
    location.href = url;
}