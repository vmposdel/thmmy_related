<?php
if(!isset($_SESSION['userid']))
{
?>
<div class = "description_login_boxes">
<p class = "description_login_titles">
Είσοδος πράκτορα
</p>
<p class = "description_login_main">
Πράκτορες μπορούν να εισέρχονται για την λήψη πληροφοριών σχετικά με την τρέχουσα αποστολή τους, με το ιστορικό των εγκληματιών που καταδιώκουν, με τα στοιχεία επικοινωνίας του διαχειριστή τους κ.α. 
</p>
</div>
<div class = "description_login_boxes">
<p class = "description_login_titles">
Είσοδος διαχειριστή
</p>
<p class = "description_login_main">
Διαχειριστές μπορούν να βλέπουν τους πράκτορες που συντονίζουν, την πρόοδο τους, καθώς και να επιτελέσουν την αναγκαία αξιολόγηση τους, μετά το πέρας μιας αποστολής.
</p>
</div>
<?php
}

?>
