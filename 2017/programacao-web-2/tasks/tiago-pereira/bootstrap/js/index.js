/*Aluno: Tiago Pereira Coelho RA:1634119 Turma:ES71 */
var $doc = $('html, body');
$('.scrollS').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});
var StringEmail = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i;
var StringNome3 = /[A-z][ ][A-z][ ][A-z]/;
var StringNome2 = /[A-z][ ][A-z]/;
var StringNome1 = /[A-z]/;

function validarnome(nome) {
    if (nome != "") {
        if(! StringNome1.test(nome) && ! StringNome2.test(nome) && ! StringNome3.test(nome)) {
         alert("Nome Invalido");
         nome.focus();
         return false;
        }
    }
}
function validaremail(email) {
    if (email != "") {
        if(! StringEmail.test(email)) {
         alert("Email Invalido");
         email.focus();
         return false;
        }
    }
}
