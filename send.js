
$("#submit").click(function(){
     
    $.ajax({
       url : 'contactme2.php',
       type : 'POST',
       dataType : 'html',
       data : $("#msg").serialize(),
       success : function(code_html, statut){
           $('#result').html(code_html);
       },

       error : function(resultat, statut, erreur){
       	 console.log(erreur);
       },

       complete : function(resultat, statut){
       	console.log("test");
       }

    });
   
});
