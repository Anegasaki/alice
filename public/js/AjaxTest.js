function AjaxTest() {
    var test_a = $("#test_a").val();
    var test_b = $("#test_b").val();
    var test_c = $("#test_c").val();

    $.ajax({
       type : "POST",
       url  : "ajax/ajax-test",
       data : {
          "test_a" : test_a,
          "test_b" : test_b,
          "test_c" : test_c,
       },
       success : function(response) 
       {
           var result = JSON.parse(response);
//           var result = JSON.parse(response).result;
           console.log(result.test_a);
           alert('result');
       },
       error   : function()
       {
           alert('撃沈');
       }
    });
}
