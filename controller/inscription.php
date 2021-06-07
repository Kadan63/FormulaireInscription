<?php 
if(empty($_POST['name'])):
    echo "Tu sais plus comment tu t'appelles ?";
  elseif(empty($_POST['email'])):
    echo "Ton adresse mail, parce que sinon je vois pas bien comment on va pouvoir t'envoyer plein de pubs";
  elseif(empty($_POST['password'])):
    echo "Non mais si tu veux pas que ton compte soit protégé par un mdp libre à toi mais pas de ça chez nous.";
  elseif(empty($_POST['confirmpassord'])):
    echo "Confirme ton mdp, steuplait. Allez.";
  endif;
?>