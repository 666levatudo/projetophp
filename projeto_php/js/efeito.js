
$(function () {
    var user = $("#user");
    var empy = $("#empy");
    var contrato = $("#contrato");
    var aluno = $("#aluno");
    var container = $("#container");
    contrato.hide();
    user.click(function(){
        aluno.fadeIn( 1000 );
        contrato.fadeOut( 1000 );
        user.css("background","#edecec");
        empy.css("background","none");
    });
    empy.click(function(){
       aluno.fadeOut( 1000 );
        contrato.fadeIn( 1000 );
        empy.css("background","#edecec");
        user.css("background","none");
        
    });
});
